<?php

use Major\Fluent\Bundle\FluentBundle;
use Major\Fluent\Exceptions\Resolver\ReferenceException;
use Major\Fluent\Exceptions\Resolver\TypeException;

$bundle = (new FluentBundle('en-US', useIsolating: false))
    ->addFunctions([
        'CONCAT' => fn (...$args) => implode($args),
        'SUM' => fn (...$args) => array_sum($args),
        'JSON' => fn ($arg, $key, $another) => json_encode(func_get_args()),
        'TYPE' => fn ($arg) => get_debug_type($arg),
        'PROPS' => fn (object $object) => json_encode(get_object_vars($object)),
        'WRONG_RETURN' => fn () => new stdClass(),
    ])
    ->addFtl(<<<'ftl'
        strings = { CONCAT("Foo", "Bar") }
        numbers = { SUM(1, 2.5) }
        named-args = { JSON("test", another: 123, key: "value") }
        int = { TYPE(12) }
        float = { TYPE(4.5) }
        float-trailing-zeroes = { TYPE(8.0) }
        objects = { PROPS($object) }
        unknown = { TYPE($arg) }
        wrong-return = { WRONG_RETURN() }
        ftl);

it('works for strings')
    ->expect($bundle->message('strings'))->toBe('FooBar')
    ->and($bundle->popErrors())->toBeEmpty();

it('works for numbers')
    ->expect($bundle->message('numbers'))->toBe('3.5')
    ->and($bundle->popErrors())->toBeEmpty();

it('works with named arguments')
    ->expect($bundle->message('named-args'))->toBe('["test","value",123]')
    ->and($bundle->popErrors())->toBeEmpty();

it('preserves int and float types')
    ->expect($bundle->message('int'))->toBe('int')
    ->and($bundle->message('float'))->toBe('float')
    ->and($bundle->message('float-trailing-zeroes'))->toBe('float')
    ->and($bundle->popErrors())->toBeEmpty();

$object = new class() {
    public string $prop = 'Object property';
};

it("preserves variable type when it's passed to function")
    ->expect($bundle->message('objects', object: $object))->toBe('{"prop":"Object property"}')
    ->and($bundle->popErrors())->toBeEmpty();

it('converts unknown variables to null')
    ->expect($bundle->message('unknown'))->toBe('null')
    ->and($bundle->popErrors())->toHaveError(
        ReferenceException::class, 'Unknown variable: $arg.',
    );

it('throws a type error when function returns wrong type')
    ->expect($bundle->message('wrong-return'))->toBe('{WRONG_RETURN()}')
    ->and($bundle->popErrors())->toHaveError(
        TypeException::class,
        'Return value of WRONG_RETURN() must be of type string|Stringable, stdClass returned.',
    );
