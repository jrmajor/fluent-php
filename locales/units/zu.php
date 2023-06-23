<?php

use Major\Fluent\Formatters\Number\Locale\Unit as U;

return [
    'acre' => new U('{0} ac', '{0} ac', '{0} ac'),
    'bit' => new U(['one' => '{0} i-bit', 'other' => '{0} ama-bits'], '{0} bit', '{0} bit'),
    'byte' => new U(['one' => '{0} i-byte', 'other' => '{0} ama-bytes'], '{0} byte', '{0} byte'),
    'celsius' => new U('{0}°C', '{0}°C', '{0}°'),
    'centimeter' => new U('{0} cm', '{0} cm', '{0} cm'),
    'day' => new U(['one' => '{0} usuku', 'other' => '{0} izinsuku'], ['one' => '{0} usuku', 'other' => '{0} izinsuku'], ['one' => '{0}', 'other' => '{0} suku']),
    'degree' => new U('{0}°', '{0}°', '{0}°'),
    'fahrenheit' => new U('{0}°F', '{0}°F', '{0}°F'),
    'fluid-ounce' => new U('{0} fl oz', '{0} fl oz', '{0} fl oz'),
    'foot' => new U('{0} ft', '{0} ft', '{0} ft'),
    'gallon' => new U('{0} gal', '{0} gal', '{0} gal'),
    'gigabit' => new U(['one' => '{0} i-gigabit', 'other' => '{0} ama-gigabits'], '{0} Gb', '{0} Gb'),
    'gigabyte' => new U('{0} GB', '{0} GB', '{0} GB'),
    'gram' => new U('{0} g', '{0} g', '{0} g'),
    'hectare' => new U('{0} ha', '{0} ha', '{0} ha'),
    'hour' => new U(['one' => '{0} ihora', 'other' => '{0} amahora'], ['one' => '{0} hora', 'other' => '{0} hr'], '{0} hora'),
    'inch' => new U('{0} in', '{0} in', '{0} in'),
    'kilobit' => new U(['one' => '{0} i-kilobit', 'other' => '{0} ama-kilobits'], '{0} kb', '{0} kb'),
    'kilobyte' => new U('{0} kB', '{0} kB', '{0} kB'),
    'kilogram' => new U('{0} kg', '{0} kg', '{0} kg'),
    'kilometer' => new U('{0} km', '{0} km', '{0} km'),
    'liter' => new U('{0} l', '{0} l', '{0} l'),
    'megabit' => new U(['one' => '{0} i-megabit', 'other' => '{0} megabits'], '{0} Mb', '{0} Mb'),
    'megabyte' => new U('{0} MB', '{0} MB', '{0} MB'),
    'meter' => new U('{0} m', '{0} m', '{0} m'),
    'microsecond' => new U(['one' => '{0} microsecond', 'other' => '{0} microseconds'], '{0} μs', '{0} μs'),
    'mile' => new U('{0} mi', '{0} mi', '{0} mi'),
    'mile-scandinavian' => new U('{0} smi', '{0} smi', '{0} smi'),
    'milliliter' => new U('{0} mL', '{0} mL', '{0} mL'),
    'millimeter' => new U('{0} mm', '{0} mm', '{0} mm'),
    'millisecond' => new U('{0} ms', '{0} ms', '{0} ms'),
    'minute' => new U(['one' => '{0} iminithi', 'other' => '{0} amaminithi'], '{0} iminithi', '{0} umzuzu'),
    'month' => new U(['one' => '{0} inyanga', 'other' => '{0} izinyanga'], ['one' => '{0} nyanga', 'other' => '{0} izinyanga'], '{0} m'),
    'nanosecond' => new U('{0} ns', '{0} ns', '{0} ns'),
    'ounce' => new U('{0} oz', '{0} oz', '{0} oz'),
    'percent' => new U('{0}%', '{0}%', '{0}%'),
    'petabyte' => new U('{0} PB', '{0} PB', '{0} PB'),
    'pound' => new U('{0} lb', '{0} lb', '{0} lb'),
    'second' => new U(['one' => '{0} isekhondi', 'other' => '{0} amasekhondi'], ['one' => '{0} sekhondi', 'other' => '{0} sec'], '{0} s'),
    'stone' => new U('{0} st', '{0} st', '{0} st'),
    'terabit' => new U(['one' => '{0} i-terabit', 'other' => '{0} ama-terabits'], '{0} Tb', '{0} Tb'),
    'terabyte' => new U('{0} TB', '{0} TB', '{0} TB'),
    'week' => new U(['one' => '{0} iviki', 'other' => '{0} amaviki'], ['one' => '{0} viki', 'other' => '{0} amaviki'], '{0} w'),
    'yard' => new U('{0} yd', '{0} yd', '{0} yd'),
    'year' => new U('{0} y', ['one' => '{0} y', 'other' => '{0} yrs'], '{0} y'),
];
