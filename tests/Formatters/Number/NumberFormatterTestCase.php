<?php

namespace Major\Fluent\Tests\Formatters\Number;

use Generator;
use Major\Fluent\Formatters\LocaleData;
use Major\Fluent\Formatters\Number\Locale\Locale;
use Major\Fluent\Formatters\Number\NumberFormatter;
use Major\Fluent\Formatters\Number\Options;
use Major\Fluent\Tests\Helpers as H;
use Major\Fluent\Tests\TestCase;
use PHPUnit\Framework\Attributes\TestDox;
use Psl\Dict;
use Psl\Iter;
use Psl\Json;
use Psl\Str;
use Psl\Type;
use Psl\Vec;

/**
 * @psalm-type O = array<string, int|bool|string>
 */
abstract class NumberFormatterTestCase extends TestCase
{
    /**
     * @return 'decimal'|'percent'|'currency'|'unit'
     */
    abstract protected static function patternType(): string;

    /**
     * @return array<string, string>
     */
    abstract protected static function patternsToTest(): array;

    /**
     * @param list<string> $except
     * @return Generator<string>
     */
    final protected static function provideLocales(array $except = []): Generator
    {
        $locales = Vec\values(Dict\unique([
            // all patterns
            ...Vec\keys(static::patternsToTest()),
            // all numbering systems
            ...[
                'ar', // arab
                'fa', // arabext
                'bn', // beng
                'ne', // deva
                'uk', // latn
                'my', // mymr
            ],
            // english
            ...['en', 'en-AU', 'en-GB', 'en-INVALID', 'en-US'],
            // random
            ...['ar', 'es', 'nl', 'no', 'pl', 'ru', 'sw'],
        ]));

        $diff = Vec\values(Dict\diff($except, $locales));

        self::assertCount(0, $diff, 'Locales ' . Str\join($diff, ', ') . ' do not need to be excluded.');

        foreach ($locales as $locale) {
            if (!Iter\contains($except, $locale)) {
                yield $locale;
            }
        }
    }

    #[TestDox('all possible patterns are tested')]
    public function testAllPatterns(): void
    {
        $values = Vec\map(
            LocaleData::all(),
            fn(Locale $l): string => $l->{static::patternType()},
        );

        $values = H\count_values($values);

        $values = Vec\map($values, fn($v): string => $v['value']);

        $this->assertSame($values, Vec\values(static::patternsToTest()));
    }

    #[TestDox('correct languages are assigned to tested patterns')]
    public function testCorrectPatterns(): void
    {
        foreach (static::patternsToTest() as $locale => $pattern) {
            $locale = LocaleData::loadNumbers($locale);

            $this->assertSame($pattern, $locale->{static::patternType()});
        }
    }

    /**
     * @psalm-suppress InvalidScalarArgument
     *
     * @param O $options
     */
    final protected static function assertNumberFormat(
        string $locale, int|float $number, array $options = [],
    ): void {
        $options = Type\shape([
            'style' => Type\optional(Type\union(
                Type\literal_scalar('decimal'),
                Type\literal_scalar('currency'),
                Type\literal_scalar('percent'),
                Type\literal_scalar('unit')
            )),
            'unit' => Type\optional(Type\string()),
            'unitDisplay' => Type\optional(Type\string()),
            'useGrouping' => Type\optional(Type\bool()),
            'minimumIntegerDigits' => Type\optional(Type\int()),
            'minimumFractionDigits' => Type\optional(Type\int()),
            'maximumFractionDigits' => Type\optional(Type\int()),
            'minimumSignificantDigits' => Type\optional(Type\int()),
            'maximumSignificantDigits' => Type\optional(Type\int()),
            'currency' => Type\optional(Type\string()),
            'currencyDisplay' => Type\optional(Type\string()),
        ])->coerce($options);

        $jsonOptions = Json\encode($options);

        $command = "new Intl.NumberFormat('{$locale}', {$jsonOptions}).format({$number})";

        $expected = H\Node::instance()->cachedOutput($command);
        $actual = (new NumberFormatter($locale))->format($number, new Options(...$options));

        $message = "Failed asserting that formatting of {$number} for {$locale} with {$jsonOptions} is correct.";

        self::assertSame($expected, $actual, $message);
    }
}
