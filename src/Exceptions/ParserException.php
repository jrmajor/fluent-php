<?php

namespace Major\Fluent\Exceptions;

use Exception;

class ParserException extends Exception
{
    public function __construct(
        protected string $fluentErrorCode = 'E0001',
        /** @var array<string, string> */
        protected array $arguments = [],
        ?string $source = null,
    ) {
        $message = match ($fluentErrorCode) {
            'E0001' => 'Generic error',
            'E0002' => 'Expected an entry start',
            'E0003' => "Expected token: \"{$arguments['token']}\"",
            'E0004' => "Expected a character from range: \"{$arguments['range']}\"",
            'E0005' => "Expected message \"{$arguments['id']}\" to have a value or attributes",
            'E0006' => "Expected term \"-{$arguments['id']}\" to have a value",
            'E0007' => 'Keyword cannot end with a whitespace',
            'E0008' => 'The callee has to be an upper-case identifier or a term',
            'E0009' => 'The argument name has to be a simple identifier',
            'E0010' => 'Expected one of the variants to be marked as default (*)',
            'E0011' => 'Expected at least one variant after "->"',
            'E0012' => 'Expected value',
            'E0013' => 'Expected variant key',
            'E0014' => 'Expected literal',
            'E0015' => 'Only one variant can be marked as default (*)',
            'E0016' => 'Message references cannot be used as selectors',
            'E0017' => 'Terms cannot be used as selectors',
            'E0018' => 'Attributes of messages cannot be used as selectors',
            'E0019' => 'Attributes of terms cannot be used as placeables',
            'E0020' => 'Unterminated string expression',
            'E0021' => 'Positional arguments must not follow named arguments',
            'E0022' => 'Named arguments must be unique',
            'E0024' => 'Cannot access variants of a message',
            'E0025' => "Unknown escape sequence: \\{$arguments['char']}.",
            'E0026' => "Invalid Unicode escape sequence: {$arguments['sequence']}.",
            'E0027' => 'Unbalanced closing brace in TextElement.',
            'E0028' => 'Expected an inline expression',
            'E0029' => 'Expected simple expression as selector',
            default => throw new ShouldNotHappen(),
        };

        if (isset($source)) {
            $message .= " somewhere in \"$source\"";
        }

        parent::__construct($message);
    }

    public function getFluentErrorCode(): string
    {
        return $this->fluentErrorCode;
    }

    /** @return array<string, string> */
    public function getArguments(): array
    {
        return $this->arguments;
    }
}
