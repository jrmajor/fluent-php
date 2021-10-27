<?php

namespace Major\Fluent\Formatters\Number;

use Exception;

final class NumberFormatterException extends Exception
{
    public static function formatting(): self
    {
        return new self('Failed to format the number.');
    }

    public static function unsupportedOption(string $option): self
    {
        return new self("Option {$option} is not supported.");
    }
}
