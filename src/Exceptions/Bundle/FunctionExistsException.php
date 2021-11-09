<?php

namespace Major\Fluent\Exceptions\Bundle;

final class FunctionExistsException extends EntryExistsException
{
    public function __construct(string $name)
    {
        parent::__construct("Attempt to override an existing function: {$name}().");
    }
}
