<?php

use Major\Fluent\Formatters\Number\Locale\Unit as U;

return [
    'acre' => new U(['one' => '{0} acre', 'other' => '{0} acres'], ['one' => '{0} acre', 'other' => '{0} acres'], ['one' => '{0} acre', 'other' => '{0} acres']),
    'bit' => new U(['one' => '{0} bit', 'other' => '{0} bits'], ['other' => '{0} bit'], ['other' => '{0} bit']),
    'byte' => new U(['one' => '{0} byte', 'other' => '{0} bytes'], ['other' => '{0} byte'], ['other' => '{0} B']),
    'celsius' => new U(['one' => '{0} grau Celsius', 'other' => '{0} graus Celsius'], ['other' => '{0} °C'], ['other' => '{0}°C']),
    'fluid-ounce' => new U(['one' => '{0} onça fluida', 'other' => '{0} onças fluidas'], ['other' => '{0} fl oz'], ['other' => '{0} fl oz']),
    'foot' => new U(['one' => '{0} pé', 'other' => '{0} pés'], ['one' => '{0} pé', 'other' => '{0} pés'], ['other' => '{0}′']),
    'gram' => new U(['one' => '{0} grama', 'other' => '{0} gramas'], ['other' => '{0} g'], ['other' => '{0} g']),
    'kilogram' => new U(['one' => '{0} quilograma', 'other' => '{0} quilogramas'], ['other' => '{0} kg'], ['other' => '{0} kg']),
    'kilometer' => new U(['one' => '{0} quilómetro', 'other' => '{0} quilómetros'], ['other' => '{0} km'], ['other' => '{0} km']),
    'liter' => new U(['one' => '{0} litro', 'other' => '{0} litros'], ['other' => '{0} l'], ['other' => '{0} l']),
    'mile' => new U(['one' => '{0} milha', 'other' => '{0} milhas'], ['one' => '{0} milha', 'other' => '{0} milhas'], ['one' => '{0} milha', 'other' => '{0} milhas']),
];
