<?php

use Major\Fluent\Bundle\FluentBundle;

$bundle = (new FluentBundle('en-US', strict: true, useIsolating: false))
    ->addFtl('datetime = { DATETIME() }');

test('it throws exception', function () use ($bundle) {
    $bundle->message('datetime');
})->throws(Exception::class, 'DATETIME() function is not implemented.');
