<?php

namespace Major\Fluent\Node\Syntax;

final class Junk extends SyntaxNode
{
    /** @var Annotation[] */
    public array $annotations = [];

    public function __construct(
        public string $content,
    ) { }

    public function addAnnotation(Annotation $annotation): void
    {
        $this->annotations[] = $annotation;
    }
}
