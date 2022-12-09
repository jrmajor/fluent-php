<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'AUD' => new C('AUD', 'Tola fakaʻaositelēlia', 'AUD$', narrow: 'AU$', plurals: ['other' => 'Tola fakaʻaositelēlia']),
    'EUR' => new C('EUR', 'ʻEulo', '€', narrow: '€', plurals: ['other' => 'ʻeulo']),
    'FJD' => new C('FJD', 'Tola fakafisi', narrow: 'F$', plurals: ['other' => 'Tola fakafisi']),
    'NZD' => new C('NZD', 'Tola fakanuʻusila', 'NZD$', narrow: 'NZ$', plurals: ['other' => 'Tola fakanuʻusila']),
    'PGK' => new C('PGK', 'Kina fakapapuaniukini', plurals: ['other' => 'Kina fakapapuaniukini']),
    'SBD' => new C('SBD', 'Tola fakaʻotusolomone', narrow: 'S$', plurals: ['other' => 'Tola fakaʻotusolomone']),
    'TOP' => new C('TOP', 'Paʻanga fakatonga', 'T$', narrow: 'T$', plurals: ['other' => 'Paʻanga fakatonga']),
    'VUV' => new C('VUV', 'Vatu fakavanuatu', plurals: ['other' => 'Vatu fakavanuatu'], minorUnits: 0),
    'WST' => new C('WST', 'Tala fakahaʻamoa', plurals: ['other' => 'Tala fakahaʻamoa']),
    'XPF' => new C('XPF', 'Falaniki fakapasifika', 'CFPF', plurals: ['other' => 'Falaniki fakapasifika'], minorUnits: 0),
    'XXX' => new C('XXX', 'Pa’anga Ta’e’ilo', '¤', plurals: ['other' => 'Pa’anga Ta’e’ilo']),
];
