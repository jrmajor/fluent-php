<?php

use Major\Fluent\Formatters\Number\Locale\Unit as U;

return [
    'byte' => new U(['one' => '{0} byte', 'other' => '{0} bytes'], '{0} byte', '{0}B'),
    'day' => new U(['one' => '{0} día', 'other' => '{0} días'], ['one' => '{0} d.', 'other' => '{0} dd.'], '{0}d.'),
    'fluid-ounce' => new U(['one' => '{0} onza fluida', 'other' => '{0} onzas fluidas'], '{0} fl oz', '{0}fl oz'),
    'mile-scandinavian' => new U(['one' => '{0} milla escandinava', 'other' => '{0} millas escandinavas'], '{0} mi esc.', '{0}mi esc.'),
    'milliliter' => new U(['one' => '{0} mililitro', 'other' => '{0} mililitros'], '{0} ml', '{0}ml'),
    'month' => new U(['one' => '{0} mes', 'other' => '{0} meses'], ['one' => '{0} m.', 'other' => '{0} mm.'], '{0}m.'),
    'ounce' => new U(['one' => '{0} onza', 'other' => '{0} onzas'], '{0} oz', ['one' => '{0} oz', 'other' => '{0}oz']),
    'pound' => new U(['one' => '{0} libra', 'other' => '{0} libras'], '{0} lb', ['one' => '{0} lb', 'other' => '{0}lb']),
    'second' => new U(['one' => '{0} segundo', 'other' => '{0} segundos'], '{0} seg.', '{0}s'),
    'week' => new U(['one' => '{0} semana', 'other' => '{0} semanas'], ['one' => '{0} sem.', 'other' => '{0} sems.'], ['one' => '{0}sem.', 'other' => '{0}sems.']),
    'year' => new U(['one' => '{0} año', 'other' => '{0} años'], ['one' => '{0} a.', 'other' => '{0} aa.'], ['one' => '{0}a.', 'other' => '{0}aa.']),
];
