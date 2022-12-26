<?php

namespace Major\Fluent\Tests\Resolver\Functions;

use Major\Fluent\Exceptions\Resolver\FunctionException;
use Major\Fluent\Tests\TestCase;
use PHPUnit\Framework\Attributes\TestDox;

final class DateTimeFunctionTest extends TestCase
{
    #[TestDox('it throws exception')]
    public function testThrow(): void
    {
        $this->bundle->addFtl('datetime = { DATETIME() }');

        $this->assertTranslationErrors('{DATETIME()}', [
            [FunctionException::class, 'DATETIME() function error: DATETIME() function is not implemented.'],
        ], 'datetime');
    }
}
