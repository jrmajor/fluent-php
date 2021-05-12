<?php

namespace Major\Fluent\Parser;

use Major\Fluent\Exceptions\ParserException;
use Major\Fluent\Exceptions\ShouldNotHappen;
use Major\Fluent\Node\Syntax\Annotation;
use Major\Fluent\Node\Syntax\Attribute;
use Major\Fluent\Node\Syntax\CallArguments;
use Major\Fluent\Node\Syntax\Entries\Comments\BaseComment;
use Major\Fluent\Node\Syntax\Entries\Comments\Comment;
use Major\Fluent\Node\Syntax\Entries\Comments\GroupComment;
use Major\Fluent\Node\Syntax\Entries\Comments\ResourceComment;
use Major\Fluent\Node\Syntax\Entries\Entry;
use Major\Fluent\Node\Syntax\Entries\Message;
use Major\Fluent\Node\Syntax\Entries\Term;
use Major\Fluent\Node\Syntax\Expressions\Expression;
use Major\Fluent\Node\Syntax\Expressions\FunctionReference;
use Major\Fluent\Node\Syntax\Expressions\Literals\Literal;
use Major\Fluent\Node\Syntax\Expressions\Literals\NumberLiteral;
use Major\Fluent\Node\Syntax\Expressions\Literals\StringLiteral;
use Major\Fluent\Node\Syntax\Expressions\MessageReference;
use Major\Fluent\Node\Syntax\Expressions\SelectExpression;
use Major\Fluent\Node\Syntax\Expressions\TermReference;
use Major\Fluent\Node\Syntax\Expressions\VariableReference;
use Major\Fluent\Node\Syntax\FluentResource;
use Major\Fluent\Node\Syntax\Identifier;
use Major\Fluent\Node\Syntax\Junk;
use Major\Fluent\Node\Syntax\NamedArgument;
use Major\Fluent\Node\Syntax\Patterns\Pattern;
use Major\Fluent\Node\Syntax\Patterns\PatternElement;
use Major\Fluent\Node\Syntax\Patterns\Placeable;
use Major\Fluent\Node\Syntax\Patterns\TextElement;
use Major\Fluent\Node\Syntax\Variant;

class FluentParser
{
    public function __construct(
        private bool $strict = false,
    ) { }

    public function parse(string $source): FluentResource
    {
        $cursor = new FluentCursor($source);

        $cursor->skipBlankBlock();

        /** @var array<Message|Term|Comment|Junk> */
        $entries = [];

        /** @var ?Comment */
        $lastComment = null;

        while (($cursor->currentChar()) !== null) {
            $entry = $this->getEntryOrJunk($cursor);

            $blankLines = $cursor->skipBlankBlock();

            if (
                $entry instanceof Junk
                && ! empty($entry->annotations)
                && $this->strict
            ) {
                throw new ParserException(
                    $entry->annotations[0]->code,
                    $entry->annotations[0]->arguments,
                    $entry->content,
                );
            }

            // Comments may be attached to Messages or Terms if they are followed
            // immediately by them. However they should parse as standalone when
            // they're followed by Junk. Consequently, we only attach Comments once
            // we know that the Message or the Term parsed successfully.
            if (
                $entry instanceof Comment
                && ! mb_strlen($blankLines)
                && $cursor->currentChar() !== null
            ) {
                // Stash the comment and decide what to do with it in the next pass.
                $lastComment = $entry;

                continue;
            }

            if ($lastComment) {
                if ($entry instanceof Message || $entry instanceof Term) {
                    $entry->comment = $lastComment;

                    /** @phpstan-ignore-next-line */
                    $entry->span->start = $entry->comment->span->start;
                } else {
                    $entries[] = $lastComment;
                }

                $lastComment = null;
            }

            $entries[] = $entry;
        }

        return (new FluentResource($entries))
            ->addSpan(0, $cursor->index());
    }

