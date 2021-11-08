<?php

declare(strict_types=1);

namespace Major\Fluent\Dev\Compilers;

use Exception;
use Locale as IntlLocale;
use Major\Fluent\Dev\Exceptions\InvalidCurrencySpacing;
use Major\Fluent\Dev\Helpers\CldrData;
use Major\Fluent\Dev\Helpers\LocaleDefaults as Defaults;
use Major\Fluent\Dev\Helpers\LocaleFiles;
use Major\Fluent\Formatters\Number\NumberFormatter;
use Psl\Dict;
use Psl\Regex;
use Psl\Str;
use Psl\Type;
use Psl\Vec;

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

        if ($this->unitPatterns()) {
            $compiled .= ", unitPatterns: {$this->unitPatterns()}";
        }

        $compiled .= ");\n";

        LocaleFiles::store('numbers', $this->locale, $compiled);

        $this->checkCurrencySpacing();
    }

    public function system(): string
    {
        return $this->numbers['defaultNumberingSystem'];
    }

    public function pattern(string $type): string
    {
        $key = "{$type}Formats-numberSystem-{$this->system()}";
        $pattern = $this->numbers[$key]['standard'];

        Type\string()->assert($pattern);

        $regex = NumberFormatter::PATTERN_REGEX;

        if (! Regex\matches($pattern, "/^{$regex}(;{$regex})?$/")) {
            throw new Exception("Pattern {$pattern} is invalid.");
        }

        return $pattern;
    }

    private function encodedPattern(string $type): string
    {
        $pattern = $this->escape($this->pattern($type));

        return Str\contains($pattern, '\\') ? "\"{$pattern}\"" : "'{$pattern}'";
    }

    public function grouping(): string
    {
        $grouping = $this->numbers['minimumGroupingDigits'];

        return (string) Type\int()->coerce($grouping);
    }

    public function symbols(): string
    {
        $all = $this->numbers["symbols-numberSystem-{$this->system()}"];

        $escaper = function ($type) use ($all): string {
            $type = $this->escape($all[$type]);

            return Str\contains($type, '\\') ? "\"{$type}\"" : "'{$type}'";
        };

        $symbols = Vec\map(['decimal', 'group', 'minusSign', 'percentSign'], $escaper);

        return '[' . Str\join($symbols, ', ') . ']';
    }

    private function unitPatterns(): ?string
    {
        $data = $this->numbers["currencyFormats-numberSystem-{$this->system()}"];

        $data = Type\dict(Type\string(), Type\mixed())->coerce($data);

        $data = Dict\filter_keys($data, fn ($key) => Str\starts_with($key, 'unitPattern-count-'));
        $data = Dict\filter($data, fn ($value) => $value !== '{0} {1}');

        if (! $data) {
            return null;
        }

        $data = Dict\map_keys($data, function ($key) {
            return Type\string()->coerce(Str\after($key, 'unitPattern-count-'));
        });
        $data = Dict\map_with_key($data, fn ($category, $pattern) => "'{$category}' => '{$pattern}'");

        return '[' . Str\join(Vec\values($data), ', ') . ']';
    }

    public function checkCurrencySpacing(): void
    {
        $spacing = $this->numbers["currencyFormats-numberSystem-{$this->system()}"]['currencySpacing'];

        foreach ([
            'currencyMatch' => '[[:^S:]&[:^Z:]]',
            'surroundingMatch' => '[:digit:]',
            'insertBetween' => "\u{00A0}",
        ] as $key => $value) {
            if ($spacing['beforeCurrency'][$key] !== $value) {
                throw new InvalidCurrencySpacing($this->locale, 'beforeCurrency', $key);
            }

            if ($spacing['afterCurrency'][$key] !== $value) {
                throw new InvalidCurrencySpacing($this->locale, 'afterCurrency', $key);
            }
        }
    }

    public function escape(string $value): string
    {
        return Str\replace_every($value, [
            "\u{00A0}" => '\\u{00A0}',
            "\u{200E}" => '\\u{200E}',
            "\u{200F}" => '\\u{200F}',
        ]);
    }
}
