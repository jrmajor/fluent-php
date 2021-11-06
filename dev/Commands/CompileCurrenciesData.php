<?php

namespace Major\Fluent\Dev\Commands;

use Major\Fluent\Dev\Compilers\CurrenciesLocaleCompiler as Compiler;
use Major\Fluent\Dev\Helpers\CldrData;
use Major\Fluent\Dev\Helpers\LocaleFiles;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CompileCurrenciesData extends Command
{
    protected static $defaultName = 'currencies';

    protected static $defaultDescription = 'Compiles currencies data for all locales';

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $start = microtime(true);

        LocaleFiles::prepareDirectory('currencies');

        foreach (CldrData::locales('numbers') as $locale) {
            (new Compiler($locale))->make();
        }

        $output->writeln('<info>Compiled in ' . round(microtime(true) - $start, 2) . 's</info>');

        return Command::SUCCESS;
    }
}
