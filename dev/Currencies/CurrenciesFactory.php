<?php

declare(strict_types=1);

namespace Major\Fluent\Dev\Currencies;

use Exception;
use Major\Fluent\Dev\Helpers as H;
use Major\Fluent\Formatters\Number\Locale\Currency;
use Psl\Dict;
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
        $name = $data['displayName']
            ?? throw new Exception("No display name for {$code} in {$locale}.");

        $symbol = $data['symbol']
            ?? throw new Exception("No symbol for {$code} in {$locale}.");

        $narrow = $data['symbol-alt-narrow'] ?? null;
        $minorUnits = H\IsoData::minorUnits($code);
        $plurals = self::makePlurals($data);

        return new Currency($code, $name, $symbol, $narrow, $plurals, $minorUnits);
    }

    /**
     * @param array<string, string> $data
     * @return ?array<string, string>
     */
    private static function makePlurals(array $data): ?array
    {
        $data = Dict\filter_keys($data, fn ($key) => str_starts_with($key, 'displayName-count-'));
        $data = Dict\map_keys($data, fn ($key) => Str\strip_prefix($key, 'displayName-count-'));

        return $data ?: null;
    }
}