    /**
     * Parse the first Message or Term in source.
     *
     * Skip all encountered comments and start parsing at the first Message
     * or Term start. Return Junk if the parsing is not successful.
     *
     * Preceding comments are ignored unless they contain syntax errors
     * themselves, in which case Junk for the invalid comment is returned.
     */
    public function parseEntry(string $source): Entry|Junk
    {
        $cursor = new FluentCursor($source);
        $cursor->skipBlankBlock();

        while ($cursor->currentChar() === '#') {
            $skipped = $this->getEntryOrJunk($cursor);

            if ($skipped instanceof Junk) {
                return $skipped;
            }

            $cursor->skipBlankBlock();
        }

        return $this->getEntryOrJunk($cursor);
    }

    private function getEntryOrJunk(FluentCursor $cursor): Entry|Junk
    {
        $entryStartPosition = $cursor->index();

        try {
            $entry = $this->getEntry($cursor);

            $cursor->expectLineEnd();

            return $entry;
        } catch (ParserException $error) {
            $errorIndex = $cursor->index();

            $cursor->skipToNextEntryStart($entryStartPosition);

            $nextEntryStart = $cursor->index();

            if ($nextEntryStart < $errorIndex) {
                // The position of the error must be inside of the Junk's span.
                $errorIndex = $nextEntryStart;
            }

            $annotation = (new Annotation(
                $error->getFluentErrorCode(),
                $error->getMessage(),
                $error->getArguments(),
            ))->addSpan($errorIndex, $errorIndex);

            $junk = new Junk(
                $cursor->slice($entryStartPosition, $nextEntryStart),
            );

            return $junk
                ->addSpan($entryStartPosition, $nextEntryStart)
                ->addAnnotation($annotation);
        }
    }

    private function getEntry(FluentCursor $cursor): Entry
    {
        if ($cursor->currentChar() === '#') {
            return $this->getComment($cursor);
        }

        if ($cursor->currentChar() === '-') {
            return $this->getTerm($cursor);
        }

        if ($cursor->isIdentifierStart()) {
            return $this->getMessage($cursor);
        }

        throw new ParserException('E0002');
    }

    private function getComment(FluentCursor $cursor): BaseComment
    {
        $spanStart = $cursor->index();

        $content = '';

        while (true) {
            $i = -1;

            while ($cursor->currentChar() === '#' && ($i < ($level ?? 2))) {
                $cursor->next();

                $i++;
            }

            $level = $i;

            if ($cursor->currentChar() !== "\n") {
                $cursor->expectChar(' ');

                while (($char = $cursor->takeChar(fn ($x) => $x !== "\n")) !== null) {
                    $content .= $char;
                }
            }

            if ($cursor->nextLineIsComment($level)) {
                $content .= $cursor->currentChar();

                $cursor->next();
            } else {
                break;
            }
        }

        return (match ($level) {
            0 => new Comment($content),
            1 => new GroupComment($content),
            2 => new ResourceComment($content),
        })->addSpan($spanStart, $cursor->index());
    }

    private function getMessage(FluentCursor $cursor): Message
    {
        $spanStart = $cursor->index();

        $id = $this->getIdentifier($cursor);

        $cursor->skipBlankInline();

        $cursor->expectChar('=');

        $value = $this->maybeGetPattern($cursor);

        $attributes = $this->getAttributes($cursor);

        if (! $value && ! count($attributes)) {
            throw new ParserException('E0005', ['id' => $id->name]);
        }

        return (new Message($id, $value, $attributes))
            ->addSpan($spanStart, $cursor->index());
    }

    private function getTerm(FluentCursor $cursor): Term
    {
        $spanStart = $cursor->index();

        $cursor->expectChar('-');

        $id = $this->getIdentifier($cursor);

        $cursor->skipBlankInline();

        $cursor->expectChar('=');

        $value = $this->maybeGetPattern($cursor);

        if (! $value) {
            throw new ParserException('E0006', ['id' => $id->name]);
        }

        $attributes = $this->getAttributes($cursor);

        return (new Term($id, $value, $attributes))
            ->addSpan($spanStart, $cursor->index());
    }

    private function getIdentifier(FluentCursor $cursor): Identifier
    {
        $spanStart = $cursor->index();

        $name = $cursor->takeIdStart();

        while (($char = $cursor->takeIdChar()) !== null) {
            $name .= $char;
        }

        return (new Identifier($name))
            ->addSpan($spanStart, $cursor->index());
    }

