<?php

namespace Major\Fluent\Dev\Units;

use Major\Exporter as E;
use Major\Fluent\Dev\Helpers as H;
use Psl\Dict;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand('units', 'Compiles units data for all locales')]
final class CompileUnitsCommand extends Command
{
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $start = microtime(true);

        H\LocaleFiles::prepareDirectory('units');

        $compiled = ['und' => UnitsFactory::make('und')];
        $optimizer = new UnitsOptimizer($compiled['und']);

        foreach (H\CldrData::regions('units') as $lang => $regions) {
            $compiled[$lang] = $optimizer->optimize(UnitsFactory::make($lang));

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

        foreach ($compiled as $locale => $currencies) {
            $currencies = Dict\map($currencies, fn ($c) => new UnitsExporter($c));
            $currencies = E\dict($currencies)->multiline();

            H\LocaleFiles::write('units', $locale, E\to_file($currencies));
        }

        $output->writeln('<info>Compiled in ' . round(microtime(true) - $start, 2) . 's</info>');

        return Command::SUCCESS;
    }
}
