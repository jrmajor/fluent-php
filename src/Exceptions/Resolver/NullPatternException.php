<?php

namespace Major\Fluent\Exceptions\Resolver;

class NullPatternException extends ResolverException
{
    public function __construct()
    {
        parent::__construct('Null pattern can not be formatted.');
    }
}
