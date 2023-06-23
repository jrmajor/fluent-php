<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'BYN' => new C('BYN', 'Weissrussischer Rubel', narrow: 'р.', plurals: ['one' => 'Weissrussischer Rubel', 'other' => 'Weissrussische Rubel']),
    'BYR' => new C('BYR', 'Weissrussischer Rubel (2000–2016)', plurals: ['one' => 'Weissrussischer Rubel (2000–2016)', 'other' => 'Weissrussische Rubel (2000–2016)']),
    'EUR' => new C('EUR', 'Euro', plurals: ['other' => 'Euro']),
    'STN' => new C('STN', 'São-toméischer Dobra (2018)', narrow: 'Db', plurals: ['other' => 'São-toméischer Dobra (2018)']),
];
