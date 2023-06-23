<?php

use Major\Fluent\Formatters\Number\Locale\Unit as U;

return [
    'bit' => new U('{0} àwɔ́n bíìtì', '{0} bíìtì', '{0}bíìtì'),
    'byte' => new U('{0} àwɔ́n báìtì', '{0} báìtì', '{0}B'),
    'day' => new U('ɔj {0}', '{0} ɔj', 'ɔj {0}'),
    'gigabit' => new U('{0} àwɔn gígábíìtì', '{0}jíbíìtì', '{0}Gb'),
    'gigabyte' => new U('{0} àwɔn gígábáìtì', '{0} jíbáìtì', '{0}GB'),
    'kilobit' => new U('{0} àwɔ́n kílóbíìtì', '{0} kébiì', '{0}kb'),
    'kilobyte' => new U('{0} àwɔn kílóbáìtì', '{0} kébáìtì', '{0}kB'),
    'megabit' => new U('{0} àwɔn mégábíìtì', '{0} ɛ́mbiì', '{0}Mb'),
    'megabyte' => new U('{0} àwɔn mégábáìtì', '{0} MB', '{0}MB'),
    'minute' => new U('{0} ìsh', '{0} ìsh', '{0}/ìsh'),
    'month' => new U('{0} oshù', '{0} oshù', '{0} oshù'),
    'petabyte' => new U('{0} àwɔn pɛ́tábáìtì', '{0} Píbáìtì', '{0}PB'),
    'second' => new U('{0}ìsh àáy', '{0} ìsh àáy', '{0} ìsh àáy'),
    'terabit' => new U('{0} àwɔn tɛ́rábíìtì', '{0} Tb', '{0}Tb'),
    'terabyte' => new U('{0} àwɔn tɛ́rábáìtì', '{0} Tíbáìtì', '{0}TB'),
    'week' => new U('{0} ɔsh', '{0} ɔsh', '{0} ɔsh'),
    'year' => new U('{0} ɔd', '{0} ɔd', '{0} ɔd'),
];
