<?php

namespace Major\Fluent\Resolver;

use Major\Fluent\Bundle\FluentBundle;
use Major\Fluent\Bundle\Types\FluentNone;
use Major\Fluent\Bundle\Types\FluentNumber;
use Major\Fluent\Exceptions\Resolver\CyclicReferenceException;
use Major\Fluent\Exceptions\Resolver\FunctionException;
use Major\Fluent\Exceptions\Resolver\NullPatternException;
use Major\Fluent\Exceptions\Resolver\ReferenceException;
use Major\Fluent\Exceptions\Resolver\TypeException;
use Major\Fluent\Exceptions\ShouldNotHappen;
use Major\Fluent\Node\Syntax\CallArguments;
use Major\Fluent\Node\Syntax\Expressions\Expression;
use Major\Fluent\Node\Syntax\Expressions\FunctionReference;
use Major\Fluent\Node\Syntax\Expressions\Literals\NumberLiteral;
use Major\Fluent\Node\Syntax\Expressions\Literals\StringLiteral;
use Major\Fluent\Node\Syntax\Expressions\MessageReference;
use Major\Fluent\Node\Syntax\Expressions\SelectExpression;
use Major\Fluent\Node\Syntax\Expressions\TermReference;
use Major\Fluent\Node\Syntax\Expressions\VariableReference;
use Major\Fluent\Node\Syntax\Identifier;
use Major\Fluent\Node\Syntax\NamedArgument;
use Major\Fluent\Node\Syntax\Patterns\Pattern;
use Major\Fluent\Node\Syntax\Patterns\Placeable;
use Major\Fluent\Node\Syntax\Patterns\TextElement;
use Major\Fluent\Node\Syntax\Variant;
use Major\PluralRules\PluralRules;
use Stringable;
use Throwable;
use WeakMap;

/**
 * @internal
 */
final class PatternResolver
{
    /** Unicode BiDi control character - first-string isolate. */
    private const FSI = "\u{2068}";

    /** Unicode BiDi control character - pop directional isolate. */
    private const PDI = "\u{2069}";

    /** @var WeakMap<Pattern, true> */
    private WeakMap $dirty;

    /** @var ?list<NamedArgument> */
    private ?array $parameters = null;

    public function __construct(
        private FluentBundle $bundle,
        /** @var array<string, mixed> */
        private array $arguments,
    ) {
        /** @psalm-suppress PropertyTypeCoercion */
        $this->dirty = new WeakMap();
    }

    public function resolvePattern(?Pattern $pattern): string
    {
        if (! $pattern) {
            return (string) $this->bundle->reportError(new NullPatternException());
        }

        if (isset($this->dirty[$pattern])) {
            return (string) $this->bundle->reportError(new CyclicReferenceException());
        }

        $this->dirty[$pattern] = true;

        $result = '';

        // Wrap interpolations with Directional Isolate Formatting characters
        // only when the pattern has more than one element.
        $useIsolating = $this->bundle->usesIsolating() && count($pattern->elements) > 1;

        foreach ($pattern->elements as $element) {
            if ($element instanceof TextElement) {
                $result .= $element->value;

                continue;
            }

            assert($element instanceof Placeable);

            $result .= $useIsolating ? self::FSI : '';

            $result .= $this->resolvePlaceable($element);

            $result .= $useIsolating ? self::PDI : '';
        }

        return $result;
    }

    private function resolvePlaceable(Placeable $element): string|Stringable
    {
        return $element->expression instanceof Placeable
            ? $this->resolvePlaceable($element->expression)
            : $this->resolveExpression($element->expression);
    }

    private function resolveExpression(Expression $expression): string|Stringable
    {
        $method = 'resolve' . $expression->getType();

        return $this->{$method}($expression);
    }

    private function resolveStringLiteral(StringLiteral $literal): string
    {
        return $literal->parse()->value;
    }

    private function resolveNumberLiteral(NumberLiteral $literal): FluentNumber
    {
        $parsed = $literal->parse();

        return (new FluentNumber($parsed->value, $literal->value))
            ->setLocale($this->bundle->getLocale())
            ->setOptions(['minimumFractionDigits' => $parsed->precision]);
    }

    private function resolveVariableReference(VariableReference $reference): string|Stringable
    {
        $id = $reference->id->name;

        if ($this->parameters !== null) {
            // We're inside a TermReference. It's OK to reference undefined parameters.
            foreach ($this->parameters as $argument) {
                if ($argument->name->name === $id) {
                    return $this->resolveExpression($argument->value);
                }
            }

            return new FluentNone("\${$id}");
        }

        if (array_key_exists($id, $this->arguments)) {
            // We're in the top-level Pattern or inside a MessageReference.
            // Missing variables references produce ReferenceExceptions.
            $argument = $this->arguments[$id];
        } else {
            return $this->bundle->reportError(new ReferenceException("Unknown variable: \${$id}."), "\${$id}");
        }

        if ($argument instanceof FluentNumber) {
            return $argument->setLocale($this->bundle->getLocale());
        }

        // Return early if the argument already is an instance of Stringable.
        if (is_string($argument) || $argument instanceof Stringable) {
            return $argument;
        }

        if (is_int($argument) || is_float($argument)) {
            return (new FluentNumber($argument))->setLocale($this->bundle->getLocale());
        }

        $type = get_debug_type($argument);

        return $this->bundle->reportError(new TypeException("Variable \${$id} is of unsupported type {$type}."), "\${$id}");
    }

