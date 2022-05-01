<?php

namespace Major\Fluent\Dev\Helpers;

use InvalidArgumentException;
use Psl\Dict;
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
        $locales = Vec\map($locales, fn ($l) => Filesystem\get_filename($l));

        return Vec\sort($locales);
    }

    /**
     * @return array<string, list<string>> List of regions grouped by language locale.
     */
    public static function regions(string $package): array
    {
        $regions = Dict\group_by(
            self::locales($package),
            fn (string $locale) => Str\before($locale, '-') ?? $locale,
        );

        $regions = Dict\map_with_key($regions, function (string $lang, array $c) {
            return Vec\filter($c, fn (string $region) => $region !== $lang);
        });

        unset($regions['und']);

        return $regions;
    }

    /**
     * @return array<mixed>
     */
    public static function get(string $package, string $locale, string $key): array
    {
        [$filename, $keys] = explode('.', $key, 2);

        $path = self::path($package, "{$locale}/{$filename}.json");

        $data = Json\decode(Filesystem\read_file($path));

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
