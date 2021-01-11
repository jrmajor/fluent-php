<?php

use Major\Fluent\Exceptions\ParserException;
use Major\Fluent\Parser\FluentParser;

it('ignores syntax errors by default', function () {
    (new FluentParser())->parse('syntax error');
})->expect((bool) 'error has not been thrown')->toBeTrue();

it('throws syntax errors in strict mode', function () {
    (new FluentParser(true))->parse('syntax error');
})->throws(ParserException::class, 'Expected token: "=" somewhere in "syntax error"');
