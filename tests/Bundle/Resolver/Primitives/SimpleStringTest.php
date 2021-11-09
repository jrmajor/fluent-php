<?php

namespace Major\Fluent\Tests\Bundle\Resolver\Primitives;

use Major\Fluent\Tests\TestCase;
use PHPUnit\Framework\Attributes\TestDox;

final class SimpleStringTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->bundle->addFtl(<<<'ftl'
            foo = Foo

            placeable-literal = { "Foo" } Bar
            placeable-message = { foo } Bar

            selector-literal = { "Foo" ->
               *[Foo] Member 1
            }

            bar =
                .attr = Bar Attribute

            placeable-attr = { bar.attr }

            -baz = Baz
                .attr = BazAttribute

            selector-attr = { -baz.attr ->
               *[BazAttribute] Member 3
            }
            ftl);
    }

    #[TestDox('it can be used as a value')]
    public function testValue(): void
    {
        $this->assertTranslation('Foo', 'foo');
    }

    #[TestDox('it can be used in a placeable')]
    public function testPlaceable(): void
    {
        $this->assertTranslation('Foo Bar', 'placeable-literal');
    }

    #[TestDox('it can be a value of a message referenced in a placeable')]
    public function testPlaceableMessage(): void
    {
        $this->assertTranslation('Foo Bar', 'placeable-message');
    }

    #[TestDox('it can be a selector')]
    public function testSelector(): void
    {
        $this->assertTranslation('Member 1', 'selector-literal');
    }

    #[TestDox('it can be used as an attribute value')]
    public function testAttribute(): void
    {
        $this->assertTranslation('Bar Attribute', 'bar.attr');
    }

    #[TestDox('it can be a value of an attribute used in a placeable')]
    public function testPlaceableAttribute(): void
    {
        $this->assertTranslation('Bar Attribute', 'placeable-attr');
    }

    #[TestDox('it can be a value of an attribute used as a selector')]
    public function testSelectorAttribute(): void
    {
        $this->assertTranslation('Member 3', 'selector-attr');
    }
}
