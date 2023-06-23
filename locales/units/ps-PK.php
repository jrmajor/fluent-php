<?php

use Major\Fluent\Formatters\Number\Locale\Unit as U;

return [
    'celsius' => new U(['other' => '{0} درجے سيلسيس'], ['other' => '{0}°C'], ['other' => '{0}°C']),
    'day' => new U(['one' => '{0} ورځ', 'other' => '{0} ورځے'], ['one' => '{0} ورځ', 'other' => '{0} ورځے'], ['one' => '{0} ورځ', 'other' => '{0}d']),
    'degree' => new U(['other' => '{0} درجے'], ['other' => '{0}°'], ['other' => '{0}°']),
    'fahrenheit' => new U(['other' => '{0} درجے فارنهايټ'], ['other' => '{0}°F'], ['other' => '{0}°F']),
    'hectare' => new U(['one' => '{0} هيکتر', 'other' => '{0} هيکترے'], ['other' => '{0} ha'], ['other' => '{0} ha']),
    'inch' => new U(['one' => '{0} انچ', 'other' => '{0} انچے'], ['other' => '{0} in'], ['other' => '{0} in']),
    'month' => new U(['one' => '{0} مياشت', 'other' => '{0} مياشتے'], ['one' => '{0} m', 'other' => '{0} mths'], ['other' => '{0} m']),
];
