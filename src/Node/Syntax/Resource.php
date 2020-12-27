<?php

namespace Major\Fluent\Node\Syntax;

use Major\Fluent\Node\Syntax\Entries\Entry;

final class Resource extends SyntaxNode
{
    public function __construct(
        /** @var array<Entry|Junk> */
        public array $body = [],
    ) { }
}


