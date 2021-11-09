<?php

namespace Major\Fluent\Tests\Bundle\Resolver\Functions;

use Major\Fluent\Bundle\FluentBundle;
use Major\Fluent\Exceptions\Resolver\ReferenceException;

$bundle = (new FluentBundle('en-US', useIsolating: false))
    ->addFtl('foo = { MISSING("Foo") }');

it('falls back to the name of the function')
    ->expect($bundle->message('foo'))->toBe('{MISSING()}')
    ->and($bundle->popErrors())->toHaveError(
        ReferenceException::class, 'Unknown function: MISSING().',
    );

$bundle = (new FluentBundle('en-US', strict: true, useIsolating: false))
    ->addFunction('IDENTITY', fn (...$args) => $args[0])
    ->addFtl(<<<'ftl'
        foo = Foo
            .attr = Attribute
        pass-nothing       = { IDENTITY() }
        pass-string        = { IDENTITY("a", 23, adf: "ads", bgf: 234) }
        pass-number        = { IDENTITY(1) }
        pass-message       = { IDENTITY(foo) }
        pass-attr          = { IDENTITY(foo.attr) }
        pass-variable      = { IDENTITY($var) }
        pass-function-call = { IDENTITY(IDENTITY(1)) }
        ftl);

it('accepts strings')
    ->expect($bundle->message('pass-string'))->toBe('a');

it('accepts numbers')
    ->expect($bundle->message('pass-number'))->toBe('1');

it('accepts message references')
    ->expect($bundle->message('pass-message'))->toBe('Foo');

it('accepts attribute references')
    ->expect($bundle->message('pass-attr'))->toBe('Attribute');

it('accepts variables')
    ->expect($bundle->message('pass-variable', var: 'Variable'))->toBe('Variable');

it('accepts function calls')
    ->expect($bundle->message('pass-function-call'))->toBe('1');
