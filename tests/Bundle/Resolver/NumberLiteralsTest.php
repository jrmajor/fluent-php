<?php

use Major\Fluent\Bundle\FluentBundle;

$en = (new FluentBundle('en-US', strict: true))
    ->addFtl(<<<'ftl'
    num-in-placeable = { 332035625.33203 }
    num-in-var = { $number }
    ftl);

$pl = (new FluentBundle('pl', strict: true))
    ->addFtl(<<<'ftl'
    num-in-placeable = { 37824787.37824 }
    num-in-var = { $number }
    ftl);

it('formats numbers in placeables according to current locale')
    ->expect($en->message('num-in-placeable'))->toBe('332,035,625.33203')
    ->and($pl->message('num-in-placeable'))->toBe('37 824 787,37824');

it('formats numbers in variables according to current locale')
    ->expect($en->message('num-in-var', number: 332_035_625.332_03))->toBe('332,035,625.332')
    ->and($pl->message('num-in-var', number: 37_824_787.378_24))->toBe('37 824 787,378');
