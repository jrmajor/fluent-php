<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'BOB' => new C('BOB', 'Boliviano', 'Bs', 'Bs'),
    'PEN' => new C('PEN', 'Sol Peruano', plurals: 'Sol peruano'),
];
