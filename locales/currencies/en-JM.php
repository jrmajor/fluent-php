<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'AFN' => new C('AFN', 'Afghan Afghani', narrow: '؋', plurals: ['one' => 'Afghan afghani', 'other' => 'Afghan afghanis']),
    'BMD' => new C('BMD', 'Bermudian Dollar', narrow: '$', plurals: ['one' => 'Bermudian dollar', 'other' => 'Bermudian dollars']),
    'BYB' => new C('BYB', 'Belarusian New Rouble (1994–1999)', plurals: ['one' => 'Belarusian new rouble (1994–1999)', 'other' => 'Belarusian new roubles (1994–1999)']),
    'BYN' => new C('BYN', 'Belarusian Rouble', plurals: ['one' => 'Belarusian rouble', 'other' => 'Belarusian roubles']),
    'BYR' => new C('BYR', 'Belarusian Rouble (2000–2016)', plurals: ['one' => 'Belarusian rouble (2000–2016)', 'other' => 'Belarusian roubles (2000–2016)']),
    'ETB' => new C('ETB', 'Ethiopian Birr', plurals: 'Ethiopian birr'),
    'JMD' => new C('JMD', 'Jamaican Dollar', '$', narrow: '$', plurals: ['one' => 'Jamaican dollar', 'other' => 'Jamaican dollars']),
    'JPY' => new C('JPY', 'Japanese Yen', 'JP¥', narrow: '¥', plurals: 'Japanese yen', minorUnits: 0),
    'LSL' => new C('LSL', 'Lesotho Loti', plurals: ['one' => 'Lesotho loti', 'other' => 'Lesotho maloti']),
    'LVR' => new C('LVR', 'Latvian Rouble', plurals: ['one' => 'Latvian rouble', 'other' => 'Latvian roubles']),
    'MGA' => new C('MGA', 'Malagasy Ariary', narrow: 'Ar', plurals: 'Malagasy ariary'),
    'MVR' => new C('MVR', 'Maldivian Rufiyaa', plurals: 'Maldivian rufiyaa'),
    'RUB' => new C('RUB', 'Russian Rouble', narrow: '₽', plurals: ['one' => 'Russian rouble', 'other' => 'Russian roubles']),
    'RUR' => new C('RUR', 'Russian Rouble (1991–1998)', plurals: ['one' => 'Russian rouble (1991–1998)', 'other' => 'Russian roubles (1991–1998)']),
    'SHP' => new C('SHP', 'St Helena Pound', narrow: '£', plurals: ['one' => 'St Helena pound', 'other' => 'St Helena pounds']),
    'TJR' => new C('TJR', 'Tajikistani Rouble', plurals: ['one' => 'Tajikistani rouble', 'other' => 'Tajikistani roubles']),
    'USD' => new C('USD', 'US Dollar', 'US$', narrow: '$', plurals: ['one' => 'US dollar', 'other' => 'US dollars']),
    'VUV' => new C('VUV', 'Vanuatu Vatu', plurals: 'Vanuatu vatu', minorUnits: 0),
];
