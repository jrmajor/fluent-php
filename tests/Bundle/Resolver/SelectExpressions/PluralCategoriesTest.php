<?php

use Major\Fluent\Bundle\FluentBundle;

$bundle = (new FluentBundle('en-US', strict: true, useIsolating: false))
    ->addFtl(<<<'ftl'
        matching = { $selector ->
            [one] A
           *[other] B
        }

        non-matching = { $selector ->
            [one] A
           *[default] D
        }
        ftl);

it('returns variant for matching number selector')
    ->expect($bundle->message('matching', selector: 1))->toBe('A');

it('returns variant for matching string selector')
    ->expect($bundle->message('matching', selector: 'one'))->toBe('A');

it('falls back to default variant for non-matching number selector')
    ->expect($bundle->message('non-matching', selector: 2))->toBe('D');

it('falls back to default variant for non-matching string selector')
    ->expect($bundle->message('non-matching', selector: 'other'))->toBe('D');

$bundle = (new FluentBundle('en-EN', strict: true, useIsolating: false))
    ->addFtl(<<<'ftl'
        msg = { $arg ->
            [one] example
           *[other] examples
        }
        ftl);

test('plural categories in english')
    ->expect($bundle->message('msg', arg: 1))->toBe('example')
    ->and($bundle->message('msg', arg: 2))->toBe('examples')
    ->and($bundle->message('msg', arg: 5))->toBe('examples')
    ->and($bundle->message('msg', arg: 1.1))->toBe('examples')
    ->and($bundle->message('msg', arg: 2.5))->toBe('examples');

$bundle = (new FluentBundle('pl-PL', strict: true, useIsolating: false))
    ->addFtl(<<<'ftl'
        msg = { $arg ->
            [one] przykład
            [few] przykłady
            [many] przykładów
           *[other] przykładu
        }
        ftl);

test('plural categories in polish')
    ->expect($bundle->message('msg', arg: 1))->toBe('przykład')
    ->and($bundle->message('msg', arg: 2))->toBe('przykłady')
    ->and($bundle->message('msg', arg: 3))->toBe('przykłady')
    ->and($bundle->message('msg', arg: 4))->toBe('przykłady')
    ->and($bundle->message('msg', arg: 5))->toBe('przykładów')
    ->and($bundle->message('msg', arg: 6))->toBe('przykładów')
    ->and($bundle->message('msg', arg: 11))->toBe('przykładów')
    ->and($bundle->message('msg', arg: 12))->toBe('przykładów')
    ->and($bundle->message('msg', arg: 14))->toBe('przykładów')
    ->and($bundle->message('msg', arg: 21))->toBe('przykładów')
    ->and($bundle->message('msg', arg: 22))->toBe('przykłady')
    ->and($bundle->message('msg', arg: 23))->toBe('przykłady')
    ->and($bundle->message('msg', arg: 25))->toBe('przykładów')
    ->and($bundle->message('msg', arg: 1.1))->toBe('przykładu')
    ->and($bundle->message('msg', arg: 2.5))->toBe('przykładu');
