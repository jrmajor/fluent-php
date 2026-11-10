<?php

namespace Major\Fluent\Dev;

use Closure;
use Major\Exporter as E;
use Major\Fluent\Dev\Currencies\CurrenciesFactory;
use Major\Fluent\Dev\Currencies\CurrenciesOptimizer;
use Major\Fluent\Dev\Currencies\CurrencyExporter;
use Major\Fluent\Dev\Helpers\CldrData;
use Major\Fluent\Dev\Helpers\LocaleFiles;
use Major\Fluent\Dev\Locales\LocaleExporter;
use Major\Fluent\Dev\Locales\LocalesFactory;
use Major\Fluent\Dev\Units\UnitExporter;
use Major\Fluent\Dev\Units\UnitsFactory;
use Major\Fluent\Dev\Units\UnitsOptimizer;
use Psl\Dict;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Style\SymfonyStyle;

final class CompileCommands
{
    #[AsCommand('currencies', 'Compiles currencies data for all locales')]
    public function currencies(SymfonyStyle $io): int
    {
        return $this->compile($io, 'currencies', function (): void {
            $compiled = ['und' => CurrenciesFactory::make('und')];
            $optimizer = new CurrenciesOptimizer($compiled['und']);

            foreach (CldrData::regions('numbers') as $lang => $regions) {
                $compiled[$lang] = $optimizer->optimize(CurrenciesFactory::make($lang));

                foreach ($regions as $region) {
                    $regionData = $optimizer->optimize(
                        CurrenciesFactory::make($region),
                        $compiled[$lang],
                    );

                    if ($regionData !== []) {
                        $compiled[$region] = $regionData;
                    }
                }
            }

            foreach ($compiled as $locale => $currencies) {
                $currencies = Dict\map($currencies, fn ($c) => new CurrencyExporter($c));
                $currencies = E\dict($currencies)->multiline();

                LocaleFiles::write('currencies', $locale, E\to_file($currencies));
            }
        });
    }

    #[AsCommand('numbers', 'Compiles numbers data for all locales')]
    public function numbers(SymfonyStyle $io): int
    {
        return $this->compile($io, 'numbers', function (): void {
            $compiled = ['und' => LocalesFactory::make('und')];

            foreach (CldrData::regions('numbers') as $lang => $regions) {
                $compiled[$lang] = LocalesFactory::make($lang);

                foreach ($regions as $region) {
                    $compiledRegion = LocalesFactory::make($region);

                    if (! $compiledRegion->isIdentical($compiled[$lang])) {
                        $compiled[$region] = $compiledRegion;
                    }
                }
            }

            foreach ($compiled as $locale => $data) {
                LocaleFiles::write('numbers', $locale, E\to_file(new LocaleExporter($data)));
            }
        });
    }

    #[AsCommand('units', 'Compiles units data for all locales')]
    public function units(SymfonyStyle $io): int
    {
        return $this->compile($io, 'units', function (): void {
            $compiled = [];
            $optimizer = new UnitsOptimizer();

            foreach (CldrData::regions('units') as $lang => $regions) {
                $compiled[$lang] = UnitsFactory::make($lang);

                foreach ($regions as $region) {
                    $regionData = $optimizer->optimize(
                        UnitsFactory::make($region),
                        $compiled[$lang],
                    );

                    if ($regionData !== []) {
                        $compiled[$region] = $regionData;
                    }
                }
            }

            foreach ($compiled as $locale => $units) {
                $units = Dict\map($units, fn ($c) => new UnitExporter($c));
                $units = E\dict($units)->multiline();

                LocaleFiles::write('units', $locale, E\to_file($units));
            }
        });
    }

    /**
     * @param Closure(): void $compile
     */
    private function compile(SymfonyStyle $io, string $directory, Closure $compile): int
    {
        $start = microtime(true);

        LocaleFiles::prepareDirectory($directory);

        $compile();

        $io->success('Compiled in ' . round(microtime(true) - $start, 2) . 's');

        return Command::SUCCESS;
    }
}
