<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'AED' => new C('AED', 'संयुक्त अरब एमिराट्स डिर्हाम', plurals: ['other' => 'संयुक्त अरब एमिराट्स डिर्हाम']),
    'AFA' => new C('AFA', 'अफ्गानी(१९२७–२००२)'),
    'AFN' => new C('AFN', 'अफ्गान अफ्गानी', narrow: '؋', plurals: ['other' => 'अफ्गान अफ्गानी']),
    'ALL' => new C('ALL', 'अल्बानियन लेक', plurals: ['other' => 'अल्बानियन लेक']),
    'AMD' => new C('AMD', 'आर्मेनियाली ड्राम', narrow: '֏', plurals: ['other' => 'आर्मेनियाली ड्राम']),
    'ANG' => new C('ANG', 'नेदरल्याण्ड्स एन्टिलियन गिल्डर', plurals: ['other' => 'नेदरल्याण्ड्स एन्टिलियन गिल्डर']),
    'AOA' => new C('AOA', 'एङ्गोलान क्वान्जा', narrow: 'Kz', plurals: ['other' => 'एङ्गोलान क्वान्जा']),
    'ARS' => new C('ARS', 'अर्जेन्टिनी पेसो', narrow: '$', plurals: ['other' => 'अर्जेन्टिनी पेसो']),
    'AUD' => new C('AUD', 'अष्ट्रेलियन डलर', 'A$', narrow: '$', plurals: ['other' => 'अष्ट्रेलियन डलर']),
    'AWG' => new C('AWG', 'आरूबन फ्लोरिन', plurals: ['other' => 'आरूबन फ्लोरिन']),
    'AZN' => new C('AZN', 'अजरबैजानी मानात', narrow: '₼', plurals: ['other' => 'अजरबैजानी मानात']),
    'BAM' => new C('BAM', 'बोस्निया-हर्जगोभिनिया रूपान्तरयोग्य मार्क', narrow: 'KM', plurals: ['other' => 'बोस्निया-हर्जगोभिनिया रूपान्तरयोग्य मार्क']),
    'BBD' => new C('BBD', 'बर्बाडियन डलर', narrow: '$', plurals: ['one' => 'बार्बाडियन डलर', 'other' => 'बर्बाडियन डलर']),
    'BDT' => new C('BDT', 'बङ्गलादेशी टाका', narrow: '৳', plurals: ['other' => 'बङ्गलादेशी टाका']),
    'BGN' => new C('BGN', 'बुल्गारियाली लेभ', plurals: ['one' => 'बुल्गारियाली लेभ', 'other' => 'बुल्गारियाली लेभा']),
    'BHD' => new C('BHD', 'बाहारैनी डिनार', plurals: ['other' => 'बाहारैनी डिनार'], minorUnits: 3),
    'BIF' => new C('BIF', 'बुरूण्डियाली फ्रान्क', plurals: ['other' => 'बुरूण्डियाली फ्रान्क'], minorUnits: 0),
    'BMD' => new C('BMD', 'बर्मुडन डलर', narrow: '$', plurals: ['other' => 'बर्मुडन डलर']),
    'BND' => new C('BND', 'ब्रुनाई डलर', narrow: '$', plurals: ['other' => 'ब्रुनाई डलर']),
    'BOB' => new C('BOB', 'बोलिभियन बोलिभियानो', narrow: 'Bs', plurals: ['other' => 'बोलिभियन बोलिभियानो']),
    'BRL' => new C('BRL', 'ब्राजिलियन रियल', 'R$', narrow: 'R$', plurals: ['other' => 'ब्राजिलियन रियल']),
    'BSD' => new C('BSD', 'बहामियाली डलर', narrow: '$', plurals: ['other' => 'बहामियाली डलर']),
    'BTN' => new C('BTN', 'भुटानी एन्‌गुल्ट्रुम', plurals: ['other' => 'भुटानी एन्‌गुल्ट्रुम']),
    'BWP' => new C('BWP', 'बोट्सवानान पुला', narrow: 'P', plurals: ['other' => 'बोट्सवानान पुला']),
    'BYN' => new C('BYN', 'बेलारूसी रूबल', narrow: 'р.', plurals: ['other' => 'बेलारूसी रूबल']),
    'BYR' => new C('BYR', 'बेलारूसी रूबल (2000–2016)', plurals: ['other' => 'बेलारूसी रूबल (2000–2016)']),
    'BZD' => new C('BZD', 'वेलिज डलर', narrow: '$', plurals: ['other' => 'वेलिज डलर']),
    'CAD' => new C('CAD', 'क्यानाडियाली डलर', 'CA$', narrow: '$', plurals: ['other' => 'क्यानाडियाली डलर']),
    'CDF' => new C('CDF', 'कङ्गोली फ्रान्क', plurals: ['other' => 'कङ्गोली फ्रान्क']),
    'CHF' => new C('CHF', 'स्विस् फ्रैङ्क', plurals: ['other' => 'स्विस् फ्रैङ्क']),
    'CLP' => new C('CLP', 'चिलियन पेसो', narrow: '$', plurals: ['other' => 'चिलियन पेसो'], minorUnits: 0),
    'CNH' => new C('CNH', 'चिनियाँ युआन(तटवर्ती)', plurals: ['other' => 'चिनियाँ युआन(तटवर्ती)']),
    'CNY' => new C('CNY', 'चिनिँया युआन', 'CN¥', narrow: '¥', plurals: ['other' => 'चिनिँया युआन']),
    'COP' => new C('COP', 'कोलम्वियन पेसो', narrow: '$', plurals: ['other' => 'कोलम्वियन पेसो']),
    'CRC' => new C('CRC', 'कोष्टारिकन कोलोन', narrow: '₡', plurals: ['one' => 'कोष्टारिकन कोलोन', 'other' => 'कोष्टारिकन कोलोनहरू']),
    'CUC' => new C('CUC', 'क्यूवाली रूपान्तरणयोग्य पेसो', narrow: '$', plurals: ['other' => 'क्यूवाली रूपान्तरणयोग्य पेसो']),
    'CUP' => new C('CUP', 'क्यूवाली पेसो', narrow: '$', plurals: ['other' => 'क्यूवाली पेसो']),
    'CVE' => new C('CVE', 'केप भर्डियन एस्कुडो', plurals: ['other' => 'केप भर्डियन एस्कुडो']),
    'CZK' => new C('CZK', 'चेख गणतञ्त्र कोरूना', narrow: 'Kč', plurals: ['other' => 'चेख गणतञ्त्र कोरूना']),
    'DJF' => new C('DJF', 'जिबौंटियाली फ्रान्क', plurals: ['one' => 'जिबौटियाली फ्रान्क', 'other' => 'जिबौंटियाली फ्रान्क'], minorUnits: 0),
    'DKK' => new C('DKK', 'ड्यानिश क्रोन', narrow: 'kr', plurals: ['one' => 'ड्यानिश क्रोन', 'other' => 'ड्यानिश क्रोनर']),
    'DOP' => new C('DOP', 'डोमिनिकन पेसो', narrow: '$', plurals: ['other' => 'डोमिनिकन पेसो']),
    'DZD' => new C('DZD', 'अल्जेरियाली डिनार', plurals: ['other' => 'अल्जेरियाली डिनार']),
    'EGP' => new C('EGP', 'इजिप्सियन पाउन्ड', narrow: 'E£', plurals: ['other' => 'इजिप्सियन पाउन्ड']),
    'ERN' => new C('ERN', 'एरिट्रियन नाक्फा', plurals: ['other' => 'एरिट्रियन नाक्फा']),
    'ETB' => new C('ETB', 'इथियोपियाली बिर', plurals: ['other' => 'इथियोपियाली बिर']),
    'EUR' => new C('EUR', 'युरो', '€', narrow: '€', plurals: ['other' => 'युरो']),
    'FJD' => new C('FJD', 'फिजीयाली डलर', narrow: '$', plurals: ['one' => 'फिजीयाली डलर', 'other' => 'फिजीयाली डलरहरू']),
    'FKP' => new C('FKP', 'फक्‌ल्याण्ड टापुहरूका पाउन्ड', narrow: '£', plurals: ['other' => 'फक्‌ल्याण्ड टापुहरूका पाउन्ड']),
    'GBP' => new C('GBP', 'बेलायती पाउण्ड स्टर्लिङ', '£', narrow: '£', plurals: ['other' => 'बेलायती पाउण्ड स्टर्लिङ']),
    'GEL' => new C('GEL', 'जर्जियाली लारी', narrow: '₾', plurals: ['one' => 'जर्जियाली लारी', 'other' => 'जर्जियन लारी']),
    'GHS' => new C('GHS', 'घानाली सेडी', narrow: 'GH₵', plurals: ['other' => 'घानाली सेडी']),
    'GIP' => new C('GIP', 'जिब्राल्टर पाउण्ड', narrow: '£', plurals: ['other' => 'जिब्राल्टर पाउण्ड']),
    'GMD' => new C('GMD', 'गाम्वियाली डालासी', plurals: ['other' => 'गाम्वियाली डालासी']),
    'GNF' => new C('GNF', 'गिनियाली फ्रान्क', narrow: 'FG', plurals: ['other' => 'गिनियाली फ्रान्क'], minorUnits: 0),
    'GTQ' => new C('GTQ', 'ग्वाटेमाला क्वेट्जाल', narrow: 'Q', plurals: ['other' => 'ग्वाटेमाला क्वेट्जाल']),
    'GYD' => new C('GYD', 'गाइनिज डलर', narrow: '$', plurals: ['other' => 'गाइनिज डलर']),
    'HKD' => new C('HKD', 'हङकङ डलर', 'HK$', narrow: '$', plurals: ['other' => 'हङकङ डलर']),
    'HNL' => new C('HNL', 'होन्डुरान लेम्पिरा', narrow: 'L', plurals: ['other' => 'होन्डुरान लेम्पिरा']),
    'HRK' => new C('HRK', 'क्रोएशियाली कुना', narrow: 'kn', plurals: ['other' => 'क्रोएशियाली कुना']),
    'HTG' => new C('HTG', 'हैटियाली गुर्ड', plurals: ['other' => 'हैटियाली गुर्ड']),
    'HUF' => new C('HUF', 'हङ्गेरियन फोरिन्ट', narrow: 'Ft', plurals: ['other' => 'हङ्गेरियन फोरिन्ट']),
    'IDR' => new C('IDR', 'इण्डोनेशियाली रूपियाँ', narrow: 'Rp', plurals: ['other' => 'इण्डोनेशियाली रूपियाँ']),
    'ILS' => new C('ILS', 'इजरायली नयाँ शेकेल', '₪', narrow: '₪', plurals: ['other' => 'इजरायली नयाँ शेकेल']),
    'INR' => new C('INR', 'भारतीय रूपिँया', '₹', narrow: '₹', plurals: ['other' => 'भारतीय रूपिँया']),
    'IQD' => new C('IQD', 'इराकी डिनार', plurals: ['other' => 'इराकी डिनार'], minorUnits: 3),
    'IRR' => new C('IRR', 'इरानियाली रियाल', plurals: ['other' => 'इरानियाली रियाल']),
    'ISK' => new C('ISK', 'आइसल्याण्डिक क्रोना', narrow: 'kr', plurals: ['one' => 'आइसल्याण्डिक क्रोना', 'other' => 'आइसल्याण्डिक क्रोनर'], minorUnits: 0),
    'JMD' => new C('JMD', 'जमाइकाली डलर', narrow: '$', plurals: ['other' => 'जमाइकाली डलर']),
    'JOD' => new C('JOD', 'जोर्डानियाली डलर', plurals: ['other' => 'जोर्डानियाली डलर'], minorUnits: 3),
    'JPY' => new C('JPY', 'जापानी येन', 'JP¥', narrow: '¥', plurals: ['other' => 'जापानी येन'], minorUnits: 0),
    'KES' => new C('KES', 'केन्याली शिलिङ', plurals: ['other' => 'केन्याली शिलिङ']),
    'KGS' => new C('KGS', 'किर्गिस्तानी सोम', plurals: ['other' => 'किर्गिस्तानी सोम']),
    'KHR' => new C('KHR', 'कम्बोडिनेयाली रियल', narrow: '៛', plurals: ['other' => 'कम्बोडिनेयाली रियल']),
    'KMF' => new C('KMF', 'कोमोरियन फ्रान्क', narrow: 'CF', plurals: ['other' => 'कोमोरियन फ्रान्क'], minorUnits: 0),
    'KPW' => new C('KPW', 'उत्तर कोरियाली वन', narrow: '₩', plurals: ['other' => 'उत्तर कोरियाली वन']),
    'KRW' => new C('KRW', 'दक्षिण कोरियाली वन', '₩', narrow: '₩', plurals: ['other' => 'दक्षिण कोरियाली वन'], minorUnits: 0),
    'KWD' => new C('KWD', 'कुवेती डिनार', plurals: ['other' => 'कुवेती डिनार'], minorUnits: 3),
    'KYD' => new C('KYD', 'केम्यान टापुहरूका डलर', narrow: '$', plurals: ['other' => 'केम्यान टापुहरूका डलर']),
    'KZT' => new C('KZT', 'काजाखस्तानी टेन्ज', narrow: '₸', plurals: ['other' => 'काजाखस्तानी टेन्ज']),
    'LAK' => new C('LAK', 'लाओशियन किप', narrow: '₭', plurals: ['other' => 'लाओशियन किप']),
    'LBP' => new C('LBP', 'लेबनाली पाउन्ड', narrow: 'L£', plurals: ['other' => 'लेबनाली पाउन्ड']),
    'LKR' => new C('LKR', 'श्रीलङ्काली रूपिया', narrow: 'Rs', plurals: ['other' => 'श्रीलङ्काली रूपिया']),
    'LRD' => new C('LRD', 'लिबेरियाली डलर', narrow: '$', plurals: ['other' => 'लिबेरियाली डलर']),
    'LSL' => new C('LSL', 'लेसोथो लोटी', plurals: ['one' => 'लेसोथो लोटी', 'other' => 'लेसोथो लोटिस']),
    'LTL' => new C('LTL', 'लिथुनियाली लिटास', narrow: 'Lt', plurals: ['one' => 'लिथुनियाली लिटास', 'other' => 'लिथुनियाली लिटाई']),
    'LVL' => new C('LVL', 'लाट्भियाली लाट्स', narrow: 'Ls', plurals: ['one' => 'लाट्भियाली लाट्स', 'other' => 'लाट्भियाली लाटी']),
    'LYD' => new C('LYD', 'लिवियाली डिनार', plurals: ['other' => 'लिवियाली डिनार'], minorUnits: 3),
    'MAD' => new C('MAD', 'मोरोक्काली डिर्‌हाम', plurals: ['other' => 'मोरोक्काली डिर्‌हाम']),
    'MDL' => new C('MDL', 'माल्डोभन लेउ', plurals: ['one' => 'माल्डोभन लेउ', 'other' => 'माल्डोभन लेई']),
    'MGA' => new C('MGA', 'मालागासी एरिआरी', narrow: 'Ar', plurals: ['other' => 'मालागासी एरिआरी']),
    'MKD' => new C('MKD', 'म्यासेडोनियाली डेनार', plurals: ['one' => 'म्यासेडोनियाली डेनार', 'other' => 'म्यासेडोनियाली डेनारी']),
    'MMK' => new C('MMK', 'म्यान्मार क्याट', narrow: 'K', plurals: ['other' => 'म्यान्मार क्याट']),
    'MNT' => new C('MNT', 'मङ्गोलियाली टुग्रिक', narrow: '₮', plurals: ['other' => 'मङ्गोलियाली टुग्रिक']),
    'MOP' => new C('MOP', 'माकानिज पटाका', plurals: ['other' => 'माकानिज पटाका']),
    'MRO' => new C('MRO', 'माउरिटानियानली औगुइया (१९७३–२०१७)', plurals: ['one' => 'माउरिटानियाली औगुइया (१९७३–२०१७)', 'other' => 'माउरिटानियानली औगुइया (१९७३–२०१७)']),
    'MRU' => new C('MRU', 'माउरिटानियानली औगुइया', plurals: ['one' => 'माउरिटानियाली औगुइया', 'other' => 'माउरिटानियानली औगुइया']),
    'MUR' => new C('MUR', 'माउरिटियन रूपी', narrow: 'Rs', plurals: ['other' => 'माउरिटियन रूपी']),
    'MVR' => new C('MVR', 'मालडिभियाली रूफियाँ', plurals: ['other' => 'मालडिभियाली रूफियाँ']),
    'MWK' => new C('MWK', 'मलाविअन क्वाचा', plurals: ['other' => 'मलाविअन क्वाचा']),
    'MXN' => new C('MXN', 'मेक्सिकन पेसो', 'MX$', narrow: '$', plurals: ['other' => 'मेक्सिकन पेसो']),
    'MYR' => new C('MYR', 'मलेशियाली रिङ्गेट', narrow: 'RM', plurals: ['other' => 'मलेशियाली रिङ्गेट']),
    'MZN' => new C('MZN', 'मोजाम्विकन मेटिकल', plurals: ['other' => 'मोजाम्विकन मेटिकल']),
    'NAD' => new C('NAD', 'नामिबियन डलर', narrow: '$', plurals: ['other' => 'नामिबियन डलर']),
    'NGN' => new C('NGN', 'नाइजेरियन नाइरा', narrow: '₦', plurals: ['other' => 'नाइजेरियन नाइरा']),
    'NIO' => new C('NIO', 'निकारागुवान कोर्डोवा', narrow: 'C$', plurals: ['other' => 'निकारागुवान कोर्डोवा']),
    'NOK' => new C('NOK', 'नर्वेजियाली क्रोन', narrow: 'kr', plurals: ['one' => 'नर्वेजियाली क्रोन', 'other' => 'नर्वेजियाली क्रोनर']),
    'NPR' => new C('NPR', 'नेपाली रूपैयाँ', 'नेरू', narrow: 'रू', plurals: ['other' => 'नेपाली रूपैयाँ']),
    'NZD' => new C('NZD', 'न्यूजिल्याण्ड डलर', 'NZ$', narrow: '$', plurals: ['one' => 'न्यूजिल्याण्ड डलर', 'other' => 'न्यूजिल्याण्ड डलरहरू']),
    'OMR' => new C('OMR', 'ओमनी रियल', plurals: ['one' => 'ओमनी रियाल', 'other' => 'ओमनी रियल'], minorUnits: 3),
    'PAB' => new C('PAB', 'पानामानियाली बाल्बोआ', plurals: ['other' => 'पानामानियाली बाल्बोआ']),
    'PEN' => new C('PEN', 'पेरूभियाली सोल', plurals: ['other' => 'पेरूभियाली सोल']),
    'PGK' => new C('PGK', 'पपुआ न्यू गिनियाली किना', plurals: ['other' => 'पपुआ न्यू गिनियाली किना']),
    'PHP' => new C('PHP', 'फिलिपिनी पेसो', narrow: '₱', plurals: ['other' => 'फिलिपिनी पेसो']),
    'PKR' => new C('PKR', 'पाकिस्तानी रूपियाँ', narrow: 'Rs', plurals: ['other' => 'पाकिस्तानी रूपियाँ']),
    'PLN' => new C('PLN', 'पोलिश ज्लोटाई', narrow: 'zł', plurals: ['other' => 'पोलिश ज्लोटाई']),
    'PYG' => new C('PYG', 'पारागुयाली गुरानी', narrow: '₲', plurals: ['other' => 'पारागुयाली गुरानी'], minorUnits: 0),
    'QAR' => new C('QAR', 'कतारी रियल', plurals: ['one' => 'कतारी रियाल', 'other' => 'कतारी रियल']),
    'RON' => new C('RON', 'रोमानियाली लेऊ', narrow: 'lei', plurals: ['one' => 'रोमानियाली लेऊ', 'other' => 'रोमानियाली लेई']),
    'RSD' => new C('RSD', 'सर्बियाली डिनार', plurals: ['other' => 'सर्बियाली डिनार']),
    'RUB' => new C('RUB', 'रूसी रूबल', narrow: '₽', plurals: ['other' => 'रूसी रूबल']),
    'RWF' => new C('RWF', 'र्‌वाण्डाली फ्रान्क', narrow: 'RF', plurals: ['other' => 'र्‌वाण्डाली फ्रान्क'], minorUnits: 0),
    'SAR' => new C('SAR', 'साउदी रियालहरू', plurals: ['other' => 'साउदी रियाल']),
    'SBD' => new C('SBD', 'सोलोमन टापुहरूका डलर', narrow: '$', plurals: ['other' => 'सोलोमन टापुहरूका डलर']),
    'SCR' => new C('SCR', 'सेचेलोइस रूपी', plurals: ['other' => 'सेचेलोइस रूपी']),
    'SDG' => new C('SDG', 'सुडानी पाउन्ड', plurals: ['other' => 'सुडानी पाउन्ड']),
    'SEK' => new C('SEK', 'स्विडिश क्रोना', narrow: 'kr', plurals: ['one' => 'स्विडिश क्रोना', 'other' => 'स्विडिश क्रोनर']),
    'SGD' => new C('SGD', 'सिङ्गापुर डलर', narrow: '$', plurals: ['other' => 'सिङ्गापुर डलर']),
    'SHP' => new C('SHP', 'सेन्ट हेलेना पाउन्ड', narrow: '£', plurals: ['other' => 'सेन्ट हेलेना पाउन्ड']),
    'SLL' => new C('SLL', 'सियरा लियोनेन लियोन', plurals: ['other' => 'सियरा लियोनेन लियोन']),
    'SOS' => new C('SOS', 'सोमाली शिलिङ', plurals: ['other' => 'सोमाली शिलिङ']),
    'SRD' => new C('SRD', 'सुरिनामिज डलर', narrow: '$', plurals: ['other' => 'सुरिनामिज डलर']),
    'SSP' => new C('SSP', 'दक्षिण सुडानी पाउन्ड', narrow: '£', plurals: ['other' => 'दक्षिण सुडानी पाउन्ड']),
    'STD' => new C('STD', 'साओ टोम र प्रिन्सिप डोब्रा (१९७७–२०१७)', plurals: ['other' => 'साओ टोम र प्रिन्सिप डोब्रा (१९७७–२०१७)']),
    'STN' => new C('STN', 'साओ टोम र प्रिन्सिप डोब्रा', narrow: 'Db', plurals: ['other' => 'साओ टोम र प्रिन्सिप डोब्रा']),
    'SYP' => new C('SYP', 'सिरियाली पाउन्ड', narrow: '£', plurals: ['other' => 'सिरियाली पाउन्ड']),
    'SZL' => new C('SZL', 'स्वाजी लिलान्गेनी', plurals: ['one' => 'स्वाजी लिलान्गेनी', 'other' => 'स्वाजी इमालेन्गेनी']),
    'THB' => new C('THB', 'थाई भाट', '฿', narrow: '฿', plurals: ['other' => 'थाई भाट']),
    'TJS' => new C('TJS', 'ताजिक्स्तानी सोमोनी', plurals: ['other' => 'ताजिक्स्तानी सोमोनी']),
    'TMT' => new C('TMT', 'टुर्क्मेनिस्तानी मानात', plurals: ['other' => 'टुर्क्मेनिस्तानी मानात']),
    'TND' => new C('TND', 'टुनिसियाली डिनार', plurals: ['other' => 'टुनिसियाली डिनार'], minorUnits: 3),
    'TOP' => new C('TOP', 'टङ्गन पाङ्गा', narrow: 'T$', plurals: ['other' => 'टङ्गन पाङ्गा']),
    'TRY' => new C('TRY', 'टर्किश लिरा', narrow: '₺', plurals: ['other' => 'टर्किश लिरा']),
    'TTD' => new C('TTD', 'त्रिनिडाड र टोबागो डलर', narrow: '$', plurals: ['other' => 'त्रिनिडाड र टोबागो डलर']),
    'TWD' => new C('TWD', 'नयाँ ताइवान डलर', 'NT$', narrow: '$', plurals: ['other' => 'नयाँ ताइवान डलर']),
    'TZS' => new C('TZS', 'ताञ्जानियाली शिलिङ', plurals: ['other' => 'ताञ्जानियाली शिलिङ']),
    'UAH' => new C('UAH', 'युक्रेनी हिर्भिनिया', narrow: '₴', plurals: ['other' => 'युक्रेनी हिर्भिनिया']),
    'UGX' => new C('UGX', 'युगाण्डाली शिलिङ', plurals: ['other' => 'युगाण्डाली शिलिङ'], minorUnits: 0),
    'USD' => new C('USD', 'अमेरिकी डलर', 'US$', narrow: '$', plurals: ['other' => 'अमेरिकी डलर']),
    'UYU' => new C('UYU', 'उरूगुवायाली पेसो', narrow: '$', plurals: ['other' => 'उरूगुवायाली पेसो']),
    'UZS' => new C('UZS', 'उज्बेकिस्तान सोम', plurals: ['other' => 'उज्बेकिस्तान सोम']),
    'VEF' => new C('VEF', 'भेनेजुएलन बोलिभर (२००८–२०१८)', narrow: 'Bs', plurals: ['other' => 'भेनेजुएलन बोलिभर']),
    'VES' => new C('VES', 'भेनेजुएलन बोलिभर-2', plurals: ['one' => 'भेनेजुएलन बोलिभर मुद्रा', 'other' => 'भेनेजुएलन बोलिभर-3']),
    'VND' => new C('VND', 'भियतनामी डङ्', '₫', narrow: '₫', plurals: ['other' => 'भियतनामी डङ्'], minorUnits: 0),
    'VUV' => new C('VUV', 'भानुआतू भातु', plurals: ['one' => 'भानुआतू भातु', 'other' => 'भानुआतू भातुहरू'], minorUnits: 0),
    'WST' => new C('WST', 'सामोआन ताला', plurals: ['other' => 'सामोआन ताला']),
    'XAF' => new C('XAF', 'सीएफ्‌ए फ्रान्क बीइएसी', 'FCFA', plurals: ['other' => 'सीएफ्‌ए फ्रान्क बीइएसी'], minorUnits: 0),
    'XCD' => new C('XCD', 'पूर्वी क्यारिबियन डलर', 'EC$', narrow: '$', plurals: ['other' => 'पूर्वी क्यारिबियन डलर']),
    'XOF' => new C('XOF', 'सीएफ्‌ए फ्रान्क बीसीइएओ', "F\u{202F}CFA", plurals: ['one' => 'सीएफ्‌ए फ्रान्क बीसीइएओ', 'other' => 'सीऐफ्‌ए फ्रान्क्स बीसीइएओ'], minorUnits: 0),
    'XPF' => new C('XPF', 'सीएफ्‌पी फ्रान्क', 'CFPF', plurals: ['one' => 'सीएफ्‌पी फ्रान्क', 'other' => 'सीएफ्‌पी फ्रान्कहरू'], minorUnits: 0),
    'XXX' => new C('XXX', 'अज्ञात मुद्रा', '¤', plurals: ['other' => 'अज्ञात मुद्रा']),
    'YER' => new C('YER', 'येमेनी रियाल', plurals: ['other' => 'येमेनी रियाल']),
    'ZAR' => new C('ZAR', 'दक्षिण अफ्रिकी र्‍यान्ड', narrow: 'R', plurals: ['other' => 'दक्षिण अफ्रिकी र्‍यान्ड']),
    'ZMK' => new C('ZMK', 'जाम्बियाली क्वाचा (१९६८–२०१२)', plurals: ['one' => 'जाम्बियाली क्वाचा (१९६८–२०१२)', 'other' => 'जाम्बियाली क्वाचाहरू (१९६८–२०१२)']),
    'ZMW' => new C('ZMW', 'जाम्बियाली क्वाचा', narrow: 'ZK', plurals: ['other' => 'जाम्बियाली क्वाचा']),
];
