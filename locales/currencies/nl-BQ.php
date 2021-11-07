<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'USD' => new C('USD', 'Amerikaanse dollar', '$', narrow: '$', plurals: ['one' => 'Amerikaanse dollar', 'other' => 'Amerikaanse dollar']),
];
