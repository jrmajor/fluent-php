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
        public string $minusSign,
        public string $percentSign,
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
