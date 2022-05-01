<?php

namespace Major\Fluent\Dev\Currencies;

use Major\Exporter as E;
use Major\Fluent\Dev\Helpers as H;
use Psl\Dict;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

final class CompileCurrenciesCommand extends Command
{
    protected static $defaultName = 'currencies';

    protected static $defaultDescription = 'Compiles currencies data for all locales';

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $start = microtime(true);

        H\LocaleFiles::prepareDirectory('currencies');

        $compiled = ['und' => CurrenciesFactory::make('und')];
        $optimizer = new CurrenciesOptimizer($compiled['und']);

        foreach (H\CldrData::regions('numbers') as $lang => $regions) {
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

            H\LocaleFiles::write('currencies', $locale, E\to_file($currencies));
        }

        $output->writeln('<info>Compiled in ' . round(microtime(true) - $start, 2) . 's</info>');

        return Command::SUCCESS;
    }
}
