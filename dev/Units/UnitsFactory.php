<?php

declare(strict_types=1);

namespace Major\Fluent\Dev\Units;

use Exception;
use Major\Fluent\Dev\Helpers as H;
use Major\Fluent\Formatters\Number\Locale\Unit;
use Psl\Dict;
use Psl\Str;

final class UnitsFactory
{
    /**
     * A subset of units from the full list was selected for use in ECMAScript.
     *
     * @see https://tc39.es/proposal-unified-intl-numberformat/section6/locales-currencies-tz_proposed_out.html#sec-issanctionedsimpleunitidentifier
     *
     * @var list<string>
     */
    private static array $unitSubset = [
        'length-kilometer',
        'angle-degree',
        'area-acre',
        'area-hectare',
        'concentr-percent',
        'digital-bit',
        'digital-byte',
        'digital-gigabit',
        'digital-gigabyte',
        'digital-kilobit',
        'digital-kilobyte',
        'digital-megabit',
        'digital-megabyte',
        'digital-petabyte',
        'digital-terabit',
        'digital-terabyte',
        'duration-day',
        'duration-hour',
        'duration-millisecond',
        'duration-minute',
        'duration-month',
        'duration-second',
        'duration-week',
        'duration-year',
        'length-centimeter',
        'length-foot',
        'length-inch',
        'length-kilometer',
        'length-meter',
        'length-mile-scandinavian',
        'length-mile',
        'length-millimeter',
        'length-yard',
        'mass-gram',
        'mass-kilogram',
        'mass-ounce',
        'mass-pound',
        'mass-stone',
        'temperature-celsius',
        'temperature-fahrenheit',
        'volume-fluid-ounce',
        'volume-gallon',
        'volume-liter',
        'volume-milliliter',
    ];

    /**
     * @return array<string, Unit>
     */
    public static function make(string $locale): array
    {
        $unitStyles = H\CldrData::get('units', $locale, 'units.*.*.units');
        ['long' => $long, 'short' => $short, 'narrow' => $narrow] = $unitStyles;

        /** @psalm-suppress PossiblyUndefinedArrayOffset */
        $subset = array_combine(Dict\map(
            self::$unitSubset,
            fn ($n) => explode('-', $n, 2)[1],
        ), self::$unitSubset);

        return Dict\map_with_key(
            $subset,
            fn ($_, $unit) => self::makeUnit(locale: $locale, unit: $unit, long: $long[$unit], short: $short[$unit], narrow: $narrow[$unit]),
        );
    }

    /**
     * @throws Exception
     */
    private static function makeUnit(string $locale, string $unit, array $long, array $short, array $narrow): Unit
    {
        $long = self::makePart($long, 'long', $locale);
        $short = self::makePart($short, 'short', $locale);
        $narrow = self::makePart($narrow, 'narrow', $locale);

        return new Unit($unit, $long, $short, $narrow);
    }

    /**
     * @psalm-param 'long'|'narrow'|'short' $style
     */
    private static function makePart(array $data, string $style, string $locale): array
    {
        $name = $data['displayName']
            ?? throw new Exception("No display name for {$style} in {$locale}.");

        $plurals = self::makePlurals($data);

        $perUnitPattern = $data['perUnitPattern'] ?? '';

        return [
            'name' => $name,
            'plurals' => $plurals,
            'perUnit' => $perUnitPattern,
        ];
    }

    /**
     * @param array<string, string> $data
     *
     * @return ?array<string, string>
     */
    private static function makePlurals(array $data): ?array
    {
        $prefix = 'unitPattern-count-';
        $data = Dict\filter_keys($data, fn ($key) => str_starts_with($key, $prefix));
        $data = Dict\map_keys($data, fn ($key) => Str\strip_prefix($key, $prefix));

        return $data ?: null;
    }
}
