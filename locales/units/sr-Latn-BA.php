<?php

use Major\Fluent\Formatters\Number\Locale\Unit as U;

return [
    'acre' => new U(['one' => '{0} aker', 'other' => '{0} akera'], ['other' => '{0} ac'], ['other' => '{0} ac']),
    'bit' => new U(['one' => '{0} bit', 'few' => '{0} bita', 'other' => '{0} bitova'], ['other' => '{0} b'], ['other' => '{0} b']),
    'byte' => new U(['one' => '{0} bajt', 'few' => '{0} bajta', 'other' => '{0} bajtova'], ['other' => '{0} B'], ['other' => '{0} B']),
    'celsius' => new U(['one' => '{0} stepen Celzijusa', 'few' => '{0} stepena Celzijusa', 'other' => '{0} stepeni Celzijusa'], ['other' => '{0}°C'], ['other' => '{0}°C']),
    'centimeter' => new U(['one' => '{0} centimetar', 'few' => '{0} centimetra', 'other' => '{0} centimetara'], ['other' => '{0} cm'], ['other' => '{0} cm']),
    'day' => new U(['one' => '{0} dan', 'other' => '{0} dana'], ['one' => '{0} dan', 'other' => '{0} dana'], ['other' => '{0} d']),
    'degree' => new U(['one' => '{0} stepen', 'few' => '{0} stepena', 'other' => '{0} stepeni'], ['other' => '{0}°'], ['other' => '{0}°']),
    'fahrenheit' => new U(['one' => '{0} stepen Farenhajta', 'few' => '{0} stepena Farenhajta', 'other' => '{0} stepeni Farenhajta'], ['other' => '{0}°F'], ['other' => '{0}°F']),
    'fluid-ounce' => new U(['one' => '{0} unca tečnosti', 'few' => '{0} unce tečnosti', 'other' => '{0} unci tečnosti'], ['other' => '{0} fl oz'], ['other' => '{0} fl oz']),
    'foot' => new U(['few' => '{0} stope', 'other' => '{0} stopa'], ['other' => '{0} ft'], ['other' => '{0} ft']),
    'gallon' => new U(['one' => '{0} galon', 'other' => '{0} galona'], ['other' => '{0} gal'], ['other' => '{0} gal']),
    'gigabit' => new U(['one' => '{0} gigabit', 'few' => '{0} gigabita', 'other' => '{0} gigabitova'], ['other' => '{0} Gb'], ['other' => '{0} Gb']),
    'gigabyte' => new U(['one' => '{0} gigabajt', 'few' => '{0} gigabajta', 'other' => '{0} gigabajtova'], ['other' => '{0} GB'], ['other' => '{0} GB']),
    'gram' => new U(['one' => '{0} gram', 'other' => '{0} grama'], ['other' => '{0} g'], ['other' => '{0} g']),
    'hectare' => new U(['one' => '{0} hektar', 'other' => '{0} hektara'], ['other' => '{0} ha'], ['other' => '{0} ha']),
    'hour' => new U(['one' => '{0} sat', 'few' => '{0} sata', 'other' => '{0} sati'], ['one' => '{0} sat', 'few' => '{0} sata', 'other' => '{0} sati'], ['other' => '{0} č']),
    'inch' => new U(['one' => '{0} inč', 'other' => '{0} inča'], ['one' => '{0} inč', 'other' => '{0} inča'], ['other' => '{0} in']),
    'kilobit' => new U(['one' => '{0} kilobit', 'few' => '{0} kilobita', 'other' => '{0} kilobitova'], ['other' => '{0} kb'], ['other' => '{0} kb']),
    'kilobyte' => new U(['one' => '{0} kilobajt', 'few' => '{0} kilobajta', 'other' => '{0} kilobajtova'], ['other' => '{0} kB'], ['other' => '{0} kB']),
    'kilogram' => new U(['one' => '{0} kilogram', 'other' => '{0} kilograma'], ['other' => '{0} kg'], ['other' => '{0} kg']),
    'kilometer' => new U(['one' => '{0} kilometar', 'few' => '{0} kilometra', 'other' => '{0} kilometara'], ['other' => '{0} km'], ['other' => '{0} km']),
    'liter' => new U(['one' => '{0} litar', 'few' => '{0} litra', 'other' => '{0} litara'], ['other' => '{0} l'], ['other' => '{0} l']),
    'megabit' => new U(['one' => '{0} megabit', 'few' => '{0} megabita', 'other' => '{0} megabitova'], ['other' => '{0} Mb'], ['other' => '{0} Mb']),
    'megabyte' => new U(['one' => '{0} megabajt', 'few' => '{0} megabajta', 'other' => '{0} megabajtova'], ['other' => '{0} MB'], ['other' => '{0} MB']),
    'meter' => new U(['one' => '{0} metar', 'few' => '{0} metra', 'other' => '{0} metara'], ['other' => '{0} m'], ['other' => '{0} m']),
    'microsecond' => new U(['one' => '{0} mikrosekunda', 'few' => '{0} mikrosekunde', 'other' => '{0} mikrosekundi'], ['other' => '{0} μs'], ['other' => '{0} μs']),
    'mile' => new U(['few' => '{0} milje', 'other' => '{0} milja'], ['other' => '{0} mi'], ['few' => '{0} milje', 'other' => '{0} milja']),
    'mile-scandinavian' => new U(['one' => '{0} skandinavska milja', 'few' => '{0} skandinavske milje', 'other' => '{0} skandinavskih milja'], ['other' => '{0} smi'], ['other' => '{0} smi']),
    'milliliter' => new U(['one' => '{0} mililitar', 'few' => '{0} mililitra', 'other' => '{0} mililitara'], ['other' => '{0} mL'], ['other' => '{0} mL']),
    'millimeter' => new U(['one' => '{0} milimetar', 'few' => '{0} milimetra', 'other' => '{0} milimetara'], ['other' => '{0} mm'], ['other' => '{0} mm']),
    'millisecond' => new U(['one' => '{0} milisekunda', 'few' => '{0} milisekunde', 'other' => '{0} milisekundi'], ['other' => '{0} ms'], ['other' => '{0} ms']),
    'minute' => new U(['one' => '{0} minut', 'other' => '{0} minuta'], ['other' => '{0} min'], ['other' => '{0} m']),
    'month' => new U(['one' => '{0} mjesec', 'few' => '{0} mjeseca', 'other' => '{0} mjeseci'], ['other' => '{0} mjes.'], ['other' => '{0} m']),
    'nanosecond' => new U(['one' => '{0} nanosekunda', 'few' => '{0} nanosekunde', 'other' => '{0} nanosekundi'], ['other' => '{0} ns'], ['other' => '{0} ns']),
    'ounce' => new U(['one' => '{0} unca', 'few' => '{0} unce', 'other' => '{0} unci'], ['other' => '{0} oz'], ['one' => '{0} unca', 'few' => '{0} unce', 'other' => '{0} unci']),
    'percent' => new U(['one' => '{0} procenat', 'other' => '{0} procenata'], ['other' => '{0}%'], ['other' => '{0}%']),
    'petabyte' => new U(['one' => '{0} petabajt', 'few' => '{0} petabajta', 'other' => '{0} petabajtova'], ['other' => '{0} PB'], ['other' => '{0} PB']),
    'pound' => new U(['one' => '{0} funta', 'few' => '{0} funte', 'other' => '{0} funti'], ['other' => '{0} lb'], ['other' => '{0} lb']),
    'second' => new U(['one' => '{0} sekunda', 'few' => '{0} sekunde', 'other' => '{0} sekundi'], ['other' => '{0} sek'], ['other' => '{0} s']),
    'stone' => new U(['one' => '{0} američka tona', 'few' => '{0} američke tone', 'other' => '{0} američkih tona'], ['other' => '{0} st'], ['other' => '{0} st']),
    'terabit' => new U(['one' => '{0} terabit', 'few' => '{0} terabita', 'other' => '{0} terabitova'], ['other' => '{0} Tb'], ['other' => '{0} Tb']),
    'terabyte' => new U(['one' => '{0} terabajt', 'other' => '{0} terabajta'], ['other' => '{0} TB'], ['other' => '{0} TB']),
    'week' => new U(['few' => '{0} nedjelje', 'other' => '{0} nedjelja'], ['other' => '{0} ned.'], ['other' => '{0} n']),
    'yard' => new U(['one' => '{0} jard', 'few' => '{0} jarda', 'other' => '{0} jardi'], ['other' => '{0} jrd'], ['other' => '{0} yd']),
    'year' => new U(['few' => '{0} godine', 'other' => '{0} godina'], ['one' => '{0} god', 'other' => '{0} god.'], ['other' => '{0} g']),
];
