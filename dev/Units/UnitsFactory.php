<?php

declare(strict_types=1);

namespace Major\Fluent\Dev\Units;

use Exception;
use Major\Fluent\Dev\Helpers as H;
use Major\Fluent\Formatters\Number\Locale\Unit;
use Psl\Dict;
use Psl\Iter;
use Psl\Str;

final class UnitsFactory
{
    /**
     * A subset of units from CLDR that is available in JavaScript.
     *
     * @see https://tc39.es/ecma402/#table-sanctioned-simple-unit-identifiers
     */
    private const Units = [
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
        'microsecond' => 'duration-microsecond',
        'mile' => 'length-mile',
        'mile-scandinavian' => 'length-mile-scandinavian',
        'milliliter' => 'volume-milliliter',
        'millimeter' => 'length-millimeter',
        'millisecond' => 'duration-millisecond',
        'minute' => 'duration-minute',
        'month' => 'duration-month',
        'nanosecond' => 'duration-nanosecond',
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
        $data = H\CldrData::get('units', $locale, 'units.*.*.units');

        return Dict\map(self::Units, fn ($unit) => new Unit(
            self::makeStyle($locale, $unit, 'long', $data),
            self::makeStyle($locale, $unit, 'short', $data),
            self::makeStyle($locale, $unit, 'narrow', $data),
        ));
    }

    /**
     * @param array<string, mixed> $data
     *
     * @return array<string, string>
     */
    private static function makeStyle(
        string $locale,
        string $unit,
        string $style,
        array $data,
    ): array {
        $exceptionsFor = "for {$style} {$unit} in {$locale}";

        $styleData = $data[$style][$unit]
            ?? throw new Exception("No data {$exceptionsFor}.");

        $plurals = self::makePlurals($styleData);

        if (! Iter\contains_key($plurals, 'other')) {
            throw new Exception("Plurals {$exceptionsFor} does not contain the \"other\" key.");
        }

        return $plurals;
    }

    /**
     * @param array<string, string> $data
     *
     * @return array<string, string>
     */
    private static function makePlurals(array $data): array
    {
        $prefix = 'unitPattern-count-';
        $data = Dict\filter_keys($data, fn ($key) => str_starts_with($key, $prefix));

        return Dict\map_keys($data, fn ($key) => Str\strip_prefix($key, $prefix));
    }
}
