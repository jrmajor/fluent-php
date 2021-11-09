<?php

namespace Major\Fluent\Tests\Bundle\Resolver\Terms;

use Major\Fluent\Tests\TestCase;

final class NestingMessageReferencesTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->bundle->addFtl(<<<'ftl'
            foo = Foo { $arg }
            -bar = { foo }
            ref-bar = { -bar }
            call-bar = { -bar() }
            call-bar-with-arg = { -bar(arg: 1) }
            ftl);
    }

    /**
     * @testdox no parameterization, no externals
     */
    public function testNoParamNoExt(): void
    {
        $this->assertTranslation('Foo {$arg}', 'ref-bar');
    }

    /**
     * @testdox no parameterization, but with externals
     */
    public function testNoParamExt(): void
    {
        $this->assertTranslation('Foo {$arg}', 'ref-bar', ['arg' => 5]);
    }

    /**
     * @testdox no arguments, no externals
     */
    public function testNoArgNoExt(): void
    {
        $this->assertTranslation('Foo {$arg}', 'call-bar');
    }

    /**
     * @testdox no arguments, but with externals
     */
    public function testNoArgExt(): void
    {
        $this->assertTranslation('Foo {$arg}', 'call-bar', ['arg' => 5]);
    }

    /**
     * @testdox with arguments, no externals
     */
    public function testArgNoExt(): void
    {
        $this->assertTranslation('Foo 1', 'call-bar-with-arg');
    }

    /**
     * @testdox with arguments and with externals
     */
    public function testArgExt(): void
    {
        $this->assertTranslation('Foo 1', 'call-bar-with-arg', ['arg' => 5]);
    }
}
