<?php

use Major\Fluent\Formatters\Number\Locale\Unit as U;

return [
    'acre' => new U('{0} acre', '{0} acre', '{0} ac'),
    'bit' => new U('{0} bit', '{0} bit', '{0}bit'),
    'byte' => new U('{0} byte', '{0} byte', '{0}B'),
    'celsius' => new U(['one' => '{0} grad celsius', 'other' => '{0} grader celsius'], '{0} °C', '{0}°'),
    'centimeter' => new U('{0} centimeter', '{0} cm', '{0}cm'),
    'day' => new U('{0} døgn', '{0} d', '{0}d'),
    'degree' => new U(['one' => '{0} grad', 'other' => '{0} grader'], '{0}°', '{0}°'),
    'fahrenheit' => new U(['one' => '{0} grad fahrenheit', 'other' => '{0} grader fahrenheit'], '{0} °F', '{0}°F'),
    'fluid-ounce' => new U(['one' => '{0} væskeunse', 'other' => '{0} væskeunser'], '{0} fl oz', '{0} fl oz'),
    'foot' => new U('{0} fot', '{0} fot', '{0}ft'),
    'gallon' => new U('{0} gallon', '{0} gal', '{0} gal'),
    'gigabit' => new U('{0} gigabit', '{0} Gb', '{0}Gb'),
    'gigabyte' => new U('{0} gigabyte', '{0} GB', '{0}GB'),
    'gram' => new U('{0} gram', '{0} g', '{0}g'),
    'hectare' => new U('{0} hektar', '{0} ha', '{0}ha'),
    'hour' => new U(['one' => '{0} time', 'other' => '{0} timar'], '{0} t', '{0}t'),
    'inch' => new U(['one' => '{0} tomme', 'other' => '{0} tommar'], ['one' => '{0} tomme', 'other' => '{0} tommar'], '{0}″'),
    'kilobit' => new U('{0} kilobit', '{0} kb', '{0}kb'),
    'kilobyte' => new U('{0} kilobyte', '{0} kB', '{0}kB'),
    'kilogram' => new U('{0} kilogram', '{0} kg', '{0}kg'),
    'kilometer' => new U('{0} kilometer', '{0} km', '{0}km'),
    'liter' => new U('{0} liter', '{0} l', '{0}l'),
    'megabit' => new U('{0} megabit', '{0} Mb', '{0}Mb'),
    'megabyte' => new U('{0} megabyte', '{0} MB', '{0}MB'),
    'meter' => new U('{0} meter', '{0} m', '{0}m'),
    'microsecond' => new U(['one' => '{0} mikrosekund', 'other' => "{0}\u{A0}mikrosekund"], '{0} μs', '{0}μs'),
    'mile' => new U(['one' => '{0} engelsk mil', 'other' => '{0} engelske mil'], '{0} mi', '{0}mi'),
    'mile-scandinavian' => new U('{0} mil', '{0} mil', '{0}mil'),
    'milliliter' => new U('{0} milliliter', '{0} ml', ['one' => '{0} ml', 'other' => '{0}ml']),
    'millimeter' => new U('{0} millimeter', '{0} mm', '{0}mm'),
    'millisecond' => new U('{0} millisekund', '{0} ms', '{0}ms'),
    'minute' => new U('{0} minutt', '{0} min', '{0}m'),
    'month' => new U(['one' => '{0} månad', 'other' => '{0} månadar'], '{0} md.', '{0}m'),
    'nanosecond' => new U('{0} nanosekund', '{0} ns', '{0}ns'),
    'ounce' => new U(['one' => '{0} unse', 'other' => '{0} unser'], ['one' => '{0} unse', 'other' => '{0} unser'], ['one' => '{0} unse', 'other' => '{0} unser']),
    'percent' => new U('{0} prosent', '{0} %', '{0} %'),
    'petabyte' => new U('{0} petabyte', '{0} PB', '{0}PB'),
    'pound' => new U('{0} pund', '{0} pund', '{0} pund'),
    'second' => new U('{0} sekund', '{0} s', '{0}s'),
    'stone' => new U('{0} stone', '{0} st', '{0} st'),
    'terabit' => new U('{0} terabit', '{0} Tb', '{0}Tb'),
    'terabyte' => new U('{0} terabyte', '{0} TB', '{0}TB'),
    'week' => new U(['one' => '{0} veke', 'other' => '{0} veker'], '{0} v', '{0}v'),
    'yard' => new U(['one' => '{0} engelsk yard', 'other' => '{0} engelske yard'], '{0} yard', '{0}yd'),
    'year' => new U('{0} år', '{0} år', '{0}å'),
];
