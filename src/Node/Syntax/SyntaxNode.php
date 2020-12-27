<?php

namespace Major\Fluent\Node\Syntax;

use Major\Fluent\Node\BaseNode;
use Major\Fluent\Node\Span;

abstract class SyntaxNode extends BaseNode
{
    public ?Span $span = null;

    public function addSpan(int $start, int $end): static
    {
        $this->span = new Span($start, $end);

        return $this;
    }
}
