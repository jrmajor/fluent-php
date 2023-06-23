<?php

use Major\Fluent\Formatters\Number\Locale\Unit as U;

return [
    'acre' => new U(['one' => '{0} акр', 'few' => '{0} акры', 'many' => '{0} акраў', 'other' => '{0} акра'], ['one' => '{0} акр', 'few' => '{0} акры', 'many' => '{0} акраў', 'other' => '{0} акра'], ['one' => '{0} акр', 'few' => '{0} акры', 'many' => '{0} акраў', 'other' => '{0} акра']),
    'bit' => new U(['one' => '{0} біт', 'few' => '{0} біты', 'many' => '{0} біт', 'other' => '{0} біта'], ['one' => '{0} біт', 'few' => '{0} біты', 'many' => '{0} біт', 'other' => '{0} біта'], ['one' => '{0} біт', 'few' => '{0} біты', 'many' => '{0} біт', 'other' => '{0} біта']),
    'byte' => new U(['one' => '{0} байт', 'few' => '{0} байты', 'many' => '{0} байт', 'other' => '{0} байта'], ['one' => '{0} байт', 'few' => '{0} байты', 'many' => '{0} байт', 'other' => '{0} байта'], ['one' => '{0} байт', 'few' => '{0} байты', 'many' => '{0} байт', 'other' => '{0} байта']),
    'celsius' => new U(['one' => '{0} градус Цэльсія', 'few' => '{0} градусы Цэльсія', 'many' => '{0} градусаў Цэльсія', 'other' => '{0} градуса Цэльсія'], '{0} °C', '{0} °C'),
    'centimeter' => new U(['one' => '{0} сантыметр', 'few' => '{0} сантыметры', 'many' => '{0} сантыметраў', 'other' => '{0} сантыметра'], '{0} см', '{0} см'),
    'day' => new U(['one' => '{0} суткі', 'other' => '{0} сутак'], '{0} сут', '{0} сут'),
    'degree' => new U(['one' => '{0} градус', 'few' => '{0} градусы', 'many' => '{0} градусаў', 'other' => '{0} градуса'], '{0}°', '{0}°'),
    'fahrenheit' => new U(['one' => '{0} градус Фарэнгейта', 'few' => '{0} градусы Фарэнгейта', 'many' => '{0} градусаў Фарэнгейта', 'other' => '{0} градуса Фарэнгейта'], '{0} °F', '{0} °F'),
    'fluid-ounce' => new U(['one' => '{0} вадкая унцыя', 'few' => '{0} вадкія унцыі', 'many' => '{0} вадкіх унцый', 'other' => '{0} вадкай унцыі'], '{0} вадк. унц.', '{0} вадк. унц.'),
    'foot' => new U(['one' => '{0} фут', 'few' => '{0} футы', 'many' => '{0} футаў', 'other' => '{0} фута'], ['one' => '{0} фут', 'few' => '{0} футы', 'many' => '{0} футаў', 'other' => '{0} фута'], ['one' => '{0} фут', 'few' => '{0} футы', 'many' => '{0} футаў', 'other' => '{0} фута']),
    'gallon' => new U(['one' => '{0} галон', 'few' => '{0} галоны', 'many' => '{0} галонаў', 'other' => '{0} галона'], '{0} гал', '{0} гал'),
    'gigabit' => new U(['one' => '{0} гігабіт', 'few' => '{0} гігабіты', 'many' => '{0} гігабіт', 'other' => '{0} гігабіта'], '{0} Гбіт', '{0} Гбіт'),
    'gigabyte' => new U(['one' => '{0} гігабайт', 'few' => '{0} гігабайты', 'many' => '{0} гігабайт', 'other' => '{0} гігабайта'], '{0} ГБ', '{0} ГБ'),
    'gram' => new U('{0} г', '{0} г', '{0} г'),
    'hectare' => new U(['one' => '{0} гектар', 'few' => '{0} гектары', 'many' => '{0} гектараў', 'other' => '{0} гектара'], '{0} га', '{0} га'),
    'hour' => new U(['one' => '{0} гадзіна', 'many' => '{0} гадзін', 'other' => '{0} гадзіны'], '{0} гадз', '{0} гадз'),
    'inch' => new U(['one' => '{0} цаля', 'many' => '{0} цаляў', 'other' => '{0} цалі'], ['one' => '{0} цаля', 'many' => '{0} цаляў', 'other' => '{0} цалі'], ['one' => '{0} цаля', 'many' => '{0} цаляў', 'other' => '{0} цалі']),
    'kilobit' => new U(['one' => '{0} кілабіт', 'few' => '{0} кілабіты', 'many' => '{0} кілабіт', 'other' => '{0} кілабіта'], '{0} кбіт', '{0} кбіт'),
    'kilobyte' => new U(['one' => '{0} кілабайт', 'few' => '{0} кілабайты', 'many' => '{0} кілабайт', 'other' => '{0} кілабайта'], '{0} КБ', '{0} КБ'),
    'kilogram' => new U('{0} кг', '{0} кг', '{0} кг'),
    'kilometer' => new U(['one' => '{0} кіламетр', 'few' => '{0} кіламетры', 'many' => '{0} кіламетраў', 'other' => '{0} кіламетра'], '{0} км', '{0} км'),
    'liter' => new U(['one' => '{0} літр', 'few' => '{0} літры', 'many' => '{0} літраў', 'other' => '{0} літра'], '{0} л', '{0} л'),
    'megabit' => new U(['one' => '{0} мегабіт', 'few' => '{0} мегабіты', 'many' => '{0} мегабіт', 'other' => '{0} мегабіта'], '{0} Мбіт', '{0} Мбіт'),
    'megabyte' => new U(['one' => '{0} мегабайт', 'few' => '{0} мегабайты', 'many' => '{0} мегабайт', 'other' => '{0} мегабайта'], '{0} МБ', '{0} МБ'),
    'meter' => new U(['one' => '{0} метр', 'few' => '{0} метры', 'many' => '{0} метраў', 'other' => '{0} метра'], '{0} м', '{0} м'),
    'microsecond' => new U(['one' => '{0} мікрасекунда', 'many' => '{0} мікрасекунд', 'other' => '{0} мікрасекунды'], '{0} мкс', '{0} мкс'),
    'mile' => new U(['one' => '{0} міля', 'many' => '{0} міль', 'other' => '{0} мілі'], ['one' => '{0} міля', 'many' => '{0} міль', 'other' => '{0} мілі'], ['one' => '{0} міля', 'many' => '{0} міль', 'other' => '{0} мілі']),
    'mile-scandinavian' => new U(['one' => '{0} скандынаўская міля', 'few' => '{0} скандынаўскія мілі', 'many' => '{0} скандынаўскіх міль', 'other' => '{0} скандынаўскай мілі'], ['many' => '{0} скан. міль', 'other' => '{0} скан. мілі'], ['many' => '{0} скан. міль', 'other' => '{0} скан. мілі']),
    'milliliter' => new U(['one' => '{0} мілілітр', 'few' => '{0} мілілітры', 'many' => '{0} мілілітраў', 'other' => '{0} мілілітра'], '{0} мл', '{0} мл'),
    'millimeter' => new U(['one' => '{0} міліметр', 'few' => '{0} міліметры', 'many' => '{0} міліметраў', 'other' => '{0} міліметра'], '{0} мм', '{0} мм'),
    'millisecond' => new U(['one' => '{0} мілісекунда', 'many' => '{0} мілісекунд', 'other' => '{0} мілісекунды'], '{0} мс', '{0} мс'),
    'minute' => new U(['one' => '{0} хвіліна', 'many' => '{0} хвілін', 'other' => '{0} хвіліны'], '{0} хв', '{0} хв'),
    'month' => new U(['one' => '{0} месяц', 'many' => '{0} месяцаў', 'other' => '{0} месяца'], '{0} мес.', '{0} мес.'),
    'nanosecond' => new U(['one' => '{0} нанасекунда', 'many' => '{0} нанасекунд', 'other' => '{0} нанасекунды'], '{0} нс', '{0} нс'),
    'ounce' => new U(['one' => '{0} унцыя', 'many' => '{0} унцый', 'other' => '{0} унцыі'], '{0} унц.', '{0} унц.'),
    'percent' => new U(['one' => '{0} працэнт', 'few' => '{0} працэнты', 'many' => '{0} працэнтаў', 'other' => '{0} працэнта'], '{0} %', '{0}%'),
    'petabyte' => new U(['one' => '{0} петабайт', 'few' => '{0} петабайты', 'many' => '{0} петабайт', 'other' => '{0} петабайта'], '{0} ПБ', '{0} ПБ'),
    'pound' => new U(['one' => '{0} фунт', 'few' => '{0} фунты', 'many' => '{0} фунтаў', 'other' => '{0} фунта'], ['one' => '{0} фунт', 'few' => '{0} фунты', 'many' => '{0} фунтаў', 'other' => '{0} фунта'], ['one' => '{0} фунт', 'few' => '{0} фунты', 'many' => '{0} фунтаў', 'other' => '{0} фунта']),
    'second' => new U(['one' => '{0} секунда', 'many' => '{0} секунд', 'other' => '{0} секунды'], '{0} с', '{0} с'),
    'stone' => new U(['one' => '{0} стоўн', 'few' => '{0} стоны', 'many' => '{0} стонаў', 'other' => '{0} стона'], ['one' => '{0} стон', 'few' => '{0} стоны', 'many' => '{0} стонаў', 'other' => '{0} стона'], ['one' => '{0} стон', 'few' => '{0} стоны', 'many' => '{0} стонаў', 'other' => '{0} стона']),
    'terabit' => new U(['one' => '{0} тэрабіт', 'few' => '{0} тэрабіты', 'many' => '{0} тэрабіт', 'other' => '{0} тэрабіта'], '{0} Тбіт', '{0} Тбіт'),
    'terabyte' => new U(['one' => '{0} тэрабайт', 'few' => '{0} тэрабайты', 'many' => '{0} тэрабайт', 'other' => '{0} тэрабайта'], '{0} ТБ', '{0} ТБ'),
    'week' => new U(['one' => '{0} тыдзень', 'few' => '{0} тыдні', 'many' => '{0} тыдняў', 'other' => '{0} тыдня'], '{0} тыдз.', '{0} тыдз.'),
    'yard' => new U(['one' => '{0} ярд', 'few' => '{0} ярды', 'many' => '{0} ярдаў', 'other' => '{0} ярда'], ['one' => '{0} ярд', 'few' => '{0} ярды', 'many' => '{0} ярдаў', 'other' => '{0} ярда'], ['one' => '{0} ярд', 'few' => '{0} ярды', 'many' => '{0} ярдаў', 'other' => '{0} ярда']),
    'year' => new U(['one' => '{0} год', 'few' => '{0} гады', 'many' => '{0} гадоў', 'other' => '{0} года'], '{0} г.', '{0} г.'),
];