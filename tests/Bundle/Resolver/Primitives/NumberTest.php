<?php

use Major\Fluent\Bundle\FluentBundle;

$bundle = (new FluentBundle('en-US', strict: true, useIsolating: false))
    ->addFtl(<<<'ftl'
    one = { 1 }

    select = { 1 ->
       *[0] Zero
        [1] One
    }
    ftl);

it('can be used in a placeable')
    ->expect($bundle->message('one'))->toBe('1');

it('can be used as a selector')
    ->expect($bundle->message('select'))->toBe('One');
