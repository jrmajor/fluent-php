<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'CDF' => new C('CDF', 'Faranga ya Kongo', 'FC', plurals: ['one' => 'faranga ya Kongo', 'other' => 'faranga za Kongo']),
    'CNY' => new C('CNY', 'Yuan Renminbi ya China', 'CN¥', narrow: '¥', plurals: ['one' => 'yuan ya Uchina', 'other' => 'yuan za Uchina']),
    'ETB' => new C('ETB', 'Bir ya Uhabeshi', plurals: ['one' => 'birr ya Uhabeshi', 'other' => 'birr za Uhabeshi']),
    'JPY' => new C('JPY', 'Sarafu ya Kijapani', 'JP¥', narrow: '¥', plurals: ['one' => 'yen ya Japani', 'other' => 'yen za Japani'], minorUnits: 0),
    'MGA' => new C('MGA', 'Ariary ya Bukini', narrow: 'Ar', plurals: ['one' => 'ariari ya Madagaska', 'other' => 'ariari za Madagaska']),
    'MRO' => new C('MRO', 'Ugwiya ya Moritania (1973–2017)', plurals: ['one' => 'ouguiya ya Mauritania (1973–2017)', 'other' => 'ouguiya za Mauritania (1973–2017)']),
    'MRU' => new C('MRU', 'Ugwiya ya Moritania', plurals: ['one' => 'ouguiya ya Moritania', 'other' => 'ouguiya za Moritania']),
    'SCR' => new C('SCR', 'Rupia ya Shelisheli', plurals: ['one' => 'rupia ya Ushelisheli', 'other' => 'rupia za Ushelisheli']),
    'XAF' => new C('XAF', 'Faranga CFA BEAC', 'FCFA', plurals: ['one' => 'faranga ya Afrika ya Kati CFA', 'other' => 'faranga za Afrika ya Kati CFA'], minorUnits: 0),
    'XOF' => new C('XOF', 'Faranga CFA BCEAO', 'F CFA', plurals: ['one' => 'faranga ya Afrika Magharibi CFA', 'other' => 'faranga za Afrika Magharibi CFA'], minorUnits: 0),
];
