<?php

namespace Major\Fluent\Formatters\Number\Locale;

/**
 * @internal
 */
final class Locale
{
    public function __construct(
        public string $name,
        public string $system,
        public string $decimalFormat,
        public string $percentFormat,
        public string $currencyFormat,
        public int $minimumGroupingDigits,
        public Symbols $symbols,
    ) { }
}
