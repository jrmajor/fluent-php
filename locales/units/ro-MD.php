<?php

use Major\Fluent\Formatters\Number\Locale\Unit as U;

return [
    'day' => new U(['one' => '{0} zi', 'few' => '{0} zile', 'other' => '{0} de zile'], ['one' => '{0} zi', 'other' => '{0} zile'], ['one' => '{0} zi', 'other' => '{0} zile']),
    'minute' => new U(['one' => '{0} minut', 'few' => '{0} minute', 'other' => '{0} de minute'], '{0} min.', '{0} min.'),
    'month' => new U(['one' => '{0} lună', 'few' => '{0} luni', 'other' => '{0} de luni'], ['one' => '{0} lună', 'other' => '{0} luni'], ['one' => '{0} lună', 'other' => '{0} luni']),
    'year' => new U(['one' => '{0} an', 'few' => '{0} ani', 'other' => '{0} de ani'], ['one' => '{0} an', 'other' => '{0} ani'], ['one' => '{0} an', 'other' => '{0} ani']),
];
