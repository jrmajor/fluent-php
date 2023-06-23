<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'ANG' => new C('ANG', 'নেদারল্যান্ডস অ্যান্টিলিয়ান গিল্ডার', plurals: ['other' => 'নেদারল্যান্ডস অ্যান্টিলিয়ান গিল্ডার']),
    'AWG' => new C('AWG', 'আরুবান গিল্ডার', plurals: ['other' => 'আরুবান গিল্ডার']),
    'BMD' => new C('BMD', 'বারমুডান ডলার', narrow: '$', plurals: ['other' => 'বারমুডান ডলার']),
    'GTQ' => new C('GTQ', 'গুয়াতেমালান কেৎসাল', narrow: 'Q', plurals: ['other' => 'গুয়াতেমালান কেৎসাল']),
    'HNL' => new C('HNL', 'হন্ডুরান লেম্পিরা', narrow: 'L', plurals: ['other' => 'হন্ডুরান লেম্পিরা']),
    'HTG' => new C('HTG', 'হাইতিয়ান গুর্দ', plurals: ['other' => 'হাইতিয়ান গুর্দ']),
    'MXN' => new C('MXN', 'মেক্সিকান পেসো', 'MX$', narrow: '$', plurals: ['other' => 'মেক্সিকান পেসো']),
    'USD' => new C('USD', 'মার্কিন ডলার', '$', narrow: '$', plurals: ['other' => 'মার্কিন ডলার']),
    'XCD' => new C('XCD', 'পূর্ব ক্যারিবিয়ান ডলার', 'EC$', narrow: '$', plurals: ['other' => 'পূর্ব ক্যারিবিয়ান ডলার']),
];
