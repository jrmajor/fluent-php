<?php

namespace Major\Fluent\Node\Syntax\Expressions\Literals;

use Major\Fluent\Exceptions\ShouldNotHappen;
use Major\Fluent\Node\LiteralValues\StringLiteralValue;

final class StringLiteral extends Literal
{
    // backslash backslash, backslash double quote, uHHHH, UHHHHHH
    private const KNOWN_ESCAPES = '/(?:\\\\\\\\|\\\\"|\\\\[u]([0-9a-fA-F]{4})|\\\\[U]([0-9a-fA-F]{6}))/';

    public function parse(): StringLiteralValue
    {
        $callback = function ($match) {
            if ($match[0] === '\\\\') {
                return '\\';
            }

            if ($match[0] === '\\"') {
                return '"';
            }

            $codepoint = intval($match[1] ?: $match[2], 16);

            if ($codepoint <= 0xD7FF || 0xE000 <= $codepoint) {
                // It's an Unicode scalar value.
                return mb_chr($codepoint);
            }

            // Escape sequences representing surrogate code points are
            // well-formed but invalid in Fluent. Replace them with U+FFFD
            // REPLACEMENT CHARACTER.
            return '�';
        };

        $value = preg_replace_callback(
            self::KNOWN_ESCAPES,
            $callback,
            $this->value,
        );

        return new StringLiteralValue(
            $value ?? throw new ShouldNotHappen(),
        );
    }
}
