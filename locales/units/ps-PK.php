<?php

use Major\Fluent\Formatters\Number\Locale\Unit as U;

return [
    'celsius' => new U('{0} درجے سيلسيس', '{0}°C', '{0}°C'),
    'day' => new U(['one' => '{0} ورځ', 'other' => '{0} ورځے'], ['one' => '{0} ورځ', 'other' => '{0} ورځے'], ['one' => '{0} ورځ', 'other' => '{0}d']),
    'degree' => new U('{0} درجے', '{0}°', '{0}°'),
    'fahrenheit' => new U('{0} درجے فارنهايټ', '{0}°F', '{0}°F'),
    'hectare' => new U(['one' => '{0} هيکتر', 'other' => '{0} هيکترے'], '{0} ha', '{0} ha'),
    'inch' => new U(['one' => '{0} انچ', 'other' => '{0} انچے'], '{0} in', '{0} in'),
    'month' => new U(['one' => '{0} مياشت', 'other' => '{0} مياشتے'], ['one' => '{0} m', 'other' => '{0} mths'], '{0} m'),
];
