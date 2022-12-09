<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'GHS' => new C('GHS', 'Sidi na Ghana', 'GH₵', narrow: 'GH₵', plurals: ['one' => 'Sidi na Ghana', 'other' => 'Sidi na Ghana']),
];
