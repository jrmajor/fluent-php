<?php

namespace Major\Fluent\Dev\Commands;

use Major\Fluent\Dev\Compilers\NumbersLocaleCompiler as Compiler;
use Major\Fluent\Dev\Helpers\CldrData;
use Major\Fluent\Dev\Helpers\LocaleDefaults;
use Major\Fluent\Dev\Helpers\LocaleFiles;
use Psl\Dict;
use Psl\Str;
use Psl\Type;
use Psl\Vec;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class CompileNumbersData extends Command
{
    protected static $defaultName = 'numbers';

    protected static $defaultDescription = 'Compiles numbers data for all locales';

    /** @var array<string, string[]> */
    private array $systems = [];

    /** @var array<string, string[]> */
    private array $decimalPatterns = [];

    /** @var array<string, string[]> */
    private array $percentPatterns = [];

    /** @var array<string, string[]> */
    private array $currencyPatterns = [];

    /** @var array<int, string[]> */
    private array $grouping = [];

    /** @var array<string, string[]> */
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

        LocaleFiles::prepareDirectory('numbers');

        foreach (CldrData::locales('numbers') as $locale) {
            $compiler = new Compiler($locale);

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
        ] as $stat => $data) {
            [$option, $title] = $data;

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
            'decimalPattern' => 'decimal pattern',
            'percentPattern' => 'percent pattern',
            'currencyPattern' => 'currency pattern',
            'grouping' => 'minimum grouping digits value',
            'symbols' => 'symbol set',
        ] as $key => $name) {
            $mostPopular = $this->escape((string) $this->mostPopular($key));
            $default = $this->escape(LocaleDefaults::for($key));

            if ($mostPopular !== $default) {
                $output->writeln("Most popular {$name} is {$mostPopular}, but {$default} is used as a default.");
            }
        }
    }

    private function addToStats(Compiler $compiler): void
    {
        $this->systems[$compiler->system()][] = $compiler->locale;
        $this->decimalPatterns[$compiler->pattern('decimal')][] = $compiler->locale;
        $this->percentPatterns[$compiler->pattern('percent')][] = $compiler->locale;
        $this->currencyPatterns[$compiler->pattern('currency')][] = $compiler->locale;
        $this->grouping[$compiler->grouping()][] = $compiler->locale;
        $this->symbols[$compiler->symbols()][] = $compiler->locale;
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
        return Vec\enumerate(Dict\map_keys(
            $this->stat($stat),
            fn ($key) => $this->escape((string) $key),
        ));
    }

    private function mostPopular(string $stat): string|int
    {
        return Vec\keys($this->stat(match ($stat) {
            'grouping', 'symbols' => $stat,
            default => $stat . 's',
        }))[0];
    }

    private function escape(string $value): string
    {
        return Str\replace_every($value, [
            "\u{00A0}" => '\\u{00A0}',
            "\u{200E}" => '\\u{200E}',
            "\u{200F}" => '\\u{200F}',
        ]);
    }
}
