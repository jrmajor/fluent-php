<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'IDR' => new C('IDR', 'Rupiah Indonesia', 'Rp', plurals: ['other' => 'Rupiah Indonesia']),
];
