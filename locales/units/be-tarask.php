<?php

use Major\Fluent\Formatters\Number\Locale\Unit as U;

return [
    'microsecond' => new U(['one' => '{0} мікрасекунда', 'many' => '{0} мікрасекунд', 'other' => '{0} мікрасекунды'], ['other' => '{0} мкс'], ['other' => '{0} мкс.']),
    'nanosecond' => new U(['one' => '{0} нанасекунда', 'many' => '{0} нанасекунд', 'other' => '{0} нанасекунды'], ['other' => '{0} нс'], ['other' => '{0} нсэк.']),
];