    /**
     * @return Attribute[]
     */
    private function getAttributes(FluentCursor $cursor): array
    {
        /** @var Attribute[] */
        $attributes = [];

        $cursor->peekBlank();

        while ($cursor->isAttributeStart()) {
            $cursor->skipToPeek();

            $attributes[] = $this->getAttribute($cursor);

            $cursor->peekBlank();
        }

        return $attributes;
    }

    private function getAttribute(FluentCursor $cursor): Attribute
    {
        $spanStart = $cursor->index();

        $cursor->expectChar('.');

        $key = $this->getIdentifier($cursor);

        $cursor->skipBlankInline();

        $cursor->expectChar('=');

        $value = $this->maybeGetPattern($cursor);

        if (! $value) {
            throw new ParserException('E0012');
        }

        return (new Attribute($key, $value))
            ->addSpan($spanStart, $cursor->index());
    }

    /**
     * @return Variant[]
     */
    private function getVariants(FluentCursor $cursor): array
    {
        /** @var Variant[] */
        $variants = [];
        $hasDefault = false;

        $cursor->skipBlank();

        while ($cursor->isVariantStart()) {
            $variant = $this->getVariant($cursor, $hasDefault);

            if ($variant->default) {
                $hasDefault = true;
            }

            $variants[] = $variant;

            $cursor->expectLineEnd();

            $cursor->skipBlank();
        }

        if (! count($variants)) {
            throw new ParserException('E0011');
        }

        if (! $hasDefault) {
            throw new ParserException('E0010');
        }

        return $variants;
    }

    private function getVariant(FluentCursor $cursor, bool $hasDefault = false): Variant
    {
        $spanStart = $cursor->index();

        $defaultIndex = false;

        if ($cursor->currentChar() === '*') {
            if ($hasDefault) {
                throw new ParserException('E0015');
            }

            $cursor->next();

            $defaultIndex = true;
        }

        $cursor->expectChar('[');

        $cursor->skipBlank();

        $key = $this->getVariantKey($cursor);

        $cursor->skipBlank();

        $cursor->expectChar(']');

        $value = $this->maybeGetPattern($cursor);

        if (! $value) {
            throw new ParserException('E0012');
        }

        return (new Variant($key, $value, $defaultIndex))
            ->addSpan($spanStart, $cursor->index());
    }

    private function getVariantKey(FluentCursor $cursor): Identifier|NumberLiteral
    {
        $char = $cursor->currentChar();

        if ($char === null) {
            throw new ParserException('E0013');
        }

        $cc = mb_ord($char);

        if (
            ($cc >= 48 && $cc <= 57) // 0-9
            || $cc === 45 // -
        ) {
            return $this->getNumber($cursor);
        }

        return $this->getIdentifier($cursor);
    }

    /**
     * maybeGetPattern distinguishes between patterns which start on the same line
     * as the identifier (a.k.a. inline signleline patterns and inline multiline
     * patterns) and patterns which start on a new line (a.k.a. block multiline
     * patterns). The distinction is important for the dedentation logic: the
     * indent of the first line of a block pattern must be taken into account when
     * calculating the maximum common indent.
     */
    private function maybeGetPattern(FluentCursor $cursor): ?Pattern
    {
        $cursor->peekBlankInline();

        if ($cursor->isValueStart()) {
            $cursor->skipToPeek();

            return $this->getPattern($cursor, block: false);
        }

        $cursor->peekBlankBlock();

        if ($cursor->isValueContinuation()) {
            $cursor->skipToPeek();

            return $this->getPattern($cursor, block: true);
        }

        return null;
    }

