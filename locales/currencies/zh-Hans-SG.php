<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'ANG' => new C('ANG', '荷属安的列斯盾', plurals: '荷兰安的列斯盾'),
    'CNY' => new C('CNY', '人民币', 'CN¥', '¥', '人民币'),
    'NIO' => new C('NIO', '尼加拉瓜科多巴', narrow: 'C$', plurals: '尼加拉瓜科多巴'),
    'SGD' => new C('SGD', '新加坡元', '$', '$', '新加坡元'),
    'XAG' => new C('XAG', '白银', plurals: '白银'),
];
