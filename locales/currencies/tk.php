<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'AED' => new C('AED', 'BAE dirhemi', plurals: ['one' => 'BAE dirhemi', 'other' => 'BAE dirhemi']),
    'AFN' => new C('AFN', 'Owgan afganisi', narrow: '؋', plurals: ['one' => 'owgan afganisi', 'other' => 'owgan afganisi']),
    'ALL' => new C('ALL', 'Alban leki', plurals: ['one' => 'alban leki', 'other' => 'alban leki']),
    'AMD' => new C('AMD', 'Ermeni dramy', narrow: '֏', plurals: ['one' => 'ermeni dramy', 'other' => 'ermeni dramy']),
    'ANG' => new C('ANG', 'Niderland antil guldeni', plurals: ['one' => 'niderland antil guldeni', 'other' => 'niderland antil guldeni']),
    'AOA' => new C('AOA', 'Angola kwanzasy', narrow: 'Kz', plurals: ['one' => 'angola kwanzasy', 'other' => 'angola kwanzasy']),
    'ARS' => new C('ARS', 'Argentin pesosy', narrow: '$', plurals: ['one' => 'argentin pesosy', 'other' => 'argentin pesosy']),
    'AUD' => new C('AUD', 'Awstraliýa dollary', 'A$', narrow: '$', plurals: ['one' => 'awstraliýa dollary', 'other' => 'awstraliýa dollary']),
    'AWG' => new C('AWG', 'Aruba florini', plurals: ['one' => 'aruba florini', 'other' => 'aruba florini']),
    'AZN' => new C('AZN', 'Azerbaýjan manady', narrow: '₼', plurals: ['one' => 'azerbaýjan manady', 'other' => 'azerbaýjan manady']),
    'BAM' => new C('BAM', 'Konwertirlenýän Bosniýa we Gersegowina markasy', narrow: 'KM', plurals: ['one' => 'konwertirlenýän bosniýa we gersegowina markasy', 'other' => 'konwertirlenýän bosniýa we gersegowina markasy']),
    'BBD' => new C('BBD', 'Barbados dollary', narrow: '$', plurals: ['one' => 'barbados dollary', 'other' => 'barbados dollary']),
    'BDT' => new C('BDT', 'Bangladeş takasy', narrow: '৳', plurals: ['one' => 'bangladeş takasy', 'other' => 'bangladeş takasy']),
    'BGN' => new C('BGN', 'Bolgar lewi', plurals: ['one' => 'bolgar lewi', 'other' => 'bolgar lewi']),
    'BHD' => new C('BHD', 'Bahreýn dinary', plurals: ['one' => 'bahreýn dinary', 'other' => 'bahreýn dinary'], minorUnits: 3),
    'BIF' => new C('BIF', 'Burundi franky', plurals: ['one' => 'burundi franky', 'other' => 'burundi franky'], minorUnits: 0),
    'BMD' => new C('BMD', 'Bermuda dollary', narrow: '$', plurals: ['one' => 'bermuda dollary', 'other' => 'bermuda dollary']),
    'BND' => new C('BND', 'Bruneý dollary', narrow: '$', plurals: ['one' => 'bruneý dollary', 'other' => 'bruneý dollary']),
    'BOB' => new C('BOB', 'Boliwiýa boliwianosy', narrow: 'Bs', plurals: ['one' => 'boliwiýa boliwianosy', 'other' => 'boliwiýa boliwianosy']),
    'BRL' => new C('BRL', 'Brazil realy', 'R$', narrow: 'R$', plurals: ['one' => 'brazil realy', 'other' => 'brazil realy']),
    'BSD' => new C('BSD', 'Bagama dollary', narrow: '$', plurals: ['one' => 'bagama dollary', 'other' => 'bagama dollary']),
    'BTN' => new C('BTN', 'Butan ngultrumy', plurals: ['one' => 'butan ngultrumy', 'other' => 'butan ngultrumy']),
    'BWP' => new C('BWP', 'Botswana pulasy', narrow: 'P', plurals: ['one' => 'botswana pulasy', 'other' => 'botswana pulasy']),
    'BYN' => new C('BYN', 'Belarus rubly', narrow: 'р.', plurals: ['one' => 'belarus rubly', 'other' => 'belarus rubly']),
    'BYR' => new C('BYR', 'Belorus rubly (2000–2016)', plurals: ['one' => 'belorus rubly (2000–2016)', 'other' => 'belorus rubly (2000–2016)']),
    'BZD' => new C('BZD', 'Beliz dollary', narrow: '$', plurals: ['one' => 'beliz dollary', 'other' => 'beliz dollary']),
    'CAD' => new C('CAD', 'Kanada dollary', 'CA$', narrow: '$', plurals: ['one' => 'kanada dollary', 'other' => 'kanada dollary']),
    'CDF' => new C('CDF', 'Kongo franky', plurals: ['one' => 'kongo franky', 'other' => 'kongo franky']),
    'CHF' => new C('CHF', 'Şweýsar franky', plurals: ['one' => 'şweýsar franky', 'other' => 'şweýsar franky']),
    'CLP' => new C('CLP', 'Çili pesosy', narrow: '$', plurals: ['one' => 'çili pesosy', 'other' => 'çili pesosy'], minorUnits: 0),
    'CNH' => new C('CNH', 'Hytaý ýuany (ofşor)', plurals: ['one' => 'hytaý ýuany (ofşor)', 'other' => 'hytaý ýuany (ofşor)']),
    'CNY' => new C('CNY', 'Hytaý ýuany', 'CN¥', narrow: '¥', plurals: ['one' => 'hytaý ýuany', 'other' => 'hytaý ýuany']),
    'COP' => new C('COP', 'Kolumbiýa pesosy', narrow: '$', plurals: ['one' => 'kolumbiýa pesosy', 'other' => 'kolumbiýa pesosy']),
    'CRC' => new C('CRC', 'Kosta-Rika kolony', narrow: '₡', plurals: ['one' => 'kosta-rika kolony', 'other' => 'kosta-rika kolony']),
    'CUC' => new C('CUC', 'Konwertirlenýän kuba pesosy', narrow: '$', plurals: ['one' => 'konwertirlenýän kuba pesosy', 'other' => 'konwertirlenýän kuba pesosy']),
    'CUP' => new C('CUP', 'Kuba pesosy', narrow: '$', plurals: ['one' => 'kuba pesosy', 'other' => 'kuba pesosy']),
    'CVE' => new C('CVE', 'Kabo-Werde eskudosy', plurals: ['one' => 'kabo-werde eskudosy', 'other' => 'kabo-werde eskudosy']),
    'CZK' => new C('CZK', 'Çeh kronasy', narrow: 'Kč', plurals: ['one' => 'çeh kronasy', 'other' => 'çeh kronasy']),
    'DJF' => new C('DJF', 'Jibuti franky', plurals: ['one' => 'jibuti franky', 'other' => 'jibuti franky'], minorUnits: 0),
    'DKK' => new C('DKK', 'Daniýa kronasy', narrow: 'kr', plurals: ['one' => 'daniýa kronasy', 'other' => 'daniýa kronasy']),
    'DOP' => new C('DOP', 'Dominikan pesosy', narrow: '$', plurals: ['one' => 'dominikan pesosy', 'other' => 'dominikan pesosy']),
    'DZD' => new C('DZD', 'Alžir dinary', plurals: ['one' => 'alžir dinary', 'other' => 'alžir dinary']),
    'EGP' => new C('EGP', 'Müsür funty', narrow: 'E£', plurals: ['one' => 'müsür funty', 'other' => 'müsür funty']),
    'ERN' => new C('ERN', 'Eritreýa nakfasy', plurals: ['one' => 'eritreýa nakfasy', 'other' => 'eritreýa nakfasy']),
    'ETB' => new C('ETB', 'Efiopiýa byry', plurals: ['one' => 'efiopiýa byry', 'other' => 'efiopiýa byry']),
    'EUR' => new C('EUR', 'Ýewro', narrow: '€', plurals: ['one' => 'ýewro', 'other' => 'ýewro']),
    'FJD' => new C('FJD', 'Fiji dollary', narrow: '$', plurals: ['one' => 'fiji dollary', 'other' => 'fiji dollary']),
    'FKP' => new C('FKP', 'Folklend adalarynyň funty', narrow: '£', plurals: ['one' => 'folklend adalarynyň funty', 'other' => 'folklend adalarynyň funty']),
    'GBP' => new C('GBP', 'Britan funt sterlingi', narrow: '£', plurals: ['one' => 'britan funt sterlingi', 'other' => 'britan funt sterlingi']),
    'GEL' => new C('GEL', 'Gruzin larisi', narrow: '₾', plurals: ['one' => 'gruzin larisi', 'other' => 'gruzin larisi']),
    'GHS' => new C('GHS', 'Gano sedisi', narrow: 'GH₵', plurals: ['one' => 'gano sedisi', 'other' => 'gano sedisi']),
    'GIP' => new C('GIP', 'Gibraltar funty', narrow: '£', plurals: ['one' => 'gibraltar funty', 'other' => 'gibraltar funty']),
    'GMD' => new C('GMD', 'Gambiýa dalasisi', plurals: ['one' => 'gambiýa dalasisi', 'other' => 'gambiýa dalasisi']),
    'GNF' => new C('GNF', 'Gwineý franky', narrow: 'FG', plurals: ['one' => 'gwineý franky', 'other' => 'gwineý franky'], minorUnits: 0),
    'GTQ' => new C('GTQ', 'Gwatemala ketsaly', narrow: 'Q', plurals: ['one' => 'gwatemala ketsaly', 'other' => 'gwatemala ketsaly']),
    'GYD' => new C('GYD', 'Gaýana dollary', narrow: '$', plurals: ['one' => 'gaýana dollary', 'other' => 'gaýana dollary']),
    'HKD' => new C('HKD', 'Gonkong dollary', 'HK$', narrow: '$', plurals: ['one' => 'gonkong dollary', 'other' => 'gonkong dollary']),
    'HNL' => new C('HNL', 'Gonduras lempirasy', narrow: 'L', plurals: ['one' => 'gonduras lempirasy', 'other' => 'gonduras lempirasy']),
    'HRK' => new C('HRK', 'Horwat kunasy', narrow: 'kn', plurals: ['one' => 'horwat kunasy', 'other' => 'horwat kunasy']),
    'HTG' => new C('HTG', 'Gaiti gurdy', plurals: ['one' => 'gaiti gurdy', 'other' => 'gaiti gurdy']),
    'HUF' => new C('HUF', 'Wenger forinti', narrow: 'Ft', plurals: ['one' => 'wenger forinti', 'other' => 'wenger forinti']),
    'IDR' => new C('IDR', 'Indoneziýa rupiýasy', narrow: 'Rp', plurals: ['one' => 'indoneziýa rupiýasy', 'other' => 'indoneziýa rupiýasy']),
    'ILS' => new C('ILS', 'Täze Ysraýyl şekeli', '₪', narrow: '₪', plurals: ['one' => 'täze ysraýyl şekeli', 'other' => 'täze ysraýyl şekeli']),
    'INR' => new C('INR', 'Hindi rupiýasy', '₹', narrow: '₹', plurals: ['one' => 'hindi rupiýasy', 'other' => 'hindi rupiýasy']),
    'IQD' => new C('IQD', 'Yrak dinary', plurals: ['one' => 'yrak dinary', 'other' => 'yrak dinary'], minorUnits: 3),
    'IRR' => new C('IRR', 'Eýran rialy', plurals: ['one' => 'eýran rialy', 'other' => 'eýran rialy']),
    'ISK' => new C('ISK', 'Islandiýa kronasy', narrow: 'kr', plurals: ['one' => 'islandiýa kronasy', 'other' => 'islandiýa kronasy'], minorUnits: 0),
    'JMD' => new C('JMD', 'Ýamaýka dollary', narrow: '$', plurals: ['one' => 'ýamaýka dollary', 'other' => 'ýamaýka dollary']),
    'JOD' => new C('JOD', 'Iordan dinary', plurals: ['one' => 'iordan dinary', 'other' => 'iordan dinary'], minorUnits: 3),
    'JPY' => new C('JPY', 'Ýapon ýeni', 'JP¥', narrow: '¥', plurals: ['one' => 'ýapon ýeni', 'other' => 'ýapon ýeni'], minorUnits: 0),
    'KES' => new C('KES', 'Keniýa şillingi', plurals: ['one' => 'keniýa şillingi', 'other' => 'keniýa şillingi']),
    'KGS' => new C('KGS', 'Gyrgyz somy', plurals: ['one' => 'gyrgyz somy', 'other' => 'gyrgyz somy']),
    'KHR' => new C('KHR', 'Kamboja riýeli', narrow: '៛', plurals: ['one' => 'kamboja riýeli', 'other' => 'kamboja riýeli']),
    'KMF' => new C('KMF', 'Komor adalarynyň franky', narrow: 'CF', plurals: ['one' => 'komor adalarynyň franky', 'other' => 'komor adalarynyň franky'], minorUnits: 0),
    'KPW' => new C('KPW', 'Demirgazyk Koreý wony', narrow: '₩', plurals: ['one' => 'demirgazyk koreý wony', 'other' => 'demirgazyk koreý wony']),
    'KRW' => new C('KRW', 'Günorta Koreý wony', '₩', narrow: '₩', plurals: ['one' => 'günorta koreý wony', 'other' => 'günorta koreý wony'], minorUnits: 0),
    'KWD' => new C('KWD', 'Kuweýt dinary', plurals: ['one' => 'kuweýt dinary', 'other' => 'kuweýt dinary'], minorUnits: 3),
    'KYD' => new C('KYD', 'Kaýman adalarynyň dollary', narrow: '$', plurals: ['one' => 'kaýman adalarynyň dollary', 'other' => 'kaýman adalarynyň dollary']),
    'KZT' => new C('KZT', 'Gazak teňňesi', narrow: '₸', plurals: ['one' => 'gazak teňňesi', 'other' => 'gazak teňňesi']),
    'LAK' => new C('LAK', 'Laos kipi', narrow: '₭', plurals: ['one' => 'laos kipi', 'other' => 'laos kipi']),
    'LBP' => new C('LBP', 'Liwan funty', narrow: 'L£', plurals: ['one' => 'liwan funty', 'other' => 'liwan funty']),
    'LKR' => new C('LKR', 'Şri-Lanka rupiýasy', narrow: 'Rs', plurals: ['one' => 'şri-lanka rupiýasy', 'other' => 'şri-lanka rupiýasy']),
    'LRD' => new C('LRD', 'Liberiýa dollary', narrow: '$', plurals: ['one' => 'liberiýa dollary', 'other' => 'liberiýa dollary']),
    'LSL' => new C('LSL', 'Lesoto lotisi', plurals: ['one' => 'Lesoto lotisi', 'other' => 'Lesoto lotisi']),
    'LYD' => new C('LYD', 'Liwiýa dinary', plurals: ['one' => 'liwiýa dinary', 'other' => 'liwiýa dinary'], minorUnits: 3),
    'MAD' => new C('MAD', 'Marokko dirhamy', plurals: ['one' => 'marokko dirhamy', 'other' => 'marokko dirhamy']),
    'MDL' => new C('MDL', 'Moldaw leýi', plurals: ['one' => 'moldaw leýi', 'other' => 'moldaw leýi']),
    'MGA' => new C('MGA', 'Malagasiý ariarisi', narrow: 'Ar', plurals: ['one' => 'malagasiý ariarisi', 'other' => 'malagasiý ariarisi']),
    'MKD' => new C('MKD', 'Makedon dinary', plurals: ['one' => 'makedon dinary', 'other' => 'makedon dinary']),
    'MMK' => new C('MMK', 'Mýanma kýaty', narrow: 'K', plurals: ['one' => 'mýanma kýaty', 'other' => 'mýanma kýaty']),
    'MNT' => new C('MNT', 'Mongol tugrigi', narrow: '₮', plurals: ['one' => 'mongol tugrigi', 'other' => 'mongol tugrigi']),
    'MOP' => new C('MOP', 'Makao patakasy', plurals: ['one' => 'makao patakasy', 'other' => 'makao patakasy']),
    'MRO' => new C('MRO', 'Mawritan ugiýasy (1973–2017)', plurals: ['one' => 'mawritan ugiýasy (1973–2017)', 'other' => 'mawritan ugiýasy (1973–2017)']),
    'MRU' => new C('MRU', 'Mawritan ugiýasy', plurals: ['one' => 'mawritan ugiýasy', 'other' => 'mawritan ugiýasy']),
    'MUR' => new C('MUR', 'Mawrikiý rupiýasy', narrow: 'Rs', plurals: ['one' => 'mawrikiý rupiýasy', 'other' => 'mawrikiý rupiýasy']),
    'MVR' => new C('MVR', 'Maldiw rufiýasy', plurals: ['one' => 'maldiw rufiýasy', 'other' => 'maldiw rufiýasy']),
    'MWK' => new C('MWK', 'Malawi kwaçasy', plurals: ['one' => 'malawi kwaçasy', 'other' => 'malawi kwaçasy']),
    'MXN' => new C('MXN', 'Meksikan pesosy', 'MX$', narrow: '$', plurals: ['one' => 'meksikan pesosy', 'other' => 'meksikan pesosy']),
    'MYR' => new C('MYR', 'Malaýziýa ringgiti', narrow: 'RM', plurals: ['one' => 'malaýziýa ringgiti', 'other' => 'malaýziýa ringgiti']),
    'MZN' => new C('MZN', 'Mozambik metikaly', plurals: ['one' => 'mozambik metikaly', 'other' => 'mozambik metikaly']),
    'NAD' => new C('NAD', 'Namibiýa dollary', narrow: '$', plurals: ['one' => 'namibiýa dollary', 'other' => 'namibiýa dollary']),
    'NGN' => new C('NGN', 'Nigeriýa naýrasy', narrow: '₦', plurals: ['one' => 'nigeriýa naýrasy', 'other' => 'nigeriýa naýrasy']),
    'NIO' => new C('NIO', 'Nikaragua kordobasy', narrow: 'C$', plurals: ['one' => 'nikaragua kordobasy', 'other' => 'nikaragua kordobasy']),
    'NOK' => new C('NOK', 'Norwegiýa kronasy', narrow: 'kr', plurals: ['one' => 'norwegiýa kronasy', 'other' => 'norwegiýa kronasy']),
    'NPR' => new C('NPR', 'Nepal rupiýasy', narrow: 'Rs', plurals: ['one' => 'nepal rupiýasy', 'other' => 'nepal rupiýasy']),
    'NZD' => new C('NZD', 'Täze Zelandiýa dollary', 'NZ$', narrow: '$', plurals: ['one' => 'täze zelandiýa dollary', 'other' => 'täze zelandiýa dollary']),
    'OMR' => new C('OMR', 'Oman rialy', plurals: ['one' => 'oman rialy', 'other' => 'oman rialy'], minorUnits: 3),
    'PAB' => new C('PAB', 'Panama balboasy', plurals: ['one' => 'panama balboasy', 'other' => 'panama balboasy']),
    'PEN' => new C('PEN', 'Peru soly', plurals: ['one' => 'peru soly', 'other' => 'peru soly']),
    'PGK' => new C('PGK', 'Papua - Täze Gwineýa kinasy', plurals: ['one' => 'papua - täze gwineýa kinasy', 'other' => 'papua - täze gwineýa kinasy']),
    'PHP' => new C('PHP', 'Filippin pesosy', narrow: '₱', plurals: ['one' => 'filippin pesosy', 'other' => 'filippin pesosy']),
    'PKR' => new C('PKR', 'Päkistan rupiýasy', narrow: 'Rs', plurals: ['one' => 'päkistan rupiýasy', 'other' => 'päkistan rupiýasy']),
    'PLN' => new C('PLN', 'Polýak zlotysy', narrow: 'zł', plurals: ['one' => 'polýak zlotysy', 'other' => 'polýak zlotysy']),
    'PYG' => new C('PYG', 'Paragwaý guaranisi', narrow: '₲', plurals: ['one' => 'paragwaý guaranisi', 'other' => 'paragwaý guaranisi'], minorUnits: 0),
    'QAR' => new C('QAR', 'Katar rialy', plurals: ['one' => 'katar rialy', 'other' => 'katar rialy']),
    'RON' => new C('RON', 'Rumyn leýi', narrow: 'lei', plurals: ['one' => 'rumyn leýi', 'other' => 'rumyn leýi']),
    'RSD' => new C('RSD', 'Serb dinary', plurals: ['one' => 'serb dinary', 'other' => 'serb dinary']),
    'RUB' => new C('RUB', 'Rus rubly', narrow: '₽', plurals: ['one' => 'rus rubly', 'other' => 'rus rubly']),
    'RWF' => new C('RWF', 'Ruanda franky', narrow: 'RF', plurals: ['one' => 'ruanda franky', 'other' => 'ruanda franky'], minorUnits: 0),
    'SAR' => new C('SAR', 'Saud rialy', plurals: ['one' => 'saud rialy', 'other' => 'saud rialy']),
    'SBD' => new C('SBD', 'Solomon adalarynyň dollary', narrow: '$', plurals: ['one' => 'solomon adalarynyň dollary', 'other' => 'solomon adalarynyň dollary']),
    'SCR' => new C('SCR', 'Seýşel rupiýasy', plurals: ['one' => 'seýşel rupiýasy', 'other' => 'seýşel rupiýasy']),
    'SDG' => new C('SDG', 'Sudan funty', plurals: ['one' => 'sudan funty', 'other' => 'sudan funty']),
    'SEK' => new C('SEK', 'Şwed kronasy', narrow: 'kr', plurals: ['one' => 'şwed kronasy', 'other' => 'şwed kronasy']),
    'SGD' => new C('SGD', 'Singapur dollary', narrow: '$', plurals: ['one' => 'singapur dollary', 'other' => 'singapur dollary']),
    'SHP' => new C('SHP', 'Keramatly Ýelena adasynyň funty', narrow: '£', plurals: ['one' => 'keramatly ýelena adasynyň funty', 'other' => 'keramatly ýelena adasynyň funty']),
    'SLL' => new C('SLL', 'Sýerra-Leone leony', plurals: ['one' => 'sýerra-leone leony', 'other' => 'sýerra-leone leony']),
    'SOS' => new C('SOS', 'Somali şillingi', plurals: ['one' => 'somali şillingi', 'other' => 'somali şillingi']),
    'SRD' => new C('SRD', 'Surinam dollary', narrow: '$', plurals: ['one' => 'surinam dollary', 'other' => 'surinam dollary']),
    'SSP' => new C('SSP', 'Günorta Sudan funty', narrow: '£', plurals: ['one' => 'günorta sudan funty', 'other' => 'günorta sudan funty']),
    'STD' => new C('STD', 'San-Tome we Prinsipi dobrasy (1977–2017)', plurals: ['one' => 'san-tome we prinsipi dobrasy (1977–2017)', 'other' => 'san-tome we prinsipi dobrasy (1977–2017)']),
    'STN' => new C('STN', 'San-Tome we Prinsipi dobrasy', narrow: 'Db', plurals: ['one' => 'san-tome we prinsipi dobrasy', 'other' => 'san-tome we prinsipi dobrasy']),
    'SYP' => new C('SYP', 'Siriýa funty', narrow: '£', plurals: ['one' => 'siriýa funty', 'other' => 'siriýa funty']),
    'SZL' => new C('SZL', 'Swazi lilangeni', plurals: ['one' => 'swazi lilangeni', 'other' => 'swazi lilangeni']),
    'THB' => new C('THB', 'Taýland baty', narrow: '฿', plurals: ['one' => 'taýland baty', 'other' => 'taýland baty']),
    'TJS' => new C('TJS', 'Täjik somonisi', plurals: ['one' => 'täjik somonisi', 'other' => 'täjik somonisi']),
    'TMT' => new C('TMT', 'Türkmen manady', plurals: ['one' => 'türkmen manady', 'other' => 'türkmen manady']),
    'TND' => new C('TND', 'Tunis dinary', plurals: ['one' => 'tunis dinary', 'other' => 'tunis dinary'], minorUnits: 3),
    'TOP' => new C('TOP', 'Tonga paangasy', narrow: 'T$', plurals: ['one' => 'tonga paangasy', 'other' => 'tonga paangasy']),
    'TRY' => new C('TRY', 'Türk lirasy', narrow: '₺', plurals: ['one' => 'türk lirasy', 'other' => 'türk lirasy']),
    'TTD' => new C('TTD', 'Trininad we Tobago dollary', narrow: '$', plurals: ['one' => 'trininad we tobago dollary', 'other' => 'trininad we tobago dollary']),
    'TWD' => new C('TWD', 'Täze Taýwan dollary', 'NT$', narrow: '$', plurals: ['one' => 'täze taýwan dollary', 'other' => 'täze taýwan dollary']),
    'TZS' => new C('TZS', 'Tanzaniýa şillingi', plurals: ['one' => 'tanzaniýa şillingi', 'other' => 'tanzaniýa şillingi']),
    'UAH' => new C('UAH', 'Ukrain griwnasy', narrow: '₴', plurals: ['one' => 'ukrain griwnasy', 'other' => 'ukrain griwnasy']),
    'UGX' => new C('UGX', 'Uganda şillingi', plurals: ['one' => 'uganda şillingi', 'other' => 'uganda şillingi'], minorUnits: 0),
    'USD' => new C('USD', 'ABŞ dollary', 'US$', narrow: '$', plurals: ['one' => 'ABŞ dollary', 'other' => 'ABŞ dollary']),
    'UYU' => new C('UYU', 'Urugwaý pesosy', narrow: '$', plurals: ['one' => 'urugwaý pesosy', 'other' => 'urugwaý pesosy']),
    'UZS' => new C('UZS', 'Özbek somy', plurals: ['one' => 'özbek somy', 'other' => 'özbek somy']),
    'VEF' => new C('VEF', 'Wenesuela boliwary (2008–2018)', narrow: 'Bs', plurals: ['one' => 'wenesuela boliwary (2008–2018)', 'other' => 'wenesuela boliwary (2008–2018)']),
    'VES' => new C('VES', 'Wenesuela boliwary', plurals: ['one' => 'wenesuela boliwary', 'other' => 'wenesuela boliwary']),
    'VND' => new C('VND', 'Wýetnam dongy', '₫', narrow: '₫', plurals: ['one' => 'wýetnam dongy', 'other' => 'wýetnam dongy'], minorUnits: 0),
    'VUV' => new C('VUV', 'Wanuatu watusy', plurals: ['one' => 'wanuatu watusy', 'other' => 'wanuatu watusy'], minorUnits: 0),
    'WST' => new C('WST', 'Samoa talasy', plurals: ['one' => 'samoa talasy', 'other' => 'samoa talasy']),
    'XAF' => new C('XAF', 'KFA BEAC franky', 'FCFA', plurals: ['one' => 'KFA BEAC franky', 'other' => 'KFA BEAC franky'], minorUnits: 0),
    'XCD' => new C('XCD', 'Gündogar karib dollary', 'EC$', narrow: '$', plurals: ['one' => 'gündogar karib dollary', 'other' => 'gündogar karib dollary']),
    'XOF' => new C('XOF', 'KFA BCEAO franky', 'F CFA', plurals: ['one' => 'KFA BCEAO franky', 'other' => 'KFA BCEAO franky'], minorUnits: 0),
    'XPF' => new C('XPF', 'Fransuz ýuwaş umman franky', 'CFPF', plurals: ['one' => 'fransuz ýuwaş umman franky', 'other' => 'fransuz ýuwaş umman franky'], minorUnits: 0),
    'XXX' => new C('XXX', 'Näbelli pul birligi', '¤', plurals: ['one' => 'näbelli pul birligi', 'other' => 'näbelli pul birligi']),
    'YER' => new C('YER', 'Ýemen rialy', plurals: ['one' => 'ýemen rialy', 'other' => 'ýemen rialy']),
    'ZAR' => new C('ZAR', 'Günorta Afrika rendi', narrow: 'R', plurals: ['one' => 'günorta afrika rendi', 'other' => 'günorta afrika rendi']),
    'ZMW' => new C('ZMW', 'Zambiýa kwaçasy', narrow: 'ZK', plurals: ['one' => 'zambiýa kwaçasy', 'other' => 'zambiýa kwaçasy']),
];
