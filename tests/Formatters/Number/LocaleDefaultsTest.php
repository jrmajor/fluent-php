<?php

namespace Major\Fluent\Tests\Formatters\Number;

use Major\Fluent\Formatters\LocaleData;
use Major\Fluent\Formatters\Number\Locale\Locale;
use Major\Fluent\Tests\Helpers as H;
use Major\Fluent\Tests\TestCase;
use PHPUnit\Framework\Attributes\TestDox;
use Psl\Vec;

final class LocaleDefaultsTest extends TestCase
{
    #[TestDox('default numeric system is the most popular one')]
    public function testSystem(): void
    {
        $expected = 'latn';

        $values = Vec\map(LocaleData::all(), fn (Locale $l) => $l->system);

        $this->assertSame($expected, (new Locale())->system);
        $this->assertSame($expected, H\most_popular($values));
    }

    #[TestDox('default decimal pattern is the most popular one')]
    public function testDecimal(): void
    {
        $expected = '#,##0.###';

        $values = Vec\map(LocaleData::all(), fn (Locale $l) => $l->decimal);

        $this->assertSame($expected, (new Locale())->decimal);
        $this->assertSame($expected, H\most_popular($values));
    }

    #[TestDox('default percent pattern is the most popular one')]
    public function testPercent(): void
    {
        $expected = '#,##0%';

        $values = Vec\map(LocaleData::all(), fn (Locale $l) => $l->percent);

        $this->assertSame($expected, (new Locale())->percent);
        $this->assertSame($expected, H\most_popular($values));
    }

    #[TestDox('default currency pattern is the most popular one')]
    public function testCurrency(): void
    {
        $expected = "#,##0.00\u{A0}¤";

        $values = Vec\map(LocaleData::all(), fn (Locale $l) => $l->currency);

        $this->assertSame($expected, (new Locale())->currency);
        $this->assertSame($expected, H\most_popular($values));
    }

    #[TestDox('default grouping is the most popular one')]
    public function testGrouping(): void
    {
        $expected = 1;

        $values = Vec\map(LocaleData::all(), fn (Locale $l) => $l->grouping);

        $this->assertSame($expected, (new Locale())->grouping);
        $this->assertSame($expected, H\most_popular($values));
    }

    #[TestDox('default symbols are the most popular ones')]
    public function testSymbols(): void
    {
        $expected = ['.', ',', '-', '%'];

        $values = Vec\map(LocaleData::all(), fn (Locale $l) => $l->symbols);

        $this->assertSame($expected, (new Locale())->symbols);
        $this->assertSame($expected, H\most_popular($values));
    }
}
