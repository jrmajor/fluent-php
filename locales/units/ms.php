<?php

use Major\Fluent\Formatters\Number\Locale\Unit as U;

return [
    'acre' => new U(name: 'area-acre', long: ['name' => 'ekar', 'plurals' => ['other' => '{0} ekar'], 'perUnit' => ''], short: ['name' => 'ekar', 'plurals' => ['other' => '{0} ekar'], 'perUnit' => ''], narrow: ['name' => 'ekar', 'plurals' => ['other' => '{0} ekar'], 'perUnit' => '']),
    'bit' => new U(name: 'digital-bit', long: ['name' => 'bit', 'plurals' => ['other' => '{0} bit'], 'perUnit' => ''], short: ['name' => 'bit', 'plurals' => ['other' => '{0} bit'], 'perUnit' => ''], narrow: ['name' => 'bit', 'plurals' => ['other' => '{0}bit'], 'perUnit' => '']),
    'byte' => new U(name: 'digital-byte', long: ['name' => 'bait', 'plurals' => ['other' => '{0} bait'], 'perUnit' => ''], short: ['name' => 'bait', 'plurals' => ['other' => '{0} bait'], 'perUnit' => ''], narrow: ['name' => 'B', 'plurals' => ['other' => '{0}B'], 'perUnit' => '']),
    'celsius' => new U(name: 'temperature-celsius', long: ['name' => 'darjah Celsius', 'plurals' => ['other' => '{0} darjah Celsius'], 'perUnit' => ''], short: ['name' => 'darjah C', 'plurals' => ['other' => '{0}°C'], 'perUnit' => ''], narrow: ['name' => '°C', 'plurals' => ['other' => '{0}°C'], 'perUnit' => '']),
    'centimeter' => new U(name: 'length-centimeter', long: ['name' => 'sentimeter', 'plurals' => ['other' => '{0} sentimeter'], 'perUnit' => '{0} setiap sentimeter'], short: ['name' => 'cm', 'plurals' => ['other' => '{0} cm'], 'perUnit' => '{0}/cm'], narrow: ['name' => 'cm', 'plurals' => ['other' => '{0} cm'], 'perUnit' => '{0}/cm']),
    'day' => new U(name: 'duration-day', long: ['name' => 'hari', 'plurals' => ['other' => '{0} hari'], 'perUnit' => '{0} setiap hari'], short: ['name' => 'hari', 'plurals' => ['other' => '{0} hari'], 'perUnit' => '{0}/h'], narrow: ['name' => 'hari', 'plurals' => ['other' => '{0} h'], 'perUnit' => '{0}/h']),
    'degree' => new U(name: 'angle-degree', long: ['name' => 'darjah', 'plurals' => ['other' => '{0} darjah'], 'perUnit' => ''], short: ['name' => 'darjah', 'plurals' => ['other' => '{0} darjah'], 'perUnit' => ''], narrow: ['name' => 'darjah', 'plurals' => ['other' => '{0}°'], 'perUnit' => '']),
    'fahrenheit' => new U(name: 'temperature-fahrenheit', long: ['name' => 'darjah Fahrenheit', 'plurals' => ['other' => '{0} darjah Fahrenheit'], 'perUnit' => ''], short: ['name' => 'darjah F', 'plurals' => ['other' => '{0}°F'], 'perUnit' => ''], narrow: ['name' => '°F', 'plurals' => ['other' => '{0}°F'], 'perUnit' => '']),
    'fluid-ounce' => new U(name: 'volume-fluid-ounce', long: ['name' => 'auns cecair', 'plurals' => ['other' => '{0} auns cecair'], 'perUnit' => ''], short: ['name' => 'fl oz', 'plurals' => ['other' => '{0} fl oz'], 'perUnit' => ''], narrow: ['name' => 'fl oz', 'plurals' => ['other' => '{0}fl oz'], 'perUnit' => '']),
    'foot' => new U(name: 'length-foot', long: ['name' => 'kaki', 'plurals' => ['other' => '{0} kaki'], 'perUnit' => '{0} sekaki'], short: ['name' => 'kaki', 'plurals' => ['other' => '{0} ka'], 'perUnit' => '{0}/ka'], narrow: ['name' => 'ka', 'plurals' => ['other' => "{0}'"], 'perUnit' => '{0}/ka']),
    'gallon' => new U(name: 'volume-gallon', long: ['name' => 'gelen', 'plurals' => ['other' => '{0} gelen'], 'perUnit' => '{0} segelen'], short: ['name' => 'gal', 'plurals' => ['other' => '{0} gal'], 'perUnit' => '{0}/gal'], narrow: ['name' => 'gal', 'plurals' => ['other' => '{0} gal'], 'perUnit' => '{0}/gal']),
    'gigabit' => new U(name: 'digital-gigabit', long: ['name' => 'gigabit', 'plurals' => ['other' => '{0} gigabit'], 'perUnit' => ''], short: ['name' => 'Gbit', 'plurals' => ['other' => '{0} Gb'], 'perUnit' => ''], narrow: ['name' => 'Gb', 'plurals' => ['other' => '{0}Gb'], 'perUnit' => '']),
    'gigabyte' => new U(name: 'digital-gigabyte', long: ['name' => 'gigabait', 'plurals' => ['other' => '{0} gigabait'], 'perUnit' => ''], short: ['name' => 'GBait', 'plurals' => ['other' => '{0} GB'], 'perUnit' => ''], narrow: ['name' => 'GB', 'plurals' => ['other' => '{0}GB'], 'perUnit' => '']),
    'gram' => new U(name: 'mass-gram', long: ['name' => 'gram', 'plurals' => ['other' => '{0} gram'], 'perUnit' => '{0} setiap gram'], short: ['name' => 'gram', 'plurals' => ['other' => '{0} g'], 'perUnit' => '{0}/g'], narrow: ['name' => 'gram', 'plurals' => ['other' => '{0} g'], 'perUnit' => '{0}/g']),
    'hectare' => new U(name: 'area-hectare', long: ['name' => 'hektar', 'plurals' => ['other' => '{0} hektar'], 'perUnit' => ''], short: ['name' => 'hektar', 'plurals' => ['other' => '{0} ha'], 'perUnit' => ''], narrow: ['name' => 'hektar', 'plurals' => ['other' => '{0} ha'], 'perUnit' => '']),
    'hour' => new U(name: 'duration-hour', long: ['name' => 'jam', 'plurals' => ['other' => '{0} jam'], 'perUnit' => '{0} sejam'], short: ['name' => 'jam', 'plurals' => ['other' => '{0} j'], 'perUnit' => '{0}/j'], narrow: ['name' => 'jam', 'plurals' => ['other' => '{0} j'], 'perUnit' => '{0}/j']),
    'inch' => new U(name: 'length-inch', long: ['name' => 'inci', 'plurals' => ['other' => '{0} inci'], 'perUnit' => '{0} seinci'], short: ['name' => 'inci', 'plurals' => ['other' => '{0} in'], 'perUnit' => '{0}/in'], narrow: ['name' => 'in', 'plurals' => ['other' => '{0}"'], 'perUnit' => '{0}/in']),
    'kilobit' => new U(name: 'digital-kilobit', long: ['name' => 'kilobit', 'plurals' => ['other' => '{0} kilobit'], 'perUnit' => ''], short: ['name' => 'kbit', 'plurals' => ['other' => '{0} kb'], 'perUnit' => ''], narrow: ['name' => 'kb', 'plurals' => ['other' => '{0}kb'], 'perUnit' => '']),
    'kilobyte' => new U(name: 'digital-kilobyte', long: ['name' => 'kilobait', 'plurals' => ['other' => '{0} kilobait'], 'perUnit' => ''], short: ['name' => 'kBait', 'plurals' => ['other' => '{0} kB'], 'perUnit' => ''], narrow: ['name' => 'kB', 'plurals' => ['other' => '{0}kB'], 'perUnit' => '']),
    'kilogram' => new U(name: 'mass-kilogram', long: ['name' => 'kilogram', 'plurals' => ['other' => '{0} kilogram'], 'perUnit' => '{0} setiap kilogram'], short: ['name' => 'kilogram', 'plurals' => ['other' => '{0} kg'], 'perUnit' => '{0}/kg'], narrow: ['name' => 'kg', 'plurals' => ['other' => '{0} kg'], 'perUnit' => '{0}/kg']),
    'kilometer' => new U(name: 'length-kilometer', long: ['name' => 'kilometer', 'plurals' => ['other' => '{0} kilometer'], 'perUnit' => '{0} setiap kilometer'], short: ['name' => 'km', 'plurals' => ['other' => '{0} km'], 'perUnit' => '{0}/km'], narrow: ['name' => 'km', 'plurals' => ['other' => '{0} km'], 'perUnit' => '{0}/km']),
    'liter' => new U(name: 'volume-liter', long: ['name' => 'liter', 'plurals' => ['other' => '{0} liter'], 'perUnit' => '{0} setiap liter'], short: ['name' => 'liter', 'plurals' => ['other' => '{0} l'], 'perUnit' => '{0}/l'], narrow: ['name' => 'liter', 'plurals' => ['other' => '{0} l'], 'perUnit' => '{0}/l']),
    'megabit' => new U(name: 'digital-megabit', long: ['name' => 'megabit', 'plurals' => ['other' => '{0} megabit'], 'perUnit' => ''], short: ['name' => 'Mbit', 'plurals' => ['other' => '{0} Mb'], 'perUnit' => ''], narrow: ['name' => 'Mb', 'plurals' => ['other' => '{0}Mb'], 'perUnit' => '']),
    'megabyte' => new U(name: 'digital-megabyte', long: ['name' => 'megabait', 'plurals' => ['other' => '{0} megabait'], 'perUnit' => ''], short: ['name' => 'MBait', 'plurals' => ['other' => '{0} MB'], 'perUnit' => ''], narrow: ['name' => 'MB', 'plurals' => ['other' => '{0}MB'], 'perUnit' => '']),
    'meter' => new U(name: 'length-meter', long: ['name' => 'meter', 'plurals' => ['other' => '{0} meter'], 'perUnit' => '{0} setiap meter'], short: ['name' => 'meter', 'plurals' => ['other' => '{0} m'], 'perUnit' => '{0}/m'], narrow: ['name' => 'meter', 'plurals' => ['other' => '{0} m'], 'perUnit' => '{0}/m']),
    'mile' => new U(name: 'length-mile', long: ['name' => 'batu', 'plurals' => ['other' => '{0} batu'], 'perUnit' => ''], short: ['name' => 'batu', 'plurals' => ['other' => '{0} bt'], 'perUnit' => ''], narrow: ['name' => 'bt', 'plurals' => ['other' => '{0} bt'], 'perUnit' => '']),
    'mile-scandinavian' => new U(name: 'length-mile-scandinavian', long: ['name' => 'batu-skandinavia', 'plurals' => ['other' => '{0} batu-skandinavia'], 'perUnit' => ''], short: ['name' => 'smi', 'plurals' => ['other' => '{0} smi'], 'perUnit' => ''], narrow: ['name' => 'smi', 'plurals' => ['other' => '{0} smi'], 'perUnit' => '']),
    'milliliter' => new U(name: 'volume-milliliter', long: ['name' => 'mililiter', 'plurals' => ['other' => '{0} mililiter'], 'perUnit' => ''], short: ['name' => 'mL', 'plurals' => ['other' => '{0} mL'], 'perUnit' => ''], narrow: ['name' => 'mL', 'plurals' => ['other' => '{0} mL'], 'perUnit' => '']),
    'millimeter' => new U(name: 'length-millimeter', long: ['name' => 'milimeter', 'plurals' => ['other' => '{0} milimeter'], 'perUnit' => ''], short: ['name' => 'mm', 'plurals' => ['other' => '{0} mm'], 'perUnit' => ''], narrow: ['name' => 'mm', 'plurals' => ['other' => '{0} mm'], 'perUnit' => '']),
    'millisecond' => new U(name: 'duration-millisecond', long: ['name' => 'milisaat', 'plurals' => ['other' => '{0} milisaat'], 'perUnit' => ''], short: ['name' => 'milisaat', 'plurals' => ['other' => '{0} ms'], 'perUnit' => ''], narrow: ['name' => 'milisaat', 'plurals' => ['other' => '{0} ms'], 'perUnit' => '']),
    'minute' => new U(name: 'duration-minute', long: ['name' => 'minit', 'plurals' => ['other' => '{0} minit'], 'perUnit' => '{0} setiap minit'], short: ['name' => 'minit', 'plurals' => ['other' => '{0} min'], 'perUnit' => '{0}/min'], narrow: ['name' => 'minit', 'plurals' => ['other' => '{0} min'], 'perUnit' => '{0}/min']),
    'month' => new U(name: 'duration-month', long: ['name' => 'bulan', 'plurals' => ['other' => '{0} bulan'], 'perUnit' => '{0} setiap bulan'], short: ['name' => 'bulan', 'plurals' => ['other' => '{0} bln'], 'perUnit' => '{0}/bln'], narrow: ['name' => 'bulan', 'plurals' => ['other' => '{0} bln'], 'perUnit' => '{0}/bln']),
    'ounce' => new U(name: 'mass-ounce', long: ['name' => 'auns', 'plurals' => ['other' => '{0} auns'], 'perUnit' => '{0} setiap auns'], short: ['name' => 'auns', 'plurals' => ['other' => '{0} oz'], 'perUnit' => '{0}/oz'], narrow: ['name' => 'auns', 'plurals' => ['other' => '{0} auns'], 'perUnit' => '{0}/oz']),
    'percent' => new U(name: 'concentr-percent', long: ['name' => 'peratus', 'plurals' => ['other' => '{0} peratus'], 'perUnit' => ''], short: ['name' => 'peratus', 'plurals' => ['other' => '{0}%'], 'perUnit' => ''], narrow: ['name' => '%', 'plurals' => ['other' => '{0}%'], 'perUnit' => '']),
    'petabyte' => new U(name: 'digital-petabyte', long: ['name' => 'petabait', 'plurals' => ['other' => '{0} petabait'], 'perUnit' => ''], short: ['name' => 'PB', 'plurals' => ['other' => '{0} PB'], 'perUnit' => ''], narrow: ['name' => 'PB', 'plurals' => ['other' => '{0}PB'], 'perUnit' => '']),
    'pound' => new U(name: 'mass-pound', long: ['name' => 'paun', 'plurals' => ['other' => '{0} paun'], 'perUnit' => '{0} setiap paun'], short: ['name' => 'paun', 'plurals' => ['other' => '{0} lb'], 'perUnit' => '{0}/lb'], narrow: ['name' => 'lb', 'plurals' => ['other' => '{0} paun'], 'perUnit' => '{0}/lb']),
    'second' => new U(name: 'duration-second', long: ['name' => 'saat', 'plurals' => ['other' => '{0} saat'], 'perUnit' => '{0} sesaat'], short: ['name' => 'saat', 'plurals' => ['other' => '{0} saat'], 'perUnit' => '{0}/s'], narrow: ['name' => 'saat', 'plurals' => ['other' => '{0} s'], 'perUnit' => '{0}/s']),
    'stone' => new U(name: 'mass-stone', long: ['name' => 'stone', 'plurals' => ['other' => '{0} stone'], 'perUnit' => ''], short: ['name' => 'stone', 'plurals' => ['other' => '{0} st'], 'perUnit' => ''], narrow: ['name' => 'stone', 'plurals' => ['other' => '{0} st'], 'perUnit' => '']),
    'terabit' => new U(name: 'digital-terabit', long: ['name' => 'terabit', 'plurals' => ['other' => '{0} terabit'], 'perUnit' => ''], short: ['name' => 'Tbit', 'plurals' => ['other' => '{0} Tb'], 'perUnit' => ''], narrow: ['name' => 'Tb', 'plurals' => ['other' => '{0}Tb'], 'perUnit' => '']),
    'terabyte' => new U(name: 'digital-terabyte', long: ['name' => 'terabait', 'plurals' => ['other' => '{0} terabait'], 'perUnit' => ''], short: ['name' => 'TBait', 'plurals' => ['other' => '{0} TB'], 'perUnit' => ''], narrow: ['name' => 'TB', 'plurals' => ['other' => '{0}TB'], 'perUnit' => '']),
    'week' => new U(name: 'duration-week', long: ['name' => 'minggu', 'plurals' => ['other' => '{0} minggu'], 'perUnit' => '{0} setiap minggu'], short: ['name' => 'minggu', 'plurals' => ['other' => '{0} mgu'], 'perUnit' => '{0}/mgu'], narrow: ['name' => 'minggu', 'plurals' => ['other' => '{0} mgu'], 'perUnit' => '{0}/mgu']),
    'yard' => new U(name: 'length-yard', long: ['name' => 'ela', 'plurals' => ['other' => '{0} ela'], 'perUnit' => ''], short: ['name' => 'ela', 'plurals' => ['other' => '{0} ela'], 'perUnit' => ''], narrow: ['name' => 'ela', 'plurals' => ['other' => '{0} ela'], 'perUnit' => '']),
    'year' => new U(name: 'duration-year', long: ['name' => 'tahun', 'plurals' => ['other' => '{0} tahun'], 'perUnit' => '{0} setiap tahun'], short: ['name' => 'tahun', 'plurals' => ['other' => '{0} thn'], 'perUnit' => '{0}/thn'], narrow: ['name' => 'thn', 'plurals' => ['other' => '{0} thn'], 'perUnit' => '{0}/thn']),
];
