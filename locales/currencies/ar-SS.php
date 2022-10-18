<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'GBP' => new C('GBP', 'جنيه إسترليني', 'GB£', narrow: 'UK£', plurals: ['zero' => 'جنيه إسترليني', 'one' => 'جنيه إسترليني', 'two' => 'جنيه إسترليني', 'few' => 'جنيه إسترليني', 'many' => 'جنيه إسترليني', 'other' => 'جنيه إسترليني']),
    'SSP' => new C('SSP', 'جنيه جنوب السودان', '£', narrow: '£', plurals: ['zero' => 'جنيه جنوب السودان', 'one' => 'جنيه جنوب السودان', 'two' => 'جنيهان جنوب السودان', 'few' => 'جنيهات جنوب السودان', 'many' => 'جنيهًا جنوب السودان', 'other' => 'جنيه جنوب السودان']),
];