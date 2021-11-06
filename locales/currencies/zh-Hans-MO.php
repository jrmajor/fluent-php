<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'ANG' => new C('ANG', '荷属安的列斯盾', plurals: ['other' => '荷兰安的列斯盾']),
    'CNY' => new C('CNY', '人民币', 'CN¥', plurals: ['other' => '人民币']),
    'MOP' => new C('MOP', '澳门币', 'MOP$', plurals: ['other' => '澳门元']),
    'NIO' => new C('NIO', '尼加拉瓜科多巴', plurals: ['other' => '尼加拉瓜科多巴']),
    'XAG' => new C('XAG', '白银'),
];
