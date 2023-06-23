<?php

use Major\Fluent\Formatters\Number\Locale\Unit as U;

return [
    'acre' => new U(['one' => '{0} Acre', 'other' => '{0} Acres'], '{0} ac', '{0} ac'),
    'bit' => new U(['one' => "{0}\u{A0}Bit", 'other' => '{0} Bit'], ['one' => "{0}\u{A0}Bit", 'other' => '{0} Bit'], '{0} b'),
    'byte' => new U(['one' => "{0}\u{A0}Byte", 'other' => '{0} Byte'], ['one' => "{0}\u{A0}Byte", 'other' => '{0} Byte'], '{0} B'),
    'celsius' => new U('{0} Grad Celsius', '{0} °C', '{0} °C'),
    'centimeter' => new U('{0} Zentimeter', '{0} cm', '{0} cm'),
    'day' => new U(['one' => '{0} Tag', 'other' => '{0} Tage'], '{0} Tg.', '{0} T'),
    'degree' => new U('{0} Grad', '{0}°', '{0}°'),
    'fahrenheit' => new U('{0} Grad Fahrenheit', '{0} °F', '{0}°F'),
    'fluid-ounce' => new U(['one' => "{0}\u{A0}Flüssigunze", 'other' => "{0}\u{A0}Flüssigunzen"], '{0} fl oz', '{0} fl oz'),
    'foot' => new U('{0} Fuß', '{0} ft', '{0} ft'),
    'gallon' => new U(['one' => "{0}\u{A0}Gallone", 'other' => "{0}\u{A0}Gallonen"], '{0} gal', '{0} gal'),
    'gigabit' => new U(['one' => "{0}\u{A0}Gigabit", 'other' => '{0} Gigabit'], "{0}\u{A0}Gb", "{0}\u{A0}Gb"),
    'gigabyte' => new U(['one' => "{0}\u{A0}Gigabyte", 'other' => '{0} Gigabyte'], "{0}\u{A0}GB", "{0}\u{A0}GB"),
    'gram' => new U('{0} Gramm', '{0} g', '{0} g'),
    'hectare' => new U('{0} Hektar', '{0} ha', '{0} ha'),
    'hour' => new U(['one' => '{0} Stunde', 'other' => '{0} Stunden'], '{0} Std.', '{0} Std.'),
    'inch' => new U('{0} Zoll', ['one' => "{0}\u{A0}in", 'other' => '{0} in'], ['one' => "{0}\u{A0}in", 'other' => '{0} in']),
    'kilobit' => new U(['one' => "{0}\u{A0}Kilobit", 'other' => '{0} Kilobit'], '{0} kb', '{0} kb'),
    'kilobyte' => new U(['one' => "{0}\u{A0}Kilobyte", 'other' => '{0} Kilobyte'], '{0} kB', '{0} kB'),
    'kilogram' => new U('{0} Kilogramm', '{0} kg', '{0} kg'),
    'kilometer' => new U('{0} Kilometer', '{0} km', '{0} km'),
    'liter' => new U('{0} Liter', '{0} l', '{0} l'),
    'megabit' => new U(['one' => "{0}\u{A0}Megabit", 'other' => '{0} Megabit'], '{0} Mb', '{0} Mb'),
    'megabyte' => new U(['one' => "{0}\u{A0}Megabyte", 'other' => '{0} Megabyte'], '{0} MB', '{0} MB'),
    'meter' => new U('{0} Meter', '{0} m', '{0} m'),
    'microsecond' => new U(['one' => '{0} Mikrosekunde', 'other' => '{0} Mikrosekunden'], '{0} μs', '{0} μs'),
    'mile' => new U(['one' => '{0} Meile', 'other' => '{0} Meilen'], '{0} mi', '{0} mi'),
    'mile-scandinavian' => new U(['one' => '{0} skandinavische Meile', 'other' => '{0} skandinavische Meilen'], '{0} smi', '{0}smi'),
    'milliliter' => new U("{0}\u{A0}Milliliter", "{0}\u{A0}ml", "{0}\u{A0}ml"),
    'millimeter' => new U('{0} Millimeter', '{0} mm', '{0} mm'),
    'millisecond' => new U(['one' => '{0} Millisekunde', 'other' => '{0} Millisekunden'], '{0} ms', '{0} ms'),
    'minute' => new U(['one' => '{0} Minute', 'other' => '{0} Minuten'], '{0} Min.', '{0} Min.'),
    'month' => new U(['one' => '{0} Monat', 'other' => '{0} Monate'], '{0} Mon.', '{0} M'),
    'nanosecond' => new U(['one' => '{0} Nanosekunde', 'other' => '{0} Nanosekunden'], '{0} ns', '{0} ns'),
    'ounce' => new U(['one' => '{0} Unze', 'other' => '{0} Unzen'], '{0} oz', '{0} oz'),
    'percent' => new U('{0} Prozent', '{0} %', '{0} %'),
    'petabyte' => new U('{0} Petabyte', '{0} PB', '{0} PB'),
    'pound' => new U('{0} Pfund', '{0} lb', '{0} lb'),
    'second' => new U(['one' => '{0} Sekunde', 'other' => '{0} Sekunden'], '{0} Sek.', '{0} Sek.'),
    'stone' => new U(['one' => "{0}\u{A0}Stone", 'other' => "{0}\u{A0}Stones"], '{0} st', '{0} st'),
    'terabit' => new U(['one' => "{0}\u{A0}Terabit", 'other' => '{0} Terabit'], '{0} Tb', '{0} Tb'),
    'terabyte' => new U(['one' => "{0}\u{A0}Terabyte", 'other' => '{0} Terabyte'], '{0} TB', '{0} TB'),
    'week' => new U(['one' => '{0} Woche', 'other' => '{0} Wochen'], '{0} Wo.', '{0} W'),
    'yard' => new U(['one' => '{0} Yard', 'other' => '{0} Yards'], '{0} yd', '{0} yd'),
    'year' => new U(['one' => '{0} Jahr', 'other' => '{0} Jahre'], '{0} J', '{0} J'),
];