    private function resolveMessageReference(MessageReference $reference): string|Stringable
    {
        $id = $reference->id->name;

        if (! $message = $this->bundle->getMessage($id)) {
            return $this->bundle->reportError(new ReferenceException("Unknown message: {$id}."), $id);
        }

        if ($attributeName = $reference->attribute?->name) {
            foreach ($message->attributes as $messageAttribute) {
                if ($messageAttribute->id->name === $attributeName) {
                    $attribute = $messageAttribute;
                }
            }

            if (isset($attribute)) {
                return $this->resolvePattern($attribute->value);
            }

            return $this->bundle->reportError(
                new ReferenceException("Unknown attribute: {$id}.{$attributeName}."),
                "{$id}.{$attributeName}",
            );
        }

        if ($message->value) {
            return $this->resolvePattern($message->value);
        }

        return $this->bundle->reportError(new ReferenceException("No value: {$id}."), $id);
    }

    private function resolveTermReference(TermReference $reference): string|Stringable
    {
        $id = $reference->id->name;

        if (! $term = $this->bundle->getTerm($id)) {
            return $this->bundle->reportError(new ReferenceException("Unknown term: -{$id}."), "-{$id}");
        }

        if ($attributeName = $reference->attribute?->name) {
            foreach ($term->attributes as $termAttribute) {
                if ($termAttribute->id->name === $attributeName) {
                    $attribute = $termAttribute;
                }
            }

            if (isset($attribute)) {
                // Every TermReference has its own variables.
                $this->parameters = $reference->arguments?->named ?? [];

                $resolved = $this->resolvePattern($attribute->value);

                $this->parameters = null;

                return $resolved;
            }

            return $this->bundle->reportError(
                new ReferenceException("Unknown attribute: -{$id}.{$attributeName}."),
                "-{$id}.{$attributeName}",
            );
        }

        $this->parameters = $reference->arguments?->named ?? [];

        $resolved = $this->resolvePattern($term->value);

        $this->parameters = null;

        return $resolved;
    }

    private function resolveFunctionReference(FunctionReference $reference): string|Stringable
    {
        $name = $reference->id->name;

        if (! $function = $this->bundle->getFunction($name)) {
            return $this->bundle->reportError(new ReferenceException("Unknown function: {$name}()."), "{$name}()");
        }

        $arguments = $this->getFunctionArguments($reference->arguments, $name === 'NUMBER');

        try {
            $output = $function(...$arguments);
        } catch (Throwable $e) {
            return $this->bundle->reportError(new FunctionException($name, $e), "{$name}()");
        }

        if (is_string($output) || $output instanceof Stringable) {
            return $output;
        }

        if (is_int($output) || is_float($output)) {
            return (new FluentNumber($output))->setLocale($this->bundle->getLocale());
        }

        $type = get_debug_type($output);

        return $this->bundle->reportError(new TypeException("Return value of {$name}() must be of type string|Stringable, {$type} returned."), "{$name}()");
    }

    /**
     * @return array<int|string, mixed>
     */
    private function getFunctionArguments(CallArguments $arguments, bool $number): array
    {
        /** @var array<int|string, mixed> */
        $prepared = [];

        foreach ($arguments->positional as $position => $argument) {
            $prepared[] = $this->resolveArgument($argument, $position === 0 && $number);
        }

        foreach ($arguments->named as $argument) {
            $prepared[$argument->name->name] = $this->resolveArgument($argument->value);
        }

        return $prepared;
    }

    private function resolveArgument(Expression $argument, bool $number = false): mixed
    {
        if ($argument instanceof NumberLiteral && ! $number) {
            $number = $argument->parse();

            return $number->precision === 0 ? (int) $number->value : $number->value;
        }

        if (
            $argument instanceof VariableReference
            && array_key_exists($id = $argument->id->name, $this->arguments)
        ) {
            return $this->arguments[$id];
        }

        $value = $this->resolveExpression($argument);

        return match (true) {
            $value instanceof FluentNone => null,
            $value instanceof FluentNumber => $number ? $value : $value->value(),
            default => $value,
        };
    }

    private function resolveSelectExpression(SelectExpression $expression): string
    {
        $selector = $this->resolveExpression($expression->selector);

        $variants = $expression->variants;

        if ($selector instanceof FluentNone) {
            return $this->getDefaultVariant($variants);
        }

        foreach ($variants as $variant) {
            $key = $variant->key instanceof Identifier
                ? $variant->key->name
                : $this->resolveExpression($variant->key);

            if ($this->matchVariant($selector, $key)) {
                return $this->resolvePattern($variant->value);
            }
        }

        return $this->getDefaultVariant($variants);
    }

    /**
     * @param list<Variant> $variants
     */
    private function getDefaultVariant(array $variants): string
    {
        foreach ($variants as $variant) {
            if ($variant->default) {
                return $this->resolvePattern($variant->value);
            }
        }

        throw new ShouldNotHappen(); // @codeCoverageIgnore
    }

    private function matchVariant(
        string|Stringable|FluentNumber $selector,
        string|Stringable|FluentNumber $key,
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
            && $key === PluralRules::select($this->bundle->getLocale(), $selector->original())
        ) {
            return true;
        }

        return false;
    }
}
