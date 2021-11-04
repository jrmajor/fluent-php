<?php

namespace Major\Fluent\Formatters\Number\Locale;

/**
 * @internal
 */
final class Symbols
{
    public function __construct(
        public string $decimal,
        public string $group,
        public string $percentSign,
        public string $minusSign,
    ) { }

    /**
     * @return array<string, string>
     */
    public function replacements(): array
    {
        return [
            '.' => $this->decimal,
            ',' => $this->group,
            '-' => $this->minusSign,
            '%' => $this->percentSign,
        ];
    }
}
