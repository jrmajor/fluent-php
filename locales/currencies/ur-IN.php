<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'CRC' => new C('CRC', 'کوسٹا ریکا کولون', narrow: '₡', plurals: 'کوسٹا ریکا کولون'),
    'CUC' => new C('CUC', 'قابل منتقلی کیوبائی پیسو', narrow: '$', plurals: 'قابل منتقلی کیوبائی پیسو'),
    'CUP' => new C('CUP', 'کیوبائی پیسو', narrow: '$', plurals: 'کیوبائی پیسو'),
    'CVE' => new C('CVE', 'کیپ ورڈی اسکیوڈو', plurals: 'کیپ ورڈی اسکیوڈو'),
    'GBP' => new C('GBP', 'برطانوی پاونڈ سٹرلنگ', '£', narrow: '£', plurals: 'برطانوی پاونڈ سٹرلنگ'),
    'GHS' => new C('GHS', 'گھانی سیڈی', narrow: 'GH₵', plurals: 'گھانی سیڈی'),
    'PKR' => new C('PKR', 'پاکستانی روپیہ', narrow: 'Rs', plurals: ['one' => 'پاکستانی روپیہ', 'other' => 'پاکستانی روپے']),
    'WST' => new C('WST', 'ساموآئی ٹالا', plurals: 'ساموآئی ٹالا'),
];
