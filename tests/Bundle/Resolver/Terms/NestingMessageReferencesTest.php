<?php

namespace Major\Fluent\Tests\Bundle\Resolver\Terms;

use Major\Fluent\Bundle\FluentBundle;

$bundle = (new FluentBundle('en-US', strict: true, useIsolating: false))
    ->addFtl(<<<'ftl'
        foo = Foo { $arg }
        -bar = { foo }
        ref-bar = { -bar }
        call-bar = { -bar() }
        call-bar-with-arg = { -bar(arg: 1) }
        ftl);

test('no parameterization, no externals')
    ->expect($bundle->message('ref-bar'))->toBe('Foo {$arg}');

test('no parameterization, but with externals')
    ->expect($bundle->message('ref-bar', arg: 5))->toBe('Foo {$arg}');

test('no arguments, no externals')
    ->expect($bundle->message('call-bar'))->toBe('Foo {$arg}');

test('no arguments, but with externals')
    ->expect($bundle->message('call-bar', arg: 5))->toBe('Foo {$arg}');

test('with arguments, no externals')
    ->expect($bundle->message('call-bar-with-arg'))->toBe('Foo 1');

test('with arguments and with externals')
    ->expect($bundle->message('call-bar-with-arg', arg: 5))->toBe('Foo 1');
