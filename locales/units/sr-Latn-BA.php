<?php

use Major\Fluent\Formatters\Number\Locale\Unit as U;

return [
    'degree' => new U(name: 'angle-degree', long: ['name' => 'stepeni', 'plurals' => ['one' => '{0} stepen', 'few' => '{0} stepena', 'other' => '{0} stepeni'], 'perUnit' => ''], short: ['name' => 'stepeni', 'plurals' => ['one' => '{0}°', 'few' => '{0}°', 'other' => '{0}°'], 'perUnit' => ''], narrow: ['name' => 'stepeni', 'plurals' => ['one' => '{0}°', 'few' => '{0}°', 'other' => '{0}°'], 'perUnit' => '']),
    'acre' => new U(name: 'area-acre', long: ['name' => 'akeri', 'plurals' => ['one' => '{0} aker', 'few' => '{0} akera', 'other' => '{0} akera'], 'perUnit' => ''], short: ['name' => 'akeri', 'plurals' => ['one' => '{0} ac', 'few' => '{0} ac', 'other' => '{0} ac'], 'perUnit' => ''], narrow: ['name' => 'akeri', 'plurals' => ['one' => '{0} ac', 'few' => '{0} ac', 'other' => '{0} ac'], 'perUnit' => '']),
    'hectare' => new U(name: 'area-hectare', long: ['name' => 'hektari', 'plurals' => ['one' => '{0} hektar', 'few' => '{0} hektara', 'other' => '{0} hektara'], 'perUnit' => ''], short: ['name' => 'hektari', 'plurals' => ['one' => '{0} ha', 'few' => '{0} ha', 'other' => '{0} ha'], 'perUnit' => ''], narrow: ['name' => 'hektari', 'plurals' => ['one' => '{0} ha', 'few' => '{0} ha', 'other' => '{0} ha'], 'perUnit' => '']),
    'percent' => new U(name: 'concentr-percent', long: ['name' => 'procenat', 'plurals' => ['one' => '{0} procenat', 'few' => '{0} procenata', 'other' => '{0} procenata'], 'perUnit' => ''], short: ['name' => 'procenat', 'plurals' => ['one' => '{0}%', 'few' => '{0}%', 'other' => '{0}%'], 'perUnit' => ''], narrow: ['name' => '%', 'plurals' => ['one' => '{0}%', 'few' => '{0}%', 'other' => '{0}%'], 'perUnit' => '']),
    'bit' => new U(name: 'digital-bit', long: ['name' => 'bitovi', 'plurals' => ['one' => '{0} bit', 'few' => '{0} bita', 'other' => '{0} bitova'], 'perUnit' => ''], short: ['name' => 'bit', 'plurals' => ['one' => '{0} b', 'few' => '{0} b', 'other' => '{0} b'], 'perUnit' => ''], narrow: ['name' => 'bit', 'plurals' => ['one' => '{0} b', 'few' => '{0} b', 'other' => '{0} b'], 'perUnit' => '']),
    'byte' => new U(name: 'digital-byte', long: ['name' => 'bajtovi', 'plurals' => ['one' => '{0} bajt', 'few' => '{0} bajta', 'other' => '{0} bajtova'], 'perUnit' => ''], short: ['name' => 'bajt', 'plurals' => ['one' => '{0} B', 'few' => '{0} B', 'other' => '{0} B'], 'perUnit' => ''], narrow: ['name' => 'bajt', 'plurals' => ['one' => '{0} B', 'few' => '{0} B', 'other' => '{0} B'], 'perUnit' => '']),
    'gigabit' => new U(name: 'digital-gigabit', long: ['name' => 'gigabitovi', 'plurals' => ['one' => '{0} gigabit', 'few' => '{0} gigabita', 'other' => '{0} gigabitova'], 'perUnit' => ''], short: ['name' => 'Gb', 'plurals' => ['one' => '{0} Gb', 'few' => '{0} Gb', 'other' => '{0} Gb'], 'perUnit' => ''], narrow: ['name' => 'Gb', 'plurals' => ['one' => '{0} Gb', 'few' => '{0} Gb', 'other' => '{0} Gb'], 'perUnit' => '']),
    'gigabyte' => new U(name: 'digital-gigabyte', long: ['name' => 'gigabajti', 'plurals' => ['one' => '{0} gigabajt', 'few' => '{0} gigabajta', 'other' => '{0} gigabajtova'], 'perUnit' => ''], short: ['name' => 'GB', 'plurals' => ['one' => '{0} GB', 'few' => '{0} GB', 'other' => '{0} GB'], 'perUnit' => ''], narrow: ['name' => 'GB', 'plurals' => ['one' => '{0} GB', 'few' => '{0} GB', 'other' => '{0} GB'], 'perUnit' => '']),
    'kilobit' => new U(name: 'digital-kilobit', long: ['name' => 'kilobitovi', 'plurals' => ['one' => '{0} kilobit', 'few' => '{0} kilobita', 'other' => '{0} kilobitova'], 'perUnit' => ''], short: ['name' => 'kb', 'plurals' => ['one' => '{0} kb', 'few' => '{0} kb', 'other' => '{0} kb'], 'perUnit' => ''], narrow: ['name' => 'kb', 'plurals' => ['one' => '{0} kb', 'few' => '{0} kb', 'other' => '{0} kb'], 'perUnit' => '']),
    'kilobyte' => new U(name: 'digital-kilobyte', long: ['name' => 'kilobajti', 'plurals' => ['one' => '{0} kilobajt', 'few' => '{0} kilobajta', 'other' => '{0} kilobajtova'], 'perUnit' => ''], short: ['name' => 'kB', 'plurals' => ['one' => '{0} kB', 'few' => '{0} kB', 'other' => '{0} kB'], 'perUnit' => ''], narrow: ['name' => 'kB', 'plurals' => ['one' => '{0} kB', 'few' => '{0} kB', 'other' => '{0} kB'], 'perUnit' => '']),
    'megabit' => new U(name: 'digital-megabit', long: ['name' => 'megabitovi', 'plurals' => ['one' => '{0} megabit', 'few' => '{0} megabita', 'other' => '{0} megabitova'], 'perUnit' => ''], short: ['name' => 'Mb', 'plurals' => ['one' => '{0} Mb', 'few' => '{0} Mb', 'other' => '{0} Mb'], 'perUnit' => ''], narrow: ['name' => 'Mb', 'plurals' => ['one' => '{0} Mb', 'few' => '{0} Mb', 'other' => '{0} Mb'], 'perUnit' => '']),
    'megabyte' => new U(name: 'digital-megabyte', long: ['name' => 'megabajti', 'plurals' => ['one' => '{0} megabajt', 'few' => '{0} megabajta', 'other' => '{0} megabajtova'], 'perUnit' => ''], short: ['name' => 'MB', 'plurals' => ['one' => '{0} MB', 'few' => '{0} MB', 'other' => '{0} MB'], 'perUnit' => ''], narrow: ['name' => 'MB', 'plurals' => ['one' => '{0} MB', 'few' => '{0} MB', 'other' => '{0} MB'], 'perUnit' => '']),
    'petabyte' => new U(name: 'digital-petabyte', long: ['name' => 'petabajti', 'plurals' => ['one' => '{0} petabajt', 'few' => '{0} petabajta', 'other' => '{0} petabajtova'], 'perUnit' => ''], short: ['name' => 'PB', 'plurals' => ['one' => '{0} PB', 'few' => '{0} PB', 'other' => '{0} PB'], 'perUnit' => ''], narrow: ['name' => 'PB', 'plurals' => ['one' => '{0} PB', 'few' => '{0} PB', 'other' => '{0} PB'], 'perUnit' => '']),
    'terabit' => new U(name: 'digital-terabit', long: ['name' => 'terabitovi', 'plurals' => ['one' => '{0} terabit', 'few' => '{0} terabita', 'other' => '{0} terabitova'], 'perUnit' => ''], short: ['name' => 'Tb', 'plurals' => ['one' => '{0} Tb', 'few' => '{0} Tb', 'other' => '{0} Tb'], 'perUnit' => ''], narrow: ['name' => 'Tb', 'plurals' => ['one' => '{0} Tb', 'few' => '{0} Tb', 'other' => '{0} Tb'], 'perUnit' => '']),
    'terabyte' => new U(name: 'digital-terabyte', long: ['name' => 'terabajti', 'plurals' => ['one' => '{0} terabajt', 'few' => '{0} terabajta', 'other' => '{0} terabajta'], 'perUnit' => ''], short: ['name' => 'TB', 'plurals' => ['one' => '{0} TB', 'few' => '{0} TB', 'other' => '{0} TB'], 'perUnit' => ''], narrow: ['name' => 'TB', 'plurals' => ['one' => '{0} TB', 'few' => '{0} TB', 'other' => '{0} TB'], 'perUnit' => '']),
    'day' => new U(name: 'duration-day', long: ['name' => 'dani', 'plurals' => ['one' => '{0} dan', 'few' => '{0} dana', 'other' => '{0} dana'], 'perUnit' => '{0}/dnevno'], short: ['name' => 'd.', 'plurals' => ['one' => '{0} dan', 'few' => '{0} dana', 'other' => '{0} dana'], 'perUnit' => '{0}/d'], narrow: ['name' => 'd', 'plurals' => ['one' => '{0} d', 'few' => '{0} d', 'other' => '{0} d'], 'perUnit' => '{0}/d']),
    'hour' => new U(name: 'duration-hour', long: ['name' => 'sati', 'plurals' => ['one' => '{0} sat', 'few' => '{0} sata', 'other' => '{0} sati'], 'perUnit' => '{0}/sat'], short: ['name' => 'sati', 'plurals' => ['one' => '{0} sat', 'few' => '{0} sata', 'other' => '{0} sati'], 'perUnit' => '{0}/č'], narrow: ['name' => 'č', 'plurals' => ['one' => '{0} č', 'few' => '{0} č', 'other' => '{0} č'], 'perUnit' => '{0}/č']),
    'millisecond' => new U(name: 'duration-millisecond', long: ['name' => 'milisekunde', 'plurals' => ['one' => '{0} milisekunda', 'few' => '{0} milisekunde', 'other' => '{0} milisekundi'], 'perUnit' => ''], short: ['name' => 'ms', 'plurals' => ['one' => '{0} ms', 'few' => '{0} ms', 'other' => '{0} ms'], 'perUnit' => ''], narrow: ['name' => 'ms', 'plurals' => ['one' => '{0} ms', 'few' => '{0} ms', 'other' => '{0} ms'], 'perUnit' => '']),
    'minute' => new U(name: 'duration-minute', long: ['name' => 'minuti', 'plurals' => ['one' => '{0} minut', 'few' => '{0} minuta', 'other' => '{0} minuta'], 'perUnit' => '{0} u minutu'], short: ['name' => 'min', 'plurals' => ['one' => '{0} min', 'few' => '{0} min', 'other' => '{0} min'], 'perUnit' => '{0}/min'], narrow: ['name' => 'min', 'plurals' => ['one' => '{0} m', 'few' => '{0} m', 'other' => '{0} m'], 'perUnit' => '{0}/min']),
    'month' => new U(name: 'duration-month', long: ['name' => 'mjeseci', 'plurals' => ['one' => '{0} mjesec', 'few' => '{0} mjeseca', 'other' => '{0} mjeseci'], 'perUnit' => '{0} mjesečno'], short: ['name' => 'mjeseci', 'plurals' => ['one' => '{0} mjes.', 'few' => '{0} mjes.', 'other' => '{0} mjes.'], 'perUnit' => '{0}/m'], narrow: ['name' => 'm.', 'plurals' => ['one' => '{0} m', 'few' => '{0} m', 'other' => '{0} m'], 'perUnit' => '{0}/m']),
    'second' => new U(name: 'duration-second', long: ['name' => 'sekunde', 'plurals' => ['one' => '{0} sekunda', 'few' => '{0} sekunde', 'other' => '{0} sekundi'], 'perUnit' => '{0}/u sekundi'], short: ['name' => 'sek', 'plurals' => ['one' => '{0} sek', 'few' => '{0} sek', 'other' => '{0} sek'], 'perUnit' => '{0}/s'], narrow: ['name' => 's', 'plurals' => ['one' => '{0} s', 'few' => '{0} s', 'other' => '{0} s'], 'perUnit' => '{0}/s']),
    'week' => new U(name: 'duration-week', long: ['name' => 'nedjelje', 'plurals' => ['one' => '{0} nedjelja', 'few' => '{0} nedjelje', 'other' => '{0} nedjelja'], 'perUnit' => '{0} nedjeljno'], short: ['name' => 'ned.', 'plurals' => ['one' => '{0} ned.', 'few' => '{0} ned.', 'other' => '{0} ned.'], 'perUnit' => '{0}/n'], narrow: ['name' => 'n.', 'plurals' => ['one' => '{0} n', 'few' => '{0} n', 'other' => '{0} n'], 'perUnit' => '{0}/n']),
    'year' => new U(name: 'duration-year', long: ['name' => 'godine', 'plurals' => ['one' => '{0} godina', 'few' => '{0} godine', 'other' => '{0} godina'], 'perUnit' => '{0} godišnje'], short: ['name' => 'god.', 'plurals' => ['one' => '{0} god', 'few' => '{0} god.', 'other' => '{0} god.'], 'perUnit' => '{0}/god'], narrow: ['name' => 'g.', 'plurals' => ['one' => '{0} g', 'few' => '{0} g', 'other' => '{0} g'], 'perUnit' => '{0}/god']),
    'centimeter' => new U(name: 'length-centimeter', long: ['name' => 'centimetri', 'plurals' => ['one' => '{0} centimetar', 'few' => '{0} centimetra', 'other' => '{0} centimetara'], 'perUnit' => '{0}/cm'], short: ['name' => 'cm', 'plurals' => ['one' => '{0} cm', 'few' => '{0} cm', 'other' => '{0} cm'], 'perUnit' => '{0}/cm'], narrow: ['name' => 'cm', 'plurals' => ['one' => '{0} cm', 'few' => '{0} cm', 'other' => '{0} cm'], 'perUnit' => '{0}/cm']),
    'foot' => new U(name: 'length-foot', long: ['name' => 'stope', 'plurals' => ['one' => '{0} stopa', 'few' => '{0} stope', 'other' => '{0} stopa'], 'perUnit' => '{0}/ft'], short: ['name' => 'ft', 'plurals' => ['one' => '{0} ft', 'few' => '{0} ft', 'other' => '{0} ft'], 'perUnit' => '{0}/ft'], narrow: ['name' => 'ft', 'plurals' => ['one' => '{0} ft', 'few' => '{0} ft', 'other' => '{0} ft'], 'perUnit' => '{0}/ft']),
    'inch' => new U(name: 'length-inch', long: ['name' => 'inči', 'plurals' => ['one' => '{0} inč', 'few' => '{0} inča', 'other' => '{0} inča'], 'perUnit' => '{0}/in'], short: ['name' => 'inči', 'plurals' => ['one' => '{0} inč', 'few' => '{0} inča', 'other' => '{0} inča'], 'perUnit' => '{0}/in'], narrow: ['name' => 'in', 'plurals' => ['one' => '{0} in', 'few' => '{0} in', 'other' => '{0} in'], 'perUnit' => '{0}/in']),
    'kilometer' => new U(name: 'length-kilometer', long: ['name' => 'kilometri', 'plurals' => ['one' => '{0} kilometar', 'few' => '{0} kilometra', 'other' => '{0} kilometara'], 'perUnit' => '{0}/km'], short: ['name' => 'km', 'plurals' => ['one' => '{0} km', 'few' => '{0} km', 'other' => '{0} km'], 'perUnit' => '{0}/km'], narrow: ['name' => 'km', 'plurals' => ['one' => '{0} km', 'few' => '{0} km', 'other' => '{0} km'], 'perUnit' => '{0}/km']),
    'meter' => new U(name: 'length-meter', long: ['name' => 'metri', 'plurals' => ['one' => '{0} metar', 'few' => '{0} metra', 'other' => '{0} metara'], 'perUnit' => '{0}/m'], short: ['name' => 'm', 'plurals' => ['one' => '{0} m', 'few' => '{0} m', 'other' => '{0} m'], 'perUnit' => '{0}/m'], narrow: ['name' => 'm', 'plurals' => ['one' => '{0} m', 'few' => '{0} m', 'other' => '{0} m'], 'perUnit' => '{0}/m']),
    'mile' => new U(name: 'length-mile', long: ['name' => 'milje', 'plurals' => ['one' => '{0} milja', 'few' => '{0} milje', 'other' => '{0} milja'], 'perUnit' => ''], short: ['name' => 'milje', 'plurals' => ['one' => '{0} mi', 'few' => '{0} mi', 'other' => '{0} mi'], 'perUnit' => ''], narrow: ['name' => 'milje', 'plurals' => ['one' => '{0} milja', 'few' => '{0} milje', 'other' => '{0} milja'], 'perUnit' => '']),
    'mile-scandinavian' => new U(name: 'length-mile-scandinavian', long: ['name' => 'skandinavska milja', 'plurals' => ['one' => '{0} skandinavska milja', 'few' => '{0} skandinavske milje', 'other' => '{0} skandinavskih milja'], 'perUnit' => ''], short: ['name' => 'smi', 'plurals' => ['one' => '{0} smi', 'few' => '{0} smi', 'other' => '{0} smi'], 'perUnit' => ''], narrow: ['name' => 'smi', 'plurals' => ['one' => '{0} smi', 'few' => '{0} smi', 'other' => '{0} smi'], 'perUnit' => '']),
    'millimeter' => new U(name: 'length-millimeter', long: ['name' => 'milimetri', 'plurals' => ['one' => '{0} milimetar', 'few' => '{0} milimetra', 'other' => '{0} milimetara'], 'perUnit' => ''], short: ['name' => 'mm', 'plurals' => ['one' => '{0} mm', 'few' => '{0} mm', 'other' => '{0} mm'], 'perUnit' => ''], narrow: ['name' => 'mm', 'plurals' => ['one' => '{0} mm', 'few' => '{0} mm', 'other' => '{0} mm'], 'perUnit' => '']),
    'yard' => new U(name: 'length-yard', long: ['name' => 'jardi', 'plurals' => ['one' => '{0} jard', 'few' => '{0} jarda', 'other' => '{0} jardi'], 'perUnit' => ''], short: ['name' => 'jardi', 'plurals' => ['one' => '{0} jrd', 'few' => '{0} jrd', 'other' => '{0} jrd'], 'perUnit' => ''], narrow: ['name' => 'yd', 'plurals' => ['one' => '{0} yd', 'few' => '{0} yd', 'other' => '{0} yd'], 'perUnit' => '']),
    'gram' => new U(name: 'mass-gram', long: ['name' => 'grami', 'plurals' => ['one' => '{0} gram', 'few' => '{0} grama', 'other' => '{0} grama'], 'perUnit' => '{0} po gramu'], short: ['name' => 'grami', 'plurals' => ['one' => '{0} g', 'few' => '{0} g', 'other' => '{0} g'], 'perUnit' => '{0}/g'], narrow: ['name' => 'g', 'plurals' => ['one' => '{0} g', 'few' => '{0} g', 'other' => '{0} g'], 'perUnit' => '{0}/g']),
    'kilogram' => new U(name: 'mass-kilogram', long: ['name' => 'kilogrami', 'plurals' => ['one' => '{0} kilogram', 'few' => '{0} kilograma', 'other' => '{0} kilograma'], 'perUnit' => '{0} po kilogramu'], short: ['name' => 'kg', 'plurals' => ['one' => '{0} kg', 'few' => '{0} kg', 'other' => '{0} kg'], 'perUnit' => '{0}/kg'], narrow: ['name' => 'kg', 'plurals' => ['one' => '{0} kg', 'few' => '{0} kg', 'other' => '{0} kg'], 'perUnit' => '{0}/kg']),
    'ounce' => new U(name: 'mass-ounce', long: ['name' => 'unce', 'plurals' => ['one' => '{0} unca', 'few' => '{0} unce', 'other' => '{0} unci'], 'perUnit' => '{0} po unci'], short: ['name' => 'oz', 'plurals' => ['one' => '{0} oz', 'few' => '{0} oz', 'other' => '{0} oz'], 'perUnit' => '{0}/oz'], narrow: ['name' => 'oz', 'plurals' => ['one' => '{0} unca', 'few' => '{0} unce', 'other' => '{0} unci'], 'perUnit' => '{0}/oz']),
    'pound' => new U(name: 'mass-pound', long: ['name' => 'funte', 'plurals' => ['one' => '{0} funta', 'few' => '{0} funte', 'other' => '{0} funti'], 'perUnit' => '{0} po funti'], short: ['name' => 'lb', 'plurals' => ['one' => '{0} lb', 'few' => '{0} lb', 'other' => '{0} lb'], 'perUnit' => '{0}/lb'], narrow: ['name' => 'lb', 'plurals' => ['one' => '{0} lb', 'few' => '{0} lb', 'other' => '{0} lb'], 'perUnit' => '{0}/lb']),
    'stone' => new U(name: 'mass-stone', long: ['name' => 'američke tone', 'plurals' => ['one' => '{0} američka tona', 'few' => '{0} američke tone', 'other' => '{0} američkih tona'], 'perUnit' => ''], short: ['name' => 'st', 'plurals' => ['one' => '{0} st', 'few' => '{0} st', 'other' => '{0} st'], 'perUnit' => ''], narrow: ['name' => 'st', 'plurals' => ['one' => '{0} st', 'few' => '{0} st', 'other' => '{0} st'], 'perUnit' => '']),
    'celsius' => new U(name: 'temperature-celsius', long: ['name' => 'stepeni Celzijusa', 'plurals' => ['one' => '{0} stepen Celzijusa', 'few' => '{0} stepena Celzijusa', 'other' => '{0} stepeni Celzijusa'], 'perUnit' => ''], short: ['name' => '°C', 'plurals' => ['one' => '{0}°C', 'few' => '{0}°C', 'other' => '{0}°C'], 'perUnit' => ''], narrow: ['name' => '°C', 'plurals' => ['one' => '{0}°C', 'few' => '{0}°C', 'other' => '{0}°C'], 'perUnit' => '']),
    'fahrenheit' => new U(name: 'temperature-fahrenheit', long: ['name' => 'stepeni Farenhajta', 'plurals' => ['one' => '{0} stepen Farenhajta', 'few' => '{0} stepena Farenhajta', 'other' => '{0} stepeni Farenhajta'], 'perUnit' => ''], short: ['name' => 'stepeni Farenhajta', 'plurals' => ['one' => '{0}°F', 'few' => '{0}°F', 'other' => '{0}°F'], 'perUnit' => ''], narrow: ['name' => 'stepeni Farenhajta', 'plurals' => ['one' => '{0}°F', 'few' => '{0}°F', 'other' => '{0}°F'], 'perUnit' => '']),
    'fluid-ounce' => new U(name: 'volume-fluid-ounce', long: ['name' => 'unce tečnosti', 'plurals' => ['one' => '{0} unca tečnosti', 'few' => '{0} unce tečnosti', 'other' => '{0} unci tečnosti'], 'perUnit' => ''], short: ['name' => 'fl oz', 'plurals' => ['one' => '{0} fl oz', 'few' => '{0} fl oz', 'other' => '{0} fl oz'], 'perUnit' => ''], narrow: ['name' => 'fl oz', 'plurals' => ['one' => '{0} fl oz', 'few' => '{0} fl oz', 'other' => '{0} fl oz'], 'perUnit' => '']),
    'gallon' => new U(name: 'volume-gallon', long: ['name' => 'galoni', 'plurals' => ['one' => '{0} galon', 'few' => '{0} galona', 'other' => '{0} galona'], 'perUnit' => '{0} po galonu'], short: ['name' => 'gal', 'plurals' => ['one' => '{0} gal', 'few' => '{0} gal', 'other' => '{0} gal'], 'perUnit' => '{0}/gal'], narrow: ['name' => 'gal', 'plurals' => ['one' => '{0} gal', 'few' => '{0} gal', 'other' => '{0} gal'], 'perUnit' => '{0}/gal']),
    'liter' => new U(name: 'volume-liter', long: ['name' => 'litri', 'plurals' => ['one' => '{0} litar', 'few' => '{0} litra', 'other' => '{0} litara'], 'perUnit' => '{0} po litri'], short: ['name' => 'litri', 'plurals' => ['one' => '{0} l', 'few' => '{0} l', 'other' => '{0} l'], 'perUnit' => '{0}/l'], narrow: ['name' => 'l', 'plurals' => ['one' => '{0} l', 'few' => '{0} l', 'other' => '{0} l'], 'perUnit' => '{0}/l']),
    'milliliter' => new U(name: 'volume-milliliter', long: ['name' => 'mililitri', 'plurals' => ['one' => '{0} mililitar', 'few' => '{0} mililitra', 'other' => '{0} mililitara'], 'perUnit' => ''], short: ['name' => 'mL', 'plurals' => ['one' => '{0} mL', 'few' => '{0} mL', 'other' => '{0} mL'], 'perUnit' => ''], narrow: ['name' => 'mL', 'plurals' => ['one' => '{0} mL', 'few' => '{0} mL', 'other' => '{0} mL'], 'perUnit' => '']),
];
