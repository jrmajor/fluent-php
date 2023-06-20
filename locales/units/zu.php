<?php

use Major\Fluent\Formatters\Number\Locale\Unit as U;

return [
    'degree' => new U(name: 'angle-degree', long: ['name' => '°', 'plurals' => ['one' => '{0}°', 'other' => '{0}°'], 'perUnit' => ''], short: ['name' => '°', 'plurals' => ['one' => '{0}°', 'other' => '{0}°'], 'perUnit' => ''], narrow: ['name' => '°', 'plurals' => ['one' => '{0}°', 'other' => '{0}°'], 'perUnit' => '']),
    'acre' => new U(name: 'area-acre', long: ['name' => 'acre', 'plurals' => ['one' => '{0} ac', 'other' => '{0} ac'], 'perUnit' => ''], short: ['name' => 'acre', 'plurals' => ['one' => '{0} ac', 'other' => '{0} ac'], 'perUnit' => ''], narrow: ['name' => 'acre', 'plurals' => ['one' => '{0} ac', 'other' => '{0} ac'], 'perUnit' => '']),
    'hectare' => new U(name: 'area-hectare', long: ['name' => 'hectare', 'plurals' => ['one' => '{0} ha', 'other' => '{0} ha'], 'perUnit' => ''], short: ['name' => 'hectare', 'plurals' => ['one' => '{0} ha', 'other' => '{0} ha'], 'perUnit' => ''], narrow: ['name' => 'hectare', 'plurals' => ['one' => '{0} ha', 'other' => '{0} ha'], 'perUnit' => '']),
    'percent' => new U(name: 'concentr-percent', long: ['name' => '%', 'plurals' => ['one' => '{0}%', 'other' => '{0}%'], 'perUnit' => ''], short: ['name' => '%', 'plurals' => ['one' => '{0}%', 'other' => '{0}%'], 'perUnit' => ''], narrow: ['name' => '%', 'plurals' => ['one' => '{0}%', 'other' => '{0}%'], 'perUnit' => '']),
    'bit' => new U(name: 'digital-bit', long: ['name' => 'bits', 'plurals' => ['one' => '{0} i-bit', 'other' => '{0} ama-bits'], 'perUnit' => ''], short: ['name' => 'bit', 'plurals' => ['one' => '{0} bit', 'other' => '{0} bit'], 'perUnit' => ''], narrow: ['name' => 'bit', 'plurals' => ['one' => '{0} bit', 'other' => '{0} bit'], 'perUnit' => '']),
    'byte' => new U(name: 'digital-byte', long: ['name' => 'bytes', 'plurals' => ['one' => '{0} i-byte', 'other' => '{0} ama-bytes'], 'perUnit' => ''], short: ['name' => 'byte', 'plurals' => ['one' => '{0} byte', 'other' => '{0} byte'], 'perUnit' => ''], narrow: ['name' => 'byte', 'plurals' => ['one' => '{0} byte', 'other' => '{0} byte'], 'perUnit' => '']),
    'gigabit' => new U(name: 'digital-gigabit', long: ['name' => 'gigabits', 'plurals' => ['one' => '{0} i-gigabit', 'other' => '{0} ama-gigabits'], 'perUnit' => ''], short: ['name' => 'Gbit', 'plurals' => ['one' => '{0} Gb', 'other' => '{0} Gb'], 'perUnit' => ''], narrow: ['name' => 'Gbit', 'plurals' => ['one' => '{0} Gb', 'other' => '{0} Gb'], 'perUnit' => '']),
    'gigabyte' => new U(name: 'digital-gigabyte', long: ['name' => 'GB', 'plurals' => ['one' => '{0} GB', 'other' => '{0} GB'], 'perUnit' => ''], short: ['name' => 'GB', 'plurals' => ['one' => '{0} GB', 'other' => '{0} GB'], 'perUnit' => ''], narrow: ['name' => 'GB', 'plurals' => ['one' => '{0} GB', 'other' => '{0} GB'], 'perUnit' => '']),
    'kilobit' => new U(name: 'digital-kilobit', long: ['name' => 'kilobits', 'plurals' => ['one' => '{0} i-kilobit', 'other' => '{0} ama-kilobits'], 'perUnit' => ''], short: ['name' => 'kbit', 'plurals' => ['one' => '{0} kb', 'other' => '{0} kb'], 'perUnit' => ''], narrow: ['name' => 'kbit', 'plurals' => ['one' => '{0} kb', 'other' => '{0} kb'], 'perUnit' => '']),
    'kilobyte' => new U(name: 'digital-kilobyte', long: ['name' => 'kB', 'plurals' => ['one' => '{0} kB', 'other' => '{0} kB'], 'perUnit' => ''], short: ['name' => 'kB', 'plurals' => ['one' => '{0} kB', 'other' => '{0} kB'], 'perUnit' => ''], narrow: ['name' => 'kB', 'plurals' => ['one' => '{0} kB', 'other' => '{0} kB'], 'perUnit' => '']),
    'megabit' => new U(name: 'digital-megabit', long: ['name' => 'megabits', 'plurals' => ['one' => '{0} i-megabit', 'other' => '{0} megabits'], 'perUnit' => ''], short: ['name' => 'Mbit', 'plurals' => ['one' => '{0} Mb', 'other' => '{0} Mb'], 'perUnit' => ''], narrow: ['name' => 'Mbit', 'plurals' => ['one' => '{0} Mb', 'other' => '{0} Mb'], 'perUnit' => '']),
    'megabyte' => new U(name: 'digital-megabyte', long: ['name' => 'MB', 'plurals' => ['one' => '{0} MB', 'other' => '{0} MB'], 'perUnit' => ''], short: ['name' => 'MB', 'plurals' => ['one' => '{0} MB', 'other' => '{0} MB'], 'perUnit' => ''], narrow: ['name' => 'MB', 'plurals' => ['one' => '{0} MB', 'other' => '{0} MB'], 'perUnit' => '']),
    'petabyte' => new U(name: 'digital-petabyte', long: ['name' => 'PB', 'plurals' => ['one' => '{0} PB', 'other' => '{0} PB'], 'perUnit' => ''], short: ['name' => 'PB', 'plurals' => ['one' => '{0} PB', 'other' => '{0} PB'], 'perUnit' => ''], narrow: ['name' => 'PB', 'plurals' => ['one' => '{0} PB', 'other' => '{0} PB'], 'perUnit' => '']),
    'terabit' => new U(name: 'digital-terabit', long: ['name' => 'terabits', 'plurals' => ['one' => '{0} i-terabit', 'other' => '{0} ama-terabits'], 'perUnit' => ''], short: ['name' => 'Tbit', 'plurals' => ['one' => '{0} Tb', 'other' => '{0} Tb'], 'perUnit' => ''], narrow: ['name' => 'Tbit', 'plurals' => ['one' => '{0} Tb', 'other' => '{0} Tb'], 'perUnit' => '']),
    'terabyte' => new U(name: 'digital-terabyte', long: ['name' => 'TB', 'plurals' => ['one' => '{0} TB', 'other' => '{0} TB'], 'perUnit' => ''], short: ['name' => 'TB', 'plurals' => ['one' => '{0} TB', 'other' => '{0} TB'], 'perUnit' => ''], narrow: ['name' => 'TB', 'plurals' => ['one' => '{0} TB', 'other' => '{0} TB'], 'perUnit' => '']),
    'day' => new U(name: 'duration-day', long: ['name' => 'izinsuku', 'plurals' => ['one' => '{0} usuku', 'other' => '{0} izinsuku'], 'perUnit' => '{0}/d'], short: ['name' => 'izinsuku', 'plurals' => ['one' => '{0} usuku', 'other' => '{0} izinsuku'], 'perUnit' => '{0}/d'], narrow: ['name' => 'izinsuku', 'plurals' => ['one' => '{0}', 'other' => '{0} suku'], 'perUnit' => '{0}/d']),
    'hour' => new U(name: 'duration-hour', long: ['name' => 'amahora', 'plurals' => ['one' => '{0} ihora', 'other' => '{0} amahora'], 'perUnit' => '{0}/h'], short: ['name' => 'amahora', 'plurals' => ['one' => '{0} hora', 'other' => '{0} hr'], 'perUnit' => '{0}/h'], narrow: ['name' => 'amahora', 'plurals' => ['one' => '{0} hora', 'other' => '{0} hora'], 'perUnit' => '{0}/h']),
    'millisecond' => new U(name: 'duration-millisecond', long: ['name' => 'ms', 'plurals' => ['one' => '{0} ms', 'other' => '{0} ms'], 'perUnit' => ''], short: ['name' => 'ms', 'plurals' => ['one' => '{0} ms', 'other' => '{0} ms'], 'perUnit' => ''], narrow: ['name' => 'ms', 'plurals' => ['one' => '{0} ms', 'other' => '{0} ms'], 'perUnit' => '']),
    'minute' => new U(name: 'duration-minute', long: ['name' => 'amaminithi', 'plurals' => ['one' => '{0} iminithi', 'other' => '{0} amaminithi'], 'perUnit' => '{0}/min'], short: ['name' => 'amaminithi', 'plurals' => ['one' => '{0} iminithi', 'other' => '{0} iminithi'], 'perUnit' => '{0}/min'], narrow: ['name' => 'amaminithi', 'plurals' => ['one' => '{0} umzuzu', 'other' => '{0} umzuzu'], 'perUnit' => '{0}/min']),
    'month' => new U(name: 'duration-month', long: ['name' => 'izinyanga', 'plurals' => ['one' => '{0} inyanga', 'other' => '{0} izinyanga'], 'perUnit' => '{0} ngenyanga'], short: ['name' => 'izinyanga', 'plurals' => ['one' => '{0} nyanga', 'other' => '{0} izinyanga'], 'perUnit' => '{0}/m'], narrow: ['name' => 'izinyanga', 'plurals' => ['one' => '{0} m', 'other' => '{0} m'], 'perUnit' => '{0}/m']),
    'second' => new U(name: 'duration-second', long: ['name' => 'amasekhondi', 'plurals' => ['one' => '{0} isekhondi', 'other' => '{0} amasekhondi'], 'perUnit' => '{0}ps'], short: ['name' => 'amasekhondi', 'plurals' => ['one' => '{0} sekhondi', 'other' => '{0} sec'], 'perUnit' => '{0}/s'], narrow: ['name' => 'isekhondi', 'plurals' => ['one' => '{0} s', 'other' => '{0} s'], 'perUnit' => '{0}/s']),
    'week' => new U(name: 'duration-week', long: ['name' => 'amaviki', 'plurals' => ['one' => '{0} iviki', 'other' => '{0} amaviki'], 'perUnit' => '{0}/w'], short: ['name' => 'amaviki', 'plurals' => ['one' => '{0} viki', 'other' => '{0} amaviki'], 'perUnit' => '{0}/w'], narrow: ['name' => 'amaviki', 'plurals' => ['one' => '{0} w', 'other' => '{0} w'], 'perUnit' => '{0}/w']),
    'year' => new U(name: 'duration-year', long: ['name' => 'y', 'plurals' => ['one' => '{0} y', 'other' => '{0} y'], 'perUnit' => '{0}/y'], short: ['name' => 'y', 'plurals' => ['one' => '{0} y', 'other' => '{0} yrs'], 'perUnit' => '{0}/y'], narrow: ['name' => 'y', 'plurals' => ['one' => '{0} y', 'other' => '{0} y'], 'perUnit' => '{0}/y']),
    'centimeter' => new U(name: 'length-centimeter', long: ['name' => 'cm', 'plurals' => ['one' => '{0} cm', 'other' => '{0} cm'], 'perUnit' => '{0}/cm'], short: ['name' => 'cm', 'plurals' => ['one' => '{0} cm', 'other' => '{0} cm'], 'perUnit' => '{0}/cm'], narrow: ['name' => 'cm', 'plurals' => ['one' => '{0} cm', 'other' => '{0} cm'], 'perUnit' => '{0}/cm']),
    'foot' => new U(name: 'length-foot', long: ['name' => 'ft', 'plurals' => ['one' => '{0} ft', 'other' => '{0} ft'], 'perUnit' => '{0}/ft'], short: ['name' => 'ft', 'plurals' => ['one' => '{0} ft', 'other' => '{0} ft'], 'perUnit' => '{0}/ft'], narrow: ['name' => 'ft', 'plurals' => ['one' => '{0} ft', 'other' => '{0} ft'], 'perUnit' => '{0}/ft']),
    'inch' => new U(name: 'length-inch', long: ['name' => 'in', 'plurals' => ['one' => '{0} in', 'other' => '{0} in'], 'perUnit' => '{0}/in'], short: ['name' => 'in', 'plurals' => ['one' => '{0} in', 'other' => '{0} in'], 'perUnit' => '{0}/in'], narrow: ['name' => 'in', 'plurals' => ['one' => '{0} in', 'other' => '{0} in'], 'perUnit' => '{0}/in']),
    'kilometer' => new U(name: 'length-kilometer', long: ['name' => 'km', 'plurals' => ['one' => '{0} km', 'other' => '{0} km'], 'perUnit' => '{0}/km'], short: ['name' => 'km', 'plurals' => ['one' => '{0} km', 'other' => '{0} km'], 'perUnit' => '{0}/km'], narrow: ['name' => 'km', 'plurals' => ['one' => '{0} km', 'other' => '{0} km'], 'perUnit' => '{0}/km']),
    'meter' => new U(name: 'length-meter', long: ['name' => 'm', 'plurals' => ['one' => '{0} m', 'other' => '{0} m'], 'perUnit' => '{0}/m'], short: ['name' => 'm', 'plurals' => ['one' => '{0} m', 'other' => '{0} m'], 'perUnit' => '{0}/m'], narrow: ['name' => 'm', 'plurals' => ['one' => '{0} m', 'other' => '{0} m'], 'perUnit' => '{0}/m']),
    'mile' => new U(name: 'length-mile', long: ['name' => 'mi', 'plurals' => ['one' => '{0} mi', 'other' => '{0} mi'], 'perUnit' => ''], short: ['name' => 'mi', 'plurals' => ['one' => '{0} mi', 'other' => '{0} mi'], 'perUnit' => ''], narrow: ['name' => 'mi', 'plurals' => ['one' => '{0} mi', 'other' => '{0} mi'], 'perUnit' => '']),
    'mile-scandinavian' => new U(name: 'length-mile-scandinavian', long: ['name' => 'smi', 'plurals' => ['one' => '{0} smi', 'other' => '{0} smi'], 'perUnit' => ''], short: ['name' => 'smi', 'plurals' => ['one' => '{0} smi', 'other' => '{0} smi'], 'perUnit' => ''], narrow: ['name' => 'smi', 'plurals' => ['one' => '{0} smi', 'other' => '{0} smi'], 'perUnit' => '']),
    'millimeter' => new U(name: 'length-millimeter', long: ['name' => 'mm', 'plurals' => ['one' => '{0} mm', 'other' => '{0} mm'], 'perUnit' => ''], short: ['name' => 'mm', 'plurals' => ['one' => '{0} mm', 'other' => '{0} mm'], 'perUnit' => ''], narrow: ['name' => 'mm', 'plurals' => ['one' => '{0} mm', 'other' => '{0} mm'], 'perUnit' => '']),
    'yard' => new U(name: 'length-yard', long: ['name' => 'yd', 'plurals' => ['one' => '{0} yd', 'other' => '{0} yd'], 'perUnit' => ''], short: ['name' => 'yd', 'plurals' => ['one' => '{0} yd', 'other' => '{0} yd'], 'perUnit' => ''], narrow: ['name' => 'yd', 'plurals' => ['one' => '{0} yd', 'other' => '{0} yd'], 'perUnit' => '']),
    'gram' => new U(name: 'mass-gram', long: ['name' => 'g', 'plurals' => ['one' => '{0} g', 'other' => '{0} g'], 'perUnit' => '{0}/g'], short: ['name' => 'g', 'plurals' => ['one' => '{0} g', 'other' => '{0} g'], 'perUnit' => '{0}/g'], narrow: ['name' => 'g', 'plurals' => ['one' => '{0} g', 'other' => '{0} g'], 'perUnit' => '{0}/g']),
    'kilogram' => new U(name: 'mass-kilogram', long: ['name' => 'kg', 'plurals' => ['one' => '{0} kg', 'other' => '{0} kg'], 'perUnit' => '{0}kg'], short: ['name' => 'kg', 'plurals' => ['one' => '{0} kg', 'other' => '{0} kg'], 'perUnit' => '{0}/kg'], narrow: ['name' => 'kg', 'plurals' => ['one' => '{0} kg', 'other' => '{0} kg'], 'perUnit' => '{0}/kg']),
    'ounce' => new U(name: 'mass-ounce', long: ['name' => 'oz', 'plurals' => ['one' => '{0} oz', 'other' => '{0} oz'], 'perUnit' => '{0}/oz'], short: ['name' => 'oz', 'plurals' => ['one' => '{0} oz', 'other' => '{0} oz'], 'perUnit' => '{0}/oz'], narrow: ['name' => 'oz', 'plurals' => ['one' => '{0} oz', 'other' => '{0} oz'], 'perUnit' => '{0}/oz']),
    'pound' => new U(name: 'mass-pound', long: ['name' => 'lb', 'plurals' => ['one' => '{0} lb', 'other' => '{0} lb'], 'perUnit' => '{0}/lb'], short: ['name' => 'lb', 'plurals' => ['one' => '{0} lb', 'other' => '{0} lb'], 'perUnit' => '{0}/lb'], narrow: ['name' => 'lb', 'plurals' => ['one' => '{0} lb', 'other' => '{0} lb'], 'perUnit' => '{0}/lb']),
    'stone' => new U(name: 'mass-stone', long: ['name' => 'st', 'plurals' => ['one' => '{0} st', 'other' => '{0} st'], 'perUnit' => ''], short: ['name' => 'st', 'plurals' => ['one' => '{0} st', 'other' => '{0} st'], 'perUnit' => ''], narrow: ['name' => 'st', 'plurals' => ['one' => '{0} st', 'other' => '{0} st'], 'perUnit' => '']),
    'celsius' => new U(name: 'temperature-celsius', long: ['name' => '°C', 'plurals' => ['one' => '{0}°C', 'other' => '{0}°C'], 'perUnit' => ''], short: ['name' => '°C', 'plurals' => ['one' => '{0}°C', 'other' => '{0}°C'], 'perUnit' => ''], narrow: ['name' => '°C', 'plurals' => ['one' => '{0}°', 'other' => '{0}°'], 'perUnit' => '']),
    'fahrenheit' => new U(name: 'temperature-fahrenheit', long: ['name' => '°F', 'plurals' => ['one' => '{0}°F', 'other' => '{0}°F'], 'perUnit' => ''], short: ['name' => '°F', 'plurals' => ['one' => '{0}°F', 'other' => '{0}°F'], 'perUnit' => ''], narrow: ['name' => '°F', 'plurals' => ['one' => '{0}°F', 'other' => '{0}°F'], 'perUnit' => '']),
    'fluid-ounce' => new U(name: 'volume-fluid-ounce', long: ['name' => 'fl oz', 'plurals' => ['one' => '{0} fl oz', 'other' => '{0} fl oz'], 'perUnit' => ''], short: ['name' => 'fl oz', 'plurals' => ['one' => '{0} fl oz', 'other' => '{0} fl oz'], 'perUnit' => ''], narrow: ['name' => 'fl oz', 'plurals' => ['one' => '{0} fl oz', 'other' => '{0} fl oz'], 'perUnit' => '']),
    'gallon' => new U(name: 'volume-gallon', long: ['name' => 'gal', 'plurals' => ['one' => '{0} gal', 'other' => '{0} gal'], 'perUnit' => '{0}/gal'], short: ['name' => 'gal', 'plurals' => ['one' => '{0} gal', 'other' => '{0} gal'], 'perUnit' => '{0}/gal'], narrow: ['name' => 'gal', 'plurals' => ['one' => '{0} gal', 'other' => '{0} gal'], 'perUnit' => '{0}/gal']),
    'liter' => new U(name: 'volume-liter', long: ['name' => 'l', 'plurals' => ['one' => '{0} l', 'other' => '{0} l'], 'perUnit' => '{0}/l'], short: ['name' => 'l', 'plurals' => ['one' => '{0} l', 'other' => '{0} l'], 'perUnit' => '{0}/l'], narrow: ['name' => 'l', 'plurals' => ['one' => '{0} l', 'other' => '{0} l'], 'perUnit' => '{0}/l']),
    'milliliter' => new U(name: 'volume-milliliter', long: ['name' => 'mL', 'plurals' => ['one' => '{0} mL', 'other' => '{0} mL'], 'perUnit' => ''], short: ['name' => 'mL', 'plurals' => ['one' => '{0} mL', 'other' => '{0} mL'], 'perUnit' => ''], narrow: ['name' => 'mL', 'plurals' => ['one' => '{0} mL', 'other' => '{0} mL'], 'perUnit' => '']),
];
