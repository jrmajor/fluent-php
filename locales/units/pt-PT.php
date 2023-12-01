<?php

use Major\Fluent\Formatters\Number\Locale\Unit as U;

return [
    'acre' => new U(['one' => '{0} acre', 'other' => '{0} acres'], ['one' => '{0} acre', 'other' => '{0} acres'], ['one' => '{0} acre', 'other' => '{0} acres']),
    'bit' => new U(['one' => '{0} bit', 'other' => '{0} bits'], '{0} bit', ['one' => '{0} bit', 'other' => '{0} bits']),
    'byte' => new U(['one' => '{0} byte', 'other' => '{0} bytes'], '{0} byte', '{0} B'),
    'celsius' => new U(['one' => '{0} grau Celsius', 'other' => '{0} graus Celsius'], '{0} °C', '{0}°C'),
    'degree' => new U(['one' => '{0} grau', 'other' => '{0} graus'], ['one' => '{0}°', 'other' => '{0} °'], '{0}°'),
    'fluid-ounce' => new U(['one' => '{0} onça fluida', 'other' => '{0} onças fluidas'], '{0} fl oz', '{0} fl oz'),
    'gram' => new U(['one' => '{0} grama', 'other' => '{0} gramas'], '{0} g', '{0} g'),
    'kilogram' => new U(['one' => '{0} quilograma', 'other' => '{0} quilogramas'], '{0} kg', '{0} kg'),
    'kilometer' => new U(['one' => '{0} quilómetro', 'other' => '{0} quilómetros'], '{0} km', '{0} km'),
    'liter' => new U(['one' => '{0} litro', 'other' => '{0} litros'], '{0} l', '{0} l'),
    'mile' => new U(['one' => '{0} milha', 'other' => '{0} milhas'], ['one' => '{0} milha', 'other' => '{0} milhas'], ['one' => '{0} milha', 'other' => '{0} milhas']),
];
