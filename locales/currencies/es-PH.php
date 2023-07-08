<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'PHP' => new C('PHP', 'peso filipino', '₱', '₱', ['one' => 'peso filipino', 'other' => 'pesos filipinos']),
];
