<?php

namespace Major\Fluent\Tests\Parser;

use Generator;
use Major\Fluent\Parser\FluentParser;
use Major\Fluent\Tests\TestCase;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\TestDox;
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

        $this->assertNodeEquals(
            $expectedAst,
            $resource,
            spans: false,
            annotations: false,
        );
    }

    /**
     * @return Generator<array{string, string}>
     */
    public function provideStructureCases(): Generator
    {
        $files = Filesystem\read_directory(__DIR__ . '/../fixtures/structure');

        $cases = [];

        foreach ($files as $file) {
            $type = Filesystem\get_extension($file);
            $name = Filesystem\get_basename($file, ".{$type}");

            $cases[$name][$type] = $file;
        }

        Type\dict(Type\string(), Type\shape([
            'ftl' => Type\string(),
            'json' => Type\string(),
        ]))->assert($cases);

        foreach ($cases as $name => $files) {
            $ftl = Filesystem\read_file($files['ftl']);
            $json = Filesystem\read_file($files['json']);

            yield $name => [$name, $ftl, $json];
        }
    }
}
