<?php

use Major\Fluent\Formatters\Number\Locale\Unit as U;

return [
    'celsius' => new U(name: 'temperature-celsius', long: ['name' => 'درجے سيلسيس', 'plurals' => ['one' => '{0} درجے سيلسيس', 'other' => '{0} درجے سيلسيس'], 'perUnit' => ''], short: ['name' => 'deg. C', 'plurals' => ['one' => '{0}°C', 'other' => '{0}°C'], 'perUnit' => ''], narrow: ['name' => '°C', 'plurals' => ['one' => '{0}°C', 'other' => '{0}°C'], 'perUnit' => '']),
    'day' => new U(name: 'duration-day', long: ['name' => 'ورځے', 'plurals' => ['one' => '{0} ورځ', 'other' => '{0} ورځے'], 'perUnit' => '{0} په هره ورځ کے'], short: ['name' => 'ورځے', 'plurals' => ['one' => '{0} ورځ', 'other' => '{0} ورځے'], 'perUnit' => '{0}/d'], narrow: ['name' => 'ورځ', 'plurals' => ['one' => '{0} ورځ', 'other' => '{0}d'], 'perUnit' => '{0}/d']),
    'degree' => new U(name: 'angle-degree', long: ['name' => 'درجے', 'plurals' => ['one' => '{0} درجے', 'other' => '{0} درجے'], 'perUnit' => ''], short: ['name' => 'درجے', 'plurals' => ['one' => '{0}°', 'other' => '{0}°'], 'perUnit' => ''], narrow: ['name' => 'درجے', 'plurals' => ['one' => '{0}°', 'other' => '{0}°'], 'perUnit' => '']),
    'fahrenheit' => new U(name: 'temperature-fahrenheit', long: ['name' => 'درجے فارنهايټ', 'plurals' => ['one' => '{0} درجے فارنهايټ', 'other' => '{0} درجے فارنهايټ'], 'perUnit' => ''], short: ['name' => 'deg. F', 'plurals' => ['one' => '{0}°F', 'other' => '{0}°F'], 'perUnit' => ''], narrow: ['name' => 'deg. F', 'plurals' => ['one' => '{0}°F', 'other' => '{0}°F'], 'perUnit' => '']),
    'hectare' => new U(name: 'area-hectare', long: ['name' => 'هيکترے', 'plurals' => ['one' => '{0} هيکتر', 'other' => '{0} هيکترے'], 'perUnit' => ''], short: ['name' => 'هيکترے', 'plurals' => ['one' => '{0} ha', 'other' => '{0} ha'], 'perUnit' => ''], narrow: ['name' => 'هيکترے', 'plurals' => ['one' => '{0} ha', 'other' => '{0} ha'], 'perUnit' => '']),
    'inch' => new U(name: 'length-inch', long: ['name' => 'انچے', 'plurals' => ['one' => '{0} انچ', 'other' => '{0} انچے'], 'perUnit' => '{0} هر انچ'], short: ['name' => 'انچے', 'plurals' => ['one' => '{0} in', 'other' => '{0} in'], 'perUnit' => '{0}/in'], narrow: ['name' => 'انچے', 'plurals' => ['one' => '{0} in', 'other' => '{0} in'], 'perUnit' => '{0}/in']),
    'month' => new U(name: 'duration-month', long: ['name' => 'مياشتے', 'plurals' => ['one' => '{0} مياشت', 'other' => '{0} مياشتے'], 'perUnit' => '{0}/m'], short: ['name' => 'مياشتے', 'plurals' => ['one' => '{0} m', 'other' => '{0} mths'], 'perUnit' => '{0}/m'], narrow: ['name' => 'مياشت', 'plurals' => ['one' => '{0} m', 'other' => '{0} m'], 'perUnit' => '{0}/m']),
    'week' => new U(name: 'duration-week', long: ['name' => 'اونۍ', 'plurals' => ['one' => 'اونۍ', 'other' => '{0} اونۍ'], 'perUnit' => '{0} په هره اونۍ کے'], short: ['name' => 'اونۍ', 'plurals' => ['one' => '{0} w', 'other' => '{0} wks'], 'perUnit' => '{0}/w'], narrow: ['name' => 'اونۍ', 'plurals' => ['one' => '{0} w', 'other' => '{0} w'], 'perUnit' => '{0}/w']),
];
