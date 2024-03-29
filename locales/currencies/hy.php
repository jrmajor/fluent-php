<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'AED' => new C('AED', 'Արաբական Միացյալ Էմիրությունների դիրհամ', plurals: 'ԱՄԷ դիրհամ'),
    'AFN' => new C('AFN', 'աֆղանական աֆղանի', narrow: '؋'),
    'ALL' => new C('ALL', 'ալբանական լեկ'),
    'AMD' => new C('AMD', 'հայկական դրամ', '֏', '֏'),
    'ANG' => new C('ANG', 'նիդեռլանդական անտիլյան գուլդեն'),
    'AOA' => new C('AOA', 'անգոլական կվանզա', narrow: 'Kz'),
    'ARS' => new C('ARS', 'արգենտինական պեսո', narrow: '$'),
    'AUD' => new C('AUD', 'ավստրալիական դոլար', 'A$', '$'),
    'AWG' => new C('AWG', 'արուբական ֆլորին'),
    'AZN' => new C('AZN', 'ադրբեջանական մանաթ', narrow: '₼'),
    'BAM' => new C('BAM', 'Բոսնիա և Հերցեգովինայի փոխարկվող մարկ', narrow: 'KM'),
    'BBD' => new C('BBD', 'բարբադոսյան դոլար', narrow: '$'),
    'BDT' => new C('BDT', 'Բանգլադեշի տակա', narrow: '৳'),
    'BGN' => new C('BGN', 'բուլղարական լև'),
    'BHD' => new C('BHD', 'Բահրեյնի դինար', minorUnits: 3),
    'BIF' => new C('BIF', 'բուրունդիական ֆրանկ', minorUnits: 0),
    'BMD' => new C('BMD', 'բերմուդյան դոլար', narrow: '$'),
    'BND' => new C('BND', 'Բրունեյի դոլար', narrow: '$'),
    'BOB' => new C('BOB', 'բոլիվիական բոլիվիանո', narrow: 'Bs'),
    'BRL' => new C('BRL', 'բրազիլական ռեալ', 'R$', 'R$'),
    'BSD' => new C('BSD', 'բահամյան դոլար', narrow: '$'),
    'BTN' => new C('BTN', 'բութանական նգուլտրում'),
    'BWP' => new C('BWP', 'բոթսվանական պուլա', narrow: 'P'),
    'BYN' => new C('BYN', 'բելառուսական ռուբլի', narrow: 'р.'),
    'BYR' => new C('BYR', 'Բելառուսական ռուբլի (2000–2016)', plurals: 'բելառուսական ռուբլի (2000–2016)'),
    'BZD' => new C('BZD', 'Բելիզի դոլար', narrow: '$'),
    'CAD' => new C('CAD', 'կանադական դոլար', 'CA$', '$'),
    'CDF' => new C('CDF', 'Կոնգոյի ֆրանկ'),
    'CHF' => new C('CHF', 'շվեյցարական ֆրանկ'),
    'CLP' => new C('CLP', 'չիլիական պեսո', narrow: '$', minorUnits: 0),
    'CNH' => new C('CNH', 'չինական օֆշորային յուան'),
    'CNY' => new C('CNY', 'չինական յուան', 'CN¥', '¥'),
    'COP' => new C('COP', 'կոլումբիական պեսո', narrow: '$'),
    'CRC' => new C('CRC', 'Կոստա Ռիկայի կոլոն', narrow: '₡'),
    'CUC' => new C('CUC', 'կուբայական փոխարկվող պեսո', narrow: '$'),
    'CUP' => new C('CUP', 'կուբայական պեսո', narrow: '$'),
    'CVE' => new C('CVE', 'Կաբո Վերդեի էսկուդո'),
    'CZK' => new C('CZK', 'չեխական կրոն', narrow: 'Kč'),
    'DJF' => new C('DJF', 'Ջիբութիի ֆրանկ', minorUnits: 0),
    'DKK' => new C('DKK', 'դանիական կրոն', narrow: 'kr'),
    'DOP' => new C('DOP', 'դոմինիկյան պեսո', narrow: '$'),
    'DZD' => new C('DZD', 'ալժիրական դինար'),
    'EGP' => new C('EGP', 'եգիպտական ֆունտ', narrow: 'E£'),
    'ERN' => new C('ERN', 'էրիթրեական նակվա', plurals: 'էրիթրեական նակֆա'),
    'ETB' => new C('ETB', 'եթովպիական բիր'),
    'EUR' => new C('EUR', 'եվրո', '€', '€'),
    'FJD' => new C('FJD', 'ֆիջիական դոլար', narrow: '$'),
    'FKP' => new C('FKP', 'Ֆոլքլենդյան կղզիների ֆունտ', narrow: '£'),
    'GBP' => new C('GBP', 'բրիտանական ֆունտ ստերլինգ', '£', '£'),
    'GEL' => new C('GEL', 'վրացական լարի', narrow: '₾'),
    'GHS' => new C('GHS', 'գայանական սեդի', narrow: 'GH₵', plurals: 'գանայական սեդի'),
    'GIP' => new C('GIP', 'Ջիբրալթարի ֆունտ', narrow: '£'),
    'GMD' => new C('GMD', 'գամբիական դալասի'),
    'GNF' => new C('GNF', 'գվինեական ֆրանկ', narrow: 'FG', minorUnits: 0),
    'GTQ' => new C('GTQ', 'գվատեմալական կետսալ', narrow: 'Q'),
    'GYD' => new C('GYD', 'գայանական դոլար', narrow: '$'),
    'HKD' => new C('HKD', 'Հոնկոնգի դոլար', 'HK$', '$'),
    'HNL' => new C('HNL', 'հոնդուրասական լեմպիրա', narrow: 'L'),
    'HRK' => new C('HRK', 'խորվաթական կունա', narrow: 'kn'),
    'HTG' => new C('HTG', 'հայիթյան գուրդ'),
    'HUF' => new C('HUF', 'հունգարական ֆորինտ', narrow: 'Ft'),
    'IDR' => new C('IDR', 'ինդոնեզիական ռուփի', narrow: 'Rp'),
    'ILS' => new C('ILS', 'Իսրայելի նոր շեկել', '₪', '₪'),
    'INR' => new C('INR', 'հնդկական ռուփի', '₹', '₹'),
    'IQD' => new C('IQD', 'իրաքյան դինար', minorUnits: 3),
    'IRR' => new C('IRR', 'իրանական ռիալ'),
    'ISK' => new C('ISK', 'իսլանդական կրոն', narrow: 'kr', minorUnits: 0),
    'JMD' => new C('JMD', 'Ճամայկայի դոլար', narrow: '$'),
    'JOD' => new C('JOD', 'հորդանանյան դինար', minorUnits: 3),
    'JPY' => new C('JPY', 'ճապոնական իեն', 'JP¥', '¥', minorUnits: 0),
    'KES' => new C('KES', 'քենիական շիլինգ'),
    'KGS' => new C('KGS', 'ղրղզական սոմ', narrow: '⃀'),
    'KHR' => new C('KHR', 'կամբոջական ռիել', narrow: '៛'),
    'KMF' => new C('KMF', 'կոմորյան ֆրանկ', narrow: 'CF', minorUnits: 0),
    'KPW' => new C('KPW', 'հյուսիսկորեական վոն', narrow: '₩'),
    'KRW' => new C('KRW', 'հարավկորեական վոն', '₩', '₩', minorUnits: 0),
    'KWD' => new C('KWD', 'Քուվեյթի դինար', minorUnits: 3),
    'KYD' => new C('KYD', 'Կայմանյան կղզիների դոլար', narrow: '$'),
    'KZT' => new C('KZT', 'ղազախական տենգե', narrow: '₸'),
    'LAK' => new C('LAK', 'լաոսական կիպ', narrow: '₭'),
    'LBP' => new C('LBP', 'լիբանանյան ֆունտ', narrow: 'L£'),
    'LKR' => new C('LKR', 'Շրի Լանկայի ռուփի', narrow: 'Rs'),
    'LRD' => new C('LRD', 'լիբերիական դոլար', narrow: '$'),
    'LSL' => new C('LSL', 'լեսոթոյական լոտի'),
    'LTL' => new C('LTL', 'Լիտվական լիտ', narrow: 'Lt'),
    'LVL' => new C('LVL', 'Լատվիական լատ', narrow: 'Ls'),
    'LYD' => new C('LYD', 'լիբիական դինար', minorUnits: 3),
    'MAD' => new C('MAD', 'Մարոկկոյի դիրհամ'),
    'MDL' => new C('MDL', 'մոլդովական լեյ'),
    'MGA' => new C('MGA', 'Մադագասկարի արիարի', narrow: 'Ar'),
    'MKD' => new C('MKD', 'մակեդոնական դենար'),
    'MMK' => new C('MMK', 'Մյանմայի կյատ', narrow: 'K'),
    'MNT' => new C('MNT', 'մոնղոլական տուգրիկ', narrow: '₮'),
    'MOP' => new C('MOP', 'Մակաոյի պատակա'),
    'MRO' => new C('MRO', 'մավրիտանական ուգիյա (1973–2017)'),
    'MRU' => new C('MRU', 'մավրիտանական ուգիյա'),
    'MUR' => new C('MUR', 'մավրիկյան ռուփի', narrow: 'Rs'),
    'MVR' => new C('MVR', 'մալդիվյան ռուֆիյա'),
    'MWK' => new C('MWK', 'մալավիական կվաչա'),
    'MXN' => new C('MXN', 'մեքսիկական պեսո', 'MX$', '$'),
    'MYR' => new C('MYR', 'մալայզիական ռինգիտ', narrow: 'RM'),
    'MZN' => new C('MZN', 'մոզամբիկյան մետիկալ'),
    'NAD' => new C('NAD', 'նամիբիական դոլար', narrow: '$'),
    'NGN' => new C('NGN', 'նիգերիական նայրա', narrow: '₦'),
    'NIO' => new C('NIO', 'նիկարագուական կորդոբա', narrow: 'C$'),
    'NOK' => new C('NOK', 'նորվեգական կրոն', narrow: 'kr'),
    'NPR' => new C('NPR', 'Նեպալի ռուփի', narrow: 'Rs'),
    'NZD' => new C('NZD', 'նորզելանդական դոլար', 'NZ$', '$'),
    'OMR' => new C('OMR', 'Օմանի ռիալ', minorUnits: 3),
    'PAB' => new C('PAB', 'պանամական բալբոա'),
    'PEN' => new C('PEN', 'Պերուի սոլ'),
    'PGK' => new C('PGK', 'Պապուա Նոր Գվինեայի կինա'),
    'PHP' => new C('PHP', 'ֆիլիպինյան պեսո', narrow: '₱'),
    'PKR' => new C('PKR', 'պակիստանյան ռուփի', narrow: 'Rs'),
    'PLN' => new C('PLN', 'լեհական զլոտի', narrow: 'zł'),
    'PYG' => new C('PYG', 'պարագվայական գուարանի', narrow: '₲', minorUnits: 0),
    'QAR' => new C('QAR', 'Կատարի ռիալ'),
    'RON' => new C('RON', 'ռումինական լեյ', narrow: 'lei'),
    'RSD' => new C('RSD', 'սերբական դինար'),
    'RUB' => new C('RUB', 'ռուսական ռուբլի', narrow: '₽'),
    'RWF' => new C('RWF', 'ռուանդական ֆրանկ', narrow: 'RF', minorUnits: 0),
    'SAR' => new C('SAR', 'Սաուդյան Արաբիայի ռիալ'),
    'SBD' => new C('SBD', 'Սողոմոնյան կղզիների դոլար', narrow: '$'),
    'SCR' => new C('SCR', 'սեյշելյան ռուփի'),
    'SDG' => new C('SDG', 'սուդանական ֆունտ'),
    'SEK' => new C('SEK', 'շվեդական կրոն', narrow: 'kr'),
    'SGD' => new C('SGD', 'Սինգապուրի դոլար', narrow: '$'),
    'SHP' => new C('SHP', 'Սուրբ Հեղինեի ֆունտ', narrow: '£'),
    'SLE' => new C('SLE', 'Սիեռա Լեոնեի լեոնե'),
    'SLL' => new C('SLL', 'Սիեռա Լեոնեի լեոնե (1964—2022)'),
    'SOS' => new C('SOS', 'սոմալիական շիլինգ'),
    'SRD' => new C('SRD', 'սուրինամական դոլար', narrow: '$'),
    'SSP' => new C('SSP', 'հարավսուդանական ֆունտ', narrow: '£'),
    'STD' => new C('STD', 'Սան Տոմե և Փրինսիպիի դոբրա (1977–2017)'),
    'STN' => new C('STN', 'Սան Տոմե և Փրինսիպիի դոբրա', narrow: 'Db'),
    'SYP' => new C('SYP', 'սիրիական ֆունտ', narrow: '£'),
    'SZL' => new C('SZL', 'սվազիլենդական լիլանգենի'),
    'THB' => new C('THB', 'թայլանդական բատ', '฿', '฿'),
    'TJS' => new C('TJS', 'տաջիկական սոմոնի'),
    'TMT' => new C('TMT', 'թուրքմենական մանաթ'),
    'TND' => new C('TND', 'թունիսյան դինար', minorUnits: 3),
    'TOP' => new C('TOP', 'Տոնգայի պաանգա', narrow: 'T$'),
    'TRY' => new C('TRY', 'թուրքական լիրա', narrow: '₺'),
    'TTD' => new C('TTD', 'Տրինիդադ և Տոբագոյի դոլար', narrow: '$'),
    'TWD' => new C('TWD', 'թայվանական նոր դոլար', 'NT$', 'NT$'),
    'TZS' => new C('TZS', 'տանզանիական շիլինգ'),
    'UAH' => new C('UAH', 'ուկրաինական գրիվնա', narrow: '₴'),
    'UGX' => new C('UGX', 'ուգանդական շիլինգ', minorUnits: 0),
    'USD' => new C('USD', 'ԱՄՆ դոլար', '$', '$'),
    'UYU' => new C('UYU', 'ուրուգվայական պեսո', narrow: '$'),
    'UZS' => new C('UZS', 'ուզբեկական սոմ'),
    'VEF' => new C('VEF', 'վենեսուելական բոլիվար (2008–2018)', narrow: 'Bs'),
    'VES' => new C('VES', 'վենեսուելական բոլիվար'),
    'VND' => new C('VND', 'վիետնամական դոնգ', '₫', '₫', minorUnits: 0),
    'VUV' => new C('VUV', 'Վանուատուի վատու', minorUnits: 0),
    'WST' => new C('WST', 'սամոական տալա'),
    'XAF' => new C('XAF', 'Կենտրոնական Աֆրիկայի ԿՖԱ ֆրանկ', 'FCFA', minorUnits: 0),
    'XCD' => new C('XCD', 'արևելակարիբյան դոլար', 'EC$', '$'),
    'XOF' => new C('XOF', 'Արևմտյան Աֆրիկայի ԿՖԱ ֆրանկ', "F\u{202F}CFA", minorUnits: 0),
    'XPF' => new C('XPF', 'ԿՊՖ ֆրանկ', 'CFPF', minorUnits: 0),
    'XXX' => new C('XXX', 'անհայտ արժույթ', '¤', plurals: '(անհայտ արժույթ)'),
    'YER' => new C('YER', 'եմենական ռիալ'),
    'ZAR' => new C('ZAR', 'հարավաֆրիկյան ռանդ', narrow: 'R'),
    'ZMK' => new C('ZMK', 'Զամբիական կվաչա (1968–2012)'),
    'ZMW' => new C('ZMW', 'զամբիական կվաչա', narrow: 'ZK'),
];
