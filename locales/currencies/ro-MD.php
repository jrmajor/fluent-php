<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'MDL' => new C('MDL', 'leu moldovenesc', 'L', plurals: ['one' => 'leu moldovenesc', 'few' => 'lei moldovenești', 'other' => 'lei moldovenești']),
];
