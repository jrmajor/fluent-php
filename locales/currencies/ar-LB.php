<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'SDG' => new C('SDG', 'جنيه سوداني', plurals: ['few' => 'جنيهات سودانية', 'many' => 'جنيهًا سودانيًا', 'other' => 'جنيه سوداني']),
];
