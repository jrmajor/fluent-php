<?php

use Major\Fluent\Formatters\Number\Locale\Unit as U;

return [
    'kilometer' => new U(name: 'length-kilometer', long: ['name' => 'km', 'plurals' => ['other' => '{0} km'], 'perUnit' => '{0}/km'], short: ['name' => 'km', 'plurals' => ['other' => '{0} km'], 'perUnit' => '{0}/km'], narrow: ['name' => 'km', 'plurals' => ['other' => '{0} km'], 'perUnit' => '{0}/km']),
    'degree' => new U(name: 'angle-degree', long: ['name' => 'deg', 'plurals' => ['other' => '{0}°'], 'perUnit' => ''], short: ['name' => 'deg', 'plurals' => ['other' => '{0}°'], 'perUnit' => ''], narrow: ['name' => 'deg', 'plurals' => ['other' => '{0}°'], 'perUnit' => '']),
    'acre' => new U(name: 'area-acre', long: ['name' => 'acre', 'plurals' => ['other' => '{0} ac'], 'perUnit' => ''], short: ['name' => 'acre', 'plurals' => ['other' => '{0} ac'], 'perUnit' => ''], narrow: ['name' => 'acre', 'plurals' => ['other' => '{0} ac'], 'perUnit' => '']),
    'hectare' => new U(name: 'area-hectare', long: ['name' => 'hectare', 'plurals' => ['other' => '{0} ha'], 'perUnit' => ''], short: ['name' => 'hectare', 'plurals' => ['other' => '{0} ha'], 'perUnit' => ''], narrow: ['name' => 'hectare', 'plurals' => ['other' => '{0} ha'], 'perUnit' => '']),
    'percent' => new U(name: 'concentr-percent', long: ['name' => '%', 'plurals' => ['other' => '{0}%'], 'perUnit' => ''], short: ['name' => '%', 'plurals' => ['other' => '{0}%'], 'perUnit' => ''], narrow: ['name' => '%', 'plurals' => ['other' => '{0}%'], 'perUnit' => '']),
    'bit' => new U(name: 'digital-bit', long: ['name' => 'bit', 'plurals' => ['other' => '{0} bit'], 'perUnit' => ''], short: ['name' => 'bit', 'plurals' => ['other' => '{0} bit'], 'perUnit' => ''], narrow: ['name' => 'bit', 'plurals' => ['other' => '{0} bit'], 'perUnit' => '']),
    'byte' => new U(name: 'digital-byte', long: ['name' => 'byte', 'plurals' => ['other' => '{0} byte'], 'perUnit' => ''], short: ['name' => 'byte', 'plurals' => ['other' => '{0} byte'], 'perUnit' => ''], narrow: ['name' => 'byte', 'plurals' => ['other' => '{0} byte'], 'perUnit' => '']),
    'gigabit' => new U(name: 'digital-gigabit', long: ['name' => 'Gb', 'plurals' => ['other' => '{0} Gb'], 'perUnit' => ''], short: ['name' => 'Gb', 'plurals' => ['other' => '{0} Gb'], 'perUnit' => ''], narrow: ['name' => 'Gb', 'plurals' => ['other' => '{0} Gb'], 'perUnit' => '']),
    'gigabyte' => new U(name: 'digital-gigabyte', long: ['name' => 'GB', 'plurals' => ['other' => '{0} GB'], 'perUnit' => ''], short: ['name' => 'GB', 'plurals' => ['other' => '{0} GB'], 'perUnit' => ''], narrow: ['name' => 'GB', 'plurals' => ['other' => '{0} GB'], 'perUnit' => '']),
    'kilobit' => new U(name: 'digital-kilobit', long: ['name' => 'kb', 'plurals' => ['other' => '{0} kb'], 'perUnit' => ''], short: ['name' => 'kb', 'plurals' => ['other' => '{0} kb'], 'perUnit' => ''], narrow: ['name' => 'kb', 'plurals' => ['other' => '{0} kb'], 'perUnit' => '']),
    'kilobyte' => new U(name: 'digital-kilobyte', long: ['name' => 'kB', 'plurals' => ['other' => '{0} kB'], 'perUnit' => ''], short: ['name' => 'kB', 'plurals' => ['other' => '{0} kB'], 'perUnit' => ''], narrow: ['name' => 'kB', 'plurals' => ['other' => '{0} kB'], 'perUnit' => '']),
    'megabit' => new U(name: 'digital-megabit', long: ['name' => 'Mb', 'plurals' => ['other' => '{0} Mb'], 'perUnit' => ''], short: ['name' => 'Mb', 'plurals' => ['other' => '{0} Mb'], 'perUnit' => ''], narrow: ['name' => 'Mb', 'plurals' => ['other' => '{0} Mb'], 'perUnit' => '']),
    'megabyte' => new U(name: 'digital-megabyte', long: ['name' => 'MB', 'plurals' => ['other' => '{0} MB'], 'perUnit' => ''], short: ['name' => 'MB', 'plurals' => ['other' => '{0} MB'], 'perUnit' => ''], narrow: ['name' => 'MB', 'plurals' => ['other' => '{0} MB'], 'perUnit' => '']),
    'petabyte' => new U(name: 'digital-petabyte', long: ['name' => 'PB', 'plurals' => ['other' => '{0} PB'], 'perUnit' => ''], short: ['name' => 'PB', 'plurals' => ['other' => '{0} PB'], 'perUnit' => ''], narrow: ['name' => 'PB', 'plurals' => ['other' => '{0} PB'], 'perUnit' => '']),
    'terabit' => new U(name: 'digital-terabit', long: ['name' => 'Tb', 'plurals' => ['other' => '{0} Tb'], 'perUnit' => ''], short: ['name' => 'Tb', 'plurals' => ['other' => '{0} Tb'], 'perUnit' => ''], narrow: ['name' => 'Tb', 'plurals' => ['other' => '{0} Tb'], 'perUnit' => '']),
    'terabyte' => new U(name: 'digital-terabyte', long: ['name' => 'TB', 'plurals' => ['other' => '{0} TB'], 'perUnit' => ''], short: ['name' => 'TB', 'plurals' => ['other' => '{0} TB'], 'perUnit' => ''], narrow: ['name' => 'TB', 'plurals' => ['other' => '{0} TB'], 'perUnit' => '']),
    'day' => new U(name: 'duration-day', long: ['name' => 'day', 'plurals' => ['other' => '{0} d'], 'perUnit' => '{0}/d'], short: ['name' => 'day', 'plurals' => ['other' => '{0} d'], 'perUnit' => '{0}/d'], narrow: ['name' => 'day', 'plurals' => ['other' => '{0} d'], 'perUnit' => '{0}/d']),
    'hour' => new U(name: 'duration-hour', long: ['name' => 'hr', 'plurals' => ['other' => '{0} h'], 'perUnit' => '{0}/h'], short: ['name' => 'hr', 'plurals' => ['other' => '{0} h'], 'perUnit' => '{0}/h'], narrow: ['name' => 'hr', 'plurals' => ['other' => '{0} h'], 'perUnit' => '{0}/h']),
    'millisecond' => new U(name: 'duration-millisecond', long: ['name' => 'ms', 'plurals' => ['other' => '{0} ms'], 'perUnit' => ''], short: ['name' => 'ms', 'plurals' => ['other' => '{0} ms'], 'perUnit' => ''], narrow: ['name' => 'ms', 'plurals' => ['other' => '{0} ms'], 'perUnit' => '']),
    'minute' => new U(name: 'duration-minute', long: ['name' => 'min', 'plurals' => ['other' => '{0} min'], 'perUnit' => '{0}/min'], short: ['name' => 'min', 'plurals' => ['other' => '{0} min'], 'perUnit' => '{0}/min'], narrow: ['name' => 'min', 'plurals' => ['other' => '{0} min'], 'perUnit' => '{0}/min']),
    'month' => new U(name: 'duration-month', long: ['name' => 'mon', 'plurals' => ['other' => '{0} m'], 'perUnit' => '{0}/m'], short: ['name' => 'mon', 'plurals' => ['other' => '{0} m'], 'perUnit' => '{0}/m'], narrow: ['name' => 'mon', 'plurals' => ['other' => '{0} m'], 'perUnit' => '{0}/m']),
    'second' => new U(name: 'duration-second', long: ['name' => 'sec', 'plurals' => ['other' => '{0} s'], 'perUnit' => '{0}/s'], short: ['name' => 'sec', 'plurals' => ['other' => '{0} s'], 'perUnit' => '{0}/s'], narrow: ['name' => 'sec', 'plurals' => ['other' => '{0} s'], 'perUnit' => '{0}/s']),
    'week' => new U(name: 'duration-week', long: ['name' => 'wk', 'plurals' => ['other' => '{0} w'], 'perUnit' => '{0}/w'], short: ['name' => 'wk', 'plurals' => ['other' => '{0} w'], 'perUnit' => '{0}/w'], narrow: ['name' => 'wk', 'plurals' => ['other' => '{0} w'], 'perUnit' => '{0}/w']),
    'year' => new U(name: 'duration-year', long: ['name' => 'yr', 'plurals' => ['other' => '{0} y'], 'perUnit' => '{0}/y'], short: ['name' => 'yr', 'plurals' => ['other' => '{0} y'], 'perUnit' => '{0}/y'], narrow: ['name' => 'yr', 'plurals' => ['other' => '{0} y'], 'perUnit' => '{0}/y']),
    'centimeter' => new U(name: 'length-centimeter', long: ['name' => 'cm', 'plurals' => ['other' => '{0} cm'], 'perUnit' => '{0}/cm'], short: ['name' => 'cm', 'plurals' => ['other' => '{0} cm'], 'perUnit' => '{0}/cm'], narrow: ['name' => 'cm', 'plurals' => ['other' => '{0} cm'], 'perUnit' => '{0}/cm']),
    'foot' => new U(name: 'length-foot', long: ['name' => 'ft', 'plurals' => ['other' => '{0} ft'], 'perUnit' => '{0}/ft'], short: ['name' => 'ft', 'plurals' => ['other' => '{0} ft'], 'perUnit' => '{0}/ft'], narrow: ['name' => 'ft', 'plurals' => ['other' => '{0} ft'], 'perUnit' => '{0}/ft']),
    'inch' => new U(name: 'length-inch', long: ['name' => 'in', 'plurals' => ['other' => '{0} in'], 'perUnit' => '{0}/in'], short: ['name' => 'in', 'plurals' => ['other' => '{0} in'], 'perUnit' => '{0}/in'], narrow: ['name' => 'in', 'plurals' => ['other' => '{0} in'], 'perUnit' => '{0}/in']),
    'meter' => new U(name: 'length-meter', long: ['name' => 'meter', 'plurals' => ['other' => '{0} m'], 'perUnit' => '{0}/m'], short: ['name' => 'meter', 'plurals' => ['other' => '{0} m'], 'perUnit' => '{0}/m'], narrow: ['name' => 'meter', 'plurals' => ['other' => '{0} m'], 'perUnit' => '{0}/m']),
    'mile-scandinavian' => new U(name: 'length-mile-scandinavian', long: ['name' => 'smi', 'plurals' => ['other' => '{0} smi'], 'perUnit' => ''], short: ['name' => 'smi', 'plurals' => ['other' => '{0} smi'], 'perUnit' => ''], narrow: ['name' => 'smi', 'plurals' => ['other' => '{0} smi'], 'perUnit' => '']),
    'mile' => new U(name: 'length-mile', long: ['name' => 'mi', 'plurals' => ['other' => '{0} mi'], 'perUnit' => ''], short: ['name' => 'mi', 'plurals' => ['other' => '{0} mi'], 'perUnit' => ''], narrow: ['name' => 'mi', 'plurals' => ['other' => '{0} mi'], 'perUnit' => '']),
    'millimeter' => new U(name: 'length-millimeter', long: ['name' => 'mm', 'plurals' => ['other' => '{0} mm'], 'perUnit' => ''], short: ['name' => 'mm', 'plurals' => ['other' => '{0} mm'], 'perUnit' => ''], narrow: ['name' => 'mm', 'plurals' => ['other' => '{0} mm'], 'perUnit' => '']),
    'yard' => new U(name: 'length-yard', long: ['name' => 'yd', 'plurals' => ['other' => '{0} yd'], 'perUnit' => ''], short: ['name' => 'yd', 'plurals' => ['other' => '{0} yd'], 'perUnit' => ''], narrow: ['name' => 'yd', 'plurals' => ['other' => '{0} yd'], 'perUnit' => '']),
    'gram' => new U(name: 'mass-gram', long: ['name' => 'gram', 'plurals' => ['other' => '{0} g'], 'perUnit' => '{0}/g'], short: ['name' => 'gram', 'plurals' => ['other' => '{0} g'], 'perUnit' => '{0}/g'], narrow: ['name' => 'gram', 'plurals' => ['other' => '{0} g'], 'perUnit' => '{0}/g']),
    'kilogram' => new U(name: 'mass-kilogram', long: ['name' => 'kg', 'plurals' => ['other' => '{0} kg'], 'perUnit' => '{0}/kg'], short: ['name' => 'kg', 'plurals' => ['other' => '{0} kg'], 'perUnit' => '{0}/kg'], narrow: ['name' => 'kg', 'plurals' => ['other' => '{0} kg'], 'perUnit' => '{0}/kg']),
    'ounce' => new U(name: 'mass-ounce', long: ['name' => 'oz', 'plurals' => ['other' => '{0} oz'], 'perUnit' => '{0}/oz'], short: ['name' => 'oz', 'plurals' => ['other' => '{0} oz'], 'perUnit' => '{0}/oz'], narrow: ['name' => 'oz', 'plurals' => ['other' => '{0} oz'], 'perUnit' => '{0}/oz']),
    'pound' => new U(name: 'mass-pound', long: ['name' => 'lb', 'plurals' => ['other' => '{0} lb'], 'perUnit' => '{0}/lb'], short: ['name' => 'lb', 'plurals' => ['other' => '{0} lb'], 'perUnit' => '{0}/lb'], narrow: ['name' => 'lb', 'plurals' => ['other' => '{0} lb'], 'perUnit' => '{0}/lb']),
    'stone' => new U(name: 'mass-stone', long: ['name' => 'st', 'plurals' => ['other' => '{0} st'], 'perUnit' => ''], short: ['name' => 'st', 'plurals' => ['other' => '{0} st'], 'perUnit' => ''], narrow: ['name' => 'st', 'plurals' => ['other' => '{0} st'], 'perUnit' => '']),
    'celsius' => new U(name: 'temperature-celsius', long: ['name' => '°C', 'plurals' => ['other' => '{0}°C'], 'perUnit' => ''], short: ['name' => '°C', 'plurals' => ['other' => '{0}°C'], 'perUnit' => ''], narrow: ['name' => '°C', 'plurals' => ['other' => '{0}°C'], 'perUnit' => '']),
    'fahrenheit' => new U(name: 'temperature-fahrenheit', long: ['name' => '°F', 'plurals' => ['other' => '{0}°F'], 'perUnit' => ''], short: ['name' => '°F', 'plurals' => ['other' => '{0}°F'], 'perUnit' => ''], narrow: ['name' => '°F', 'plurals' => ['other' => '{0}°F'], 'perUnit' => '']),
    'fluid-ounce' => new U(name: 'volume-fluid-ounce', long: ['name' => 'US fl oz', 'plurals' => ['other' => '{0} fl oz US'], 'perUnit' => ''], short: ['name' => 'US fl oz', 'plurals' => ['other' => '{0} fl oz US'], 'perUnit' => ''], narrow: ['name' => 'US fl oz', 'plurals' => ['other' => '{0} fl oz US'], 'perUnit' => '']),
    'gallon' => new U(name: 'volume-gallon', long: ['name' => 'US gal', 'plurals' => ['other' => '{0} gal US'], 'perUnit' => '{0}/gal US'], short: ['name' => 'US gal', 'plurals' => ['other' => '{0} gal US'], 'perUnit' => '{0}/gal US'], narrow: ['name' => 'US gal', 'plurals' => ['other' => '{0} gal US'], 'perUnit' => '{0}/gal US']),
    'liter' => new U(name: 'volume-liter', long: ['name' => 'liter', 'plurals' => ['other' => '{0} l'], 'perUnit' => '{0}/l'], short: ['name' => 'liter', 'plurals' => ['other' => '{0} l'], 'perUnit' => '{0}/l'], narrow: ['name' => 'liter', 'plurals' => ['other' => '{0} l'], 'perUnit' => '{0}/l']),
    'milliliter' => new U(name: 'volume-milliliter', long: ['name' => 'mL', 'plurals' => ['other' => '{0} mL'], 'perUnit' => ''], short: ['name' => 'mL', 'plurals' => ['other' => '{0} mL'], 'perUnit' => ''], narrow: ['name' => 'mL', 'plurals' => ['other' => '{0} mL'], 'perUnit' => '']),
];
