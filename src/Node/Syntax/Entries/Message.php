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
        /** @var list<Attribute> $attributes */
        public array $attributes = [],
        public ?Comment $comment = null,
    ) { }

    public function getAttribute(string $name): ?Attribute
    {
        foreach ($this->attributes as $attribute) {
            if ($attribute->id->name === $name) {
                return $attribute;
            }
        }

        return null;
    }
}
