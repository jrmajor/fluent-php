<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'CNY' => new C('CNY', '人民币', 'CN¥', '¥'),
    'KYD' => new C('KYD', '开曼群岛元', narrow: '$'),
    'NIO' => new C('NIO', '尼加拉瓜科多巴', narrow: 'C$', plurals: '尼加拉瓜科多巴'),
    'XAG' => new C('XAG', '白银', plurals: '白银'),
];
