<?php

namespace Major\Fluent\Tests\Formatters\Number;

use Generator;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\TestDox;

/**
 * @psalm-import-type O from NumberFormatterTestCase
 */
final class CurrencyFormatterTest extends NumberFormatterTestCase
{
    protected static function patternType(): string
    {
        return 'currency';
    }

    protected static function patternsToTest(): array
    {
        return [
            'en-US' => '¤#,##0.00',
            'pl' => "#,##0.00\u{A0}¤",
            'mn' => "¤\u{A0}#,##0.00",
            'ar' => "\u{200F}#,##0.00\u{A0}¤",
            'nl' => "¤\u{A0}#,##0.00;¤\u{A0}-#,##0.00",
            'hi' => '¤#,##,##0.00',
            'ar-TN' => "\u{200F}#,##0.00\u{A0}¤;\u{200F}-#,##0.00\u{A0}¤",
            'es-CL' => '¤#,##0.00;¤-#,##0.00',
            'ne' => "¤\u{A0}#,##,##0.00",
            'de-CH' => "¤\u{A0}#,##0.00;¤-#,##0.00",
            'bn' => '#,##,##0.00¤',
            'km' => '#,##0.00¤',
            'fa' => "\u{200E}¤#,##0.00",
            'he' => "\u{200F}#,##0.00\u{A0}\u{200F}¤;\u{200F}-#,##0.00\u{A0}\u{200F}¤",
        ];
    }

    /**
     * @param O $options
     */
    #[DataProvider('provideCodeDisplayCases')]
    #[TestDox('it works with code display')]
    public function testCode(
        string $locale, int|float $number, array $options = [],
    ): void {
        $options = [...$options, 'style' => 'currency', 'currencyDisplay' => 'code'];

        $this->assertNumberFormat($locale, $number, $options);
    }

    /**
     * @param O $options
     */
    #[DataProvider('provideSymbolDisplayCases')]
    #[TestDox('it works with symbol display')]
    public function testSymbol(
        string $locale, int|float $number, array $options = [],
    ): void {
        $options = [...$options, 'style' => 'currency', 'currencyDisplay' => 'symbol'];

        $this->assertNumberFormat($locale, $number, $options);
    }

    /**
     * @param O $options
     */
    #[DataProvider('provideNarrowSymbolDisplayCases')]
    #[TestDox('it works with narrow symbol display')]
    public function testNarrowSymbol(
        string $locale, int|float $number, array $options = [],
    ): void {
        $options = [...$options, 'style' => 'currency', 'currencyDisplay' => 'narrowSymbol'];

        $this->assertNumberFormat($locale, $number, $options);
    }

    /**
     * @param O $options
     */
    #[DataProvider('provideNameDisplayCases')]
    #[TestDox('it works with name display')]
    public function testName(
        string $locale, int|float $number, array $options = [],
    ): void {
        $options = [...$options, 'style' => 'currency', 'currencyDisplay' => 'name'];

        $this->assertNumberFormat($locale, $number, $options);
    }

    /**
     * @return Generator<array{string, int|float, O}>
     */
    public static function provideCodeDisplayCases(): Generator
    {
        foreach ([
            [69, ['currency' => 'PLN']],
            [21.37, ['currency' => 'USD']],
            [-123456789, ['currency' => 'AUD']],
            [18.3, ['currency' => 'KHR', 'maximumSignificantDigits' => 3]],
        ] as $case) {
            foreach (self::provideLocales() as $locale) {
                yield [$locale, ...$case];
            }
        }

        yield ['en-AU', 98.789, ['currency' => 'xyz']];
    }

    /**
     * @return Generator<array{string, int|float, O}>
     */
    public static function provideSymbolDisplayCases(): Generator
    {
        foreach ([
            [69, ['currency' => 'PLN']],
            [21.37, ['currency' => 'USD']],
            [-123456789, ['currency' => 'AUD']],
            [18.3, ['currency' => 'KHR', 'maximumSignificantDigits' => 3]],
        ] as $case) {
            foreach (self::provideLocales() as $locale) {
                yield [$locale, ...$case];
            }
        }

        yield ['en-AU', 98.789, ['currency' => 'xyz']];
    }

    /**
     * @return Generator<array{string, int|float, O}>
     */
    public static function provideNarrowSymbolDisplayCases(): Generator
    {
        foreach ([
            [69, ['currency' => 'PLN']],
            [21.37, ['currency' => 'USD']],
            [-123456789, ['currency' => 'AUD']],
            [18.3, ['currency' => 'KHR', 'maximumSignificantDigits' => 3]],
        ] as $case) {
            foreach (self::provideLocales() as $locale) {
                yield [$locale, ...$case];
            }
        }

        yield ['en-AU', 98.789, ['currency' => 'xyz']];
    }

    /**
     * @return Generator<array{string, int|float, O}>
     */
    public static function provideNameDisplayCases(): Generator
    {
        foreach ([
            [69, ['currency' => 'PLN']],
            [21.37, ['currency' => 'USD']],
            [-123456789, ['currency' => 'AUD']],
            [18.3, ['currency' => 'KHR', 'maximumSignificantDigits' => 3]],
        ] as $case) {
            foreach (self::provideLocales(['my', 'pl', 'ru', 'uk']) as $locale) {
                yield [$locale, ...$case];
            }
        }

        yield ['en-AU', 98.789, ['currency' => 'xyz']];
    }
}
