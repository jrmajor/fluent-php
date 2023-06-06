<?php

use Major\Fluent\Formatters\Number\Locale\Unit as U;

return [
    'kilometer' => new U(name: 'length-kilometer', long: ['name' => 'кілометри', 'plurals' => ['one' => '{0} кілометр', 'few' => '{0} кілометри', 'many' => '{0} кілометрів', 'other' => '{0} кілометра'], 'perUnit' => '{0} на кілометр'], short: ['name' => 'км', 'plurals' => ['one' => '{0} км', 'few' => '{0} км', 'many' => '{0} км', 'other' => '{0} км'], 'perUnit' => '{0}/км'], narrow: ['name' => 'км', 'plurals' => ['one' => '{0} км', 'few' => '{0} км', 'many' => '{0} км', 'other' => '{0} км'], 'perUnit' => '{0}/км']),
    'degree' => new U(name: 'angle-degree', long: ['name' => 'градуси', 'plurals' => ['one' => '{0} градус', 'few' => '{0} градуси', 'many' => '{0} градусів', 'other' => '{0} градуса'], 'perUnit' => ''], short: ['name' => 'градуси', 'plurals' => ['one' => '{0}°', 'few' => '{0}°', 'many' => '{0}°', 'other' => '{0}°'], 'perUnit' => ''], narrow: ['name' => '°', 'plurals' => ['one' => '{0}°', 'few' => '{0}°', 'many' => '{0}°', 'other' => '{0}°'], 'perUnit' => '']),
    'acre' => new U(name: 'area-acre', long: ['name' => 'акри', 'plurals' => ['one' => '{0} акр', 'few' => '{0} акри', 'many' => '{0} акрів', 'other' => '{0} акра'], 'perUnit' => ''], short: ['name' => 'акри', 'plurals' => ['one' => '{0} акр', 'few' => '{0} акри', 'many' => '{0} акрів', 'other' => '{0} акра'], 'perUnit' => ''], narrow: ['name' => 'акри', 'plurals' => ['one' => '{0} акр', 'few' => '{0} акр', 'many' => '{0} акр', 'other' => '{0} акр'], 'perUnit' => '']),
    'hectare' => new U(name: 'area-hectare', long: ['name' => 'гектари', 'plurals' => ['one' => '{0} гектар', 'few' => '{0} гектари', 'many' => '{0} гектарів', 'other' => '{0} гектара'], 'perUnit' => ''], short: ['name' => 'га', 'plurals' => ['one' => '{0} га', 'few' => '{0} га', 'many' => '{0} га', 'other' => '{0} га'], 'perUnit' => ''], narrow: ['name' => 'га', 'plurals' => ['one' => '{0}га', 'few' => '{0}га', 'many' => '{0}га', 'other' => '{0}га'], 'perUnit' => '']),
    'percent' => new U(name: 'concentr-percent', long: ['name' => 'відсоток', 'plurals' => ['one' => '{0} відсоток', 'few' => '{0} відсотки', 'many' => '{0} відсотків', 'other' => '{0} відсотка'], 'perUnit' => ''], short: ['name' => 'відсоток', 'plurals' => ['one' => '{0}%', 'few' => '{0}%', 'many' => '{0}%', 'other' => '{0}%'], 'perUnit' => ''], narrow: ['name' => '%', 'plurals' => ['one' => '{0}%', 'few' => '{0}%', 'many' => '{0}%', 'other' => '{0}%'], 'perUnit' => '']),
    'bit' => new U(name: 'digital-bit', long: ['name' => 'біти', 'plurals' => ['one' => '{0} біт', 'few' => '{0} біти', 'many' => '{0} бітів', 'other' => '{0} біта'], 'perUnit' => ''], short: ['name' => 'біт', 'plurals' => ['one' => '{0} б', 'few' => '{0} б', 'many' => '{0} б', 'other' => '{0} б'], 'perUnit' => ''], narrow: ['name' => 'б', 'plurals' => ['one' => '{0} б', 'few' => '{0} б', 'many' => '{0} б', 'other' => '{0} б'], 'perUnit' => '']),
    'byte' => new U(name: 'digital-byte', long: ['name' => 'байти', 'plurals' => ['one' => '{0} байт', 'few' => '{0} байти', 'many' => '{0} байтів', 'other' => '{0} байта'], 'perUnit' => ''], short: ['name' => 'байт', 'plurals' => ['one' => '{0} Б', 'few' => '{0} Б', 'many' => '{0} Б', 'other' => '{0} Б'], 'perUnit' => ''], narrow: ['name' => 'Б', 'plurals' => ['one' => '{0} Б', 'few' => '{0} Б', 'many' => '{0} Б', 'other' => '{0} Б'], 'perUnit' => '']),
    'gigabit' => new U(name: 'digital-gigabit', long: ['name' => 'гігабіти', 'plurals' => ['one' => '{0} гігабіт', 'few' => '{0} гігабіти', 'many' => '{0} гігабітів', 'other' => '{0} гігабіта'], 'perUnit' => ''], short: ['name' => 'Гбіт', 'plurals' => ['one' => '{0} Гб', 'few' => '{0} Гб', 'many' => '{0} Гб', 'other' => '{0} Гб'], 'perUnit' => ''], narrow: ['name' => 'Гб', 'plurals' => ['one' => '{0} Гб', 'few' => '{0} Гб', 'many' => '{0} Гб', 'other' => '{0} Гб'], 'perUnit' => '']),
    'gigabyte' => new U(name: 'digital-gigabyte', long: ['name' => 'гігабайти', 'plurals' => ['one' => '{0} гігабайт', 'few' => '{0} гігабайти', 'many' => '{0} гігабайтів', 'other' => '{0} гігабайта'], 'perUnit' => ''], short: ['name' => 'Гбайт', 'plurals' => ['one' => '{0} ГБ', 'few' => '{0} ГБ', 'many' => '{0} ГБ', 'other' => '{0} ГБ'], 'perUnit' => ''], narrow: ['name' => 'ГБ', 'plurals' => ['one' => '{0} ГБ', 'few' => '{0} ГБ', 'many' => '{0} ГБ', 'other' => '{0} ГБ'], 'perUnit' => '']),
    'kilobit' => new U(name: 'digital-kilobit', long: ['name' => 'кілобіти', 'plurals' => ['one' => '{0} кілобіт', 'few' => '{0} кілобіти', 'many' => '{0} кілобітів', 'other' => '{0} кілобіта'], 'perUnit' => ''], short: ['name' => 'кбіт', 'plurals' => ['one' => '{0} кб', 'few' => '{0} кб', 'many' => '{0} кб', 'other' => '{0} кб'], 'perUnit' => ''], narrow: ['name' => 'кб', 'plurals' => ['one' => '{0} кб', 'few' => '{0} кб', 'many' => '{0} кб', 'other' => '{0} кб'], 'perUnit' => '']),
    'kilobyte' => new U(name: 'digital-kilobyte', long: ['name' => 'кілобайти', 'plurals' => ['one' => '{0} кілобайт', 'few' => '{0} кілобайти', 'many' => '{0} кілобайтів', 'other' => '{0} кілобайта'], 'perUnit' => ''], short: ['name' => 'кбайт', 'plurals' => ['one' => '{0} кБ', 'few' => '{0} кБ', 'many' => '{0} кБ', 'other' => '{0} кБ'], 'perUnit' => ''], narrow: ['name' => 'кБ', 'plurals' => ['one' => '{0} кБ', 'few' => '{0} кБ', 'many' => '{0} кБ', 'other' => '{0} кБ'], 'perUnit' => '']),
    'megabit' => new U(name: 'digital-megabit', long: ['name' => 'мегабіти', 'plurals' => ['one' => '{0} мегабіт', 'few' => '{0} мегабіти', 'many' => '{0} мегабітів', 'other' => '{0} мегабіта'], 'perUnit' => ''], short: ['name' => 'Мбіт', 'plurals' => ['one' => '{0} Мб', 'few' => '{0} Мб', 'many' => '{0} Мб', 'other' => '{0} Мб'], 'perUnit' => ''], narrow: ['name' => 'Мб', 'plurals' => ['one' => '{0} Мб', 'few' => '{0} Мб', 'many' => '{0} Мб', 'other' => '{0} Мб'], 'perUnit' => '']),
    'megabyte' => new U(name: 'digital-megabyte', long: ['name' => 'мегабайти', 'plurals' => ['one' => '{0} мегабайт', 'few' => '{0} мегабайти', 'many' => '{0} мегабайтів', 'other' => '{0} мегабайта'], 'perUnit' => ''], short: ['name' => 'Мбайт', 'plurals' => ['one' => '{0} МБ', 'few' => '{0} МБ', 'many' => '{0} МБ', 'other' => '{0} МБ'], 'perUnit' => ''], narrow: ['name' => 'МБ', 'plurals' => ['one' => '{0} МБ', 'few' => '{0} МБ', 'many' => '{0} МБ', 'other' => '{0} МБ'], 'perUnit' => '']),
    'petabyte' => new U(name: 'digital-petabyte', long: ['name' => 'петабайти', 'plurals' => ['one' => '{0} петабайт', 'few' => '{0} петабайти', 'many' => '{0} петабайтів', 'other' => '{0} петабайта'], 'perUnit' => ''], short: ['name' => 'ПБ', 'plurals' => ['one' => '{0} ПБ', 'few' => '{0} ПБ', 'many' => '{0} ПБ', 'other' => '{0} ПБ'], 'perUnit' => ''], narrow: ['name' => 'ПБ', 'plurals' => ['one' => '{0} ПБ', 'few' => '{0} ПБ', 'many' => '{0} ПБ', 'other' => '{0} ПБ'], 'perUnit' => '']),
    'terabit' => new U(name: 'digital-terabit', long: ['name' => 'терабіти', 'plurals' => ['one' => '{0} терабіт', 'few' => '{0} терабіти', 'many' => '{0} терабітів', 'other' => '{0} терабіта'], 'perUnit' => ''], short: ['name' => 'Тбіт', 'plurals' => ['one' => '{0} Тб', 'few' => '{0} Тб', 'many' => '{0} Тб', 'other' => '{0} Тб'], 'perUnit' => ''], narrow: ['name' => 'Тб', 'plurals' => ['one' => '{0} Тб', 'few' => '{0} Тб', 'many' => '{0} Тб', 'other' => '{0} Тб'], 'perUnit' => '']),
    'terabyte' => new U(name: 'digital-terabyte', long: ['name' => 'терабайти', 'plurals' => ['one' => '{0} терабайт', 'few' => '{0} терабайти', 'many' => '{0} терабайтів', 'other' => '{0} терабайта'], 'perUnit' => ''], short: ['name' => 'Тбайт', 'plurals' => ['one' => '{0} ТБ', 'few' => '{0} ТБ', 'many' => '{0} ТБ', 'other' => '{0} ТБ'], 'perUnit' => ''], narrow: ['name' => 'ТБ', 'plurals' => ['one' => '{0} ТБ', 'few' => '{0} ТБ', 'many' => '{0} ТБ', 'other' => '{0} ТБ'], 'perUnit' => '']),
    'day' => new U(name: 'duration-day', long: ['name' => 'дні', 'plurals' => ['one' => '{0} день', 'few' => '{0} дні', 'many' => '{0} днів', 'other' => '{0} дня'], 'perUnit' => '{0} на день'], short: ['name' => 'дні', 'plurals' => ['one' => '{0} дн.', 'few' => '{0} дн.', 'many' => '{0} дн.', 'other' => '{0} дн.'], 'perUnit' => '{0}/дн.'], narrow: ['name' => 'д', 'plurals' => ['one' => '{0}д', 'few' => '{0}д', 'many' => '{0}д', 'other' => '{0}д'], 'perUnit' => '{0}/д']),
    'hour' => new U(name: 'duration-hour', long: ['name' => 'години', 'plurals' => ['one' => '{0} година', 'few' => '{0} години', 'many' => '{0} годин', 'other' => '{0} години'], 'perUnit' => '{0} на годину'], short: ['name' => 'год', 'plurals' => ['one' => '{0} год', 'few' => '{0} год', 'many' => '{0} год', 'other' => '{0} год'], 'perUnit' => '{0}/год'], narrow: ['name' => 'г', 'plurals' => ['one' => '{0} год.', 'few' => '{0} год.', 'many' => '{0} год.', 'other' => '{0} год.'], 'perUnit' => '{0}/г']),
    'millisecond' => new U(name: 'duration-millisecond', long: ['name' => 'мілісекунди', 'plurals' => ['one' => '{0} мілісекунда', 'few' => '{0} мілісекунди', 'many' => '{0} мілісекунд', 'other' => '{0} мілісекунди'], 'perUnit' => ''], short: ['name' => 'мс', 'plurals' => ['one' => '{0} мс', 'few' => '{0} мс', 'many' => '{0} мс', 'other' => '{0} мс'], 'perUnit' => ''], narrow: ['name' => 'мс', 'plurals' => ['one' => '{0}мс', 'few' => '{0}мс', 'many' => '{0}мс', 'other' => '{0}мс'], 'perUnit' => '']),
    'minute' => new U(name: 'duration-minute', long: ['name' => 'хвилини', 'plurals' => ['one' => '{0} хвилина', 'few' => '{0} хвилини', 'many' => '{0} хвилин', 'other' => '{0} хвилини'], 'perUnit' => '{0} на хвилину'], short: ['name' => 'хв', 'plurals' => ['one' => '{0} хв', 'few' => '{0} хв', 'many' => '{0} хв', 'other' => '{0} хв'], 'perUnit' => '{0}/хв'], narrow: ['name' => 'х', 'plurals' => ['one' => '{0}х', 'few' => '{0}х', 'many' => '{0}х', 'other' => '{0}х'], 'perUnit' => '{0}/х']),
    'month' => new U(name: 'duration-month', long: ['name' => 'місяці', 'plurals' => ['one' => '{0} місяць', 'few' => '{0} місяці', 'many' => '{0} місяців', 'other' => '{0} місяця'], 'perUnit' => '{0} на місяць'], short: ['name' => 'міс.', 'plurals' => ['one' => '{0} міс.', 'few' => '{0} міс.', 'many' => '{0} міс.', 'other' => '{0} міс.'], 'perUnit' => '{0}/міс.'], narrow: ['name' => 'м', 'plurals' => ['one' => '{0}м', 'few' => '{0}м', 'many' => '{0}м', 'other' => '{0}м'], 'perUnit' => '{0}/м']),
    'second' => new U(name: 'duration-second', long: ['name' => 'секунди', 'plurals' => ['one' => '{0} секунда', 'few' => '{0} секунди', 'many' => '{0} секунд', 'other' => '{0} секунди'], 'perUnit' => '{0} на секунду'], short: ['name' => 'с', 'plurals' => ['one' => '{0} с', 'few' => '{0} с', 'many' => '{0} с', 'other' => '{0} с'], 'perUnit' => '{0}/с'], narrow: ['name' => 'с', 'plurals' => ['one' => '{0}с', 'few' => '{0}с', 'many' => '{0}с', 'other' => '{0}с'], 'perUnit' => '{0}/с']),
    'week' => new U(name: 'duration-week', long: ['name' => 'тижні', 'plurals' => ['one' => '{0} тиждень', 'few' => '{0} тижні', 'many' => '{0} тижнів', 'other' => '{0} тижня'], 'perUnit' => '{0} на тиждень'], short: ['name' => 'тиж.', 'plurals' => ['one' => '{0} тиж.', 'few' => '{0} тиж.', 'many' => '{0} тиж.', 'other' => '{0} тиж.'], 'perUnit' => '{0}/тиж.'], narrow: ['name' => 'т', 'plurals' => ['one' => '{0}т', 'few' => '{0}т', 'many' => '{0}т', 'other' => '{0}т'], 'perUnit' => '{0}/т']),
    'year' => new U(name: 'duration-year', long: ['name' => 'роки', 'plurals' => ['one' => '{0} рік', 'few' => '{0} роки', 'many' => '{0} років', 'other' => '{0} року'], 'perUnit' => '{0} на рік'], short: ['name' => 'р.', 'plurals' => ['one' => '{0} р.', 'few' => '{0} р.', 'many' => '{0} р.', 'other' => '{0} р.'], 'perUnit' => '{0}/р.'], narrow: ['name' => 'р', 'plurals' => ['one' => '{0}р', 'few' => '{0}р', 'many' => '{0}р', 'other' => '{0}р'], 'perUnit' => '{0}/р']),
    'centimeter' => new U(name: 'length-centimeter', long: ['name' => 'сантиметри', 'plurals' => ['one' => '{0} сантиметр', 'few' => '{0} сантиметри', 'many' => '{0} сантиметрів', 'other' => '{0} сантиметра'], 'perUnit' => '{0} на сантиметр'], short: ['name' => 'см', 'plurals' => ['one' => '{0} см', 'few' => '{0} см', 'many' => '{0} см', 'other' => '{0} см'], 'perUnit' => '{0}/см'], narrow: ['name' => 'см', 'plurals' => ['one' => '{0} см', 'few' => '{0} см', 'many' => '{0} см', 'other' => '{0} см'], 'perUnit' => '{0}/см']),
    'foot' => new U(name: 'length-foot', long: ['name' => 'фути', 'plurals' => ['one' => '{0} фут', 'few' => '{0} фути', 'many' => '{0} футів', 'other' => '{0} фута'], 'perUnit' => '{0} на фут'], short: ['name' => 'фт', 'plurals' => ['one' => '{0} фт', 'few' => '{0} фт', 'many' => '{0} фт', 'other' => '{0} фт'], 'perUnit' => '{0}/фт'], narrow: ['name' => 'фт', 'plurals' => ['one' => '{0} фт', 'few' => '{0} фт', 'many' => '{0} фт', 'other' => '{0} фт'], 'perUnit' => '{0}/фт']),
    'inch' => new U(name: 'length-inch', long: ['name' => 'дюйми', 'plurals' => ['one' => '{0} дюйм', 'few' => '{0} дюйми', 'many' => '{0} дюймів', 'other' => '{0} дюйма'], 'perUnit' => '{0} на дюйм'], short: ['name' => 'дюйми', 'plurals' => ['one' => '{0} дюйм', 'few' => '{0} дюйми', 'many' => '{0} дюймів', 'other' => '{0} дюйма'], 'perUnit' => '{0}/дюйм'], narrow: ['name' => 'дюйми', 'plurals' => ['one' => '{0} дм', 'few' => '{0} дм', 'many' => '{0} дм', 'other' => '{0} дм'], 'perUnit' => '{0}/дм']),
    'meter' => new U(name: 'length-meter', long: ['name' => 'метри', 'plurals' => ['one' => '{0} метр', 'few' => '{0} метри', 'many' => '{0} метрів', 'other' => '{0} метра'], 'perUnit' => '{0} на метр'], short: ['name' => 'м', 'plurals' => ['one' => '{0} м', 'few' => '{0} м', 'many' => '{0} м', 'other' => '{0} м'], 'perUnit' => '{0}/м'], narrow: ['name' => 'м', 'plurals' => ['one' => '{0}м', 'few' => '{0}м', 'many' => '{0}м', 'other' => '{0}м'], 'perUnit' => '{0}/м']),
    'mile-scandinavian' => new U(name: 'length-mile-scandinavian', long: ['name' => 'скандинавські милі', 'plurals' => ['one' => '{0} скандинавська миля', 'few' => '{0} скандинавські милі', 'many' => '{0} скандинавських миль', 'other' => '{0} скандинавської милі'], 'perUnit' => ''], short: ['name' => 'сканд. миля', 'plurals' => ['one' => '{0} сканд. миля', 'few' => '{0} сканд. милі', 'many' => '{0} сканд. миль', 'other' => '{0} сканд. милі'], 'perUnit' => ''], narrow: ['name' => 'міл', 'plurals' => ['one' => '{0} сканд. мл', 'few' => '{0} сканд. мл', 'many' => '{0} сканд. мл', 'other' => '{0} сканд. мл'], 'perUnit' => '']),
    'mile' => new U(name: 'length-mile', long: ['name' => 'милі', 'plurals' => ['one' => '{0} миля', 'few' => '{0} милі', 'many' => '{0} миль', 'other' => '{0} милі'], 'perUnit' => ''], short: ['name' => 'милі', 'plurals' => ['one' => '{0} миля', 'few' => '{0} милі', 'many' => '{0} миль', 'other' => '{0} милі'], 'perUnit' => ''], narrow: ['name' => 'мл', 'plurals' => ['one' => '{0} мл', 'few' => '{0} мл', 'many' => '{0} мл', 'other' => '{0} мл'], 'perUnit' => '']),
    'millimeter' => new U(name: 'length-millimeter', long: ['name' => 'міліметри', 'plurals' => ['one' => '{0} міліметр', 'few' => '{0} міліметри', 'many' => '{0} міліметрів', 'other' => '{0} міліметра'], 'perUnit' => ''], short: ['name' => 'мм', 'plurals' => ['one' => '{0} мм', 'few' => '{0} мм', 'many' => '{0} мм', 'other' => '{0} мм'], 'perUnit' => ''], narrow: ['name' => 'мм', 'plurals' => ['one' => '{0} мм', 'few' => '{0} мм', 'many' => '{0} мм', 'other' => '{0} мм'], 'perUnit' => '']),
    'yard' => new U(name: 'length-yard', long: ['name' => 'ярди', 'plurals' => ['one' => '{0} ярд', 'few' => '{0} ярди', 'many' => '{0} ярдів', 'other' => '{0} ярда'], 'perUnit' => ''], short: ['name' => 'ярди', 'plurals' => ['one' => '{0} ярд', 'few' => '{0} ярди', 'many' => '{0} ярдів', 'other' => '{0} ярда'], 'perUnit' => ''], narrow: ['name' => 'ярди', 'plurals' => ['one' => '{0} ярд', 'few' => '{0} ярди', 'many' => '{0} ярдів', 'other' => '{0} ярда'], 'perUnit' => '']),
    'gram' => new U(name: 'mass-gram', long: ['name' => 'грами', 'plurals' => ['one' => '{0} грам', 'few' => '{0} грами', 'many' => '{0} грамів', 'other' => '{0} грама'], 'perUnit' => '{0} на грам'], short: ['name' => 'г', 'plurals' => ['one' => '{0} г', 'few' => '{0} г', 'many' => '{0} г', 'other' => '{0} г'], 'perUnit' => '{0}/г'], narrow: ['name' => 'г', 'plurals' => ['one' => '{0}г', 'few' => '{0}г', 'many' => '{0}г', 'other' => '{0}г'], 'perUnit' => '{0}/г']),
    'kilogram' => new U(name: 'mass-kilogram', long: ['name' => 'кілограми', 'plurals' => ['one' => '{0} кілограм', 'few' => '{0} кілограми', 'many' => '{0} кілограмів', 'other' => '{0} кілограма'], 'perUnit' => '{0} на кілограм'], short: ['name' => 'кг', 'plurals' => ['one' => '{0} кг', 'few' => '{0} кг', 'many' => '{0} кг', 'other' => '{0} кг'], 'perUnit' => '{0}/кг'], narrow: ['name' => 'кг', 'plurals' => ['one' => '{0}кг', 'few' => '{0}кг', 'many' => '{0}кг', 'other' => '{0}кг'], 'perUnit' => '{0}/кг']),
    'ounce' => new U(name: 'mass-ounce', long: ['name' => 'унції', 'plurals' => ['one' => '{0} унція', 'few' => '{0} унції', 'many' => '{0} унцій', 'other' => '{0} унції'], 'perUnit' => '{0} на унцію'], short: ['name' => 'унц.', 'plurals' => ['one' => '{0} унц.', 'few' => '{0} унц.', 'many' => '{0} унц.', 'other' => '{0} унц.'], 'perUnit' => '{0}/унц.'], narrow: ['name' => 'ун.', 'plurals' => ['one' => '{0} ун.', 'few' => '{0} ун.', 'many' => '{0} ун.', 'other' => '{0} ун.'], 'perUnit' => '{0}/ун']),
    'pound' => new U(name: 'mass-pound', long: ['name' => 'фунти', 'plurals' => ['one' => '{0} фунт', 'few' => '{0} фунти', 'many' => '{0} фунтів', 'other' => '{0} фунта'], 'perUnit' => '{0} на фунт'], short: ['name' => 'фунти', 'plurals' => ['one' => '{0} фунт', 'few' => '{0} фунти', 'many' => '{0} фунтів', 'other' => '{0} фунта'], 'perUnit' => '{0}/фунт'], narrow: ['name' => 'фнт', 'plurals' => ['one' => '{0} фнт', 'few' => '{0} фнт', 'many' => '{0} фнт', 'other' => '{0} фнт'], 'perUnit' => '{0}/фнт']),
    'stone' => new U(name: 'mass-stone', long: ['name' => 'стоуни', 'plurals' => ['one' => '{0} стоун', 'few' => '{0} стоуни', 'many' => '{0} стоунів', 'other' => '{0} стоуна'], 'perUnit' => ''], short: ['name' => 'стоун', 'plurals' => ['one' => '{0} стн', 'few' => '{0} стн', 'many' => '{0} стн', 'other' => '{0} стн'], 'perUnit' => ''], narrow: ['name' => 'стн', 'plurals' => ['one' => '{0} стн', 'few' => '{0} стн', 'many' => '{0} стн', 'other' => '{0} стн'], 'perUnit' => '']),
    'celsius' => new U(name: 'temperature-celsius', long: ['name' => 'градуси Цельсія', 'plurals' => ['one' => '{0} градус Цельсія', 'few' => '{0} градуси Цельсія', 'many' => '{0} градусів Цельсія', 'other' => '{0} градуса Цельсія'], 'perUnit' => ''], short: ['name' => '°C', 'plurals' => ['one' => "{0}\u{A0}°C", 'few' => "{0}\u{A0}°C", 'many' => "{0}\u{A0}°C", 'other' => "{0}\u{A0}°C"], 'perUnit' => ''], narrow: ['name' => '°C', 'plurals' => ['one' => '{0}°C', 'few' => '{0}°C', 'many' => '{0}°C', 'other' => '{0}°C'], 'perUnit' => '']),
    'fahrenheit' => new U(name: 'temperature-fahrenheit', long: ['name' => 'градуси Фаренгейта', 'plurals' => ['one' => '{0} градус Фаренгейта', 'few' => '{0} градуси Фаренгейта', 'many' => '{0} градусів Фаренгейта', 'other' => '{0} градуса Фаренгейта'], 'perUnit' => ''], short: ['name' => '°F', 'plurals' => ['one' => "{0}\u{A0}°F", 'few' => "{0}\u{A0}°F", 'many' => "{0}\u{A0}°F", 'other' => "{0}\u{A0}°F"], 'perUnit' => ''], narrow: ['name' => '°F', 'plurals' => ['one' => '{0}°F', 'few' => '{0}°F', 'many' => '{0}°F', 'other' => '{0}°F'], 'perUnit' => '']),
    'fluid-ounce' => new U(name: 'volume-fluid-ounce', long: ['name' => 'рідкі унції', 'plurals' => ['one' => '{0} рідка унція', 'few' => '{0} рідкі унції', 'many' => '{0} рідких унцій', 'other' => '{0} рідкої унції'], 'perUnit' => ''], short: ['name' => 'рід. унція', 'plurals' => ['one' => '{0} рід. унція', 'few' => '{0} рід. унції', 'many' => '{0} рід. унцій', 'other' => '{0} рід. унції'], 'perUnit' => ''], narrow: ['name' => 'рід. унція', 'plurals' => ['one' => '{0} рід. унція', 'few' => '{0} рід. унції', 'many' => '{0} рід. унцій', 'other' => '{0} рід. унції'], 'perUnit' => '']),
    'gallon' => new U(name: 'volume-gallon', long: ['name' => 'галони', 'plurals' => ['one' => '{0} галон', 'few' => '{0} галони', 'many' => '{0} галонів', 'other' => '{0} галона'], 'perUnit' => '{0} на галон'], short: ['name' => 'гал.', 'plurals' => ['one' => '{0} гал.', 'few' => '{0} гал.', 'many' => '{0} гал.', 'other' => '{0} гал.'], 'perUnit' => '{0}/гал.'], narrow: ['name' => 'гал.', 'plurals' => ['one' => '{0} гал.', 'few' => '{0} гал.', 'many' => '{0} гал.', 'other' => '{0} гал.'], 'perUnit' => '{0}/гал.']),
    'liter' => new U(name: 'volume-liter', long: ['name' => 'літри', 'plurals' => ['one' => '{0} літр', 'few' => '{0} літри', 'many' => '{0} літрів', 'other' => '{0} літра'], 'perUnit' => '{0} на літр'], short: ['name' => 'л', 'plurals' => ['one' => '{0} л', 'few' => '{0} л', 'many' => '{0} л', 'other' => '{0} л'], 'perUnit' => '{0}/л'], narrow: ['name' => 'л', 'plurals' => ['one' => '{0}л', 'few' => '{0}л', 'many' => '{0}л', 'other' => '{0}л'], 'perUnit' => '{0}/л']),
    'milliliter' => new U(name: 'volume-milliliter', long: ['name' => 'мілілітри', 'plurals' => ['one' => '{0} мілілітр', 'few' => '{0} мілілітри', 'many' => '{0} мілілітрів', 'other' => '{0} мілілітра'], 'perUnit' => ''], short: ['name' => 'мл', 'plurals' => ['one' => '{0} мл', 'few' => '{0} мл', 'many' => '{0} мл', 'other' => '{0} мл'], 'perUnit' => ''], narrow: ['name' => 'мл', 'plurals' => ['one' => '{0} мл', 'few' => '{0} мл', 'many' => '{0} мл', 'other' => '{0} мл'], 'perUnit' => '']),
];
