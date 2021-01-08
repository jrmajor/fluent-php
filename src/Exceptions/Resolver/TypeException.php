<?php

namespace Major\Fluent\Exceptions\Resolver;

final class TypeException extends ResolverException
{
    public function __construct(string $variable, string $type)
    {
        parent::__construct("Variable type not supported: \${$variable}, {$type}.");
    }
}
