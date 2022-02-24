<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'AED' => new C('AED', 'Արաբական Միացյալ Էմիրությունների դիրհամ', plurals: ['one' => 'ԱՄԷ դիրհամ', 'other' => 'ԱՄԷ դիրհամ']),
    'AFN' => new C('AFN', 'աֆղանական աֆղանի', narrow: '؋', plurals: ['one' => 'աֆղանական աֆղանի', 'other' => 'աֆղանական աֆղանի']),
    'ALL' => new C('ALL', 'ալբանական լեկ', plurals: ['one' => 'ալբանական լեկ', 'other' => 'ալբանական լեկ']),
    'AMD' => new C('AMD', 'հայկական դրամ', '֏', narrow: '֏', plurals: ['one' => 'հայկական դրամ', 'other' => 'հայկական դրամ']),
    'ANG' => new C('ANG', 'նիդեռլանդական անտիլյան գուլդեն', plurals: ['one' => 'նիդեռլանդական անտիլյան գուլդեն', 'other' => 'նիդեռլանդական անտիլյան գուլդեն']),
    'AOA' => new C('AOA', 'անգոլական կվանզա', narrow: 'Kz', plurals: ['one' => 'անգոլական կվանզա', 'other' => 'անգոլական կվանզա']),
    'ARS' => new C('ARS', 'արգենտինական պեսո', narrow: '$', plurals: ['one' => 'արգենտինական պեսո', 'other' => 'արգենտինական պեսո']),
    'AUD' => new C('AUD', 'ավստրալիական դոլար', 'A$', narrow: '$', plurals: ['one' => 'ավստրալիական դոլար', 'other' => 'ավստրալիական դոլար']),
    'AWG' => new C('AWG', 'արուբական ֆլորին', plurals: ['one' => 'արուբական ֆլորին', 'other' => 'արուբական ֆլորին']),
    'AZN' => new C('AZN', 'ադրբեջանական մանաթ', narrow: '₼', plurals: ['one' => 'ադրբեջանական մանաթ', 'other' => 'ադրբեջանական մանաթ']),
    'BAM' => new C('BAM', 'Բոսնիա և Հերցեգովինայի փոխարկվող մարկ', narrow: 'KM', plurals: ['one' => 'Բոսնիա և Հերցեգովինայի փոխարկվող մարկ', 'other' => 'Բոսնիա և Հերցեգովինայի փոխարկվող մարկ']),
    'BBD' => new C('BBD', 'բարբադոսյան դոլար', narrow: '$', plurals: ['one' => 'բարբադոսյան դոլար', 'other' => 'բարբադոսյան դոլար']),
    'BDT' => new C('BDT', 'Բանգլադեշի տակա', narrow: '৳', plurals: ['one' => 'Բանգլադեշի տակա', 'other' => 'Բանգլադեշի տակա']),
    'BGN' => new C('BGN', 'բուլղարական լև', plurals: ['one' => 'բուլղարական լև', 'other' => 'բուլղարական լև']),
    'BHD' => new C('BHD', 'Բահրեյնի դինար', plurals: ['one' => 'Բահրեյնի դինար', 'other' => 'Բահրեյնի դինար'], minorUnits: 3),
    'BIF' => new C('BIF', 'բուրունդիական ֆրանկ', plurals: ['one' => 'բուրունդիական ֆրանկ', 'other' => 'բուրունդիական ֆրանկ'], minorUnits: 0),
    'BMD' => new C('BMD', 'բերմուդյան դոլար', narrow: '$', plurals: ['one' => 'բերմուդյան դոլար', 'other' => 'բերմուդյան դոլար']),
    'BND' => new C('BND', 'Բրունեյի դոլար', narrow: '$', plurals: ['one' => 'Բրունեյի դոլար', 'other' => 'Բրունեյի դոլար']),
    'BOB' => new C('BOB', 'բոլիվիական բոլիվիանո', narrow: 'Bs', plurals: ['one' => 'բոլիվիական բոլիվիանո', 'other' => 'բոլիվիական բոլիվիանո']),
    'BRL' => new C('BRL', 'բրազիլական ռեալ', 'R$', narrow: 'R$', plurals: ['one' => 'բրազիլական ռեալ', 'other' => 'բրազիլական ռեալ']),
    'BSD' => new C('BSD', 'բահամյան դոլար', narrow: '$', plurals: ['one' => 'բահամյան դոլար', 'other' => 'բահամյան դոլար']),
    'BTN' => new C('BTN', 'բութանական նգուլտրում', plurals: ['one' => 'բութանական նգուլտրում', 'other' => 'բութանական նգուլտրում']),
    'BWP' => new C('BWP', 'բոթսվանական պուլա', narrow: 'P', plurals: ['one' => 'բոթսվանական պուլա', 'other' => 'բոթսվանական պուլա']),
    'BYN' => new C('BYN', 'բելառուսական ռուբլի', narrow: 'р.', plurals: ['one' => 'բելառուսական ռուբլի', 'other' => 'բելառուսական ռուբլի']),
    'BYR' => new C('BYR', 'Բելառուսական ռուբլի (2000–2016)', plurals: ['one' => 'բելառուսական ռուբլի (2000–2016)', 'other' => 'բելառուսական ռուբլի (2000–2016)']),
    'BZD' => new C('BZD', 'Բելիզի դոլար', narrow: '$', plurals: ['one' => 'Բելիզի դոլար', 'other' => 'Բելիզի դոլար']),
    'CAD' => new C('CAD', 'կանադական դոլար', 'CA$', narrow: '$', plurals: ['one' => 'կանադական դոլար', 'other' => 'կանադական դոլար']),
    'CDF' => new C('CDF', 'Կոնգոյի ֆրանկ', plurals: ['one' => 'Կոնգոյի ֆրանկ', 'other' => 'Կոնգոյի ֆրանկ']),
    'CHF' => new C('CHF', 'շվեյցարական ֆրանկ', plurals: ['one' => 'շվեյցարական ֆրանկ', 'other' => 'շվեյցարական ֆրանկ']),
    'CLP' => new C('CLP', 'չիլիական պեսո', narrow: '$', plurals: ['one' => 'չիլիական պեսո', 'other' => 'չիլիական պեսո'], minorUnits: 0),
    'CNH' => new C('CNH', 'չինական օֆշորային յուան', plurals: ['one' => 'չինական օֆշորային յուան', 'other' => 'չինական օֆշորային յուան']),
    'CNY' => new C('CNY', 'չինական յուան', 'CN¥', narrow: '¥', plurals: ['one' => 'չինական յուան', 'other' => 'չինական յուան']),
    'COP' => new C('COP', 'կոլումբիական պեսո', narrow: '$', plurals: ['one' => 'կոլումբիական պեսո', 'other' => 'կոլումբիական պեսո']),
    'CRC' => new C('CRC', 'Կոստա Ռիկայի կոլոն', narrow: '₡', plurals: ['one' => 'Կոստա Ռիկայի կոլոն', 'other' => 'Կոստա Ռիկայի կոլոն']),
    'CUC' => new C('CUC', 'կուբայական փոխարկվող պեսո', narrow: '$', plurals: ['one' => 'կուբայական փոխարկվող պեսո', 'other' => 'կուբայական փոխարկվող պեսո']),
    'CUP' => new C('CUP', 'կուբայական պեսո', narrow: '$', plurals: ['one' => 'կուբայական պեսո', 'other' => 'կուբայական պեսո']),
    'CVE' => new C('CVE', 'Կաբո Վերդեի էսկուդո', plurals: ['one' => 'Կաբո Վերդեի էսկուդո', 'other' => 'Կաբո Վերդեի էսկուդո']),
    'CZK' => new C('CZK', 'չեխական կրոն', narrow: 'Kč', plurals: ['one' => 'չեխական կրոն', 'other' => 'չեխական կրոն']),
    'DJF' => new C('DJF', 'Ջիբութիի ֆրանկ', plurals: ['one' => 'Ջիբութիի ֆրանկ', 'other' => 'Ջիբութիի ֆրանկ'], minorUnits: 0),
    'DKK' => new C('DKK', 'դանիական կրոն', narrow: 'kr', plurals: ['one' => 'դանիական կրոն', 'other' => 'դանիական կրոն']),
    'DOP' => new C('DOP', 'դոմինիկյան պեսո', narrow: '$', plurals: ['one' => 'դոմինիկյան պեսո', 'other' => 'դոմինիկյան պեսո']),
    'DZD' => new C('DZD', 'ալժիրական դինար', plurals: ['one' => 'ալժիրական դինար', 'other' => 'ալժիրական դինար']),
    'EGP' => new C('EGP', 'եգիպտական ֆունտ', narrow: 'E£', plurals: ['one' => 'եգիպտական ֆունտ', 'other' => 'եգիպտական ֆունտ']),
    'ERN' => new C('ERN', 'էրիթրեական նակվա', plurals: ['one' => 'էրիթրեական նակֆա', 'other' => 'էրիթրեական նակֆա']),
    'ETB' => new C('ETB', 'եթովպիական բիր', plurals: ['one' => 'եթովպիական բիր', 'other' => 'եթովպիական բիր']),
    'EUR' => new C('EUR', 'եվրո', '€', narrow: '€', plurals: ['one' => 'եվրո', 'other' => 'եվրո']),
    'FJD' => new C('FJD', 'ֆիջիական դոլար', narrow: '$', plurals: ['one' => 'ֆիջիական դոլար', 'other' => 'ֆիջիական դոլար']),
    'FKP' => new C('FKP', 'Ֆոլքլենդյան կղզիների ֆունտ', narrow: '£', plurals: ['one' => 'Ֆոլքլենդյան կղզիների ֆունտ', 'other' => 'Ֆոլքլենդյան կղզիների ֆունտ']),
    'GBP' => new C('GBP', 'բրիտանական ֆունտ ստերլինգ', '£', narrow: '£', plurals: ['one' => 'բրիտանական ֆունտ ստերլինգ', 'other' => 'բրիտանական ֆունտ ստերլինգ']),
    'GEL' => new C('GEL', 'վրացական լարի', narrow: '₾', plurals: ['one' => 'վրացական լարի', 'other' => 'վրացական լարի']),
    'GHS' => new C('GHS', 'գայանական սեդի', narrow: 'GH₵', plurals: ['one' => 'գանայական սեդի', 'other' => 'գանայական սեդի']),
    'GIP' => new C('GIP', 'Ջիբրալթարի ֆունտ', narrow: '£', plurals: ['one' => 'Ջիբրալթարի ֆունտ', 'other' => 'Ջիբրալթարի ֆունտ']),
    'GMD' => new C('GMD', 'գամբիական դալասի', plurals: ['one' => 'գամբիական դալասի', 'other' => 'գամբիական դալասի']),
    'GNF' => new C('GNF', 'գվինեական ֆրանկ', narrow: 'FG', plurals: ['one' => 'գվինեական ֆրանկ', 'other' => 'գվինեական ֆրանկ'], minorUnits: 0),
    'GTQ' => new C('GTQ', 'գվատեմալական կետսալ', narrow: 'Q', plurals: ['one' => 'գվատեմալական կետսալ', 'other' => 'գվատեմալական կետսալ']),
    'GYD' => new C('GYD', 'գայանական դոլար', narrow: '$', plurals: ['one' => 'գայանական դոլար', 'other' => 'գայանական դոլար']),
    'HKD' => new C('HKD', 'Հոնկոնգի դոլար', 'HK$', narrow: '$', plurals: ['one' => 'Հոնկոնգի դոլար', 'other' => 'Հոնկոնգի դոլար']),
    'HNL' => new C('HNL', 'հոնդուրասական լեմպիրա', narrow: 'L', plurals: ['one' => 'հոնդուրասական լեմպիրա', 'other' => 'հոնդուրասական լեմպիրա']),
    'HRK' => new C('HRK', 'խորվաթական կունա', narrow: 'kn', plurals: ['one' => 'խորվաթական կունա', 'other' => 'խորվաթական կունա']),
    'HTG' => new C('HTG', 'հայիթյան գուրդ', plurals: ['one' => 'հայիթյան գուրդ', 'other' => 'հայիթյան գուրդ']),
    'HUF' => new C('HUF', 'հունգարական ֆորինտ', narrow: 'Ft', plurals: ['one' => 'հունգարական ֆորինտ', 'other' => 'հունգարական ֆորինտ']),
    'IDR' => new C('IDR', 'ինդոնեզիական ռուփի', narrow: 'Rp', plurals: ['one' => 'ինդոնեզիական ռուփի', 'other' => 'ինդոնեզիական ռուփի']),
    'ILS' => new C('ILS', 'Իսրայելի նոր շեկել', '₪', narrow: '₪', plurals: ['one' => 'Իսրայելի նոր շեկել', 'other' => 'Իսրայելի նոր շեկել']),
    'INR' => new C('INR', 'հնդկական ռուփի', '₹', narrow: '₹', plurals: ['one' => 'հնդկական ռուփի', 'other' => 'հնդկական ռուփի']),
    'IQD' => new C('IQD', 'իրաքյան դինար', plurals: ['one' => 'իրաքյան դինար', 'other' => 'իրաքյան դինար'], minorUnits: 3),
    'IRR' => new C('IRR', 'իրանական ռիալ', plurals: ['one' => 'իրանական ռիալ', 'other' => 'իրանական ռիալ']),
    'ISK' => new C('ISK', 'իսլանդական կրոն', narrow: 'kr', plurals: ['one' => 'իսլանդական կրոն', 'other' => 'իսլանդական կրոն'], minorUnits: 0),
    'JMD' => new C('JMD', 'Ճամայկայի դոլար', narrow: '$', plurals: ['one' => 'Ճամայկայի դոլար', 'other' => 'Ճամայկայի դոլար']),
    'JOD' => new C('JOD', 'հորդանանյան դինար', plurals: ['one' => 'հորդանանյան դինար', 'other' => 'հորդանանյան դինար'], minorUnits: 3),
    'JPY' => new C('JPY', 'ճապոնական իեն', 'JP¥', narrow: '¥', plurals: ['one' => 'ճապոնական իեն', 'other' => 'ճապոնական իեն'], minorUnits: 0),
    'KES' => new C('KES', 'քենիական շիլինգ', plurals: ['one' => 'քենիական շիլինգ', 'other' => 'քենիական շիլինգ']),
    'KGS' => new C('KGS', 'ղրղզական սոմ', plurals: ['one' => 'ղրղզական սոմ', 'other' => 'ղրղզական սոմ']),
    'KHR' => new C('KHR', 'կամբոջական ռիել', narrow: '៛', plurals: ['one' => 'կամբոջական ռիել', 'other' => 'կամբոջական ռիել']),
    'KMF' => new C('KMF', 'կոմորյան ֆրանկ', narrow: 'CF', plurals: ['one' => 'կոմորյան ֆրանկ', 'other' => 'կոմորյան ֆրանկ'], minorUnits: 0),
    'KPW' => new C('KPW', 'հյուսիսկորեական վոն', narrow: '₩', plurals: ['one' => 'հյուսիսկորեական վոն', 'other' => 'հյուսիսկորեական վոն']),
    'KRW' => new C('KRW', 'հարավկորեական վոն', '₩', narrow: '₩', plurals: ['one' => 'հարավկորեական վոն', 'other' => 'հարավկորեական վոն'], minorUnits: 0),
    'KWD' => new C('KWD', 'Քուվեյթի դինար', plurals: ['one' => 'Քուվեյթի դինար', 'other' => 'Քուվեյթի դինար'], minorUnits: 3),
    'KYD' => new C('KYD', 'Կայմանյան կղզիների դոլար', narrow: '$', plurals: ['one' => 'Կայմանյան կղզիների դոլար', 'other' => 'Կայմանյան կղզիների դոլար']),
    'KZT' => new C('KZT', 'ղազախական տենգե', narrow: '₸', plurals: ['one' => 'ղազախական տենգե', 'other' => 'ղազախական տենգե']),
    'LAK' => new C('LAK', 'լաոսական կիպ', narrow: '₭', plurals: ['one' => 'լաոսական կիպ', 'other' => 'լաոսական կիպ']),
    'LBP' => new C('LBP', 'լիբանանյան ֆունտ', narrow: 'L£', plurals: ['one' => 'լիբանանյան ֆունտ', 'other' => 'լիբանանյան ֆունտ']),
    'LKR' => new C('LKR', 'Շրի Լանկայի ռուփի', narrow: 'Rs', plurals: ['one' => 'Շրի Լանկայի ռուփի', 'other' => 'Շրի Լանկայի ռուփի']),
    'LRD' => new C('LRD', 'լիբերիական դոլար', narrow: '$', plurals: ['one' => 'լիբերիական դոլար', 'other' => 'լիբերիական դոլար']),
    'LSL' => new C('LSL', 'լեսոթոյական լոտի', plurals: ['one' => 'լեսոթոյական լոտի', 'other' => 'լեսոթոյական լոտի']),
    'LTL' => new C('LTL', 'Լիտվական լիտ', narrow: 'Lt', plurals: ['one' => 'Լիտվական լիտ', 'other' => 'Լիտվական լիտ']),
    'LVL' => new C('LVL', 'Լատվիական լատ', narrow: 'Ls', plurals: ['one' => 'Լատվիական լատ', 'other' => 'Լատվիական լատ']),
    'LYD' => new C('LYD', 'լիբիական դինար', plurals: ['one' => 'լիբիական դինար', 'other' => 'լիբիական դինար'], minorUnits: 3),
    'MAD' => new C('MAD', 'Մարոկկոյի դիրհամ', plurals: ['one' => 'Մարոկկոյի դիրհամ', 'other' => 'Մարոկկոյի դիրհամ']),
    'MDL' => new C('MDL', 'մոլդովական լեյ', plurals: ['one' => 'մոլդովական լեյ', 'other' => 'մոլդովական լեյ']),
    'MGA' => new C('MGA', 'Մադագասկարի արիարի', narrow: 'Ar', plurals: ['one' => 'Մադագասկարի արիարի', 'other' => 'Մադագասկարի արիարի']),
    'MKD' => new C('MKD', 'մակեդոնական դենար', plurals: ['one' => 'մակեդոնական դենար', 'other' => 'մակեդոնական դենար']),
    'MMK' => new C('MMK', 'Մյանմայի կյատ', narrow: 'K', plurals: ['one' => 'Մյանմայի կյատ', 'other' => 'Մյանմայի կյատ']),
    'MNT' => new C('MNT', 'մոնղոլական տուգրիկ', narrow: '₮', plurals: ['one' => 'մոնղոլական տուգրիկ', 'other' => 'մոնղոլական տուգրիկ']),
    'MOP' => new C('MOP', 'Մակաոյի պատակա', plurals: ['one' => 'Մակաոյի պատակա', 'other' => 'Մակաոյի պատակա']),
    'MRO' => new C('MRO', 'մավրիտանական ուգիյա (1973–2017)', plurals: ['one' => 'մավրիտանական ուգիյա (1973–2017)', 'other' => 'մավրիտանական ուգիյա (1973–2017)']),
    'MRU' => new C('MRU', 'մավրիտանական ուգիյա', plurals: ['one' => 'մավրիտանական ուգիյա', 'other' => 'մավրիտանական ուգիյա']),
    'MUR' => new C('MUR', 'մավրիկյան ռուփի', narrow: 'Rs', plurals: ['one' => 'մավրիկյան ռուփի', 'other' => 'մավրիկյան ռուփի']),
    'MVR' => new C('MVR', 'մալդիվյան ռուֆիյա', plurals: ['one' => 'մալդիվյան ռուֆիյա', 'other' => 'մալդիվյան ռուֆիյա']),
    'MWK' => new C('MWK', 'մալավիական կվաչա', plurals: ['one' => 'մալավիական կվաչա', 'other' => 'մալավիական կվաչա']),
    'MXN' => new C('MXN', 'մեքսիկական պեսո', 'MX$', narrow: '$', plurals: ['one' => 'մեքսիկական պեսո', 'other' => 'մեքսիկական պեսո']),
    'MYR' => new C('MYR', 'մալայզիական ռինգիտ', narrow: 'RM', plurals: ['one' => 'մալայզիական ռինգիտ', 'other' => 'մալայզիական ռինգիտ']),
    'MZN' => new C('MZN', 'մոզամբիկյան մետիկալ', plurals: ['one' => 'մոզամբիկյան մետիկալ', 'other' => 'մոզամբիկյան մետիկալ']),
    'NAD' => new C('NAD', 'նամիբիական դոլար', narrow: '$', plurals: ['one' => 'նամիբիական դոլար', 'other' => 'նամիբիական դոլար']),
    'NGN' => new C('NGN', 'նիգերիական նայրա', narrow: '₦', plurals: ['one' => 'նիգերիական նայրա', 'other' => 'նիգերիական նայրա']),
    'NIO' => new C('NIO', 'նիկարագուական կորդոբա', narrow: 'C$', plurals: ['one' => 'նիկարագուական կորդոբա', 'other' => 'նիկարագուական կորդոբա']),
    'NOK' => new C('NOK', 'նորվեգական կրոն', narrow: 'kr', plurals: ['one' => 'նորվեգական կրոն', 'other' => 'նորվեգական կրոն']),
    'NPR' => new C('NPR', 'Նեպալի ռուփի', narrow: 'Rs', plurals: ['one' => 'Նեպալի ռուփի', 'other' => 'Նեպալի ռուփի']),
    'NZD' => new C('NZD', 'նորզելանդական դոլար', 'NZ$', narrow: '$', plurals: ['one' => 'նորզելանդական դոլար', 'other' => 'նորզելանդական դոլար']),
    'OMR' => new C('OMR', 'Օմանի ռիալ', plurals: ['one' => 'Օմանի ռիալ', 'other' => 'Օմանի ռիալ'], minorUnits: 3),
    'PAB' => new C('PAB', 'պանամական բալբոա', plurals: ['one' => 'պանամական բալբոա', 'other' => 'պանամական բալբոա']),
    'PEN' => new C('PEN', 'Պերուի սոլ', plurals: ['one' => 'Պերուի սոլ', 'other' => 'Պերուի սոլ']),
    'PGK' => new C('PGK', 'Պապուա Նոր Գվինեայի կինա', plurals: ['one' => 'Պապուա Նոր Գվինեայի կինա', 'other' => 'Պապուա Նոր Գվինեայի կինա']),
    'PHP' => new C('PHP', 'ֆիլիպինյան պեսո', narrow: '₱', plurals: ['one' => 'ֆիլիպինյան պեսո', 'other' => 'ֆիլիպինյան պեսո']),
    'PKR' => new C('PKR', 'պակիստանյան ռուփի', narrow: 'Rs', plurals: ['one' => 'պակիստանյան ռուփի', 'other' => 'պակիստանյան ռուփի']),
    'PLN' => new C('PLN', 'լեհական զլոտի', narrow: 'zł', plurals: ['one' => 'լեհական զլոտի', 'other' => 'լեհական զլոտի']),
    'PYG' => new C('PYG', 'պարագվայական գուարանի', narrow: '₲', plurals: ['one' => 'պարագվայական գուարանի', 'other' => 'պարագվայական գուարանի'], minorUnits: 0),
    'QAR' => new C('QAR', 'Կատարի ռիալ', plurals: ['one' => 'Կատարի ռիալ', 'other' => 'Կատարի ռիալ']),
    'RON' => new C('RON', 'ռումինական լեյ', narrow: 'lei', plurals: ['one' => 'ռումինական լեյ', 'other' => 'ռումինական լեյ']),
    'RSD' => new C('RSD', 'սերբական դինար', plurals: ['one' => 'սերբական դինար', 'other' => 'սերբական դինար']),
    'RUB' => new C('RUB', 'ռուսական ռուբլի', narrow: '₽', plurals: ['one' => 'ռուսական ռուբլի', 'other' => 'ռուսական ռուբլի']),
    'RWF' => new C('RWF', 'ռուանդական ֆրանկ', narrow: 'RF', plurals: ['one' => 'ռուանդական ֆրանկ', 'other' => 'ռուանդական ֆրանկ'], minorUnits: 0),
    'SAR' => new C('SAR', 'Սաուդյան Արաբիայի ռիալ', plurals: ['one' => 'Սաուդյան Արաբիայի ռիալ', 'other' => 'Սաուդյան Արաբիայի ռիալ']),
    'SBD' => new C('SBD', 'Սողոմոնյան կղզիների դոլար', narrow: '$', plurals: ['one' => 'Սողոմոնյան կղզիների դոլար', 'other' => 'Սողոմոնյան կղզիների դոլար']),
    'SCR' => new C('SCR', 'սեյշելյան ռուփի', plurals: ['one' => 'սեյշելյան ռուփի', 'other' => 'սեյշելյան ռուփի']),
    'SDG' => new C('SDG', 'սուդանական ֆունտ', plurals: ['one' => 'սուդանական ֆունտ', 'other' => 'սուդանական ֆունտ']),
    'SEK' => new C('SEK', 'շվեդական կրոն', narrow: 'kr', plurals: ['one' => 'շվեդական կրոն', 'other' => 'շվեդական կրոն']),
    'SGD' => new C('SGD', 'Սինգապուրի դոլար', narrow: '$', plurals: ['one' => 'Սինգապուրի դոլար', 'other' => 'Սինգապուրի դոլար']),
    'SHP' => new C('SHP', 'Սուրբ Հեղինեի ֆունտ', narrow: '£', plurals: ['one' => 'Սուրբ Հեղինեի ֆունտ', 'other' => 'Սուրբ Հեղինեի ֆունտ']),
    'SLL' => new C('SLL', 'Սիեռա Լեոնեի լեոնե', plurals: ['one' => 'Սիեռա Լեոնեի լեոնե', 'other' => 'Սիեռա Լեոնեի լեոնե']),
    'SOS' => new C('SOS', 'սոմալիական շիլինգ', plurals: ['one' => 'սոմալիական շիլինգ', 'other' => 'սոմալիական շիլինգ']),
    'SRD' => new C('SRD', 'սուրինամական դոլար', narrow: '$', plurals: ['one' => 'սուրինամական դոլար', 'other' => 'սուրինամական դոլար']),
    'SSP' => new C('SSP', 'հարավսուդանական ֆունտ', narrow: '£', plurals: ['one' => 'հարավսուդանական ֆունտ', 'other' => 'հարավսուդանական ֆունտ']),
    'STD' => new C('STD', 'Սան Տոմե և Փրինսիպիի դոբրա (1977–2017)', plurals: ['one' => 'Սան Տոմե և Փրինսիպիի դոբրա (1977–2017)', 'other' => 'Սան Տոմե և Փրինսիպիի դոբրա (1977–2017)']),
    'STN' => new C('STN', 'Սան Տոմե և Փրինսիպիի դոբրա', narrow: 'Db', plurals: ['one' => 'Սան Տոմե և Փրինսիպիի դոբրա', 'other' => 'Սան Տոմե և Փրինսիպիի դոբրա']),
    'SYP' => new C('SYP', 'սիրիական ֆունտ', narrow: '£', plurals: ['one' => 'սիրիական ֆունտ', 'other' => 'սիրիական ֆունտ']),
    'SZL' => new C('SZL', 'սվազիլենդական լիլանգենի', plurals: ['one' => 'սվազիլենդական լիլանգենի', 'other' => 'սվազիլենդական լիլանգենի']),
    'THB' => new C('THB', 'թայլանդական բատ', '฿', narrow: '฿', plurals: ['one' => 'թայլանդական բատ', 'other' => 'թայլանդական բատ']),
    'TJS' => new C('TJS', 'տաջիկական սոմոնի', plurals: ['one' => 'տաջիկական սոմոնի', 'other' => 'տաջիկական սոմոնի']),
    'TMT' => new C('TMT', 'թուրքմենական մանաթ', plurals: ['one' => 'թուրքմենական մանաթ', 'other' => 'թուրքմենական մանաթ']),
    'TND' => new C('TND', 'թունիսյան դինար', plurals: ['one' => 'թունիսյան դինար', 'other' => 'թունիսյան դինար'], minorUnits: 3),
    'TOP' => new C('TOP', 'Տոնգայի պաանգա', narrow: 'T$', plurals: ['one' => 'Տոնգայի պաանգա', 'other' => 'Տոնգայի պաանգա']),
    'TRY' => new C('TRY', 'թուրքական լիրա', narrow: '₺', plurals: ['one' => 'թուրքական լիրա', 'other' => 'թուրքական լիրա']),
    'TTD' => new C('TTD', 'Տրինիդադ և Տոբագոյի դոլար', narrow: '$', plurals: ['one' => 'Տրինիդադ և Տոբագոյի դոլար', 'other' => 'Տրինիդադ և Տոբագոյի դոլար']),
    'TWD' => new C('TWD', 'թայվանական նոր դոլար', 'NT$', narrow: 'NT$', plurals: ['one' => 'թայվանական նոր դոլար', 'other' => 'թայվանական նոր դոլար']),
    'TZS' => new C('TZS', 'տանզանիական շիլինգ', plurals: ['one' => 'տանզանիական շիլինգ', 'other' => 'տանզանիական շիլինգ']),
    'UAH' => new C('UAH', 'ուկրաինական գրիվնա', narrow: '₴', plurals: ['one' => 'ուկրաինական գրիվնա', 'other' => 'ուկրաինական գրիվնա']),
    'UGX' => new C('UGX', 'ուգանդական շիլինգ', plurals: ['one' => 'ուգանդական շիլինգ', 'other' => 'ուգանդական շիլինգ'], minorUnits: 0),
    'USD' => new C('USD', 'ԱՄՆ դոլար', '$', narrow: '$', plurals: ['one' => 'ԱՄՆ դոլար', 'other' => 'ԱՄՆ դոլար']),
    'UYU' => new C('UYU', 'ուրուգվայական պեսո', narrow: '$', plurals: ['one' => 'ուրուգվայական պեսո', 'other' => 'ուրուգվայական պեսո']),
    'UZS' => new C('UZS', 'ուզբեկական սոմ', plurals: ['one' => 'ուզբեկական սոմ', 'other' => 'ուզբեկական սոմ']),
    'VEF' => new C('VEF', 'վենեսուելական բոլիվար (2008–2018)', narrow: 'Bs', plurals: ['one' => 'վենեսուելական բոլիվար (2008–2018)', 'other' => 'վենեսուելական բոլիվար (2008–2018)']),
    'VES' => new C('VES', 'վենեսուելական բոլիվար', plurals: ['one' => 'վենեսուելական բոլիվար', 'other' => 'վենեսուելական բոլիվար']),
    'VND' => new C('VND', 'վիետնամական դոնգ', '₫', narrow: '₫', plurals: ['one' => 'վիետնամական դոնգ', 'other' => 'վիետնամական դոնգ'], minorUnits: 0),
    'VUV' => new C('VUV', 'Վանուատուի վատու', plurals: ['one' => 'Վանուատուի վատու', 'other' => 'Վանուատուի վատու'], minorUnits: 0),
    'WST' => new C('WST', 'սամոական տալա', plurals: ['one' => 'սամոական տալա', 'other' => 'սամոական տալա']),
    'XAF' => new C('XAF', 'Կենտրոնական Աֆրիկայի ԿՖԱ ֆրանկ', 'FCFA', plurals: ['one' => 'Կենտրոնական Աֆրիկայի ԿՖԱ ֆրանկ', 'other' => 'Կենտրոնական Աֆրիկայի ԿՖԱ ֆրանկ'], minorUnits: 0),
    'XCD' => new C('XCD', 'արևելակարիբյան դոլար', 'EC$', narrow: '$', plurals: ['one' => 'արևելակարիբյան դոլար', 'other' => 'արևելակարիբյան դոլար']),
    'XOF' => new C('XOF', 'Արևմտյան Աֆրիկայի ԿՖԱ ֆրանկ', 'F CFA', plurals: ['one' => 'Արևմտյան Աֆրիկայի ԿՖԱ ֆրանկ', 'other' => 'Արևմտյան Աֆրիկայի ԿՖԱ ֆրանկ'], minorUnits: 0),
    'XPF' => new C('XPF', 'ԿՊՖ ֆրանկ', 'CFPF', plurals: ['one' => 'ԿՊՖ ֆրանկ', 'other' => 'ԿՊՖ ֆրանկ'], minorUnits: 0),
    'XXX' => new C('XXX', 'անհայտ արժույթ', '¤', plurals: ['one' => '(անհայտ արժույթ)', 'other' => '(անհայտ արժույթ)']),
    'YER' => new C('YER', 'եմենական ռիալ', plurals: ['one' => 'եմենական ռիալ', 'other' => 'եմենական ռիալ']),
    'ZAR' => new C('ZAR', 'հարավաֆրիկյան ռանդ', narrow: 'R', plurals: ['one' => 'հարավաֆրիկյան ռանդ', 'other' => 'հարավաֆրիկյան ռանդ']),
    'ZMK' => new C('ZMK', 'Զամբիական կվաչա (1968–2012)', plurals: ['one' => 'Զամբիական կվաչա (1968–2012)', 'other' => 'Զամբիական կվաչա (1968–2012)']),
    'ZMW' => new C('ZMW', 'զամբիական կվաչա', narrow: 'ZK', plurals: ['one' => 'զամբիական կվաչա', 'other' => 'զամբիական կվաչա']),
];
