<?php

namespace Major\Fluent\Tests\Bundle\Resolver;

use Major\Fluent\Exceptions\Resolver\NullPatternException;
use Major\Fluent\Exceptions\Resolver\ReferenceException;
use Major\Fluent\Tests\TestCase;

final class FormattingValuesTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->bundle->addFtl(<<<'ftl'
            key1 = Value 1
            key2 = { $sel ->
                [a] A2
               *[b] B2
            }
            key3 = Value { 3 }
            key4 = { $sel ->
                [a] A{ 4 }
               *[b] B{ 4 }
            }
            key5 =
                .a = A5
                .b = B5
            ftl);
    }

    /**
     * @testdox it returns the value
     */
    public function testValue(): void
    {
        $this->assertTranslation('Value 1', 'key1');
    }

    /**
     * @testdox it returns the default variant
     */
    public function testDefaultVariant(): void
    {
        $this->assertTranslationErrors('B2', [
            [ReferenceException::class, 'Unknown variable: $sel.'],
        ], 'key2');
    }

    /**
     * @testdox it returns the value if it is a pattern
     */
    public function testPattern(): void
    {
        $this->assertTranslation('Value 3', 'key3');
    }

    /**
     * @testdox it returns the default variant if it is a pattern
     */
    public function testPatternVariant(): void
    {
        $this->assertTranslationErrors('B4', [
            [ReferenceException::class, 'Unknown variable: $sel.'],
        ], 'key4');
    }

    /**
     * @testdox it returns {???} when trying to format a message with null value
     */
    public function testNullValue(): void
    {
        $this->assertTranslationErrors('{???}', [
            [NullPatternException::class, 'Null pattern can not be formatted.'],
        ], 'key5');
    }

    /**
     * @testdox it supports dot notation for referencing message attributes
     */
    public function testAttributes(): void
    {
        $this->assertTranslation('A5', 'key5.a');
        $this->assertTranslation('B5', 'key5.b');
    }
}
