<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'PHP' => new C('PHP', 'peso filipino', '₱', plurals: ['one' => 'peso filipino', 'other' => 'pesos filipinos']),
];
