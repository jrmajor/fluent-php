<?php

namespace Major\Fluent\Tests\Bundle\Resolver\Primitives;

use Major\Fluent\Bundle\FluentBundle;

$bundle = (new FluentBundle('en-US', strict: true, useIsolating: false))
    ->addFtl(<<<'ftl'
        foo = Foo

        placeable-literal = { "Foo" } Bar
        placeable-message = { foo } Bar

        selector-literal = { "Foo" ->
           *[Foo] Member 1
        }

        bar =
            .attr = Bar Attribute

        placeable-attr = { bar.attr }

        -baz = Baz
            .attr = BazAttribute

        selector-attr = { -baz.attr ->
           *[BazAttribute] Member 3
        }
        ftl);

it('can be used as a value')
    ->expect($bundle->message('foo'))->toBe('Foo');

it('can be used in a placeable')
    ->expect($bundle->message('placeable-literal'))->toBe('Foo Bar');

it('can be a value of a message referenced in a placeable')
    ->expect($bundle->message('placeable-message'))->toBe('Foo Bar');

it('can be a selector')
    ->expect($bundle->message('selector-literal'))->toBe('Member 1');

it('can be used as an attribute value')
    ->expect($bundle->message('bar.attr'))->toBe('Bar Attribute');

it('can be a value of an attribute used in a placeable')
    ->expect($bundle->message('placeable-attr'))->toBe('Bar Attribute');

it('can be a value of an attribute used as a selector')
    ->expect($bundle->message('selector-attr'))->toBe('Member 3');
