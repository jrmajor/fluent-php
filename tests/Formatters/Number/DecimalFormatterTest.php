<?php

namespace Major\Fluent\Tests\Formatters\Number;

use Generator;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\TestDox;

/**
 * @psalm-import-type O from NumberFormatterTestCase
 */
final class DecimalFormatterTest extends NumberFormatterTestCase
{
    protected static function patternType(): string
    {
        return 'decimal';
    }

    protected static function patternsToTest(): array
    {
        return [
            'pl' => '#,##0.###',
            'ne' => '#,##,##0.###',
        ];
    }

    /**
     * @param O $options
     */
    #[DataProvider('provideDecimalCases')]
    #[TestDox('it works for decimal patterns')]
    public function testDecimal(
        string $locale, int|float $number, array $options = [],
    ): void {
        $this->assertNumberFormat($locale, $number, $options);
    }

    /**
     * @return Generator<array{string, int|float, O}>
     */
    public static function provideDecimalCases(): Generator
    {
        foreach ([
            [1234.5678, []],
            [-420, []],
            [1234.5678, ['useGrouping' => false]],
            [96, ['minimumIntegerDigits' => 5]],
            [69, ['minimumIntegerDigits' => 4]],
            [1.5, ['minimumFractionDigits' => 2]],
            [3.14159265359, ['maximumFractionDigits' => 3]],
            [12.34, ['minimumSignificantDigits' => 6]],
            [12.345, ['maximumSignificantDigits' => 4]],
            [12345, ['maximumSignificantDigits' => 4]],
            [45.67, ['maximumSignificantDigits' => 2]],
            [5962399.87, ['maximumSignificantDigits' => 3]],
            [46538.069971871, ['maxFractionDigits' => 4]],
            [46538.999971871, ['maxFractionDigits' => 4]],
        ] as $case) {
            foreach (self::provideLocales() as $locale) {
                yield [$locale, ...$case];
            }
        }
    }
}
