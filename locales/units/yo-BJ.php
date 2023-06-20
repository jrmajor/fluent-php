<?php

use Major\Fluent\Formatters\Number\Locale\Unit as U;

return [
    'bit' => new U(name: 'digital-bit', long: ['name' => 'àwɔ́n bíìtì', 'plurals' => ['other' => '{0} àwɔ́n bíìtì'], 'perUnit' => ''], short: ['name' => 'bíìtì', 'plurals' => ['other' => '{0} bíìtì'], 'perUnit' => ''], narrow: ['name' => 'bit', 'plurals' => ['other' => '{0}bíìtì'], 'perUnit' => '']),
    'byte' => new U(name: 'digital-byte', long: ['name' => 'àwɔ́n báìtì', 'plurals' => ['other' => '{0} àwɔ́n báìtì'], 'perUnit' => ''], short: ['name' => 'báìtì', 'plurals' => ['other' => '{0} báìtì'], 'perUnit' => ''], narrow: ['name' => 'B', 'plurals' => ['other' => '{0}B'], 'perUnit' => '']),
    'day' => new U(name: 'duration-day', long: ['name' => 'ɔjɔ́', 'plurals' => ['other' => 'ɔj {0}'], 'perUnit' => '{0}/ɔj'], short: ['name' => 'ɔjɔ́', 'plurals' => ['other' => '{0} ɔj'], 'perUnit' => '{0}/ɔj'], narrow: ['name' => 'ɔjɔ́', 'plurals' => ['other' => 'ɔj {0}'], 'perUnit' => '{0}/ɔj']),
    'gigabit' => new U(name: 'digital-gigabit', long: ['name' => 'àwɔn gígábíìtì', 'plurals' => ['other' => '{0} àwɔn gígábíìtì'], 'perUnit' => ''], short: ['name' => 'jíbíìtì', 'plurals' => ['other' => '{0}jíbíìtì'], 'perUnit' => ''], narrow: ['name' => 'Gb', 'plurals' => ['other' => '{0}Gb'], 'perUnit' => '']),
    'gigabyte' => new U(name: 'digital-gigabyte', long: ['name' => 'àwɔn gígábáìtì', 'plurals' => ['other' => '{0} àwɔn gígábáìtì'], 'perUnit' => ''], short: ['name' => 'jíbáìtì', 'plurals' => ['other' => '{0} jíbáìtì'], 'perUnit' => ''], narrow: ['name' => 'GB', 'plurals' => ['other' => '{0}GB'], 'perUnit' => '']),
    'kilobit' => new U(name: 'digital-kilobit', long: ['name' => 'àwɔn kílóbíìtì', 'plurals' => ['other' => '{0} àwɔ́n kílóbíìtì'], 'perUnit' => ''], short: ['name' => 'kébiì', 'plurals' => ['other' => '{0} kébiì'], 'perUnit' => ''], narrow: ['name' => 'kb', 'plurals' => ['other' => '{0}kb'], 'perUnit' => '']),
    'kilobyte' => new U(name: 'digital-kilobyte', long: ['name' => 'àwɔn kílóbáìtì', 'plurals' => ['other' => '{0} àwɔn kílóbáìtì'], 'perUnit' => ''], short: ['name' => 'kébáìtì', 'plurals' => ['other' => '{0} kébáìtì'], 'perUnit' => ''], narrow: ['name' => 'kB', 'plurals' => ['other' => '{0}kB'], 'perUnit' => '']),
    'megabit' => new U(name: 'digital-megabit', long: ['name' => 'àwɔn mégábíìtì', 'plurals' => ['other' => '{0} àwɔn mégábíìtì'], 'perUnit' => ''], short: ['name' => 'ɛ́mbíìtì', 'plurals' => ['other' => '{0} ɛ́mbiì'], 'perUnit' => ''], narrow: ['name' => 'Mb', 'plurals' => ['other' => '{0}Mb'], 'perUnit' => '']),
    'megabyte' => new U(name: 'digital-megabyte', long: ['name' => 'àwɔn mégábáìtì', 'plurals' => ['other' => '{0} àwɔn mégábáìtì'], 'perUnit' => ''], short: ['name' => 'ɛ́mbáìtì', 'plurals' => ['other' => '{0} MB'], 'perUnit' => ''], narrow: ['name' => 'MB', 'plurals' => ['other' => '{0}MB'], 'perUnit' => '']),
    'minute' => new U(name: 'duration-minute', long: ['name' => 'ìsh', 'plurals' => ['other' => '{0} ìsh'], 'perUnit' => '{0}/ìsh'], short: ['name' => 'ìsh', 'plurals' => ['other' => '{0} ìsh'], 'perUnit' => '{0}/ìsh'], narrow: ['name' => 'ìsh', 'plurals' => ['other' => '{0}/ìsh'], 'perUnit' => '{0}/ìsh']),
    'month' => new U(name: 'duration-month', long: ['name' => 'oshù', 'plurals' => ['other' => '{0} oshù'], 'perUnit' => '{0}/oshù'], short: ['name' => 'oshù', 'plurals' => ['other' => '{0} oshù'], 'perUnit' => '{0}/oshù'], narrow: ['name' => 'oshù', 'plurals' => ['other' => '{0} oshù'], 'perUnit' => '{0}/oshù']),
    'petabyte' => new U(name: 'digital-petabyte', long: ['name' => 'àwɔn pɛ́tábáìtì', 'plurals' => ['other' => '{0} àwɔn pɛ́tábáìtì'], 'perUnit' => ''], short: ['name' => 'Píbáìtì', 'plurals' => ['other' => '{0} Píbáìtì'], 'perUnit' => ''], narrow: ['name' => 'PB', 'plurals' => ['other' => '{0}PB'], 'perUnit' => '']),
    'second' => new U(name: 'duration-second', long: ['name' => 'ìsh àáy', 'plurals' => ['other' => '{0}ìsh àáy'], 'perUnit' => '{0}/ìsh àáy'], short: ['name' => 'ìsh àáy', 'plurals' => ['other' => '{0} ìsh àáy'], 'perUnit' => '{0} ìsh àáy'], narrow: ['name' => 'ìsh àáy', 'plurals' => ['other' => '{0} ìsh àáy'], 'perUnit' => '{0} ìsh àáy']),
    'terabit' => new U(name: 'digital-terabit', long: ['name' => 'àwɔn tɛ́rábíìtì', 'plurals' => ['other' => '{0} àwɔn tɛ́rábíìtì'], 'perUnit' => ''], short: ['name' => 'Tb', 'plurals' => ['other' => '{0} Tb'], 'perUnit' => ''], narrow: ['name' => 'Tb', 'plurals' => ['other' => '{0}Tb'], 'perUnit' => '']),
    'terabyte' => new U(name: 'digital-terabyte', long: ['name' => 'àwɔn tɛ́rábáìtì', 'plurals' => ['other' => '{0} àwɔn tɛ́rábáìtì'], 'perUnit' => ''], short: ['name' => 'Tíbáìtì', 'plurals' => ['other' => '{0} Tíbáìtì'], 'perUnit' => ''], narrow: ['name' => 'TB', 'plurals' => ['other' => '{0}TB'], 'perUnit' => '']),
    'week' => new U(name: 'duration-week', long: ['name' => 'ɔsh', 'plurals' => ['other' => '{0} ɔsh'], 'perUnit' => '{0}/ɔsh'], short: ['name' => 'ɔsh', 'plurals' => ['other' => '{0} ɔsh'], 'perUnit' => '{0}/ɔshɛ̀'], narrow: ['name' => 'ɔshɛ́', 'plurals' => ['other' => '{0} ɔsh'], 'perUnit' => '{0}/ɔ̀shɛ̀']),
    'year' => new U(name: 'duration-year', long: ['name' => 'ɔ̀dún', 'plurals' => ['other' => '{0} ɔd'], 'perUnit' => '{0} ɔd'], short: ['name' => 'ɔd', 'plurals' => ['other' => '{0} ɔd'], 'perUnit' => '{0}/ɔd'], narrow: ['name' => 'ɔd', 'plurals' => ['other' => '{0} ɔd'], 'perUnit' => '{0}/ɔd']),
];
