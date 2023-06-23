<?php

use Major\Fluent\Formatters\Number\Locale\Unit as U;

return [
    'centimeter' => new U(['one' => '{0} centimetre', 'other' => '{0} centimetres'], ['other' => '{0} cm'], ['other' => '{0}cm']),
    'fahrenheit' => new U(['one' => '{0} degree Fahrenheit', 'other' => '{0} degrees Fahrenheit'], ['other' => '{0}°F'], ['other' => '{0}°F']),
    'gallon' => new U(['one' => '{0} US gallon', 'other' => '{0} US gallons'], ['other' => '{0} gal US'], ['other' => '{0} gal US']),
    'hour' => new U(['one' => '{0} hour', 'other' => '{0} hours'], ['one' => '{0} hr', 'other' => '{0} hrs'], ['other' => '{0}h']),
    'kilometer' => new U(['one' => '{0} kilometre', 'other' => '{0} kilometres'], ['other' => '{0} km'], ['other' => '{0}km']),
    'liter' => new U(['one' => '{0} litre', 'other' => '{0} litres'], ['other' => '{0} L'], ['other' => '{0}L']),
    'meter' => new U(['one' => '{0} metre', 'other' => '{0} metres'], ['other' => '{0} m'], ['other' => '{0}m']),
    'mile-scandinavian' => new U(['one' => '{0} Scandinavian mile', 'other' => '{0} Scandinavian miles'], ['other' => '{0} smi'], ['other' => '{0}smi']),
    'milliliter' => new U(['one' => '{0} millilitre', 'other' => '{0} millilitres'], ['other' => '{0} mL'], ['other' => '{0}mL']),
    'millimeter' => new U(['one' => '{0} millimetre', 'other' => '{0} millimetres'], ['other' => '{0} mm'], ['other' => '{0}mm']),
    'minute' => new U(['one' => '{0} minute', 'other' => '{0} minutes'], ['one' => '{0} min.', 'other' => '{0} mins'], ['other' => '{0}min.']),
    'percent' => new U(['other' => '{0} per cent'], ['other' => '{0}%'], ['other' => '{0}%']),
    'pound' => new U(['one' => '{0} pound', 'other' => '{0} pounds'], ['other' => '{0} lb'], ['other' => '{0}lb']),
    'second' => new U(['one' => '{0} second', 'other' => '{0} seconds'], ['one' => '{0} sec.', 'other' => '{0} secs'], ['other' => '{0}s.']),
    'stone' => new U(['other' => '{0} stone'], ['other' => '{0} st'], ['other' => '{0}st']),
];
