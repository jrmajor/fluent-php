<?php

use Major\Fluent\Formatters\Number\Locale\Unit as U;

return [
    'gram' => new U(['one' => "{0}\u{A0}gramme", 'other' => "{0}\u{A0}grammes"], '{0}gr', '{0}g'),
    'hectare' => new U(['one' => '{0}carreau', 'other' => '{0}carreaux'], "{0}\u{202F}ha", '{0}ha'),
];
