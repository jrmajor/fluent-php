<?php

use Major\Fluent\Formatters\Number\Locale\Unit as U;

return [
    'degree' => new U(name: 'angle-degree', long: ['name' => 'градуси', 'plurals' => ['one' => '{0} градус', 'other' => '{0} градуса'], 'perUnit' => ''], short: ['name' => '°', 'plurals' => ['one' => '{0}°', 'other' => '{0}°'], 'perUnit' => ''], narrow: ['name' => '°', 'plurals' => ['one' => '{0}°', 'other' => '{0}°'], 'perUnit' => '']),
    'acre' => new U(name: 'area-acre', long: ['name' => 'акри', 'plurals' => ['one' => '{0} акър', 'other' => '{0} акра'], 'perUnit' => ''], short: ['name' => 'акри', 'plurals' => ['one' => '{0} акър', 'other' => '{0} акра'], 'perUnit' => ''], narrow: ['name' => 'акри', 'plurals' => ['one' => '{0} акър', 'other' => '{0} акра'], 'perUnit' => '']),
    'hectare' => new U(name: 'area-hectare', long: ['name' => 'хектари', 'plurals' => ['one' => '{0} хектар', 'other' => '{0} хектара'], 'perUnit' => ''], short: ['name' => 'ha', 'plurals' => ['one' => '{0} ha', 'other' => '{0} ha'], 'perUnit' => ''], narrow: ['name' => 'ha', 'plurals' => ['one' => '{0} ha', 'other' => '{0} ha'], 'perUnit' => '']),
    'percent' => new U(name: 'concentr-percent', long: ['name' => 'процент', 'plurals' => ['one' => '{0} процент', 'other' => '{0} процента'], 'perUnit' => ''], short: ['name' => 'процент', 'plurals' => ['one' => '{0}%', 'other' => '{0}%'], 'perUnit' => ''], narrow: ['name' => '%', 'plurals' => ['one' => '{0}%', 'other' => '{0}%'], 'perUnit' => '']),
    'bit' => new U(name: 'digital-bit', long: ['name' => 'битове', 'plurals' => ['one' => '{0} бит', 'other' => '{0} бита'], 'perUnit' => ''], short: ['name' => 'b', 'plurals' => ['one' => '{0} b', 'other' => '{0} b'], 'perUnit' => ''], narrow: ['name' => 'b', 'plurals' => ['one' => '{0} b', 'other' => '{0} b'], 'perUnit' => '']),
    'byte' => new U(name: 'digital-byte', long: ['name' => 'байтове', 'plurals' => ['one' => '{0} байт', 'other' => '{0} байта'], 'perUnit' => ''], short: ['name' => 'B', 'plurals' => ['one' => '{0} B', 'other' => '{0} B'], 'perUnit' => ''], narrow: ['name' => 'B', 'plurals' => ['one' => '{0} B', 'other' => '{0} B'], 'perUnit' => '']),
    'gigabit' => new U(name: 'digital-gigabit', long: ['name' => 'гигабити', 'plurals' => ['one' => '{0} гигабит', 'other' => '{0} гигабита'], 'perUnit' => ''], short: ['name' => 'Gb', 'plurals' => ['one' => '{0} Gb', 'other' => '{0} Gb'], 'perUnit' => ''], narrow: ['name' => 'Gb', 'plurals' => ['one' => '{0} Gb', 'other' => '{0} Gb'], 'perUnit' => '']),
    'gigabyte' => new U(name: 'digital-gigabyte', long: ['name' => 'гигабайти', 'plurals' => ['one' => '{0} гигабайт', 'other' => '{0} гигабайта'], 'perUnit' => ''], short: ['name' => 'GB', 'plurals' => ['one' => '{0} GB', 'other' => '{0} GB'], 'perUnit' => ''], narrow: ['name' => 'GB', 'plurals' => ['one' => '{0} GB', 'other' => '{0} GB'], 'perUnit' => '']),
    'kilobit' => new U(name: 'digital-kilobit', long: ['name' => 'килобитове', 'plurals' => ['one' => '{0} килобит', 'other' => '{0} килобита'], 'perUnit' => ''], short: ['name' => 'kb', 'plurals' => ['one' => '{0} kb', 'other' => '{0} kb'], 'perUnit' => ''], narrow: ['name' => 'kb', 'plurals' => ['one' => '{0} kb', 'other' => '{0} kb'], 'perUnit' => '']),
    'kilobyte' => new U(name: 'digital-kilobyte', long: ['name' => 'килобайтове', 'plurals' => ['one' => '{0} килобайт', 'other' => '{0} килобайта'], 'perUnit' => ''], short: ['name' => 'kB', 'plurals' => ['one' => '{0} kB', 'other' => '{0} kB'], 'perUnit' => ''], narrow: ['name' => 'kB', 'plurals' => ['one' => '{0} kB', 'other' => '{0} kB'], 'perUnit' => '']),
    'megabit' => new U(name: 'digital-megabit', long: ['name' => 'мегабитове', 'plurals' => ['one' => '{0} мегабит', 'other' => '{0} мегабита'], 'perUnit' => ''], short: ['name' => 'Mb', 'plurals' => ['one' => '{0} Mb', 'other' => '{0} Mb'], 'perUnit' => ''], narrow: ['name' => 'Mb', 'plurals' => ['one' => '{0} Mb', 'other' => '{0} Mb'], 'perUnit' => '']),
    'megabyte' => new U(name: 'digital-megabyte', long: ['name' => 'мегабайти', 'plurals' => ['one' => '{0} мегабайт', 'other' => '{0} мегабайта'], 'perUnit' => ''], short: ['name' => 'MB', 'plurals' => ['one' => '{0} MB', 'other' => '{0} MB'], 'perUnit' => ''], narrow: ['name' => 'MB', 'plurals' => ['one' => '{0} MB', 'other' => '{0} MB'], 'perUnit' => '']),
    'petabyte' => new U(name: 'digital-petabyte', long: ['name' => 'петабайти', 'plurals' => ['one' => '{0} петабайт', 'other' => '{0} петабайта'], 'perUnit' => ''], short: ['name' => 'PByte', 'plurals' => ['one' => '{0} PB', 'other' => '{0} PB'], 'perUnit' => ''], narrow: ['name' => 'PByte', 'plurals' => ['one' => '{0} PB', 'other' => '{0} PB'], 'perUnit' => '']),
    'terabit' => new U(name: 'digital-terabit', long: ['name' => 'терабитове', 'plurals' => ['one' => '{0} терабит', 'other' => '{0} терабита'], 'perUnit' => ''], short: ['name' => 'Tb', 'plurals' => ['one' => '{0} Tb', 'other' => '{0} Tb'], 'perUnit' => ''], narrow: ['name' => 'Tb', 'plurals' => ['one' => '{0} Tb', 'other' => '{0} Tb'], 'perUnit' => '']),
    'terabyte' => new U(name: 'digital-terabyte', long: ['name' => 'терабайтове', 'plurals' => ['one' => '{0} терабайт', 'other' => '{0} терабайта'], 'perUnit' => ''], short: ['name' => 'TB', 'plurals' => ['one' => '{0} TB', 'other' => '{0} TB'], 'perUnit' => ''], narrow: ['name' => 'TB', 'plurals' => ['one' => '{0} TB', 'other' => '{0} TB'], 'perUnit' => '']),
    'day' => new U(name: 'duration-day', long: ['name' => 'дни', 'plurals' => ['one' => '{0} ден', 'other' => '{0} дни'], 'perUnit' => '{0} на ден'], short: ['name' => 'дни', 'plurals' => ['one' => '{0} д', 'other' => '{0} д'], 'perUnit' => '{0}/д'], narrow: ['name' => 'д', 'plurals' => ['one' => '{0} д', 'other' => '{0} д'], 'perUnit' => '{0}/д']),
    'hour' => new U(name: 'duration-hour', long: ['name' => 'часове', 'plurals' => ['one' => '{0} час', 'other' => '{0} часа'], 'perUnit' => '{0} за час'], short: ['name' => 'часове', 'plurals' => ['one' => '{0} ч', 'other' => '{0} ч'], 'perUnit' => '{0}/ч'], narrow: ['name' => 'ч', 'plurals' => ['one' => '{0} ч', 'other' => '{0} ч'], 'perUnit' => '{0}/ч']),
    'millisecond' => new U(name: 'duration-millisecond', long: ['name' => 'милисекунди', 'plurals' => ['one' => '{0} милисекунда', 'other' => '{0} милисекунди'], 'perUnit' => ''], short: ['name' => 'милисекунди', 'plurals' => ['one' => '{0} мсек', 'other' => '{0} мсек'], 'perUnit' => ''], narrow: ['name' => 'мсек', 'plurals' => ['one' => '{0} мсек', 'other' => '{0} мсек'], 'perUnit' => '']),
    'minute' => new U(name: 'duration-minute', long: ['name' => 'минути', 'plurals' => ['one' => '{0} минута', 'other' => '{0} минути'], 'perUnit' => '{0} на минута'], short: ['name' => 'мин', 'plurals' => ['one' => '{0} мин', 'other' => '{0} мин'], 'perUnit' => '{0}/мин'], narrow: ['name' => 'мин', 'plurals' => ['one' => '{0} мин', 'other' => '{0} мин'], 'perUnit' => '{0}/мин']),
    'month' => new U(name: 'duration-month', long: ['name' => 'месеци', 'plurals' => ['one' => '{0} месец', 'other' => '{0} месеца'], 'perUnit' => '{0} на месец'], short: ['name' => 'месеци', 'plurals' => ['one' => '{0} мес.', 'other' => '{0} мес.'], 'perUnit' => '{0}/месец'], narrow: ['name' => 'мес.', 'plurals' => ['one' => '{0} мес.', 'other' => '{0} мес.'], 'perUnit' => '{0}/мес.']),
    'second' => new U(name: 'duration-second', long: ['name' => 'секунди', 'plurals' => ['one' => '{0} секунда', 'other' => '{0} секунди'], 'perUnit' => '{0} за секунда'], short: ['name' => 'секунди', 'plurals' => ['one' => '{0} сек', 'other' => '{0} сек'], 'perUnit' => '{0}/сек'], narrow: ['name' => 'сек', 'plurals' => ['one' => '{0} с', 'other' => '{0} с'], 'perUnit' => '{0}/сек']),
    'week' => new U(name: 'duration-week', long: ['name' => 'седмици', 'plurals' => ['one' => '{0} седмица', 'other' => '{0} седмици'], 'perUnit' => '{0} на седмица'], short: ['name' => 'седмици', 'plurals' => ['one' => '{0} седм.', 'other' => '{0} седм.'], 'perUnit' => '{0}/седмица'], narrow: ['name' => 'седм.', 'plurals' => ['one' => '{0} седм.', 'other' => '{0} седм.'], 'perUnit' => '{0}/седм.']),
    'year' => new U(name: 'duration-year', long: ['name' => 'години', 'plurals' => ['one' => '{0} година', 'other' => '{0} години'], 'perUnit' => '{0} на година'], short: ['name' => 'години', 'plurals' => ['one' => '{0} год.', 'other' => '{0} год.'], 'perUnit' => '{0}/год.'], narrow: ['name' => 'г.', 'plurals' => ['one' => '{0} г.', 'other' => '{0} г.'], 'perUnit' => '{0}/год.']),
    'centimeter' => new U(name: 'length-centimeter', long: ['name' => 'сантиметри', 'plurals' => ['one' => '{0} сантиметър', 'other' => '{0} сантиметра'], 'perUnit' => '{0} на сантиметър'], short: ['name' => 'cm', 'plurals' => ['one' => '{0} cm', 'other' => '{0} cm'], 'perUnit' => '{0}/cm'], narrow: ['name' => 'cm', 'plurals' => ['one' => '{0} cm', 'other' => '{0} cm'], 'perUnit' => '{0}/cm']),
    'foot' => new U(name: 'length-foot', long: ['name' => 'футове', 'plurals' => ['one' => '{0} фут', 'other' => '{0} фута'], 'perUnit' => '{0} на фут'], short: ['name' => 'ft', 'plurals' => ['one' => '{0} ft', 'other' => '{0} ft'], 'perUnit' => '{0}/ft'], narrow: ['name' => 'ft', 'plurals' => ['one' => '{0} фут', 'other' => '{0} фута'], 'perUnit' => '{0}/ft']),
    'inch' => new U(name: 'length-inch', long: ['name' => 'инчове', 'plurals' => ['one' => '{0} инч', 'other' => '{0} инча'], 'perUnit' => '{0} на инч'], short: ['name' => 'in', 'plurals' => ['one' => '{0} in', 'other' => '{0} in'], 'perUnit' => '{0}/in'], narrow: ['name' => 'in', 'plurals' => ['one' => '{0}"', 'other' => '{0}"'], 'perUnit' => '{0}/in']),
    'kilometer' => new U(name: 'length-kilometer', long: ['name' => 'километри', 'plurals' => ['one' => '{0} километър', 'other' => '{0} километра'], 'perUnit' => '{0} на километър'], short: ['name' => 'km', 'plurals' => ['one' => '{0} km', 'other' => '{0} km'], 'perUnit' => '{0}/km'], narrow: ['name' => 'km', 'plurals' => ['one' => '{0} km', 'other' => '{0} km'], 'perUnit' => '{0}/km']),
    'meter' => new U(name: 'length-meter', long: ['name' => 'метри', 'plurals' => ['one' => '{0} метър', 'other' => '{0} метра'], 'perUnit' => '{0} на метър'], short: ['name' => 'm', 'plurals' => ['one' => '{0} m', 'other' => '{0} m'], 'perUnit' => '{0}/m'], narrow: ['name' => 'm', 'plurals' => ['one' => '{0} m', 'other' => '{0} m'], 'perUnit' => '{0}/m']),
    'mile' => new U(name: 'length-mile', long: ['name' => 'мили', 'plurals' => ['one' => '{0} миля', 'other' => '{0} мили'], 'perUnit' => ''], short: ['name' => 'mi', 'plurals' => ['one' => '{0} mi', 'other' => '{0} mi'], 'perUnit' => ''], narrow: ['name' => 'mi', 'plurals' => ['one' => '{0} миля', 'other' => '{0} мили'], 'perUnit' => '']),
    'mile-scandinavian' => new U(name: 'length-mile-scandinavian', long: ['name' => 'шведска миля', 'plurals' => ['one' => '{0} шведска миля', 'other' => '{0} шведски мили'], 'perUnit' => ''], short: ['name' => 'smi', 'plurals' => ['one' => '{0} smi', 'other' => '{0} smi'], 'perUnit' => ''], narrow: ['name' => 'smi', 'plurals' => ['one' => '{0} smi', 'other' => '{0} smi'], 'perUnit' => '']),
    'millimeter' => new U(name: 'length-millimeter', long: ['name' => 'милиметри', 'plurals' => ['one' => '{0} милиметър', 'other' => '{0} милиметра'], 'perUnit' => ''], short: ['name' => 'mm', 'plurals' => ['one' => '{0} mm', 'other' => '{0} mm'], 'perUnit' => ''], narrow: ['name' => 'mm', 'plurals' => ['one' => '{0} mm', 'other' => '{0} mm'], 'perUnit' => '']),
    'yard' => new U(name: 'length-yard', long: ['name' => 'ярдове', 'plurals' => ['one' => '{0} ярд', 'other' => '{0} ярда'], 'perUnit' => ''], short: ['name' => 'yd', 'plurals' => ['one' => '{0} yd', 'other' => '{0} yd'], 'perUnit' => ''], narrow: ['name' => 'yd', 'plurals' => ['one' => '{0} ярд', 'other' => '{0} ярда'], 'perUnit' => '']),
    'gram' => new U(name: 'mass-gram', long: ['name' => 'грамове', 'plurals' => ['one' => '{0} грам', 'other' => '{0} грама'], 'perUnit' => '{0} на грам'], short: ['name' => 'g', 'plurals' => ['one' => '{0} g', 'other' => '{0} g'], 'perUnit' => '{0}/g'], narrow: ['name' => 'g', 'plurals' => ['one' => '{0} g', 'other' => '{0} g'], 'perUnit' => '{0}/g']),
    'kilogram' => new U(name: 'mass-kilogram', long: ['name' => 'килограми', 'plurals' => ['one' => '{0} килограм', 'other' => '{0} килограма'], 'perUnit' => '{0} на килограм'], short: ['name' => 'kg', 'plurals' => ['one' => '{0} kg', 'other' => '{0} kg'], 'perUnit' => '{0}/kg'], narrow: ['name' => 'kg', 'plurals' => ['one' => '{0} kg', 'other' => '{0} kg'], 'perUnit' => '{0}/kg']),
    'ounce' => new U(name: 'mass-ounce', long: ['name' => 'унции', 'plurals' => ['one' => '{0} унция', 'other' => '{0} унции'], 'perUnit' => '{0} на унция'], short: ['name' => 'oz', 'plurals' => ['one' => '{0} oz', 'other' => '{0} oz'], 'perUnit' => '{0}/oz'], narrow: ['name' => 'oz', 'plurals' => ['one' => '{0} унц.', 'other' => '{0} унц.'], 'perUnit' => '{0}/oz']),
    'pound' => new U(name: 'mass-pound', long: ['name' => 'фунтове', 'plurals' => ['one' => '{0} фунт', 'other' => '{0} фунта'], 'perUnit' => '{0} на фунт'], short: ['name' => 'lb', 'plurals' => ['one' => '{0} lb', 'other' => '{0} lb'], 'perUnit' => '{0}/lb'], narrow: ['name' => 'lb', 'plurals' => ['one' => '{0} фунт', 'other' => '{0} фунта'], 'perUnit' => '{0}/lb']),
    'stone' => new U(name: 'mass-stone', long: ['name' => 'стоунове', 'plurals' => ['one' => '{0} стоун', 'other' => '{0} стоуна'], 'perUnit' => ''], short: ['name' => 'стоун.', 'plurals' => ['one' => '{0} st', 'other' => '{0} st'], 'perUnit' => ''], narrow: ['name' => 'стоун.', 'plurals' => ['one' => '{0} st', 'other' => '{0} st'], 'perUnit' => '']),
    'celsius' => new U(name: 'temperature-celsius', long: ['name' => 'градуси Целзий', 'plurals' => ['one' => '{0} градус Целзий', 'other' => '{0} градуса Целзий'], 'perUnit' => ''], short: ['name' => '°C', 'plurals' => ['one' => '{0}°C', 'other' => '{0}°C'], 'perUnit' => ''], narrow: ['name' => '°C', 'plurals' => ['one' => '{0}°C', 'other' => '{0}°C'], 'perUnit' => '']),
    'fahrenheit' => new U(name: 'temperature-fahrenheit', long: ['name' => 'градуси по Фаренхайт', 'plurals' => ['one' => '{0} градус по Фаренхайт', 'other' => '{0} градуса по Фаренхайт'], 'perUnit' => ''], short: ['name' => '°F', 'plurals' => ['one' => '{0}°F', 'other' => '{0}°F'], 'perUnit' => ''], narrow: ['name' => '°F', 'plurals' => ['one' => '{0} °F', 'other' => '{0} °F'], 'perUnit' => '']),
    'fluid-ounce' => new U(name: 'volume-fluid-ounce', long: ['name' => 'течни унции', 'plurals' => ['one' => '{0} течна унция', 'other' => '{0} течни унции'], 'perUnit' => ''], short: ['name' => 'US fl oz', 'plurals' => ['one' => '{0} fl oz US', 'other' => '{0} fl oz US'], 'perUnit' => ''], narrow: ['name' => 'US fl oz', 'plurals' => ['one' => '{0} fl oz US', 'other' => '{0} fl oz US'], 'perUnit' => '']),
    'gallon' => new U(name: 'volume-gallon', long: ['name' => 'галони', 'plurals' => ['one' => '{0} галон', 'other' => '{0} галона'], 'perUnit' => '{0} на галон'], short: ['name' => 'US gal', 'plurals' => ['one' => '{0} gal US', 'other' => '{0} gal US'], 'perUnit' => '{0}/gal US'], narrow: ['name' => 'US gal', 'plurals' => ['one' => '{0} gal US', 'other' => '{0} gal US'], 'perUnit' => '{0}/gal US']),
    'liter' => new U(name: 'volume-liter', long: ['name' => 'литри', 'plurals' => ['one' => '{0} литър', 'other' => '{0} литра'], 'perUnit' => '{0} на литър'], short: ['name' => 'l', 'plurals' => ['one' => '{0} l', 'other' => '{0} l'], 'perUnit' => '{0}/l'], narrow: ['name' => 'l', 'plurals' => ['one' => '{0} l', 'other' => '{0} l'], 'perUnit' => '{0}/l']),
    'milliliter' => new U(name: 'volume-milliliter', long: ['name' => 'милилитри', 'plurals' => ['one' => '{0} милилитър', 'other' => '{0} милилитра'], 'perUnit' => ''], short: ['name' => 'ml', 'plurals' => ['one' => '{0} ml', 'other' => '{0} ml'], 'perUnit' => ''], narrow: ['name' => 'ml', 'plurals' => ['one' => '{0} ml', 'other' => '{0} ml'], 'perUnit' => '']),
];
