<?php

namespace Major\Fluent\Parser;

use Closure;
use Major\Fluent\Exceptions\ParserException;

/**
 * @internal
 */
abstract class Cursor
{
    protected int $index = 0;

    protected int $peekOffset = 0;

    private string $stringFromIndex;

    public function __construct(
        private string $string,
    ) {
        $this->stringFromIndex = $string;
    }

    public function index(): int
    {
        return $this->index;
    }

    public function peekOffset(): int
    {
        return $this->peekOffset;
    }

    private function charFromIndex(int $offset = 0): ?string
    {
        $char = mb_substr($this->stringFromIndex, $offset, 1);

        if ($char === "\r" && mb_substr($this->stringFromIndex, $offset + 1, 1) === "\n") {
            return "\n";
        }

        return $char !== '' ? $char : null;
    }

    public function currentChar(): ?string
    {
        return $this->charFromIndex();
    }

    public function currentPeek(): ?string
    {
        return $this->charFromIndex($this->peekOffset);
    }

    public function next(int $chars = 1): void
    {
        $this->peekOffset = 0;

        for ($i = 0; $i < $chars; $i++) {
            $isClRf = str_starts_with($this->stringFromIndex, "\r\n");

            $this->incrementIndex($isClRf ? 2 : 1);
        }
    }

    public function peek(int $chars = 1): ?string
    {
        for ($i = 0; $i < $chars; $i++) {
            $currentPeek = mb_substr($this->stringFromIndex, $this->peekOffset, 2);

            $this->peekOffset += $currentPeek === "\r\n" ? 2 : 1;
        }

        return $this->currentPeek();
    }

    public function resetPeek(int $offset = 0): void
    {
        $this->peekOffset = $offset;
    }

    public function skipToPeek(): void
    {
        $this->incrementIndex($this->peekOffset);

        $this->peekOffset = 0;
    }

    public function slice(int $start, int $length = 1): string
    {
        return $start >= $this->index
            ? mb_substr($this->stringFromIndex, $start - $this->index, $length)
            : mb_substr($this->string, $start, $length);
    }

    public function peekBlankInline(): void
    {
        $currentPeak = $this->currentPeek();

        while ($currentPeak === ' ') {
            $currentPeak = $this->peek();
        }
    }

    public function skipBlankInline(): string
    {
        $start = $this->peekOffset;

        $this->peekBlankInline();

        $blank = mb_substr($this->stringFromIndex, $start, $this->peekOffset - $start);

        $this->skipToPeek();

        return $blank;
    }

    public function peekBlankBlock(): string
    {
        $blank = '';

        while (true) {
            $lineStart = $this->peekOffset;

            $this->peekBlankInline();

            $currentPeek = $this->currentPeek();

            if ($currentPeek === "\n") {
                $blank .= "\n";

                $this->peek();

                continue;
            }

            if ($currentPeek === null) {
                return $blank;
            }

            $this->resetPeek($lineStart);

            return $blank;
        }
    }

    public function skipBlankBlock(): string
    {
        $blank = $this->peekBlankBlock();

        $this->skipToPeek();

        return $blank;
    }

    public function peekBlank(): void
    {
        $currentPeek = $this->currentPeek();

        while ($currentPeek === ' ' || $currentPeek === "\n") {
            $currentPeek = $this->peek();
        }
    }

    public function skipBlank(): void
    {
        $this->peekBlank();

        $this->skipToPeek();
    }

    public function expectChar(string $char): void
    {
        if ($this->currentChar() === $char) {
            $this->next();

            return;
        }

        throw new ParserException('E0003', ['token' => $char]);
    }

    public function expectLineEnd(): void
    {
        if ($this->currentChar() === "\n") {
            $this->next();

            return;
        }

        if ($this->currentChar() === null) {
            return;
        }

        throw new ParserException('E0003', ['token' => '␤']);
    }

    /**
     * @param Closure(string): bool $callback
     */
    public function takeChar(Closure $callback): ?string
    {
        $char = $this->currentChar();

        if ($char === null || ! $callback($char)) {
            return null;
        }

        $this->next();

        return $char;
    }

    protected function setIndex(int $index): void
    {
        $this->index = $index;

        $this->stringFromIndex = mb_substr($this->string, $index);
    }

    private function incrementIndex(int $offset = 1): void
    {
        $this->index += $offset;

        $this->stringFromIndex = mb_substr($this->stringFromIndex, $offset);
    }
}
