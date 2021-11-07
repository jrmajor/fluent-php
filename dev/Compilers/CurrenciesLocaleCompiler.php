<?php

declare(strict_types=1);

namespace Major\Fluent\Dev\Compilers;

use Exception;
use Major\Fluent\Dev\Helpers\CldrData;
use Major\Fluent\Dev\Helpers\IsoData;
use Major\Fluent\Dev\Helpers\LocaleFiles;

final class CurrenciesLocaleCompiler
{
    /** @var array<string, array<string, string>> */
    private array $currencies;

    public function __construct(
        public string $locale,
    ) {
        $this->currencies = CldrData::get(
            'numbers', $locale, "currencies.main.{$locale}.numbers.currencies",
        );
    }

    public function make(): void
    {
        $currencies = collect($this->currencies)
            ->map(fn ($data, $code) => $this->makeCurrency($data, $code))
            ->map(fn ($data, $code) => "'{$code}' => {$data}")
            ->implode(",\n    ");

        $compiled = <<<PHP
            <?php

            use Major\\Fluent\\Formatters\\Number\\Locale\\Currency as C;

            return [
                {$currencies},
            ];

            PHP;

        LocaleFiles::store('currencies', $this->locale, $compiled);
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

        if (IsoData::minorUnits($code) !== 2) {
            $compiled .= ', minorUnits: ' . IsoData::minorUnits($code);
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
}
