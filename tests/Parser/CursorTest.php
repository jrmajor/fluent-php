<?php

use Major\Fluent\Exceptions\ParserException;
use Major\Fluent\Parser\Cursor;

test('next, currentChar and index methods work', function () {
    $cursor = new Cursor('abc🐠d');

    expect($cursor->currentChar())->toBe('a');
    expect($cursor->index())->toBe(0);

    expect($cursor->next(2))->toBe('c');
    expect($cursor->currentChar())->toBe('c');
    expect($cursor->index())->toBe(2);

    expect($cursor->next())->toBe('🐠');
    expect($cursor->currentChar())->toBe('🐠');
    expect($cursor->index())->toBe(3);

    expect($cursor->next())->toBe('d');
    expect($cursor->currentChar())->toBe('d');
    expect($cursor->index())->toBe(4);

    expect($cursor->next())->toBeNull();
    expect($cursor->currentChar())->toBeNull();
    expect($cursor->index())->toBe(5);
});

test('peek, currentPeek and peekOffset methods work', function () {
    $cursor = new Cursor('abc🐬d');

    expect($cursor->currentPeek())->toBe('a');
    expect($cursor->peekOffset())->toBe(0);

    expect($cursor->peek(2))->toBe('c');
    expect($cursor->currentPeek())->toBe('c');
    expect($cursor->peekOffset())->toBe(2);

    expect($cursor->peek())->toBe('🐬');
    expect($cursor->currentPeek())->toBe('🐬');
    expect($cursor->peekOffset())->toBe(3);

    expect($cursor->peek())->toBe('d');
    expect($cursor->currentPeek())->toBe('d');
    expect($cursor->peekOffset())->toBe(4);

    expect($cursor->peek())->toBeNull();
    expect($cursor->currentPeek())->toBeNull();
    expect($cursor->peekOffset())->toBe(5);
  });

test('peek and next methods work', function () {
    $cursor = new Cursor('ab🦀d');

    expect($cursor->peek())->toBe('b');
    expect($cursor->peekOffset())->toBe(1);
    expect($cursor->index())->toBe(0);

    expect($cursor->next())->toBe('b');
    expect($cursor->peekOffset())->toBe(0);
    expect($cursor->index())->toBe(1);

    expect($cursor->peek())->toBe('🦀');
    expect($cursor->peekOffset())->toBe(1);
    expect($cursor->index())->toBe(1);

    expect($cursor->next())->toBe('🦀');
    expect($cursor->peekOffset())->toBe(0);
    expect($cursor->index())->toBe(2);
    expect($cursor->currentChar())->toBe('🦀');
    expect($cursor->currentPeek())->toBe('🦀');

    expect($cursor->peek())->toBe('d');
    expect($cursor->peekOffset())->toBe(1);
    expect($cursor->index())->toBe(2);

    expect($cursor->next())->toBe('d');
    expect($cursor->peekOffset())->toBe(0);
    expect($cursor->index())->toBe(3);
    expect($cursor->currentChar())->toBe('d');
    expect($cursor->currentPeek())->toBe('d');

    expect($cursor->peek())->toBeNull();
    expect($cursor->peekOffset())->toBe(1);
    expect($cursor->index())->toBe(3);
    expect($cursor->currentChar())->toBe('d');
    expect($cursor->currentPeek())->toBeNull();

    expect($cursor->peek())->toBeNull();
    expect($cursor->peekOffset())->toBe(2);
    expect($cursor->index())->toBe(3);

    expect($cursor->next())->toBeNull();
    expect($cursor->peekOffset())->toBe(0);
    expect($cursor->index())->toBe(4);
  });

test('skipToPeek method works', function () {
    $cursor = new Cursor('ab🦑d');

    $cursor->peek(2);

    $cursor->skipToPeek();

    expect($cursor->currentChar())->toBe('🦑');
    expect($cursor->currentPeek())->toBe('🦑');
    expect($cursor->peekOffset())->toBe(0);
    expect($cursor->index())->toBe(2);

    $cursor->peek();

    expect($cursor->currentChar())->toBe('🦑');
    expect($cursor->currentPeek())->toBe('d');
    expect($cursor->peekOffset())->toBe(1);
    expect($cursor->index())->toBe(2);

    $cursor->next();

    expect($cursor->currentChar())->toBe('d');
    expect($cursor->currentPeek())->toBe('d');
    expect($cursor->peekOffset())->toBe(0);
    expect($cursor->index())->toBe(3);
});

