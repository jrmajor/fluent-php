<?php

namespace Major\Fluent\Tests\Bundle\Resolver\Terms;

use Major\Fluent\Tests\TestCase;

final class NestingTermReferencesTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->bundle->addFtl(<<<'ftl'
            -foo = Foo { $arg }
            -bar = { -foo }
            -baz = { -foo() }
            -qux = { -foo(arg: 1) }

            ref-bar = { -bar }
            ref-baz = { -baz }
            ref-qux = { -qux }

            call-bar-no-args = { -bar() }
            call-baz-no-args = { -baz() }
            call-qux-no-args = { -qux() }

            call-bar-with-arg = { -bar(arg: 2) }
            call-baz-with-arg = { -baz(arg: 2) }
            call-qux-with-arg = { -qux(arg: 2) }
            call-qux-with-other = { -qux(other: 3) }
            ftl);
    }

    /**
     * @testdox no parameterization, no parameterization, no externals
     */
    public function testNoParamNoParamNoExt(): void
    {
        $this->assertTranslation('Foo {$arg}', 'ref-bar');
    }

    /**
     * @testdox no parameterization, no parameterization, with externals
     */
    public function testNoParamNoParamExt(): void
    {
        $this->assertTranslation('Foo {$arg}', 'ref-bar', ['arg' => 5]);
    }

    /**
     * @testdox no parameterization, no arguments, no externals
     */
    public function testNoParamNoArgNoExt(): void
    {
        $this->assertTranslation('Foo {$arg}', 'ref-baz');
    }

    /**
     * @testdox no parameterization, no arguments, with externals
     */
    public function testNoParamNoArgExt(): void
    {
        $this->assertTranslation('Foo {$arg}', 'ref-baz', ['arg' => 5]);
    }

    /**
     * @testdox no parameterization, with arguments, no externals
     */
    public function testNoParamArgNoExt(): void
    {
        $this->assertTranslation('Foo 1', 'ref-qux');
    }

    /**
     * @testdox no parameterization, with arguments, with externals
     */
    public function testNoParamArgExt(): void
    {
        $this->assertTranslation('Foo 1', 'ref-qux', ['arg' => 5]);
    }

    /**
     * @testdox no arguments, no parameterization, no externals
     */
    public function testNoArgNoParamNoExt(): void
    {
        $this->assertTranslation('Foo {$arg}', 'call-bar-no-args');
    }

    /**
     * @testdox no arguments, no parameterization, with externals
     */
    public function testNoArgNoParamExt(): void
    {
        $this->assertTranslation('Foo {$arg}', 'call-bar-no-args', ['arg' => 5]);
    }

    /**
     * @testdox no arguments, no arguments, no externals
     */
    public function testNoArgNoArgNoExt(): void
    {
        $this->assertTranslation('Foo {$arg}', 'call-baz-no-args');
    }

    /**
     * @testdox no arguments, no arguments, with externals
     */
    public function testNoArgNoArgExt(): void
    {
        $this->assertTranslation('Foo {$arg}', 'call-baz-no-args', ['arg' => 5]);
    }

    /**
     * @testdox no arguments, with arguments, no externals
     */
    public function testNoArgArgNoExt(): void
    {
        $this->assertTranslation('Foo 1', 'call-qux-no-args');
    }

    /**
     * @testdox no arguments, with arguments, with externals
     */
    public function testNoArgArgExt(): void
    {
        $this->assertTranslation('Foo 1', 'call-qux-no-args', ['arg' => 5]);
    }

    /**
     * @testdox with arguments, no parameterization, no externals
     */
    public function testArgNoParamNoExt(): void
    {
        $this->assertTranslation('Foo {$arg}', 'call-bar-with-arg');
    }

    /**
     * @testdox with arguments, no parameterization, with externals
     */
    public function testArgNoParamExt(): void
    {
        $this->assertTranslation('Foo {$arg}', 'call-bar-with-arg', ['arg' => 5]);
    }

    /**
     * @testdox with arguments, no arguments, no externals
     */
    public function testArgNoArgNoExt(): void
    {
        $this->assertTranslation('Foo {$arg}', 'call-baz-with-arg');
    }

    /**
     * @testdox with arguments, no arguments, with externals
     */
    public function testArgNoArgExt(): void
    {
        $this->assertTranslation('Foo {$arg}', 'call-baz-with-arg', ['arg' => 5]);
    }

    /**
     * @testdox with arguments, with arguments, no externals
     */
    public function testArgArgNoExt(): void
    {
        $this->assertTranslation('Foo 1', 'call-qux-with-arg');
    }

    /**
     * @testdox with arguments, with arguments, with externals
     */
    public function testArgArgExt(): void
    {
        $this->assertTranslation('Foo 1', 'call-qux-with-arg', ['arg' => 5]);
    }

    /**
     * @testdox with unexpected arguments, with arguments, no externals
     */
    public function testUnexpectedArgArgNoExt(): void
    {
        $this->assertTranslation('Foo 1', 'call-qux-with-other');
    }

    /**
     * @testdox with unexpected arguments, with arguments, with externals
     */
    public function testUnexpectedArgArgExt(): void
    {
        $this->assertTranslation('Foo 1', 'call-qux-with-other', ['arg' => 5]);
    }
}
