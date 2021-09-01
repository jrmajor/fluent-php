<?php

namespace Major\Fluent\Bundle;

use Closure;
use Exception;
use Major\Fluent\Bundle\Types\FluentNone;
use Major\Fluent\Bundle\Types\FluentNumber;
use Major\Fluent\Exceptions\Bundle\FunctionExistsException;
use Major\Fluent\Exceptions\Bundle\MessageExistsException;
use Major\Fluent\Exceptions\Bundle\TermExistsException;
use Major\Fluent\Exceptions\Resolver\CyclicReferenceException;
use Major\Fluent\Exceptions\Resolver\NullPatternException;
use Major\Fluent\Exceptions\Resolver\ReferenceException;
use Major\Fluent\Exceptions\Resolver\ResolverException;
use Major\Fluent\Exceptions\Resolver\TypeException;
use Major\Fluent\Exceptions\ShouldNotHappen;
use Major\Fluent\Node\Syntax\CallArguments;
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
use Major\Fluent\Node\Syntax\Patterns\Pattern;
use Major\Fluent\Node\Syntax\Patterns\Placeable;
use Major\Fluent\Node\Syntax\Patterns\TextElement;
use Major\Fluent\Node\Syntax\Variant;
use Major\Fluent\Parser\FluentParser;
use Major\PluralRules\PluralRules;
use Stringable;

final class FluentBundle
{
    /** Unicode BiDi isolation characters. */
    public const FSI = "\u{2068}";

    public const PDI = "\u{2069}";

    /** @var array<string, Message> */
    private array $messages = [];

    /** @var array<string, Term> */
    private array $terms = [];

    /** @var array<string, Closure> */
    private array $functions = [];

    /** @var ResolverException[] */
    private array $errors = [];

    public function __construct(
        protected string $locale,
        protected bool $strict = false,
        protected bool $useIsolating = true,
        protected bool $allowOverrides = false,
    ) {
        $this->functions = [
            'NUMBER' => fn () => throw new Exception('NUMBER() function is not implemented.'),
            'DATETIME' => fn () => throw new Exception('DATETIME() function is not implemented.'),
        ];
    }

