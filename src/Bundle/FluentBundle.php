<?php

namespace Major\Fluent\Bundle;

use Exception;
use Major\Fluent\Bundle\Types\FluentNone;
use Major\Fluent\Bundle\Types\FluentNumber;
use Major\Fluent\Bundle\Types\FluentType;
use Major\Fluent\Exceptions\Bundle\MessageExistsException;
use Major\Fluent\Exceptions\Bundle\TermExistsException;
use Major\Fluent\Exceptions\ParserException;
use Major\Fluent\Exceptions\Resolver\CyclicReferenceException;
use Major\Fluent\Exceptions\Resolver\NullPatternException;
use Major\Fluent\Exceptions\Resolver\ReferenceException;
use Major\Fluent\Exceptions\Resolver\ResolverException;
use Major\Fluent\Exceptions\Resolver\TypeException;
use Major\Fluent\Exceptions\ShouldNotHappen;
use Major\Fluent\Node\Syntax\Entries\Message;
use Major\Fluent\Node\Syntax\Entries\Term;
use Major\Fluent\Node\Syntax\Expressions\Expression;
use Major\Fluent\Node\Syntax\Expressions\FunctionReference;
use Major\Fluent\Node\Syntax\Expressions\Literals\NumberLiteral;
use Major\Fluent\Node\Syntax\Expressions\Literals\StringLiteral;
use Major\Fluent\Node\Syntax\Expressions\MessageReference;
use Major\Fluent\Node\Syntax\Expressions\SelectExpression;
use Major\Fluent\Node\Syntax\Expressions\TermReference;
use Major\Fluent\Node\Syntax\Expressions\VariableReference;
use Major\Fluent\Node\Syntax\FluentResource;
use Major\Fluent\Node\Syntax\Identifier;
use Major\Fluent\Node\Syntax\Junk;
use Major\Fluent\Node\Syntax\Patterns\Pattern;
use Major\Fluent\Node\Syntax\Patterns\Placeable;
use Major\Fluent\Node\Syntax\Patterns\TextElement;
use Major\Fluent\Node\Syntax\Variant;
use Major\Fluent\Parser\FluentParser;
use Major\Fluent\PluralRules\PluralRules;

class FluentBundle
{
    /** Unicode BiDi isolation characters. */
    public const FSI = "\u{2068}";
    public const PDI = "\u{2069}";

    /** @var array<string, Message> */
    private array $messages = [];

    /** @var array<string, Term> */
    private array $terms = [];

    /** @var ResolverException[] */
    private array $errors = [];

    public function __construct(
        protected string $locale,
        protected bool $strict = false,
        protected bool $useIsolating = true,
        protected bool $allowOverrides = false,
    ) { }

    public function addResource(
        FluentResource $resource,
        bool $allowOverrides = null,
    ): static {
        $allowOverrides ??= $this->allowOverrides;

        foreach ($resource->body as $entry) {
            if (
                $entry instanceof Junk
                && ! empty($entry->annotations)
                && $this->strict
            ) {
                $annotation = $entry->annotations[0];

                throw new ParserException($annotation->code, $annotation->arguments);
            }

            if ($entry instanceof Message) {
                if (! $allowOverrides && $this->hasMessage($entry->id->name)) {
                    throw new MessageExistsException($entry->id->name);
                }

                $this->messages[$entry->id->name] = $entry;
            }

            if ($entry instanceof Term) {
                if (! $allowOverrides && $this->hasTerm($entry->id->name)) {
                    throw new TermExistsException($entry->id->name);
                }

                $this->terms[$entry->id->name] = $entry;
            }
        }

        return $this;
    }

    public function addRaw(string $ftl, bool $allowOverrides = null): static
    {
        $parser = new FluentParser();

        $this->addResource(
            $parser->parse($ftl),
            $allowOverrides,
        );

        return $this;
    }

    public function hasMessage(string $id): bool
    {
        return array_key_exists($id, $this->messages);
    }

