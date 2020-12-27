<?php

namespace Major\Fluent\Node\Syntax\Expressions;

use Major\Fluent\Node\Syntax\CallArguments;
use Major\Fluent\Node\Syntax\Identifier;

final class FunctionReference extends Expression
{
    public function __construct(
        public Identifier $id,
        public CallArguments $arguments,
    ) { }
}
