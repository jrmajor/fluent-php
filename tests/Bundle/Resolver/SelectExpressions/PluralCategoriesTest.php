<?php

namespace Major\Fluent\Tests\Bundle\Resolver\SelectExpressions;

use Major\Fluent\Bundle\FluentBundle;
use Major\Fluent\Tests\TestCase;
use PHPUnit\Framework\Attributes\TestDox;

final class PluralCategoriesTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->bundle->addFtl(<<<'ftl'
            matching = { $selector ->
                [one] A
               *[other] B
            }

            non-matching = { $selector ->
                [one] A
               *[default] D
            }
            ftl);
    }

    #[TestDox('it returns variant for matching number selector')]
    public function testNumber(): void
    {
        $this->assertTranslation('A', 'matching', ['selector' => 1]);
    }

    #[TestDox('it returns variant for matching string selector')]
    public function testString(): void
    {
        $this->assertTranslation('A', 'matching', ['selector' => 'one']);
    }

    #[TestDox('it falls back to default variant for non-matching number selector')]
    public function testNumberFallback(): void
    {
        $this->assertTranslation('D', 'non-matching', ['selector' => 2]);
    }

    #[TestDox('it falls back to default variant for non-matching string selector')]
    public function testStringFallback(): void
    {
        $this->assertTranslation('D', 'non-matching', ['selector' => 'other']);
    }

    #[TestDox('plural categories in english')]
    public function testPluralEnglish(): void
    {
        $bundle = (new FluentBundle('en-EN', useIsolating: false))->addFtl(<<<'ftl'
            msg = { $arg ->
                [one] example
               *[other] examples
            }
            ftl);

        $this->assertTranslation('example', 'msg', ['arg' => 1], $bundle);
        $this->assertTranslation('examples', 'msg', ['arg' => 2], $bundle);
        $this->assertTranslation('examples', 'msg', ['arg' => 5], $bundle);
        $this->assertTranslation('examples', 'msg', ['arg' => 1.1], $bundle);
        $this->assertTranslation('examples', 'msg', ['arg' => 2.5], $bundle);
    }

    #[TestDox('plural categories in polish')]
    public function testPluralPolish(): void
    {
        $bundle = (new FluentBundle('pl-PL', useIsolating: false))->addFtl(<<<'ftl'
            msg = { $arg ->
                [one] przykład
                [few] przykłady
                [many] przykładów
               *[other] przykładu
            }
            ftl);

        $this->assertTranslation('przykład', 'msg', ['arg' => 1], $bundle);
        $this->assertTranslation('przykłady', 'msg', ['arg' => 2], $bundle);
        $this->assertTranslation('przykłady', 'msg', ['arg' => 3], $bundle);
        $this->assertTranslation('przykłady', 'msg', ['arg' => 4], $bundle);
        $this->assertTranslation('przykładów', 'msg', ['arg' => 5], $bundle);
        $this->assertTranslation('przykładów', 'msg', ['arg' => 6], $bundle);
        $this->assertTranslation('przykładów', 'msg', ['arg' => 11], $bundle);
        $this->assertTranslation('przykładów', 'msg', ['arg' => 12], $bundle);
        $this->assertTranslation('przykładów', 'msg', ['arg' => 14], $bundle);
        $this->assertTranslation('przykładów', 'msg', ['arg' => 21], $bundle);
        $this->assertTranslation('przykłady', 'msg', ['arg' => 22], $bundle);
        $this->assertTranslation('przykłady', 'msg', ['arg' => 23], $bundle);
        $this->assertTranslation('przykładów', 'msg', ['arg' => 25], $bundle);
        $this->assertTranslation('przykładu', 'msg', ['arg' => 1.1], $bundle);
        $this->assertTranslation('przykładu', 'msg', ['arg' => 2.5], $bundle);
    }
}
