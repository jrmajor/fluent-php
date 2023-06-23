<?php

use Major\Fluent\Formatters\Number\Locale\Unit as U;

return [
    'month' => new U(['one' => '{0} мјесец', 'few' => '{0} мјесеца', 'other' => '{0} мјесеци'], '{0} мјес.', '{0} м'),
    'week' => new U(['few' => '{0} недјеље', 'other' => '{0} недјеља'], '{0} нед.', '{0} н'),
];
