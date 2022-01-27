<?php

namespace Major\Fluent\Tests\Benchmark;

use Major\Fluent\Parser\FluentParser;
use PhpBench\Attributes\BeforeMethods;
use PhpBench\Attributes\Iterations;
use PhpBench\Attributes\Revs;
use Psl\Filesystem;

#[BeforeMethods('setUp')]
final class ParserBench
{
    private FluentParser $parser;

    private string $preferences;

    public function setUp(): void
    {
        $this->parser = new FluentParser(true);

        // File obtained from https://hg.mozilla.org/l10n-central/pl/file/tip/browser/browser/preferences/preferences.ftl.
        $this->preferences = Filesystem\read_file(__DIR__ . '/preferences.ftl');
    }

    #[Revs(10), Iterations(5)]
    public function benchFirefoxPreferences(): void
    {
        $this->parser->parse($this->preferences);
    }
}
