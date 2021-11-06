<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'MUR' => new C('MUR', 'roupie mauricienne', 'Rs', plurals: ['one' => 'roupie mauricienne', 'other' => 'roupies mauriciennes']),
];