    private function getPattern(FluentCursor $cursor, bool $block): Pattern
    {
        $spanStart = $cursor->index();

        /** @var array<PatternElement|Indent> */
        $elements = [];

        if ($block) {
            // A block pattern is a pattern which starts on a new line. Store and
            // measure the indent of this first line for the dedentation logic.
            $blankStart = $cursor->index();

            $firstIndent = $cursor->skipBlankInline();

            $elements[] = $this->getIndent($cursor, $firstIndent, $blankStart);

            $commonIndentLength = mb_strlen($firstIndent);
        } else {
            $commonIndentLength = null;
        }

        while (($char = $cursor->currentChar()) !== null) {
            if ($char === "\n") {
                $blankStart = $cursor->index();
                $blankLines = $cursor->peekBlankBlock();

                if ($cursor->isValueContinuation()) {
                    $cursor->skipToPeek();

                    $indent = $cursor->skipBlankInline();

                    $commonIndentLength = ! is_null($commonIndentLength)
                        ? (int) min($commonIndentLength, mb_strlen($indent))
                        : mb_strlen($indent);

                    $elements[] = $this->getIndent($cursor, $blankLines.$indent, $blankStart);

                    continue;
                }

                // The end condition for getPattern's while loop is a newline
                // which is not followed by a valid pattern continuation.
                $cursor->resetPeek();

                break;
            }

            if ($char === '{') {
                $elements[] = $this->getPlaceable($cursor);

                continue;
            }

            if ($char === '}') {
                throw new ParserException('E0027');
            }

            $elements[] = $this->getTextElement($cursor);
        }

        $dedented = $this->dedent($elements, $commonIndentLength);

        return (new Pattern($dedented))
            ->addSpan($spanStart, $cursor->index());
    }

    /**
     * Create a token representing an indent. It's not part of the AST and it will
     * be trimmed and merged into adjacent TextElements, or turned into a new
     * TextElement, if it's surrounded by two Placeables.
     */
    private function getIndent(FluentCursor $cursor, string $value, int $start): Indent
    {
        return new Indent($value, $start, $cursor->index());
    }

    /**
     * Dedent a list of elements by removing the maximum common indent from the
     * beginning of text lines. The common indent is calculated in getPattern.
     *
     * @param array<PatternElement|Indent> $elements
     * @return PatternElement[]
     */
    private function dedent(array $elements, ?int $commonIndent): array
    {
        /** @var PatternElement[] */
        $trimmed = [];

        foreach ($elements as $element) {
            if ($element instanceof Placeable) {
                $trimmed[] = $element;

                continue;
            }

            if ($element instanceof Indent) {
                $element->stripCommonIndent($commonIndent);

                if (! mb_strlen($element->value)) {
                    continue;
                }
            }

            $prev = $trimmed[count($trimmed) - 1] ?? null;

            if ($prev && $prev instanceof TextElement) {
                // Join adjacent TextElements by replacing them with their sum.
                /** @phpstan-ignore-next-line */
                $sum = (new TextElement($prev->value.$element->value))
                    ->addSpan($prev->span->start, $element->span->end); /** @phpstan-ignore-line */

                $trimmed[count($trimmed) - 1] = $sum;

                continue;
            }

            if ($element instanceof Indent) {
                // If the indent hasn't been merged into a preceding TextElement,
                // convert it into a new TextElement.
                $textElement = (new TextElement($element->value))
                    ->addSpan($element->span->start, $element->span->end);

                $element = $textElement;
            }

            $trimmed[] = $element;
        }

        // Trim trailing whitespace from the Pattern.
        $lastElement = $trimmed[count($trimmed) - 1];

        if ($lastElement instanceof TextElement) {
            $lastElement->value = rtrim($lastElement->value);

            if (! mb_strlen($lastElement->value)) {
                array_pop($trimmed);
            }
        }

        return $trimmed;
    }

    private function getTextElement(FluentCursor $cursor): TextElement
    {
        $spanStart = $cursor->index();

        $buffer = '';

        while (($char = $cursor->currentChar()) !== null) {
            if ($char === '{' || $char === '}') {
                return (new TextElement($buffer))
                    ->addSpan($spanStart, $cursor->index());
            }

            if ($char === "\n") {
                return (new TextElement($buffer))
                    ->addSpan($spanStart, $cursor->index());
            }

            $buffer .= $char;

            $cursor->next();
        }

        return (new TextElement($buffer))
            ->addSpan($spanStart, $cursor->index());
    }

    private function getPlaceable(FluentCursor $cursor): Placeable
    {
        $spanStart = $cursor->index();

        $cursor->expectChar('{');

        $cursor->skipBlank();

        $expression = $this->getExpression($cursor);

        $cursor->expectChar('}');

        return (new Placeable($expression))
            ->addSpan($spanStart, $cursor->index());
    }

