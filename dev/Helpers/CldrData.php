<?php

namespace Major\Fluent\Dev\Helpers;

use Generator;
use Safe as s;
use Symfony\Component\Finder\Finder;

final class CldrData
{
    /**
     * @return Generator<string>
     */
    public static function locales(string $package): Generator
    {
        $locales = (new Finder())->in(self::path($package))->directories();

        foreach ($locales as $locale) {
            yield $locale->getFilename();
        }
    }

    /**
     * @return array<mixed>
     */
    public static function get(string $package, string $locale, string $key): array
    {
        $keys = explode('.', $key);

        $path = self::path($package, $locale . '/' . array_shift($keys));

        $data = s\json_decode(s\file_get_contents("{$path}.json"), true);

        foreach ($keys as $key) {
            $data = $data[$key];
        }

        return $data;
    }

    private static function path(string $package, string $path = ''): string
    {
        return __DIR__ . "/../../node_modules/cldr-{$package}-modern/main"
            . ($path !== '' ? "/{$path}" : '');
    }
}
