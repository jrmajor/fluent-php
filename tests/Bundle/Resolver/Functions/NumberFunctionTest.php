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
        $this->assertTranslation('1,234', $this->us, 'num', arg: 1234);
        $this->assertTranslation('1234', $this->pl, 'num', arg: 1234);
    }

    public function testNumberFunctionAcceptsArguments(): void
    {
        $this->assertTranslation('42.0', $this->us, 'option', arg: 42);
        $this->assertTranslation('42,0', $this->pl, 'option', arg: 42);

        $this->assertTranslation('42%', $this->us, 'percent', arg: 0.42);
        $this->assertTranslation('42%', $this->pl, 'percent', arg: 0.42);
    }

    public function testItRetainsTrailingZeroes(): void
    {
        $this->assertTranslation('1.00', $this->us, 'zeroes');
        $this->assertTranslation('1,00', $this->pl, 'zeroes');
    }
}
