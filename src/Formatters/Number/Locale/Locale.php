<?php

namespace Major\Fluent\Formatters\Number\Locale;

/**
 * @internal
 */
final class Locale
{
    public function __construct(
        public readonly string $system = 'latn',
        public readonly string $decimal = '#,##0.###',
        public readonly string $percent = '#,##0%',
        public readonly string $currency = '¤#,##0.00',
        public readonly int $grouping = 1,
        /** @var array{string, string, string, string} */
        public readonly array $symbols = ['.', ',', '-', '%'],
        /** @var array<string, string> */
        public readonly array $unitPatterns = [],
    ) { }

    public function symbol(string $symbol): string
    {
        return array_combine(['.', ',', '-', '%'], $this->symbols)[$symbol] ?? $symbol;
    }

    public function unitPattern(string $plural): string
    {
        return $this->unitPatterns[$plural] ?? '{0} {1}';
    }

    public function isIdentical(self $other): bool
    {
        return $this->system === $other->system
            && $this->decimal === $other->decimal
            && $this->percent === $other->percent
            && $this->currency === $other->currency
            && $this->grouping === $other->grouping
            && $this->symbols === $other->symbols
            && $this->unitPatterns === $other->unitPatterns;
    }
}
