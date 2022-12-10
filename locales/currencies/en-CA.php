<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'AFN' => new C('AFN', 'Afghan Afghani', narrow: '؋', plurals: ['one' => 'Afghan afghani', 'other' => 'Afghan afghanis']),
    'BMD' => new C('BMD', 'Bermudian Dollar', narrow: '$', plurals: ['one' => 'Bermudian dollar', 'other' => 'Bermudian dollars']),
    'BYB' => new C('BYB', 'Belarusian New Rouble (1994–1999)', plurals: ['one' => 'Belarusian new rouble (1994–1999)', 'other' => 'Belarusian new roubles (1994–1999)']),
    'BYN' => new C('BYN', 'Belarusian Rouble', plurals: ['one' => 'Belarusian rouble', 'other' => 'Belarusian roubles']),
    'BYR' => new C('BYR', 'Belarusian Rouble (2000–2016)', plurals: ['one' => 'Belarusian rouble (2000–2016)', 'other' => 'Belarusian roubles (2000–2016)']),
    'CAD' => new C('CAD', 'Canadian Dollar', '$', narrow: '$', plurals: ['one' => 'Canadian dollar', 'other' => 'Canadian dollars']),
    'JPY' => new C('JPY', 'Japanese Yen', 'JP¥', narrow: '¥', plurals: ['one' => 'Japanese yen', 'other' => 'Japanese yen'], minorUnits: 0),
    'LVR' => new C('LVR', 'Latvian Rouble', plurals: ['one' => 'Latvian rouble', 'other' => 'Latvian roubles']),
    'RUB' => new C('RUB', 'Russian Rouble', narrow: '₽', plurals: ['one' => 'Russian rouble', 'other' => 'Russian roubles']),
    'RUR' => new C('RUR', 'Russian Rouble (1991–1998)', plurals: ['one' => 'Russian rouble (1991–1998)', 'other' => 'Russian roubles (1991–1998)']),
    'SHP' => new C('SHP', 'Saint Helena Pound', narrow: '£', plurals: ['one' => 'Saint Helena pound', 'other' => 'Saint Helena pounds']),
    'STN' => new C('STN', 'São Tomé and Príncipe Dobra', narrow: 'Db', plurals: ['one' => 'São Tomé and Príncipe dobra', 'other' => 'São Tomé and Príncipe dobras']),
    'TJR' => new C('TJR', 'Tajikistani Rouble', plurals: ['one' => 'Tajikistani rouble', 'other' => 'Tajikistani roubles']),
    'TTD' => new C('TTD', 'Trinidad and Tobago Dollar', narrow: '$', plurals: ['one' => 'Trinidad and Tobago dollar', 'other' => 'Trinidad and Tobago dollars']),
    'USD' => new C('USD', 'US Dollar', 'US$', narrow: 'US$', plurals: ['one' => 'US dollar', 'other' => 'US dollars']),
    'XXX' => new C('XXX', 'unknown currency', '¤', plurals: ['one' => '(unknown unit of currency)', 'other' => '(unknown currency)']),
];
