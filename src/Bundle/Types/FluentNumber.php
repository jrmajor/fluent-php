<?php

namespace Major\Fluent\Bundle\Types;

use NumberFormatter;

final class FluentNumber extends FluentType
{
    protected string $locale = 'en';

    public function __construct(
        protected int|float $value,
        protected ?int $minimumFractionDigits = null,
    ) { }

    public function minimumFractionDigits(): int
    {
        return $this->minimumFractionDigits ?? 0;
    }

    public function setLocale(string $locale): static
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
