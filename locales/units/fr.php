<?php

use Major\Fluent\Formatters\Number\Locale\Unit as U;

return [
    'acre' => new U(long: ['name' => 'acres anglo-saxonnes', 'plurals' => ['one' => "{0}\u{A0}acre anglo-saxonne", 'other' => "{0}\u{A0}acres anglo-saxonnes"], 'perUnit' => ''], short: ['name' => 'ac', 'plurals' => ['one' => "{0}\u{202F}ac", 'other' => "{0}\u{202F}ac"], 'perUnit' => ''], narrow: ['name' => 'ac', 'plurals' => ['one' => '{0}ac', 'other' => '{0}ac'], 'perUnit' => '']),
    'bit' => new U(long: ['name' => 'bits', 'plurals' => ['one' => "{0}\u{A0}bit", 'other' => "{0}\u{A0}bits"], 'perUnit' => ''], short: ['name' => 'bit', 'plurals' => ['one' => "{0}\u{202F}bit", 'other' => "{0}\u{202F}bit"], 'perUnit' => ''], narrow: ['name' => 'bit', 'plurals' => ['one' => '{0}bit', 'other' => '{0}bit'], 'perUnit' => '']),
    'byte' => new U(long: ['name' => 'octets', 'plurals' => ['one' => "{0}\u{A0}octet", 'other' => "{0}\u{A0}octets"], 'perUnit' => ''], short: ['name' => 'octet', 'plurals' => ['one' => "{0}\u{202F}o", 'other' => "{0}\u{202F}o"], 'perUnit' => ''], narrow: ['name' => 'o', 'plurals' => ['one' => '{0}o', 'other' => '{0}o'], 'perUnit' => '']),
    'celsius' => new U(long: ['name' => 'degrés Celsius', 'plurals' => ['one' => "{0}\u{A0}degré Celsius", 'other' => "{0}\u{A0}degrés Celsius"], 'perUnit' => ''], short: ['name' => '°C', 'plurals' => ['one' => "{0}\u{202F}°C", 'other' => "{0}\u{202F}°C"], 'perUnit' => ''], narrow: ['name' => '°C', 'plurals' => ['one' => '{0}°C', 'other' => '{0}°C'], 'perUnit' => '']),
    'centimeter' => new U(long: ['name' => 'centimètres', 'plurals' => ['one' => "{0}\u{A0}centimètre", 'other' => "{0}\u{A0}centimètres"], 'perUnit' => '{0} par centimètre'], short: ['name' => 'cm', 'plurals' => ['one' => "{0}\u{202F}cm", 'other' => "{0}\u{202F}cm"], 'perUnit' => '{0}/cm'], narrow: ['name' => 'cm', 'plurals' => ['one' => '{0}cm', 'other' => '{0}cm'], 'perUnit' => '{0}/cm']),
    'day' => new U(long: ['name' => 'jours', 'plurals' => ['one' => "{0}\u{A0}jour", 'other' => "{0}\u{A0}jours"], 'perUnit' => '{0} par jour'], short: ['name' => 'j', 'plurals' => ['one' => "{0}\u{202F}j", 'other' => "{0}\u{202F}j"], 'perUnit' => '{0}/j'], narrow: ['name' => 'j', 'plurals' => ['one' => '{0}j', 'other' => '{0}j'], 'perUnit' => '{0}/j']),
    'degree' => new U(long: ['name' => 'degrés', 'plurals' => ['one' => "{0}\u{A0}degré", 'other' => "{0}\u{A0}degrés"], 'perUnit' => ''], short: ['name' => '°', 'plurals' => ['one' => '{0}°', 'other' => '{0}°'], 'perUnit' => ''], narrow: ['name' => '°', 'plurals' => ['one' => '{0}°', 'other' => '{0}°'], 'perUnit' => '']),
    'fahrenheit' => new U(long: ['name' => 'degrés Fahrenheit', 'plurals' => ['one' => "{0}\u{A0}degré Fahrenheit", 'other' => "{0}\u{A0}degrés Fahrenheit"], 'perUnit' => ''], short: ['name' => '°F', 'plurals' => ['one' => "{0}\u{202F}°F", 'other' => "{0}\u{202F}°F"], 'perUnit' => ''], narrow: ['name' => '°F', 'plurals' => ['one' => '{0}°F', 'other' => '{0}°F'], 'perUnit' => '']),
    'fluid-ounce' => new U(long: ['name' => 'onces liquides', 'plurals' => ['one' => '{0} once liquide', 'other' => '{0} onces liquides'], 'perUnit' => ''], short: ['name' => 'fl oz', 'plurals' => ['one' => '{0} fl oz', 'other' => '{0} fl oz'], 'perUnit' => ''], narrow: ['name' => 'fl oz', 'plurals' => ['one' => '{0}fl oz', 'other' => '{0}fl oz'], 'perUnit' => '']),
    'foot' => new U(long: ['name' => 'pieds', 'plurals' => ['one' => "{0}\u{A0}pied", 'other' => '{0} pieds'], 'perUnit' => '{0} par pied'], short: ['name' => 'pi', 'plurals' => ['one' => "{0}\u{202F}pi", 'other' => "{0}\u{202F}pi"], 'perUnit' => '{0}/pi'], narrow: ['name' => 'pi', 'plurals' => ['one' => '{0}′', 'other' => '{0}′'], 'perUnit' => '{0}/pi']),
    'gallon' => new U(long: ['name' => 'gallons', 'plurals' => ['one' => '{0} gallon', 'other' => '{0} gallons'], 'perUnit' => '{0} par gallon'], short: ['name' => 'gal', 'plurals' => ['one' => '{0} gal', 'other' => '{0} gal'], 'perUnit' => '{0}/gal'], narrow: ['name' => 'gal', 'plurals' => ['one' => '{0}gal', 'other' => '{0}gal'], 'perUnit' => '{0}/gal']),
    'gigabit' => new U(long: ['name' => 'gigabits', 'plurals' => ['one' => "{0}\u{A0}gigabit", 'other' => "{0}\u{A0}gigabits"], 'perUnit' => ''], short: ['name' => 'Gbit', 'plurals' => ['one' => "{0}\u{202F}Gbit", 'other' => "{0}\u{202F}Gbit"], 'perUnit' => ''], narrow: ['name' => 'Gbit', 'plurals' => ['one' => '{0}Gbit', 'other' => '{0}Gbit'], 'perUnit' => '']),
    'gigabyte' => new U(long: ['name' => 'gigaoctets', 'plurals' => ['one' => "{0}\u{A0}gigaoctet", 'other' => "{0}\u{A0}gigaoctets"], 'perUnit' => ''], short: ['name' => 'Go', 'plurals' => ['one' => "{0}\u{202F}Go", 'other' => "{0}\u{202F}Go"], 'perUnit' => ''], narrow: ['name' => 'Go', 'plurals' => ['one' => '{0}Go', 'other' => '{0}Go'], 'perUnit' => '']),
    'gram' => new U(long: ['name' => 'grammes', 'plurals' => ['one' => "{0}\u{A0}gramme", 'other' => "{0}\u{A0}grammes"], 'perUnit' => '{0} par gramme'], short: ['name' => 'g', 'plurals' => ['one' => "{0}\u{202F}g", 'other' => "{0}\u{202F}g"], 'perUnit' => '{0}/g'], narrow: ['name' => 'g', 'plurals' => ['one' => '{0}g', 'other' => '{0}g'], 'perUnit' => '{0}/g']),
    'hectare' => new U(long: ['name' => 'hectares', 'plurals' => ['one' => "{0}\u{A0}hectare", 'other' => "{0}\u{A0}hectares"], 'perUnit' => ''], short: ['name' => 'ha', 'plurals' => ['one' => "{0}\u{202F}ha", 'other' => "{0}\u{202F}ha"], 'perUnit' => ''], narrow: ['name' => 'ha', 'plurals' => ['one' => '{0}ha', 'other' => '{0}ha'], 'perUnit' => '']),
    'hour' => new U(long: ['name' => 'heures', 'plurals' => ['one' => "{0}\u{A0}heure", 'other' => "{0}\u{A0}heures"], 'perUnit' => '{0} par heure'], short: ['name' => 'h', 'plurals' => ['one' => "{0}\u{202F}h", 'other' => "{0}\u{202F}h"], 'perUnit' => '{0}/h'], narrow: ['name' => 'h', 'plurals' => ['one' => '{0}h', 'other' => '{0}h'], 'perUnit' => '{0}/h']),
    'inch' => new U(long: ['name' => 'pouces', 'plurals' => ['one' => "{0}\u{A0}pouce", 'other' => "{0}\u{A0}pouces"], 'perUnit' => '{0} par pouce'], short: ['name' => 'po', 'plurals' => ['one' => "{0}\u{202F}po", 'other' => "{0}\u{202F}po"], 'perUnit' => '{0}/po'], narrow: ['name' => 'po', 'plurals' => ['one' => '{0}″', 'other' => '{0}″'], 'perUnit' => '{0}/po']),
    'kilobit' => new U(long: ['name' => 'kilobits', 'plurals' => ['one' => "{0}\u{A0}kilobit", 'other' => "{0}\u{A0}kilobits"], 'perUnit' => ''], short: ['name' => 'kbit', 'plurals' => ['one' => "{0}\u{202F}kbit", 'other' => "{0}\u{202F}kbit"], 'perUnit' => ''], narrow: ['name' => 'kbit', 'plurals' => ['one' => '{0}kbit', 'other' => '{0}kbit'], 'perUnit' => '']),
    'kilobyte' => new U(long: ['name' => 'kilooctets', 'plurals' => ['one' => "{0}\u{A0}kilooctet", 'other' => "{0}\u{A0}kilooctets"], 'perUnit' => ''], short: ['name' => 'ko', 'plurals' => ['one' => "{0}\u{202F}ko", 'other' => "{0}\u{202F}ko"], 'perUnit' => ''], narrow: ['name' => 'ko', 'plurals' => ['one' => '{0}ko', 'other' => '{0}ko'], 'perUnit' => '']),
    'kilogram' => new U(long: ['name' => 'kilogrammes', 'plurals' => ['one' => "{0}\u{A0}kilogramme", 'other' => "{0}\u{A0}kilogrammes"], 'perUnit' => '{0} par kilogramme'], short: ['name' => 'kg', 'plurals' => ['one' => "{0}\u{202F}kg", 'other' => "{0}\u{202F}kg"], 'perUnit' => '{0}/kg'], narrow: ['name' => 'kg', 'plurals' => ['one' => '{0}kg', 'other' => '{0}kg'], 'perUnit' => '{0}/kg']),
    'kilometer' => new U(long: ['name' => 'kilomètres', 'plurals' => ['one' => "{0}\u{A0}kilomètre", 'other' => "{0}\u{A0}kilomètres"], 'perUnit' => '{0} par kilomètre'], short: ['name' => 'km', 'plurals' => ['one' => "{0}\u{202F}km", 'other' => "{0}\u{202F}km"], 'perUnit' => '{0}/km'], narrow: ['name' => 'km', 'plurals' => ['one' => '{0}km', 'other' => '{0}km'], 'perUnit' => '{0}/km']),
    'liter' => new U(long: ['name' => 'litres', 'plurals' => ['one' => "{0}\u{A0}litre", 'other' => "{0}\u{A0}litres"], 'perUnit' => '{0} par litre'], short: ['name' => 'l', 'plurals' => ['one' => "{0}\u{202F}l", 'other' => "{0}\u{202F}l"], 'perUnit' => '{0}/l'], narrow: ['name' => 'l', 'plurals' => ['one' => '{0}l', 'other' => '{0}l'], 'perUnit' => '{0}/l']),
    'megabit' => new U(long: ['name' => 'mégabits', 'plurals' => ['one' => "{0}\u{A0}mégabit", 'other' => "{0}\u{A0}mégabits"], 'perUnit' => ''], short: ['name' => 'Mbit', 'plurals' => ['one' => "{0}\u{202F}Mbit", 'other' => "{0}\u{202F}Mbit"], 'perUnit' => ''], narrow: ['name' => 'Mbit', 'plurals' => ['one' => '{0}Mbit', 'other' => '{0}Mbit'], 'perUnit' => '']),
    'megabyte' => new U(long: ['name' => 'mégaoctets', 'plurals' => ['one' => "{0}\u{A0}mégaoctet", 'other' => "{0}\u{A0}mégaoctets"], 'perUnit' => ''], short: ['name' => 'Mo', 'plurals' => ['one' => "{0}\u{202F}Mo", 'other' => "{0}\u{202F}Mo"], 'perUnit' => ''], narrow: ['name' => 'Mo', 'plurals' => ['one' => '{0}Mo', 'other' => '{0}Mo'], 'perUnit' => '']),
    'meter' => new U(long: ['name' => 'mètres', 'plurals' => ['one' => "{0}\u{A0}mètre", 'other' => "{0}\u{A0}mètres"], 'perUnit' => '{0} par mètre'], short: ['name' => 'm', 'plurals' => ['one' => "{0}\u{202F}m", 'other' => "{0}\u{202F}m"], 'perUnit' => '{0}/m'], narrow: ['name' => 'm', 'plurals' => ['one' => '{0}m', 'other' => '{0}m'], 'perUnit' => '{0}/m']),
    'mile' => new U(long: ['name' => 'miles', 'plurals' => ['one' => "{0}\u{A0}mile", 'other' => "{0}\u{A0}miles"], 'perUnit' => ''], short: ['name' => 'mi', 'plurals' => ['one' => "{0}\u{202F}mi", 'other' => "{0}\u{202F}mi"], 'perUnit' => ''], narrow: ['name' => 'mi', 'plurals' => ['one' => '{0}mi', 'other' => '{0}mi'], 'perUnit' => '']),
    'mile-scandinavian' => new U(long: ['name' => 'milles scandinaves', 'plurals' => ['one' => "{0}\u{A0}mille scandinave", 'other' => "{0}\u{A0}milles scandinaves"], 'perUnit' => ''], short: ['name' => 'smi', 'plurals' => ['one' => "{0}\u{202F}smi", 'other' => "{0}\u{202F}smi"], 'perUnit' => ''], narrow: ['name' => 'smi', 'plurals' => ['one' => "{0}\u{202F}smi", 'other' => "{0}\u{202F}smi"], 'perUnit' => '']),
    'milliliter' => new U(long: ['name' => 'millilitres', 'plurals' => ['one' => '{0} millilitre', 'other' => '{0} millilitres'], 'perUnit' => ''], short: ['name' => 'ml', 'plurals' => ['one' => '{0} ml', 'other' => '{0} ml'], 'perUnit' => ''], narrow: ['name' => 'ml', 'plurals' => ['one' => '{0}ml', 'other' => '{0}ml'], 'perUnit' => '']),
    'millimeter' => new U(long: ['name' => 'millimètres', 'plurals' => ['one' => "{0}\u{A0}millimètre", 'other' => "{0}\u{A0}millimètres"], 'perUnit' => ''], short: ['name' => 'mm', 'plurals' => ['one' => "{0}\u{202F}mm", 'other' => "{0}\u{202F}mm"], 'perUnit' => ''], narrow: ['name' => 'mm', 'plurals' => ['one' => '{0}mm', 'other' => '{0}mm'], 'perUnit' => '']),
    'millisecond' => new U(long: ['name' => 'millisecondes', 'plurals' => ['one' => "{0}\u{A0}milliseconde", 'other' => "{0}\u{A0}millisecondes"], 'perUnit' => ''], short: ['name' => 'ms', 'plurals' => ['one' => "{0}\u{202F}ms", 'other' => "{0}\u{202F}ms"], 'perUnit' => ''], narrow: ['name' => 'ms', 'plurals' => ['one' => '{0}ms', 'other' => '{0}ms'], 'perUnit' => '']),
    'minute' => new U(long: ['name' => 'minutes', 'plurals' => ['one' => '{0} minute', 'other' => '{0} minutes'], 'perUnit' => '{0} par minute'], short: ['name' => 'min', 'plurals' => ['one' => "{0}\u{A0}min", 'other' => "{0}\u{A0}min"], 'perUnit' => '{0}/min'], narrow: ['name' => 'min', 'plurals' => ['one' => '{0}min', 'other' => '{0}min'], 'perUnit' => '{0}/min']),
    'month' => new U(long: ['name' => 'mois', 'plurals' => ['one' => "{0}\u{A0}mois", 'other' => "{0}\u{A0}mois"], 'perUnit' => '{0} par mois'], short: ['name' => 'm.', 'plurals' => ['one' => "{0}\u{202F}m.", 'other' => "{0}\u{202F}m."], 'perUnit' => '{0}/m.'], narrow: ['name' => 'm.', 'plurals' => ['one' => '{0}m.', 'other' => '{0}m.'], 'perUnit' => '{0}/m.']),
    'ounce' => new U(long: ['name' => 'onces', 'plurals' => ['one' => "{0}\u{A0}once", 'other' => "{0}\u{A0}onces"], 'perUnit' => '{0} par once'], short: ['name' => 'oz', 'plurals' => ['one' => "{0}\u{202F}oz", 'other' => "{0}\u{202F}oz"], 'perUnit' => '{0}/oz'], narrow: ['name' => 'oz', 'plurals' => ['one' => '{0}oz', 'other' => '{0}oz'], 'perUnit' => '{0}/oz']),
    'percent' => new U(long: ['name' => 'pour cent', 'plurals' => ['one' => '{0} pour cent', 'other' => '{0} pour cent'], 'perUnit' => ''], short: ['name' => '%', 'plurals' => ['one' => '{0} %', 'other' => '{0} %'], 'perUnit' => ''], narrow: ['name' => '%', 'plurals' => ['one' => '{0} %', 'other' => '{0} %'], 'perUnit' => '']),
    'petabyte' => new U(long: ['name' => 'pétaoctets', 'plurals' => ['one' => "{0}\u{A0}pétaoctet", 'other' => "{0}\u{A0}pétaoctets"], 'perUnit' => ''], short: ['name' => 'Po', 'plurals' => ['one' => "{0}\u{202F}Po", 'other' => "{0}\u{202F}Po"], 'perUnit' => ''], narrow: ['name' => 'Po', 'plurals' => ['one' => '{0}Po', 'other' => '{0}Po'], 'perUnit' => '']),
    'pound' => new U(long: ['name' => 'livres', 'plurals' => ['one' => "{0}\u{A0}livre", 'other' => "{0}\u{A0}livres"], 'perUnit' => '{0} par livre'], short: ['name' => 'lb', 'plurals' => ['one' => "{0}\u{202F}lb", 'other' => "{0}\u{202F}lb"], 'perUnit' => '{0}/lb'], narrow: ['name' => 'lb', 'plurals' => ['one' => '{0}lb', 'other' => '{0}lb'], 'perUnit' => '{0}/lb']),
    'second' => new U(long: ['name' => 'secondes', 'plurals' => ['one' => "{0}\u{A0}seconde", 'other' => "{0}\u{A0}secondes"], 'perUnit' => '{0} par seconde'], short: ['name' => 's', 'plurals' => ['one' => "{0}\u{202F}s", 'other' => "{0}\u{202F}s"], 'perUnit' => '{0}/s'], narrow: ['name' => 's', 'plurals' => ['one' => '{0}s', 'other' => '{0}s'], 'perUnit' => '{0}/s']),
    'stone' => new U(long: ['name' => 'stones', 'plurals' => ['one' => '{0} stone', 'other' => '{0} stones'], 'perUnit' => ''], short: ['name' => 'st', 'plurals' => ['one' => '{0} st', 'other' => '{0} st'], 'perUnit' => ''], narrow: ['name' => 'st', 'plurals' => ['one' => '{0} st', 'other' => '{0} st'], 'perUnit' => '']),
    'terabit' => new U(long: ['name' => 'térabits', 'plurals' => ['one' => "{0}\u{A0}térabit", 'other' => "{0}\u{A0}térabits"], 'perUnit' => ''], short: ['name' => 'Tbit', 'plurals' => ['one' => "{0}\u{202F}Tbit", 'other' => '{0} Tbit'], 'perUnit' => ''], narrow: ['name' => 'Tbit', 'plurals' => ['one' => '{0}Tbit', 'other' => '{0}Tbit'], 'perUnit' => '']),
    'terabyte' => new U(long: ['name' => 'téraoctets', 'plurals' => ['one' => "{0}\u{A0}téraoctet", 'other' => "{0}\u{A0}téraoctets"], 'perUnit' => ''], short: ['name' => 'To', 'plurals' => ['one' => "{0}\u{202F}To", 'other' => "{0}\u{202F}To"], 'perUnit' => ''], narrow: ['name' => 'To', 'plurals' => ['one' => '{0}To', 'other' => '{0}To'], 'perUnit' => '']),
    'week' => new U(long: ['name' => 'semaines', 'plurals' => ['one' => "{0}\u{A0}semaine", 'other' => "{0}\u{A0}semaines"], 'perUnit' => '{0} par semaine'], short: ['name' => 'sem.', 'plurals' => ['one' => "{0}\u{202F}sem.", 'other' => "{0}\u{202F}sem."], 'perUnit' => '{0}/sem.'], narrow: ['name' => 'sem.', 'plurals' => ['one' => '{0}sem.', 'other' => '{0}sem.'], 'perUnit' => '{0}/sem.']),
    'yard' => new U(long: ['name' => 'yards', 'plurals' => ['one' => "{0}\u{A0}yard", 'other' => "{0}\u{A0}yards"], 'perUnit' => ''], short: ['name' => 'yd', 'plurals' => ['one' => "{0}\u{202F}yd", 'other' => "{0}\u{202F}yd"], 'perUnit' => ''], narrow: ['name' => 'yd', 'plurals' => ['one' => '{0}yd', 'other' => '{0}yd'], 'perUnit' => '']),
    'year' => new U(long: ['name' => 'ans', 'plurals' => ['one' => "{0}\u{A0}an", 'other' => '{0} ans'], 'perUnit' => '{0} par an'], short: ['name' => 'ans', 'plurals' => ['one' => "{0}\u{A0}an", 'other' => "{0}\u{A0}ans"], 'perUnit' => '{0}/an'], narrow: ['name' => 'a', 'plurals' => ['one' => '{0}a', 'other' => '{0}a'], 'perUnit' => '{0}/a']),
];
