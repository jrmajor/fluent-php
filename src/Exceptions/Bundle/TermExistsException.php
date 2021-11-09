<?php

namespace Major\Fluent\Exceptions\Bundle;

final class TermExistsException extends EntryExistsException
{
    public function __construct(string $id)
    {
        parent::__construct("Attempt to override an existing term: {$id}.");
    }
}
