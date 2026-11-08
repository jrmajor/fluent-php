<?php

namespace Major\Fluent\Node\Syntax;

use Major\Fluent\Node\Syntax\Expressions\Expression;

final class CallArguments extends SyntaxNode
{
    public function __construct(
        /** @var list<Expression> */
        public array $positional = [],
        /** @var list<NamedArgument> */
        public array $named = [],
    ) { }

    public function getArgument(string $name): ?NamedArgument
    {
        return array_find($this->named, fn (NamedArgument $a) => $a->name->name === $name);
    }
}
