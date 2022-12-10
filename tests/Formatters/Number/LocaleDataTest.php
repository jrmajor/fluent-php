<?php

namespace Major\Fluent\Tests\Formatters\Number;

use Major\Fluent\Formatters\InvalidArgumentException;
use Major\Fluent\Formatters\LocaleData;
use PHPUnit\Framework\Assert as PU;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\TestDox;
use PHPUnit\Framework\TestCase;

final class LocaleDataTest extends TestCase
{
    #[DataProvider('provideLoadNumbersCases')]
    #[TestDox('it can load numbers data')]
    public function testLoadNumbers(string $locale, string $name): void
    {
        $locale = LocaleData::loadNumbers($locale);

        $this->assertSame($name, $locale->name);
    }

    public static function provideLoadNumbersCases(): array
    {
        return [
            ['pl', 'Polish'],
            ['pl-UNKNOWN', 'Polish'],
            ['en', 'English'],
            ['en-US', 'English'],
            ['en-AU', 'English (Australia)'],
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
        PU::assertCount(394, LocaleData::all());
    }
}
