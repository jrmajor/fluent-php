<?php

use Major\Fluent\Bundle\FluentBundle;

$bundle = (new FluentBundle('en-US'))
    ->addFtl(<<<'ftl'
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

it('returns true for existing messages')
    ->expect($bundle->hasMessage('foo'))->toBeTrue();

it('returns true for existing terms')
    ->expect($bundle->hasTerm('bar'))->toBeTrue();

it('returns false for missing messages')
    ->expect($bundle->hasMessage('bar'))->toBeFalse();

it('returns false for missing terms')
    ->expect($bundle->hasTerm('foo'))->toBeFalse();

it('returns false for broken messages')
    ->expect($bundle->hasMessage('err1'))->toBeFalse()
    ->and($bundle->hasMessage('err2'))->toBeFalse()
    ->and($bundle->hasMessage('err3'))->toBeFalse()
    ->and($bundle->hasMessage('err4'))->toBeFalse();

it('returns false for broken terms')
    ->expect($bundle->hasTerm('err5'))->toBeFalse()
    ->and($bundle->hasTerm('err6'))->toBeFalse()
    ->and($bundle->hasTerm('err7'))->toBeFalse()
    ->and($bundle->hasTerm('err8'))->toBeFalse();
