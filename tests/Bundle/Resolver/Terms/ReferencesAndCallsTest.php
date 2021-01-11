<?php

use Major\Fluent\Bundle\FluentBundle;

$bundle = (new FluentBundle('en-US', strict: true, useIsolating: false))
    ->addFtl(<<<'ftl'
    -bar = Bar
    term-ref = { -bar }
    term-call = { -bar() }
    ftl);

test('terms can be referenced without parens')
    ->expect($bundle->message('term-ref'))->toBe('Bar');

test('terms can be parameterized')
    ->expect($bundle->message('term-call'))->toBe('Bar');