    private function getExpression(FluentCursor $cursor): Expression|Placeable
    {
        $spanStart = $cursor->index();

        $selector = $this->getInlineExpression($cursor);

        $cursor->skipBlank();

        if ($cursor->currentChar() === '-') {
            if ($cursor->peek() !== '>') {
                $cursor->resetPeek();

                return $selector;
            }

            // Validate selector expression according to
            // abstract.js in the Fluent specification
            if ($selector instanceof MessageReference) {
                match ($selector->attribute) {
                    null => throw new ParserException('E0016'),
                    default => throw new ParserException('E0018'),
                };
            } elseif ($selector instanceof TermReference) {
                if (! $selector->attribute) {
                    throw new ParserException('E0017');
                }
            } elseif ($selector instanceof Placeable) {
                throw new ParserException('E0029');
            }

            $cursor->next(2);

            $cursor->skipBlankInline();

            $cursor->expectLineEnd();

            $variants = $this->getVariants($cursor);

            return (new SelectExpression($selector, $variants))
                ->addSpan($spanStart, $cursor->index());
        }

        if ($selector instanceof TermReference && $selector->attribute) {
            throw new ParserException('E0019');
        }

        return $selector;
    }

    private function getInlineExpression(FluentCursor $cursor): Expression|Placeable
    {
        $spanStart = $cursor->index();

        if ($cursor->currentChar() === '{') {
            return $this->getPlaceable($cursor);
        }

        if ($cursor->isNumberStart()) {
            return $this->getNumber($cursor);
        }

        if ($cursor->currentChar() === '"') {
            return $this->getString($cursor);
        }

        if ($cursor->currentChar() === '$') {
            $cursor->next();

            $id = $this->getIdentifier($cursor);

            return (new VariableReference($id))
                ->addSpan($spanStart, $cursor->index());
        }

        if ($cursor->currentChar() === '-') {
            $cursor->next();

            $id = $this->getIdentifier($cursor);

            // PHPStan does not understand, that the cursor has been moved
            /** @phpstan-ignore-next-line */
            if ($cursor->currentChar() === '.') {
                $cursor->next();

                $attribute = $this->getIdentifier($cursor);
            }

            $cursor->peekBlank();

            if ($cursor->currentPeek() === '(') {
                $cursor->skipToPeek();

                $arguments = $this->getCallArguments($cursor);
            }

            return (new TermReference($id, $attribute ?? null, $arguments ?? null))
                ->addSpan($spanStart, $cursor->index());
        }

        if ($cursor->isIdentifierStart()) {
            $id = $this->getIdentifier($cursor);

            $cursor->peekBlank();

            if ($cursor->currentPeek() === '(') {
                // It's a Function. Ensure it's all upper-case.
                if (! preg_match('/^[A-Z][A-Z0-9_-]*$/', $id->name)) {
                    throw new ParserException('E0008');
                }

                $cursor->skipToPeek();

                $arguments = $this->getCallArguments($cursor);

                return (new FunctionReference($id, $arguments))
                    ->addSpan($spanStart, $cursor->index());
            }

            if ($cursor->currentChar() === '.') {
                $cursor->next();

                $attribute = $this->getIdentifier($cursor);
            }

            return (new MessageReference($id, $attribute ?? null))
                ->addSpan($spanStart, $cursor->index());
        }

        throw new ParserException('E0028');
    }

    private function getCallArguments(FluentCursor $cursor): CallArguments
    {
        $spanStart = $cursor->index();

        /** @var Expression[] */
        $positional = [];

        /** @var NamedArgument[] */
        $named = [];

        /** @var string[] */
        $argumentNames = [];

        $cursor->expectChar('(');

        $cursor->skipBlank();

        while (true) {
            if ($cursor->currentChar() === ')') {
                break;
            }

            $argument = $this->getCallArgument($cursor);

            if ($argument instanceof NamedArgument) {
                if (in_array($argument->name->name, $argumentNames, strict: true)) {
                    throw new ParserException('E0022');
                }

                $named[] = $argument;

                $argumentNames[] = $argument->name->name;
            } elseif (count($argumentNames)) {
                throw new ParserException('E0021');
            } else {
                $positional[] = $argument;
            }

            $cursor->skipBlank();

            if ($cursor->currentChar() === ',') {
                $cursor->next();

                $cursor->skipBlank();

                continue;
            }

            break;
        }

        $cursor->expectChar(')');

        return (new CallArguments($positional, $named))
            ->addSpan($spanStart, $cursor->index());
    }

