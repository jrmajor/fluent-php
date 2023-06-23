<?php

use Major\Fluent\Formatters\Number\Locale\Unit as U;

return [
    'day' => new U(['one' => '{0} día', 'other' => '{0} días'], ['one' => '{0} día', 'other' => '{0} días'], ['other' => '{0}d']),
    'degree' => new U(['one' => '{0} grado', 'other' => '{0} grados'], ['one' => '{0}°', 'other' => '{0} grados'], ['other' => '{0}°']),
    'mile-scandinavian' => new U(['one' => '{0} milla escandinava', 'other' => '{0} millas escandinavas'], ['other' => '{0} mi esc.'], ['other' => '{0}mi esc.']),
    'milliliter' => new U(['one' => '{0} mililitro', 'other' => '{0} mililitros'], ['other' => '{0} ml'], ['other' => '{0}ml']),
    'minute' => new U(['one' => '{0} minuto', 'other' => '{0} minutos'], ['other' => '{0} min'], ['other' => '{0}m']),
    'month' => new U(['one' => '{0} mes', 'other' => '{0} meses'], ['other' => '{0} m'], ['other' => '{0}m']),
    'week' => new U(['one' => '{0} semana', 'other' => '{0} semanas'], ['other' => '{0} sem'], ['other' => '{0}sem']),
];
