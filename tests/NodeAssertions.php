<?php

namespace Major\Fluent\Tests;

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
    private static string $cachePath = __DIR__ . '/../.phpunit.cache/nodeAssertions.json';

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

        $hash = Hash\hash($command, 'sha1');

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

        if (! Filesystem\is_directory($dir)) {
            Filesystem\create_directory($dir);
        }

        if (! Filesystem\is_file(self::$cachePath)) {
            Filesystem\write_file(self::$cachePath, '{}');
        }

        self::$cache = Json\decode(Filesystem\read_file(self::$cachePath));
    }

    private static function saveCache(): void
    {
        Filesystem\write_file(self::$cachePath, Json\encode(self::$cache));
    }
}
