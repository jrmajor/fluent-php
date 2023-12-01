<?php

namespace Major\Fluent\Tests\Formatters\Number;

use Major\Fluent\Formatters\InvalidArgumentException;
use Major\Fluent\Formatters\LocaleData;
use Major\Fluent\Formatters\Number\Locale\Currency;
use Major\Fluent\Formatters\Number\Locale\Locale;
use Major\Fluent\Formatters\Number\Locale\Unit;
use PHPUnit\Framework\Assert as PU;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\TestDox;
use PHPUnit\Framework\TestCase;

final class LocaleDataTest extends TestCase
{
    #[TestDox('it can get all locales')]
    public static function testAll(): void
    {
        PU::assertCount(170, LocaleData::all());
    }

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
            ['pl', new Locale(grouping: 2, symbols: [',', "\u{A0}", '-', '%'])],
            ['pl-UNKNOWN', new Locale(grouping: 2, symbols: [',', "\u{A0}", '-', '%'])],
            ['en', new Locale(currency: '¤#,##0.00')],
            ['en-US', new Locale(currency: '¤#,##0.00')],
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

    #[DataProvider('provideLoadCurrenciesCases')]
    #[TestDox('it can load currencies data')]
    public function testLoadCurrencies(string $locale, Currency $expected): void
    {
        $actual = LocaleData::loadCurrencies($locale);
        PU::assertTrue($actual[$expected->code]->isIdentical($expected));
    }

    public static function provideLoadCurrenciesCases(): array
    {
        $polishPlurals = [
            'one' => 'dolar amerykański',
            'few' => 'dolary amerykańskie',
            'many' => 'dolarów amerykańskich',
            'other' => 'dolara amerykańskiego',
        ];

        return [
            ['pl', new Currency('USD', 'dolar amerykański', narrow: '$', plurals: $polishPlurals)],
            ['pl-UNKNOWN', new Currency('USD', 'dolar amerykański', narrow: '$', plurals: $polishPlurals)],
            ['en-CA', new Currency('USD', 'US Dollar', 'US$', 'US$', ['one' => 'US dollar', 'other' => 'US dollars'])],
            ['en-CA', new Currency('PLN', 'Polish Zloty', narrow: 'zł', plurals: ['one' => 'Polish zloty', 'other' => 'Polish zlotys'])],
        ];
    }

    #[TestDox('it throws an error when currencies data is missing')]
    public function testLoadCurrenciesError(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Unsupported locale: invalid.');

        LocaleData::loadCurrencies('invalid');
    }

    #[DataProvider('provideLoadUnitsCases')]
    #[TestDox('it can load units data')]
    public function testLoadUnits(string $locale, Unit $expected): void
    {
        $actual = LocaleData::loadUnits($locale);
        PU::assertTrue($actual['stone']->isIdentical($expected));
    }

    public static function provideLoadUnitsCases(): array
    {
        return [
            ['en', new Unit(['one' => '{0} stone', 'other' => '{0} stones'], '{0} st', '{0}st')],
            ['en-UNKNOWN', new Unit(['one' => '{0} stone', 'other' => '{0} stones'], '{0} st', '{0}st')],
            ['en-GB', new Unit('{0} stone', '{0} st', '{0}st')],
        ];
    }

    #[TestDox('it throws an error when units data is missing')]
    public function testLoadUnitsError(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Unsupported locale: invalid.');

        LocaleData::loadUnits('invalid');
    }
}
