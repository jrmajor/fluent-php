<?php

use Major\Fluent\Bundle\FluentBundle;

$bundle = (new FluentBundle('en-US', strict: true, useIsolating: false))
    ->addFtl(<<<'ftl'
    -foo = Foo { $arg }

    ref-foo = { -foo }
    call-foo-no-args = { -foo() }
    call-foo-with-expected-arg = { -foo(arg: 1) }
    call-foo-with-other-arg = { -foo(other: 3) }
    ftl);

test('not parameterized, no externals')
    ->expect($bundle->message('ref-foo'))->toBe('Foo {$arg}');

test('not parameterized but with externals')
    ->expect($bundle->message('ref-foo', arg: 1))->toBe('Foo {$arg}');

test('no arguments, no externals')
    ->expect($bundle->message('call-foo-no-args'))->toBe('Foo {$arg}');

test('no arguments, but with externals')
    ->expect($bundle->message('call-foo-no-args', arg: 1))->toBe('Foo {$arg}');

test('with expected arguments, no externals')
    ->expect($bundle->message('call-foo-with-expected-arg'))->toBe('Foo 1');

test('with expected arguments, and with externals')
    ->expect($bundle->message('call-foo-with-expected-arg', arg: 5))->toBe('Foo 1');

test('with other arguments, no externals')
    ->expect($bundle->message('call-foo-with-other-arg'))->toBe('Foo {$arg}');

test('with other arguments, and with externals')
    ->expect($bundle->message('call-foo-with-other-arg', arg: 5))->toBe('Foo {$arg}');
