<?php

namespace Major\Fluent\Tests\Resolver\Terms;

use Major\Fluent\Tests\TestCase;
use PHPUnit\Framework\Attributes\TestDox;

final class PassingArgumentsTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->bundle->addFtl(<<<'ftl'
            -foo = Foo { $arg }

            ref-foo = { -foo }
            call-foo-no-args = { -foo() }
            call-foo-with-expected-arg = { -foo(arg: 1) }
            call-foo-with-other-arg = { -foo(other: 3) }
            ftl);
    }

    #[TestDox('not parameterized, no externals')]
    public function testNoParamNoExt(): void
    {
        $this->assertTranslation('Foo {$arg}', 'ref-foo');
    }

    #[TestDox('not parameterized but with externals')]
    public function testNoParamExt(): void
    {
        $this->assertTranslation('Foo {$arg}', 'ref-foo', ['arg' => 1]);
    }

    #[TestDox('no arguments, no externals')]
    public function testNoArgNoExt(): void
    {
        $this->assertTranslation('Foo {$arg}', 'call-foo-no-args');
    }

    #[TestDox('no arguments, but with externals')]
    public function testNoArgExt(): void
    {
        $this->assertTranslation('Foo {$arg}', 'call-foo-no-args', ['arg' => 1]);
    }

    #[TestDox('with expected arguments, no externals')]
    public function testExpectedArgNoExt(): void
    {
        $this->assertTranslation('Foo 1', 'call-foo-with-expected-arg');
    }

    #[TestDox('with expected arguments, and with externals')]
    public function testExpectedArgExt(): void
    {
        $this->assertTranslation('Foo 1', 'call-foo-with-expected-arg', ['arg' => 5]);
    }

    #[TestDox('with other arguments, no externals')]
    public function testOtherArgNoExt(): void
    {
        $this->assertTranslation('Foo {$arg}', 'call-foo-with-other-arg');
    }

    #[TestDox('with other arguments, and with externals')]
    public function testOtherArgExt(): void
    {
        $this->assertTranslation('Foo {$arg}', 'call-foo-with-other-arg', ['arg' => 5]);
    }
}
