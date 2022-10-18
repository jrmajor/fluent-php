<?php

namespace Major\Fluent\Dev\Helpers;

use Psl\File;
use Psl\Filesystem;

final class LocaleFiles
{
    public static function prepareDirectory(string $dir): void
    {
        $dir = self::path($dir);

        Filesystem\delete_directory($dir, true);
        Filesystem\create_directory($dir);
    }

    public static function write(string $type, string $locale, string $content): void
    {
        File\write(self::path("{$type}/{$locale}.php"), $content, File\WriteMode::MUST_CREATE);
    }

    public static function read(string $type, string $locale): string
    {
        return File\read(self::path("{$type}/{$locale}.php"));
    }

    public static function delete(string $type, string $locale): void
    {
        Filesystem\delete_file(self::path("{$type}/{$locale}.php"));
    }

    /**
     * @return non-empty-string
     */
    private static function path(string $path): string
    {
        return __DIR__ . "/../../locales/{$path}";
    }
}
