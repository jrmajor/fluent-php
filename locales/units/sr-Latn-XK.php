<?php

use Major\Fluent\Formatters\Number\Locale\Unit as U;

return [
    'acre' => new U(['one' => '{0} aker', 'other' => '{0} akera'], '{0} ac', '{0} ac'),
    'bit' => new U(['one' => '{0} bit', 'few' => '{0} bita', 'other' => '{0} bitova'], '{0} b', '{0} b'),
    'byte' => new U(['one' => '{0} bajt', 'few' => '{0} bajta', 'other' => '{0} bajtova'], '{0} B', '{0} B'),
    'celsius' => new U(['one' => '{0} stepen Celzijusa', 'few' => '{0} stepena Celzijusa', 'other' => '{0} stepeni Celzijusa'], '{0}°C', '{0}°C'),
    'centimeter' => new U(['one' => '{0} centimetar', 'few' => '{0} centimetra', 'other' => '{0} centimetara'], '{0} cm', '{0} cm'),
    'day' => new U(['one' => '{0} dan', 'other' => '{0} dana'], ['one' => '{0} dan', 'other' => '{0} dana'], '{0} d'),
    'degree' => new U(['one' => '{0} stepen', 'few' => '{0} stepena', 'other' => '{0} stepeni'], '{0}°', '{0}°'),
    'fahrenheit' => new U(['one' => '{0} stepen Farenhajta', 'few' => '{0} stepena Farenhajta', 'other' => '{0} stepeni Farenhajta'], '{0}°F', '{0}°F'),
    'fluid-ounce' => new U(['one' => '{0} unca tečnosti', 'few' => '{0} unce tečnosti', 'other' => '{0} unci tečnosti'], '{0} fl oz', '{0} fl oz'),
    'foot' => new U(['few' => '{0} stope', 'other' => '{0} stopa'], '{0} ft', '{0} ft'),
    'gallon' => new U(['one' => '{0} galon', 'other' => '{0} galona'], '{0} gal', '{0} gal'),
    'gigabit' => new U(['one' => '{0} gigabit', 'few' => '{0} gigabita', 'other' => '{0} gigabitova'], '{0} Gb', '{0} Gb'),
    'gigabyte' => new U(['one' => '{0} gigabajt', 'few' => '{0} gigabajta', 'other' => '{0} gigabajtova'], '{0} GB', '{0} GB'),
    'gram' => new U(['one' => '{0} gram', 'other' => '{0} grama'], '{0} g', '{0} g'),
    'hectare' => new U(['one' => '{0} hektar', 'other' => '{0} hektara'], '{0} ha', '{0} ha'),
    'hour' => new U(['one' => '{0} sat', 'few' => '{0} sata', 'other' => '{0} sati'], ['one' => '{0} sat', 'few' => '{0} sata', 'other' => '{0} sati'], '{0} č'),
    'inch' => new U(['one' => '{0} inč', 'other' => '{0} inča'], ['one' => '{0} inč', 'other' => '{0} inča'], '{0} in'),
    'kilobit' => new U(['one' => '{0} kilobit', 'few' => '{0} kilobita', 'other' => '{0} kilobitova'], '{0} kb', '{0} kb'),
    'kilobyte' => new U(['one' => '{0} kilobajt', 'few' => '{0} kilobajta', 'other' => '{0} kilobajtova'], '{0} kB', '{0} kB'),
    'kilogram' => new U(['one' => '{0} kilogram', 'other' => '{0} kilograma'], '{0} kg', '{0} kg'),
    'kilometer' => new U(['one' => '{0} kilometar', 'few' => '{0} kilometra', 'other' => '{0} kilometara'], '{0} km', '{0} km'),
    'liter' => new U(['one' => '{0} litar', 'few' => '{0} litra', 'other' => '{0} litara'], '{0} l', '{0} l'),
    'megabit' => new U(['one' => '{0} megabit', 'few' => '{0} megabita', 'other' => '{0} megabitova'], '{0} Mb', '{0} Mb'),
    'megabyte' => new U(['one' => '{0} megabajt', 'few' => '{0} megabajta', 'other' => '{0} megabajtova'], '{0} MB', '{0} MB'),
    'meter' => new U(['one' => '{0} metar', 'few' => '{0} metra', 'other' => '{0} metara'], '{0} m', '{0} m'),
    'microsecond' => new U(['one' => '{0} mikrosekunda', 'few' => '{0} mikrosekunde', 'other' => '{0} mikrosekundi'], '{0} μs', '{0} μs'),
    'mile' => new U(['few' => '{0} milje', 'other' => '{0} milja'], '{0} mi', ['few' => '{0} milje', 'other' => '{0} milja']),
    'mile-scandinavian' => new U(['one' => '{0} skandinavska milja', 'few' => '{0} skandinavske milje', 'other' => '{0} skandinavskih milja'], '{0} smi', '{0} smi'),
    'milliliter' => new U(['one' => '{0} mililitar', 'few' => '{0} mililitra', 'other' => '{0} mililitara'], '{0} mL', '{0} mL'),
    'millimeter' => new U(['one' => '{0} milimetar', 'few' => '{0} milimetra', 'other' => '{0} milimetara'], '{0} mm', '{0} mm'),
    'millisecond' => new U(['one' => '{0} milisekunda', 'few' => '{0} milisekunde', 'other' => '{0} milisekundi'], '{0} ms', '{0} ms'),
    'minute' => new U(['one' => '{0} minut', 'other' => '{0} minuta'], '{0} min', '{0} m'),
    'month' => new U(['one' => '{0} mesec', 'few' => '{0} meseca', 'other' => '{0} meseci'], '{0} mes.', '{0} m'),
    'nanosecond' => new U(['one' => '{0} nanosekunda', 'few' => '{0} nanosekunde', 'other' => '{0} nanosekundi'], '{0} ns', '{0} ns'),
    'ounce' => new U(['one' => '{0} unca', 'few' => '{0} unce', 'other' => '{0} unci'], '{0} oz', ['one' => '{0} unca', 'few' => '{0} unce', 'other' => '{0} unci']),
    'percent' => new U(['one' => '{0} procenat', 'other' => '{0} procenata'], '{0}%', '{0}%'),
    'petabyte' => new U(['one' => '{0} petabajt', 'few' => '{0} petabajta', 'other' => '{0} petabajtova'], '{0} PB', '{0} PB'),
    'pound' => new U(['one' => '{0} funta', 'few' => '{0} funte', 'other' => '{0} funti'], '{0} lb', '{0} lb'),
    'second' => new U(['one' => '{0} sekunda', 'few' => '{0} sekunde', 'other' => '{0} sekundi'], '{0} sek', '{0} s'),
    'stone' => new U(['one' => '{0} američka tona', 'few' => '{0} američke tone', 'other' => '{0} američkih tona'], '{0} st', '{0} st'),
    'terabit' => new U(['one' => '{0} terabit', 'few' => '{0} terabita', 'other' => '{0} terabitova'], '{0} Tb', '{0} Tb'),
    'terabyte' => new U(['one' => '{0} terabajt', 'other' => '{0} terabajta'], '{0} TB', '{0} TB'),
    'week' => new U(['few' => '{0} nedelje', 'other' => '{0} nedelja'], '{0} ned.', '{0} n'),
    'yard' => new U(['one' => '{0} jard', 'few' => '{0} jarda', 'other' => '{0} jardi'], '{0} jrd', '{0} yd'),
    'year' => new U(['few' => '{0} godine', 'other' => '{0} godina'], ['one' => '{0} god', 'other' => '{0} god.'], '{0} g'),
];
