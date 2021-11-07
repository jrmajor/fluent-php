<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'BIF' => new C('BIF', 'franc burundais', 'FBu', plurals: ['one' => 'franc burundais', 'other' => 'francs burundais'], minorUnits: 0),
];
