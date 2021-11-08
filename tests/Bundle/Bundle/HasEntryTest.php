<?php

namespace Major\Fluent\Tests\Bundle\Bundle;

use Major\Fluent\Tests\TestCase;

final class HasEntryTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->bundle->addFtl(<<<'ftl'
            foo = Foo
            -bar = Term

            # ERROR No value.
            err1 =
            # ERROR Broken value.
            err2 = {}
            # ERROR No attribute value.
            err3 =
                .attr =
            # ERROR Broken attribute value.
            err4 =
                .attr1 = Attr
                .attr2 = {}

            # ERROR No value.
            -err5 =
            # ERROR Broken value.
            -err6 = {}
            # ERROR No attribute value.
            -err7 =
                .attr =
            # ERROR Broken attribute value.
            -err8 =
                .attr1 = Attr
                .attr2 = {}
            ftl);
    }

    /**
     * @testdox it returns true for existing messages
     */
    public function testExistingMessage(): void
    {
        $this->assertTrue($this->bundle->hasMessage('foo'));
    }

    /**
     * @testdox it returns true for existing terms
     */
    public function testExistingTerm(): void
    {
        $this->assertTrue($this->bundle->hasTerm('bar'));
    }

    /**
     * @testdox it returns false for missing messages
     */
    public function testMissingMessage(): void
    {
        $this->assertFalse($this->bundle->hasMessage('bar'));
    }

    /**
     * @testdox it returns false for missing terms
     */
    public function testMissingTerm(): void
    {
        $this->assertFalse($this->bundle->hasTerm('foo'));
    }

    /**
     * @testdox it returns false for broken messages
     */
    public function testBrokenMessage(): void
    {
        $this->assertFalse($this->bundle->hasMessage('err1'));
        $this->assertFalse($this->bundle->hasMessage('err2'));
        $this->assertFalse($this->bundle->hasMessage('err3'));
        $this->assertFalse($this->bundle->hasMessage('err4'));
    }

    /**
     * @testdox it returns false for broken terms
     */
    public function testBrokenTerm(): void
    {
        $this->assertFalse($this->bundle->hasTerm('err5'));
        $this->assertFalse($this->bundle->hasTerm('err6'));
        $this->assertFalse($this->bundle->hasTerm('err7'));
        $this->assertFalse($this->bundle->hasTerm('err8'));
    }
}
