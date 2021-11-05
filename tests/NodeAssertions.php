<?php

namespace Major\Fluent\Tests;

use Symfony\Component\Process\Process;

/**
 * @mixin TestCase
 */
trait NodeAssertions
{
    private static string $cachePath = __DIR__ . '/../.phpunit.cache/nodeAssertions.json';

    /** @var array<string, string> */
    private static array $cache;

    public static function assertEqualsNodeOutput(
        string $expected, string $command, string $message,
    ): void {
        self::assertSame($expected, self::getNodeOutput($command), $message);
    }

    private static function getNodeOutput(string $command): string
    {
        self::loadCache();

        $hash = sha1($command);

        if (! isset(self::$cache[$hash])) {
            self::$cache[$hash] = self::freshNodeOutput($command);
            self::saveCache();
        }

        return self::$cache[$hash];
    }

    private static function freshNodeOutput(string $command): string
    {
        $process = new Process(['node', '-e', "console.log({$command})"]);

        return substr($process->mustRun()->getOutput(), 0, -1);
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
