<?php

declare(strict_types=1);

namespace Major\Fluent\Dev\Currencies;

use Exception;
use Major\Fluent\Dev\Helpers as H;
use Major\Fluent\Formatters\Number\Locale\Currency;
use Psl\Dict;
use Psl\Iter;
use Psl\Str;

final class CurrenciesFactory
{
    /**
     * @return array<string, Currency>
     */
    public static function make(string $locale): array
    {
        return Dict\map_with_key(
            /** @var array<string, array<string, string>> */
            H\CldrData::get('numbers', $locale, 'currencies.*.*.numbers.*'),
            fn ($code, $data) => self::makeCurrency($locale, $code, $data),
        );
    }

    /**
     * @param array<string, string> $data
     */
    private static function makeCurrency(string $locale, string $code, array $data): Currency
    {
        $name = $data['displayName'] ?? null;
        $symbol = $data['symbol'] ?? null;
        $narrow = $data['symbol-alt-narrow'] ?? null;
        $minorUnits = H\IsoData::minorUnits($code);
        $plurals = self::makePlurals($data, "{$code} in {$locale}");

        return new Currency($code, $name, $symbol, $narrow, $plurals, $minorUnits);
    }

    /**
     * @param array<string, string> $data
     *
     * @return ?array<string, string>
     */
    private static function makePlurals(array $data, string $exceptionsFor): ?array
    {
        $prefix = 'displayName-count-';
        $data = Dict\filter_keys($data, fn ($key) => str_starts_with($key, $prefix));
        $data = Dict\map_keys($data, fn ($key) => Str\strip_prefix($key, $prefix));

        if ($data === []) {
            return null;
        }

        if (! Iter\contains_key($data, 'other')) {
            throw new Exception("Plurals {$exceptionsFor} do not contain the \"other\" key.");
        }

        return Dict\filter_with_key($data, fn ($c, $v) => $c === 'other' || $v !== $data['other']);
    }
}
