<?php

namespace Major\Fluent\Node;

final class Span extends BaseNode
{
    public function __construct(
        public int $start,
        public int $end,
    ) { }
}
