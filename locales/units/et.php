<?php

use Major\Fluent\Formatters\Number\Locale\Unit as U;

return [
    'kilometer' => new U(name: 'length-kilometer', long: ['name' => 'kilomeetrid', 'plurals' => ['one' => '{0} kilomeeter', 'other' => '{0} kilomeetrit'], 'perUnit' => '{0} kilomeetri kohta'], short: ['name' => 'km', 'plurals' => ['one' => '{0} km', 'other' => '{0} km'], 'perUnit' => '{0}/km'], narrow: ['name' => 'km', 'plurals' => ['one' => '{0} km', 'other' => '{0} km'], 'perUnit' => '{0}/km']),
    'degree' => new U(name: 'angle-degree', long: ['name' => 'kraadid', 'plurals' => ['one' => '{0} kraad', 'other' => '{0} kraadi'], 'perUnit' => ''], short: ['name' => 'kraadid', 'plurals' => ['one' => '{0}°', 'other' => '{0}°'], 'perUnit' => ''], narrow: ['name' => 'kraadid', 'plurals' => ['one' => '{0}°', 'other' => '{0}°'], 'perUnit' => '']),
    'acre' => new U(name: 'area-acre', long: ['name' => 'aakrid', 'plurals' => ['one' => '{0} aaker', 'other' => '{0} aakrit'], 'perUnit' => ''], short: ['name' => 'aakrid', 'plurals' => ['one' => '{0} ac', 'other' => '{0} ac'], 'perUnit' => ''], narrow: ['name' => 'aakrid', 'plurals' => ['one' => '{0} aaker', 'other' => '{0} aakrit'], 'perUnit' => '']),
    'hectare' => new U(name: 'area-hectare', long: ['name' => 'hektarid', 'plurals' => ['one' => '{0} hektar', 'other' => '{0} hektarit'], 'perUnit' => ''], short: ['name' => 'hektarid', 'plurals' => ['one' => '{0} ha', 'other' => '{0} ha'], 'perUnit' => ''], narrow: ['name' => 'hektarid', 'plurals' => ['one' => '{0} ha', 'other' => '{0} ha'], 'perUnit' => '']),
    'percent' => new U(name: 'concentr-percent', long: ['name' => 'protsent', 'plurals' => ['one' => '{0} protsent', 'other' => '{0} protsenti'], 'perUnit' => ''], short: ['name' => '%', 'plurals' => ['one' => '{0}%', 'other' => '{0}%'], 'perUnit' => ''], narrow: ['name' => '%', 'plurals' => ['one' => '{0}%', 'other' => '{0}%'], 'perUnit' => '']),
    'bit' => new U(name: 'digital-bit', long: ['name' => 'bitid', 'plurals' => ['one' => '{0} bitt', 'other' => '{0} bitti'], 'perUnit' => ''], short: ['name' => 'bitt', 'plurals' => ['one' => '{0} b', 'other' => '{0} b'], 'perUnit' => ''], narrow: ['name' => 'bitt', 'plurals' => ['one' => '{0} b', 'other' => '{0} b'], 'perUnit' => '']),
    'byte' => new U(name: 'digital-byte', long: ['name' => 'baidid', 'plurals' => ['one' => '{0} bait', 'other' => '{0} baiti'], 'perUnit' => ''], short: ['name' => 'bait', 'plurals' => ['one' => '{0} bait', 'other' => '{0} baiti'], 'perUnit' => ''], narrow: ['name' => 'bait', 'plurals' => ['one' => '{0} B', 'other' => '{0} B'], 'perUnit' => '']),
    'gigabit' => new U(name: 'digital-gigabit', long: ['name' => 'gigabitid', 'plurals' => ['one' => '{0} gigabitt', 'other' => '{0} gigabitti'], 'perUnit' => ''], short: ['name' => 'Gb', 'plurals' => ['one' => '{0} Gb', 'other' => '{0} Gb'], 'perUnit' => ''], narrow: ['name' => 'Gb', 'plurals' => ['one' => '{0} Gb', 'other' => '{0} Gb'], 'perUnit' => '']),
    'gigabyte' => new U(name: 'digital-gigabyte', long: ['name' => 'gigabaidid', 'plurals' => ['one' => '{0} gigabait', 'other' => '{0} gigabaiti'], 'perUnit' => ''], short: ['name' => 'GB', 'plurals' => ['one' => '{0} GB', 'other' => '{0} GB'], 'perUnit' => ''], narrow: ['name' => 'GB', 'plurals' => ['one' => '{0} GB', 'other' => '{0} GB'], 'perUnit' => '']),
    'kilobit' => new U(name: 'digital-kilobit', long: ['name' => 'kilobitid', 'plurals' => ['one' => '{0} kilobitt', 'other' => '{0} kilobitti'], 'perUnit' => ''], short: ['name' => 'kb', 'plurals' => ['one' => '{0} kb', 'other' => '{0} kb'], 'perUnit' => ''], narrow: ['name' => 'kb', 'plurals' => ['one' => '{0} kb', 'other' => '{0} kb'], 'perUnit' => '']),
    'kilobyte' => new U(name: 'digital-kilobyte', long: ['name' => 'kilobaidid', 'plurals' => ['one' => '{0} kilobait', 'other' => '{0} kilobaiti'], 'perUnit' => ''], short: ['name' => 'kB', 'plurals' => ['one' => '{0} kB', 'other' => '{0} kB'], 'perUnit' => ''], narrow: ['name' => 'kB', 'plurals' => ['one' => '{0} kB', 'other' => '{0} kB'], 'perUnit' => '']),
    'megabit' => new U(name: 'digital-megabit', long: ['name' => 'megabitid', 'plurals' => ['one' => '{0} megabitt', 'other' => '{0} megabitti'], 'perUnit' => ''], short: ['name' => 'Mb', 'plurals' => ['one' => '{0} Mb', 'other' => '{0} Mb'], 'perUnit' => ''], narrow: ['name' => 'Mb', 'plurals' => ['one' => '{0} Mb', 'other' => '{0} Mb'], 'perUnit' => '']),
    'megabyte' => new U(name: 'digital-megabyte', long: ['name' => 'megabaidid', 'plurals' => ['one' => '{0} megabait', 'other' => '{0} megabaiti'], 'perUnit' => ''], short: ['name' => 'MB', 'plurals' => ['one' => '{0} MB', 'other' => '{0} MB'], 'perUnit' => ''], narrow: ['name' => 'MB', 'plurals' => ['one' => '{0} MB', 'other' => '{0} MB'], 'perUnit' => '']),
    'petabyte' => new U(name: 'digital-petabyte', long: ['name' => 'petabaidid', 'plurals' => ['one' => '{0} petabait', 'other' => '{0} petabaiti'], 'perUnit' => ''], short: ['name' => 'PB', 'plurals' => ['one' => '{0} PB', 'other' => '{0} PB'], 'perUnit' => ''], narrow: ['name' => 'PB', 'plurals' => ['one' => '{0} PB', 'other' => '{0} PB'], 'perUnit' => '']),
    'terabit' => new U(name: 'digital-terabit', long: ['name' => 'terabitid', 'plurals' => ['one' => '{0} terabitt', 'other' => '{0} terabitti'], 'perUnit' => ''], short: ['name' => 'Tb', 'plurals' => ['one' => '{0} Tb', 'other' => '{0} Tb'], 'perUnit' => ''], narrow: ['name' => 'Tb', 'plurals' => ['one' => '{0} Tb', 'other' => '{0} Tb'], 'perUnit' => '']),
    'terabyte' => new U(name: 'digital-terabyte', long: ['name' => 'terabaidid', 'plurals' => ['one' => '{0} terabait', 'other' => '{0} terabaiti'], 'perUnit' => ''], short: ['name' => 'TB', 'plurals' => ['one' => '{0} TB', 'other' => '{0} TB'], 'perUnit' => ''], narrow: ['name' => 'TB', 'plurals' => ['one' => '{0} TB', 'other' => '{0} TB'], 'perUnit' => '']),
    'day' => new U(name: 'duration-day', long: ['name' => 'ööpäevad', 'plurals' => ['one' => '{0} ööpäev', 'other' => '{0} ööpäeva'], 'perUnit' => '{0} ööpäevas'], short: ['name' => 'päevad', 'plurals' => ['one' => '{0} päev', 'other' => '{0} päeva'], 'perUnit' => '{0}/ööp'], narrow: ['name' => 'päev', 'plurals' => ['one' => '{0} p', 'other' => '{0} p'], 'perUnit' => '{0}/ööp']),
    'hour' => new U(name: 'duration-hour', long: ['name' => 'tunnid', 'plurals' => ['one' => '{0} tund', 'other' => '{0} tundi'], 'perUnit' => '{0} tunnis'], short: ['name' => 't', 'plurals' => ['one' => '{0} t', 'other' => '{0} t'], 'perUnit' => '{0}/t'], narrow: ['name' => 't', 'plurals' => ['one' => '{0} t', 'other' => '{0} t'], 'perUnit' => '{0}/t']),
    'millisecond' => new U(name: 'duration-millisecond', long: ['name' => 'millisekundid', 'plurals' => ['one' => '{0} millisekund', 'other' => '{0} millisekundit'], 'perUnit' => ''], short: ['name' => 'ms', 'plurals' => ['one' => '{0} ms', 'other' => '{0} ms'], 'perUnit' => ''], narrow: ['name' => 'ms', 'plurals' => ['one' => '{0} ms', 'other' => '{0} ms'], 'perUnit' => '']),
    'minute' => new U(name: 'duration-minute', long: ['name' => 'minutid', 'plurals' => ['one' => '{0} minut', 'other' => '{0} minutit'], 'perUnit' => '{0} minutis'], short: ['name' => 'min', 'plurals' => ['one' => '{0} min', 'other' => '{0} min'], 'perUnit' => '{0}/min'], narrow: ['name' => 'min', 'plurals' => ['one' => '{0} min', 'other' => '{0} min'], 'perUnit' => '{0}/min']),
    'month' => new U(name: 'duration-month', long: ['name' => 'kuud', 'plurals' => ['one' => '{0} kuu', 'other' => '{0} kuud'], 'perUnit' => '{0} kuus'], short: ['name' => 'kuud', 'plurals' => ['one' => '{0} kuu', 'other' => '{0} kuud'], 'perUnit' => '{0}/k'], narrow: ['name' => 'kuud', 'plurals' => ['one' => '{0} k', 'other' => '{0} k'], 'perUnit' => '{0}/k']),
    'second' => new U(name: 'duration-second', long: ['name' => 'sekundid', 'plurals' => ['one' => '{0} sekund', 'other' => '{0} sekundit'], 'perUnit' => '{0} sekundis'], short: ['name' => 'sek', 'plurals' => ['one' => '{0} sek', 'other' => '{0} sek'], 'perUnit' => '{0}/sek'], narrow: ['name' => 's', 'plurals' => ['one' => '{0} s', 'other' => '{0} s'], 'perUnit' => '{0}/s']),
    'week' => new U(name: 'duration-week', long: ['name' => 'nädalad', 'plurals' => ['one' => '{0} nädal', 'other' => '{0} nädalat'], 'perUnit' => '{0} nädalas'], short: ['name' => 'näd', 'plurals' => ['one' => '{0} näd', 'other' => '{0} näd'], 'perUnit' => '{0}/näd'], narrow: ['name' => 'n', 'plurals' => ['one' => '{0} n', 'other' => '{0} n'], 'perUnit' => '{0}/näd']),
    'year' => new U(name: 'duration-year', long: ['name' => 'aastad', 'plurals' => ['one' => '{0} aasta', 'other' => '{0} aastat'], 'perUnit' => '{0} aastas'], short: ['name' => 'aastad', 'plurals' => ['one' => '{0} a', 'other' => '{0} a'], 'perUnit' => '{0}/a'], narrow: ['name' => 'a', 'plurals' => ['one' => '{0} a', 'other' => '{0} a'], 'perUnit' => '{0}/a']),
    'centimeter' => new U(name: 'length-centimeter', long: ['name' => 'sentimeetrid', 'plurals' => ['one' => '{0} sentimeeter', 'other' => '{0} sentimeetrit'], 'perUnit' => '{0} sentimeetri kohta'], short: ['name' => 'cm', 'plurals' => ['one' => '{0} cm', 'other' => '{0} cm'], 'perUnit' => '{0}/cm'], narrow: ['name' => 'cm', 'plurals' => ['one' => '{0} cm', 'other' => '{0} cm'], 'perUnit' => '{0}/cm']),
    'foot' => new U(name: 'length-foot', long: ['name' => 'jalad', 'plurals' => ['one' => '{0} jalg', 'other' => '{0} jalga'], 'perUnit' => '{0} jala kohta'], short: ['name' => 'ft', 'plurals' => ['one' => '{0} ft', 'other' => '{0} ft'], 'perUnit' => '{0}/ft'], narrow: ['name' => 'ft', 'plurals' => ['one' => '{0} jalg', 'other' => '{0} jalga'], 'perUnit' => '{0}/ft']),
    'inch' => new U(name: 'length-inch', long: ['name' => 'tollid', 'plurals' => ['one' => '{0} toll', 'other' => '{0} tolli'], 'perUnit' => '{0} tolli kohta'], short: ['name' => 'tollid', 'plurals' => ['one' => '{0} in', 'other' => '{0} in'], 'perUnit' => '{0}/in'], narrow: ['name' => 'tollid', 'plurals' => ['one' => '{0} toll', 'other' => '{0} tolli'], 'perUnit' => '{0}/in']),
    'meter' => new U(name: 'length-meter', long: ['name' => 'meetrid', 'plurals' => ['one' => '{0} meeter', 'other' => '{0} meetrit'], 'perUnit' => '{0} meetri kohta'], short: ['name' => 'm', 'plurals' => ['one' => '{0} m', 'other' => '{0} m'], 'perUnit' => '{0}/m'], narrow: ['name' => 'm', 'plurals' => ['one' => '{0} m', 'other' => '{0} m'], 'perUnit' => '{0}/m']),
    'mile-scandinavian' => new U(name: 'length-mile-scandinavian', long: ['name' => 'Skandinaavia miilid', 'plurals' => ['one' => '{0} Skandinaavia miil', 'other' => '{0} Skandinaavia miili'], 'perUnit' => ''], short: ['name' => 'smi', 'plurals' => ['one' => '{0} smi', 'other' => '{0} smi'], 'perUnit' => ''], narrow: ['name' => 'smi', 'plurals' => ['one' => '{0} smi', 'other' => '{0} smi'], 'perUnit' => '']),
    'mile' => new U(name: 'length-mile', long: ['name' => 'miilid', 'plurals' => ['one' => '{0} miil', 'other' => '{0} miili'], 'perUnit' => ''], short: ['name' => 'mi', 'plurals' => ['one' => '{0} mi', 'other' => '{0} mi'], 'perUnit' => ''], narrow: ['name' => 'mi', 'plurals' => ['one' => '{0} miil', 'other' => '{0} miili'], 'perUnit' => '']),
    'millimeter' => new U(name: 'length-millimeter', long: ['name' => 'millimeetrid', 'plurals' => ['one' => '{0} millimeeter', 'other' => '{0} millimeetrit'], 'perUnit' => ''], short: ['name' => 'mm', 'plurals' => ['one' => '{0} mm', 'other' => '{0} mm'], 'perUnit' => ''], narrow: ['name' => 'mm', 'plurals' => ['one' => '{0} mm', 'other' => '{0} mm'], 'perUnit' => '']),
    'yard' => new U(name: 'length-yard', long: ['name' => 'jardid', 'plurals' => ['one' => '{0} jard', 'other' => '{0} jardi'], 'perUnit' => ''], short: ['name' => 'jardid', 'plurals' => ['one' => '{0} yd', 'other' => '{0} yd'], 'perUnit' => ''], narrow: ['name' => 'jardid', 'plurals' => ['one' => '{0} jard', 'other' => '{0} jardi'], 'perUnit' => '']),
    'gram' => new U(name: 'mass-gram', long: ['name' => 'grammid', 'plurals' => ['one' => '{0} gramm', 'other' => '{0} grammi'], 'perUnit' => '{0} grammi kohta'], short: ['name' => 'grammid', 'plurals' => ['one' => '{0} g', 'other' => '{0} g'], 'perUnit' => '{0}/g'], narrow: ['name' => 'gramm', 'plurals' => ['one' => '{0} g', 'other' => '{0} g'], 'perUnit' => '{0}/g']),
    'kilogram' => new U(name: 'mass-kilogram', long: ['name' => 'kilogrammid', 'plurals' => ['one' => '{0} kilogramm', 'other' => '{0} kilogrammi'], 'perUnit' => '{0} kilogrammi kohta'], short: ['name' => 'kg', 'plurals' => ['one' => '{0} kg', 'other' => '{0} kg'], 'perUnit' => '{0}/kg'], narrow: ['name' => 'kg', 'plurals' => ['one' => '{0} kg', 'other' => '{0} kg'], 'perUnit' => '{0}/kg']),
    'ounce' => new U(name: 'mass-ounce', long: ['name' => 'untsid', 'plurals' => ['one' => '{0} unts', 'other' => '{0} untsi'], 'perUnit' => '{0} untsi kohta'], short: ['name' => 'oz', 'plurals' => ['one' => '{0} oz', 'other' => '{0} oz'], 'perUnit' => '{0}/oz'], narrow: ['name' => 'oz', 'plurals' => ['one' => '{0} oz', 'other' => '{0} oz'], 'perUnit' => '{0}/oz']),
    'pound' => new U(name: 'mass-pound', long: ['name' => 'naelad', 'plurals' => ['one' => '{0} nael', 'other' => '{0} naela'], 'perUnit' => '{0} naela kohta'], short: ['name' => 'naelad', 'plurals' => ['one' => '{0} lb', 'other' => '{0} lb'], 'perUnit' => '{0}/lb'], narrow: ['name' => 'naelad', 'plurals' => ['one' => '{0} lb', 'other' => '{0} lb'], 'perUnit' => '{0}/lb']),
    'stone' => new U(name: 'mass-stone', long: ['name' => 'kivid', 'plurals' => ['one' => '{0} kivi', 'other' => '{0} kivi'], 'perUnit' => ''], short: ['name' => 'kivid', 'plurals' => ['one' => '{0} st', 'other' => '{0} st'], 'perUnit' => ''], narrow: ['name' => 'kivid', 'plurals' => ['one' => '{0} st', 'other' => '{0} st'], 'perUnit' => '']),
    'celsius' => new U(name: 'temperature-celsius', long: ['name' => 'Celsiuse kraadid', 'plurals' => ['one' => '{0} Celsiuse kraad', 'other' => '{0} Celsiuse kraadi'], 'perUnit' => ''], short: ['name' => '°C', 'plurals' => ['one' => '{0} °C', 'other' => '{0} °C'], 'perUnit' => ''], narrow: ['name' => '°C', 'plurals' => ['one' => '{0} °C', 'other' => '{0} °C'], 'perUnit' => '']),
    'fahrenheit' => new U(name: 'temperature-fahrenheit', long: ['name' => 'Fahrenheiti kraadid', 'plurals' => ['one' => '{0} Fahrenheiti kraad', 'other' => '{0} Fahrenheiti kraadi'], 'perUnit' => ''], short: ['name' => '°F', 'plurals' => ['one' => '{0} °F', 'other' => '{0} °F'], 'perUnit' => ''], narrow: ['name' => '°F', 'plurals' => ['one' => '{0} °F', 'other' => '{0} °F'], 'perUnit' => '']),
    'fluid-ounce' => new U(name: 'volume-fluid-ounce', long: ['name' => 'vedelikuuntsid', 'plurals' => ['one' => '{0} vedelikuunts', 'other' => '{0} vedelikuuntsi'], 'perUnit' => ''], short: ['name' => 'fl oz', 'plurals' => ['one' => '{0} fl oz', 'other' => '{0} fl oz'], 'perUnit' => ''], narrow: ['name' => 'fl oz', 'plurals' => ['one' => '{0} fl oz', 'other' => '{0} fl oz'], 'perUnit' => '']),
    'gallon' => new U(name: 'volume-gallon', long: ['name' => 'gallonid', 'plurals' => ['one' => '{0} gallon', 'other' => '{0} gallonit'], 'perUnit' => '{0} galloni kohta'], short: ['name' => 'gal', 'plurals' => ['one' => '{0} gal', 'other' => '{0} gal'], 'perUnit' => '{0}/gal'], narrow: ['name' => 'gal', 'plurals' => ['one' => '{0} gal', 'other' => '{0} gal'], 'perUnit' => '{0}/gal']),
    'liter' => new U(name: 'volume-liter', long: ['name' => 'liitrid', 'plurals' => ['one' => '{0} liiter', 'other' => '{0} liitrit'], 'perUnit' => '{0} liitri kohta'], short: ['name' => 'liitrid', 'plurals' => ['one' => '{0} l', 'other' => '{0} l'], 'perUnit' => '{0}/l'], narrow: ['name' => 'liiter', 'plurals' => ['one' => '{0} l', 'other' => '{0} l'], 'perUnit' => '{0}/l']),
    'milliliter' => new U(name: 'volume-milliliter', long: ['name' => 'milliliitrid', 'plurals' => ['one' => '{0} milliliiter', 'other' => '{0} milliliitrit'], 'perUnit' => ''], short: ['name' => 'ml', 'plurals' => ['one' => '{0} ml', 'other' => '{0} ml'], 'perUnit' => ''], narrow: ['name' => 'ml', 'plurals' => ['one' => '{0} ml', 'other' => '{0} ml'], 'perUnit' => '']),
];
