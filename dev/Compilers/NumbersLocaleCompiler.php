<?php

declare(strict_types=1);

namespace Major\Fluent\Dev\Compilers;

use Exception;
use Locale as IntlLocale;
use Major\Fluent\Dev\Helpers\CldrData;
use Major\Fluent\Dev\Helpers\LocaleDefaults as Defaults;
use Major\Fluent\Dev\Helpers\LocaleFiles;
use Major\Fluent\Formatters\Number\NumberFormatter;
use Safe as s;

final class NumbersLocaleCompiler
{
    /** @var array<mixed> */
    private array $numbers;

    public function __construct(
        public string $locale,
    ) {
        $this->numbers = CldrData::get('numbers', $locale, "numbers.main.{$locale}.numbers");
    }

    public function make(): void
    {
        $name = IntlLocale::getDisplayName($this->locale);

        $compiled = "<?php\n\nreturn new Major\\Fluent\\Formatters\\Number\\Locale\\Locale('{$name}'";

        if ($this->system() !== Defaults::for('system')) {
            $compiled .= ", system: '{$this->system()}'";
        }

        if ($this->pattern('decimal') !== Defaults::for('decimalPattern')) {
            $compiled .= ', decimal: ' . $this->encodedPattern('decimal');
        }

        if ($this->pattern('percent') !== Defaults::for('percentPattern')) {
            $compiled .= ', percent: ' . $this->encodedPattern('percent');
        }

        if ($this->pattern('currency') !== Defaults::for('currencyPattern')) {
            $compiled .= ', currency: ' . $this->encodedPattern('currency');
        }

        if ($this->grouping() !== Defaults::for('grouping')) {
            $compiled .= ", grouping: {$this->grouping()}";
        }

        if ($this->symbols() !== Defaults::for('symbols')) {
            $compiled .= ", symbols: {$this->symbols()}";
        }

        $compiled .= ");\n";

        LocaleFiles::store('numbers', $this->locale, $compiled);
    }

    public function system(): string
    {
        return $this->numbers['defaultNumberingSystem'];
    }

    public function pattern(string $type): string
    {
        $key = "{$type}Formats-numberSystem-{$this->system()}";
        $pattern = $this->numbers[$key]['standard'];

        assert(is_string($pattern));

        $regex = NumberFormatter::PATTERN_REGEX;

        if (! s\preg_match("/^{$regex}(;{$regex})?$/", $pattern)) {
            throw new Exception("Pattern {$pattern} is invalid.");
        }

        return $pattern;
    }

    private function encodedPattern(string $type): string
    {
        $pattern = $this->escape($this->pattern($type));

        return str_contains($pattern, '\\') ? "\"{$pattern}\"" : "'{$pattern}'";
    }

    public function grouping(): string
    {
        $grouping = $this->numbers['minimumGroupingDigits'];

        return s\preg_match('/^[0-9]+$/', $grouping) ? $grouping
            : throw new Exception('minimumGroupingDigits should be numeric.');
    }

    public function symbols(): string
    {
        $all = $this->numbers["symbols-numberSystem-{$this->system()}"];

        $symbols = array_map(function ($type) use ($all) {
            $type = $this->escape($all[$type]);

            return str_contains($type, '\\') ? "\"{$type}\"" : "'{$type}'";
        }, ['decimal', 'group', 'minusSign', 'percentSign']);

        return $this->escape('[' . implode(', ', $symbols) . ']');
    }

    public function escape(string $value): string
    {
        return str_replace(
            ["\u{00A0}", "\u{200E}", "\u{200F}"],
            ['\\u{00A0}', '\\u{200E}', '\\u{200F}'],
            $value,
        );
    }
}
