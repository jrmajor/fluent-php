<?php

namespace Major\Fluent\Exceptions\Resolver;

final class ReferenceException extends ResolverException
{
    /**
     * @internal
     */
    public function __construct(string $message)
    {
        parent::__construct($message);
    }
}
