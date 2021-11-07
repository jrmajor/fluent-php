<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'AFN' => new C('AFN', 'Afghan Afghani', narrow: '؋', plurals: ['one' => 'Afghan afghani', 'other' => 'Afghan afghanis']),
    'BMD' => new C('BMD', 'Bermudian Dollar', narrow: '$', plurals: ['one' => 'Bermudian dollar', 'other' => 'Bermudian dollars']),
    'BYB' => new C('BYB', 'Belarusian New Rouble (1994–1999)', plurals: ['one' => 'Belarusian new rouble (1994–1999)', 'other' => 'Belarusian new roubles (1994–1999)']),
    'BYN' => new C('BYN', 'Belarusian Rouble', narrow: 'р.', plurals: ['one' => 'Belarusian rouble', 'other' => 'Belarusian roubles']),
    'BYR' => new C('BYR', 'Belarusian Rouble (2000–2016)', plurals: ['one' => 'Belarusian rouble (2000–2016)', 'other' => 'Belarusian roubles (2000–2016)']),
    'ERN' => new C('ERN', 'Eritrean Nakfa', 'Nfk', plurals: ['one' => 'Eritrean nakfa', 'other' => 'Eritrean nakfas']),
    'ETB' => new C('ETB', 'Ethiopian Birr', plurals: ['one' => 'Ethiopian birr', 'other' => 'Ethiopian birr']),
    'JPY' => new C('JPY', 'Japanese Yen', 'JP¥', narrow: '¥', plurals: ['one' => 'Japanese yen', 'other' => 'Japanese yen'], minorUnits: 0),
    'LSL' => new C('LSL', 'Lesotho Loti', plurals: ['one' => 'Lesotho loti', 'other' => 'Lesotho maloti']),
    'LVR' => new C('LVR', 'Latvian Rouble', plurals: ['one' => 'Latvian rouble', 'other' => 'Latvian roubles']),
    'MGA' => new C('MGA', 'Malagasy Ariary', narrow: 'Ar', plurals: ['one' => 'Malagasy ariary', 'other' => 'Malagasy ariary']),
    'MVR' => new C('MVR', 'Maldivian Rufiyaa', plurals: ['one' => 'Maldivian rufiyaa', 'other' => 'Maldivian rufiyaa']),
    'PHP' => new C('PHP', 'Philippine Peso', '₱', narrow: '₱', plurals: ['one' => 'Philippine peso', 'other' => 'Philippine pesos']),
    'RUB' => new C('RUB', 'Russian Rouble', narrow: '₽', plurals: ['one' => 'Russian rouble', 'other' => 'Russian roubles']),
    'RUR' => new C('RUR', 'Russian Rouble (1991–1998)', narrow: 'р.', plurals: ['one' => 'Russian rouble (1991–1998)', 'other' => 'Russian roubles (1991–1998)']),
    'SHP' => new C('SHP', 'St Helena Pound', narrow: '£', plurals: ['one' => 'St Helena pound', 'other' => 'St Helena pounds']),
    'TJR' => new C('TJR', 'Tajikistani Rouble', plurals: ['one' => 'Tajikistani rouble', 'other' => 'Tajikistani roubles']),
    'USD' => new C('USD', 'US Dollar', 'US$', narrow: '$', plurals: ['one' => 'US dollar', 'other' => 'US dollars']),
    'VUV' => new C('VUV', 'Vanuatu Vatu', plurals: ['one' => 'Vanuatu vatu', 'other' => 'Vanuatu vatu'], minorUnits: 0),
];
