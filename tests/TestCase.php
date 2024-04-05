<?php

namespace Major\Fluent\Tests;

use Major\Fluent\Bundle\FluentBundle;
use PHPUnit\Framework\TestCase as BaseTestCase;
use Throwable;

abstract class TestCase extends BaseTestCase
{
    use AstAssertions;
    use TranslationAssertions;

    protected FluentBundle $bundle;

    protected function setUp(): void
    {
        parent::setUp();

        $this->bundle = new FluentBundle('en-US', useIsolating: false);
    }

    public static function assertExceptionMatches(string $expected, string $message, Throwable $actual): void
    {
        self::assertSame($expected, get_class($actual), 'Expected exception class does not match actual.');

        self::assertSame($message, $actual->getMessage(), 'Expected exception message does not match actual.');
    }
}
