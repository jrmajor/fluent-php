<?php

namespace Major\Fluent\Dev\Compilers;

use Illuminate\Support\Str;
use Major\Fluent\Dev\Helpers\LocaleFiles;
use Major\Fluent\Exceptions\ShouldNotHappen;
use Psl\Regex;

final class CurrenciesOptimizer
{
    public function __construct(
        private string $language,
        /** @var string[] */
        private array $regions,
    ) { }

    public function optimize(): void
    {
        $rootData = $this->loadLocaleData('root');

        $this->optimizeRegion($this->language, $rootData);

        $languageData = $this->loadLocaleData($this->language);

        foreach ($this->regions as $region) {
            $this->optimizeRegion($region, $rootData, $languageData);
        }
    }

    /**
     * @param array<string, string> $rootData
     * @param array<string, string> $baseData
     */
    private function optimizeRegion(string $region, array $rootData, array $baseData = []): void
    {
        $currencies = $this->loadLocaleData($region);

        $currenciesToRemove = [];

        foreach ($currencies as $currency => $data) {
            if (($baseData[$currency] ?? $rootData[$currency]) === $data) {
                $currenciesToRemove[] = $currency;
            }
        }

        $rawData = LocaleFiles::read('currencies', $region);

        foreach ($currenciesToRemove as $currency) {
            $rawData = Regex\replace($rawData, "/\\s+'{$currency}' => .*/", '');
        }

        if (str_contains($rawData, "return [\n];")) {
            if (! str_contains($region, '-')) {
                throw new ShouldNotHappen();
            }

            LocaleFiles::remove('currencies', $region);
        } else {
            LocaleFiles::store('currencies', $region, $rawData);
        }
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