test('resetPeek method works', function () {
    $cursor = new Cursor('abcd');

    $cursor->next();
    $cursor->peek(2);
    $cursor->resetPeek();

    expect($cursor->currentChar())->toBe('b');
    expect($cursor->currentPeek())->toBe('b');
    expect($cursor->peekOffset())->toBe(0);
    expect($cursor->index())->toBe(1);

    $cursor->peek();

    expect($cursor->currentChar())->toBe('b');
    expect($cursor->currentPeek())->toBe('c');
    expect($cursor->peekOffset())->toBe(1);
    expect($cursor->index())->toBe(1);

    $cursor->peek(3);
    $cursor->resetPeek();

    expect($cursor->currentChar())->toBe('b');
    expect($cursor->currentPeek())->toBe('b');
    expect($cursor->peekOffset())->toBe(0);
    expect($cursor->index())->toBe(1);

    expect($cursor->peek())->toBe('c');
    expect($cursor->currentChar())->toBe('b');
    expect($cursor->currentPeek())->toBe('c');
    expect($cursor->peekOffset())->toBe(1);
    expect($cursor->index())->toBe(1);

    expect($cursor->peek())->toBe('d');
    expect($cursor->peek())->toBeNull();
});

it('treats crlf as a single character', function () {
    $cursor = new Cursor("a\r\nb\r\n");

    expect($cursor->currentChar())->toBe('a');

    expect($cursor->next())->toBe("\n");
    expect($cursor->currentChar())->toBe("\n");

    $cursor->peek(2);

    expect($cursor->currentPeek())->toBe("\n");

    $cursor->skipToPeek();

    expect($cursor->currentChar())->toBe("\n");
});

test('slice method works', function () {
    $cursor = new Cursor('🐙ab🐙cd');

    expect($cursor->slice(2, 5))->toBe('b🐙c');
});

it('can peek blank inline', function () {
    $cursor = new Cursor("a   b     \r\n    \n");

    $cursor->next();

    expect($cursor->peekBlankInline())->toBe('   ');
    expect($cursor->index())->toBe(1);
    expect($cursor->peekOffset())->toBe(3);

    $cursor->skipToPeek();
    $cursor->next();

    expect($cursor->peekBlankInline())->toBe('     ');
    expect($cursor->index())->toBe(5);
    expect($cursor->peekOffset())->toBe(5);

    $cursor->skipToPeek();
    $cursor->next();

    expect($cursor->peekBlankInline())->toBe('    ');
    expect($cursor->index())->toBe(12);
    expect($cursor->peekOffset())->toBe(4);
});

it('can skip blank inline', function () {
    $cursor = new Cursor("a   b     \r\n    \n");

    $cursor->next();

    expect($cursor->skipBlankInline())->toBe('   ');
    expect($cursor->index())->toBe(4);
    expect($cursor->peekOffset())->toBe(0);

    $cursor->skipToPeek();
    $cursor->next();

    expect($cursor->skipBlankInline())->toBe('     ');
    expect($cursor->index())->toBe(10);
    expect($cursor->peekOffset())->toBe(0);

    $cursor->skipToPeek();
    $cursor->next();

    expect($cursor->skipBlankInline())->toBe('    ');
    expect($cursor->index())->toBe(16);
    expect($cursor->peekOffset())->toBe(0);
});

it('can peek blank block', function () {
    $cursor = new Cursor("a b     \r\n    \n  c  \n");

    $cursor->next();

    expect($cursor->peekBlankBlock())->toBe('');
    expect($cursor->index())->toBe(1);
    expect($cursor->peekOffset())->toBe(0);

    $cursor->next(2);

    expect($cursor->peekBlankBlock())->toBe("\n\n");
    expect($cursor->index())->toBe(3);
    expect($cursor->peekOffset())->toBe(12);

    $cursor->skipToPeek();
    $cursor->next(3);

    expect($cursor->peekBlankBlock())->toBe("\n");
    expect($cursor->index())->toBe(18);
    expect($cursor->peekOffset())->toBe(3);
});

