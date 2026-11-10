<?php

namespace Major\Fluent\Exceptions\Resolver;

use Throwable;

final class FormattingException extends ResolverException
{
    /**
     * @internal
     */
    public function __construct(string $expression, Throwable $e)
    {
        parent::__construct("Failed to format {$expression}: {$e->getMessage()}", previous: $e);
    }
}
