<?php

namespace Major\Fluent\Node\Syntax;

final class Annotation extends SyntaxNode
{
    public function __construct(
        public string $code,
        public string $message,
        /** @var array<string, mixed> */
        public array $arguments = [],
    ) { }

    /** @return string[] */
    public function getArguments(): array
    {
        return array_values($this->arguments);
    }
}
