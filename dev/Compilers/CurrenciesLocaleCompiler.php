<?php

declare(strict_types=1);

namespace Major\Fluent\Dev\Compilers;

use Exception;
use SimpleXMLElement;

final class CurrenciesLocaleCompiler
{
    /** @var array<string, array<string, string>> */
    private array $currencies;

    /** @var array<string, int> */
    private array $minorUnits;

    public function __construct(
        public string $locale,
    ) {
        $currencies = file_get_contents(__DIR__ . "/../../node_modules/cldr-numbers-modern/main/{$locale}/currencies.json")
            ?: throw new Exception("Failed to read currencies.json data for {$locale}.");

        $this->currencies = json_decode($currencies, associative: true)['main'][$locale]['numbers']['currencies'];
    }

    public function make(): void
    {
        $currencies = array_map(function (string $code, array $data) {
            return "'{$code}' => " . $this->makeCurrency($data, $code);
        }, array_keys($this->currencies), $this->currencies);

        $currencies = implode(",\n    ", $currencies);

        $compiled = <<<PHP
            <?php

            use Major\\Fluent\\Formatters\\Number\\Locale\\Currency as C;

            return [
                {$currencies},
            ];

            PHP;

        file_put_contents(__DIR__ . "/../../locales/currencies/{$this->locale}.php", $compiled)
            ?: throw new Exception("Failed to write {$this->locale}.php");
    }

    /**
     * @param array<string, string> $data
     */
    private function makeCurrency(array $data, string $code): string
    {
        $name = $data['displayName']
            ?? throw new Exception("No display name for {$code} in {$this->locale}.");

        $symbol = $data['symbol']
            ?? throw new Exception("No symbol for {$code} in {$this->locale}.");

        $name = str_replace('\\"', '"', $name);

        $compiled = "new C('{$code}'";

        if ($name !== $code && $symbol !== $code) {
            $compiled .= ", '{$name}', '{$symbol}'";
        } elseif ($name !== $code) {
            $compiled .= ", '{$name}'";
        } elseif ($symbol !== $code) {
            $compiled .= ", symbol: '{$symbol}'";
        }

        if (isset($data['narrowSymbol'])) {
            $compiled .= ", narrow: '{$data['narrowSymbol']}'";
        }

        if ($plurals = $this->makePlurals($data)) {
            $compiled .= ", plurals: {$plurals}";
        }

        if ($this->minorUnits($code) !== 2) {
            $compiled .= ", minorUnits: {$this->minorUnits($code)}";
        }

        return $compiled . ')';
    }

    /**
     * @param array<string, string> $data
     */
    private function makePlurals(array $data): ?string
    {
        $plurals = [];

        foreach ($data as $key => $value) {
            if (! str_starts_with($key, 'displayName-count-')) {
                continue;
            }

            $plurals[substr($key, 18)] = str_replace('\\"', '"', $value);
        }

        if (! $plurals) {
            return null;
        }

        foreach ($plurals as $category => $plural) {
            $plurals[$category] = "'{$category}' => '{$plural}'";
        }

        return '[' . implode(', ', $plurals) . ']';
    }

    private function minorUnits(string $code): int
    {
        if (! isset($this->minorUnits)) {
            $this->loadMinorUnits();
        }

        return $this->minorUnits[$code] ?? 2;
    }

    private function loadMinorUnits(): void
    {
        $xml = file_get_contents(__DIR__ . '/../ISO4217.xml')
            ?: throw new Exception();

        $xml = new SimpleXMLElement($xml);

        $this->minorUnits = [];

        foreach ($xml->CcyTbl->children() as $data) {
            $currency = (string) $data->Ccy;
            $minorUnits = (string) $data->CcyMnrUnts;

            if (! is_numeric($minorUnits)) {
                continue;
            }

            $this->minorUnits[$currency] = (int) $minorUnits;
        }
    }
}
