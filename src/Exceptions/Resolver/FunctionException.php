<?php

namespace Major\Fluent\Exceptions\Resolver;

use Throwable;

final class FunctionException extends ResolverException
{
    /**
     * @internal
     */
    public function __construct(string $function, Throwable $e)
    {
        parent::__construct("{$function}() function error: {$e->getMessage()}", previous: $e);
    }
}
