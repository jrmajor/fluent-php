<?php

use Major\Fluent\Formatters\Number\Locale\Unit as U;

return [
    'bit' => new U(['other' => '{0} àwɔ́n bíìtì'], ['other' => '{0} bíìtì'], ['other' => '{0}bíìtì']),
    'byte' => new U(['other' => '{0} àwɔ́n báìtì'], ['other' => '{0} báìtì'], ['other' => '{0}B']),
    'day' => new U(['other' => 'ɔj {0}'], ['other' => '{0} ɔj'], ['other' => 'ɔj {0}']),
    'gigabit' => new U(['other' => '{0} àwɔn gígábíìtì'], ['other' => '{0}jíbíìtì'], ['other' => '{0}Gb']),
    'gigabyte' => new U(['other' => '{0} àwɔn gígábáìtì'], ['other' => '{0} jíbáìtì'], ['other' => '{0}GB']),
    'kilobit' => new U(['other' => '{0} àwɔ́n kílóbíìtì'], ['other' => '{0} kébiì'], ['other' => '{0}kb']),
    'kilobyte' => new U(['other' => '{0} àwɔn kílóbáìtì'], ['other' => '{0} kébáìtì'], ['other' => '{0}kB']),
    'megabit' => new U(['other' => '{0} àwɔn mégábíìtì'], ['other' => '{0} ɛ́mbiì'], ['other' => '{0}Mb']),
    'megabyte' => new U(['other' => '{0} àwɔn mégábáìtì'], ['other' => '{0} MB'], ['other' => '{0}MB']),
    'minute' => new U(['other' => '{0} ìsh'], ['other' => '{0} ìsh'], ['other' => '{0}/ìsh']),
    'month' => new U(['other' => '{0} oshù'], ['other' => '{0} oshù'], ['other' => '{0} oshù']),
    'petabyte' => new U(['other' => '{0} àwɔn pɛ́tábáìtì'], ['other' => '{0} Píbáìtì'], ['other' => '{0}PB']),
    'second' => new U(['other' => '{0}ìsh àáy'], ['other' => '{0} ìsh àáy'], ['other' => '{0} ìsh àáy']),
    'terabit' => new U(['other' => '{0} àwɔn tɛ́rábíìtì'], ['other' => '{0} Tb'], ['other' => '{0}Tb']),
    'terabyte' => new U(['other' => '{0} àwɔn tɛ́rábáìtì'], ['other' => '{0} Tíbáìtì'], ['other' => '{0}TB']),
    'week' => new U(['other' => '{0} ɔsh'], ['other' => '{0} ɔsh'], ['other' => '{0} ɔsh']),
    'year' => new U(['other' => '{0} ɔd'], ['other' => '{0} ɔd'], ['other' => '{0} ɔd']),
];
