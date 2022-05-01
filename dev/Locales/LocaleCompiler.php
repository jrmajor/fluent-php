<?php

declare(strict_types=1);

namespace Major\Fluent\Dev\Locales;

use Exception;
use Locale as IntlLocale;
use Major\Exporter as E;
use Major\Fluent\Dev\Helpers as H;
use Major\Fluent\Formatters\Number\Locale\Locale;
use Major\Fluent\Formatters\Number\NumberFormatter;
use Psl\Dict;
use Psl\Regex;
use Psl\Str;
use Psl\Type;

final class LocaleCompiler
{
    /** @var array<mixed> */
    private array $numbers;

    public function __construct(
        public string $locale,
    ) {
        $this->numbers = H\CldrData::get('numbers', $locale, 'numbers.*.*.numbers');
    }

    public function make(): void
    {
        $name = Str\replace_every(
            IntlLocale::getDisplayName($this->locale),
            ['English (world)' => 'English (World)'],
        );

        $compiled = E\to_file(new LocaleExporter(new Locale(
            $name,
            $this->system(),
            $this->pattern('decimal'),
            $this->pattern('percent'),
            $this->pattern('currency'),
            $this->grouping(),
            $this->symbols(),
            $this->unitPatterns(),
        )));

        H\LocaleFiles::write('numbers', $this->locale, $compiled);

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

    public function grouping(): int
    {
        $grouping = $this->numbers['minimumGroupingDigits'];

        return Type\int()->coerce($grouping);
    }

    /**
     * @return array{string, string, string, string}
     */
    public function symbols(): array
    {
        $all = $this->numbers["symbols-numberSystem-{$this->system()}"];

        Type\dict(Type\string(), Type\string())->assert($all);

        return [$all['decimal'], $all['group'], $all['minusSign'], $all['percentSign']];
    }

    /**
     * @return array<string, string>
     */
    private function unitPatterns(): array
    {
        $data = $this->numbers["currencyFormats-numberSystem-{$this->system()}"];

        $data = Type\dict(Type\string(), Type\mixed())->coerce($data);

        $data = Dict\filter_keys($data, fn ($key) => Str\starts_with($key, 'unitPattern-count-'));
        $data = Dict\filter($data, fn ($value) => $value !== '{0} {1}');

        if (! $data) {
            return [];
        }

        return Dict\map_keys($data, function ($key) {
            return Str\strip_prefix($key, 'unitPattern-count-');
        });
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
}
