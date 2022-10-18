<?php

namespace Major\Fluent\Node\Syntax\Expressions;

use Major\Fluent\Node\Syntax\Variant;

final class SelectExpression extends Expression
{
    public function __construct(
        public Expression $selector,
        /** @var list<Variant> */
        public array $variants,
    ) { }
}
