<?php

use Major\Fluent\Formatters\Number\Locale\Unit as U;

return [
    'acre' => new U('{0} ஏக்கர்', '{0} ஏக்.', '{0} ஏக்.'),
    'bit' => new U(['one' => '{0} பிட்', 'other' => '{0} பிட்கள்'], '{0} பிட்', '{0}பிட்'),
    'byte' => new U(['one' => '{0} பைட்', 'other' => '{0} பைட்கள்'], '{0} பை.', '{0}பை.'),
    'celsius' => new U('{0} டிகிரி செல்சியஸ்', '{0}°செ.', '{0}°செ.'),
    'centimeter' => new U(['one' => '{0} சென்டிமீட்டர்', 'other' => '{0} சென்டிமீட்டர்கள்'], '{0} செ.மீ.', '{0}செ.மீ.'),
    'day' => new U(['one' => '{0} நாள்', 'other' => '{0} நாட்கள்'], ['one' => '{0} நாள்', 'other' => '{0} நாட்கள்'], '{0} நா'),
    'degree' => new U(['one' => '{0} டிகிரி', 'other' => '{0} டிகிரீஸ்'], '{0} டிகி.', '{0}°'),
    'fahrenheit' => new U('{0} டிகிரி ஃபாரன்ஹீட்', '{0}°ஃபா.', '{0}°ஃபா.'),
    'fluid-ounce' => new U(['one' => '{0} திரவ அவுன்ஸ்', 'other' => '{0} திரவ அவுன்ஸ்கள்'], '{0} தி. அவு.', '{0}தி.அவு.'),
    'foot' => new U('{0} அடி', '{0} அடி', '{0} அடி'),
    'gallon' => new U(['one' => '{0} கேலன்', 'other' => '{0} கேலன்கள்'], '{0} கேல.', '{0}கேல.'),
    'gigabit' => new U(['one' => '{0} கிகாபிட்', 'other' => '{0} கிகாபிட்கள்'], '{0} Gb', '{0}Gb'),
    'gigabyte' => new U(['one' => '{0} கிகாபைட்', 'other' => '{0} கிகாபைட்கள்'], '{0} GB', '{0}GB'),
    'gram' => new U(['one' => '{0} கிராம்', 'other' => '{0} கிராம்கள்'], '{0} கி.', '{0} கி.'),
    'hectare' => new U(['one' => '{0} ஹெக்டேர்', 'other' => '{0} ஹெக்டேர்கள்'], '{0} ஹெக்.', '{0} ஹெக்.'),
    'hour' => new U(['one' => '{0} மணிநேரம்', 'other' => '{0} மணிநேரங்கள்'], '{0} மணிநேரம்', '{0} ம.நே.'),
    'inch' => new U(['one' => '{0} அங்குலம்', 'other' => '{0} அங்குலங்கள்'], '{0} அங்.', '{0} அங்.'),
    'kilobit' => new U(['one' => '{0} கிலோபிட்', 'other' => '{0} கிலோபிட்கள்'], '{0} kb', '{0}kb'),
    'kilobyte' => new U(['one' => '{0} கிலோபைட்', 'other' => '{0} கிலோபைட்கள்'], '{0} kB', '{0}kB'),
    'kilogram' => new U(['one' => '{0} கிலோகிராம்', 'other' => '{0} கிலோகிராம்கள்'], '{0} கி.கி.', '{0}கி.கி.'),
    'kilometer' => new U(['one' => '{0} கிலோமீட்டர்', 'other' => '{0} கிலோமீட்டர்கள்'], '{0} கி.மீ.', '{0}கி.மீ.'),
    'liter' => new U(['one' => '{0} லிட்டர்', 'other' => '{0} லிட்டர்கள்'], '{0} லி.', '{0}லி.'),
    'megabit' => new U(['one' => '{0} மெகாபிட்', 'other' => '{0} மெகாபிட்கள்'], '{0} Mb', '{0}Mb'),
    'megabyte' => new U(['one' => '{0} மெகாபைட்', 'other' => '{0} மெகாபைட்கள்'], '{0} MB', '{0}MB'),
    'meter' => new U(['one' => '{0} மீட்டர்', 'other' => '{0} மீட்டர்கள்'], '{0} மீ.', '{0}மீ.'),
    'microsecond' => new U(['one' => '{0} மைக்ரோவிநாடி', 'other' => '{0} மைக்ரோவிநாடிகள்'], '{0} μs', '{0}μs'),
    'mile' => new U(['one' => '{0} மைல்', 'other' => '{0} மைல்கள்'], '{0} மை.', '{0} மை.'),
    'mile-scandinavian' => new U(['one' => '{0} ஸ்கேண்டிநேவியன் மைல்', 'other' => '{0} ஸ்கேண்டிநேவியன் மைல்கள்'], '{0} ஸ்.மை.', '{0} ஸ்.மை.'),
    'milliliter' => new U(['one' => '{0} மில்லிலிட்டர்', 'other' => '{0} மில்லிலிட்டர்கள்'], '{0} மிலி', '{0}மிலி'),
    'millimeter' => new U(['one' => '{0} மில்லிமீட்டர்', 'other' => '{0} மில்லிமீட்டர்கள்'], '{0} மி.மீ.', '{0}மி.மீ.'),
    'millisecond' => new U(['one' => '{0} மில்லிவிநாடி', 'other' => '{0} மில்லிவிநாடிகள்'], '{0} மி.வி.', '{0} மி.வி.'),
    'minute' => new U(['one' => '{0} நிமிடம்', 'other' => '{0} நிமிடங்கள்'], ['one' => '{0} நிமிடம்', 'other' => '{0} நிமிட'], '{0} நிமி.'),
    'month' => new U(['one' => '{0} மாதம்', 'other' => '{0} மாதங்கள்'], ['one' => '{0} மாதம்', 'other' => '{0} மாத.'], '{0} மா'),
    'nanosecond' => new U(['one' => '{0} நானோசெகண்டு', 'other' => '{0} நானோசெகண்டுகள்'], '{0} நா.செ.', '{0}நா.செ.'),
    'ounce' => new U(['one' => '{0} அவுன்ஸ்', 'other' => '{0} அவுன்ஸ்கள்'], '{0} அவு.', '{0} அவு.'),
    'percent' => new U('{0} சதவீதம்', '{0}%', '{0}%'),
    'petabyte' => new U(['one' => '{0} பெடாபைட்', 'other' => '{0} பெடாபைட்கள்'], '{0} PB', '{0}PB'),
    'pound' => new U(['one' => '{0} பவுண்டு', 'other' => '{0} பவுண்டுகள்'], '{0} பவு.', '{0} பவு.'),
    'second' => new U(['one' => '{0} விநாடி', 'other' => '{0} விநாடிகள்'], '{0} விநாடி', '{0} வி.'),
    'stone' => new U(['one' => '{0} ஸ்டோன்', 'other' => '{0} ஸ்டோன்ஸ்'], '{0} ஸ்டோ.', '{0} ஸ்டோ.'),
    'terabit' => new U(['one' => '{0} டெராபிட்', 'other' => '{0} டெராபிட்கள்'], '{0} Tb', '{0}Tb'),
    'terabyte' => new U(['one' => '{0} டெராபைட்', 'other' => '{0} டெராபைட்கள்'], '{0} TB', '{0}TB'),
    'week' => new U(['one' => '{0} வாரம்', 'other' => '{0} வாரங்கள்'], ['one' => '{0} வாரம்', 'other' => '{0} வார.'], '{0} வா'),
    'yard' => new U('{0} கெஜம்', '{0} கெஜ.', '{0} கெஜ.'),
    'year' => new U(['one' => '{0} ஆண்டு', 'other' => '{0} ஆண்டுகள்'], ['one' => '{0} ஆண்டு', 'other' => '{0} ஆண்டு.'], '{0} ஆ'),
];
