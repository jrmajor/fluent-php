<?php

use Major\Fluent\Formatters\Number\Locale\Unit as U;

return [
    'acre' => new U(['one' => '{0} Acre', 'other' => '{0} Acres'], ['one' => '{0} ac', 'other' => '{0} ac'], ['one' => '{0} ac', 'other' => '{0} ac']),
    'bit' => new U(['one' => "{0}\u{A0}Bit", 'other' => '{0} Bit'], ['one' => "{0}\u{A0}Bit", 'other' => '{0} Bit'], ['one' => '{0} b', 'other' => '{0} b']),
    'byte' => new U(['one' => "{0}\u{A0}Byte", 'other' => '{0} Byte'], ['one' => "{0}\u{A0}Byte", 'other' => '{0} Byte'], ['one' => '{0} B', 'other' => '{0} B']),
    'celsius' => new U(['one' => '{0} Grad Celsius', 'other' => '{0} Grad Celsius'], ['one' => '{0} °C', 'other' => '{0} °C'], ['one' => '{0} °C', 'other' => '{0} °C']),
    'centimeter' => new U(['one' => '{0} Zentimeter', 'other' => '{0} Zentimeter'], ['one' => '{0} cm', 'other' => '{0} cm'], ['one' => '{0} cm', 'other' => '{0} cm']),
    'day' => new U(['one' => '{0} Tag', 'other' => '{0} Tage'], ['one' => '{0} Tg.', 'other' => '{0} Tg.'], ['one' => '{0} T', 'other' => '{0} T']),
    'degree' => new U(['one' => '{0} Grad', 'other' => '{0} Grad'], ['one' => '{0}°', 'other' => '{0}°'], ['one' => '{0}°', 'other' => '{0}°']),
    'fahrenheit' => new U(['one' => '{0} Grad Fahrenheit', 'other' => '{0} Grad Fahrenheit'], ['one' => '{0} °F', 'other' => '{0} °F'], ['one' => '{0}°F', 'other' => '{0}°F']),
    'fluid-ounce' => new U(['one' => "{0}\u{A0}Flüssigunze", 'other' => "{0}\u{A0}Flüssigunzen"], ['one' => '{0} fl oz', 'other' => '{0} fl oz'], ['one' => '{0} fl oz', 'other' => '{0} fl oz']),
    'foot' => new U(['one' => '{0} Fuß', 'other' => '{0} Fuß'], ['one' => '{0} ft', 'other' => '{0} ft'], ['one' => '{0} ft', 'other' => '{0} ft']),
    'gallon' => new U(['one' => "{0}\u{A0}Gallone", 'other' => "{0}\u{A0}Gallonen"], ['one' => '{0} gal', 'other' => '{0} gal'], ['one' => '{0} gal', 'other' => '{0} gal']),
    'gigabit' => new U(['one' => "{0}\u{A0}Gigabit", 'other' => '{0} Gigabit'], ['one' => "{0}\u{A0}Gb", 'other' => "{0}\u{A0}Gb"], ['one' => "{0}\u{A0}Gb", 'other' => "{0}\u{A0}Gb"]),
    'gigabyte' => new U(['one' => "{0}\u{A0}Gigabyte", 'other' => '{0} Gigabyte'], ['one' => "{0}\u{A0}GB", 'other' => "{0}\u{A0}GB"], ['one' => "{0}\u{A0}GB", 'other' => "{0}\u{A0}GB"]),
    'gram' => new U(['one' => '{0} Gramm', 'other' => '{0} Gramm'], ['one' => '{0} g', 'other' => '{0} g'], ['one' => '{0} g', 'other' => '{0} g']),
    'hectare' => new U(['one' => '{0} Hektar', 'other' => '{0} Hektar'], ['one' => '{0} ha', 'other' => '{0} ha'], ['one' => '{0} ha', 'other' => '{0} ha']),
    'hour' => new U(['one' => '{0} Stunde', 'other' => '{0} Stunden'], ['one' => '{0} Std.', 'other' => '{0} Std.'], ['one' => '{0} Std.', 'other' => '{0} Std.']),
    'inch' => new U(['one' => '{0} Zoll', 'other' => '{0} Zoll'], ['one' => "{0}\u{A0}in", 'other' => '{0} in'], ['one' => "{0}\u{A0}in", 'other' => '{0} in']),
    'kilobit' => new U(['one' => "{0}\u{A0}Kilobit", 'other' => '{0} Kilobit'], ['one' => '{0} kb', 'other' => '{0} kb'], ['one' => '{0} kb', 'other' => '{0} kb']),
    'kilobyte' => new U(['one' => "{0}\u{A0}Kilobyte", 'other' => '{0} Kilobyte'], ['one' => '{0} kB', 'other' => '{0} kB'], ['one' => '{0} kB', 'other' => '{0} kB']),
    'kilogram' => new U(['one' => '{0} Kilogramm', 'other' => '{0} Kilogramm'], ['one' => '{0} kg', 'other' => '{0} kg'], ['one' => '{0} kg', 'other' => '{0} kg']),
    'kilometer' => new U(['one' => '{0} Kilometer', 'other' => '{0} Kilometer'], ['one' => '{0} km', 'other' => '{0} km'], ['one' => '{0} km', 'other' => '{0} km']),
    'liter' => new U(['one' => '{0} Liter', 'other' => '{0} Liter'], ['one' => '{0} l', 'other' => '{0} l'], ['one' => '{0} l', 'other' => '{0} l']),
    'megabit' => new U(['one' => "{0}\u{A0}Megabit", 'other' => '{0} Megabit'], ['one' => '{0} Mb', 'other' => '{0} Mb'], ['one' => '{0} Mb', 'other' => '{0} Mb']),
    'megabyte' => new U(['one' => "{0}\u{A0}Megabyte", 'other' => '{0} Megabyte'], ['one' => '{0} MB', 'other' => '{0} MB'], ['one' => '{0} MB', 'other' => '{0} MB']),
    'meter' => new U(['one' => '{0} Meter', 'other' => '{0} Meter'], ['one' => '{0} m', 'other' => '{0} m'], ['one' => '{0} m', 'other' => '{0} m']),
    'microsecond' => new U(['one' => '{0} Mikrosekunde', 'other' => '{0} Mikrosekunden'], ['one' => '{0} μs', 'other' => '{0} μs'], ['one' => '{0} μs', 'other' => '{0} μs']),
    'mile' => new U(['one' => '{0} Meile', 'other' => '{0} Meilen'], ['one' => '{0} mi', 'other' => '{0} mi'], ['one' => '{0} mi', 'other' => '{0} mi']),
    'mile-scandinavian' => new U(['one' => '{0} skandinavische Meile', 'other' => '{0} skandinavische Meilen'], ['one' => '{0} smi', 'other' => '{0} smi'], ['one' => '{0}smi', 'other' => '{0}smi']),
    'milliliter' => new U(['one' => "{0}\u{A0}Milliliter", 'other' => "{0}\u{A0}Milliliter"], ['one' => "{0}\u{A0}ml", 'other' => "{0}\u{A0}ml"], ['one' => "{0}\u{A0}ml", 'other' => "{0}\u{A0}ml"]),
    'millimeter' => new U(['one' => '{0} Millimeter', 'other' => '{0} Millimeter'], ['one' => '{0} mm', 'other' => '{0} mm'], ['one' => '{0} mm', 'other' => '{0} mm']),
    'millisecond' => new U(['one' => '{0} Millisekunde', 'other' => '{0} Millisekunden'], ['one' => '{0} ms', 'other' => '{0} ms'], ['one' => '{0} ms', 'other' => '{0} ms']),
    'minute' => new U(['one' => '{0} Minute', 'other' => '{0} Minuten'], ['one' => '{0} Min.', 'other' => '{0} Min.'], ['one' => '{0} Min.', 'other' => '{0} Min.']),
    'month' => new U(['one' => '{0} Monat', 'other' => '{0} Monate'], ['one' => '{0} Mon.', 'other' => '{0} Mon.'], ['one' => '{0} M', 'other' => '{0} M']),
    'nanosecond' => new U(['one' => '{0} Nanosekunde', 'other' => '{0} Nanosekunden'], ['one' => '{0} ns', 'other' => '{0} ns'], ['one' => '{0} ns', 'other' => '{0} ns']),
    'ounce' => new U(['one' => '{0} Unze', 'other' => '{0} Unzen'], ['one' => '{0} oz', 'other' => '{0} oz'], ['one' => '{0} oz', 'other' => '{0} oz']),
    'percent' => new U(['one' => '{0} Prozent', 'other' => '{0} Prozent'], ['one' => '{0} %', 'other' => '{0} %'], ['one' => '{0} %', 'other' => '{0} %']),
    'petabyte' => new U(['one' => '{0} Petabyte', 'other' => '{0} Petabyte'], ['one' => '{0} PB', 'other' => '{0} PB'], ['one' => '{0} PB', 'other' => '{0} PB']),
    'pound' => new U(['one' => '{0} Pfund', 'other' => '{0} Pfund'], ['one' => '{0} lb', 'other' => '{0} lb'], ['one' => '{0} lb', 'other' => '{0} lb']),
    'second' => new U(['one' => '{0} Sekunde', 'other' => '{0} Sekunden'], ['one' => '{0} Sek.', 'other' => '{0} Sek.'], ['one' => '{0} Sek.', 'other' => '{0} Sek.']),
    'stone' => new U(['one' => "{0}\u{A0}Stone", 'other' => "{0}\u{A0}Stones"], ['one' => '{0} st', 'other' => '{0} st'], ['one' => '{0} st', 'other' => '{0} st']),
    'terabit' => new U(['one' => "{0}\u{A0}Terabit", 'other' => '{0} Terabit'], ['one' => '{0} Tb', 'other' => '{0} Tb'], ['one' => '{0} Tb', 'other' => '{0} Tb']),
    'terabyte' => new U(['one' => "{0}\u{A0}Terabyte", 'other' => '{0} Terabyte'], ['one' => '{0} TB', 'other' => '{0} TB'], ['one' => '{0} TB', 'other' => '{0} TB']),
    'week' => new U(['one' => '{0} Woche', 'other' => '{0} Wochen'], ['one' => '{0} Wo.', 'other' => '{0} Wo.'], ['one' => '{0} W', 'other' => '{0} W']),
    'yard' => new U(['one' => '{0} Yard', 'other' => '{0} Yards'], ['one' => '{0} yd', 'other' => '{0} yd'], ['one' => '{0} yd', 'other' => '{0} yd']),
    'year' => new U(['one' => '{0} Jahr', 'other' => '{0} Jahre'], ['one' => '{0} J', 'other' => '{0} J'], ['one' => '{0} J', 'other' => '{0} J']),
];
