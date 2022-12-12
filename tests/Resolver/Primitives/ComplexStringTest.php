<?php

namespace Major\Fluent\Tests\Resolver\Primitives;

use Major\Fluent\Tests\TestCase;
use PHPUnit\Framework\Attributes\TestDox;

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

    #[TestDox('it can be used as a value')]
    public function testValue(): void
    {
        $this->assertTranslation('FooBar', 'bar');
    }

    #[TestDox('it can be a value of a message referenced in a placeable')]
    public function testPlaceableValue(): void
    {
        $this->assertTranslation('FooBarBaz', 'placeable-message');
    }

    #[TestDox('it can be used as an attribute value')]
    public function testAttribute(): void
    {
        $this->assertTranslation('FooBarBazAttribute', 'baz.attr');
    }

    #[TestDox('it can be a value of an attribute used in a placeable')]
    public function testPlaceableAttribute(): void
    {
        $this->assertTranslation('FooBarBazAttribute', 'placeable-attr');
    }
}
