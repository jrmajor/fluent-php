<?php

namespace Major\Fluent\Tests;

use Major\Fluent\Bundle\FluentBundle;
use PHPUnit\Framework\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use AstAssertions;
    use NodeAssertions;

    public static function assertTranslation(
        $_expected,
        FluentBundle $_bundle,
        string $_message,
        mixed ...$arguments,
    ): void {
        self::assertEmpty($_bundle->popErrors(), 'There are errors in bundle before an assertion.');

        self::assertSame($_expected, $_bundle->message($_message, ...$arguments));

        self::assertEmpty($_bundle->popErrors(), 'There are errors in bundle.');
    }
}
