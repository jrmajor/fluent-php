<?php

use Major\Fluent\Formatters\Number\Locale\Unit as U;

return [
    'microsecond' => new U(['one' => 'maikroseunde {0}', 'other' => 'maikrosekunde {0}'], ['other' => 'mikrosekunde {0}'], ['other' => 'mikrosekunde {0}']),
    'millimeter' => new U(['other' => 'milimita {0}'], ['other' => 'milimita {0}'], ['other' => 'mm{0}']),
];
