<?php

use Major\Fluent\Bundle\FluentBundle;

$bundle = (new FluentBundle('en-US', strict: true, useIsolating: false))
    ->addFtl(<<<'ftl'
    foo = Foo
    -bar = Bar

    welcome = Welcome
        .guest = Welcome, Guest
        .user = Welcome, { $userName }
    ftl);

it('returns messages')
    ->expect($bundle->message('foo'))->toBe('Foo');

it('returns null for missing messages')
    ->expect($bundle->message('baz'))->toBeNull();

it('returns null for terms')
    ->expect($bundle->message('bar'))->toBeNull();

test('message attributes can be accessed using "dot" notation')
    ->expect($bundle->message('welcome.guest'))->toBe('Welcome, Guest');

it('returns null for missing attributes')
    ->expect($bundle->message('welcome.guest'))->toBe('Welcome, Guest');

it('accepts message arguments as named arguments')
    ->expect($bundle->message('welcome.user', userName: 'John'))->toBe('Welcome, John');

it('accepts message arguments as an associative array')
    ->expect($bundle->message('welcome.user', ['userName' => 'John']))->toBe('Welcome, John');
