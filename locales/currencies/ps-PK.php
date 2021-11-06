<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'PKR' => new C('PKR', 'پاکستانۍ کلداره', 'Rs', plurals: ['one' => 'پاکستانۍ کلداره', 'other' => 'پاکستانۍ کلدارے']),
    'XXX' => new C('XXX', 'نامعلومه مروجه پېسے', '¤', plurals: ['one' => '(د نامعلومه مروجه پېسو واحد)', 'other' => '(نامعلومه مروجه پېسے)']),
];
