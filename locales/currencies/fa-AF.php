<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'AUD' => new C('AUD', 'دالر آسترالیا', 'A$', plurals: ['one' => 'دلار استرالیا', 'other' => 'دلار استرالیا']),
    'BND' => new C('BND', 'دالر برونی', plurals: ['one' => 'دلار برونئی', 'other' => 'دلار برونئی']),
    'BYN' => new C('BYN', 'روبل روسیهٔ سفید', plurals: ['one' => 'روبل بلاروسی', 'other' => 'روبل بلاروسی']),
    'BYR' => new C('BYR', 'روبل روسیهٔ سفید (۲۰۰۰–۲۰۱۶)', plurals: ['one' => 'روبل بلاروسی (۲۰۱۶–۲۰۰۰)', 'other' => 'روبل بلاروسی (۲۰۱۶–۲۰۰۰)']),
    'CAD' => new C('CAD', 'دالر کانادا', '$CA', plurals: ['one' => 'دلار کانادا', 'other' => 'دلار کانادا']),
    'CHF' => new C('CHF', 'فرانک سویس', plurals: ['one' => 'فرانک سوئیس', 'other' => 'فرانک سوئیس']),
    'DKK' => new C('DKK', 'کرون دنمارک', plurals: ['one' => 'کرون دانمارک', 'other' => 'کرون دانمارک']),
    'JPY' => new C('JPY', 'ین جاپان', '¥', plurals: ['one' => 'ین ژاپن', 'other' => 'ین ژاپن'], minorUnits: 0),
    'MXN' => new C('MXN', 'پزوی مکسیکو', '$MX', plurals: ['one' => 'پزوی مکزیک', 'other' => 'پزوی مکزیک']),
    'NLG' => new C('NLG', 'گیلدر هالند', plurals: ['one' => 'گیلدر هلند', 'other' => 'گیلدر هلند']),
    'NOK' => new C('NOK', 'کرون ناروی', plurals: ['one' => 'کرون نروژ', 'other' => 'کرون نروژ']),
    'SEK' => new C('SEK', 'کرون سویدن', plurals: ['one' => 'کرون سوئد', 'other' => 'کرون سوئد']),
    'SGD' => new C('SGD', 'دالر سینگاپور', plurals: ['one' => 'دلار سنگاپور', 'other' => 'دلار سنگاپور']),
    'TJS' => new C('TJS', 'سامانی تاجکستان', plurals: ['one' => 'سامانی تاجیکستان', 'other' => 'سامانی تاجیکستان']),
    'USD' => new C('USD', 'دالر امریکا', '$', plurals: ['one' => 'دلار امریکا', 'other' => 'دلار امریکا']),
];
