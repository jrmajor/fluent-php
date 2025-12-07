<?php

namespace Major\Fluent\Tests\Parser\Literals;

use Major\Fluent\Node\Syntax\Entries\Message;
use Major\Fluent\Node\Syntax\Expressions\Literals\NumberLiteral;
use Major\Fluent\Node\Syntax\Patterns\Placeable;
use Major\Fluent\Parser\FluentParser;
use Major\Fluent\Tests\TestCase;
use PHPUnit\Framework\Attributes\TestDox;

final class NumberLiteralTest extends TestCase
{
    #[TestDox('it can parse integers')]
    public function testIntegers(): void
    {
        $this->assertValueAndPrecision(0.0, 0, 'x = {0}');
        $this->assertValueAndPrecision(1.0, 0, 'x = {1}');
        $this->assertValueAndPrecision(-1.0, 0, 'x = {-1}');
        $this->assertValueAndPrecision(0.0, 0, 'x = {-0}');
    }

    #[TestDox('it can parse padded integers')]
    public function testPaddedIntegers(): void
    {
        $this->assertValueAndPrecision(1.0, 0, 'x = {01}');
        $this->assertValueAndPrecision(-1.0, 0, 'x = {-01}');
        $this->assertValueAndPrecision(0.0, 0, 'x = {00}');
        $this->assertValueAndPrecision(0.0, 0, 'x = {-00}');
    }

    #[TestDox('it can parse positive floats')]
    public function testPositiveFloats(): void
    {
        $this->assertValueAndPrecision(0.0, 1, 'x = {0.0}');
        $this->assertValueAndPrecision(0.01, 2, 'x = {0.01}');
        $this->assertValueAndPrecision(1.03, 2, 'x = {1.03}');
        $this->assertValueAndPrecision(1.0, 3, 'x = {1.000}');
    }

    #[TestDox('it can parse negative floats')]
    public function testNegativeFloats(): void
    {
        $this->assertValueAndPrecision(-0.01, 2, 'x = {-0.01}');
        $this->assertValueAndPrecision(-1.03, 2, 'x = {-1.03}');
        $this->assertValueAndPrecision(0.0, 1, 'x = {-0.0}');
        $this->assertValueAndPrecision(-1.0, 3, 'x = {-1.000}');
    }

    #[TestDox('it can parse padded floats')]
    public function testPaddedFloats(): void
    {
        $this->assertValueAndPrecision(1.03, 2, 'x = {01.03}');
        $this->assertValueAndPrecision(1.03, 4, 'x = {1.0300}');
        $this->assertValueAndPrecision(1.03, 4, 'x = {01.0300}');
        $this->assertValueAndPrecision(-1.03, 2, 'x = {-01.03}');
        $this->assertValueAndPrecision(-1.03, 4, 'x = {-1.0300}');
        $this->assertValueAndPrecision(-1.03, 4, 'x = {-01.0300}');
    }

    private static function assertValueAndPrecision(
        float $value, int $precision, string $ftl,
    ): void {
        $ast = (new FluentParser(true))->parseEntry($ftl);

        assert($ast instanceof Message);
        assert($ast->value !== null);
        assert($ast->value->elements[0] instanceof Placeable);

        $expr = $ast->value->elements[0]->expression;

        assert($expr instanceof NumberLiteral);

        $parsed = $expr->parse();

        self::assertSame($value, $parsed->value);
        self::assertSame($precision, $parsed->precision);
    }
}
