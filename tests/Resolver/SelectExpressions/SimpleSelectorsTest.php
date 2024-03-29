<?php

namespace Major\Fluent\Tests\Resolver\SelectExpressions;

use Major\Fluent\Exceptions\Resolver\ReferenceException;
use Major\Fluent\Tests\TestCase;
use PHPUnit\Framework\Attributes\TestDox;

final class SimpleSelectorsTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->bundle->addFtl(<<<'FTL'
            string-selector = { $selector ->
                [a] A
               *[b] B
            }
            number-selector = { $selector ->
                [0] A
               *[1] B
            }
            FTL);
    }

    #[TestDox('it falls back to default variant when selector is missing')]
    public function testMissing(): void
    {
        $this->assertTranslationErrors('B', [
            [ReferenceException::class, 'Unknown variable: $selector.'],
        ], 'string-selector');
    }

    #[TestDox('it returns variant for matching string selector')]
    public function testString(): void
    {
        $this->assertTranslation('A', 'string-selector', ['selector' => 'a']);
    }

    #[TestDox('it falls back to default variant for non-matching string selector')]
    public function testStringFallback(): void
    {
        $this->assertTranslation('B', 'string-selector', ['selector' => 'c']);
    }

    #[TestDox('it returns variant for matching number selector')]
    public function testNumber(): void
    {
        $this->assertTranslation('A', 'number-selector', ['selector' => 0]);
    }

    #[TestDox('it falls back to default variant for non-matching number selector')]
    public function testNumberFallback(): void
    {
        $this->assertTranslation('B', 'number-selector', ['selector' => 2]);
    }
}
