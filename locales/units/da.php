<?php

use Major\Fluent\Formatters\Number\Locale\Unit as U;

return [
    'acre' => new U(['one' => '{0} acre', 'other' => '{0} acres'], ['other' => '{0} ac'], ['other' => '{0}ac']),
    'bit' => new U(['other' => '{0} bit'], ['other' => '{0} bit'], ['other' => '{0} bit']),
    'byte' => new U(['one' => '{0} byte', 'other' => '{0} bytes'], ['other' => '{0} B'], ['other' => '{0} B']),
    'celsius' => new U(['one' => '{0} grad celsius', 'other' => '{0} grader celsius'], ['other' => '{0}°C'], ['other' => '{0}°C']),
    'centimeter' => new U(['other' => '{0} centimeter'], ['other' => '{0} cm'], ['other' => '{0} cm']),
    'day' => new U(['one' => '{0} dag', 'other' => '{0} dage'], ['one' => '{0} dag', 'other' => '{0} dage'], ['other' => '{0} d']),
    'degree' => new U(['one' => '{0} grad', 'other' => '{0} grader'], ['other' => '{0}°'], ['other' => '{0}°']),
    'fahrenheit' => new U(['one' => '{0} grad fahrenheit', 'other' => '{0} grader fahrenheit'], ['other' => '{0}°F'], ['other' => '{0}°F']),
    'fluid-ounce' => new U(['one' => '{0} engelsk fluid ounce', 'other' => '{0} engelske fluid ounces'], ['other' => '{0} fl oz'], ['other' => '{0} fl oz']),
    'foot' => new U(['other' => '{0} fod'], ['other' => '{0} fod'], ['other' => '{0} fod']),
    'gallon' => new U(['one' => '{0} gallon', 'other' => '{0} gallons'], ['other' => '{0} gal'], ['other' => '{0} gal']),
    'gigabit' => new U(['other' => '{0} gigabit'], ['other' => '{0} Gbit'], ['other' => '{0} Gbit']),
    'gigabyte' => new U(['one' => '{0} gigabyte', 'other' => '{0} gigabytes'], ['other' => '{0} GB'], ['other' => '{0} GB']),
    'gram' => new U(['other' => '{0} gram'], ['other' => '{0} g'], ['other' => '{0} g']),
    'hectare' => new U(['other' => '{0} hektar'], ['other' => '{0} ha'], ['other' => '{0}ha']),
    'hour' => new U(['one' => '{0} time', 'other' => '{0} timer'], ['other' => '{0} t.'], ['other' => '{0} t']),
    'inch' => new U(['one' => '{0} tomme', 'other' => '{0} tommer'], ['one' => '{0} tomme', 'other' => '{0} tommer'], ['other' => '{0}"']),
    'kilobit' => new U(['other' => '{0} kilobit'], ['other' => '{0} kbit'], ['other' => '{0} kb']),
    'kilobyte' => new U(['one' => '{0} kilobyte', 'other' => '{0} kilobytes'], ['other' => '{0} kB'], ['other' => '{0} kB']),
    'kilogram' => new U(['other' => '{0} kilogram'], ['other' => '{0} kg'], ['other' => '{0} kg']),
    'kilometer' => new U(['other' => '{0} kilometer'], ['other' => '{0} km'], ['other' => '{0} km']),
    'liter' => new U(['other' => '{0} liter'], ['other' => '{0} l'], ['other' => '{0} l']),
    'megabit' => new U(['other' => '{0} megabit'], ['other' => '{0} Mbit'], ['other' => '{0} Mb']),
    'megabyte' => new U(['one' => '{0} megabyte', 'other' => '{0} megabytes'], ['other' => '{0} MB'], ['other' => '{0} MB']),
    'meter' => new U(['other' => '{0} meter'], ['other' => '{0} m'], ['other' => '{0} m']),
    'microsecond' => new U(['one' => '{0} mikrosekund', 'other' => '{0} mikrosekunder'], ['other' => '{0} μs'], ['other' => '{0}μs']),
    'mile' => new U(['one' => '{0} engelsk mil', 'other' => '{0} engelske mil'], ['other' => '{0} mil'], ['other' => '{0} mil']),
    'mile-scandinavian' => new U(['one' => '{0} svensk mil', 'other' => '{0} svenske mil'], ['other' => '{0} smi'], ['other' => '{0}sv. mil']),
    'milliliter' => new U(['other' => '{0} milliliter'], ['other' => '{0} ml'], ['other' => '{0} ml']),
    'millimeter' => new U(['other' => '{0} millimeter'], ['other' => '{0} mm'], ['other' => '{0} mm']),
    'millisecond' => new U(['one' => '{0} millisekund', 'other' => '{0} millisekunder'], ['other' => '{0} ms'], ['other' => '{0} ms']),
    'minute' => new U(['one' => '{0} minut', 'other' => '{0} minutter'], ['other' => '{0} min.'], ['other' => '{0} m']),
    'month' => new U(['one' => '{0} måned', 'other' => '{0} måneder'], ['one' => '{0} md.', 'other' => '{0} mdr.'], ['other' => '{0} m']),
    'nanosecond' => new U(['one' => '{0} nanosekund', 'other' => '{0} nanosekunder'], ['other' => '{0} ns'], ['other' => '{0}ns']),
    'ounce' => new U(['one' => '{0} ounce', 'other' => '{0} ounces'], ['other' => '{0} oz'], ['other' => '{0} oz']),
    'percent' => new U(['other' => '{0} procent'], ['other' => '{0} pct.'], ['other' => '{0} %']),
    'petabyte' => new U(['one' => '{0} petabyte', 'other' => '{0} petabytes'], ['other' => '{0} PB'], ['other' => '{0} PB']),
    'pound' => new U(['other' => '{0} pund'], ['other' => '{0} lb'], ['other' => '{0} pund']),
    'second' => new U(['one' => '{0} sekund', 'other' => '{0} sekunder'], ['other' => '{0} sek.'], ['other' => '{0} s']),
    'stone' => new U(['other' => '{0} stone'], ['other' => '{0} st'], ['other' => '{0} st']),
    'terabit' => new U(['other' => '{0} terabit'], ['other' => '{0} Tbit'], ['other' => '{0} Tb']),
    'terabyte' => new U(['one' => '{0} terabyte', 'other' => '{0} terabytes'], ['other' => '{0} TB'], ['other' => '{0} TB']),
    'week' => new U(['one' => '{0} uge', 'other' => '{0} uger'], ['one' => '{0} uge', 'other' => '{0} uger'], ['other' => '{0} u']),
    'yard' => new U(['one' => '{0} engelsk yard', 'other' => '{0} engelske yard'], ['other' => '{0} yard'], ['other' => '{0} yard']),
    'year' => new U(['other' => '{0} år'], ['other' => '{0} år'], ['other' => '{0} år']),
];
