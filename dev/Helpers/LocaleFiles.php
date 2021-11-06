<?php

namespace Major\Fluent\Dev\Helpers;

use Safe as s;
use Symfony\Component\Finder\Finder;

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

    /**
     * @return array<string, string[]>
     */
    public static function regions(): array
    {
        $files = (new Finder())->in(self::path('currencies'))->files();
        $regions = [];

        foreach ($files as $file) {
            if (
                $file->getExtension() !== 'php'
                || ! str_contains($file->getFilename(), '-')
            ) {
                continue;
            }

            $language = explode('-', $file->getFilename())[0];

            $regions[$language] ??= [];
            $regions[$language][] = $file->getBasename('.php');
        }

        return $regions;
    }

    public static function store(string $type, string $locale, string $content): void
    {
        s\file_put_contents(self::path("{$type}/{$locale}.php"), $content);
    }

    public static function read(string $type, string $locale): string
    {
        return s\file_get_contents(self::path("{$type}/{$locale}.php"));
    }

    public static function remove(string $type, string $locale): void
    {
        s\unlink(self::path("{$type}/{$locale}.php"));
    }
}
