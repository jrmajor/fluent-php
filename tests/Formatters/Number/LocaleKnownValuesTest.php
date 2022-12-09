<?php

namespace Major\Fluent\Tests\Formatters\Number;

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
        $values = Vec\map(LocaleData::all(), fn (Locale $l) => $l->system);

        $this->assertSame([
            ['value' => 'latn', 'count' => 358],
            ['value' => 'arab', 'count' => 24],
            ['value' => 'arabext', 'count' => 5],
            ['value' => 'beng', 'count' => 3],
            ['value' => 'deva', 'count' => 3],
            ['value' => 'mymr', 'count' => 1],
        ], H\count_values($values));
    }

    #[TestDox('there are no unknown decimal patterns')]
    public function testDecimal(): void
    {
        $values = Vec\map(LocaleData::all(), fn (Locale $l) => $l->decimal);

        $this->assertSame([
            ['value' => '#,##0.###', 'count' => 377],
            ['value' => '#,##,##0.###', 'count' => 17],
        ], H\count_values($values));
    }

    #[TestDox('there are no unknown percent patterns')]
    public function testPercent(): void
    {
        $values = Vec\map(LocaleData::all(), fn (Locale $l) => $l->percent);

        $this->assertSame([
            ['value' => '#,##0%', 'count' => 257],
            ['value' => "#,##0\u{A0}%", 'count' => 123],
            ['value' => '#,##,##0%', 'count' => 11],
            ['value' => '%#,##0', 'count' => 2],
            ['value' => "%\u{A0}#,##0", 'count' => 1],
        ], H\count_values($values));
    }

    #[TestDox('there are no unknown currency patterns')]
    public function testCurrency(): void
    {
        $values = Vec\map(LocaleData::all(), fn (Locale $l) => $l->currency);

        $this->assertSame([
            ['value' => '¤#,##0.00', 'count' => 155],
            ['value' => "#,##0.00\u{A0}¤", 'count' => 144],
            ['value' => "¤\u{A0}#,##0.00", 'count' => 30],
            ['value' => "\u{200F}#,##0.00\u{A0}¤", 'count' => 22],
            ['value' => "¤\u{A0}#,##0.00;¤\u{A0}-#,##0.00", 'count' => 12],
            ['value' => '¤#,##,##0.00', 'count' => 10],
            ['value' => "\u{200F}#,##0.00\u{A0}¤;\u{200F}-#,##0.00\u{A0}¤", 'count' => 6],
            ['value' => '¤#,##0.00;¤-#,##0.00', 'count' => 4],
            ['value' => "¤\u{A0}#,##,##0.00", 'count' => 4],
            ['value' => "¤\u{A0}#,##0.00;¤-#,##0.00", 'count' => 3],
            ['value' => '#,##,##0.00¤', 'count' => 1],
            ['value' => '#,##0.00¤', 'count' => 1],
            ['value' => "\u{200E}¤#,##0.00", 'count' => 1],
            ['value' => "\u{200F}#,##0.00\u{A0}\u{200F}¤;\u{200F}-#,##0.00\u{A0}\u{200F}¤", 'count' => 1],
        ], H\count_values($values));
    }

    #[TestDox('there are no unknown groupings')]
    public function testGrouping(): void
    {
        $values = Vec\map(LocaleData::all(), fn (Locale $l) => $l->grouping);

        $this->assertSame([
            ['value' => 1, 'count' => 368],
            ['value' => 2, 'count' => 26],
        ], H\count_values($values));
    }

    #[TestDox('there are no unknown symbols')]
    public function testSymbols(): void
    {
        $values = Vec\map(LocaleData::all(), fn (Locale $l) => $l->symbols);

        $this->assertSame([
            ['value' => ['.', ',', '-', '%'], 'count' => 176],
            ['value' => [',', '.', '-', '%'], 'count' => 76],
            ['value' => [',', "\u{A0}", '-', '%'], 'count' => 44],
            ['value' => [',', "\u{202F}", '-', '%'], 'count' => 43],
            ['value' => ['٫', '٬', "\u{061C}-", "٪\u{061C}"], 'count' => 24],
            ['value' => [',', "\u{A0}", '−', '%'], 'count' => 10],
            ['value' => [',', '.', "\u{200E}-", "\u{200E}%\u{200E}"], 'count' => 4],
            ['value' => [',', '.', '−', '%'], 'count' => 4],
            ['value' => ['.', '’', '-', '%'], 'count' => 4],
            ['value' => ['.', ',', "\u{200E}-", '%'], 'count' => 2],
            ['value' => ['.', ',', "\u{200E}-", "\u{200E}%\u{200E}"], 'count' => 2],
            ['value' => ['٫', '٬', "\u{200E}-\u{200E}", '٪'], 'count' => 2],
            ['value' => ['٫', '٬', "\u{200E}−", '٪'], 'count' => 2],
            ['value' => ['٫', '٬', "\u{200E}-\u{200E}", '%'], 'count' => 1],
        ], H\count_values($values));
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
