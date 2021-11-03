<?php

use Major\Fluent\Formatters\Number\Locale\Locale;
use Major\Fluent\Formatters\Number\Locale\Symbols;

return new Locale(
    'Persian',
    'arabext',
    '#,##0.###',
    '#,##0%',
    "\u{200E}¤#,##0.00",
    1,
    new Symbols('٫', '٬', '٪', '‎−'),
);
