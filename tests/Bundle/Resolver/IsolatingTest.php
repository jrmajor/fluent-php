<?php

/**
 * Unicode BiDi isolation characters:
 * FSI U+2068
 * PDI U+2069
 */

namespace Major\Fluent\Tests\Bundle\Resolver;

use Major\Fluent\Bundle\FluentBundle;
use Major\Fluent\Tests\TestCase;

final class IsolatingTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->bundle = (new FluentBundle('en-US'))->addFtl(<<<'ftl'
            foo = Foo
            bar = { foo } Bar
            baz = { $arg } Baz
            qux = { bar } { baz }

            -brand-short-name = Amaya
            skip-isolation = { -brand-short-name }
            ftl);
    }

    /**
     * @testdox it isolates interpolated message references
     */
    public function testMessageRef(): void
    {
        $this->assertTranslation("\u{2068}Foo\u{2069} Bar", 'bar');
    }

    /**
     * @testdox it isolates interpolated string-typed variables
     */
    public function testStringVar(): void
    {
        $this->assertTranslation("\u{2068}Arg\u{2069} Baz", 'baz', ['arg' => 'Arg']);
    }

    /**
     * @testdox it isolates interpolated number-typed variables
     */
    public function testNumberVar(): void
    {
        $this->assertTranslation("\u{2068}1\u{2069} Baz", 'baz', ['arg' => 1]);
    }

    /**
     * @testdox it isolates complex interpolations
     */
    public function testComplex(): void
    {
        $expected = "\u{2068}\u{2068}Foo\u{2069} Bar\u{2069} \u{2068}\u{2068}Arg\u{2069} Baz\u{2069}";

        $this->assertTranslation($expected, 'qux', ['arg' => 'Arg']);
    }

    /**
     * @testdox it skips isolation if the only element is a placeable
     */
    public function testOneElement(): void
    {
        $this->assertTranslation('Amaya', 'skip-isolation');
    }
}
