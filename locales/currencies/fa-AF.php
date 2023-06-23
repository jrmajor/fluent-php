<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'AUD' => new C('AUD', 'دالر آسترالیا', 'A$', narrow: '$', plurals: ['other' => 'دلار استرالیا']),
    'BND' => new C('BND', 'دالر برونی', narrow: '$', plurals: ['other' => 'دلار برونئی']),
    'BYN' => new C('BYN', 'روبل روسیهٔ سفید', narrow: 'р.', plurals: ['other' => 'روبل بلاروس']),
    'BYR' => new C('BYR', 'روبل روسیهٔ سفید (۲۰۰۰–۲۰۱۶)', plurals: ['other' => 'روبل بلاروسی (۲۰۱۶–۲۰۰۰)']),
    'CAD' => new C('CAD', 'دالر کانادا', '$CA', narrow: '$', plurals: ['other' => 'دلار کانادا']),
    'CHF' => new C('CHF', 'فرانک سویس', plurals: ['other' => 'فرانک سوئیس']),
    'DKK' => new C('DKK', 'کرون دنمارک', narrow: 'kr', plurals: ['other' => 'کرون دانمارک']),
    'JPY' => new C('JPY', 'ین جاپان', '¥', narrow: '¥', plurals: ['other' => 'ین ژاپن'], minorUnits: 0),
    'MXN' => new C('MXN', 'پزوی مکسیکو', '$MX', narrow: '$', plurals: ['other' => 'پزوی مکزیک']),
    'NLG' => new C('NLG', 'گیلدر هالند', plurals: ['other' => 'گیلدر هلند']),
    'NOK' => new C('NOK', 'کرون ناروی', narrow: 'kr', plurals: ['other' => 'کرون نروژ']),
    'SEK' => new C('SEK', 'کرون سویدن', narrow: 'kr', plurals: ['other' => 'کرون سوئد']),
    'SGD' => new C('SGD', 'دالر سینگاپور', narrow: '$', plurals: ['other' => 'دلار سنگاپور']),
    'TJS' => new C('TJS', 'سامانی تاجکستان', plurals: ['other' => 'سامانی تاجیکستان']),
    'USD' => new C('USD', 'دالر امریکا', '$', narrow: '$', plurals: ['other' => 'دلار آمریکا']),
];
