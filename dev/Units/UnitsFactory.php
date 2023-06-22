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
     */
    private const UnitSubset = [
        'acre' => 'area-acre',
        'bit' => 'digital-bit',
        'byte' => 'digital-byte',
        'celsius' => 'temperature-celsius',
        'centimeter' => 'length-centimeter',
        'day' => 'duration-day',
        'degree' => 'angle-degree',
        'fahrenheit' => 'temperature-fahrenheit',
        'fluid-ounce' => 'volume-fluid-ounce',
        'foot' => 'length-foot',
        'gallon' => 'volume-gallon',
        'gigabit' => 'digital-gigabit',
        'gigabyte' => 'digital-gigabyte',
        'gram' => 'mass-gram',
        'hectare' => 'area-hectare',
        'hour' => 'duration-hour',
        'inch' => 'length-inch',
        'kilobit' => 'digital-kilobit',
        'kilobyte' => 'digital-kilobyte',
        'kilogram' => 'mass-kilogram',
        'kilometer' => 'length-kilometer',
        'liter' => 'volume-liter',
        'megabit' => 'digital-megabit',
        'megabyte' => 'digital-megabyte',
        'meter' => 'length-meter',
        'mile' => 'length-mile',
        'mile-scandinavian' => 'length-mile-scandinavian',
        'milliliter' => 'volume-milliliter',
        'millimeter' => 'length-millimeter',
        'millisecond' => 'duration-millisecond',
        'minute' => 'duration-minute',
        'month' => 'duration-month',
        'ounce' => 'mass-ounce',
        'percent' => 'concentr-percent',
        'petabyte' => 'digital-petabyte',
        'pound' => 'mass-pound',
        'second' => 'duration-second',
        'stone' => 'mass-stone',
        'terabit' => 'digital-terabit',
        'terabyte' => 'digital-terabyte',
        'week' => 'duration-week',
        'yard' => 'length-yard',
        'year' => 'duration-year',
    ];

    /**
     * @return array<string, Unit>
     */
    public static function make(string $locale): array
    {
        $unitStyles = H\CldrData::get('units', $locale, 'units.*.*.units');

        return Dict\map(self::UnitSubset, fn ($unit) => self::makeUnit(
            locale: $locale,
            long: $unitStyles['long'][$unit],
            short: $unitStyles['short'][$unit],
            narrow: $unitStyles['narrow'][$unit],
        ));
    }

    /**
     * @throws Exception
     */
    private static function makeUnit(string $locale, array $long, array $short, array $narrow): Unit
    {
        $long = self::makePart($long, 'long', $locale);
        $short = self::makePart($short, 'short', $locale);
        $narrow = self::makePart($narrow, 'narrow', $locale);

        return new Unit($long, $short, $narrow);
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
