<?php

namespace Major\Fluent\Tests\Helpers;

use Generator;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\TestDox;
use PHPUnit\Framework\TestCase;
use stdClass;

final class CountValuesTest extends TestCase
{
    #[DataProvider('provideOkCases')]
    #[TestDox('count_values helper works')]
    public function testOk(mixed $expected, array $values): void
    {
        $this->assertSame($expected, count_values($values));
    }

    /**
     * @return Generator<array{list<array{value: mixed, count: int}>, list<mixed>}>
     */
    public static function provideOkCases(): Generator
    {
        yield 'integers' => [
            [['value' => 1, 'count' => 2], ['value' => 2, 'count' => 1]],
            [2, 1, 1],
        ];

        yield 'strings' => [
            [
                ['value' => 'bar', 'count' => 2],
                ['value' => 'baz', 'count' => 1],
                ['value' => 'foo', 'count' => 1],
            ],
            ['foo', 'bar', 'baz', 'bar'],
        ];

        yield 'floats' => [
            [
                ['value' => 1.5, 'count' => 2],
                ['value' => 1.6, 'count' => 1],
                ['value' => 1.4, 'count' => 1],
            ],
            [1.4, 1.6, 1.5, 1.5],
        ];

        yield 'arrays' => [
            [
                ['value' => ['foo', 'bar'], 'count' => 2],
                ['value' => ['foo', 'baz'], 'count' => 1],
                ['value' => ['bar', 'baz'], 'count' => 1],
            ],
            [['bar', 'baz'], ['foo', 'baz'], ['foo', 'bar'], ['foo', 'bar']],
        ];

        $objects = [new stdClass(), new stdClass()];

        yield 'objects' => [
            [['value' => $objects[0], 'count' => 2], ['value' => $objects[1], 'count' => 1]],
            [$objects[1], $objects[0], $objects[0]],
        ];
    }
}
