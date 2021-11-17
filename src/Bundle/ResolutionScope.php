<?php

namespace Major\Fluent\Bundle;

use Major\Fluent\Node\Syntax\NamedArgument;
use Major\Fluent\Node\Syntax\Patterns\Pattern;
use WeakMap;

/**
 * @internal
 */
final class ResolutionScope
{
    /** @var WeakMap<Pattern, true> */
    public WeakMap $dirty;

    /** @var NamedArgument[] */
    public ?array $parameters = null;

    public function __construct(
        /** @var mixed[] */
        public array $arguments,
    ) {
        /** @psalm-suppress PropertyTypeCoercion */
        $this->dirty = new WeakMap();
    }
}
