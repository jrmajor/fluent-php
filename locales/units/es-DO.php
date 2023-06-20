<?php

use Major\Fluent\Formatters\Number\Locale\Unit as U;

return [
    'day' => new U(name: 'duration-day', long: ['name' => 'días', 'plurals' => ['one' => '{0} día', 'other' => '{0} días'], 'perUnit' => '{0} por día'], short: ['name' => 'd.', 'plurals' => ['one' => '{0} d.', 'other' => '{0} dd.'], 'perUnit' => '{0}/d.'], narrow: ['name' => 'd.', 'plurals' => ['one' => '{0}d.', 'other' => '{0}d.'], 'perUnit' => '{0}/d.']),
    'degree' => new U(name: 'angle-degree', long: ['name' => 'grados', 'plurals' => ['one' => '{0} grado', 'other' => '{0} grados'], 'perUnit' => ''], short: ['name' => 'grados', 'plurals' => ['one' => '{0}°', 'other' => '{0}°'], 'perUnit' => ''], narrow: ['name' => 'grad', 'plurals' => ['one' => '{0}°', 'other' => '{0}°'], 'perUnit' => '']),
    'fluid-ounce' => new U(name: 'volume-fluid-ounce', long: ['name' => 'onzas fluidas', 'plurals' => ['one' => '{0} onza fluida', 'other' => '{0} onzas fluidas'], 'perUnit' => ''], short: ['name' => 'fl oz', 'plurals' => ['one' => '{0} fl oz', 'other' => '{0} fl oz'], 'perUnit' => ''], narrow: ['name' => 'fl oz', 'plurals' => ['one' => '{0}fl oz', 'other' => '{0}fl oz'], 'perUnit' => '']),
    'mile-scandinavian' => new U(name: 'length-mile-scandinavian', long: ['name' => 'milla escandinava', 'plurals' => ['one' => '{0} milla escandinava', 'other' => '{0} millas escandinavas'], 'perUnit' => ''], short: ['name' => 'mi esc.', 'plurals' => ['one' => '{0} mi esc.', 'other' => '{0} mi esc.'], 'perUnit' => ''], narrow: ['name' => 'mi esc', 'plurals' => ['one' => '{0}mi esc.', 'other' => '{0}mi esc.'], 'perUnit' => '']),
    'milliliter' => new U(name: 'volume-milliliter', long: ['name' => 'mililitros', 'plurals' => ['one' => '{0} mililitro', 'other' => '{0} mililitros'], 'perUnit' => ''], short: ['name' => 'ml', 'plurals' => ['one' => '{0} ml', 'other' => '{0} ml'], 'perUnit' => ''], narrow: ['name' => 'ml', 'plurals' => ['one' => '{0}ml', 'other' => '{0}ml'], 'perUnit' => '']),
    'minute' => new U(name: 'duration-minute', long: ['name' => 'minutos', 'plurals' => ['one' => '{0} minuto', 'other' => '{0} minutos'], 'perUnit' => '{0} por minuto'], short: ['name' => 'min', 'plurals' => ['one' => '{0} min', 'other' => '{0} min'], 'perUnit' => '{0}/min'], narrow: ['name' => 'min', 'plurals' => ['one' => '{0}m', 'other' => '{0}m'], 'perUnit' => '{0}/min']),
    'month' => new U(name: 'duration-month', long: ['name' => 'meses', 'plurals' => ['one' => '{0} mes', 'other' => '{0} meses'], 'perUnit' => '{0} por mes'], short: ['name' => 'mm.', 'plurals' => ['one' => '{0} m.', 'other' => '{0} mm.'], 'perUnit' => '{0}/m.'], narrow: ['name' => 'm.', 'plurals' => ['one' => '{0}m.', 'other' => '{0}m.'], 'perUnit' => '{0}/m.']),
    'second' => new U(name: 'duration-second', long: ['name' => 'segundos', 'plurals' => ['one' => '{0} segundo', 'other' => '{0} segundos'], 'perUnit' => '{0} por segundo'], short: ['name' => 'seg.', 'plurals' => ['one' => '{0} seg.', 'other' => '{0} seg.'], 'perUnit' => '{0}/s'], narrow: ['name' => 's', 'plurals' => ['one' => '{0}s', 'other' => '{0}s'], 'perUnit' => '{0}/s']),
    'stone' => new U(name: 'mass-stone', long: ['name' => 'stones', 'plurals' => ['one' => '{0} stone', 'other' => '{0} stones'], 'perUnit' => ''], short: ['name' => 'stones', 'plurals' => ['one' => '{0} st', 'other' => '{0} st'], 'perUnit' => ''], narrow: ['name' => 'st', 'plurals' => ['one' => '{0}st', 'other' => '{0}st'], 'perUnit' => '']),
    'week' => new U(name: 'duration-week', long: ['name' => 'semanas', 'plurals' => ['one' => '{0} semana', 'other' => '{0} semanas'], 'perUnit' => '{0} por semana'], short: ['name' => 'sems.', 'plurals' => ['one' => '{0} sem.', 'other' => '{0} sems.'], 'perUnit' => '{0}/sem.'], narrow: ['name' => 'sem.', 'plurals' => ['one' => '{0}sem.', 'other' => '{0}sems.'], 'perUnit' => '{0}/sem.']),
    'yard' => new U(name: 'length-yard', long: ['name' => 'yardas', 'plurals' => ['one' => '{0} yarda', 'other' => '{0} yardas'], 'perUnit' => ''], short: ['name' => 'yardas', 'plurals' => ['one' => '{0} yd', 'other' => '{0} yd'], 'perUnit' => ''], narrow: ['name' => 'yd', 'plurals' => ['one' => '{0}yd', 'other' => '{0}yd'], 'perUnit' => '']),
    'year' => new U(name: 'duration-year', long: ['name' => 'años', 'plurals' => ['one' => '{0} año', 'other' => '{0} años'], 'perUnit' => '{0} por año'], short: ['name' => 'aa.', 'plurals' => ['one' => '{0} a.', 'other' => '{0} aa.'], 'perUnit' => '{0}/a.'], narrow: ['name' => 'a.', 'plurals' => ['one' => '{0}a.', 'other' => '{0}aa.'], 'perUnit' => '{0}/a']),
];
