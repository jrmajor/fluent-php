<?php

/**
 * Syntax description: http://unicode.org/reports/tr35/tr35-numbers.html#Language_Plural_Rules
 * JSON Rules: https://github.com/unicode-org/cldr-json/blob/master/cldr-json/cldr-core/supplemental/plurals.json
 * Rules reference: https://unicode-org.github.io/cldr-staging/charts/latest/supplemental/language_plural_rules.html
 */

/** @return mixed[] */
function parseRelation(string $relation): array
{
    preg_match(
        '/^([niftvwce])\\s*(?:(?:%|mod)\\s*([0-9]+))?\\s*(!?=)\\s*(.+)$/',
        trim($relation), $matches,
    ) ?: throw new Exception();

    [$_, $operand, $mod, $equals, $values] = $matches;

    $mod = (int) $mod ?: null;

    $equals = str_contains($equals, '!') ? false : true;

    $values = explode(',', $values);

    $values = array_map(function ($value) {
        $value = explode('..', $value);

        return match (count($value)) {
            1 => [
                'type' => 'value',
                'value' => trim($value[0]),
            ],
            2 => [
                'type' => 'range',
                'from' => (int) $value[0],
                'to' => (int) $value[1],
            ],
            default => throw new Exception(),
        };
    }, $values);

    return compact('operand', 'mod', 'equals', 'values');
}

/** @return mixed[] */
function parseRule(string $rule): array
{
    do {
        $oldRule = $rule;

        $rule = str_replace('  ', ' ', $rule);
    } while ($oldRule !== $rule);

    $rule = explode('@', $rule)[0];

    // These keywords are not present in plurals.json
    if (
        str_contains($rule, 'not')
        || str_contains($rule, 'within')
        || str_contains($rule, 'in')
        || str_contains($rule, 'is')
    ) {
        throw new InvalidArgumentException('Unsupported keyword.');
    }

    $rule = explode('or', $rule);

    foreach ($rule as $key => $conditions) {
        $rule[$key] = explode('and', $conditions);

        foreach ($rule[$key] as $subKey => $condition) {
            $rule[$key][$subKey] = parseRelation($condition);
        }
    }

    return $rule;
}

$source = file_get_contents(__DIR__.'/plurals.json');

$json = json_decode($source, associative: true);

$locales = $json['supplemental']['plurals-type-cardinal'];

$result = [];

foreach ($locales as $locale => $rules) {
    foreach ($rules as $category => $rule) {
        $category = substr($category, 17) ?: throw new Exception();

        if ($category === 'other') {
            continue;
        }

        $result[(string) $locale][$category] = parseRule($rule);
    }
}

$return = file_put_contents(
    __DIR__.'/src/PluralRules/rules.php',
    '<?php return '.var_export($result, return: true).';'.PHP_EOL,
);

exit($return === false ? 1 : 0);
