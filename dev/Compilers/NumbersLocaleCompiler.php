<?php

declare(strict_types=1);

namespace Major\Fluent\Dev\Compilers;

use Exception;
use Locale as IntlLocale;
use Major\Fluent\Dev\Helpers\LocaleDefaults as Defaults;
use Major\Fluent\Formatters\Number\Locale\Locale;
use ReflectionClass;

final class NumbersLocaleCompiler
{
    /** @var array<mixed> */
    private array $numbers;

    public function __construct(
        public string $locale,
    ) {
        $numbers = file_get_contents(__DIR__ . "/../../node_modules/cldr-numbers-modern/main/{$locale}/numbers.json")
            ?: throw new Exception("Failed to read numbers.json data for {$locale}.");

        $this->numbers = json_decode($numbers, associative: true)['main'][$locale]['numbers'];
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

        file_put_contents(__DIR__ . "/../../locales/numbers/{$this->locale}.php", $compiled)
            ?: throw new Exception("Failed to write {$this->locale}.php");
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

        if (! preg_match("/^[¤,.\\-;%#0\u{00A0}\u{200E}\u{200F}]+$/", $pattern)) {
            throw new Exception("Pattern {$pattern} contains invalid characters.");
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

        return preg_match('/^[0-9]+$/', $grouping) ? $grouping
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
