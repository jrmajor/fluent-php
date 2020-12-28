<?php

namespace Major\Fluent\Parser;

class Cursor
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

        return mb_strlen($char) === 0
            ? null : $char;
    }

    public function currentChar(): ?string
    {
        return $this->charAt($this->index);
    }

    public function currentPeek(): ?string
    {
        return $this->charAt($this->index + $this->peekOffset);
    }

    public function next(): ?string
    {
        $this->peekOffset = 0;

        if ($this->charAtOffsetIsCrLf($this->index)) {
            $this->index++;
        }

        $this->index++;

        return $this->currentChar();
    }

    public function peek(): ?string
    {
        if ($this->charAtOffsetIsCrLf($this->index + $this->peekOffset)) {
            $this->peekOffset++;
        }

        $this->peekOffset++;

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

    protected function charAtOffsetIsCrLf(int $offset): bool
    {
        return mb_substr($this->string, $offset, 1) === "\r"
            && mb_substr($this->string, $offset + 1, 1) === "\n";
    }
}
