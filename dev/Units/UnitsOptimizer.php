<?php

namespace Major\Fluent\Dev\Units;

use Major\Fluent\Formatters\Number\Locale\Unit;
use Psl\Dict;

final class UnitsOptimizer
{
    /**
     * @param array<string, Unit> $region
     * @param array<string, Unit> $base
     *
     * @return array<string, Unit>
     */
    public function optimize(array $region, array $base): array
    {
        $comp = function (string $name, Unit $u) use ($base): bool {
            return ! $base[$name]->isIdentical($u);
        };

        return Dict\filter_with_key($region, $comp);
    }
}
