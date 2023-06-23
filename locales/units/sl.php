<?php

use Major\Fluent\Formatters\Number\Locale\Unit as U;

return [
    'acre' => new U(['one' => '{0} aker', 'two' => '{0} akra', 'few' => '{0} akri', 'other' => '{0} akrov'], ['other' => '{0} ac'], ['other' => '{0} ac']),
    'bit' => new U(['one' => '{0} bit', 'two' => '{0} bita', 'few' => '{0} biti', 'other' => '{0} bitov'], ['one' => '{0} bit', 'two' => '{0} bita', 'few' => '{0} biti', 'other' => '{0} bitov'], ['one' => '{0} bit', 'two' => '{0} bita', 'few' => '{0} biti', 'other' => '{0} bitov']),
    'byte' => new U(['one' => '{0} bajt', 'two' => '{0} bajta', 'few' => '{0} bajti', 'other' => '{0} bajtov'], ['one' => '{0} bajt', 'two' => '{0} bajta', 'few' => '{0} bajti', 'other' => '{0} bajtov'], ['one' => '{0} bajt', 'two' => '{0} bajta', 'few' => '{0} bajti', 'other' => '{0} B']),
    'celsius' => new U(['one' => '{0} stopinja Celzija', 'two' => '{0} stopinji Celzija', 'few' => '{0} stopinje Celzija', 'other' => '{0} stopinj Celzija'], ['other' => '{0} °C'], ['other' => '{0} °']),
    'centimeter' => new U(['one' => '{0} centimeter', 'two' => '{0} centimetra', 'few' => '{0} centimetri', 'other' => '{0} centimetrov'], ['other' => '{0} cm'], ['other' => '{0} cm']),
    'day' => new U(['one' => '{0} dan', 'two' => '{0} dneva', 'other' => '{0} dni'], ['other' => '{0} d'], ['other' => '{0} d']),
    'degree' => new U(['one' => '{0} stopinja', 'two' => '{0} stopinji', 'few' => '{0} stopinje', 'other' => '{0} stopinj'], ['other' => '{0} °'], ['other' => '{0} °']),
    'fahrenheit' => new U(['one' => '{0} stopinja Farenheita', 'two' => '{0} stopinji Farenheita', 'few' => '{0} stopinje Farenheita', 'other' => '{0} stopinj Farenheita'], ['other' => '{0} °F'], ['other' => '{0} °F']),
    'fluid-ounce' => new U(['one' => '{0} tekoča unča', 'two' => '{0} tekoči unči', 'few' => '{0} tekoče unče', 'other' => '{0} tekočih unč'], ['other' => '{0} fl oz'], ['other' => '{0} fl oz']),
    'foot' => new U(['one' => '{0} čevelj', 'two' => '{0} čevlja', 'few' => '{0} čevlji', 'other' => '{0} čevljev'], ['other' => '{0} ft'], ['other' => '{0} ft']),
    'gallon' => new U(['one' => '{0} galona', 'two' => '{0} galoni', 'few' => '{0} galone', 'other' => '{0} galon'], ['other' => '{0} gal'], ['other' => '{0} gal']),
    'gigabit' => new U(['one' => '{0} gigabit', 'two' => '{0} gigabita', 'few' => '{0} gigabiti', 'other' => '{0} gigabitov'], ['other' => '{0} Gb'], ['other' => '{0} Gb']),
    'gigabyte' => new U(['one' => '{0} gigabajt', 'two' => '{0} gigabajta', 'few' => '{0} gigabajti', 'other' => '{0} gigabajtov'], ['other' => '{0} GB'], ['other' => '{0} GB']),
    'gram' => new U(['one' => '{0} gram', 'two' => '{0} grama', 'few' => '{0} grami', 'other' => '{0} gramov'], ['other' => '{0} g'], ['other' => '{0} g']),
    'hectare' => new U(['one' => '{0} hektar', 'two' => '{0} hektara', 'few' => '{0} hektari', 'other' => '{0} hektarov'], ['other' => '{0} ha'], ['other' => '{0} ha']),
    'hour' => new U(['one' => '{0} ura', 'two' => '{0} uri', 'few' => '{0} ure', 'other' => '{0} ur'], ['other' => '{0} h'], ['other' => '{0} h']),
    'inch' => new U(['one' => '{0} palec', 'two' => '{0} palca', 'few' => '{0} palci', 'other' => '{0} palcev'], ['other' => '{0} in'], ['other' => '{0} in']),
    'kilobit' => new U(['one' => '{0} kilobit', 'two' => '{0} kilobita', 'few' => '{0} kilobiti', 'other' => '{0} kilobitov'], ['other' => '{0} kb'], ['other' => '{0} kb']),
    'kilobyte' => new U(['one' => '{0} kilobajt', 'two' => '{0} kilobajta', 'few' => '{0} kilobajti', 'other' => '{0} kilobajtov'], ['other' => '{0} kB'], ['other' => '{0} kB']),
    'kilogram' => new U(['one' => '{0} kilogram', 'two' => '{0} kilograma', 'few' => '{0} kilogrami', 'other' => '{0} kilogramov'], ['other' => '{0} kg'], ['other' => '{0} kg']),
    'kilometer' => new U(['one' => '{0} kilometer', 'two' => '{0} kilometra', 'few' => '{0} kilometri', 'other' => '{0} kilometrov'], ['other' => '{0} km'], ['other' => '{0} km']),
    'liter' => new U(['one' => '{0} liter', 'two' => '{0} litra', 'few' => '{0} litri', 'other' => '{0} litrov'], ['other' => '{0} l'], ['other' => '{0} l']),
    'megabit' => new U(['one' => '{0} megabit', 'two' => '{0} megabita', 'few' => '{0} megabiti', 'other' => '{0} megabitov'], ['other' => '{0} Mb'], ['other' => '{0} Mb']),
    'megabyte' => new U(['one' => '{0} megabajt', 'two' => '{0} megabajta', 'few' => '{0} megabajti', 'other' => '{0} megabajtov'], ['other' => '{0} MB'], ['other' => '{0} MB']),
    'meter' => new U(['one' => '{0} meter', 'two' => '{0} metra', 'few' => '{0} metri', 'other' => '{0} metrov'], ['other' => '{0} m'], ['other' => '{0} m']),
    'microsecond' => new U(['one' => '{0} mikrosekunda', 'two' => '{0} mikrosekundi', 'few' => '{0} mikrosekunde', 'other' => '{0} mikrosekund'], ['other' => '{0} μs'], ['other' => '{0} μs']),
    'mile' => new U(['one' => '{0} milja', 'two' => '{0} milji', 'few' => '{0} milje', 'other' => '{0} milj'], ['other' => '{0} mi'], ['other' => '{0} mi']),
    'mile-scandinavian' => new U(['one' => '{0} skandinavska milja', 'two' => '{0} skandinavski milji', 'few' => '{0} skandinavske milje', 'other' => '{0} skandinavskih milj'], ['other' => '{0} smi'], ['other' => '{0} smi']),
    'milliliter' => new U(['one' => '{0} mililiter', 'two' => '{0} mililitra', 'few' => '{0} mililitri', 'other' => '{0} militrov'], ['other' => '{0} ml'], ['other' => '{0} ml']),
    'millimeter' => new U(['one' => '{0} milimeter', 'two' => '{0} milimetra', 'few' => '{0} milimetri', 'other' => '{0} milimetrov'], ['other' => '{0} mm'], ['other' => '{0} mm']),
    'millisecond' => new U(['one' => '{0} milisekunda', 'two' => '{0} millisekundi', 'few' => '{0} milisekunde', 'other' => '{0} milisekund'], ['other' => '{0} ms'], ['other' => '{0} ms']),
    'minute' => new U(['one' => '{0} minuta', 'two' => '{0} minuti', 'few' => '{0} minute', 'other' => '{0} minut'], ['other' => '{0} min'], ['other' => '{0} min']),
    'month' => new U(['one' => '{0} mesec', 'two' => '{0} meseca', 'few' => '{0} meseci', 'other' => '{0} mesecev'], ['other' => '{0} m'], ['other' => '{0} m']),
    'nanosecond' => new U(['one' => '{0} nanosekunda', 'two' => '{0} nanosekundi', 'few' => '{0} nanosekunde', 'other' => '{0} nanosekund'], ['other' => '{0} ns'], ['other' => '{0} ns']),
    'ounce' => new U(['one' => '{0} unča', 'two' => '{0} unči', 'few' => '{0} unče', 'other' => '{0} unč'], ['other' => '{0} oz'], ['other' => '{0} oz']),
    'percent' => new U(['one' => '{0} odstotek', 'two' => '{0} odstotka', 'few' => '{0} odstotki', 'other' => '{0} odstotkov'], ['other' => '{0} %'], ['other' => '{0} %']),
    'petabyte' => new U(['one' => '{0} petabajt', 'two' => '{0} petabajta', 'few' => '{0} petabajti', 'other' => '{0} petabajtov'], ['other' => '{0} PB'], ['other' => '{0} PB']),
    'pound' => new U(['one' => '{0} funt', 'two' => '{0} funta', 'few' => '{0} funti', 'other' => '{0} funtov'], ['other' => '{0} lb'], ['other' => '{0} lb']),
    'second' => new U(['one' => '{0} sekunda', 'two' => '{0} sekundi', 'few' => '{0} sekunde', 'other' => '{0} sekund'], ['other' => '{0} sek.'], ['other' => '{0} s']),
    'stone' => new U(['one' => '{0} stone', 'two' => '{0} stona', 'few' => '{0} stoni', 'other' => '{0} stonov'], ['other' => '{0} st'], ['other' => '{0} st']),
    'terabit' => new U(['one' => '{0} terabit', 'two' => '{0} terabita', 'few' => '{0} terabiti', 'other' => '{0} terabitov'], ['other' => '{0} Tb'], ['other' => '{0} Tb']),
    'terabyte' => new U(['one' => '{0} terabajt', 'two' => '{0} terabajta', 'few' => '{0} terabajti', 'other' => '{0} terabajtov'], ['other' => '{0} TB'], ['other' => '{0} TB']),
    'week' => new U(['one' => '{0} teden', 'two' => '{0} tedna', 'few' => '{0} tedni', 'other' => '{0} tednov'], ['other' => '{0} t'], ['other' => '{0} t']),
    'yard' => new U(['one' => '{0} jard', 'two' => '{0} jarda', 'few' => '{0} jardi', 'other' => '{0} jardov'], ['other' => '{0} yd'], ['other' => '{0} yd']),
    'year' => new U(['one' => '{0} leto', 'two' => '{0} leti', 'other' => '{0} let'], ['other' => '{0} l'], ['other' => '{0} l']),
];
