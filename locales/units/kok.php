<?php

use Major\Fluent\Formatters\Number\Locale\Unit as U;

return [
    'acre' => new U(long: ['name' => 'एकर', 'plurals' => ['other' => '{0} एकर'], 'perUnit' => ''], short: ['name' => 'एकर', 'plurals' => ['other' => '{0} ac'], 'perUnit' => ''], narrow: ['name' => 'एकर', 'plurals' => ['other' => '{0}ac'], 'perUnit' => '']),
    'bit' => new U(long: ['name' => 'बिट', 'plurals' => ['other' => '{0} बिट'], 'perUnit' => ''], short: ['name' => 'बिट', 'plurals' => ['other' => '{0} बिट'], 'perUnit' => ''], narrow: ['name' => 'बिट', 'plurals' => ['other' => '{0}बिट'], 'perUnit' => '']),
    'byte' => new U(long: ['name' => 'बायट', 'plurals' => ['other' => '{0} बायट'], 'perUnit' => ''], short: ['name' => 'बायट', 'plurals' => ['other' => '{0} बायट'], 'perUnit' => ''], narrow: ['name' => 'B', 'plurals' => ['other' => '{0}B'], 'perUnit' => '']),
    'celsius' => new U(long: ['name' => 'अंश सेल्सियस', 'plurals' => ['other' => '{0} अंश सेल्सियस'], 'perUnit' => ''], short: ['name' => 'अं. से', 'plurals' => ['other' => '{0} अंसे'], 'perUnit' => ''], narrow: ['name' => '°से', 'plurals' => ['other' => '{0}°से'], 'perUnit' => '']),
    'centimeter' => new U(long: ['name' => 'सेंटिमीटर', 'plurals' => ['other' => '{0} सेंटिमीटर'], 'perUnit' => 'दर सेंटिमीटर {0}'], short: ['name' => 'सेमी', 'plurals' => ['other' => '{0} सेमी'], 'perUnit' => '{0}/सेमी'], narrow: ['name' => 'सेमी', 'plurals' => ['other' => '{0}सेमी'], 'perUnit' => '{0}/सेमी']),
    'day' => new U(long: ['name' => 'दीस', 'plurals' => ['other' => '{0} दीस'], 'perUnit' => 'दर दिसा {0}'], short: ['name' => 'दीस', 'plurals' => ['other' => '{0} दीस'], 'perUnit' => '{0}/दी'], narrow: ['name' => 'दीस', 'plurals' => ['other' => '{0}दी'], 'perUnit' => '{0}/दी']),
    'degree' => new U(long: ['name' => 'अंश', 'plurals' => ['other' => '{0} अंश'], 'perUnit' => ''], short: ['name' => 'अंश', 'plurals' => ['other' => '{0}°'], 'perUnit' => ''], narrow: ['name' => 'अंश', 'plurals' => ['other' => '{0}°'], 'perUnit' => '']),
    'fahrenheit' => new U(long: ['name' => 'अंश फारेनहायट', 'plurals' => ['other' => '{0} अंश फारेनहायट'], 'perUnit' => ''], short: ['name' => 'अंश फारेनहायट', 'plurals' => ['other' => '{0}°फा'], 'perUnit' => ''], narrow: ['name' => '°F', 'plurals' => ['other' => '{0}°'], 'perUnit' => '']),
    'fluid-ounce' => new U(long: ['name' => 'फ्लुइड औंस', 'plurals' => ['other' => '{0} फ्लुइड औंस'], 'perUnit' => ''], short: ['name' => 'US fl oz', 'plurals' => ['other' => '{0} fl oz US'], 'perUnit' => ''], narrow: ['name' => 'fl oz', 'plurals' => ['other' => '{0}fl oz'], 'perUnit' => '']),
    'foot' => new U(long: ['name' => 'फूट', 'plurals' => ['other' => '{0} फूट'], 'perUnit' => 'दर फूट {0}'], short: ['name' => 'फूट', 'plurals' => ['other' => '{0} फूट'], 'perUnit' => '{0}/ft'], narrow: ['name' => 'फूट', 'plurals' => ['other' => '{0}फूट'], 'perUnit' => '{0}/ft']),
    'gallon' => new U(long: ['name' => 'गॅलोन', 'plurals' => ['other' => '{0} गॅलोन'], 'perUnit' => 'दर गॅलोन {0}'], short: ['name' => 'गॅ', 'plurals' => ['other' => '{0} गॅ'], 'perUnit' => '{0}/गॅलो युएस'], narrow: ['name' => 'गॅ', 'plurals' => ['other' => '{0}गॅ'], 'perUnit' => '{0}/गॅ']),
    'gigabit' => new U(long: ['name' => 'गिगाबिट', 'plurals' => ['other' => '{0} गिगाबिट'], 'perUnit' => ''], short: ['name' => 'Gb', 'plurals' => ['other' => '{0} Gb'], 'perUnit' => ''], narrow: ['name' => 'Gb', 'plurals' => ['other' => '{0}Gb'], 'perUnit' => '']),
    'gigabyte' => new U(long: ['name' => 'गिगाबायट', 'plurals' => ['other' => '{0} गिगाबायट'], 'perUnit' => ''], short: ['name' => 'GB', 'plurals' => ['other' => '{0} GB'], 'perUnit' => ''], narrow: ['name' => 'GB', 'plurals' => ['other' => '{0}GB'], 'perUnit' => '']),
    'gram' => new U(long: ['name' => 'ग्राम', 'plurals' => ['other' => '{0} ग्राम'], 'perUnit' => '{0}/ग्रा'], short: ['name' => 'ग्राम', 'plurals' => ['other' => '{0} ग्राम'], 'perUnit' => '{0}/ग्रा'], narrow: ['name' => 'ग्राम', 'plurals' => ['other' => '{0}ग्रा'], 'perUnit' => '{0}/ग्रा']),
    'hectare' => new U(long: ['name' => 'हॅक्टर', 'plurals' => ['other' => '{0} हॅक्टर'], 'perUnit' => ''], short: ['name' => 'हॅक्टर', 'plurals' => ['other' => '{0} ha'], 'perUnit' => ''], narrow: ['name' => 'हॅक्टर', 'plurals' => ['other' => '{0}ha'], 'perUnit' => '']),
    'hour' => new U(long: ['name' => 'वरां', 'plurals' => ['other' => '{0} वरां'], 'perUnit' => 'दर वरा {0}'], short: ['name' => 'वरां', 'plurals' => ['other' => '{0} वर'], 'perUnit' => '{0}/वर'], narrow: ['name' => 'वर', 'plurals' => ['other' => '{0}व'], 'perUnit' => '{0}/वर']),
    'inch' => new U(long: ['name' => 'इंच', 'plurals' => ['other' => '{0} इंच'], 'perUnit' => 'दर इंच {0}'], short: ['name' => 'इंच', 'plurals' => ['other' => '{0} in'], 'perUnit' => '{0}/in'], narrow: ['name' => 'इंच', 'plurals' => ['other' => '{0}in'], 'perUnit' => '{0}/in']),
    'kilobit' => new U(long: ['name' => 'किलोबिट', 'plurals' => ['other' => '{0} किलोबिट'], 'perUnit' => ''], short: ['name' => 'kb', 'plurals' => ['other' => '{0} kb'], 'perUnit' => ''], narrow: ['name' => 'kb', 'plurals' => ['other' => '{0}kb'], 'perUnit' => '']),
    'kilobyte' => new U(long: ['name' => 'किलोबायट', 'plurals' => ['other' => '{0} किलोबायट'], 'perUnit' => ''], short: ['name' => 'kB', 'plurals' => ['other' => '{0} kB'], 'perUnit' => ''], narrow: ['name' => 'kB', 'plurals' => ['other' => '{0}kB'], 'perUnit' => '']),
    'kilogram' => new U(long: ['name' => 'किलोग्राम', 'plurals' => ['other' => '{0} किलोग्राम'], 'perUnit' => '{0}/किलोग्राम'], short: ['name' => 'किग्रा', 'plurals' => ['other' => '{0} किग्रा'], 'perUnit' => '{0}/किग्रा'], narrow: ['name' => 'किग्रा', 'plurals' => ['other' => '{0}किग्रा'], 'perUnit' => '{0}/किग्रा']),
    'kilometer' => new U(long: ['name' => 'किलोमीटर', 'plurals' => ['other' => '{0} किलोमीटर'], 'perUnit' => 'दर किलोमीटर {0}'], short: ['name' => 'किमी', 'plurals' => ['other' => '{0} किमी'], 'perUnit' => '{0}/किमी'], narrow: ['name' => 'किमी', 'plurals' => ['other' => '{0}किमी'], 'perUnit' => '{0}/किमी']),
    'liter' => new U(long: ['name' => 'लिटर', 'plurals' => ['other' => '{0} लिटर'], 'perUnit' => '{0}/लिटर'], short: ['name' => 'लिटर', 'plurals' => ['other' => '{0} लि'], 'perUnit' => '{0}/लि'], narrow: ['name' => 'लिटर', 'plurals' => ['other' => '{0}लि'], 'perUnit' => '{0}/लि']),
    'megabit' => new U(long: ['name' => 'मॅगाबिट', 'plurals' => ['other' => '{0} मॅगाबिट'], 'perUnit' => ''], short: ['name' => 'Mb', 'plurals' => ['other' => '{0} Mb'], 'perUnit' => ''], narrow: ['name' => 'Mb', 'plurals' => ['other' => '{0}Mb'], 'perUnit' => '']),
    'megabyte' => new U(long: ['name' => 'मॅगाबायट', 'plurals' => ['other' => '{0} मॅगाबायट'], 'perUnit' => ''], short: ['name' => 'MB', 'plurals' => ['other' => '{0} MB'], 'perUnit' => ''], narrow: ['name' => 'MB', 'plurals' => ['other' => '{0}MB'], 'perUnit' => '']),
    'meter' => new U(long: ['name' => 'मीटर', 'plurals' => ['other' => '{0} मीटर'], 'perUnit' => 'दर मिटर {0}'], short: ['name' => 'मी', 'plurals' => ['other' => '{0} मी'], 'perUnit' => '{0}/मी'], narrow: ['name' => 'मी', 'plurals' => ['other' => '{0}मी'], 'perUnit' => '{0}/मी']),
    'mile' => new U(long: ['name' => 'मायल्स', 'plurals' => ['other' => '{0} मायल्स'], 'perUnit' => ''], short: ['name' => 'मायल्स', 'plurals' => ['other' => '{0} mi'], 'perUnit' => ''], narrow: ['name' => 'मायल्स', 'plurals' => ['other' => '{0}mi'], 'perUnit' => '']),
    'mile-scandinavian' => new U(long: ['name' => 'मायल-स्कँडिनेव्हियन', 'plurals' => ['other' => '{0} मायल्स-स्कँडिनेव्हियन'], 'perUnit' => ''], short: ['name' => 'smi', 'plurals' => ['other' => '{0} smi'], 'perUnit' => ''], narrow: ['name' => 'smi', 'plurals' => ['other' => '{0}smi'], 'perUnit' => '']),
    'milliliter' => new U(long: ['name' => 'मिलिलिटर', 'plurals' => ['other' => '{0} मिलिलिटर'], 'perUnit' => ''], short: ['name' => 'मिलि', 'plurals' => ['other' => '{0} मिलि'], 'perUnit' => ''], narrow: ['name' => 'मिलि', 'plurals' => ['other' => '{0}मिलि'], 'perUnit' => '']),
    'millimeter' => new U(long: ['name' => 'मिलिमीटर', 'plurals' => ['other' => '{0} मिलिमिटर'], 'perUnit' => ''], short: ['name' => 'मिमी', 'plurals' => ['other' => '{0} मिमी'], 'perUnit' => ''], narrow: ['name' => 'मिमी', 'plurals' => ['other' => '{0} मिमी'], 'perUnit' => '']),
    'millisecond' => new U(long: ['name' => 'मिलिसेकंदांनी', 'plurals' => ['other' => '{0} मिलिसेकंदांनी'], 'perUnit' => ''], short: ['name' => 'मिलिसेकंदांनी', 'plurals' => ['other' => '{0} मिलिसेकंद'], 'perUnit' => ''], narrow: ['name' => 'मिलिसे', 'plurals' => ['other' => '{0}मिसे'], 'perUnit' => '']),
    'minute' => new U(long: ['name' => 'मिण्टां', 'plurals' => ['other' => '{0} मिण्टां'], 'perUnit' => 'दर मिनीट {0}'], short: ['name' => 'मिण्टां', 'plurals' => ['other' => '{0} मिनीट'], 'perUnit' => '{0}/मिनीट'], narrow: ['name' => 'मिनीट', 'plurals' => ['other' => '{0} मि'], 'perUnit' => '{0}/मिनीट']),
    'month' => new U(long: ['name' => 'म्हयने', 'plurals' => ['other' => '{0} म्हयने'], 'perUnit' => 'दर म्हयनो {0}'], short: ['name' => 'म्हयने', 'plurals' => ['other' => '{0} म्हयने'], 'perUnit' => '{0}/म्ह'], narrow: ['name' => 'म्हयनो', 'plurals' => ['other' => '{0}म्ह'], 'perUnit' => '{0}/म्ह']),
    'ounce' => new U(long: ['name' => 'औंस', 'plurals' => ['other' => '{0} औंस'], 'perUnit' => '{0} दर औंस'], short: ['name' => 'औंस', 'plurals' => ['other' => '{0} oz'], 'perUnit' => '{0}/औंस'], narrow: ['name' => 'औंस', 'plurals' => ['other' => '{0}औंस'], 'perUnit' => '{0}/औंस']),
    'percent' => new U(long: ['name' => 'टक्को', 'plurals' => ['other' => '{0} टक्को'], 'perUnit' => ''], short: ['name' => '%', 'plurals' => ['other' => '{0}%'], 'perUnit' => ''], narrow: ['name' => '%', 'plurals' => ['other' => '{0}%'], 'perUnit' => '']),
    'petabyte' => new U(long: ['name' => 'पेटाबायट', 'plurals' => ['other' => '{0} पेटाबायट'], 'perUnit' => ''], short: ['name' => 'PB', 'plurals' => ['other' => '{0} PB'], 'perUnit' => ''], narrow: ['name' => 'PB', 'plurals' => ['other' => '{0}PB'], 'perUnit' => '']),
    'pound' => new U(long: ['name' => 'पौंड', 'plurals' => ['other' => '{0} पौंड'], 'perUnit' => '{0} दर पौंड'], short: ['name' => 'पौंड', 'plurals' => ['other' => '{0} lb'], 'perUnit' => '{0}/पौंड'], narrow: ['name' => 'पौंड', 'plurals' => ['other' => '{0}#'], 'perUnit' => '{0}/पौंड']),
    'second' => new U(long: ['name' => 'सेकंद', 'plurals' => ['other' => '{0} सेकंदांनी'], 'perUnit' => 'दर सेकंद {0}'], short: ['name' => 'सेकंदांनी', 'plurals' => ['other' => '{0} सेकंद'], 'perUnit' => '{0}/से'], narrow: ['name' => 'सेकंद', 'plurals' => ['other' => '{0}से'], 'perUnit' => '{0}/से']),
    'stone' => new U(long: ['name' => 'स्टोन', 'plurals' => ['other' => '{0} स्टोन'], 'perUnit' => ''], short: ['name' => 'स्टोन', 'plurals' => ['other' => '{0} स्टोन'], 'perUnit' => ''], narrow: ['name' => 'स्टोन', 'plurals' => ['other' => '{0}स्टोन'], 'perUnit' => '']),
    'terabit' => new U(long: ['name' => 'टेराबिट्स', 'plurals' => ['other' => '{0} टेराबिट्स'], 'perUnit' => ''], short: ['name' => 'Tb', 'plurals' => ['other' => '{0} Tb'], 'perUnit' => ''], narrow: ['name' => 'Tb', 'plurals' => ['other' => '{0}Tb'], 'perUnit' => '']),
    'terabyte' => new U(long: ['name' => 'टेराबायट', 'plurals' => ['other' => '{0} टेराबायट'], 'perUnit' => ''], short: ['name' => 'TB', 'plurals' => ['other' => '{0} TB'], 'perUnit' => ''], narrow: ['name' => 'TB', 'plurals' => ['other' => '{0}TB'], 'perUnit' => '']),
    'week' => new U(long: ['name' => 'सप्तक', 'plurals' => ['other' => '{0} सप्तक'], 'perUnit' => 'दर सप्तकाक {0}'], short: ['name' => 'सप्तक', 'plurals' => ['other' => '{0} सप्तक'], 'perUnit' => '{0}/स'], narrow: ['name' => 'स', 'plurals' => ['other' => '{0}स'], 'perUnit' => '{0}/स']),
    'yard' => new U(long: ['name' => 'यार्ड', 'plurals' => ['other' => '{0} यार्ड'], 'perUnit' => ''], short: ['name' => 'यार्ड', 'plurals' => ['other' => '{0} yd'], 'perUnit' => ''], narrow: ['name' => 'यार्ड', 'plurals' => ['other' => '{0}yd'], 'perUnit' => '']),
    'year' => new U(long: ['name' => 'वर्सां', 'plurals' => ['other' => '{0} वर्सां'], 'perUnit' => 'दर वर्सा {0}'], short: ['name' => 'वर्सां', 'plurals' => ['other' => '{0} वर्सां'], 'perUnit' => '{0}/वर्सां'], narrow: ['name' => 'वर्सा', 'plurals' => ['other' => '{0}व'], 'perUnit' => '{0}/वर्सां']),
];
