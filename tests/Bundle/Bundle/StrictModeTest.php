<?php

use Major\Fluent\Bundle\FluentBundle;
use Major\Fluent\Exceptions\ParserException;

it('ignores syntax errors by default', function () {
    (new FluentBundle('en-US'))->addRaw('syntax error');

    expect((bool) 'error has not been thrown')->toBeTrue();
});

it('throws syntax errors in strict mode', function () {
    (new FluentBundle('en-US', strict: true))->addRaw('syntax error');
})->throws(ParserException::class, 'Expected token: "="');
