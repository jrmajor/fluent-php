<?php

declare(strict_types=1);

namespace Major\Fluent\Dev\Currencies;

use Exception;
use Major\Exporter as E;
use Major\Fluent\Dev\Helpers as H;
use Major\Fluent\Formatters\Number\Locale\Currency;
use Psl\Dict;
use Psl\Str;

use function stripslashes as ss;

final class CurrenciesCompiler
{
    /** @var array<string, array<string, string>> */
    private array $currencies;

    public function __construct(
        public string $locale,
    ) {
        $this->currencies = H\CldrData::get('numbers', $locale, 'currencies.*.*.numbers.*');
    }

    public function make(): void
    {
        $currencies = Dict\map_with_key($this->currencies, $this->makeCurrency(...));
        $currencies = Dict\map($currencies, fn ($c) => new CurrencyExporter($c));
        $currencies = E\dict($currencies)->multiline();

        H\LocaleFiles::write('currencies', $this->locale, E\to_file($currencies));
    }

    /**
     * @param array<string, string> $data
     */
    private function makeCurrency(string $code, array $data): Currency
    {
        $name = $data['displayName']
            ?? throw new Exception("No display name for {$code} in {$this->locale}.");

        $symbol = $data['symbol']
            ?? throw new Exception("No symbol for {$code} in {$this->locale}.");

        $narrow = $data['symbol-alt-narrow'] ?? null;
        $minorUnits = H\IsoData::minorUnits($code);
        $plurals = $this->makePlurals($data);

        return new Currency($code, ss($name), $symbol, $narrow, $plurals, $minorUnits);
    }

    /**
     * @param array<string, string> $data
     * @return ?array<string, string>
     */
    private function makePlurals(array $data): ?array
    {
        $data = Dict\filter_keys($data, fn ($key) => str_starts_with($key, 'displayName-count-'));
        $data = Dict\map_keys($data, fn ($key) => Str\strip_prefix($key, 'displayName-count-'));
        $data = Dict\map($data, fn ($value) => ss($value));

        return $data ?: null;
    }
}
