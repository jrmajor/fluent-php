<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'EUR' => new C('EUR', 'Euro', narrow: '€', plurals: ['other' => 'Euro']),
];
