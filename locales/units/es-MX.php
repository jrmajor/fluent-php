<?php

use Major\Fluent\Formatters\Number\Locale\Unit as U;

return [
    'byte' => new U(['one' => '{0} byte', 'other' => '{0} bytes'], ['one' => '{0} B', 'other' => '{0} byte'], '{0}B'),
    'centimeter' => new U(['one' => '{0} centímetro', 'other' => '{0} centímetros'], '{0} cm', ['one' => '{0} cm', 'other' => '{0}cm']),
    'day' => new U(['one' => '{0} día', 'other' => '{0} días'], ['one' => '{0} día', 'other' => '{0} días'], '{0}d'),
    'degree' => new U(['one' => '{0} grado', 'other' => '{0} grados'], '{0} grados', '{0} grados'),
    'gigabyte' => new U(['one' => '{0} gigabyte', 'other' => '{0} gigabytes'], '{0} GB', ['one' => '{0} GB', 'other' => '{0}GB']),
    'kilobit' => new U(['one' => '{0} kilobit', 'other' => '{0} kilobits'], '{0} kb', ['one' => '{0} kb', 'other' => '{0}kb']),
    'kilogram' => new U(['one' => '{0} kilogramo', 'other' => '{0} kilogramos'], '{0} kg', ['one' => '{0} kg', 'other' => '{0}kg']),
    'kilometer' => new U(['one' => '{0} kilómetro', 'other' => '{0} kilómetros'], '{0} km', ['one' => '{0} km', 'other' => '{0}km']),
    'mile-scandinavian' => new U(['one' => '{0} milla escandinava', 'other' => '{0} millas escandinavas'], '{0} mi esc.', '{0}mi esc.'),
    'milliliter' => new U(['one' => '{0} mililitro', 'other' => '{0} mililitros'], '{0} ml', '{0}ml'),
    'millimeter' => new U(['one' => '{0} milímetro', 'other' => '{0} milímetros'], '{0} mm', ['one' => '{0} mm', 'other' => '{0}mm']),
    'month' => new U(['one' => '{0} mes', 'other' => '{0} meses'], ['one' => '{0} m.', 'other' => '{0} m'], '{0}m'),
    'ounce' => new U(['one' => '{0} onza', 'other' => '{0} onzas'], '{0} oz', ['one' => '{0} oz', 'other' => '{0}oz']),
    'pound' => new U(['one' => '{0} libra', 'other' => '{0} libras'], '{0} lb', ['one' => '{0} lb', 'other' => '{0}lb']),
    'terabit' => new U(['one' => '{0} terabit', 'other' => '{0} terabits'], '{0} Tb', ['one' => '{0} Tb', 'other' => '{0}Tb']),
    'terabyte' => new U(['one' => '{0} terabyte', 'other' => '{0} terabytes'], '{0} TB', ['one' => '{0} TB', 'other' => '{0}TB']),
    'week' => new U(['one' => '{0} semana', 'other' => '{0} semanas'], ['one' => '{0} sem.', 'other' => '{0} sem'], '{0}sem'),
];
