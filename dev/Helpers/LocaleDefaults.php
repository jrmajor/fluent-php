<?php

namespace Major\Fluent\Dev\Helpers;

use Exception;
use InvalidArgumentException;
use Major\Fluent\Formatters\Number\Locale\Locale;
use ReflectionClass;

final class LocaleDefaults
{
    public static function for(string $key): string
    {
        $parameters = (new ReflectionClass(Locale::class))
            ->getConstructor()
            ?->getParameters()
            ?? throw new Exception('Failed to get constructor parameters.');

        return match ($key) {
            'system' => $parameters[1]->getDefaultValue(),
            'decimalPattern' => $parameters[2]->getDefaultValue(),
            'percentPattern' => $parameters[3]->getDefaultValue(),
            'currencyPattern' => $parameters[4]->getDefaultValue(),
            'grouping' => (string) $parameters[5]->getDefaultValue(),
            'symbols' => "['" . implode("', '", $parameters[6]->getDefaultValue()) . "']",
            default => throw new InvalidArgumentException("Property {$key} does not exist."),
        };
    }
}
