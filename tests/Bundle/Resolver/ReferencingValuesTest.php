<?php

namespace Major\Fluent\Tests\Bundle\Resolver;

use Major\Fluent\Exceptions\Resolver\ReferenceException;
use Major\Fluent\Tests\TestCase;

final class ReferencingValuesTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->bundle->addFtl(<<<'ftl'
            key1 = Value 1
            -key2 = { $sel ->
                [a] A2
               *[b] B2
            }
            key3 = Value { 3 }
            -key4 = { $sel ->
                [a] A{ 4 }
               *[b] B{ 4 }
            }
            key5 =
                .a = A5
                .b = B5

            ref1 = { key1 }
            ref2 = { -key2 }
            ref3 = { key3 }
            ref4 = { -key4 }
            ref5 = { key5 }

            ref6 = { -key2(sel: "a") }
            ref7 = { -key2(sel: "b") }

            ref8 = { -key4(sel: "a") }
            ref9 = { -key4(sel: "b") }

            ref10 = { key5.a }
            ref11 = { key5.b }
            ref12 = { key5.c }

            ref13 = { key6 }
            ref14 = { key6.a }

            ref15 = { -key6 }
            ref16 = { -key6.a ->
               *[a] A
            }
            ftl);
    }

    /**
     * @testdox it can reference the value
     */
    public function testValue(): void
    {
        $this->assertTranslation('Value 1', 'ref1');
    }

    /**
     * @testdox it can reference the default variant
     */
    public function testDefaultVariant(): void
    {
        $this->assertTranslation('B2', 'ref2');
    }

    /**
     * @testdox it can reference the value if it is a pattern
     */
    public function testPatternValue(): void
    {
        $this->assertTranslation('Value 3', 'ref3');
    }

    /**
     * @testdox it can reference the default variant if it is a pattern
     */
    public function testPatternDefaultVariant(): void
    {
        $this->assertTranslation('B4', 'ref4');
    }

    /**
     * @testdox it falls back to id if there is no value
     */
    public function testFallback(): void
    {
        $this->assertTranslationErrors('{key5}', [
            [ReferenceException::class, 'No value: key5.'],
        ], 'ref5');
    }

    /**
     * @testdox it can reference variants
     */
    public function testVariants(): void
    {
        $this->assertTranslation('A2', 'ref6');
        $this->assertTranslation('B2', 'ref7');
    }

    /**
     * @testdox it can reference variants which are patterns
     */
    public function testPatternVariants(): void
    {
        $this->assertTranslation('A4', 'ref8');
        $this->assertTranslation('B4', 'ref9');
    }

    /**
     * @testdox it can reference attributes
     */
    public function testAttributes(): void
    {
        $this->assertTranslation('A5', 'ref10');
        $this->assertTranslation('B5', 'ref11');
        $this->assertTranslationErrors('{key5.c}', [
            [ReferenceException::class, 'Unknown attribute: key5.c.'],
        ], 'ref12');
    }

    /**
     * @testdox missing message reference
     */
    public function testMissingMessage(): void
    {
        $this->assertTranslationErrors('{key6}', [
            [ReferenceException::class, 'Unknown message: key6.'],
        ], 'ref13');
    }

    /**
     * @testdox missing message attribute reference
     */
    public function testMissingAttribute(): void
    {
        $this->assertTranslationErrors('{key6}', [
            [ReferenceException::class, 'Unknown message: key6.'],
        ], 'ref14');
    }

    /**
     * @testdox missing term reference
     */
    public function testMissingTerm(): void
    {
        $this->assertTranslationErrors('{-key6}', [
            [ReferenceException::class, 'Unknown term: -key6.'],
        ], 'ref15');
    }

    /**
     * @testdox missing term attribute reference
     */
    public function testMissingTermReference(): void
    {
        $this->assertTranslationErrors('A', [
            [ReferenceException::class, 'Unknown term: -key6.'],
        ], 'ref16');
    }
}
