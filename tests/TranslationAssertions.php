<?php

namespace Major\Fluent\Tests;

use Major\Fluent\Bundle\FluentBundle;
use Major\Fluent\Exceptions\Resolver\ResolverException;

/**
 * @mixin TestCase
 */
trait TranslationAssertions
{
    /**
     * @param array<string, mixed> $arguments
     */
    public function assertTranslation(
        string $expected,
        string $message,
        array $arguments = [],
        ?FluentBundle $bundle = null,
    ): void {
        [$actual, $errors] = $this->getResultAndErrors($message, $arguments, $bundle);

        foreach ($errors as $error) {
            throw $error;
        }

        self::assertSame($expected, $actual);
    }

    /**
     * @param array<string, mixed> $arguments
     * @param non-empty-list<array{class-string<ResolverException>, string}> $expectedErrors
     */
    public function assertTranslationErrors(
        string $expected,
        array $expectedErrors,
        string $message,
        array $arguments = [],
        ?FluentBundle $bundle = null,
    ): void {
        [$actual, $actualErrors] = $this->getResultAndErrors($message, $arguments, $bundle);

        self::assertCount(count($expectedErrors), $actualErrors, 'Expected exception count does not match actual.');

        foreach ($expectedErrors as $key => $error) {
            self::assertExceptionMatches($error[0], $error[1], $actualErrors[$key]);
        }

        self::assertSame($expected, $actual);
    }

    /**
     * @param array<string, mixed> $arguments
     * @return array{?string, list<ResolverException>}
     */
    private function getResultAndErrors(
        string $message,
        array $arguments = [],
        ?FluentBundle $bundle = null,
    ): array {
        $bundle ??= $this->bundle;

        self::assertCount(0, $bundle->popErrors(), 'There are errors in bundle before an assertion.');

        return [$bundle->message($message, $arguments), $bundle->popErrors()];
    }
}
