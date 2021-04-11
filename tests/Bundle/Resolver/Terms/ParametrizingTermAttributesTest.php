<?php

use Major\Fluent\Bundle\FluentBundle;

$bundle = (new FluentBundle('en-US', strict: true, useIsolating: false))
    ->addFtl(<<<'ftl'
        -ship = Ship
            .gender = { $style ->
               *[traditional] neuter
                [chicago] feminine
            }

        ref-attr = { -ship.gender ->
           *[masculine] He
            [feminine] She
            [neuter] It
        }
        call-attr-no-args = { -ship.gender() ->
           *[masculine] He
            [feminine] She
            [neuter] It
        }
        call-attr-with-expected-arg = { -ship.gender(style: "chicago") ->
           *[masculine] He
            [feminine] She
            [neuter] It
        }
        call-attr-with-other-arg = { -ship.gender(other: 3) ->
           *[masculine] He
            [feminine] She
            [neuter] It
        }
        ftl);

test('not parameterized, no externals')
    ->expect($bundle->message('ref-attr'))->toBe('It');

test('not parameterized but with externals')
    ->expect($bundle->message('ref-attr', style: 'chicago'))->toBe('It');

test('no arguments, no externals')
    ->expect($bundle->message('call-attr-no-args'))->toBe('It');

test('no arguments, but with externals')
    ->expect($bundle->message('call-attr-no-args', style: 'chicago'))->toBe('It');

test('with expected arguments, no externals')
    ->expect($bundle->message('call-attr-with-expected-arg'))->toBe('She');

test('with expected arguments, and with externals')
    ->expect($bundle->message('call-attr-with-expected-arg', style: 'chicago'))->toBe('She');

test('with other arguments, no externals')
    ->expect($bundle->message('call-attr-with-other-arg'))->toBe('It');

test('with other arguments, and with externals')
    ->expect($bundle->message('call-attr-with-other-arg', style: 'chicago'))->toBe('It');
