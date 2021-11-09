<?php

namespace Major\Fluent\Tests\Bundle\Resolver\Terms;

use Major\Fluent\Tests\TestCase;
use PHPUnit\Framework\Attributes\TestDox;

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

    #[TestDox('no parameterization, no externals')]
    public function testNoParamNoExt(): void
    {
        $this->assertTranslation('Foo {$arg}', 'ref-bar');
    }

    #[TestDox('no parameterization, but with externals')]
    public function testNoParamExt(): void
    {
        $this->assertTranslation('Foo {$arg}', 'ref-bar', ['arg' => 5]);
    }

    #[TestDox('no arguments, no externals')]
    public function testNoArgNoExt(): void
    {
        $this->assertTranslation('Foo {$arg}', 'call-bar');
    }

    #[TestDox('no arguments, but with externals')]
    public function testNoArgExt(): void
    {
        $this->assertTranslation('Foo {$arg}', 'call-bar', ['arg' => 5]);
    }

    #[TestDox('with arguments, no externals')]
    public function testArgNoExt(): void
    {
        $this->assertTranslation('Foo 1', 'call-bar-with-arg');
    }

    #[TestDox('with arguments and with externals')]
    public function testArgExt(): void
    {
        $this->assertTranslation('Foo 1', 'call-bar-with-arg', ['arg' => 5]);
    }
}
