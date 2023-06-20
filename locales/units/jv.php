<?php

use Major\Fluent\Formatters\Number\Locale\Unit as U;

return [
    'acre' => new U(name: 'area-acre', long: ['name' => 'are', 'plurals' => ['other' => '{0} are'], 'perUnit' => ''], short: ['name' => 'are', 'plurals' => ['other' => '{0} are'], 'perUnit' => ''], narrow: ['name' => 'are', 'plurals' => ['other' => '{0} are'], 'perUnit' => '']),
    'byte' => new U(name: 'digital-byte', long: ['name' => 'bite', 'plurals' => ['other' => '{0} bite'], 'perUnit' => ''], short: ['name' => 'bite', 'plurals' => ['other' => '{0} bite'], 'perUnit' => ''], narrow: ['name' => 'bite', 'plurals' => ['other' => '{0} bite'], 'perUnit' => '']),
    'celsius' => new U(name: 'temperature-celsius', long: ['name' => 'derajat celsius', 'plurals' => ['other' => '{0} derajat celsius'], 'perUnit' => ''], short: ['name' => '°C', 'plurals' => ['other' => '{0}°C'], 'perUnit' => ''], narrow: ['name' => '°C', 'plurals' => ['other' => '{0}°C'], 'perUnit' => '']),
    'centimeter' => new U(name: 'length-centimeter', long: ['name' => 'sentimeter', 'plurals' => ['other' => '{0} sentimeter'], 'perUnit' => '{0} saben sentimeter'], short: ['name' => 'cm', 'plurals' => ['other' => '{0} cm'], 'perUnit' => '{0}/cm'], narrow: ['name' => 'cm', 'plurals' => ['other' => '{0} cm'], 'perUnit' => '{0}/cm']),
    'day' => new U(name: 'duration-day', long: ['name' => 'dina', 'plurals' => ['other' => '{0} dina'], 'perUnit' => '{0} saben dina'], short: ['name' => 'dina', 'plurals' => ['other' => '{0} dina'], 'perUnit' => '{0}/d'], narrow: ['name' => 'dina', 'plurals' => ['other' => '{0}d'], 'perUnit' => '{0}/d']),
    'degree' => new U(name: 'angle-degree', long: ['name' => 'derajat', 'plurals' => ['other' => '{0} derajat'], 'perUnit' => ''], short: ['name' => 'derajat', 'plurals' => ['other' => '{0}°'], 'perUnit' => ''], narrow: ['name' => 'derajat', 'plurals' => ['other' => '{0}°'], 'perUnit' => '']),
    'fahrenheit' => new U(name: 'temperature-fahrenheit', long: ['name' => 'derajat Fahrenhet', 'plurals' => ['other' => '{0} derajat Fahrenhet'], 'perUnit' => ''], short: ['name' => '°F', 'plurals' => ['other' => '{0}°F'], 'perUnit' => ''], narrow: ['name' => '°F', 'plurals' => ['other' => '{0}°F'], 'perUnit' => '']),
    'fluid-ounce' => new U(name: 'volume-fluid-ounce', long: ['name' => 'ons banyu', 'plurals' => ['other' => '{0} ons banyu'], 'perUnit' => ''], short: ['name' => 'ons banyu', 'plurals' => ['other' => '{0} ons banyu'], 'perUnit' => ''], narrow: ['name' => 'ons banyu', 'plurals' => ['other' => '{0}ons by'], 'perUnit' => '']),
    'foot' => new U(name: 'length-foot', long: ['name' => 'kaki', 'plurals' => ['other' => '{0} kaki'], 'perUnit' => '{0} saben kaki'], short: ['name' => 'kaki', 'plurals' => ['other' => '{0} kaki'], 'perUnit' => '{0}/kaki'], narrow: ['name' => 'kaki', 'plurals' => ['other' => '{0} kaki'], 'perUnit' => '{0}/kaki']),
    'gallon' => new U(name: 'volume-gallon', long: ['name' => 'galon', 'plurals' => ['other' => '{0} galon'], 'perUnit' => '{0} saben galon'], short: ['name' => 'galon', 'plurals' => ['other' => '{0} galon'], 'perUnit' => '{0}/galon'], narrow: ['name' => 'galon', 'plurals' => ['other' => '{0} galon'], 'perUnit' => '{0}/galon']),
    'gigabit' => new U(name: 'digital-gigabit', long: ['name' => 'gigabit', 'plurals' => ['other' => '{0} gigabit'], 'perUnit' => ''], short: ['name' => 'Gbit', 'plurals' => ['other' => '{0} Gb'], 'perUnit' => ''], narrow: ['name' => 'Gbit', 'plurals' => ['other' => '{0} Gb'], 'perUnit' => '']),
    'gigabyte' => new U(name: 'digital-gigabyte', long: ['name' => 'gigabite', 'plurals' => ['other' => '{0} gigabite'], 'perUnit' => ''], short: ['name' => 'GBite', 'plurals' => ['other' => '{0} GB'], 'perUnit' => ''], narrow: ['name' => 'GBite', 'plurals' => ['other' => '{0} GB'], 'perUnit' => '']),
    'gram' => new U(name: 'mass-gram', long: ['name' => 'gram', 'plurals' => ['other' => '{0} gram'], 'perUnit' => '{0} saben gram'], short: ['name' => 'gram', 'plurals' => ['other' => '{0} g'], 'perUnit' => '{0}/g'], narrow: ['name' => 'gram', 'plurals' => ['other' => '{0} g'], 'perUnit' => '{0}/g']),
    'hectare' => new U(name: 'area-hectare', long: ['name' => 'hektar', 'plurals' => ['other' => '{0} hektar'], 'perUnit' => ''], short: ['name' => 'hektar', 'plurals' => ['other' => '{0} ha'], 'perUnit' => ''], narrow: ['name' => 'hektar', 'plurals' => ['other' => '{0} ha'], 'perUnit' => '']),
    'hour' => new U(name: 'duration-hour', long: ['name' => 'jam', 'plurals' => ['other' => '{0} jam'], 'perUnit' => '{0} saben jam'], short: ['name' => 'jam', 'plurals' => ['other' => '{0} jam'], 'perUnit' => '{0}/jam'], narrow: ['name' => 'jam', 'plurals' => ['other' => '{0}j'], 'perUnit' => '{0}/jam']),
    'inch' => new U(name: 'length-inch', long: ['name' => 'inci', 'plurals' => ['other' => '{0} inci'], 'perUnit' => '{0} saben inci'], short: ['name' => 'inci', 'plurals' => ['other' => '{0} in'], 'perUnit' => '{0}/in'], narrow: ['name' => 'inci', 'plurals' => ['other' => '{0} in'], 'perUnit' => '{0}/in']),
    'kilobit' => new U(name: 'digital-kilobit', long: ['name' => 'kilobit', 'plurals' => ['other' => '{0} kilobit'], 'perUnit' => ''], short: ['name' => 'kbit', 'plurals' => ['other' => '{0} kb'], 'perUnit' => ''], narrow: ['name' => 'kbit', 'plurals' => ['other' => '{0} kb'], 'perUnit' => '']),
    'kilobyte' => new U(name: 'digital-kilobyte', long: ['name' => 'kilobite', 'plurals' => ['other' => '{0} kilobite'], 'perUnit' => ''], short: ['name' => 'kBite', 'plurals' => ['other' => '{0} kB'], 'perUnit' => ''], narrow: ['name' => 'kBite', 'plurals' => ['other' => '{0} kB'], 'perUnit' => '']),
    'kilogram' => new U(name: 'mass-kilogram', long: ['name' => 'kilogram', 'plurals' => ['other' => '{0} kilogram'], 'perUnit' => '{0} saben kilogram'], short: ['name' => 'kg', 'plurals' => ['other' => '{0} kg'], 'perUnit' => '{0}/kg'], narrow: ['name' => 'kg', 'plurals' => ['other' => '{0} kg'], 'perUnit' => '{0}/kg']),
    'kilometer' => new U(name: 'length-kilometer', long: ['name' => 'kilometer', 'plurals' => ['other' => '{0} kilometer'], 'perUnit' => '{0} saben kilometer'], short: ['name' => 'km', 'plurals' => ['other' => '{0} km'], 'perUnit' => '{0}/km'], narrow: ['name' => 'km', 'plurals' => ['other' => '{0} km'], 'perUnit' => '{0}/km']),
    'liter' => new U(name: 'volume-liter', long: ['name' => 'liter', 'plurals' => ['other' => '{0} liter'], 'perUnit' => '{0} saben liter'], short: ['name' => 'liter', 'plurals' => ['other' => '{0} L'], 'perUnit' => '{0}/L'], narrow: ['name' => 'liter', 'plurals' => ['other' => '{0} L'], 'perUnit' => '{0}/L']),
    'megabit' => new U(name: 'digital-megabit', long: ['name' => 'megabit', 'plurals' => ['other' => '{0} megabit'], 'perUnit' => ''], short: ['name' => 'Mbit', 'plurals' => ['other' => '{0} Mb'], 'perUnit' => ''], narrow: ['name' => 'Mbit', 'plurals' => ['other' => '{0} Mb'], 'perUnit' => '']),
    'megabyte' => new U(name: 'digital-megabyte', long: ['name' => 'megabite', 'plurals' => ['other' => '{0} megabite'], 'perUnit' => ''], short: ['name' => 'MBite', 'plurals' => ['other' => '{0} MB'], 'perUnit' => ''], narrow: ['name' => 'MBite', 'plurals' => ['other' => '{0} MB'], 'perUnit' => '']),
    'meter' => new U(name: 'length-meter', long: ['name' => 'meter', 'plurals' => ['other' => '{0} meter'], 'perUnit' => '{0} saben meter'], short: ['name' => 'm', 'plurals' => ['other' => '{0} m'], 'perUnit' => '{0}/m'], narrow: ['name' => 'm', 'plurals' => ['other' => '{0} m'], 'perUnit' => '{0}/m']),
    'mile' => new U(name: 'length-mile', long: ['name' => 'mil', 'plurals' => ['other' => '{0} mil'], 'perUnit' => ''], short: ['name' => 'mil', 'plurals' => ['other' => '{0} mil'], 'perUnit' => ''], narrow: ['name' => 'mil', 'plurals' => ['other' => '{0} mil'], 'perUnit' => '']),
    'mile-scandinavian' => new U(name: 'length-mile-scandinavian', long: ['name' => 'mil-skandinavia', 'plurals' => ['other' => '{0} mil-skandinavia'], 'perUnit' => ''], short: ['name' => 'smi', 'plurals' => ['other' => '{0} smi'], 'perUnit' => ''], narrow: ['name' => 'smi', 'plurals' => ['other' => '{0} smi'], 'perUnit' => '']),
    'milliliter' => new U(name: 'volume-milliliter', long: ['name' => 'mililiter', 'plurals' => ['other' => '{0} mililiter'], 'perUnit' => ''], short: ['name' => 'mL', 'plurals' => ['other' => '{0} mL'], 'perUnit' => ''], narrow: ['name' => 'mL', 'plurals' => ['other' => '{0} mL'], 'perUnit' => '']),
    'millimeter' => new U(name: 'length-millimeter', long: ['name' => 'milimeter', 'plurals' => ['other' => '{0} milimeter'], 'perUnit' => ''], short: ['name' => 'mm', 'plurals' => ['other' => '{0} mm'], 'perUnit' => ''], narrow: ['name' => 'mm', 'plurals' => ['other' => '{0} mm'], 'perUnit' => '']),
    'millisecond' => new U(name: 'duration-millisecond', long: ['name' => 'milidetik', 'plurals' => ['other' => '{0} milidetik'], 'perUnit' => ''], short: ['name' => 'milidtk', 'plurals' => ['other' => '{0} md'], 'perUnit' => ''], narrow: ['name' => 'mdtk', 'plurals' => ['other' => '{0} md'], 'perUnit' => '']),
    'minute' => new U(name: 'duration-minute', long: ['name' => 'menit', 'plurals' => ['other' => '{0} menit'], 'perUnit' => '{0} saben menit'], short: ['name' => 'mnt', 'plurals' => ['other' => '{0} mnt'], 'perUnit' => '{0}/mnt'], narrow: ['name' => 'mnt', 'plurals' => ['other' => '{0} mnt'], 'perUnit' => '{0}/mnt']),
    'month' => new U(name: 'duration-month', long: ['name' => 'sasi', 'plurals' => ['other' => '{0} sasi'], 'perUnit' => '{0} saben sasi'], short: ['name' => 'sasi', 'plurals' => ['other' => '{0} sasi'], 'perUnit' => '{0}/sasi'], narrow: ['name' => 'sasi', 'plurals' => ['other' => '{0} sasi'], 'perUnit' => '{0}/sasi']),
    'ounce' => new U(name: 'mass-ounce', long: ['name' => 'ons', 'plurals' => ['other' => '{0} ons'], 'perUnit' => '{0} saben ons'], short: ['name' => 'ons', 'plurals' => ['other' => '{0} ons'], 'perUnit' => '{0}/ons'], narrow: ['name' => 'ons', 'plurals' => ['other' => '{0} ons'], 'perUnit' => '{0}/ons']),
    'percent' => new U(name: 'concentr-percent', long: ['name' => 'persen', 'plurals' => ['other' => '{0} persen'], 'perUnit' => ''], short: ['name' => 'persen', 'plurals' => ['other' => '{0}%'], 'perUnit' => ''], narrow: ['name' => '%', 'plurals' => ['other' => '{0}%'], 'perUnit' => '']),
    'petabyte' => new U(name: 'digital-petabyte', long: ['name' => 'petabite', 'plurals' => ['other' => '{0} petabite'], 'perUnit' => ''], short: ['name' => 'PBite', 'plurals' => ['other' => '{0} PB'], 'perUnit' => ''], narrow: ['name' => 'PBite', 'plurals' => ['other' => '{0} PB'], 'perUnit' => '']),
    'pound' => new U(name: 'mass-pound', long: ['name' => 'pon', 'plurals' => ['other' => '{0} pon'], 'perUnit' => '{0} saben pon'], short: ['name' => 'pon', 'plurals' => ['other' => '{0} pon'], 'perUnit' => '{0}/pon'], narrow: ['name' => 'pon', 'plurals' => ['other' => '{0} pon'], 'perUnit' => '{0}/pon']),
    'second' => new U(name: 'duration-second', long: ['name' => 'detik', 'plurals' => ['other' => '{0} detik'], 'perUnit' => '{0} saben detik'], short: ['name' => 'dtk', 'plurals' => ['other' => '{0} dtk'], 'perUnit' => '{0}/dtk'], narrow: ['name' => 'dtk', 'plurals' => ['other' => '{0} dtk'], 'perUnit' => '{0}/dtk']),
    'stone' => new U(name: 'mass-stone', long: ['name' => 'watu', 'plurals' => ['other' => '{0} watu'], 'perUnit' => ''], short: ['name' => 'watu', 'plurals' => ['other' => '{0} watu'], 'perUnit' => ''], narrow: ['name' => 'watu', 'plurals' => ['other' => '{0} watu'], 'perUnit' => '']),
    'terabit' => new U(name: 'digital-terabit', long: ['name' => 'terabit', 'plurals' => ['other' => '{0} terabit'], 'perUnit' => ''], short: ['name' => 'Tbit', 'plurals' => ['other' => '{0} Tb'], 'perUnit' => ''], narrow: ['name' => 'Tbit', 'plurals' => ['other' => '{0} Tb'], 'perUnit' => '']),
    'terabyte' => new U(name: 'digital-terabyte', long: ['name' => 'terabite', 'plurals' => ['other' => '{0} terabite'], 'perUnit' => ''], short: ['name' => 'TBite', 'plurals' => ['other' => '{0} TB'], 'perUnit' => ''], narrow: ['name' => 'TBite', 'plurals' => ['other' => '{0} TB'], 'perUnit' => '']),
    'week' => new U(name: 'duration-week', long: ['name' => 'peken', 'plurals' => ['other' => '{0} peken'], 'perUnit' => '{0} saben peken'], short: ['name' => 'peken', 'plurals' => ['other' => '{0} peken'], 'perUnit' => '{0}/peken'], narrow: ['name' => 'peken', 'plurals' => ['other' => '{0} peken'], 'perUnit' => '{0}/peken']),
    'yard' => new U(name: 'length-yard', long: ['name' => 'yard', 'plurals' => ['other' => '{0} yard'], 'perUnit' => ''], short: ['name' => 'yard', 'plurals' => ['other' => '{0} yard'], 'perUnit' => ''], narrow: ['name' => 'yard', 'plurals' => ['other' => '{0} yard'], 'perUnit' => '']),
    'year' => new U(name: 'duration-year', long: ['name' => 'taun', 'plurals' => ['other' => '{0} taun'], 'perUnit' => '{0} saben taun'], short: ['name' => 'taun', 'plurals' => ['other' => '{0} taun'], 'perUnit' => '{0}/taun'], narrow: ['name' => 'taun', 'plurals' => ['other' => '{0} taun'], 'perUnit' => '{0}/taun']),
];
