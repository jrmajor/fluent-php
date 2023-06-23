<?php

namespace Major\Fluent\Dev\Locales;

use Major\Exporter as E;
use Major\Fluent\Dev\Helpers as H;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand('numbers', 'Compiles numbers data for all locales')]
final class CompileLocalesCommand extends Command
{
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $start = microtime(true);

        H\LocaleFiles::prepareDirectory('numbers');

        foreach (H\CldrData::locales('numbers') as $locale) {
            $compiled = LocalesFactory::make($locale);
            $exported = new LocaleExporter($compiled);

            H\LocaleFiles::write('numbers', $locale, E\to_file($exported));
        }

        $output->writeln('<info>Compiled in ' . round(microtime(true) - $start, 2) . 's</info>');

        return Command::SUCCESS;
    }
}
