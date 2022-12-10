<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'BOB' => new C('BOB', 'Boliviano', 'Bs', narrow: 'Bs', plurals: ['other' => 'Boliviano']),
    'PEN' => new C('PEN', 'Sol Peruano', plurals: ['other' => 'Sol peruano']),
];
