<?php

namespace Major\Fluent\Dev\Locales;

use Major\Exporter as E;
use Major\Fluent\Dev\Helpers as H;
use Psl\Dict;
use Psl\Type;
use Psl\Vec;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand('numbers', 'Compiles numbers data for all locales')]
final class CompileLocalesCommand extends Command
{
    /** @var array<string, list<string>> */
    private array $systems = [];

    /** @var array<string, list<string>> */
    private array $decimalPatterns = [];

    /** @var array<string, list<string>> */
    private array $percentPatterns = [];

    /** @var array<string, list<string>> */
    private array $currencyPatterns = [];

    /** @var array<int, list<string>> */
    private array $grouping = [];

    /** @var array<string, list<string>> */
    private array $symbols = [];

    protected function configure(): void
    {
        $this
            ->addOption('all', 'a', InputOption::VALUE_NONE, 'Show all statistics.')
            ->addOption('systems', 's', InputOption::VALUE_NONE, 'Show numeral systems statistics.')
            ->addOption('decimal', 'd', InputOption::VALUE_NONE, 'Show decimal patterns statistics.')
            ->addOption('percent', 'p', InputOption::VALUE_NONE, 'Show percent patterns statistics.')
            ->addOption('currency', 'c', InputOption::VALUE_NONE, 'Show currency patterns statistics.')
            ->addOption('grouping', 'g', InputOption::VALUE_NONE, 'Show minimum grouping digits statistics.')
            ->addOption('symbols', 'm', InputOption::VALUE_NONE, 'Show symbol sets statistics.');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $start = microtime(true);

        H\LocaleFiles::prepareDirectory('numbers');

        foreach (H\CldrData::locales('numbers') as $locale) {
            $compiler = new LocaleCompiler($locale);

            $compiler->make();
            $this->addToStats($compiler);
        }

        $this->printStatistics($input, $output);

        $this->checkDefaults($output);

        $output->writeln('<info>Compiled in ' . round(microtime(true) - $start, 2) . 's</info>');

        return Command::SUCCESS;
    }

    private function printStatistics(InputInterface $input, OutputInterface $output): void
    {
        foreach ([
            'systems' => ['systems', 'Numeral system'],
            'decimalPatterns' => ['decimal', 'Decimal pattern'],
            'percentPatterns' => ['percent', 'Percent pattern'],
            'currencyPatterns' => ['currency', 'Currency pattern'],
            'grouping' => ['grouping', 'Minimum grouping digits'],
            'symbols' => ['symbols', 'Symbol set'],
        ] as $stat => [$option, $title]) {
            if (! $input->getOption('all') && ! $input->getOption($option)) {
                continue;
            }

            (new Table($output))
                ->setHeaders([$title, 'Count'])
                ->setRows($this->rowsForStatTable($stat))
                ->render();

            $output->writeln('');
        }
    }

    private function checkDefaults(OutputInterface $output): void
    {
        foreach ([
            'system' => 'numeral system',
            'decimal' => 'decimal pattern',
            'percent' => 'percent pattern',
            'currency' => 'currency pattern',
            'grouping' => 'minimum grouping digits value',
            'symbols' => 'symbol set',
        ] as $key => $name) {
            $mostPopular = $this->mostPopular($key);
            $default = (string) E\guess(H\LocaleDefaults::for($key));

            if ($key === 'grouping') {
                $default = H\LocaleDefaults::for($key);
            }

            if ($mostPopular !== $default) {
                $output->writeln("Most popular {$name} is {$mostPopular}, but {$default} is used as a default.");
            }
        }
    }

    private function addToStats(LocaleCompiler $compiler): void
    {
        $this->systems[(string) E\guess($compiler->system())][] = $compiler->locale;
        $this->decimalPatterns[(string) E\guess($compiler->pattern('decimal'))][] = $compiler->locale;
        $this->percentPatterns[(string) E\guess($compiler->pattern('percent'))][] = $compiler->locale;
        $this->currencyPatterns[(string) E\guess($compiler->pattern('currency'))][] = $compiler->locale;
        $this->grouping[$compiler->grouping()][] = $compiler->locale;
        $this->symbols[(string) E\guess($compiler->symbols())][] = $compiler->locale;
    }

    /**
     * @return array<string|int, int>
     */
    private function stat(string $stat): array
    {
        $stat = Type\dict(
            Type\union(Type\string(), Type\int()),
            Type\vec(Type\string()),
        )->assert($this->{$stat});

        $stats = Dict\map($stat, fn (array $locales) => count($locales));

        arsort($stats);

        return $stats;
    }

    /**
     * @return array<array{string|int, int}>
     */
    private function rowsForStatTable(string $stat): array
    {
        return Vec\enumerate($this->stat($stat));
    }

    private function mostPopular(string $stat): string|int
    {
        return Vec\keys($this->stat(match ($stat) {
            'grouping', 'symbols' => $stat,
            'decimal', 'percent', 'currency' => "{$stat}Patterns",
            default => "{$stat}s",
        }))[0];
    }
}
