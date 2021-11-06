<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'FRF' => new C('FRF', 'franc francès', 'F', plurals: ['one' => 'franc francès', 'other' => 'francs francesos']),
];
