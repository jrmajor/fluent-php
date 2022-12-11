<?php

namespace Major\Fluent\Resolver;

use Major\Fluent\Bundle\Types\FluentNumber;
use Major\PluralRules\PluralRules;
use Stringable;

/**
 * @internal
 */
final class VariantMatcher
{
    public function __construct(
        private string $locale,
    ) { }

    public function match(
        string|Stringable|FluentNumber $selector,
        string|Stringable|FluentNumber $key,
    ): bool {
        if ($key === $selector) {
            return true;
        }

        if (
            $key instanceof FluentNumber
            && $selector instanceof FluentNumber
            && (float) $key->value() === (float) $selector->value()
        ) {
            return true;
        }

        if (
            $selector instanceof FluentNumber
            && $key === PluralRules::select($this->locale, $selector->original())
        ) {
            return true;
        }

        return false;
    }
}
