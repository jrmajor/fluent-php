<?php

namespace Major\Fluent\Bundle\Types;

use NumberFormatter;
use Stringable;

final class FluentNumber implements Stringable
{
    private string $locale = 'en';

    public function __construct(
        protected int|float $value,
        protected ?string $original = null,
        protected ?int $minimumFractionDigits = null,
    ) { }

    /**
     * @return $this
     */
    public function setLocale(string $locale): self
    {
        $this->locale = $locale;

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

        return is_float($this->value) && $this->value - round($this->value) === 0.0
            ? $this->value . '.0'
            : (string) $this->value;
    }

    public function __toString(): string
    {
        $formatter = NumberFormatter::create(
            $this->locale,
            NumberFormatter::DEFAULT_STYLE,
        );

        $formatter->setAttribute(
            NumberFormatter::MIN_FRACTION_DIGITS,
            $this->minimumFractionDigits ?? 0,
        );

        return $formatter->format($this->value);
    }
}
