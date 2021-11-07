<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'SRD' => new C('SRD', 'Surinaamse dollar', '$', narrow: '$', plurals: ['one' => 'Surinaamse dollar', 'other' => 'Surinaamse dollar']),
];
