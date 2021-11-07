<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'MKD' => new C('MKD', 'Denari maqedonas', 'den', plurals: ['one' => 'denar maqedonas', 'other' => 'denarë maqedonas']),
];
