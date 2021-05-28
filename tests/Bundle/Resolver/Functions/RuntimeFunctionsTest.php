<?php

use Major\Fluent\Bundle\FluentBundle;

$bundle = (new FluentBundle('en-US', strict: true, useIsolating: false))
    ->addFunctions([
        'CONCAT' => fn (...$args) => implode($args),
        'SUM' => fn (...$args) => array_sum($args),
        'JSON' => fn ($arg, $key, $another) => json_encode(func_get_args()),
    ])
    ->addFtl(<<<'ftl'
        foo = { CONCAT("Foo", "Bar") }
        bar = { SUM(1, 2) }
        baz = { JSON("test", another: 123, key: "value") }
        ftl);

it('works for strings')
    ->expect($bundle->message('foo'))->toBe('FooBar');

it('works for numbers')
    ->expect($bundle->message('bar'))->toBe('3');

it('works with named arguments')
    ->expect($bundle->message('baz'))->toBe('["test","value",123]');
