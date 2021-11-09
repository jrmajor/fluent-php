<?php

namespace Major\Fluent\Tests\Formatters\Number;

use Generator;

final class CurrencyFormatterTest extends NumberFormatterTestCase
{
    /**
     * @param array<string, mixed> $options
     *
     * @dataProvider provideCodeDisplayCases
     * @testdox it works with code display
     */
    public function testCode(
        string $locale, int|float $number, array $options = [],
    ): void {
        $options = array_merge($options, ['style' => 'currency', 'currencyDisplay' => 'code']);

        $this->assertNumberFormat($locale, $number, $options);
    }

    /**
     * @param array<string, mixed> $options
     *
     * @dataProvider provideSymbolDisplayCases
     * @testdox it works with symbol display
     */
    public function testSymbol(
        string $locale, int|float $number, array $options = [],
    ): void {
        $options = array_merge($options, ['style' => 'currency', 'currencyDisplay' => 'symbol']);

        $this->assertNumberFormat($locale, $number, $options);
    }

    /**
     * @param array<string, mixed> $options
     *
     * @dataProvider provideNarrowSymbolDisplayCases
     * @testdox it works with narrow symbol display
     */
    public function testNarrowSymbol(
        string $locale, int|float $number, array $options = [],
    ): void {
        $options = array_merge($options, ['style' => 'currency', 'currencyDisplay' => 'narrowSymbol']);

        $this->assertNumberFormat($locale, $number, $options);
    }

    /**
     * @param array<string, mixed> $options
     *
     * @dataProvider provideNameDisplayCases
     * @testdox it works with name display
     */
    public function testName(
        string $locale, int|float $number, array $options = [],
    ): void {
        $options = array_merge($options, ['style' => 'currency', 'currencyDisplay' => 'name']);

        $this->assertNumberFormat($locale, $number, $options);
    }

    /**
     * @return Generator<array{string, int|float, array<string, mixed>}>
     */
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

    /**
     * @return Generator<array{string, int|float, array<string, mixed>}>
     */
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

    /**
     * @return Generator<array{string, int|float, array<string, mixed>}>
     */
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

    /**
     * @return Generator<array{string, int|float, array<string, mixed>}>
     */
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

    /**
     * @return Generator<string>
     */
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
