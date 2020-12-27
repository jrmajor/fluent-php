<?php

namespace Major\Fluent\Node\Syntax;

use Major\Fluent\Node\Syntax\Expressions\Expression;

final class CallArguments extends SyntaxNode
{
    public function __construct(
        /** @var Expression[] */
        public array $positional = [],
        /** @var NamedArgument[] */
        public array $named = [],
    ) { }
}
