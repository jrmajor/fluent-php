<?php

use Major\Fluent\Formatters\Number\Locale\Unit as U;

return [
    'second' => new U(long: ['name' => '秒钟', 'plurals' => ['other' => '{0}秒'], 'perUnit' => '{0}/秒'], short: ['name' => '秒', 'plurals' => ['other' => '{0}秒'], 'perUnit' => '{0}/秒'], narrow: ['name' => '秒', 'plurals' => ['other' => '{0}秒'], 'perUnit' => '{0}/秒']),
];
