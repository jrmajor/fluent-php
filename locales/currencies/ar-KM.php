<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'KMF' => new C('KMF', 'فرنك جزر القمر', 'CF', narrow: 'CF', plurals: ['other' => 'فرنك جزر القمر'], minorUnits: 0),
];
