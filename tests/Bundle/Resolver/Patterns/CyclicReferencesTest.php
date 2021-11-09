<?php

namespace Major\Fluent\Tests\Bundle\Resolver\Patterns;

use Major\Fluent\Exceptions\Resolver\CyclicReferenceException;
use Major\Fluent\Tests\TestCase;
use PHPUnit\Framework\Attributes\TestDox;

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

    #[TestDox('it returns {???} for cyclic reference')]
    public function testCyclic(): void
    {
        $this->assertTranslationErrors('{???}', [
            [CyclicReferenceException::class, 'Placeable contains cyclic reference.'],
        ], 'cyclic');
    }

    #[TestDox('returns {???} for cyclic self-reference')]
    public function testSelf(): void
    {
            $this->assertTranslationErrors('{???}', [
                [CyclicReferenceException::class, 'Placeable contains cyclic reference.'],
            ], 'self');
    }

    #[TestDox('it returns {???} for cyclic self-reference in a member')]
    public function testMember(): void
    {
        $this->assertTranslationErrors('{???}', [
            [CyclicReferenceException::class, 'Placeable contains cyclic reference.'],
        ], 'member', ['sel' => 'a']);
    }

    #[TestDox('it returns the other member if requested')]
    public function testOtherMember(): void
    {
        $this->assertTranslation('Bar', 'member', ['sel' => 'b']);
    }

    #[TestDox('it returns the default variant for cyclic reference in a selector')]
    public function testSelector(): void
    {
        $this->assertTranslationErrors('Foo', [
            [CyclicReferenceException::class, 'Placeable contains cyclic reference.'],
        ], 'foo');
    }

    #[TestDox('it can reference an attribute')]
    public function testAttribute(): void
    {
        $this->assertTranslation('Bar', 'bar');
    }
}
