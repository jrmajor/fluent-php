<?php

use Major\Fluent\Formatters\Number\Locale\Unit as U;

return [
    'acre' => new U(long: ['name' => 'acres', 'plurals' => ['one' => '{0} acre', 'other' => '{0} acres'], 'perUnit' => ''], short: ['name' => 'ac', 'plurals' => ['one' => '{0} ac', 'other' => '{0} ac'], 'perUnit' => ''], narrow: ['name' => 'ac', 'plurals' => ['one' => '{0}ac', 'other' => '{0}ac'], 'perUnit' => '']),
    'bit' => new U(long: ['name' => 'bits', 'plurals' => ['one' => '{0} bit', 'other' => '{0} bits'], 'perUnit' => ''], short: ['name' => 'b', 'plurals' => ['one' => '{0} b', 'other' => '{0} b'], 'perUnit' => ''], narrow: ['name' => 'b', 'plurals' => ['one' => '{0}b', 'other' => '{0}b'], 'perUnit' => '']),
    'byte' => new U(long: ['name' => 'bytes', 'plurals' => ['one' => '{0} byte', 'other' => '{0} bytes'], 'perUnit' => ''], short: ['name' => 'B', 'plurals' => ['one' => '{0} B', 'other' => '{0} B'], 'perUnit' => ''], narrow: ['name' => 'B', 'plurals' => ['one' => '{0}B', 'other' => '{0}B'], 'perUnit' => '']),
    'celsius' => new U(long: ['name' => 'grados Celsius', 'plurals' => ['one' => '{0} grado Celsius', 'other' => '{0} grados Celsius'], 'perUnit' => ''], short: ['name' => '°C', 'plurals' => ['one' => '{0} °C', 'other' => '{0} °C'], 'perUnit' => ''], narrow: ['name' => '°C', 'plurals' => ['one' => '{0}°C', 'other' => '{0}°C'], 'perUnit' => '']),
    'centimeter' => new U(long: ['name' => 'centímetros', 'plurals' => ['one' => '{0} centímetro', 'other' => '{0} centímetros'], 'perUnit' => '{0} por centímetro'], short: ['name' => 'cm', 'plurals' => ['one' => '{0} cm', 'other' => '{0} cm'], 'perUnit' => '{0}/cm'], narrow: ['name' => 'cm', 'plurals' => ['one' => '{0}cm', 'other' => '{0}cm'], 'perUnit' => '{0}/cm']),
    'day' => new U(long: ['name' => 'días', 'plurals' => ['one' => '{0} día', 'other' => '{0} días'], 'perUnit' => '{0} por día'], short: ['name' => 'd', 'plurals' => ['one' => '{0} d', 'other' => '{0} d'], 'perUnit' => '{0}/d'], narrow: ['name' => 'd', 'plurals' => ['one' => '{0}d', 'other' => '{0}d'], 'perUnit' => '{0}/d']),
    'degree' => new U(long: ['name' => 'grados', 'plurals' => ['one' => '{0} grado', 'other' => '{0} grados'], 'perUnit' => ''], short: ['name' => 'grad.', 'plurals' => ['one' => '{0}°', 'other' => '{0}°'], 'perUnit' => ''], narrow: ['name' => 'grad', 'plurals' => ['one' => '{0}°', 'other' => '{0}°'], 'perUnit' => '']),
    'fahrenheit' => new U(long: ['name' => 'grados Fahrenheit', 'plurals' => ['one' => '{0} grado Fahrenheit', 'other' => '{0} grados Fahrenheit'], 'perUnit' => ''], short: ['name' => '°F', 'plurals' => ['one' => '{0} °F', 'other' => '{0} °F'], 'perUnit' => ''], narrow: ['name' => '°F', 'plurals' => ['one' => '{0}°F', 'other' => '{0}°F'], 'perUnit' => '']),
    'fluid-ounce' => new U(long: ['name' => 'onzas líquidas', 'plurals' => ['one' => '{0} onza líquida', 'other' => '{0} onzas líquidas'], 'perUnit' => ''], short: ['name' => 'fl oz', 'plurals' => ['one' => '{0} fl oz', 'other' => '{0} fl oz'], 'perUnit' => ''], narrow: ['name' => 'fl oz', 'plurals' => ['one' => '{0}fl oz', 'other' => '{0}fl oz'], 'perUnit' => '']),
    'foot' => new U(long: ['name' => 'pies', 'plurals' => ['one' => '{0} pie', 'other' => '{0} pies'], 'perUnit' => '{0} por pie'], short: ['name' => 'ft', 'plurals' => ['one' => '{0} ft', 'other' => '{0} ft'], 'perUnit' => '{0}/ft'], narrow: ['name' => 'ft', 'plurals' => ['one' => '{0}ft', 'other' => '{0}ft'], 'perUnit' => '{0}/ft']),
    'gallon' => new U(long: ['name' => 'galones', 'plurals' => ['one' => '{0} galón', 'other' => '{0} galones'], 'perUnit' => '{0} por galón'], short: ['name' => 'gal', 'plurals' => ['one' => '{0} gal', 'other' => '{0} gal'], 'perUnit' => '{0}/gal'], narrow: ['name' => 'gal', 'plurals' => ['one' => '{0}gal', 'other' => '{0}gal'], 'perUnit' => '{0}/gal']),
    'gigabit' => new U(long: ['name' => 'gigabits', 'plurals' => ['one' => '{0} gigabit', 'other' => '{0} gigabits'], 'perUnit' => ''], short: ['name' => 'Gb', 'plurals' => ['one' => '{0} Gb', 'other' => '{0} Gb'], 'perUnit' => ''], narrow: ['name' => 'Gb', 'plurals' => ['one' => '{0}Gb', 'other' => '{0}Gb'], 'perUnit' => '']),
    'gigabyte' => new U(long: ['name' => 'gigabytes', 'plurals' => ['one' => '{0} gigabyte', 'other' => '{0} gigabytes'], 'perUnit' => ''], short: ['name' => 'GB', 'plurals' => ['one' => '{0} GB', 'other' => '{0} GB'], 'perUnit' => ''], narrow: ['name' => 'GB', 'plurals' => ['one' => '{0}GB', 'other' => '{0}GB'], 'perUnit' => '']),
    'gram' => new U(long: ['name' => 'gramos', 'plurals' => ['one' => '{0} gramo', 'other' => '{0} gramos'], 'perUnit' => '{0} por gramo'], short: ['name' => 'g', 'plurals' => ['one' => '{0} g', 'other' => '{0} g'], 'perUnit' => '{0}/g'], narrow: ['name' => 'g', 'plurals' => ['one' => '{0}g', 'other' => '{0}g'], 'perUnit' => '{0}/g']),
    'hectare' => new U(long: ['name' => 'hectáreas', 'plurals' => ['one' => '{0} hectárea', 'other' => '{0} hectáreas'], 'perUnit' => ''], short: ['name' => 'ha', 'plurals' => ['one' => '{0} ha', 'other' => '{0} ha'], 'perUnit' => ''], narrow: ['name' => 'ha', 'plurals' => ['one' => '{0}ha', 'other' => '{0}ha'], 'perUnit' => '']),
    'hour' => new U(long: ['name' => 'horas', 'plurals' => ['one' => '{0} hora', 'other' => '{0} horas'], 'perUnit' => '{0} por hora'], short: ['name' => 'horas', 'plurals' => ['one' => '{0} h', 'other' => '{0} h'], 'perUnit' => '{0}/h'], narrow: ['name' => 'h', 'plurals' => ['one' => '{0}h', 'other' => '{0}h'], 'perUnit' => '{0}/h']),
    'inch' => new U(long: ['name' => 'pulgadas', 'plurals' => ['one' => '{0} pulgada', 'other' => '{0} pulgadas'], 'perUnit' => '{0} por pulgada'], short: ['name' => 'in', 'plurals' => ['one' => '{0} in', 'other' => '{0} in'], 'perUnit' => '{0}/in'], narrow: ['name' => 'in', 'plurals' => ['one' => '{0}in', 'other' => '{0}in'], 'perUnit' => '{0}/in']),
    'kilobit' => new U(long: ['name' => 'kilobits', 'plurals' => ['one' => '{0} kilobit', 'other' => '{0} kilobits'], 'perUnit' => ''], short: ['name' => 'kb', 'plurals' => ['one' => '{0} kb', 'other' => '{0} kb'], 'perUnit' => ''], narrow: ['name' => 'kb', 'plurals' => ['one' => '{0}kb', 'other' => '{0}kb'], 'perUnit' => '']),
    'kilobyte' => new U(long: ['name' => 'kilobytes', 'plurals' => ['one' => '{0} kilobyte', 'other' => '{0} kilobytes'], 'perUnit' => ''], short: ['name' => 'kB', 'plurals' => ['one' => '{0} kB', 'other' => '{0} kB'], 'perUnit' => ''], narrow: ['name' => 'kB', 'plurals' => ['one' => '{0}kB', 'other' => '{0}kB'], 'perUnit' => '']),
    'kilogram' => new U(long: ['name' => 'kilogramos', 'plurals' => ['one' => '{0} kilogramo', 'other' => '{0} kilogramos'], 'perUnit' => '{0} por kilogramo'], short: ['name' => 'kg', 'plurals' => ['one' => '{0} kg', 'other' => '{0} kg'], 'perUnit' => '{0}/kg'], narrow: ['name' => 'kg', 'plurals' => ['one' => '{0}kg', 'other' => '{0}kg'], 'perUnit' => '{0}/kg']),
    'kilometer' => new U(long: ['name' => 'kilómetros', 'plurals' => ['one' => '{0} kilómetro', 'other' => '{0} kilómetros'], 'perUnit' => '{0} por kilómetro'], short: ['name' => 'km', 'plurals' => ['one' => '{0} km', 'other' => '{0} km'], 'perUnit' => '{0}/km'], narrow: ['name' => 'km', 'plurals' => ['one' => '{0}km', 'other' => '{0}km'], 'perUnit' => '{0}/km']),
    'liter' => new U(long: ['name' => 'litros', 'plurals' => ['one' => '{0} litro', 'other' => '{0} litros'], 'perUnit' => '{0} por litro'], short: ['name' => 'l', 'plurals' => ['one' => '{0} l', 'other' => '{0} l'], 'perUnit' => '{0}/l'], narrow: ['name' => 'l', 'plurals' => ['one' => '{0}l', 'other' => '{0}l'], 'perUnit' => '{0}/l']),
    'megabit' => new U(long: ['name' => 'megabits', 'plurals' => ['one' => '{0} megabit', 'other' => '{0} megabits'], 'perUnit' => ''], short: ['name' => 'Mb', 'plurals' => ['one' => '{0} Mb', 'other' => '{0} Mb'], 'perUnit' => ''], narrow: ['name' => 'Mb', 'plurals' => ['one' => '{0}Mb', 'other' => '{0}Mb'], 'perUnit' => '']),
    'megabyte' => new U(long: ['name' => 'megabytes', 'plurals' => ['one' => '{0} megabyte', 'other' => '{0} megabytes'], 'perUnit' => ''], short: ['name' => 'MB', 'plurals' => ['one' => '{0} MB', 'other' => '{0} MB'], 'perUnit' => ''], narrow: ['name' => 'MB', 'plurals' => ['one' => '{0}MB', 'other' => '{0}MB'], 'perUnit' => '']),
    'meter' => new U(long: ['name' => 'metros', 'plurals' => ['one' => '{0} metro', 'other' => '{0} metros'], 'perUnit' => '{0} por metro'], short: ['name' => 'm', 'plurals' => ['one' => '{0} m', 'other' => '{0} m'], 'perUnit' => '{0}/m'], narrow: ['name' => 'm', 'plurals' => ['one' => '{0}m', 'other' => '{0}m'], 'perUnit' => '{0}/m']),
    'mile' => new U(long: ['name' => 'millas', 'plurals' => ['one' => '{0} milla', 'other' => '{0} millas'], 'perUnit' => ''], short: ['name' => 'mi', 'plurals' => ['one' => '{0} mi', 'other' => '{0} mi'], 'perUnit' => ''], narrow: ['name' => 'mi', 'plurals' => ['one' => '{0}mi', 'other' => '{0}mi'], 'perUnit' => '']),
    'mile-scandinavian' => new U(long: ['name' => 'millas escandinavas', 'plurals' => ['one' => '{0} milla escandinava', 'other' => '{0} millas escandinavas'], 'perUnit' => ''], short: ['name' => 'mi esc.', 'plurals' => ['one' => '{0} mi esc.', 'other' => '{0} mi esc.'], 'perUnit' => ''], narrow: ['name' => 'mi esc', 'plurals' => ['one' => '{0}mi esc', 'other' => '{0}mi esc'], 'perUnit' => '']),
    'milliliter' => new U(long: ['name' => 'mililitros', 'plurals' => ['one' => '{0} mililitro', 'other' => '{0} mililitros'], 'perUnit' => ''], short: ['name' => 'ml', 'plurals' => ['one' => '{0} ml', 'other' => '{0} ml'], 'perUnit' => ''], narrow: ['name' => 'ml', 'plurals' => ['one' => '{0} ml', 'other' => '{0} ml'], 'perUnit' => '']),
    'millimeter' => new U(long: ['name' => 'milímetros', 'plurals' => ['one' => '{0} milímetro', 'other' => '{0} milímetros'], 'perUnit' => ''], short: ['name' => 'mm', 'plurals' => ['one' => '{0} mm', 'other' => '{0} mm'], 'perUnit' => ''], narrow: ['name' => 'mm', 'plurals' => ['one' => '{0}mm', 'other' => '{0}mm'], 'perUnit' => '']),
    'millisecond' => new U(long: ['name' => 'milisegundos', 'plurals' => ['one' => '{0} milisegundo', 'other' => '{0} milisegundos'], 'perUnit' => ''], short: ['name' => 'ms', 'plurals' => ['one' => '{0} ms', 'other' => '{0} ms'], 'perUnit' => ''], narrow: ['name' => 'ms', 'plurals' => ['one' => '{0}ms', 'other' => '{0}ms'], 'perUnit' => '']),
    'minute' => new U(long: ['name' => 'minutos', 'plurals' => ['one' => '{0} minuto', 'other' => '{0} minutos'], 'perUnit' => '{0} por minuto'], short: ['name' => 'min', 'plurals' => ['one' => '{0} min', 'other' => '{0} min'], 'perUnit' => '{0}/min'], narrow: ['name' => 'min', 'plurals' => ['one' => '{0}min', 'other' => '{0}min'], 'perUnit' => '{0}/min']),
    'month' => new U(long: ['name' => 'meses', 'plurals' => ['one' => '{0} mes', 'other' => '{0} meses'], 'perUnit' => '{0} por mes'], short: ['name' => 'm.', 'plurals' => ['one' => '{0} m.', 'other' => '{0} m.'], 'perUnit' => '{0}/m.'], narrow: ['name' => 'm', 'plurals' => ['one' => '{0}m', 'other' => '{0}m'], 'perUnit' => '{0}/m']),
    'ounce' => new U(long: ['name' => 'onzas', 'plurals' => ['one' => '{0} onza', 'other' => '{0} onzas'], 'perUnit' => '{0} por onza'], short: ['name' => 'oz', 'plurals' => ['one' => '{0} oz', 'other' => '{0} oz'], 'perUnit' => '{0}/oz'], narrow: ['name' => 'oz', 'plurals' => ['one' => '{0}oz', 'other' => '{0}oz'], 'perUnit' => '{0}/oz']),
    'percent' => new U(long: ['name' => 'por ciento', 'plurals' => ['one' => '{0} por ciento', 'other' => '{0} por ciento'], 'perUnit' => ''], short: ['name' => 'por ciento', 'plurals' => ['one' => "{0}\u{A0}%", 'other' => "{0}\u{A0}%"], 'perUnit' => ''], narrow: ['name' => '%', 'plurals' => ['one' => '{0}%', 'other' => '{0}%'], 'perUnit' => '']),
    'petabyte' => new U(long: ['name' => 'petabytes', 'plurals' => ['one' => '{0} petabyte', 'other' => '{0} petabytes'], 'perUnit' => ''], short: ['name' => 'PB', 'plurals' => ['one' => '{0} PB', 'other' => '{0} PB'], 'perUnit' => ''], narrow: ['name' => 'PB', 'plurals' => ['one' => '{0}PB', 'other' => '{0}PB'], 'perUnit' => '']),
    'pound' => new U(long: ['name' => 'libras', 'plurals' => ['one' => '{0} libra', 'other' => '{0} libras'], 'perUnit' => '{0} por libra'], short: ['name' => 'lb', 'plurals' => ['one' => '{0} lb', 'other' => '{0} lb'], 'perUnit' => '{0}/lb'], narrow: ['name' => 'lb', 'plurals' => ['one' => '{0}lb', 'other' => '{0}lb'], 'perUnit' => '{0}/lb']),
    'second' => new U(long: ['name' => 'segundos', 'plurals' => ['one' => '{0} segundo', 'other' => '{0} segundos'], 'perUnit' => '{0} por segundo'], short: ['name' => 's', 'plurals' => ['one' => '{0} s', 'other' => '{0} s'], 'perUnit' => '{0}/s'], narrow: ['name' => 's', 'plurals' => ['one' => '{0}s', 'other' => '{0}s'], 'perUnit' => '{0}/s']),
    'stone' => new U(long: ['name' => 'stones', 'plurals' => ['one' => '{0} stone', 'other' => '{0} stones'], 'perUnit' => ''], short: ['name' => 'st', 'plurals' => ['one' => '{0} st', 'other' => '{0} st'], 'perUnit' => ''], narrow: ['name' => 'st', 'plurals' => ['one' => '{0}st', 'other' => '{0}st'], 'perUnit' => '']),
    'terabit' => new U(long: ['name' => 'terabits', 'plurals' => ['one' => '{0} terabit', 'other' => '{0} terabits'], 'perUnit' => ''], short: ['name' => 'Tb', 'plurals' => ['one' => '{0} Tb', 'other' => '{0} Tb'], 'perUnit' => ''], narrow: ['name' => 'Tb', 'plurals' => ['one' => '{0}Tb', 'other' => '{0}Tb'], 'perUnit' => '']),
    'terabyte' => new U(long: ['name' => 'terabytes', 'plurals' => ['one' => '{0} terabyte', 'other' => '{0} terabytes'], 'perUnit' => ''], short: ['name' => 'TB', 'plurals' => ['one' => '{0} TB', 'other' => '{0} TB'], 'perUnit' => ''], narrow: ['name' => 'TB', 'plurals' => ['one' => '{0}TB', 'other' => '{0}TB'], 'perUnit' => '']),
    'week' => new U(long: ['name' => 'semanas', 'plurals' => ['one' => '{0} semana', 'other' => '{0} semanas'], 'perUnit' => '{0} por semana'], short: ['name' => 'sem.', 'plurals' => ['one' => '{0} sem.', 'other' => '{0} sem.'], 'perUnit' => '{0}/sem.'], narrow: ['name' => 'sem', 'plurals' => ['one' => '{0}sem', 'other' => '{0}sem'], 'perUnit' => '{0}/sem']),
    'yard' => new U(long: ['name' => 'yardas', 'plurals' => ['one' => '{0} yarda', 'other' => '{0} yardas'], 'perUnit' => ''], short: ['name' => 'yd', 'plurals' => ['one' => '{0} yd', 'other' => '{0} yd'], 'perUnit' => ''], narrow: ['name' => 'yd', 'plurals' => ['one' => '{0}yd', 'other' => '{0}yd'], 'perUnit' => '']),
    'year' => new U(long: ['name' => 'años', 'plurals' => ['one' => '{0} año', 'other' => '{0} años'], 'perUnit' => '{0} por año'], short: ['name' => 'a', 'plurals' => ['one' => '{0} a', 'other' => '{0} a'], 'perUnit' => '{0}/a'], narrow: ['name' => 'a', 'plurals' => ['one' => '{0}a', 'other' => '{0}a'], 'perUnit' => '{0}/a']),
];
