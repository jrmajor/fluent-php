<?php

namespace Major\Fluent\Node\LiteralValues;

final class NumberLiteralValue extends LiteralValue
{
    public function __construct(
        public float $value,
        public int $precision,
    ) { }
}
