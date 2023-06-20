<?php

use Major\Fluent\Formatters\Number\Locale\Unit as U;

return [
    'acre' => new U(name: 'area-acre', long: ['name' => 'ακρ', 'plurals' => ['one' => '{0} ακρ', 'other' => '{0} ακρ'], 'perUnit' => ''], short: ['name' => 'ακρ', 'plurals' => ['one' => '{0} ακρ', 'other' => '{0} ακρ'], 'perUnit' => ''], narrow: ['name' => 'ακρ', 'plurals' => ['one' => '{0} ακρ', 'other' => '{0} ακρ'], 'perUnit' => '']),
    'bit' => new U(name: 'digital-bit', long: ['name' => 'bit', 'plurals' => ['one' => '{0} bit', 'other' => '{0} bit'], 'perUnit' => ''], short: ['name' => 'bit', 'plurals' => ['one' => '{0} bit', 'other' => '{0} bit'], 'perUnit' => ''], narrow: ['name' => 'bit', 'plurals' => ['one' => '{0} bit', 'other' => '{0} bit'], 'perUnit' => '']),
    'byte' => new U(name: 'digital-byte', long: ['name' => 'byte', 'plurals' => ['one' => '{0} byte', 'other' => '{0} byte'], 'perUnit' => ''], short: ['name' => 'byte', 'plurals' => ['one' => '{0} byte', 'other' => '{0} byte'], 'perUnit' => ''], narrow: ['name' => 'byte', 'plurals' => ['one' => '{0} byte', 'other' => '{0} byte'], 'perUnit' => '']),
    'celsius' => new U(name: 'temperature-celsius', long: ['name' => 'βαθμοί Κελσίου', 'plurals' => ['one' => '{0} βαθμός Κελσίου', 'other' => '{0} βαθμοί Κελσίου'], 'perUnit' => ''], short: ['name' => 'βθμ C', 'plurals' => ['one' => '{0}°C', 'other' => '{0}°C'], 'perUnit' => ''], narrow: ['name' => '°C', 'plurals' => ['one' => '{0}°C', 'other' => '{0}°C'], 'perUnit' => '']),
    'centimeter' => new U(name: 'length-centimeter', long: ['name' => 'εκατοστά', 'plurals' => ['one' => '{0} εκατοστό', 'other' => '{0} εκατοστά'], 'perUnit' => '{0} ανά εκατοστό'], short: ['name' => 'εκ.', 'plurals' => ['one' => '{0} εκ.', 'other' => '{0} εκ.'], 'perUnit' => '{0}/εκ.'], narrow: ['name' => 'εκ.', 'plurals' => ['one' => '{0} εκ.', 'other' => '{0} εκ.'], 'perUnit' => '{0}/εκ.']),
    'day' => new U(name: 'duration-day', long: ['name' => 'ημέρες', 'plurals' => ['one' => '{0} ημέρα', 'other' => '{0} ημέρες'], 'perUnit' => '{0} ανά ημέρα'], short: ['name' => 'ημέρες', 'plurals' => ['one' => '{0} ημέρα', 'other' => '{0} ημέρες'], 'perUnit' => '{0}/ημ.'], narrow: ['name' => 'ημέρα', 'plurals' => ['one' => '{0} η', 'other' => '{0} η'], 'perUnit' => '{0}/η']),
    'degree' => new U(name: 'angle-degree', long: ['name' => 'μοίρες', 'plurals' => ['one' => '{0} μοίρα', 'other' => '{0} μοίρες'], 'perUnit' => ''], short: ['name' => 'μοίρες', 'plurals' => ['one' => '{0}°', 'other' => '{0}°'], 'perUnit' => ''], narrow: ['name' => '°', 'plurals' => ['one' => '{0}°', 'other' => '{0}°'], 'perUnit' => '']),
    'fahrenheit' => new U(name: 'temperature-fahrenheit', long: ['name' => 'βαθμοί Φαρενάιτ', 'plurals' => ['one' => '{0} βαθμός Φαρενάιτ', 'other' => '{0} βαθμοί Φαρενάιτ'], 'perUnit' => ''], short: ['name' => 'βθμ F', 'plurals' => ['one' => '{0}°F', 'other' => '{0}°F'], 'perUnit' => ''], narrow: ['name' => '°F', 'plurals' => ['one' => '{0}°F', 'other' => '{0}°F'], 'perUnit' => '']),
    'fluid-ounce' => new U(name: 'volume-fluid-ounce', long: ['name' => 'ουγγιές όγκου', 'plurals' => ['one' => '{0} ουγγιά όγκου', 'other' => '{0} ουγγιές όγκου'], 'perUnit' => ''], short: ['name' => 'fl oz', 'plurals' => ['one' => '{0} fl oz', 'other' => '{0} fl oz'], 'perUnit' => ''], narrow: ['name' => 'fl oz', 'plurals' => ['one' => '{0} fl oz', 'other' => '{0} fl oz'], 'perUnit' => '']),
    'foot' => new U(name: 'length-foot', long: ['name' => 'πόδια', 'plurals' => ['one' => '{0} πόδι', 'other' => '{0} πόδια'], 'perUnit' => '{0} ανά πόδι'], short: ['name' => 'πόδια', 'plurals' => ['one' => '{0} πδ', 'other' => '{0} πδ'], 'perUnit' => '{0}/πδ'], narrow: ['name' => 'πδ', 'plurals' => ['one' => '{0} ft', 'other' => '{0} ft'], 'perUnit' => '{0}/πδ']),
    'gallon' => new U(name: 'volume-gallon', long: ['name' => 'γαλόνια', 'plurals' => ['one' => '{0} γαλόνι', 'other' => '{0} γαλόνια'], 'perUnit' => '{0} ανά γαλόνι'], short: ['name' => 'γαλ.', 'plurals' => ['one' => '{0} γαλ.', 'other' => '{0} γαλ.'], 'perUnit' => '{0}/γαλ.'], narrow: ['name' => 'γαλ.', 'plurals' => ['one' => '{0} γαλ.', 'other' => '{0} γαλ.'], 'perUnit' => '{0}/γαλ.']),
    'gigabit' => new U(name: 'digital-gigabit', long: ['name' => 'gigabit', 'plurals' => ['one' => '{0} gigabit', 'other' => '{0} gigabit'], 'perUnit' => ''], short: ['name' => 'Gb', 'plurals' => ['one' => '{0} Gb', 'other' => '{0} Gb'], 'perUnit' => ''], narrow: ['name' => 'Gb', 'plurals' => ['one' => '{0} Gb', 'other' => '{0} Gb'], 'perUnit' => '']),
    'gigabyte' => new U(name: 'digital-gigabyte', long: ['name' => 'gigabyte', 'plurals' => ['one' => '{0} gigabyte', 'other' => '{0} gigabyte'], 'perUnit' => ''], short: ['name' => 'GB', 'plurals' => ['one' => '{0} GB', 'other' => '{0} GB'], 'perUnit' => ''], narrow: ['name' => 'GB', 'plurals' => ['one' => '{0} GB', 'other' => '{0} GB'], 'perUnit' => '']),
    'gram' => new U(name: 'mass-gram', long: ['name' => 'γραμμάρια', 'plurals' => ['one' => '{0} γραμμάριο', 'other' => '{0} γραμμάρια'], 'perUnit' => '{0} ανά γραμμάριο'], short: ['name' => 'γραμμ.', 'plurals' => ['one' => '{0} γρ.', 'other' => '{0} γρ.'], 'perUnit' => '{0}/γρ.'], narrow: ['name' => 'γρ.', 'plurals' => ['one' => '{0} γρ.', 'other' => '{0} γρ.'], 'perUnit' => '{0}/γρ.']),
    'hectare' => new U(name: 'area-hectare', long: ['name' => 'εκτάρια', 'plurals' => ['one' => '{0} εκτάριο', 'other' => '{0} εκτάρια'], 'perUnit' => ''], short: ['name' => 'εκτ.', 'plurals' => ['one' => '{0} εκτ.', 'other' => '{0} εκτ.'], 'perUnit' => ''], narrow: ['name' => 'ha', 'plurals' => ['one' => '{0} ha', 'other' => '{0} ha'], 'perUnit' => '']),
    'hour' => new U(name: 'duration-hour', long: ['name' => 'ώρες', 'plurals' => ['one' => '{0} ώρα', 'other' => '{0} ώρες'], 'perUnit' => '{0} ανά ώρα'], short: ['name' => 'ώρες', 'plurals' => ['one' => '{0} ώ.', 'other' => '{0} ώ.'], 'perUnit' => '{0}/ώ.'], narrow: ['name' => 'ώρα', 'plurals' => ['one' => '{0} ώ', 'other' => '{0} ώ'], 'perUnit' => '{0}/ώ']),
    'inch' => new U(name: 'length-inch', long: ['name' => 'ίντσες', 'plurals' => ['one' => '{0} ίντσα', 'other' => '{0} ίντσες'], 'perUnit' => '{0} ανά ίντσα'], short: ['name' => 'ίντσες', 'plurals' => ['one' => '{0} ίν.', 'other' => '{0} ίν.'], 'perUnit' => '{0}/ίν.'], narrow: ['name' => 'ίν.', 'plurals' => ['one' => '{0} in', 'other' => '{0} in'], 'perUnit' => '{0}/ίν.']),
    'kilobit' => new U(name: 'digital-kilobit', long: ['name' => 'kilobit', 'plurals' => ['one' => '{0} kilobit', 'other' => '{0} kilobit'], 'perUnit' => ''], short: ['name' => 'kb', 'plurals' => ['one' => '{0} kb', 'other' => '{0} kb'], 'perUnit' => ''], narrow: ['name' => 'kb', 'plurals' => ['one' => '{0} kb', 'other' => '{0} kb'], 'perUnit' => '']),
    'kilobyte' => new U(name: 'digital-kilobyte', long: ['name' => 'kilobyte', 'plurals' => ['one' => '{0} kilobyte', 'other' => '{0} kilobyte'], 'perUnit' => ''], short: ['name' => 'kB', 'plurals' => ['one' => '{0} kB', 'other' => '{0} kB'], 'perUnit' => ''], narrow: ['name' => 'kB', 'plurals' => ['one' => '{0} kB', 'other' => '{0} kB'], 'perUnit' => '']),
    'kilogram' => new U(name: 'mass-kilogram', long: ['name' => 'χιλιόγραμμα', 'plurals' => ['one' => '{0} χιλιόγραμμο', 'other' => '{0} χιλιόγραμμα'], 'perUnit' => '{0} ανά χιλιόγραμμο'], short: ['name' => 'κιλά', 'plurals' => ['one' => '{0} κιλό', 'other' => '{0} κιλά'], 'perUnit' => '{0}/κιλό'], narrow: ['name' => 'kg', 'plurals' => ['one' => '{0} kg', 'other' => '{0} kg'], 'perUnit' => '{0}/kg']),
    'kilometer' => new U(name: 'length-kilometer', long: ['name' => 'χιλιόμετρα', 'plurals' => ['one' => '{0} χιλιόμετρο', 'other' => '{0} χιλιόμετρα'], 'perUnit' => '{0} ανά χιλιόμετρο'], short: ['name' => 'χλμ.', 'plurals' => ['one' => '{0} χλμ.', 'other' => '{0} χλμ.'], 'perUnit' => '{0}/χλμ.'], narrow: ['name' => 'χλμ.', 'plurals' => ['one' => '{0} χλμ.', 'other' => '{0} χλμ.'], 'perUnit' => '{0}/χλμ.']),
    'liter' => new U(name: 'volume-liter', long: ['name' => 'λίτρα', 'plurals' => ['one' => '{0} λίτρο', 'other' => '{0} λίτρα'], 'perUnit' => '{0} ανά λίτρο'], short: ['name' => 'λίτρα', 'plurals' => ['one' => '{0} λίτ.', 'other' => '{0} λίτ.'], 'perUnit' => '{0}/λ.'], narrow: ['name' => 'λίτρο', 'plurals' => ['one' => '{0} λ.', 'other' => '{0} λ.'], 'perUnit' => '{0}/λ.']),
    'megabit' => new U(name: 'digital-megabit', long: ['name' => 'megabit', 'plurals' => ['one' => '{0} megabit', 'other' => '{0} megabit'], 'perUnit' => ''], short: ['name' => 'Mb', 'plurals' => ['one' => '{0} Mb', 'other' => '{0} Mb'], 'perUnit' => ''], narrow: ['name' => 'Mb', 'plurals' => ['one' => '{0} Mb', 'other' => '{0} Mb'], 'perUnit' => '']),
    'megabyte' => new U(name: 'digital-megabyte', long: ['name' => 'megabyte', 'plurals' => ['one' => '{0} megabyte', 'other' => '{0} megabyte'], 'perUnit' => ''], short: ['name' => 'MB', 'plurals' => ['one' => '{0} MB', 'other' => '{0} MB'], 'perUnit' => ''], narrow: ['name' => 'MB', 'plurals' => ['one' => '{0} MB', 'other' => '{0} MB'], 'perUnit' => '']),
    'meter' => new U(name: 'length-meter', long: ['name' => 'μέτρα', 'plurals' => ['one' => '{0} μέτρο', 'other' => '{0} μέτρα'], 'perUnit' => '{0} ανά μέτρο'], short: ['name' => 'μέτρα', 'plurals' => ['one' => '{0} μ.', 'other' => '{0} μ.'], 'perUnit' => '{0}/μ.'], narrow: ['name' => 'μέτρο', 'plurals' => ['one' => '{0} μ.', 'other' => '{0} μ.'], 'perUnit' => '{0}/μ.']),
    'mile' => new U(name: 'length-mile', long: ['name' => 'μίλια', 'plurals' => ['one' => '{0} μίλι', 'other' => '{0} μίλια'], 'perUnit' => ''], short: ['name' => 'μίλια', 'plurals' => ['one' => '{0} μίλ.', 'other' => '{0} μίλ.'], 'perUnit' => ''], narrow: ['name' => 'μίλ.', 'plurals' => ['one' => '{0} mi', 'other' => '{0} mi'], 'perUnit' => '']),
    'mile-scandinavian' => new U(name: 'length-mile-scandinavian', long: ['name' => 'σκανδιναβικά μίλια', 'plurals' => ['one' => '{0} σκανδιναβικό μίλι', 'other' => '{0} σκανδιναβικά μίλια'], 'perUnit' => ''], short: ['name' => 'σκανδ. μίλια', 'plurals' => ['one' => '{0} σκανδ. μίλι', 'other' => '{0} σκανδ. μίλια'], 'perUnit' => ''], narrow: ['name' => 'σκανδ. μίλια', 'plurals' => ['one' => '{0}smi', 'other' => '{0}smi'], 'perUnit' => '']),
    'milliliter' => new U(name: 'volume-milliliter', long: ['name' => 'χιλιοστόλιτρα', 'plurals' => ['one' => '{0} χιλιοστόλιτρο', 'other' => '{0} χιλιοστόλιτρα'], 'perUnit' => ''], short: ['name' => 'mL', 'plurals' => ['one' => '{0} mL', 'other' => '{0} mL'], 'perUnit' => ''], narrow: ['name' => 'mL', 'plurals' => ['one' => '{0} mL', 'other' => '{0} mL'], 'perUnit' => '']),
    'millimeter' => new U(name: 'length-millimeter', long: ['name' => 'χιλιοστόμετρα', 'plurals' => ['one' => '{0} χιλιοστόμετρο', 'other' => '{0} χιλιοστόμετρα'], 'perUnit' => ''], short: ['name' => 'χλστ.', 'plurals' => ['one' => '{0} χλστ.', 'other' => '{0} χλστ.'], 'perUnit' => ''], narrow: ['name' => 'χλστ.', 'plurals' => ['one' => '{0} χλστ.', 'other' => '{0} χλστ.'], 'perUnit' => '']),
    'millisecond' => new U(name: 'duration-millisecond', long: ['name' => 'χιλιοστά του δευτερολέπτου', 'plurals' => ['one' => '{0} χιλιοστό του δευτερολέπτου', 'other' => '{0} χιλιοστά του δευτερολέπτου'], 'perUnit' => ''], short: ['name' => 'χιλιοστά δευτ.', 'plurals' => ['one' => '{0} ms', 'other' => '{0} ms'], 'perUnit' => ''], narrow: ['name' => 'χιλ. δευτ.', 'plurals' => ['one' => '{0} ms', 'other' => '{0} ms'], 'perUnit' => '']),
    'minute' => new U(name: 'duration-minute', long: ['name' => 'λεπτά', 'plurals' => ['one' => '{0} λεπτό', 'other' => '{0} λεπτά'], 'perUnit' => '{0} ανά λεπτό'], short: ['name' => 'λεπ.', 'plurals' => ['one' => '{0} λ.', 'other' => '{0} λ.'], 'perUnit' => '{0}/λ.'], narrow: ['name' => 'λ.', 'plurals' => ['one' => '{0} λ', 'other' => '{0} λ'], 'perUnit' => '{0}/λ']),
    'month' => new U(name: 'duration-month', long: ['name' => 'μήνες', 'plurals' => ['one' => '{0} μήνας', 'other' => '{0} μήνες'], 'perUnit' => '{0} ανά μήνα'], short: ['name' => 'μήνες', 'plurals' => ['one' => '{0} μήν.', 'other' => '{0} μήν.'], 'perUnit' => '{0}/μ.'], narrow: ['name' => 'μήνας', 'plurals' => ['one' => '{0} μ', 'other' => '{0} μ'], 'perUnit' => '{0}/μ']),
    'ounce' => new U(name: 'mass-ounce', long: ['name' => 'ουγγιές', 'plurals' => ['one' => '{0} ουγγιά', 'other' => '{0} ουγγιές'], 'perUnit' => '{0} ανά ουγγιά'], short: ['name' => 'oz', 'plurals' => ['one' => '{0} oz', 'other' => '{0} oz'], 'perUnit' => '{0}/oz'], narrow: ['name' => 'oz', 'plurals' => ['one' => '{0} oz', 'other' => '{0} oz'], 'perUnit' => '{0}/oz']),
    'percent' => new U(name: 'concentr-percent', long: ['name' => 'τοις εκατό', 'plurals' => ['one' => '{0} τοις εκατό', 'other' => '{0} τοις εκατό'], 'perUnit' => ''], short: ['name' => 'τοις εκατό', 'plurals' => ['one' => '{0}%', 'other' => '{0}%'], 'perUnit' => ''], narrow: ['name' => '%', 'plurals' => ['one' => '{0}%', 'other' => '{0}%'], 'perUnit' => '']),
    'petabyte' => new U(name: 'digital-petabyte', long: ['name' => 'petabyte', 'plurals' => ['one' => '{0} petabyte', 'other' => '{0} petabyte'], 'perUnit' => ''], short: ['name' => 'PByte', 'plurals' => ['one' => '{0} PB', 'other' => '{0} PB'], 'perUnit' => ''], narrow: ['name' => 'PB', 'plurals' => ['one' => '{0} PB', 'other' => '{0} PB'], 'perUnit' => '']),
    'pound' => new U(name: 'mass-pound', long: ['name' => 'λίβρες', 'plurals' => ['one' => '{0} λίβρα', 'other' => '{0} λίβρες'], 'perUnit' => '{0} ανά λίβρα'], short: ['name' => 'λίβρες', 'plurals' => ['one' => '{0} λβ', 'other' => '{0} λβ'], 'perUnit' => '{0}/λβ'], narrow: ['name' => 'λβ', 'plurals' => ['one' => '{0} λβ', 'other' => '{0} λβ'], 'perUnit' => '{0}/λβ']),
    'second' => new U(name: 'duration-second', long: ['name' => 'δευτερόλεπτα', 'plurals' => ['one' => '{0} δευτερόλεπτο', 'other' => '{0} δευτερόλεπτα'], 'perUnit' => '{0} ανά δευτερόλεπτο'], short: ['name' => 'δευτ.', 'plurals' => ['one' => '{0} δευτ.', 'other' => '{0} δευτ.'], 'perUnit' => '{0}/δευτ.'], narrow: ['name' => 'δευτ.', 'plurals' => ['one' => '{0} δ', 'other' => '{0} δ'], 'perUnit' => '{0}/δ']),
    'stone' => new U(name: 'mass-stone', long: ['name' => 'stone', 'plurals' => ['one' => '{0} stone', 'other' => '{0} stone'], 'perUnit' => ''], short: ['name' => 'st', 'plurals' => ['one' => '{0} st', 'other' => '{0} st'], 'perUnit' => ''], narrow: ['name' => 'st', 'plurals' => ['one' => '{0} st', 'other' => '{0} st'], 'perUnit' => '']),
    'terabit' => new U(name: 'digital-terabit', long: ['name' => 'terabit', 'plurals' => ['one' => '{0} terabit', 'other' => '{0} terabit'], 'perUnit' => ''], short: ['name' => 'Tb', 'plurals' => ['one' => '{0} Tb', 'other' => '{0} Tb'], 'perUnit' => ''], narrow: ['name' => 'Tb', 'plurals' => ['one' => '{0} Tb', 'other' => '{0} Tb'], 'perUnit' => '']),
    'terabyte' => new U(name: 'digital-terabyte', long: ['name' => 'terabyte', 'plurals' => ['one' => '{0} terabyte', 'other' => '{0} terabyte'], 'perUnit' => ''], short: ['name' => 'TB', 'plurals' => ['one' => '{0} TB', 'other' => '{0} TB'], 'perUnit' => ''], narrow: ['name' => 'TB', 'plurals' => ['one' => '{0} TB', 'other' => '{0} TB'], 'perUnit' => '']),
    'week' => new U(name: 'duration-week', long: ['name' => 'εβδομάδες', 'plurals' => ['one' => '{0} εβδομάδα', 'other' => '{0} εβδομάδες'], 'perUnit' => '{0} ανά εβδομάδα'], short: ['name' => 'εβδομάδες', 'plurals' => ['one' => '{0} εβδ.', 'other' => '{0} εβδ.'], 'perUnit' => '{0}/εβδ.'], narrow: ['name' => 'εβδ.', 'plurals' => ['one' => '{0} ε', 'other' => '{0} ε'], 'perUnit' => '{0}/ε']),
    'yard' => new U(name: 'length-yard', long: ['name' => 'γιάρδες', 'plurals' => ['one' => '{0} γιάρδα', 'other' => '{0} γιάρδες'], 'perUnit' => ''], short: ['name' => 'γιάρδες', 'plurals' => ['one' => '{0} γρδ', 'other' => '{0} γρδ'], 'perUnit' => ''], narrow: ['name' => 'γρδ', 'plurals' => ['one' => '{0} yd', 'other' => '{0} yd'], 'perUnit' => '']),
    'year' => new U(name: 'duration-year', long: ['name' => 'έτη', 'plurals' => ['one' => '{0} έτος', 'other' => '{0} έτη'], 'perUnit' => '{0} ανά έτος'], short: ['name' => 'έτη', 'plurals' => ['one' => '{0} έτ.', 'other' => '{0} έτ.'], 'perUnit' => '{0}/έτ.'], narrow: ['name' => 'έτ.', 'plurals' => ['one' => '{0} έ', 'other' => '{0} έ'], 'perUnit' => '{0}/έ']),
];
