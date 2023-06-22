<?php

namespace Major\Fluent\Formatters\Number\Locale;

/**
 * @internal
 */
final class Unit
{
    public function __construct(
        readonly ?array $long = null,
        readonly ?array $short = null,
        readonly ?array $narrow = null,
    ) { }

    public function isIdentical(self $other): bool
    {
        return $this->long === $other->long
            && $this->short === $other->short
            && $this->narrow === $other->narrow;
    }
}
