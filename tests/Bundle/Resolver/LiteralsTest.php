<?php

namespace Major\Fluent\Tests\Bundle\Resolver;

use Major\Fluent\Bundle\FluentBundle;

$bundle = (new FluentBundle('en-US', strict: true, allowOverrides: true))
    ->addFtl(<<<'ftl'
        matching-string = { "a" ->
            [a] A
           *[b] B
        }
        non-matching-string = { "c" ->
            [a] A
           *[b] B
        }

        matching-number = { 0 ->
            [0] A
           *[1] B
        }
        non-matching-number = { 2 ->
            [0] A
           *[1] B
        }

        number-matching-plural = { 1 ->
            [one] A
           *[other] B
        }
        ftl);

test('a matching string literal selector')
    ->expect($bundle->message('matching-string'))->toBe('A');

test('a non-matching string literal selector')
    ->expect($bundle->message('non-matching-string'))->toBe('B');

test('a matching number literal selector')
    ->expect($bundle->message('matching-number'))->toBe('A');

test('a non-matching number literal selector')
    ->expect($bundle->message('non-matching-number'))->toBe('B');

test('a number literal selector matching a plural category')
    ->expect($bundle->message('number-matching-plural'))->toBe('A');
