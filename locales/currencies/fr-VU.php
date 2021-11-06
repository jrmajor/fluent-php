<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'VUV' => new C('VUV', 'vatu vanuatuan', 'VT', plurals: ['one' => 'vatu vanuatuan', 'other' => 'vatus vanuatuans'], minorUnits: 0),
];
