<?php

use Major\Fluent\Formatters\Number\Locale\Unit as U;

return [
    'kilometer' => new U(name: 'length-kilometer', long: ['name' => 'kilomètres', 'plurals' => ['one' => '{0} kilomètre', 'other' => '{0} kilomètres'], 'perUnit' => '{0} par kilomètre'], short: ['name' => 'km', 'plurals' => ['one' => '{0} km', 'other' => '{0} km'], 'perUnit' => '{0}/km'], narrow: ['name' => 'km', 'plurals' => ['one' => '{0}km', 'other' => '{0}km'], 'perUnit' => '{0}/km']),
    'degree' => new U(name: 'angle-degree', long: ['name' => 'degrés', 'plurals' => ['one' => '{0} degré', 'other' => '{0} degrés'], 'perUnit' => ''], short: ['name' => '°', 'plurals' => ['one' => '{0}°', 'other' => '{0}°'], 'perUnit' => ''], narrow: ['name' => '°', 'plurals' => ['one' => '{0}°', 'other' => '{0}°'], 'perUnit' => '']),
    'acre' => new U(name: 'area-acre', long: ['name' => 'acres', 'plurals' => ['one' => '{0} acre', 'other' => '{0} acres'], 'perUnit' => ''], short: ['name' => 'ac', 'plurals' => ['one' => '{0} ac', 'other' => '{0} ac'], 'perUnit' => ''], narrow: ['name' => 'ac', 'plurals' => ['one' => '{0}ac', 'other' => '{0}ac'], 'perUnit' => '']),
    'hectare' => new U(name: 'area-hectare', long: ['name' => 'hectares', 'plurals' => ['one' => '{0} hectare', 'other' => '{0} hectares'], 'perUnit' => ''], short: ['name' => 'ha', 'plurals' => ['one' => '{0} ha', 'other' => '{0} ha'], 'perUnit' => ''], narrow: ['name' => 'ha', 'plurals' => ['one' => '{0}ha', 'other' => '{0}ha'], 'perUnit' => '']),
    'percent' => new U(name: 'concentr-percent', long: ['name' => 'pour cent', 'plurals' => ['one' => '{0} pour cent', 'other' => '{0} pour cent'], 'perUnit' => ''], short: ['name' => '%', 'plurals' => ['one' => "{0}\u{A0}%", 'other' => "{0}\u{A0}%"], 'perUnit' => ''], narrow: ['name' => '%', 'plurals' => ['one' => "{0}\u{A0}%", 'other' => "{0}\u{A0}%"], 'perUnit' => '']),
    'bit' => new U(name: 'digital-bit', long: ['name' => 'bits', 'plurals' => ['one' => '{0} bit', 'other' => '{0} bits'], 'perUnit' => ''], short: ['name' => 'bit', 'plurals' => ['one' => '{0} bit', 'other' => '{0} bit'], 'perUnit' => ''], narrow: ['name' => 'bit', 'plurals' => ['one' => '{0}bit', 'other' => '{0}bit'], 'perUnit' => '']),
    'byte' => new U(name: 'digital-byte', long: ['name' => 'octets', 'plurals' => ['one' => '{0} octet', 'other' => '{0} octets'], 'perUnit' => ''], short: ['name' => 'octet', 'plurals' => ['one' => '{0} octet', 'other' => '{0} octet'], 'perUnit' => ''], narrow: ['name' => 'o', 'plurals' => ['one' => '{0}o', 'other' => '{0}o'], 'perUnit' => '']),
    'gigabit' => new U(name: 'digital-gigabit', long: ['name' => 'gigabits', 'plurals' => ['one' => '{0} gigabit', 'other' => '{0} gigabits'], 'perUnit' => ''], short: ['name' => 'Gb', 'plurals' => ['one' => '{0} Gb', 'other' => '{0} Gb'], 'perUnit' => ''], narrow: ['name' => 'Gbit', 'plurals' => ['one' => '{0}Gbit', 'other' => '{0}Gbit'], 'perUnit' => '']),
    'gigabyte' => new U(name: 'digital-gigabyte', long: ['name' => 'gigaoctets', 'plurals' => ['one' => '{0} gigaoctet', 'other' => '{0} gigaoctets'], 'perUnit' => ''], short: ['name' => 'Go', 'plurals' => ['one' => '{0} Go', 'other' => '{0} Go'], 'perUnit' => ''], narrow: ['name' => 'Go', 'plurals' => ['one' => '{0}Go', 'other' => '{0}Go'], 'perUnit' => '']),
    'kilobit' => new U(name: 'digital-kilobit', long: ['name' => 'kilobits', 'plurals' => ['one' => '{0} kilobit', 'other' => '{0} kilobits'], 'perUnit' => ''], short: ['name' => 'kb', 'plurals' => ['one' => '{0} kb', 'other' => '{0} kb'], 'perUnit' => ''], narrow: ['name' => 'kbit', 'plurals' => ['one' => '{0}kbit', 'other' => '{0}kbit'], 'perUnit' => '']),
    'kilobyte' => new U(name: 'digital-kilobyte', long: ['name' => 'kilooctets', 'plurals' => ['one' => '{0} kilooctet', 'other' => '{0} kilooctets'], 'perUnit' => ''], short: ['name' => 'ko', 'plurals' => ['one' => '{0} ko', 'other' => '{0} ko'], 'perUnit' => ''], narrow: ['name' => 'ko', 'plurals' => ['one' => '{0}ko', 'other' => '{0}ko'], 'perUnit' => '']),
    'megabit' => new U(name: 'digital-megabit', long: ['name' => 'mégabits', 'plurals' => ['one' => '{0} mégabit', 'other' => '{0} mégabits'], 'perUnit' => ''], short: ['name' => 'Mb', 'plurals' => ['one' => '{0} Mb', 'other' => '{0} Mb'], 'perUnit' => ''], narrow: ['name' => 'Mbit', 'plurals' => ['one' => '{0}Mbit', 'other' => '{0}Mbit'], 'perUnit' => '']),
    'megabyte' => new U(name: 'digital-megabyte', long: ['name' => 'mégaoctets', 'plurals' => ['one' => '{0} mégaoctet', 'other' => '{0} mégaoctets'], 'perUnit' => ''], short: ['name' => 'Mo', 'plurals' => ['one' => '{0} Mo', 'other' => '{0} Mo'], 'perUnit' => ''], narrow: ['name' => 'Mo', 'plurals' => ['one' => '{0}Mo', 'other' => '{0}Mo'], 'perUnit' => '']),
    'terabit' => new U(name: 'digital-terabit', long: ['name' => 'térabits', 'plurals' => ['one' => '{0} térabit', 'other' => '{0} térabits'], 'perUnit' => ''], short: ['name' => 'Tb', 'plurals' => ['one' => '{0} Tb', 'other' => '{0} Tb'], 'perUnit' => ''], narrow: ['name' => 'Tbit', 'plurals' => ['one' => '{0}Tbit', 'other' => '{0}Tbit'], 'perUnit' => '']),
    'terabyte' => new U(name: 'digital-terabyte', long: ['name' => 'téraoctets', 'plurals' => ['one' => '{0} téraoctet', 'other' => '{0} téraoctets'], 'perUnit' => ''], short: ['name' => 'To', 'plurals' => ['one' => '{0} To', 'other' => '{0} To'], 'perUnit' => ''], narrow: ['name' => 'To', 'plurals' => ['one' => '{0}To', 'other' => '{0}To'], 'perUnit' => '']),
    'day' => new U(name: 'duration-day', long: ['name' => 'jours', 'plurals' => ['one' => '{0} jour', 'other' => '{0} jours'], 'perUnit' => '{0} par jour'], short: ['name' => 'j', 'plurals' => ['one' => '{0} j', 'other' => '{0} j'], 'perUnit' => '{0}/j'], narrow: ['name' => 'j', 'plurals' => ['one' => '{0}j', 'other' => '{0}j'], 'perUnit' => '{0}/j']),
    'hour' => new U(name: 'duration-hour', long: ['name' => 'heures', 'plurals' => ['one' => '{0} heure', 'other' => '{0} heures'], 'perUnit' => '{0} par heure'], short: ['name' => 'h', 'plurals' => ['one' => '{0} h', 'other' => '{0} h'], 'perUnit' => '{0}/h'], narrow: ['name' => 'h', 'plurals' => ['one' => '{0}h', 'other' => '{0}h'], 'perUnit' => '{0}/h']),
    'millisecond' => new U(name: 'duration-millisecond', long: ['name' => 'millisecondes', 'plurals' => ['one' => '{0} milliseconde', 'other' => '{0} millisecondes'], 'perUnit' => ''], short: ['name' => 'ms', 'plurals' => ['one' => '{0} ms', 'other' => '{0} ms'], 'perUnit' => ''], narrow: ['name' => 'ms', 'plurals' => ['one' => '{0}ms', 'other' => '{0}ms'], 'perUnit' => '']),
    'minute' => new U(name: 'duration-minute', long: ['name' => 'minutes', 'plurals' => ['one' => '{0} minute', 'other' => '{0} minutes'], 'perUnit' => '{0} par minute'], short: ['name' => 'min', 'plurals' => ['one' => '{0} min', 'other' => '{0} min'], 'perUnit' => '{0}/min'], narrow: ['name' => 'min', 'plurals' => ['one' => '{0}m', 'other' => '{0}m'], 'perUnit' => '{0}/m']),
    'month' => new U(name: 'duration-month', long: ['name' => 'mois', 'plurals' => ['one' => '{0} mois', 'other' => '{0} mois'], 'perUnit' => '{0} par mois'], short: ['name' => 'm.', 'plurals' => ['one' => '{0} m.', 'other' => '{0} m.'], 'perUnit' => '{0}/m.'], narrow: ['name' => 'm.', 'plurals' => ['one' => '{0}m', 'other' => '{0}m'], 'perUnit' => '{0}/m.']),
    'second' => new U(name: 'duration-second', long: ['name' => 'secondes', 'plurals' => ['one' => '{0} seconde', 'other' => '{0} secondes'], 'perUnit' => '{0} à la seconde'], short: ['name' => 's', 'plurals' => ['one' => '{0} s', 'other' => '{0} s'], 'perUnit' => '{0}/s'], narrow: ['name' => 's', 'plurals' => ['one' => '{0}s', 'other' => '{0}s'], 'perUnit' => '{0}/s']),
    'week' => new U(name: 'duration-week', long: ['name' => 'semaines', 'plurals' => ['one' => '{0} semaine', 'other' => '{0} semaines'], 'perUnit' => '{0} par semaine'], short: ['name' => 'sem.', 'plurals' => ['one' => '{0} sem.', 'other' => '{0} sem.'], 'perUnit' => '{0}/sem.'], narrow: ['name' => 'sem', 'plurals' => ['one' => '{0}sem', 'other' => '{0}sem'], 'perUnit' => '{0}/sem']),
    'year' => new U(name: 'duration-year', long: ['name' => 'ans', 'plurals' => ['one' => '{0} an', 'other' => '{0} ans'], 'perUnit' => '{0} par an'], short: ['name' => 'ans', 'plurals' => ['one' => '{0} an', 'other' => '{0} ans'], 'perUnit' => '{0}/an'], narrow: ['name' => 'a', 'plurals' => ['one' => '{0}a', 'other' => '{0}a'], 'perUnit' => '{0}/a']),
    'centimeter' => new U(name: 'length-centimeter', long: ['name' => 'centimètres', 'plurals' => ['one' => '{0} centimètre', 'other' => '{0} centimètres'], 'perUnit' => '{0} par centimètre'], short: ['name' => 'cm', 'plurals' => ['one' => '{0} cm', 'other' => '{0} cm'], 'perUnit' => '{0}/cm'], narrow: ['name' => 'cm', 'plurals' => ['one' => '{0}cm', 'other' => '{0}cm'], 'perUnit' => '{0}/cm']),
    'foot' => new U(name: 'length-foot', long: ['name' => 'pieds', 'plurals' => ['one' => '{0} pied', 'other' => '{0} pieds'], 'perUnit' => '{0} par pied'], short: ['name' => 'pi', 'plurals' => ['one' => "{0}\u{A0}pi", 'other' => '{0} pi'], 'perUnit' => '{0}/pi'], narrow: ['name' => 'pi', 'plurals' => ['one' => '{0}pi', 'other' => '{0}pi'], 'perUnit' => '{0}/pi']),
    'inch' => new U(name: 'length-inch', long: ['name' => 'pouces', 'plurals' => ['one' => '{0} pouce', 'other' => '{0} pouces'], 'perUnit' => '{0} par pouce'], short: ['name' => 'po', 'plurals' => ['one' => '{0} po', 'other' => '{0} po'], 'perUnit' => '{0}/po'], narrow: ['name' => 'po', 'plurals' => ['one' => '{0}po', 'other' => '{0}po'], 'perUnit' => '{0}/po']),
    'meter' => new U(name: 'length-meter', long: ['name' => 'mètres', 'plurals' => ['one' => '{0} mètre', 'other' => '{0} mètres'], 'perUnit' => '{0} par mètre'], short: ['name' => 'm', 'plurals' => ['one' => '{0} m', 'other' => '{0} m'], 'perUnit' => '{0}/m'], narrow: ['name' => 'm', 'plurals' => ['one' => '{0}m', 'other' => '{0}m'], 'perUnit' => '{0}/m']),
    'mile-scandinavian' => new U(name: 'length-mile-scandinavian', long: ['name' => 'milles scandinaves', 'plurals' => ['one' => "{0}\u{A0}mille scandinave", 'other' => "{0}\u{A0}milles scandinaves"], 'perUnit' => ''], short: ['name' => 'smi', 'plurals' => ['one' => "{0}\u{202F}smi", 'other' => "{0}\u{202F}smi"], 'perUnit' => ''], narrow: ['name' => 'smi', 'plurals' => ['one' => '{0}smi', 'other' => '{0}smi'], 'perUnit' => '']),
    'mile' => new U(name: 'length-mile', long: ['name' => 'mille', 'plurals' => ['one' => '{0} mille', 'other' => '{0} milles'], 'perUnit' => ''], short: ['name' => 'mi', 'plurals' => ['one' => '{0} mi', 'other' => '{0} mi'], 'perUnit' => ''], narrow: ['name' => 'mi', 'plurals' => ['one' => '{0}mi', 'other' => '{0}mi'], 'perUnit' => '']),
    'millimeter' => new U(name: 'length-millimeter', long: ['name' => 'millimètres', 'plurals' => ['one' => '{0} millimètre', 'other' => '{0} millimètres'], 'perUnit' => ''], short: ['name' => 'mm', 'plurals' => ['one' => '{0} mm', 'other' => '{0} mm'], 'perUnit' => ''], narrow: ['name' => 'mm', 'plurals' => ['one' => '{0}mm', 'other' => '{0}mm'], 'perUnit' => '']),
    'yard' => new U(name: 'length-yard', long: ['name' => 'verges', 'plurals' => ['one' => "{0}\u{A0}verge", 'other' => '{0} verges'], 'perUnit' => ''], short: ['name' => 'vg', 'plurals' => ['one' => "{0}\u{A0}vg", 'other' => '{0} vg'], 'perUnit' => ''], narrow: ['name' => 'vg', 'plurals' => ['one' => '{0}vg', 'other' => '{0}vg'], 'perUnit' => '']),
    'gram' => new U(name: 'mass-gram', long: ['name' => 'grammes', 'plurals' => ['one' => '{0} gramme', 'other' => '{0} grammes'], 'perUnit' => '{0} par gramme'], short: ['name' => 'g', 'plurals' => ['one' => '{0} g', 'other' => '{0} g'], 'perUnit' => '{0}/g'], narrow: ['name' => 'g', 'plurals' => ['one' => '{0}g', 'other' => '{0}g'], 'perUnit' => '{0}/g']),
    'kilogram' => new U(name: 'mass-kilogram', long: ['name' => 'kilogrammes', 'plurals' => ['one' => '{0} kilogramme', 'other' => '{0} kilogrammes'], 'perUnit' => '{0} par kilogramme'], short: ['name' => 'kg', 'plurals' => ['one' => '{0} kg', 'other' => '{0} kg'], 'perUnit' => '{0}/kg'], narrow: ['name' => 'kg', 'plurals' => ['one' => '{0}kg', 'other' => '{0}kg'], 'perUnit' => '{0}/kg']),
    'ounce' => new U(name: 'mass-ounce', long: ['name' => 'onces', 'plurals' => ['one' => '{0} once', 'other' => '{0} onces'], 'perUnit' => '{0} par once'], short: ['name' => 'oz', 'plurals' => ['one' => '{0} oz', 'other' => '{0} oz'], 'perUnit' => '{0}/oz'], narrow: ['name' => 'oz', 'plurals' => ['one' => '{0}oz', 'other' => '{0}oz'], 'perUnit' => '{0}/oz']),
    'pound' => new U(name: 'mass-pound', long: ['name' => 'livres', 'plurals' => ['one' => '{0} livre', 'other' => '{0} livres'], 'perUnit' => '{0} par livre'], short: ['name' => 'lb', 'plurals' => ['one' => '{0} lb', 'other' => '{0} lb'], 'perUnit' => '{0}/lb'], narrow: ['name' => 'lb', 'plurals' => ['one' => '{0}lb', 'other' => '{0}lb'], 'perUnit' => '{0}/lb']),
    'stone' => new U(name: 'mass-stone', long: ['name' => 'stones', 'plurals' => ['one' => '{0} stone', 'other' => '{0} stone'], 'perUnit' => ''], short: ['name' => 'st', 'plurals' => ['one' => '{0} st', 'other' => '{0} st'], 'perUnit' => ''], narrow: ['name' => 'st', 'plurals' => ['one' => '{0}st', 'other' => '{0}st'], 'perUnit' => '']),
    'celsius' => new U(name: 'temperature-celsius', long: ['name' => 'degrés Celsius', 'plurals' => ['one' => '{0} degré Celsius', 'other' => '{0} degrés Celsius'], 'perUnit' => ''], short: ['name' => '°C', 'plurals' => ['one' => '{0} °C', 'other' => '{0} °C'], 'perUnit' => ''], narrow: ['name' => '°C', 'plurals' => ['one' => "{0}\u{A0}°C", 'other' => '{0} °C'], 'perUnit' => '']),
    'fahrenheit' => new U(name: 'temperature-fahrenheit', long: ['name' => 'degrés Fahrenheit', 'plurals' => ['one' => '{0} degré Fahrenheit', 'other' => '{0} degrés Fahrenheit'], 'perUnit' => ''], short: ['name' => '°F', 'plurals' => ['one' => '{0} °F', 'other' => '{0} °F'], 'perUnit' => ''], narrow: ['name' => '°F', 'plurals' => ['one' => '{0}°F', 'other' => '{0}°F'], 'perUnit' => '']),
    'fluid-ounce' => new U(name: 'volume-fluid-ounce', long: ['name' => 'onces liquides', 'plurals' => ['one' => '{0} once liquide', 'other' => '{0} onces liquides'], 'perUnit' => ''], short: ['name' => 'oz liq.', 'plurals' => ['one' => "{0}\u{A0}oz liq.", 'other' => '{0} oz liq.'], 'perUnit' => ''], narrow: ['name' => 'oz liq.', 'plurals' => ['one' => '{0}oz liq.', 'other' => '{0}oz liq.'], 'perUnit' => '']),
    'liter' => new U(name: 'volume-liter', long: ['name' => 'litres', 'plurals' => ['one' => '{0} litre', 'other' => '{0} litres'], 'perUnit' => '{0} par litre'], short: ['name' => 'l', 'plurals' => ['one' => "{0}\u{202F}l", 'other' => "{0}\u{202F}l"], 'perUnit' => '{0}/l'], narrow: ['name' => 'l', 'plurals' => ['one' => '{0}l', 'other' => '{0}l'], 'perUnit' => '{0}/l']),
];
