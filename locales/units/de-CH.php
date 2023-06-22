<?php

use Major\Fluent\Formatters\Number\Locale\Unit as U;

return [
    'foot' => new U(['one' => '{0} Fuss', 'other' => '{0} Fuss'], ['one' => '{0} ft', 'other' => '{0} ft'], ['one' => '{0} ft', 'other' => '{0} ft']),
];
