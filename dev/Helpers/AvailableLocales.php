<?php

namespace Major\Fluent\Dev\Helpers;

use Generator;
use Symfony\Component\Finder\Finder;

final class AvailableLocales
{
    /**
     * @return Generator<string>
     */
    public static function all(): Generator
    {
        $locales = (new Finder())
            ->in([__DIR__ . '/../../node_modules/cldr-numbers-modern/main'])
            ->directories();

        foreach ($locales as $locale) {
            yield $locale->getFilename();
        }
    }
}
