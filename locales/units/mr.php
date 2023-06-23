<?php

use Major\Fluent\Formatters\Number\Locale\Unit as U;

return [
    'acre' => new U('{0} एकर', '{0} एकर', '{0}एकर'),
    'bit' => new U('{0} बिट', '{0} बिट', '{0} बिट'),
    'byte' => new U('{0} बाइट', '{0} बाइट', '{0}B'),
    'celsius' => new U('{0} अंश सेल्सिअस', '{0}°से', '{0}°से'),
    'centimeter' => new U('{0} सेंटीमीटर', '{0} सेंमी', '{0}सेंमी'),
    'day' => new U('{0} दिवस', '{0} दिवस', '{0}दि'),
    'degree' => new U('{0} अंश', '{0} अंश', '{0}°'),
    'fahrenheit' => new U('{0} अंश फॅरनहाईट', '{0}°फॅ', '{0}°'),
    'fluid-ounce' => new U('{0} फ्लूइड औंस', '{0} fl oz', '{0} fl oz'),
    'foot' => new U('{0} फूट', '{0} फूट', "{0}'"),
    'gallon' => new U('{0} गॅलन', '{0} gal', '{0} gal'),
    'gigabit' => new U('{0} गिगाबिट', '{0} Gb', '{0}Gb'),
    'gigabyte' => new U('{0} गिगाबाइट', '{0} GB', '{0}GB'),
    'gram' => new U('{0} ग्रॅम', '{0} ग्रॅ', '{0}ग्रॅ'),
    'hectare' => new U('{0} हेक्टर', '{0} हेक्टर', '{0}हेक्टर'),
    'hour' => new U('{0} तास', '{0} ता', '{0}ता'),
    'inch' => new U('{0} इंच', '{0} इंच', '{0}″'),
    'kilobit' => new U('{0} किलोबिट', '{0} kb', '{0}kb'),
    'kilobyte' => new U('{0} किलोबाइट', '{0} kB', '{0}kB'),
    'kilogram' => new U('{0} किलोग्रॅम', '{0} किग्रॅ', '{0}किग्रॅ'),
    'kilometer' => new U('{0} किलोमीटर', '{0} किमी', '{0}किमी'),
    'liter' => new U('{0} लीटर', '{0} ली', '{0}ली'),
    'megabit' => new U('{0} मेगाबिट', '{0} Mb', '{0}Mb'),
    'megabyte' => new U('{0} मेगाबाइट', '{0} MB', '{0}MB'),
    'meter' => new U('{0} मीटर', '{0} मी', '{0}मी'),
    'microsecond' => new U('{0} मायक्रोसेकंद', '{0} μs', '{0} μs'),
    'mile' => new U('{0} मैल', '{0} मैल', '{0}मैल'),
    'mile-scandinavian' => new U('{0} मैल-स्कॅन्डीनेव्हियन', '{0} smi', '{0} smi'),
    'milliliter' => new U('{0} मिलीलीटर', '{0} मिली', '{0} मिली'),
    'millimeter' => new U('{0} मिलिमीटर', '{0} मिमी', '{0}मिमी'),
    'millisecond' => new U('{0} मिलिसेकंद', '{0} मिलिसे', '{0} मिलिसे'),
    'minute' => new U(['one' => '{0} मिनिट', 'other' => '{0} मिनिटे'], '{0} मिनि', '{0}मि'),
    'month' => new U(['one' => '{0} महिना', 'other' => '{0} महिने'], ['one' => '{0} महिना', 'other' => '{0} महिने'], '{0}म'),
    'nanosecond' => new U('{0} नॅनोसेकंद', '{0} नॅसे', '{0} नॅसे'),
    'ounce' => new U('{0} औंस', '{0} औंस', '{0}औंस'),
    'percent' => new U('{0} टक्के', '{0}%', '{0}%'),
    'petabyte' => new U(['one' => '{0} पेटाबाइट', 'other' => '{0} पेटाबाइट्स'], '{0} PB', '{0}PB'),
    'pound' => new U('{0} पाउंड', '{0} पाउंड', '{0}#'),
    'second' => new U('{0} सेकंद', '{0} से', '{0}से'),
    'stone' => new U('{0} स्टोन', '{0} स्टोन', '{0}स्टोन'),
    'terabit' => new U('{0} टेराबिट', '{0} Tb', '{0}Tb'),
    'terabyte' => new U(['one' => '{0} टेराबाइट', 'other' => '{0} टेराबाइट्स'], '{0} TB', '{0}TB'),
    'week' => new U(['one' => '{0} आठवडा', 'other' => '{0} आठवडे'], '{0} आ', '{0}आ'),
    'yard' => new U('{0} यार्ड', '{0} यार्ड', '{0}यार्ड'),
    'year' => new U(['one' => '{0} वर्ष', 'other' => '{0} वर्षे'], ['one' => '{0} वर्ष', 'other' => '{0} वर्षे'], '{0}व'),
];