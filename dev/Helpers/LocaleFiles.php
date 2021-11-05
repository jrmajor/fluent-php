<?php

namespace Major\Fluent\Dev\Helpers;

use Safe as s;

final class LocaleFiles
{
    public static function path(string $path): string
    {
        return __DIR__ . "/../../locales/{$path}";
    }

    public static function prepareDirectory(string $dir): void
    {
        if (! is_dir(self::path($dir))) {
            s\mkdir(self::path($dir), recursive: true);

            return;
        }

        $files = s\glob(self::path($dir) . '/*');

        foreach ($files as $file) {
            s\unlink($file);
        }
    }

    public static function store(string $type, string $locale, string $content): void
    {
        s\file_put_contents(self::path("{$type}/{$locale}.php"), $content);
    }
}