    public function addResource(
        FluentResource $resource,
        bool $allowOverrides = null,
    ): static {
        $allowOverrides ??= $this->allowOverrides;

        foreach ($resource->body as $entry) {
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

    public function addFtl(string $ftl, bool $allowOverrides = null): static
    {
        $parser = new FluentParser($this->strict);

        $this->addResource($parser->parse($ftl), $allowOverrides);

        return $this;
    }

    public function addFunction(string $name, Closure $function): static
    {
        if ($this->hasFunction($name)) {
            throw new FunctionExistsException($name);
        }

        $this->functions[$name] = $function;

        return $this;
    }

    /**
     * @param array<string, Closure> $functions
     */
    public function addFunctions(array $functions): static
    {
        foreach ($functions as $name => $function) {
            $this->addFunction($name, $function);
        }

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

    public function hasFunction(string $id): bool
    {
        return array_key_exists($id, $this->functions);
    }

    private function reportError(ResolverException $error, string $value = '???'): FluentNone
    {
        $this->errors[] = $this->strict ? throw $error : $error;

        return new FluentNone($value);
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

    public function message(string $_message, mixed ...$arguments): ?string
    {
        if (
            count($arguments) === 1
            && array_key_exists(0, $arguments)
            && is_array($arguments[0])
        ) {
            $arguments = $arguments[0];
        }

        $messageId = explode('.', $_message, limit: 2);

        $message = $this->messages[$messageId[0]] ?? null;

        if (! $message) {
            return null;
        }

        $attributeId = $messageId[1] ?? null;

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
            return (string) $this->reportError(new NullPatternException());
        }

        if (isset($scope->dirty[$pattern])) {
            return (string) $this->reportError(new CyclicReferenceException());
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
    ): string|Stringable {
        return $element->expression instanceof Placeable
            ? $this->resolvePlaceable($element->expression, $scope)
            : $this->resolveExpression($element->expression, $scope);
    }

    private function resolveExpression(
        Expression $expression,
        ResolutionScope $scope,
    ): string|Stringable {
        $method = 'resolve' . $expression->getType();

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

        return (new FluentNumber($parsed->value, $literal->value, $parsed->precision))
            ->setFluentLocale($this->locale);
    }

    private function resolveVariableReference(
        VariableReference $reference,
        ResolutionScope $scope,
    ): string|Stringable {
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
            return $this->reportError(new ReferenceException("Unknown variable: \${$id}."), "\${$id}");
        }

        if ($argument instanceof FluentNumber) {
            return $argument->setFluentLocale($this->locale);
        }

        // Return early if the argument already is an instance of Stringable.
        if (is_string($argument) || $argument instanceof Stringable) {
            return $argument;
        }

        if (is_numeric($argument)) {
            return (new FluentNumber($argument))->setFluentLocale($this->locale);
        }

        $type = get_debug_type($argument);

        return $this->reportError(new TypeException("Variable \${$id} is of unsupported type {$type}."), "\${$id}");
    }

    private function resolveMessageReference(
        MessageReference $reference,
        ResolutionScope $scope,
    ): string|Stringable {
        $id = $reference->id->name;

        $message = $this->messages[$id] ?? null;

        if (! $message) {
            return $this->reportError(new ReferenceException("Unknown message: {$id}."), $id);
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

            return $this->reportError(
                new ReferenceException("Unknown attribute: {$id}.{$attributeName}."),
                "{$id}.{$attributeName}",
            );
        }

        if ($message->value) {
            return $this->resolvePattern($message->value, $scope);
        }

        return $this->reportError(new ReferenceException("No value: {$id}."), $id);
    }

    private function resolveTermReference(
        TermReference $reference,
        ResolutionScope $scope,
    ): string|Stringable {
        $id = $reference->id->name;

        $term = $this->terms[$id] ?? null;

        if (! $term) {
            return $this->reportError(new ReferenceException("Unknown term: -{$id}."), "-{$id}");
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

            return $this->reportError(
                new ReferenceException("Unknown attribute: -{$id}.{$attributeName}."),
                "-{$id}.{$attributeName}",
            );
        }

        $scope->parameters = $reference->arguments?->named ?? [];

        $resolved = $this->resolvePattern($term->value, $scope);

        $scope->parameters = null;

        return $resolved;
    }

    private function resolveFunctionReference(
        FunctionReference $reference,
        ResolutionScope $scope,
    ): string|Stringable {
        $name = $reference->id->name;

        $function = $this->functions[$name] ?? null;

        if (! $function) {
            return $this->reportError(new ReferenceException("Unknown function: {$name}()."), "{$name}()");
        }

        $arguments = $this->getFunctionArguments($reference->arguments, $scope);

        $output = $function(...$arguments);

        if (is_string($output) || $output instanceof Stringable) {
            return $output;
        }

        if (is_numeric($output)) {
            return (new FluentNumber($output))->setFluentLocale($this->locale);
        }

        $type = get_debug_type($output);

        return $this->reportError(new TypeException("Return value of {$name}() must be of type string|Stringable, {$type} returned."), "{$name}()");
    }

    /**
     * @return array<int|string, mixed>
     */
    private function getFunctionArguments(
        CallArguments $arguments,
        ResolutionScope $scope,
    ): array {
        /** @var array<int|string, mixed> */
        $prepared = [];

        foreach ($arguments->positional as $argument) {
            $prepared[] = $this->resolveArgument($argument, $scope);
        }

        foreach ($arguments->named as $argument) {
            $prepared[$argument->name->name] = $this->resolveArgument($argument->value, $scope);
        }

        return $prepared;
    }

    private function resolveArgument(
        Expression $argument,
        ResolutionScope $scope,
    ): mixed {
        if ($argument instanceof NumberLiteral) {
            $number = $argument->parse();

            return $number->precision === 0 ? (int) $number->value : $number->value;
        }

        if (
            $argument instanceof VariableReference
            && array_key_exists($id = $argument->id->name, $scope->arguments)
        ) {
            return $scope->arguments[$id];
        }

        $value = $this->resolveExpression($argument, $scope);

        return match (get_debug_type($value)) {
            FluentNone::class => null,
            /** @phpstan-ignore-next-line */
            FluentNumber::class => $value->value(),
            default => $value,
        };
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
            && $key === PluralRules::select($this->locale, $selector->original())
        ) {
            return true;
        }

        return false;
    }
}