    public function hasTerm(string $id): bool
    {
        return array_key_exists($id, $this->terms);
    }
    private function reportError(ResolverException $error): void
    {
        $this->errors[] = $this->strict ? throw $error : $error;
    }

    /**
     * @return ResolverException[]
     */
    public function popErrors(): array
    {
        $errors = $this->errors;

        $this->errors = [];

        return $errors;
    }

    public function message(string $id, mixed ...$arguments): ?string
    {
        $id = explode('.', $id, limit: 2);

        $message = $this->messages[$id[0]] ?? null;

        if (! $message) {
            return null;
        }

        $attributeId = $id[1] ?? null;

        if (is_null($attributeId)) {
            return $this->resolvePattern($message->value, new ResolutionScope($arguments));
        }

        foreach ($message->attributes as $attribute) {
            if ($attribute->id->name === $attributeId) {
                return $this->resolvePattern($attribute->value, new ResolutionScope($arguments));
            }
        }

        return null;
    }

    private function resolvePattern(
        ?Pattern $pattern,
        ResolutionScope $scope,
    ): string {
        if (! $pattern) {
            $this->reportError(new NullPatternException());

            return (string) new FluentNone();
        }

        if (isset($scope->dirty[$pattern])) {
            $this->reportError(new CyclicReferenceException());

            return (string) new FluentNone();
        }

        $scope->dirty[$pattern] = true;

        $result = '';

        // Wrap interpolations with Directional Isolate Formatting characters
        // only when the pattern has more than one element.
        $useIsolating = $this->useIsolating && count($pattern->elements) > 1;

        foreach ($pattern->elements as $element) {
            if ($element instanceof TextElement) {
                $result .= $element->value;

                continue;
            }

            /** @var Placeable $element */

            $result .= $useIsolating ? self::FSI : '';

            $result .= (string) $this->resolvePlaceable($element, $scope);

            $result .= $useIsolating ? self::PDI : '';
        }

        return $result;
    }

    private function resolvePlaceable(
        Placeable $element,
        ResolutionScope $scope,
    ): FluentType|string {
        return $element->expression instanceof Placeable
            ? $this->resolvePlaceable($element->expression, $scope)
            : $this->resolveExpression($element->expression, $scope);
    }

    private function resolveExpression(
        Expression $expression,
        ResolutionScope $scope,
    ): FluentType|string {
        $method = 'resolve'.$expression->getType();

        return $this->{$method}($expression, $scope);
    }

    private function resolveStringLiteral(
        StringLiteral $literal,
        ResolutionScope $scope,
    ): string {
        return $literal->parse()->value;
    }

    private function resolveNumberLiteral(
        NumberLiteral $literal,
        ResolutionScope $scope,
    ): FluentNumber {
        $parsed = $literal->parse();

        return new FluentNumber($parsed->value, $parsed->precision);
    }

    private function resolveVariableReference(
        VariableReference $reference,
        ResolutionScope $scope,
    ): string|FluentType {
        $id = $reference->id->name;

        if (! is_null($scope->parameters)) {
            // We're inside a TermReference. It's OK to reference undefined parameters.
            foreach ($scope->parameters as $argument) {
                if ($argument->name->name === $id) {
                    return $this->resolveExpression($argument->value, $scope);
                }
            }

            return new FluentNone("\${$id}");
        }

        if (array_key_exists($id, $scope->arguments)) {
            // We're in the top-level Pattern or inside a MessageReference.
            // Missing variables references produce ReferenceExceptions.
            $argument = $scope->arguments[$id];
        } else {
            $this->reportError(new ReferenceException("Unknown variable: \${$id}."));

            return new FluentNone("\${$id}");
        }

        // Return early if the argument already is an instance of FluentType.
        if ($argument instanceof FluentType || is_string($argument)) {
            return $argument;
        }

        if (is_numeric($argument)) {
            return new FluentNumber($argument);
        }

        $this->reportError(new TypeException($id, gettype($argument)));

        return new FluentNone("\${$id}");
    }

