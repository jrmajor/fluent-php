<?php

use Major\Fluent\Formatters\Number\Locale\Locale;
use Major\Fluent\Formatters\Number\Locale\Symbols;

return new Locale(
    'Hebrew',
    'latn',
    '#,##0.###',
    '#,##0%',
    "\u{200F}#,##0.00\u{00A0}¤;\u{200F}-#,##0.00\u{00A0}¤",
    1,
    new Symbols('.', ',', '%', '‎+', '‎-'),
);
