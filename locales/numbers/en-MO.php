<?php

use Major\Fluent\Formatters\Number\Locale\Locale;
use Major\Fluent\Formatters\Number\Locale\Symbols;

return new Locale(
    'English (Macao SAR China)',
    'latn',
    '#,##0.###',
    '#,##0%',
    '¤#,##0.00',
    1,
    new Symbols('.', ',', '-', '%'),
);
