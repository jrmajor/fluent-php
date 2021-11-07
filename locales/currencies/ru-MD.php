<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'MDL' => new C('MDL', 'молдавский лей', 'L', plurals: ['one' => 'молдавский лей', 'few' => 'молдавских лея', 'many' => 'молдавских леев', 'other' => 'молдавского лея']),
];
