<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'AUD' => new C('AUD', 'دالر آسترالیا', 'A$', narrow: '$', plurals: 'دلار استرالیا'),
    'BND' => new C('BND', 'دالر برونی', narrow: '$', plurals: 'دلار برونئی'),
    'BYN' => new C('BYN', 'روبل روسیهٔ سفید', narrow: 'р.', plurals: 'روبل بلاروس'),
    'BYR' => new C('BYR', 'روبل روسیهٔ سفید (۲۰۰۰–۲۰۱۶)', plurals: 'روبل بلاروسی (۲۰۱۶–۲۰۰۰)'),
    'CAD' => new C('CAD', 'دالر کانادا', '$CA', narrow: '$', plurals: 'دلار کانادا'),
    'CHF' => new C('CHF', 'فرانک سویس', plurals: 'فرانک سوئیس'),
    'DKK' => new C('DKK', 'کرون دنمارک', narrow: 'kr', plurals: 'کرون دانمارک'),
    'JPY' => new C('JPY', 'ین جاپان', '¥', narrow: '¥', plurals: 'ین ژاپن', minorUnits: 0),
    'MXN' => new C('MXN', 'پزوی مکسیکو', '$MX', narrow: '$', plurals: 'پزوی مکزیک'),
    'NLG' => new C('NLG', 'گیلدر هالند', plurals: 'گیلدر هلند'),
    'NOK' => new C('NOK', 'کرون ناروی', narrow: 'kr', plurals: 'کرون نروژ'),
    'SEK' => new C('SEK', 'کرون سویدن', narrow: 'kr', plurals: 'کرون سوئد'),
    'SGD' => new C('SGD', 'دالر سینگاپور', narrow: '$', plurals: 'دلار سنگاپور'),
    'TJS' => new C('TJS', 'سامانی تاجکستان', plurals: 'سامانی تاجیکستان'),
    'USD' => new C('USD', 'دالر امریکا', '$', narrow: '$', plurals: 'دلار آمریکا'),
];
