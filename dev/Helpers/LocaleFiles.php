<?php

namespace Major\Fluent\Dev\Helpers;

use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Safe as s;
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
