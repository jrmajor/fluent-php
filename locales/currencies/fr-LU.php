<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'FRF' => new C('FRF', 'franc français', plurals: ['one' => 'franc français', 'other' => 'francs français']),
    'LUF' => new C('LUF', 'franc luxembourgeois', 'F', plurals: ['one' => 'franc luxembourgeois', 'other' => 'francs luxembourgeois']),
];
