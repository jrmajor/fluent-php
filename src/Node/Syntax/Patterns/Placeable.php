<?php

namespace Major\Fluent\Node\Syntax\Patterns;

final class Placeable extends PatternElement
{
    public function __construct(
        public Expression|Placeable $expression,
    ) { }
}
