<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'CRC' => new C('CRC', 'کوسٹا ریکا کولون', narrow: '₡', plurals: ['one' => 'کوسٹا ریکا کولون', 'other' => 'کوسٹا ریکا کولون']),
    'CUC' => new C('CUC', 'قابل منتقلی کیوبائی پیسو', narrow: '$', plurals: ['one' => 'قابل منتقلی کیوبائی پیسو', 'other' => 'قابل منتقلی کیوبائی پیسو']),
    'CUP' => new C('CUP', 'کیوبائی پیسو', narrow: '$', plurals: ['one' => 'کیوبائی پیسو', 'other' => 'کیوبائی پیسو']),
    'CVE' => new C('CVE', 'کیپ ورڈی اسکیوڈو', plurals: ['one' => 'کیپ ورڈی اسکیوڈو', 'other' => 'کیپ ورڈی اسکیوڈو']),
    'GBP' => new C('GBP', 'برطانوی پاونڈ سٹرلنگ', '£', narrow: '£', plurals: ['one' => 'برطانوی پاونڈ سٹرلنگ', 'other' => 'برطانوی پاونڈ سٹرلنگ']),
    'GHS' => new C('GHS', 'گھانی سیڈی', narrow: 'GH₵', plurals: ['one' => 'گھانی سیڈی', 'other' => 'گھانی سیڈی']),
    'PKR' => new C('PKR', 'پاکستانی روپیہ', narrow: 'Rs', plurals: ['one' => 'پاکستانی روپیہ', 'other' => 'پاکستانی روپے']),
    'WST' => new C('WST', 'ساموآئی ٹالا', plurals: ['one' => 'ساموآئی ٹالا', 'other' => 'ساموآئی ٹالا']),
];
