<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'BND' => new C('BND', 'Dolar Brunei', '$', narrow: '$', plurals: ['other' => 'Dolar Brunei']),
];
