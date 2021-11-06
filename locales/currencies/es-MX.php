<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'AMD' => new C('AMD', 'dram', plurals: ['one' => 'dram armenio', 'other' => 'drams armenios']),
    'ANG' => new C('ANG', 'florín de las Antillas Neerlandesas', plurals: ['one' => 'florín de las Antillas Neerlandesas', 'other' => 'florines de las Antillas Neerlandesas']),
    'BDT' => new C('BDT', 'taka bangladesí', plurals: ['one' => 'taka bangladesí', 'other' => 'takas bangladesíes']),
    'BGN' => new C('BGN', 'lev búlgaro', plurals: ['one' => 'lev búlgaro', 'other' => 'leva búlgaros']),
    'BMD' => new C('BMD', 'dólar de Bermudas', plurals: ['one' => 'dólar de Bermudas', 'other' => 'dólares de Bermudas']),
    'BTN' => new C('BTN', 'ngultrum butanés', plurals: ['one' => 'ngultrum butanés', 'other' => 'ngultrums butaneses']),
    'EUR' => new C('EUR', 'euro', plurals: ['one' => 'euro', 'other' => 'euros']),
    'KGS' => new C('KGS', 'som kirguís', plurals: ['one' => 'som kirguís', 'other' => 'soms kirguises']),
    'KHR' => new C('KHR', 'riel camboyano', plurals: ['one' => 'riel camboyano', 'other' => 'rieles camboyanos']),
    'LAK' => new C('LAK', 'kip laosiano', plurals: ['one' => 'kip laosiano', 'other' => 'kips laosianos']),
    'LVL' => new C('LVL', 'lats letón', plurals: ['one' => 'lats letón', 'other' => 'lats letones']),
    'MRO' => new C('MRO', 'uguiya (1973–2017)', 'MRU', plurals: ['one' => 'uguiya (1973–2017)', 'other' => 'uguiyas (1973–2017)']),
    'MRU' => new C('MRU', 'uguiya', 'UM', plurals: ['one' => 'uguiya', 'other' => 'uguiyas']),
    'MVR' => new C('MVR', 'rupia de Maldivas', plurals: ['one' => 'rupia de Maldivas', 'other' => 'rupias de Maldivas']),
    'MWK' => new C('MWK', 'kwacha malauí', plurals: ['one' => 'kwacha malauí', 'other' => 'kwachas malauís']),
    'MXN' => new C('MXN', 'peso mexicano', '$', plurals: ['one' => 'peso mexicano', 'other' => 'pesos mexicanos']),
    'NIO' => new C('NIO', 'córdoba nicaragüense', plurals: ['one' => 'córdoba nicaragüense', 'other' => 'córdobas nicaragüenses']),
    'STN' => new C('STN', 'dobra santotomense', plurals: ['one' => 'dobra santotomense', 'other' => 'dobras santotomenses']),
    'THB' => new C('THB', 'baht tailandés', plurals: ['one' => 'baht tailandés', 'other' => 'bahts tailandeses']),
    'TMT' => new C('TMT', 'manat turcomano', plurals: ['one' => 'manat turcomano', 'other' => 'manats turcomanos']),
    'USD' => new C('USD', 'dólar estadounidense', plurals: ['one' => 'dólar estadounidense', 'other' => 'dólares estadounidenses']),
    'UZS' => new C('UZS', 'som uzbeko', plurals: ['one' => 'som uzbeko', 'other' => 'soms uzbekos']),
    'VES' => new C('VES', 'bolívar venezolano', plurals: ['one' => 'bolívar venezolano', 'other' => 'bolivares venezolanos']),
    'VND' => new C('VND', 'dong vietnamita', plurals: ['one' => 'dong vietnamita', 'other' => 'dongs vietnamitas'], minorUnits: 0),
    'ZMW' => new C('ZMW', 'kwacha zambiano', plurals: ['one' => 'kwacha zambiano', 'other' => 'kwachas zambianos']),
];
