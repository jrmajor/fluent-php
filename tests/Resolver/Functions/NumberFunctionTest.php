<?php

namespace Major\Fluent\Tests\Resolver\Functions;

use Major\Fluent\Bundle\FluentBundle;
use Major\Fluent\Bundle\Types\FluentNumber;
use Major\Fluent\Exceptions\Resolver\FunctionException;
use Major\Fluent\Formatters\InvalidArgumentException;
use Major\Fluent\Tests\TestCase;
use PHPUnit\Framework\Attributes\TestDox;

class NumberFunctionTest extends TestCase
{
    private FluentBundle $us;

    private FluentBundle $pl;

    protected function setUp(): void
    {
        parent::setUp();

        $ftl = <<<'FTL'
            num = { NUMBER($arg) }
            option = { NUMBER($arg, minimumFractionDigits: 1) }
            percent = { NUMBER($arg, style: "percent") }
            zeroes = { NUMBER(1.00) }
            twice = { NUMBER($arg, minimumFractionDigits: 2) } { $arg }
            FTL;

        $this->us = new FluentBundle('en-US', useIsolating: false)->addFtl($ftl);

        $this->pl = new FluentBundle('pl', useIsolating: false)->addFtl($ftl);
    }

    #[TestDox('it works')]
    public function testWorks(): void
    {
        $this->assertTranslation('1,234', 'num', ['arg' => 1234], $this->us);
        $this->assertTranslation('1234', 'num', ['arg' => 1234], $this->pl);
    }

    #[TestDox('it reports invalid options')]
    public function testInvalidOptions(): void
    {
        $bundle = new FluentBundle('en-US')->addFtl(<<<'FTL'
            unknown = { NUMBER($arg, foo: "bar") }
            style = { NUMBER($arg, style: "oops") }
            digits = { NUMBER($arg, minimumFractionDigits: 3, maximumFractionDigits: 2) }
            positional = { NUMBER($arg, 2) }
            FTL);

        $this->assertTranslationErrors('{NUMBER()}', [
            [FunctionException::class, 'NUMBER() function error: Unknown option: foo.'],
        ], 'unknown', ['arg' => 1], $bundle);

        $this->assertTranslationErrors('{NUMBER()}', [
            [FunctionException::class, 'NUMBER() function error: Allowed styles are decimal, currency, percent and unit.'],
        ], 'style', ['arg' => 1], $bundle);

        $this->assertTranslationErrors('{NUMBER()}', [
            [FunctionException::class, 'NUMBER() function error: minimumFractionDigits must not be grater than maximumFractionDigits.'],
        ], 'digits', ['arg' => 1], $bundle);

        $this->assertTranslationErrors('{NUMBER()}', [
            [FunctionException::class, 'NUMBER() function error: Options must be passed by name.'],
        ], 'positional', ['arg' => 1], $bundle);
    }

    #[TestDox('it validates options of FluentNumber')]
    public function testFluentNumberOptions(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Unknown option: foo.');

        new FluentNumber(1)->setOptions(['foo' => 'bar']);
    }

    #[TestDox('it accepts arguments')]
    public function testArguments(): void
    {
        $this->assertTranslation('42.0', 'option', ['arg' => 42], $this->us);
        $this->assertTranslation('42,0', 'option', ['arg' => 42], $this->pl);

        $this->assertTranslation('42%', 'percent', ['arg' => 0.42], $this->us);
        $this->assertTranslation('42%', 'percent', ['arg' => 0.42], $this->pl);
    }

    #[TestDox('it retains trailing zeroes')]
    public function testTrailingZeroes(): void
    {
        $this->assertTranslation('1.00', 'zeroes', [], $this->us);
        $this->assertTranslation('1,00', 'zeroes', [], $this->pl);
    }

    #[TestDox('it accepts partially formatted numbers')]
    public function testPartiallyFormatted(): void
    {
        $this->assertTranslation('12345.0', 'option', [
            'arg' => new FluentNumber(12345)->setOptions(['useGrouping' => false]),
        ], $this->us);
    }

    #[TestDox('it does not modify passed FluentNumber')]
    public function testDoesNotModifyArgument(): void
    {
        $arg = new FluentNumber(0.5);

        $this->assertTranslation('0.50 0.5', 'twice', ['arg' => $arg], $this->us);
        $this->assertTranslation('50%', 'percent', ['arg' => $arg], $this->us);
        $this->assertTranslation('0.5', 'num', ['arg' => $arg], $this->us);
    }
}
