<?php

use function App\Tests\parseLiteral;

it('can parse string literal with no escape sequences')
    ->expect(parseLiteral('x = {"abc"}'))->toHaveProperty('value', 'abc');

it('properly escapes backslash and double quote')
    ->expect(parseLiteral('x = {"\\\\"}'))->toHaveProperty('value', '\\')
    ->and(parseLiteral('x = {"\\""}'))->toHaveProperty('value', '"')
    ->and(parseLiteral('x = {"\\\\\\""}'))->toHaveProperty('value', '\\"');

it('can parse unicode escapes')
    ->expect(parseLiteral('x = {"\\u0041"}'))->toHaveProperty('value', 'A')
    ->and(parseLiteral('x = {"\\\\u0041"}'))->toHaveProperty('value', '\\u0041')
    ->and(parseLiteral('x = {"\\U01F602"}'))->toHaveProperty('value', '😂')
    ->and(parseLiteral('x = {"\\\\U01F602"}'))->toHaveProperty('value', '\\U01F602');

test('trailing zeroes are not part unicode escapes')
    ->expect(parseLiteral('x = {"\\u004100"}'))->toHaveProperty('value', 'A00')
    ->and(parseLiteral('x = {"\\U01F60200"}'))->toHaveProperty('value', '😂00');

it('properly parses literal braces')
    ->expect(parseLiteral('x = {"{"}'))->toHaveProperty('value', '{')
    ->and(parseLiteral('x = {"}"}'))->toHaveProperty('value', '}');
