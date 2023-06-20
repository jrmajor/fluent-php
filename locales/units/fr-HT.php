<?php

use Major\Fluent\Formatters\Number\Locale\Unit as U;

return [
    'gram' => new U(name: 'mass-gram', long: ['name' => 'grammes', 'plurals' => ['one' => "{0}\u{A0}gramme", 'other' => "{0}\u{A0}grammes"], 'perUnit' => '{0} par gramme'], short: ['name' => 'g', 'plurals' => ['one' => '{0}gr', 'other' => '{0}gr'], 'perUnit' => '{0}/g'], narrow: ['name' => 'gr.', 'plurals' => ['one' => '{0}g', 'other' => '{0}g'], 'perUnit' => '{0}/g']),
    'hectare' => new U(name: 'area-hectare', long: ['name' => 'carreau', 'plurals' => ['one' => '{0}carreau', 'other' => '{0}carreaux'], 'perUnit' => ''], short: ['name' => 'ha', 'plurals' => ['one' => "{0}\u{202F}ha", 'other' => "{0}\u{202F}ha"], 'perUnit' => ''], narrow: ['name' => 'ha', 'plurals' => ['one' => '{0}ha', 'other' => '{0}ha'], 'perUnit' => '']),
];
