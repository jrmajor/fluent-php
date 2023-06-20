<?php

use Major\Fluent\Formatters\Number\Locale\Unit as U;

return [
    'acre' => new U(name: 'area-acre', long: ['name' => 'acres', 'plurals' => ['one' => '{0} acre', 'other' => '{0} acres'], 'perUnit' => ''], short: ['name' => 'acres', 'plurals' => ['one' => '{0} ac', 'other' => '{0} ac'], 'perUnit' => ''], narrow: ['name' => 'acre', 'plurals' => ['one' => '{0} acre', 'other' => '{0} acres'], 'perUnit' => '']),
    'bit' => new U(name: 'digital-bit', long: ['name' => 'bits', 'plurals' => ['one' => '{0} bit', 'other' => '{0} bits'], 'perUnit' => ''], short: ['name' => 'bit', 'plurals' => ['one' => '{0} bits', 'other' => '{0} bits'], 'perUnit' => ''], narrow: ['name' => 'bit', 'plurals' => ['one' => '{0} bit', 'other' => '{0} bits'], 'perUnit' => '']),
    'byte' => new U(name: 'digital-byte', long: ['name' => 'bytes', 'plurals' => ['one' => '{0} byte', 'other' => '{0} bytes'], 'perUnit' => ''], short: ['name' => 'byte', 'plurals' => ['one' => '{0} bytes', 'other' => '{0} bytes'], 'perUnit' => ''], narrow: ['name' => 'B', 'plurals' => ['one' => '{0} B', 'other' => '{0} B'], 'perUnit' => '']),
    'celsius' => new U(name: 'temperature-celsius', long: ['name' => 'graus Celsius', 'plurals' => ['one' => '{0} grau Celsius', 'other' => '{0} graus Celsius'], 'perUnit' => ''], short: ['name' => 'graus C', 'plurals' => ['one' => '{0} °C', 'other' => '{0} °C'], 'perUnit' => ''], narrow: ['name' => '°C', 'plurals' => ['one' => '{0} °C', 'other' => '{0} °C'], 'perUnit' => '']),
    'centimeter' => new U(name: 'length-centimeter', long: ['name' => 'centímetros', 'plurals' => ['one' => '{0} centímetro', 'other' => '{0} centímetros'], 'perUnit' => '{0} por centímetro'], short: ['name' => 'cm', 'plurals' => ['one' => '{0} cm', 'other' => '{0} cm'], 'perUnit' => '{0}/cm'], narrow: ['name' => 'cm', 'plurals' => ['one' => '{0} cm', 'other' => '{0} cm'], 'perUnit' => '{0}/cm']),
    'day' => new U(name: 'duration-day', long: ['name' => 'dias', 'plurals' => ['one' => '{0} dia', 'other' => '{0} dias'], 'perUnit' => '{0} por dia'], short: ['name' => 'dias', 'plurals' => ['one' => '{0} dia', 'other' => '{0} dias'], 'perUnit' => '{0}/dia'], narrow: ['name' => 'dia', 'plurals' => ['one' => '{0} dia', 'other' => '{0} dias'], 'perUnit' => '{0}/dia']),
    'degree' => new U(name: 'angle-degree', long: ['name' => 'graus', 'plurals' => ['one' => '{0} grau', 'other' => '{0} graus'], 'perUnit' => ''], short: ['name' => 'graus', 'plurals' => ['one' => '{0}°', 'other' => '{0}°'], 'perUnit' => ''], narrow: ['name' => 'graus', 'plurals' => ['one' => '{0}°', 'other' => '{0}°'], 'perUnit' => '']),
    'fahrenheit' => new U(name: 'temperature-fahrenheit', long: ['name' => 'graus Fahrenheit', 'plurals' => ['one' => '{0} grau Fahrenheit', 'other' => '{0} graus Fahrenheit'], 'perUnit' => ''], short: ['name' => 'graus F', 'plurals' => ['one' => '{0} °F', 'other' => '{0} °F'], 'perUnit' => ''], narrow: ['name' => '°F', 'plurals' => ['one' => '{0} °F', 'other' => '{0} °F'], 'perUnit' => '']),
    'fluid-ounce' => new U(name: 'volume-fluid-ounce', long: ['name' => 'onças fluidas', 'plurals' => ['one' => '{0} onça fluida', 'other' => '{0} onças fluidas'], 'perUnit' => ''], short: ['name' => 'fl oz', 'plurals' => ['one' => '{0} fl oz', 'other' => '{0} fl oz'], 'perUnit' => ''], narrow: ['name' => 'fl. oz.', 'plurals' => ['one' => '{0} fl. oz.', 'other' => '{0} fl. oz.'], 'perUnit' => '']),
    'foot' => new U(name: 'length-foot', long: ['name' => 'pés', 'plurals' => ['one' => '{0} pé', 'other' => '{0} pés'], 'perUnit' => '{0} por pé'], short: ['name' => 'pés', 'plurals' => ['one' => '{0} pé', 'other' => '{0} pés'], 'perUnit' => '{0}/pé'], narrow: ['name' => 'pés', 'plurals' => ['one' => '{0} pé', 'other' => '{0} pés'], 'perUnit' => '{0}/pé']),
    'gallon' => new U(name: 'volume-gallon', long: ['name' => 'galões', 'plurals' => ['one' => '{0} galão', 'other' => '{0} galões'], 'perUnit' => '{0} por galão'], short: ['name' => 'gal', 'plurals' => ['one' => '{0} gal', 'other' => '{0} gal'], 'perUnit' => '{0}/gal'], narrow: ['name' => 'gal', 'plurals' => ['one' => '{0} gal', 'other' => '{0} gal'], 'perUnit' => '{0}/gal']),
    'gigabit' => new U(name: 'digital-gigabit', long: ['name' => 'gigabits', 'plurals' => ['one' => '{0} gigabit', 'other' => '{0} gigabits'], 'perUnit' => ''], short: ['name' => 'Gbit', 'plurals' => ['one' => '{0} Gb', 'other' => '{0} Gb'], 'perUnit' => ''], narrow: ['name' => 'Gb', 'plurals' => ['one' => '{0} Gb', 'other' => '{0} Gb'], 'perUnit' => '']),
    'gigabyte' => new U(name: 'digital-gigabyte', long: ['name' => 'gigabytes', 'plurals' => ['one' => '{0} gigabyte', 'other' => '{0} gigabytes'], 'perUnit' => ''], short: ['name' => 'GByte', 'plurals' => ['one' => '{0} GB', 'other' => '{0} GB'], 'perUnit' => ''], narrow: ['name' => 'GB', 'plurals' => ['one' => '{0} GB', 'other' => '{0} GB'], 'perUnit' => '']),
    'gram' => new U(name: 'mass-gram', long: ['name' => 'gramas', 'plurals' => ['one' => '{0} grama', 'other' => '{0} gramas'], 'perUnit' => '{0} por grama'], short: ['name' => 'gramas', 'plurals' => ['one' => '{0} g', 'other' => '{0} g'], 'perUnit' => '{0}/g'], narrow: ['name' => 'grama', 'plurals' => ['one' => '{0}g', 'other' => '{0}g'], 'perUnit' => '{0}/g']),
    'hectare' => new U(name: 'area-hectare', long: ['name' => 'hectares', 'plurals' => ['one' => '{0} hectare', 'other' => '{0} hectares'], 'perUnit' => ''], short: ['name' => 'hectares', 'plurals' => ['one' => '{0} ha', 'other' => '{0} ha'], 'perUnit' => ''], narrow: ['name' => 'hectare', 'plurals' => ['one' => '{0} ha', 'other' => '{0} ha'], 'perUnit' => '']),
    'hour' => new U(name: 'duration-hour', long: ['name' => 'horas', 'plurals' => ['one' => '{0} hora', 'other' => '{0} horas'], 'perUnit' => '{0} por hora'], short: ['name' => 'horas', 'plurals' => ['one' => '{0} h', 'other' => '{0} h'], 'perUnit' => '{0}/h'], narrow: ['name' => 'hora', 'plurals' => ['one' => '{0} h', 'other' => '{0} h'], 'perUnit' => '{0}/h']),
    'inch' => new U(name: 'length-inch', long: ['name' => 'polegadas', 'plurals' => ['one' => '{0} polegada', 'other' => '{0} polegadas'], 'perUnit' => '{0} por polegada'], short: ['name' => 'pol.', 'plurals' => ['one' => '{0} pol.', 'other' => '{0} pol.'], 'perUnit' => '{0}/pol.'], narrow: ['name' => 'pol.', 'plurals' => ['one' => '{0}″', 'other' => '{0}″'], 'perUnit' => '{0}/pol.']),
    'kilobit' => new U(name: 'digital-kilobit', long: ['name' => 'kilobits', 'plurals' => ['one' => '{0} kilobit', 'other' => '{0} kilobits'], 'perUnit' => ''], short: ['name' => 'kbit', 'plurals' => ['one' => '{0} kb', 'other' => '{0} kb'], 'perUnit' => ''], narrow: ['name' => 'kb', 'plurals' => ['one' => '{0} kb', 'other' => '{0} kb'], 'perUnit' => '']),
    'kilobyte' => new U(name: 'digital-kilobyte', long: ['name' => 'kilobytes', 'plurals' => ['one' => '{0} kilobyte', 'other' => '{0} kilobytes'], 'perUnit' => ''], short: ['name' => 'kByte', 'plurals' => ['one' => '{0} kB', 'other' => '{0} kB'], 'perUnit' => ''], narrow: ['name' => 'kB', 'plurals' => ['one' => '{0} kB', 'other' => '{0} kB'], 'perUnit' => '']),
    'kilogram' => new U(name: 'mass-kilogram', long: ['name' => 'quilogramas', 'plurals' => ['one' => '{0} quilograma', 'other' => '{0} quilogramas'], 'perUnit' => '{0} por quilograma'], short: ['name' => 'kg', 'plurals' => ['one' => '{0} kg', 'other' => '{0} kg'], 'perUnit' => '{0}/kg'], narrow: ['name' => 'kg', 'plurals' => ['one' => '{0}kg', 'other' => '{0}kg'], 'perUnit' => '{0}/kg']),
    'kilometer' => new U(name: 'length-kilometer', long: ['name' => 'quilômetros', 'plurals' => ['one' => '{0} quilômetro', 'other' => '{0} quilômetros'], 'perUnit' => '{0} por quilômetro'], short: ['name' => 'km', 'plurals' => ['one' => '{0} km', 'other' => '{0} km'], 'perUnit' => '{0}/km'], narrow: ['name' => 'km', 'plurals' => ['one' => '{0} km', 'other' => '{0} km'], 'perUnit' => '{0}/km']),
    'liter' => new U(name: 'volume-liter', long: ['name' => 'litros', 'plurals' => ['one' => '{0} litro', 'other' => '{0} litros'], 'perUnit' => '{0} por litro'], short: ['name' => 'litros', 'plurals' => ['one' => '{0} l', 'other' => '{0} l'], 'perUnit' => '{0}/l'], narrow: ['name' => 'litro', 'plurals' => ['one' => '{0}l', 'other' => '{0}l'], 'perUnit' => '{0}/l']),
    'megabit' => new U(name: 'digital-megabit', long: ['name' => 'megabits', 'plurals' => ['one' => '{0} megabit', 'other' => '{0} megabits'], 'perUnit' => ''], short: ['name' => 'Mbit', 'plurals' => ['one' => '{0} Mb', 'other' => '{0} Mb'], 'perUnit' => ''], narrow: ['name' => 'Mb', 'plurals' => ['one' => '{0} Mb', 'other' => '{0} Mb'], 'perUnit' => '']),
    'megabyte' => new U(name: 'digital-megabyte', long: ['name' => 'megabytes', 'plurals' => ['one' => '{0} megabyte', 'other' => '{0} megabytes'], 'perUnit' => ''], short: ['name' => 'MByte', 'plurals' => ['one' => '{0} MB', 'other' => '{0} MB'], 'perUnit' => ''], narrow: ['name' => 'MB', 'plurals' => ['one' => '{0} MB', 'other' => '{0} MB'], 'perUnit' => '']),
    'meter' => new U(name: 'length-meter', long: ['name' => 'metros', 'plurals' => ['one' => '{0} metro', 'other' => '{0} metros'], 'perUnit' => '{0} por metro'], short: ['name' => 'm', 'plurals' => ['one' => '{0} m', 'other' => '{0} m'], 'perUnit' => '{0}/m'], narrow: ['name' => 'm', 'plurals' => ['one' => '{0} m', 'other' => '{0} m'], 'perUnit' => '{0}/m']),
    'mile' => new U(name: 'length-mile', long: ['name' => 'milhas', 'plurals' => ['one' => '{0} milha', 'other' => '{0} milhas'], 'perUnit' => ''], short: ['name' => 'milhas', 'plurals' => ['one' => '{0} mi', 'other' => '{0} mi'], 'perUnit' => ''], narrow: ['name' => 'mi', 'plurals' => ['one' => '{0} mi', 'other' => '{0} mi'], 'perUnit' => '']),
    'mile-scandinavian' => new U(name: 'length-mile-scandinavian', long: ['name' => 'milhas escandinavas', 'plurals' => ['one' => '{0} milha escandinava', 'other' => '{0} milhas escandinavas'], 'perUnit' => ''], short: ['name' => 'smi', 'plurals' => ['one' => '{0} smi', 'other' => '{0} smi'], 'perUnit' => ''], narrow: ['name' => 'smi', 'plurals' => ['one' => '{0} smi', 'other' => '{0} smi'], 'perUnit' => '']),
    'milliliter' => new U(name: 'volume-milliliter', long: ['name' => 'mililitros', 'plurals' => ['one' => '{0} mililitro', 'other' => '{0} mililitros'], 'perUnit' => ''], short: ['name' => 'ml', 'plurals' => ['one' => '{0} ml', 'other' => '{0} ml'], 'perUnit' => ''], narrow: ['name' => 'ml', 'plurals' => ['one' => '{0} ml', 'other' => '{0} ml'], 'perUnit' => '']),
    'millimeter' => new U(name: 'length-millimeter', long: ['name' => 'milímetros', 'plurals' => ['one' => '{0} milímetro', 'other' => '{0} milímetros'], 'perUnit' => ''], short: ['name' => 'mm', 'plurals' => ['one' => '{0} mm', 'other' => '{0} mm'], 'perUnit' => ''], narrow: ['name' => 'mm', 'plurals' => ['one' => '{0} mm', 'other' => '{0} mm'], 'perUnit' => '']),
    'millisecond' => new U(name: 'duration-millisecond', long: ['name' => 'milissegundos', 'plurals' => ['one' => '{0} milissegundo', 'other' => '{0} milissegundos'], 'perUnit' => ''], short: ['name' => 'milissegundos', 'plurals' => ['one' => '{0} ms', 'other' => '{0} ms'], 'perUnit' => ''], narrow: ['name' => 'ms', 'plurals' => ['one' => '{0} ms', 'other' => '{0} ms'], 'perUnit' => '']),
    'minute' => new U(name: 'duration-minute', long: ['name' => 'minutos', 'plurals' => ['one' => '{0} minuto', 'other' => '{0} minutos'], 'perUnit' => '{0} por minuto'], short: ['name' => 'min', 'plurals' => ['one' => '{0} min', 'other' => '{0} min'], 'perUnit' => '{0}/min'], narrow: ['name' => 'min', 'plurals' => ['one' => '{0} min', 'other' => '{0} min'], 'perUnit' => '{0}/min']),
    'month' => new U(name: 'duration-month', long: ['name' => 'meses', 'plurals' => ['one' => '{0} mês', 'other' => '{0} meses'], 'perUnit' => '{0} por mês'], short: ['name' => 'meses', 'plurals' => ['one' => '{0} mês', 'other' => '{0} meses'], 'perUnit' => '{0}/mês'], narrow: ['name' => 'mês', 'plurals' => ['one' => '{0} mês', 'other' => '{0} meses'], 'perUnit' => '{0}/mês']),
    'ounce' => new U(name: 'mass-ounce', long: ['name' => 'onças', 'plurals' => ['one' => '{0} onça', 'other' => '{0} onças'], 'perUnit' => '{0} por onça'], short: ['name' => 'oz', 'plurals' => ['one' => '{0} oz', 'other' => '{0} oz'], 'perUnit' => '{0}/oz'], narrow: ['name' => 'oz', 'plurals' => ['one' => '{0} oz', 'other' => '{0} oz'], 'perUnit' => '{0}/oz']),
    'percent' => new U(name: 'concentr-percent', long: ['name' => 'por cento', 'plurals' => ['one' => '{0} por cento', 'other' => '{0} por cento'], 'perUnit' => ''], short: ['name' => 'por cento', 'plurals' => ['one' => '{0}%', 'other' => '{0}%'], 'perUnit' => ''], narrow: ['name' => '%', 'plurals' => ['one' => '{0}%', 'other' => '{0}%'], 'perUnit' => '']),
    'petabyte' => new U(name: 'digital-petabyte', long: ['name' => 'petabytes', 'plurals' => ['one' => '{0} petabyte', 'other' => '{0} petabytes'], 'perUnit' => ''], short: ['name' => 'PByte', 'plurals' => ['one' => '{0} PB', 'other' => '{0} PB'], 'perUnit' => ''], narrow: ['name' => 'PB', 'plurals' => ['one' => '{0} PB', 'other' => '{0} PB'], 'perUnit' => '']),
    'pound' => new U(name: 'mass-pound', long: ['name' => 'libras', 'plurals' => ['one' => '{0} libra', 'other' => '{0} libras'], 'perUnit' => '{0} por libra'], short: ['name' => 'libras', 'plurals' => ['one' => '{0} lb', 'other' => '{0} lb'], 'perUnit' => '{0}/lb'], narrow: ['name' => 'lb', 'plurals' => ['one' => '{0} lb', 'other' => '{0} lb'], 'perUnit' => '{0}/lb']),
    'second' => new U(name: 'duration-second', long: ['name' => 'segundos', 'plurals' => ['one' => '{0} segundo', 'other' => '{0} segundos'], 'perUnit' => '{0} por segundo'], short: ['name' => 's', 'plurals' => ['one' => '{0} s', 'other' => '{0} s'], 'perUnit' => '{0}/s'], narrow: ['name' => 's', 'plurals' => ['one' => '{0} s', 'other' => '{0} s'], 'perUnit' => '{0}/s']),
    'stone' => new U(name: 'mass-stone', long: ['name' => 'stones', 'plurals' => ['one' => '{0} stone', 'other' => '{0} stones'], 'perUnit' => ''], short: ['name' => 'stones', 'plurals' => ['one' => '{0} st', 'other' => '{0} st'], 'perUnit' => ''], narrow: ['name' => 'stone', 'plurals' => ['one' => '{0} st', 'other' => '{0} st'], 'perUnit' => '']),
    'terabit' => new U(name: 'digital-terabit', long: ['name' => 'terabits', 'plurals' => ['one' => '{0} terabit', 'other' => '{0} terabits'], 'perUnit' => ''], short: ['name' => 'Tbit', 'plurals' => ['one' => '{0} Tb', 'other' => '{0} Tb'], 'perUnit' => ''], narrow: ['name' => 'Tb', 'plurals' => ['one' => '{0} Tb', 'other' => '{0} Tb'], 'perUnit' => '']),
    'terabyte' => new U(name: 'digital-terabyte', long: ['name' => 'terabytes', 'plurals' => ['one' => '{0} terabyte', 'other' => '{0} terabytes'], 'perUnit' => ''], short: ['name' => 'TByte', 'plurals' => ['one' => '{0} TB', 'other' => '{0} TB'], 'perUnit' => ''], narrow: ['name' => 'TB', 'plurals' => ['one' => '{0} TB', 'other' => '{0} TB'], 'perUnit' => '']),
    'week' => new U(name: 'duration-week', long: ['name' => 'semanas', 'plurals' => ['one' => '{0} semana', 'other' => '{0} semanas'], 'perUnit' => '{0} por semana'], short: ['name' => 'semanas', 'plurals' => ['one' => '{0} sem.', 'other' => '{0} sem.'], 'perUnit' => '{0}/sem.'], narrow: ['name' => 'sem.', 'plurals' => ['one' => '{0} sem.', 'other' => '{0} sem.'], 'perUnit' => '{0}/sem.']),
    'yard' => new U(name: 'length-yard', long: ['name' => 'jardas', 'plurals' => ['one' => '{0} jarda', 'other' => '{0} jardas'], 'perUnit' => ''], short: ['name' => 'jardas', 'plurals' => ['one' => '{0} yd', 'other' => '{0} yd'], 'perUnit' => ''], narrow: ['name' => 'yd', 'plurals' => ['one' => '{0} yd', 'other' => '{0} yd'], 'perUnit' => '']),
    'year' => new U(name: 'duration-year', long: ['name' => 'anos', 'plurals' => ['one' => '{0} ano', 'other' => '{0} anos'], 'perUnit' => '{0} por ano'], short: ['name' => 'anos', 'plurals' => ['one' => '{0} ano', 'other' => '{0} anos'], 'perUnit' => '{0}/ano'], narrow: ['name' => 'ano', 'plurals' => ['one' => '{0} ano', 'other' => '{0} anos'], 'perUnit' => '{0}/ano']),
];
