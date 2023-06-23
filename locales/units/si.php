<?php

use Major\Fluent\Formatters\Number\Locale\Unit as U;

return [
    'acre' => new U('අක්කර {0}', 'අක්කර {0}', 'අක්කර {0}'),
    'bit' => new U('බීට් {0}', 'බීට් {0}', 'බීට් {0}'),
    'byte' => new U('බයිට් {0}', 'බයිට් {0}', 'බයිට් {0}'),
    'celsius' => new U('සෙල්සියස් අංශක {0}', 'සෙල්. {0}°', '{0}°'),
    'centimeter' => new U('සෙන්ටිමීටර් {0}', 'සෙ.මී {0}', 'සෙ.මී {0}'),
    'day' => new U('දින {0}', 'දින {0}', 'දි {0}'),
    'degree' => new U('අංශක {0}', 'අංශක {0}', '{0}°'),
    'fahrenheit' => new U('ෆැරන්හයිට් අංශක {0}', 'ෆැර. {0}°', 'ෆැර. {0}°'),
    'fluid-ounce' => new U('ද්‍රව අවුන්ස {0}', 'ද්‍රව අවු {0}', 'ද්‍රව අවු {0}'),
    'foot' => new U('අඩි {0}', 'අඩි {0}', "{0}'"),
    'gallon' => new U('ගැලුම් {0}', 'ගැලු {0}', 'ගැලු {0}'),
    'gigabit' => new U('ගිගාබීට් {0}', 'ගිබී {0}', 'ගිබී {0}'),
    'gigabyte' => new U('ගිගාබයිට්‌ {0}', 'ගිබ {0}', 'ගිබ {0}'),
    'gram' => new U('ග්‍රෑම් {0}', 'ග්‍රෑ. {0}', 'ග්‍රෑ. {0}'),
    'hectare' => new U('හෙක්ටයාර් {0}', 'හෙක් {0}', ['one' => 'හෙක් {0}', 'other' => '{0} ha']),
    'hour' => new U('පැය {0}', 'පැය {0}', 'පැය {0}'),
    'inch' => new U('අඟල් {0}', 'අඟල් {0}', '{0}″'),
    'kilobit' => new U('කිලෝබිට් {0}', 'කිබී {0}', 'කිබී {0}'),
    'kilobyte' => new U('කිලෝබයිට් {0}', 'කිබ {0}', 'කිබ {0}'),
    'kilogram' => new U('කිලෝග්‍රෑම් {0}', 'කි.ග්‍රෑ. {0}', 'කිග්‍රෑ{0}'),
    'kilometer' => new U('කිලෝමීටර් {0}', 'කි.මී {0}', 'කි.මී {0}'),
    'liter' => new U('ලීටර් {0}', 'ලී {0}', 'ලී {0}'),
    'megabit' => new U('මෙගාබීට් {0}', 'මෙබි {0}', 'මෙබි {0}'),
    'megabyte' => new U('මෙගාබයිට් {0}', 'මෙබ {0}', 'මෙබ {0}'),
    'meter' => new U('මීටර් {0}', 'මී {0}', 'මී {0}'),
    'microsecond' => new U('මයික්‍රොතත්පර {0}', 'මයික්‍රොතත් {0}', 'මයික්‍රොතත් {0}'),
    'mile' => new U('සැතපුම් {0}', 'සැත {0}', 'සැත {0}'),
    'mile-scandinavian' => new U('ස්කැන්ඩිනේවියානු සැතපුම් {0}', 'ස්කැසැත {0}', 'ස්කැසැත {0}'),
    'milliliter' => new U('මිලිලීටර් {0}', 'මිලී {0}', 'මිලී {0}'),
    'millimeter' => new U('මිලිමීටර් {0}', 'මිමී {0}', 'මිමී {0}'),
    'millisecond' => new U('මිලිතත්පර {0}', 'මිලිතත් {0}', 'මිලිතත් {0}'),
    'minute' => new U('මිනිත්තු {0}', 'මිනි {0}', 'මි {0}'),
    'month' => new U('මාස {0}', 'මාස {0}', 'මා {0}'),
    'nanosecond' => new U('නැනෝතත්පර {0}', 'නැත {0}', 'නැත {0}'),
    'ounce' => new U('අවුන්ස {0}', 'අවුස {0}', 'අවුස{0}'),
    'percent' => new U('ප්‍රතිශතය {0}', '{0}%', '{0}%'),
    'petabyte' => new U('පෙටාබයිට් {0}', 'පෙබ {0}', 'පෙබ {0}'),
    'pound' => new U('රාත්තල් {0}', 'රා {0}', 'රා{0}'),
    'second' => new U('තත්පර {0}', 'තත් {0}', 'ත {0}'),
    'stone' => new U(['one' => '{0} ගල', 'other' => 'ගල් {0}'], 'ගල් {0}', 'ගල් {0}'),
    'terabit' => new U('ටෙරාබිට් {0}', 'ටේබි {0}', 'ටේබි {0}'),
    'terabyte' => new U('ටෙරාබයිට් {0}', 'ටෙබ {0}', 'ටෙබ {0}'),
    'week' => new U('සති {0}', 'සති {0}', 'ස {0}'),
    'yard' => new U('යාර {0}', 'යාර {0}', 'යාර {0}'),
    'year' => new U('වසර {0}', 'වසර {0}', 'ව {0}'),
];
