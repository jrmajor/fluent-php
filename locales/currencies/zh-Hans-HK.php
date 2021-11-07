<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'CNY' => new C('CNY', '人民币', 'CN¥', narrow: '¥', plurals: ['other' => '人民币']),
    'KYD' => new C('KYD', '开曼群岛元', narrow: '$', plurals: ['other' => '开曼群岛元']),
    'NIO' => new C('NIO', '尼加拉瓜科多巴', narrow: 'C$', plurals: ['other' => '尼加拉瓜科多巴']),
    'XAG' => new C('XAG', '白银'),
];
