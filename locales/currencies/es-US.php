<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'ANG' => new C('ANG', 'florín de las Antillas Neerlandesas', plurals: ['one' => 'florín de las Antillas Neerlandesas', 'other' => 'florines de las Antillas Neerlandesas']),
    'BDT' => new C('BDT', 'taka bangladesí', narrow: '৳', plurals: ['one' => 'taka bangladesí', 'other' => 'takas bangladesíes']),
    'BGN' => new C('BGN', 'lev búlgaro', plurals: ['one' => 'lev búlgaro', 'other' => 'leva búlgaros']),
    'BMD' => new C('BMD', 'dólar de Bermudas', narrow: '$', plurals: ['one' => 'dólar de Bermudas', 'other' => 'dólares de Bermudas']),
    'BTN' => new C('BTN', 'ngultrum butanés', plurals: ['one' => 'ngultrum butanés', 'other' => 'gultrums bultaneses']),
    'EGP' => new C('EGP', 'libra egipcia', narrow: 'E£', plurals: ['one' => 'libra egipcia', 'other' => 'libras egipcias']),
    'ETB' => new C('ETB', 'birr', plurals: ['one' => 'birr', 'other' => 'birres']),
    'EUR' => new C('EUR', 'euro', narrow: '€', plurals: ['one' => 'euro', 'other' => 'euros']),
    'JPY' => new C('JPY', 'yen', '¥', narrow: '¥', plurals: ['one' => 'yen', 'other' => 'yenes'], minorUnits: 0),
    'LAK' => new C('LAK', 'kip laosiano', narrow: '₭', plurals: ['one' => 'kip laosiano', 'other' => 'kips laosianos']),
    'MWK' => new C('MWK', 'kwacha malauí', plurals: ['one' => 'kwacha malauí', 'other' => 'kwachas malauís']),
    'NIO' => new C('NIO', 'córdoba nicaragüense', narrow: 'C$', plurals: ['one' => 'córdoba nicaragüense', 'other' => 'córdobas nicaragüenses']),
    'RON' => new C('RON', 'leu rumano', narrow: 'lei', plurals: ['one' => 'leu rumano', 'other' => 'lei rumanos']),
    'THB' => new C('THB', 'bat', narrow: '฿', plurals: ['one' => 'bat', 'other' => 'bats']),
    'USD' => new C('USD', 'dólar estadounidense', '$', narrow: '$', plurals: ['one' => 'dólar estadounidense', 'other' => 'dólares estadounidenses']),
    'VND' => new C('VND', 'dong vietnamita', narrow: '₫', plurals: ['one' => 'dong vietnamita', 'other' => 'dongs vietnamitas'], minorUnits: 0),
    'XAF' => new C('XAF', 'franco CFA de África central', plurals: ['one' => 'franco CFA de África central', 'other' => 'francos CFA de África central'], minorUnits: 0),
    'XXX' => new C('XXX', 'moneda desconocida', '¤', plurals: ['one' => '(unidad de moneda desconocida)', 'other' => '(moneda desconocida)']),
    'ZMW' => new C('ZMW', 'kwacha zambiano', narrow: 'ZK', plurals: ['one' => 'kwacha zambiano', 'other' => 'kwachas zambianos']),
];
