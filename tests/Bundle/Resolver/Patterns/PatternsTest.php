<?php

use Major\Fluent\Bundle\FluentBundle;
use Major\Fluent\Exceptions\Resolver\NullPatternException;
use Major\Fluent\Exceptions\Resolver\ReferenceException;

$bundle = (new FluentBundle('en-US', strict: true, useIsolating: false))
    ->addFtl(<<<'ftl'
    foo = Foo
    ftl);

it('returns the simple string value')
    ->expect($bundle->message('foo'))->toBe('Foo');

$bundle = (new FluentBundle('en-US', useIsolating: false))
    ->addFtl(<<<'ftl'
    foo = Foo
    -bar = Bar

    ref-message = { foo }
    ref-term = { -bar }

    ref-missing-message = { missing }
    ref-missing-term = { -missing }

    ref-malformed = { malformed
    ftl);

it('resolves the reference to a message')
    ->expect($bundle->message('ref-message'))->toBe('Foo')
    ->and($bundle->popErrors())->toBeEmpty();

it('resolves the reference to a term')
    ->expect($bundle->message('ref-term'))->toBe('Bar')
    ->and($bundle->popErrors())->toBeEmpty();

it('returns the id if the referenced message is missing')
    ->expect($bundle->message('ref-missing-message'))->toBe('{missing}')
    ->and($bundle->popErrors())->toHaveError(
        ReferenceException::class, 'Unknown message: missing.',
    );

it('returns the id if the referenced term is missing')
    ->expect($bundle->message('ref-missing-term'))->toBe('{-missing}')
    ->and($bundle->popErrors())->toHaveError(
        ReferenceException::class, 'Unknown term: -missing.',
    );

$bundle = (new FluentBundle('en-US', useIsolating: false))
    ->addFtl(<<<'ftl'
    msg-no-val =
        .attr = Foo Attr
    ref = { msg-no-val } Bar
    ftl);

it('returns {???} when trying to format a message with null value')
    ->expect($bundle->message('msg-no-val'))->toBe('{???}')
    ->and($bundle->popErrors())->toHaveError(
        NullPatternException::class, 'Null pattern can not be formatted.',
    );

it('formats the attribute of a message with null value')
    ->expect($bundle->message('msg-no-val.attr'))->toBe('Foo Attr')
    ->and($bundle->popErrors())->toBeEmpty();

it('falls back to id when the referenced message has no value')
    ->expect($bundle->message('ref'))->toBe('{msg-no-val} Bar')
    ->and($bundle->popErrors())->toHaveError(
        ReferenceException::class, 'No value: msg-no-val.',
    );
