<?php

namespace Major\Fluent\Node\Syntax\Expressions\Literals;

use Major\Fluent\Node\Syntax\Expressions\Expression;
use Major\Fluent\Node\LiteralValues\LiteralValue;

abstract class Literal extends Expression {
    public function __construct(
        public string $value,
    ) { }

    abstract function parse(): LiteralValue;
}
