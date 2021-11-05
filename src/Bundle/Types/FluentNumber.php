<?php

namespace Major\Fluent\Bundle\Types;

use Major\Fluent\Formatters\Number\NumberFormatter;
use Major\Fluent\Formatters\Number\Options;
use Stringable;

final class FluentNumber implements Stringable
{
    private string $locale = 'en';

    /** @var array<string, mixed> */
    private array $options = [];

    public function __construct(
        private int|float $value,
        private ?string $original = null,
    ) { }

    /**
     * @return $this
     */
    public function setLocale(string $locale): self
    {
        $this->locale = $locale;

        return $this;
    }

    /**
     * @param array<string, mixed> $options
     * @return $this
     */
    public function setOptions(array $options): self
    {
        $this->options = array_merge($this->options, $options);

        return $this;
    }

    public function value(): int|float
    {
        return $this->value;
    }

    public function original(): string
    {
        if ($this->original !== null) {
            return $this->original;
        }

        return is_float($this->value()) && $this->value() - round($this->value()) === 0.0
            ? $this->value() . '.0'
            : (string) $this->value();
    }

    public function __toString(): string
    {
        return (new NumberFormatter($this->locale))->format(
            $this->value, new Options(...$this->options),
        );
    }
}
