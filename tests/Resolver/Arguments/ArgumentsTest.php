<?php

namespace Major\Fluent\Tests\Resolver\Arguments;

use Major\Fluent\Exceptions\Resolver\ReferenceException;
use Major\Fluent\Tests\TestCase;
use PHPUnit\Framework\Attributes\TestDox;

final class ArgumentsTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->bundle->addFtl(<<<'FTL'
            missing = { $arg }
            msg = Foo { $num }
            ref = { msg }
            baz =
                .attr = Baz Attribute { $num }
            select-val = { "a" ->
                *[a] Baz Variant A { $num }
            }
            selector = { $num ->
               *[3] Foo
            }
            FTL);
    }

    #[TestDox("it falls back to argument's name if it is missing")]
    public function testFallback(): void
    {
        $this->assertTranslationErrors('{$arg}', [
            [ReferenceException::class, 'Unknown variable: $arg.'],
        ], 'missing');
    }

    #[TestDox('it can be used in the message value')]
    public function testInMessage(): void
    {
        $this->assertTranslation('Foo 3', 'msg', ['num' => 3]);
    }

    #[TestDox('it can be used in the message value which is referenced')]
    public function testInReferencedMessage(): void
    {
        $this->assertTranslation('Foo 3', 'ref', ['num' => 3]);
    }

    #[TestDox('it can be used in an attribute')]
    public function testInAttribute(): void
    {
        $this->assertTranslation('Baz Attribute 3', 'baz.attr', ['num' => 3]);
    }

    #[TestDox('it can be used in a variant')]
    public function testInVariant(): void
    {
        $this->assertTranslation('Baz Variant A 3', 'select-val', ['num' => 3]);
    }

    #[TestDox('it can be used as a selector in a select expression')]
    public function testInSelectExpression(): void
    {
        $this->assertTranslation('Foo', 'selector', ['num' => 3]);
    }
}
