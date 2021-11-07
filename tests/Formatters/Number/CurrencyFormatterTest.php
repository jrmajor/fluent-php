<?php

namespace Major\Fluent\Tests\Formatters\Number;

use Generator;

final class CurrencyFormatterTest extends NumberFormatterTest
{
    /**
     * @dataProvider provideCodeDisplayCases
     */
    public function testItWorksWithCodeDisplay(
        string $locale, int|float $number, array $options = [],
    ): void {
        $options = array_merge($options, ['style' => 'currency', 'currencyDisplay' => 'code']);

        $this->assertNumberFormat($locale, $number, $options);
    }

    /**
     * @dataProvider provideSymbolDisplayCases
     */
    public function testItWorksWithSymbolDisplay(
        string $locale, int|float $number, array $options = [],
    ): void {
        $options = array_merge($options, ['style' => 'currency', 'currencyDisplay' => 'symbol']);

        $this->assertNumberFormat($locale, $number, $options);
    }

    /**
     * @dataProvider provideNarrowSymbolDisplayCases
     */
    public function testItWorksWithNarrowSymbolDisplay(
        string $locale, int|float $number, array $options = [],
    ): void {
        $options = array_merge($options, ['style' => 'currency', 'currencyDisplay' => 'narrowSymbol']);

        $this->assertNumberFormat($locale, $number, $options);
    }

    /**
     * @dataProvider provideNameDisplayCases
     */
    public function testItWorksWithNameDisplay(
        string $locale, int|float $number, array $options = [],
    ): void {
        $options = array_merge($options, ['style' => 'currency', 'currencyDisplay' => 'name']);

        $this->assertNumberFormat($locale, $number, $options);
    }

    public function provideCodeDisplayCases(): Generator
    {
        foreach ([
            [69, ['currency' => 'PLN']],
            [21.37, ['currency' => 'USD']],
            [-123456789, ['currency' => 'AUD']],
            [18.3, ['currency' => 'KHR', 'maximumSignificantDigits' => 3]],
        ] as $case) {
            foreach ($this->provideLocales() as $locale) {
                yield [$locale, ...$case];
            }
        }

        yield ['en-AU', 98.789, ['currency' => 'xyz']];
    }

    public function provideSymbolDisplayCases(): Generator
    {
        foreach ([
            [69, ['currency' => 'PLN']],
            [21.37, ['currency' => 'USD']],
            [-123456789, ['currency' => 'AUD']],
            [18.3, ['currency' => 'KHR', 'maximumSignificantDigits' => 3]],
        ] as $case) {
            foreach ($this->provideLocales() as $locale) {
                yield [$locale, ...$case];
            }
        }

        yield ['en-AU', 98.789, ['currency' => 'xyz']];
    }

    public function provideNarrowSymbolDisplayCases(): Generator
    {
        foreach ([
            [69, ['currency' => 'PLN']],
            [21.37, ['currency' => 'USD']],
            [-123456789, ['currency' => 'AUD']],
            [18.3, ['currency' => 'KHR', 'maximumSignificantDigits' => 3]],
        ] as $case) {
            foreach ($this->provideLocales() as $locale) {
                yield [$locale, ...$case];
            }
        }

        yield ['en-AU', 98.789, ['currency' => 'xyz']];
    }

    public function provideNameDisplayCases(): Generator
    {
        foreach ([
            [69, ['currency' => 'PLN']],
            [21.37, ['currency' => 'USD']],
            [-123456789, ['currency' => 'AUD']],
            [18.3, ['currency' => 'KHR', 'maximumSignificantDigits' => 3]],
        ] as $case) {
            foreach ($this->provideLocales() as $locale) {
                yield [$locale, ...$case];
            }
        }

        yield ['en-AU', 98.789, ['currency' => 'xyz']];
    }

    private function provideLocales(): Generator
    {
        yield from [
            'ar',
            'sw',
            'en',
            'nl',
            'he',
            'km',
            'as',
            'hi',
            'lo',
            'bn',
            'es',
            'fa',
        ];
    }
}
