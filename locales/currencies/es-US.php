<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'ANG' => new C('ANG', 'florín de las Antillas Neerlandesas', plurals: ['one' => 'florín de las Antillas Neerlandesas', 'other' => 'florines de las Antillas Neerlandesas']),
    'BDT' => new C('BDT', 'taka bangladesí', plurals: ['one' => 'taka bangladesí', 'other' => 'takas bangladesíes']),
    'BGN' => new C('BGN', 'lev búlgaro', plurals: ['one' => 'lev búlgaro', 'other' => 'leva búlgaros']),
    'BMD' => new C('BMD', 'dólar de Bermudas', plurals: ['one' => 'dólar de Bermudas', 'other' => 'dólares de Bermudas']),
    'BTN' => new C('BTN', 'ngultrum butanés', plurals: ['one' => 'ngultrum butanés', 'other' => 'gultrums bultaneses']),
    'ETB' => new C('ETB', 'birr', plurals: ['one' => 'birr', 'other' => 'birres']),
    'EUR' => new C('EUR', 'euro', plurals: ['one' => 'euro', 'other' => 'euros']),
    'JPY' => new C('JPY', 'yen', '¥', plurals: ['one' => 'yen', 'other' => 'yenes'], minorUnits: 0),
    'LAK' => new C('LAK', 'kip laosiano', plurals: ['one' => 'kip laosiano', 'other' => 'kips laosianos']),
    'MWK' => new C('MWK', 'kwacha malauí', plurals: ['one' => 'kwacha malauí', 'other' => 'kwachas malauís']),
    'NIO' => new C('NIO', 'córdoba nicaragüense', plurals: ['one' => 'córdoba nicaragüense', 'other' => 'córdobas nicaragüenses']),
    'THB' => new C('THB', 'bat', plurals: ['one' => 'bat', 'other' => 'bats']),
    'USD' => new C('USD', 'dólar estadounidense', '$', plurals: ['one' => 'dólar estadounidense', 'other' => 'dólares estadounidenses']),
    'VND' => new C('VND', 'dong vietnamita', plurals: ['one' => 'dong vietnamita', 'other' => 'dongs vietnamitas'], minorUnits: 0),
    'XAF' => new C('XAF', 'franco CFA de África central', plurals: ['one' => 'franco CFA de África central', 'other' => 'francos CFA de África central'], minorUnits: 0),
    'XXX' => new C('XXX', 'moneda desconocida', '¤', plurals: ['one' => '(unidad de moneda desconocida)', 'other' => '(moneda desconocida)']),
    'ZMW' => new C('ZMW', 'kwacha zambiano', plurals: ['one' => 'kwacha zambiano', 'other' => 'kwachas zambianos']),
];
