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
