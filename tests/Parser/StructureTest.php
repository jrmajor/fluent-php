<?php

namespace Major\Fluent\Tests\Parser;

use Generator;
use Major\Fluent\Parser\FluentParser;
use Major\Fluent\Tests\TestCase;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\TestDox;
use Psl\File;
use Psl\Filesystem;
use Psl\Json;
use Psl\Type;

final class StructureTest extends TestCase
{
    private FluentParser $parser;

    protected function setUp(): void
    {
        parent::setUp();

        $this->parser = new FluentParser();
    }

    #[DataProvider('provideStructureCases')]
    #[TestDox('structure test')]
    public function testStructure(string $name, string $ftl, string $expectedAst): void
    {
        $expectedAst = Json\decode($expectedAst);

        $resource = $this->parser->parse($ftl);

        $this->assertNodeEquals($expectedAst, $resource, true);
    }

    /**
     * @return Generator<array{string, string, string}>
     */
    public static function provideStructureCases(): Generator
    {
        $files = Filesystem\read_directory(__DIR__ . '/../fluent.js/fluent-syntax/test/fixtures_structure');

        $cases = [];

        foreach ($files as $file) {
            $type = Type\string()->coerce(Filesystem\get_extension($file));
            $name = Filesystem\get_basename($file, ".{$type}");

            $cases[$name][$type] = $file;
        }

        $cases = Type\dict(Type\string(), Type\shape([
            'ftl' => Type\non_empty_string(),
            'json' => Type\non_empty_string(),
        ]))->coerce($cases);

        foreach ($cases as $name => ['ftl' => $ftl, 'json' => $json]) {
            $ftl = File\read($ftl);
            $json = File\read($json);

            yield $name => [$name, $ftl, $json];
        }
    }
}
