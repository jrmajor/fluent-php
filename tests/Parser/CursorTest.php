<?php

namespace Major\Fluent\Tests\Parser;

use Major\Fluent\Exceptions\ParserException;
use Major\Fluent\Parser\Cursor;
use Major\Fluent\Tests\TestCase;
use PHPUnit\Framework\Attributes\TestDox;
use Throwable;

final class CursorTest extends TestCase
{
    #[TestDox('next, currentChar and index methods')]
    public function testNextCurrentCharAndIndex(): void
    {
        $cursor = $this->cursor('abc🐠d');

        $this->assertSame('a', $cursor->currentChar());
        $this->assertSame(0, $cursor->index());

        $cursor->next(2);
        $this->assertSame('c', $cursor->currentChar());
        $this->assertSame(2, $cursor->index());

        $cursor->next();
        $this->assertSame('🐠', $cursor->currentChar());
        $this->assertSame(3, $cursor->index());

        $cursor->next();
        $this->assertSame('d', $cursor->currentChar());
        $this->assertSame(4, $cursor->index());

        $cursor->next();
        $this->assertNull($cursor->currentChar());
        $this->assertSame(5, $cursor->index());
    }

    #[TestDox('peek, currentPeek and peekOffset methods work')]
    public function testPeekCurrentPeekAndOffset(): void
    {
        $cursor = $this->cursor('abc🐬d');

        $this->assertSame('a', $cursor->currentPeek());
        $this->assertSame(0, $cursor->peekOffset());

        $this->assertSame('c', $cursor->peek(2));
        $this->assertSame('c', $cursor->currentPeek());
        $this->assertSame(2, $cursor->peekOffset());

        $this->assertSame('🐬', $cursor->peek());
        $this->assertSame('🐬', $cursor->currentPeek());
        $this->assertSame(3, $cursor->peekOffset());

        $this->assertSame('d', $cursor->peek());
        $this->assertSame('d', $cursor->currentPeek());
        $this->assertSame(4, $cursor->peekOffset());

        $this->assertNull($cursor->peek());
        $this->assertNull($cursor->currentPeek());
        $this->assertSame(5, $cursor->peekOffset());
    }

    #[TestDox('peek and next methods')]
    public function testPeekAndNext(): void
    {
        $cursor = $this->cursor('ab🦀d');

        $this->assertSame('b', $cursor->peek());
        $this->assertSame(1, $cursor->peekOffset());
        $this->assertSame(0, $cursor->index());

        $cursor->next();
        $this->assertSame('b', $cursor->currentChar());
        $this->assertSame(0, $cursor->peekOffset());
        $this->assertSame(1, $cursor->index());

        $this->assertSame('🦀', $cursor->peek());
        $this->assertSame(1, $cursor->peekOffset());
        $this->assertSame(1, $cursor->index());

        $cursor->next();
        $this->assertSame('🦀', $cursor->currentChar());
        $this->assertSame(0, $cursor->peekOffset());
        $this->assertSame(2, $cursor->index());
        $this->assertSame('🦀', $cursor->currentChar());
        $this->assertSame('🦀', $cursor->currentPeek());

        $this->assertSame('d', $cursor->peek());
        $this->assertSame(1, $cursor->peekOffset());
        $this->assertSame(2, $cursor->index());

        $cursor->next();
        $this->assertSame('d', $cursor->currentChar());
        $this->assertSame(0, $cursor->peekOffset());
        $this->assertSame(3, $cursor->index());
        $this->assertSame('d', $cursor->currentChar());
        $this->assertSame('d', $cursor->currentPeek());

        $this->assertNull($cursor->peek());
        $this->assertSame(1, $cursor->peekOffset());
        $this->assertSame(3, $cursor->index());
        $this->assertSame('d', $cursor->currentChar());
        $this->assertNull($cursor->currentPeek());

        $this->assertNull($cursor->peek());
        $this->assertSame(2, $cursor->peekOffset());
        $this->assertSame(3, $cursor->index());

        $cursor->next();
        $this->assertNull($cursor->currentChar());
        $this->assertSame(0, $cursor->peekOffset());
        $this->assertSame(4, $cursor->index());
    }

    #[TestDox('skipToPeek method works')]
    public function testSkipToPeek(): void
    {
        $cursor = $this->cursor('ab🦑d');

        $cursor->peek(2);

        $cursor->skipToPeek();

        $this->assertSame('🦑', $cursor->currentChar());
        $this->assertSame('🦑', $cursor->currentPeek());
        $this->assertSame(0, $cursor->peekOffset());
        $this->assertSame(2, $cursor->index());

        $cursor->peek();

        $this->assertSame('🦑', $cursor->currentChar());
        $this->assertSame('d', $cursor->currentPeek());
        $this->assertSame(1, $cursor->peekOffset());
        $this->assertSame(2, $cursor->index());

        $cursor->next();

        $this->assertSame('d', $cursor->currentChar());
        $this->assertSame('d', $cursor->currentPeek());
        $this->assertSame(0, $cursor->peekOffset());
        $this->assertSame(3, $cursor->index());
    }

