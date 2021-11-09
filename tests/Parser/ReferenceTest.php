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

final class ReferenceTest extends TestCase
{
    private FluentParser $parser;

    protected function setUp(): void
    {
        parent::setUp();

        $this->parser = new FluentParser();
    }

    #[DataProvider('provideReferenceCases')]
    #[TestDox('reference test')]
    public function testReference(string $name, string $ftl, string $expectedAst): void
    {
        if ($name === 'leading_dots') {
            // https://github.com/projectfluent/fluent.js/issues/237
            $this->markTestSkipped('Broken Attributes break the entire Entry right now.');
        }

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
    public function provideReferenceCases(): Generator
    {
        $files = Filesystem\read_directory(__DIR__ . '/../fixtures/reference');

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
