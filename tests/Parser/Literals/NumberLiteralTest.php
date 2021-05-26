<?php

use function App\Tests\parseLiteral;

it('can parse integers')
    ->expect(parseLiteral('x = {0}'))->toHaveProperty('value', 0.0)->toHaveProperty('precision', 0)
    ->and(parseLiteral('x = {1}'))->toHaveProperty('value', 1.0)->toHaveProperty('precision', 0)
    ->and(parseLiteral('x = {-1}'))->toHaveProperty('value', -1.0)->toHaveProperty('precision', 0)
    ->and(parseLiteral('x = {-0}'))->toHaveProperty('value', 0.0)->toHaveProperty('precision', 0);

it('can parse padded integers')
    ->expect(parseLiteral('x = {01}'))->toHaveProperty('value', 1.0)->toHaveProperty('precision', 0)
    ->and(parseLiteral('x = {-01}'))->toHaveProperty('value', -1.0)->toHaveProperty('precision', 0)
    ->and(parseLiteral('x = {00}'))->toHaveProperty('value', 0.0)->toHaveProperty('precision', 0)
    ->and(parseLiteral('x = {-00}'))->toHaveProperty('value', 0.0)->toHaveProperty('precision', 0);

it('can parse positive floats')
    ->expect(parseLiteral('x = {0.0}'))->toHaveProperty('value', 0.0)->toHaveProperty('precision', 1)
    ->and(parseLiteral('x = {0.01}'))->toHaveProperty('value', 0.01)->toHaveProperty('precision', 2)
    ->and(parseLiteral('x = {1.03}'))->toHaveProperty('value', 1.03)->toHaveProperty('precision', 2)
    ->and(parseLiteral('x = {1.000}'))->toHaveProperty('value', 1.0)->toHaveProperty('precision', 3);

it('can parse negative floats')
    ->expect(parseLiteral('x = {-0.01}'))->toHaveProperty('value', -0.01)->toHaveProperty('precision', 2)
    ->and(parseLiteral('x = {-1.03}'))->toHaveProperty('value', -1.03)->toHaveProperty('precision', 2)
    ->and(parseLiteral('x = {-0.0}'))->toHaveProperty('value', 0.0)->toHaveProperty('precision', 1)
    ->and(parseLiteral('x = {-1.000}'))->toHaveProperty('value', -1.0)->toHaveProperty('precision', 3);

it('can parse padded floats')
    ->expect(parseLiteral('x = {01.03}'))->toHaveProperty('value', 1.03)->toHaveProperty('precision', 2)
    ->and(parseLiteral('x = {1.0300}'))->toHaveProperty('value', 1.03)->toHaveProperty('precision', 4)
    ->and(parseLiteral('x = {01.0300}'))->toHaveProperty('value', 1.03)->toHaveProperty('precision', 4)
    ->and(parseLiteral('x = {-01.03}'))->toHaveProperty('value', -1.03)->toHaveProperty('precision', 2)
    ->and(parseLiteral('x = {-1.0300}'))->toHaveProperty('value', -1.03)->toHaveProperty('precision', 4)
    ->and(parseLiteral('x = {-01.0300}'))->toHaveProperty('value', -1.03)->toHaveProperty('precision', 4);