    #[TestDox('resetPeek method')]
    public function testResetPeek(): void
    {
        $cursor = $this->cursor('abcd');

        $cursor->next();
        $cursor->peek(2);
        $cursor->resetPeek();

        $this->assertSame('b', $cursor->currentChar());
        $this->assertSame('b', $cursor->currentPeek());
        $this->assertSame(0, $cursor->peekOffset());
        $this->assertSame(1, $cursor->index());

        $cursor->peek();

        $this->assertSame('b', $cursor->currentChar());
        $this->assertSame('c', $cursor->currentPeek());
        $this->assertSame(1, $cursor->peekOffset());
        $this->assertSame(1, $cursor->index());

        $cursor->peek(3);
        $cursor->resetPeek();

        $this->assertSame('b', $cursor->currentChar());
        $this->assertSame('b', $cursor->currentPeek());
        $this->assertSame(0, $cursor->peekOffset());
        $this->assertSame(1, $cursor->index());

        $this->assertSame('c', $cursor->peek());
        $this->assertSame('b', $cursor->currentChar());
        $this->assertSame('c', $cursor->currentPeek());
        $this->assertSame(1, $cursor->peekOffset());
        $this->assertSame(1, $cursor->index());

        $this->assertSame('d', $cursor->peek());
        $this->assertNull($cursor->peek());
    }

    #[TestDox('it treats crlf as a single character')]
    public function testClRf(): void
    {
        $cursor = $this->cursor("a\r\nb\r\n");

        $this->assertSame('a', $cursor->currentChar());

        $cursor->next();
        $this->assertSame("\n", $cursor->currentChar());

        $cursor->peek(2);

        $this->assertSame("\n", $cursor->currentPeek());

        $cursor->skipToPeek();

        $this->assertSame("\n", $cursor->currentChar());
    }

    #[TestDox('slice method works')]
    public function testSlice(): void
    {
        $cursor = $this->cursor('🐙ab🐙cd');

        $this->assertSame('b🐙c', $cursor->slice(2, 3));

        $cursor->next(5);

        $this->assertSame('b🐙c', $cursor->slice(2, 3));
    }

    #[TestDox('it can peek blank inline')]
    public function testPeekBlankInline(): void
    {
        $cursor = $this->cursor("a   b     \r\n    \n");

        $cursor->next();

        $cursor->peekBlankInline();
        $this->assertSame(1, $cursor->index());
        $this->assertSame(3, $cursor->peekOffset());

        $cursor->skipToPeek();
        $cursor->next();

        $cursor->peekBlankInline();
        $this->assertSame(5, $cursor->index());
        $this->assertSame(5, $cursor->peekOffset());

        $cursor->skipToPeek();
        $cursor->next();

        $cursor->peekBlankInline();
        $this->assertSame(12, $cursor->index());
        $this->assertSame(4, $cursor->peekOffset());
    }

    #[TestDox('it can skip blank inline')]
    public function testSkipBlankInline(): void
    {
        $cursor = $this->cursor("a   b     \r\n    \n");

        $cursor->next();

        $this->assertSame('   ', $cursor->skipBlankInline());
        $this->assertSame(4, $cursor->index());
        $this->assertSame(0, $cursor->peekOffset());

        $cursor->skipToPeek();
        $cursor->next();

        $this->assertSame('     ', $cursor->skipBlankInline());
        $this->assertSame(10, $cursor->index());
        $this->assertSame(0, $cursor->peekOffset());

        $cursor->skipToPeek();
        $cursor->next();

        $this->assertSame('    ', $cursor->skipBlankInline());
        $this->assertSame(16, $cursor->index());
        $this->assertSame(0, $cursor->peekOffset());
    }

    #[TestDox('it can peek blank block')]
    public function testPeekBlankBlock(): void
    {
        $cursor = $this->cursor("a b     \r\n    \n  c  \n");

        $cursor->next();

        $this->assertSame('', $cursor->peekBlankBlock());
        $this->assertSame(1, $cursor->index());
        $this->assertSame(0, $cursor->peekOffset());

        $cursor->next(2);

        $this->assertSame("\n\n", $cursor->peekBlankBlock());
        $this->assertSame(3, $cursor->index());
        $this->assertSame(12, $cursor->peekOffset());

        $cursor->skipToPeek();
        $cursor->next(3);

        $this->assertSame("\n", $cursor->peekBlankBlock());
        $this->assertSame(18, $cursor->index());
        $this->assertSame(3, $cursor->peekOffset());
    }

