<?php

namespace Major\Fluent\Tests\Formatters\Number;

use Major\Fluent\Formatters\Number\NumberFormatter;
use Major\Fluent\Formatters\Number\Options;
use Major\Fluent\Tests\TestCase;
use Psl\Json;
use Psl\Type;

/**
 * @psalm-type O = array<string, int|bool|string>
 */
abstract class NumberFormatterTestCase extends TestCase
{
    /**
     * @psalm-suppress InvalidScalarArgument
     *
     * @param O $options
     */
    public static function assertNumberFormat(
        string $locale, int|float $number, array $options = [],
    ): void {
        $options = Type\shape([
            'style' => Type\optional(Type\union(
                Type\literal_scalar('decimal'),
                Type\literal_scalar('currency'),
                Type\literal_scalar('percent'),
            )),
            'useGrouping' => Type\optional(Type\bool()),
            'minimumIntegerDigits' => Type\optional(Type\int()),
            'minimumFractionDigits' => Type\optional(Type\int()),
            'maximumFractionDigits' => Type\optional(Type\int()),
            'minimumSignificantDigits' => Type\optional(Type\int()),
            'maximumSignificantDigits' => Type\optional(Type\int()),
            'currency' => Type\optional(Type\string()),
            'currencyDisplay' => Type\optional(Type\string()),
        ])->coerce($options);

        $jsonOptions = Json\encode($options);

        self::assertEqualsNodeOutput(
            "new Intl.NumberFormat('{$locale}', {$jsonOptions}).format({$number})",
            (new NumberFormatter($locale))->format($number, new Options(...$options)),
            "Failed asserting that formatting of {$number} for {$locale} with {$jsonOptions} is correct.",
        );
    }
}
