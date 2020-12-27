<?php

namespace Major\Fluent\Node\Syntax\Entries;

use Major\Fluent\Node\Syntax\Attribute;
use Major\Fluent\Node\Syntax\Entries\Comments\Comment;
use Major\Fluent\Node\Syntax\Identifier;
use Major\Fluent\Node\Syntax\Patterns\Pattern;

final class Message extends Entry
{
    public function __construct(
        public Identifier $id,
        public ?Pattern $value = null,
        /** @var Attribute[] $attributes */
        public array $attributes = [],
        public ?Comment $comment = null,
    ) { }
}
