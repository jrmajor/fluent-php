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

        $compiled = [];
        $optimizer = new UnitsOptimizer();

        foreach (H\CldrData::regions('units') as $lang => $regions) {
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

            H\LocaleFiles::write('units', $locale, E\to_file($units));
        }

        $output->writeln('<info>Compiled in ' . round(microtime(true) - $start, 2) . 's</info>');

        return Command::SUCCESS;
    }
}
