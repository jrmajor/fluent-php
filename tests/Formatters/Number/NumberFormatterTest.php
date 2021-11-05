<?php

namespace Major\Fluent\Tests\Formatters\Number;

use Major\Fluent\Formatters\Number\NumberFormatter;
use Major\Fluent\Formatters\Number\Options;
use Major\Fluent\Tests\TestCase;

abstract class NumberFormatterTest extends TestCase
{
    public static function assertNumberFormat(
        string $locale,
        int|float $number,
        array $options = [],
    ): void {
        $jsonOptions = json_encode($options);

        self::assertEqualsNodeOutput(
            (new NumberFormatter($locale))->format($number, new Options(...$options)),
            "new Intl.NumberFormat('{$locale}', {$jsonOptions}).format({$number})",
            "Failed asserting that formatting of {$number} for {$locale} with {$jsonOptions} is correct.",
        );
    }
}