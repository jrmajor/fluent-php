<?php

use Major\Fluent\Formatters\Number\Locale\Unit as U;

return [
    'day' => new U(long: ['name' => 'zile', 'plurals' => ['one' => '{0} zi', 'few' => '{0} zile', 'other' => '{0} de zile'], 'perUnit' => '{0} pe zi'], short: ['name' => 'zile', 'plurals' => ['one' => '{0} zi', 'few' => '{0} zile', 'other' => '{0} zile'], 'perUnit' => '{0}/zi'], narrow: ['name' => 'zi', 'plurals' => ['one' => '{0} zi', 'few' => '{0} zile', 'other' => '{0} zile'], 'perUnit' => '{0}/zi']),
    'millisecond' => new U(long: ['name' => 'milisecunde', 'plurals' => ['one' => '{0} milisecundă', 'few' => '{0} milisecunde', 'other' => '{0} de milisecunde'], 'perUnit' => ''], short: ['name' => 'milisec.', 'plurals' => ['one' => '{0} ms', 'few' => '{0} ms', 'other' => '{0} ms'], 'perUnit' => ''], narrow: ['name' => 'msec', 'plurals' => ['one' => '{0} ms', 'few' => '{0} ms', 'other' => '{0} ms'], 'perUnit' => '']),
    'minute' => new U(long: ['name' => 'minute', 'plurals' => ['one' => '{0} minut', 'few' => '{0} minute', 'other' => '{0} de minute'], 'perUnit' => '{0} pe minut'], short: ['name' => 'min.', 'plurals' => ['one' => '{0} min.', 'few' => '{0} min.', 'other' => '{0} min.'], 'perUnit' => '{0}/min.'], narrow: ['name' => 'min', 'plurals' => ['one' => '{0} min.', 'few' => '{0} min.', 'other' => '{0} min.'], 'perUnit' => '{0}/min.']),
    'month' => new U(long: ['name' => 'luni', 'plurals' => ['one' => '{0} lună', 'few' => '{0} luni', 'other' => '{0} de luni'], 'perUnit' => '{0} pe lună'], short: ['name' => 'luni', 'plurals' => ['one' => '{0} lună', 'few' => '{0} luni', 'other' => '{0} luni'], 'perUnit' => '{0}/lună'], narrow: ['name' => 'lună', 'plurals' => ['one' => '{0} lună', 'few' => '{0} luni', 'other' => '{0} luni'], 'perUnit' => '{0}/lună']),
    'year' => new U(long: ['name' => 'ani', 'plurals' => ['one' => '{0} an', 'few' => '{0} ani', 'other' => '{0} de ani'], 'perUnit' => '{0} pe an'], short: ['name' => 'ani', 'plurals' => ['one' => '{0} an', 'few' => '{0} ani', 'other' => '{0} ani'], 'perUnit' => '{0}/an'], narrow: ['name' => 'a', 'plurals' => ['one' => '{0} an', 'few' => '{0} ani', 'other' => '{0} ani'], 'perUnit' => '{0}/an']),
];
