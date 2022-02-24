<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'AED' => new C('AED', 'United Arab Emirates Dirham', plurals: ['one' => 'U.A.E. dirham', 'other' => 'U.A.E. dirhams']),
    'AFN' => new C('AFN', 'Afghan Afghani', narrow: '؋', plurals: ['one' => 'Afghan afghani', 'other' => 'Afghan afghanis']),
    'BMD' => new C('BMD', 'Bermudian Dollar', narrow: '$', plurals: ['one' => 'Bermudian dollar', 'other' => 'Bermudian dollars']),
    'BYB' => new C('BYB', 'Belarusian New Rouble (1994–1999)', plurals: ['one' => 'Belarusian new rouble (1994–1999)', 'other' => 'Belarusian new roubles (1994–1999)']),
    'BYN' => new C('BYN', 'Belarusian Rouble', plurals: ['one' => 'Belarusian rouble', 'other' => 'Belarusian roubles']),
    'BYR' => new C('BYR', 'Belarusian Rouble (2000–2016)', plurals: ['one' => 'Belarusian rouble (2000–2016)', 'other' => 'Belarusian roubles (2000–2016)']),
    'CAD' => new C('CAD', 'Canadian Dollar', '$', narrow: '$', plurals: ['one' => 'Canadian dollar', 'other' => 'Canadian dollars']),
    'ETB' => new C('ETB', 'Ethiopian Birr', plurals: ['one' => 'Ethiopian birr', 'other' => 'Ethiopian birr']),
    'JPY' => new C('JPY', 'Japanese Yen', 'JP¥', narrow: '¥', plurals: ['one' => 'Japanese yen', 'other' => 'Japanese yen'], minorUnits: 0),
    'LSL' => new C('LSL', 'Lesotho Loti', plurals: ['one' => 'Lesotho loti', 'other' => 'Lesotho maloti']),
    'LVR' => new C('LVR', 'Latvian Rouble', plurals: ['one' => 'Latvian rouble', 'other' => 'Latvian roubles']),
    'MGA' => new C('MGA', 'Malagasy Ariary', narrow: 'Ar', plurals: ['one' => 'Malagasy ariary', 'other' => 'Malagasy ariary']),
    'MVR' => new C('MVR', 'Maldivian Rufiyaa', plurals: ['one' => 'Maldivian rufiyaa', 'other' => 'Maldivian rufiyaa']),
    'PHP' => new C('PHP', 'Philippine Peso', '₱', narrow: '₱', plurals: ['one' => 'Philippine peso', 'other' => 'Philippine pesos']),
    'RUB' => new C('RUB', 'Russian Rouble', narrow: '₽', plurals: ['one' => 'Russian rouble', 'other' => 'Russian roubles']),
    'RUR' => new C('RUR', 'Russian Rouble (1991–1998)', plurals: ['one' => 'Russian rouble (1991–1998)', 'other' => 'Russian roubles (1991–1998)']),
    'SHP' => new C('SHP', 'St Helena Pound', narrow: '£', plurals: ['one' => 'St Helena pound', 'other' => 'St Helena pounds']),
    'STN' => new C('STN', 'São Tomé and Príncipe Dobra', narrow: 'Db', plurals: ['one' => 'São Tomé and Príncipe dobra', 'other' => 'São Tomé and Príncipe dobras']),
    'TJR' => new C('TJR', 'Tajikistani Rouble', plurals: ['one' => 'Tajikistani rouble', 'other' => 'Tajikistani roubles']),
    'TTD' => new C('TTD', 'Trinidad and Tobago Dollar', narrow: '$', plurals: ['one' => 'Trinidad and Tobago dollar', 'other' => 'Trinidad and Tobago dollars']),
    'USD' => new C('USD', 'U.S. Dollar', 'US$', narrow: '$', plurals: ['one' => 'U.S. dollar', 'other' => 'U.S. dollars']),
    'VUV' => new C('VUV', 'Vanuatu Vatu', plurals: ['one' => 'Vanuatu vatu', 'other' => 'Vanuatu vatu'], minorUnits: 0),
];
