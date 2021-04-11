<?php

namespace Major\Fluent\Exceptions\Bundle;

class MessageExistsException extends EntryExistsException
{
    public function __construct(string $id)
    {
        parent::__construct("Attempt to override an existing message: {$id}");
    }
}
