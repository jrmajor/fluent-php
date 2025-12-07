<?php

namespace Major\Fluent\Dev\Helpers;

use InvalidArgumentException;
use Psl\Dict;
use Psl\File;
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

        /** @phpstan-ignore return.type */
        return $regions;
    }

    public static function get(string $package, string $locale, string $key): mixed
    {
        if (! str_contains($key, '.')) {
            throw new InvalidArgumentException('Key should be in a dot notation.');
        }

        [$filename, $keys] = explode('.', $key, 2);

        $path = self::path($package, "{$locale}/{$filename}.json");

        $data = Json\decode(File\read($path));

        $path = '';

        foreach (Str\Byte\split($keys, '.') as $key) {
            $path = $path == '' ? $key : "{$path}.{$key}";

            if (! is_array($data)) {
                throw new InvalidArgumentException(sprintf('Can not acces key "%s" on a %s.', $key, gettype($data)));
            }

            if ($key !== '*') {
                if (! array_key_exists($key, $data)) {
                    throw new InvalidArgumentException(sprintf('There is nothing at path %s.', $path));
                }

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

    /**
     * @return non-empty-string
     */
    private static function path(string $package, string $path = ''): string
    {
        $path = "node_modules/cldr-{$package}-modern/main/{$path}";

        /** @var non-empty-string */
        return Str\Byte\trim_right(__DIR__ . "/../../{$path}", '/');
    }
}
