<?php

namespace Major\Fluent\Tests\Benchmark;

use Major\Fluent\Parser\FluentCursor;
use PhpBench\Attributes\BeforeMethods;
use PhpBench\Attributes\Iterations;
use PhpBench\Attributes\Revs;
use Psl\Filesystem;

#[BeforeMethods('setUp')]
final class CursorBench
{
    private FluentCursor $cursor;

    public function setUp(): void
    {
        // File obtained from https://hg.mozilla.org/l10n-central/pl/file/tip/browser/browser/preferences/preferences.ftl.
        $preferences = Filesystem\read_file(__DIR__ . '/preferences.ftl');

        $this->cursor = new FluentCursor($preferences);
    }

    #[Revs(20), Iterations(10)]
    public function benchNext(): void
    {
        while ($this->cursor->next() !== null);
    }
}
