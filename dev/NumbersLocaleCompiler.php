<?php

declare(strict_types=1);

namespace Major\Fluent\Dev;

use Exception;
use Locale as IntlLocale;
use Major\Fluent\Formatters\Number\Locale\Locale;
use ReflectionClass;

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
        $name = IntlLocale::getDisplayName($this->locale);

        $compiled = "<?php\n\nreturn new Major\\Fluent\\Formatters\\Number\\Locale\\Locale('{$name}'";

        if ($this->system() !== $this->getDefault('system')) {
            $compiled .= ", system: '{$this->system()}'";
        }

        if ($this->pattern('decimal') !== $this->getDefault('decimal')) {
            $compiled .= ', decimal: ' . $this->encodedPattern('decimal');
        }

        if ($this->pattern('percent') !== $this->getDefault('percent')) {
            $compiled .= ', percent: ' . $this->encodedPattern('percent');
        }

        if ($this->pattern('currency') !== $this->getDefault('currency')) {
            $compiled .= ', currency: ' . $this->encodedPattern('currency');
        }

        if ($this->grouping() !== $this->getDefault('grouping')) {
            $compiled .= ", grouping: {$this->grouping()}";
        }

        if ($this->symbols() !== $this->getDefault('symbols')) {
            $compiled .= ", symbols: {$this->symbols()}";
        }

        $compiled .= ");\n";

        file_put_contents(__DIR__ . "/../locales/numbers/{$this->locale}.php", $compiled)
            ?: throw new Exception("Failed to write {$this->locale}.php");
    }

    private function system(): string
    {
        return $this->numbers['defaultNumberingSystem'];
    }

    /**
     * @param 'decimal'|'percent'|'currency' $type
     */
    private function pattern(string $type): string
    {
        $key = "{$type}Formats-numberSystem-{$this->system()}";
        $pattern = $this->numbers[$key]['standard'];

        assert(is_string($pattern));

        if (! preg_match("/^[¤,.\\-;%#0\u{00A0}\u{200E}\u{200F}]+$/", $pattern)) {
            throw new Exception("Pattern {$pattern} contains invalid characters.");
        }

        return $pattern;
    }

    /**
     * @param 'decimal'|'percent'|'currency' $type
     */
    private function encodedPattern(string $type): string
    {
        $pattern = $this->pattern($type);

        $pattern = str_replace("\u{00A0}", '\\u{00A0}', $pattern);
        $pattern = str_replace("\u{200E}", '\\u{200E}', $pattern);
        $pattern = str_replace("\u{200F}", '\\u{200F}', $pattern);

        return str_contains($pattern, '\\') ? "\"{$pattern}\"" : "'{$pattern}'";
    }

    private function grouping(): string
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
            ['decimal', 'group', 'minusSign', 'percentSign'],
        );

        $symbols = str_replace("'\u{00A0}'", '"\\u{00A0}"', $symbols);

        return '[' . implode(', ', $symbols) . ']';
    }

    /**
     * @param 'system'|'decimal'|'percent'|'currency'|'grouping'|'symbols' $key
     */
    public static function getDefault(string $key): string
    {
        $parameters = (new ReflectionClass(Locale::class))
            ->getConstructor()
            ?->getParameters()
            ?? throw new Exception('Failed to get constructor parameters.');

       return match ($key) {
           'system' => $parameters[1]->getDefaultValue(),
           'decimal' => $parameters[2]->getDefaultValue(),
           'percent' => $parameters[3]->getDefaultValue(),
           'currency' => $parameters[4]->getDefaultValue(),
           'grouping' => (string) $parameters[5]->getDefaultValue(),
           'symbols' => "['" . implode("', '", $parameters[6]->getDefaultValue()) . "']",
       };
    }
}
