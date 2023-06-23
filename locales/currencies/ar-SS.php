<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'GBP' => new C('GBP', 'جنيه إسترليني', 'GB£', narrow: 'UK£', plurals: ['other' => 'جنيه إسترليني']),
    'SSP' => new C('SSP', 'جنيه جنوب السودان', '£', narrow: '£', plurals: ['two' => 'جنيهان جنوب السودان', 'few' => 'جنيهات جنوب السودان', 'many' => 'جنيهًا جنوب السودان', 'other' => 'جنيه جنوب السودان']),
];
