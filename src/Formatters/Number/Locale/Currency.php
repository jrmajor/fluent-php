<?php

namespace Major\Fluent\Formatters\Number\Locale;

/**
 * @internal
 */
final class Currency
{
    public string $name;

    public string $symbol;

    public string $narrow;

    public function __construct(
        public string $code,
        ?string $name = null,
        ?string $symbol = null,
        ?string $narrow = null,
        /** @var ?array<string, string> */
        public ?array $plurals = null,
        public int $minorUnits = 2,
    ) {
        $this->name = $name ?? $code;
        $this->symbol = $symbol ?? $code;
        $this->narrow = $narrow ?? $code;
    }
}
