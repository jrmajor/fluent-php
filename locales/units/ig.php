<?php

use Major\Fluent\Formatters\Number\Locale\Unit as U;

return [
    'day' => new U(long: ['name' => 'Ọtụtụ Ubochi', 'plurals' => ['other' => '{0} d'], 'perUnit' => '{0}/d'], short: ['name' => 'day', 'plurals' => ['other' => '{0} d'], 'perUnit' => '{0}/d'], narrow: ['name' => 'day', 'plurals' => ['other' => '{0} d'], 'perUnit' => '{0}/d']),
    'month' => new U(long: ['name' => 'Ọtụtụ Ọnwa', 'plurals' => ['other' => '{0} m'], 'perUnit' => '{0}/m'], short: ['name' => 'mon', 'plurals' => ['other' => '{0} m'], 'perUnit' => '{0}/m'], narrow: ['name' => 'mon', 'plurals' => ['other' => '{0} m'], 'perUnit' => '{0}/m']),
    'week' => new U(long: ['name' => 'Ọtụtụ Izu', 'plurals' => ['other' => '{0} w'], 'perUnit' => '{0}/w'], short: ['name' => 'wk', 'plurals' => ['other' => '{0} w'], 'perUnit' => '{0}/w'], narrow: ['name' => 'wk', 'plurals' => ['other' => '{0} w'], 'perUnit' => '{0}/w']),
    'year' => new U(long: ['name' => 'Ọtụtụ Afọ', 'plurals' => ['other' => '{0} y'], 'perUnit' => '{0}/y'], short: ['name' => 'yr', 'plurals' => ['other' => '{0} y'], 'perUnit' => '{0}/y'], narrow: ['name' => 'yr', 'plurals' => ['other' => '{0} y'], 'perUnit' => '{0}/y']),
];
