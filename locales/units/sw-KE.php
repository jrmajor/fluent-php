<?php

use Major\Fluent\Formatters\Number\Locale\Unit as U;

return [
    'microsecond' => new U(['one' => 'maikroseunde {0}', 'other' => 'maikrosekunde {0}'], ['one' => 'mikrosekunde {0}', 'other' => 'mikrosekunde {0}'], ['one' => 'mikrosekunde {0}', 'other' => 'mikrosekunde {0}']),
    'millimeter' => new U(['one' => 'milimita {0}', 'other' => 'milimita {0}'], ['one' => 'milimita {0}', 'other' => 'milimita {0}'], ['one' => 'mm{0}', 'other' => 'mm{0}']),
];
