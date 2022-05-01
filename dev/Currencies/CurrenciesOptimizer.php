<?php

namespace Major\Fluent\Dev\Currencies;

use Major\Fluent\Dev\Helpers as H;
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
        $undData = $this->readLocaleData('und');

        $this->optimizeRegion($this->language, $undData);

        $languageData = $this->readLocaleData($this->language);

        foreach ($this->regions as $region) {
            $this->optimizeRegion($region, $undData, $languageData);
        }
    }

    /**
     * @param array<string, string> $undData
     * @param array<string, string> $baseData
     */
    private function optimizeRegion(string $region, array $undData, array $baseData = []): void
    {
        $currencies = $this->readLocaleData($region);

        $currenciesToRemove = [];

        foreach ($currencies as $currency => $data) {
            if (($baseData[$currency] ?? $undData[$currency]) === $data) {
                $currenciesToRemove[] = $currency;
            }
        }

        $rawData = H\LocaleFiles::read('currencies', $region);

        foreach ($currenciesToRemove as $currency) {
            $rawData = Regex\replace($rawData, "/\\s+'{$currency}' => .*/", '');
        }

        if (Str\contains($rawData, "return [\n];")) {
            if (! Str\contains($region, '-')) {
                throw new ShouldNotHappen();
            }

            H\LocaleFiles::delete('currencies', $region);
        } else {
            H\LocaleFiles::write('currencies', $region, $rawData);
        }
    }

    /**
     * @return array<string, string>
     */
    private function readLocaleData(string $locale): array
    {
        $data = H\LocaleFiles::read('currencies', $locale);

        $data = (string) Str\after($data, "return [\n    '");
        $data = (string) Str\before($data, "),\n];");
        $data = explode("),\n    '", $data);
        $data = Vec\map($data, fn ($s) => Str\split($s, "' => new C(", 2));
        $data = Dict\reindex($data, fn ($s): string => $s[0]);

        return Dict\map($data, fn ($s): string => $s[1]);
    }
}
