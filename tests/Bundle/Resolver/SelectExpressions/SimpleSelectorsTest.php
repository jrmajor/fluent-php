<?php

namespace Major\Fluent\Tests\Bundle\Resolver\SelectExpressions;

use Major\Fluent\Exceptions\Resolver\ReferenceException;
use Major\Fluent\Tests\TestCase;

final class SimpleSelectorsTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->bundle->addFtl(<<<'ftl'
            string-selector = { $selector ->
                [a] A
               *[b] B
            }
            number-selector = { $selector ->
                [0] A
               *[1] B
            }
            ftl);
    }

    /**
     * @testdox it falls back to default variant when selector is missing
     */
    public function testMissing(): void
    {
        $this->assertTranslationErrors('B', [
            [ReferenceException::class, 'Unknown variable: $selector.'],
        ], 'string-selector');
    }

    /**
     * @testdox it returns variant for matching string selector
     */
    public function testString(): void
    {
        $this->assertTranslation('A', 'string-selector', ['selector' => 'a']);
    }

    /**
     * @testdox it falls back to default variant for non-matching string selector
     */
    public function testStringFallback(): void
    {
        $this->assertTranslation('B', 'string-selector', ['selector' => 'c']);
    }

    /**
     * @testdox it returns variant for matching number selector
     */
    public function testNumber(): void
    {
        $this->assertTranslation('A', 'number-selector', ['selector' => 0]);
    }

    /**
     * @testdox it falls back to default variant for non-matching number selector
     */
    public function testNumberFallback(): void
    {
        $this->assertTranslation('B', 'number-selector', ['selector' => 2]);
    }
}
