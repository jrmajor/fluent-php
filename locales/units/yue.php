<?php

use Major\Fluent\Formatters\Number\Locale\Unit as U;

return [
    'acre' => new U(long: ['name' => '英畝', 'plurals' => ['other' => '{0} 英畝'], 'perUnit' => ''], short: ['name' => '英畝', 'plurals' => ['other' => '{0} 英畝'], 'perUnit' => ''], narrow: ['name' => '英畝', 'plurals' => ['other' => '{0} 英畝'], 'perUnit' => '']),
    'byte' => new U(long: ['name' => 'byte', 'plurals' => ['other' => '{0} byte'], 'perUnit' => ''], short: ['name' => 'byte', 'plurals' => ['other' => '{0} byte'], 'perUnit' => ''], narrow: ['name' => 'B', 'plurals' => ['other' => '{0}B'], 'perUnit' => '']),
    'celsius' => new U(long: ['name' => '攝氏', 'plurals' => ['other' => '攝氏 {0} 度'], 'perUnit' => ''], short: ['name' => '攝氏', 'plurals' => ['other' => '{0}°C'], 'perUnit' => ''], narrow: ['name' => '°C', 'plurals' => ['other' => '{0}°C'], 'perUnit' => '']),
    'centimeter' => new U(long: ['name' => '厘米', 'plurals' => ['other' => '{0} 厘米'], 'perUnit' => '每厘米 {0}'], short: ['name' => '厘米', 'plurals' => ['other' => '{0} 厘米'], 'perUnit' => '每厘米{0}'], narrow: ['name' => '厘米', 'plurals' => ['other' => '{0} 厘米'], 'perUnit' => '每厘米{0}']),
    'day' => new U(long: ['name' => '天', 'plurals' => ['other' => '{0} 天'], 'perUnit' => '每天 {0}'], short: ['name' => '天', 'plurals' => ['other' => '{0} 天'], 'perUnit' => '每天{0}'], narrow: ['name' => '天', 'plurals' => ['other' => '{0} 天'], 'perUnit' => '每天{0}']),
    'degree' => new U(long: ['name' => '角度', 'plurals' => ['other' => '{0} 度'], 'perUnit' => ''], short: ['name' => '角度', 'plurals' => ['other' => '{0} 度'], 'perUnit' => ''], narrow: ['name' => '角度', 'plurals' => ['other' => '{0} 度'], 'perUnit' => '']),
    'fahrenheit' => new U(long: ['name' => '華氏', 'plurals' => ['other' => '華氏 {0} 度'], 'perUnit' => ''], short: ['name' => '華氏', 'plurals' => ['other' => '{0}°F'], 'perUnit' => ''], narrow: ['name' => '華氏', 'plurals' => ['other' => '{0}°F'], 'perUnit' => '']),
    'fluid-ounce' => new U(long: ['name' => '液盎司', 'plurals' => ['other' => '{0} 液盎司'], 'perUnit' => ''], short: ['name' => '液盎司', 'plurals' => ['other' => '{0} 液盎司'], 'perUnit' => ''], narrow: ['name' => '液盎司', 'plurals' => ['other' => '{0} 液盎司'], 'perUnit' => '']),
    'foot' => new U(long: ['name' => '英呎', 'plurals' => ['other' => '{0} 英呎'], 'perUnit' => '每英呎 {0}'], short: ['name' => '英呎', 'plurals' => ['other' => '{0} 英呎'], 'perUnit' => '每英呎{0}'], narrow: ['name' => '英呎', 'plurals' => ['other' => '{0} 英呎'], 'perUnit' => '每英呎{0}']),
    'gallon' => new U(long: ['name' => '加侖', 'plurals' => ['other' => '{0} 加侖'], 'perUnit' => '每加侖 {0}'], short: ['name' => '加侖', 'plurals' => ['other' => '{0} 加侖'], 'perUnit' => '每加侖{0}'], narrow: ['name' => '加侖', 'plurals' => ['other' => '{0} 加侖'], 'perUnit' => '每加侖{0}']),
    'gram' => new U(long: ['name' => '克', 'plurals' => ['other' => '{0} 克'], 'perUnit' => '每克 {0}'], short: ['name' => '克', 'plurals' => ['other' => '{0} 克'], 'perUnit' => '每克{0}'], narrow: ['name' => '克', 'plurals' => ['other' => '{0} 克'], 'perUnit' => '每克 {0}']),
    'hectare' => new U(long: ['name' => '公頃', 'plurals' => ['other' => '{0} 公頃'], 'perUnit' => ''], short: ['name' => '公頃', 'plurals' => ['other' => '{0} 公頃'], 'perUnit' => ''], narrow: ['name' => '公頃', 'plurals' => ['other' => '{0} 公頃'], 'perUnit' => '']),
    'hour' => new U(long: ['name' => '小時', 'plurals' => ['other' => '{0} 小時'], 'perUnit' => '每小時 {0}'], short: ['name' => '小時', 'plurals' => ['other' => '{0} 小時'], 'perUnit' => '每小時{0}'], narrow: ['name' => '小時', 'plurals' => ['other' => '{0} 小時'], 'perUnit' => '每小時{0}']),
    'inch' => new U(long: ['name' => '英吋', 'plurals' => ['other' => '{0} 英吋'], 'perUnit' => '每英吋 {0}'], short: ['name' => '英吋', 'plurals' => ['other' => '{0} 英吋'], 'perUnit' => '每英吋{0}'], narrow: ['name' => '英吋', 'plurals' => ['other' => '{0} 英吋'], 'perUnit' => '每英吋 {0}']),
    'kilogram' => new U(long: ['name' => '公斤', 'plurals' => ['other' => '{0} 公斤'], 'perUnit' => '每公斤 {0}'], short: ['name' => '公斤', 'plurals' => ['other' => '{0} 公斤'], 'perUnit' => '每公斤{0}'], narrow: ['name' => '公斤', 'plurals' => ['other' => '{0} 公斤'], 'perUnit' => '每公斤 {0}']),
    'kilometer' => new U(long: ['name' => '公里', 'plurals' => ['other' => '{0} 公里'], 'perUnit' => '每公里 {0}'], short: ['name' => '公里', 'plurals' => ['other' => '{0} 公里'], 'perUnit' => '每公里{0}'], narrow: ['name' => '公里', 'plurals' => ['other' => '{0} 公里'], 'perUnit' => '每公里{0}']),
    'liter' => new U(long: ['name' => '公升', 'plurals' => ['other' => '{0} 公升'], 'perUnit' => '每公升 {0}'], short: ['name' => '公升', 'plurals' => ['other' => '{0} 公升'], 'perUnit' => '每公升{0}'], narrow: ['name' => '公升', 'plurals' => ['other' => '{0} 公升'], 'perUnit' => '每公升{0}']),
    'meter' => new U(long: ['name' => '米', 'plurals' => ['other' => '{0} 米'], 'perUnit' => '每米 {0}'], short: ['name' => '米', 'plurals' => ['other' => '{0} 米'], 'perUnit' => '每米{0}'], narrow: ['name' => '米', 'plurals' => ['other' => '{0} 米'], 'perUnit' => '每米{0}']),
    'mile' => new U(long: ['name' => '英里', 'plurals' => ['other' => '{0} 英里'], 'perUnit' => ''], short: ['name' => '英里', 'plurals' => ['other' => '{0} 英里'], 'perUnit' => ''], narrow: ['name' => '英里', 'plurals' => ['other' => '{0} 英里'], 'perUnit' => '']),
    'mile-scandinavian' => new U(long: ['name' => '斯堪地那維亞英里', 'plurals' => ['other' => '{0} 斯堪地那維亞英里'], 'perUnit' => ''], short: ['name' => '斯堪地那維亞英里', 'plurals' => ['other' => '{0} 斯堪地那維亞英里'], 'perUnit' => ''], narrow: ['name' => '斯堪地那維亞英里', 'plurals' => ['other' => '{0} 斯堪地那維亞英里'], 'perUnit' => '']),
    'milliliter' => new U(long: ['name' => '毫升', 'plurals' => ['other' => '{0} 毫升'], 'perUnit' => ''], short: ['name' => '毫升', 'plurals' => ['other' => '{0} 毫升'], 'perUnit' => ''], narrow: ['name' => '毫升', 'plurals' => ['other' => '{0} 毫升'], 'perUnit' => '']),
    'millimeter' => new U(long: ['name' => '毫米', 'plurals' => ['other' => '{0} 毫米'], 'perUnit' => ''], short: ['name' => '毫米', 'plurals' => ['other' => '{0} 毫米'], 'perUnit' => ''], narrow: ['name' => '毫米', 'plurals' => ['other' => '{0} 毫米'], 'perUnit' => '']),
    'millisecond' => new U(long: ['name' => '毫秒', 'plurals' => ['other' => '{0} 毫秒'], 'perUnit' => ''], short: ['name' => '毫秒', 'plurals' => ['other' => '{0} 毫秒'], 'perUnit' => ''], narrow: ['name' => '毫秒', 'plurals' => ['other' => '{0} 毫秒'], 'perUnit' => '']),
    'minute' => new U(long: ['name' => '分鐘', 'plurals' => ['other' => '{0} 分鐘'], 'perUnit' => '每分鐘 {0}'], short: ['name' => '分鐘', 'plurals' => ['other' => '{0} 分鐘'], 'perUnit' => '每分鐘{0}'], narrow: ['name' => '分鐘', 'plurals' => ['other' => '{0} 分鐘'], 'perUnit' => '每分鐘{0}']),
    'month' => new U(long: ['name' => '月', 'plurals' => ['other' => '{0} 個月'], 'perUnit' => '每月 {0}'], short: ['name' => '月', 'plurals' => ['other' => '{0} 個月'], 'perUnit' => '每月{0}'], narrow: ['name' => '月', 'plurals' => ['other' => '{0} 個月'], 'perUnit' => '每月{0}']),
    'ounce' => new U(long: ['name' => '安士', 'plurals' => ['other' => '{0} 安士'], 'perUnit' => '每安士 {0}'], short: ['name' => '安士', 'plurals' => ['other' => '{0} 安士'], 'perUnit' => '每安士{0}'], narrow: ['name' => '安士', 'plurals' => ['other' => '{0} 安士'], 'perUnit' => '每安士 {0}']),
    'pound' => new U(long: ['name' => '磅', 'plurals' => ['other' => '{0} 磅'], 'perUnit' => '每磅 {0}'], short: ['name' => '磅', 'plurals' => ['other' => '{0} 磅'], 'perUnit' => '每磅{0}'], narrow: ['name' => '磅', 'plurals' => ['other' => '{0} 磅'], 'perUnit' => '每磅 {0}']),
    'second' => new U(long: ['name' => '秒', 'plurals' => ['other' => '{0} 秒'], 'perUnit' => '每秒 {0}'], short: ['name' => '秒', 'plurals' => ['other' => '{0} 秒'], 'perUnit' => '每秒{0}'], narrow: ['name' => '秒', 'plurals' => ['other' => '{0} 秒'], 'perUnit' => '每秒{0}']),
    'stone' => new U(long: ['name' => '英石', 'plurals' => ['other' => '{0} 英石'], 'perUnit' => ''], short: ['name' => '英石', 'plurals' => ['other' => '{0} 英石'], 'perUnit' => ''], narrow: ['name' => '英石', 'plurals' => ['other' => '{0} 英石'], 'perUnit' => '']),
    'week' => new U(long: ['name' => '週', 'plurals' => ['other' => '{0} 週'], 'perUnit' => '每週 {0}'], short: ['name' => '週', 'plurals' => ['other' => '{0} 週'], 'perUnit' => '每週{0}'], narrow: ['name' => '週', 'plurals' => ['other' => '{0} 週'], 'perUnit' => '每週{0}']),
    'yard' => new U(long: ['name' => '碼', 'plurals' => ['other' => '{0} 碼'], 'perUnit' => ''], short: ['name' => '碼', 'plurals' => ['other' => '{0} 碼'], 'perUnit' => ''], narrow: ['name' => '碼', 'plurals' => ['other' => '{0} 碼'], 'perUnit' => '']),
    'year' => new U(long: ['name' => '年', 'plurals' => ['other' => '{0} 年'], 'perUnit' => '每年 {0}'], short: ['name' => '年', 'plurals' => ['other' => '{0} 年'], 'perUnit' => '每年{0}'], narrow: ['name' => '年', 'plurals' => ['other' => '{0} 年'], 'perUnit' => '每年{0}']),
];
