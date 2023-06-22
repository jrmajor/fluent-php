<?php

use Major\Fluent\Formatters\Number\Locale\Unit as U;

return [
    'acre' => new U(long: ['name' => 'акр', 'plurals' => ['one' => '{0} акр', 'other' => '{0} акр'], 'perUnit' => ''], short: ['name' => 'акр', 'plurals' => ['one' => '{0} акр', 'other' => '{0} акр'], 'perUnit' => ''], narrow: ['name' => 'акр', 'plurals' => ['one' => '{0} акр', 'other' => '{0} акр'], 'perUnit' => '']),
    'bit' => new U(long: ['name' => 'бит', 'plurals' => ['one' => '{0} бит', 'other' => '{0} бит'], 'perUnit' => ''], short: ['name' => 'бит', 'plurals' => ['one' => '{0} бит', 'other' => '{0} бит'], 'perUnit' => ''], narrow: ['name' => 'бит', 'plurals' => ['one' => '{0} бит', 'other' => '{0} бит'], 'perUnit' => '']),
    'byte' => new U(long: ['name' => 'байт', 'plurals' => ['one' => '{0} байт', 'other' => '{0} байт'], 'perUnit' => ''], short: ['name' => 'байт', 'plurals' => ['one' => '{0} байт', 'other' => '{0} байт'], 'perUnit' => ''], narrow: ['name' => 'байт', 'plurals' => ['one' => '{0} байт', 'other' => '{0} байт'], 'perUnit' => '']),
    'celsius' => new U(long: ['name' => 'Цельсий градусы', 'plurals' => ['one' => '{0} Цельсий градусы', 'other' => '{0} Цельсий градусы'], 'perUnit' => ''], short: ['name' => 'Цельсий градусы', 'plurals' => ['one' => '{0}°C', 'other' => '{0}°C'], 'perUnit' => ''], narrow: ['name' => '°C', 'plurals' => ['one' => '{0}°C', 'other' => '{0}°C'], 'perUnit' => '']),
    'centimeter' => new U(long: ['name' => 'сантиметр', 'plurals' => ['one' => '{0} сантиметр', 'other' => '{0} сантиметр'], 'perUnit' => '{0}/сантиметр'], short: ['name' => 'см', 'plurals' => ['one' => '{0} см', 'other' => '{0} см'], 'perUnit' => '{0}/см'], narrow: ['name' => 'см', 'plurals' => ['one' => '{0} см', 'other' => '{0} см'], 'perUnit' => '{0}/см']),
    'day' => new U(long: ['name' => 'күн', 'plurals' => ['one' => '{0} күн', 'other' => '{0} күн'], 'perUnit' => 'күніне {0}'], short: ['name' => 'күн', 'plurals' => ['one' => '{0} күн', 'other' => '{0} күн'], 'perUnit' => '{0}/күн'], narrow: ['name' => 'күн', 'plurals' => ['one' => '{0} к.', 'other' => '{0} к.'], 'perUnit' => '{0}/күн']),
    'degree' => new U(long: ['name' => 'градус', 'plurals' => ['one' => '{0} градус', 'other' => '{0} градус'], 'perUnit' => ''], short: ['name' => 'градус', 'plurals' => ['one' => '{0} градус', 'other' => '{0} градус'], 'perUnit' => ''], narrow: ['name' => 'градус', 'plurals' => ['one' => '{0}°', 'other' => '{0}°'], 'perUnit' => '']),
    'fahrenheit' => new U(long: ['name' => 'Фаренгейт градусы', 'plurals' => ['one' => '{0} Фаренгейт градусы', 'other' => '{0} Фаренгейт градусы'], 'perUnit' => ''], short: ['name' => 'F градусы', 'plurals' => ['one' => '{0}°F', 'other' => '{0}°F'], 'perUnit' => ''], narrow: ['name' => '°F', 'plurals' => ['one' => '{0}°', 'other' => '{0}°'], 'perUnit' => '']),
    'fluid-ounce' => new U(long: ['name' => 'сұйық унция', 'plurals' => ['one' => '{0} сұйық унция', 'other' => '{0} сұйық унция'], 'perUnit' => ''], short: ['name' => 'сұй. унц.', 'plurals' => ['one' => '{0} сұй. унц.', 'other' => '{0} сұй. унц.'], 'perUnit' => ''], narrow: ['name' => 'сұй. унц.', 'plurals' => ['one' => '{0} сұй. унц.', 'other' => '{0} сұй. унц.'], 'perUnit' => '']),
    'foot' => new U(long: ['name' => 'фут', 'plurals' => ['one' => '{0} фут', 'other' => '{0} фут'], 'perUnit' => '{0}/фут'], short: ['name' => 'фут', 'plurals' => ['one' => '{0} фут', 'other' => '{0} фут'], 'perUnit' => '{0}/фут'], narrow: ['name' => 'фут', 'plurals' => ['one' => '{0} фут', 'other' => '{0} фут'], 'perUnit' => '{0}/фут']),
    'gallon' => new U(long: ['name' => 'галлон', 'plurals' => ['one' => '{0} галлон', 'other' => '{0} галлон'], 'perUnit' => '{0}/галлон'], short: ['name' => 'гал.', 'plurals' => ['one' => '{0} гал.', 'other' => '{0} гал.'], 'perUnit' => '{0}/гал.'], narrow: ['name' => 'гал.', 'plurals' => ['one' => '{0} гал.', 'other' => '{0} гал.'], 'perUnit' => '{0}/гал.']),
    'gigabit' => new U(long: ['name' => 'гигабит', 'plurals' => ['one' => '{0} гигабит', 'other' => '{0} гигабит'], 'perUnit' => ''], short: ['name' => 'Гбит', 'plurals' => ['one' => '{0} Гб', 'other' => '{0} Гб'], 'perUnit' => ''], narrow: ['name' => 'Гб', 'plurals' => ['one' => '{0} Гб', 'other' => '{0} Гб'], 'perUnit' => '']),
    'gigabyte' => new U(long: ['name' => 'гигабайт', 'plurals' => ['one' => '{0} гигабайт', 'other' => '{0} гигабайт'], 'perUnit' => ''], short: ['name' => 'Гбайт', 'plurals' => ['one' => '{0} ГБ', 'other' => '{0} ГБ'], 'perUnit' => ''], narrow: ['name' => 'ГБ', 'plurals' => ['one' => '{0} ГБ', 'other' => '{0} ГБ'], 'perUnit' => '']),
    'gram' => new U(long: ['name' => 'грамм', 'plurals' => ['one' => '{0} грамм', 'other' => '{0} грамм'], 'perUnit' => '{0}/грамм'], short: ['name' => 'грамм', 'plurals' => ['one' => '{0} г', 'other' => '{0} г'], 'perUnit' => '{0}/г'], narrow: ['name' => 'грамм', 'plurals' => ['one' => '{0} г', 'other' => '{0} г'], 'perUnit' => '{0}/г']),
    'hectare' => new U(long: ['name' => 'гектар', 'plurals' => ['one' => '{0} гектар', 'other' => '{0} гектар'], 'perUnit' => ''], short: ['name' => 'гектар', 'plurals' => ['one' => '{0} га', 'other' => '{0} га'], 'perUnit' => ''], narrow: ['name' => 'гектар', 'plurals' => ['one' => '{0} га', 'other' => '{0} га'], 'perUnit' => '']),
    'hour' => new U(long: ['name' => 'сағат', 'plurals' => ['one' => '{0} сағат', 'other' => '{0} сағат'], 'perUnit' => 'сағатына {0}'], short: ['name' => 'сағат', 'plurals' => ['one' => '{0} сағ', 'other' => '{0} сағ'], 'perUnit' => '{0}/сағ'], narrow: ['name' => 'сағ', 'plurals' => ['one' => '{0} сағ', 'other' => '{0} сағ'], 'perUnit' => '{0}/сағ']),
    'inch' => new U(long: ['name' => 'дюйм', 'plurals' => ['one' => '{0} дюйм', 'other' => '{0} дюйм'], 'perUnit' => '{0}/дюйм'], short: ['name' => 'дюйм', 'plurals' => ['one' => '{0} дюйм', 'other' => '{0} дюйм'], 'perUnit' => '{0}/дюйм'], narrow: ['name' => 'дюйм', 'plurals' => ['one' => '{0} дюйм', 'other' => '{0} дюйм'], 'perUnit' => '{0}/дюйм']),
    'kilobit' => new U(long: ['name' => 'килобит', 'plurals' => ['one' => '{0} килобит', 'other' => '{0} килобит'], 'perUnit' => ''], short: ['name' => 'кбит', 'plurals' => ['one' => '{0} кб', 'other' => '{0} кб'], 'perUnit' => ''], narrow: ['name' => 'кб', 'plurals' => ['one' => '{0} кб', 'other' => '{0} кб'], 'perUnit' => '']),
    'kilobyte' => new U(long: ['name' => 'килобайт', 'plurals' => ['one' => '{0} килобайт', 'other' => '{0} килобайт'], 'perUnit' => ''], short: ['name' => 'кбайт', 'plurals' => ['one' => '{0} кБ', 'other' => '{0} кБ'], 'perUnit' => ''], narrow: ['name' => 'кБ', 'plurals' => ['one' => '{0} кБ', 'other' => '{0} кБ'], 'perUnit' => '']),
    'kilogram' => new U(long: ['name' => 'килограмм', 'plurals' => ['one' => '{0} килограмм', 'other' => '{0} килограмм'], 'perUnit' => '{0}/килограмм'], short: ['name' => 'кг', 'plurals' => ['one' => '{0} кг', 'other' => '{0} кг'], 'perUnit' => '{0}/кг'], narrow: ['name' => 'кг', 'plurals' => ['one' => '{0} кг', 'other' => '{0} кг'], 'perUnit' => '{0}/кг']),
    'kilometer' => new U(long: ['name' => 'километр', 'plurals' => ['one' => '{0} километр', 'other' => '{0} километр'], 'perUnit' => '{0}/километр'], short: ['name' => 'км', 'plurals' => ['one' => '{0} км', 'other' => '{0} км'], 'perUnit' => '{0}/км'], narrow: ['name' => 'км', 'plurals' => ['one' => '{0} км', 'other' => '{0} км'], 'perUnit' => '{0}/км']),
    'liter' => new U(long: ['name' => 'литр', 'plurals' => ['one' => '{0} литр', 'other' => '{0} литр'], 'perUnit' => '{0}/литр'], short: ['name' => 'литр', 'plurals' => ['one' => '{0} л', 'other' => '{0} л'], 'perUnit' => '{0}/л'], narrow: ['name' => 'литр', 'plurals' => ['one' => '{0} л', 'other' => '{0} л'], 'perUnit' => '{0}/л']),
    'megabit' => new U(long: ['name' => 'мегабит', 'plurals' => ['one' => '{0} мегабит', 'other' => '{0} мегабит'], 'perUnit' => ''], short: ['name' => 'Мбит', 'plurals' => ['one' => '{0} Mб', 'other' => '{0} Mб'], 'perUnit' => ''], narrow: ['name' => 'Мб', 'plurals' => ['one' => '{0} Mб', 'other' => '{0} Mб'], 'perUnit' => '']),
    'megabyte' => new U(long: ['name' => 'мегабайт', 'plurals' => ['one' => '{0} мегабайт', 'other' => '{0} мегабайт'], 'perUnit' => ''], short: ['name' => 'Мбайт', 'plurals' => ['one' => '{0} MБ', 'other' => '{0} MБ'], 'perUnit' => ''], narrow: ['name' => 'МБ', 'plurals' => ['one' => '{0} MБ', 'other' => '{0} MБ'], 'perUnit' => '']),
    'meter' => new U(long: ['name' => 'метр', 'plurals' => ['one' => '{0} метр', 'other' => '{0} метр'], 'perUnit' => '{0}/метр'], short: ['name' => 'м', 'plurals' => ['one' => '{0} м', 'other' => '{0} м'], 'perUnit' => '{0}/м'], narrow: ['name' => 'м', 'plurals' => ['one' => '{0} м', 'other' => '{0} м'], 'perUnit' => '{0}/м']),
    'mile' => new U(long: ['name' => 'миля', 'plurals' => ['one' => '{0} миля', 'other' => '{0} миля'], 'perUnit' => ''], short: ['name' => 'миля', 'plurals' => ['one' => '{0} миля', 'other' => '{0} миля'], 'perUnit' => ''], narrow: ['name' => 'миль', 'plurals' => ['one' => '{0} миля', 'other' => '{0} миля'], 'perUnit' => '']),
    'mile-scandinavian' => new U(long: ['name' => 'скандинавиялық миля', 'plurals' => ['one' => '{0} скандинавиялық миля', 'other' => '{0} скандинавиялық миля'], 'perUnit' => ''], short: ['name' => 'smi', 'plurals' => ['one' => '{0} smi', 'other' => '{0} smi'], 'perUnit' => ''], narrow: ['name' => 'скандинавиялық миль', 'plurals' => ['one' => '{0} ск. миль', 'other' => '{0} ск. миль'], 'perUnit' => '']),
    'milliliter' => new U(long: ['name' => 'миллилитр', 'plurals' => ['one' => '{0} миллилитр', 'other' => '{0} миллилитр'], 'perUnit' => ''], short: ['name' => 'мл', 'plurals' => ['one' => '{0} мл', 'other' => '{0} мл'], 'perUnit' => ''], narrow: ['name' => 'мл', 'plurals' => ['one' => '{0} мл', 'other' => '{0} мл'], 'perUnit' => '']),
    'millimeter' => new U(long: ['name' => 'миллиметр', 'plurals' => ['one' => '{0} миллиметр', 'other' => '{0} миллиметр'], 'perUnit' => ''], short: ['name' => 'мм', 'plurals' => ['one' => '{0} мм', 'other' => '{0} мм'], 'perUnit' => ''], narrow: ['name' => 'мм', 'plurals' => ['one' => '{0} мм', 'other' => '{0} мм'], 'perUnit' => '']),
    'millisecond' => new U(long: ['name' => 'миллисекунд', 'plurals' => ['one' => '{0} миллисекунд', 'other' => '{0} миллисекунд'], 'perUnit' => ''], short: ['name' => 'мс', 'plurals' => ['one' => '{0} мс', 'other' => '{0} мс'], 'perUnit' => ''], narrow: ['name' => 'мс', 'plurals' => ['one' => '{0} мс', 'other' => '{0} мс'], 'perUnit' => '']),
    'minute' => new U(long: ['name' => 'минут', 'plurals' => ['one' => '{0} минут', 'other' => '{0} минут'], 'perUnit' => 'минутына {0}'], short: ['name' => 'мин', 'plurals' => ['one' => '{0} мин', 'other' => '{0} мин'], 'perUnit' => '{0}/мин'], narrow: ['name' => 'мин', 'plurals' => ['one' => '{0} мин', 'other' => '{0} мин'], 'perUnit' => '{0}/мин']),
    'month' => new U(long: ['name' => 'ай', 'plurals' => ['one' => '{0} ай', 'other' => '{0} ай'], 'perUnit' => 'айына {0}'], short: ['name' => 'ай', 'plurals' => ['one' => '{0} ай', 'other' => '{0} ай'], 'perUnit' => '{0}/ай'], narrow: ['name' => 'ай', 'plurals' => ['one' => '{0} ай', 'other' => '{0} ай'], 'perUnit' => '{0}/ай']),
    'ounce' => new U(long: ['name' => 'унция', 'plurals' => ['one' => '{0} унция', 'other' => '{0} унция'], 'perUnit' => '{0}/унция'], short: ['name' => 'унц.', 'plurals' => ['one' => '{0} унц.', 'other' => '{0} унц.'], 'perUnit' => '{0}/унц.'], narrow: ['name' => 'унц.', 'plurals' => ['one' => '{0} унция', 'other' => '{0} унция'], 'perUnit' => '{0}/унц.']),
    'percent' => new U(long: ['name' => 'пайыз', 'plurals' => ['one' => '{0} пайыз', 'other' => '{0} пайыз'], 'perUnit' => ''], short: ['name' => 'пайыз', 'plurals' => ['one' => '{0}%', 'other' => '{0}%'], 'perUnit' => ''], narrow: ['name' => '%', 'plurals' => ['one' => '{0}%', 'other' => '{0}%'], 'perUnit' => '']),
    'petabyte' => new U(long: ['name' => 'петабайт', 'plurals' => ['one' => '{0} петабайт', 'other' => '{0} петабайт'], 'perUnit' => ''], short: ['name' => 'Пбайт', 'plurals' => ['one' => '{0} ПБ', 'other' => '{0} ПБ'], 'perUnit' => ''], narrow: ['name' => 'ПБ', 'plurals' => ['one' => '{0} ПБ', 'other' => '{0} ПБ'], 'perUnit' => '']),
    'pound' => new U(long: ['name' => 'фунт', 'plurals' => ['one' => '{0} фунт', 'other' => '{0} фунт'], 'perUnit' => '{0}/фунт'], short: ['name' => 'фунт', 'plurals' => ['one' => '{0} фунт', 'other' => '{0} фунт'], 'perUnit' => '{0}/фунт'], narrow: ['name' => 'фунт', 'plurals' => ['one' => '{0} фунт', 'other' => '{0} фунт'], 'perUnit' => '{0}/фунт']),
    'second' => new U(long: ['name' => 'секунд', 'plurals' => ['one' => '{0} секунд', 'other' => '{0} секунд'], 'perUnit' => 'секундына {0}'], short: ['name' => 'с', 'plurals' => ['one' => '{0} с', 'other' => '{0} с'], 'perUnit' => '{0}/с'], narrow: ['name' => 'с', 'plurals' => ['one' => '{0} с', 'other' => '{0} с'], 'perUnit' => '{0}/с']),
    'stone' => new U(long: ['name' => 'стоун', 'plurals' => ['one' => '{0} стоун', 'other' => '{0} стоун'], 'perUnit' => ''], short: ['name' => 'стоун', 'plurals' => ['one' => '{0} стоун', 'other' => '{0} стоун'], 'perUnit' => ''], narrow: ['name' => 'стоун', 'plurals' => ['one' => '{0} стоун', 'other' => '{0} стоун'], 'perUnit' => '']),
    'terabit' => new U(long: ['name' => 'терабит', 'plurals' => ['one' => '{0} терабит', 'other' => '{0} терабит'], 'perUnit' => ''], short: ['name' => 'Тбит', 'plurals' => ['one' => '{0} Tб', 'other' => '{0} Tб'], 'perUnit' => ''], narrow: ['name' => 'Тбит', 'plurals' => ['one' => '{0} Tб', 'other' => '{0} Tб'], 'perUnit' => '']),
    'terabyte' => new U(long: ['name' => 'терабайт', 'plurals' => ['one' => '{0} терабайт', 'other' => '{0} терабайт'], 'perUnit' => ''], short: ['name' => 'Тбайт', 'plurals' => ['one' => '{0} TБ', 'other' => '{0} TБ'], 'perUnit' => ''], narrow: ['name' => 'ТБ', 'plurals' => ['one' => '{0} TБ', 'other' => '{0} TБ'], 'perUnit' => '']),
    'week' => new U(long: ['name' => 'апта', 'plurals' => ['one' => '{0} апта', 'other' => '{0} апта'], 'perUnit' => 'аптасына {0}'], short: ['name' => 'апта', 'plurals' => ['one' => '{0} ап.', 'other' => '{0} ап.'], 'perUnit' => '{0}/ап.'], narrow: ['name' => 'ап.', 'plurals' => ['one' => '{0} ап.', 'other' => '{0} ап.'], 'perUnit' => '{0}/апта']),
    'yard' => new U(long: ['name' => 'ярд', 'plurals' => ['one' => '{0} ярд', 'other' => '{0} ярд'], 'perUnit' => ''], short: ['name' => 'ярд', 'plurals' => ['one' => '{0} ярд', 'other' => '{0} ярд'], 'perUnit' => ''], narrow: ['name' => 'ярд', 'plurals' => ['one' => '{0} ярд', 'other' => '{0} ярд'], 'perUnit' => '']),
    'year' => new U(long: ['name' => 'жыл', 'plurals' => ['one' => '{0} жыл', 'other' => '{0} жыл'], 'perUnit' => 'жылына {0}'], short: ['name' => 'жыл', 'plurals' => ['one' => '{0} ж.', 'other' => '{0} ж.'], 'perUnit' => '{0}/ж.'], narrow: ['name' => 'ж.', 'plurals' => ['one' => '{0} ж.', 'other' => '{0} ж.'], 'perUnit' => '{0}/ж.']),
];
