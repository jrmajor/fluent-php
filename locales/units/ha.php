<?php

use Major\Fluent\Formatters\Number\Locale\Unit as U;

return [
    'acre' => new U(name: 'area-acre', long: ['name' => 'eka', 'plurals' => ['one' => 'eka {0}', 'other' => 'ekoki {0}'], 'perUnit' => ''], short: ['name' => 'ekoki', 'plurals' => ['one' => 'ek {0}', 'other' => 'ek {0}'], 'perUnit' => ''], narrow: ['name' => 'eka', 'plurals' => ['one' => 'ek{0}', 'other' => 'ek{0}'], 'perUnit' => '']),
    'bit' => new U(name: 'digital-bit', long: ['name' => 'bits', 'plurals' => ['one' => 'bit {0}', 'other' => 'bits {0}'], 'perUnit' => ''], short: ['name' => 'bit', 'plurals' => ['one' => 'bit {0}', 'other' => 'bit {0}'], 'perUnit' => ''], narrow: ['name' => 'bit', 'plurals' => ['one' => 'bit{0}', 'other' => 'bit{0}'], 'perUnit' => '']),
    'byte' => new U(name: 'digital-byte', long: ['name' => 'bytes', 'plurals' => ['one' => 'byte {0}', 'other' => 'bytes {0}'], 'perUnit' => ''], short: ['name' => 'byte', 'plurals' => ['one' => 'byte {0}', 'other' => 'byte {0}'], 'perUnit' => ''], narrow: ['name' => 'B', 'plurals' => ['one' => 'B{0}', 'other' => 'B{0}'], 'perUnit' => '']),
    'celsius' => new U(name: 'temperature-celsius', long: ['name' => 'digiri-digiri Selsiyas', 'plurals' => ['one' => 'Digiri Selsiyas {0}', 'other' => 'digiri-digiri Selsiyas {0}'], 'perUnit' => ''], short: ['name' => 'dig. S', 'plurals' => ['one' => '°S{0}', 'other' => '°S{0}'], 'perUnit' => ''], narrow: ['name' => '°S', 'plurals' => ['one' => 'S°{0}', 'other' => 'S°{0}'], 'perUnit' => '']),
    'centimeter' => new U(name: 'length-centimeter', long: ['name' => 'sentimitoci', 'plurals' => ['one' => 'sentimita {0}', 'other' => 'sentimitoci {0}'], 'perUnit' => '{0} a sentimita'], short: ['name' => 'cm', 'plurals' => ['one' => 'cm {0}', 'other' => 'cm {0}'], 'perUnit' => '{0}/cm'], narrow: ['name' => 'cm', 'plurals' => ['one' => 'cm{0}', 'other' => 'cm{0}'], 'perUnit' => '{0}/cm']),
    'day' => new U(name: 'duration-day', long: ['name' => 'ranaku', 'plurals' => ['one' => 'rana {0}', 'other' => 'ranaku {0}'], 'perUnit' => '{0} a rana'], short: ['name' => 'ranaku', 'plurals' => ['one' => 'rana {0}', 'other' => 'Rnk. {0}'], 'perUnit' => '{0}/r'], narrow: ['name' => 'rana', 'plurals' => ['one' => 'r{0}', 'other' => 'r{0}'], 'perUnit' => '{0}/r']),
    'degree' => new U(name: 'angle-degree', long: ['name' => 'degrees', 'plurals' => ['one' => 'degree {0}', 'other' => 'degrees {0}'], 'perUnit' => ''], short: ['name' => 'degrees', 'plurals' => ['one' => 'deg {0}', 'other' => 'deg {0}'], 'perUnit' => ''], narrow: ['name' => 'deg', 'plurals' => ['one' => 'deg{0}', 'other' => 'deg{0}'], 'perUnit' => '']),
    'fahrenheit' => new U(name: 'temperature-fahrenheit', long: ['name' => 'digiri-digiri faranhit', 'plurals' => ['one' => 'Digiri Faranhit {0}', 'other' => 'digiri-digiri faranhit {0}'], 'perUnit' => ''], short: ['name' => 'dig. F', 'plurals' => ['one' => 'F°{0}', 'other' => 'F°{0}'], 'perUnit' => ''], narrow: ['name' => '°F', 'plurals' => ['one' => '°{0}', 'other' => '°{0}'], 'perUnit' => '']),
    'fluid-ounce' => new U(name: 'volume-fluid-ounce', long: ['name' => 'fluid ounces', 'plurals' => ['one' => 'fluid ounce {0}', 'other' => 'fluid ounces {0}'], 'perUnit' => ''], short: ['name' => 'fl oz', 'plurals' => ['one' => 'fl oz {0}', 'other' => 'fl oz {0}'], 'perUnit' => ''], narrow: ['name' => 'fl oz', 'plurals' => ['one' => 'fl oz{0}', 'other' => 'fl oz{0}'], 'perUnit' => '']),
    'foot' => new U(name: 'length-foot', long: ['name' => 'ƙafafu', 'plurals' => ['one' => 'ƙafa {0}', 'other' => 'ƙafafu {0}'], 'perUnit' => '{0} a ƙafa'], short: ['name' => 'ƙafafu', 'plurals' => ['one' => 'ƙf {0}', 'other' => 'ƙff {0}'], 'perUnit' => '{0}/ƙf'], narrow: ['name' => 'ƙafafu', 'plurals' => ['one' => 'ƙf{0}', 'other' => 'ƙff{0}'], 'perUnit' => '{0}/ƙf']),
    'gallon' => new U(name: 'volume-gallon', long: ['name' => 'galan-galan', 'plurals' => ['one' => 'galan {0}', 'other' => 'galan-galan {0}'], 'perUnit' => '{0} a galan'], short: ['name' => 'gal', 'plurals' => ['one' => 'gal {0}', 'other' => 'gal {0}'], 'perUnit' => '{0}/gal US'], narrow: ['name' => 'gal', 'plurals' => ['one' => 'gal{0}', 'other' => 'gal{0}'], 'perUnit' => '{0}/gal']),
    'gigabit' => new U(name: 'digital-gigabit', long: ['name' => 'gigabits', 'plurals' => ['one' => 'gigabit {0}', 'other' => 'gigabits {0}'], 'perUnit' => ''], short: ['name' => 'Gbit', 'plurals' => ['one' => 'Gb {0}', 'other' => 'Gb {0}'], 'perUnit' => ''], narrow: ['name' => 'Gb', 'plurals' => ['one' => 'Gb{0}', 'other' => 'Gb{0}'], 'perUnit' => '']),
    'gigabyte' => new U(name: 'digital-gigabyte', long: ['name' => 'gigabytes', 'plurals' => ['one' => 'gigabyte {0}', 'other' => 'gigabytes {0}'], 'perUnit' => ''], short: ['name' => 'GByte', 'plurals' => ['one' => 'GB {0}', 'other' => 'GB {0}'], 'perUnit' => ''], narrow: ['name' => 'GB', 'plurals' => ['one' => 'GB{0}', 'other' => 'GB {0}'], 'perUnit' => '']),
    'gram' => new U(name: 'mass-gram', long: ['name' => 'giram-giram', 'plurals' => ['one' => 'giram {0}', 'other' => 'giram-giram {0}'], 'perUnit' => '{0} a giram'], short: ['name' => 'giram', 'plurals' => ['one' => 'g {0}', 'other' => 'g {0}'], 'perUnit' => '{0}/g'], narrow: ['name' => 'giram', 'plurals' => ['one' => 'g{0}', 'other' => 'g{0}'], 'perUnit' => '{0}/g']),
    'hectare' => new U(name: 'area-hectare', long: ['name' => 'hektoci', 'plurals' => ['one' => 'hekta {0}', 'other' => 'hektoci {0}'], 'perUnit' => ''], short: ['name' => 'hektoci', 'plurals' => ['one' => 'ha {0}', 'other' => 'ha {0}'], 'perUnit' => ''], narrow: ['name' => 'hekta', 'plurals' => ['one' => 'ha{0}', 'other' => 'hk{0}'], 'perUnit' => '']),
    'hour' => new U(name: 'duration-hour', long: ['name' => 'saʼoʼi', 'plurals' => ['one' => 'sa′a {0}', 'other' => 'sa′o′i {0}'], 'perUnit' => '{0} a saʼa'], short: ['name' => 'saʼoʼi', 'plurals' => ['one' => 's {0}', 'other' => 's {0}'], 'perUnit' => '{0}/saʼa'], narrow: ['name' => 'saʼa', 'plurals' => ['one' => 's{0}', 'other' => 's{0}'], 'perUnit' => '{0}/saʼa']),
    'inch' => new U(name: 'length-inch', long: ['name' => 'incina', 'plurals' => ['one' => 'inci {0}', 'other' => 'incina {0}'], 'perUnit' => '{0} a inci'], short: ['name' => 'incina', 'plurals' => ['one' => 'in {0}', 'other' => 'in {0}'], 'perUnit' => '{0}/in'], narrow: ['name' => 'incina', 'plurals' => ['one' => '{0}″', 'other' => '{0}″'], 'perUnit' => '{0}/in']),
    'kilobit' => new U(name: 'digital-kilobit', long: ['name' => 'kilobits', 'plurals' => ['one' => 'kilobit {0}', 'other' => 'kilobits {0}'], 'perUnit' => ''], short: ['name' => 'kbit', 'plurals' => ['one' => 'kb {0}', 'other' => 'kb {0}'], 'perUnit' => ''], narrow: ['name' => 'kb', 'plurals' => ['one' => 'kb{0}', 'other' => 'kb{0}'], 'perUnit' => '']),
    'kilobyte' => new U(name: 'digital-kilobyte', long: ['name' => 'kilobytes', 'plurals' => ['one' => 'kilobyte {0}', 'other' => 'kilobytes {0}'], 'perUnit' => ''], short: ['name' => 'KByte', 'plurals' => ['one' => 'kB {0}', 'other' => 'kB {0}'], 'perUnit' => ''], narrow: ['name' => 'kB', 'plurals' => ['one' => 'kB{0}', 'other' => 'kB{0}'], 'perUnit' => '']),
    'kilogram' => new U(name: 'mass-kilogram', long: ['name' => 'kilogiramgiram', 'plurals' => ['one' => 'kilogiram {0}', 'other' => 'kilogiramgiram {0}'], 'perUnit' => '{0} a kilogiram'], short: ['name' => 'kg', 'plurals' => ['one' => 'kg {0}', 'other' => 'kg {0}'], 'perUnit' => '{0}/kg'], narrow: ['name' => 'kg', 'plurals' => ['one' => 'kg{0}', 'other' => 'kg{0}'], 'perUnit' => '{0}/kg']),
    'kilometer' => new U(name: 'length-kilometer', long: ['name' => 'kilomitoci', 'plurals' => ['one' => 'kilomita {0}', 'other' => 'kilomitoci {0}'], 'perUnit' => '{0} a kilomita'], short: ['name' => 'km', 'plurals' => ['one' => 'km {0}', 'other' => '{0} km'], 'perUnit' => '{0}/km'], narrow: ['name' => 'km', 'plurals' => ['one' => 'km{0}', 'other' => 'km{0}'], 'perUnit' => '{0}/km']),
    'liter' => new U(name: 'volume-liter', long: ['name' => 'litoci', 'plurals' => ['one' => 'lita {0}', 'other' => 'litoci {0}'], 'perUnit' => '{0} a lita'], short: ['name' => 'litoci', 'plurals' => ['one' => 'L {0}', 'other' => 'L {0}'], 'perUnit' => '{0}/L'], narrow: ['name' => 'lita', 'plurals' => ['one' => 'L{0}', 'other' => 'L{0}'], 'perUnit' => '{0}/L']),
    'megabit' => new U(name: 'digital-megabit', long: ['name' => 'megabits', 'plurals' => ['one' => 'megabit {0}', 'other' => 'megabits {0}'], 'perUnit' => ''], short: ['name' => 'Mbit', 'plurals' => ['one' => 'Mb {0}', 'other' => 'Mb {0}'], 'perUnit' => ''], narrow: ['name' => 'Mb', 'plurals' => ['one' => 'Mb{0}', 'other' => 'Mb{0}'], 'perUnit' => '']),
    'megabyte' => new U(name: 'digital-megabyte', long: ['name' => 'megabytes', 'plurals' => ['one' => 'megabyte {0}', 'other' => 'megabytes {0}'], 'perUnit' => ''], short: ['name' => 'MByte', 'plurals' => ['one' => 'MB {0}', 'other' => 'MB {0}'], 'perUnit' => ''], narrow: ['name' => 'MB', 'plurals' => ['one' => 'MB{0}', 'other' => 'MB{0}'], 'perUnit' => '']),
    'meter' => new U(name: 'length-meter', long: ['name' => 'mitoci', 'plurals' => ['one' => 'mita {0}', 'other' => 'mitoci {0}'], 'perUnit' => '{0} a mita'], short: ['name' => 'm', 'plurals' => ['one' => 'm {0}', 'other' => 'm {0}'], 'perUnit' => '{0}/m'], narrow: ['name' => 'm', 'plurals' => ['one' => 'm{0}', 'other' => 'm{0}'], 'perUnit' => '{0}/m']),
    'mile' => new U(name: 'length-mile', long: ['name' => 'mil-mil', 'plurals' => ['one' => 'mil {0}', 'other' => 'mil-mil {0}'], 'perUnit' => ''], short: ['name' => 'mil-mil', 'plurals' => ['one' => 'mi {0}', 'other' => 'mi {0}'], 'perUnit' => ''], narrow: ['name' => 'mil-mil', 'plurals' => ['one' => 'mi{0}', 'other' => 'mil-mil{0}'], 'perUnit' => '']),
    'mile-scandinavian' => new U(name: 'length-mile-scandinavian', long: ['name' => 'mile-scandinavian', 'plurals' => ['one' => 'mile-scandinavian {0}', 'other' => 'miles-scandinavian {0}'], 'perUnit' => ''], short: ['name' => 'smi', 'plurals' => ['one' => 'smi {0}', 'other' => 'smi {0}'], 'perUnit' => ''], narrow: ['name' => 'smi', 'plurals' => ['one' => 'smi{0}', 'other' => 'smi{0}'], 'perUnit' => '']),
    'milliliter' => new U(name: 'volume-milliliter', long: ['name' => 'millimitoci', 'plurals' => ['one' => 'millimita {0}', 'other' => 'millimitoci {0}'], 'perUnit' => ''], short: ['name' => 'mL', 'plurals' => ['one' => 'mL {0}', 'other' => 'mL {0}'], 'perUnit' => ''], narrow: ['name' => 'mL', 'plurals' => ['one' => 'mL{0}', 'other' => 'mL{0}'], 'perUnit' => '']),
    'millimeter' => new U(name: 'length-millimeter', long: ['name' => 'milimitoci', 'plurals' => ['one' => 'milimita {0}', 'other' => 'milimitoci {0}'], 'perUnit' => ''], short: ['name' => 'mm', 'plurals' => ['one' => 'mm {0}', 'other' => 'mm {0}'], 'perUnit' => ''], narrow: ['name' => 'mm', 'plurals' => ['one' => 'mm{0}', 'other' => 'mm{0}'], 'perUnit' => '']),
    'millisecond' => new U(name: 'duration-millisecond', long: ['name' => 'millisakan', 'plurals' => ['one' => 'millisakan {0}', 'other' => 'millisakans {0}'], 'perUnit' => ''], short: ['name' => 'milseks', 'plurals' => ['one' => 'ms {0}', 'other' => 'ms {0}'], 'perUnit' => ''], narrow: ['name' => 'msek', 'plurals' => ['one' => 'ms {0}', 'other' => 'ms {0}'], 'perUnit' => '']),
    'minute' => new U(name: 'duration-minute', long: ['name' => 'mintoci', 'plurals' => ['one' => 'minti {0}', 'other' => 'mintoci {0}'], 'perUnit' => '{0} a minti'], short: ['name' => 'mintc', 'plurals' => ['one' => 'mnt {0}', 'other' => 'mnt {0}'], 'perUnit' => '{0}/mnt'], narrow: ['name' => 'mnt', 'plurals' => ['one' => 'minti{0}', 'other' => 'minti {0}'], 'perUnit' => '{0}/mnt']),
    'month' => new U(name: 'duration-month', long: ['name' => 'wat', 'plurals' => ['one' => 'wata {0}', 'other' => 'watanni {0}'], 'perUnit' => '{0} a wata'], short: ['name' => 'watanni', 'plurals' => ['one' => 'wat {0}', 'other' => 'wtnn {0}'], 'perUnit' => '{0}/w'], narrow: ['name' => 'wata', 'plurals' => ['one' => 'w{0}', 'other' => 'w{0}'], 'perUnit' => '{0}/w']),
    'ounce' => new U(name: 'mass-ounce', long: ['name' => 'oza-oza', 'plurals' => ['one' => 'oza {0}', 'other' => 'oza-oza {0}'], 'perUnit' => '{0} a oza'], short: ['name' => 'oz', 'plurals' => ['one' => 'oz {0}', 'other' => 'oz {0}'], 'perUnit' => '{0}/oz'], narrow: ['name' => 'oz', 'plurals' => ['one' => 'oz{0}', 'other' => 'oz{0}'], 'perUnit' => '{0}/oz']),
    'percent' => new U(name: 'concentr-percent', long: ['name' => 'kaso', 'plurals' => ['one' => 'kaso {0}', 'other' => 'Kaso {0}'], 'perUnit' => ''], short: ['name' => 'kaso', 'plurals' => ['one' => '{0}%', 'other' => '{0}%'], 'perUnit' => ''], narrow: ['name' => 'kaso', 'plurals' => ['one' => '%{0}', 'other' => '%{0}'], 'perUnit' => '']),
    'petabyte' => new U(name: 'digital-petabyte', long: ['name' => 'petabytes', 'plurals' => ['one' => 'petabyte {0}', 'other' => 'petabytes {0}'], 'perUnit' => ''], short: ['name' => 'PByte', 'plurals' => ['one' => 'PB {0}', 'other' => 'PB {0}'], 'perUnit' => ''], narrow: ['name' => 'PB', 'plurals' => ['one' => 'PB{0}', 'other' => 'PB{0}'], 'perUnit' => '']),
    'pound' => new U(name: 'mass-pound', long: ['name' => 'laba-laba', 'plurals' => ['one' => 'Laba {0}', 'other' => 'laba-laba {0}'], 'perUnit' => '{0}/lb'], short: ['name' => 'laba-laba', 'plurals' => ['one' => 'lb {0}', 'other' => 'lb {0}'], 'perUnit' => '{0}/lb'], narrow: ['name' => 'laba', 'plurals' => ['one' => '{0}#', 'other' => '{0}#'], 'perUnit' => '{0}/lb']),
    'second' => new U(name: 'duration-second', long: ['name' => 'daƙiƙoƙi', 'plurals' => ['one' => 'daƙiƙa {0}', 'other' => 'daƙiƙoƙi {0}'], 'perUnit' => '{0} a daƙiƙa'], short: ['name' => 'daƙ', 'plurals' => ['one' => 'd {0}', 'other' => 'd {0}'], 'perUnit' => '{0}/d'], narrow: ['name' => 'daƙ', 'plurals' => ['one' => 'd {0}', 'other' => 'd {0}'], 'perUnit' => '{0}/d']),
    'stone' => new U(name: 'mass-stone', long: ['name' => 'stones', 'plurals' => ['one' => 'stone {0}', 'other' => 'stones {0}'], 'perUnit' => ''], short: ['name' => 'stones', 'plurals' => ['one' => 'st {0}', 'other' => 'st {0}'], 'perUnit' => ''], narrow: ['name' => 'stone', 'plurals' => ['one' => 'st{0}', 'other' => 'st{0}'], 'perUnit' => '']),
    'terabit' => new U(name: 'digital-terabit', long: ['name' => 'terabits', 'plurals' => ['one' => 'terabit {0}', 'other' => 'terabits {0}'], 'perUnit' => ''], short: ['name' => 'Tbit', 'plurals' => ['one' => 'Tb {0}', 'other' => 'Tb {0}'], 'perUnit' => ''], narrow: ['name' => 'Tb', 'plurals' => ['one' => 'Tb{0}', 'other' => 'Tb{0}'], 'perUnit' => '']),
    'terabyte' => new U(name: 'digital-terabyte', long: ['name' => 'terabytes', 'plurals' => ['one' => 'terabyte {0}', 'other' => 'terabytes {0}'], 'perUnit' => ''], short: ['name' => 'TByte', 'plurals' => ['one' => 'TB {0}', 'other' => 'TB {0}'], 'perUnit' => ''], narrow: ['name' => 'TB', 'plurals' => ['one' => 'TB{0}', 'other' => 'TB{0}'], 'perUnit' => '']),
    'week' => new U(name: 'duration-week', long: ['name' => 'makonni', 'plurals' => ['one' => 'mako {0}', 'other' => 'makonni {0}'], 'perUnit' => '{0} a mako'], short: ['name' => 'makonni', 'plurals' => ['one' => 'mk {0}', 'other' => 'mkn {0}'], 'perUnit' => '{0}/m'], narrow: ['name' => 'mk', 'plurals' => ['one' => 'm{0}', 'other' => 'm{0}'], 'perUnit' => '{0}/m']),
    'yard' => new U(name: 'length-yard', long: ['name' => 'yaduka', 'plurals' => ['one' => 'yadi {0}', 'other' => 'yaduka {0}'], 'perUnit' => ''], short: ['name' => 'yaduka', 'plurals' => ['one' => 'yd {0}', 'other' => 'yd {0}'], 'perUnit' => ''], narrow: ['name' => 'yaduka', 'plurals' => ['one' => 'yd{0}', 'other' => 'ydk{0}'], 'perUnit' => '']),
    'year' => new U(name: 'duration-year', long: ['name' => 'shekaru', 'plurals' => ['one' => 'shekara {0}', 'other' => 'shekaru {0}'], 'perUnit' => '{0} a shekara'], short: ['name' => 'shekaru', 'plurals' => ['one' => 'shkr {0}', 'other' => 'shkru {0}'], 'perUnit' => '{0}/s'], narrow: ['name' => 'shkr', 'plurals' => ['one' => 'shkr {0}', 'other' => 's{0}'], 'perUnit' => '{0}/s']),
];
