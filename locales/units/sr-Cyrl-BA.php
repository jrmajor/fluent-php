<?php

use Major\Fluent\Formatters\Number\Locale\Unit as U;

return [
    'month' => new U(['one' => '{0} мјесец', 'few' => '{0} мјесеца', 'other' => '{0} мјесеци'], ['one' => '{0} мјес.', 'few' => '{0} мјес.', 'other' => '{0} мјес.'], ['one' => '{0} м', 'few' => '{0} м', 'other' => '{0} м']),
    'week' => new U(['one' => '{0} недјеља', 'few' => '{0} недјеље', 'other' => '{0} недјеља'], ['one' => '{0} нед.', 'few' => '{0} нед.', 'other' => '{0} нед.'], ['one' => '{0} н', 'few' => '{0} н', 'other' => '{0} н']),
];
