<?php

namespace Major\Fluent\Node\Syntax\Expressions\Literals;

use Major\Fluent\Exceptions\ShouldNotHappen;
use Major\Fluent\Node\LiteralValues\StringLiteralValue;

final class StringLiteral extends Literal
{
    // backslash backslash, backslash double quote, uHHHH, UHHHHHH
    private const string KnownEscapes = '/(?:\\\\\\\\|\\\\"|\\\\[u]([0-9a-fA-F]{4})|\\\\[U]([0-9a-fA-F]{6}))/';

    public function parse(): StringLiteralValue
    {
        $value = preg_replace_callback(
            self::KnownEscapes,
            function ($match): string {
                if ($match[0] === '\\\\') {
                    return '\\';
                }

                if ($match[0] === '\\"') {
                    return '"';
                }

                /** @phpstan-ignore offsetAccess.notFound */
                $codepoint = intval($match[1] ?: $match[2], 16);

                if ($codepoint <= 0xD7FF || $codepoint >= 0xE000) {
                    // It's an Unicode scalar value.
                    return mb_chr($codepoint);
                }

                // Escape sequences representing surrogate code points are
                // well-formed but invalid in Fluent. Replace them with U+FFFD
                // REPLACEMENT CHARACTER.
                return '�';
            },
            $this->value,
        );

        return new StringLiteralValue(
            $value ?? throw new ShouldNotHappen(),
        );
    }
}
