<?php

namespace Major\Fluent\Dev\Helpers;

use Psl\Dict;
use Psl\Filesystem;
use Psl\Str;
use Psl\Vec;

final class LocaleFiles
{
    public static function prepareDirectory(string $dir): void
    {
        $dir = self::path($dir);

        Filesystem\delete_directory($dir, true);
        Filesystem\create_directory($dir);
    }

    /**
     * @return array<string, list<string>>
     */
    public static function regions(): array
    {
        $files = Filesystem\read_directory(self::path('currencies'));

        $files = Vec\filter($files, fn ($path) => Filesystem\get_extension($path) === 'php');
        $files = Vec\map($files, fn ($path) => Filesystem\get_basename($path, '.php'));
        $files = Dict\group_by($files, fn (string $locale) => Str\before($locale, '-') ?? $locale);
        $files = Dict\map_with_key($files, function (string $lang, array $c) {
            return Vec\values(Vec\filter($c, fn (string $region) => $region !== $lang));
        });

        unset($files['root']);

        return $files;
    }

    public static function write(string $type, string $locale, string $content): void
    {
        Filesystem\write_file(self::path("{$type}/{$locale}.php"), $content);
    }

    public static function read(string $type, string $locale): string
    {
        return Filesystem\read_file(self::path("{$type}/{$locale}.php"));
    }

    public static function delete(string $type, string $locale): void
    {
        Filesystem\delete_file(self::path("{$type}/{$locale}.php"));
    }

    private static function path(string $path): string
    {
        return __DIR__ . "/../../locales/{$path}";
    }
}
