<?php

namespace Major\Fluent\Tests;

use Psl\File;
use Psl\Filesystem;
use Psl\Hash;
use Psl\Json;
use Psl\Shell;
use Psl\Str;

/**
 * @mixin TestCase
 */
trait NodeAssertions
{
    /** @var non-empty-string */
    private static string $cachePath = __DIR__ . '/../.cache/phpunit/nodeAssertions.json';

    /** @var ?array<string, string> */
    private static ?array $cache = null;

    public static function assertEqualsNodeOutput(
        string $command, string $actual, string $message,
    ): void {
        self::assertSame(self::getNodeOutput($command), $actual, $message);
    }

    private static function getNodeOutput(string $command): string
    {
        self::loadCache();

        $hash = Hash\hash($command, Hash\Algorithm::SHA1);

        if (! isset(self::$cache[$hash])) {
            self::$cache[$hash] = self::freshNodeOutput($command);
            self::saveCache();
        }

        /** @var string */
        return self::$cache[$hash];
    }

    private static function freshNodeOutput(string $command): string
    {
        $output = Shell\execute('node', ['-e', "console.log({$command})"]);

        return Str\strip_suffix($output, "\n");
    }

    private static function loadCache(): void
    {
        if (self::$cache !== null) {
            return;
        }

        $dir = Filesystem\get_directory(self::$cachePath);

        Filesystem\create_directory($dir);

        if (! Filesystem\is_file(self::$cachePath)) {
            File\write(self::$cachePath, '{}');
        }

        self::$cache = Json\decode(File\read(self::$cachePath));
    }

    private static function saveCache(): void
    {
        File\write(self::$cachePath, Json\encode(self::$cache), File\WriteMode::TRUNCATE);
    }
}
