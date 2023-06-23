<?php

use Major\Fluent\Formatters\Number\Locale\Unit as U;

return [
    'day' => new U(['one' => '{0} día', 'other' => '{0} días'], ['one' => '{0} día', 'other' => '{0} días'], ['one' => '{0} día', 'other' => '{0} días']),
    'fluid-ounce' => new U(['one' => '{0} onza fluida', 'other' => '{0} onzas fluidas'], '{0} fl oz', '{0}fl oz'),
    'hour' => new U(['one' => '{0} hora', 'other' => '{0} horas'], '{0} h', '{0} h'),
    'mile-scandinavian' => new U(['one' => '{0} milla escandinava', 'other' => '{0} millas escandinavas'], '{0} mi esc.', '{0}mi esc.'),
    'milliliter' => new U(['one' => '{0} mililitro', 'other' => '{0} mililitros'], '{0} ml', '{0}ml'),
    'millisecond' => new U(['one' => '{0} milisegundo', 'other' => '{0} milisegundos'], '{0} ms', '{0} ms'),
    'minute' => new U(['one' => '{0} minuto', 'other' => '{0} minutos'], '{0} min', '{0} min'),
    'month' => new U(['one' => '{0} mes', 'other' => '{0} meses'], ['one' => '{0} mes', 'other' => '{0} meses'], ['one' => '{0} mes', 'other' => '{0} meses']),
    'second' => new U(['one' => '{0} segundo', 'other' => '{0} segundos'], '{0} s', '{0} s'),
    'week' => new U(['one' => '{0} semana', 'other' => '{0} semanas'], ['one' => '{0} sem.', 'other' => '{0} sems.'], ['one' => '{0} sem.', 'other' => '{0} sems.']),
    'year' => new U(['one' => '{0} año', 'other' => '{0} años'], '{0} a.', '{0} a.'),
];
