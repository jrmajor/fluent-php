<?php

namespace Major\Fluent\Tests\Formatters\Number;

use Major\Exporter as E;
use Major\Fluent\Formatters\LocaleData;
use Major\Fluent\Formatters\Number\Locale\Locale;
use Major\Fluent\Tests\Helpers as H;
use Major\Fluent\Tests\TestCase;
use PHPUnit\Framework\Attributes\TestDox;
use Psl\Vec;

final class LocaleKnownValuesTest extends TestCase
{
    #[TestDox('there are no unknown numeric systems')]
    public function testSystem(): void
    {
        $values = Vec\map(LocaleData::all(), fn (Locale $l) => $l->system);

        $this->assertSame([
            ['value' => 'arab', 'count' => 22],
            ['value' => 'arabext', 'count' => 4],
            ['value' => 'beng', 'count' => 3],
            ['value' => 'deva', 'count' => 2],
            ['value' => 'latn', 'count' => 185],
            ['value' => 'mymr', 'count' => 1],
        ], self::countValues($values));
    }

    #[TestDox('there are no unknown decimal patterns')]
    public function testDecimal(): void
    {
        $values = Vec\map(LocaleData::all(), fn (Locale $l) => $l->decimal);

        $this->assertSamePatterns([
            ['value' => '#,##,##0.###', 'count' => 14],
            ['value' => '#,##0.###', 'count' => 203],
        ], self::countValues($values));
    }

    #[TestDox('there are no unknown percent patterns')]
    public function testPercent(): void
    {
        $values = Vec\map(LocaleData::all(), fn (Locale $l) => $l->percent);

        $this->assertSamePatterns([
            ['value' => '#,##,##0%', 'count' => 7],
            ['value' => '#,##0%', 'count' => 169],
            ['value' => "#,##0\u{A0}%", 'count' => 39],
            ['value' => '%#,##0', 'count' => 1],
            ['value' => "%\u{A0}#,##0", 'count' => 1],
        ], self::countValues($values));
    }

    #[TestDox('there are no unknown currency patterns')]
    public function testCurrency(): void
    {
        $values = Vec\map(LocaleData::all(), fn (Locale $l) => $l->currency);

        $this->assertSamePatterns([
            ['value' => '#,##,##0.00¤', 'count' => 1],
            ['value' => "#,##0.00\u{A0}¤", 'count' => 83], // todo
            ['value' => "#,##0.00\u{A0}¤;-#,##0.00\u{A0}¤", 'count' => 3],
            ['value' => '#,##0.00¤', 'count' => 1],
            ['value' => '¤#,##,##0.00', 'count' => 8],
            ['value' => '¤#,##0.00', 'count' => 57],
            ['value' => '¤#,##0.00;¤-#,##0.00', 'count' => 4],
            ['value' => "¤\u{A0}#,##,##0.00", 'count' => 2],
            ['value' => "¤\u{A0}#,##0.00", 'count' => 24],
            ['value' => "¤\u{A0}#,##0.00;¤-#,##0.00", 'count' => 3],
            ['value' => "¤\u{A0}#,##0.00;¤\u{A0}-#,##0.00", 'count' => 3],
            ['value' => "\u{200E}¤#,##0.00", 'count' => 1],
            ['value' => "\u{200F}#,##0.00\u{A0}¤", 'count' => 21],
            ['value' => "\u{200F}#,##0.00\u{A0}¤;\u{200F}-#,##0.00\u{A0}¤", 'count' => 5],
            ['value' => "\u{200F}#,##0.00\u{A0}\u{200F}¤;\u{200F}-#,##0.00\u{A0}\u{200F}¤", 'count' => 1],
        ], self::countValues($values));
    }

    #[TestDox('there are no unknown groupings')]
    public function testGrouping(): void
    {
        $values = Vec\map(LocaleData::all(), fn (Locale $l) => $l->grouping);

        $this->assertSame([
            ['value' => 1, 'count' => 192],
            ['value' => 2, 'count' => 25],
        ], self::countValues($values));
    }

    #[TestDox('there are no unknown symbols')]
    public function testSymbols(): void
    {
        $values = Vec\map(LocaleData::all(), fn (Locale $l) => $l->symbols);

        $this->assertSame([
            ['value' => [',', "'", '-', '%'], 'count' => 1],
            ['value' => [',', '.', '-', '%'], 'count' => 48],
            ['value' => [',', '.', "\u{200E}-", "\u{200E}%\u{200E}"], 'count' => 4],
            ['value' => [',', '.', '−', '%'], 'count' => 3],
            ['value' => [',', "\u{A0}", '-', '%'], 'count' => 46],
            ['value' => [',', "\u{A0}", '−', '%'], 'count' => 7],
            ['value' => [',', "\u{202F}", '-', '%'], 'count' => 4],
            ['value' => ['.', "'", '-', '%'], 'count' => 4],
            ['value' => ['.', ',', '-', '%'], 'count' => 70],
            ['value' => ['.', ',', "\u{200E}-", '%'], 'count' => 2],
            ['value' => ['.', ',', "\u{200E}-", "\u{200E}%\u{200E}"], 'count' => 1],
            ['value' => ['.', "\u{A0}", '-', '%'], 'count' => 1],
            ['value' => ['.', '٬', "\u{061C}-", "٪\u{061C}"], 'count' => 1],
            ['value' => ['٫', '٬', "\u{061C}-", "٪\u{061C}"], 'count' => 21],
            ['value' => ['٫', '٬', "\u{200E}-\u{200E}", '%'], 'count' => 1],
            ['value' => ['٫', '٬', "\u{200E}-\u{200E}", '٪'], 'count' => 1],
            ['value' => ['٫', '٬', "\u{200E}−", '٪'], 'count' => 2],
        ], self::countValues($values));
    }

    /**
     * Counts values sorted by value, so that changes in counts don't reorder them.
     *
     * @template T
     *
     * @param list<T> $values
     *
     * @return list<array{value: T, count: int}>
     */
    private static function countValues(array $values): array
    {
        return Vec\sort(H\count_values($values), fn ($a, $b) => $a['value'] <=> $b['value']);
    }

    /**
     * @param list<array{value: string, ...}> $expected
     * @param list<array{value: string, ...}> $actual
     */
    private function assertSamePatterns(array $expected, array $actual): void
    {
        $exporter = function (array $data): array {
            $data['value'] = E\to_string(E\guess($data['value']));

            return $data;
        };

        $expected = Vec\map($expected, $exporter);
        $actual = Vec\map($actual, $exporter);

        $this->assertSame($expected, $actual);
    }
}
