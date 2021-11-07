<?php

namespace Major\Fluent\Dev\Helpers;

use Generator;
use Psl\Filesystem;
use Psl\Json;
use Psl\Str;
use Psl\Vec;

final class CldrData
{
    /**
     * @return list<string>
     */
    public static function locales(string $package): array
    {
        $locales = Filesystem\read_directory(self::path($package));

        return Vec\map($locales, fn ($l) => Filesystem\get_filename($l));
    }

    /**
     * @return array<mixed>
     */
    public static function get(string $package, string $locale, string $key): array
    {
        [$filename, $keys] = explode('.', $key, 2);

        $path = self::path($package, "{$locale}/{$filename}.json");

        $data = Json\decode(Filesystem\read_file($path), true);

        foreach (Str\split($keys, '.') as $key) {
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
