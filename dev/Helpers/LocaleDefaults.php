<?php

namespace Major\Fluent\Dev\Helpers;

use Major\Fluent\Formatters\Number\Locale\Locale;
use Psl\Iter;
use ReflectionClass;
use ReflectionParameter;

final class LocaleDefaults
{
    /**
     * @psalm-suppress PossiblyNullReference
     */
    public static function for(string $property): mixed
    {
        return Iter\search(
            (new ReflectionClass(Locale::class))->getConstructor()->getParameters(),
            fn (ReflectionParameter $p): bool => $p->getName() === $property,
        )->getDefaultValue();
    }
}
