<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'PEN' => new C('PEN', 'Sol Peruano', plurals: 'Sol peruano'),
    'USD' => new C('USD', 'Dólar Americano', '$', '$', 'Dólar americano'),
];
