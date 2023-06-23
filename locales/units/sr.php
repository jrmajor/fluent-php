<?php

use Major\Fluent\Formatters\Number\Locale\Unit as U;

return [
    'acre' => new U(['one' => '{0} акер', 'other' => '{0} акера'], ['other' => '{0} ac'], ['other' => '{0} ac']),
    'bit' => new U(['one' => '{0} бит', 'few' => '{0} бита', 'other' => '{0} битова'], ['other' => '{0} b'], ['other' => '{0} b']),
    'byte' => new U(['one' => '{0} бајт', 'few' => '{0} бајта', 'other' => '{0} бајтова'], ['other' => '{0} B'], ['other' => '{0} B']),
    'celsius' => new U(['one' => '{0} степен Целзијуса', 'few' => '{0} степена Целзијуса', 'other' => '{0} степени Целзијуса'], ['other' => '{0}°C'], ['other' => '{0}°C']),
    'centimeter' => new U(['one' => '{0} центиметар', 'few' => '{0} центиметра', 'other' => '{0} центиметара'], ['other' => '{0} cm'], ['other' => '{0} cm']),
    'day' => new U(['one' => '{0} дан', 'other' => '{0} дана'], ['one' => '{0} дан', 'other' => '{0} дана'], ['other' => '{0} д']),
    'degree' => new U(['one' => '{0} степен', 'few' => '{0} степена', 'other' => '{0} степени'], ['other' => '{0}°'], ['other' => '{0}°']),
    'fahrenheit' => new U(['one' => '{0} степен Фаренхајта', 'few' => '{0} степена Фаренхајта', 'other' => '{0} степени Фаренхајта'], ['other' => '{0}°F'], ['other' => '{0}°F']),
    'fluid-ounce' => new U(['one' => '{0} унца течности', 'few' => '{0} унце течности', 'other' => '{0} унци течности'], ['other' => '{0} fl oz'], ['other' => '{0} fl oz']),
    'foot' => new U(['few' => '{0} стопе', 'other' => '{0} стопа'], ['other' => '{0} ft'], ['other' => '{0} ft']),
    'gallon' => new U(['one' => '{0} галон', 'other' => '{0} галона'], ['other' => '{0} gal'], ['other' => '{0} gal']),
    'gigabit' => new U(['one' => '{0} гигабит', 'few' => '{0} гигабита', 'other' => '{0} гигабитова'], ['other' => '{0} Gb'], ['other' => '{0} Gb']),
    'gigabyte' => new U(['one' => '{0} гигабајт', 'few' => '{0} гигабајта', 'other' => '{0} гигабајтова'], ['other' => '{0} GB'], ['other' => '{0} GB']),
    'gram' => new U(['one' => '{0} грам', 'other' => '{0} грама'], ['other' => '{0} g'], ['other' => '{0} g']),
    'hectare' => new U(['one' => '{0} хектар', 'other' => '{0} хектара'], ['other' => '{0} ha'], ['other' => '{0} ha']),
    'hour' => new U(['one' => '{0} сат', 'few' => '{0} сата', 'other' => '{0} сати'], ['one' => '{0} сат', 'few' => '{0} сата', 'other' => '{0} сати'], ['other' => '{0} ч']),
    'inch' => new U(['one' => '{0} инч', 'other' => '{0} инча'], ['one' => '{0} инч', 'other' => '{0} инча'], ['other' => '{0} in']),
    'kilobit' => new U(['one' => '{0} килобит', 'few' => '{0} килобита', 'other' => '{0} килобитова'], ['other' => '{0} kb'], ['other' => '{0} kb']),
    'kilobyte' => new U(['one' => '{0} килобајт', 'few' => '{0} килобајта', 'other' => '{0} килобајтова'], ['other' => '{0} kB'], ['other' => '{0} kB']),
    'kilogram' => new U(['one' => '{0} килограм', 'other' => '{0} килограма'], ['other' => '{0} kg'], ['other' => '{0} kg']),
    'kilometer' => new U(['one' => '{0} километар', 'few' => '{0} километра', 'other' => '{0} километара'], ['other' => '{0} km'], ['other' => '{0} km']),
    'liter' => new U(['one' => '{0} литар', 'few' => '{0} литра', 'other' => '{0} литара'], ['other' => '{0} l'], ['other' => '{0} l']),
    'megabit' => new U(['one' => '{0} мегабит', 'few' => '{0} мегабита', 'other' => '{0} мегабитова'], ['other' => '{0} Mb'], ['other' => '{0} Mb']),
    'megabyte' => new U(['one' => '{0} мегабајт', 'few' => '{0} мегабајта', 'other' => '{0} мегабајтова'], ['other' => '{0} MB'], ['other' => '{0} MB']),
    'meter' => new U(['one' => '{0} метар', 'few' => '{0} метра', 'other' => '{0} метара'], ['other' => '{0} m'], ['other' => '{0} m']),
    'microsecond' => new U(['one' => '{0} микросекунда', 'few' => '{0} микросекунде', 'other' => '{0} микросекунди'], ['other' => '{0} μs'], ['other' => '{0} μs']),
    'mile' => new U(['few' => '{0} миље', 'other' => '{0} миља'], ['other' => '{0} mi'], ['few' => '{0} миље', 'other' => '{0} миља']),
    'mile-scandinavian' => new U(['one' => '{0} скандинавска миља', 'few' => '{0} скандинавске миље', 'other' => '{0} скандинавских миља'], ['other' => '{0} smi'], ['other' => '{0} smi']),
    'milliliter' => new U(['one' => '{0} милилитар', 'few' => '{0} милилитра', 'other' => '{0} милилитара'], ['other' => '{0} mL'], ['other' => '{0} mL']),
    'millimeter' => new U(['one' => '{0} милиметар', 'few' => '{0} милиметра', 'other' => '{0} милиметара'], ['other' => '{0} mm'], ['other' => '{0} mm']),
    'millisecond' => new U(['one' => '{0} милисекунда', 'few' => '{0} милисекунде', 'other' => '{0} милисекунди'], ['other' => '{0} ms'], ['other' => '{0} ms']),
    'minute' => new U(['one' => '{0} минут', 'other' => '{0} минута'], ['other' => '{0} мин'], ['other' => '{0} м']),
    'month' => new U(['one' => '{0} месец', 'few' => '{0} месеца', 'other' => '{0} месеци'], ['other' => '{0} мес.'], ['other' => '{0} м']),
    'nanosecond' => new U(['one' => '{0} наносекунда', 'few' => '{0} наносекунде', 'other' => '{0} наносекунди'], ['other' => '{0} ns'], ['other' => '{0} ns']),
    'ounce' => new U(['one' => '{0} унца', 'few' => '{0} унце', 'other' => '{0} унци'], ['other' => '{0} oz'], ['one' => '{0} унца', 'few' => '{0} унце', 'other' => '{0} унци']),
    'percent' => new U(['one' => '{0} проценат', 'other' => '{0} процената'], ['other' => '{0}%'], ['other' => '{0}%']),
    'petabyte' => new U(['one' => '{0} петабајт', 'few' => '{0} петабајта', 'other' => '{0} петабајтова'], ['other' => '{0} PB'], ['other' => '{0} PB']),
    'pound' => new U(['one' => '{0} фунта', 'few' => '{0} фунте', 'other' => '{0} фунти'], ['other' => '{0} lb'], ['other' => '{0} lb']),
    'second' => new U(['one' => '{0} секунда', 'few' => '{0} секунде', 'other' => '{0} секунди'], ['other' => '{0} сек'], ['other' => '{0} с']),
    'stone' => new U(['one' => '{0} америчка тона', 'few' => '{0} америчке тоне', 'other' => '{0} америчких тона'], ['other' => '{0} st'], ['other' => '{0} st']),
    'terabit' => new U(['one' => '{0} терабит', 'few' => '{0} терабита', 'other' => '{0} терабитова'], ['other' => '{0} Tb'], ['other' => '{0} Tb']),
    'terabyte' => new U(['one' => '{0} терабајт', 'other' => '{0} терабајта'], ['other' => '{0} TB'], ['other' => '{0} TB']),
    'week' => new U(['few' => '{0} недеље', 'other' => '{0} недеља'], ['other' => '{0} нед.'], ['other' => '{0} н']),
    'yard' => new U(['one' => '{0} јард', 'few' => '{0} јарда', 'other' => '{0} јарди'], ['other' => '{0} јрд'], ['other' => '{0} yd']),
    'year' => new U(['few' => '{0} године', 'other' => '{0} година'], ['one' => '{0} год', 'other' => '{0} год.'], ['other' => '{0} г']),
];
