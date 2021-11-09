<?php

namespace Major\Fluent\Tests\Bundle\Bundle;

use Major\Fluent\Bundle\FluentBundle;
use Major\Fluent\Exceptions\ParserException;
use Major\Fluent\Exceptions\Resolver\ReferenceException;
use Major\Fluent\Tests\TestCase;
use PHPUnit\Framework\Attributes\TestDox;

final class ErrorsTest extends TestCase
{
    #[TestDox('it ignores syntax errors by default')]
    public function testSyntaxIgnore(): void
    {
        $this->expectNotToPerformAssertions();

        (new FluentBundle('en-US'))->addFtl('syntax error');
    }

    #[TestDox('it throws syntax errors in strict mode')]
    public function testSyntaxThrow(): void
    {
        $this->expectException(ParserException::class);
        $this->expectExceptionMessage('Expected token: "=" somewhere in "syntax error".');

        (new FluentBundle('en-US', strict: true))->addFtl('syntax error');
    }

    #[TestDox('errors are ignored by default and can be obtained by popErrors method')]
    public function testResolverIgnore(): void
    {
        $bundle = (new FluentBundle('en-US', useIsolating: false))
            ->addFtl(<<<'ftl'
                foo = { $one } and { $two }
                ftl);

        $this->assertSame('{$one} and {$two}', $bundle->message('foo'));

        $this->assertCount(2, $errors = $bundle->popErrors());
        $this->assertExceptionMatches(ReferenceException::class, 'Unknown variable: $one.', $errors[0]);
        $this->assertExceptionMatches(ReferenceException::class, 'Unknown variable: $two.', $errors[1]);
        $this->assertCount(0, $bundle->popErrors());

        $this->assertSame('{$one} and {$two}', $bundle->message('foo'));

        $this->assertCount(2, $bundle->popErrors());
    }

    #[TestDox('errors are thrown in strict mode')]
    public function testResolverThrow(): void
    {
        $this->expectException(ReferenceException::class);
        $this->expectExceptionMessage('Unknown variable: $one.');

        (new FluentBundle('en-US', strict: true))
            ->addFtl('foo = { $one } and { $two }')
            ->message('foo');
    }
}
