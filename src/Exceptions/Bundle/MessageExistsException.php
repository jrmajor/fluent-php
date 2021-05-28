<?php

namespace Major\Fluent\Exceptions\Bundle;

final class MessageExistsException extends EntryExistsException
{
    public function __construct(string $id)
    {
        parent::__construct("Attempt to override an existing message: {$id}");
    }
}
