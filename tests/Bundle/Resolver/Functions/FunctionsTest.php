<?php

namespace Major\Fluent\Tests\Bundle\Resolver\Functions;

use Major\Fluent\Exceptions\Resolver\ReferenceException;
use Major\Fluent\Tests\TestCase;
use PHPUnit\Framework\Attributes\TestDox;

final class FunctionsTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->bundle->addFunction('IDENTITY', fn (...$args) => $args[0]);

        $this->bundle->addFtl(<<<'ftl'
            missing = { MISSING("Foo") }
            foo = Foo
                .attr = Attribute
            pass-nothing       = { IDENTITY() }
            pass-string        = { IDENTITY("a", 23, adf: "ads", bgf: 234) }
            pass-number        = { IDENTITY(1) }
            pass-message       = { IDENTITY(foo) }
            pass-attr          = { IDENTITY(foo.attr) }
            pass-variable      = { IDENTITY($var) }
            pass-function-call = { IDENTITY(IDENTITY(1)) }
            ftl);
    }

    #[TestDox('it falls back to the name of the function')]
    public function testFallback(): void
    {
        $this->assertTranslationErrors('{MISSING()}', [
            [ReferenceException::class, 'Unknown function: MISSING().'],
        ], 'missing');
    }

    #[TestDox('it accepts strings')]
    public function testStrings(): void
    {
        $this->assertTranslation('a', 'pass-string');
    }

    #[TestDox('it accepts numbers')]
    public function testNumbers(): void
    {
        $this->assertTranslation('1', 'pass-number');
    }

    #[TestDox('it accepts message references')]
    public function testMessageReferences(): void
    {
        $this->assertTranslation('Foo', 'pass-message');
    }

    #[TestDox('it accepts attribute references')]
    public function testAttributeReferences(): void
    {
        $this->assertTranslation('Attribute', 'pass-attr');
    }

    #[TestDox('it accepts variables')]
    public function testVariables(): void
    {
        $this->assertTranslation('Variable', 'pass-variable', ['var' => 'Variable']);
    }

    #[TestDox('it accepts function calls')]
    public function testFunctionCalls(): void
    {
        $this->assertTranslation('1', 'pass-function-call');
    }
}
