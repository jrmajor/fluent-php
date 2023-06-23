<?php

use Major\Fluent\Formatters\Number\Locale\Unit as U;

return [
    'acre' => new U(['other' => '{0} acre'], ['other' => '{0} ac'], ['other' => '{0} ac']),
    'bit' => new U(['other' => '{0} bit'], ['other' => '{0} bit'], ['one' => '{0}bit', 'other' => '{0} bit']),
    'byte' => new U(['other' => '{0} byte'], ['other' => '{0} B'], ['one' => '{0}B', 'other' => '{0} B']),
    'celsius' => new U(['one' => '{0} grad celsius', 'other' => '{0} grader celsius'], ['other' => '{0} °C'], ['other' => '{0} °C']),
    'centimeter' => new U(['other' => '{0} centimeter'], ['other' => '{0} cm'], ['other' => '{0}cm']),
    'day' => new U(['other' => '{0} døgn'], ['other' => '{0} d'], ['other' => '{0}d']),
    'degree' => new U(['one' => '{0} grad', 'other' => '{0} grader'], ['other' => '{0}°'], ['other' => '{0}°']),
    'fahrenheit' => new U(['one' => '{0} grad fahrenheit', 'other' => '{0} grader fahrenheit'], ['other' => '{0} °F'], ['other' => '{0}°F']),
    'fluid-ounce' => new U(['one' => '{0} væskeunse', 'other' => '{0} væskeunser'], ['other' => '{0} fl oz'], ['other' => '{0} fl oz']),
    'foot' => new U(['other' => '{0} fot'], ['other' => '{0} fot'], ['other' => '{0}ft']),
    'gallon' => new U(['other' => '{0} gallon'], ['other' => '{0} gal'], ['other' => '{0} gal']),
    'gigabit' => new U(['other' => '{0} gigabit'], ['other' => '{0} Gb'], ['one' => '{0}Gb', 'other' => '{0} Gb']),
    'gigabyte' => new U(['other' => '{0} gigabyte'], ['other' => '{0} GB'], ['one' => '{0}GB', 'other' => '{0} GB']),
    'gram' => new U(['other' => '{0} gram'], ['other' => '{0} g'], ['other' => '{0}g']),
    'hectare' => new U(['other' => '{0} hektar'], ['other' => '{0} ha'], ['other' => '{0}ha']),
    'hour' => new U(['one' => '{0} time', 'other' => '{0} timer'], ['other' => '{0} t'], ['other' => '{0}t']),
    'inch' => new U(['one' => '{0} tomme', 'other' => '{0} tommer'], ['one' => '{0} tomme', 'other' => '{0} tommer'], ['other' => '{0}in']),
    'kilobit' => new U(['other' => '{0} kilobit'], ['other' => '{0} kb'], ['one' => '{0}kb', 'other' => '{0} kb']),
    'kilobyte' => new U(['other' => '{0} kilobyte'], ['other' => '{0} kB'], ['one' => '{0}kB', 'other' => '{0} kB']),
    'kilogram' => new U(['other' => '{0} kilogram'], ['other' => '{0} kg'], ['other' => '{0}kg']),
    'kilometer' => new U(['other' => '{0} kilometer'], ['other' => '{0} km'], ['other' => '{0}km']),
    'liter' => new U(['other' => '{0} liter'], ['other' => '{0} l'], ['other' => '{0}l']),
    'megabit' => new U(['other' => '{0} megabit'], ['other' => '{0} Mb'], ['one' => '{0}Mb', 'other' => '{0} Mb']),
    'megabyte' => new U(['other' => '{0} megabyte'], ['other' => '{0} MB'], ['one' => '{0}MB', 'other' => '{0} MB']),
    'meter' => new U(['other' => '{0} meter'], ['other' => '{0} m'], ['other' => '{0}m']),
    'microsecond' => new U(['one' => '{0} mikrosekund', 'other' => '{0} mikrosekunder'], ['other' => '{0} μs'], ['other' => '{0}μs']),
    'mile' => new U(['one' => '{0} mile', 'other' => '{0} miles'], ['one' => '{0} mile', 'other' => '{0} miles'], ['other' => '{0}mi']),
    'mile-scandinavian' => new U(['other' => '{0} mil'], ['other' => '{0} mil'], ['other' => '{0}mil']),
    'milliliter' => new U(['other' => '{0} milliliter'], ['other' => '{0} ml'], ['one' => '{0}ml', 'other' => '{0} ml']),
    'millimeter' => new U(['other' => '{0} millimeter'], ['other' => '{0} mm'], ['other' => '{0}mm']),
    'millisecond' => new U(['one' => '{0} millisekund', 'other' => '{0} millisekunder'], ['other' => '{0} ms'], ['other' => '{0}ms']),
    'minute' => new U(['one' => '{0} minutt', 'other' => '{0} minutter'], ['other' => '{0} min'], ['other' => '{0}m']),
    'month' => new U(['one' => '{0} måned', 'other' => '{0} måneder'], ['other' => '{0} md.'], ['other' => '{0} m']),
    'nanosecond' => new U(['one' => '{0} nanosekund', 'other' => '{0} nanosekunder'], ['other' => '{0} ns'], ['other' => '{0}ns']),
    'ounce' => new U(['one' => '{0} unse', 'other' => '{0} unser'], ['one' => '{0} unse', 'other' => '{0} unser'], ['other' => '{0}oz']),
    'percent' => new U(['other' => '{0} prosent'], ['other' => '{0} %'], ['other' => '{0} %']),
    'petabyte' => new U(['other' => '{0} petabyte'], ['other' => '{0} PB'], ['other' => '{0}PB']),
    'pound' => new U(['other' => '{0} pund'], ['other' => '{0} pund'], ['other' => '{0} pund']),
    'second' => new U(['one' => '{0} sekund', 'other' => '{0} sekunder'], ['other' => '{0} sek'], ['other' => '{0}s']),
    'stone' => new U(['other' => '{0} stone'], ['other' => '{0} st'], ['other' => '{0} st']),
    'terabit' => new U(['other' => '{0} terabit'], ['other' => '{0} Tb'], ['one' => '{0}Tb', 'other' => '{0} Tb']),
    'terabyte' => new U(['other' => '{0} terabyte'], ['other' => '{0} TB'], ['one' => '{0}TB', 'other' => '{0} TB']),
    'week' => new U(['one' => '{0} uke', 'other' => '{0} uker'], ['other' => '{0} u'], ['other' => '{0}u']),
    'yard' => new U(['other' => '{0} yard'], ['other' => '{0} yard'], ['other' => '{0}yd']),
    'year' => new U(['other' => '{0} år'], ['other' => '{0} år'], ['other' => '{0}å']),
];
