<?php

namespace Major\Fluent\Node\Syntax;

final class Annotation extends SyntaxNode
{
    public function __construct(
        public string $code,
        public string $message,
        /** @var array<string, string> */
        public array $arguments = [],
    ) { }

    /**
     * @return list<string>
     */
    public function getArguments(): array
    {
        return array_values($this->arguments);
    }
}
