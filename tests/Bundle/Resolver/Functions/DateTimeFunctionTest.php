<?php

namespace Major\Fluent\Tests\Bundle\Resolver\Functions;

use Exception;
use Major\Fluent\Exceptions\Resolver\FunctionException;
use Major\Fluent\Tests\TestCase;

final class DateTimeFunctionTest extends TestCase
{
    /**
     * @testdox it throws exception
     */
    public function testThrow(): void
    {
        $this->bundle->addFtl('datetime = { DATETIME() }');

        $this->assertTranslationErrors('{DATETIME()}', [
            [FunctionException::class, 'DATETIME() function error: DATETIME() function is not implemented.'],
        ], 'datetime');
    }
}
