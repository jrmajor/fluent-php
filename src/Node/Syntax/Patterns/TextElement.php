<?php

namespace Major\Fluent\Node\Syntax\Patterns;

final class TextElement extends PatternElement
{
    public function __construct(
        public string $value,
    ) { }
}
