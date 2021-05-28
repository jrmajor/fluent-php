<?php

use Major\Fluent\Bundle\FluentBundle;

$bundle = (new FluentBundle('en-US', strict: true, useIsolating: false))
    ->addFunctions([
        'CONCAT' => fn (...$args) => implode($args),
        'SUM' => fn (...$args) => array_sum($args),
        'JSON' => fn ($arg, $key, $another) => json_encode(func_get_args()),
        'PROPS' => fn (object $object) => json_encode(get_object_vars($object)),
    ])
    ->addFtl(<<<'ftl'
        strings = { CONCAT("Foo", "Bar") }
        numbers = { SUM(1, 2.5) }
        named-args = { JSON("test", another: 123, key: "value") }
        objects = { PROPS($object) }
        ftl);

it('works for strings')
    ->expect($bundle->message('strings'))->toBe('FooBar');

it('works for numbers')
    ->expect($bundle->message('numbers'))->toBe('3.5');

it('works with named arguments')
    ->expect($bundle->message('named-args'))->toBe('["test","value",123]');

$object = new class {
    public string $prop = 'Object property';
};

it('variable type is preserved')
    ->expect($bundle->message('objects', object: $object))->toBe('{"prop":"Object property"}');
