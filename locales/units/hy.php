<?php

use Major\Fluent\Formatters\Number\Locale\Unit as U;

return [
    'degree' => new U(name: 'angle-degree', long: ['name' => 'աստիճաններ', 'plurals' => ['one' => '{0} աստիճան', 'other' => '{0} աստիճան'], 'perUnit' => ''], short: ['name' => 'աստիճան', 'plurals' => ['one' => '{0}°', 'other' => '{0}°'], 'perUnit' => ''], narrow: ['name' => 'աստիճան', 'plurals' => ['one' => '{0}°', 'other' => '{0}°'], 'perUnit' => '']),
    'acre' => new U(name: 'area-acre', long: ['name' => 'ակրեր', 'plurals' => ['one' => '{0} ակր', 'other' => '{0} ակր'], 'perUnit' => ''], short: ['name' => 'ակր', 'plurals' => ['one' => '{0} ակր', 'other' => '{0} ակր'], 'perUnit' => ''], narrow: ['name' => 'ակր', 'plurals' => ['one' => '{0}ակր', 'other' => '{0}ակր'], 'perUnit' => '']),
    'hectare' => new U(name: 'area-hectare', long: ['name' => 'հեկտարներ', 'plurals' => ['one' => '{0} հեկտար', 'other' => '{0} հեկտար'], 'perUnit' => ''], short: ['name' => 'հա', 'plurals' => ['one' => '{0} հա', 'other' => '{0} հա'], 'perUnit' => ''], narrow: ['name' => 'հա', 'plurals' => ['one' => '{0} հա', 'other' => '{0} հա'], 'perUnit' => '']),
    'percent' => new U(name: 'concentr-percent', long: ['name' => 'տոկոս', 'plurals' => ['one' => '{0} տոկոս', 'other' => '{0} տոկոս'], 'perUnit' => ''], short: ['name' => 'տոկոս', 'plurals' => ['one' => '{0}%', 'other' => '{0}%'], 'perUnit' => ''], narrow: ['name' => '%', 'plurals' => ['one' => '{0}%', 'other' => '{0}%'], 'perUnit' => '']),
    'bit' => new U(name: 'digital-bit', long: ['name' => 'բիթեր', 'plurals' => ['one' => '{0} բիթ', 'other' => '{0} բիթ'], 'perUnit' => ''], short: ['name' => 'բիթ', 'plurals' => ['one' => '{0} բիթ', 'other' => '{0} բիթ'], 'perUnit' => ''], narrow: ['name' => 'բիթ', 'plurals' => ['one' => '{0} բիթ', 'other' => '{0} բիթ'], 'perUnit' => '']),
    'byte' => new U(name: 'digital-byte', long: ['name' => 'բայթեր', 'plurals' => ['one' => '{0} բայթ', 'other' => '{0} բայթ'], 'perUnit' => ''], short: ['name' => 'Բ', 'plurals' => ['one' => '{0} Բայթ', 'other' => '{0} Բ'], 'perUnit' => ''], narrow: ['name' => 'Բ', 'plurals' => ['one' => '{0} Բ', 'other' => '{0} Բ'], 'perUnit' => '']),
    'gigabit' => new U(name: 'digital-gigabit', long: ['name' => 'գիգաբիթեր', 'plurals' => ['one' => '{0} գիգաբիթ', 'other' => '{0} գիգաբիթ'], 'perUnit' => ''], short: ['name' => 'Գբիթ', 'plurals' => ['one' => '{0} Գբիթ', 'other' => '{0} Գբիթ'], 'perUnit' => ''], narrow: ['name' => 'Գբիթ', 'plurals' => ['one' => '{0} Գբիթ', 'other' => '{0} Գբիթ'], 'perUnit' => '']),
    'gigabyte' => new U(name: 'digital-gigabyte', long: ['name' => 'գիգաբայթեր', 'plurals' => ['one' => '{0} գիգաբայթ', 'other' => '{0} գիգաբայթ'], 'perUnit' => ''], short: ['name' => 'ԳԲայթ', 'plurals' => ['one' => '{0} ԳԲ', 'other' => '{0} ԳԲ'], 'perUnit' => ''], narrow: ['name' => 'ԳԲ', 'plurals' => ['one' => '{0} ԳԲ', 'other' => '{0} ԳԲ'], 'perUnit' => '']),
    'kilobit' => new U(name: 'digital-kilobit', long: ['name' => 'կիլոբիթեր', 'plurals' => ['one' => '{0} կիլոբիթ', 'other' => '{0} կիլոբիթ'], 'perUnit' => ''], short: ['name' => 'կբիթ', 'plurals' => ['one' => '{0} կբիթ', 'other' => '{0} կբիթ'], 'perUnit' => ''], narrow: ['name' => 'կբիթ', 'plurals' => ['one' => '{0} կբիթ', 'other' => '{0} կբիթ'], 'perUnit' => '']),
    'kilobyte' => new U(name: 'digital-kilobyte', long: ['name' => 'կիլոբայթեր', 'plurals' => ['one' => '{0} կիլոբայթ', 'other' => '{0} կիլոբայթ'], 'perUnit' => ''], short: ['name' => 'կԲայթ', 'plurals' => ['one' => '{0} կԲ', 'other' => '{0} կԲ'], 'perUnit' => ''], narrow: ['name' => 'կԲ', 'plurals' => ['one' => '{0} կԲ', 'other' => '{0} կԲ'], 'perUnit' => '']),
    'megabit' => new U(name: 'digital-megabit', long: ['name' => 'մեգաբիթեր', 'plurals' => ['one' => '{0} մեգաբիթ', 'other' => '{0} մեգաբիթ'], 'perUnit' => ''], short: ['name' => 'Մբիթ', 'plurals' => ['one' => '{0} Մբիթ', 'other' => '{0} Մբիթ'], 'perUnit' => ''], narrow: ['name' => 'Մբիթ', 'plurals' => ['one' => '{0} Մբիթ', 'other' => '{0} Մբիթ'], 'perUnit' => '']),
    'megabyte' => new U(name: 'digital-megabyte', long: ['name' => 'մեգաբայթեր', 'plurals' => ['one' => '{0} մեգաբայթ', 'other' => '{0} մեգաբայթ'], 'perUnit' => ''], short: ['name' => 'ՄԲայթ', 'plurals' => ['one' => '{0} ՄԲ', 'other' => '{0} ՄԲ'], 'perUnit' => ''], narrow: ['name' => 'ՄԲ', 'plurals' => ['one' => '{0} ՄԲ', 'other' => '{0} ՄԲ'], 'perUnit' => '']),
    'petabyte' => new U(name: 'digital-petabyte', long: ['name' => 'պետաբայթեր', 'plurals' => ['one' => '{0} պետաբայթ', 'other' => '{0} պետաբայթ'], 'perUnit' => ''], short: ['name' => 'ՊԲայթ', 'plurals' => ['one' => '{0} ՊԲ', 'other' => '{0} ՊԲ'], 'perUnit' => ''], narrow: ['name' => 'ՊԲայթ', 'plurals' => ['one' => '{0} ՊԲ', 'other' => '{0} ՊԲ'], 'perUnit' => '']),
    'terabit' => new U(name: 'digital-terabit', long: ['name' => 'տերաբիթեր', 'plurals' => ['one' => '{0} տերաբիթ', 'other' => '{0} տերաբիթ'], 'perUnit' => ''], short: ['name' => 'Տբիթ', 'plurals' => ['one' => '{0} Տբիթ', 'other' => '{0} Տբիթ'], 'perUnit' => ''], narrow: ['name' => 'Տբիթ', 'plurals' => ['one' => '{0} Տբիթ', 'other' => '{0} Տբիթ'], 'perUnit' => '']),
    'terabyte' => new U(name: 'digital-terabyte', long: ['name' => 'տերաբայթեր', 'plurals' => ['one' => '{0} տերաբայթ', 'other' => '{0} տերաբայթ'], 'perUnit' => ''], short: ['name' => 'ՏԲայթ', 'plurals' => ['one' => '{0} ՏԲ', 'other' => '{0} ՏԲ'], 'perUnit' => ''], narrow: ['name' => 'ՏԲայթ', 'plurals' => ['one' => '{0} ՏԲ', 'other' => '{0} ՏԲ'], 'perUnit' => '']),
    'day' => new U(name: 'duration-day', long: ['name' => 'օրեր', 'plurals' => ['one' => '{0} օր', 'other' => '{0} օր'], 'perUnit' => 'օրական {0}'], short: ['name' => 'օր', 'plurals' => ['one' => '{0} օր', 'other' => '{0} օր'], 'perUnit' => '{0}/օր'], narrow: ['name' => 'օ', 'plurals' => ['one' => '{0} օ', 'other' => '{0} օ'], 'perUnit' => '{0}/օր']),
    'hour' => new U(name: 'duration-hour', long: ['name' => 'ժամեր', 'plurals' => ['one' => '{0} ժամ', 'other' => '{0} ժամ'], 'perUnit' => '{0} ժամում'], short: ['name' => 'ժ', 'plurals' => ['one' => '{0} ժ', 'other' => '{0} ժ'], 'perUnit' => '{0}/ժ'], narrow: ['name' => 'ժ', 'plurals' => ['one' => '{0} ժ', 'other' => '{0} ժ'], 'perUnit' => '{0}/ժ']),
    'millisecond' => new U(name: 'duration-millisecond', long: ['name' => 'միլիվայրկյաններ', 'plurals' => ['one' => '{0} միլիվայրկյան', 'other' => '{0} միլիվայրկյան'], 'perUnit' => ''], short: ['name' => 'մվ', 'plurals' => ['one' => '{0} մվ', 'other' => '{0} մվ'], 'perUnit' => ''], narrow: ['name' => 'մվ', 'plurals' => ['one' => '{0} մվ', 'other' => '{0} մվ'], 'perUnit' => '']),
    'minute' => new U(name: 'duration-minute', long: ['name' => 'րոպեներ', 'plurals' => ['one' => '{0} րոպե', 'other' => '{0} րոպե'], 'perUnit' => '{0} րոպեում'], short: ['name' => 'ր', 'plurals' => ['one' => '{0} ր', 'other' => '{0} ր'], 'perUnit' => '{0}/ր'], narrow: ['name' => 'ր', 'plurals' => ['one' => '{0} ր', 'other' => '{0} ր'], 'perUnit' => '{0}/ր']),
    'month' => new U(name: 'duration-month', long: ['name' => 'ամիսներ', 'plurals' => ['one' => '{0} ամիս', 'other' => '{0} ամիս'], 'perUnit' => 'ամսական {0}'], short: ['name' => 'ամս', 'plurals' => ['one' => '{0} ամս', 'other' => '{0} ամս'], 'perUnit' => '{0}/ամս'], narrow: ['name' => 'ա', 'plurals' => ['one' => '{0} ա', 'other' => '{0} ա'], 'perUnit' => '{0}/ամս']),
    'second' => new U(name: 'duration-second', long: ['name' => 'վայրկյաններ', 'plurals' => ['one' => '{0} վայրկյան', 'other' => '{0} վայրկյան'], 'perUnit' => '{0} վայրկյանում'], short: ['name' => 'վրկ', 'plurals' => ['one' => '{0} վրկ', 'other' => '{0} վրկ'], 'perUnit' => '{0}/վրկ'], narrow: ['name' => 'վ', 'plurals' => ['one' => '{0} վ', 'other' => '{0} վ'], 'perUnit' => '{0}/վ']),
    'week' => new U(name: 'duration-week', long: ['name' => 'շաբաթներ', 'plurals' => ['one' => '{0} շաբաթ', 'other' => '{0} շաբաթ'], 'perUnit' => 'շաբաթական {0}'], short: ['name' => 'շաբ', 'plurals' => ['one' => '{0} շաբ', 'other' => '{0} շաբ'], 'perUnit' => '{0}/շաբ'], narrow: ['name' => 'շ', 'plurals' => ['one' => '{0} շ', 'other' => '{0} շ'], 'perUnit' => '{0}/շաբ']),
    'year' => new U(name: 'duration-year', long: ['name' => 'տարիներ', 'plurals' => ['one' => '{0} տարի', 'other' => '{0} տարի'], 'perUnit' => 'տարեկան {0}'], short: ['name' => 'տ', 'plurals' => ['one' => '{0} տ', 'other' => '{0} տ'], 'perUnit' => '{0}/տ'], narrow: ['name' => 'տ', 'plurals' => ['one' => '{0} տ', 'other' => '{0} տ'], 'perUnit' => '{0}/տ']),
    'centimeter' => new U(name: 'length-centimeter', long: ['name' => 'սանտիմետրեր', 'plurals' => ['one' => '{0} սանտիմետր', 'other' => '{0} սանտիմետր'], 'perUnit' => '{0} սանտիմետրի վրա'], short: ['name' => 'սմ', 'plurals' => ['one' => '{0} սմ', 'other' => '{0} սմ'], 'perUnit' => '{0}/սմ'], narrow: ['name' => 'սմ', 'plurals' => ['one' => '{0} սմ', 'other' => '{0} սմ'], 'perUnit' => '{0}/սմ']),
    'foot' => new U(name: 'length-foot', long: ['name' => 'ֆուտեր', 'plurals' => ['one' => '{0} ֆուտ', 'other' => '{0} ֆուտ'], 'perUnit' => '{0} ֆուտի վրա'], short: ['name' => 'ֆտ', 'plurals' => ['one' => '{0} ֆտ', 'other' => '{0} ֆտ'], 'perUnit' => '{0}/ֆտ'], narrow: ['name' => 'ֆտ', 'plurals' => ['one' => '{0}′', 'other' => '{0}′'], 'perUnit' => '{0}/ֆտ']),
    'inch' => new U(name: 'length-inch', long: ['name' => 'մատնաչափեր', 'plurals' => ['one' => '{0} մատնաչափ', 'other' => '{0} մատնաչափ'], 'perUnit' => '{0} մատնաչափի վրա'], short: ['name' => 'մատ', 'plurals' => ['one' => '{0} մատ', 'other' => '{0} մատ'], 'perUnit' => '{0}/մատ'], narrow: ['name' => 'մատ', 'plurals' => ['one' => '{0}″', 'other' => '{0}″'], 'perUnit' => '{0}/մատ']),
    'kilometer' => new U(name: 'length-kilometer', long: ['name' => 'կիլոմետրեր', 'plurals' => ['one' => '{0} կիլոմետր', 'other' => '{0} կիլոմետր'], 'perUnit' => '{0} կիլոմետրի վրա'], short: ['name' => 'կմ', 'plurals' => ['one' => '{0} կմ', 'other' => '{0} կմ'], 'perUnit' => '{0}/կմ'], narrow: ['name' => 'կմ', 'plurals' => ['one' => '{0} կմ', 'other' => '{0} կմ'], 'perUnit' => '{0}/կմ']),
    'meter' => new U(name: 'length-meter', long: ['name' => 'մետրեր', 'plurals' => ['one' => '{0} մետր', 'other' => '{0} մետր'], 'perUnit' => '{0} մետրի վրա'], short: ['name' => 'մ', 'plurals' => ['one' => '{0} մ', 'other' => '{0} մ'], 'perUnit' => '{0}/մ'], narrow: ['name' => 'մ', 'plurals' => ['one' => '{0} մ', 'other' => '{0} մ'], 'perUnit' => '{0}/մ']),
    'mile' => new U(name: 'length-mile', long: ['name' => 'մղոններ', 'plurals' => ['one' => '{0} մղոն', 'other' => '{0} մղոն'], 'perUnit' => ''], short: ['name' => 'մղ', 'plurals' => ['one' => '{0} մղ', 'other' => '{0} մղ'], 'perUnit' => ''], narrow: ['name' => 'մղ', 'plurals' => ['one' => '{0} մղ', 'other' => '{0} մղ'], 'perUnit' => '']),
    'mile-scandinavian' => new U(name: 'length-mile-scandinavian', long: ['name' => 'սկանդինավյան մղոններ', 'plurals' => ['one' => '{0} սկանդինավյան մղոն', 'other' => '{0} սկանդինավյան մղոն'], 'perUnit' => ''], short: ['name' => 'սկանդ․ մղ', 'plurals' => ['one' => '{0} սկանդ․ մղ', 'other' => '{0} սկանդ․ մղ'], 'perUnit' => ''], narrow: ['name' => 'սկանդ․ մղ', 'plurals' => ['one' => '{0} սկանդ․ մղ', 'other' => '{0} սկանդ․ մղ'], 'perUnit' => '']),
    'millimeter' => new U(name: 'length-millimeter', long: ['name' => 'միլիմետրեր', 'plurals' => ['one' => '{0} միլիմետր', 'other' => '{0} միլիմետր'], 'perUnit' => ''], short: ['name' => 'մմ', 'plurals' => ['one' => '{0} մմ', 'other' => '{0} մմ'], 'perUnit' => ''], narrow: ['name' => 'մմ', 'plurals' => ['one' => '{0} մմ', 'other' => '{0} մմ'], 'perUnit' => '']),
    'yard' => new U(name: 'length-yard', long: ['name' => 'յարդեր', 'plurals' => ['one' => '{0} յարդ', 'other' => '{0} յարդ'], 'perUnit' => ''], short: ['name' => 'յրդ', 'plurals' => ['one' => '{0} յրդ', 'other' => '{0} յրդ'], 'perUnit' => ''], narrow: ['name' => 'յրդ', 'plurals' => ['one' => '{0} յդ.', 'other' => '{0} յդ.'], 'perUnit' => '']),
    'gram' => new U(name: 'mass-gram', long: ['name' => 'գրամներ', 'plurals' => ['one' => '{0} գրամ', 'other' => '{0} գրամ'], 'perUnit' => '{0} գրամի վրա'], short: ['name' => 'գ', 'plurals' => ['one' => '{0} գ', 'other' => '{0} գ'], 'perUnit' => '{0}/գ'], narrow: ['name' => 'գ', 'plurals' => ['one' => '{0} գ', 'other' => '{0} գ'], 'perUnit' => '{0}/գ']),
    'kilogram' => new U(name: 'mass-kilogram', long: ['name' => 'կիլոգրամներ', 'plurals' => ['one' => '{0} կիլոգրամ', 'other' => '{0} կիլոգրամ'], 'perUnit' => '{0} կիլոգրամի վրա'], short: ['name' => 'կգ', 'plurals' => ['one' => '{0} կգ', 'other' => '{0} կգ'], 'perUnit' => '{0}/կգ'], narrow: ['name' => 'կգ', 'plurals' => ['one' => '{0} կգ', 'other' => '{0} կգ'], 'perUnit' => '{0}/կգ']),
    'ounce' => new U(name: 'mass-ounce', long: ['name' => 'ունկիներ', 'plurals' => ['one' => '{0} ունկի', 'other' => '{0} ունկի'], 'perUnit' => '{0} ունկիի վրա'], short: ['name' => 'ունկ.', 'plurals' => ['one' => '{0} ունկ.', 'other' => '{0} ունկ.'], 'perUnit' => '{0}/ունկ.'], narrow: ['name' => 'ունկ.', 'plurals' => ['one' => '{0} ունց', 'other' => '{0} ունց'], 'perUnit' => '{0}/ունկ.']),
    'pound' => new U(name: 'mass-pound', long: ['name' => 'ֆունտեր', 'plurals' => ['one' => '{0} ֆունտ', 'other' => '{0} ֆունտ'], 'perUnit' => '{0} ֆունտի վրա'], short: ['name' => 'ֆունտ', 'plurals' => ['one' => '{0} ֆունտ', 'other' => '{0} ֆունտ'], 'perUnit' => '{0}/ֆունտ'], narrow: ['name' => 'ֆունտ', 'plurals' => ['one' => '{0}#', 'other' => '{0}#'], 'perUnit' => '{0}/ֆունտ']),
    'stone' => new U(name: 'mass-stone', long: ['name' => 'սթոուն', 'plurals' => ['one' => '{0} սթոուն', 'other' => '{0} սթոուն'], 'perUnit' => ''], short: ['name' => 'սթոուն', 'plurals' => ['one' => '{0} սթոուն', 'other' => '{0} սթոուն'], 'perUnit' => ''], narrow: ['name' => 'սթոուն', 'plurals' => ['one' => '{0} սթոուն', 'other' => '{0} սթոուն'], 'perUnit' => '']),
    'celsius' => new U(name: 'temperature-celsius', long: ['name' => 'աստիճաններ ըստ Ցելսիուսի', 'plurals' => ['one' => '{0} աստիճան ըստ Ցելսիուսի', 'other' => '{0} աստիճան ըստ Ցելսիուսի'], 'perUnit' => ''], short: ['name' => '°C', 'plurals' => ['one' => '{0} °C', 'other' => '{0} °C'], 'perUnit' => ''], narrow: ['name' => '°C', 'plurals' => ['one' => '{0} °C', 'other' => '{0} °C'], 'perUnit' => '']),
    'fahrenheit' => new U(name: 'temperature-fahrenheit', long: ['name' => 'աստիճաններ ըստ Ֆարենհայթի', 'plurals' => ['one' => '{0} աստիճան ըստ Ֆարենհայթի', 'other' => '{0} աստիճան ըստ Ֆարենհայթի'], 'perUnit' => ''], short: ['name' => '°F', 'plurals' => ['one' => '{0}°F', 'other' => '{0}°F'], 'perUnit' => ''], narrow: ['name' => '°F', 'plurals' => ['one' => '{0}°F', 'other' => '{0}°F'], 'perUnit' => '']),
    'fluid-ounce' => new U(name: 'volume-fluid-ounce', long: ['name' => 'հեղուկ ունկիներ', 'plurals' => ['one' => '{0} հեղուկ ունկի', 'other' => '{0} հեղուկ ունկի'], 'perUnit' => ''], short: ['name' => 'հղ․ ունկ․', 'plurals' => ['one' => '{0} հղ. ունկ․', 'other' => '{0} հղ. ունկ․'], 'perUnit' => ''], narrow: ['name' => 'հղ․ ունկ․', 'plurals' => ['one' => '{0} հղ. ունկ․', 'other' => '{0} հղ. ունկ․'], 'perUnit' => '']),
    'gallon' => new U(name: 'volume-gallon', long: ['name' => 'գալոններ', 'plurals' => ['one' => '{0} գալոն', 'other' => '{0} գալոն'], 'perUnit' => '{0} գալոնի վրա'], short: ['name' => 'գալ', 'plurals' => ['one' => '{0} գալ', 'other' => '{0} գալ'], 'perUnit' => '{0}/գալ'], narrow: ['name' => 'գալ', 'plurals' => ['one' => '{0} գալ', 'other' => '{0} գալ'], 'perUnit' => '{0}/գալ']),
    'liter' => new U(name: 'volume-liter', long: ['name' => 'լիտրեր', 'plurals' => ['one' => '{0} լիտր', 'other' => '{0} լիտր'], 'perUnit' => '{0} լիտրի վրա'], short: ['name' => 'լ', 'plurals' => ['one' => '{0} լ', 'other' => '{0} լ'], 'perUnit' => '{0}/լ'], narrow: ['name' => 'լ', 'plurals' => ['one' => '{0} լ', 'other' => '{0} լ'], 'perUnit' => '{0}/լ']),
    'milliliter' => new U(name: 'volume-milliliter', long: ['name' => 'միլիլիտրեր', 'plurals' => ['one' => '{0} միլիլիտր', 'other' => '{0} միլիլիտր'], 'perUnit' => ''], short: ['name' => 'մլ', 'plurals' => ['one' => '{0} մլ', 'other' => '{0} մլ'], 'perUnit' => ''], narrow: ['name' => 'մլ', 'plurals' => ['one' => '{0} մլ', 'other' => '{0} մլ'], 'perUnit' => '']),
];
