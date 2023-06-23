<?php

use Major\Fluent\Formatters\Number\Locale\Unit as U;

return [
    'bit' => new U(['one' => '{0} bit', 'other' => '{0} bits'], ['one' => '{0} bit', 'other' => '{0} bits'], ['one' => '{0}bit', 'other' => '{0}bits']),
    'byte' => new U(['one' => '{0} byte', 'other' => '{0} bytes'], ['one' => '{0} byte', 'other' => '{0} bytes'], ['other' => '{0}B']),
    'celsius' => new U(['one' => '{0} degree Celsius', 'other' => '{0} degrees Celsius'], ['other' => '{0} °C'], ['other' => '{0}°']),
    'centimeter' => new U(['one' => '{0} centimetre', 'other' => '{0} centimetres'], ['other' => '{0} cm'], ['other' => '{0}cm']),
    'fahrenheit' => new U(['one' => '{0} degree Fahrenheit', 'other' => '{0} degrees Fahrenheit'], ['other' => '{0} °F'], ['other' => '{0}°F']),
    'fluid-ounce' => new U(['one' => '{0} US fluid ounce', 'other' => '{0} US fluid ounces'], ['other' => '{0} US fl oz'], ['other' => '{0}US fl oz']),
    'gallon' => new U(['one' => '{0} US gallon', 'other' => '{0} US gallons'], ['other' => '{0} US gal'], ['other' => '{0}USgal']),
    'hour' => new U(['one' => '{0} hour', 'other' => '{0} hours'], ['one' => '{0} hr', 'other' => '{0} hrs'], ['other' => '{0}h']),
    'kilometer' => new U(['one' => '{0} kilometre', 'other' => '{0} kilometres'], ['other' => '{0} km'], ['other' => '{0}km']),
    'liter' => new U(['one' => '{0} litre', 'other' => '{0} litres'], ['other' => '{0} L'], ['other' => '{0}L']),
    'meter' => new U(['one' => '{0} metre', 'other' => '{0} metres'], ['other' => '{0} m'], ['other' => '{0}m']),
    'microsecond' => new U(['one' => '{0} microsecond', 'other' => '{0} microseconds'], ['one' => '{0} μsec', 'other' => '{0} μsecs'], ['other' => '{0}μs']),
    'mile-scandinavian' => new U(['one' => '{0} Scandinavian mile', 'other' => '{0} Scandinavian miles'], ['other' => '{0} smi'], ['other' => '{0}smi']),
    'milliliter' => new U(['one' => '{0} millilitre', 'other' => '{0} millilitres'], ['other' => '{0} mL'], ['other' => '{0}mL']),
    'millimeter' => new U(['one' => '{0} millimetre', 'other' => '{0} millimetres'], ['other' => '{0} mm'], ['other' => '{0}mm']),
    'millisecond' => new U(['one' => '{0} millisecond', 'other' => '{0} milliseconds'], ['one' => '{0} millisec', 'other' => '{0} millisecs'], ['other' => '{0}ms']),
    'minute' => new U(['one' => '{0} minute', 'other' => '{0} minutes'], ['one' => '{0} min', 'other' => '{0} mins'], ['other' => '{0}min']),
    'month' => new U(['one' => '{0} month', 'other' => '{0} months'], ['one' => '{0} mo', 'other' => '{0} mos'], ['other' => '{0}m']),
    'nanosecond' => new U(['one' => '{0} nanosecond', 'other' => '{0} nanoseconds'], ['one' => '{0} nanosec', 'other' => '{0} nanosecs'], ['other' => '{0}ns']),
    'pound' => new U(['one' => '{0} pound', 'other' => '{0} pounds'], ['other' => '{0} lb'], ['other' => '{0}lb']),
    'second' => new U(['one' => '{0} second', 'other' => '{0} seconds'], ['one' => '{0} sec', 'other' => '{0} secs'], ['other' => '{0}s']),
    'stone' => new U(['other' => '{0} stone'], ['other' => '{0} st'], ['other' => '{0}st']),
];
