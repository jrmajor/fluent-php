<?php

namespace Major\Fluent\Dev\Helpers;

use InvalidArgumentException;
use Psl\Filesystem;
use Psl\Iter;
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

        foreach (Str\Byte\split($keys, '.') as $key) {
            if ($key !== '*') {
                $data = $data[$key];

                continue;
            }

            if (Iter\count($data) !== 1) {
                throw new InvalidArgumentException('Can not use wildcard if array contains more than one element.');
            }

            $data = Iter\first($data);
        }

        return $data;
    }

    private static function path(string $package, string $path = ''): string
    {
        $path = "node_modules/cldr-{$package}-modern/main/{$path}";

        return Str\Byte\trim_right(__DIR__ . "/../../{$path}", '/');
    }
}
