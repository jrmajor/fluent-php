<?php

namespace Major\Fluent\Tests\Bundle\Resolver\Primitives;

use Major\Fluent\Tests\TestCase;

final class ComplexStringTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->bundle->addFtl(<<<'ftl'
            foo = Foo
            bar = { foo }Bar

            placeable-message = { bar }Baz

            baz =
                .attr = { bar }BazAttribute

            placeable-attr = { baz.attr }
            ftl);
    }

    /**
     * @testdox it can be used as a value
     */
    public function testValue(): void
    {
        $this->assertTranslation('FooBar', 'bar');
    }

    /**
     * @testdox it can be a value of a message referenced in a placeable
     */
    public function testPlaceableValue(): void
    {
        $this->assertTranslation('FooBarBaz', 'placeable-message');
    }

    /**
     * @testdox it can be used as an attribute value
     */
    public function testAttribute(): void
    {
        $this->assertTranslation('FooBarBazAttribute', 'baz.attr');
    }

    /**
     * @testdox it can be a value of an attribute used in a placeable
     */
    public function testPlaceableAttribute(): void
    {
        $this->assertTranslation('FooBarBazAttribute', 'placeable-attr');
    }
}
