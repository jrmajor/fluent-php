<?php

namespace Major\Fluent\Formatters\Number\Locale;

/**
 * @internal
 */
final class Locale
{
    public string $code;

    public function __construct(
        public string $name,
        public string $system = 'latn',
        public string $decimal = '#,##0.###',
        public string $percent = '#,##0%',
        public string $currency = "#,##0.00\u{A0}¤",
        public int $grouping = 1,
        /** @var array{string, string, string, string} */
        public array $symbols = ['.', ',', '-', '%'],
        /** @var array<string, string> */
        public array $unitPatterns = [],
    ) {
        $path = debug_backtrace()[0]['file'];

        /** @psalm-suppress PossiblyFalseOperand */
        $this->code = substr($path, strrpos($path, '/') + 1, -4);
    }

    public function symbol(string $symbol): string
    {
        return array_combine(['.', ',', '-', '%'], $this->symbols)[$symbol] ?? $symbol;
    }

    public function unitPattern(string $plural): string
    {
        return $this->unitPatterns[$plural] ?? '{0} {1}';
    }
}
