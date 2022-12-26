<?php

namespace Major\Fluent\Node\Syntax\Expressions;

use Major\Fluent\Exceptions\ShouldNotHappen;
use Major\Fluent\Node\Syntax\Variant;

final class SelectExpression extends Expression
{
    public function __construct(
        public Expression $selector,
        /** @var list<Variant> */
        public array $variants,
    ) { }

    public function getDefaultVariant(): Variant
    {
        foreach ($this->variants as $variant) {
            if ($variant->default) {
                return $variant;
            }
        }

        throw new ShouldNotHappen();
    }
}
