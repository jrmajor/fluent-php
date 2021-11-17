<?php

namespace Major\Fluent\Node;

abstract class BaseNode
{
    public function getType(): string
    {
        /** @var positive-int $position */
        $position = strrpos(static::class, '\\');

        return substr(static::class, $position + 1);
    }
}
