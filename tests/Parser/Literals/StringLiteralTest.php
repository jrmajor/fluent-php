<?php

use function App\Tests\parseLiteral;

it('can parse string literal with no escape sequences', function () {
    expect(parseLiteral('x = {"abc"}'))
        ->toHaveProperty('value', 'abc');
});

it('properly escapes backslash and double quote', function () {
    expect(parseLiteral('x = {"\\\\"}'))
        ->toHaveProperty('value', '\\');

    expect(parseLiteral('x = {"\\""}'))
        ->toHaveProperty('value', '"');

    expect(parseLiteral('x = {"\\\\\\""}'))
        ->toHaveProperty('value', '\\"');
});

it('can parse unicode escapes', function () {
    expect(parseLiteral('x = {"\\u0041"}'))
        ->toHaveProperty('value', 'A');

    expect(parseLiteral('x = {"\\\\u0041"}'))
        ->toHaveProperty('value', "\\u0041");

    expect(parseLiteral('x = {"\\U01F602"}'))
        ->toHaveProperty('value', "😂");

    expect(parseLiteral('x = {"\\\\U01F602"}'))
        ->toHaveProperty('value', "\\U01F602");
});

test('trailing zeroes are not part unicode escapes', function () {
    expect(parseLiteral('x = {"\\u004100"}'))
        ->toHaveProperty('value', 'A00');

    expect(parseLiteral('x = {"\\U01F60200"}'))
        ->toHaveProperty('value', '😂00');
});

it('properly parses literal braces', function () {
    expect(parseLiteral('x = {"{"}'))
        ->toHaveProperty('value', '{');

    expect(parseLiteral('x = {"}"}'))
        ->toHaveProperty('value', '}');
});
