<?php

declare(strict_types=1);

namespace Major\Fluent\Dev\Compilers;

use Exception;
use Major\Fluent\Dev\Helpers\CldrData;
use Major\Fluent\Dev\Helpers\IsoData;
use Major\Fluent\Dev\Helpers\LocaleFiles;
use Psl\Dict;
use Psl\Str;
use Psl\Type;
use Psl\Vec;

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
        $c = Dict\map_with_key($this->currencies, fn ($code, $data) => $this->makeCurrency($code, $data));
        $c = Dict\map_with_key($c, fn ($code, $data) => "'{$code}' => {$data}");
        $currencies = Str\join(Vec\values($c), ",\n    ");

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
    private function makeCurrency(string $code, array $data): string
    {
        $name = $data['displayName']
            ?? throw new Exception("No display name for {$code} in {$this->locale}.");

        $symbol = $data['symbol']
            ?? throw new Exception("No symbol for {$code} in {$this->locale}.");

        $name = Str\replace($name, '\\"', '"');

        $compiled = "new C('{$code}'";

        if ($name !== $code && $symbol !== $code) {
            $compiled .= ", '{$name}', '{$symbol}'";
        } elseif ($name !== $code) {
            $compiled .= ", '{$name}'";
        } elseif ($symbol !== $code) {
            $compiled .= ", symbol: '{$symbol}'";
        }

        if (($data['symbol-alt-narrow'] ?? $code) !== $code) {
            $compiled .= ", narrow: '{$data['symbol-alt-narrow']}'";
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
        $data = Dict\filter_keys($data, fn ($key) => str_starts_with($key, 'displayName-count-'));

        if (! $data) {
            return null;
        }

        $data = Dict\map_keys($data, function ($key) {
            return Type\string()->coerce(Str\after($key, 'displayName-count-'));
        });
        $data = Dict\map($data, fn ($value) => Str\replace($value, '\\"', '"'));
        $data = Dict\map_with_key($data, fn ($category, $pattern) => "'{$category}' => '{$pattern}'");

        return '[' . Str\join(Vec\values($data), ', ') . ']';
    }
}
