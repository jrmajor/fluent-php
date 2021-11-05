<?php

namespace Major\Fluent\Dev\Commands;

use Major\Fluent\Dev\Compilers\CurrenciesLocaleCompiler as Compiler;
use Major\Fluent\Dev\Helpers\AvailableLocales;
use Major\Fluent\Dev\Helpers\Directory;
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

        Directory::prepare('currencies');

        foreach (AvailableLocales::all() as $locale) {
            (new Compiler($locale))->make();
        }

        $output->writeln('<info>Generated in ' . round(microtime(true) - $start, 2) . 's</info>');

        return Command::SUCCESS;
    }
}
