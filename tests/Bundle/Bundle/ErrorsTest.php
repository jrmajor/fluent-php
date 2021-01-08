<?php

use Major\Fluent\Bundle\FluentBundle;
use Major\Fluent\Exceptions\ParserException;
use Major\Fluent\Exceptions\Resolver\ReferenceException;

it('ignores syntax errors by default', function () {
    (new FluentBundle('en-US'))->addRaw('syntax error');
})->expect((bool) 'error has not been thrown')->toBeTrue();

it('throws syntax errors in strict mode', function () {
    (new FluentBundle('en-US', strict: true))->addRaw('syntax error');
})->throws(ParserException::class, 'Expected token: "="');

test('errors are ignored by default and can be obtained by popErrors method', function () {
    $bundle = (new FluentBundle('en-US', useIsolating: false))
        ->addRaw(<<<'ftl'
        foo = { $one } and { $two }
        ftl);

    expect($bundle->message('foo'))->toBe('{$one} and {$two}');

    expect($errors = $bundle->popErrors())->toHaveCount(2);
    expect($errors[0])->toBeException(ReferenceException::class, 'Unknown variable: $one.');
    expect($errors[1])->toBeException(ReferenceException::class, 'Unknown variable: $two.');

    expect($bundle->message('foo'))->toBe('{$one} and {$two}');

    expect($errors = $bundle->popErrors())->toHaveCount(2);
    expect($errors[0])->toBeException(ReferenceException::class, 'Unknown variable: $one.');
    expect($errors[1])->toBeException(ReferenceException::class, 'Unknown variable: $two.');
});

test('errors are thrown in strict mode', function () {
    (new FluentBundle('en-US', strict: true))
        ->addRaw('foo = { $one } and { $two }')
        ->message('foo');
})->throws(ReferenceException::class, 'Unknown variable: $one.');
