<?php

namespace Major\Fluent\Dev\Currencies;

use Major\Fluent\Formatters\Number\Locale\Currency;
use Psl\Dict;

final readonly class CurrenciesOptimizer
{
    public function __construct(
        /** @var array<string, Currency> */
        private array $und,
    ) { }

    /**
     * @param array<string, Currency> $region
     * @param array<string, Currency> $base
     *
     * @return array<string, Currency>
     */
    public function optimize(array $region, array $base = []): array
    {
        $comp = function (string $name, Currency $c) use ($base): bool {
            $base = $base[$name] ?? $this->und[$name] ?? new Currency($c->code);

            return ! $base->isIdentical($c);
        };

        return Dict\filter_with_key($region, $comp);
    }
}
