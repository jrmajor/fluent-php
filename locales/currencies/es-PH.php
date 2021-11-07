<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'PHP' => new C('PHP', 'peso filipino', '₱', narrow: '₱', plurals: ['one' => 'peso filipino', 'other' => 'pesos filipinos']),
];
