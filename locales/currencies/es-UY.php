<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'ANG' => new C('ANG', 'florín de las Antillas Neerlandesas', plurals: ['one' => 'florín de las Antillas Neerlandesas', 'other' => 'florines de las Antillas Neerlandesas']),
    'BMD' => new C('BMD', 'dólar de Bermudas', narrow: '$', plurals: ['one' => 'dólar de Bermudas', 'other' => 'dólares de Bermudas']),
    'EGP' => new C('EGP', 'libra egipcia', narrow: 'E£', plurals: ['one' => 'libra egipcia', 'other' => 'libras egipcias']),
    'EUR' => new C('EUR', 'euro', narrow: '€', plurals: ['one' => 'euro', 'other' => 'euros']),
    'FKP' => new C('FKP', 'libra malvinense', narrow: 'FK£', plurals: ['one' => 'libra malvinense', 'other' => 'libras malvinenses']),
    'HTG' => new C('HTG', 'gourde haitiano', plurals: ['one' => 'gourde haitiano', 'other' => 'gourdes haitianos']),
    'KZT' => new C('KZT', 'tenge kazajo', narrow: '₸', plurals: ['one' => 'tenge kazajo', 'other' => 'tengues kazajos']),
    'MWK' => new C('MWK', 'kwacha malauí', plurals: ['one' => 'kwacha malauí', 'other' => 'kwachas malauíes']),
    'NIO' => new C('NIO', 'córdoba nicaragüense', narrow: 'C$', plurals: ['one' => 'córdoba nicaragüense', 'other' => 'córdobas nicaragüenses']),
    'SSP' => new C('SSP', 'libra sursudanesa', narrow: 'SD£', plurals: ['one' => 'libra sursudanesa', 'other' => 'libras sursudanesas']),
    'SYP' => new C('SYP', 'libra siria', narrow: 'S£', plurals: ['one' => 'libra siria', 'other' => 'libras sirias']),
    'THB' => new C('THB', 'baht tailandes', narrow: '฿', plurals: ['one' => 'baht tailandes', 'other' => 'bahts tailandeses']),
    'UYU' => new C('UYU', 'peso uruguayo', '$', '$', ['one' => 'peso uruguayo', 'other' => 'pesos uruguayos']),
    'UYW' => new C('UYW', 'unidad previsional uruguayo', 'UP', plurals: ['one' => 'unidad previsional uruguayo', 'other' => 'unidades previsionales uruguayos'], minorUnits: 4),
    'UZS' => new C('UZS', 'som uzbeko', plurals: ['one' => 'som uzbeko', 'other' => 'soms uzbekos']),
    'VEF' => new C('VEF', 'bolívar venezolano (2008–2018)', narrow: 'BsF', plurals: ['one' => 'bolívar venezolano (2008–2018)', 'other' => 'bolívares venezolanos (2008–2018)']),
    'VND' => new C('VND', 'dong', narrow: '₫', plurals: ['one' => 'dong', 'other' => 'dongs'], minorUnits: 0),
    'XXX' => new C('XXX', 'moneda desconocida', '¤', plurals: ['one' => '(unidad de moneda desconocida)', 'other' => '(moneda desconocida)']),
];
