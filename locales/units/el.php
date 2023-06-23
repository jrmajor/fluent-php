<?php

use Major\Fluent\Formatters\Number\Locale\Unit as U;

return [
    'acre' => new U('{0} ακρ', '{0} ακρ', '{0} ακρ'),
    'bit' => new U('{0} bit', '{0} bit', '{0} bit'),
    'byte' => new U('{0} byte', '{0} byte', '{0} byte'),
    'celsius' => new U(['one' => '{0} βαθμός Κελσίου', 'other' => '{0} βαθμοί Κελσίου'], '{0}°C', '{0}°C'),
    'centimeter' => new U(['one' => '{0} εκατοστό', 'other' => '{0} εκατοστά'], '{0} εκ.', '{0} εκ.'),
    'day' => new U(['one' => '{0} ημέρα', 'other' => '{0} ημέρες'], ['one' => '{0} ημέρα', 'other' => '{0} ημέρες'], '{0} η'),
    'degree' => new U(['one' => '{0} μοίρα', 'other' => '{0} μοίρες'], '{0}°', '{0}°'),
    'fahrenheit' => new U(['one' => '{0} βαθμός Φαρενάιτ', 'other' => '{0} βαθμοί Φαρενάιτ'], '{0}°F', '{0}°F'),
    'fluid-ounce' => new U(['one' => '{0} ουγγιά όγκου', 'other' => '{0} ουγγιές όγκου'], '{0} fl oz', '{0} fl oz'),
    'foot' => new U(['one' => '{0} πόδι', 'other' => '{0} πόδια'], '{0} πδ', '{0} ft'),
    'gallon' => new U(['one' => '{0} γαλόνι', 'other' => '{0} γαλόνια'], '{0} γαλ.', '{0} γαλ.'),
    'gigabit' => new U('{0} gigabit', '{0} Gb', '{0} Gb'),
    'gigabyte' => new U('{0} gigabyte', '{0} GB', '{0} GB'),
    'gram' => new U(['one' => '{0} γραμμάριο', 'other' => '{0} γραμμάρια'], '{0} γρ.', '{0} γρ.'),
    'hectare' => new U(['one' => '{0} εκτάριο', 'other' => '{0} εκτάρια'], '{0} εκτ.', '{0} ha'),
    'hour' => new U(['one' => '{0} ώρα', 'other' => '{0} ώρες'], '{0} ώ.', '{0} ώ'),
    'inch' => new U(['one' => '{0} ίντσα', 'other' => '{0} ίντσες'], '{0} ίν.', '{0} in'),
    'kilobit' => new U('{0} kilobit', '{0} kb', '{0} kb'),
    'kilobyte' => new U('{0} kilobyte', '{0} kB', '{0} kB'),
    'kilogram' => new U(['one' => '{0} χιλιόγραμμο', 'other' => '{0} χιλιόγραμμα'], ['one' => '{0} κιλό', 'other' => '{0} κιλά'], '{0} kg'),
    'kilometer' => new U(['one' => '{0} χιλιόμετρο', 'other' => '{0} χιλιόμετρα'], '{0} χλμ.', '{0} χλμ.'),
    'liter' => new U(['one' => '{0} λίτρο', 'other' => '{0} λίτρα'], '{0} λίτ.', '{0} λ.'),
    'megabit' => new U('{0} megabit', '{0} Mb', '{0} Mb'),
    'megabyte' => new U('{0} megabyte', '{0} MB', '{0} MB'),
    'meter' => new U(['one' => '{0} μέτρο', 'other' => '{0} μέτρα'], '{0} μ.', '{0} μ.'),
    'microsecond' => new U(['one' => '{0} μικροδευτερόλεπτο', 'other' => '{0} μικροδευτερόλεπτα'], '{0} μs', '{0} μs'),
    'mile' => new U(['one' => '{0} μίλι', 'other' => '{0} μίλια'], '{0} μίλ.', '{0} mi'),
    'mile-scandinavian' => new U(['one' => '{0} σκανδιναβικό μίλι', 'other' => '{0} σκανδιναβικά μίλια'], ['one' => '{0} σκανδ. μίλι', 'other' => '{0} σκανδ. μίλια'], '{0}smi'),
    'milliliter' => new U(['one' => '{0} χιλιοστόλιτρο', 'other' => '{0} χιλιοστόλιτρα'], '{0} mL', '{0} mL'),
    'millimeter' => new U(['one' => '{0} χιλιοστόμετρο', 'other' => '{0} χιλιοστόμετρα'], '{0} χλστ.', '{0} χλστ.'),
    'millisecond' => new U(['one' => '{0} χιλιοστό του δευτερολέπτου', 'other' => '{0} χιλιοστά του δευτερολέπτου'], '{0} ms', '{0} ms'),
    'minute' => new U(['one' => '{0} λεπτό', 'other' => '{0} λεπτά'], '{0} λ.', '{0} λ'),
    'month' => new U(['one' => '{0} μήνας', 'other' => '{0} μήνες'], '{0} μήν.', '{0} μ'),
    'nanosecond' => new U(['one' => '{0} νανοδευτερόλεπτο', 'other' => '{0} νανοδευτερόλεπτα'], '{0} ns', '{0} ns'),
    'ounce' => new U(['one' => '{0} ουγγιά', 'other' => '{0} ουγγιές'], '{0} oz', '{0} oz'),
    'percent' => new U('{0} τοις εκατό', '{0}%', '{0}%'),
    'petabyte' => new U('{0} petabyte', '{0} PB', '{0} PB'),
    'pound' => new U(['one' => '{0} λίβρα', 'other' => '{0} λίβρες'], '{0} λβ', '{0} λβ'),
    'second' => new U(['one' => '{0} δευτερόλεπτο', 'other' => '{0} δευτερόλεπτα'], '{0} δευτ.', '{0} δ'),
    'stone' => new U('{0} stone', '{0} st', '{0} st'),
    'terabit' => new U('{0} terabit', '{0} Tb', '{0} Tb'),
    'terabyte' => new U('{0} terabyte', '{0} TB', '{0} TB'),
    'week' => new U(['one' => '{0} εβδομάδα', 'other' => '{0} εβδομάδες'], '{0} εβδ.', '{0} ε'),
    'yard' => new U(['one' => '{0} γιάρδα', 'other' => '{0} γιάρδες'], '{0} γρδ', '{0} yd'),
    'year' => new U(['one' => '{0} έτος', 'other' => '{0} έτη'], '{0} έτ.', '{0} έ'),
];