<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'BAM' => new C('BAM', 'konvertibilna marka', 'KM', narrow: 'KM', plurals: ['one' => 'konvertibilna marka', 'few' => 'konvertibilne marke', 'other' => 'konvertibilnih maraka']),
];
