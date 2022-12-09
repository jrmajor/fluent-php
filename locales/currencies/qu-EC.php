<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'PEN' => new C('PEN', 'Sol Peruano', plurals: ['other' => 'Sol peruano']),
    'USD' => new C('USD', 'Dólar Americano', '$', narrow: '$', plurals: ['other' => 'Dólar americano']),
];
