<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'SGD' => new C('SGD', 'Dolar Singapura', '$', plurals: ['other' => 'Dolar Singapura']),
];
