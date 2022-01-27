<?php

namespace Major\Fluent\Parser;

use Major\Fluent\Exceptions\ParserException;

/**
 * @internal
 */
final class FluentCursor extends Cursor
{
    public function isIdentifierStart(): bool
    {
        if (null === $char = $this->currentChar()) {
            return false;
        }

        $cc = mb_ord($char);

        return ($cc >= 97 && $cc <= 122) // a-z
            || ($cc >= 65 && $cc <= 90); // A-Z
    }

    public function isValueStart(): bool
    {
        $char = $this->currentPeek();

        return $char !== "\n" && $char !== null;
    }

    public function isValueContinuation(): bool
    {
        $column1 = $this->peekOffset;

        $this->peekBlankInline();

        if ($this->currentPeek() === '{') {
            $this->resetPeek($column1);

            return true;
        }

        if ($this->peekOffset - $column1 === 0) {
            return false;
        }

        if ($this->isCharPatternContinuation()) {
            $this->resetPeek($column1);

            return true;
        }

        return false;
    }

    protected function isCharPatternContinuation(): bool
    {
        return match ($this->currentPeek()) {
            null, '}', '.', '[', '*' => false,
            default => true,
        };
    }

    public function isNumberStart(): bool
    {
        $char = $this->currentChar();

        if ($char === '-') {
            $char = $this->peek();

            $this->resetPeek();
        }

        if ($char === null) {
            return false;
        }

        $cc = mb_ord($char);

        return $cc >= 48 && $cc <= 57; // 0-9;
    }

    public function isVariantStart(): bool
    {
        $currentPeekOffset = $this->peekOffset;

        if ($this->currentPeek() === '*') {
            $this->peek();
        }

        $char = $this->currentPeek();

        $this->resetPeek($currentPeekOffset);

        return $char === '[';
    }

    public function nextLineIsComment(int $level): bool
    {
        if ($this->currentChar() !== "\n") {
            return false;
        }

        for ($i = 0; $i <= $level; $i++) {
            if ($this->peek() !== '#') {
                $this->resetPeek();

                return false;
            }
        }

        $charAfterHashes = $this->peek();

        $this->resetPeek();

        return $charAfterHashes === ' ' || $charAfterHashes === "\n";
    }

    public function skipToNextEntryStart(int $junkStart): void
    {
        $lastNewline = mb_strrpos($this->slice(0, $this->index), "\n") ?: 0;

        if ($junkStart < $lastNewline) {
            // Last seen newline is after the junk start. It's safe to rewind
            // without the risk of resuming at the same broken entry.
            $this->setIndex($lastNewline);
        }

        while ($this->currentChar() !== null) {
            if ($this->currentChar() !== "\n") {
                $this->next();

                continue;
            }

            $this->next();
            $char = $this->currentChar();

            if ($this->isIdentifierStart() || $char === '-' || $char === '#') {
                break;
            }
        }
    }

    public function takeIdStart(): string
    {
        if (! $this->isIdentifierStart()) {
            throw new ParserException('E0004', ['range' => 'a-zA-Z']);
        }

        /** @var string $idStart If current char was null, isIdentifierStart would return false. */
        $idStart = $this->currentChar();

        $this->next();

        return $idStart;
    }

    public function takeIdChar(): ?string
    {
        $callback = function (string $char): bool {
            $cc = mb_ord($char);

            return ($cc >= 97 && $cc <= 122) // a-z
                || ($cc >= 65 && $cc <= 90) // A-Z
                || ($cc >= 48 && $cc <= 57) // 0-9
                || $cc === 95 || $cc === 45; // _-
        };

        return $this->takeChar($callback);
    }

    public function takeDigit(): ?string
    {
        $callback = function (string $char): bool {
            $cc = mb_ord($char);

            return $cc >= 48 && $cc <= 57; // 0-9
        };

        return $this->takeChar($callback);
    }

    public function takeHexDigit(): ?string
    {
        $callback = function (string $char): bool {
            $cc = mb_ord($char);

            return ($cc >= 48 && $cc <= 57) // 0-9
                || ($cc >= 65 && $cc <= 70) // A-F
                || ($cc >= 97 && $cc <= 102); // a-f
        };

        return $this->takeChar($callback);
    }
}