it('can skip blank block', function () {
    $cursor = new Cursor("a b     \r\n    \n  c  \n");

    $cursor->next();

    expect($cursor->skipBlankBlock())->toBe('');
    expect($cursor->index())->toBe(1);
    expect($cursor->peekOffset())->toBe(0);

    $cursor->next(2);

    expect($cursor->skipBlankBlock())->toBe("\n\n");
    expect($cursor->index())->toBe(15);
    expect($cursor->peekOffset())->toBe(0);

    $cursor->skipToPeek();
    $cursor->next(3);

    expect($cursor->skipBlankBlock())->toBe("\n");
    expect($cursor->index())->toBe(21);
    expect($cursor->peekOffset())->toBe(0);
});

it('can peek blank', function () {
    $cursor = new Cursor("a b     \r\n    \n  c  \n");

    $cursor->next();

    $cursor->peekBlank();
    expect($cursor->index())->toBe(1);
    expect($cursor->peekOffset())->toBe(1);

    $cursor->skipToPeek();
    $cursor->next();

    $cursor->peekBlank();
    expect($cursor->index())->toBe(3);
    expect($cursor->peekOffset())->toBe(14);

    $cursor->skipToPeek();
    $cursor->next();

    $cursor->peekBlank();
    expect($cursor->index())->toBe(18);
    expect($cursor->peekOffset())->toBe(3);
});

it('can skip blank', function () {
    $cursor = new Cursor("a b     \r\n    \n  c  \n");

    $cursor->next();

    $cursor->skipBlank();
    expect($cursor->index())->toBe(2);
    expect($cursor->peekOffset())->toBe(0);

    $cursor->skipToPeek();
    $cursor->next();

    $cursor->skipBlank();
    expect($cursor->index())->toBe(17);
    expect($cursor->peekOffset())->toBe(0);

    $cursor->skipToPeek();
    $cursor->next();

    $cursor->skipBlank();
    expect($cursor->index())->toBe(21);
    expect($cursor->peekOffset())->toBe(0);
});

it('advances when encounters expected character', function () {
    $cursor = new Cursor("a🦓\r\nb");

    $cursor->expectChar('a');
    expect($cursor->index())->toBe(1);

    $cursor->expectChar('🦓');
    expect($cursor->index())->toBe(2);

    $cursor->expectChar("\n");
    expect($cursor->index())->toBe(4);

    $cursor->expectChar('b');
    expect($cursor->index())->toBe(5);
});

it('throws an error when does not encounter expected character', function () {
    $cursor = new Cursor('a&b');

    $cursor->next();

    try {
        $cursor->expectChar('=');
    } catch (Throwable $throwable) {
        expect($cursor->index())->toBe(1);

        throw $throwable;
    }
})->throws(ParserException::class, 'Expected token: "="');

it('advances when encounters expected line end', function () {
    $cursor = new Cursor("\na\r\nb");

    $cursor->expectLineEnd();
    expect($cursor->index())->toBe(1);

    $cursor->next();

    $cursor->expectLineEnd();
    expect($cursor->index())->toBe(4);

    $cursor->next();

    $cursor->expectLineEnd();
    expect($cursor->index())->toBe(5);
});

it('throws an error when does not encounter expected line end', function () {
    $cursor = new Cursor('a ');

    try {
        $cursor->expectLineEnd();
    } catch (Throwable $throwable) {
        expect($cursor->index())->toBe(0);

        throw $throwable;
    }
})->throws(ParserException::class, 'Expected token: "␤"');

it('can take character described by closure', function () {
    $cursor = new Cursor('ac');

    $callback = fn ($char) => $char === 'a' || $char === 'b';

    expect($cursor->takeChar($callback))->toBe('a');
    expect($cursor->index())->toBe(1);

    expect($cursor->takeChar($callback))->toBeNull();
    expect($cursor->index())->toBe(1);

    $cursor->next();

    expect($cursor->takeChar($callback))->toBeNull();
    expect($cursor->index())->toBe(2);
});
