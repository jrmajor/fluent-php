<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'AUD' => new C('AUD', 'دالر آسترالیا', 'A$', '$'),
    'BND' => new C('BND', 'دالر برونی', narrow: '$'),
    'BYN' => new C('BYN', 'روبل روسیهٔ سفید', narrow: 'р.'),
    'BYR' => new C('BYR', 'روبل روسیهٔ سفید (۲۰۰۰–۲۰۱۶)'),
    'CAD' => new C('CAD', 'دالر کانادا', '$CA', '$'),
    'CHF' => new C('CHF', 'فرانک سویس'),
    'DKK' => new C('DKK', 'کرون دنمارک', narrow: 'kr'),
    'JPY' => new C('JPY', 'ین جاپان', '¥', '¥', minorUnits: 0),
    'MXN' => new C('MXN', 'پزوی مکسیکو', '$MX', '$'),
    'NLG' => new C('NLG', 'گیلدر هالند'),
    'NOK' => new C('NOK', 'کرون ناروی', narrow: 'kr'),
    'SEK' => new C('SEK', 'کرون سویدن', narrow: 'kr'),
    'SGD' => new C('SGD', 'دالر سینگاپور', narrow: '$'),
    'TJS' => new C('TJS', 'سامانی تاجکستان'),
    'USD' => new C('USD', 'دالر امریکا', '$', '$'),
];
