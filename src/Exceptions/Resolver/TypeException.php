<?php

namespace Major\Fluent\Exceptions\Resolver;

final class TypeException extends ResolverException
{
    public function __construct(string $message, mixed $variable)
    {
        $type = get_debug_type($variable);

        parent::__construct(sprintf($message, $type));
    }
}
