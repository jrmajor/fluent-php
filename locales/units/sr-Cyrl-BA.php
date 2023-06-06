<?php

use Major\Fluent\Formatters\Number\Locale\Unit as U;

return [
    'month' => new U(name: 'duration-month', long: ['name' => 'мјесеци', 'plurals' => ['one' => '{0} мјесец', 'few' => '{0} мјесеца', 'other' => '{0} мјесеци'], 'perUnit' => '{0} мјесечно'], short: ['name' => 'мјесеци', 'plurals' => ['one' => '{0} мјес.', 'few' => '{0} мјес.', 'other' => '{0} мјес.'], 'perUnit' => '{0}/м'], narrow: ['name' => 'м.', 'plurals' => ['one' => '{0} м', 'few' => '{0} м', 'other' => '{0} м'], 'perUnit' => '{0}/м']),
    'week' => new U(name: 'duration-week', long: ['name' => 'недјеље', 'plurals' => ['one' => '{0} недјеља', 'few' => '{0} недјеље', 'other' => '{0} недјеља'], 'perUnit' => '{0} недјељно'], short: ['name' => 'нед.', 'plurals' => ['one' => '{0} нед.', 'few' => '{0} нед.', 'other' => '{0} нед.'], 'perUnit' => '{0}/н'], narrow: ['name' => 'н.', 'plurals' => ['one' => '{0} н', 'few' => '{0} н', 'other' => '{0} н'], 'perUnit' => '{0}/н']),
];
