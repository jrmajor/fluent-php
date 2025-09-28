<?php

namespace Major\Fluent\Tests\Helpers;

use Psl\File;
use Psl\Filesystem;
use Psl\Hash;
use Psl\Json;
use Psl\Shell;
use Psl\Type;

final class Node
{
    private const string CacheDir = __DIR__ . '/../../.cache/node-assertions';

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

    public static function instance(): self
    {
        return self::$instance ??= new self();
    }

    public function cachedOutput(string $command): mixed
    {
        $hash = Hash\hash($command, Hash\Algorithm::Sha1);

        if (! array_key_exists($hash, $this->cache)) {
            $this->cache[$hash] = $this->freshOutput($command);
            $this->saveCache();
        }

        return $this->cache[$hash];
    }

    public function freshOutput(string $command): mixed
    {
        $nodeArgs = ['-e', "console.log(JSON.stringify({$command}))"];

        return Json\decode(Shell\execute('pnpm exec node', $nodeArgs));
    }

    private function loadCache(): void
    {
        Filesystem\create_directory(self::CacheDir);

        if (! Filesystem\is_file($this->path)) {
            File\write($this->path, '{}');
        }

        /** @phpstan-ignore assign.propertyType */
        $this->cache = Json\decode(File\read($this->path));
    }

    private function saveCache(): void
    {
        File\write($this->path, Json\encode($this->cache), File\WriteMode::Truncate);
    }

    private function versionsHash(): string
    {
        $type = Type\shape(['cldr' => Type\string(), 'icu' => Type\string()]);

        $versions = $type->coerce($this->freshOutput('process.versions'));

        return Hash\hash(Json\encode(['self' => 1, ...$versions]), Hash\Algorithm::Sha1);
    }
}
