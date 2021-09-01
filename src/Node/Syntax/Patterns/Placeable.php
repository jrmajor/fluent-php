<?php

namespace Major\Fluent\Node\Syntax\Patterns;

use Major\Fluent\Node\Syntax\Expressions\Expression;

final class Placeable extends PatternElement
{
    public function __construct(
        public Expression|self $expression,
    ) { }
}
