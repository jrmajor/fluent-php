<?php

namespace Major\Fluent\Tests\Helpers;

use Generator;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\TestDox;
use PHPUnit\Framework\TestCase;
use stdClass;

final class MostPopularTest extends TestCase
{
    /**
     * @param list<mixed> $values
     */
    #[DataProvider('provideOkCases')]
    #[TestDox('most_popular helper works')]
    public function testOk(mixed $expected, array $values): void
    {
        $this->assertSame($expected, most_popular($values));
    }

    /**
     * @return Generator<array{mixed, list<mixed>}>
     */
    public static function provideOkCases(): Generator
    {
        yield from [
            'integers 1' => [1, [1, 1, 2]],
            'integers 2' => [1, [2, 1, 1]],
            'strings' => ['bar', ['foo', 'bar', 'baz', 'bar']],
            'floats' => [1.5, [1.4, 1.6, 1.5, 1.5]],
            'arrays 1' => [
                ['foo', 'bar'],
                [['foo', 'bar'], ['bar', 'baz'], ['foo', 'baz'], ['foo', 'bar']],
            ],
            'arrays 2' => [
                ['foo', 'bar'],
                [['bar', 'baz'], ['foo', 'baz'], ['foo', 'bar'], ['foo', 'bar']],
            ],
        ];

        $objects = [new stdClass(), new stdClass()];

        yield 'objects' => [$objects[0], [$objects[1], $objects[0], $objects[0]]];
    }
}
