<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'AED' => new C('AED', 'Dirhamka Isutaga Imaaraatka Carabta', plurals: 'dirhamka Isutaga Imaaraatka Carabta'),
    'AFN' => new C('AFN', 'Afgan Afgani', narrow: '؋'),
    'ALL' => new C('ALL', 'Lekta Albaniya', plurals: ['one' => 'lekta Abaniya', 'other' => 'lekta Albaniya']),
    'AMD' => new C('AMD', 'Daraamka Armeniya', narrow: '֏', plurals: 'daraamka Armeniya'),
    'ANG' => new C('ANG', 'Galdarka Nadarlaan Antiliyaan', plurals: ['one' => 'galdarka Nadarlaan Antiliyaan', 'other' => 'galdarada Nadarlaan Antiliyaan']),
    'AOA' => new C('AOA', 'Kawansada Angola', narrow: 'Kz', plurals: 'kawansada Angola'),
    'ARA' => new C('ARA', 'Argentine Austral', plurals: ['one' => 'Argentine Austral', 'other' => 'Argentine Australs']),
    'ARL' => new C('ARL', 'Beesada Ley ee Arjentiin (1970–1983)'),
    'ARM' => new C('ARM', 'Beesada Ley ee Arjentiin (1881–1970)'),
    'ARP' => new C('ARP', 'Beesada Ley ee Arjentiin (1883–1985)'),
    'ARS' => new C('ARS', 'Beesada Arjentiin', narrow: '$'),
    'AUD' => new C('AUD', 'Doolarka Astaraaliya', 'A$', '$', ['one' => 'doolarka Astaraaliya', 'other' => 'doolarada Astaraaliya']),
    'AWG' => new C('AWG', 'Foloorinta Aruban', plurals: 'foloorinta Aruban'),
    'AZN' => new C('AZN', 'Manaata Asarbeyjan', narrow: '₼', plurals: 'manaata Asarbeyjan'),
    'BAD' => new C('BAD', 'Diinaarka BBosnia-Hersogofina 1.00 konfatibal maakta Bosnia-Hersogofina 1 konfatibal maaka Bosnia-Hersogofina (1992–1994)', plurals: ['one' => 'Diinaarka BBosnia-Hersogofina (1992–1994)', 'other' => 'Diinaarka BBosnia-Hersogofina 1.00 konfatibal maakta Bosnia-Hersogofina 1 konfatibal maaka Bosnia-Hersogofina (1992–1994)']),
    'BAM' => new C('BAM', 'Konfatibal Maakta Bosnia-Hersogofina', narrow: 'KM', plurals: 'konfatibal maakta Bosnia-Hersogofina'),
    'BBD' => new C('BBD', 'Doolarka Barbaadiyaan', 'DBB', '$', ['one' => 'doolarka Barbaadiyaan', 'other' => 'doolarada Barbaadiyaan']),
    'BDT' => new C('BDT', 'Taka Bangledesh', narrow: '৳', plurals: 'taka Bangledesh'),
    'BGN' => new C('BGN', 'Lefta Bulgariya', plurals: 'lefta Bulgariya'),
    'BHD' => new C('BHD', 'Dinaarka Baxreyn', plurals: 'dinaarka Baxreyn', minorUnits: 3),
    'BIF' => new C('BIF', 'Faranka Burundi', plurals: 'faranka Burundi', minorUnits: 0),
    'BMD' => new C('BMD', 'Doolarka Barmuuda', narrow: '$', plurals: ['one' => 'doolarka Barmuuda', 'other' => 'Doolarka Barmuuda']),
    'BND' => new C('BND', 'Doolarka Buruney', narrow: '$', plurals: ['one' => 'doolarka Buruney', 'other' => 'doolarada Buruney']),
    'BOB' => new C('BOB', 'Bolifiyanada Bolifiya', narrow: 'Bs'),
    'BOL' => new C('BOL', 'Bolifiyaabka Bolifiyaano(1863–1963)'),
    'BRL' => new C('BRL', 'Realka Barasil', 'R$', 'R$', ['one' => 'Realka Barasil', 'other' => 'Realada Barasil']),
    'BSD' => new C('BSD', 'Doolarka Bahamaas', narrow: '$', plurals: ['one' => 'doolarka Bahamaas', 'other' => 'doolarada Bahamaas']),
    'BTN' => new C('BTN', 'Nugultaramta Butan', plurals: 'nugultaramta Butan'),
    'BWP' => new C('BWP', 'Buulada Botswana', narrow: 'P', plurals: 'buulada Botswana'),
    'BYN' => new C('BYN', 'Rubalka Belarus', plurals: 'rubalka Belarus'),
    'BZD' => new C('BZD', 'Doolarka Beelisa', narrow: '$', plurals: ['one' => 'doolarka Beelisa', 'other' => 'doolarada Beelisa']),
    'CAD' => new C('CAD', 'Doolarka Kanada', 'CA$', '$', ['one' => 'doolarka Kanada', 'other' => 'doolarada Kanada']),
    'CDF' => new C('CDF', 'Faranka Kongo', plurals: 'faranka Kongo'),
    'CHF' => new C('CHF', 'Faranka Iswiska'),
    'CLP' => new C('CLP', 'Beesada Jili', narrow: '$', minorUnits: 0),
    'CNH' => new C('CNH', 'Yuwanta Shiinaha (Ofshoor)', plurals: 'yuwanta Shiinaha (Ofshoor)'),
    'CNY' => new C('CNY', 'Yuwanta Shiinaha', 'CN¥', '¥', 'yuwanta Shiinaha'),
    'COP' => new C('COP', 'Beesada Kolombiya', narrow: '$'),
    'CRC' => new C('CRC', 'Kolonka Kosta Riika', narrow: '₡', plurals: 'kolonka Kosta Riika'),
    'CUC' => new C('CUC', 'Beesada Konfatibal ee Kuuba', narrow: '$', plurals: 'beesada konfatibal ee Kuuba'),
    'CUP' => new C('CUP', 'Beesada Kuuba', narrow: '$'),
    'CVE' => new C('CVE', 'Eskudo Keyb Farde', plurals: 'eskudo Keyb Farde'),
    'CZK' => new C('CZK', 'Korunada Jeek', narrow: 'Kč', plurals: 'korunada Jeek'),
    'DJF' => new C('DJF', 'Faran Jabuuti', plurals: 'faranka Jabuuti', minorUnits: 0),
    'DKK' => new C('DKK', 'Koronka Danishka', narrow: 'kr'),
    'DOP' => new C('DOP', 'Beesada Dominiika', narrow: '$', plurals: 'beesada Dominiika'),
    'DZD' => new C('DZD', 'Dinaarka Aljeriya', plurals: 'dinaarka Aljeriya'),
    'EEK' => new C('EEK', 'Kroonka Estooniya'),
    'EGP' => new C('EGP', 'Bowndka Masar', narrow: 'E£', plurals: 'bowndka Masar'),
    'ERN' => new C('ERN', 'Nakfada Eritriya', plurals: ['one' => 'nakfada Eritriya', 'other' => 'nafkada Eritriya']),
    'ETB' => new C('ETB', 'Birta Itoobbiya', plurals: 'birta Itoobbiya'),
    'EUR' => new C('EUR', 'Yuuroo', '€', '€', 'yuuroo'),
    'FIM' => new C('FIM', 'Markkada Fiinishka ah'),
    'FJD' => new C('FJD', 'Doolarka Fiji', narrow: '$', plurals: ['one' => 'doolarka Fiji', 'other' => 'doolarada Fiji']),
    'FKP' => new C('FKP', 'Bowndka Faalklaan Aylaanis', narrow: '£'),
    'GBP' => new C('GBP', 'Bowndka Biritishka', '£', '£'),
    'GEL' => new C('GEL', 'Laariga Joorjiya', narrow: '₾', plurals: 'laariga Joorjiya'),
    'GHS' => new C('GHS', 'Sedida Gana', narrow: 'GH₵', plurals: 'sedida Gana'),
    'GIP' => new C('GIP', 'Bowndka Gibraltar', narrow: '£', plurals: 'bowndka Gibraltar'),
    'GMD' => new C('GMD', 'Dalasida Gambiya'),
    'GNF' => new C('GNF', 'Faranka Gini', narrow: 'FG', plurals: 'faranka Gini', minorUnits: 0),
    'GTQ' => new C('GTQ', 'Kuwestalka Guwatemala', narrow: 'Q', plurals: 'kuwestalka Guwatemala'),
    'GYD' => new C('GYD', 'Doolarka Guyanes', narrow: '$', plurals: ['one' => 'Doolarka Guyanes', 'other' => 'Doolarada Guyanes']),
    'HKD' => new C('HKD', 'Doolarka Hoon Koon', 'HK$', '$', 'Doolarada Hoon Koon'),
    'HNL' => new C('HNL', 'Lembirada Honduras', narrow: 'L', plurals: 'lembirada Honduras'),
    'HRK' => new C('HRK', 'Kunada Korooshiya', narrow: 'kn', plurals: 'kunada Korooshiya'),
    'HTG' => new C('HTG', 'Goordada Hiyati', plurals: 'goordada Hiyati'),
    'HUF' => new C('HUF', 'Forintiska Hangari', narrow: 'Ft', plurals: 'forintiska Hangari'),
    'IDR' => new C('IDR', 'Rubiah Indonesiya', narrow: 'Rp', plurals: 'rubiah Indonesiya'),
    'IEP' => new C('IEP', 'baawnka Ayrishka'),
    'ILS' => new C('ILS', 'Niyuu Shekelka Israaiil', '₪', '₪', 'niyuu shekelka Israaiil'),
    'INR' => new C('INR', 'Rubiga Hindiya', '₹', '₹', 'rubiga Hindiya'),
    'IQD' => new C('IQD', 'Dinaarka Ciraaq', plurals: 'dinaarka Ciraaq', minorUnits: 3),
    'IRR' => new C('IRR', 'Riyaalka Iran', plurals: 'riyaalka Iran'),
    'ISJ' => new C('ISJ', plurals: 'krónaha Iceland (1918–1981)'),
    'ISK' => new C('ISK', 'Koronada Eysland', narrow: 'kr', minorUnits: 0),
    'JMD' => new C('JMD', 'Doolarka Jamayka', narrow: '$', plurals: ['one' => 'doolarka Jamayka', 'other' => 'doolarada Jamayka']),
    'JOD' => new C('JOD', 'Dinaarka Urdun', plurals: 'dinaarka Urdun', minorUnits: 3),
    'JPY' => new C('JPY', 'Yenta Jabaan', 'JP¥', '¥', 'yenta Jabaan', 0),
    'KES' => new C('KES', 'Shilingka Kenya', plurals: 'shilingka Kenya'),
    'KGS' => new C('KGS', 'Somta Kiyrgiystan', narrow: '⃀', plurals: ['one' => 'somta Kiyriygstan', 'other' => 'somta Kiyrgiystan']),
    'KHR' => new C('KHR', 'Riyf kambodiya', narrow: '៛', plurals: ['one' => 'Riyf Kambodiya', 'other' => 'Riyf kambodiya']),
    'KMF' => new C('KMF', 'Faranka Komoros', narrow: 'CF', plurals: 'faranka Komoros', minorUnits: 0),
    'KPW' => new C('KPW', 'Wonka Waqooyiga Kuuriya', narrow: '₩', plurals: 'wonka Waqooyiga Kuuriya'),
    'KRW' => new C('KRW', 'Wonka Koonfur Kuuriya', '₩', '₩', 'wonka Koonfur Kuuriya', 0),
    'KWD' => new C('KWD', 'Dinaarka Kuweyt', plurals: 'dinaarka Kuweyt', minorUnits: 3),
    'KYD' => new C('KYD', 'Doolarka Kayman Aylaanis', narrow: '$', plurals: ['one' => 'doolarka Kayman Aylaanis', 'other' => 'Doolarada Kayman Aylaanis']),
    'KZT' => new C('KZT', 'Tengeda Kasakhstan', narrow: '₸', plurals: 'tengeda Kasakhstan'),
    'LAK' => new C('LAK', 'Kib Laoti', narrow: '₭', plurals: 'kib Laoti'),
    'LBP' => new C('LBP', 'Bowndka Lubnaan', narrow: 'L£', plurals: ['one' => 'bowndka Lubnaan', 'other' => 'Bowndka Lubnaan']),
    'LKR' => new C('LKR', 'Rubiga Siri lanka', narrow: 'Rs', plurals: ['one' => 'rubiga Siri Lanka', 'other' => 'rubiga Siri lanka']),
    'LRD' => new C('LRD', 'Doolarka Liberiya', narrow: '$', plurals: 'doolarka Liberiya'),
    'LSL' => new C('LSL', 'Lesotho Loti', plurals: ['one' => 'Lesotho loti', 'other' => 'Lesotho lotis']),
    'LVR' => new C('LVR', 'Rubalka Latfiya', plurals: ['one' => 'rubalka Latvia', 'other' => 'rubalka Latfiya']),
    'LYD' => new C('LYD', 'Dinaarka Libya', plurals: 'dinaarka Libya', minorUnits: 3),
    'MAD' => new C('MAD', 'Dirhamka Moroko', plurals: 'dirhamka Moroko'),
    'MDL' => new C('MDL', 'Leeyuuda Moldofa', plurals: 'leeyuuda Moldofa'),
    'MGA' => new C('MGA', 'Arayrida Madagaskar', narrow: 'Ar', plurals: 'arayrida Madagaskar'),
    'MKD' => new C('MKD', 'Denaarka Masedoniya', plurals: 'denaarka Masedoniya'),
    'MMK' => new C('MMK', 'Kayatda Mayanmaar', narrow: 'K', plurals: 'kayatda Mayanmaar'),
    'MNT' => new C('MNT', 'Tugrikta Mongoliya', narrow: '₮', plurals: 'tugrikta Mongoliya'),
    'MOP' => new C('MOP', 'Bataka Makana', plurals: 'bataka Makana'),
    'MRO' => new C('MRO', 'Oogiya Mawritaniya (1973–2017)'),
    'MRU' => new C('MRU', 'Oogiyada Mawritaaniya', plurals: 'oogiyada Mawritaniya'),
    'MUR' => new C('MUR', 'Rubiga Mowrishiya', narrow: 'Rs', plurals: 'rubiga Mowrishiya'),
    'MVR' => new C('MVR', 'Rufiyada Maldifiya', plurals: 'rufiyada Maldifiya'),
    'MWK' => new C('MWK', 'Kawajada Malawi', plurals: 'kawajada Malawi'),
    'MXN' => new C('MXN', 'Beesada Meksiko', 'MX$', '$', ['one' => 'Beesada Meksiko', 'other' => 'beesada Meksiko']),
    'MYR' => new C('MYR', 'Ringitda Malayshiya', narrow: 'RM', plurals: 'ringitda Malayshiya'),
    'MZN' => new C('MZN', 'Metikalka Mosambik', plurals: ['one' => 'metikalka Mosambik', 'other' => 'Metikalka Mosambik']),
    'NAD' => new C('NAD', 'Doolarka Namibiya', narrow: '$', plurals: 'doolarka Namibiya'),
    'NGN' => new C('NGN', 'Nairada Neyjeeriya', narrow: '₦', plurals: 'nairada Neyjeeriya'),
    'NIO' => new C('NIO', 'Kordobada Nikargow', narrow: 'C$'),
    'NOK' => new C('NOK', 'Koronka Norway', narrow: 'kr'),
    'NPR' => new C('NPR', 'Rubiga Nebal', narrow: 'Rs', plurals: 'rubiga Nebal'),
    'NZD' => new C('NZD', 'Doolarka Niyuu Siyalaan', 'NZ$', '$', ['one' => 'doolarka Niyuu siyalaan', 'other' => 'doolarada Niyuu Siyalaan']),
    'OMR' => new C('OMR', 'Riyaalka Cumaan', plurals: 'riyaalka Cumaan', minorUnits: 3),
    'PAB' => new C('PAB', 'Balbow Banama', plurals: ['one' => 'balbaw Banama', 'other' => 'balbow Banama']),
    'PEN' => new C('PEN', 'Solsha Beeru'),
    'PGK' => new C('PGK', 'Kinada Babua Niyuu Gini', plurals: 'kinada Babua Niyuu Gini'),
    'PHP' => new C('PHP', 'Biso Filibin', '₱', '₱', 'biso Filibin'),
    'PKR' => new C('PKR', 'Rubiga Bakistan', narrow: 'Rs', plurals: 'rubiga Bakistan'),
    'PLN' => new C('PLN', 'Solotida Bolaan', narrow: 'zł', plurals: 'solotida Bolaan'),
    'PYG' => new C('PYG', 'Guranida Baraguway', narrow: '₲', minorUnits: 0),
    'QAR' => new C('QAR', 'Riyaalka Qatar', plurals: 'riyaalka Qatar'),
    'RON' => new C('RON', 'Liyuuda Romaniya', narrow: 'lei', plurals: 'liyuuda Romaniya'),
    'RSD' => new C('RSD', 'Dinaarka Serbiya', plurals: 'dinaarka Serbiya'),
    'RUB' => new C('RUB', 'Rubalka Ruushka', narrow: '₽', plurals: 'rubalka Ruushka'),
    'RWF' => new C('RWF', 'Faranka Ruwanda', narrow: 'RF', minorUnits: 0),
    'SAR' => new C('SAR', 'Riyaalka Sacuudiga', plurals: ['one' => 'Riyaalka Sacuudiga', 'other' => 'riyaalka Sacuudiga']),
    'SBD' => new C('SBD', 'Doolarka Solomon Aylaanis', narrow: '$', plurals: ['one' => 'doolarka Solomon Aylaanis', 'other' => 'doolarada Solomon Aylaanis']),
    'SCR' => new C('SCR', 'Rubiga Siisalis', plurals: 'rubiga Siisalis'),
    'SDG' => new C('SDG', 'Bowndka Suudaan', plurals: 'bowndka Suudaan'),
    'SEK' => new C('SEK', 'Koronka Isweden', narrow: 'kr'),
    'SGD' => new C('SGD', 'Doolarka Singabuur', narrow: '$', plurals: 'doolarka Singabuur'),
    'SHP' => new C('SHP', 'Bowndka St Helen', narrow: '£', plurals: ['one' => 'bowndka St Helen', 'other' => 'Bowndka St Helen']),
    'SLE' => new C('SLE', 'Leonka Sira Leon', plurals: 'leonka Sira Leon'),
    'SLL' => new C('SLL', 'Leonka Sira Leon (1964—2022)', plurals: 'leonka Sira Leon (1964—2022)'),
    'SOS' => new C('SOS', 'Shilingka Soomaaliya', 'S'),
    'SRD' => new C('SRD', 'Doolarka Surinamees', narrow: '$', plurals: ['one' => 'Doolarka Surinamees', 'other' => 'Doolarada Surinamees']),
    'SSP' => new C('SSP', 'Bowndka Koonfurta Suudaan', narrow: '£'),
    'STN' => new C('STN', 'Dobra Sao Tome & Birinsibi', narrow: 'Db', plurals: ['one' => 'dobrada Sao Tome Birinsibi', 'other' => 'dobrada Sao Tome & Birinsibi']),
    'SYP' => new C('SYP', 'Bowndka Suuriya', narrow: '£', plurals: 'bowndka Suuriya'),
    'SZL' => new C('SZL', 'Lilangeenida iswaasi', plurals: ['one' => 'lilengeenida Iswaasi', 'other' => 'lilangeenida iswaasi']),
    'THB' => new C('THB', 'Baatka Taylaan', narrow: '฿', plurals: ['one' => 'Baatda Taylaan', 'other' => 'baatda Taylaan']),
    'TJS' => new C('TJS', 'Somoonida Tajikistan', plurals: ['one' => 'soomonida Tajikistan', 'other' => 'somoonida Tajikistan']),
    'TMT' => new C('TMT', 'Manaata Turkmenistan', plurals: 'manaata Turkmenistan'),
    'TND' => new C('TND', 'Dinaarka Tunisiya', plurals: 'dinaarka Tunisiya', minorUnits: 3),
    'TOP' => new C('TOP', 'Ba’angada Tonga', narrow: 'T$', plurals: 'ba’angada Tonga'),
    'TRY' => new C('TRY', 'Liirada Turkiga', narrow: '₺', plurals: 'liirada Turkiga'),
    'TTD' => new C('TTD', 'Doolarka Tirinidad iyo Tobago', narrow: '$', plurals: ['one' => 'doolarka Tirinidad iyo Tobago', 'other' => 'doolarada Tirinidad iyo Tobago']),
    'TWD' => new C('TWD', 'Doolarka Taywaanta Cusub', 'NT$', '$', ['one' => 'doolarka Taywaanta Cusub', 'other' => 'doolarada Taywaanta Cusub']),
    'TZS' => new C('TZS', 'Shilingka Tansaaniya'),
    'UAH' => new C('UAH', 'Hirfiniyada Yukreeyn', narrow: '₴', plurals: 'hirfiniyada Yukreeyn'),
    'UGX' => new C('UGX', 'Shilingka Yugandha', plurals: 'shilingka Yugandha', minorUnits: 0),
    'USD' => new C('USD', 'Doolarka Mareeykanka', 'US$', '$', ['one' => 'doolarka Mareeykanka', 'other' => 'doolarada Mareeykanka']),
    'UYU' => new C('UYU', 'Beesada Urugway', narrow: '$'),
    'UZS' => new C('UZS', 'Somta Usbekistan', plurals: 'somta Usbekistan'),
    'VEF' => new C('VEF', 'Bolifar Fenesuala (2008–2018)', narrow: 'Bs'),
    'VES' => new C('VES', 'Bolifarada Fenesuwela'),
    'VND' => new C('VND', 'Dongta Fitnaam', '₫', '₫', 'dongta Fitnaam', 0),
    'VUV' => new C('VUV', 'Fatu Fanuatu', plurals: 'fatu Fanuatu', minorUnits: 0),
    'WST' => new C('WST', 'Tala Samao', plurals: 'tala Samao'),
    'XAF' => new C('XAF', 'Faranka CFA ee Bartamaha Afrika', 'FCFA', plurals: 'faranka CFA ee Bartamaha Afrika', minorUnits: 0),
    'XCD' => new C('XCD', 'Doolarka Iist Kaaribyan', 'EC$', '$', ['one' => 'doolarka Iist Kaaribyan', 'other' => 'doolarada Iist Kaaribyan']),
    'XOF' => new C('XOF', 'Faranka CFA Galbeedka Afrika', "F\u{202F}CFA", plurals: 'faranka CFA Galbeedka Afrika', minorUnits: 0),
    'XPF' => new C('XPF', 'Faranka CFP', 'CFPF', minorUnits: 0),
    'XXX' => new C('XXX', 'Lacag aan la aqoon', '¤', plurals: ['one' => '(halbeeg lacag aan la aqoon)', 'other' => '(Lacag aan la aqoon)']),
    'YER' => new C('YER', 'Riyaalka Yemen', plurals: 'riyaalka Yemen'),
    'ZAR' => new C('ZAR', 'Randka Koonfur Afrika', narrow: 'R', plurals: 'randka Koonfur Afrika'),
    'ZMW' => new C('ZMW', 'Kawajada Sambiya', narrow: 'ZK', plurals: ['one' => 'Kawaja Sambiya', 'other' => 'Kawajada Sambiya']),
];
