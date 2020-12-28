<?php

namespace Major\Fluent\Node\LiteralValues;

final class StringLiteralValue extends LiteralValue
{
    public function __construct(
        public string $value,
    ) { }
}
