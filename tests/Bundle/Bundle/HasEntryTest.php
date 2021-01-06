<?php

use Major\Fluent\Bundle\FluentBundle;

$bundle = (new FluentBundle('en-US'))
    ->addRaw(<<<'ftl'
    foo = Foo
    -bar = Term

    # ERROR No value.
    err1 =
    # ERROR Broken value.
    err2 = {}
    # ERROR No attribute value.
    err3 =
        .attr =
    # ERROR Broken attribute value.
    err4 =
        .attr1 = Attr
        .attr2 = {}

    # ERROR No value.
    -err5 =
    # ERROR Broken value.
    -err6 = {}
    # ERROR No attribute value.
    -err7 =
        .attr =
    # ERROR Broken attribute value.
    -err8 =
        .attr1 = Attr
        .attr2 = {}
    ftl);

it('returns true for existing messages', function () use ($bundle) {
    expect($bundle->hasMessage('foo'))->toBeTrue();
});

it('returns true for existing terms', function () use ($bundle) {
    expect($bundle->hasTerm('bar'))->toBeTrue();
});

it('returns false for missing messages', function () use ($bundle) {
    expect($bundle->hasMessage('bar'))->toBeFalse();
});

it('returns false for missing terms', function () use ($bundle) {
    expect($bundle->hasTerm('foo'))->toBeFalse();
});

it('returns false for broken messages', function () use ($bundle) {
    expect($bundle->hasMessage('err1'))->toBeFalse();
    expect($bundle->hasMessage('err2'))->toBeFalse();
    expect($bundle->hasMessage('err3'))->toBeFalse();
    expect($bundle->hasMessage('err4'))->toBeFalse();
});

it('returns false for broken terms', function () use ($bundle) {
    expect($bundle->hasTerm('err5'))->toBeFalse();
    expect($bundle->hasTerm('err6'))->toBeFalse();
    expect($bundle->hasTerm('err7'))->toBeFalse();
    expect($bundle->hasTerm('err8'))->toBeFalse();
});
