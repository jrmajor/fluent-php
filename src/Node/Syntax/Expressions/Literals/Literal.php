<?php

namespace Major\Fluent\Node\Syntax\Expressions\Literals;

use Major\Fluent\Node\LiteralValues\LiteralValue;
use Major\Fluent\Node\Syntax\Expressions\Expression;

abstract class Literal extends Expression {
    public function __construct(
        public string $value,
    ) { }

    abstract public function parse(): LiteralValue;
}
