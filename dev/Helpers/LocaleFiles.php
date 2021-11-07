<?php

namespace Major\Fluent\Dev\Helpers;

use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Psl\Filesystem;
use SplFileInfo;
use Symfony\Component\Finder\Finder;

final class LocaleFiles
{
    public static function path(string $path): string
    {
        return __DIR__ . "/../../locales/{$path}";
    }

    public static function prepareDirectory(string $dir): void
    {
        $dir = self::path($dir);

        Filesystem\delete_directory($dir, true);
        Filesystem\create_directory($dir);
    }

    /**
     * @return array<string, string[]>
     */
    public static function regions(): array
    {
        $files = (new Finder())->in(self::path('currencies'))->files();

        return collect($files)
            ->filter(fn (SplFileInfo $f) => $f->getExtension() === 'php')
            ->map(fn (SplFileInfo $f) => $f->getBasename('.php'))
            ->groupBy(fn (string $locale) => Str::before($locale, '-'))
            ->map(function (Collection $c, string $lang) {
                return $c->reject(fn (string $region) => $region === $lang)->values();
            })
            ->forget('root')
            ->toArray();
    }

    public static function store(string $type, string $locale, string $content): void
    {
        Filesystem\write_file(self::path("{$type}/{$locale}.php"), $content);
    }

    public static function read(string $type, string $locale): string
    {
        return Filesystem\read_file(self::path("{$type}/{$locale}.php"));
    }

    public static function remove(string $type, string $locale): void
    {
        Filesystem\delete_file(self::path("{$type}/{$locale}.php"));
    }
}
