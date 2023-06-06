<?php

use Major\Fluent\Formatters\Number\Locale\Unit as U;

return [
    'kilometer' => new U(name: 'length-kilometer', long: ['name' => 'ciliméadair', 'plurals' => ['one' => '{0} chiliméadar', 'two' => '{0} chiliméadar', 'few' => '{0} chiliméadar', 'many' => '{0} gciliméadar', 'other' => '{0} ciliméadar'], 'perUnit' => '{0} sa chiliméadar'], short: ['name' => 'km', 'plurals' => ['one' => '{0} km', 'two' => '{0} km', 'few' => '{0} km', 'many' => '{0} km', 'other' => '{0} km'], 'perUnit' => '{0}/km'], narrow: ['name' => 'km', 'plurals' => ['one' => '{0}km', 'two' => '{0}km', 'few' => '{0}km', 'many' => '{0}km', 'other' => '{0}km'], 'perUnit' => '{0}/km']),
    'degree' => new U(name: 'angle-degree', long: ['name' => 'céimeanna', 'plurals' => ['one' => '{0} chéim', 'two' => '{0} chéim', 'few' => '{0} chéim', 'many' => '{0} gcéim', 'other' => '{0} céim'], 'perUnit' => ''], short: ['name' => 'céimeanna', 'plurals' => ['one' => '{0}°', 'two' => '{0}°', 'few' => '{0}°', 'many' => '{0}°', 'other' => '{0}°'], 'perUnit' => ''], narrow: ['name' => 'céim', 'plurals' => ['one' => '{0}°', 'two' => '{0}°', 'few' => '{0}°', 'many' => '{0}°', 'other' => '{0}°'], 'perUnit' => '']),
    'acre' => new U(name: 'area-acre', long: ['name' => 'acraí', 'plurals' => ['one' => '{0} acra', 'two' => '{0} acra', 'few' => '{0} acra', 'many' => '{0} n-acra', 'other' => '{0} acra'], 'perUnit' => ''], short: ['name' => 'acraí', 'plurals' => ['one' => '{0} ac', 'two' => '{0} ac', 'few' => '{0} ac', 'many' => '{0} ac', 'other' => '{0} ac'], 'perUnit' => ''], narrow: ['name' => 'acraí', 'plurals' => ['one' => '{0} ac', 'two' => '{0} ac', 'few' => '{0} ac', 'many' => '{0} ac', 'other' => '{0} ac'], 'perUnit' => '']),
    'hectare' => new U(name: 'area-hectare', long: ['name' => 'heicteáir', 'plurals' => ['one' => '{0} heicteár', 'two' => '{0} heicteár', 'few' => '{0} heicteár', 'many' => '{0} heicteár', 'other' => '{0} heicteár'], 'perUnit' => ''], short: ['name' => 'heicteáir', 'plurals' => ['one' => '{0} ha', 'two' => '{0} ha', 'few' => '{0} ha', 'many' => '{0} ha', 'other' => '{0} ha'], 'perUnit' => ''], narrow: ['name' => 'heicteáir', 'plurals' => ['one' => '{0} ha', 'two' => '{0} ha', 'few' => '{0} ha', 'many' => '{0} ha', 'other' => '{0} ha'], 'perUnit' => '']),
    'percent' => new U(name: 'concentr-percent', long: ['name' => 'faoin gcéad', 'plurals' => ['one' => '{0} faoin gcéad', 'two' => '{0}%', 'few' => '{0}%', 'many' => '{0}%', 'other' => '{0} faoin gcéad'], 'perUnit' => ''], short: ['name' => 'faoin gcéad', 'plurals' => ['one' => '{0}%', 'two' => '{0}%', 'few' => '{0}%', 'many' => '{0}%', 'other' => '{0}%'], 'perUnit' => ''], narrow: ['name' => '%', 'plurals' => ['one' => '{0}%', 'two' => '{0}%', 'few' => '{0}%', 'many' => '{0}%', 'other' => '{0}%'], 'perUnit' => '']),
    'bit' => new U(name: 'digital-bit', long: ['name' => 'giotáin', 'plurals' => ['one' => '{0} ghiotán', 'two' => '{0} ghiotán', 'few' => '{0} ghiotán', 'many' => '{0} ngiotán', 'other' => '{0} giotán'], 'perUnit' => ''], short: ['name' => 'giotán', 'plurals' => ['one' => '{0} ghiotán', 'two' => '{0} ghiotán', 'few' => '{0} ghiotán', 'many' => '{0} ngiotán', 'other' => '{0} giotán'], 'perUnit' => ''], narrow: ['name' => 'giotán', 'plurals' => ['one' => '{0} ghiot.', 'two' => '{0} ghiot.', 'few' => '{0} ghiot.', 'many' => '{0} ngiot.', 'other' => '{0} giot.'], 'perUnit' => '']),
    'byte' => new U(name: 'digital-byte', long: ['name' => 'bearta', 'plurals' => ['one' => '{0} bheart', 'two' => '{0} bheart', 'few' => '{0} bheart', 'many' => '{0} mbeart', 'other' => '{0} beart'], 'perUnit' => ''], short: ['name' => 'bearta', 'plurals' => ['one' => '{0} bheart', 'two' => '{0} bheart', 'few' => '{0} bheart', 'many' => '{0} mbeart', 'other' => '{0} beart'], 'perUnit' => ''], narrow: ['name' => 'bearta', 'plurals' => ['one' => '{0}B', 'two' => '{0}B', 'few' => '{0}B', 'many' => '{0}B', 'other' => '{0}B'], 'perUnit' => '']),
    'gigabit' => new U(name: 'digital-gigabit', long: ['name' => 'gigighiotáin', 'plurals' => ['one' => '{0} ghigighiotán', 'two' => '{0} ghigighiotán', 'few' => '{0} ghigighiotán', 'many' => '{0} ngigighiotán', 'other' => '{0} gigighiotán'], 'perUnit' => ''], short: ['name' => 'Gb', 'plurals' => ['one' => '{0} Gb', 'two' => '{0} Gb', 'few' => '{0} Gb', 'many' => '{0} Gb', 'other' => '{0} Gb'], 'perUnit' => ''], narrow: ['name' => 'Gb', 'plurals' => ['one' => '{0}Gb', 'two' => '{0}Gb', 'few' => '{0}Gb', 'many' => '{0}Gb', 'other' => '{0}Gb'], 'perUnit' => '']),
    'gigabyte' => new U(name: 'digital-gigabyte', long: ['name' => 'gigibhearta', 'plurals' => ['one' => '{0} ghigibheart', 'two' => '{0} ghigibheart', 'few' => '{0} ghigibheart', 'many' => '{0} ngigibheart', 'other' => '{0} gigibheart'], 'perUnit' => ''], short: ['name' => 'GB', 'plurals' => ['one' => '{0} GB', 'two' => '{0} GB', 'few' => '{0} GB', 'many' => '{0} GB', 'other' => '{0} GB'], 'perUnit' => ''], narrow: ['name' => 'GB', 'plurals' => ['one' => '{0}GB', 'two' => '{0}GB', 'few' => '{0}GB', 'many' => '{0}GB', 'other' => '{0}GB'], 'perUnit' => '']),
    'kilobit' => new U(name: 'digital-kilobit', long: ['name' => 'cilighiotáin', 'plurals' => ['one' => '{0} chilighiotán', 'two' => '{0} chilighiotán', 'few' => '{0} chilighiotán', 'many' => '{0} gcilighiotán', 'other' => '{0} cilighiotán'], 'perUnit' => ''], short: ['name' => 'kb', 'plurals' => ['one' => '{0} kb', 'two' => '{0} kb', 'few' => '{0} kb', 'many' => '{0} kb', 'other' => '{0} kb'], 'perUnit' => ''], narrow: ['name' => 'kb', 'plurals' => ['one' => '{0}kb', 'two' => '{0}kb', 'few' => '{0}kb', 'many' => '{0}kb', 'other' => '{0}kb'], 'perUnit' => '']),
    'kilobyte' => new U(name: 'digital-kilobyte', long: ['name' => 'cilibhearta', 'plurals' => ['one' => '{0} chilibheart', 'two' => '{0} chilibheart', 'few' => '{0} chilibheart', 'many' => '{0} gcilibheart', 'other' => '{0} cilibheart'], 'perUnit' => ''], short: ['name' => 'kB', 'plurals' => ['one' => '{0} kB', 'two' => '{0} kB', 'few' => '{0} kB', 'many' => '{0} kB', 'other' => '{0} kB'], 'perUnit' => ''], narrow: ['name' => 'kB', 'plurals' => ['one' => '{0}kB', 'two' => '{0}kB', 'few' => '{0}kB', 'many' => '{0}kB', 'other' => '{0}kB'], 'perUnit' => '']),
    'megabit' => new U(name: 'digital-megabit', long: ['name' => 'meigighiotáin', 'plurals' => ['one' => '{0} mheigighiotán', 'two' => '{0} mheigighiotán', 'few' => '{0} mheigighiotán', 'many' => '{0} meigighiotán', 'other' => '{0} meigighiotán'], 'perUnit' => ''], short: ['name' => 'Mb', 'plurals' => ['one' => '{0} Mb', 'two' => '{0} Mb', 'few' => '{0} Mb', 'many' => '{0} Mb', 'other' => '{0} Mb'], 'perUnit' => ''], narrow: ['name' => 'Mb', 'plurals' => ['one' => '{0}Mb', 'two' => '{0}Mb', 'few' => '{0}Mb', 'many' => '{0}Mb', 'other' => '{0}Mb'], 'perUnit' => '']),
    'megabyte' => new U(name: 'digital-megabyte', long: ['name' => 'meigibhearta', 'plurals' => ['one' => '{0} mheigibheart', 'two' => '{0} mheigibheart', 'few' => '{0} mheigibheart', 'many' => '{0} meigibheart', 'other' => '{0} meigibheart'], 'perUnit' => ''], short: ['name' => 'MB', 'plurals' => ['one' => '{0} MB', 'two' => '{0} MB', 'few' => '{0} MB', 'many' => '{0} MB', 'other' => '{0} MB'], 'perUnit' => ''], narrow: ['name' => 'MB', 'plurals' => ['one' => '{0}MB', 'two' => '{0}MB', 'few' => '{0}MB', 'many' => '{0}MB', 'other' => '{0}MB'], 'perUnit' => '']),
    'petabyte' => new U(name: 'digital-petabyte', long: ['name' => 'peitibhearta', 'plurals' => ['one' => '{0} peitibheart', 'two' => '{0} PB', 'few' => '{0} PB', 'many' => '{0} PB', 'other' => '{0} petabytes'], 'perUnit' => ''], short: ['name' => 'PBheart', 'plurals' => ['one' => '{0} PB', 'two' => '{0} PB', 'few' => '{0} PB', 'many' => '{0} PB', 'other' => '{0} PB'], 'perUnit' => ''], narrow: ['name' => 'PBheart', 'plurals' => ['one' => '{0} PB', 'two' => '{0} PB', 'few' => '{0} PB', 'many' => '{0} PB', 'other' => '{0} PB'], 'perUnit' => '']),
    'terabit' => new U(name: 'digital-terabit', long: ['name' => 'teirighiotáin', 'plurals' => ['one' => '{0} teirighiotán', 'two' => '{0} theirighiotán', 'few' => '{0} theirighiotán', 'many' => '{0} dteirighiotán', 'other' => '{0} teirighiotán'], 'perUnit' => ''], short: ['name' => 'Tb', 'plurals' => ['one' => '{0} Tb', 'two' => '{0} Tb', 'few' => '{0} Tb', 'many' => '{0} Tb', 'other' => '{0} Tb'], 'perUnit' => ''], narrow: ['name' => 'Tb', 'plurals' => ['one' => '{0}Tb', 'two' => '{0}Tb', 'few' => '{0}Tb', 'many' => '{0}Tb', 'other' => '{0}Tb'], 'perUnit' => '']),
    'terabyte' => new U(name: 'digital-terabyte', long: ['name' => 'teiribhearta', 'plurals' => ['one' => '{0} teiribheart', 'two' => '{0} theiribheart', 'few' => '{0} theiribheart', 'many' => '{0} dteiribheart', 'other' => '{0} teiribheart'], 'perUnit' => ''], short: ['name' => 'TB', 'plurals' => ['one' => '{0} TB', 'two' => '{0} TB', 'few' => '{0} TB', 'many' => '{0} TB', 'other' => '{0} TB'], 'perUnit' => ''], narrow: ['name' => 'TB', 'plurals' => ['one' => '{0}TB', 'two' => '{0}TB', 'few' => '{0}TB', 'many' => '{0}TB', 'other' => '{0}TB'], 'perUnit' => '']),
    'day' => new U(name: 'duration-day', long: ['name' => 'laethanta', 'plurals' => ['one' => '{0} lá', 'two' => '{0} lá', 'few' => '{0} lá', 'many' => '{0} lá', 'other' => '{0} lá'], 'perUnit' => '{0} sa lá'], short: ['name' => 'lá', 'plurals' => ['one' => '{0} lá', 'two' => '{0} lá', 'few' => '{0} lá', 'many' => '{0} lá', 'other' => '{0} lá'], 'perUnit' => '{0}/lá'], narrow: ['name' => 'lá', 'plurals' => ['one' => '{0}l', 'two' => '{0}l', 'few' => '{0}l', 'many' => '{0}l', 'other' => '{0}l'], 'perUnit' => '{0}/lá']),
    'hour' => new U(name: 'duration-hour', long: ['name' => 'uaireanta', 'plurals' => ['one' => '{0} uair', 'two' => '{0} uair', 'few' => '{0} huaire', 'many' => '{0} n-uaire', 'other' => '{0} uair'], 'perUnit' => '{0} san uair'], short: ['name' => 'uair', 'plurals' => ['one' => '{0} u', 'two' => '{0} u', 'few' => '{0} u', 'many' => '{0} u', 'other' => '{0} u'], 'perUnit' => '{0}/u'], narrow: ['name' => 'uair', 'plurals' => ['one' => '{0}u', 'two' => '{0}u', 'few' => '{0}u', 'many' => '{0}u', 'other' => '{0}u'], 'perUnit' => '{0}/u']),
    'millisecond' => new U(name: 'duration-millisecond', long: ['name' => 'milleasoicindí', 'plurals' => ['one' => '{0} mhilleasoicind', 'two' => '{0} mhilleasoicind', 'few' => '{0} mhilleasoicind', 'many' => '{0} milleasoicind', 'other' => '{0} milleasoicind'], 'perUnit' => ''], short: ['name' => 'msoic', 'plurals' => ['one' => '{0} ms', 'two' => '{0} ms', 'few' => '{0} ms', 'many' => '{0} ms', 'other' => '{0} ms'], 'perUnit' => ''], narrow: ['name' => 'ms', 'plurals' => ['one' => '{0}ms', 'two' => '{0}ms', 'few' => '{0}ms', 'many' => '{0}ms', 'other' => '{0}ms'], 'perUnit' => '']),
    'minute' => new U(name: 'duration-minute', long: ['name' => 'nóiméid', 'plurals' => ['one' => '{0} nóiméad', 'two' => '{0} nóiméad', 'few' => '{0} nóiméad', 'many' => '{0} nóiméad', 'other' => '{0} nóiméad'], 'perUnit' => '{0} sa nóiméad'], short: ['name' => 'nóim', 'plurals' => ['one' => '{0} nóim', 'two' => '{0} nóim', 'few' => '{0} nóim', 'many' => '{0} nóim', 'other' => '{0} nóim'], 'perUnit' => '{0}/nóim'], narrow: ['name' => 'nóim', 'plurals' => ['one' => '{0}n', 'two' => '{0}n', 'few' => '{0}n', 'many' => '{0}n', 'other' => '{0}n'], 'perUnit' => '{0}/nóim']),
    'month' => new U(name: 'duration-month', long: ['name' => 'míonna', 'plurals' => ['one' => '{0} mhí', 'two' => '{0} mhí', 'few' => '{0} mhí', 'many' => '{0} mí', 'other' => '{0} mí'], 'perUnit' => '{0} sa mhí'], short: ['name' => 'míonna', 'plurals' => ['one' => '{0} mhí', 'two' => '{0} mhí', 'few' => '{0} mhí', 'many' => '{0} mí', 'other' => '{0} mí'], 'perUnit' => '{0}/mí'], narrow: ['name' => 'mí', 'plurals' => ['one' => '{0}m', 'two' => '{0}m', 'few' => '{0}m', 'many' => '{0}m', 'other' => '{0}m'], 'perUnit' => '{0}/mí']),
    'second' => new U(name: 'duration-second', long: ['name' => 'soicindí', 'plurals' => ['one' => '{0} soicind', 'two' => '{0} shoicind', 'few' => '{0} shoicind', 'many' => '{0} soicind', 'other' => '{0} soicind'], 'perUnit' => '{0} sa soicind'], short: ['name' => 'soic', 'plurals' => ['one' => '{0} soic', 'two' => '{0} shoic', 'few' => '{0} shoic', 'many' => '{0} soic', 'other' => '{0} soic'], 'perUnit' => '{0}/s'], narrow: ['name' => 'soic', 'plurals' => ['one' => '{0}s', 'two' => '{0}s', 'few' => '{0}s', 'many' => '{0}s', 'other' => '{0}s'], 'perUnit' => '{0}/s']),
    'week' => new U(name: 'duration-week', long: ['name' => 'seachtainí', 'plurals' => ['one' => '{0} seachtain', 'two' => '{0} sheachtain', 'few' => '{0} seachtaine', 'many' => '{0} seachtaine', 'other' => '{0} seachtain'], 'perUnit' => '{0} sa tseachtain'], short: ['name' => 'scht', 'plurals' => ['one' => '{0} scht', 'two' => '{0} scht', 'few' => '{0} scht', 'many' => '{0} scht', 'other' => '{0} scht'], 'perUnit' => '{0}/scht'], narrow: ['name' => 'scht', 'plurals' => ['one' => '{0}s', 'two' => '{0}s', 'few' => '{0}s', 'many' => '{0}s', 'other' => '{0}s'], 'perUnit' => '{0}/scht']),
    'year' => new U(name: 'duration-year', long: ['name' => 'blianta', 'plurals' => ['one' => '{0} bhliain', 'two' => '{0} bhliain', 'few' => '{0} bliana', 'many' => '{0} mbliana', 'other' => '{0} bliain'], 'perUnit' => '{0} sa bhliain'], short: ['name' => 'blianta', 'plurals' => ['one' => '{0} bhl', 'two' => '{0} bhl', 'few' => '{0} bl', 'many' => '{0} mbl', 'other' => '{0} bl'], 'perUnit' => '{0}/bl'], narrow: ['name' => 'bl', 'plurals' => ['one' => '{0}b', 'two' => '{0}b', 'few' => '{0}b', 'many' => '{0}b', 'other' => '{0}b'], 'perUnit' => '{0}/bl']),
    'centimeter' => new U(name: 'length-centimeter', long: ['name' => 'ceintiméadair', 'plurals' => ['one' => '{0} cheintiméadar', 'two' => '{0} cheintiméadar', 'few' => '{0} cheintiméadar', 'many' => '{0} gceintiméadar', 'other' => '{0} ceintiméadar'], 'perUnit' => '{0} sa cheintiméadar'], short: ['name' => 'cm', 'plurals' => ['one' => '{0} cm', 'two' => '{0} cm', 'few' => '{0} cm', 'many' => '{0} cm', 'other' => '{0} cm'], 'perUnit' => '{0}/cm'], narrow: ['name' => 'cm', 'plurals' => ['one' => '{0}cm', 'two' => '{0}cm', 'few' => '{0}cm', 'many' => '{0}cm', 'other' => '{0}cm'], 'perUnit' => '{0}/cm']),
    'foot' => new U(name: 'length-foot', long: ['name' => 'troithe', 'plurals' => ['one' => '{0} troigh', 'two' => '{0} throigh', 'few' => '{0} throigh', 'many' => '{0} dtroigh', 'other' => '{0} troigh'], 'perUnit' => '{0} sa troigh'], short: ['name' => 'troithe', 'plurals' => ['one' => '{0} tr.', 'two' => '{0} thr.', 'few' => '{0} thr.', 'many' => '{0} dtr.', 'other' => '{0} tr.'], 'perUnit' => '{0}/tr.'], narrow: ['name' => 'tr', 'plurals' => ['one' => '{0}′', 'two' => '{0}′', 'few' => '{0}′', 'many' => '{0}′', 'other' => '{0}′'], 'perUnit' => '{0}/tr.']),
    'inch' => new U(name: 'length-inch', long: ['name' => 'orlaí', 'plurals' => ['one' => '{0} orlach', 'two' => '{0} orlach', 'few' => '{0} orlach', 'many' => '{0} n-orlach', 'other' => '{0} orlach'], 'perUnit' => '{0} san orlach'], short: ['name' => 'orlaí', 'plurals' => ['one' => '{0} or.', 'two' => '{0} or.', 'few' => '{0} or.', 'many' => '{0} n-or.', 'other' => '{0} or.'], 'perUnit' => '{0}/or.'], narrow: ['name' => 'orlaí', 'plurals' => ['one' => '{0}″', 'two' => '{0}″', 'few' => '{0}″', 'many' => '{0}″', 'other' => '{0}″'], 'perUnit' => '{0}/or.']),
    'meter' => new U(name: 'length-meter', long: ['name' => 'méadair', 'plurals' => ['one' => '{0} mhéadar', 'two' => '{0} mhéadar', 'few' => '{0} mhéadar', 'many' => '{0} méadar', 'other' => '{0} méadar'], 'perUnit' => '{0} sa mhéadar'], short: ['name' => 'méadair', 'plurals' => ['one' => '{0} m', 'two' => '{0} m', 'few' => '{0} m', 'many' => '{0} m', 'other' => '{0} m'], 'perUnit' => '{0}/m'], narrow: ['name' => 'méadar', 'plurals' => ['one' => '{0}m', 'two' => '{0}m', 'few' => '{0}m', 'many' => '{0}m', 'other' => '{0}m'], 'perUnit' => '{0}/m']),
    'mile-scandinavian' => new U(name: 'length-mile-scandinavian', long: ['name' => 'míle Lochlannach', 'plurals' => ['one' => '{0} mhíle Lochlannach', 'two' => '{0} mhíle Lochlannacha', 'few' => '{0} mhíle Lochlannacha', 'many' => '{0} míle Lochlannacha', 'other' => '{0} míle Lochlannach'], 'perUnit' => ''], short: ['name' => 'míle Lochl.', 'plurals' => ['one' => '{0} míle Lch', 'two' => '{0} mhíle Lch', 'few' => '{0} mhíle Lch', 'many' => '{0} míle Lch', 'other' => '{0} míle Lch'], 'perUnit' => ''], narrow: ['name' => 'míle Lochl.', 'plurals' => ['one' => '{0} m lch', 'two' => '{0} mh lch', 'few' => '{0} m lch', 'many' => '{0} m lch', 'other' => '{0} m lch'], 'perUnit' => '']),
    'mile' => new U(name: 'length-mile', long: ['name' => 'mílte', 'plurals' => ['one' => '{0} mhíle', 'two' => '{0} mhíle', 'few' => '{0} mhíle', 'many' => '{0} míle', 'other' => '{0} míle'], 'perUnit' => ''], short: ['name' => 'mílte', 'plurals' => ['one' => '{0} mhíle', 'two' => '{0} mhíle', 'few' => '{0} mhíle', 'many' => '{0} míle', 'other' => '{0} mi'], 'perUnit' => ''], narrow: ['name' => 'mílte', 'plurals' => ['one' => '{0} mhíle', 'two' => '{0} mhíle', 'few' => '{0} mhíle', 'many' => '{0} míle', 'other' => '{0} míle'], 'perUnit' => '']),
    'millimeter' => new U(name: 'length-millimeter', long: ['name' => 'milliméadair', 'plurals' => ['one' => '{0} mhilliméadar', 'two' => '{0} mhilliméadar', 'few' => '{0} mhilliméadar', 'many' => '{0} milliméadar', 'other' => '{0} milliméadar'], 'perUnit' => ''], short: ['name' => 'mm', 'plurals' => ['one' => '{0} mm', 'two' => '{0} mm', 'few' => '{0} mm', 'many' => '{0} mm', 'other' => '{0} mm'], 'perUnit' => ''], narrow: ['name' => 'mm', 'plurals' => ['one' => '{0}mm', 'two' => '{0}mm', 'few' => '{0}mm', 'many' => '{0}mm', 'other' => '{0}mm'], 'perUnit' => '']),
    'yard' => new U(name: 'length-yard', long: ['name' => 'slata', 'plurals' => ['one' => '{0} slat', 'two' => '{0} shlat', 'few' => '{0} shlat', 'many' => '{0} slat', 'other' => '{0} slat'], 'perUnit' => ''], short: ['name' => 'slata', 'plurals' => ['one' => '{0} sl.', 'two' => '{0} shl.', 'few' => '{0} shl.', 'many' => '{0} sl.', 'other' => '{0} sl.'], 'perUnit' => ''], narrow: ['name' => 'sl', 'plurals' => ['one' => '{0}sl', 'two' => '{0}sl', 'few' => '{0}sl', 'many' => '{0}sl', 'other' => '{0}sl'], 'perUnit' => '']),
    'gram' => new U(name: 'mass-gram', long: ['name' => 'graim', 'plurals' => ['one' => '{0} ghram', 'two' => '{0} ghram', 'few' => '{0} ghram', 'many' => '{0} ngram', 'other' => '{0} gram'], 'perUnit' => '{0} sa ghram'], short: ['name' => 'graim', 'plurals' => ['one' => '{0} g', 'two' => '{0} g', 'few' => '{0} g', 'many' => '{0} g', 'other' => '{0} g'], 'perUnit' => '{0}/g'], narrow: ['name' => 'gram', 'plurals' => ['one' => '{0}g', 'two' => '{0}g', 'few' => '{0}g', 'many' => '{0}g', 'other' => '{0}g'], 'perUnit' => '{0}/g']),
    'kilogram' => new U(name: 'mass-kilogram', long: ['name' => 'cileagraim', 'plurals' => ['one' => '{0} chileagram', 'two' => '{0} chileagram', 'few' => '{0} chileagram', 'many' => '{0} gcileagram', 'other' => '{0} cileagram'], 'perUnit' => '{0} sa chileagram'], short: ['name' => 'kg', 'plurals' => ['one' => '{0} kg', 'two' => '{0} kg', 'few' => '{0} kg', 'many' => '{0} kg', 'other' => '{0} kg'], 'perUnit' => '{0}/kg'], narrow: ['name' => 'kg', 'plurals' => ['one' => '{0}kg', 'two' => '{0}kg', 'few' => '{0}kg', 'many' => '{0}kg', 'other' => '{0}kg'], 'perUnit' => '{0}/kg']),
    'ounce' => new U(name: 'mass-ounce', long: ['name' => 'unsaí', 'plurals' => ['one' => '{0} unsa', 'two' => '{0} unsa', 'few' => '{0} unsa', 'many' => '{0} n-unsa', 'other' => '{0} unsa'], 'perUnit' => '{0} san unsa'], short: ['name' => 'unsa', 'plurals' => ['one' => '{0} unsa', 'two' => '{0} unsa', 'few' => '{0} unsa', 'many' => '{0} n-unsa', 'other' => '{0} unsa'], 'perUnit' => '{0}/unsa'], narrow: ['name' => 'unsa', 'plurals' => ['one' => '{0} unsa', 'two' => '{0} unsa', 'few' => '{0} unsa', 'many' => '{0} n-unsa', 'other' => '{0} unsa'], 'perUnit' => '{0}/unsa']),
    'pound' => new U(name: 'mass-pound', long: ['name' => 'puint', 'plurals' => ['one' => '{0} phunt', 'two' => '{0} phunt', 'few' => '{0} phunt', 'many' => '{0} bpunt', 'other' => '{0} punt'], 'perUnit' => '{0} sa phunt'], short: ['name' => 'puint', 'plurals' => ['one' => '{0} phunt', 'two' => '{0} phunt', 'few' => '{0} phunt', 'many' => '{0} bpunt', 'other' => '{0} punt'], 'perUnit' => '{0}/punt'], narrow: ['name' => 'puint', 'plurals' => ['one' => '{0} phunt', 'two' => '{0} phunt', 'few' => '{0} phunt', 'many' => '{0} bpunt', 'other' => '{0} punt'], 'perUnit' => '{0}/punt']),
    'stone' => new U(name: 'mass-stone', long: ['name' => 'clocha', 'plurals' => ['one' => '{0} chloch', 'two' => '{0} chloch', 'few' => '{0} chloch', 'many' => '{0} gcloch', 'other' => '{0} cloch'], 'perUnit' => ''], short: ['name' => 'clocha', 'plurals' => ['one' => '{0} chl.', 'two' => '{0} chl.', 'few' => '{0} chl.', 'many' => '{0} gcl.', 'other' => '{0} cl.'], 'perUnit' => ''], narrow: ['name' => 'cloch', 'plurals' => ['one' => '{0} chl.', 'two' => '{0} chl.', 'few' => '{0} chl.', 'many' => '{0} gcl.', 'other' => '{0} cl.'], 'perUnit' => '']),
    'celsius' => new U(name: 'temperature-celsius', long: ['name' => 'céimeanna Celsius', 'plurals' => ['one' => '{0} chéim Celsius', 'two' => '{0} chéim Celsius', 'few' => '{0} chéim Celsius', 'many' => '{0} gcéim Celsius', 'other' => '{0} céim Celsius'], 'perUnit' => ''], short: ['name' => '°C', 'plurals' => ['one' => '{0}°C', 'two' => '{0}°C', 'few' => '{0}°C', 'many' => '{0}°C', 'other' => '{0}°C'], 'perUnit' => ''], narrow: ['name' => '°C', 'plurals' => ['one' => '{0}°C', 'two' => '{0}°C', 'few' => '{0}°C', 'many' => '{0}°C', 'other' => '{0}°C'], 'perUnit' => '']),
    'fahrenheit' => new U(name: 'temperature-fahrenheit', long: ['name' => 'céimeanna Fahrenheit', 'plurals' => ['one' => '{0} chéim Fahrenheit', 'two' => '{0} chéim Fahrenheit', 'few' => '{0} chéim Fahrenheit', 'many' => '{0} gcéim Fahrenheit', 'other' => '{0} céim Fahrenheit'], 'perUnit' => ''], short: ['name' => '°F', 'plurals' => ['one' => '{0}°F', 'two' => '{0}°F', 'few' => '{0}°F', 'many' => '{0}°F', 'other' => '{0}°F'], 'perUnit' => ''], narrow: ['name' => '°F', 'plurals' => ['one' => '{0}°F', 'two' => '{0}°F', 'few' => '{0}°F', 'many' => '{0}°F', 'other' => '{0}°F'], 'perUnit' => '']),
    'fluid-ounce' => new U(name: 'volume-fluid-ounce', long: ['name' => 'unsaí leachtacha', 'plurals' => ['one' => '{0} unsa leachtach', 'two' => '{0} unsa leachtacha', 'few' => '{0} unsa leachtacha', 'many' => '{0} n-unsa leachtacha', 'other' => '{0} unsa leachtach'], 'perUnit' => ''], short: ['name' => 'unsaí leacht.', 'plurals' => ['one' => '{0} unsa l.', 'two' => '{0} unsa l.', 'few' => '{0} unsa l.', 'many' => '{0} n-unsa l.', 'other' => '{0} unsa l.'], 'perUnit' => ''], narrow: ['name' => 'unsaí leacht.', 'plurals' => ['one' => '{0} unsa l.', 'two' => '{0} unsa l.', 'few' => '{0} unsa l.', 'many' => '{0} unsa l.', 'other' => '{0} unsa l.'], 'perUnit' => '']),
    'gallon' => new U(name: 'volume-gallon', long: ['name' => 'galúin', 'plurals' => ['one' => '{0} ghalún', 'two' => '{0} ghalún', 'few' => '{0} ghalún', 'many' => '{0} ngalún', 'other' => '{0} galún'], 'perUnit' => '{0} sa ghalún'], short: ['name' => 'galúin', 'plurals' => ['one' => '{0} ghal.', 'two' => '{0} ghal.', 'few' => '{0} ghal.', 'many' => '{0} ngal.', 'other' => '{0} gal.'], 'perUnit' => '{0}/gal.'], narrow: ['name' => 'galúin', 'plurals' => ['one' => '{0} ghal.', 'two' => '{0} ghal.', 'few' => '{0} ghal.', 'many' => '{0} ngal.', 'other' => '{0} gal.'], 'perUnit' => '{0}/gal.']),
    'liter' => new U(name: 'volume-liter', long: ['name' => 'lítir', 'plurals' => ['one' => '{0} lítear', 'two' => '{0} lítear', 'few' => '{0} lítear', 'many' => '{0} lítear', 'other' => '{0} lítear'], 'perUnit' => '{0} sa lítear'], short: ['name' => 'lítir', 'plurals' => ['one' => '{0} l', 'two' => '{0} l', 'few' => '{0} l', 'many' => '{0} l', 'other' => '{0} l'], 'perUnit' => '{0}/l'], narrow: ['name' => 'lítir', 'plurals' => ['one' => '{0}l', 'two' => '{0}l', 'few' => '{0}l', 'many' => '{0}l', 'other' => '{0}l'], 'perUnit' => '{0}/l']),
    'milliliter' => new U(name: 'volume-milliliter', long: ['name' => 'millilítir', 'plurals' => ['one' => '{0} mhillilítear', 'two' => '{0} mhillilítear', 'few' => '{0} mhillilítear', 'many' => '{0} millilítear', 'other' => '{0} millilítear'], 'perUnit' => ''], short: ['name' => 'ml', 'plurals' => ['one' => '{0} ml', 'two' => '{0} ml', 'few' => '{0} ml', 'many' => '{0} ml', 'other' => '{0} ml'], 'perUnit' => ''], narrow: ['name' => 'ml', 'plurals' => ['one' => '{0} ml', 'two' => '{0} ml', 'few' => '{0} ml', 'many' => '{0} ml', 'other' => '{0} ml'], 'perUnit' => '']),
];
