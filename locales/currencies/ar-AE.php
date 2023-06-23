<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'BND' => new C('BND', 'دولار بروناي', narrow: '$', plurals: ['other' => 'دولار بروناي']),
];
