<?php

use Major\Fluent\Parser\Cursor;

test('next, currentChar and index methods work', function () {
    $cursor = new Cursor('ab🐠d');

    expect($cursor->currentChar())->toBe('a');
    expect($cursor->index())->toBe(0);

    expect($cursor->next())->toBe('b');
    expect($cursor->currentChar())->toBe('b');
    expect($cursor->index())->toBe(1);

    expect($cursor->next())->toBe('🐠');
    expect($cursor->currentChar())->toBe('🐠');
    expect($cursor->index())->toBe(2);

    expect($cursor->next())->toBe('d');
    expect($cursor->currentChar())->toBe('d');
    expect($cursor->index())->toBe(3);

    expect($cursor->next())->toBeNull();
    expect($cursor->currentChar())->toBeNull();
    expect($cursor->index())->toBe(4);
});

test('peek, currentPeek and peekOffset methods work', function () {
    $cursor = new Cursor('a🐬cd');

    expect($cursor->currentPeek())->toBe('a');
    expect($cursor->peekOffset())->toBe(0);

    expect($cursor->peek())->toBe('🐬');
    expect($cursor->currentPeek())->toBe('🐬');
    expect($cursor->peekOffset())->toBe(1);

    expect($cursor->peek())->toBe('c');
    expect($cursor->currentPeek())->toBe('c');
    expect($cursor->peekOffset())->toBe(2);

    expect($cursor->peek())->toBe('d');
    expect($cursor->currentPeek())->toBe('d');
    expect($cursor->peekOffset())->toBe(3);

    expect($cursor->peek())->toBeNull();
    expect($cursor->currentPeek())->toBeNull();
    expect($cursor->peekOffset())->toBe(4);
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

    $cursor->peek();
    $cursor->peek();

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
    $cursor->peek();
    $cursor->peek();
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

    $cursor->peek();
    $cursor->peek();
    $cursor->peek();
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

    $cursor->peek();
    $cursor->peek();

    expect($cursor->currentPeek())->toBe("\n");

    $cursor->skipToPeek();

    expect($cursor->currentChar())->toBe("\n");
});

test('slice method works', function () {
    $cursor = new Cursor('🐙ab🐙cd');

    expect($cursor->slice(2, 5))->toBe('b🐙c');
});
