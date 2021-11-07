<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'BND' => new C('BND', 'دولار بروناي', narrow: '$', plurals: ['zero' => 'دولار بروناي', 'one' => 'دولار بروناي', 'two' => 'دولار بروناي', 'few' => 'دولار بروناي', 'many' => 'دولار بروناي', 'other' => 'دولار بروناي']),
];
