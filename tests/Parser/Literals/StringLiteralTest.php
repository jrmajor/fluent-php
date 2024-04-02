<?php

namespace Major\Fluent\Tests\Parser\Literals;

use Major\Fluent\Node\LiteralValues\StringLiteralValue;
use Major\Fluent\Parser\FluentParser;
use Major\Fluent\Tests\TestCase;
use PHPUnit\Framework\Attributes\TestDox;
use Psl\Type;

final class StringLiteralTest extends TestCase
{
    #[TestDox('it can parse string literal with no escape sequences')]
    public function testString(): void
    {
        $this->assertValue('abc', 'x = {"abc"}');
    }

    #[TestDox('it properly escapes backslash and double quote')]
    public function testEscapes(): void
    {
        $this->assertValue('\\', 'x = {"\\\\"}');
        $this->assertValue('"', 'x = {"\\""}');
        $this->assertValue('\\"', 'x = {"\\\\\\""}');
    }

    #[TestDox('it can parse unicode escapes')]
    public function testUnicode(): void
    {
        $this->assertValue('A', 'x = {"\\u0041"}');
        $this->assertValue('\\u0041', 'x = {"\\\\u0041"}');
        $this->assertValue('😂', 'x = {"\\U01F602"}');
        $this->assertValue('\\U01F602', 'x = {"\\\\U01F602"}');
    }

    #[TestDox('trailing zeroes are not part unicode escapes')]
    public function testUnicodeTrailingZeroes(): void
    {
        $this->assertValue('A00', 'x = {"\\u004100"}');
        $this->assertValue('😂00', 'x = {"\\U01F60200"}');
    }

    #[TestDox('it properly parses literal braces')]
    public function testBraces(): void
    {
        $this->assertValue('{', 'x = {"{"}');
        $this->assertValue('}', 'x = {"}"}');
    }

    private static function assertValue(string $value, string $ftl): void
    {
        $ast = (new FluentParser(true))->parseEntry($ftl);

        /** @phpstan-ignore-next-line */
        $expr = $ast->value->elements[0]->expression;

        $parsed = Type\instance_of(StringLiteralValue::class)->coerce($expr->parse());

        self::assertSame($value, $parsed->value);
    }
}
