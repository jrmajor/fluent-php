<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'DJF' => new C('DJF', 'franc djiboutien', 'Fdj', plurals: ['one' => 'franc djiboutien', 'other' => 'francs djiboutiens'], minorUnits: 0),
];
