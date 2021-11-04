<?php

namespace Major\Fluent\Formatters\Number;

use InvalidArgumentException;
use Major\Fluent\Exceptions\ShouldNotHappen;
use Major\Fluent\Formatters\Number\Locale\Currency;
use Major\Fluent\Formatters\Number\Locale\Locale;

/**
 * @internal
 */
final class NumberFormatter
{
    private const NUMBERING_SYSTEMS = [
        'arab' => ['٠', '١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩'],
        'arabext' => ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'],
        'beng' => ['০', '১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯'],
        'deva' => ['०', '१', '२', '३', '४', '५', '६', '७', '८', '९'],
        'latn' => ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'],
        'mymr' => ['၀', '၁', '၂', '၃', '၄', '၅', '၆', '၇', '၈', '၉'],
    ];

    private Locale $locale;

    /** @var Currency[] */
    private array $currencies = [];

    public function __construct(string $locale)
    {
        $locale = mb_strtolower(str_replace('_', '-', $locale));

        if (! preg_match('/^[a-z-]+$/', $locale)) {
            throw new InvalidArgumentException("Locale \"{$locale}\" contains invalid characters.");
        }

        $this->loadLocaleData($locale);
    }

    public function format(int|float $number, Options $options): string
    {
        $currency = $this->getCurrency($options);
        $options->fillWithDefaults($currency);

        if ($options->style === 'percent') {
            $number *= 100;
        }

        $pattern = $this->locale->{$options->style . 'Format'};

        if (str_contains($pattern, ';')) {
            $pattern = explode(';', $pattern)[$number < 0 ? 1 : 0];
            $minus = '';
        } else {
            $minus = '-';
        }

        if ($number < 0) {
            $number = abs($number);
        } else {
            $minus = '';
        }

        [$pre, $pattern, $post] = $this->splitPattern($pattern);

        $number = explode('.', (string) $number);

        $int = $number[0];
        $frac = $number[1] ?? '';

        $frac = $this->applyMinimumFractionDigits($options, $int, $frac);
        [$int, $frac] = $this->applyMaximumFractionDigits($options, $int, $frac);
        $int = $this->applyMaximumSignificantDigits($options, $int);
        $int = $this->applyMinimumIntegerDigits($options, $int);

        $formatted = $this->applyGrouping($options, $pattern, $int);

        if (strlen($frac)) {
            $formatted .= '.' . $frac;
        }

        return $this->applyReplacements($options, $minus . $pre . $formatted . $post);
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
            $intWithoutLast = substr($int, 0, strlen($int) - 1);
            $intLastDigit = (int) substr($int, strlen($int) - 1);

            if ((int) substr($frac, 0, 1) >= 5) {
                $intLastDigit++;
            }

            return [$intWithoutLast . $intLastDigit, ''];
        }

        if (strlen($frac) <= $maximumFractionDigits) {
            return [$int, $frac];
        }

        $withoutLast = substr($frac, 0, $maximumFractionDigits - 1);
        $lastDigit = (int) substr($frac, $maximumFractionDigits - 1, 1);

        if ((int) substr($frac, $maximumFractionDigits, 1) >= 5) {
            $lastDigit++;
        }

        return [$int, $withoutLast . $lastDigit];
    }

    private function applyMaximumSignificantDigits(Options $o, string $int): string
    {
        if (
            $o->maximumSignificantDigits === null
            || strlen($int) <= $o->maximumSignificantDigits
        ) {
            return $int;
        }

        $withoutLast = substr($int, 0, $o->maximumSignificantDigits - 1);
        $lastDigit = (int) substr($int, $o->maximumSignificantDigits - 1, 1);
        $padding = str_repeat('0', strlen($int) - $o->maximumSignificantDigits);

        if ((int) substr($int, $o->maximumSignificantDigits, 1) >= 5) {
            $lastDigit++;
        }

        return $withoutLast . $lastDigit . $padding;
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
            if ($i === 0 && strlen($int) < $size + $this->locale->minimumGroupingDigits) {
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

    private function applyReplacements(Options $o, string $formatted): string
    {
        $replacer = fn (string $char) => $this->locale->symbols->replacements()[$char] ?? $char;

        $formatted = implode('', array_map($replacer, str_split($formatted)));

        return str_replace(
            range(0, 9),
            self::NUMBERING_SYSTEMS[$this->locale->system],
            $formatted,
        );
    }

    private function loadLocaleData(string $locale): void
    {
        $parts = explode('-', $locale, 2);

        $language = $parts[0];
        $region = $parts[1] ?? null;

        $basePath = __DIR__ . '/../../../locales/';

        if ($region !== null && file_exists($fn = "{$basePath}/numbers/{$language}-{$region}.php")) {
            $this->locale = require $fn;
        } elseif (file_exists($fn = "{$basePath}/numbers/{$language}.php")) {
            $this->locale = require $fn;
        } else {
            throw new InvalidArgumentException("Unsupported locale: {$locale}.");
        }

        if ($region !== null && file_exists($fn = "{$basePath}/currencies/{$language}-{$region}.php")) {
            $this->currencies = require $fn;
        } elseif (file_exists($fn = "{$basePath}/currencies/{$language}.php")) {
            $this->currencies = require $fn;
        } else {
            throw new InvalidArgumentException("Unsupported locale: {$locale}.");
        }
    }

    private function getCurrency(Options $options): ?Currency
    {
        if ($options->style !== 'currency') {
            return null;
        }

        $currency = $options->currency;

        assert($currency !== null);

        return $this->currencies[$currency]
            ?? throw NumberFormatterException::missingCurrency($currency);
    }

    /**
     * @return array{string, string, string}
     */
    private function splitPattern(string $pattern): array
    {
        $regex = "/^([¤\\-%\u{00A0}\u{200E}\u{200F}]*)([,.#0]+)([¤%\u{00A0}]*)$/";
        $matches = [];

        if (! preg_match($regex, $pattern, $matches)) {
            throw new ShouldNotHappen();
        }

        /** @phpstan-ignore-next-line */
        return array_slice($matches, 1);
    }
}
