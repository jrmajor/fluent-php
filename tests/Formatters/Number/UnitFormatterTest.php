<?php

namespace Major\Fluent\Tests\Formatters\Number;

use Generator;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\TestDox;

/**
 * @psalm-import-type O from NumberFormatterTestCase
 */
final class UnitFormatterTest extends NumberFormatterTestCase
{
    protected static function patternType(): string
    {
        return 'unit';
    }

    protected static function patternsToTest(): array
    {
        return [];
    }

    public function testAllPatterns(): void {
        $this->markTestSkipped('Test doesnt actual for units');
    }

    public function testCorrectPatterns(): void {
        $this->markTestSkipped('Test doesnt actual for units');
    }

    /**
     * @param O $options
     */
    #[DataProvider('provideLongDisplayCases')]
    #[TestDox('it works with long display')]
    public function testLong(
        string $locale, int|float $number, array $options = [],
    ): void {
        $options = [...$options, 'style' => 'unit', 'unitDisplay' => 'long'];

        $this->assertNumberFormat($locale, $number, $options);
    }

    /**
     * @param O $options
     */
    #[DataProvider('provideShortDisplayCases')]
    #[TestDox('it works with short display')]
    public function testShort(
        string $locale, int|float $number, array $options = [],
    ): void {
        $options = [...$options, 'style' => 'unit', 'unitDisplay' => 'short'];

        $this->assertNumberFormat($locale, $number, $options);
    }

    /**
     * @param O $options
     */
    #[DataProvider('provideNarrowDisplayCases')]
    #[TestDox('it works with narrow unit display')]
    public function testNarrow(
        string $locale, int|float $number, array $options = [],
    ): void {
        $options = [...$options, 'style' => 'unit', 'unitDisplay' => 'narrow'];

        $this->assertNumberFormat($locale, $number, $options);
    }

    /**
     * @return Generator<array{string, int|float, O}>
     */
    public static function provideLongDisplayCases(): Generator
    {
        foreach ([
            [69, ['unit' => 'kilometer']],
            [21.37, ['unit' => 'foot']],
            [1444, ['unit' => 'megabit']],
        ] as $case) {
            foreach (self::provideLocales() as $locale) {
                yield [$locale, ...$case];
            }
        }
    }

    /**
     * @return Generator<array{string, int|float, O}>
     */
    public static function provideShortDisplayCases(): Generator
    {
        foreach ([
            [69, ['unit' => 'kilometer']],
            [21.37, ['unit' => 'foot']],
            [1444, ['unit' => 'megabit']],
        ] as $case) {
            foreach (self::provideLocales() as $locale) {
                yield [$locale, ...$case];
            }
        }
    }

    /**
     * @return Generator<array{string, int|float, O}>
     */
    public static function provideNarrowDisplayCases(): Generator
    {
        foreach ([
            [69, ['unit' => 'kilometer']],
            [21.37, ['unit' => 'foot']],
            [1444, ['unit' => 'megabit']],
        ] as $case) {
            foreach (self::provideLocales() as $locale) {
                yield [$locale, ...$case];
            }
        }
    }
}
