<?php

use Major\Fluent\Formatters\Number\Locale\Unit as U;

return [
    'degree' => new U(name: 'angle-degree', long: ['name' => 'grados', 'plurals' => ['one' => '{0} grado', 'other' => '{0} grados'], 'perUnit' => ''], short: ['name' => 'grados', 'plurals' => ['one' => '{0}°', 'other' => '{0}°'], 'perUnit' => ''], narrow: ['name' => 'grad', 'plurals' => ['one' => '{0}°', 'other' => '{0}°'], 'perUnit' => '']),
    'day' => new U(name: 'duration-day', long: ['name' => 'días', 'plurals' => ['one' => '{0} día', 'other' => '{0} días'], 'perUnit' => '{0} por día'], short: ['name' => 'días', 'plurals' => ['one' => '{0} día', 'other' => '{0} días'], 'perUnit' => '{0}/día'], narrow: ['name' => 'día', 'plurals' => ['one' => '{0} día', 'other' => '{0} días'], 'perUnit' => '{0}/d.']),
    'hour' => new U(name: 'duration-hour', long: ['name' => 'horas', 'plurals' => ['one' => '{0} hora', 'other' => '{0} horas'], 'perUnit' => '{0} por hora'], short: ['name' => 'horas', 'plurals' => ['one' => '{0} h', 'other' => '{0} h'], 'perUnit' => '{0}/h'], narrow: ['name' => 'h', 'plurals' => ['one' => '{0} h', 'other' => '{0} h'], 'perUnit' => '{0}/h']),
    'millisecond' => new U(name: 'duration-millisecond', long: ['name' => 'milisegundos', 'plurals' => ['one' => '{0} milisegundo', 'other' => '{0} milisegundos'], 'perUnit' => ''], short: ['name' => 'ms', 'plurals' => ['one' => '{0} ms', 'other' => '{0} ms'], 'perUnit' => ''], narrow: ['name' => 'ms', 'plurals' => ['one' => '{0} ms', 'other' => '{0} ms'], 'perUnit' => '']),
    'minute' => new U(name: 'duration-minute', long: ['name' => 'minutos', 'plurals' => ['one' => '{0} minuto', 'other' => '{0} minutos'], 'perUnit' => '{0} por minuto'], short: ['name' => 'min', 'plurals' => ['one' => '{0} min', 'other' => '{0} min'], 'perUnit' => '{0}/min'], narrow: ['name' => 'min', 'plurals' => ['one' => '{0} min', 'other' => '{0} min'], 'perUnit' => '{0}/min']),
    'month' => new U(name: 'duration-month', long: ['name' => 'meses', 'plurals' => ['one' => '{0} mes', 'other' => '{0} meses'], 'perUnit' => '{0}/mes'], short: ['name' => 'mes', 'plurals' => ['one' => '{0} mes', 'other' => '{0} meses'], 'perUnit' => '{0}/mes'], narrow: ['name' => 'mes', 'plurals' => ['one' => '{0} mes', 'other' => '{0} meses'], 'perUnit' => '{0}/m.']),
    'second' => new U(name: 'duration-second', long: ['name' => 'segundos', 'plurals' => ['one' => '{0} segundo', 'other' => '{0} segundos'], 'perUnit' => '{0} por segundo'], short: ['name' => 's', 'plurals' => ['one' => '{0} s', 'other' => '{0} s'], 'perUnit' => '{0}/s'], narrow: ['name' => 's', 'plurals' => ['one' => '{0} s', 'other' => '{0} s'], 'perUnit' => '{0}/s']),
    'week' => new U(name: 'duration-week', long: ['name' => 'semanas', 'plurals' => ['one' => '{0} semana', 'other' => '{0} semanas'], 'perUnit' => '{0}/sem.'], short: ['name' => 'sems.', 'plurals' => ['one' => '{0} sem.', 'other' => '{0} sems.'], 'perUnit' => '{0}/sem.'], narrow: ['name' => 'sem.', 'plurals' => ['one' => '{0} sem.', 'other' => '{0} sems.'], 'perUnit' => '{0}/sem.']),
    'year' => new U(name: 'duration-year', long: ['name' => 'años', 'plurals' => ['one' => '{0} año', 'other' => '{0} años'], 'perUnit' => '{0} por año'], short: ['name' => 'a.', 'plurals' => ['one' => '{0} a.', 'other' => '{0} a.'], 'perUnit' => '{0}/año'], narrow: ['name' => 'a.', 'plurals' => ['one' => '{0} a.', 'other' => '{0} a.'], 'perUnit' => '{0}/a']),
    'mile-scandinavian' => new U(name: 'length-mile-scandinavian', long: ['name' => 'milla escandinava', 'plurals' => ['one' => '{0} milla escandinava', 'other' => '{0} millas escandinavas'], 'perUnit' => ''], short: ['name' => 'mi esc.', 'plurals' => ['one' => '{0} mi esc.', 'other' => '{0} mi esc.'], 'perUnit' => ''], narrow: ['name' => 'mi esc', 'plurals' => ['one' => '{0}mi esc.', 'other' => '{0}mi esc.'], 'perUnit' => '']),
    'yard' => new U(name: 'length-yard', long: ['name' => 'yardas', 'plurals' => ['one' => '{0} yarda', 'other' => '{0} yardas'], 'perUnit' => ''], short: ['name' => 'yardas', 'plurals' => ['one' => '{0} yd', 'other' => '{0} yd'], 'perUnit' => ''], narrow: ['name' => 'yd', 'plurals' => ['one' => '{0}yd', 'other' => '{0}yd'], 'perUnit' => '']),
    'stone' => new U(name: 'mass-stone', long: ['name' => 'stones', 'plurals' => ['one' => '{0} stone', 'other' => '{0} stones'], 'perUnit' => ''], short: ['name' => 'stones', 'plurals' => ['one' => '{0} st', 'other' => '{0} st'], 'perUnit' => ''], narrow: ['name' => 'st', 'plurals' => ['one' => '{0}st', 'other' => '{0}st'], 'perUnit' => '']),
    'fluid-ounce' => new U(name: 'volume-fluid-ounce', long: ['name' => 'onzas fluidas', 'plurals' => ['one' => '{0} onza fluida', 'other' => '{0} onzas fluidas'], 'perUnit' => ''], short: ['name' => 'fl oz', 'plurals' => ['one' => '{0} fl oz', 'other' => '{0} fl oz'], 'perUnit' => ''], narrow: ['name' => 'fl oz', 'plurals' => ['one' => '{0}fl oz', 'other' => '{0}fl oz'], 'perUnit' => '']),
    'milliliter' => new U(name: 'volume-milliliter', long: ['name' => 'mililitros', 'plurals' => ['one' => '{0} mililitro', 'other' => '{0} mililitros'], 'perUnit' => ''], short: ['name' => 'ml', 'plurals' => ['one' => '{0} ml', 'other' => '{0} ml'], 'perUnit' => ''], narrow: ['name' => 'ml', 'plurals' => ['one' => '{0}ml', 'other' => '{0}ml'], 'perUnit' => '']),
];
