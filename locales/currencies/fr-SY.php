<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'SYP' => new C('SYP', 'livre syrienne', 'LS', narrow: '£', plurals: ['one' => 'livre syrienne', 'other' => 'livres syriennes']),
];
