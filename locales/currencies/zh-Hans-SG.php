<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'ANG' => new C('ANG', '荷属安的列斯盾', plurals: ['other' => '荷兰安的列斯盾']),
    'CNY' => new C('CNY', '人民币', 'CN¥', narrow: '¥', plurals: ['other' => '人民币']),
    'NIO' => new C('NIO', '尼加拉瓜科多巴', narrow: 'C$', plurals: ['other' => '尼加拉瓜科多巴']),
    'SGD' => new C('SGD', '新加坡元', '$', narrow: '$', plurals: ['other' => '新加坡元']),
    'XAG' => new C('XAG', '白银', plurals: ['other' => '白银']),
];
