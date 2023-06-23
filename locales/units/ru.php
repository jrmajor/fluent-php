<?php

use Major\Fluent\Formatters\Number\Locale\Unit as U;

return [
    'acre' => new U(['one' => '{0} акр', 'many' => '{0} акров', 'other' => '{0} акра'], ['one' => '{0} акр', 'other' => '{0} акр.'], ['one' => '{0} акр', 'other' => '{0} акр.']),
    'bit' => new U(['one' => '{0} бит', 'many' => '{0} бит', 'other' => '{0} бита'], ['one' => '{0} бит', 'many' => '{0} бит', 'other' => '{0} бита'], ['one' => '{0} бит', 'many' => '{0} бит', 'other' => '{0} бита']),
    'byte' => new U(['one' => '{0} байт', 'many' => '{0} байт', 'other' => '{0} байта'], '{0} Б', '{0} Б'),
    'celsius' => new U(['one' => '{0} градус Цельсия', 'many' => '{0} градусов Цельсия', 'other' => '{0} градуса Цельсия'], '{0} °C', '{0} °C'),
    'centimeter' => new U(['one' => '{0} сантиметр', 'many' => '{0} сантиметров', 'other' => '{0} сантиметра'], '{0} см', '{0} см'),
    'day' => new U(['one' => '{0} день', 'many' => '{0} дней', 'other' => '{0} дня'], '{0} дн.', '{0} д.'),
    'degree' => new U(['one' => '{0} градус', 'many' => '{0} градусов', 'other' => '{0} градуса'], '{0}°', '{0}°'),
    'fahrenheit' => new U(['one' => '{0} градус Фаренгейта', 'many' => '{0} градусов Фаренгейта', 'other' => '{0} градуса Фаренгейта'], '{0} °F', ['few' => '{0} °F', 'other' => '{0}°F']),
    'fluid-ounce' => new U(['one' => '{0} амер. жидкая унция', 'few' => '{0} амер. жидкие унции', 'many' => '{0} амер. жидких унций', 'other' => '{0} амер. жидкой унции'], '{0} ам. жидк. унц.', '{0} ам. жидк. унц.'),
    'foot' => new U(['one' => '{0} фут', 'many' => '{0} футов', 'other' => '{0} фута'], '{0} фт', '{0} фт'),
    'gallon' => new U(['one' => '{0} амер. галлон', 'many' => '{0} амер. галлонов', 'other' => '{0} амер. галлона'], '{0} ам. гал.', '{0} ам. гал.'),
    'gigabit' => new U(['one' => '{0} гигабит', 'many' => '{0} гигабит', 'other' => '{0} гигабита'], '{0} Гбит', '{0} Гбит'),
    'gigabyte' => new U(['one' => '{0} гигабайт', 'many' => '{0} гигабайт', 'other' => '{0} гигабайта'], '{0} ГБ', '{0} ГБ'),
    'gram' => new U(['one' => '{0} грамм', 'many' => '{0} грамм', 'other' => '{0} грамма'], '{0} г', '{0} г'),
    'hectare' => new U(['one' => '{0} гектар', 'many' => '{0} гектаров', 'other' => '{0} гектара'], '{0} га', '{0} га'),
    'hour' => new U(['one' => '{0} час', 'many' => '{0} часов', 'other' => '{0} часа'], '{0} ч', '{0} ч'),
    'inch' => new U(['one' => '{0} дюйм', 'many' => '{0} дюймов', 'other' => '{0} дюйма'], ['one' => '{0} дюйм', 'other' => '{0} дюйм.'], '{0} дюйм.'),
    'kilobit' => new U(['one' => '{0} килобит', 'many' => '{0} килобит', 'other' => '{0} килобита'], '{0} кбит', '{0} кбит'),
    'kilobyte' => new U(['one' => '{0} килобайт', 'many' => '{0} килобайт', 'other' => '{0} килобайта'], '{0} кБ', '{0} кБ'),
    'kilogram' => new U(['one' => '{0} килограмм', 'many' => '{0} килограмм', 'other' => '{0} килограмма'], '{0} кг', '{0} кг'),
    'kilometer' => new U(['one' => '{0} километр', 'many' => '{0} километров', 'other' => '{0} километра'], '{0} км', '{0} км'),
    'liter' => new U(['one' => '{0} литр', 'many' => '{0} литров', 'other' => '{0} литра'], '{0} л', '{0} л'),
    'megabit' => new U(['one' => '{0} мегабит', 'many' => '{0} мегабит', 'other' => '{0} мегабита'], '{0} Мбит', '{0} Мбит'),
    'megabyte' => new U(['one' => '{0} мегабайт', 'many' => '{0} мегабайт', 'other' => '{0} мегабайта'], '{0} МБ', '{0} МБ'),
    'meter' => new U(['one' => '{0} метр', 'many' => '{0} метров', 'other' => '{0} метра'], '{0} м', '{0} м'),
    'microsecond' => new U(['one' => '{0} микросекунда', 'many' => '{0} микросекунд', 'other' => '{0} микросекунды'], '{0} мкс', '{0} мкс'),
    'mile' => new U(['one' => '{0} миля', 'many' => '{0} миль', 'other' => '{0} мили'], '{0} ми', '{0} ми'),
    'mile-scandinavian' => new U(['one' => '{0} скандинавская миля', 'few' => '{0} скандинавские мили', 'many' => '{0} скандинавских миль', 'other' => '{0} скандинавской мили'], '{0} ск. ми', '{0} ск. ми'),
    'milliliter' => new U(['one' => '{0} миллилитр', 'many' => '{0} миллилитров', 'other' => '{0} миллилитра'], '{0} мл', '{0} мл'),
    'millimeter' => new U(['one' => '{0} миллиметр', 'many' => '{0} миллиметров', 'other' => '{0} миллиметра'], '{0} мм', '{0} мм'),
    'millisecond' => new U(['one' => '{0} миллисекунда', 'many' => '{0} миллисекунд', 'other' => '{0} миллисекунды'], '{0} мс', '{0} мс'),
    'minute' => new U(['one' => '{0} минута', 'many' => '{0} минут', 'other' => '{0} минуты'], '{0} мин', '{0} мин'),
    'month' => new U(['one' => '{0} месяц', 'many' => '{0} месяцев', 'other' => '{0} месяца'], '{0} мес.', '{0} м.'),
    'nanosecond' => new U(['one' => '{0} наносекунда', 'many' => '{0} наносекунд', 'other' => '{0} наносекунды'], '{0} нс', '{0} нс'),
    'ounce' => new U(['one' => '{0} унция', 'many' => '{0} унций', 'other' => '{0} унции'], '{0} унц.', '{0} унц.'),
    'percent' => new U(['one' => '{0} процент', 'many' => '{0} процентов', 'other' => '{0} процента'], '{0} %', '{0}%'),
    'petabyte' => new U(['one' => '{0} петабайт', 'many' => '{0} петабайт', 'other' => '{0} петабайта'], '{0} ПБ', '{0} ПБ'),
    'pound' => new U(['one' => '{0} фунт', 'many' => '{0} фунтов', 'other' => '{0} фунта'], '{0} фнт', '{0} фнт'),
    'second' => new U(['one' => '{0} секунда', 'many' => '{0} секунд', 'other' => '{0} секунды'], '{0} с', '{0} с'),
    'stone' => new U(['one' => "{0}\u{A0}стоун", 'many' => '{0} стоунов', 'other' => '{0} стоуна'], ['one' => "{0}\u{A0}стоун", 'many' => '{0} стоунов', 'other' => '{0} стоуна'], '{0} стн'),
    'terabit' => new U(['one' => '{0} терабит', 'many' => '{0} терабит', 'other' => '{0} терабита'], '{0} Тбит', '{0} Тбит'),
    'terabyte' => new U(['one' => '{0} терабайт', 'many' => '{0} терабайт', 'other' => '{0} терабайта'], '{0} ТБ', '{0} ТБ'),
    'week' => new U(['one' => '{0} неделя', 'many' => '{0} недель', 'other' => '{0} недели'], '{0} нед.', '{0} н.'),
    'yard' => new U(['one' => '{0} ярд', 'many' => '{0} ярдов', 'other' => '{0} ярда'], ['one' => '{0} ярд', 'other' => '{0} ярд.'], ['one' => '{0} ярд', 'other' => '{0} ярд.']),
    'year' => new U(['one' => '{0} год', 'many' => '{0} лет', 'other' => '{0} года'], ['many' => '{0} л.', 'other' => '{0} г.'], ['many' => '{0} л.', 'other' => '{0} г.']),
];