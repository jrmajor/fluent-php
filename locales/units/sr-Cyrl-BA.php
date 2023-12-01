<?php

use Major\Fluent\Formatters\Number\Locale\Unit as U;

return [
    'month' => new U(['one' => '{0} мјесец', 'few' => '{0} мјесеца', 'other' => '{0} мјесеци'], '{0} мјес.', ['few' => '{0} мјес.', 'other' => '{0} м']),
    'second' => new U(['one' => '{0} секунда', 'few' => '{0} секунде', 'other' => '{0} секунди'], '{0} сек', ['one' => '{0} сек', 'other' => '{0} с']),
    'week' => new U(['few' => '{0} недјеље', 'other' => '{0} недјеља'], '{0} нед.', ['one' => '{0} нед.', 'other' => '{0} н']),
    'year' => new U(['few' => '{0} године', 'other' => '{0} година'], ['one' => '{0} год', 'other' => '{0} год.'], ['few' => '{0} год.', 'other' => '{0} г']),
];
