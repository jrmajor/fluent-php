<?php

namespace Major\Fluent\Tests\Helpers;

use PHPUnit\Framework\Assert as PU;
use Psl\File;
use Psl\Filesystem;
use Psl\Hash;
use Psl\Json;
use Psl\Shell;
use Psl\Type;

final class NodeAssertions
{
    private const CacheDir = __DIR__ . '/../../.cache/node-assertions';

    /** @var non-empty-string */
    private string $path;

    /** @var array<string, mixed> */
    private array $cache;

    private static ?self $instance = null;

    private function __construct()
    {
        $this->path = self::CacheDir . '/' . $this->versionsHash() . '.json';

        $this->loadCache();
    }

    public static function assertEqualsNodeOutput(
        string $command, string $actual, string $message,
    ): void {
        self::$instance ??= new self();

        $expected = self::$instance->cachedNodeOutput($command);

        PU::assertSame($expected, $actual, $message);
    }

    private function cachedNodeOutput(string $command): string
    {
        $hash = Hash\hash($command, Hash\Algorithm::SHA1);

        if (! array_key_exists($hash, $this->cache)) {
            $this->cache[$hash] = $this->freshNodeOutput($command);
            $this->saveCache();
        }

        return $this->cache[$hash];
    }

    private function freshNodeOutput(string $command): mixed
    {
        $nodeArgs = ['-e', "console.log(JSON.stringify({$command}))"];

        return Json\decode(Shell\execute('node', $nodeArgs));
    }

    private function loadCache(): void
    {
        Filesystem\create_directory(self::CacheDir);

        if (! Filesystem\is_file($this->path)) {
            File\write($this->path, '{}');
        }

        $this->cache = Json\decode(File\read($this->path));
    }

    private function saveCache(): void
    {
        File\write($this->path, Json\encode($this->cache), File\WriteMode::TRUNCATE);
    }

    private function versionsHash(): string
    {
        $type = Type\shape(['cldr' => Type\string(), 'icu' => Type\string()]);

        $versions = $type->coerce($this->freshNodeOutput('process.versions'));

        return Hash\hash(Json\encode(['self' => 1, ...$versions]), Hash\Algorithm::SHA1);
    }
}
