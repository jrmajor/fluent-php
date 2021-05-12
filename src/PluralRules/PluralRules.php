<?php

/**
 * Syntax description: http://unicode.org/reports/tr35/tr35-numbers.html#Language_Plural_Rules
 * JSON Rules: https://github.com/unicode-org/cldr-json/blob/master/cldr-json/cldr-core/supplemental/plurals.json
 * Rules reference: https://unicode-org.github.io/cldr-staging/charts/latest/supplemental/language_plural_rules.html
 */

namespace Major\Fluent\PluralRules;

use Locale;
use Major\Fluent\Bundle\Types\FluentNumber;

/**
 * @internal
 */
final class PluralRules
{
    protected static self $cache;

    /** @phpstan-ignore-next-line */
    protected array $rules;

    public static function select(string $language, FluentNumber $number): string
    {
        return (self::$cache ?? new self())->pluralCategory(...func_get_args());
    }

    protected function __construct()
    {
        $this->rules = require __DIR__.'/rules.php';
    }

    protected function pluralCategory(string $language, FluentNumber $number): string
    {
        $locale = Locale::getPrimaryLanguage($language);

        $rules = $this->rules[$locale];

        foreach ($rules as $category => $ors) {
            foreach ($ors as $or) {
                if ($this->matchesAndCondition($or, $number)) {
                    return $category;
                }
            }
        }

        return 'other';
    }

    /**
     * @param array[] $conditions
     */
    protected function matchesAndCondition(array $conditions, FluentNumber $number): bool
    {
        foreach ($conditions as $condition) {
            if (! $this->matchesRelation($condition, $number)) {
                return false;
            }
        }

        return true;
    }

    /**
     * @param mixed[] $relation
     */
    private function matchesRelation(array $relation, FluentNumber $number): bool
    {
        $operand = $this->getOperand($relation['operand'], $number);

        if (! is_null($relation['mod'])) {
            $operand = ((int) $operand ?: 0) % $relation['mod'];
        }

        foreach ($relation['values'] as $value) {
            if ($value['type'] === 'value') {
                if ((string) $operand === $value['value']) {
                    return $relation['equals'] ? true : false;
                }

                continue;
            }

            for ($i = $value['from']; $i <= $value['to']; $i++) {
                if ($operand === $i) {
                    return $relation['equals'] ? true : false;
                }
            }
        }

        return $relation['equals'] ? false : true;
    }

    private function getOperand(string $operand, FluentNumber $number): mixed
    {
        return match ($operand) {
            // absolute value of the source number
            'n' => abs($number->value()),
            // integer digits of n
            'i' => (int) abs($number->value()),
            // number of visible fraction digits in n, with trailing zeros*
            'v' => strlen($this->getOperand('f', $number)),
            // number of visible fraction digits in n, without trailing zeros*
            'w' => strlen($this->getOperand('t', $number)),
            // visible fraction digits in n, with trailing zeros*
            'f' => $this->addTrailingZeroes(
                $this->getOperand('t', $number),
                $number->minimumFractionDigits(),
            ),
            // visible fraction digits in n, without trailing zeros*
            't' => $this->visibleFractionDigits($number),
            // compact decimal exponent value: exponent of the power of 10 used in compact decimal formatting
            'c', 'e' => 0,
        };
    }

    private function addTrailingZeroes(string $value, int $minimumFractionDigits): string
    {
        while (strlen($value) < $minimumFractionDigits) {
            $value .= '0';
        }

        return $value;
    }

    private function visibleFractionDigits(FluentNumber $number): string
    {
        $string = (string) (abs($number->value()) - (int) abs($number->value()));

        return str_contains($string, '.') ? substr($string, 2) : '';
    }
}
