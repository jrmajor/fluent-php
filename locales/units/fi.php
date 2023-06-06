<?php

use Major\Fluent\Formatters\Number\Locale\Unit as U;

return [
    'kilometer' => new U(name: 'length-kilometer', long: ['name' => 'kilometrit', 'plurals' => ['one' => '{0} kilometri', 'other' => '{0} kilometriä'], 'perUnit' => '{0} / kilometri'], short: ['name' => 'km', 'plurals' => ['one' => '{0} km', 'other' => '{0} km'], 'perUnit' => '{0}/km'], narrow: ['name' => 'km', 'plurals' => ['one' => '{0}km', 'other' => '{0}km'], 'perUnit' => '{0}/km']),
    'degree' => new U(name: 'angle-degree', long: ['name' => 'asteet', 'plurals' => ['one' => '{0} aste', 'other' => '{0} astetta'], 'perUnit' => ''], short: ['name' => '°', 'plurals' => ['one' => '{0}°', 'other' => '{0}°'], 'perUnit' => ''], narrow: ['name' => '°', 'plurals' => ['one' => '{0}°', 'other' => '{0}°'], 'perUnit' => '']),
    'acre' => new U(name: 'area-acre', long: ['name' => 'eekkerit', 'plurals' => ['one' => '{0} eekkeri', 'other' => '{0} eekkeriä'], 'perUnit' => ''], short: ['name' => 'ac', 'plurals' => ['one' => '{0} ac', 'other' => '{0} ac'], 'perUnit' => ''], narrow: ['name' => 'ac', 'plurals' => ['one' => '{0}ac', 'other' => '{0}ac'], 'perUnit' => '']),
    'hectare' => new U(name: 'area-hectare', long: ['name' => 'hehtaarit', 'plurals' => ['one' => '{0} hehtaari', 'other' => '{0} hehtaaria'], 'perUnit' => ''], short: ['name' => 'ha', 'plurals' => ['one' => '{0} ha', 'other' => '{0} ha'], 'perUnit' => ''], narrow: ['name' => 'ha', 'plurals' => ['one' => '{0}ha', 'other' => '{0}ha'], 'perUnit' => '']),
    'percent' => new U(name: 'concentr-percent', long: ['name' => 'prosentit', 'plurals' => ['one' => '{0} prosentti', 'other' => '{0} prosenttia'], 'perUnit' => ''], short: ['name' => '%', 'plurals' => ['one' => '{0} %', 'other' => '{0} %'], 'perUnit' => ''], narrow: ['name' => '%', 'plurals' => ['one' => '{0} %', 'other' => '{0} %'], 'perUnit' => '']),
    'bit' => new U(name: 'digital-bit', long: ['name' => 'bitit', 'plurals' => ['one' => '{0} bitti', 'other' => '{0} bittiä'], 'perUnit' => ''], short: ['name' => 'b', 'plurals' => ['one' => '{0} b', 'other' => '{0} b'], 'perUnit' => ''], narrow: ['name' => 'b', 'plurals' => ['one' => '{0}b', 'other' => '{0}b'], 'perUnit' => '']),
    'byte' => new U(name: 'digital-byte', long: ['name' => 'tavut', 'plurals' => ['one' => '{0} tavu', 'other' => '{0} tavua'], 'perUnit' => ''], short: ['name' => 't', 'plurals' => ['one' => '{0} t', 'other' => '{0} t'], 'perUnit' => ''], narrow: ['name' => 't', 'plurals' => ['one' => '{0}t', 'other' => '{0}t'], 'perUnit' => '']),
    'gigabit' => new U(name: 'digital-gigabit', long: ['name' => 'gigabitit', 'plurals' => ['one' => '{0} gigabitti', 'other' => '{0} gigabittiä'], 'perUnit' => ''], short: ['name' => 'Gb', 'plurals' => ['one' => '{0} Gb', 'other' => '{0} Gb'], 'perUnit' => ''], narrow: ['name' => 'Gb', 'plurals' => ['one' => '{0}Gb', 'other' => '{0}Gb'], 'perUnit' => '']),
    'gigabyte' => new U(name: 'digital-gigabyte', long: ['name' => 'gigatavut', 'plurals' => ['one' => '{0} gigatavu', 'other' => '{0} gigatavua'], 'perUnit' => ''], short: ['name' => 'Gt', 'plurals' => ['one' => '{0} Gt', 'other' => '{0} Gt'], 'perUnit' => ''], narrow: ['name' => 'Gt', 'plurals' => ['one' => '{0}Gt', 'other' => '{0}Gt'], 'perUnit' => '']),
    'kilobit' => new U(name: 'digital-kilobit', long: ['name' => 'kilobitit', 'plurals' => ['one' => '{0} kilobitti', 'other' => '{0} kilobittiä'], 'perUnit' => ''], short: ['name' => 'kb', 'plurals' => ['one' => '{0} kb', 'other' => '{0} kb'], 'perUnit' => ''], narrow: ['name' => 'kb', 'plurals' => ['one' => '{0}kb', 'other' => '{0}kb'], 'perUnit' => '']),
    'kilobyte' => new U(name: 'digital-kilobyte', long: ['name' => 'kilotavut', 'plurals' => ['one' => '{0} kilotavu', 'other' => '{0} kilotavua'], 'perUnit' => ''], short: ['name' => 'kt', 'plurals' => ['one' => '{0} kt', 'other' => '{0} kt'], 'perUnit' => ''], narrow: ['name' => 'kt', 'plurals' => ['one' => '{0}kt', 'other' => '{0}kt'], 'perUnit' => '']),
    'megabit' => new U(name: 'digital-megabit', long: ['name' => 'megabitit', 'plurals' => ['one' => '{0} megabitti', 'other' => '{0} megabittiä'], 'perUnit' => ''], short: ['name' => 'Mb', 'plurals' => ['one' => '{0} Mb', 'other' => '{0} Mb'], 'perUnit' => ''], narrow: ['name' => 'Mb', 'plurals' => ['one' => '{0}Mb', 'other' => '{0}Mb'], 'perUnit' => '']),
    'megabyte' => new U(name: 'digital-megabyte', long: ['name' => 'megatavut', 'plurals' => ['one' => '{0} megatavu', 'other' => '{0} megatavua'], 'perUnit' => ''], short: ['name' => 'Mt', 'plurals' => ['one' => '{0} Mt', 'other' => '{0} Mt'], 'perUnit' => ''], narrow: ['name' => 'Mt', 'plurals' => ['one' => '{0}Mt', 'other' => '{0}Mt'], 'perUnit' => '']),
    'petabyte' => new U(name: 'digital-petabyte', long: ['name' => 'petatavut', 'plurals' => ['one' => '{0} petatavu', 'other' => '{0} petatavua'], 'perUnit' => ''], short: ['name' => 'Pt', 'plurals' => ['one' => '{0} Pt', 'other' => '{0} Pt'], 'perUnit' => ''], narrow: ['name' => 'Pt', 'plurals' => ['one' => '{0}Pt', 'other' => '{0}Pt'], 'perUnit' => '']),
    'terabit' => new U(name: 'digital-terabit', long: ['name' => 'terabitit', 'plurals' => ['one' => '{0} terabitti', 'other' => '{0} terabittiä'], 'perUnit' => ''], short: ['name' => 'Tb', 'plurals' => ['one' => '{0} Tb', 'other' => '{0} Tb'], 'perUnit' => ''], narrow: ['name' => 'Tb', 'plurals' => ['one' => '{0}Tb', 'other' => '{0}Tb'], 'perUnit' => '']),
    'terabyte' => new U(name: 'digital-terabyte', long: ['name' => 'teratavut', 'plurals' => ['one' => '{0} teratavu', 'other' => '{0} teratavua'], 'perUnit' => ''], short: ['name' => 'Tt', 'plurals' => ['one' => '{0} Tt', 'other' => '{0} Tt'], 'perUnit' => ''], narrow: ['name' => 'Tt', 'plurals' => ['one' => '{0}Tt', 'other' => '{0}Tt'], 'perUnit' => '']),
    'day' => new U(name: 'duration-day', long: ['name' => 'päivät', 'plurals' => ['one' => '{0} päivä', 'other' => '{0} päivää'], 'perUnit' => '{0} / päivä'], short: ['name' => 'pv', 'plurals' => ['one' => '{0} pv', 'other' => '{0} pv'], 'perUnit' => '{0}/pv'], narrow: ['name' => 'pv', 'plurals' => ['one' => '{0}pv', 'other' => '{0}pv'], 'perUnit' => '{0}/pv']),
    'hour' => new U(name: 'duration-hour', long: ['name' => 'tunnit', 'plurals' => ['one' => '{0} tunti', 'other' => '{0} tuntia'], 'perUnit' => '{0} / tunti'], short: ['name' => 't', 'plurals' => ['one' => '{0} t', 'other' => '{0} t'], 'perUnit' => '{0}/t'], narrow: ['name' => 't', 'plurals' => ['one' => '{0}t', 'other' => '{0}t'], 'perUnit' => '{0}/t']),
    'millisecond' => new U(name: 'duration-millisecond', long: ['name' => 'millisekunnit', 'plurals' => ['one' => '{0} millisekunti', 'other' => '{0} millisekuntia'], 'perUnit' => ''], short: ['name' => 'ms', 'plurals' => ['one' => '{0} ms', 'other' => '{0} ms'], 'perUnit' => ''], narrow: ['name' => 'ms', 'plurals' => ['one' => '{0}ms', 'other' => '{0}ms'], 'perUnit' => '']),
    'minute' => new U(name: 'duration-minute', long: ['name' => 'minuutit', 'plurals' => ['one' => '{0} minuutti', 'other' => '{0} minuuttia'], 'perUnit' => '{0} / minuutti'], short: ['name' => 'min', 'plurals' => ['one' => '{0} min', 'other' => '{0} min'], 'perUnit' => '{0}/min'], narrow: ['name' => 'min', 'plurals' => ['one' => '{0}min', 'other' => '{0}min'], 'perUnit' => '{0}/min']),
    'month' => new U(name: 'duration-month', long: ['name' => 'kuukaudet', 'plurals' => ['one' => '{0} kuukausi', 'other' => '{0} kuukautta'], 'perUnit' => '{0} / kuukausi'], short: ['name' => 'kk', 'plurals' => ['one' => '{0} kk', 'other' => '{0} kk'], 'perUnit' => '{0}/kk'], narrow: ['name' => 'kk', 'plurals' => ['one' => '{0}kk', 'other' => '{0}kk'], 'perUnit' => '{0}/kk']),
    'second' => new U(name: 'duration-second', long: ['name' => 'sekunnit', 'plurals' => ['one' => '{0} sekunti', 'other' => '{0} sekuntia'], 'perUnit' => '{0} / sekunti'], short: ['name' => 'sek', 'plurals' => ['one' => '{0} s', 'other' => '{0} s'], 'perUnit' => '{0}/s'], narrow: ['name' => 's', 'plurals' => ['one' => '{0}s', 'other' => '{0}s'], 'perUnit' => '{0}/s']),
    'week' => new U(name: 'duration-week', long: ['name' => 'viikot', 'plurals' => ['one' => '{0} viikko', 'other' => '{0} viikkoa'], 'perUnit' => '{0} / viikko'], short: ['name' => 'vk', 'plurals' => ['one' => '{0} vk', 'other' => '{0} vk'], 'perUnit' => '{0}/vk'], narrow: ['name' => 'vk', 'plurals' => ['one' => '{0}vk', 'other' => '{0}vk'], 'perUnit' => '{0}/vk']),
    'year' => new U(name: 'duration-year', long: ['name' => 'vuodet', 'plurals' => ['one' => '{0} vuosi', 'other' => '{0} vuotta'], 'perUnit' => '{0} / vuosi'], short: ['name' => 'v', 'plurals' => ['one' => '{0} v', 'other' => '{0} v'], 'perUnit' => '{0}/v'], narrow: ['name' => 'v', 'plurals' => ['one' => '{0}v', 'other' => '{0}v'], 'perUnit' => '{0}/v']),
    'centimeter' => new U(name: 'length-centimeter', long: ['name' => 'senttimetrit', 'plurals' => ['one' => '{0} senttimetri', 'other' => '{0} senttimetriä'], 'perUnit' => '{0} / senttimetri'], short: ['name' => 'cm', 'plurals' => ['one' => '{0} cm', 'other' => '{0} cm'], 'perUnit' => '{0}/cm'], narrow: ['name' => 'cm', 'plurals' => ['one' => '{0}cm', 'other' => '{0}cm'], 'perUnit' => '{0}/cm']),
    'foot' => new U(name: 'length-foot', long: ['name' => 'jalat', 'plurals' => ['one' => '{0} jalka', 'other' => '{0} jalkaa'], 'perUnit' => '{0} / jalka'], short: ['name' => 'ft', 'plurals' => ['one' => '{0} ft', 'other' => '{0} ft'], 'perUnit' => '{0}/ft'], narrow: ['name' => 'ft', 'plurals' => ['one' => '{0}′', 'other' => '{0}′'], 'perUnit' => '{0}/′']),
    'inch' => new U(name: 'length-inch', long: ['name' => 'tuumat', 'plurals' => ['one' => '{0} tuuma', 'other' => '{0} tuumaa'], 'perUnit' => '{0} / tuuma'], short: ['name' => 'in', 'plurals' => ['one' => '{0} in', 'other' => '{0} in'], 'perUnit' => '{0}/in'], narrow: ['name' => 'in', 'plurals' => ['one' => '{0}″', 'other' => '{0}″'], 'perUnit' => '{0}/″']),
    'meter' => new U(name: 'length-meter', long: ['name' => 'metrit', 'plurals' => ['one' => '{0} metri', 'other' => '{0} metriä'], 'perUnit' => '{0} / metri'], short: ['name' => 'm', 'plurals' => ['one' => '{0} m', 'other' => '{0} m'], 'perUnit' => '{0}/m'], narrow: ['name' => 'm', 'plurals' => ['one' => '{0}m', 'other' => '{0}m'], 'perUnit' => '{0}/m']),
    'mile-scandinavian' => new U(name: 'length-mile-scandinavian', long: ['name' => 'peninkulmat', 'plurals' => ['one' => '{0} peninkulma', 'other' => '{0} peninkulmaa'], 'perUnit' => ''], short: ['name' => 'pnk', 'plurals' => ['one' => '{0} pnk', 'other' => '{0} pnk'], 'perUnit' => ''], narrow: ['name' => 'pnk', 'plurals' => ['one' => '{0}pnk', 'other' => '{0}pnk'], 'perUnit' => '']),
    'mile' => new U(name: 'length-mile', long: ['name' => 'mailit', 'plurals' => ['one' => '{0} maili', 'other' => '{0} mailia'], 'perUnit' => ''], short: ['name' => 'mi', 'plurals' => ['one' => '{0} mi', 'other' => '{0} mi'], 'perUnit' => ''], narrow: ['name' => 'mi', 'plurals' => ['one' => '{0}mi', 'other' => '{0}mi'], 'perUnit' => '']),
    'millimeter' => new U(name: 'length-millimeter', long: ['name' => 'millimetrit', 'plurals' => ['one' => '{0} millimetri', 'other' => '{0} millimetriä'], 'perUnit' => ''], short: ['name' => 'mm', 'plurals' => ['one' => '{0} mm', 'other' => '{0} mm'], 'perUnit' => ''], narrow: ['name' => 'mm', 'plurals' => ['one' => '{0}mm', 'other' => '{0}mm'], 'perUnit' => '']),
    'yard' => new U(name: 'length-yard', long: ['name' => 'jaardit', 'plurals' => ['one' => '{0} jaardi', 'other' => '{0} jaardia'], 'perUnit' => ''], short: ['name' => 'yd', 'plurals' => ['one' => '{0} yd', 'other' => '{0} yd'], 'perUnit' => ''], narrow: ['name' => 'yd', 'plurals' => ['one' => '{0}yd', 'other' => '{0}yd'], 'perUnit' => '']),
    'gram' => new U(name: 'mass-gram', long: ['name' => 'grammat', 'plurals' => ['one' => '{0} gramma', 'other' => '{0} grammaa'], 'perUnit' => '{0} / gramma'], short: ['name' => 'g', 'plurals' => ['one' => '{0} g', 'other' => '{0} g'], 'perUnit' => '{0}/g'], narrow: ['name' => 'g', 'plurals' => ['one' => '{0}g', 'other' => '{0}g'], 'perUnit' => '{0}/g']),
    'kilogram' => new U(name: 'mass-kilogram', long: ['name' => 'kilogrammat', 'plurals' => ['one' => '{0} kilogramma', 'other' => '{0} kilogrammaa'], 'perUnit' => '{0} / kilogramma'], short: ['name' => 'kg', 'plurals' => ['one' => '{0} kg', 'other' => '{0} kg'], 'perUnit' => '{0}/kg'], narrow: ['name' => 'kg', 'plurals' => ['one' => '{0}kg', 'other' => '{0}kg'], 'perUnit' => '{0}/kg']),
    'ounce' => new U(name: 'mass-ounce', long: ['name' => 'unssit', 'plurals' => ['one' => '{0} unssi', 'other' => '{0} unssia'], 'perUnit' => '{0} / unssi'], short: ['name' => 'oz', 'plurals' => ['one' => '{0} oz', 'other' => '{0} oz'], 'perUnit' => '{0}/oz'], narrow: ['name' => 'oz', 'plurals' => ['one' => '{0}oz', 'other' => '{0}oz'], 'perUnit' => '{0}/oz']),
    'pound' => new U(name: 'mass-pound', long: ['name' => 'paunat', 'plurals' => ['one' => '{0} pauna', 'other' => '{0} paunaa'], 'perUnit' => '{0} / pauna'], short: ['name' => 'lb', 'plurals' => ['one' => '{0} lb', 'other' => '{0} lb'], 'perUnit' => '{0}/lb'], narrow: ['name' => 'lb', 'plurals' => ['one' => '{0}lb', 'other' => '{0}lb'], 'perUnit' => '{0}/lb']),
    'stone' => new U(name: 'mass-stone', long: ['name' => 'stonet', 'plurals' => ['one' => '{0} stone', 'other' => '{0} stonea'], 'perUnit' => ''], short: ['name' => 'st', 'plurals' => ['one' => '{0} st', 'other' => '{0} st'], 'perUnit' => ''], narrow: ['name' => 'st', 'plurals' => ['one' => '{0}st', 'other' => '{0}st'], 'perUnit' => '']),
    'celsius' => new U(name: 'temperature-celsius', long: ['name' => 'celsiusasteet', 'plurals' => ['one' => '{0} celsiusaste', 'other' => '{0} celsiusastetta'], 'perUnit' => ''], short: ['name' => '°C', 'plurals' => ['one' => '{0} °C', 'other' => '{0} °C'], 'perUnit' => ''], narrow: ['name' => '°C', 'plurals' => ['one' => '{0}°', 'other' => '{0}°'], 'perUnit' => '']),
    'fahrenheit' => new U(name: 'temperature-fahrenheit', long: ['name' => 'fahrenheitasteet', 'plurals' => ['one' => '{0} fahrenheitaste', 'other' => '{0} fahrenheitastetta'], 'perUnit' => ''], short: ['name' => '°F', 'plurals' => ['one' => '{0} °F', 'other' => '{0} °F'], 'perUnit' => ''], narrow: ['name' => '°F', 'plurals' => ['one' => '{0}°F', 'other' => '{0}°F'], 'perUnit' => '']),
    'fluid-ounce' => new U(name: 'volume-fluid-ounce', long: ['name' => 'nesteunssit', 'plurals' => ['one' => '{0} nesteunssi', 'other' => '{0} nesteunssia'], 'perUnit' => ''], short: ['name' => 'fl oz', 'plurals' => ['one' => '{0} fl oz', 'other' => '{0} fl oz'], 'perUnit' => ''], narrow: ['name' => 'fl oz', 'plurals' => ['one' => '{0}fl oz', 'other' => '{0}fl oz'], 'perUnit' => '']),
    'gallon' => new U(name: 'volume-gallon', long: ['name' => 'am. gallonat', 'plurals' => ['one' => '{0} am. gallona', 'other' => '{0} am. gallonaa'], 'perUnit' => '{0} / am. gallona'], short: ['name' => 'am. gal', 'plurals' => ['one' => '{0} am. gal', 'other' => '{0} am. gal'], 'perUnit' => '{0}/am. gal'], narrow: ['name' => 'am.gal', 'plurals' => ['one' => '{0}am.gal', 'other' => '{0}am.gal'], 'perUnit' => '{0}/am.gal']),
    'liter' => new U(name: 'volume-liter', long: ['name' => 'litrat', 'plurals' => ['one' => '{0} litra', 'other' => '{0} litraa'], 'perUnit' => '{0} / litra'], short: ['name' => 'l', 'plurals' => ['one' => '{0} l', 'other' => '{0} l'], 'perUnit' => '{0}/l'], narrow: ['name' => 'l', 'plurals' => ['one' => '{0}l', 'other' => '{0}l'], 'perUnit' => '{0}/l']),
    'milliliter' => new U(name: 'volume-milliliter', long: ['name' => 'millilitrat', 'plurals' => ['one' => '{0} millilitra', 'other' => '{0} millilitraa'], 'perUnit' => ''], short: ['name' => 'ml', 'plurals' => ['one' => '{0} ml', 'other' => '{0} ml'], 'perUnit' => ''], narrow: ['name' => 'ml', 'plurals' => ['one' => '{0}ml', 'other' => '{0}ml'], 'perUnit' => '']),
];
