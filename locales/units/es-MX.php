<?php

use Major\Fluent\Formatters\Number\Locale\Unit as U;

return [
    'day' => new U(['one' => '{0} día', 'other' => '{0} días'], ['one' => '{0} día', 'other' => '{0} días'], '{0}d'),
    'degree' => new U(['one' => '{0} grado', 'other' => '{0} grados'], ['one' => '{0}°', 'other' => '{0} grados'], '{0}°'),
    'mile-scandinavian' => new U(['one' => '{0} milla escandinava', 'other' => '{0} millas escandinavas'], '{0} mi esc.', '{0}mi esc.'),
    'milliliter' => new U(['one' => '{0} mililitro', 'other' => '{0} mililitros'], '{0} ml', '{0}ml'),
    'minute' => new U(['one' => '{0} minuto', 'other' => '{0} minutos'], '{0} min', '{0}m'),
    'month' => new U(['one' => '{0} mes', 'other' => '{0} meses'], '{0} m', '{0}m'),
    'week' => new U(['one' => '{0} semana', 'other' => '{0} semanas'], '{0} sem', '{0}sem'),
];
