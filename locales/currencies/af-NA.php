<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'NAD' => new C('NAD', 'Namibiese dollar', '$', narrow: '$', plurals: 'Namibiese dollar'),
];
