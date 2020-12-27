<?php

namespace Major\Fluent\Node\Syntax;

use Major\Fluent\Node\Syntax\Expressions\Literals\Literal;

final class NamedArgument extends SyntaxNode
{
    public function __construct(
        public Identifier $name,
        public Literal $value,
    ) { }
}
