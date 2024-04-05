<?php

namespace Major\Fluent\Bundle;

use Closure;
use Exception;
use Major\Fluent\Bundle\Types\FluentNumber;
use Major\Fluent\Exceptions\Bundle\FunctionExistsException;
use Major\Fluent\Exceptions\Bundle\MessageExistsException;
use Major\Fluent\Exceptions\Bundle\TermExistsException;
use Major\Fluent\Exceptions\Resolver\ResolverException;
use Major\Fluent\Node\Syntax\Entries\Message;
use Major\Fluent\Node\Syntax\Entries\Term;
use Major\Fluent\Node\Syntax\FluentResource;
use Major\Fluent\Node\Syntax\Patterns\Pattern;
use Major\Fluent\Parser\FluentParser;
use Major\Fluent\Resolver\PatternResolver;

final class FluentBundle
{
    /** @var array<string, Message> */
    private array $messages = [];

    /** @var array<string, Term> */
    private array $terms = [];

    /** @var array<string, Closure> */
    private array $functions = [];

    /** @var list<ResolverException> */
    private array $errors = [];

    public function __construct(
        private string $locale,
        private bool $strict = false,
        private bool $useIsolating = true,
        private bool $allowOverrides = false,
    ) {
        $this->functions = [
            'NUMBER' => $this->numberFunction(...),
            'DATETIME' => $this->dateTimeFunction(...),
        ];
    }

    /**
     * @return $this
     */
    public function addResource(FluentResource $resource, ?bool $allowOverrides = null): static
    {
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

    /**
     * @return $this
     */
    public function addFtl(string $ftl, ?bool $allowOverrides = null): static
    {
        $parser = new FluentParser($this->strict);

        $this->addResource($parser->parse($ftl), $allowOverrides);

        return $this;
    }

    /**
     * @return $this
     */
    public function addFunction(string $name, Closure $function, ?bool $allowOverrides = null): static
    {
        $allowOverrides ??= $this->allowOverrides;

        if (! $allowOverrides && $this->hasFunction($name)) {
            throw new FunctionExistsException($name);
        }

        $this->functions[$name] = $function;

        return $this;
    }

    /**
     * @param array<string, Closure> $functions
     *
     * @return $this
     */
    public function addFunctions(array $functions, ?bool $allowOverrides = null): static
    {
        foreach ($functions as $name => $function) {
            $this->addFunction($name, $function, $allowOverrides);
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

    /**
     * @internal
     */
    public function reportError(ResolverException $error): void
    {
        $this->errors[] = $this->strict ? throw $error : $error;
    }

    /**
     * @return list<ResolverException>
     *
     * @phpstan-impure
     */
    public function popErrors(): array
    {
        $errors = $this->errors;

        $this->errors = [];

        return $errors;
    }

    /**
     * @param array<string, mixed> $arguments
     */
    public function message(string $message, array $arguments = []): ?string
    {
        $ids = explode('.', $message, limit: 2);
        $messageId = $ids[0];
        $attributeId = $ids[1] ?? null;

        if (! $message = $this->messages[$messageId] ?? null) {
            return null;
        }

        if ($attributeId === null) {
            $pattern = $message->value;
        } else {
            $pattern = $message->getAttribute($attributeId)?->value;
        }

        return $this->resolvePattern($pattern, $arguments);
    }

    /**
     * @param array<string, mixed> $arguments
     */
    private function resolvePattern(?Pattern $pattern, array $arguments): string
    {
        $resolver = new PatternResolver($this, $arguments);

        return $resolver->resolvePattern($pattern);
    }

    /**
     * @internal
     */
    public function getLocale(): string
    {
        return $this->locale;
    }

    /**
     * @internal
     */
    public function usesIsolating(): bool
    {
        return $this->useIsolating;
    }

    /**
     * @internal
     */
    public function getMessage(string $message): ?Message
    {
        return $this->messages[$message] ?? null;
    }

    /**
     * @internal
     */
    public function getTerm(string $term): ?Term
    {
        return $this->terms[$term] ?? null;
    }

    /**
     * @internal
     */
    public function getFunction(string $function): ?Closure
    {
        return $this->functions[$function] ?? null;
    }

    private function numberFunction(
        int|float|FluentNumber $number,
        int|string|bool ...$options,
    ): FluentNumber {
        if (! $number instanceof FluentNumber) {
            $number = new FluentNumber($number);
        }

        /** @phpstan-ignore argument.type */
        return $number->setLocale($this->locale)->setOptions($options);
    }

    private function dateTimeFunction(): void
    {
        throw new Exception('DATETIME() function is not implemented.');
    }
}
