<?php

use Major\Fluent\Formatters\Number\Locale\Unit as U;

return [
    'acre' => new U(['few' => '{0} acraichean', 'other' => '{0} acair'], '{0} ac', '{0}ac'),
    'bit' => new U(['one' => '{0} bhiod', 'two' => '{0} bhiod', 'few' => '{0} biodan', 'other' => '{0} biod'], '{0} b', '{0}b'),
    'byte' => new U(['one' => '{0} bhaidht', 'two' => '{0} bhaidht', 'few' => '{0} baidhtean', 'other' => '{0} baidht'], '{0} B', '{0}B'),
    'celsius' => new U(['one' => '{0} cheum Celsius', 'two' => '{0} cheum Celsius', 'few' => '{0} ceuman Celsius', 'other' => '{0} ceum Celsius'], '{0}°C', '{0}°C'),
    'centimeter' => new U(['one' => '{0} cheudameatair', 'two' => '{0} cheudameatair', 'few' => '{0} ceudameatairean', 'other' => '{0} ceudameatair'], '{0} cm', '{0}cm'),
    'day' => new U(['few' => '{0} làithean', 'other' => '{0} latha'], '{0} là', '{0}là'),
    'degree' => new U(['one' => '{0} cheum', 'two' => '{0} cheum', 'few' => '{0} ceuman', 'other' => '{0} ceum'], '{0}°', '{0}°'),
    'fahrenheit' => new U(['one' => '{0} cheum Fahrenheit', 'two' => '{0} cheum Fahrenheit', 'few' => '{0} ceuman Fahrenheit', 'other' => '{0} ceum Fahrenheit'], '{0}°F', '{0}°F'),
    'fluid-ounce' => new U(['few' => '{0} unnsachan-dighe', 'other' => '{0} unnsa-dighe'], '{0} fl oz', '{0}fl oz'),
    'foot' => new U(['two' => '{0} throigh', 'few' => '{0} troighean', 'other' => '{0} troigh'], ['two' => '{0} throigh', 'other' => '{0} troigh'], '{0}′'),
    'gallon' => new U(['one' => '{0} ghalan', 'two' => '{0} ghalan', 'few' => '{0} galanan', 'other' => '{0} galan'], '{0} gal', '{0}gal'),
    'gigabit' => new U(['one' => '{0} ghiga-biod', 'two' => '{0} ghiga-biod', 'few' => '{0} giga-biodan', 'other' => '{0} giga-biod'], '{0} Gb', '{0}Gb'),
    'gigabyte' => new U(['one' => '{0} ghiga-baidht', 'two' => '{0} ghiga-baidht', 'few' => '{0} giga-baidhtean', 'other' => '{0} giga-baidht'], '{0} GB', '{0}GB'),
    'gram' => new U(['one' => '{0} ghram', 'two' => '{0} ghram', 'few' => '{0} gramaichean', 'other' => '{0} gram'], '{0} g', '{0}g'),
    'hectare' => new U(['few' => '{0} heactairean', 'other' => '{0} heactair'], '{0} ha', '{0}ha'),
    'hour' => new U(['few' => '{0} uairean a thìde', 'other' => '{0} uair a thìde'], '{0} uair', '{0}u'),
    'inch' => new U(['few' => '{0} òirlich', 'other' => '{0} òirleach'], '{0} òirl', '{0}″'),
    'kilobit' => new U(['one' => '{0} chilebiod', 'two' => '{0} chilebiod', 'few' => '{0} cilebiodan', 'other' => '{0} cilebiod'], '{0} kb', '{0}kb'),
    'kilobyte' => new U(['one' => '{0} chileabaidht', 'two' => '{0} chileabaidht', 'few' => '{0} cileabaidhtean', 'other' => '{0} cileabaidht'], '{0} kB', '{0}kB'),
    'kilogram' => new U(['one' => '{0} chileagram', 'two' => '{0} chileagram', 'few' => '{0} cileagramaichean', 'other' => '{0} cileagram'], '{0} kg', '{0}kg'),
    'kilometer' => new U(['one' => '{0} chilemeatair', 'two' => '{0} chilemeatair', 'few' => '{0} cilemeatairean', 'other' => '{0} cilemeatair'], '{0} km', '{0}km'),
    'liter' => new U(['few' => '{0} liotairean', 'other' => '{0} liotair'], '{0} L', '{0}L'),
    'megabit' => new U(['one' => '{0} mheaga-biod', 'two' => '{0} mheaga-biod', 'few' => '{0} meaga-biodan', 'other' => '{0} meaga-biod'], '{0} Mb', '{0}Mb'),
    'megabyte' => new U(['one' => '{0} mheaga-baidht', 'two' => '{0} mheaga-baidht', 'few' => '{0} meaga-baidhtean', 'other' => '{0} meaga-baidht'], '{0} MB', '{0}MB'),
    'meter' => new U(['one' => '{0} mheatair', 'two' => '{0} mheatair', 'few' => '{0} meatairean', 'other' => '{0} meatair'], '{0} m', '{0}m'),
    'microsecond' => new U(['one' => '{0} mhicreo-diog', 'two' => '{0} mhicreo-diog', 'few' => '{0} micreo-diogan', 'other' => '{0} micreo-diog'], '{0} μs', '{0}μs'),
    'mile' => new U(['one' => '{0} mhìle', 'two' => '{0} mhìle', 'few' => '{0} mìltean', 'other' => '{0} mìle'], '{0} mì', '{0}mì'),
    'mile-scandinavian' => new U(['one' => '{0} mhìle Lochlannach', 'two' => '{0} mhìle Lochlannach', 'few' => '{0} mìltean Lochlannach', 'other' => '{0} mìle Lochlannach'], '{0} smi', '{0}smi'),
    'milliliter' => new U(['one' => '{0} mhililiotair', 'two' => '{0} mhililiotair', 'few' => '{0} mililiotairean', 'other' => '{0} mililiotair'], '{0} mL', '{0}mL'),
    'millimeter' => new U(['one' => '{0} mhili-meatair', 'two' => '{0} mhili-meatair', 'few' => '{0} mili-meatairean', 'other' => '{0} mili-meatair'], '{0} mm', '{0}mm'),
    'millisecond' => new U(['one' => '{0} mhili-diog', 'two' => '{0} mhili-diog', 'few' => '{0} mili-diogan', 'other' => '{0} mili-diog'], '{0} ms', '{0}ms'),
    'minute' => new U(['one' => '{0} mhionaid', 'two' => '{0} mhionaid', 'few' => '{0} mionaidean', 'other' => '{0} mionaid'], ['one' => '{0} mhion', 'two' => '{0} mhion', 'other' => '{0} mion'], '{0}m'),
    'month' => new U(['one' => '{0} mhìos', 'two' => '{0} mhìos', 'few' => '{0} mìosan', 'other' => '{0} mìos'], ['one' => '{0} mhìos', 'two' => '{0} mhìos', 'other' => '{0} mìos'], '{0}m'),
    'nanosecond' => new U(['few' => '{0} nano-diogan', 'other' => '{0} nano-diog'], '{0} ns', '{0}ns'),
    'ounce' => new U(['few' => '{0} unnsachan', 'other' => '{0} unnsa'], '{0} unnsa', '{0}oz'),
    'percent' => new U('{0} sa cheud', '{0}%', '{0}%'),
    'petabyte' => new U(['one' => '{0} pheta-baidht', 'two' => '{0} pheta-baidht', 'few' => '{0} peta-baidhtean', 'other' => '{0} peta-baidht'], '{0} PB', '{0}PB'),
    'pound' => new U(['one' => '{0} phunnd', 'two' => '{0} phunnd', 'few' => '{0} puinnd', 'other' => '{0} punnd'], '{0} lb', '{0}lb'),
    'second' => new U(['two' => '{0} dhiog', 'few' => '{0} diogan', 'other' => '{0} diog'], ['two' => '{0} dhiog', 'other' => '{0} diog'], '{0}d'),
    'stone' => new U(['one' => '{0} chlach', 'two' => '{0} chlach', 'few' => '{0} clachan', 'other' => '{0} clach'], ['one' => '{0} chlach', 'two' => '{0} chlach', 'other' => '{0} clach'], '{0}clach'),
    'terabit' => new U(['two' => '{0} thera-biod', 'few' => '{0} tera-biodan', 'other' => '{0} tera-biod'], '{0} Tb', '{0}Tb'),
    'terabyte' => new U(['two' => '{0} thera-baidht', 'few' => '{0} tera-baidhtean', 'other' => '{0} tera-baidht'], '{0} TB', '{0}TB'),
    'week' => new U(['two' => '{0} sheachdain', 'few' => '{0} seachdainean', 'other' => '{0} seachdain'], ['one' => '{0} shn', 'two' => '{0} shn', 'other' => '{0} sn'], '{0}s'),
    'yard' => new U(['two' => '{0} shlat', 'few' => '{0} slatan', 'other' => '{0} slat'], ['two' => '{0} shlat', 'other' => '{0} slat'], '{0}yd'),
    'year' => new U(['one' => '{0} bhliadhna', 'two' => '{0} bhliadhna', 'few' => '{0} bliadhnaichean', 'other' => '{0} bliadhna'], ['one' => '{0} bhlia', 'two' => '{0} bhlia', 'other' => '{0} blia'], '{0}bl'),
];