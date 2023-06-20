<?php

use Major\Fluent\Formatters\Number\Locale\Unit as U;

return [
    'degree' => new U(name: 'angle-degree', long: ['name' => 'dereje', 'plurals' => ['one' => '{0} dereje', 'other' => '{0} dereje'], 'perUnit' => ''], short: ['name' => 'dereje', 'plurals' => ['one' => '{0}°', 'other' => '{0}°'], 'perUnit' => ''], narrow: ['name' => 'dereje', 'plurals' => ['one' => '{0}°', 'other' => '{0}°'], 'perUnit' => '']),
    'acre' => new U(name: 'area-acre', long: ['name' => 'akr', 'plurals' => ['one' => '{0} akr', 'other' => '{0} akr'], 'perUnit' => ''], short: ['name' => 'akr', 'plurals' => ['one' => '{0} akr', 'other' => '{0} akr'], 'perUnit' => ''], narrow: ['name' => 'akr', 'plurals' => ['one' => '{0} akr', 'other' => '{0} akr'], 'perUnit' => '']),
    'hectare' => new U(name: 'area-hectare', long: ['name' => 'gektar', 'plurals' => ['one' => '{0} gektar', 'other' => '{0} gektar'], 'perUnit' => ''], short: ['name' => 'ga', 'plurals' => ['one' => '{0} ga', 'other' => '{0} ga'], 'perUnit' => ''], narrow: ['name' => 'ga', 'plurals' => ['one' => '{0} ga', 'other' => '{0} ga'], 'perUnit' => '']),
    'percent' => new U(name: 'concentr-percent', long: ['name' => 'göterim', 'plurals' => ['one' => '{0} göterim', 'other' => '{0} göterim'], 'perUnit' => ''], short: ['name' => 'göterim', 'plurals' => ['one' => '{0}%', 'other' => '{0}%'], 'perUnit' => ''], narrow: ['name' => '%', 'plurals' => ['one' => '{0}%', 'other' => '{0}%'], 'perUnit' => '']),
    'bit' => new U(name: 'digital-bit', long: ['name' => 'bit', 'plurals' => ['one' => '{0} bit', 'other' => '{0} bit'], 'perUnit' => ''], short: ['name' => 'bit', 'plurals' => ['one' => '{0} bit', 'other' => '{0} bit'], 'perUnit' => ''], narrow: ['name' => 'bit', 'plurals' => ['one' => '{0} bit', 'other' => '{0} bit'], 'perUnit' => '']),
    'byte' => new U(name: 'digital-byte', long: ['name' => 'baýt', 'plurals' => ['one' => '{0} baýt', 'other' => '{0} baýt'], 'perUnit' => ''], short: ['name' => 'B', 'plurals' => ['one' => '{0} B', 'other' => '{0} B'], 'perUnit' => ''], narrow: ['name' => 'B', 'plurals' => ['one' => '{0} B', 'other' => '{0} B'], 'perUnit' => '']),
    'gigabit' => new U(name: 'digital-gigabit', long: ['name' => 'gigabit', 'plurals' => ['one' => '{0} gigabit', 'other' => '{0} gigabit'], 'perUnit' => ''], short: ['name' => 'Gbit', 'plurals' => ['one' => '{0} Gbit', 'other' => '{0} Gbit'], 'perUnit' => ''], narrow: ['name' => 'Gbit', 'plurals' => ['one' => '{0} Gbit', 'other' => '{0} Gbit'], 'perUnit' => '']),
    'gigabyte' => new U(name: 'digital-gigabyte', long: ['name' => 'gigabaýt', 'plurals' => ['one' => '{0} gigabaýt', 'other' => '{0} gigabaýt'], 'perUnit' => ''], short: ['name' => 'GB', 'plurals' => ['one' => '{0} GB', 'other' => '{0} GB'], 'perUnit' => ''], narrow: ['name' => 'GB', 'plurals' => ['one' => '{0} GB', 'other' => '{0} GB'], 'perUnit' => '']),
    'kilobit' => new U(name: 'digital-kilobit', long: ['name' => 'kilobit', 'plurals' => ['one' => '{0} kilobit', 'other' => '{0} kilobit'], 'perUnit' => ''], short: ['name' => 'kbit', 'plurals' => ['one' => '{0} kbit', 'other' => '{0} kbit'], 'perUnit' => ''], narrow: ['name' => 'kbit', 'plurals' => ['one' => '{0} kbit', 'other' => '{0} kbit'], 'perUnit' => '']),
    'kilobyte' => new U(name: 'digital-kilobyte', long: ['name' => 'kilobaýt', 'plurals' => ['one' => '{0} kilobaýt', 'other' => '{0} kilobaýt'], 'perUnit' => ''], short: ['name' => 'kB', 'plurals' => ['one' => '{0} kB', 'other' => '{0} kB'], 'perUnit' => ''], narrow: ['name' => 'kB', 'plurals' => ['one' => '{0} kB', 'other' => '{0} kB'], 'perUnit' => '']),
    'megabit' => new U(name: 'digital-megabit', long: ['name' => 'megabit', 'plurals' => ['one' => '{0} megabit', 'other' => '{0} megabit'], 'perUnit' => ''], short: ['name' => 'Mbit', 'plurals' => ['one' => '{0} Mbit', 'other' => '{0} Mbit'], 'perUnit' => ''], narrow: ['name' => 'Mbit', 'plurals' => ['one' => '{0} Mbit', 'other' => '{0} Mbit'], 'perUnit' => '']),
    'megabyte' => new U(name: 'digital-megabyte', long: ['name' => 'megabaýt', 'plurals' => ['one' => '{0} megabaýt', 'other' => '{0} megabaýt'], 'perUnit' => ''], short: ['name' => 'MB', 'plurals' => ['one' => '{0} MB', 'other' => '{0} MB'], 'perUnit' => ''], narrow: ['name' => 'MB', 'plurals' => ['one' => '{0} MB', 'other' => '{0} MB'], 'perUnit' => '']),
    'petabyte' => new U(name: 'digital-petabyte', long: ['name' => 'petabaýt', 'plurals' => ['one' => '{0} petabaýt', 'other' => '{0} petabaýt'], 'perUnit' => ''], short: ['name' => 'PB', 'plurals' => ['one' => '{0} PB', 'other' => '{0} PB'], 'perUnit' => ''], narrow: ['name' => 'PB', 'plurals' => ['one' => '{0} PB', 'other' => '{0} PB'], 'perUnit' => '']),
    'terabit' => new U(name: 'digital-terabit', long: ['name' => 'terabit', 'plurals' => ['one' => '{0} terabit', 'other' => '{0} terabit'], 'perUnit' => ''], short: ['name' => 'Tbit', 'plurals' => ['one' => '{0} Tbit', 'other' => '{0} Tbit'], 'perUnit' => ''], narrow: ['name' => 'Tbit', 'plurals' => ['one' => '{0} Tbit', 'other' => '{0} Tbit'], 'perUnit' => '']),
    'terabyte' => new U(name: 'digital-terabyte', long: ['name' => 'terabaýt', 'plurals' => ['one' => '{0} terabaýt', 'other' => '{0} terabaýt'], 'perUnit' => ''], short: ['name' => 'TB', 'plurals' => ['one' => '{0} TB', 'other' => '{0} TB'], 'perUnit' => ''], narrow: ['name' => 'TB', 'plurals' => ['one' => '{0} TB', 'other' => '{0} TB'], 'perUnit' => '']),
    'day' => new U(name: 'duration-day', long: ['name' => 'gün', 'plurals' => ['one' => '{0} gün', 'other' => '{0} gün'], 'perUnit' => '{0}/gün'], short: ['name' => 'gün', 'plurals' => ['one' => '{0} gün', 'other' => '{0} gün'], 'perUnit' => '{0}/gün'], narrow: ['name' => 'g', 'plurals' => ['one' => '{0}g', 'other' => '{0}g'], 'perUnit' => '{0}/gün']),
    'hour' => new U(name: 'duration-hour', long: ['name' => 'sagat', 'plurals' => ['one' => '{0} sagat', 'other' => '{0} sagat'], 'perUnit' => '{0}/sagat'], short: ['name' => 'sag', 'plurals' => ['one' => '{0} sag', 'other' => '{0} sag'], 'perUnit' => '{0}/sag'], narrow: ['name' => 'sg', 'plurals' => ['one' => '{0}sg', 'other' => '{0}sg'], 'perUnit' => '{0}/sag']),
    'millisecond' => new U(name: 'duration-millisecond', long: ['name' => 'millisekunt', 'plurals' => ['one' => '{0} millisekunt', 'other' => '{0} millisekunt'], 'perUnit' => ''], short: ['name' => 'msek', 'plurals' => ['one' => '{0} msek', 'other' => '{0} msek'], 'perUnit' => ''], narrow: ['name' => 'ms', 'plurals' => ['one' => '{0}ms', 'other' => '{0}ms'], 'perUnit' => '']),
    'minute' => new U(name: 'duration-minute', long: ['name' => 'minut', 'plurals' => ['one' => '{0} minut', 'other' => '{0} minut'], 'perUnit' => '{0}/minut'], short: ['name' => 'min', 'plurals' => ['one' => '{0} min', 'other' => '{0} min'], 'perUnit' => '{0}/min'], narrow: ['name' => 'm', 'plurals' => ['one' => '{0}m', 'other' => '{0}m'], 'perUnit' => '{0}/min']),
    'month' => new U(name: 'duration-month', long: ['name' => 'aý', 'plurals' => ['one' => '{0} aý', 'other' => '{0} aý'], 'perUnit' => '{0}/aý'], short: ['name' => 'aý', 'plurals' => ['one' => '{0} a', 'other' => '{0} a'], 'perUnit' => '{0}/a'], narrow: ['name' => 'a', 'plurals' => ['one' => '{0}a', 'other' => '{0}a'], 'perUnit' => '{0}/a']),
    'second' => new U(name: 'duration-second', long: ['name' => 'sekunt', 'plurals' => ['one' => '{0} sekunt', 'other' => '{0} sekunt'], 'perUnit' => '{0}/sekunt'], short: ['name' => 'sek', 'plurals' => ['one' => '{0} sek', 'other' => '{0} sek'], 'perUnit' => '{0}/sek'], narrow: ['name' => 'se', 'plurals' => ['one' => '{0}se', 'other' => '{0}se'], 'perUnit' => '{0}/sek']),
    'week' => new U(name: 'duration-week', long: ['name' => 'hepde', 'plurals' => ['one' => '{0} hepde', 'other' => '{0} hepde'], 'perUnit' => '{0}/hepde'], short: ['name' => 'hep', 'plurals' => ['one' => '{0} hep', 'other' => '{0} hep'], 'perUnit' => '{0}/hep'], narrow: ['name' => 'h', 'plurals' => ['one' => '{0}h', 'other' => '{0}h'], 'perUnit' => '{0}/hep']),
    'year' => new U(name: 'duration-year', long: ['name' => 'ýyl', 'plurals' => ['one' => '{0} ýyl', 'other' => '{0} ýyl'], 'perUnit' => '{0}/ý'], short: ['name' => 'ý.', 'plurals' => ['one' => '{0} ý.', 'other' => '{0} ý.'], 'perUnit' => '{0}/ý.'], narrow: ['name' => 'ý', 'plurals' => ['one' => '{0}ý', 'other' => '{0}ý'], 'perUnit' => '{0}/ý.']),
    'centimeter' => new U(name: 'length-centimeter', long: ['name' => 'santimetr', 'plurals' => ['one' => '{0} santimetr', 'other' => '{0} santimetr'], 'perUnit' => '{0}/sm'], short: ['name' => 'sm', 'plurals' => ['one' => '{0} sm', 'other' => '{0} sm'], 'perUnit' => '{0}/sm'], narrow: ['name' => 'sm', 'plurals' => ['one' => '{0}sm', 'other' => '{0}sm'], 'perUnit' => '{0}/sm']),
    'foot' => new U(name: 'length-foot', long: ['name' => 'fut', 'plurals' => ['one' => '{0} fut', 'other' => '{0} fut'], 'perUnit' => '{0}/fut'], short: ['name' => 'ft', 'plurals' => ['one' => '{0} ft', 'other' => '{0} ft'], 'perUnit' => '{0}/ft'], narrow: ['name' => 'ft', 'plurals' => ['one' => '{0} ft', 'other' => '{0} ft'], 'perUnit' => '{0}/ft']),
    'inch' => new U(name: 'length-inch', long: ['name' => 'dýuým', 'plurals' => ['one' => '{0} dýuým', 'other' => '{0} dýuým'], 'perUnit' => '{0}/dýuým'], short: ['name' => 'dý', 'plurals' => ['one' => '{0} dý', 'other' => '{0} dý'], 'perUnit' => '{0}/dý'], narrow: ['name' => 'dý', 'plurals' => ['one' => '{0} dý', 'other' => '{0} dý'], 'perUnit' => '{0}/dý']),
    'kilometer' => new U(name: 'length-kilometer', long: ['name' => 'kilometr', 'plurals' => ['one' => '{0} kilometr', 'other' => '{0} kilometr'], 'perUnit' => '{0}/kilometr'], short: ['name' => 'km', 'plurals' => ['one' => '{0} km', 'other' => '{0} km'], 'perUnit' => '{0}/km'], narrow: ['name' => 'km', 'plurals' => ['one' => '{0}km', 'other' => '{0}km'], 'perUnit' => '{0}/km']),
    'meter' => new U(name: 'length-meter', long: ['name' => 'metr', 'plurals' => ['one' => '{0} metr', 'other' => '{0} metr'], 'perUnit' => '{0}/m'], short: ['name' => 'm', 'plurals' => ['one' => '{0} m', 'other' => '{0} m'], 'perUnit' => '{0}/m'], narrow: ['name' => 'm', 'plurals' => ['one' => '{0}m', 'other' => '{0}m'], 'perUnit' => '{0}/m']),
    'mile' => new U(name: 'length-mile', long: ['name' => 'mil', 'plurals' => ['one' => '{0} mil', 'other' => '{0} mil'], 'perUnit' => ''], short: ['name' => 'mi', 'plurals' => ['one' => '{0} mi', 'other' => '{0} mi'], 'perUnit' => ''], narrow: ['name' => 'mi', 'plurals' => ['one' => '{0} mi', 'other' => '{0} mi'], 'perUnit' => '']),
    'mile-scandinavian' => new U(name: 'length-mile-scandinavian', long: ['name' => 'skandinaw mili', 'plurals' => ['one' => '{0} skandinaw mili', 'other' => '{0} skandinaw mili'], 'perUnit' => ''], short: ['name' => 'smi', 'plurals' => ['one' => '{0} smi', 'other' => '{0} smi'], 'perUnit' => ''], narrow: ['name' => 'smi', 'plurals' => ['one' => '{0} smi', 'other' => '{0} smi'], 'perUnit' => '']),
    'millimeter' => new U(name: 'length-millimeter', long: ['name' => 'millimetr', 'plurals' => ['one' => '{0} millimetr', 'other' => '{0} millimetr'], 'perUnit' => ''], short: ['name' => 'mm', 'plurals' => ['one' => '{0} mm', 'other' => '{0} mm'], 'perUnit' => ''], narrow: ['name' => 'mm', 'plurals' => ['one' => '{0}mm', 'other' => '{0}mm'], 'perUnit' => '']),
    'yard' => new U(name: 'length-yard', long: ['name' => 'ýard', 'plurals' => ['one' => '{0} ýard', 'other' => '{0} ýard'], 'perUnit' => ''], short: ['name' => 'ýd', 'plurals' => ['one' => '{0} ýd', 'other' => '{0} ýd'], 'perUnit' => ''], narrow: ['name' => 'ýd', 'plurals' => ['one' => '{0} ýd', 'other' => '{0} ýd'], 'perUnit' => '']),
    'gram' => new U(name: 'mass-gram', long: ['name' => 'gram', 'plurals' => ['one' => '{0} gram', 'other' => '{0} gram'], 'perUnit' => '{0}/gram'], short: ['name' => 'gram', 'plurals' => ['one' => '{0} g', 'other' => '{0} g'], 'perUnit' => '{0}/g'], narrow: ['name' => 'gram', 'plurals' => ['one' => '{0}g', 'other' => '{0}g'], 'perUnit' => '{0}/g']),
    'kilogram' => new U(name: 'mass-kilogram', long: ['name' => 'kilogram', 'plurals' => ['one' => '{0} kilogram', 'other' => '{0} kilogram'], 'perUnit' => '{0}/kilogram'], short: ['name' => 'kg', 'plurals' => ['one' => '{0} kg', 'other' => '{0} kg'], 'perUnit' => '{0}/kg'], narrow: ['name' => 'kg', 'plurals' => ['one' => '{0}kg', 'other' => '{0}kg'], 'perUnit' => '{0}/kg']),
    'ounce' => new U(name: 'mass-ounce', long: ['name' => 'unsiýa', 'plurals' => ['one' => '{0} unsiýa', 'other' => '{0} unsiýa'], 'perUnit' => '{0}/unsiýa'], short: ['name' => 'uns.', 'plurals' => ['one' => '{0} uns.', 'other' => '{0} uns.'], 'perUnit' => '{0}/uns.'], narrow: ['name' => 'uns.', 'plurals' => ['one' => '{0} uns.', 'other' => '{0} uns.'], 'perUnit' => '{0}/uns.']),
    'pound' => new U(name: 'mass-pound', long: ['name' => 'funt', 'plurals' => ['one' => '{0} funt', 'other' => '{0} funt'], 'perUnit' => '{0}/funt'], short: ['name' => 'funt', 'plurals' => ['one' => '{0} funt', 'other' => '{0} funt'], 'perUnit' => '{0}/funt'], narrow: ['name' => 'funt', 'plurals' => ['one' => '{0} funt', 'other' => '{0} funt'], 'perUnit' => '{0}/funt']),
    'stone' => new U(name: 'mass-stone', long: ['name' => 'stoun', 'plurals' => ['one' => '{0} stoun', 'other' => '{0} stoun'], 'perUnit' => ''], short: ['name' => 'stoun', 'plurals' => ['one' => '{0} st', 'other' => '{0} st'], 'perUnit' => ''], narrow: ['name' => 'stoun', 'plurals' => ['one' => '{0} st', 'other' => '{0} st'], 'perUnit' => '']),
    'celsius' => new U(name: 'temperature-celsius', long: ['name' => 'Selsiý gradusy', 'plurals' => ['one' => '{0} Selsiý gradusy', 'other' => '{0} Selsiý gradusy'], 'perUnit' => ''], short: ['name' => '°C', 'plurals' => ['one' => '{0}°C', 'other' => '{0}°C'], 'perUnit' => ''], narrow: ['name' => '°C', 'plurals' => ['one' => '{0}°C', 'other' => '{0}°C'], 'perUnit' => '']),
    'fahrenheit' => new U(name: 'temperature-fahrenheit', long: ['name' => 'Farengeýt gradusy', 'plurals' => ['one' => '{0} Farengeýt gradusy', 'other' => '{0} Farengeýt gradusy'], 'perUnit' => ''], short: ['name' => '°F', 'plurals' => ['one' => '{0}°F', 'other' => '{0}°F'], 'perUnit' => ''], narrow: ['name' => '°F', 'plurals' => ['one' => '{0}°F', 'other' => '{0}°F'], 'perUnit' => '']),
    'fluid-ounce' => new U(name: 'volume-fluid-ounce', long: ['name' => 'suwuklyk unsiýasy', 'plurals' => ['one' => '{0} suwuklyk unsiýasy', 'other' => '{0} suwuklyk unsiýasy'], 'perUnit' => ''], short: ['name' => 'suw. uns.', 'plurals' => ['one' => '{0} suw. uns.', 'other' => '{0} suw. uns.'], 'perUnit' => ''], narrow: ['name' => 's.uns.', 'plurals' => ['one' => '{0}s.uns.', 'other' => '{0}s.uns.'], 'perUnit' => '']),
    'gallon' => new U(name: 'volume-gallon', long: ['name' => 'gallon', 'plurals' => ['one' => '{0} gallon', 'other' => '{0} gallon'], 'perUnit' => '{0}/gallon'], short: ['name' => 'gal.', 'plurals' => ['one' => '{0} gal.', 'other' => '{0} gal.'], 'perUnit' => '{0}/gal.'], narrow: ['name' => 'gal.', 'plurals' => ['one' => '{0} gal.', 'other' => '{0} gal.'], 'perUnit' => '{0}/gal.']),
    'liter' => new U(name: 'volume-liter', long: ['name' => 'litr', 'plurals' => ['one' => '{0} litr', 'other' => '{0} litr'], 'perUnit' => '{0} /litr'], short: ['name' => 'litr', 'plurals' => ['one' => '{0} l', 'other' => '{0} l'], 'perUnit' => '{0}/l'], narrow: ['name' => 'litr', 'plurals' => ['one' => '{0}l', 'other' => '{0}l'], 'perUnit' => '{0}/l']),
    'milliliter' => new U(name: 'volume-milliliter', long: ['name' => 'millilitr', 'plurals' => ['one' => '{0} millilitr', 'other' => '{0} millilitr'], 'perUnit' => ''], short: ['name' => 'ml', 'plurals' => ['one' => '{0} ml', 'other' => '{0} ml'], 'perUnit' => ''], narrow: ['name' => 'ml', 'plurals' => ['one' => '{0} ml', 'other' => '{0} ml'], 'perUnit' => '']),
];
