<?php

use Major\Fluent\Formatters\Number\Locale\Unit as U;

return [
    'bit' => new U(['one' => '{0} bit', 'other' => '{0} bits'], ['one' => '{0} bit', 'other' => '{0} bits'], ['one' => '{0}bit', 'other' => '{0}bits']),
    'byte' => new U(['one' => '{0} byte', 'other' => '{0} bytes'], ['one' => '{0} byte', 'other' => '{0} bytes'], '{0}B'),
    'celsius' => new U(['one' => '{0} degree Celsius', 'other' => '{0} degrees Celsius'], '{0} °C', '{0}°'),
    'centimeter' => new U(['one' => '{0} centimetre', 'other' => '{0} centimetres'], '{0} cm', '{0}cm'),
    'fahrenheit' => new U(['one' => '{0} degree Fahrenheit', 'other' => '{0} degrees Fahrenheit'], '{0} °F', '{0}°F'),
    'fluid-ounce' => new U(['one' => '{0} US fluid ounce', 'other' => '{0} US fluid ounces'], '{0} US fl oz', '{0}US fl oz'),
    'gallon' => new U(['one' => '{0} US gallon', 'other' => '{0} US gallons'], '{0} US gal', '{0}USgal'),
    'hour' => new U(['one' => '{0} hour', 'other' => '{0} hours'], ['one' => '{0} hr', 'other' => '{0} hrs'], '{0}h'),
    'kilometer' => new U(['one' => '{0} kilometre', 'other' => '{0} kilometres'], '{0} km', '{0}km'),
    'liter' => new U(['one' => '{0} litre', 'other' => '{0} litres'], '{0} L', '{0}L'),
    'meter' => new U(['one' => '{0} metre', 'other' => '{0} metres'], '{0} m', '{0}m'),
    'microsecond' => new U(['one' => '{0} microsecond', 'other' => '{0} microseconds'], ['one' => '{0} μsec', 'other' => '{0} μsecs'], '{0}μs'),
    'mile-scandinavian' => new U(['one' => '{0} Scandinavian mile', 'other' => '{0} Scandinavian miles'], '{0} smi', '{0}smi'),
    'milliliter' => new U(['one' => '{0} millilitre', 'other' => '{0} millilitres'], '{0} mL', '{0}mL'),
    'millimeter' => new U(['one' => '{0} millimetre', 'other' => '{0} millimetres'], '{0} mm', '{0}mm'),
    'millisecond' => new U(['one' => '{0} millisecond', 'other' => '{0} milliseconds'], ['one' => '{0} millisec', 'other' => '{0} millisecs'], '{0}ms'),
    'minute' => new U(['one' => '{0} minute', 'other' => '{0} minutes'], ['one' => '{0} min', 'other' => '{0} mins'], '{0}min'),
    'month' => new U(['one' => '{0} month', 'other' => '{0} months'], ['one' => '{0} mo', 'other' => '{0} mos'], '{0}m'),
    'nanosecond' => new U(['one' => '{0} nanosecond', 'other' => '{0} nanoseconds'], ['one' => '{0} nanosec', 'other' => '{0} nanosecs'], '{0}ns'),
    'pound' => new U(['one' => '{0} pound', 'other' => '{0} pounds'], '{0} lb', '{0}lb'),
    'second' => new U(['one' => '{0} second', 'other' => '{0} seconds'], ['one' => '{0} sec', 'other' => '{0} secs'], '{0}s'),
    'stone' => new U('{0} stone', '{0} st', '{0}st'),
];
