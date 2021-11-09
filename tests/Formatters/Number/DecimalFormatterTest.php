<?php

namespace Major\Fluent\Tests\Formatters\Number;

use Generator;

final class DecimalFormatterTest extends NumberFormatterTest
{
    /**
     * @param array<string, mixed> $options
     *
     * @dataProvider provideDecimalCases
     * @testdox it works for decimal patterns
     */
    public function testDecimal(
        string $locale, int|float $number, array $options = [],
    ): void {
        $this->assertNumberFormat($locale, $number, $options);
    }

    /**
     * @return Generator<array{string, int|float, array<string, mixed>}>
     */
    public function provideDecimalCases(): Generator
    {
        foreach ([
            [1234.5678],
            [-420],
            [1234.5678, ['useGrouping' => false]],
            [96, ['minimumIntegerDigits' => 5]],
            [69, ['minimumIntegerDigits' => 4]],
            [1.5, ['minimumFractionDigits' => 2]],
            [3.14159265359, ['maximumFractionDigits' => 3]],
            [12.34, ['minimumSignificantDigits' => 6]],
            [12.345, ['maximumSignificantDigits' => 4]],
            [12345, ['maximumSignificantDigits' => 4]],
            [45.67, ['maximumSignificantDigits' => 2]],
        ] as $case) {
            foreach (['pl', 'en-US', 'ar', 'mr', 'bn', 'my', 'nl'] as $locale) {
                yield [$locale, ...$case];
            }
        }
    }
}
