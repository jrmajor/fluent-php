<?php

namespace Major\Fluent\Resolver;

use Major\Fluent\Bundle\FluentBundle;
use Major\Fluent\Bundle\Types\FluentNone;
use Major\Fluent\Bundle\Types\FluentNumber;
use Major\Fluent\Exceptions\Resolver as Err;
use Major\Fluent\Exceptions\ShouldNotHappen;
use Major\Fluent\Node\Syntax\CallArguments;
use Major\Fluent\Node\Syntax\Expressions as Expr;
use Major\Fluent\Node\Syntax\Expressions\Expression;
use Major\Fluent\Node\Syntax\Identifier;
use Major\Fluent\Node\Syntax\Patterns as Pattern;
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

    /** @var WeakMap<Pattern\Pattern, true> */
    private WeakMap $dirty;

    private ?Expr\TermReference $currentTerm = null;

    private VariantMatcher $variantMatcher;

    public function __construct(
        private FluentBundle $bundle,
        /** @var array<string, mixed> */
        private array $arguments,
    ) {
        /** @psalm-suppress PropertyTypeCoercion */
        $this->dirty = new WeakMap();

        $this->variantMatcher = new VariantMatcher($this->bundle->getLocale());
    }

    public function resolvePattern(?Pattern\Pattern $pattern): string
    {
        if (! $pattern) {
            return (string) $this->error(new Err\NullPatternException());
        }

        if (isset($this->dirty[$pattern])) {
            return (string) $this->error(new Err\CyclicReferenceException());
        }

        $this->dirty[$pattern] = true;

        $result = '';

        // Wrap interpolations with Directional Isolate Formatting characters
        // only when the pattern has more than one element.
        $useIsolating = $this->bundle->usesIsolating() && count($pattern->elements) > 1;

        foreach ($pattern->elements as $element) {
            if ($element instanceof Pattern\TextElement) {
                $result .= $element->value;

                continue;
            }

            assert($element instanceof Pattern\Placeable);

            $result .= $useIsolating ? self::FSI : '';

            $result .= $this->resolvePlaceable($element);

            $result .= $useIsolating ? self::PDI : '';
        }

        return $result;
    }

    private function resolvePlaceable(Pattern\Placeable $element): string|Stringable
    {
        return $element->expression instanceof Pattern\Placeable
            ? $this->resolvePlaceable($element->expression)
            : $this->resolveExpression($element->expression);
    }

    private function resolveExpression(Expr\Expression $e): string|Stringable
    {
        return match (true) {
            $e instanceof Expr\SelectExpression => $this->resolveSelectExpression($e),
            $e instanceof Expr\Literals\NumberLiteral => $this->resolveNumberLiteral($e),
            $e instanceof Expr\Literals\StringLiteral => $this->resolveStringLiteral($e),
            $e instanceof Expr\FunctionReference => $this->resolveFunctionReference($e),
            $e instanceof Expr\MessageReference => $this->resolveMessageReference($e),
            $e instanceof Expr\TermReference => $this->resolveTermReference($e),
            $e instanceof Expr\VariableReference => $this->resolveVariableReference($e),
            default => throw new ShouldNotHappen(),
        };
    }

    private function resolveStringLiteral(Expr\Literals\StringLiteral $literal): string
    {
        return $literal->parse()->value;
    }

    private function resolveNumberLiteral(Expr\Literals\NumberLiteral $literal): FluentNumber
    {
        $parsed = $literal->parse();

        return (new FluentNumber($parsed->value, $literal->value))
            ->setLocale($this->bundle->getLocale())
            ->setOptions(['minimumFractionDigits' => $parsed->precision]);
    }

    private function resolveVariableReference(Expr\VariableReference $reference): string|Stringable
    {
        $id = $reference->id->name;

        // We're inside a TermReference. It's OK to reference undefined parameters.
        if ($this->currentTerm !== null) {
            if (! $argument = $this->currentTerm->arguments?->getArgument($id)) {
                return new FluentNone("\${$id}");
            }

            return $this->resolveExpression($argument->value);
        }

        // We're in the top-level Pattern or inside a MessageReference.
        // Missing variables references produce ReferenceExceptions.
        if (! array_key_exists($id, $this->arguments)) {
            return $this->error(new Err\ReferenceException("Unknown variable: \${$id}."), "\${$id}");
        }

        $argument = $this->arguments[$id];

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

        $error = "Variable \${$id} is of unsupported type %s.";

        return $this->error(new Err\TypeException($error, $argument), "\${$id}");
    }

    private function resolveMessageReference(Expr\MessageReference $reference): string|Stringable
    {
        $id = $reference->id->name;

        if (! $message = $this->bundle->getMessage($id)) {
            return $this->error(new Err\ReferenceException("Unknown message: {$id}."), $id);
        }

        if (null !== $attributeName = $reference->attribute?->name) {
            if ($attribute = $message->getAttribute($attributeName)) {
                return $this->resolvePattern($attribute->value);
            }

            $error = "Unknown attribute: {$id}.{$attributeName}.";

            return $this->error(new Err\ReferenceException($error), "{$id}.{$attributeName}");
        }

        if ($message->value) {
            return $this->resolvePattern($message->value);
        }

        // null pattern?
        return $this->error(new Err\ReferenceException("No value: {$id}."), $id);
    }

    private function resolveTermReference(Expr\TermReference $reference): string|Stringable
    {
        $id = $reference->id->name;

        if (! $term = $this->bundle->getTerm($id)) {
            return $this->error(new Err\ReferenceException("Unknown term: -{$id}."), "-{$id}");
        }

        if (null !== $attributeName = $reference->attribute?->name) {
            $pattern = $term->getAttribute($attributeName)?->value;
        } else {
            $pattern = $term->value;
        }

        if ($pattern) {
            $this->currentTerm = $reference;
            $resolved = $this->resolvePattern($pattern);
            $this->currentTerm = null;

            return $resolved;
        }

        $error = "Unknown attribute: -{$id}.{$attributeName}.";

        return $this->error(new Err\ReferenceException($error), "-{$id}.{$attributeName}");
    }

    private function resolveFunctionReference(Expr\FunctionReference $reference): string|Stringable
    {
        $name = $reference->id->name;

        if (! $function = $this->bundle->getFunction($name)) {
            $error = "Unknown function: {$name}().";

            return $this->error(new Err\ReferenceException($error), "{$name}()");
        }

        $arguments = $this->getFunctionArguments($reference->arguments, $name === 'NUMBER');

        try {
            $output = $function(...$arguments);
        } catch (Throwable $e) {
            return $this->error(new Err\FunctionException($name, $e), "{$name}()");
        }

        if (is_string($output) || $output instanceof Stringable) {
            return $output;
        }

        if (is_int($output) || is_float($output)) {
            return (new FluentNumber($output))->setLocale($this->bundle->getLocale());
        }

        $error = "Return value of {$name}() must be of type string|Stringable, %s returned.";

        return $this->error(new Err\TypeException($error, $output), "{$name}()");
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
        if ($argument instanceof Expr\Literals\NumberLiteral && ! $number) {
            $number = $argument->parse();

            return $number->precision === 0 ? (int) $number->value : $number->value;
        }

        if (
            $argument instanceof Expr\VariableReference
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

    private function resolveSelectExpression(Expr\SelectExpression $expression): string
    {
        $selector = $this->resolveExpression($expression->selector);

        $variants = $expression->variants;

        if ($selector instanceof FluentNone) {
            return $this->resolvePattern($expression->getDefaultVariant()->value);
        }

        foreach ($variants as $variant) {
            $key = $variant->key instanceof Identifier
                ? $variant->key->name
                : $this->resolveExpression($variant->key);

            if ($this->variantMatcher->match($selector, $key)) {
                return $this->resolvePattern($variant->value);
            }
        }

        return $this->resolvePattern($expression->getDefaultVariant()->value);
    }

    private function error(Err\ResolverException $error, string $value = '???'): FluentNone
    {
        $this->bundle->reportError($error);

        return new FluentNone($value);
    }
}
