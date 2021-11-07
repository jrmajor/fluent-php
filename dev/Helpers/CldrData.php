<?php

namespace Major\Fluent\Dev\Helpers;

use Generator;
use Psl\Filesystem;
use Psl\Json;
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
        [$filename, $key] = explode('.', $key, 2);

        $path = self::path($package, "{$locale}/{$filename}.json");

        $data = Json\decode(Filesystem\read_file($path), true);

        return data_get($data, $key);
    }

    private static function path(string $package, string $path = ''): string
    {
        return __DIR__ . "/../../node_modules/cldr-{$package}-modern/main"
            . ($path !== '' ? "/{$path}" : '');
    }
}
