<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'ANG' => new C('ANG', 'florín de las Antillas Neerlandesas', plurals: ['one' => 'florín de las Antillas Neerlandesas', 'other' => 'florines de las Antillas Neerlandesas']),
    'BGN' => new C('BGN', 'lev búlgaro', plurals: ['one' => 'lev búlgaro', 'other' => 'leva búlgaros']),
    'BMD' => new C('BMD', 'dólar de Bermudas', plurals: ['one' => 'dólar de Bermudas', 'other' => 'dólares de Bermudas']),
    'EUR' => new C('EUR', 'euro', plurals: ['one' => 'euro', 'other' => 'euros']),
    'MWK' => new C('MWK', 'kwacha malauí', plurals: ['one' => 'kwacha malauí', 'other' => 'kwachas malauís']),
    'NIO' => new C('NIO', 'córdoba nicaragüense', plurals: ['one' => 'córdoba nicaragüense', 'other' => 'córdobas nicaragüenses']),
    'THB' => new C('THB', 'baht tailandes', plurals: ['one' => 'baht tailandes', 'other' => 'bahts tailandeses']),
    'USD' => new C('USD', 'dólar estadounidense', plurals: ['one' => 'dólar estadounidense', 'other' => 'dólares estadounidenses']),
    'UZS' => new C('UZS', 'som uzbeko', plurals: ['one' => 'som uzbeko', 'other' => 'soms uzbekos']),
    'VEF' => new C('VEF', 'bolívar venezolano (2008–2018)', 'Bs.', plurals: ['one' => 'bolívar venezolano (2008–2018)', 'other' => 'bolívares venezolanos (2008–2018)']),
    'VES' => new C('VES', 'bolívar soberano', 'Bs.S', plurals: ['one' => 'bolívar soberano', 'other' => 'bolívares soberanos']),
    'VND' => new C('VND', 'dong', plurals: ['one' => 'dong', 'other' => 'dongs'], minorUnits: 0),
    'XXX' => new C('XXX', 'moneda desconocida', '¤', plurals: ['one' => '(unidad de moneda desconocida)', 'other' => '(moneda desconocida)']),
];
