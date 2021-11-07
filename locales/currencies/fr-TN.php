<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'TND' => new C('TND', 'dinar tunisien', 'DT', plurals: ['one' => 'dinar tunisien', 'other' => 'dinars tunisiens'], minorUnits: 3),
];
