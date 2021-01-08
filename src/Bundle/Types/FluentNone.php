<?php

namespace Major\Fluent\Bundle\Types;

class FluentNone extends FluentType
{
    public function __construct(
        protected string $value = '???',
    ) { }

    public function __toString(): string
    {
        return "{{$this->value}}";
    }
}
