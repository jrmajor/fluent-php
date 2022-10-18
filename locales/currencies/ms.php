<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'AED' => new C('AED', 'Dirham Emiriah Arab Bersatu', plurals: ['other' => 'Dirham UAE']),
    'AFN' => new C('AFN', 'Afghani Afghanistan', narrow: '؋', plurals: ['other' => 'Afghani Afghanistan']),
    'ALL' => new C('ALL', 'Lek Albania', plurals: ['other' => 'Lek Albania']),
    'AMD' => new C('AMD', 'Dram Armenia', narrow: '֏', plurals: ['other' => 'Dram Armenia']),
    'ANG' => new C('ANG', 'Guilder Antillen Belanda', plurals: ['other' => 'Guilder Antillen Belanda']),
    'AOA' => new C('AOA', 'Kwanza Angola', narrow: 'Kz', plurals: ['other' => 'Kwanza Angola']),
    'ARS' => new C('ARS', 'Peso Argentina', narrow: '$', plurals: ['other' => 'Peso Argentina']),
    'AUD' => new C('AUD', 'Dolar Australia', 'A$', narrow: '$', plurals: ['other' => 'Dolar Australia']),
    'AWG' => new C('AWG', 'Florin Aruba', plurals: ['other' => 'Florin Aruba']),
    'AZN' => new C('AZN', 'Manat Azerbaijan', narrow: '₼', plurals: ['other' => 'Manat Azerbaijan']),
    'BAM' => new C('BAM', 'Mark Boleh Tukar Bosnia-Herzegovina', narrow: 'KM', plurals: ['other' => 'Mark Boleh Tukar Bosnia-Herzegovina']),
    'BBD' => new C('BBD', 'Dolar Barbados', narrow: '$', plurals: ['other' => 'Dolar Barbados']),
    'BDT' => new C('BDT', 'Taka Bangladesh', narrow: '৳', plurals: ['other' => 'Taka Bangladesh']),
    'BGN' => new C('BGN', 'Lev Bulgaria', plurals: ['other' => 'Lev Bulgaria']),
    'BHD' => new C('BHD', 'Dinar Bahrain', plurals: ['other' => 'Dinar Bahrain'], minorUnits: 3),
    'BIF' => new C('BIF', 'Franc Burundi', plurals: ['other' => 'Franc Burundi'], minorUnits: 0),
    'BMD' => new C('BMD', 'Dolar Bermuda', narrow: '$', plurals: ['other' => 'Dolar Bermuda']),
    'BND' => new C('BND', 'Dolar Brunei', narrow: '$', plurals: ['other' => 'Dolar Brunei']),
    'BOB' => new C('BOB', 'Boliviano Bolivia', narrow: 'Bs', plurals: ['other' => 'Boliviano Bolivia']),
    'BRL' => new C('BRL', 'Real Brazil', 'R$', narrow: 'R$', plurals: ['other' => 'Real Brazil']),
    'BSD' => new C('BSD', 'Dolar Bahamas', narrow: '$', plurals: ['other' => 'Dolar Bahamas']),
    'BTN' => new C('BTN', 'Ngultrum Bhutan', plurals: ['other' => 'Ngultrum Bhutan']),
    'BWP' => new C('BWP', 'Pula Botswana', narrow: 'P', plurals: ['other' => 'Pula Botswana']),
    'BYN' => new C('BYN', 'Rubel Belarus baharu', narrow: 'р.', plurals: ['other' => 'rubel lama Belarus']),
    'BYR' => new C('BYR', 'Rubel Belarus (2000–2016)', plurals: ['other' => 'Rubel Belarus']),
    'BZD' => new C('BZD', 'Dolar Belize', narrow: '$', plurals: ['other' => 'Dolar Belize']),
    'CAD' => new C('CAD', 'Dolar Kanada', narrow: '$', plurals: ['other' => 'Dolar Kanada']),
    'CDF' => new C('CDF', 'Franc Congo', plurals: ['other' => 'Franc Congo']),
    'CHF' => new C('CHF', 'Franc Switzerland', plurals: ['other' => 'Franc Switzerland']),
    'CLP' => new C('CLP', 'Peso Chile', narrow: '$', plurals: ['other' => 'Peso Chile'], minorUnits: 0),
    'CNH' => new C('CNH', 'Yuan China (luar pesisir)', plurals: ['other' => 'Yuan China (luar pesisir)']),
    'CNY' => new C('CNY', 'Yuan Cina', 'CN¥', narrow: '¥', plurals: ['other' => 'Yuan Cina']),
    'COP' => new C('COP', 'Peso Colombia', narrow: '$', plurals: ['other' => 'Peso Colombia']),
    'CRC' => new C('CRC', 'Colon Costa Rica', narrow: '₡', plurals: ['other' => 'Colon Costa Rica']),
    'CUC' => new C('CUC', 'Peso Boleh Tukar Cuba', narrow: '$', plurals: ['other' => 'Peso Boleh Tukar Cuba']),
    'CUP' => new C('CUP', 'Peso Cuba', narrow: '$', plurals: ['other' => 'Peso Cuba']),
    'CVE' => new C('CVE', 'Escudo Tanjung Verde', plurals: ['other' => 'Escudo Tanjung Verde']),
    'CZK' => new C('CZK', 'Koruna Republik Czech', narrow: 'Kč', plurals: ['other' => 'Koruna Republik Czech']),
    'DJF' => new C('DJF', 'Franc Djibouti', plurals: ['other' => 'Franc Djibouti'], minorUnits: 0),
    'DKK' => new C('DKK', 'Krone Denmark', narrow: 'kr', plurals: ['other' => 'Krone Denmark']),
    'DOP' => new C('DOP', 'Peso Dominican', narrow: '$', plurals: ['other' => 'Peso Dominican']),
    'DZD' => new C('DZD', 'Dinar Algeria', plurals: ['other' => 'Dinar Algeria']),
    'EGP' => new C('EGP', 'Paun Mesir', narrow: 'E£', plurals: ['other' => 'Paun Mesir']),
    'ERN' => new C('ERN', 'Nakfa Eritrea', plurals: ['other' => 'Nakfa Eritrea']),
    'ETB' => new C('ETB', 'Birr Ethiopia', plurals: ['other' => 'Birr Ethiopia']),
    'EUR' => new C('EUR', 'Euro', '€', narrow: '€', plurals: ['other' => 'Euro']),
    'FJD' => new C('FJD', 'Dolar Fiji', narrow: '$', plurals: ['other' => 'Dolar Fiji']),
    'FKP' => new C('FKP', 'Paun Kepulauan Falkland', narrow: '£', plurals: ['other' => 'Paun Kepulauan Falkland']),
    'GBP' => new C('GBP', 'Paun British', '£', narrow: '£', plurals: ['other' => 'Paun British']),
    'GEL' => new C('GEL', 'Lari Georgia', narrow: '₾', plurals: ['other' => 'Lari Georgia']),
    'GHS' => new C('GHS', 'Cedi Ghana', narrow: 'GH₵', plurals: ['other' => 'Cedi Ghana']),
    'GIP' => new C('GIP', 'Paun Gibraltar', narrow: '£', plurals: ['other' => 'Paun Gibraltar']),
    'GMD' => new C('GMD', 'Dalasi Gambia', plurals: ['other' => 'Dalasi Gambia']),
    'GNF' => new C('GNF', 'Franc Guinea', narrow: 'FG', plurals: ['other' => 'Franc Guinea'], minorUnits: 0),
    'GTQ' => new C('GTQ', 'Quetzal Guatemala', narrow: 'Q', plurals: ['other' => 'Quetzal Guatemala']),
    'GYD' => new C('GYD', 'Dolar Guyana', narrow: '$', plurals: ['other' => 'Dolar Guyana']),
    'HKD' => new C('HKD', 'Dolar Hong Kong', 'HK$', narrow: '$', plurals: ['other' => 'Dolar Hong Kong']),
    'HNL' => new C('HNL', 'Lempira Honduras', narrow: 'L', plurals: ['other' => 'Lempira Honduras']),
    'HRK' => new C('HRK', 'Kuna Croatia', narrow: 'kn', plurals: ['other' => 'Kuna Croatia']),
    'HTG' => new C('HTG', 'Gourde Haiti', plurals: ['other' => 'Gourde Haiti']),
    'HUF' => new C('HUF', 'Forint Hungary', narrow: 'Ft', plurals: ['other' => 'Forint Hungary']),
    'IDR' => new C('IDR', 'Rupiah Indonesia', narrow: 'Rp', plurals: ['other' => 'Rupiah Indonesia']),
    'ILS' => new C('ILS', 'Syekel Baharu Israel', '₪', narrow: '₪', plurals: ['other' => 'Syekel baharu Israel']),
    'INR' => new C('INR', 'Rupee India', '₹', narrow: '₹', plurals: ['other' => 'Rupee India']),
    'IQD' => new C('IQD', 'Dinar Iraq', plurals: ['other' => 'Dinar Iraq'], minorUnits: 3),
    'IRR' => new C('IRR', 'Rial Iran', plurals: ['other' => 'Rial Iran']),
    'ISK' => new C('ISK', 'Krona Iceland', narrow: 'kr', plurals: ['other' => 'Krona Iceland'], minorUnits: 0),
    'JMD' => new C('JMD', 'Dolar Jamaica', narrow: '$', plurals: ['other' => 'Dolar Jamaica']),
    'JOD' => new C('JOD', 'Dinar Jordan', plurals: ['other' => 'Dinar Jordan'], minorUnits: 3),
    'JPY' => new C('JPY', 'Yen Jepun', 'JP¥', narrow: '¥', plurals: ['other' => 'Yen Jepun'], minorUnits: 0),
    'KES' => new C('KES', 'Syiling Kenya', plurals: ['other' => 'Syiling Kenya']),
    'KGS' => new C('KGS', 'Som Kyrgystani', plurals: ['other' => 'Som Kyrgystani']),
    'KHR' => new C('KHR', 'Riel Kemboja', narrow: '៛', plurals: ['other' => 'Riel Kemboja']),
    'KMF' => new C('KMF', 'Franc Comoria', narrow: 'CF', plurals: ['other' => 'Franc Comoria'], minorUnits: 0),
    'KPW' => new C('KPW', 'Won Korea Utara', narrow: '₩', plurals: ['other' => 'Won Korea Utara']),
    'KRW' => new C('KRW', 'Won Korea Selatan', '₩', narrow: '₩', plurals: ['other' => 'Won Korea Selatan'], minorUnits: 0),
    'KWD' => new C('KWD', 'Dinar Kuwait', plurals: ['other' => 'Dinar Kuwait'], minorUnits: 3),
    'KYD' => new C('KYD', 'Dolar Kepulauan Cayman', narrow: '$', plurals: ['other' => 'Dolar Kepulauan Cayman']),
    'KZT' => new C('KZT', 'Tenge Kazakhstan', narrow: '₸', plurals: ['other' => 'Tenge Kazakhstan']),
    'LAK' => new C('LAK', 'Kip Laos', narrow: '₭', plurals: ['other' => 'Kip Laos']),
    'LBP' => new C('LBP', 'Paun Lubnan', narrow: 'L£', plurals: ['other' => 'Paun Lubnan']),
    'LKR' => new C('LKR', 'Rupee Sri Lanka', narrow: 'Rs', plurals: ['other' => 'Rupee Sri Lanka']),
    'LRD' => new C('LRD', 'Dolar Liberia', narrow: '$', plurals: ['other' => 'Dolar Liberia']),
    'LSL' => new C('LSL', 'Loti Lesotho'),
    'LTL' => new C('LTL', 'Litas Lithuania', narrow: 'Lt', plurals: ['other' => 'Litas Lithuania']),
    'LVL' => new C('LVL', 'Lats Latvia', narrow: 'Ls', plurals: ['other' => 'Lats Latvia']),
    'LYD' => new C('LYD', 'Dinar Libya', plurals: ['other' => 'Dinar Libya'], minorUnits: 3),
    'MAD' => new C('MAD', 'Dirham Maghribi', plurals: ['other' => 'Dirham Maghribi']),
    'MDL' => new C('MDL', 'Leu Moldova', plurals: ['other' => 'Leu Moldova']),
    'MGA' => new C('MGA', 'Ariary Malagasy', narrow: 'Ar', plurals: ['other' => 'Ariary Malagasy']),
    'MGF' => new C('MGF', 'Franc Malagasy'),
    'MKD' => new C('MKD', 'Denar Macedonia', plurals: ['other' => 'Denar Macedonia']),
    'MMK' => new C('MMK', 'Kyat Myanma', narrow: 'K', plurals: ['other' => 'Kyat Myanma']),
    'MNT' => new C('MNT', 'Tugrik Mongolia', narrow: '₮', plurals: ['other' => 'Tugrik Mongolia']),
    'MOP' => new C('MOP', 'Pataca Macau', plurals: ['other' => 'Pataca Macau']),
    'MRO' => new C('MRO', 'Ouguiya Mauritania (1973–2017)', plurals: ['other' => 'Ouguiya Mauritania (1973–2017)']),
    'MRU' => new C('MRU', 'Ouguiya Mauritania', plurals: ['other' => 'Ouguiya Mauritania']),
    'MUR' => new C('MUR', 'Rupee Mauritius', narrow: 'Rs', plurals: ['other' => 'Rupee Mauritius']),
    'MVR' => new C('MVR', 'Rufiyaa Maldives', plurals: ['other' => 'Rufiyaa Maldives']),
    'MWK' => new C('MWK', 'Kwacha Malawi', plurals: ['other' => 'Kwacha Malawi']),
    'MXN' => new C('MXN', 'Peso Mexico', narrow: '$', plurals: ['other' => 'Peso Mexico']),
    'MYR' => new C('MYR', 'Ringgit Malaysia', 'RM', narrow: 'RM', plurals: ['other' => 'Ringgit Malaysia']),
    'MZE' => new C('MZE', 'Escudo Mozambique', plurals: ['other' => 'Escudo Mozambique']),
    'MZM' => new C('MZM', 'Metical Mozambique (1980–2006)', plurals: ['other' => 'Metical Mozambique (1980–2006)']),
    'MZN' => new C('MZN', 'Metikal Mozambique', plurals: ['other' => 'Metikal Mozambique']),
    'NAD' => new C('NAD', 'Dolar Namibia', narrow: '$', plurals: ['other' => 'Dolar Namibia']),
    'NGN' => new C('NGN', 'Naira Nigeria', narrow: '₦', plurals: ['other' => 'Naira Nigeria']),
    'NIO' => new C('NIO', 'Cordoba Nicaragua', narrow: 'C$', plurals: ['other' => 'Cordoba Nicaragua']),
    'NOK' => new C('NOK', 'Krone Norway', narrow: 'kr', plurals: ['other' => 'Krone Norway']),
    'NPR' => new C('NPR', 'Rupee Nepal', narrow: 'Rs', plurals: ['other' => 'Rupee Nepal']),
    'NZD' => new C('NZD', 'Dolar New Zealand', 'NZ$', narrow: '$', plurals: ['other' => 'Dolar New Zealand']),
    'OMR' => new C('OMR', 'Rial Oman', plurals: ['other' => 'Rial Oman'], minorUnits: 3),
    'PAB' => new C('PAB', 'Balboa Panama', plurals: ['other' => 'Balboa Panama']),
    'PEN' => new C('PEN', 'Sol Peru', plurals: ['other' => 'Sol Peru']),
    'PGK' => new C('PGK', 'Kina Papua New Guinea', plurals: ['other' => 'Kina Papua New Guinea']),
    'PHP' => new C('PHP', 'Peso Filipina', narrow: '₱', plurals: ['other' => 'Peso Filipina']),
    'PKR' => new C('PKR', 'Rupee Pakistan', narrow: 'Rs', plurals: ['other' => 'Rupee Pakistan']),
    'PLN' => new C('PLN', 'Zloty Poland', narrow: 'zł', plurals: ['other' => 'Zloty Poland']),
    'PYG' => new C('PYG', 'Guarani Paraguay', narrow: '₲', plurals: ['other' => 'Guarani Paraguay'], minorUnits: 0),
    'QAR' => new C('QAR', 'Rial Qatar', plurals: ['other' => 'Rial Qatar']),
    'RHD' => new C('RHD', 'Dolar Rhodesia', plurals: ['other' => 'Dolar Rhodesia']),
    'RON' => new C('RON', 'Leu Romania', narrow: 'lei', plurals: ['other' => 'Leu Romania']),
    'RSD' => new C('RSD', 'Dinar Serbia', plurals: ['other' => 'Dinar Serbia']),
    'RUB' => new C('RUB', 'Rubel Rusia', narrow: '₽', plurals: ['other' => 'Rubel Rusia']),
    'RWF' => new C('RWF', 'Franc Rwanda', narrow: 'RF', plurals: ['other' => 'Franc Rwanda'], minorUnits: 0),
    'SAR' => new C('SAR', 'Riyal Saudi', plurals: ['other' => 'Riyal Saudi']),
    'SBD' => new C('SBD', 'Dolar Kepulauan Solomon', narrow: '$', plurals: ['other' => 'Dolar Kepulauan Solomon']),
    'SCR' => new C('SCR', 'Rupee Seychelles', plurals: ['other' => 'Rupee Seychelles']),
    'SDG' => new C('SDG', 'Paun Sudan', plurals: ['other' => 'Paun Sudan']),
    'SEK' => new C('SEK', 'Krona Sweden', narrow: 'kr', plurals: ['other' => 'Krona Sweden']),
    'SGD' => new C('SGD', 'Dolar Singapura', narrow: '$', plurals: ['other' => 'Dolar Singapura']),
    'SHP' => new C('SHP', 'Paun Saint Helena', narrow: '£', plurals: ['other' => 'Paun Saint Helena']),
    'SLL' => new C('SLL', 'Leone Sierra Leone', plurals: ['other' => 'Leone Sierra Leone']),
    'SOS' => new C('SOS', 'Syiling Somali', plurals: ['other' => 'Syiling Somali']),
    'SRD' => new C('SRD', 'Dolar Surinam', narrow: '$', plurals: ['other' => 'Dolar Surinam']),
    'SSP' => new C('SSP', 'Paun Sudan selatan', narrow: '£', plurals: ['other' => 'Paun Sudan selatan']),
    'STD' => new C('STD', 'Dobra Sao Tome dan Principe (1977–2017)', plurals: ['other' => 'Dobra Sao Tome dan Principe (1977–2017)']),
    'STN' => new C('STN', 'Dobra Sao Tome dan Principe', narrow: 'Db', plurals: ['other' => 'Dobra Sao Tome dan Principe']),
    'SYP' => new C('SYP', 'Paun Syria', narrow: '£', plurals: ['other' => 'Paun Syria']),
    'SZL' => new C('SZL', 'Lilangeni Swazi', plurals: ['other' => 'Lilangeni Swazi']),
    'THB' => new C('THB', 'Baht Thai', narrow: '฿', plurals: ['other' => 'Baht Thai']),
    'TJS' => new C('TJS', 'Somoni Tajikistan', plurals: ['other' => 'Somoni Tajikistan']),
    'TMT' => new C('TMT', 'Manat Turkmenistan', plurals: ['other' => 'Manat Turkmenistan']),
    'TND' => new C('TND', 'Dinar Tunisia', plurals: ['other' => 'Dinar Tunisia'], minorUnits: 3),
    'TOP' => new C('TOP', 'Pa’anga Tonga', narrow: 'T$', plurals: ['other' => 'Pa’anga Tonga']),
    'TRY' => new C('TRY', 'Lira Turki', narrow: '₺', plurals: ['other' => 'Lira Turki']),
    'TTD' => new C('TTD', 'Dolar Trinidad dan Tobago', narrow: '$', plurals: ['other' => 'Dolar Trinidad dan Tobago']),
    'TWD' => new C('TWD', 'Dolar Taiwan Baru', 'NT$', narrow: 'NT$', plurals: ['other' => 'Dolar Taiwan Baru']),
    'TZS' => new C('TZS', 'Syiling Tanzania', plurals: ['other' => 'Syiling Tanzania']),
    'UAH' => new C('UAH', 'Hryvnia Ukraine', narrow: '₴', plurals: ['other' => 'Hryvnia Ukraine']),
    'UGS' => new C('UGS', 'Shilling Uganda (1966–1987)', plurals: ['other' => 'Shilling Uganda (1966–1987)']),
    'UGX' => new C('UGX', 'Syiling Uganda', plurals: ['other' => 'Syiling Uganda'], minorUnits: 0),
    'USD' => new C('USD', 'Dolar AS', narrow: '$', plurals: ['other' => 'Dolar AS']),
    'UYU' => new C('UYU', 'Peso Uruguay', narrow: '$', plurals: ['other' => 'Peso Uruguay']),
    'UZS' => new C('UZS', 'Som Uzbekistan', plurals: ['other' => 'Som Uzbekistan']),
    'VEF' => new C('VEF', 'Bolivar Venezuela (2008–2018)', narrow: 'Bs', plurals: ['other' => 'Bolivar Venezuela (2008–2018)']),
    'VES' => new C('VES', 'Bolivar Venezuela', plurals: ['other' => 'Bolivar Venezuela']),
    'VND' => new C('VND', 'Dong Vietnam', '₫', narrow: '₫', plurals: ['other' => 'Dong Vietnam'], minorUnits: 0),
    'VUV' => new C('VUV', 'Vatu Vanuatu', plurals: ['other' => 'Vatu Vanuatu'], minorUnits: 0),
    'WST' => new C('WST', 'Tala Samoa', plurals: ['other' => 'Tala Samoa']),
    'XAF' => new C('XAF', 'Franc CFA BEAC', 'FCFA', plurals: ['other' => 'Franc CFA BEAC'], minorUnits: 0),
    'XCD' => new C('XCD', 'Dolar Caribbean Timur', 'EC$', narrow: '$', plurals: ['other' => 'Dolar Caribbean Timur']),
    'XOF' => new C('XOF', 'Franc CFA BCEAO', "F\u{202F}CFA", plurals: ['other' => 'Franc CFA BCEAO'], minorUnits: 0),
    'XPF' => new C('XPF', 'Franc CFP', 'CFPF', plurals: ['other' => 'Franc CFP'], minorUnits: 0),
    'XXX' => new C('XXX', 'Mata Wang Tidak Diketahui', '¤', plurals: ['other' => '(mata wang tidak diketahui)']),
    'YER' => new C('YER', 'Rial Yaman', plurals: ['other' => 'Rial Yaman']),
    'ZAR' => new C('ZAR', 'Rand Afrika Selatan', narrow: 'R', plurals: ['other' => 'Rand Afrika Selatan']),
    'ZMK' => new C('ZMK', 'Kwacha Zambia (1968–2012)'),
    'ZMW' => new C('ZMW', 'Kwacha Zambia', narrow: 'ZK', plurals: ['other' => 'Kwacha Zambia']),
    'ZWD' => new C('ZWD', 'Dolar Zimbabwe (1980–2008)', plurals: ['other' => 'Dolar Zimbabwe (1980–2008)']),
    'ZWL' => new C('ZWL', 'Dolar Zimbabwe (2009)', plurals: ['other' => 'Dolar Zimbabwe (2009)']),
    'ZWR' => new C('ZWR', 'Dolar Zimbabwe (2008)', plurals: ['other' => 'Dolar Zimbabwe (2008)']),
];