<?php

namespace Major\Fluent\Node\Syntax;

final class Identifier extends SyntaxNode
{
    public function __construct(
        public string $name,
    ) { }
}
