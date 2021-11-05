<?php

namespace Major\Fluent\Tests\Formatters\Number;

use Generator;
use InvalidArgumentException;

final class CurrencyFormatterTest extends NumberFormatterTest
{
    /**
     * @dataProvider provideCurrencyCases
     */
    public function testItWorksForCurrencyPatterns(
        string $locale, int|float $number, array $options = [],
    ): void {
        $this->expectException(InvalidArgumentException::class);

        $options = array_merge($options, ['style' => 'currency']);

        $this->assertNumberFormat($locale, $number, $options);
    }

    public function provideCurrencyCases(): Generator
    {
        foreach ([
            [69, ['currency' => 'PLN']],
        ] as $case) {
            foreach (['ar', 'sw', 'en', 'nl', 'he', 'km', 'as', 'hi', 'lo', 'bn', 'es', 'fa'] as $locale) {
                yield [$locale, ...$case];
            }
        }
    }
}
