<?php

namespace Major\Fluent\Exceptions\Resolver;

final class TypeException extends ResolverException
{
    /**
     * @internal
     */
    public function __construct(string $message)
    {
        parent::__construct($message);
    }
}
