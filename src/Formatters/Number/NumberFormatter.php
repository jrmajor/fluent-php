<?php

namespace Major\Fluent\Formatters\Number;

use NumberFormatter as BaseNumberFormatter;

/**
 * @internal
 */
final class NumberFormatter
{
    private static array $data = [];

    public function __construct(
        private string $locale,
    ) { }

    public function formatDecimal(
        int|float $number,
        bool $useGrouping = true,
        int $minimumIntegerDigits = null,
        int $minimumFractionDigits = null,
        int $maximumFractionDigits = null,
        int $minimumSignificantDigits = null,
        int $maximumSignificantDigits = null,
    ): string {
        $formatter = $this->createBaseFormatter(
            'decimal',
            $useGrouping,
            $minimumIntegerDigits,
            $minimumFractionDigits,
            $maximumFractionDigits,
            $minimumSignificantDigits,
            $maximumSignificantDigits,
        );

        $formatted = $formatter->format($number);

        return $formatted === false ? throw NumberFormatterException::formatting() : $formatted;
    }

    /**
     * @param 'symbol'|'narrowSymbol'|'code'|'name' $currencyDisplay
     */
    public function formatCurrency(
        int|float $number,
        string $currency,
        string $currencyDisplay = null,
        bool $useGrouping = null,
        int $minimumIntegerDigits = null,
        int $minimumFractionDigits = null,
        int $maximumFractionDigits = null,
        int $minimumSignificantDigits = null,
        int $maximumSignificantDigits = null,
    ): string {
        if ($currencyDisplay !== null) {
            throw NumberFormatterException::unsupportedOption('currencyDisplay');
        }

        $formatter = $this->createBaseFormatter(
            'currency',
            $useGrouping,
            $minimumIntegerDigits,
            $minimumFractionDigits,
            $maximumFractionDigits,
            $minimumSignificantDigits,
            $maximumSignificantDigits,
        );

        $formatted = $formatter->formatCurrency($number, $currency);

        return $formatted === false ? throw NumberFormatterException::formatting() : $formatted;
    }

    public function formatPercent(
        int|float $number,
        bool $useGrouping = null,
        int $minimumIntegerDigits = null,
        int $minimumFractionDigits = null,
        int $maximumFractionDigits = null,
        int $minimumSignificantDigits = null,
        int $maximumSignificantDigits = null,
    ): string {
        $formatter = $this->createBaseFormatter(
            'percent',
            $useGrouping,
            $minimumIntegerDigits,
            $minimumFractionDigits,
            $maximumFractionDigits,
            $minimumSignificantDigits,
            $maximumSignificantDigits,
        );

        $formatted = $formatter->format($number);

        return $formatted === false ? throw NumberFormatterException::formatting() : $formatted;
    }

    /**
     * @param 'decimal'|'currency'|'percent' $style
     */
    private function createBaseFormatter(
        string $style,
        bool $useGrouping = null,
        int $minimumIntegerDigits = null,
        int $minimumFractionDigits = null,
        int $maximumFractionDigits = null,
        int $minimumSignificantDigits = null,
        int $maximumSignificantDigits = null,
    ): BaseNumberFormatter {
        $useGrouping ??= true;

        $formatter = BaseNumberFormatter::create($this->locale, match ($style) {
            'decimal' => BaseNumberFormatter::DECIMAL,
            'currency' => BaseNumberFormatter::CURRENCY,
            'percent' => BaseNumberFormatter::PERCENT,
        });

        $formatter->setAttribute(BaseNumberFormatter::GROUPING_USED, (int) $useGrouping);

        foreach ([
            BaseNumberFormatter::MIN_INTEGER_DIGITS => $minimumIntegerDigits,
            BaseNumberFormatter::MIN_FRACTION_DIGITS => $minimumFractionDigits,
            BaseNumberFormatter::MAX_FRACTION_DIGITS => $maximumFractionDigits,
            BaseNumberFormatter::MIN_SIGNIFICANT_DIGITS => $minimumSignificantDigits,
            BaseNumberFormatter::MAX_SIGNIFICANT_DIGITS => $maximumSignificantDigits,
        ] as $attribute => $value) {
            if ($value !== null) {
                $formatter->setAttribute($attribute, $value);
            }
        }

        return $formatter;
    }
}
