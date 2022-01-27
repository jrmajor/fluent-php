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

    private int $length;

    public function setUp(): void
    {
        // File obtained from https://hg.mozilla.org/l10n-central/pl/file/tip/browser/browser/preferences/preferences.ftl.
        $preferences = Filesystem\read_file(__DIR__ . '/preferences.ftl');

        $this->cursor = new FluentCursor($preferences);
        $this->length = mb_strlen($preferences);
    }

    #[Revs(20), Iterations(10)]
    public function benchNext(): void
    {
        for ($i = 0; $i < $this->length; $i++) {
            $this->cursor->next();
        }
    }

    #[Revs(20), Iterations(10)]
    public function benchCurrentChar(): void
    {
        for ($i = 0; $i < $this->length; $i++) {
            $this->cursor->currentChar();
            $this->cursor->next();
        }
    }

    #[Revs(20), Iterations(10)]
    public function benchCurrentPeek(): void
    {
        for ($i = 0; $i < $this->length; $i++) {
            $this->cursor->currentPeek();
            $this->cursor->peek();

            if ($this->cursor->peekOffset() > 100) {
                $this->cursor->skipToPeek();
            }
        }
    }

    #[Revs(20), Iterations(10)]
    public function benchTakeChar(): void
    {
        for ($i = 0; $i < $this->length; $i++) {
            $this->cursor->takeChar(function (string $c): bool {
                $cc = mb_ord($c);

                return ($cc >= 97 && $cc <= 122) // a-z
                    || ($cc >= 65 && $cc <= 90); // A-Z
            }) ?? $this->cursor->next();
        }
    }
}
