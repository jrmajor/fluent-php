<?php

namespace Major\Fluent\Node\Syntax\Expressions\Literals;

use Major\Fluent\Node\LiteralValues\NumberLiteralValue;

final class NumberLiteral extends Literal
{
    public function parse(): NumberLiteralValue
    {
        $value = (float) $this->value;

        $decimalPosition = mb_strpos($this->value, '.');

        $precision = is_int($decimalPosition)
            ? mb_strlen($this->value) - $decimalPosition - 1
            : 0;

        return new NumberLiteralValue($value, $precision);
    }
}
