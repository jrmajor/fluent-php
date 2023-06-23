<?php

use Major\Fluent\Formatters\Number\Locale\Unit as U;

return [
    'month' => new U(['one' => '{0} мјесец', 'few' => '{0} мјесеца', 'other' => '{0} мјесеци'], ['other' => '{0} мјес.'], ['other' => '{0} м']),
    'week' => new U(['few' => '{0} недјеље', 'other' => '{0} недјеља'], ['other' => '{0} нед.'], ['other' => '{0} н']),
];
