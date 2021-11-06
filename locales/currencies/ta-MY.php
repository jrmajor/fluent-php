<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'MYR' => new C('MYR', 'மலேஷியன் ரிங்கிட்', 'RM', plurals: ['one' => 'மலேஷியன் ரிங்கிட்', 'other' => 'மலேஷியன் ரிங்கிட்கள்']),
    'SGD' => new C('SGD', 'சிங்கப்பூர் டாலர்', 'S$', plurals: ['one' => 'சிங்கப்பூர் டாலர்', 'other' => 'சிங்கப்பூர் டாலர்கள்']),
];
