<?php

namespace Major\Fluent\Formatters\Number\Locale;

/**
 * @internal
 */
final class Currency
{
    public function __construct(
        public string $code,
        public string $symbol,
        public ?string $narrowSymbol = null,
        public ?string $displayName = null,
        /** @var ?array<string, string> */
        public ?array $plurals = null,
        public int $minorUnits = 2,
    ) { }
}
