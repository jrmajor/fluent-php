<?php

namespace Major\Fluent\Node\Syntax\Patterns;

use Major\Fluent\Node\Syntax\SyntaxNode;

final class Pattern extends SyntaxNode
{
    public function __construct(
        /** @var list<PatternElement> */
        public array $elements,
    ) { }
}
