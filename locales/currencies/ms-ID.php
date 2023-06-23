<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'IDR' => new C('IDR', 'Rupiah Indonesia', 'Rp', narrow: 'Rp', plurals: 'Rupiah Indonesia'),
];
