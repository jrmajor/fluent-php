<?php

use Major\Fluent\Node\Syntax\Expressions\Literals\StringLiteral;
use Major\Fluent\Node\Syntax\Identifier;

test('getType() method works', function () {
    $identifier = new Identifier('name');
    $stringLiteral = new StringLiteral('name');

    expect($identifier->getType())->toBe('Identifier');
    expect($stringLiteral->getType())->toBe('StringLiteral');
});
