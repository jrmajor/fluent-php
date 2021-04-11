<?php

use Major\Fluent\Bundle\FluentBundle;
use Major\Fluent\Exceptions\Resolver\ReferenceException;

$bundle = (new FluentBundle('en-US', useIsolating: false))
    ->addFtl(<<<'ftl'
        missing = { $arg }
        msg = Foo { $num }
        ref = { msg }
        baz =
            .attr = Baz Attribute { $num }
        select-val = { "a" ->
            *[a] Baz Variant A { $num }
        }
        selector = { $num ->
           *[3] Foo
        }
        ftl);

it("falls back to argument's name if it is missing")
    ->expect($bundle->message('missing'))->toBe('{$arg}')
    ->and($bundle->popErrors())->toHaveError(
        ReferenceException::class, 'Unknown variable: $arg.',
    );

it('can be used in the message value')
    ->expect($bundle->message('msg', num: 3))->toBe('Foo 3')
    ->and($bundle->popErrors())->toBeEmpty();

it('can be used in the message value which is referenced')
    ->expect($bundle->message('ref', num: 3))->toBe('Foo 3')
    ->and($bundle->popErrors())->toBeEmpty();

it('can be used in an attribute')
    ->expect($bundle->message('baz.attr', num: 3))->toBe('Baz Attribute 3')
    ->and($bundle->popErrors())->toBeEmpty();

it('can be used in a variant')
    ->expect($bundle->message('select-val', num: 3))->toBe('Baz Variant A 3')
    ->and($bundle->popErrors())->toBeEmpty();

it('can be used as a selector in a select expression')
    ->expect($bundle->message('selector', num: 3))->toBe('Foo')
    ->and($bundle->popErrors())->toBeEmpty();
