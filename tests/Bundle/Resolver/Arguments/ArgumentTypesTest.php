<?php

use Major\Fluent\Bundle\FluentBundle;
use Major\Fluent\Bundle\Types\FluentNumber;
use Major\Fluent\Exceptions\Resolver\TypeException;

$bundle = (new FluentBundle('en-US'))
    ->addFtl('foo = { $arg }');

$bundlePL = (new FluentBundle('pl-PL'))
    ->addFtl('foo = { $arg }');

it('can not be an array')
    ->expect($bundle->message('foo', arg: [1, 2, 'key' => 3]))->toBe('{$arg}')
    ->and($bundle->popErrors())->toHaveError(
        TypeException::class, 'Variable $arg is of unsupported type array.',
    );

it('can not be a boolean')
    ->expect($bundle->message('foo', arg: true))->toBe('{$arg}')
    ->and($bundle->popErrors())->toHaveError(
        TypeException::class, 'Variable $arg is of unsupported type bool.',
    );

it('can not be null')
    ->expect($bundle->message('foo', arg: null))->toBe('{$arg}')
    ->and($bundle->popErrors())->toHaveError(
            TypeException::class, 'Variable $arg is of unsupported type null.',
    );

it('can not be an object')
    ->expect($bundle->message('foo', arg: new stdClass()))->toBe('{$arg}')
    ->and($bundle->popErrors())->toHaveError(
        TypeException::class, 'Variable $arg is of unsupported type stdClass.',
    );

it('can not be a closure')
    ->expect($bundle->message('foo', arg: fn () => null))->toBe('{$arg}')
    ->and($bundle->popErrors())->toHaveError(
        TypeException::class, 'Variable $arg is of unsupported type Closure.',
    );

it('can be a string')
    ->expect($bundle->message('foo', arg: 'Argument'))->toBe('Argument')
    ->and($bundle->popErrors())->toBeEmpty();

it('can be an integer')
    ->expect($bundle->message('foo', arg: 1))->toBe('1')
    ->and($bundle->popErrors())->toBeEmpty();

it('can be a float')
    ->expect($bundle->message('foo', arg: 1.5))->toBe('1.5')
    ->and($bundle->popErrors())->toBeEmpty();

it('can be a FluentNumber')
    ->expect($bundle->message('foo', arg: new FluentNumber(0.42)))->toBe('0.42')
    ->and($bundle->popErrors())->toBeEmpty()
    ->and($bundlePL->message('foo', arg: new FluentNumber(0.42)))->toBe('0,42')
    ->and($bundlePL->popErrors())->toBeEmpty();
