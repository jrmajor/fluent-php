<?php

namespace Major\Fluent\Dev\Commands;

use InvalidArgumentException;
use Major\Fluent\Dev\Compilers\CurrenciesLocaleCompiler as Compiler;
use Major\Fluent\Dev\Compilers\CurrenciesOptimizer;
use Major\Fluent\Dev\Helpers\CldrData;
use Major\Fluent\Dev\Helpers\LocaleFiles;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class CompileCurrenciesData extends Command
{
    protected static $defaultName = 'currencies';

    protected static $defaultDescription = 'Compiles currencies data for all locales';

    protected function configure(): void
    {
        $this
            ->addOption('compile-only', 'c', InputOption::VALUE_NONE, 'Do not optimize compiled data')
            ->addOption('optimize-only', 'o', InputOption::VALUE_NONE, 'Do not compile, only optimize');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        if ($input->getOption('compile-only') && $input->getOption('optimize-only')) {
            throw new InvalidArgumentException('You can not use --compile-only and --optimize-only at the same time.');
        }

        if (! $input->getOption('optimize-only')) {
            $this->generate($output);
        }

        if (! $input->getOption('compile-only')) {
            $this->optimize($output);
        }

        return Command::SUCCESS;
    }

    private function generate(OutputInterface $output): void
    {
        $start = microtime(true);

        LocaleFiles::prepareDirectory('currencies');

        foreach (CldrData::locales('numbers') as $locale) {
            (new Compiler($locale))->make();
        }

        $output->writeln('<info>Compiled in ' . round(microtime(true) - $start, 2) . 's</info>');
    }

    private function optimize(OutputInterface $output): void
    {
        $start = microtime(true);

        foreach (LocaleFiles::regions() as $language => $regions) {
            (new CurrenciesOptimizer($language, $regions))->optimize();
        }

        $output->writeln('<info>Optimized in ' . round(microtime(true) - $start, 2) . 's</info>');
    }
}
