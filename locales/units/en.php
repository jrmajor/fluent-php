<?php

use Major\Fluent\Formatters\Number\Locale\Unit as U;

return [
    'acre' => new U(['one' => '{0} acre', 'other' => '{0} acres'], '{0} ac', '{0}ac'),
    'bit' => new U(['one' => '{0} bit', 'other' => '{0} bits'], '{0} bit', '{0}bit'),
    'byte' => new U(['one' => '{0} byte', 'other' => '{0} bytes'], '{0} byte', '{0}B'),
    'celsius' => new U(['one' => '{0} degree Celsius', 'other' => '{0} degrees Celsius'], '{0}°C', '{0}°C'),
    'centimeter' => new U(['one' => '{0} centimeter', 'other' => '{0} centimeters'], '{0} cm', '{0}cm'),
    'day' => new U(['one' => '{0} day', 'other' => '{0} days'], ['one' => '{0} day', 'other' => '{0} days'], '{0}d'),
    'degree' => new U(['one' => '{0} degree', 'other' => '{0} degrees'], '{0} deg', '{0}°'),
    'fahrenheit' => new U(['one' => '{0} degree Fahrenheit', 'other' => '{0} degrees Fahrenheit'], '{0}°F', '{0}°'),
    'fluid-ounce' => new U(['one' => '{0} fluid ounce', 'other' => '{0} fluid ounces'], '{0} fl oz', '{0}fl oz'),
    'foot' => new U(['one' => '{0} foot', 'other' => '{0} feet'], '{0} ft', '{0}′'),
    'gallon' => new U(['one' => '{0} gallon', 'other' => '{0} gallons'], '{0} gal', '{0}gal'),
    'gigabit' => new U(['one' => '{0} gigabit', 'other' => '{0} gigabits'], '{0} Gb', '{0}Gb'),
    'gigabyte' => new U(['one' => '{0} gigabyte', 'other' => '{0} gigabytes'], '{0} GB', '{0}GB'),
    'gram' => new U(['one' => '{0} gram', 'other' => '{0} grams'], '{0} g', '{0}g'),
    'hectare' => new U(['one' => '{0} hectare', 'other' => '{0} hectares'], '{0} ha', '{0}ha'),
    'hour' => new U(['one' => '{0} hour', 'other' => '{0} hours'], '{0} hr', '{0}h'),
    'inch' => new U(['one' => '{0} inch', 'other' => '{0} inches'], '{0} in', '{0}″'),
    'kilobit' => new U(['one' => '{0} kilobit', 'other' => '{0} kilobits'], '{0} kb', '{0}kb'),
    'kilobyte' => new U(['one' => '{0} kilobyte', 'other' => '{0} kilobytes'], '{0} kB', '{0}kB'),
    'kilogram' => new U(['one' => '{0} kilogram', 'other' => '{0} kilograms'], '{0} kg', '{0}kg'),
    'kilometer' => new U(['one' => '{0} kilometer', 'other' => '{0} kilometers'], '{0} km', '{0}km'),
    'liter' => new U(['one' => '{0} liter', 'other' => '{0} liters'], '{0} L', '{0}L'),
    'megabit' => new U(['one' => '{0} megabit', 'other' => '{0} megabits'], '{0} Mb', '{0}Mb'),
    'megabyte' => new U(['one' => '{0} megabyte', 'other' => '{0} megabytes'], '{0} MB', '{0}MB'),
    'meter' => new U(['one' => '{0} meter', 'other' => '{0} meters'], '{0} m', '{0}m'),
    'microsecond' => new U(['one' => '{0} microsecond', 'other' => '{0} microseconds'], '{0} μs', '{0}μs'),
    'mile' => new U(['one' => '{0} mile', 'other' => '{0} miles'], '{0} mi', '{0}mi'),
    'mile-scandinavian' => new U(['one' => '{0} mile-scandinavian', 'other' => '{0} miles-scandinavian'], '{0} smi', '{0}smi'),
    'milliliter' => new U(['one' => '{0} milliliter', 'other' => '{0} milliliters'], '{0} mL', '{0}mL'),
    'millimeter' => new U(['one' => '{0} millimeter', 'other' => '{0} millimeters'], '{0} mm', '{0}mm'),
    'millisecond' => new U(['one' => '{0} millisecond', 'other' => '{0} milliseconds'], '{0} ms', '{0}ms'),
    'minute' => new U(['one' => '{0} minute', 'other' => '{0} minutes'], '{0} min', '{0}m'),
    'month' => new U(['one' => '{0} month', 'other' => '{0} months'], ['one' => '{0} mth', 'other' => '{0} mths'], '{0}m'),
    'nanosecond' => new U(['one' => '{0} nanosecond', 'other' => '{0} nanoseconds'], '{0} ns', '{0}ns'),
    'ounce' => new U(['one' => '{0} ounce', 'other' => '{0} ounces'], '{0} oz', '{0}oz'),
    'percent' => new U('{0} percent', '{0}%', '{0}%'),
    'petabyte' => new U(['one' => '{0} petabyte', 'other' => '{0} petabytes'], '{0} PB', '{0}PB'),
    'pound' => new U(['one' => '{0} pound', 'other' => '{0} pounds'], '{0} lb', '{0}#'),
    'second' => new U(['one' => '{0} second', 'other' => '{0} seconds'], '{0} sec', '{0}s'),
    'stone' => new U(['one' => '{0} stone', 'other' => '{0} stones'], '{0} st', '{0}st'),
    'terabit' => new U(['one' => '{0} terabit', 'other' => '{0} terabits'], '{0} Tb', '{0}Tb'),
    'terabyte' => new U(['one' => '{0} terabyte', 'other' => '{0} terabytes'], '{0} TB', '{0}TB'),
    'week' => new U(['one' => '{0} week', 'other' => '{0} weeks'], ['one' => '{0} wk', 'other' => '{0} wks'], '{0}w'),
    'yard' => new U(['one' => '{0} yard', 'other' => '{0} yards'], '{0} yd', '{0}yd'),
    'year' => new U(['one' => '{0} year', 'other' => '{0} years'], ['one' => '{0} yr', 'other' => '{0} yrs'], '{0}y'),
];
