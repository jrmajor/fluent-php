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

    protected function charAt(int $offset): ?string
    {
        if ($this->charAtOffsetIsCrLf($offset)) {
            return "\n";
        }

        $char = $this->slice($offset, 1);

        return mb_strlen($char) ? $char : null;
    }

    public function currentChar(): ?string
    {
        return $this->charAt($this->index);
    }

    public function currentPeek(): ?string
    {
        return $this->charAt($this->index + $this->peekOffset);
    }

    /**
     * @impure
     */
    public function next(int $chars = 1): ?string
    {
        $this->peekOffset = 0;

        for ($i = 0; $i < $chars; $i++) {
            $offset = $this->charAtOffsetIsCrLf($this->index) ? 2 : 1;

            $this->incrementIndex($offset);
        }

        return $this->currentChar();
    }

    public function peek(int $chars = 1): ?string
    {
        for ($i = 0; $i < $chars; $i++) {
            $peekIndex = $this->index + $this->peekOffset;

            $this->peekOffset += $this->charAtOffsetIsCrLf($peekIndex) ? 2 : 1;
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

    public function slice(int $start, int $length): string
    {
        return $start >= $this->index
            ? mb_substr($this->stringFromIndex, $start - $this->index, $length)
            : mb_substr($this->string, $start, $length);
    }

    public function peekBlankInline(): string
    {
        $start = $this->peekOffset;

        while ($this->currentPeek() === ' ') {
            $this->peek();
        }

        return $this->slice(
            $this->index + $start,
            $this->peekOffset - $start,
        );
    }

    public function skipBlankInline(): string
    {
        $blank = $this->peekBlankInline();

        $this->skipToPeek();

        return $blank;
    }

    public function peekBlankBlock(): string
    {
        $blank = '';

        while (true) {
            $lineStart = $this->peekOffset;

            $this->peekBlankInline();

            if ($this->currentPeek() === null) {
                return $blank;
            }

            if ($this->currentPeek() === "\n") {
                $blank .= "\n";

                $this->peek();

                continue;
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
        while ($this->currentPeek() === ' ' || $this->currentPeek() === "\n") {
            $this->peek();
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
        if ($this->currentChar() === null) {
            return;
        }

        if ($this->currentChar() === "\n") {
            $this->next();

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

        if ($char === null) {
            return null;
        }

        if ($callback($char)) {
            $this->next();

            return $char;
        }

        return null;
    }

    protected function charAtOffsetIsCrLf(int $offset): bool
    {
        return $this->slice($offset, 2) === "\r\n";
    }

    protected function setIndex(int $index): void
    {
        $this->index = $index;

        $this->stringFromIndex = mb_substr($this->string, $index);
    }

    protected function incrementIndex(int $offset = 1): void
    {
        $this->index += $offset;

        $this->stringFromIndex = mb_substr($this->stringFromIndex, $offset);
    }
}
