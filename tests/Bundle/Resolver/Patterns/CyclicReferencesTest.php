<?php

namespace Major\Fluent\Tests\Bundle\Resolver\Patterns;

use Major\Fluent\Exceptions\Resolver\CyclicReferenceException;
use Major\Fluent\Tests\TestCase;

final class CyclicReferencesTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->bundle->addFtl(<<<'ftl'
            cyclic = { cyclic-ref }
            cyclic-ref = { cyclic }

            self = { self }

            member =
                { $sel ->
                   *[a] { member }
                    [b] Bar
                }

            -foo =
                { -bar.attr ->
                   *[a] Foo
                }
                .attr = a

            -bar =
                { -foo.attr ->
                   *[a] Bar
                }
                .attr = { -foo }

            foo = { -foo }
            bar = { -bar }
            ftl);
    }

    /**
     * @testdox it returns {???} for cyclic reference
     */
    public function testCyclic(): void
    {
        $this->assertTranslationErrors('{???}', [
            [CyclicReferenceException::class, 'Placeable contains cyclic reference.'],
        ], 'cyclic');
    }

    /**
     * @testdox returns {???} for cyclic self-reference
     */
    public function testSelf(): void
    {
            $this->assertTranslationErrors('{???}', [
                [CyclicReferenceException::class, 'Placeable contains cyclic reference.'],
            ], 'self');
    }

    /**
     * @testdox it returns {???} for cyclic self-reference in a member
     */
    public function testMember(): void
    {
        $this->assertTranslationErrors('{???}', [
            [CyclicReferenceException::class, 'Placeable contains cyclic reference.'],
        ], 'member', ['sel' => 'a']);
    }

    /**
     * @testdox it returns the other member if requested
     */
    public function testOtherMember(): void
    {
        $this->assertTranslation('Bar', 'member', ['sel' => 'b']);
    }

    /**
     * @testdox it returns the default variant for cyclic reference in a selector
     */
    public function testSelector(): void
    {
        $this->assertTranslationErrors('Foo', [
            [CyclicReferenceException::class, 'Placeable contains cyclic reference.'],
        ], 'foo');
    }

    /**
     * @testdox it can reference an attribute
     */
    public function testAttribute(): void
    {
        $this->assertTranslation('Bar', 'bar');
    }
}
