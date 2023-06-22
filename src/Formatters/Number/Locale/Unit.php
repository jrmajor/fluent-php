<?php

namespace Major\Fluent\Formatters\Number\Locale;

/**
 * @internal
 */
final class Unit
{
    public function __construct(
        /** @var array<string, string> */
        readonly array $longPlurals,
        /** @var array<string, string> */
        readonly array $shortPlurals,
        /** @var array<string, string> */
        readonly array $narrowPlurals,
    ) { }

    public function isIdentical(self $other): bool
    {
        return $this->longPlurals === $other->longPlurals
            && $this->shortPlurals === $other->shortPlurals
            && $this->narrowPlurals === $other->narrowPlurals;
    }
}
