<?php

use Major\Fluent\Formatters\Number\Locale\Locale;
use Major\Fluent\Formatters\Number\Locale\Symbols;

return new Locale(
    'Burmese',
    'mymr',
    '#,##0.###',
    '#,##0%',
    "#,##0.00\u{00A0}¤",
    1,
    new Symbols('.', ',', '-', '%'),
);
