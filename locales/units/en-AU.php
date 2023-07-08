<?php

use Major\Fluent\Formatters\Number\Locale\Unit as U;

return [
    'centimeter' => new U(['one' => '{0} centimetre', 'other' => '{0} centimetres'], '{0} cm', '{0}cm'),
    'fahrenheit' => new U(['one' => '{0} degree Fahrenheit', 'other' => '{0} degrees Fahrenheit'], '{0}°F', '{0}°F'),
    'gallon' => new U(['one' => '{0} US gallon', 'other' => '{0} US gallons'], '{0} gal US', '{0} gal US'),
    'hour' => new U(['one' => '{0} hour', 'other' => '{0} hours'], ['one' => '{0} hr', 'other' => '{0} hrs'], '{0}h'),
    'kilometer' => new U(['one' => '{0} kilometre', 'other' => '{0} kilometres'], '{0} km', '{0}km'),
    'liter' => new U(['one' => '{0} litre', 'other' => '{0} litres'], '{0} L', '{0}L'),
    'meter' => new U(['one' => '{0} metre', 'other' => '{0} metres'], '{0} m', '{0}m'),
    'mile-scandinavian' => new U(['one' => '{0} Scandinavian mile', 'other' => '{0} Scandinavian miles'], '{0} smi', '{0}smi'),
    'milliliter' => new U(['one' => '{0} millilitre', 'other' => '{0} millilitres'], '{0} mL', '{0}mL'),
    'millimeter' => new U(['one' => '{0} millimetre', 'other' => '{0} millimetres'], '{0} mm', '{0}mm'),
    'minute' => new U(['one' => '{0} minute', 'other' => '{0} minutes'], ['one' => '{0} min.', 'other' => '{0} mins'], '{0}min.'),
    'percent' => new U('{0} per cent', '{0}%', '{0}%'),
    'pound' => new U(['one' => '{0} pound', 'other' => '{0} pounds'], '{0} lb', '{0}lb'),
    'second' => new U(['one' => '{0} second', 'other' => '{0} seconds'], ['one' => '{0} sec.', 'other' => '{0} secs'], '{0}s.'),
    'stone' => new U('{0} stone', '{0} st', '{0}st'),
];
