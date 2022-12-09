<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'ANG' => new C('ANG', 'নেদারল্যান্ডস অ্যান্টিলিয়ান গিল্ডার', plurals: ['one' => 'নেদারল্যান্ডস অ্যান্টিলিয়ান গিল্ডার', 'other' => 'নেদারল্যান্ডস অ্যান্টিলিয়ান গিল্ডার']),
    'AWG' => new C('AWG', 'আরুবান গিল্ডার', plurals: ['one' => 'আরুবান গিল্ডার', 'other' => 'আরুবান গিল্ডার']),
    'BMD' => new C('BMD', 'বারমুডান ডলার', narrow: '$', plurals: ['one' => 'বারমুডান ডলার', 'other' => 'বারমুডান ডলার']),
    'GTQ' => new C('GTQ', 'গুয়াতেমালান কেৎসাল', narrow: 'Q', plurals: ['one' => 'গুয়াতেমালান কেৎসাল', 'other' => 'গুয়াতেমালান কেৎসাল']),
    'HNL' => new C('HNL', 'হন্ডুরান লেম্পিরা', narrow: 'L', plurals: ['one' => 'হন্ডুরান লেম্পিরা', 'other' => 'হন্ডুরান লেম্পিরা']),
    'HTG' => new C('HTG', 'হাইতিয়ান গুর্দ', plurals: ['one' => 'হাইতিয়ান গুর্দ', 'other' => 'হাইতিয়ান গুর্দ']),
    'MXN' => new C('MXN', 'মেক্সিকান পেসো', 'MX$', narrow: '$', plurals: ['one' => 'মেক্সিকান পেসো', 'other' => 'মেক্সিকান পেসো']),
    'USD' => new C('USD', 'মার্কিন ডলার', '$', narrow: '$', plurals: ['one' => 'মার্কিন ডলার', 'other' => 'মার্কিন ডলার']),
    'XCD' => new C('XCD', 'পূর্ব ক্যারিবিয়ান ডলার', 'EC$', narrow: '$', plurals: ['one' => 'পূর্ব ক্যারিবিয়ান ডলার', 'other' => 'পূর্ব ক্যারিবিয়ান ডলার']),
];
