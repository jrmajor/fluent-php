<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'RWF' => new C('RWF', 'franc rwandais', 'RF', narrow: 'FR', plurals: ['one' => 'franc rwandais', 'other' => 'francs rwandais'], minorUnits: 0),
];