<?php

use Major\Fluent\Bundle\FluentBundle;

$bundle = (new FluentBundle('en-US', useIsolating: false))
    ->addRaw(<<<'ftl'
    foo = Foo
    -bar = Bar
    ftl);

it('returns messages')
    ->expect($bundle->message('foo'))->toBe('Foo');

it('returns null for missing messages')
    ->expect($bundle->message('baz'))->toBeNull();

it('returns null for terms')
    ->expect($bundle->message('bar'))->toBeNull();
