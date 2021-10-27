<?php

namespace Major\Fluent\Formatters\Number;

/**
 * @internal
 */
final class NumberSymbols
{
    public function __construct(
        public string $decimal,
        public string $group,
        public string $list,
        public string $percentSign,
        public string $plusSign,
        public string $minusSign,
        public string $approximatelySign,
        public string $exponential,
        public string $superscriptingExponent,
        public string $perMille,
        public string $infinity,
        public string $nan,
        public string $timeSeparator,
    ) { }
}
