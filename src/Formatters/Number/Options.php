<?php

namespace Major\Fluent\Formatters\Number;

use InvalidArgumentException;
use Major\Fluent\Formatters\Number\Locale\Currency;

/**
 * @internal
 */
final class Options
{
    /**
     * @psalm-suppress DocblockTypeContradiction
     */
    public function __construct(
        /** @var 'decimal'|'currency'|'percent' */
        public string $style = 'decimal',
        public bool $useGrouping = true,
        public ?int $minimumIntegerDigits = null,
        public ?int $minimumFractionDigits = null,
        public ?int $maximumFractionDigits = null,
        public ?int $minimumSignificantDigits = null,
        public ?int $maximumSignificantDigits = null,
        public ?string $currency = null,
        public string $currencyDisplay = 'symbol',
    ) {
        /** @psalm-suppress DocblockTypeContradiction */
        if (! in_array($style, ['decimal', 'currency', 'percent'], true)) {
            throw new InvalidArgumentException('Allowed styles are decimal, currency and percent.');
        }

        if (! in_array($currencyDisplay, ['symbol', 'narrowSymbol', 'code', 'name'], true)) {
            throw new InvalidArgumentException('Allowed values of currencyDisplay are symbol, narrowSymbol, code and name.');
        }

        if ($style === 'currency' && $currency === null) {
            throw new InvalidArgumentException('Currency must be specified when using currency formatting.');
        }

        if ($currency !== null) {
            if (! preg_match('/^[a-zA-Z]{3}$/', $currency)) {
                throw new InvalidArgumentException("Currency \"{$currency}\" is invalid.");
            }

            $this->currency = strtoupper($currency);
        }
    }

    /**
     * @return $this
     */
    public function fillWithDefaults(?Currency $currency): self
    {
        if (
            $this->minimumSignificantDigits !== null
            || $this->maximumSignificantDigits !== null
        ) {
            $this->fillForSignificant();
            $this->validateForSignificant();
        } else {
            $this->fillForOther($currency);
            $this->validateForOther();
        }

        return $this;
    }

    private function fillForSignificant(): void
    {
        $this->minimumIntegerDigits = null;
        $this->minimumFractionDigits = null;
        $this->maximumFractionDigits = null;
        $this->minimumSignificantDigits ??= 1;
        $this->maximumSignificantDigits ??= 21;
    }

    /**
     * @psalm-suppress PossiblyNullPropertyFetch
     */
    private function fillForOther(?Currency $currency): void
    {
        $this->minimumIntegerDigits ??= 1;

        $this->minimumFractionDigits ??= match ($this->style) {
            'decimal', 'percent' => 0,
            /** @phpstan-ignore-next-line */
            'currency' => $currency->minorUnits,
        };

        $this->maximumFractionDigits ??= match ($this->style) {
            'decimal' => max($this->minimumFractionDigits, 3),
            /** @phpstan-ignore-next-line */
            'currency' => max($this->minimumFractionDigits, $currency->minorUnits),
            'percent' => max($this->minimumFractionDigits, 0),
        };
    }

    private function validateForSignificant(): void
    {
        if ($this->minimumSignificantDigits > $this->maximumSignificantDigits) {
            throw new InvalidArgumentException('maximumSignificantDigits must not be grater than minimumSignificantDigits.');
        }

        $this->validateIsBetween('minimumSignificantDigits', 1, 21);
        $this->validateIsBetween('maximumSignificantDigits', 1, 21);
    }

    private function validateForOther(): void
    {
        if ($this->minimumFractionDigits > $this->maximumFractionDigits) {
            throw new InvalidArgumentException('minimumFractionDigits must not be grater than maximumFractionDigits.');
        }

        $this->validateIsBetween('minimumIntegerDigits', 1, 21);
        $this->validateIsBetween('minimumFractionDigits', 0, 20);
        $this->validateIsBetween('maximumFractionDigits', 0, 20);
    }

    private function validateIsBetween(string $name, int $min, int $max): void
    {
        if ($this->{$name} < $min) {
            throw new InvalidArgumentException("{$name} must not be less than {$min}.");
        }

        if ($this->{$name} > $max) {
            throw new InvalidArgumentException("{$name} must not be grater than {$min}.");
        }
    }
}
