<?php

namespace Major\Fluent\Tests\Formatters\Number;

use Major\Fluent\Formatters\Number\NumberFormatter;
use Major\Fluent\Formatters\Number\Options;
use Major\Fluent\Tests\TestCase;

abstract class NumberFormatterTestCase extends TestCase
{
    /**
     * @param array<string, mixed> $options
     */
    public static function assertNumberFormat(
        string $locale, int|float $number, array $options = [],
    ): void {
        $jsonOptions = json_encode($options);

        self::assertEqualsNodeOutput(
            "new Intl.NumberFormat('{$locale}', {$jsonOptions}).format({$number})",
            (new NumberFormatter($locale))->format($number, new Options(...$options)),
            "Failed asserting that formatting of {$number} for {$locale} with {$jsonOptions} is correct.",
        );
    }
}
