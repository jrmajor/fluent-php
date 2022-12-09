<?php

namespace Major\Fluent\Tests\Formatters\Number;

use Major\Fluent\Formatters\Number\Locale\Locale;
use Major\Fluent\Tests\Helpers as H;
use Major\Fluent\Tests\TestCase;
use PHPUnit\Framework\Attributes\BeforeClass;
use PHPUnit\Framework\Attributes\TestDox;
use Psl\Filesystem;
use Psl\Iter;
use Psl\Vec;
use ReflectionClass;
use ReflectionParameter;

final class LocaleDefaultsTest extends TestCase
{
    /** @var list<Locale> */
    private static array $locales;

    #[BeforeClass]
    public static function gatherLocaleData(): void
    {
        $localeFiles = Filesystem\read_directory(__DIR__ . '/../../../locales/numbers');

        foreach ($localeFiles as $localeFile) {
            /** @psalm-suppress UnresolvableInclude */
            self::$locales[] = require $localeFile;
        }

        self::assertCount(377, self::$locales);
    }

    #[TestDox('default numeric system is the most popular one')]
    public function testSystem(): void
    {
        $expected = 'latn';

        $values = Vec\map(self::$locales, fn (Locale $l) => $l->system);

        $this->assertSame($expected, $this->getDefaultValueFor('system'));
        $this->assertSame($expected, H\most_popular($values));
    }

    #[TestDox('default decimal pattern is the most popular one')]
    public function testDecimal(): void
    {
        $expected = '#,##0.###';

        $values = Vec\map(self::$locales, fn (Locale $l) => $l->decimal);

        $this->assertSame($expected, $this->getDefaultValueFor('decimal'));
        $this->assertSame($expected, H\most_popular($values));
    }

    #[TestDox('default percent pattern is the most popular one')]
    public function testPercent(): void
    {
        $expected = '#,##0%';

        $values = Vec\map(self::$locales, fn (Locale $l) => $l->percent);

        $this->assertSame($expected, $this->getDefaultValueFor('percent'));
        $this->assertSame($expected, H\most_popular($values));
    }

    #[TestDox('default currency pattern is the most popular one')]
    public function testCurrency(): void
    {
        $expected = "#,##0.00\u{A0}¤";

        $values = Vec\map(self::$locales, fn (Locale $l) => $l->currency);

        $this->assertSame($expected, $this->getDefaultValueFor('currency'));
        $this->assertSame($expected, H\most_popular($values));
    }

    #[TestDox('default grouping is the most popular one')]
    public function testGrouping(): void
    {
        $expected = 1;

        $values = Vec\map(self::$locales, fn (Locale $l) => $l->grouping);

        $this->assertSame($expected, $this->getDefaultValueFor('grouping'));
        $this->assertSame($expected, H\most_popular($values));
    }

    #[TestDox('default symbols are the most popular ones')]
    public function testSymbols(): void
    {
        $expected = ['.', ',', '-', '%'];

        $values = Vec\map(self::$locales, fn (Locale $l) => $l->symbols);

        $this->assertSame($expected, $this->getDefaultValueFor('symbols'));
        $this->assertSame($expected, H\most_popular($values));
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
