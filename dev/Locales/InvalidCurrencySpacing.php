<?php

namespace Major\Fluent\Dev\Locales;

use Exception;

final class InvalidCurrencySpacing extends Exception
{
    public function __construct(string $locale, string $type, string $field)
    {
        parent::__construct("currencySpacing.{$type}.{$field} data for {$locale} contains unexpected value.");
    }
}
