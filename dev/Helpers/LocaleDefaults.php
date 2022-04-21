<?php

namespace Major\Fluent\Dev\Helpers;

use Exception;
use InvalidArgumentException;
use Major\Fluent\Formatters\Number\Locale\Locale;
use ReflectionClass;

final class LocaleDefaults
{
    /**
     * @template T of string
     *
     * @param T $key
     * @psalm-return (T is 'grouping' ? int : (T is 'symbols' ? list<string> : string))
     */
    public static function for(string $key): string|int|array
    {
        $parameters = (new ReflectionClass(Locale::class))
            ->getConstructor()
            ?->getParameters()
            ?? throw new Exception('Failed to get constructor parameters.');

        return match ($key) {
            'system' => $parameters[1]->getDefaultValue(),
            'decimal' => $parameters[2]->getDefaultValue(),
            'percent' => $parameters[3]->getDefaultValue(),
            'currency' => $parameters[4]->getDefaultValue(),
            'grouping' => $parameters[5]->getDefaultValue(),
            'symbols' => $parameters[6]->getDefaultValue(),
            default => throw new InvalidArgumentException("Property {$key} does not exist."),
        };
    }
}
