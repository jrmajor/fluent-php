<?php

use Major\Fluent\Bundle\FluentBundle;
use Major\Fluent\Exceptions\Resolver\ReferenceException;

$bundle = (new FluentBundle('en-US', useIsolating: false))
    ->addRaw(<<<'ftl'
    foo = Foo
    bar = Bar
        .attr = Bar Attribute
    baz = { foo } Baz
    qux = { foo } Qux
        .attr = Qux Attribute

    ref-foo = { foo.missing }
    ref-bar = { bar.missing }
    ref-baz = { baz.missing }
    ref-qux = { qux.missing }
    ftl);

it('falls back to id.attribute for entities with string values and no attributes')
    ->expect($bundle->message('ref-foo'))->toBe('{foo.missing}')
    ->and($bundle->popErrors())->toHaveError(
        ReferenceException::class, 'Unknown attribute: missing.',
    );

it('falls back to id.attribute for entities with string values and other attributes')
    ->expect($bundle->message('ref-bar'))->toBe('{bar.missing}')
    ->and($bundle->popErrors())->toHaveError(
        ReferenceException::class, 'Unknown attribute: missing.',
    );

it('falls back to id.attribute for entities with pattern values and no attributes')
    ->expect($bundle->message('ref-baz'))->toBe('{baz.missing}')
    ->and($bundle->popErrors())->toHaveError(
        ReferenceException::class, 'Unknown attribute: missing.',
    );

it('falls back to id.attribute for entities with pattern values and other attributes')
    ->expect($bundle->message('ref-qux'))->toBe('{qux.missing}')
    ->and($bundle->popErrors())->toHaveError(
        ReferenceException::class, 'Unknown attribute: missing.',
    );

$bundle = (new FluentBundle('en-US', strict: true, useIsolating: false))
    ->addRaw(<<<'ftl'
    foo = Foo
        .attr = Foo Attribute
    bar = { foo } Bar
        .attr = Bar Attribute

    ref-foo = { foo.attr }
    ref-bar = { bar.attr }
    ftl);

test('attributes with string values can be referenced for entities with string values')
    ->expect($bundle->message('ref-foo'))->toBe('Foo Attribute');

test('attributes with string values can be formatted directly for entities with string values')
    ->expect($bundle->message('foo.attr'))->toBe('Foo Attribute');

test('attributes with string values can be referenced for entities with pattern values')
    ->expect($bundle->message('ref-bar'))->toBe('Bar Attribute');

test('attributes with string values can be formatted directly for entities with pattern values')
    ->expect($bundle->message('bar.attr'))->toBe('Bar Attribute');

$bundle = (new FluentBundle('en-US', strict: true, useIsolating: false))
    ->addRaw(<<<'ftl'
    foo = Foo
    bar = Bar
        .attr = { foo } Attribute
    baz = { foo } Baz
        .attr = { foo } Attribute
    qux = Qux
        .attr = { qux } Attribute

    ref-bar = { bar.attr }
    ref-baz = { baz.attr }
    ref-qux = { qux.attr }
    ftl);

test('attributes with simple pattern values can be referenced for entities with string values')
    ->expect($bundle->message('ref-bar'))->toBe('Foo Attribute');

test('attributes with simple pattern values can be formatted directly for entities with string values')
    ->expect($bundle->message('bar.attr'))->toBe('Foo Attribute');

test('attributes with simple pattern values can be referenced for entities with simple pattern values')
    ->expect($bundle->message('ref-baz'))->toBe('Foo Attribute');

test('attributes with simple pattern values can be formatted directly for entities with simple pattern values')
    ->expect($bundle->message('baz.attr'))->toBe('Foo Attribute');

it('works with self-references')
    ->expect($bundle->message('ref-qux'))->toBe('Qux Attribute');

it('can be formatted directly when it uses a self-reference')
    ->expect($bundle->message('qux.attr'))->toBe('Qux Attribute');

$bundle = (new FluentBundle('en-US', strict: true, useIsolating: false))
    ->addRaw(<<<'ftl'
    foo = Foo
        .attr = { "a" ->
            [a] A
           *[b] B
        }

    ref-foo = { foo.attr }
    ftl);

test('attributes containing select expressions can be referenced')
    ->expect($bundle->message('ref-foo'))->toBe('A');

test('attributes containing select expressions can be formatted directly')
    ->expect($bundle->message('foo.attr'))->toBe('A');
