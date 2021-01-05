<?php

namespace Major\Fluent\Bundle\Types;

use Stringable;

abstract class FluentType implements Stringable
{
    public function value(): mixed
    {
        /** @phpstan-ignore-next-line  */
        return $this->value;
    }
}
