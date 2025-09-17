<?php

namespace Major\Fluent\Formatters\Number;

use Major\Fluent\Exceptions\ShouldNotHappen;
use Major\Fluent\Formatters\InvalidArgumentException;
use Major\Fluent\Formatters\LocaleData;
use Major\Fluent\Formatters\Number\Locale\Currency;
use Major\Fluent\Formatters\Number\Locale\Locale;
use Major\Fluent\Formatters\Number\Locale\Unit;
use Major\PluralRules\PluralRules;

/**
 * @internal
 */
final class NumberFormatter
{
    public const string PatternRegEx = "([¤\\-%\u{A0}\u{200E}\u{200F}]*)([,.#0]+)([¤%\u{A0}\u{200F}]*)";

    private const array NumeralSystems = [
        'arab' => ['٠', '١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩'],
        'arabext' => ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'],
        'beng' => ['০', '১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯'],
        'deva' => ['०', '१', '२', '३', '४', '५', '६', '७', '८', '९'],
        'latn' => ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'],
        'mymr' => ['၀', '၁', '၂', '၃', '၄', '၅', '၆', '၇', '၈', '၉'],
    ];

    private string $localeName;

    private Locale $locale;

    /** @var array<string, Currency> */
    private array $currencies = [];

    /** @var array<string, Unit> */
    private array $units = [];

    public function __construct(string $locale)
    {
        $this->localeName = str_replace('_', '-', $locale);

        if (! preg_match('/^[A-Za-z-]+$/', $locale)) {
            throw new InvalidArgumentException("Locale \"{$locale}\" contains invalid characters.");
        }

        $this->locale = LocaleData::loadNumbers($this->localeName);
        $this->currencies = LocaleData::loadCurrencies($this->localeName);
        $this->units = LocaleData::loadUnits($this->localeName);
    }

    public function format(int|float $number, Options $options): string
    {
        $original = $number;

        $options->fillWithDefaults(
            $options->style === 'currency' ? $this->getCurrency($options) : null,
        );

        if (
            ($options->style === 'currency' && $options->currencyDisplay === 'name')
            || $options->style === 'unit'
        ) {
            $pattern = $this->locale->decimal;
        } else {
            $pattern = $this->locale->{$options->style};
        }

        if ($options->style === 'percent') {
            $number *= 100;
        }

        [$pattern, $minus, $number] = $this->handleNegativeValues($pattern, $number);

        [$pre, $pattern, $post] = $this->splitPattern($pattern);
        [$int, $frac] = $this->splitNumber($number);

        $frac = $this->applyMinimumFractionDigits($options, $int, $frac);
        [$int, $frac] = $this->applyMaximumFractionDigits($options, $int, $frac);
        $int = $this->applyMaximumSignificantDigits($options, $int);
        $int = $this->applyMinimumIntegerDigits($options, $int);

        $formatted = $this->applyGrouping($options, $pattern, $int);

        if (strlen($frac)) {
            $formatted .= '.' . $frac;
        }

        $minus = $this->applyReplacements($minus);
        $formatted = $this->applyReplacements($pre . $formatted . $post);

        if ($options->style === 'currency') {
            if ($options->currencyDisplay === 'name') {
                return $this->applyCurrencyName($options, $minus . $formatted, $original);
            }

            return $minus . $this->insertCurrencySymbol($options, $formatted);
        }

        if ($options->style === 'unit') {
            return $this->applyUnit($options, $minus . $formatted, $original);
        }

        return $minus . $formatted;
    }

    /**
     * @return array{string, string, int|float}
     */
    private function handleNegativeValues(string $pattern, int|float $number): array
    {
        if (str_contains($pattern, ';')) {
            $pattern = explode(';', $pattern)[$number < 0 ? 1 : 0];
            $minus = '';
        } else {
            $minus = '-';
        }

        return $number < 0
            ? [$pattern, $minus, abs($number)]
            : [$pattern, '', $number];
    }

    private function applyMinimumFractionDigits(Options $o, string $int, string $frac): string
    {
        $minimumFractionDigits = $o->minimumSignificantDigits !== null
            ? $o->minimumSignificantDigits - strlen($int)
            : $o->minimumFractionDigits;

        assert($minimumFractionDigits !== null);

        return str_pad($frac, $minimumFractionDigits, '0');
    }

    /**
     * @return array{string, string}
     */
    private function applyMaximumFractionDigits(Options $o, string $int, string $frac): array
    {
        $maximumFractionDigits = $o->maximumSignificantDigits !== null
            ? $o->maximumSignificantDigits - strlen($int)
            : $o->maximumFractionDigits;

        assert($maximumFractionDigits !== null);

        if ($maximumFractionDigits <= 0) {
            if ((int) substr($frac, 0, 1) >= 5) {
                $int++;
            }

            return [(string) $int, ''];
        }

        if (strlen($frac) <= $maximumFractionDigits) {
            return [$int, $frac];
        }

        $paddingZeros = substr($frac, 0, strspn($frac, '0'));
        $trimmed = (int) substr($frac, 0, $maximumFractionDigits);

        if ((int) substr($frac, $maximumFractionDigits, 1) >= 5) {
            $trimmed++;
        }

        return [$int, substr($paddingZeros . $trimmed, -$maximumFractionDigits)];
    }

