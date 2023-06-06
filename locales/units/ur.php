<?php

use Major\Fluent\Formatters\Number\Locale\Unit as U;

return [
    'kilometer' => new U(name: 'length-kilometer', long: ['name' => 'کلو میٹر', 'plurals' => ['one' => '{0} کلو میٹر', 'other' => '{0} کلو میٹر'], 'perUnit' => '{0} فی کلومیٹر'], short: ['name' => 'کلو میٹر', 'plurals' => ['one' => '{0} کلو میٹر', 'other' => '{0} کلو میٹر'], 'perUnit' => '{0} فی کلو میٹر'], narrow: ['name' => 'کلو میٹر', 'plurals' => ['one' => '{0} کلو میٹر', 'other' => '{0} کلو میٹر'], 'perUnit' => '{0} فی کلو میٹر']),
    'degree' => new U(name: 'angle-degree', long: ['name' => 'ڈگری', 'plurals' => ['one' => '{0} ڈگری', 'other' => '{0} ڈگری'], 'perUnit' => ''], short: ['name' => 'ڈگری', 'plurals' => ['one' => '{0} ڈگری', 'other' => '{0} ڈگری'], 'perUnit' => ''], narrow: ['name' => 'ڈگری', 'plurals' => ['one' => '{0} ڈگری', 'other' => '{0} ڈگری'], 'perUnit' => '']),
    'acre' => new U(name: 'area-acre', long: ['name' => 'ایکڑ', 'plurals' => ['one' => '{0} ایکڑ', 'other' => '{0} ایکڑ'], 'perUnit' => ''], short: ['name' => 'ایکڑ', 'plurals' => ['one' => '{0} ایکڑ', 'other' => '{0} ایکڑ'], 'perUnit' => ''], narrow: ['name' => 'ایکڑ', 'plurals' => ['one' => '{0} ایکڑ', 'other' => '{0} ایکڑ'], 'perUnit' => '']),
    'hectare' => new U(name: 'area-hectare', long: ['name' => 'ہیکٹر', 'plurals' => ['one' => '{0} ہیکٹر', 'other' => '{0} ہیکٹر'], 'perUnit' => ''], short: ['name' => 'ہیکٹر', 'plurals' => ['one' => '{0} ہیکٹر', 'other' => '{0} ہیکٹر'], 'perUnit' => ''], narrow: ['name' => 'ہیکٹر', 'plurals' => ['one' => '{0} ہیکٹر', 'other' => '{0} ہیکٹر'], 'perUnit' => '']),
    'percent' => new U(name: 'concentr-percent', long: ['name' => 'فیصد', 'plurals' => ['one' => '{0} فیصد', 'other' => '{0} فیصد'], 'perUnit' => ''], short: ['name' => 'فیصد', 'plurals' => ['one' => '{0}%', 'other' => '{0}%'], 'perUnit' => ''], narrow: ['name' => '%', 'plurals' => ['one' => '{0}%', 'other' => '{0}%'], 'perUnit' => '']),
    'bit' => new U(name: 'digital-bit', long: ['name' => 'بٹس', 'plurals' => ['one' => '{0} بٹ', 'other' => '{0} بٹس'], 'perUnit' => ''], short: ['name' => 'bit', 'plurals' => ['one' => '{0} bit', 'other' => '{0} bit'], 'perUnit' => ''], narrow: ['name' => 'bit', 'plurals' => ['one' => '{0} bit', 'other' => '{0} bit'], 'perUnit' => '']),
    'byte' => new U(name: 'digital-byte', long: ['name' => 'بائٹ', 'plurals' => ['one' => '{0} بائٹ', 'other' => '{0} بائٹس'], 'perUnit' => ''], short: ['name' => 'بائٹ', 'plurals' => ['one' => '{0} byte', 'other' => '{0} byte'], 'perUnit' => ''], narrow: ['name' => 'بائٹ', 'plurals' => ['one' => '{0}B', 'other' => '{0}B'], 'perUnit' => '']),
    'gigabit' => new U(name: 'digital-gigabit', long: ['name' => 'گیگابٹس', 'plurals' => ['one' => '{0} گیگابٹ', 'other' => '{0} گیگابٹس'], 'perUnit' => ''], short: ['name' => 'Gbit', 'plurals' => ['one' => '{0} Gb', 'other' => '{0} Gb'], 'perUnit' => ''], narrow: ['name' => 'Gbit', 'plurals' => ['one' => '{0} Gb', 'other' => '{0} Gb'], 'perUnit' => '']),
    'gigabyte' => new U(name: 'digital-gigabyte', long: ['name' => 'گیگابائٹس', 'plurals' => ['one' => '{0} گیگابائٹ', 'other' => '{0} گیگابائٹ'], 'perUnit' => ''], short: ['name' => 'GB', 'plurals' => ['one' => '{0} GB', 'other' => '{0} GB'], 'perUnit' => ''], narrow: ['name' => 'GB', 'plurals' => ['one' => '{0} GB', 'other' => '{0} GB'], 'perUnit' => '']),
    'kilobit' => new U(name: 'digital-kilobit', long: ['name' => 'کلوبٹس', 'plurals' => ['one' => '{0} کلوبٹ', 'other' => '{0} کلوبٹس'], 'perUnit' => ''], short: ['name' => 'kbit', 'plurals' => ['one' => '{0} kb', 'other' => '{0} kb'], 'perUnit' => ''], narrow: ['name' => 'kbit', 'plurals' => ['one' => '{0} kb', 'other' => '{0} kb'], 'perUnit' => '']),
    'kilobyte' => new U(name: 'digital-kilobyte', long: ['name' => 'کلوبائٹس', 'plurals' => ['one' => '{0} کلوبائٹ', 'other' => '{0} کلوبائٹس'], 'perUnit' => ''], short: ['name' => 'kByte', 'plurals' => ['one' => '{0} kB', 'other' => '{0} kB'], 'perUnit' => ''], narrow: ['name' => 'kByte', 'plurals' => ['one' => '{0} kB', 'other' => '{0} kB'], 'perUnit' => '']),
    'megabit' => new U(name: 'digital-megabit', long: ['name' => 'میگابٹس', 'plurals' => ['one' => '{0} میگابٹ', 'other' => '{0} میگابٹس'], 'perUnit' => ''], short: ['name' => 'Mb', 'plurals' => ['one' => '{0} Mb', 'other' => '{0} Mb'], 'perUnit' => ''], narrow: ['name' => 'Mb', 'plurals' => ['one' => '{0} Mb', 'other' => '{0} Mb'], 'perUnit' => '']),
    'megabyte' => new U(name: 'digital-megabyte', long: ['name' => 'ميگابائٹس', 'plurals' => ['one' => '{0} میگابائٹ', 'other' => '{0} ميگابائٹس'], 'perUnit' => ''], short: ['name' => 'MByte', 'plurals' => ['one' => '{0} MB', 'other' => '{0} MB'], 'perUnit' => ''], narrow: ['name' => 'MByte', 'plurals' => ['one' => '{0} MB', 'other' => '{0} MB'], 'perUnit' => '']),
    'petabyte' => new U(name: 'digital-petabyte', long: ['name' => 'پیٹا بائٹس', 'plurals' => ['one' => '{0} پیٹا بائٹ', 'other' => '{0} پیٹا بائٹس'], 'perUnit' => ''], short: ['name' => 'پی بائٹ', 'plurals' => ['one' => '{0} پی بی', 'other' => '{0} پی بی'], 'perUnit' => ''], narrow: ['name' => 'پی بائٹ', 'plurals' => ['one' => '{0} پی بی', 'other' => '{0} پی بی'], 'perUnit' => '']),
    'terabit' => new U(name: 'digital-terabit', long: ['name' => 'ٹیرابٹس', 'plurals' => ['one' => '{0} ٹیرابٹ', 'other' => '{0} ٹیرابٹس'], 'perUnit' => ''], short: ['name' => 'Tbit', 'plurals' => ['one' => '{0} Tb', 'other' => '{0} Tb'], 'perUnit' => ''], narrow: ['name' => 'Tbit', 'plurals' => ['one' => '{0} Tb', 'other' => '{0} Tb'], 'perUnit' => '']),
    'terabyte' => new U(name: 'digital-terabyte', long: ['name' => 'ٹیرابائٹس', 'plurals' => ['one' => '{0} ٹیرابائٹ', 'other' => '{0} ٹیرابائٹ'], 'perUnit' => ''], short: ['name' => 'TB', 'plurals' => ['one' => '{0} TB', 'other' => '{0} TB'], 'perUnit' => ''], narrow: ['name' => 'TB', 'plurals' => ['one' => '{0} TB', 'other' => '{0} TB'], 'perUnit' => '']),
    'day' => new U(name: 'duration-day', long: ['name' => 'دن', 'plurals' => ['one' => '{0} دن', 'other' => '{0} دن'], 'perUnit' => '{0} فی دن'], short: ['name' => 'دن', 'plurals' => ['one' => '{0} دن', 'other' => '{0} دن'], 'perUnit' => '{0} فی دن'], narrow: ['name' => 'دن', 'plurals' => ['one' => '{0} دن', 'other' => '{0} دن'], 'perUnit' => '{0} فی دن']),
    'hour' => new U(name: 'duration-hour', long: ['name' => 'گھنٹے', 'plurals' => ['one' => '{0} گھنٹہ', 'other' => '{0} گھنٹے'], 'perUnit' => '{0} فی گھنٹہ'], short: ['name' => 'گھنٹے', 'plurals' => ['one' => '{0} گھنٹہ', 'other' => '{0} گھنٹے'], 'perUnit' => '{0} فی گھنٹہ'], narrow: ['name' => 'گھنٹہ', 'plurals' => ['one' => '{0} گھنٹہ', 'other' => '{0} گھنٹے'], 'perUnit' => '{0} فی گھنٹہ']),
    'millisecond' => new U(name: 'duration-millisecond', long: ['name' => 'ملی سیکنڈز', 'plurals' => ['one' => '{0} ملی سیکنڈ', 'other' => '{0} ملی سیکنڈ'], 'perUnit' => ''], short: ['name' => 'ملی سیکنڈ', 'plurals' => ['one' => '{0} ملی سیکنڈ', 'other' => '{0} ملی سیکنڈ'], 'perUnit' => ''], narrow: ['name' => 'ملی سیکنڈ', 'plurals' => ['one' => '{0} ms', 'other' => '{0} ms'], 'perUnit' => '']),
    'minute' => new U(name: 'duration-minute', long: ['name' => 'منٹ', 'plurals' => ['one' => '{0} منٹ', 'other' => '{0} منٹ'], 'perUnit' => '{0} فی منٹ'], short: ['name' => 'منٹ', 'plurals' => ['one' => '{0} منٹ', 'other' => '{0} منٹ'], 'perUnit' => '{0} فی منٹ'], narrow: ['name' => 'منٹ', 'plurals' => ['one' => '{0} منٹ', 'other' => '{0} منٹ'], 'perUnit' => '{0} فی منٹ']),
    'month' => new U(name: 'duration-month', long: ['name' => 'مہینے', 'plurals' => ['one' => '{0} مہینہ', 'other' => '{0} مہینے'], 'perUnit' => '{0} فی ماہ'], short: ['name' => 'مہینے', 'plurals' => ['one' => '{0} مہینہ', 'other' => '{0} مہینے'], 'perUnit' => '{0}/m'], narrow: ['name' => 'مہینہ', 'plurals' => ['one' => '{0} مہینہ', 'other' => '{0} مہینے'], 'perUnit' => '{0}/مہینہ']),
    'second' => new U(name: 'duration-second', long: ['name' => 'سیکنڈ', 'plurals' => ['one' => '{0} سیکنڈ', 'other' => '{0} سیکنڈ'], 'perUnit' => '{0} فی سیکنڈ'], short: ['name' => 'سیکنڈ', 'plurals' => ['one' => '{0} سیکنڈ', 'other' => '{0} سیکنڈ'], 'perUnit' => '{0} فی سیکنڈ'], narrow: ['name' => 'سیکنڈ', 'plurals' => ['one' => '{0} سیکنڈ', 'other' => '{0} سیکنڈ'], 'perUnit' => '{0} فی سیکنڈ']),
    'week' => new U(name: 'duration-week', long: ['name' => 'ہفتے', 'plurals' => ['one' => '{0} ہفتہ', 'other' => '{0} ہفتے'], 'perUnit' => '{0} فی ہفتہ'], short: ['name' => 'ہفتے', 'plurals' => ['one' => '{0} ہفتہ', 'other' => '{0} ہفتے'], 'perUnit' => '{0} فی ہفتہ'], narrow: ['name' => 'ہفتہ', 'plurals' => ['one' => '{0} ہفتہ', 'other' => '{0} ہفتے'], 'perUnit' => '{0}/ہفتہ']),
    'year' => new U(name: 'duration-year', long: ['name' => 'سال', 'plurals' => ['one' => '{0} سال', 'other' => '{0} سال'], 'perUnit' => 'فی سال {0}'], short: ['name' => 'سال', 'plurals' => ['one' => '{0} سال', 'other' => '{0} سال'], 'perUnit' => '{0}/y'], narrow: ['name' => 'سال', 'plurals' => ['one' => '{0} سال', 'other' => '{0} سال'], 'perUnit' => '{0}/سال']),
    'centimeter' => new U(name: 'length-centimeter', long: ['name' => 'سینٹی میٹر', 'plurals' => ['one' => '{0} سینٹی میٹر', 'other' => '{0} سینٹی میٹر'], 'perUnit' => '{0} فی سینٹی میٹر'], short: ['name' => 'سینٹی میٹر', 'plurals' => ['one' => '{0} سینٹی میٹر', 'other' => '{0} سینٹی میٹر'], 'perUnit' => '{0}/cm'], narrow: ['name' => 'سینٹی میٹر', 'plurals' => ['one' => '{0}cm', 'other' => '{0}cm'], 'perUnit' => '{0} فی سینٹی میٹر']),
    'foot' => new U(name: 'length-foot', long: ['name' => 'فیٹ', 'plurals' => ['one' => '{0} فیٹ', 'other' => '{0} فیٹ'], 'perUnit' => '{0} فی فوٹ'], short: ['name' => 'فیٹ', 'plurals' => ['one' => '{0} فیٹ', 'other' => '{0} فیٹ'], 'perUnit' => '{0}/ft'], narrow: ['name' => 'فیٹ', 'plurals' => ['one' => '{0}′', 'other' => '{0}′'], 'perUnit' => '{0} فی فیٹ']),
    'inch' => new U(name: 'length-inch', long: ['name' => 'انچ', 'plurals' => ['one' => '{0} انچ', 'other' => '{0} انچ'], 'perUnit' => '{0} فی انچ'], short: ['name' => 'انچ', 'plurals' => ['one' => '{0} انچ', 'other' => '{0} in'], 'perUnit' => '{0}/in'], narrow: ['name' => 'انچ', 'plurals' => ['one' => '{0} انچ', 'other' => '{0} انچ'], 'perUnit' => '{0} فی انچ']),
    'meter' => new U(name: 'length-meter', long: ['name' => 'میٹر', 'plurals' => ['one' => '{0} میٹر', 'other' => '{0} میٹر'], 'perUnit' => '{0} فی میٹر'], short: ['name' => 'میٹر', 'plurals' => ['one' => '{0} میٹر', 'other' => '{0} میٹر'], 'perUnit' => '{0}/m'], narrow: ['name' => 'میٹر', 'plurals' => ['one' => '{0} میٹر', 'other' => '{0} میٹر'], 'perUnit' => '{0} فی میٹر']),
    'mile-scandinavian' => new U(name: 'length-mile-scandinavian', long: ['name' => 'اسکینڈی نیویائی میل', 'plurals' => ['one' => '{0} اسکینڈی نیویائی میل', 'other' => '{0} اسکینڈی نیویائی میل'], 'perUnit' => ''], short: ['name' => 'smi', 'plurals' => ['one' => '{0} smi', 'other' => '{0} smi'], 'perUnit' => ''], narrow: ['name' => 'smi', 'plurals' => ['one' => '{0} smi', 'other' => '{0} smi'], 'perUnit' => '']),
    'mile' => new U(name: 'length-mile', long: ['name' => 'میل', 'plurals' => ['one' => '{0} میل', 'other' => '{0} میل'], 'perUnit' => ''], short: ['name' => 'میل', 'plurals' => ['one' => '{0} میل', 'other' => '{0} میل'], 'perUnit' => ''], narrow: ['name' => 'میل', 'plurals' => ['one' => '{0} میل', 'other' => '{0} میل'], 'perUnit' => '']),
    'millimeter' => new U(name: 'length-millimeter', long: ['name' => 'ملی میٹر', 'plurals' => ['one' => '{0} ملی میٹر', 'other' => '{0} ملیمیٹر'], 'perUnit' => ''], short: ['name' => 'ملی میٹر', 'plurals' => ['one' => '{0} ملیمیٹر', 'other' => '{0} ملیمیٹر'], 'perUnit' => ''], narrow: ['name' => 'ملی میٹر', 'plurals' => ['one' => '{0} ملیمیٹر', 'other' => '{0} ملیمیٹر'], 'perUnit' => '']),
    'yard' => new U(name: 'length-yard', long: ['name' => 'گز', 'plurals' => ['one' => '{0} یارڈ', 'other' => '{0} یارڈ'], 'perUnit' => ''], short: ['name' => 'گز', 'plurals' => ['one' => '{0} یارڈ', 'other' => '{0} یارڈ'], 'perUnit' => ''], narrow: ['name' => 'گز', 'plurals' => ['one' => '{0} یارڈ', 'other' => '{0} یارڈ'], 'perUnit' => '']),
    'gram' => new U(name: 'mass-gram', long: ['name' => 'گرام', 'plurals' => ['one' => '{0} گرام', 'other' => '{0} گرام'], 'perUnit' => '{0} فی گرام'], short: ['name' => 'گرام', 'plurals' => ['one' => '{0} g', 'other' => '{0} g'], 'perUnit' => '{0}/g'], narrow: ['name' => 'گرام', 'plurals' => ['one' => '{0} گرام', 'other' => '{0} گرام'], 'perUnit' => '{0} فی گرام']),
    'kilogram' => new U(name: 'mass-kilogram', long: ['name' => 'کلو گرام', 'plurals' => ['one' => '{0} کلو گرام', 'other' => '{0} کلو گرام'], 'perUnit' => '{0} فی کلو گرام'], short: ['name' => 'kg', 'plurals' => ['one' => '{0} kg', 'other' => '{0} kg'], 'perUnit' => '{0}/kg'], narrow: ['name' => 'kg', 'plurals' => ['one' => '{0}kg', 'other' => '{0}kg'], 'perUnit' => '{0} فی کلو گرام']),
    'ounce' => new U(name: 'mass-ounce', long: ['name' => 'اونس', 'plurals' => ['one' => '{0} اونس', 'other' => '{0} اونس'], 'perUnit' => '{0} فی اونس'], short: ['name' => 'oz', 'plurals' => ['one' => '{0} oz', 'other' => '{0} oz'], 'perUnit' => '{0}/oz'], narrow: ['name' => 'oz', 'plurals' => ['one' => '{0} ونس', 'other' => '{0} ونس'], 'perUnit' => '{0}/oz']),
    'pound' => new U(name: 'mass-pound', long: ['name' => 'پونڈ', 'plurals' => ['one' => '{0} پونڈ', 'other' => '{0} پونڈ'], 'perUnit' => '{0} فی پونڈ'], short: ['name' => 'پونڈ', 'plurals' => ['one' => '{0} lb', 'other' => '{0} lb'], 'perUnit' => '{0}/lb'], narrow: ['name' => 'lb', 'plurals' => ['one' => '{0} پونڈ', 'other' => '{0} پونڈ'], 'perUnit' => '{0}/lb']),
    'stone' => new U(name: 'mass-stone', long: ['name' => 'اسٹونز', 'plurals' => ['one' => '{0} اسٹون', 'other' => '{0} اسٹونز'], 'perUnit' => ''], short: ['name' => 'st', 'plurals' => ['one' => '{0} st', 'other' => '{0} st'], 'perUnit' => ''], narrow: ['name' => 'st', 'plurals' => ['one' => '{0} st', 'other' => '{0} st'], 'perUnit' => '']),
    'celsius' => new U(name: 'temperature-celsius', long: ['name' => 'ڈگری سیلسیس', 'plurals' => ['one' => '{0} ڈگری سیلسیس', 'other' => '{0} ڈگری سیلسیس'], 'perUnit' => ''], short: ['name' => 'ڈگری سیلسیس', 'plurals' => ['one' => "{0}\u{200E}°C", 'other' => "{0}\u{200E}°C"], 'perUnit' => ''], narrow: ['name' => '⁰C', 'plurals' => ['one' => "{0}\u{200E}°", 'other' => "{0}\u{200E}°"], 'perUnit' => '']),
    'fahrenheit' => new U(name: 'temperature-fahrenheit', long: ['name' => 'ڈگری فارن ہائیٹ', 'plurals' => ['one' => '{0} ڈگری فارن ہائیٹ', 'other' => '{0} ڈگری فارن ہائیٹ'], 'perUnit' => ''], short: ['name' => 'ڈگری فارن ہائیٹ', 'plurals' => ['one' => "{0}\u{200E}°F", 'other' => "{0}\u{200E}°F"], 'perUnit' => ''], narrow: ['name' => '°F', 'plurals' => ['one' => "{0}\u{200E}°F", 'other' => "{0}\u{200E}°F"], 'perUnit' => '']),
    'fluid-ounce' => new U(name: 'volume-fluid-ounce', long: ['name' => 'فلوئڈ اونس', 'plurals' => ['one' => '{0} فلوئڈ اونس', 'other' => '{0} فلوئڈ اونس'], 'perUnit' => ''], short: ['name' => 'fl oz', 'plurals' => ['one' => '{0} fl oz', 'other' => '{0} fl oz'], 'perUnit' => ''], narrow: ['name' => 'fl oz', 'plurals' => ['one' => '{0} fl oz', 'other' => '{0} fl oz'], 'perUnit' => '']),
    'gallon' => new U(name: 'volume-gallon', long: ['name' => 'گیلن', 'plurals' => ['one' => '{0} گیلن', 'other' => '{0} گیلن'], 'perUnit' => '{0} فی گیلن'], short: ['name' => 'gal', 'plurals' => ['one' => '{0} gal', 'other' => '{0} gal'], 'perUnit' => '{0}/gal'], narrow: ['name' => 'gal', 'plurals' => ['one' => '{0} gal', 'other' => '{0} gal'], 'perUnit' => '{0}/gal']),
    'liter' => new U(name: 'volume-liter', long: ['name' => 'لیٹر', 'plurals' => ['one' => '{0} لیٹر', 'other' => '{0} لیٹر'], 'perUnit' => '{0} فی لیٹر'], short: ['name' => 'لیٹر', 'plurals' => ['one' => '{0} لیٹر', 'other' => '{0} لیٹر'], 'perUnit' => '{0} فی لیٹر'], narrow: ['name' => 'لیٹر', 'plurals' => ['one' => '{0} لیٹر', 'other' => '{0} لیٹر'], 'perUnit' => '{0} فی لیٹر']),
    'milliliter' => new U(name: 'volume-milliliter', long: ['name' => 'ملی لیٹر', 'plurals' => ['one' => '{0} ملی لیٹر', 'other' => '{0} ملی لیٹر'], 'perUnit' => ''], short: ['name' => 'mL', 'plurals' => ['one' => '{0} mL', 'other' => '{0} mL'], 'perUnit' => ''], narrow: ['name' => 'mL', 'plurals' => ['one' => '{0} mL', 'other' => '{0} mL'], 'perUnit' => '']),
];
