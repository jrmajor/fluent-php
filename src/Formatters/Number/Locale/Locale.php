<?php

namespace Major\Fluent\Formatters\Number\Locale;

/**
 * @internal
 */
final class Locale
{
    public function __construct(
        public string $name,
        public string $system = 'latn',
        public string $decimal = '#,##0.###',
        public string $percent = '#,##0%',
        public string $currency = "#,##0.00\u{00A0}¤",
        public int $grouping = 1,
        /** @var array{string, string, string, string} */
        public array $symbols = ['.', ',', '-', '%'],
    ) { }

    /**
     * @return array<string, string>
     */
    public function symbolReplacements(): array
    {
        return array_combine(['.', ',', '-', '%'], $this->symbols);
    }
}
