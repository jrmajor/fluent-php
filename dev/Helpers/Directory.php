<?php

namespace Major\Fluent\Dev\Helpers;

use Exception;

use function Safe\glob;

final class Directory
{
    public static function path(string $dir): string
    {
        return __DIR__ . "/../locales/{$dir}";
    }

    public static function prepare(string $dir): void
    {
        if (! is_dir(self::path($dir))) {
            mkdir(self::path($dir), recursive: true);

            return;
        }

        $files = glob(self::path($dir) . '/*');

        foreach ($files as $file) {
            if (! is_file($file)) {
                throw new Exception("{$file->getPathname()} is not a file");
            }

            unlink($file);
        }
    }
}
