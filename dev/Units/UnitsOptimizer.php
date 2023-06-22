<?php

namespace Major\Fluent\Dev\Units;

use Major\Fluent\Formatters\Number\Locale\Unit;
use Psl\Dict;

final class UnitsOptimizer
{
    public function __construct(
        /** @var array<string, Unit> */
        private array $und,
    ) { }

    /**
     * @param array<string, Unit> $region
     * @param array<string, Unit> $base
     *
     * @return array<string, Unit>
     */
    public function optimize(array $region, array $base = []): array
    {
        $comp = function (string $name, Unit $u) use ($base): bool {
            $base = $base[$name] ?? $this->und[$name];

            return ! $base->isIdentical($u);
        };

        return Dict\filter_with_key($region, $comp);
    }
}
