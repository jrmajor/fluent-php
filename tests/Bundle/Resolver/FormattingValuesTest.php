<?php

use Major\Fluent\Bundle\FluentBundle;
use Major\Fluent\Exceptions\Resolver\NullPatternException;
use Major\Fluent\Exceptions\Resolver\ReferenceException;

$bundle = (new FluentBundle('en-US', useIsolating: false))
    ->addFtl(<<<'ftl'
        key1 = Value 1
        key2 = { $sel ->
            [a] A2
           *[b] B2
        }
        key3 = Value { 3 }
        key4 = { $sel ->
            [a] A{ 4 }
           *[b] B{ 4 }
        }
        key5 =
            .a = A5
            .b = B5
        ftl);

it('returns the value')
    ->expect($bundle->message('key1'))->toBe('Value 1')
    ->and($bundle->popErrors())->toBeEmpty();

it('returns the default variant')
    ->expect($bundle->message('key2'))->toBe('B2')
    ->and($bundle->popErrors())->toHaveError(
        ReferenceException::class, 'Unknown variable: $sel.',
    );

it('returns the value if it is a pattern')
    ->expect($bundle->message('key3'))->toBe('Value 3')
    ->and($bundle->popErrors())->toBeEmpty();

it('returns the default variant if it is a pattern')
    ->expect($bundle->message('key4'))->toBe('B4')
    ->and($bundle->popErrors())->toHaveError(
        ReferenceException::class, 'Unknown variable: $sel.',
    );

it('returns {???} when trying to format a message with null value')
    ->expect($bundle->message('key5'))->toBe('{???}')
    ->and($bundle->popErrors())->toHaveError(
        NullPatternException::class, 'Null pattern can not be formatted.',
    );

it('supports dot notation for referencing message attributes')
    ->expect($bundle->message('key5.a'))->toBe('A5')
    ->and($bundle->message('key5.b'))->toBe('B5')
    ->and($bundle->popErrors())->toBeEmpty();
