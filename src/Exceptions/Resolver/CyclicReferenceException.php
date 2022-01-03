<?php

namespace Major\Fluent\Exceptions\Resolver;

final class CyclicReferenceException extends RangeException
{
    public function __construct()
    {
        parent::__construct('Placeable contains cyclic reference.');
    }
}
