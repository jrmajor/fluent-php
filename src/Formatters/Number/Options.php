<?php

namespace Major\Fluent\Formatters\Number;

use Major\Fluent\Formatters\InvalidArgumentException;
use Major\Fluent\Formatters\Number\Locale\Currency;

/**
 * @internal
 */
final class Options
{
    public function __construct(
        /** @var 'decimal'|'currency'|'percent'|'unit' */
        public string $style = 'decimal',
        public bool $useGrouping = true,
        public ?int $minimumIntegerDigits = null,
        public ?int $minimumFractionDigits = null,
        public ?int $maximumFractionDigits = null,
        public ?int $minimumSignificantDigits = null,
        public ?int $maximumSignificantDigits = null,
        public ?string $currency = null,
        /** @var 'symbol'|'narrowSymbol'|'code'|'name' */
        public string $currencyDisplay = 'symbol',
        public ?string $unit = null,
        /** @var 'long'|'short'|'narrow' */
        public string $unitDisplay = 'short',
    ) {
        if (! in_array($style, ['decimal', 'currency', 'percent', 'unit'], true)) {
            throw new InvalidArgumentException('Allowed styles are decimal, currency, percent and unit.');
        }

        if (! in_array($currencyDisplay, ['symbol', 'narrowSymbol', 'code', 'name'], true)) {
            throw new InvalidArgumentException('Allowed values of currencyDisplay are symbol, narrowSymbol, code and name.');
        }

        if (! in_array($unitDisplay, ['long', 'short', 'narrow'], true)) {
            throw new InvalidArgumentException('Allowed values of unitDisplay are long, short and narrow.');
        }

        if ($style === 'currency' && $currency === null) {
            throw new InvalidArgumentException('Currency must be specified when using currency formatting.');
        }

        if ($style === 'unit' && $unit === null) {
            throw new InvalidArgumentException('Unit must be specified when using unit formatting.');
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

    private function fillForOther(?Currency $currency): void
    {
        $this->minimumIntegerDigits ??= 1;

        $this->minimumFractionDigits ??= match ($this->style) {
            'decimal', 'percent', 'unit' => 0,
            /** @phpstan-ignore property.nonObject */
            'currency' => $currency->minorUnits,
        };

        $this->maximumFractionDigits ??= match ($this->style) {
            'decimal', 'unit' => max($this->minimumFractionDigits, 3),
            /** @phpstan-ignore property.nonObject */
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
