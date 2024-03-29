<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'BYN' => new C('BYN', 'белорусский рубль', 'Br', 'Br', ['one' => 'белорусский рубль', 'few' => 'белорусских рубля', 'many' => 'белорусских рублей', 'other' => 'белорусского рубля']),
    'RUR' => new C('RUR', 'Российский рубль (1991–1998)'),
];
