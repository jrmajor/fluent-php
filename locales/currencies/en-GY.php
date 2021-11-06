<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'AFN' => new C('AFN', 'Afghan Afghani', plurals: ['one' => 'Afghan afghani', 'other' => 'Afghan afghanis']),
    'BMD' => new C('BMD', 'Bermudian Dollar', plurals: ['one' => 'Bermudian dollar', 'other' => 'Bermudian dollars']),
    'BYB' => new C('BYB', 'Belarusian New Rouble (1994–1999)', plurals: ['one' => 'Belarusian new rouble (1994–1999)', 'other' => 'Belarusian new roubles (1994–1999)']),
    'BYN' => new C('BYN', 'Belarusian Rouble', plurals: ['one' => 'Belarusian rouble', 'other' => 'Belarusian roubles']),
    'BYR' => new C('BYR', 'Belarusian Rouble (2000–2016)', plurals: ['one' => 'Belarusian rouble (2000–2016)', 'other' => 'Belarusian roubles (2000–2016)']),
    'ETB' => new C('ETB', 'Ethiopian Birr', plurals: ['one' => 'Ethiopian birr', 'other' => 'Ethiopian birr']),
    'GYD' => new C('GYD', 'Guyanaese Dollar', '$', plurals: ['one' => 'Guyanaese dollar', 'other' => 'Guyanaese dollars']),
    'JPY' => new C('JPY', 'Japanese Yen', 'JP¥', plurals: ['one' => 'Japanese yen', 'other' => 'Japanese yen'], minorUnits: 0),
    'LSL' => new C('LSL', 'Lesotho Loti', plurals: ['one' => 'Lesotho loti', 'other' => 'Lesotho maloti']),
    'LVR' => new C('LVR', 'Latvian Rouble', plurals: ['one' => 'Latvian rouble', 'other' => 'Latvian roubles']),
    'MGA' => new C('MGA', 'Malagasy Ariary', plurals: ['one' => 'Malagasy ariary', 'other' => 'Malagasy ariary']),
    'MVR' => new C('MVR', 'Maldivian Rufiyaa', plurals: ['one' => 'Maldivian rufiyaa', 'other' => 'Maldivian rufiyaa']),
    'PHP' => new C('PHP', 'Philippine Peso', '₱', plurals: ['one' => 'Philippine peso', 'other' => 'Philippine pesos']),
    'RUB' => new C('RUB', 'Russian Rouble', plurals: ['one' => 'Russian rouble', 'other' => 'Russian roubles']),
    'RUR' => new C('RUR', 'Russian Rouble (1991–1998)', plurals: ['one' => 'Russian rouble (1991–1998)', 'other' => 'Russian roubles (1991–1998)']),
    'SHP' => new C('SHP', 'St Helena Pound', plurals: ['one' => 'St Helena pound', 'other' => 'St Helena pounds']),
    'TJR' => new C('TJR', 'Tajikistani Rouble', plurals: ['one' => 'Tajikistani rouble', 'other' => 'Tajikistani roubles']),
    'USD' => new C('USD', 'US Dollar', 'US$', plurals: ['one' => 'US dollar', 'other' => 'US dollars']),
    'VUV' => new C('VUV', 'Vanuatu Vatu', plurals: ['one' => 'Vanuatu vatu', 'other' => 'Vanuatu vatu'], minorUnits: 0),
];
