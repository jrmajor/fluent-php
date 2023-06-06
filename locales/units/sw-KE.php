<?php

use Major\Fluent\Formatters\Number\Locale\Unit as U;

return [
    'millimeter' => new U(name: 'length-millimeter', long: ['name' => 'milimita', 'plurals' => ['one' => 'milimita {0}', 'other' => 'milimita {0}'], 'perUnit' => ''], short: ['name' => 'milimita', 'plurals' => ['one' => 'milimita {0}', 'other' => 'milimita {0}'], 'perUnit' => ''], narrow: ['name' => 'milimita', 'plurals' => ['one' => 'mm{0}', 'other' => 'mm{0}'], 'perUnit' => '']),
];
