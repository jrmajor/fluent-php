<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'CDF' => new C('CDF', 'franc congolais', 'FC', plurals: ['one' => 'franc congolais', 'other' => 'francs congolais']),
];
