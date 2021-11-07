<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'BIF' => new C('BIF', 'Burundian Franc', 'FBu', plurals: ['one' => 'Burundian franc', 'other' => 'Burundian francs'], minorUnits: 0),
];
