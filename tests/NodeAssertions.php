<?php

namespace Major\Fluent\Tests;

use Psl\Hash;
use Psl\Shell;
use Psl\Str;

/**
 * @mixin TestCase
 */
trait NodeAssertions
{
    private static string $cachePath = __DIR__ . '/../.phpunit.cache/nodeAssertions.json';

    /** @var array<string, string> */
    private static array $cache;

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

        return self::$cache[$hash];
    }

    private static function freshNodeOutput(string $command): string
    {
        $output = Shell\execute('node', ['-e', "console.log({$command})"]);

        return Str\strip_suffix($output, "\n");
    }

    private static function loadCache(): void
    {
        if (isset(self::$cache)) {
            return;
        }

        if (! is_dir(dirname(self::$cachePath))) {
            mkdir(dirname(self::$cachePath), recursive: true);
        }

        if (! file_exists(self::$cachePath)) {
            file_put_contents(self::$cachePath, '{}');
        }

        self::$cache = json_decode(file_get_contents(self::$cachePath), true);
    }

    private static function saveCache(): void
    {
        file_put_contents(self::$cachePath, json_encode(self::$cache));
    }
}
