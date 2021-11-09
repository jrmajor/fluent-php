<?php

namespace Major\Fluent\Tests\Bundle\Resolver\Terms;

use Major\Fluent\Bundle\FluentBundle;

$bundle = (new FluentBundle('en-US', strict: true, useIsolating: false))
    ->addFtl(<<<'ftl'
        -foo = Foo { $arg }
        -bar = { -foo }
        -baz = { -foo() }
        -qux = { -foo(arg: 1) }

        ref-bar = { -bar }
        ref-baz = { -baz }
        ref-qux = { -qux }

        call-bar-no-args = { -bar() }
        call-baz-no-args = { -baz() }
        call-qux-no-args = { -qux() }

        call-bar-with-arg = { -bar(arg: 2) }
        call-baz-with-arg = { -baz(arg: 2) }
        call-qux-with-arg = { -qux(arg: 2) }
        call-qux-with-other = { -qux(other: 3) }
        ftl);

test('no parameterization, no parameterization, no externals')
    ->expect($bundle->message('ref-bar'))->toBe('Foo {$arg}');

test('no parameterization, no parameterization, with externals')
    ->expect($bundle->message('ref-bar', arg: 5))->toBe('Foo {$arg}');

test('no parameterization, no arguments, no externals')
    ->expect($bundle->message('ref-baz'))->toBe('Foo {$arg}');

test('no parameterization, no arguments, with externals')
    ->expect($bundle->message('ref-baz', arg: 5))->toBe('Foo {$arg}');

test('no parameterization, with arguments, no externals')
    ->expect($bundle->message('ref-qux'))->toBe('Foo 1');

test('no parameterization, with arguments, with externals')
    ->expect($bundle->message('ref-qux', arg: 5))->toBe('Foo 1');

test('no arguments, no parameterization, no externals')
    ->expect($bundle->message('call-bar-no-args'))->toBe('Foo {$arg}');

test('no arguments, no parameterization, with externals')
    ->expect($bundle->message('call-bar-no-args', arg: 5))->toBe('Foo {$arg}');

test('no arguments, no arguments, no externals')
    ->expect($bundle->message('call-baz-no-args'))->toBe('Foo {$arg}');

test('no arguments, no arguments, with externals')
    ->expect($bundle->message('call-baz-no-args', arg: 5))->toBe('Foo {$arg}');

test('no arguments, with arguments, no externals')
    ->expect($bundle->message('call-qux-no-args'))->toBe('Foo 1');

test('no arguments, with arguments, with externals')
    ->expect($bundle->message('call-qux-no-args', arg: 5))->toBe('Foo 1');

test('with arguments, no parameterization, no externals')
    ->expect($bundle->message('call-bar-with-arg'))->toBe('Foo {$arg}');

test('with arguments, no parameterization, with externals')
    ->expect($bundle->message('call-bar-with-arg', arg: 5))->toBe('Foo {$arg}');

test('with arguments, no arguments, no externals')
    ->expect($bundle->message('call-baz-with-arg'))->toBe('Foo {$arg}');

test('with arguments, no arguments, with externals')
    ->expect($bundle->message('call-baz-with-arg', arg: 5))->toBe('Foo {$arg}');

test('with arguments, with arguments, no externals')
    ->expect($bundle->message('call-qux-with-arg'))->toBe('Foo 1');

test('with arguments, with arguments, with externals')
    ->expect($bundle->message('call-qux-with-arg', arg: 5))->toBe('Foo 1');

test('with unexpected arguments, with arguments, no externals')
    ->expect($bundle->message('call-qux-with-other'))->toBe('Foo 1');

test('with unexpected arguments, with arguments, with externals')
    ->expect($bundle->message('call-qux-with-other', arg: 5))->toBe('Foo 1');
