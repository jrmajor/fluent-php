<?php

use Major\Fluent\Bundle\FluentBundle;

$bundle = (new FluentBundle('en-US', strict: true, useIsolating: false))
    ->addFtl(<<<'ftl'
    foo = Foo
    bar = { foo }Bar

    placeable-message = { bar }Baz

    baz =
        .attr = { bar }BazAttribute

    placeable-attr = { baz.attr }
    ftl);

it('can be used as a value')
    ->expect($bundle->message('bar'))->toBe('FooBar');

it('can be a value of a message referenced in a placeable')
    ->expect($bundle->message('placeable-message'))->toBe('FooBarBaz');

it('can be used as an attribute value')
    ->expect($bundle->message('baz.attr'))->toBe('FooBarBazAttribute');

it('can be a value of an attribute used in a placeable')
    ->expect($bundle->message('placeable-attr'))->toBe('FooBarBazAttribute');
