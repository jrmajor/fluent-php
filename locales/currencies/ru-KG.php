<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'KGS' => new C('KGS', 'киргизский сом', 'сом', plurals: ['one' => 'киргизский сом', 'few' => 'киргизских сома', 'many' => 'киргизских сомов', 'other' => 'киргизского сома']),
];
