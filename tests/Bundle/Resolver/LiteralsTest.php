<?php

namespace Major\Fluent\Tests\Bundle\Resolver;

use Major\Fluent\Tests\TestCase;
use PHPUnit\Framework\Attributes\TestDox;

final class LiteralsTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->bundle->addFtl(<<<'ftl'
            matching-string = { "a" ->
                [a] A
               *[b] B
            }
            non-matching-string = { "c" ->
                [a] A
               *[b] B
            }

            matching-number = { 0 ->
                [0] A
               *[1] B
            }
            non-matching-number = { 2 ->
                [0] A
               *[1] B
            }

            number-matching-plural = { 1 ->
                [one] A
               *[other] B
            }
            ftl);
    }

    #[TestDox('a matching string literal selector')]
    public function testString(): void
    {
        $this->assertTranslation('A', 'matching-string');
    }

    #[TestDox('a non-matching string literal selector')]
    public function testStringFallback(): void
    {
        $this->assertTranslation('B', 'non-matching-string');
    }

    #[TestDox('a matching number literal selector')]
    public function testNumber(): void
    {
        $this->assertTranslation('A', 'matching-number');
    }

    #[TestDox('a non-matching number literal selector')]
    public function testNumberFallback(): void
    {
        $this->assertTranslation('B', 'non-matching-number');
    }

    #[TestDox('a number literal selector matching a plural category')]
    public function testPlural(): void
    {
        $this->assertTranslation('A', 'number-matching-plural');
    }
}
