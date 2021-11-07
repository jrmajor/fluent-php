<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'AED' => new C('AED', 'Arabiar Emirerri Batuetako dirhama', plurals: ['one' => 'Arabiar Emirerri Batuetako dirham', 'other' => 'Arabiar Emirerri Batuetako dirham']),
    'AFN' => new C('AFN', 'afgani afganiarra', narrow: '؋', plurals: ['one' => 'afgani afganiar', 'other' => 'afgani afganiar']),
    'ALL' => new C('ALL', 'lek albaniarra', plurals: ['one' => 'lek albaniar', 'other' => 'lek albaniar']),
    'AMD' => new C('AMD', 'dram armeniarra', narrow: '֏', plurals: ['one' => 'dram armeniar', 'other' => 'dram armeniar']),
    'ANG' => new C('ANG', 'Holandarren Antilletako florina', plurals: ['one' => 'Holandarren Antilletako florin', 'other' => 'Holandarren Antilletako florin']),
    'AOA' => new C('AOA', 'kwanza angolarra', narrow: 'Kz', plurals: ['one' => 'kwanza angolar', 'other' => 'kwanza angolar']),
    'ARS' => new C('ARS', 'peso argentinarra', narrow: '$', plurals: ['one' => 'peso argentinar', 'other' => 'peso argentinar']),
    'AUD' => new C('AUD', 'dolar australiarra', 'A$', narrow: '$', plurals: ['one' => 'dolar australiar', 'other' => 'dolar australiar']),
    'AWG' => new C('AWG', 'florin arubarra', plurals: ['one' => 'florin arubar', 'other' => 'florin arubar']),
    'AZN' => new C('AZN', 'manat azerbaijandarra', narrow: '₼', plurals: ['one' => 'manat azerbaijandar', 'other' => 'manat azerbaijandar']),
    'BAM' => new C('BAM', 'marko bihurgarri bosniarra', narrow: 'KM', plurals: ['one' => 'marko bihurgarri bosniar', 'other' => 'marko bihurgarri bosniar']),
    'BBD' => new C('BBD', 'dolar barbadostarra', narrow: '$', plurals: ['one' => 'dolar barbadostar', 'other' => 'dolar barbadostar']),
    'BDT' => new C('BDT', 'taka bangladeshtarra', narrow: '৳', plurals: ['one' => 'taka bangladeshtar', 'other' => 'taka bangladeshtar']),
    'BGN' => new C('BGN', 'lev bulgariarra', plurals: ['one' => 'lev bulgariar', 'other' => 'lev bulgariar']),
    'BHD' => new C('BHD', 'dinar bahraindarra', plurals: ['one' => 'dinar bahraindar', 'other' => 'dinar bahraindar'], minorUnits: 3),
    'BIF' => new C('BIF', 'franko burundiarra', plurals: ['one' => 'franko burundiar', 'other' => 'franko burundiar'], minorUnits: 0),
    'BMD' => new C('BMD', 'dolar bermudarra', narrow: '$', plurals: ['one' => 'dolar bermudar', 'other' => 'dolar bermudar']),
    'BND' => new C('BND', 'dolar bruneitarra', narrow: '$', plurals: ['one' => 'dolar bruneitar', 'other' => 'dolar bruneitar']),
    'BOB' => new C('BOB', 'boliviano boliviarra', narrow: 'Bs', plurals: ['one' => 'boliviano boliviar', 'other' => 'boliviano boliviar']),
    'BRL' => new C('BRL', 'erreal brasildarra', 'R$', narrow: 'R$', plurals: ['one' => 'erreal brasildar', 'other' => 'erreal brasildar']),
    'BSD' => new C('BSD', 'dolar bahamarra', narrow: '$', plurals: ['one' => 'dolar bahamar', 'other' => 'dolar bahamar']),
    'BTN' => new C('BTN', 'ngultrum bhutandarra', plurals: ['one' => 'ngultrum bhutandar', 'other' => 'ngultrum bhutandar']),
    'BWP' => new C('BWP', 'pula botswanarra', narrow: 'P', plurals: ['one' => 'pula botswanar', 'other' => 'pula botswanar']),
    'BYN' => new C('BYN', 'errublo bielorrusiarra', narrow: 'р.', plurals: ['one' => 'errublo bielorrusiar', 'other' => 'errublo bielorrusiar']),
    'BYR' => new C('BYR', 'Bielorrusiako errubloa (2000–2016)', plurals: ['one' => 'Bielorrusiako errublo (2000–2016)', 'other' => 'Bielorrusiako errublo (2000–2016)']),
    'BZD' => new C('BZD', 'dolar belizetarra', narrow: '$', plurals: ['one' => 'dolar belizetar', 'other' => 'dolar belizetar']),
    'CAD' => new C('CAD', 'dolar kanadarra', 'CA$', narrow: '$', plurals: ['one' => 'dolar kanadar', 'other' => 'dolar kanadar']),
    'CDF' => new C('CDF', 'franko kongoarra', plurals: ['one' => 'franko kongoar', 'other' => 'franko kongoar']),
    'CHF' => new C('CHF', 'franko suitzarra', plurals: ['one' => 'franko suitzar', 'other' => 'franko suitzar']),
    'CLP' => new C('CLP', 'peso txiletarra', narrow: '$', plurals: ['one' => 'peso txiletar', 'other' => 'peso txiletar'], minorUnits: 0),
    'CNH' => new C('CNH', 'yuan txinatarra (itsasoz haraindikoa)', plurals: ['one' => 'yuan txinatar (itsasoz haraindikoa)', 'other' => 'yuan txinatar (itsasoz haraindikoa)']),
    'CNY' => new C('CNY', 'yuan txinatarra', 'CN¥', narrow: '¥', plurals: ['one' => 'yuan txinatar', 'other' => 'yuan txinatar']),
    'COP' => new C('COP', 'peso kolonbiarra', narrow: '$', plurals: ['one' => 'peso kolonbiar', 'other' => 'peso kolonbiar']),
    'CRC' => new C('CRC', 'Costa Ricako colona', narrow: '₡', plurals: ['one' => 'Costa Ricako colon', 'other' => 'Costa Ricako colon']),
    'CUC' => new C('CUC', 'peso bihurgarri kubatarra', narrow: '$', plurals: ['one' => 'peso bihurgarri kubatar', 'other' => 'peso bihurgarri kubatar']),
    'CUP' => new C('CUP', 'peso kubatarra', narrow: '$', plurals: ['one' => 'peso kubatar', 'other' => 'peso kubatar']),
    'CVE' => new C('CVE', 'ezkutu caboverdetarra', plurals: ['one' => 'ezkutu caboverdetar', 'other' => 'ezkutu caboverdetar']),
    'CZK' => new C('CZK', 'koroa txekiarra', narrow: 'Kč', plurals: ['one' => 'koroa txekiar', 'other' => 'koroa txekiar']),
    'DJF' => new C('DJF', 'franko djibutiarra', plurals: ['one' => 'franko djibutiar', 'other' => 'franko djibutiar'], minorUnits: 0),
    'DKK' => new C('DKK', 'koroa danimarkarra', narrow: 'kr', plurals: ['one' => 'koroa danimarkar', 'other' => 'koroa danimarkar']),
    'DOP' => new C('DOP', 'peso dominikarra', narrow: '$', plurals: ['one' => 'peso dominikar', 'other' => 'peso dominikar']),
    'DZD' => new C('DZD', 'dinar aljeriarra', plurals: ['one' => 'dinar aljeriar', 'other' => 'dinar aljeriar']),
    'EGP' => new C('EGP', 'libera egiptoarra', narrow: 'E£', plurals: ['one' => 'libera egiptoar', 'other' => 'libera egiptoar']),
    'ERN' => new C('ERN', 'nakfa eritrearra', plurals: ['one' => 'nakfa eritrear', 'other' => 'nakfa eritrear']),
    'ESP' => new C('ESP', symbol: '₧', narrow: '₧'),
    'ETB' => new C('ETB', 'birr etiopiarra', plurals: ['one' => 'birr etiopiar', 'other' => 'birr etiopiar']),
    'EUR' => new C('EUR', 'euroa', '€', narrow: '€', plurals: ['one' => 'euro', 'other' => 'euro']),
    'FJD' => new C('FJD', 'dolar fijiarra', narrow: '$', plurals: ['one' => 'dolar fijiar', 'other' => 'dolar fijiar']),
    'FKP' => new C('FKP', 'libera falklandarra', narrow: '£', plurals: ['one' => 'libera falklandar', 'other' => 'libera falklandar']),
    'GBP' => new C('GBP', 'libera esterlina', '£', narrow: '£', plurals: ['one' => 'libera esterlina', 'other' => 'libera esterlina']),
    'GEL' => new C('GEL', 'lari georgiarra', narrow: '₾', plurals: ['one' => 'lari georgiar', 'other' => 'lari georgiar']),
    'GHS' => new C('GHS', 'cedi ghanatarra', narrow: 'GH₵', plurals: ['one' => 'cedi ghanatar', 'other' => 'cedi ghanatar']),
    'GIP' => new C('GIP', 'libera gibraltartarra', narrow: '£', plurals: ['one' => 'libera gibraltartar', 'other' => 'libera gibraltartar']),
    'GMD' => new C('GMD', 'dalasi ganbiarra', plurals: ['one' => 'dalasi ganbiar', 'other' => 'dalasi ganbiar']),
    'GNF' => new C('GNF', 'franko ginearra', narrow: 'FG', plurals: ['one' => 'franko ginear', 'other' => 'franko ginear'], minorUnits: 0),
    'GTQ' => new C('GTQ', 'ketzal guatemalarra', narrow: 'Q', plurals: ['one' => 'ketzal guatemalar', 'other' => 'ketzal guatemalar']),
    'GYD' => new C('GYD', 'dolar guyanarra', narrow: '$', plurals: ['one' => 'dolar guyanar', 'other' => 'dolar guyanar']),
    'HKD' => new C('HKD', 'dolar hongkongtarra', 'HK$', narrow: '$', plurals: ['one' => 'dolar hongkongtar', 'other' => 'dolar hongkongtar']),
    'HNL' => new C('HNL', 'lempira hodurastarra', narrow: 'L', plurals: ['one' => 'lempira hodurastar', 'other' => 'lempira hodurastar']),
    'HRK' => new C('HRK', 'kuna kroaziarra', narrow: 'kn', plurals: ['one' => 'kuna kroaziar', 'other' => 'kuna kroaziar']),
    'HTG' => new C('HTG', 'gourde haitiarra', plurals: ['one' => 'gourde haitiar', 'other' => 'gourde haitiar']),
    'HUF' => new C('HUF', 'florin hungariarra', narrow: 'Ft', plurals: ['one' => 'florin hungariar', 'other' => 'florin hungariar']),
    'IDR' => new C('IDR', 'errupia indonesiarra', narrow: 'Rp', plurals: ['one' => 'errupia indonesiar', 'other' => 'errupia indonesiar']),
    'ILS' => new C('ILS', 'shekel israeldar berria', '₪', narrow: '₪', plurals: ['one' => 'shekel israeldar berri', 'other' => 'shekel israeldar berri']),
    'INR' => new C('INR', 'errupia indiarra', '₹', narrow: '₹', plurals: ['one' => 'errupia indiar', 'other' => 'errupia indiar']),
    'IQD' => new C('IQD', 'dinar irakiarra', plurals: ['one' => 'dinar irakiar', 'other' => 'dinar irakiar'], minorUnits: 3),
    'IRR' => new C('IRR', 'rial irandarra', plurals: ['one' => 'rial irandar', 'other' => 'rial irandar']),
    'ISK' => new C('ISK', 'koroa islandiarra', narrow: 'kr', plurals: ['one' => 'koroa islandiar', 'other' => 'koroa islandiar'], minorUnits: 0),
    'JMD' => new C('JMD', 'dolar jamaikarra', narrow: '$', plurals: ['one' => 'dolar jamaikar', 'other' => 'dolar jamaikar']),
    'JOD' => new C('JOD', 'dinar jordaniarra', plurals: ['one' => 'dinar jordaniar', 'other' => 'dinar jordaniar'], minorUnits: 3),
    'JPY' => new C('JPY', 'yen japoniarra', 'JP¥', narrow: '¥', plurals: ['one' => 'yen japoniar', 'other' => 'yen japoniar'], minorUnits: 0),
    'KES' => new C('KES', 'txelin kenyarra', plurals: ['one' => 'txelin kenyar', 'other' => 'txelin kenyar']),
    'KGS' => new C('KGS', 'som kirgizistandarra', plurals: ['one' => 'som kirgizistandar', 'other' => 'som kirgizistandar']),
    'KHR' => new C('KHR', 'riel kanbodiarra', narrow: '៛', plurals: ['one' => 'riel kanbodiar', 'other' => 'riel kanbodiar']),
    'KMF' => new C('KMF', 'franko komoretarra', narrow: 'CF', plurals: ['one' => 'franko komoretar', 'other' => 'franko komoretar'], minorUnits: 0),
    'KPW' => new C('KPW', 'won iparkorearra', narrow: '₩', plurals: ['one' => 'won iparkorear', 'other' => 'won iparkorear']),
    'KRW' => new C('KRW', 'won hegokorearra', '₩', narrow: '₩', plurals: ['one' => 'won hegokorear', 'other' => 'won hegokorear'], minorUnits: 0),
    'KWD' => new C('KWD', 'dinar kuwaitarra', plurals: ['one' => 'dinar kuwaitar', 'other' => 'dinar kuwaitar'], minorUnits: 3),
    'KYD' => new C('KYD', 'dolar kaimandarra', narrow: '$', plurals: ['one' => 'dolar kaimandar', 'other' => 'dolar kaimandar']),
    'KZT' => new C('KZT', 'tenge kazakhstandarra', narrow: '₸', plurals: ['one' => 'tenge kazakhstandar', 'other' => 'tenge kazakhstandar']),
    'LAK' => new C('LAK', 'kip laostarra', narrow: '₭', plurals: ['one' => 'kip laostar', 'other' => 'kip laostar']),
    'LBP' => new C('LBP', 'libera libanoarra', narrow: 'L£', plurals: ['one' => 'libera libanoar', 'other' => 'libera libanoar']),
    'LKR' => new C('LKR', 'errupia srilankarra', narrow: 'Rs', plurals: ['one' => 'errupia srilankar', 'other' => 'errupia srilankar']),
    'LRD' => new C('LRD', 'dolar liberiarra', narrow: '$', plurals: ['one' => 'dolar liberiar', 'other' => 'dolar liberiar']),
    'LSL' => new C('LSL', 'Lesothoko lotia'),
    'LTL' => new C('LTL', 'Lituaniako litasa', narrow: 'Lt', plurals: ['one' => 'Lituaniako litas', 'other' => 'Lituaniako litas']),
    'LVL' => new C('LVL', 'Letoniako latsa', narrow: 'Ls', plurals: ['one' => 'Letoniako lats', 'other' => 'Letoniako lats']),
    'LYD' => new C('LYD', 'dinar libiarra', plurals: ['one' => 'dinar libiar', 'other' => 'dinar libiar'], minorUnits: 3),
    'MAD' => new C('MAD', 'dirham marokoarra', plurals: ['one' => 'dirham marokoar', 'other' => 'dirham marokoar']),
    'MDL' => new C('MDL', 'leu moldaviarra', plurals: ['one' => 'leu moldaviar', 'other' => 'leu moldaviar']),
    'MGA' => new C('MGA', 'ariary madagaskartarra', narrow: 'Ar', plurals: ['one' => 'ariary madagaskartar', 'other' => 'ariary madagaskartar']),
    'MKD' => new C('MKD', 'dinar mazedoniarra', plurals: ['one' => 'dinar mazedoniar', 'other' => 'dinar mazedoniar']),
    'MMK' => new C('MMK', 'kyat myanmartarra', narrow: 'K', plurals: ['one' => 'kyat myanmartar', 'other' => 'kyat myanmartar']),
    'MNT' => new C('MNT', 'tugrik mongoliarra', narrow: '₮', plurals: ['one' => 'tugrik mongoliar', 'other' => 'tugrik mongoliar']),
    'MOP' => new C('MOP', 'pataca macauarra', plurals: ['one' => 'pataca macauar', 'other' => 'pataca macauar']),
    'MRO' => new C('MRO', 'Mauritaniako ouguiya (1973–2017)', plurals: ['one' => 'Mauritaniako ouguiya (1973–2017)', 'other' => 'Mauritaniako ouguiya (1973–2017)']),
    'MRU' => new C('MRU', 'uguiya mauritaniarra', plurals: ['one' => 'uguiya mauritaniar', 'other' => 'uguiya mauritaniar']),
    'MUR' => new C('MUR', 'errupia mauriziarra', narrow: 'Rs', plurals: ['one' => 'errupia mauriziar', 'other' => 'errupia mauriziar']),
    'MVR' => new C('MVR', 'rufiyaa maldivarra', plurals: ['one' => 'rufiyaa maldivar', 'other' => 'rufiyaa maldivar']),
    'MWK' => new C('MWK', 'kwacha malawiarra', plurals: ['one' => 'kwacha malawiar', 'other' => 'kwacha malawiar']),
    'MXN' => new C('MXN', 'peso mexikarra', 'MX$', narrow: '$', plurals: ['one' => 'peso mexikar', 'other' => 'peso mexikar']),
    'MYR' => new C('MYR', 'ringgit malaysiarra', narrow: 'RM', plurals: ['one' => 'ringgit malaysiar', 'other' => 'ringgit malaysiar']),
    'MZN' => new C('MZN', 'metical mozambiketarra', plurals: ['one' => 'metical mozambiketar', 'other' => 'metical mozambiketar']),
    'NAD' => new C('NAD', 'dolar namibiarra', narrow: '$', plurals: ['one' => 'dolar namibiar', 'other' => 'dolar namibiar']),
    'NGN' => new C('NGN', 'naira nigeriarra', narrow: '₦', plurals: ['one' => 'naira nigeriar', 'other' => 'naira nigeriar']),
    'NIO' => new C('NIO', 'cordoba nikaraguarra', narrow: 'C$', plurals: ['one' => 'cordoba nikaraguar', 'other' => 'cordoba nikaraguar']),
    'NOK' => new C('NOK', 'koroa norvegiarra', narrow: 'kr', plurals: ['one' => 'koroa norvegiar', 'other' => 'koroa norvegiar']),
    'NPR' => new C('NPR', 'errupia nepaldarra', narrow: 'Rs', plurals: ['one' => 'errupia nepaldar', 'other' => 'errupia nepaldar']),
    'NZD' => new C('NZD', 'dolar zeelandaberritarra', 'NZ$', narrow: '$', plurals: ['one' => 'dolar zeelandaberritar', 'other' => 'dolar zeelandaberritar']),
    'OMR' => new C('OMR', 'rial omandarra', plurals: ['one' => 'rial omandar', 'other' => 'rial omandar'], minorUnits: 3),
    'PAB' => new C('PAB', 'balboa panamarra', plurals: ['one' => 'balboa panamar', 'other' => 'balboa panamar']),
    'PEN' => new C('PEN', 'sol perutarra', plurals: ['one' => 'sol perutar', 'other' => 'sol perutar']),
    'PGK' => new C('PGK', 'kina gineaberriarra', plurals: ['one' => 'kina gineaberriar', 'other' => 'kina gineaberriar']),
    'PHP' => new C('PHP', 'peso filipinarra', narrow: '₱', plurals: ['one' => 'peso filipinar', 'other' => 'peso filipinar']),
    'PKR' => new C('PKR', 'errupia pakistandarra', narrow: 'Rs', plurals: ['one' => 'errupia pakistandar', 'other' => 'errupia pakistandar']),
    'PLN' => new C('PLN', 'zloty poloniarra', narrow: 'zł', plurals: ['one' => 'zloty poloniar', 'other' => 'zloty poloniar']),
    'PYG' => new C('PYG', 'guarani paraguaitarra', narrow: '₲', plurals: ['one' => 'guarani paraguaitar', 'other' => 'guarani paraguaitar'], minorUnits: 0),
    'QAR' => new C('QAR', 'riyal qatartarra', plurals: ['one' => 'riyal qatartar', 'other' => 'riyal qatartar']),
    'RON' => new C('RON', 'leu errumaniarra', narrow: 'lei', plurals: ['one' => 'leu errumaniar', 'other' => 'leu errumaniar']),
    'RSD' => new C('RSD', 'dinar serbiarra', plurals: ['one' => 'dinar serbiar', 'other' => 'dinar serbiar']),
    'RUB' => new C('RUB', 'errublo errusiarra', narrow: '₽', plurals: ['one' => 'errublo errusiar', 'other' => 'errublo errusiar']),
    'RWF' => new C('RWF', 'franko ruandarra', narrow: 'RF', plurals: ['one' => 'franko ruandar', 'other' => 'franko ruandar'], minorUnits: 0),
    'SAR' => new C('SAR', 'riyal saudiarabiarra', plurals: ['one' => 'riyal saudiarabiar', 'other' => 'riyal saudiarabiar']),
    'SBD' => new C('SBD', 'dolar salomondarra', narrow: '$', plurals: ['one' => 'dolar salomondar', 'other' => 'dolar salomondar']),
    'SCR' => new C('SCR', 'errupia seychelletarra', plurals: ['one' => 'errupia seychelletar', 'other' => 'errupia seychelletar']),
    'SDG' => new C('SDG', 'libera sudandarra', plurals: ['one' => 'libera sudandar', 'other' => 'libera sudandar']),
    'SEK' => new C('SEK', 'koroa suediarra', narrow: 'kr', plurals: ['one' => 'koroa suediar', 'other' => 'koroa suediar']),
    'SGD' => new C('SGD', 'dolar singapurtarra', narrow: '$', plurals: ['one' => 'dolar singapurtar', 'other' => 'dolar singapurtar']),
    'SHP' => new C('SHP', 'Santa Helenako libera', narrow: '£', plurals: ['one' => 'Santa Helenako libera', 'other' => 'Santa Helenako libera']),
    'SLL' => new C('SLL', 'leone sierraleonarra', plurals: ['one' => 'leone sierraleonar', 'other' => 'leone sierraleonar']),
    'SOS' => new C('SOS', 'txelin somaliarra', plurals: ['one' => 'txelin somaliar', 'other' => 'txelin somaliar']),
    'SRD' => new C('SRD', 'dolar surinamdarra', narrow: '$', plurals: ['one' => 'dolar surinamdar', 'other' => 'dolar surinamdar']),
    'SSP' => new C('SSP', 'libera hegosudandarra', narrow: '£', plurals: ['one' => 'libera hegosudandar', 'other' => 'libera hegosudandar']),
    'STD' => new C('STD', 'Sao Tomeko eta Principeko dobra (1977–2017)', plurals: ['one' => 'Sao Tomeko eta Principeko dobra (1977–2017)', 'other' => 'Sao Tomeko eta Principeko dobra (1977–2017)']),
    'STN' => new C('STN', 'dobra saotometarra', narrow: 'Db', plurals: ['one' => 'dobra saotometar', 'other' => 'dobra saotometar']),
    'SYP' => new C('SYP', 'libera siriarra', narrow: '£', plurals: ['one' => 'libera siriar', 'other' => 'libera siriar']),
    'SZL' => new C('SZL', 'lilangeni swazilandiarra', plurals: ['one' => 'lilangeni swazilandiar', 'other' => 'lilangeni swazilandiar']),
    'THB' => new C('THB', 'baht thailandiarra', '฿', narrow: '฿', plurals: ['one' => 'baht thailandiar', 'other' => 'baht thailandiar']),
    'TJS' => new C('TJS', 'somoni tajikistandarra', plurals: ['one' => 'somoni tajikistandar', 'other' => 'somoni tajikistandar']),
    'TMT' => new C('TMT', 'manat turkmenistandarra', plurals: ['one' => 'manat turkmenistandar', 'other' => 'manat turkmenistandar']),
    'TND' => new C('TND', 'dinar tunisiarra', plurals: ['one' => 'dinar tunisiar', 'other' => 'dinar tunisiar'], minorUnits: 3),
    'TOP' => new C('TOP', 'paʻanga tongatarra', narrow: 'T$', plurals: ['one' => 'paʻanga tongatar', 'other' => 'paʻanga tongatar']),
    'TRY' => new C('TRY', 'lira turkiarra', narrow: '₺', plurals: ['one' => 'lira turkiar', 'other' => 'lira turkiar']),
    'TTD' => new C('TTD', 'Trinidad eta Tobagoko dolarra', narrow: '$', plurals: ['one' => 'Trinidad eta Tobagoko dolar', 'other' => 'Trinidad eta Tobagoko dolar']),
    'TWD' => new C('TWD', 'dolar taiwandar berria', 'NT$', narrow: 'NT$', plurals: ['one' => 'dolar taiwandar berri', 'other' => 'dolar taiwandar berri']),
    'TZS' => new C('TZS', 'txelin tanzaniarra', plurals: ['one' => 'txelin tanzaniar', 'other' => 'txelin tanzaniar']),
    'UAH' => new C('UAH', 'hryvnia ukrainarra', narrow: '₴', plurals: ['one' => 'hryvnia ukrainar', 'other' => 'hryvnia ukrainar']),
    'UGX' => new C('UGX', 'txelin ugandarra', plurals: ['one' => 'txelin ugandar', 'other' => 'txelin ugandar'], minorUnits: 0),
    'USD' => new C('USD', 'dolar estatubatuarra', 'US$', narrow: '$', plurals: ['one' => 'dolar estatubatuar', 'other' => 'dolar estatubatuar']),
    'UYU' => new C('UYU', 'peso uruguaitarra', narrow: '$', plurals: ['one' => 'peso uruguaitar', 'other' => 'peso uruguaitar']),
    'UZS' => new C('UZS', 'sum uzbekistandarra', plurals: ['one' => 'sum uzbekistandar', 'other' => 'sum uzbekistandar']),
    'VEF' => new C('VEF', 'Venezuelako bolivarra (2008–2018)', narrow: 'Bs', plurals: ['one' => 'Venezuelako bolivar (2008–2018)', 'other' => 'Venezuelako bolivar (2008–2018)']),
    'VES' => new C('VES', 'bolivar venezuelarra', plurals: ['one' => 'bolivar venezuelar', 'other' => 'bolivar venezuelar']),
    'VND' => new C('VND', 'dong vietnamdarra', '₫', narrow: '₫', plurals: ['one' => 'dong vietnamdar', 'other' => 'dong vietnamdar'], minorUnits: 0),
    'VUV' => new C('VUV', 'vatu vanuatuarra', plurals: ['one' => 'vatu vanuatuar', 'other' => 'vatu vanuatuar'], minorUnits: 0),
    'WST' => new C('WST', 'tala samoarra', plurals: ['one' => 'tala samoar', 'other' => 'tala samoar']),
    'XAF' => new C('XAF', 'Afrika erdialdeko CFA frankoa', 'FCFA', plurals: ['one' => 'Afrika erdialdeko CFA franko', 'other' => 'Afrika erdialdeko CFA franko'], minorUnits: 0),
    'XCD' => new C('XCD', 'Karibe ekialdeko dolarra', 'EC$', narrow: '$', plurals: ['one' => 'Karibe ekialdeko dolar', 'other' => 'Karibe ekialdeko dolar']),
    'XOF' => new C('XOF', 'Afrika mendebaldeko CFA frankoa', 'F CFA', plurals: ['one' => 'Afrika mendebaldeko CFA franko', 'other' => 'Afrika mendebaldeko CFA franko'], minorUnits: 0),
    'XPF' => new C('XPF', 'CFP frankoa', 'CFPF', plurals: ['one' => 'CFP franko', 'other' => 'CFP franko'], minorUnits: 0),
    'XXX' => new C('XXX', 'moneta ezezaguna', '¤', plurals: ['one' => '(moneta ezezaguna)', 'other' => '(moneta ezezaguna)']),
    'YER' => new C('YER', 'rial yemendarra', plurals: ['one' => 'rial yemendar', 'other' => 'rial yemendar']),
    'ZAR' => new C('ZAR', 'rand hegoafrikarra', narrow: 'R', plurals: ['one' => 'rand hegoafrikar', 'other' => 'rand hegoafrikar']),
    'ZMK' => new C('ZMK', 'Zambiako kwacha (1968–2012)'),
    'ZMW' => new C('ZMW', 'kwacha zambiarra', narrow: 'ZK', plurals: ['one' => 'kwacha zambiar', 'other' => 'kwacha zambiar']),
];
