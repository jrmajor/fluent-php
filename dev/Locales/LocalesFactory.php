<?php

namespace Major\Fluent\Dev\Locales;

use Exception;
use Major\Fluent\Dev\Helpers as H;
use Major\Fluent\Formatters\Number\Locale\Locale;
use Major\Fluent\Formatters\Number\NumberFormatter;
use Psl\Dict;
use Psl\Regex;
use Psl\Str;
use Psl\Type;

final class LocalesFactory
{
    public static function make(string $locale): Locale
    {
        $data = H\CldrData::get('numbers', $locale, 'numbers.*.*.numbers');

        $system = self::system($data);
        self::checkCurrencySpacing($locale, $data, $system);

        return new Locale(
            $system,
            self::pattern($data, $system, 'decimal'),
            self::pattern($data, $system, 'percent'),
            self::pattern($data, $system, 'currency'),
            self::grouping($data),
            self::symbols($data, $system),
            self::unitPatterns($data, $system),
            code: $locale,
        );
    }

    private static function system(array $data): string
    {
        return $data['defaultNumberingSystem'];
    }

    private static function pattern(array $data, string $system, string $type): string
    {
        $key = "{$type}Formats-numberSystem-{$system}";
        $pattern = $data[$key]['standard'];

        Type\string()->assert($pattern);

        $regex = NumberFormatter::PatternRegEx;

        if (! Regex\matches($pattern, "/^{$regex}(;{$regex})?$/")) {
            throw new Exception("Pattern {$pattern} is invalid.");
        }

        return $pattern;
    }

    private static function grouping(array $data): int
    {
        $grouping = $data['minimumGroupingDigits'];

        return Type\int()->coerce($grouping);
    }

    /**
     * @return array{string, string, string, string}
     */
    private static function symbols(array $data, string $system): array
    {
        $all = $data["symbols-numberSystem-{$system}"];

        Type\dict(Type\string(), Type\string())->assert($all);

        return [$all['decimal'], $all['group'], $all['minusSign'], $all['percentSign']];
    }

    /**
     * @return array<string, string>
     */
    private static function unitPatterns(array $data, string $system): array
    {
        $data = $data["currencyFormats-numberSystem-{$system}"];

        $data = Type\dict(Type\string(), Type\mixed())->coerce($data);

        $data = Dict\filter_keys($data, fn ($key) => Str\starts_with($key, 'unitPattern-count-'));
        $data = Dict\filter($data, fn ($value) => $value !== '{0} {1}');

        if (! $data) {
            return [];
        }

        return Dict\map_keys($data, function ($key) {
            return Str\strip_prefix($key, 'unitPattern-count-');
        });
    }

    private static function checkCurrencySpacing(string $locale, array $data, string $system): void
    {
        $spacing = $data["currencyFormats-numberSystem-{$system}"]['currencySpacing'];

        foreach ([
            'currencyMatch' => '[[:^S:]&[:^Z:]]',
            'surroundingMatch' => '[:digit:]',
            'insertBetween' => "\u{A0}",
        ] as $key => $value) {
            if ($spacing['beforeCurrency'][$key] !== $value) {
                throw new InvalidCurrencySpacing($locale, 'beforeCurrency', $key);
            }

            if ($spacing['afterCurrency'][$key] !== $value) {
                throw new InvalidCurrencySpacing($locale, 'afterCurrency', $key);
            }
        }
    }
}
