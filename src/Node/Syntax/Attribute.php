<?php

namespace Major\Fluent\Node\Syntax;

use Major\Fluent\Node\Syntax\Patterns\Pattern;

final class Attribute extends SyntaxNode
{
    public function __construct(
        public Identifier $id,
        public Pattern $value,
    ) { }
}
