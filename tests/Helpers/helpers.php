<?php

namespace Major\Fluent\Tests\Helpers;

use Psl\Iter;
use Psl\Vec;

/**
 * @template T
 *
 * @param list<T> $values
 *
 * @return list<array{value: T, count: int}>
 */
function count_values(array $values): array
{
    $counts = [];

    foreach ($values as $value) {
        foreach ($counts as &$count) {
            if ($count['value'] === $value) {
                $count['count']++;

                continue 2;
            }
        }

        $counts[] = ['value' => $value, 'count' => 1];
    }

    // sort by counts descending, by value ascending
    return Vec\sort($counts, function ($a, $b) {
        $primary = $b['count'] <=> $a['count'];
        $secondary = $a['value'] <=> $b['value'];

        /** @phpstan-ignore-next-line */
        return $primary ?: $secondary;
    });
}

/**
 * @template T
 *
 * @param list<T> $values
 *
 * @return ?T
 */
function most_popular(array $values): mixed
{
    $counts = count_values($values);

    return Iter\first($counts)['value'] ?? null;
}
