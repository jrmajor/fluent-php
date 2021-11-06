<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'KZT' => new C('KZT', 'казахский тенге', '₸', plurals: ['one' => 'казахский тенге', 'few' => 'казахских тенге', 'many' => 'казахских тенге', 'other' => 'казахского тенге']),
];