    private function getCallArgument(FluentCursor $cursor): Expression|NamedArgument
    {
        $spanStart = $cursor->index();

        $expression = $this->getInlineExpression($cursor);

        $cursor->skipBlank();

        if ($cursor->currentChar() !== ':') {
            if ($expression instanceof Placeable) {
                throw new ShouldNotHappen(); // @codeCoverageIgnore
            }

            return $expression;
        }

        if ($expression instanceof MessageReference && ! $expression->attribute) {
            $cursor->next();

            $cursor->skipBlank();

            $value = $this->getLiteral($cursor);

            return (new NamedArgument($expression->id, $value))
                ->addSpan($spanStart, $cursor->index());
        }

        throw new ParserException('E0009');
    }

    private function getLiteral(FluentCursor $cursor): Literal
    {
        $spanStart = $cursor->index();

        if ($cursor->isNumberStart()) {
            return $this->getNumber($cursor)
                ->addSpan($spanStart, $cursor->index());
        }

        if ($cursor->currentChar() === '"') {
            return $this->getString($cursor)
                ->addSpan($spanStart, $cursor->index());
        }

        throw new ParserException('E0014');
    }

    private function getNumber(FluentCursor $cursor): NumberLiteral
    {
        $spanStart = $cursor->index();

        $value = '';

        if ($cursor->currentChar() === '-') {
            $cursor->next();

            $value .= '-'.$this->getDigits($cursor);
        } else {
            $value .= $this->getDigits($cursor);
        }

        if ($cursor->currentChar() === '.') {
            $cursor->next();

            $value .= '.'.$this->getDigits($cursor);
        }

        return (new NumberLiteral($value))
            ->addSpan($spanStart, $cursor->index());
    }

    private function getDigits(FluentCursor $cursor): string
    {
        $number = '';

        while (($char = $cursor->takeDigit()) !== null) {
            $number .= $char;
        }

        if (! mb_strlen($number)) {
            throw new ParserException('E0004', ['range' => '0-9']);
        }

        return $number;
    }

    private function getString(FluentCursor $cursor): StringLiteral
    {
        $spanStart = $cursor->index();

        $cursor->expectChar('"');

        $value = '';

        while (($char = $cursor->takeChar(fn ($x) => $x !== '"' && $x !== "\n")) !== null) {
            if ($char === '\\') {
                $value .= $this->getEscapeSequence($cursor);
            } else {
                $value .= $char;
            }
        }

        if ($cursor->currentChar() === "\n") {
            throw new ParserException('E0020');
        }

        $cursor->expectChar('"');

        return (new StringLiteral($value))
            ->addSpan($spanStart, $cursor->index());
    }

    private function getEscapeSequence(FluentCursor $cursor): string
    {
        $next = $cursor->currentChar();

        if ($next === '"' || $next === '\\') {
            $cursor->next();
        }

        return match ($next) {
            '"', '\\' => '\\'.$next,
            'u' => $this->getUnicodeEscapeSequence($cursor, $next, 4),
            'U' => $this->getUnicodeEscapeSequence($cursor, $next, 6),
            default => throw new ParserException('E0025', ['char' => $next]),
        };
    }

    private function getUnicodeEscapeSequence(
        FluentCursor $cursor,
        string $u,
        int $digits,
    ): string
    {
        $cursor->expectChar($u);

        $sequence = '';

        for ($i = 0; $i < $digits; $i++) {
            $char = $cursor->takeHexDigit();

            if ($char === null) {
                throw new ParserException(
                    'E0026', ['sequence' => '\\'.$u.$sequence.$cursor->currentChar()],
                );
            }

            $sequence .= $char;
        }

        return '\\'.$u.$sequence;
    }
}
