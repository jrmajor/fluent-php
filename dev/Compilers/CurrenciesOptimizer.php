<?php

namespace Major\Fluent\Dev\Compilers;

use Major\Fluent\Dev\Helpers\LocaleFiles;
use Major\Fluent\Exceptions\ShouldNotHappen;
use Psl\Dict;
use Psl\Regex;
use Psl\Str;
use Psl\Vec;

final class CurrenciesOptimizer
{
    public function __construct(
        private string $language,
        /** @var string[] */
        private array $regions,
    ) { }

    public function optimize(): void
    {
        $rootData = $this->readLocaleData('root');

        $this->optimizeRegion($this->language, $rootData);

        $languageData = $this->readLocaleData($this->language);

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
        $currencies = $this->readLocaleData($region);

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

        if (Str\contains($rawData, "return [\n];")) {
            if (! Str\contains($region, '-')) {
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
    private function readLocaleData(string $locale): array
    {
        $data = LocaleFiles::read('currencies', $locale);

        $data = (string) Str\after($data, "return [\n    '");
        $data = (string) Str\before($data, "),\n];");
        $data = Str\split($data, "),\n    '");
        $data = Vec\map($data, fn ($s) => Str\split($s, "' => new C(", 2));
        $data = Dict\reindex($data, fn ($s): string => $s[0]);

        return Dict\map($data, fn ($s): string => $s[1]);
    }
}
