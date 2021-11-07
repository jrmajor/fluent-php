<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'KMF' => new C('KMF', 'franc comorien', 'CF', narrow: 'FC', plurals: ['one' => 'franc comorien', 'other' => 'francs comoriens'], minorUnits: 0),
];
