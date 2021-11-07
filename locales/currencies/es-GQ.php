<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'XAF' => new C('XAF', 'franco CFA de África Central', 'FCFA', plurals: ['one' => 'franco CFA de África Central', 'other' => 'francos CFA de África Central'], minorUnits: 0),
];