    private function applyMaximumSignificantDigits(Options $o, string $int): string
    {
        if (
            $o->maximumSignificantDigits === null
            || strlen($int) <= $o->maximumSignificantDigits
        ) {
            return $int;
        }

        $trimmed = (int) substr($int, 0, $o->maximumSignificantDigits);
        $paddingZeros = str_repeat('0', strlen($int) - $o->maximumSignificantDigits);

        if ((int) substr($int, $o->maximumSignificantDigits, 1) >= 5) {
            $trimmed++;
        }

        return $trimmed . $paddingZeros;
    }

    private function applyMinimumIntegerDigits(Options $o, string $int): string
    {
        if ($o->minimumIntegerDigits === null) {
            return $int;
        }

        return str_pad($int, $o->minimumIntegerDigits, '0', STR_PAD_LEFT);
    }

    private function applyGrouping(Options $o, string $pattern, string $int): string
    {
        if (! $o->useGrouping) {
            return $int;
        }

        $chunks = [];
        $int = strrev($int);
        $size = 3;

        for ($i = 0; strlen($int) > $size; $i++) {
            if ($i === 0 && strlen($int) < $size + $this->locale->grouping) {
                break;
            }

            $chunks[] = strrev(substr($int, 0, $size));
            $int = substr($int, $size);

            if ($i === 0) {
                $size = str_contains($pattern, '#,##,##0') ? 2 : 3;
            }
        }

        $chunks[] = strrev($int);

        return implode(',', array_reverse($chunks));
    }

    private function applyReplacements(string $string): string
    {
        $string = implode('', array_map(
            fn (string $char) => $this->locale->symbol($char),
            str_split($string),
        ));

        return str_replace(
            range(0, 9),
            self::NumeralSystems[$this->locale->system],
            $string,
        );
    }

    private function applyCurrencyName(Options $o, string $formatted, int|float $original): string
    {
        $currency = $this->getCurrency($o);

        $category = PluralRules::select($this->localeName, $original);
        $name = $currency->plurals[$category]
            ?? $currency->plurals['other']
            ?? $currency->name;
        $pattern = $this->locale->unitPattern($category);

        return str_replace(['{0}', '{1}'], [$formatted, $name], $pattern);
    }

    private function applyUnit(Options $o, string $formatted, int|float $original): string
    {
        $unit = $this->getUnit($o);

        $plurals = match ($o->unitDisplay) {
            'long' => $unit->longPlurals,
            'short' => $unit->shortPlurals,
            'narrow' => $unit->narrowPlurals,
        };

        $category = PluralRules::select($this->localeName, $original);
        $pattern = $plurals[$category] ?? $plurals['other'];

        return str_replace('{0}', $formatted, $pattern);
    }

    private function insertCurrencySymbol(Options $o, string $formatted): string
    {
        $currency = $this->getCurrency($o);

        $symbol = match ($o->currencyDisplay) {
            'symbol' => $currency->symbol,
            'narrowSymbol' => $currency->narrow,
            'code' => $currency->code,
            default => throw new ShouldNotHappen(),
        };

        $prefix = '';

        if (str_starts_with($formatted, "\u{200E}")) {
            $formatted = mb_substr($formatted, 1);
            $prefix = "\u{200E}";
        }

        $before = match ('¤') {
            mb_substr($formatted, 0, 1) => true,
            mb_substr($formatted, -1) => false,
            default => throw new ShouldNotHappen(),
        };

        $formatted = str_replace('¤', '', $formatted);

        $borderingFormatted = $before ? mb_substr($formatted, 0, 1) : mb_substr($formatted, -1);
        $borderingSymbol = ! $before ? mb_substr($symbol, 0, 1) : mb_substr($symbol, -1);

        if (
            ! $this->isDigit($borderingFormatted)
            || preg_match('/^\\p{S}|\\p{Z}$/u', $borderingSymbol)
        ) {
            return $prefix . ($before ? $symbol . $formatted : $formatted . $symbol);
        }

        return $prefix . ($before ? "{$symbol}\u{A0}{$formatted}" : "{$formatted}\u{A0}{$symbol}");
    }

    private function isDigit(string $c): bool
    {
        return in_array($c, self::NumeralSystems[$this->locale->system], true);
    }

    private function getCurrency(Options $options): Currency
    {
        if ($options->style !== 'currency') {
            throw new InvalidArgumentException();
        }

        $currency = $options->currency;

        assert($currency !== null);

        return $this->currencies[$currency] ?? new Currency($currency);
    }

    private function getUnit(Options $options): Unit
    {
        if ($options->style !== 'unit') {
            throw new InvalidArgumentException();
        }

        $unit = $options->unit;

        assert($unit !== null);

        return $this->units[$unit]
            ?? throw new InvalidArgumentException("Unsupported unit: {$unit}.");
    }

    /**
     * @return array{string, string, string}
     */
    private function splitPattern(string $pattern): array
    {
        $matches = [];

        if (! preg_match('/^' . self::PatternRegEx . '$/', $pattern, $matches)) {
            throw new ShouldNotHappen();
        }

        /** @var array{string, string, string} */
        return array_slice($matches, 1);
    }

    /**
     * @return array{string, string}
     */
    private function splitNumber(int|float $number): array
    {
        $number = explode('.', (string) $number, 2);

        /** @var array{string, string} */
        return count($number) === 2 ? $number : [$number[0], ''];
    }
}
