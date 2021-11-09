<?php

namespace Major\Fluent\Tests\Bundle\Resolver\Functions;

use Major\Fluent\Bundle\FluentBundle;
use Major\Fluent\Tests\TestCase;

class NumberFunctionTest extends TestCase
{
    private FluentBundle $us;

    private FluentBundle $pl;

    protected function setUp(): void
    {
        parent::setUp();

        $ftl = <<<'ftl'
            num = { NUMBER($arg) }
            option = { NUMBER($arg, minimumFractionDigits: 1) }
            percent = { NUMBER($arg, style: "percent") }
            zeroes = { NUMBER(1.00) }
            ftl;

        $this->us = (new FluentBundle('en-US', useIsolating: false))->addFtl($ftl);

        $this->pl = (new FluentBundle('pl', useIsolating: false))->addFtl($ftl);
    }

    public function testNumberFunctionWorks(): void
    {
        $this->assertTranslation('1,234', 'num', ['arg' => 1234], $this->us);
        $this->assertTranslation('1234', 'num', ['arg' => 1234], $this->pl);
    }

    public function testNumberFunctionAcceptsArguments(): void
    {
        $this->assertTranslation('42.0', 'option', ['arg' => 42], $this->us);
        $this->assertTranslation('42,0', 'option', ['arg' => 42], $this->pl);

        $this->assertTranslation('42%', 'percent', ['arg' => 0.42], $this->us);
        $this->assertTranslation('42%', 'percent', ['arg' => 0.42], $this->pl);
    }

    public function testItRetainsTrailingZeroes(): void
    {
        $this->assertTranslation('1.00', 'zeroes', [], $this->us);
        $this->assertTranslation('1,00', 'zeroes', [], $this->pl);
    }
}
