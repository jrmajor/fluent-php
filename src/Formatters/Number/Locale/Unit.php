<?php

namespace Major\Fluent\Formatters\Number\Locale;

/**
 * @internal
 */
final readonly class Unit
{
    /** @var array<string, string> */
    public array $longPlurals;

    /** @var array<string, string> */
    public array $shortPlurals;

    /** @var array<string, string> */
    public array $narrowPlurals;

    /**
     * @param string|array<string, string> $longPlurals
     * @param string|array<string, string> $shortPlurals
     * @param string|array<string, string> $narrowPlurals
     */
    public function __construct(
        string|array $longPlurals,
        string|array $shortPlurals,
        string|array $narrowPlurals,
    ) {
        $this->longPlurals = is_string($longPlurals) ? ['other' => $longPlurals] : $longPlurals;
        $this->shortPlurals = is_string($shortPlurals) ? ['other' => $shortPlurals] : $shortPlurals;
        $this->narrowPlurals = is_string($narrowPlurals) ? ['other' => $narrowPlurals] : $narrowPlurals;
    }

    public function isIdentical(self $other): bool
    {
        return $this->longPlurals === $other->longPlurals
            && $this->shortPlurals === $other->shortPlurals
            && $this->narrowPlurals === $other->narrowPlurals;
    }
}
