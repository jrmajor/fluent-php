<?php

use Major\Fluent\Formatters\Number\Locale\Unit as U;

return [
    'foot' => new U(long: ['name' => 'Fuss', 'plurals' => ['one' => '{0} Fuss', 'other' => '{0} Fuss'], 'perUnit' => '{0} pro Fuss'], short: ['name' => 'Fuss', 'plurals' => ['one' => '{0} ft', 'other' => '{0} ft'], 'perUnit' => '{0}/ft'], narrow: ['name' => 'ft', 'plurals' => ['one' => '{0} ft', 'other' => '{0} ft'], 'perUnit' => '{0}/ft']),
];
