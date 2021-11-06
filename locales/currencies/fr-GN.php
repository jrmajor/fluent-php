<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'GNF' => new C('GNF', 'franc guinéen', 'FG', plurals: ['one' => 'franc guinéen', 'other' => 'francs guinéens'], minorUnits: 0),
];