    private function resolveMessageReference(
        MessageReference $reference,
        ResolutionScope $scope,
    ): FluentType|string {
        $id = $reference->id->name;

        $message = $this->messages[$id] ?? null;

        if (! $message) {
            $this->reportError(new ReferenceException("Unknown message: {$id}."));

            return new FluentNone($id);
        }

        if ($attributeName = $reference->attribute?->name) {
            foreach ($message->attributes as $messageAttribute) {
                if ($messageAttribute->id->name === $attributeName) {
                    $attribute = $messageAttribute;
                }
            }

            if (isset($attribute)) {
                return $this->resolvePattern($attribute->value, $scope);
            }

            $this->reportError(new ReferenceException("Unknown attribute: {$attributeName}."));

            return new FluentNone("{$id}.{$attributeName}");
        }

        if ($message->value) {
            return $this->resolvePattern($message->value, $scope);
        }

        $this->reportError(new ReferenceException("No value: {$id}."));

        return new FluentNone($id);
    }

    private function resolveTermReference(
        TermReference $reference,
        ResolutionScope $scope,
    ): FluentType|string {
        $id = $reference->id->name;

        $term = $this->terms[$id] ?? null;

        if (! $term) {
            $this->reportError(new ReferenceException("Unknown term: -{$id}."));

            return new FluentNone("-{$id}");
        }

        if ($attributeName = $reference->attribute?->name) {
            foreach ($term->attributes as $termAttribute) {
                if ($termAttribute->id->name === $attributeName) {
                    $attribute = $termAttribute;
                }
            }

            if (isset($attribute)) {
                // Every TermReference has its own variables.
                $scope->parameters = $reference->arguments?->named ?? [];

                $resolved = $this->resolvePattern($attribute->value, $scope);

                $scope->parameters = null;

                return $resolved;
            }

            $this->reportError(new ReferenceException("Unknown attribute: {$attributeName}."));

            return new FluentNone("-{$id}.{$attributeName}");
        }

        $scope->parameters = $reference->arguments?->named ?? [];

        $resolved = $this->resolvePattern($term->value, $scope);

        $scope->parameters = null;

        return $resolved;
    }

    private function resolveFunctionReference(
        FunctionReference $reference,
        ResolutionScope $scope,
    ): string|FluentType {
        throw new Exception('Functions are not implemented yet.');
    }

    private function resolveSelectExpression(
        SelectExpression $expression,
        ResolutionScope $scope,
    ): string {
        $selector = $this->resolveExpression($expression->selector, $scope);

        $variants = $expression->variants;

        if ($selector instanceof FluentNone) {
            return $this->getDefaultVariant($variants, $scope);
        }

        foreach ($variants as $variant) {
            $key = $variant->key instanceof Identifier
                ? $variant->key->name
                : $this->resolveExpression($variant->key, $scope);

            if ($this->matchVariant($selector, $key)) {
                return $this->resolvePattern($variant->value, $scope);
            }
        }

        return $this->getDefaultVariant($variants, $scope);
    }

    /**
     * @param Variant[] $variants
     */
    private function getDefaultVariant(
        array $variants,
        ResolutionScope $scope,
    ): string {
        foreach ($variants as $variant) {
            if ($variant->default) {
                return $this->resolvePattern($variant->value, $scope);
            }
        }

        throw new ShouldNotHappen();
    }

    private function matchVariant(
        string|FluentType $selector,
        string|FluentType $key,
    ): bool {
        if ($key === $selector) {
            return true;
        }

        if (
            $key instanceof FluentNumber
            && $selector instanceof FluentNumber
            && (float) $key->value() === (float) $selector->value()
        ) {
            return true;
        }

        if (
            $selector instanceof FluentNumber
            && $key === PluralRules::select($this->locale, $selector)
        ) {
            return true;
        }

        return false;
    }
}
