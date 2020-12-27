<?php

namespace Major\Fluent\Node\Syntax\Expressions;

use Major\Fluent\Node\Syntax\Identifier;

final class MessageReference extends Expression
{
    public function __construct(
        public Identifier $id,
        public ?Identifier $attribute = null,
    ) { }
}
