<?php

use Major\Fluent\Bundle\FluentBundle;
use Major\Fluent\Exceptions\Resolver\CyclicReferenceException;

$bundle = (new FluentBundle('en-US', useIsolating: false))
    ->addFtl(<<<'ftl'
        foo = { bar }
        bar = { foo }

        self = { self }
        ftl);

it('returns {???} for cyclic reference')
    ->expect($bundle->message('foo'))->toBe('{???}')
    ->and($bundle->popErrors())->toHaveError(
        CyclicReferenceException::class, 'Placeable contains cyclic reference.',
    );

test('returns {???} for cyclic self-reference')
    ->expect($bundle->message('self'))->toBe('{???}')
    ->and($bundle->popErrors())->toHaveError(
        CyclicReferenceException::class, 'Placeable contains cyclic reference.',
    );

$bundle = (new FluentBundle('en-US', useIsolating: false))
    ->addFtl(<<<'ftl'
        foo =
            { $sel ->
               *[a] { foo }
                [b] Bar
            }
        bar = { foo }
        ftl);

it('returns {???} for cyclic self-reference in a member')
    ->expect($bundle->message('foo', sel: 'a'))->toBe('{???}')
    ->and($bundle->popErrors())->toHaveError(
        CyclicReferenceException::class, 'Placeable contains cyclic reference.',
    );

it('returns the other member if requested')
    ->expect($bundle->message('foo', sel: 'b'))->toBe('Bar')
    ->and($bundle->popErrors())->toBeEmpty();

$bundle = (new FluentBundle('en-US', useIsolating: false))
    ->addFtl(<<<'ftl'
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

it('returns the default variant for cyclic reference in a selector')
    ->expect($bundle->message('foo'))->toBe('Foo')
    ->and($bundle->popErrors())->toHaveError(
        CyclicReferenceException::class, 'Placeable contains cyclic reference.',
    );

it('can reference an attribute')
    ->expect($bundle->message('bar'))->toBe('Bar')
    ->and($bundle->popErrors())->toBeEmpty();
