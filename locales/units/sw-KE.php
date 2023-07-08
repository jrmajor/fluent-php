<?php

use Major\Fluent\Formatters\Number\Locale\Unit as U;

return [
    'microsecond' => new U(['one' => 'maikroseunde {0}', 'other' => 'maikrosekunde {0}'], 'mikrosekunde {0}', 'mikrosekunde {0}'),
    'millimeter' => new U('milimita {0}', 'milimita {0}', 'mm{0}'),
];
