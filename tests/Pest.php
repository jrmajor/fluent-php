<?php

namespace App\Tests;

use Major\Fluent\Node\LiteralValues\LiteralValue;
use Major\Fluent\Parser\FluentParser;
use Major\Fluent\Tests\TestCase;

uses(TestCase::class)->in(__DIR__);

function parseLiteral(string $input): LiteralValue
{
  $ast = (new FluentParser())->parseEntry($input);

  $expression = $ast->value->elements[0]->expression;

  return $expression->parse();
}

expect()->extend('toBeException', function (string $class, string $message) {
    $this->toBeInstanceOf($class);

    expect($this->value->getMessage())->toBe($message);

    return $this;
});

expect()->extend('toHaveError', function (string $class, string $message) {
    $this->toHaveCount(1);

    expect($this->value[0])->toBeException($class, $message);

    return $this;
});
