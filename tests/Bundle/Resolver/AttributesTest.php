<?php

namespace Major\Fluent\Tests\Bundle\Resolver;

use Major\Fluent\Bundle\FluentBundle;
use Major\Fluent\Exceptions\Resolver\ReferenceException;
use Major\Fluent\Tests\TestCase;
use PHPUnit\Framework\Attributes\TestDox;

final class AttributesTest extends TestCase
{
    private FluentBundle $fallbacks;

    private FluentBundle $strings;

    private FluentBundle $patterns;

    private FluentBundle $select;

    protected function setUp(): void
    {
        parent::setUp();

        $this->fallbacks = new FluentBundle('en-US', useIsolating: false);
        $this->strings = new FluentBundle('en-US', useIsolating: false);
        $this->patterns = new FluentBundle('en-US', useIsolating: false);
        $this->select = new FluentBundle('en-US', useIsolating: false);

        $this->fallbacks->addFtl(<<<'ftl'
            foo = Foo
            bar = Bar
                .attr = Bar Attribute
            baz = { foo } Baz
            qux = { foo } Qux
                .attr = Qux Attribute

            ref-foo = { foo.missing }
            ref-bar = { bar.missing }
            ref-baz = { baz.missing }
            ref-qux = { qux.missing }
            ftl);

        $this->strings->addFtl(<<<'ftl'
            foo = Foo
                .attr = Foo Attribute
            bar = { foo } Bar
                .attr = Bar Attribute

            ref-foo = { foo.attr }
            ref-bar = { bar.attr }
            ftl);

        $this->patterns->addFtl(<<<'ftl'
            foo = Foo
            bar = Bar
                .attr = { foo } Attribute
            baz = { foo } Baz
                .attr = { foo } Attribute
            qux = Qux
                .attr = { qux } Attribute

            ref-bar = { bar.attr }
            ref-baz = { baz.attr }
            ref-qux = { qux.attr }
            ftl);

        $this->select->addFtl(<<<'ftl'
            foo = Foo
                .attr = { "a" ->
                    [a] A
                   *[b] B
                }

            ref-foo = { foo.attr }
            ftl);
    }

    #[TestDox('it falls back to id.attribute for entities with string values and no attributes')]
    public function testNoAttributes(): void
    {
        $this->assertTranslationErrors('{foo.missing}', [
            [ReferenceException::class, 'Unknown attribute: foo.missing.'],
        ], 'ref-foo', [], $this->fallbacks);
    }

    #[TestDox('it falls back to id.attribute for entities with string values and other attributes')]
    public function testOtherAttributes(): void
    {
        $this->assertTranslationErrors('{bar.missing}', [
            [ReferenceException::class, 'Unknown attribute: bar.missing.'],
        ], 'ref-bar', [], $this->fallbacks);
    }

    #[TestDox('it falls back to id.attribute for entities with pattern values and no attributes')]
    public function testPatternNoAttributes(): void
    {
        $this->assertTranslationErrors('{baz.missing}', [
            [ReferenceException::class, 'Unknown attribute: baz.missing.'],
        ], 'ref-baz', [], $this->fallbacks);
    }

    #[TestDox('it falls back to id.attribute for entities with pattern values and other attributes')]
    public function testPatternOtherAttributes(): void
    {
        $this->assertTranslationErrors('{qux.missing}', [
            [ReferenceException::class, 'Unknown attribute: qux.missing.'],
        ], 'ref-qux', [], $this->fallbacks);
    }

    #[TestDox('attributes with string values can be referenced for entities with string values')]
    public function testStringStrningRef(): void
    {
        $this->assertTranslation('Foo Attribute', 'ref-foo', [], $this->strings);
    }

    #[TestDox('attributes with string values can be formatted directly for entities with string values')]
    public function testStringStrning(): void
    {
        $this->assertTranslation('Foo Attribute', 'foo.attr', [], $this->strings);
    }

    #[TestDox('attributes with string values can be referenced for entities with pattern values')]
    public function testStringPatternRef(): void
    {
        $this->assertTranslation('Bar Attribute', 'ref-bar', [], $this->strings);
    }

    #[TestDox('attributes with string values can be formatted directly for entities with pattern values')]
    public function testStringPattern(): void
    {
        $this->assertTranslation('Bar Attribute', 'bar.attr', [], $this->strings);
    }

    #[TestDox('attributes with simple pattern values can be referenced for entities with string values')]
    public function testPatternStringRef(): void
    {
        $this->assertTranslation('Foo Attribute', 'ref-bar', [], $this->patterns);
    }

    #[TestDox('attributes with simple pattern values can be formatted directly for entities with string values')]
    public function testPatternString(): void
    {
        $this->assertTranslation('Foo Attribute', 'bar.attr', [], $this->patterns);
    }

    #[TestDox('attributes with simple pattern values can be referenced for entities with simple pattern values')]
    public function testPatternPatternRef(): void
    {
        $this->assertTranslation('Foo Attribute', 'ref-baz', [], $this->patterns);
    }

    #[TestDox('attributes with simple pattern values can be formatted directly for entities with simple pattern values')]
    public function testPatternPattern(): void
    {
        $this->assertTranslation('Foo Attribute', 'baz.attr', [], $this->patterns);
    }

    #[TestDox('it works with self-references')]
    public function testSelfRef(): void
    {
        $this->assertTranslation('Qux Attribute', 'ref-qux', [], $this->patterns);
    }

    #[TestDox('it can be formatted directly when it uses a self-reference')]
    public function testSelf(): void
    {
        $this->assertTranslation('Qux Attribute', 'qux.attr', [], $this->patterns);
    }

    #[TestDox('attributes containing select expressions can be referenced')]
    public function testSelectRef(): void
    {
        $this->assertTranslation('A', 'ref-foo', [], $this->select);
    }

    #[TestDox('attributes containing select expressions can be formatted directly')]
    public function testSelect(): void
    {
        $this->assertTranslation('A', 'foo.attr', [], $this->select);
    }
}
