<?php

use Major\Fluent\Formatters\Number\Locale\Unit as U;

return [
    'acre' => new U(long: ['name' => 'acri', 'plurals' => ['one' => '{0} acru', 'few' => '{0} acri', 'other' => '{0} de acri'], 'perUnit' => ''], short: ['name' => 'acri', 'plurals' => ['one' => '{0} ac.', 'few' => '{0} ac.', 'other' => '{0} ac.'], 'perUnit' => ''], narrow: ['name' => 'acru', 'plurals' => ['one' => '{0} ac.', 'few' => '{0} ac.', 'other' => '{0} ac.'], 'perUnit' => '']),
    'bit' => new U(long: ['name' => 'biți', 'plurals' => ['one' => '{0} bit', 'few' => '{0} biți', 'other' => '{0} de biți'], 'perUnit' => ''], short: ['name' => 'b', 'plurals' => ['one' => '{0} b', 'few' => '{0} b', 'other' => '{0} b'], 'perUnit' => ''], narrow: ['name' => 'b', 'plurals' => ['one' => '{0} b', 'few' => '{0} b', 'other' => '{0} b'], 'perUnit' => '']),
    'byte' => new U(long: ['name' => 'byți', 'plurals' => ['one' => '{0} byte', 'few' => '{0} byți', 'other' => '{0} de byți'], 'perUnit' => ''], short: ['name' => 'B', 'plurals' => ['one' => '{0} B', 'few' => '{0} B', 'other' => '{0} B'], 'perUnit' => ''], narrow: ['name' => 'B', 'plurals' => ['one' => '{0} B', 'few' => '{0} B', 'other' => '{0} B'], 'perUnit' => '']),
    'celsius' => new U(long: ['name' => 'grade Celsius', 'plurals' => ['one' => '{0} grad Celsius', 'few' => '{0} grade Celsius', 'other' => '{0} de grade Celsius'], 'perUnit' => ''], short: ['name' => '°C', 'plurals' => ['one' => '{0} °C', 'few' => '{0} °C', 'other' => '{0} °C'], 'perUnit' => ''], narrow: ['name' => '°C', 'plurals' => ['one' => '{0} °C', 'few' => '{0} °C', 'other' => '{0} °C'], 'perUnit' => '']),
    'centimeter' => new U(long: ['name' => 'centimetri', 'plurals' => ['one' => '{0} centimetru', 'few' => '{0} centimetri', 'other' => '{0} de centimetri'], 'perUnit' => '{0} pe centimetru'], short: ['name' => 'cm', 'plurals' => ['one' => '{0} cm', 'few' => '{0} cm', 'other' => '{0} cm'], 'perUnit' => '{0}/cm'], narrow: ['name' => 'cm', 'plurals' => ['one' => '{0} cm', 'few' => '{0} cm', 'other' => '{0} cm'], 'perUnit' => '{0}/cm']),
    'day' => new U(long: ['name' => 'zile', 'plurals' => ['one' => '{0} zi', 'few' => '{0} zile', 'other' => '{0} de zile'], 'perUnit' => '{0} pe zi'], short: ['name' => 'zile', 'plurals' => ['one' => '{0} zi', 'few' => '{0} zile', 'other' => '{0} zile'], 'perUnit' => '{0}/zi'], narrow: ['name' => 'zi', 'plurals' => ['one' => '{0} z', 'few' => '{0} z', 'other' => '{0} z'], 'perUnit' => '{0}/zi']),
    'degree' => new U(long: ['name' => 'grade', 'plurals' => ['one' => '{0} grad', 'few' => '{0} grade', 'other' => '{0} de grade'], 'perUnit' => ''], short: ['name' => 'grade', 'plurals' => ['one' => '{0}°', 'few' => '{0}°', 'other' => '{0}°'], 'perUnit' => ''], narrow: ['name' => 'grad', 'plurals' => ['one' => '{0}°', 'few' => '{0}°', 'other' => '{0}°'], 'perUnit' => '']),
    'fahrenheit' => new U(long: ['name' => 'grade Fahrenheit', 'plurals' => ['one' => '{0} grad Fahrenheit', 'few' => '{0} grade Fahrenheit', 'other' => '{0} de grade Fahrenheit'], 'perUnit' => ''], short: ['name' => '°F', 'plurals' => ['one' => '{0} °F', 'few' => '{0} °F', 'other' => '{0} °F'], 'perUnit' => ''], narrow: ['name' => '°F', 'plurals' => ['one' => '{0} °F', 'few' => '{0} °F', 'other' => '{0} °F'], 'perUnit' => '']),
    'fluid-ounce' => new U(long: ['name' => 'uncii lichide', 'plurals' => ['one' => '{0} uncie lichidă', 'few' => '{0} uncii lichide', 'other' => '{0} de uncii lichide'], 'perUnit' => ''], short: ['name' => 'fl oz', 'plurals' => ['one' => '{0} fl oz', 'few' => '{0} fl oz', 'other' => '{0} fl oz'], 'perUnit' => ''], narrow: ['name' => 'fl oz', 'plurals' => ['one' => '{0} fl oz', 'few' => '{0} fl oz', 'other' => '{0} fl oz'], 'perUnit' => '']),
    'foot' => new U(long: ['name' => 'picioare', 'plurals' => ['one' => '{0} picior', 'few' => '{0} picioare', 'other' => '{0} de picioare'], 'perUnit' => '{0} pe picior'], short: ['name' => 'ft', 'plurals' => ['one' => '{0} ft', 'few' => '{0} ft', 'other' => '{0} ft'], 'perUnit' => '{0}/ft'], narrow: ['name' => 'ft', 'plurals' => ['one' => '{0} ft', 'few' => '{0} ft', 'other' => '{0} ft'], 'perUnit' => '{0}/ft']),
    'gallon' => new U(long: ['name' => 'galoane', 'plurals' => ['one' => '{0} galon', 'few' => '{0} galoane', 'other' => '{0} de galoane'], 'perUnit' => '{0} per galon'], short: ['name' => 'gal', 'plurals' => ['one' => '{0} gal', 'few' => '{0} gal', 'other' => '{0} gal'], 'perUnit' => '{0}/gal'], narrow: ['name' => 'gal', 'plurals' => ['one' => '{0} gal', 'few' => '{0} gal', 'other' => '{0} gal'], 'perUnit' => '{0}/gal']),
    'gigabit' => new U(long: ['name' => 'gigabiți', 'plurals' => ['one' => '{0} gigabit', 'few' => '{0} gigabiți', 'other' => '{0} de gigabiți'], 'perUnit' => ''], short: ['name' => 'Gb', 'plurals' => ['one' => '{0} Gb', 'few' => '{0} Gb', 'other' => '{0} Gb'], 'perUnit' => ''], narrow: ['name' => 'Gb', 'plurals' => ['one' => '{0} Gb', 'few' => '{0} Gb', 'other' => '{0} Gb'], 'perUnit' => '']),
    'gigabyte' => new U(long: ['name' => 'gigabyți', 'plurals' => ['one' => '{0} gigabyte', 'few' => '{0} gigabyți', 'other' => '{0} de gigabyți'], 'perUnit' => ''], short: ['name' => 'GB', 'plurals' => ['one' => '{0} GB', 'few' => '{0} GB', 'other' => '{0} GB'], 'perUnit' => ''], narrow: ['name' => 'GB', 'plurals' => ['one' => '{0} GB', 'few' => '{0} GB', 'other' => '{0} GB'], 'perUnit' => '']),
    'gram' => new U(long: ['name' => 'grame', 'plurals' => ['one' => '{0} gram', 'few' => '{0} grame', 'other' => '{0} de grame'], 'perUnit' => '{0} per gram'], short: ['name' => 'grame', 'plurals' => ['one' => '{0} g', 'few' => '{0} g', 'other' => '{0} g'], 'perUnit' => '{0}/g'], narrow: ['name' => 'g', 'plurals' => ['one' => '{0} g', 'few' => '{0} g', 'other' => '{0} g'], 'perUnit' => '{0}/g']),
    'hectare' => new U(long: ['name' => 'hectare', 'plurals' => ['one' => '{0} hectar', 'few' => '{0} hectare', 'other' => '{0} de hectare'], 'perUnit' => ''], short: ['name' => 'ha', 'plurals' => ['one' => '{0} ha', 'few' => '{0} ha', 'other' => '{0} ha'], 'perUnit' => ''], narrow: ['name' => 'hectar', 'plurals' => ['one' => '{0} ha', 'few' => '{0} ha', 'other' => '{0} ha'], 'perUnit' => '']),
    'hour' => new U(long: ['name' => 'ore', 'plurals' => ['one' => '{0} oră', 'few' => '{0} ore', 'other' => '{0} de ore'], 'perUnit' => '{0} pe oră'], short: ['name' => 'ore', 'plurals' => ['one' => '{0} oră', 'few' => '{0} ore', 'other' => '{0} ore'], 'perUnit' => '{0}/h'], narrow: ['name' => 'oră', 'plurals' => ['one' => '{0} h', 'few' => '{0} h', 'other' => '{0} h'], 'perUnit' => '{0}/h']),
    'inch' => new U(long: ['name' => 'inchi', 'plurals' => ['one' => '{0} inch', 'few' => '{0} inchi', 'other' => '{0} de inchi'], 'perUnit' => '{0} pe inch'], short: ['name' => 'in', 'plurals' => ['one' => '{0} in', 'few' => '{0} in', 'other' => '{0} in'], 'perUnit' => '{0}/in'], narrow: ['name' => 'in', 'plurals' => ['one' => '{0} in', 'few' => '{0} in', 'other' => '{0} in'], 'perUnit' => '{0}/in']),
    'kilobit' => new U(long: ['name' => 'kilobiți', 'plurals' => ['one' => '{0} kilobit', 'few' => '{0} kilobiți', 'other' => '{0} de kilobiți'], 'perUnit' => ''], short: ['name' => 'kb', 'plurals' => ['one' => '{0} kb', 'few' => '{0} kb', 'other' => '{0} kb'], 'perUnit' => ''], narrow: ['name' => 'kb', 'plurals' => ['one' => '{0} kb', 'few' => '{0} kb', 'other' => '{0} kb'], 'perUnit' => '']),
    'kilobyte' => new U(long: ['name' => 'kilobyți', 'plurals' => ['one' => '{0} kilobyte', 'few' => '{0} kilobyți', 'other' => '{0} de kilobyți'], 'perUnit' => ''], short: ['name' => 'kB', 'plurals' => ['one' => '{0} kB', 'few' => '{0} kB', 'other' => '{0} kB'], 'perUnit' => ''], narrow: ['name' => 'kB', 'plurals' => ['one' => '{0} kB', 'few' => '{0} kB', 'other' => '{0} kB'], 'perUnit' => '']),
    'kilogram' => new U(long: ['name' => 'kilograme', 'plurals' => ['one' => '{0} kilogram', 'few' => '{0} kilograme', 'other' => '{0} de kilograme'], 'perUnit' => '{0} per kilogram'], short: ['name' => 'kg', 'plurals' => ['one' => '{0} kg', 'few' => '{0} kg', 'other' => '{0} kg'], 'perUnit' => '{0}/kg'], narrow: ['name' => 'kg', 'plurals' => ['one' => '{0} kg', 'few' => '{0} kg', 'other' => '{0} kg'], 'perUnit' => '{0}/kg']),
    'kilometer' => new U(long: ['name' => 'kilometri', 'plurals' => ['one' => '{0} kilometru', 'few' => '{0} kilometri', 'other' => '{0} de kilometri'], 'perUnit' => '{0} pe kilometru'], short: ['name' => 'km', 'plurals' => ['one' => '{0} km', 'few' => '{0} km', 'other' => '{0} km'], 'perUnit' => '{0}/km'], narrow: ['name' => 'km', 'plurals' => ['one' => '{0} km', 'few' => '{0} km', 'other' => '{0} km'], 'perUnit' => '{0}/km']),
    'liter' => new U(long: ['name' => 'litri', 'plurals' => ['one' => '{0} litru', 'few' => '{0} litri', 'other' => '{0} de litri'], 'perUnit' => '{0} pe litru'], short: ['name' => 'litri', 'plurals' => ['one' => '{0} l', 'few' => '{0} l', 'other' => '{0} l'], 'perUnit' => '{0}/l'], narrow: ['name' => 'l', 'plurals' => ['one' => '{0} l', 'few' => '{0} l', 'other' => '{0} l'], 'perUnit' => '{0}/l']),
    'megabit' => new U(long: ['name' => 'megabiți', 'plurals' => ['one' => '{0} megabit', 'few' => '{0} megabiți', 'other' => '{0} de megabiți'], 'perUnit' => ''], short: ['name' => 'Mb', 'plurals' => ['one' => '{0} Mb', 'few' => '{0} Mb', 'other' => '{0} Mb'], 'perUnit' => ''], narrow: ['name' => 'Mb', 'plurals' => ['one' => '{0} Mb', 'few' => '{0} Mb', 'other' => '{0} Mb'], 'perUnit' => '']),
    'megabyte' => new U(long: ['name' => 'megabyți', 'plurals' => ['one' => '{0} megabyte', 'few' => '{0} megabyți', 'other' => '{0} de megabyți'], 'perUnit' => ''], short: ['name' => 'MB', 'plurals' => ['one' => '{0} MB', 'few' => '{0} MB', 'other' => '{0} MB'], 'perUnit' => ''], narrow: ['name' => 'MB', 'plurals' => ['one' => '{0} MB', 'few' => '{0} MB', 'other' => '{0} MB'], 'perUnit' => '']),
    'meter' => new U(long: ['name' => 'metri', 'plurals' => ['one' => '{0} metru', 'few' => '{0} metri', 'other' => '{0} de metri'], 'perUnit' => '{0} pe metru'], short: ['name' => 'metri', 'plurals' => ['one' => '{0} m', 'few' => '{0} m', 'other' => '{0} m'], 'perUnit' => '{0}/m'], narrow: ['name' => 'm', 'plurals' => ['one' => '{0} m', 'few' => '{0} m', 'other' => '{0} m'], 'perUnit' => '{0}/m']),
    'mile' => new U(long: ['name' => 'mile', 'plurals' => ['one' => '{0} milă', 'few' => '{0} mile', 'other' => '{0} de mile'], 'perUnit' => ''], short: ['name' => 'mi', 'plurals' => ['one' => '{0} mi', 'few' => '{0} mi', 'other' => '{0} mi'], 'perUnit' => ''], narrow: ['name' => 'mi', 'plurals' => ['one' => '{0} mi', 'few' => '{0} mi', 'other' => '{0} mi'], 'perUnit' => '']),
    'mile-scandinavian' => new U(long: ['name' => 'milă scandinavă', 'plurals' => ['one' => '{0} milă scandinavă', 'few' => '{0} mile scandinave', 'other' => '{0} de mile scandinave'], 'perUnit' => ''], short: ['name' => 'smi', 'plurals' => ['one' => '{0} smi', 'few' => '{0} smi', 'other' => '{0} smi'], 'perUnit' => ''], narrow: ['name' => 'smi', 'plurals' => ['one' => '{0} smi', 'few' => '{0} smi', 'other' => '{0} smi'], 'perUnit' => '']),
    'milliliter' => new U(long: ['name' => 'mililitri', 'plurals' => ['one' => '{0} mililitru', 'few' => '{0} mililitri', 'other' => '{0} de mililitri'], 'perUnit' => ''], short: ['name' => 'ml', 'plurals' => ['one' => '{0} ml', 'few' => '{0} ml', 'other' => '{0} ml'], 'perUnit' => ''], narrow: ['name' => 'ml', 'plurals' => ['one' => '{0} ml', 'few' => '{0} ml', 'other' => '{0} ml'], 'perUnit' => '']),
    'millimeter' => new U(long: ['name' => 'milimetri', 'plurals' => ['one' => '{0} milimetru', 'few' => '{0} milimetri', 'other' => '{0} de milimetri'], 'perUnit' => ''], short: ['name' => 'mm', 'plurals' => ['one' => '{0} mm', 'few' => '{0} mm', 'other' => '{0} mm'], 'perUnit' => ''], narrow: ['name' => 'mm', 'plurals' => ['one' => '{0} mm', 'few' => '{0} mm', 'other' => '{0} mm'], 'perUnit' => '']),
    'millisecond' => new U(long: ['name' => 'milisecunde', 'plurals' => ['one' => '{0} milisecundă', 'few' => '{0} milisecunde', 'other' => '{0} de milisecunde'], 'perUnit' => ''], short: ['name' => 'ms', 'plurals' => ['one' => '{0} ms', 'few' => '{0} ms', 'other' => '{0} ms'], 'perUnit' => ''], narrow: ['name' => 'ms', 'plurals' => ['one' => '{0} ms', 'few' => '{0} ms', 'other' => '{0} ms'], 'perUnit' => '']),
    'minute' => new U(long: ['name' => 'minute', 'plurals' => ['one' => '{0} minut', 'few' => '{0} minute', 'other' => '{0} de minute'], 'perUnit' => '{0} pe minut'], short: ['name' => 'min.', 'plurals' => ['one' => '{0} min.', 'few' => '{0} min.', 'other' => '{0} min.'], 'perUnit' => '{0}/min.'], narrow: ['name' => 'm', 'plurals' => ['one' => '{0} m', 'few' => '{0} m', 'other' => '{0} m'], 'perUnit' => '{0}/min.']),
    'month' => new U(long: ['name' => 'luni', 'plurals' => ['one' => '{0} lună', 'few' => '{0} luni', 'other' => '{0} de luni'], 'perUnit' => '{0} pe lună'], short: ['name' => 'luni', 'plurals' => ['one' => '{0} lună', 'few' => '{0} luni', 'other' => '{0} luni'], 'perUnit' => '{0}/lună'], narrow: ['name' => 'l', 'plurals' => ['one' => '{0} l', 'few' => '{0} l', 'other' => '{0} l'], 'perUnit' => '{0}/lună']),
    'ounce' => new U(long: ['name' => 'uncii', 'plurals' => ['one' => '{0} uncie', 'few' => '{0} uncii', 'other' => '{0} de uncii'], 'perUnit' => '{0} per uncie'], short: ['name' => 'oz', 'plurals' => ['one' => '{0} oz', 'few' => '{0} oz', 'other' => '{0} oz'], 'perUnit' => '{0}/oz'], narrow: ['name' => 'oz', 'plurals' => ['one' => '{0} oz', 'few' => '{0} oz', 'other' => '{0} oz'], 'perUnit' => '{0}/oz']),
    'percent' => new U(long: ['name' => 'procent', 'plurals' => ['one' => '{0} procent', 'few' => '{0} procente', 'other' => '{0} de procente'], 'perUnit' => ''], short: ['name' => '%', 'plurals' => ['one' => '{0}%', 'few' => '{0}%', 'other' => '{0}%'], 'perUnit' => ''], narrow: ['name' => '%', 'plurals' => ['one' => '{0}%', 'few' => '{0}%', 'other' => '{0}%'], 'perUnit' => '']),
    'petabyte' => new U(long: ['name' => 'petabyți', 'plurals' => ['one' => '{0} petabyte', 'few' => '{0} petabyți', 'other' => '{0} de petabyți'], 'perUnit' => ''], short: ['name' => 'PB', 'plurals' => ['one' => '{0} PB', 'few' => '{0} PB', 'other' => '{0} PB'], 'perUnit' => ''], narrow: ['name' => 'PB', 'plurals' => ['one' => '{0} PB', 'few' => '{0} PB', 'other' => '{0} PB'], 'perUnit' => '']),
    'pound' => new U(long: ['name' => 'livre', 'plurals' => ['one' => '{0} livră', 'few' => '{0} livre', 'other' => '{0} de livre'], 'perUnit' => '{0} per livră'], short: ['name' => 'lb', 'plurals' => ['one' => '{0} lb', 'few' => '{0} lb', 'other' => '{0} lb'], 'perUnit' => '{0}/lb'], narrow: ['name' => 'lb', 'plurals' => ['one' => '{0} lb', 'few' => '{0} lb', 'other' => '{0} lb'], 'perUnit' => '{0}/lb']),
    'second' => new U(long: ['name' => 'secunde', 'plurals' => ['one' => '{0} secundă', 'few' => '{0} secunde', 'other' => '{0} de secunde'], 'perUnit' => '{0} pe secundă'], short: ['name' => 's', 'plurals' => ['one' => '{0} s', 'few' => '{0} s', 'other' => '{0} s'], 'perUnit' => '{0}/s'], narrow: ['name' => 's', 'plurals' => ['one' => '{0} s', 'few' => '{0} s', 'other' => '{0} s'], 'perUnit' => '{0}/s']),
    'stone' => new U(long: ['name' => 'stone', 'plurals' => ['one' => '{0} stone', 'few' => '{0} stone', 'other' => '{0} de stone'], 'perUnit' => ''], short: ['name' => 'st', 'plurals' => ['one' => '{0} st', 'few' => '{0} st', 'other' => '{0} st'], 'perUnit' => ''], narrow: ['name' => 'st', 'plurals' => ['one' => '{0} st', 'few' => '{0} st', 'other' => '{0} st'], 'perUnit' => '']),
    'terabit' => new U(long: ['name' => 'terabiți', 'plurals' => ['one' => '{0} terabit', 'few' => '{0} terabiți', 'other' => '{0} de terabiți'], 'perUnit' => ''], short: ['name' => 'Tb', 'plurals' => ['one' => '{0} Tb', 'few' => '{0} Tb', 'other' => '{0} Tb'], 'perUnit' => ''], narrow: ['name' => 'Tb', 'plurals' => ['one' => '{0} Tb', 'few' => '{0} Tb', 'other' => '{0} Tb'], 'perUnit' => '']),
    'terabyte' => new U(long: ['name' => 'terabyți', 'plurals' => ['one' => '{0} terabyte', 'few' => '{0} terabyți', 'other' => '{0} de terabyți'], 'perUnit' => ''], short: ['name' => 'TB', 'plurals' => ['one' => '{0} TB', 'few' => '{0} TB', 'other' => '{0} TB'], 'perUnit' => ''], narrow: ['name' => 'TB', 'plurals' => ['one' => '{0} TB', 'few' => '{0} TB', 'other' => '{0} TB'], 'perUnit' => '']),
    'week' => new U(long: ['name' => 'săptămâni', 'plurals' => ['one' => '{0} săptămână', 'few' => '{0} săptămâni', 'other' => '{0} de săptămâni'], 'perUnit' => '{0} pe săptămână'], short: ['name' => 'săptămâni', 'plurals' => ['one' => '{0} săpt.', 'few' => '{0} săpt.', 'other' => '{0} săpt.'], 'perUnit' => '{0}/săpt.'], narrow: ['name' => 'săpt.', 'plurals' => ['one' => '{0} săpt.', 'few' => '{0} săpt.', 'other' => '{0} săpt.'], 'perUnit' => '{0}/săpt.']),
    'yard' => new U(long: ['name' => 'iarzi', 'plurals' => ['one' => '{0} iard', 'few' => '{0} iarzi', 'other' => '{0} de iarzi'], 'perUnit' => ''], short: ['name' => 'yd', 'plurals' => ['one' => '{0} yd', 'few' => '{0} yd', 'other' => '{0} yd'], 'perUnit' => ''], narrow: ['name' => 'yd', 'plurals' => ['one' => '{0} yd', 'few' => '{0} yd', 'other' => '{0} yd'], 'perUnit' => '']),
    'year' => new U(long: ['name' => 'ani', 'plurals' => ['one' => '{0} an', 'few' => '{0} ani', 'other' => '{0} de ani'], 'perUnit' => '{0} pe an'], short: ['name' => 'ani', 'plurals' => ['one' => '{0} an', 'few' => '{0} ani', 'other' => '{0} ani'], 'perUnit' => '{0}/an'], narrow: ['name' => 'a', 'plurals' => ['one' => '{0} a', 'few' => '{0} a', 'other' => '{0} a'], 'perUnit' => '{0}/an']),
];
