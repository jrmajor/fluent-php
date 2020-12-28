<?php

namespace Major\Fluent\Exceptions;

use RuntimeException;

final class ShouldNotHappen extends RuntimeException
{
    public function __construct()
    {
        parent::__construct('This should not happen, please open an issue on fluent-php repository: https://github.com/jrmajor/fluent-php');
    }
}
