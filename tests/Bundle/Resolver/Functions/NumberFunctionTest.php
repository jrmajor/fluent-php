<?php

use Major\Fluent\Bundle\FluentBundle;

$bundle = (new FluentBundle('en-US', strict: true, useIsolating: false))
    ->addFtl('number = { NUMBER() }');

test('it throws exception', function () use ($bundle) {
    $bundle->message('number');
})->throws(Exception::class, 'NUMBER() function is not implemented.');
