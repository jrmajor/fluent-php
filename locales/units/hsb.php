<?php

use Major\Fluent\Formatters\Number\Locale\Unit as U;

return [
    'acre' => new U(['one' => '{0} acre', 'two' => '{0} acraj', 'few' => '{0} acry', 'other' => '{0} acrow'], '{0} ac', '{0} ac'),
    'bit' => new U(['one' => '{0} bit', 'two' => '{0} bitaj', 'few' => '{0} bity', 'other' => '{0} bitow'], '{0} bit', '{0} bit'),
    'byte' => new U(['one' => '{0} byte', 'two' => '{0} byteaj', 'few' => '{0} bytey', 'other' => '{0} byteow'], '{0} byte', '{0} byte'),
    'celsius' => new U(['one' => '{0} stopjeń Celsiusa', 'two' => '{0} stopnjej Celsiusa', 'few' => '{0} stopnje Celsiusa', 'other' => '{0} stopnjow Celsiusa'], '{0}°C', '{0}°C'),
    'centimeter' => new U(['one' => '{0} centimeter', 'two' => '{0} centimetraj', 'few' => '{0} centimetry', 'other' => '{0} centimetrow'], '{0} cm', '{0} cm'),
    'day' => new U(['one' => '{0} dźeń', 'two' => '{0} dnjej', 'few' => '{0} dny', 'other' => '{0} dnjow'], ['one' => '{0} dź.', 'other' => '{0} dn.'], '{0} d'),
    'degree' => new U(['one' => '{0} stopjeń', 'two' => '{0} stopnjej', 'few' => '{0} stopnje', 'other' => '{0} stopnjow'], '{0} °', '{0}°'),
    'fahrenheit' => new U(['one' => '{0} stopjeń Fahrenheita', 'two' => '{0} stopnjej Fahrenheita', 'few' => '{0} stopnje Fahrenheita', 'other' => '{0} stopnjow Fahrenheita'], '{0}°F', '{0}°F'),
    'fluid-ounce' => new U(['one' => '{0} běžita unca', 'two' => '{0} běžitej uncy', 'few' => '{0} běžite uncy', 'other' => '{0} běžitych uncow'], '{0} fl. oz.', '{0} fl. oz.'),
    'foot' => new U(['one' => '{0} stopa', 'two' => '{0} stopje', 'few' => '{0} stopy', 'other' => '{0} stopow'], '{0} ft', '{0} ft'),
    'gallon' => new U(['one' => '{0} galona', 'two' => '{0} galonje', 'few' => '{0} galony', 'other' => '{0} galonow'], '{0} gal', '{0} gal'),
    'gigabit' => new U(['one' => '{0} gigabit', 'two' => '{0} gigabitaj', 'few' => '{0} gigabity', 'other' => '{0} gigabitow'], '{0} Gb', '{0} Gb'),
    'gigabyte' => new U(['one' => '{0} gigabyte', 'two' => '{0} gigabyteaj', 'few' => '{0} gigabytey', 'other' => '{0} gigabyteow'], '{0} GB', '{0} GB'),
    'gram' => new U(['one' => '{0} gram', 'two' => '{0} gramaj', 'few' => '{0} gramy', 'other' => '{0} gramow'], '{0} g', '{0} g'),
    'hectare' => new U(['one' => '{0} hektar', 'two' => '{0} hektaraj', 'few' => '{0} hektary', 'other' => '{0} hektarow'], '{0} ha', '{0} ha'),
    'hour' => new U(['one' => '{0} hodźina', 'two' => '{0} hodźinje', 'few' => '{0} hodźiny', 'other' => '{0} hodźinow'], '{0} hodź.', '{0} h'),
    'inch' => new U(['one' => '{0} cól', 'two' => '{0} cólej', 'few' => '{0} cóle', 'other' => '{0} cólow'], '{0} in', '{0} in'),
    'kilobit' => new U(['one' => '{0} kilobit', 'two' => '{0} kilobitaj', 'few' => '{0} kilobity', 'other' => '{0} kilobitow'], '{0} kb', '{0} kb'),
    'kilobyte' => new U(['one' => '{0} kilobyte', 'two' => '{0} kilobyteaj', 'few' => '{0} kilobytey', 'other' => '{0} kilobyteow'], '{0} kB', '{0} kB'),
    'kilogram' => new U(['one' => '{0} kilogram', 'two' => '{0} kilogramaj', 'few' => '{0} kilogramy', 'other' => '{0} kilogramow'], '{0} kg', '{0} kg'),
    'kilometer' => new U(['one' => '{0} kilometer', 'two' => '{0} kilometraj', 'few' => '{0} kilometry', 'other' => '{0} kilometrow'], '{0} km', '{0} km'),
    'liter' => new U(['one' => '{0} liter', 'two' => '{0} litraj', 'few' => '{0} litry', 'other' => '{0} litrow'], '{0} l', '{0} l'),
    'megabit' => new U(['one' => '{0} megabit', 'two' => '{0} megabitaj', 'few' => '{0} megabity', 'other' => '{0} megabitow'], '{0} Mb', '{0} Mb'),
    'megabyte' => new U(['one' => '{0} megabyte', 'two' => '{0} megabyteaj', 'few' => '{0} megabytey', 'other' => '{0} megabyteow'], '{0} MB', '{0} MB'),
    'meter' => new U(['one' => '{0} meter', 'two' => '{0} metraj', 'few' => '{0} metry', 'other' => '{0} metrow'], '{0} m', '{0} m'),
    'microsecond' => new U(['one' => '{0} mikrosekunda', 'two' => '{0} mikrosekundźe', 'few' => '{0} mikrosekundy', 'other' => '{0} mikrosekundow'], '{0} μs', '{0} μs'),
    'mile' => new U(['one' => '{0} mila', 'two' => '{0} mili', 'few' => '{0} mile', 'other' => '{0} milow'], '{0} mi', '{0} mi'),
    'mile-scandinavian' => new U(['one' => '{0} skandinawiska mila', 'two' => '{0} skandinawiskej mili', 'few' => '{0} skandinawiske mile', 'other' => '{0} skandinawiskich milow'], '{0} smi', '{0} smi'),
    'milliliter' => new U(['one' => '{0} mililiter', 'two' => '{0} mililitraj', 'few' => '{0} mililitry', 'other' => '{0} mililitrow'], '{0} ml', '{0} ml'),
    'millimeter' => new U(['one' => '{0} milimeter', 'two' => '{0} milimetraj', 'few' => '{0} milimetry', 'other' => '{0} milimetrow'], '{0} mm', '{0} mm'),
    'millisecond' => new U(['one' => '{0} milisekunda', 'two' => '{0} milisekundźe', 'few' => '{0} milisekundy', 'other' => '{0} milisekundow'], '{0} ms', '{0} ms'),
    'minute' => new U(['one' => '{0} minuta', 'two' => '{0} minuće', 'few' => '{0} minuty', 'other' => '{0} minutow'], '{0} min.', '{0} min'),
    'month' => new U(['one' => '{0} měsac', 'two' => '{0} měsacaj', 'few' => '{0} měsacy', 'other' => '{0} měsacow'], '{0} měs.', '{0} měs.'),
    'nanosecond' => new U(['one' => '{0} nanosekunda', 'two' => '{0} nanosekundźe', 'few' => '{0} nanosekundy', 'other' => '{0} nanosekundow'], '{0} ns', '{0} ns'),
    'ounce' => new U(['one' => '{0} unca', 'two' => '{0} uncy', 'few' => '{0} uncy', 'other' => '{0} uncow'], '{0} oz', '{0} oz'),
    'percent' => new U(['one' => '{0} procent', 'two' => '{0} procentaj', 'few' => '{0} procenty', 'other' => '{0} procentow'], '{0} %', '{0} %'),
    'petabyte' => new U(['one' => '{0} petabyte', 'two' => '{0} petabyteaj', 'few' => '{0} petabytey', 'other' => '{0} petabyteow'], '{0} PB', '{0} PB'),
    'pound' => new U(['one' => '{0} punt', 'two' => '{0} puntaj', 'few' => '{0} punty', 'other' => '{0} puntow'], '{0} lb', '{0} lb'),
    'second' => new U(['one' => '{0} sekunda', 'two' => '{0} sekundźe', 'few' => '{0} sekundy', 'other' => '{0} sekundow'], '{0} sek.', '{0} s'),
    'stone' => new U(['one' => '{0} kamjeń', 'two' => '{0} kamjenjej', 'few' => '{0} kamjenje', 'other' => '{0} kamjenjow'], '{0} st', '{0} st'),
    'terabit' => new U(['one' => '{0} terabit', 'two' => '{0} terabitaj', 'few' => '{0} terabity', 'other' => '{0} terabitow'], '{0} Tb', '{0} Tb'),
    'terabyte' => new U(['one' => '{0} terabyte', 'two' => '{0} terabyteaj', 'few' => '{0} terabytey', 'other' => '{0} terabyteow'], '{0} TB', '{0} TB'),
    'week' => new U(['one' => '{0} tydźeń', 'two' => '{0} tydźenjej', 'few' => '{0} tydźenje', 'other' => '{0} tydźenjow'], '{0} tydź.', '{0} t.'),
    'yard' => new U(['one' => '{0} yard', 'two' => '{0} yardaj', 'few' => '{0} yardy', 'other' => '{0} yardow'], '{0} yd', '{0} yd'),
    'year' => new U(['one' => '{0} lěto', 'two' => '{0} lěće', 'few' => '{0} lěta', 'other' => '{0} lět'], '{0} l.', '{0} l.'),
];