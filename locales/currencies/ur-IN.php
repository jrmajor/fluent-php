<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'CRC' => new C('CRC', 'کوسٹا ریکا کولون', narrow: '₡'),
    'CUC' => new C('CUC', 'قابل منتقلی کیوبائی پیسو', narrow: '$'),
    'CUP' => new C('CUP', 'کیوبائی پیسو', narrow: '$'),
    'CVE' => new C('CVE', 'کیپ ورڈی اسکیوڈو'),
    'GBP' => new C('GBP', 'برطانوی پاونڈ سٹرلنگ', '£', '£'),
    'GHS' => new C('GHS', 'گھانی سیڈی', narrow: 'GH₵'),
    'PKR' => new C('PKR', 'پاکستانی روپیہ', narrow: 'Rs', plurals: ['one' => 'پاکستانی روپیہ', 'other' => 'پاکستانی روپے']),
    'WST' => new C('WST', 'ساموآئی ٹالا'),
];
