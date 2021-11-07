<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'ANG' => new C('ANG', 'florín de las Antillas Neerlandesas', plurals: ['one' => 'florín de las Antillas Neerlandesas', 'other' => 'florines de las Antillas Neerlandesas']),
    'BGN' => new C('BGN', 'lev búlgaro', plurals: ['one' => 'lev búlgaro', 'other' => 'leva búlgaros']),
    'BMD' => new C('BMD', 'dólar de Bermudas', narrow: '$', plurals: ['one' => 'dólar de Bermudas', 'other' => 'dólares de Bermudas']),
    'COP' => new C('COP', 'peso colombiano', '$', narrow: '$', plurals: ['one' => 'peso colombiano', 'other' => 'pesos colombianos']),
    'EGP' => new C('EGP', 'libra egipcia', narrow: 'E£', plurals: ['one' => 'libra egipcia', 'other' => 'libras egipcias']),
    'EUR' => new C('EUR', 'euro', narrow: '€', plurals: ['one' => 'euro', 'other' => 'euros']),
    'FKP' => new C('FKP', 'libra malvinense', narrow: 'FK£', plurals: ['one' => 'libra malvinense', 'other' => 'libras malvinenses']),
    'MWK' => new C('MWK', 'kwacha malauí', plurals: ['one' => 'kwacha malauí', 'other' => 'kwachas malauís']),
    'NIO' => new C('NIO', 'córdoba nicaragüense', narrow: 'C$', plurals: ['one' => 'córdoba nicaragüense', 'other' => 'córdobas nicaragüenses']),
    'SSP' => new C('SSP', 'libra sursudanesa', narrow: 'SD£', plurals: ['one' => 'libra sursudanesa', 'other' => 'libras sursudanesas']),
    'SYP' => new C('SYP', 'libra siria', narrow: 'S£', plurals: ['one' => 'libra siria', 'other' => 'libras sirias']),
    'THB' => new C('THB', 'baht tailandes', narrow: '฿', plurals: ['one' => 'baht tailandes', 'other' => 'bahts tailandeses']),
    'UZS' => new C('UZS', 'som uzbeko', plurals: ['one' => 'som uzbeko', 'other' => 'soms uzbekos']),
    'VEF' => new C('VEF', 'bolívar venezolano (2008–2018)', narrow: 'BsF', plurals: ['one' => 'bolívar venezolano (2008–2018)', 'other' => 'bolívares venezolanos (2008–2018)']),
    'VND' => new C('VND', 'dong', narrow: '₫', plurals: ['one' => 'dong', 'other' => 'dongs'], minorUnits: 0),
    'XXX' => new C('XXX', 'moneda desconocida', '¤', plurals: ['one' => '(unidad de moneda desconocida)', 'other' => '(moneda desconocida)']),
];
