<?php

namespace Major\Fluent\Dev\Compilers;

use Illuminate\Support\Str;
use Major\Fluent\Dev\Helpers\LocaleFiles;
use Safe as s;

final class CurrenciesOptimizer
{
    /** @var array<string, string> */
    private array $languageData;

    public function __construct(
        private string $language,
        /** @var string[] */
        private array $regions,
    ) { }

    public function optimize(): void
    {
        $this->languageData = $this->loadLocaleData($this->language);

        foreach ($this->regions as $region) {
            $this->optimizeRegion($region);
        }
    }

    private function optimizeRegion(string $region): void
    {
        $currencies = $this->loadLocaleData($region);

        $currenciesToRemove = [];

        foreach ($currencies as $currency => $data) {
            if ($this->languageData[$currency] === $data) {
                $currenciesToRemove[] = $currency;
            }
        }

        $rawData = LocaleFiles::read('currencies', $region);

        foreach ($currenciesToRemove as $currency) {
            $rawData = s\preg_replace("/\\s+'{$currency}' => .*/", '', $rawData);
        }

        LocaleFiles::store('currencies', $region, $rawData);
    }

    /**
     * @return array<string, string>
     */
    private function loadLocaleData(string $locale): array
    {
        $data = LocaleFiles::read('currencies', $locale);

        return Str::of($data)
            ->after("return [\n    '")
            ->before("),\n];")
            ->explode("),\n    '")
            ->mapWithKeys(function (string $data) {
                $data = explode("' => new C(", $data, 2);

                return [$data[0] => $data[1]];
            })
            ->all();
    }
}