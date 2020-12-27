<?php

namespace Major\Fluent\Node\Syntax;

use Major\Fluent\Node\Syntax\Expressions\Literals\NumberLiteral;
use Major\Fluent\Node\Syntax\Patterns\Pattern;

final class Variant extends SyntaxNode
{
    public function __construct(
        public Identifier|NumberLiteral $key,
        public Pattern $value,
        public bool $default,
    ) { }
}
