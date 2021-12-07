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

    public function __construct(
        protected string $string,
    ) { }

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

        $char = mb_substr($this->string, $offset, 1);

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
            if ($this->charAtOffsetIsCrLf($this->index)) {
                $this->index++;
            }

            $this->index++;
        }

        return $this->currentChar();
    }

    public function peek(int $chars = 1): ?string
    {
        for ($i = 0; $i < $chars; $i++) {
            if ($this->charAtOffsetIsCrLf($this->index + $this->peekOffset)) {
                $this->peekOffset++;
            }

            $this->peekOffset++;
        }

        return $this->currentPeek();
    }

    public function resetPeek(int $offset = 0): void
    {
        $this->peekOffset = $offset;
    }

    public function skipToPeek(): void
    {
        $this->index += $this->peekOffset;

        $this->peekOffset = 0;
    }

    public function slice(int $start, int $end): string
    {
        return mb_substr($this->string, $start, $end - $start);
    }

    public function peekBlankInline(): string
    {
        $start = $this->index + $this->peekOffset;

        while ($this->currentPeek() === ' ') {
            $this->peek();
        }

        return mb_substr(
            $this->string, $start,
            $this->index + $this->peekOffset - $start,
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
        return mb_substr($this->string, $offset, 2) === "\r\n";
    }
}
