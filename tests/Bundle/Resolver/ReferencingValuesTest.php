<?php

use Major\Fluent\Bundle\FluentBundle;
use Major\Fluent\Exceptions\Resolver\ReferenceException;

$bundle = (new FluentBundle('en-US', useIsolating: false))
    ->addFtl(<<<'ftl'
    key1 = Value 1
    -key2 = { $sel ->
        [a] A2
       *[b] B2
    }
    key3 = Value { 3 }
    -key4 = { $sel ->
        [a] A{ 4 }
       *[b] B{ 4 }
    }
    key5 =
        .a = A5
        .b = B5

    ref1 = { key1 }
    ref2 = { -key2 }
    ref3 = { key3 }
    ref4 = { -key4 }
    ref5 = { key5 }

    ref6 = { -key2(sel: "a") }
    ref7 = { -key2(sel: "b") }

    ref8 = { -key4(sel: "a") }
    ref9 = { -key4(sel: "b") }

    ref10 = { key5.a }
    ref11 = { key5.b }
    ref12 = { key5.c }

    ref13 = { key6 }
    ref14 = { key6.a }

    ref15 = { -key6 }
    ref16 = { -key6.a ->
       *[a] A
    }
    ftl);

it('can reference the value')
    ->expect($bundle->message('ref1'))->toBe('Value 1')
    ->and($bundle->popErrors())->toBeEmpty();

it('can reference the default variant')
    ->expect($bundle->message('ref2'))->toBe('B2')
    ->and($bundle->popErrors())->toBeEmpty();

it('can reference the value if it is a pattern')
    ->expect($bundle->message('ref3'))->toBe('Value 3')
    ->and($bundle->popErrors())->toBeEmpty();

it('can reference the default variant if it is a pattern')
    ->expect($bundle->message('ref4'))->toBe('B4')
    ->and($bundle->popErrors())->toBeEmpty();

it('falls back to id if there is no value')
    ->expect($bundle->message('ref5'))->toBe('{key5}')
    ->and($bundle->popErrors())->toHaveError(
        ReferenceException::class, 'No value: key5.',
    );

it('can reference variants')
    ->expect($bundle->message('ref6'))->toBe('A2')
    ->and($bundle->message('ref7'))->toBe('B2')
    ->and($bundle->popErrors())->toBeEmpty();

it('can reference variants which are patterns')
    ->expect($bundle->message('ref8'))->toBe('A4')
    ->and($bundle->message('ref9'))->toBe('B4')
    ->and($bundle->popErrors())->toBeEmpty();

it('can reference attributes')
    ->expect($bundle->message('ref10'))->toBe('A5')
    ->and($bundle->message('ref11'))->toBe('B5')
    ->and($bundle->message('ref12'))->toBe('{key5.c}')
    ->and($bundle->popErrors())->toHaveError(
        ReferenceException::class, 'Unknown attribute: key5.c.',
    );

test('missing message reference')
    ->expect($bundle->message('ref13'))->toBe('{key6}')
    ->and($bundle->popErrors())->toHaveError(
        ReferenceException::class, 'Unknown message: key6.',
    );

test('missing message attribute reference')
    ->expect($bundle->message('ref14'))->toBe('{key6}')
    ->and($bundle->popErrors())->toHaveError(
        ReferenceException::class, 'Unknown message: key6.',
    );

test('missing term reference')
    ->expect($bundle->message('ref15'))->toBe('{-key6}')
    ->and($bundle->popErrors())->toHaveError(
        ReferenceException::class, 'Unknown term: -key6.',
    );

test('missing term attribute reference')
    ->expect($bundle->message('ref16'))->toBe('A')
    ->and($bundle->popErrors())->toHaveError(
        ReferenceException::class, 'Unknown term: -key6.',
    );
