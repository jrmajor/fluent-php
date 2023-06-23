<?php

namespace Major\Fluent\Tests\Formatters\Number;

use Major\Fluent\Formatters\InvalidArgumentException;
use Major\Fluent\Formatters\LocaleData;
use Major\Fluent\Formatters\Number\Locale\Locale;
use PHPUnit\Framework\Assert as PU;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\TestDox;
use PHPUnit\Framework\TestCase;

final class LocaleDataTest extends TestCase
{
    #[DataProvider('provideLoadNumbersCases')]
    #[TestDox('it can load numbers data')]
    public function testLoadNumbers(string $locale, Locale $expected): void
    {
        $actual = LocaleData::loadNumbers($locale);
        PU::assertTrue($actual->isIdentical($expected));
    }

    public static function provideLoadNumbersCases(): array
    {
        return [
            ['pl', new Locale(currency: "#,##0.00\u{A0}¤", grouping: 2, symbols: [',', "\u{A0}", '-', '%'])],
            ['pl-UNKNOWN', new Locale(currency: "#,##0.00\u{A0}¤", grouping: 2, symbols: [',', "\u{A0}", '-', '%'])],
            ['en', new Locale()],
            ['en-US', new Locale()],
            ['en-CH', new Locale(currency: "¤\u{A0}#,##0.00;¤-#,##0.00", symbols: ['.', '’', '-', '%'])],
        ];
    }

    #[TestDox('it throws an error when numbers data is missing')]
    public function testLoadNumbersError(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Unsupported locale: invalid.');

        LocaleData::loadNumbers('invalid');
    }

    #[TestDox('it can get all locales')]
    public static function testAll(): void
    {
        PU::assertCount(388, LocaleData::all());
    }
}
