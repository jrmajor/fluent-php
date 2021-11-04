<?php

namespace Major\Fluent\Formatters\Number;

use Exception;

final class NumberFormatterException extends Exception
{
    public static function missingCurrency(string $currency): self
    {
        return new self("Currency \"{$currency}\" does not exist.");
    }
}
