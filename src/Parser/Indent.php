<?php

namespace Major\Fluent\Parser;

use Major\Fluent\Node\Span;

/**
 * @internal
 */
final class Indent
{
    public Span $span;

    public function __construct(
        public string $value,
        int $start,
        int $end,
    ) {
        $this->span = new Span($start, $end);
    }

    public function stripCommonIndent(?int $commonIndent): void
    {
        if ((int) $commonIndent === 0) {
            return;
        }

        $this->value = mb_substr($this->value, 0, -$commonIndent);
    }
}
