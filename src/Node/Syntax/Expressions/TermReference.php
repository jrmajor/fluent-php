<?php

namespace Major\Fluent\Node\Syntax\Expressions;

use Major\Fluent\Node\Syntax\CallArguments;
use Major\Fluent\Node\Syntax\Identifier;

final class TermReference extends Expression
{
    public function __construct(
        public Identifier $id,
        public ?Identifier $attribute = null,
        public ?CallArguments $arguments = null,
    ) { }
}
