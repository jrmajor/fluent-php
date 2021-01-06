<?php

use Major\Fluent\Bundle\FluentBundle;
use Major\Fluent\Exceptions\Bundle\MessageExistsException;
use Major\Fluent\Exceptions\Bundle\TermExistsException;

it('throws an error when allowOverrides is false by default (message)', function () {
    (new FluentBundle('en-US', allowOverrides: false))
        ->addRaw('key = Foo')
        ->addRaw('key = Bar');
})->throws(
    MessageExistsException::class,
    'Attempt to override an existing message: key',
);

it('throws an error when allowOverrides is false (message)', function () {
    (new FluentBundle('en-US', allowOverrides: true))
        ->addRaw('key = Foo')
        ->addRaw('key = Bar', allowOverrides: false);
})->throws(
    MessageExistsException::class,
    'Attempt to override an existing message: key',
);

it('adds message when allowOverrides is true by default', function () {
    $bundle = (new FluentBundle('en-US', allowOverrides: true))
        ->addRaw('key = Foo')
        ->addRaw('key = Bar');

    expect($bundle->message('key'))->toBe('Bar');
});

it('adds message when allowOverrides is true', function () {
    $bundle = (new FluentBundle('en-US', allowOverrides: false))
        ->addRaw('key = Foo')
        ->addRaw('key = Bar', allowOverrides: true);

    expect($bundle->message('key'))->toBe('Bar');
});

it('throws an error when allowOverrides is false by default (term)', function () {
    (new FluentBundle('en-US', allowOverrides: false))
        ->addRaw('-key = Foo')
        ->addRaw('-key = Bar');
})->throws(
    TermExistsException::class,
    'Attempt to override an existing term: key',
);

it('throws an error when allowOverrides is false (term)', function () {
    (new FluentBundle('en-US', allowOverrides: true))
        ->addRaw('-key = Foo')
        ->addRaw('-key = Bar', allowOverrides: false);
})->throws(
    TermExistsException::class,
    'Attempt to override an existing term: key',
);

it('adds term when allowOverrides is true by default', function () {
    $bundle = (new FluentBundle('en-US', allowOverrides: true))
        ->addRaw('foo = { -key }')
        ->addRaw('-key = Foo')
        ->addRaw('-key = Bar');

    // todo expect($bundle->message('foo'))->toBe('Bar');
});

it('adds term when allowOverrides is true', function () {
    $bundle = (new FluentBundle('en-US', allowOverrides: false))
        ->addRaw('foo = { -key }')
        ->addRaw('-key = Foo')
        ->addRaw('-key = Bar', allowOverrides: true);

    // todo expect($bundle->message('foo'))->toBe('Bar');
});
