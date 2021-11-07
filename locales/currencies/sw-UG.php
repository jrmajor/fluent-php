<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'UGX' => new C('UGX', 'Shilingi ya Uganda', 'USh', plurals: ['one' => 'shilingi ya Uganda', 'other' => 'shilingi za Uganda'], minorUnits: 0),
];
