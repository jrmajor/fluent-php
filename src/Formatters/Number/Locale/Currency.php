<?php

namespace Major\Fluent\Formatters\Number\Locale;

/**
 * @internal
 */
final class Currency
{
    public readonly string $name;

    public readonly string $symbol;

    public readonly string $narrow;

    /** @var ?array<string, string> */
    public readonly ?array $plurals;

    /**
     * @param string|array<string, string>|null $plurals
     */
    public function __construct(
        public readonly string $code,
        ?string $name = null,
        ?string $symbol = null,
        ?string $narrow = null,
        string|array|null $plurals = null,
        public readonly int $minorUnits = 2,
    ) {
        $this->name = $name ?? $code;
        $this->symbol = $symbol ?? $code;
        $this->narrow = $narrow ?? $code;

        $this->plurals = is_string($plurals) ? ['other' => $plurals] : $plurals;
    }

    public function isIdentical(self $other): bool
    {
        return $this->code === $other->code
            && $this->name === $other->name
            && $this->symbol === $other->symbol
            && $this->narrow === $other->narrow
            && $this->plurals === $other->plurals
            && $this->minorUnits === $other->minorUnits;
    }
}
