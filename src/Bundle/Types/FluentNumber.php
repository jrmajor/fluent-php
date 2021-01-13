<?php

namespace Major\Fluent\Bundle\Types;

use NumberFormatter;
use Stringable;

class FluentNumber implements Stringable
{
    protected string $locale = 'en';

    public function __construct(
        protected int|float $value,
        protected ?int $minimumFractionDigits = null,
    ) { }

    public function value(): int|float
    {
        return $this->value;
    }

    public function minimumFractionDigits(): int
    {
        return $this->minimumFractionDigits ?? 0;
    }

    public function setFluentLocale(string $locale): self
    {
        $this->locale = $locale;

        return $this;
    }

    public function __toString(): string
    {
        $formatter = NumberFormatter::create(
            $this->locale,
            NumberFormatter::DEFAULT_STYLE,
        );

        $formatter->setAttribute(
            NumberFormatter::MIN_FRACTION_DIGITS,
            $this->minimumFractionDigits(),
        );

        return $formatter->format($this->value) ?: (string) $this->value;
    }
}
