<?php

use function App\Tests\parseLiteral;

it('can parse integers', function () {
    expect(parseLiteral('x = {0}'))
        ->toHaveProperty('value', 0.0)
        ->toHaveProperty('precision', 0);

    expect(parseLiteral('x = {1}'))
        ->toHaveProperty('value', 1.0)
        ->toHaveProperty('precision', 0);

    expect(parseLiteral('x = {-1}'))
        ->toHaveProperty('value', -1.0)
        ->toHaveProperty('precision', 0);

    expect(parseLiteral('x = {-0}'))
        ->toHaveProperty('value', 0.0)
        ->toHaveProperty('precision', 0);
});

it('can parse padded integers', function () {
    expect(parseLiteral('x = {01}'))
        ->toHaveProperty('value', 1.0)
        ->toHaveProperty('precision', 0);

    expect(parseLiteral('x = {-01}'))
        ->toHaveProperty('value', -1.0)
        ->toHaveProperty('precision', 0);

    expect(parseLiteral('x = {00}'))
        ->toHaveProperty('value', 0.0)
        ->toHaveProperty('precision', 0);

    expect(parseLiteral('x = {-00}'))
        ->toHaveProperty('value', 0.0)
        ->toHaveProperty('precision', 0);
});

it('can parse positive floats', function () {
    expect(parseLiteral('x = {0.0}'))
        ->toHaveProperty('value', 0.0)
        ->toHaveProperty('precision', 1);

    expect(parseLiteral('x = {0.01}'))
        ->toHaveProperty('value', 0.01)
        ->toHaveProperty('precision', 2);

    expect(parseLiteral('x = {1.03}'))
        ->toHaveProperty('value', 1.03)
        ->toHaveProperty('precision', 2);

    expect(parseLiteral('x = {1.000}'))
        ->toHaveProperty('value', 1.0)
        ->toHaveProperty('precision', 3);
});

it('can parse negative floats', function () {
    expect(parseLiteral('x = {-0.01}'))
        ->toHaveProperty('value', -0.01)
        ->toHaveProperty('precision', 2);

    expect(parseLiteral('x = {-1.03}'))
        ->toHaveProperty('value', -1.03)
        ->toHaveProperty('precision', 2);

    expect(parseLiteral('x = {-0.0}'))
        ->toHaveProperty('value', 0.0)
        ->toHaveProperty('precision', 1);

    expect(parseLiteral('x = {-1.000}'))
        ->toHaveProperty('value', -1.0)
        ->toHaveProperty('precision', 3);
});

it('can parse padded floats', function () {
    expect(parseLiteral('x = {01.03}'))
        ->toHaveProperty('value', 1.03)
        ->toHaveProperty('precision', 2);

    expect(parseLiteral('x = {1.0300}'))
        ->toHaveProperty('value', 1.03)
        ->toHaveProperty('precision', 4);

    expect(parseLiteral('x = {01.0300}'))
        ->toHaveProperty('value', 1.03)
        ->toHaveProperty('precision', 4);

    expect(parseLiteral('x = {-01.03}'))
        ->toHaveProperty('value', -1.03)
        ->toHaveProperty('precision', 2);

    expect(parseLiteral('x = {-1.0300}'))
        ->toHaveProperty('value', -1.03)
        ->toHaveProperty('precision', 4);

    expect(parseLiteral('x = {-01.0300}'))
        ->toHaveProperty('value', -1.03)
        ->toHaveProperty('precision', 4);
});
