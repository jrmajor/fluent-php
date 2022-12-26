<?php

namespace Major\Fluent\Tests\Resolver\Patterns;

use Major\Fluent\Exceptions\Resolver\NullPatternException;
use Major\Fluent\Exceptions\Resolver\ReferenceException;
use Major\Fluent\Tests\TestCase;
use PHPUnit\Framework\Attributes\TestDox;

final class PatternsTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->bundle->addFtl(<<<'ftl'
            simple = Simple

            foo = Foo
            -bar = Bar

            ref-message = { foo }
            ref-term = { -bar }

            ref-missing-message = { missing }
            ref-missing-term = { -missing }

            ref-malformed = { malformed

            msg-no-val =
                .attr = Foo Attr
            no-val-ref = { msg-no-val } Bar
            ftl);
    }

    #[TestDox('it returns the simple string value')]
    public function testSimple(): void
    {
        $this->assertTranslation('Simple', 'simple');
    }

    #[TestDox('it resolves the reference to a message')]
    public function testRefMessage(): void
    {
        $this->assertTranslation('Foo', 'ref-message');
    }

    #[TestDox('it resolves the reference to a term')]
    public function testRefTerm(): void
    {
        $this->assertTranslation('Bar', 'ref-term');
    }

    #[TestDox('it returns the id if the referenced message is missing')]
    public function testRefMessageMissing(): void
    {
        $this->assertTranslationErrors('{missing}', [
            [ReferenceException::class, 'Unknown message: missing.'],
        ], 'ref-missing-message');
    }

    #[TestDox('it returns the id if the referenced term is missing')]
    public function testRefTermMissing(): void
    {
        $this->assertTranslationErrors('{-missing}', [
            [ReferenceException::class, 'Unknown term: -missing.'],
        ], 'ref-missing-term');
    }

    #[TestDox('it returns {???} when trying to format a message with null value')]
    public function testNullValue(): void
    {
        $this->assertTranslationErrors('{???}', [
            [NullPatternException::class, 'Null pattern can not be formatted.'],
        ], 'msg-no-val');
    }

    #[TestDox('it formats the attribute of a message with null value')]
    public function testNullValueAttribute(): void
    {
        $this->assertTranslation('Foo Attr', 'msg-no-val.attr');
    }

    #[TestDox('it falls back to id when the referenced message has no value')]
    public function testNoValueFallback(): void
    {
        $this->assertTranslationErrors('{msg-no-val} Bar', [
            [ReferenceException::class, 'No value: msg-no-val.'],
        ], 'no-val-ref');
    }
}
