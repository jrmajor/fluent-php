<?php

declare(strict_types=1);

namespace Major\Fluent\Dev;

use Exception;
use Locale;

final class NumbersLocaleCompiler
{
    /** @var array<mixed> */
    private array $numbers;

    public function __construct(
        private string $locale,
    ) {
        $numbers = file_get_contents(__DIR__ . "/../node_modules/cldr-numbers-modern/main/{$locale}/numbers.json")
            ?: throw new Exception("Failed to read numbers.json data for {$locale}.");

        $this->numbers = json_decode($numbers, associative: true)['main'][$locale]['numbers'];
    }

    public function make(): void
    {
        $name = Locale::getDisplayName($this->locale);

        $compiled = <<<PHP
            <?php

            use Major\\Fluent\\Formatters\\Number\\Locale\\Locale;
            use Major\\Fluent\\Formatters\\Number\\Locale\\Symbols;

            return new Locale(
                '{$name}',
                '{$this->system()}',
                {$this->format('decimal')},
                {$this->format('percent')},
                {$this->format('currency')},
                {$this->minimumGrouping()},
                {$this->symbols()},
            );

            PHP;

        file_put_contents(__DIR__ . "/../locales/numbers/{$this->locale}.php", $compiled)
            ?: throw new Exception("Failed to write {$this->locale}.php");
    }

    private function system(): string
    {
        return $this->numbers['defaultNumberingSystem'];
    }

    private function format(string $type): string
    {
        $key = "{$type}Formats-numberSystem-{$this->system()}";
        $format = $this->numbers[$key]['standard'];

        assert(is_string($format));

        if (! preg_match("/^[¤,.\\-;%#0\u{00A0}\u{200E}\u{200F}]+$/", $format)) {
            throw new Exception("Pattern {$format} contains invalid characters.");
        }

        $format = str_replace("\u{00A0}", '\\u{00A0}', $format);
        $format = str_replace("\u{200E}", '\\u{200E}', $format);
        $format = str_replace("\u{200F}", '\\u{200F}', $format);

        return str_contains($format, '\\') ? "\"{$format}\"" : "'{$format}'";
    }

    private function minimumGrouping(): string
    {
        $grouping = $this->numbers['minimumGroupingDigits'];

        return preg_match('/^[0-9]+$/', $grouping) ? $grouping
            : throw new Exception('minimumGroupingDigits should be numeric.');
    }

    private function symbols(): string
    {
        $all = $this->numbers["symbols-numberSystem-{$this->system()}"];

        $symbols = array_map(
            fn ($type) => "'" . $all[$type] . "'",
            ['decimal', 'group', 'percentSign', 'minusSign'],
        );

        $symbols = str_replace("'\u{00A0}'", '"\\u{00A0}"', $symbols);

        return 'new Symbols(' . implode(', ', $symbols) . ')';
    }
}
