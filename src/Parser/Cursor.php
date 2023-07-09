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

    /** @var list<string> */
    private array $chars;

    private int $length;

    public function __construct(string $string)
    {
        $this->chars = mb_str_split($string);
        $this->length = count($this->chars);
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
        $pos = $this->index + $offset;

        if ($pos >= $this->length) {
            return null;
        }

        $char = $this->chars[$pos];

        if ($char === "\r" && ($this->chars[$pos + 1] ?? null) === "\n") {
            return "\n";
        }

        return $char;
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
            $isClRf = ($this->chars[$this->index] ?? null) === "\r"
                && ($this->chars[$this->index + 1] ?? null) === "\n";

            $this->index += $isClRf ? 2 : 1;
        }
    }

    public function peek(int $chars = 1): ?string
    {
        for ($i = 0; $i < $chars; $i++) {
            $pos = $this->index + $this->peekOffset;
            $isClRf = ($this->chars[$pos] ?? null) === "\r"
                && ($this->chars[$pos + 1] ?? null) === "\n";

            $this->peekOffset += $isClRf ? 2 : 1;
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

    public function slice(int $start, int $length = 1): string
    {
        return implode('', array_slice($this->chars, $start, $length));
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
        $start = $this->index + $this->peekOffset;

        $this->peekBlankInline();
        $this->skipToPeek();

        return str_repeat(' ', $this->index - $start);
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
}
