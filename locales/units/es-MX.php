<?php

use Major\Fluent\Formatters\Number\Locale\Unit as U;

return [
    'degree' => new U(name: 'angle-degree', long: ['name' => 'grados', 'plurals' => ['one' => '{0} grado', 'other' => '{0} grados'], 'perUnit' => ''], short: ['name' => 'º', 'plurals' => ['one' => '{0}°', 'other' => '{0} grados'], 'perUnit' => ''], narrow: ['name' => 'grad', 'plurals' => ['one' => '{0}°', 'other' => '{0}°'], 'perUnit' => '']),
    'percent' => new U(name: 'concentr-percent', long: ['name' => 'por ciento', 'plurals' => ['one' => '{0} por ciento', 'other' => '{0} por ciento'], 'perUnit' => ''], short: ['name' => '%', 'plurals' => ['one' => "{0}\u{A0}%", 'other' => "{0}\u{A0}%"], 'perUnit' => ''], narrow: ['name' => '%', 'plurals' => ['one' => '{0}%', 'other' => '{0}%'], 'perUnit' => '']),
    'day' => new U(name: 'duration-day', long: ['name' => 'días', 'plurals' => ['one' => '{0} día', 'other' => '{0} días'], 'perUnit' => '{0} por día'], short: ['name' => 'días', 'plurals' => ['one' => '{0} día', 'other' => '{0} días'], 'perUnit' => '{0}/d'], narrow: ['name' => 'días', 'plurals' => ['one' => '{0}d', 'other' => '{0}d'], 'perUnit' => '{0}/d.']),
    'minute' => new U(name: 'duration-minute', long: ['name' => 'minutos', 'plurals' => ['one' => '{0} minuto', 'other' => '{0} minutos'], 'perUnit' => '{0} por minuto'], short: ['name' => 'min', 'plurals' => ['one' => '{0} min', 'other' => '{0} min'], 'perUnit' => '{0}/min'], narrow: ['name' => 'min', 'plurals' => ['one' => '{0}m', 'other' => '{0}m'], 'perUnit' => '{0}/min']),
    'month' => new U(name: 'duration-month', long: ['name' => 'meses', 'plurals' => ['one' => '{0} mes', 'other' => '{0} meses'], 'perUnit' => '{0} por mes'], short: ['name' => 'meses', 'plurals' => ['one' => '{0} m', 'other' => '{0} m'], 'perUnit' => '{0}/m.'], narrow: ['name' => 'm', 'plurals' => ['one' => '{0}m', 'other' => '{0}m'], 'perUnit' => '{0}/m.']),
    'week' => new U(name: 'duration-week', long: ['name' => 'semanas', 'plurals' => ['one' => '{0} semana', 'other' => '{0} semanas'], 'perUnit' => '{0} por semana'], short: ['name' => 'sem', 'plurals' => ['one' => '{0} sem', 'other' => '{0} sem'], 'perUnit' => '{0}/sem.'], narrow: ['name' => 'sem', 'plurals' => ['one' => '{0}sem', 'other' => '{0}sem'], 'perUnit' => '{0}/sem.']),
    'mile-scandinavian' => new U(name: 'length-mile-scandinavian', long: ['name' => 'millas escandinavas', 'plurals' => ['one' => '{0} milla escandinava', 'other' => '{0} millas escandinavas'], 'perUnit' => ''], short: ['name' => 'mi esc.', 'plurals' => ['one' => '{0} mi esc.', 'other' => '{0} mi esc.'], 'perUnit' => ''], narrow: ['name' => 'mi esc', 'plurals' => ['one' => '{0}mi esc.', 'other' => '{0}mi esc.'], 'perUnit' => '']),
    'mile' => new U(name: 'length-mile', long: ['name' => 'millas', 'plurals' => ['one' => '{0} milla', 'other' => '{0} millas'], 'perUnit' => ''], short: ['name' => 'millas', 'plurals' => ['one' => '{0} mi', 'other' => '{0} mi'], 'perUnit' => ''], narrow: ['name' => 'mi', 'plurals' => ['one' => '{0}mi', 'other' => '{0}mi'], 'perUnit' => '']),
    'stone' => new U(name: 'mass-stone', long: ['name' => 'stones', 'plurals' => ['one' => '{0} stone', 'other' => '{0} stones'], 'perUnit' => ''], short: ['name' => 'stones', 'plurals' => ['one' => '{0} st', 'other' => '{0} st'], 'perUnit' => ''], narrow: ['name' => 'st', 'plurals' => ['one' => '{0}st', 'other' => '{0}st'], 'perUnit' => '']),
    'milliliter' => new U(name: 'volume-milliliter', long: ['name' => 'mililitros', 'plurals' => ['one' => '{0} mililitro', 'other' => '{0} mililitros'], 'perUnit' => ''], short: ['name' => 'ml', 'plurals' => ['one' => '{0} ml', 'other' => '{0} ml'], 'perUnit' => ''], narrow: ['name' => 'ml', 'plurals' => ['one' => '{0}ml', 'other' => '{0}ml'], 'perUnit' => '']),
];
