<?php

namespace Major\Fluent\Tests\Formatters\Number;

use Major\Fluent\Formatters\LocaleData;
use Major\Fluent\Formatters\Number\Locale\Locale;
use Major\Fluent\Tests\Helpers as H;
use Major\Fluent\Tests\TestCase;
use PHPUnit\Framework\Attributes\TestDox;
use Psl\Iter;
use Psl\Vec;
use ReflectionClass;
use ReflectionParameter;

final class LocaleKnownValuesTest extends TestCase
{
    #[TestDox('there are no unknown numeric systems')]
    public function testSystem(): void
    {
        $this->assertEqualsCanonicalizing(
            [
                'latn',
                'arab',
                'arabext',
                'beng',
                'deva',
                'mymr'
            ],
            array_unique(Vec\map(LocaleData::all(), fn (Locale $l) => $l->system))
        );
    }

    #[TestDox('there are no unknown decimal patterns')]
    public function testDecimal(): void
    {
        $this->assertEqualsCanonicalizing(
            [
                '#,##0.###',
                '#,##,##0.###'
            ],
            array_unique(Vec\map(LocaleData::all(), fn (Locale $l) => $l->decimal))
        );
    }

    #[TestDox('there are no unknown percent patterns')]
    public function testPercent(): void
    {
        $this->assertEqualsCanonicalizing(
            [
                '#,##0%',
                "#,##0\u{A0}%",
                '#,##,##0%',
                '%#,##0',
                "%\u{A0}#,##0",
            ],
            array_unique(Vec\map(LocaleData::all(), fn (Locale $l) => $l->percent))
        );
    }

    #[TestDox('there are no unknown currency patterns')]
    public function testCurrency(): void
    {
        $this->assertEqualsCanonicalizing(
            [
                '¤#,##0.00',
                "#,##0.00\u{A0}¤",
                "¤\u{A0}#,##0.00",
                "\u{200F}#,##0.00\u{A0}¤",
                "¤\u{A0}#,##0.00;¤\u{A0}-#,##0.00",
                '¤#,##,##0.00',
                "\u{200F}#,##0.00\u{A0}¤;\u{200F}-#,##0.00\u{A0}¤",
                '¤#,##0.00;¤-#,##0.00',
                "¤\u{A0}#,##,##0.00",
                "¤\u{A0}#,##0.00;¤-#,##0.00",
                '#,##,##0.00¤',
                '#,##0.00¤',
                "\u{200E}¤#,##0.00",
                "\u{200F}#,##0.00\u{A0}\u{200F}¤;\u{200F}-#,##0.00\u{A0}\u{200F}¤",
            ],
            array_unique(Vec\map(LocaleData::all(), fn (Locale $l) => $l->currency))
        );
    }

    #[TestDox('there are no unknown groupings')]
    public function testGrouping(): void
    {
        $this->assertEqualsCanonicalizing(
            [
                1,
                2,
            ],
            array_unique(Vec\map(LocaleData::all(), fn (Locale $l) => $l->grouping))
        );
    }

    #[TestDox('there are no unknown symbols')]
    public function testSymbols(): void
    {
        $this->assertEqualsCanonicalizing(
            [
                ['.', ',', '-', '%'],
                [',', '.', '-', '%'],
                [',', "\u{A0}", '-', '%'],
                [',', "\u{202F}", '-', '%'],
                ['٫', '٬', "\u{061C}-", "٪\u{061C}"],
                [',', "\u{A0}", '−', '%'],
                [',', '.', "\u{200E}-", "\u{200E}%\u{200E}"],
                [',', '.', '−', '%'],
                ['.', '’', '-', '%'],
                ['.', ',', "\u{200E}-", '%'],
                ['.', ',', "\u{200E}-", "\u{200E}%\u{200E}"],
                ['٫', '٬', "\u{200E}-\u{200E}", '٪'],
                ['٫', '٬', "\u{200E}−", '٪'],
                ['٫', '٬', "\u{200E}-\u{200E}", '%'],
            ],
            array_unique(Vec\map(LocaleData::all(), fn (Locale $l) => $l->symbols),SORT_REGULAR)
        );
    }

    /**
     * @psalm-suppress PossiblyNullReference
     */
    private function getDefaultValueFor(string $property): mixed
    {
        return Iter\search(
            (new ReflectionClass(Locale::class))->getConstructor()->getParameters(),
            fn (ReflectionParameter $p): bool => $p->getName() === $property,
        )->getDefaultValue();
    }
}
