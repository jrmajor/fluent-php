<?php

namespace Major\Fluent\Tests\Benchmark;

use Major\Fluent\Parser\FluentParser;
use PhpBench\Attributes\BeforeMethods;
use Psl\Filesystem;

#[BeforeMethods('setUp')]
final class ParserBench
{
    private FluentParser $parser;

    private string $preferences;

    public function setUp(): void
    {
        $this->parser = new FluentParser(true);

        $this->preferences = Filesystem\read_file(__DIR__ . '/preferences.ftl');
    }

    public function benchFirefoxPreferences(): void
    {
        $this->parser->parse($this->preferences);
    }
}
