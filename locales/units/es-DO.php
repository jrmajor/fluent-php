<?php

use Major\Fluent\Formatters\Number\Locale\Unit as U;

return [
    'day' => new U(['one' => '{0} día', 'other' => '{0} días'], ['one' => '{0} d.', 'other' => '{0} dd.'], ['other' => '{0}d.']),
    'fluid-ounce' => new U(['one' => '{0} onza fluida', 'other' => '{0} onzas fluidas'], ['other' => '{0} fl oz'], ['other' => '{0}fl oz']),
    'mile-scandinavian' => new U(['one' => '{0} milla escandinava', 'other' => '{0} millas escandinavas'], ['other' => '{0} mi esc.'], ['other' => '{0}mi esc.']),
    'milliliter' => new U(['one' => '{0} mililitro', 'other' => '{0} mililitros'], ['other' => '{0} ml'], ['other' => '{0}ml']),
    'minute' => new U(['one' => '{0} minuto', 'other' => '{0} minutos'], ['other' => '{0} min'], ['other' => '{0}m']),
    'month' => new U(['one' => '{0} mes', 'other' => '{0} meses'], ['one' => '{0} m.', 'other' => '{0} mm.'], ['other' => '{0}m.']),
    'second' => new U(['one' => '{0} segundo', 'other' => '{0} segundos'], ['other' => '{0} seg.'], ['other' => '{0}s']),
    'week' => new U(['one' => '{0} semana', 'other' => '{0} semanas'], ['one' => '{0} sem.', 'other' => '{0} sems.'], ['one' => '{0}sem.', 'other' => '{0}sems.']),
    'year' => new U(['one' => '{0} año', 'other' => '{0} años'], ['one' => '{0} a.', 'other' => '{0} aa.'], ['one' => '{0}a.', 'other' => '{0}aa.']),
];