    #[TestDox('it can skip blank block')]
    public function testSkipBlankBlock(): void
    {
        $cursor = $this->cursor("a b     \r\n    \n  c  \n");

        $cursor->next();

        $this->assertSame('', $cursor->skipBlankBlock());
        $this->assertSame(1, $cursor->index());
        $this->assertSame(0, $cursor->peekOffset());

        $cursor->next(2);

        $this->assertSame("\n\n", $cursor->skipBlankBlock());
        $this->assertSame(15, $cursor->index());
        $this->assertSame(0, $cursor->peekOffset());

        $cursor->skipToPeek();
        $cursor->next(3);

        $this->assertSame("\n", $cursor->skipBlankBlock());
        $this->assertSame(21, $cursor->index());
        $this->assertSame(0, $cursor->peekOffset());
    }

    #[TestDox('it can peek blank')]
    public function testPeekBlank(): void
    {
        $cursor = $this->cursor("a b     \r\n    \n  c  \n");

        $cursor->next();

        $cursor->peekBlank();
        $this->assertSame(1, $cursor->index());
        $this->assertSame(1, $cursor->peekOffset());

        $cursor->skipToPeek();
        $cursor->next();

        $cursor->peekBlank();
        $this->assertSame(3, $cursor->index());
        $this->assertSame(14, $cursor->peekOffset());

        $cursor->skipToPeek();
        $cursor->next();

        $cursor->peekBlank();
        $this->assertSame(18, $cursor->index());
        $this->assertSame(3, $cursor->peekOffset());
    }

    #[TestDox('it can skip blank')]
    public function testSkipBlank(): void
    {
        $cursor = $this->cursor("a b     \r\n    \n  c  \n");

        $cursor->next();

        $cursor->skipBlank();
        $this->assertSame(2, $cursor->index());
        $this->assertSame(0, $cursor->peekOffset());

        $cursor->skipToPeek();
        $cursor->next();

        $cursor->skipBlank();
        $this->assertSame(17, $cursor->index());
        $this->assertSame(0, $cursor->peekOffset());

        $cursor->skipToPeek();
        $cursor->next();

        $cursor->skipBlank();
        $this->assertSame(21, $cursor->index());
        $this->assertSame(0, $cursor->peekOffset());
    }

    #[TestDox('it advances when encounters expected character')]
    public function testExpectChar(): void
    {
        $cursor = $this->cursor("a🦓\r\nb");

        $cursor->expectChar('a');
        $this->assertSame(1, $cursor->index());

        $cursor->expectChar('🦓');
        $this->assertSame(2, $cursor->index());

        $cursor->expectChar("\n");
        $this->assertSame(4, $cursor->index());

        $cursor->expectChar('b');
        $this->assertSame(5, $cursor->index());
    }

    #[TestDox('it throws an error when does not encounter expected character')]
    public function testExpectedCharThrow(): void
    {
        $this->expectException(ParserException::class);
        $this->expectExceptionMessage('Expected token: "="');

        $cursor = $this->cursor('a&b');

        $cursor->next();

        try {
            $cursor->expectChar('=');
        } catch (Throwable $throwable) {
            $this->assertSame(1, $cursor->index());

            throw $throwable;
        }
    }

    #[TestDox('it advances when encounters expected line end')]
    public function testExpectLineEnd(): void
    {
        $cursor = $this->cursor("\na\r\nb");

        $cursor->expectLineEnd();
        $this->assertSame(1, $cursor->index());

        $cursor->next();

        $cursor->expectLineEnd();
        $this->assertSame(4, $cursor->index());

        $cursor->next();

        $cursor->expectLineEnd();
        $this->assertSame(5, $cursor->index());
    }

    #[TestDox('it throws an error when does not encounter expected line end')]
    public function testExpectedLineEndThrow(): void
    {
        $this->expectException(ParserException::class);
        $this->expectExceptionMessage('Expected token: "␤"');

        $cursor = $this->cursor('a ');

        try {
            $cursor->expectLineEnd();
        } catch (Throwable $throwable) {
            $this->assertSame(0, $cursor->index());

            throw $throwable;
        }
    }

    #[TestDox('it can take character described by closure')]
    public function testTake(): void
    {
        $cursor = $this->cursor('ac');

        $callback = fn (string $char): bool => $char === 'a' || $char === 'b';

        $this->assertSame('a', $cursor->takeChar($callback));
        $this->assertSame(1, $cursor->index());

        $this->assertNull($cursor->takeChar($callback));
        $this->assertSame(1, $cursor->index());

        $cursor->next();

        $this->assertNull($cursor->takeChar($callback));
        $this->assertSame(2, $cursor->index());
    }

    private function cursor(string $string): Cursor
    {
        /** @psalm-suppress InternalClass */
        return new class ($string) extends Cursor {};
    }
}
