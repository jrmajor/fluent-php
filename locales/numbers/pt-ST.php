<?php

use Major\Fluent\Formatters\Number\Locale\Locale;
use Major\Fluent\Formatters\Number\Locale\Symbols;

return new Locale(
    'Portuguese (São Tomé & Príncipe)',
    'latn',
    '#,##0.###',
    '#,##0%',
    "#,##0.00\u{00A0}¤",
    2,
    new Symbols(',', "\u{00A0}", '%', '-'),
);
