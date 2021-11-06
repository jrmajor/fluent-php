<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'HTG' => new C('HTG', 'gourde haïtienne', 'G', plurals: ['one' => 'gourde haïtienne', 'other' => 'gourdes haïtiennes']),
];
