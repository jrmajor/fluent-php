<?php

namespace Major\Fluent\Tests\Parser;

use Major\Fluent\Exceptions\ParserException;
use Major\Fluent\Parser\FluentParser;
use Major\Fluent\Tests\TestCase;
use PHPUnit\Framework\Attributes\TestDox;

final class ErrorsTest extends TestCase
{
    #[TestDox('it ignores syntax errors by default')]
    public function testNormalMode(): void
    {
        $this->expectNotToPerformAssertions();

        (new FluentParser())->parse('syntax error');
    }

    #[TestDox('it throws syntax errors in strict mode')]
    public function testStrictMode(): void
    {
        $this->expectException(ParserException::class);
        $this->expectExceptionMessage('Expected token: "=" somewhere in "syntax error"');

        (new FluentParser(true))->parse('syntax error');
    }
}
