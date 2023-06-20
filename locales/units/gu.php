<?php

use Major\Fluent\Formatters\Number\Locale\Unit as U;

return [
    'acre' => new U(name: 'area-acre', long: ['name' => 'એકર', 'plurals' => ['one' => '{0} એકર', 'other' => '{0} એકર'], 'perUnit' => ''], short: ['name' => 'એકર', 'plurals' => ['one' => '{0} એકર', 'other' => '{0} એકર'], 'perUnit' => ''], narrow: ['name' => 'એકર', 'plurals' => ['one' => '{0} એકર', 'other' => '{0} એકર'], 'perUnit' => '']),
    'bit' => new U(name: 'digital-bit', long: ['name' => 'બિટ', 'plurals' => ['one' => '{0} બિટ', 'other' => '{0} બિટ'], 'perUnit' => ''], short: ['name' => 'બિટ', 'plurals' => ['one' => '{0} બિટ', 'other' => '{0} બિટ'], 'perUnit' => ''], narrow: ['name' => 'બિટ', 'plurals' => ['one' => '{0} બિટ', 'other' => '{0} બિટ'], 'perUnit' => '']),
    'byte' => new U(name: 'digital-byte', long: ['name' => 'બાઇટ', 'plurals' => ['one' => '{0} બાઇટ', 'other' => '{0} બાઇટ'], 'perUnit' => ''], short: ['name' => 'બાઇટ', 'plurals' => ['one' => '{0} બાઇટ', 'other' => '{0} બાઇટ'], 'perUnit' => ''], narrow: ['name' => 'બાઇટ', 'plurals' => ['one' => '{0} બાઇટ', 'other' => '{0} બાઇટ'], 'perUnit' => '']),
    'celsius' => new U(name: 'temperature-celsius', long: ['name' => 'ડિગ્રી સેલ્સિયસ', 'plurals' => ['one' => '{0} ડિગ્રી સેલ્સિયસ', 'other' => '{0} ડિગ્રી સેલ્સિયસ'], 'perUnit' => ''], short: ['name' => 'ડિગ્રી સેલ્સિયસ', 'plurals' => ['one' => '{0}°C', 'other' => '{0}°C'], 'perUnit' => ''], narrow: ['name' => '°C', 'plurals' => ['one' => '{0}°C', 'other' => '{0}°C'], 'perUnit' => '']),
    'centimeter' => new U(name: 'length-centimeter', long: ['name' => 'સેન્ટિમીટર', 'plurals' => ['one' => '{0} સેન્ટિમીટર', 'other' => '{0} સેન્ટિમીટર'], 'perUnit' => '{0} પ્રતિ સેન્ટિમીટર'], short: ['name' => 'સેમી', 'plurals' => ['one' => '{0} સેમી', 'other' => '{0} સેમી'], 'perUnit' => '{0}/સેમી'], narrow: ['name' => 'સેમી', 'plurals' => ['one' => '{0} સેમી', 'other' => '{0} સેમી'], 'perUnit' => '{0}/સેમી']),
    'day' => new U(name: 'duration-day', long: ['name' => 'દિવસ', 'plurals' => ['one' => '{0} દિવસ', 'other' => '{0} દિવસ'], 'perUnit' => '{0} પ્રતિ દિવસ'], short: ['name' => 'દિવસ', 'plurals' => ['one' => '{0} દિવસ', 'other' => '{0} દિવસ'], 'perUnit' => '{0}/ દિવસ'], narrow: ['name' => 'દિવસ', 'plurals' => ['one' => '{0} દિ', 'other' => '{0} દિ'], 'perUnit' => '{0}/ દિ']),
    'degree' => new U(name: 'angle-degree', long: ['name' => 'અંશ', 'plurals' => ['one' => '{0} અંશ', 'other' => '{0} અંશ'], 'perUnit' => ''], short: ['name' => 'અંશ', 'plurals' => ['one' => '{0} અંશ', 'other' => '{0} અંશ'], 'perUnit' => ''], narrow: ['name' => 'અંશ', 'plurals' => ['one' => '{0} અંશ', 'other' => '{0} અંશ'], 'perUnit' => '']),
    'fahrenheit' => new U(name: 'temperature-fahrenheit', long: ['name' => 'ડિગ્રી ફેરનહીટ', 'plurals' => ['one' => '{0} ડિગ્રી ફેરનહીટ', 'other' => '{0} ડિગ્રી ફેરનહીટ'], 'perUnit' => ''], short: ['name' => 'ડિગ્રી ફેરનહીટ', 'plurals' => ['one' => '{0}°F', 'other' => '{0}°F'], 'perUnit' => ''], narrow: ['name' => 'ડિગ્રી ફેરનહીટ', 'plurals' => ['one' => '{0}°F', 'other' => '{0}°F'], 'perUnit' => '']),
    'fluid-ounce' => new U(name: 'volume-fluid-ounce', long: ['name' => 'પ્રવાહી ઔંસ', 'plurals' => ['one' => '{0} પ્રવાહી ઔંસ', 'other' => '{0} પ્રવાહી ઔંસ'], 'perUnit' => ''], short: ['name' => 'પ્રવાહી ઔંસ', 'plurals' => ['one' => '{0} પ્રવાહી ઔંસ', 'other' => '{0} પ્રવાહી ઔંસ'], 'perUnit' => ''], narrow: ['name' => 'પ્રવાહી ઔંસ', 'plurals' => ['one' => '{0} પ્ર. ઔંસ', 'other' => '{0} પ્ર. ઔંસ'], 'perUnit' => '']),
    'foot' => new U(name: 'length-foot', long: ['name' => 'ફૂટ', 'plurals' => ['one' => '{0} ફૂટ', 'other' => '{0} ફૂટ'], 'perUnit' => '{0} પ્રતિ ફૂટ'], short: ['name' => 'ફૂટ', 'plurals' => ['one' => '{0} ફૂટ', 'other' => '{0} ફૂટ'], 'perUnit' => '{0}/ફૂટ'], narrow: ['name' => 'ફૂટ', 'plurals' => ['one' => "{0} '", 'other' => "{0} '"], 'perUnit' => '{0}/ફૂટ']),
    'gallon' => new U(name: 'volume-gallon', long: ['name' => 'ગૅલન', 'plurals' => ['one' => '{0} ગૅલન', 'other' => '{0} ગૅલન'], 'perUnit' => '{0} પ્રતિ ગૅલન'], short: ['name' => 'ગૅલન', 'plurals' => ['one' => '{0} ગૅલન', 'other' => '{0} ગૅલન'], 'perUnit' => '{0}/ગૅલન'], narrow: ['name' => 'ગૅલન', 'plurals' => ['one' => '{0} ગૅલન', 'other' => '{0} ગૅલન'], 'perUnit' => '{0}/ગૅલન']),
    'gigabit' => new U(name: 'digital-gigabit', long: ['name' => 'ગીગાબિટ', 'plurals' => ['one' => '{0} ગીગાબિટ', 'other' => '{0} ગીગાબિટ'], 'perUnit' => ''], short: ['name' => 'ગીગાબિટ', 'plurals' => ['one' => '{0} Gb', 'other' => '{0} Gb'], 'perUnit' => ''], narrow: ['name' => 'Gb', 'plurals' => ['one' => '{0} Gb', 'other' => '{0} Gb'], 'perUnit' => '']),
    'gigabyte' => new U(name: 'digital-gigabyte', long: ['name' => 'ગીગાબાઇટ', 'plurals' => ['one' => '{0} ગીગાબાઇટ', 'other' => '{0} ગીગાબાઇટ'], 'perUnit' => ''], short: ['name' => 'GB', 'plurals' => ['one' => '{0} GB', 'other' => '{0} GB'], 'perUnit' => ''], narrow: ['name' => 'GB', 'plurals' => ['one' => '{0} GB', 'other' => '{0} GB'], 'perUnit' => '']),
    'gram' => new U(name: 'mass-gram', long: ['name' => 'ગ્રામ', 'plurals' => ['one' => '{0} ગ્રામ', 'other' => '{0} ગ્રામ'], 'perUnit' => '{0} પ્રતિ ગ્રામ'], short: ['name' => 'ગ્રામ', 'plurals' => ['one' => '{0} ગ્રા', 'other' => '{0} ગ્રા'], 'perUnit' => '{0}/ગ્રામ'], narrow: ['name' => 'ગ્રામ', 'plurals' => ['one' => '{0} ગ્રા', 'other' => '{0} ગ્રા'], 'perUnit' => '{0}/ગ્રામ']),
    'hectare' => new U(name: 'area-hectare', long: ['name' => 'હેક્ટર', 'plurals' => ['one' => '{0} હેક્ટર', 'other' => '{0} હેક્ટર'], 'perUnit' => ''], short: ['name' => 'હેક્ટર', 'plurals' => ['one' => '{0} હેક્ટર', 'other' => '{0} હેક્ટર'], 'perUnit' => ''], narrow: ['name' => 'હેક્ટર', 'plurals' => ['one' => '{0} હેક્ટર', 'other' => '{0} હેક્ટર'], 'perUnit' => '']),
    'hour' => new U(name: 'duration-hour', long: ['name' => 'કલાક', 'plurals' => ['one' => '{0} કલાક', 'other' => '{0} કલાક'], 'perUnit' => '{0} પ્રતિ કલાક'], short: ['name' => 'કલાક', 'plurals' => ['one' => '{0} કલાક', 'other' => '{0} કલાક'], 'perUnit' => '{0} પ્રતિ કલાક'], narrow: ['name' => 'કલાક', 'plurals' => ['one' => '{0} ક', 'other' => '{0} ક'], 'perUnit' => '{0}/ક']),
    'inch' => new U(name: 'length-inch', long: ['name' => 'ઇંચ', 'plurals' => ['one' => '{0} ઇંચ', 'other' => '{0} ઇંચ'], 'perUnit' => '{0} પ્રતિ ઈંચ'], short: ['name' => 'ઇંચ', 'plurals' => ['one' => '{0} ઇંચ', 'other' => '{0} ઇંચ'], 'perUnit' => '{0}/ઈંચ'], narrow: ['name' => 'ઇંચ', 'plurals' => ['one' => '{0} "', 'other' => '{0} "'], 'perUnit' => '{0}/ઈંચ']),
    'kilobit' => new U(name: 'digital-kilobit', long: ['name' => 'કિલોબિટ', 'plurals' => ['one' => '{0} કિલોબિટ', 'other' => '{0} કિલોબિટ'], 'perUnit' => ''], short: ['name' => 'kb', 'plurals' => ['one' => '{0} kb', 'other' => '{0} kb'], 'perUnit' => ''], narrow: ['name' => 'kb', 'plurals' => ['one' => '{0} kb', 'other' => '{0} kb'], 'perUnit' => '']),
    'kilobyte' => new U(name: 'digital-kilobyte', long: ['name' => 'કિલોબાઇટ', 'plurals' => ['one' => '{0} કિલોબાઇટ', 'other' => '{0} કિલોબાઇટ'], 'perUnit' => ''], short: ['name' => 'kB', 'plurals' => ['one' => '{0} kB', 'other' => '{0} kB'], 'perUnit' => ''], narrow: ['name' => 'kB', 'plurals' => ['one' => '{0} kB', 'other' => '{0} kB'], 'perUnit' => '']),
    'kilogram' => new U(name: 'mass-kilogram', long: ['name' => 'કિલોગ્રામ', 'plurals' => ['one' => '{0} કિલોગ્રામ', 'other' => '{0} કિલોગ્રામ'], 'perUnit' => '{0} પ્રતિ કિલોગ્રામ'], short: ['name' => 'કિગ્રા', 'plurals' => ['one' => '{0} કિગ્રા', 'other' => '{0} કિગ્રા'], 'perUnit' => '{0}/કિગ્રા'], narrow: ['name' => 'કિગ્રા', 'plurals' => ['one' => '{0} કિગ્રા', 'other' => '{0} કિગ્રા'], 'perUnit' => '{0}/કિગ્રા']),
    'kilometer' => new U(name: 'length-kilometer', long: ['name' => 'કિલોમીટર', 'plurals' => ['one' => '{0} કિલોમીટર', 'other' => '{0} કિલોમીટર'], 'perUnit' => '{0} પ્રતિ કિલોમીટર'], short: ['name' => 'કિમી', 'plurals' => ['one' => '{0} કિમી', 'other' => '{0} કિમી'], 'perUnit' => '{0}/કિમી'], narrow: ['name' => 'કિમી', 'plurals' => ['one' => '{0} કિમી', 'other' => '{0} કિમી'], 'perUnit' => '{0}/કિમી']),
    'liter' => new U(name: 'volume-liter', long: ['name' => 'લિટર', 'plurals' => ['one' => '{0} લિટર', 'other' => '{0} લિટર'], 'perUnit' => '{0} પ્રતિ લિટર'], short: ['name' => 'લિટર', 'plurals' => ['one' => '{0} લિ', 'other' => '{0} લિ'], 'perUnit' => '{0}/લિ'], narrow: ['name' => 'લિટર', 'plurals' => ['one' => '{0} લિ', 'other' => '{0} લિ'], 'perUnit' => '{0}/લિ']),
    'megabit' => new U(name: 'digital-megabit', long: ['name' => 'મેગાબિટ', 'plurals' => ['one' => '{0} મેગાબિટ', 'other' => '{0} મેગાબિટ'], 'perUnit' => ''], short: ['name' => 'Mb', 'plurals' => ['one' => '{0} Mb', 'other' => '{0} Mb'], 'perUnit' => ''], narrow: ['name' => 'Mb', 'plurals' => ['one' => '{0} Mb', 'other' => '{0} Mb'], 'perUnit' => '']),
    'megabyte' => new U(name: 'digital-megabyte', long: ['name' => 'મેગાબાઇટ', 'plurals' => ['one' => '{0} મેગાબાઇટ', 'other' => '{0} મેગાબાઇટ'], 'perUnit' => ''], short: ['name' => 'MB', 'plurals' => ['one' => '{0} MB', 'other' => '{0} MB'], 'perUnit' => ''], narrow: ['name' => 'MB', 'plurals' => ['one' => '{0} MB', 'other' => '{0} MB'], 'perUnit' => '']),
    'meter' => new U(name: 'length-meter', long: ['name' => 'મીટર', 'plurals' => ['one' => '{0} મીટર', 'other' => '{0} મીટર'], 'perUnit' => '{0} પ્રતિ મીટર'], short: ['name' => 'મીટર', 'plurals' => ['one' => '{0} મી', 'other' => '{0} મી'], 'perUnit' => '{0}/મી'], narrow: ['name' => 'મી', 'plurals' => ['one' => '{0} મી', 'other' => '{0} મી'], 'perUnit' => '{0}/મી']),
    'mile' => new U(name: 'length-mile', long: ['name' => 'માઇલ', 'plurals' => ['one' => '{0} માઇલ', 'other' => '{0} માઇલ'], 'perUnit' => ''], short: ['name' => 'માઇલ', 'plurals' => ['one' => '{0} માઇલ', 'other' => '{0} માઇલ'], 'perUnit' => ''], narrow: ['name' => 'માઇલ', 'plurals' => ['one' => '{0} માઇલ', 'other' => '{0} માઇલ'], 'perUnit' => '']),
    'mile-scandinavian' => new U(name: 'length-mile-scandinavian', long: ['name' => 'માઈલ સ્કૅન્ડિનેવિઅન', 'plurals' => ['one' => '{0} માઈલ-સ્કૅન્ડિનેવિઅન', 'other' => '{0} માઈલ-સ્કૅન્ડિનેવિઅન'], 'perUnit' => ''], short: ['name' => 'smi', 'plurals' => ['one' => '{0} smi', 'other' => '{0} smi'], 'perUnit' => ''], narrow: ['name' => 'smi', 'plurals' => ['one' => '{0}smi', 'other' => '{0}smi'], 'perUnit' => '']),
    'milliliter' => new U(name: 'volume-milliliter', long: ['name' => 'મિલિલીટર', 'plurals' => ['one' => '{0} મિલિલીટર', 'other' => '{0} મિલિલીટર'], 'perUnit' => ''], short: ['name' => 'મિલિલીટર', 'plurals' => ['one' => '{0} મિલિલીટર', 'other' => '{0} મિલિલીટર'], 'perUnit' => ''], narrow: ['name' => 'મિલિલીટર', 'plurals' => ['one' => '{0} મિલિલીટર', 'other' => '{0} મિલિલીટર'], 'perUnit' => '']),
    'millimeter' => new U(name: 'length-millimeter', long: ['name' => 'મિલિમીટર', 'plurals' => ['one' => '{0} મિલિમીટર', 'other' => '{0} મિલિમીટર'], 'perUnit' => ''], short: ['name' => 'મિમી', 'plurals' => ['one' => '{0} મિમી', 'other' => '{0} મિમી'], 'perUnit' => ''], narrow: ['name' => 'મિમી', 'plurals' => ['one' => '{0} મિમી', 'other' => '{0} મિમી'], 'perUnit' => '']),
    'millisecond' => new U(name: 'duration-millisecond', long: ['name' => 'મિલિસેકન્ડ', 'plurals' => ['one' => '{0} મિલિસેકન્ડ', 'other' => '{0} મિલિસેકન્ડ'], 'perUnit' => ''], short: ['name' => 'મિલિસેકન્ડ', 'plurals' => ['one' => '{0} મિસે', 'other' => '{0} મિસે'], 'perUnit' => ''], narrow: ['name' => 'મિલિસેકન્ડ', 'plurals' => ['one' => '{0} મિસે', 'other' => '{0} મિસે'], 'perUnit' => '']),
    'minute' => new U(name: 'duration-minute', long: ['name' => 'મિનિટ', 'plurals' => ['one' => '{0} મિનિટ', 'other' => '{0} મિનિટ'], 'perUnit' => '{0} પ્રતિ મિનિટ'], short: ['name' => 'મિનિટ', 'plurals' => ['one' => '{0} મિનિટ', 'other' => '{0} મિનિટ'], 'perUnit' => '{0}/મિ.'], narrow: ['name' => 'મિનિટ', 'plurals' => ['one' => '{0} મિ', 'other' => '{0} મિ'], 'perUnit' => '{0}/મિ']),
    'month' => new U(name: 'duration-month', long: ['name' => 'મહિના', 'plurals' => ['one' => '{0} મહિનો', 'other' => '{0} મહિના'], 'perUnit' => '{0} પ્રતિ મહિનો'], short: ['name' => 'મહિના', 'plurals' => ['one' => '{0} મહિનો', 'other' => '{0} મહિના'], 'perUnit' => '{0}/માસ'], narrow: ['name' => 'મહિના', 'plurals' => ['one' => '{0} મ', 'other' => '{0} મ'], 'perUnit' => '{0}/માસ']),
    'ounce' => new U(name: 'mass-ounce', long: ['name' => 'ઔંસ', 'plurals' => ['one' => '{0} ઔંસ', 'other' => '{0} ઔંસ'], 'perUnit' => '{0} પ્રતિ ઔંસ'], short: ['name' => 'ઔંસ', 'plurals' => ['one' => '{0} ઔંસ', 'other' => '{0} ઔંસ'], 'perUnit' => '{0}/ઔંસ'], narrow: ['name' => 'ઔંસ', 'plurals' => ['one' => '{0} ઔંસ', 'other' => '{0} ઔંસ'], 'perUnit' => '{0}/ઔંસ']),
    'percent' => new U(name: 'concentr-percent', long: ['name' => 'ટકા', 'plurals' => ['one' => '{0} ટકા', 'other' => '{0} ટકા'], 'perUnit' => ''], short: ['name' => 'ટકા', 'plurals' => ['one' => '{0}%', 'other' => '{0}%'], 'perUnit' => ''], narrow: ['name' => '%', 'plurals' => ['one' => '{0}%', 'other' => '{0}%'], 'perUnit' => '']),
    'petabyte' => new U(name: 'digital-petabyte', long: ['name' => 'પેટાબાઈટ્સ', 'plurals' => ['one' => '{0} પેટાબાઈટ', 'other' => '{0} પેટાબાઈટ્સ'], 'perUnit' => ''], short: ['name' => 'PByte', 'plurals' => ['one' => '{0} PB', 'other' => '{0} PB'], 'perUnit' => ''], narrow: ['name' => 'PB', 'plurals' => ['one' => '{0} PB', 'other' => '{0} PB'], 'perUnit' => '']),
    'pound' => new U(name: 'mass-pound', long: ['name' => 'પાઉન્ડ', 'plurals' => ['one' => '{0} પાઉન્ડ', 'other' => '{0} પાઉન્ડ'], 'perUnit' => '{0} પ્રતિ પાઉન્ડ'], short: ['name' => 'પાઉન્ડ', 'plurals' => ['one' => '{0} પાઉન્ડ', 'other' => '{0} પાઉન્ડ'], 'perUnit' => '{0}/પાઉન્ડ'], narrow: ['name' => 'પાઉન્ડ', 'plurals' => ['one' => '{0} પાઉન્ડ', 'other' => '{0} પાઉન્ડ'], 'perUnit' => '{0}/પાઉન્ડ']),
    'second' => new U(name: 'duration-second', long: ['name' => 'સેકંડ', 'plurals' => ['one' => '{0} સેકંડ', 'other' => '{0} સેકંડ'], 'perUnit' => '{0} પ્રતિ સેકંડ'], short: ['name' => 'સેકંડ', 'plurals' => ['one' => '{0} સેકંડ', 'other' => '{0} સેકંડ'], 'perUnit' => '{0} પ્રતિ સેકંડ'], narrow: ['name' => 'સેકંડ', 'plurals' => ['one' => '{0} સે', 'other' => '{0} સે'], 'perUnit' => '{0}/સે']),
    'stone' => new U(name: 'mass-stone', long: ['name' => 'સ્ટોન્સ', 'plurals' => ['one' => '{0} સ્ટોન', 'other' => '{0} સ્ટોન'], 'perUnit' => ''], short: ['name' => 'સ્ટોન્સ', 'plurals' => ['one' => '{0} સ્ટોન', 'other' => '{0} સ્ટોન'], 'perUnit' => ''], narrow: ['name' => 'સ્ટોન', 'plurals' => ['one' => '{0}સ્ટોન', 'other' => '{0}સ્ટોન'], 'perUnit' => '']),
    'terabit' => new U(name: 'digital-terabit', long: ['name' => 'ટેરાબિટ', 'plurals' => ['one' => '{0} ટેરાબિટ', 'other' => '{0} ટેરાબિટ'], 'perUnit' => ''], short: ['name' => 'Tb', 'plurals' => ['one' => '{0} Tb', 'other' => '{0} Tb'], 'perUnit' => ''], narrow: ['name' => 'Tb', 'plurals' => ['one' => '{0} Tb', 'other' => '{0} Tb'], 'perUnit' => '']),
    'terabyte' => new U(name: 'digital-terabyte', long: ['name' => 'ટેરાબાઇટ', 'plurals' => ['one' => '{0} ટેરાબાઇટ', 'other' => '{0} ટેરાબાઇટ'], 'perUnit' => ''], short: ['name' => 'TB', 'plurals' => ['one' => '{0} TB', 'other' => '{0} TB'], 'perUnit' => ''], narrow: ['name' => 'TB', 'plurals' => ['one' => '{0} TB', 'other' => '{0} TB'], 'perUnit' => '']),
    'week' => new U(name: 'duration-week', long: ['name' => 'અઠવાડિયા', 'plurals' => ['one' => '{0} અઠવાડિયું', 'other' => '{0} અઠવાડિયા'], 'perUnit' => '{0} પ્રતિ અઠવાડિયું'], short: ['name' => 'અઠવાડિયા', 'plurals' => ['one' => '{0} અઠ.', 'other' => '{0} અઠ.'], 'perUnit' => '{0} / અઠ.'], narrow: ['name' => 'અઠવાડિયા', 'plurals' => ['one' => '{0} અઠ.', 'other' => '{0} અઠ.'], 'perUnit' => '{0} / અઠ.']),
    'yard' => new U(name: 'length-yard', long: ['name' => 'વાર', 'plurals' => ['one' => '{0} વાર', 'other' => '{0} વાર'], 'perUnit' => ''], short: ['name' => 'વાર', 'plurals' => ['one' => '{0} વાર', 'other' => '{0} વાર'], 'perUnit' => ''], narrow: ['name' => 'વાર', 'plurals' => ['one' => '{0} વાર', 'other' => '{0} વાર'], 'perUnit' => '']),
    'year' => new U(name: 'duration-year', long: ['name' => 'વર્ષ', 'plurals' => ['one' => '{0} વર્ષ', 'other' => '{0} વર્ષ'], 'perUnit' => '{0} પ્રતિ વર્ષ'], short: ['name' => 'વર્ષ', 'plurals' => ['one' => '{0} વર્ષ', 'other' => '{0} વર્ષ'], 'perUnit' => '{0}/વર્ષ'], narrow: ['name' => 'વર્ષ', 'plurals' => ['one' => '{0} વ', 'other' => '{0} વ'], 'perUnit' => '{0}/વર્ષ']),
];
