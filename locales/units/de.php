<?php

use Major\Fluent\Formatters\Number\Locale\Unit as U;

return [
    'kilometer' => new U(name: 'length-kilometer', long: ['name' => 'Kilometer', 'plurals' => ['one' => '{0} Kilometer', 'other' => '{0} Kilometer'], 'perUnit' => '{0} pro Kilometer'], short: ['name' => 'km', 'plurals' => ['one' => '{0} km', 'other' => '{0} km'], 'perUnit' => '{0}/km'], narrow: ['name' => 'km', 'plurals' => ['one' => '{0} km', 'other' => '{0} km'], 'perUnit' => '{0}/km']),
    'degree' => new U(name: 'angle-degree', long: ['name' => 'Grad', 'plurals' => ['one' => '{0} Grad', 'other' => '{0} Grad'], 'perUnit' => ''], short: ['name' => 'Grad', 'plurals' => ['one' => '{0}°', 'other' => '{0}°'], 'perUnit' => ''], narrow: ['name' => '°', 'plurals' => ['one' => '{0}°', 'other' => '{0}°'], 'perUnit' => '']),
    'acre' => new U(name: 'area-acre', long: ['name' => 'Acres', 'plurals' => ['one' => '{0} Acre', 'other' => '{0} Acres'], 'perUnit' => ''], short: ['name' => 'ac', 'plurals' => ['one' => '{0} ac', 'other' => '{0} ac'], 'perUnit' => ''], narrow: ['name' => 'ac', 'plurals' => ['one' => '{0} ac', 'other' => '{0} ac'], 'perUnit' => '']),
    'hectare' => new U(name: 'area-hectare', long: ['name' => 'Hektar', 'plurals' => ['one' => '{0} Hektar', 'other' => '{0} Hektar'], 'perUnit' => ''], short: ['name' => 'Hektar', 'plurals' => ['one' => '{0} ha', 'other' => '{0} ha'], 'perUnit' => ''], narrow: ['name' => 'ha', 'plurals' => ['one' => '{0} ha', 'other' => '{0} ha'], 'perUnit' => '']),
    'percent' => new U(name: 'concentr-percent', long: ['name' => 'Prozent', 'plurals' => ['one' => '{0} Prozent', 'other' => '{0} Prozent'], 'perUnit' => ''], short: ['name' => '%', 'plurals' => ['one' => '{0} %', 'other' => '{0} %'], 'perUnit' => ''], narrow: ['name' => '%', 'plurals' => ['one' => '{0} %', 'other' => '{0} %'], 'perUnit' => '']),
    'bit' => new U(name: 'digital-bit', long: ['name' => 'Bits', 'plurals' => ['one' => "{0}\u{A0}Bit", 'other' => '{0} Bit'], 'perUnit' => ''], short: ['name' => 'Bit', 'plurals' => ['one' => "{0}\u{A0}Bit", 'other' => '{0} Bit'], 'perUnit' => ''], narrow: ['name' => 'b', 'plurals' => ['one' => '{0} b', 'other' => '{0} b'], 'perUnit' => '']),
    'byte' => new U(name: 'digital-byte', long: ['name' => 'Bytes', 'plurals' => ['one' => "{0}\u{A0}Byte", 'other' => '{0} Byte'], 'perUnit' => ''], short: ['name' => 'Byte', 'plurals' => ['one' => "{0}\u{A0}Byte", 'other' => '{0} Byte'], 'perUnit' => ''], narrow: ['name' => 'B', 'plurals' => ['one' => '{0} B', 'other' => '{0} B'], 'perUnit' => '']),
    'gigabit' => new U(name: 'digital-gigabit', long: ['name' => 'Gigabits', 'plurals' => ['one' => "{0}\u{A0}Gigabit", 'other' => '{0} Gigabit'], 'perUnit' => ''], short: ['name' => 'Gigabit', 'plurals' => ['one' => "{0}\u{A0}Gb", 'other' => "{0}\u{A0}Gb"], 'perUnit' => ''], narrow: ['name' => 'Gb', 'plurals' => ['one' => "{0}\u{A0}Gb", 'other' => "{0}\u{A0}Gb"], 'perUnit' => '']),
    'gigabyte' => new U(name: 'digital-gigabyte', long: ['name' => 'Gigabytes', 'plurals' => ['one' => "{0}\u{A0}Gigabyte", 'other' => '{0} Gigabyte'], 'perUnit' => ''], short: ['name' => 'Gigabyte', 'plurals' => ['one' => "{0}\u{A0}GB", 'other' => "{0}\u{A0}GB"], 'perUnit' => ''], narrow: ['name' => 'GB', 'plurals' => ['one' => "{0}\u{A0}GB", 'other' => "{0}\u{A0}GB"], 'perUnit' => '']),
    'kilobit' => new U(name: 'digital-kilobit', long: ['name' => 'Kilobits', 'plurals' => ['one' => "{0}\u{A0}Kilobit", 'other' => '{0} Kilobit'], 'perUnit' => ''], short: ['name' => 'kbit', 'plurals' => ['one' => '{0} kb', 'other' => '{0} kb'], 'perUnit' => ''], narrow: ['name' => 'kb', 'plurals' => ['one' => '{0} kb', 'other' => '{0} kb'], 'perUnit' => '']),
    'kilobyte' => new U(name: 'digital-kilobyte', long: ['name' => 'Kilobytes', 'plurals' => ['one' => "{0}\u{A0}Kilobyte", 'other' => '{0} Kilobyte'], 'perUnit' => ''], short: ['name' => 'kbyte', 'plurals' => ['one' => '{0} kB', 'other' => '{0} kB'], 'perUnit' => ''], narrow: ['name' => 'kB', 'plurals' => ['one' => '{0} kB', 'other' => '{0} kB'], 'perUnit' => '']),
    'megabit' => new U(name: 'digital-megabit', long: ['name' => 'Megabits', 'plurals' => ['one' => "{0}\u{A0}Megabit", 'other' => '{0} Megabit'], 'perUnit' => ''], short: ['name' => 'Mbit', 'plurals' => ['one' => '{0} Mb', 'other' => '{0} Mb'], 'perUnit' => ''], narrow: ['name' => 'Mb', 'plurals' => ['one' => '{0} Mb', 'other' => '{0} Mb'], 'perUnit' => '']),
    'megabyte' => new U(name: 'digital-megabyte', long: ['name' => 'Megabytes', 'plurals' => ['one' => "{0}\u{A0}Megabyte", 'other' => '{0} Megabyte'], 'perUnit' => ''], short: ['name' => 'Mbyte', 'plurals' => ['one' => '{0} MB', 'other' => '{0} MB'], 'perUnit' => ''], narrow: ['name' => 'MB', 'plurals' => ['one' => '{0} MB', 'other' => '{0} MB'], 'perUnit' => '']),
    'petabyte' => new U(name: 'digital-petabyte', long: ['name' => 'Petabytes', 'plurals' => ['one' => '{0} Petabyte', 'other' => '{0} Petabyte'], 'perUnit' => ''], short: ['name' => 'PB', 'plurals' => ['one' => '{0} PB', 'other' => '{0} PB'], 'perUnit' => ''], narrow: ['name' => 'PB', 'plurals' => ['one' => '{0} PB', 'other' => '{0} PB'], 'perUnit' => '']),
    'terabit' => new U(name: 'digital-terabit', long: ['name' => 'Terabits', 'plurals' => ['one' => "{0}\u{A0}Terabit", 'other' => '{0} Terabit'], 'perUnit' => ''], short: ['name' => 'Tb', 'plurals' => ['one' => '{0} Tb', 'other' => '{0} Tb'], 'perUnit' => ''], narrow: ['name' => 'Tb', 'plurals' => ['one' => '{0} Tb', 'other' => '{0} Tb'], 'perUnit' => '']),
    'terabyte' => new U(name: 'digital-terabyte', long: ['name' => 'Terabytes', 'plurals' => ['one' => "{0}\u{A0}Terabyte", 'other' => '{0} Terabyte'], 'perUnit' => ''], short: ['name' => 'TB', 'plurals' => ['one' => '{0} TB', 'other' => '{0} TB'], 'perUnit' => ''], narrow: ['name' => 'TB', 'plurals' => ['one' => '{0} TB', 'other' => '{0} TB'], 'perUnit' => '']),
    'day' => new U(name: 'duration-day', long: ['name' => 'Tage', 'plurals' => ['one' => '{0} Tag', 'other' => '{0} Tage'], 'perUnit' => '{0} pro Tag'], short: ['name' => 'Tg.', 'plurals' => ['one' => '{0} Tg.', 'other' => '{0} Tg.'], 'perUnit' => '{0}/T'], narrow: ['name' => 'T', 'plurals' => ['one' => '{0} T', 'other' => '{0} T'], 'perUnit' => '{0}/T']),
    'hour' => new U(name: 'duration-hour', long: ['name' => 'Stunden', 'plurals' => ['one' => '{0} Stunde', 'other' => '{0} Stunden'], 'perUnit' => '{0} pro Stunde'], short: ['name' => 'Std.', 'plurals' => ['one' => '{0} Std.', 'other' => '{0} Std.'], 'perUnit' => '{0}/h'], narrow: ['name' => 'Std.', 'plurals' => ['one' => '{0} Std.', 'other' => '{0} Std.'], 'perUnit' => '{0}/h']),
    'millisecond' => new U(name: 'duration-millisecond', long: ['name' => 'Millisekunden', 'plurals' => ['one' => '{0} Millisekunde', 'other' => '{0} Millisekunden'], 'perUnit' => ''], short: ['name' => 'ms', 'plurals' => ['one' => '{0} ms', 'other' => '{0} ms'], 'perUnit' => ''], narrow: ['name' => 'ms', 'plurals' => ['one' => '{0} ms', 'other' => '{0} ms'], 'perUnit' => '']),
    'minute' => new U(name: 'duration-minute', long: ['name' => 'Minuten', 'plurals' => ['one' => '{0} Minute', 'other' => '{0} Minuten'], 'perUnit' => '{0} pro Minute'], short: ['name' => 'min', 'plurals' => ['one' => '{0} Min.', 'other' => '{0} Min.'], 'perUnit' => '{0}/min'], narrow: ['name' => 'min', 'plurals' => ['one' => '{0} Min.', 'other' => '{0} Min.'], 'perUnit' => '{0}/min']),
    'month' => new U(name: 'duration-month', long: ['name' => 'Monate', 'plurals' => ['one' => '{0} Monat', 'other' => '{0} Monate'], 'perUnit' => '{0} pro Monat'], short: ['name' => 'Mon.', 'plurals' => ['one' => '{0} Mon.', 'other' => '{0} Mon.'], 'perUnit' => '{0}/M'], narrow: ['name' => 'M', 'plurals' => ['one' => '{0} M', 'other' => '{0} M'], 'perUnit' => '{0}/M']),
    'second' => new U(name: 'duration-second', long: ['name' => 'Sekunden', 'plurals' => ['one' => '{0} Sekunde', 'other' => '{0} Sekunden'], 'perUnit' => '{0} pro Sekunde'], short: ['name' => 'Sek.', 'plurals' => ['one' => '{0} Sek.', 'other' => '{0} Sek.'], 'perUnit' => '{0}/s'], narrow: ['name' => 'Sek.', 'plurals' => ['one' => '{0} Sek.', 'other' => '{0} Sek.'], 'perUnit' => '{0}/s']),
    'week' => new U(name: 'duration-week', long: ['name' => 'Wochen', 'plurals' => ['one' => '{0} Woche', 'other' => '{0} Wochen'], 'perUnit' => '{0} pro Woche'], short: ['name' => 'Wo.', 'plurals' => ['one' => '{0} Wo.', 'other' => '{0} Wo.'], 'perUnit' => '{0}/W'], narrow: ['name' => 'W', 'plurals' => ['one' => '{0} W', 'other' => '{0} W'], 'perUnit' => '{0}/W']),
    'year' => new U(name: 'duration-year', long: ['name' => 'Jahre', 'plurals' => ['one' => '{0} Jahr', 'other' => '{0} Jahre'], 'perUnit' => '{0} pro Jahr'], short: ['name' => 'J', 'plurals' => ['one' => '{0} J', 'other' => '{0} J'], 'perUnit' => '{0}/J'], narrow: ['name' => 'J', 'plurals' => ['one' => '{0} J', 'other' => '{0} J'], 'perUnit' => '{0}/J']),
    'centimeter' => new U(name: 'length-centimeter', long: ['name' => 'Zentimeter', 'plurals' => ['one' => '{0} Zentimeter', 'other' => '{0} Zentimeter'], 'perUnit' => '{0} pro Zentimeter'], short: ['name' => 'cm', 'plurals' => ['one' => '{0} cm', 'other' => '{0} cm'], 'perUnit' => '{0}/cm'], narrow: ['name' => 'cm', 'plurals' => ['one' => '{0} cm', 'other' => '{0} cm'], 'perUnit' => '{0}/cm']),
    'foot' => new U(name: 'length-foot', long: ['name' => 'Fuß', 'plurals' => ['one' => '{0} Fuß', 'other' => '{0} Fuß'], 'perUnit' => '{0} pro Fuß'], short: ['name' => 'Fuß', 'plurals' => ['one' => '{0} ft', 'other' => '{0} ft'], 'perUnit' => '{0}/ft'], narrow: ['name' => 'ft', 'plurals' => ['one' => '{0} ft', 'other' => '{0} ft'], 'perUnit' => '{0}/ft']),
    'inch' => new U(name: 'length-inch', long: ['name' => 'Zoll', 'plurals' => ['one' => '{0} Zoll', 'other' => '{0} Zoll'], 'perUnit' => '{0} pro Zoll'], short: ['name' => 'in', 'plurals' => ['one' => "{0}\u{A0}in", 'other' => '{0} in'], 'perUnit' => '{0}/in'], narrow: ['name' => 'in', 'plurals' => ['one' => "{0}\u{A0}in", 'other' => '{0} in'], 'perUnit' => '{0}/in']),
    'meter' => new U(name: 'length-meter', long: ['name' => 'Meter', 'plurals' => ['one' => '{0} Meter', 'other' => '{0} Meter'], 'perUnit' => '{0} pro Meter'], short: ['name' => 'Meter', 'plurals' => ['one' => '{0} m', 'other' => '{0} m'], 'perUnit' => '{0}/m'], narrow: ['name' => 'Meter', 'plurals' => ['one' => '{0} m', 'other' => '{0} m'], 'perUnit' => '{0}/m']),
    'mile-scandinavian' => new U(name: 'length-mile-scandinavian', long: ['name' => 'skandinavische Meilen', 'plurals' => ['one' => '{0} skandinavische Meile', 'other' => '{0} skandinavische Meilen'], 'perUnit' => ''], short: ['name' => 'smi', 'plurals' => ['one' => '{0} smi', 'other' => '{0} smi'], 'perUnit' => ''], narrow: ['name' => 'smi', 'plurals' => ['one' => '{0}smi', 'other' => '{0}smi'], 'perUnit' => '']),
    'mile' => new U(name: 'length-mile', long: ['name' => 'Meilen', 'plurals' => ['one' => '{0} Meile', 'other' => '{0} Meilen'], 'perUnit' => ''], short: ['name' => 'Meilen', 'plurals' => ['one' => '{0} mi', 'other' => '{0} mi'], 'perUnit' => ''], narrow: ['name' => 'mi', 'plurals' => ['one' => '{0} mi', 'other' => '{0} mi'], 'perUnit' => '']),
    'millimeter' => new U(name: 'length-millimeter', long: ['name' => 'Millimeter', 'plurals' => ['one' => '{0} Millimeter', 'other' => '{0} Millimeter'], 'perUnit' => ''], short: ['name' => 'mm', 'plurals' => ['one' => '{0} mm', 'other' => '{0} mm'], 'perUnit' => ''], narrow: ['name' => 'mm', 'plurals' => ['one' => '{0} mm', 'other' => '{0} mm'], 'perUnit' => '']),
    'yard' => new U(name: 'length-yard', long: ['name' => 'Yards', 'plurals' => ['one' => '{0} Yard', 'other' => '{0} Yards'], 'perUnit' => ''], short: ['name' => 'Yards', 'plurals' => ['one' => '{0} yd', 'other' => '{0} yd'], 'perUnit' => ''], narrow: ['name' => 'yd', 'plurals' => ['one' => '{0} yd', 'other' => '{0} yd'], 'perUnit' => '']),
    'gram' => new U(name: 'mass-gram', long: ['name' => 'Gramm', 'plurals' => ['one' => '{0} Gramm', 'other' => '{0} Gramm'], 'perUnit' => '{0} pro Gramm'], short: ['name' => 'Gramm', 'plurals' => ['one' => '{0} g', 'other' => '{0} g'], 'perUnit' => '{0}/g'], narrow: ['name' => 'Gramm', 'plurals' => ['one' => '{0} g', 'other' => '{0} g'], 'perUnit' => '{0}/g']),
    'kilogram' => new U(name: 'mass-kilogram', long: ['name' => 'Kilogramm', 'plurals' => ['one' => '{0} Kilogramm', 'other' => '{0} Kilogramm'], 'perUnit' => '{0} pro Kilogramm'], short: ['name' => 'kg', 'plurals' => ['one' => '{0} kg', 'other' => '{0} kg'], 'perUnit' => '{0}/kg'], narrow: ['name' => 'kg', 'plurals' => ['one' => '{0} kg', 'other' => '{0} kg'], 'perUnit' => '{0}/kg']),
    'ounce' => new U(name: 'mass-ounce', long: ['name' => 'Unzen', 'plurals' => ['one' => '{0} Unze', 'other' => '{0} Unzen'], 'perUnit' => '{0} pro Unze'], short: ['name' => 'oz', 'plurals' => ['one' => '{0} oz', 'other' => '{0} oz'], 'perUnit' => '{0}/oz'], narrow: ['name' => 'Unzen', 'plurals' => ['one' => '{0} oz', 'other' => '{0} oz'], 'perUnit' => '{0}/oz']),
    'pound' => new U(name: 'mass-pound', long: ['name' => 'Pfund', 'plurals' => ['one' => '{0} Pfund', 'other' => '{0} Pfund'], 'perUnit' => '{0} pro Pfund'], short: ['name' => 'lb', 'plurals' => ['one' => '{0} lb', 'other' => '{0} lb'], 'perUnit' => '{0}/lb'], narrow: ['name' => 'Pfund', 'plurals' => ['one' => '{0} lb', 'other' => '{0} lb'], 'perUnit' => '{0}/lb']),
    'stone' => new U(name: 'mass-stone', long: ['name' => 'Stones', 'plurals' => ['one' => "{0}\u{A0}Stone", 'other' => "{0}\u{A0}Stones"], 'perUnit' => ''], short: ['name' => 'Stones', 'plurals' => ['one' => '{0} st', 'other' => '{0} st'], 'perUnit' => ''], narrow: ['name' => 'Stones', 'plurals' => ['one' => '{0} st', 'other' => '{0} st'], 'perUnit' => '']),
    'celsius' => new U(name: 'temperature-celsius', long: ['name' => 'Grad Celsius', 'plurals' => ['one' => '{0} Grad Celsius', 'other' => '{0} Grad Celsius'], 'perUnit' => ''], short: ['name' => '°C', 'plurals' => ['one' => '{0} °C', 'other' => '{0} °C'], 'perUnit' => ''], narrow: ['name' => '°C', 'plurals' => ['one' => '{0} °C', 'other' => '{0} °C'], 'perUnit' => '']),
    'fahrenheit' => new U(name: 'temperature-fahrenheit', long: ['name' => 'Grad Fahrenheit', 'plurals' => ['one' => '{0} Grad Fahrenheit', 'other' => '{0} Grad Fahrenheit'], 'perUnit' => ''], short: ['name' => '°F', 'plurals' => ['one' => '{0} °F', 'other' => '{0} °F'], 'perUnit' => ''], narrow: ['name' => '°F', 'plurals' => ['one' => '{0}°F', 'other' => '{0}°F'], 'perUnit' => '']),
    'fluid-ounce' => new U(name: 'volume-fluid-ounce', long: ['name' => 'Flüssigunzen', 'plurals' => ['one' => "{0}\u{A0}Flüssigunze", 'other' => "{0}\u{A0}Flüssigunzen"], 'perUnit' => ''], short: ['name' => 'fl oz', 'plurals' => ['one' => '{0} fl oz', 'other' => '{0} fl oz'], 'perUnit' => ''], narrow: ['name' => 'fl oz', 'plurals' => ['one' => '{0} fl oz', 'other' => '{0} fl oz'], 'perUnit' => '']),
    'gallon' => new U(name: 'volume-gallon', long: ['name' => 'Gallone', 'plurals' => ['one' => "{0}\u{A0}Gallone", 'other' => "{0}\u{A0}Gallonen"], 'perUnit' => '{0} pro Gallone'], short: ['name' => 'gal', 'plurals' => ['one' => '{0} gal', 'other' => '{0} gal'], 'perUnit' => '{0}/gal'], narrow: ['name' => 'gal', 'plurals' => ['one' => '{0} gal', 'other' => '{0} gal'], 'perUnit' => '{0}/gal']),
    'liter' => new U(name: 'volume-liter', long: ['name' => 'Liter', 'plurals' => ['one' => '{0} Liter', 'other' => '{0} Liter'], 'perUnit' => '{0} pro Liter'], short: ['name' => 'Liter', 'plurals' => ['one' => '{0} l', 'other' => '{0} l'], 'perUnit' => '{0}/l'], narrow: ['name' => 'l', 'plurals' => ['one' => '{0} l', 'other' => '{0} l'], 'perUnit' => '{0}/l']),
    'milliliter' => new U(name: 'volume-milliliter', long: ['name' => 'Milliliter', 'plurals' => ['one' => "{0}\u{A0}Milliliter", 'other' => "{0}\u{A0}Milliliter"], 'perUnit' => ''], short: ['name' => 'ml', 'plurals' => ['one' => "{0}\u{A0}ml", 'other' => "{0}\u{A0}ml"], 'perUnit' => ''], narrow: ['name' => 'ml', 'plurals' => ['one' => "{0}\u{A0}ml", 'other' => "{0}\u{A0}ml"], 'perUnit' => '']),
];
