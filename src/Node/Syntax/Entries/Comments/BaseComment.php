<?php

namespace Major\Fluent\Node\Syntax\Entries\Comments;

use Major\Fluent\Node\Syntax\Entries\Entry;

abstract class BaseComment extends Entry
{
    public function __construct(
        public string $content,
    ) { }
}
