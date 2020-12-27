<?php

namespace Major\Fluent\Node;

abstract class BaseNode
{
    public function getType(): string
    {
        $position = strrpos(static::class, '\\');

        return substr(static::class, $position + 1);
    }
}
