<?php

namespace Major\Fluent\Node\Syntax;

final class Junk extends SyntaxNode
{
    /** @var list<Annotation> */
    public array $annotations = [];

    public function __construct(
        public string $content,
    ) { }

    /**
     * @return $this
     */
    public function addAnnotation(Annotation $annotation): static
    {
        $this->annotations[] = $annotation;

        return $this;
    }
}
