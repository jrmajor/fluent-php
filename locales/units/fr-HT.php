<?php

use Major\Fluent\Formatters\Number\Locale\Unit as U;

return [
    'gram' => new U(['one' => "{0}\u{A0}gramme", 'other' => "{0}\u{A0}grammes"], ['one' => '{0}gr', 'other' => '{0}gr'], ['one' => '{0}g', 'other' => '{0}g']),
    'hectare' => new U(['one' => '{0}carreau', 'other' => '{0}carreaux'], ['one' => "{0}\u{202F}ha", 'other' => "{0}\u{202F}ha"], ['one' => '{0}ha', 'other' => '{0}ha']),
];
