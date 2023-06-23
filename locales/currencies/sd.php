<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'AED' => new C('AED', 'گڏيل عرب امارات درهم', plurals: ['other' => 'گڏيل عرب امارات درهم']),
    'AFN' => new C('AFN', 'افغاني افغاني', narrow: '؋', plurals: ['other' => 'افغاني افغاني']),
    'ALL' => new C('ALL', 'الباني ليڪ', plurals: ['other' => 'الباني ليڪ']),
    'AMD' => new C('AMD', 'ارماني ڊرم', narrow: '֏', plurals: ['other' => 'ارماني ڊرم']),
    'ANG' => new C('ANG', 'نيڌرلينڊ انٽليئن گلڊر', plurals: ['other' => 'نيڌرلينڊ انٽليئن گلڊر']),
    'AOA' => new C('AOA', 'انگوليائي ڪوانزا', narrow: 'Kz', plurals: ['other' => 'انگوليائي ڪوانزا']),
    'ARS' => new C('ARS', 'ارجنٽائن پيسو', narrow: '$', plurals: ['other' => 'ارجنٽائن پيسو']),
    'AUD' => new C('AUD', 'آسٽريلوي ڊالر', 'A$', narrow: '$', plurals: ['other' => 'آسٽريلوي ڊالر']),
    'AWG' => new C('AWG', 'اروبن فلورن', plurals: ['other' => 'اروبن فلورن']),
    'AZN' => new C('AZN', 'آذربائيجاني منت', narrow: '₼', plurals: ['other' => 'آذربائيجاني منت']),
    'BAM' => new C('BAM', 'بوسنيا هرزگوينا ڪنورٽبل مارڪ', narrow: 'KM', plurals: ['other' => 'بوسنيا هرزگوينا ڪنورٽبل مارڪ']),
    'BBD' => new C('BBD', 'باربيڊين ڊالر', narrow: '$', plurals: ['other' => 'باربيڊين ڊالر']),
    'BDT' => new C('BDT', 'بنگلاديشي ٽڪا', narrow: '৳', plurals: ['other' => 'بنگلاديشي ٽڪا']),
    'BGN' => new C('BGN', 'بلغارین لیو', plurals: ['other' => 'بلغارین لیو']),
    'BHD' => new C('BHD', 'بحريني دينار', plurals: ['other' => 'بحريني دينار'], minorUnits: 3),
    'BIF' => new C('BIF', 'برونڊي فرينڪ', plurals: ['other' => 'برونڊي فرينڪ'], minorUnits: 0),
    'BMD' => new C('BMD', 'برمودي ڊالر', narrow: '$', plurals: ['other' => 'برمودي ڊالر']),
    'BND' => new C('BND', 'برونائي ڊالر', narrow: '$', plurals: ['other' => 'برونائي ڊالر']),
    'BOB' => new C('BOB', 'بولیوین بولیویانو', narrow: 'Bs', plurals: ['other' => 'بولیوین بولیویانو']),
    'BRL' => new C('BRL', 'برازيلي ريل', 'R$', narrow: 'R$', plurals: ['other' => 'برازيلي ريل']),
    'BSD' => new C('BSD', 'بهاماني ڊادلر', narrow: '$', plurals: ['other' => 'بهاماني ڊادلر']),
    'BTN' => new C('BTN', 'ڀوٽاني گلٽرم', plurals: ['other' => 'ڀوٽاني گلٽرم']),
    'BWP' => new C('BWP', 'بوستواني پولا', narrow: 'P', plurals: ['one' => 'بوٽسواني پولا', 'other' => 'بوستواني پولا']),
    'BYN' => new C('BYN', 'بیلاروسی ربل', narrow: 'р.', plurals: ['other' => 'بیلاروسی ربل']),
    'BZD' => new C('BZD', 'بيليز ڊالر', narrow: '$', plurals: ['other' => 'بيليز ڊالر']),
    'CAD' => new C('CAD', 'ڪئينڊيائي ڊالر', 'CA$', narrow: '$', plurals: ['other' => 'ڪئينڊيائي ڊالر']),
    'CDF' => new C('CDF', 'ڪانگو فرينڪ', plurals: ['other' => 'ڪانگو فرينڪ']),
    'CHF' => new C('CHF', 'سوئس فرينڪ', plurals: ['other' => 'سوئس فرينڪ']),
    'CLP' => new C('CLP', 'چلي پيسو', narrow: '$', plurals: ['other' => 'چلي پيسو'], minorUnits: 0),
    'CNH' => new C('CNH', 'چيني يوآن (غير ملڪي)', plurals: ['other' => 'چيني يوآن (غير ملڪي)']),
    'CNY' => new C('CNY', 'چيني يوآن', 'CN¥', narrow: '¥', plurals: ['other' => 'چيني يوآن']),
    'COP' => new C('COP', 'ڪولمبيائي پيسو', narrow: '$', plurals: ['other' => 'ڪولمبيائي پيسو']),
    'CRC' => new C('CRC', 'ڪوسٽا ريڪا ڪولن', narrow: '₡', plurals: ['other' => 'ڪوسٽا ريڪا ڪولن']),
    'CUC' => new C('CUC', 'ڪيوبن ڪنورٽيبل پيسو', narrow: '$', plurals: ['other' => 'ڪيوبن ڪنورٽيبل پيسو']),
    'CUP' => new C('CUP', 'ڪيوبن پيسو', narrow: '$', plurals: ['other' => 'ڪيوبن پيسو']),
    'CVE' => new C('CVE', 'ڪيپ وردي ايسڪوڊو', plurals: ['other' => 'ڪيپ وردي ايسڪوڊو']),
    'CZK' => new C('CZK', 'چيڪ ڪرونا', narrow: 'Kč', plurals: ['other' => 'چيڪ ڪرونا']),
    'DJF' => new C('DJF', 'جبوتي فرينڪ', plurals: ['other' => 'جبوتي فرينڪ'], minorUnits: 0),
    'DKK' => new C('DKK', 'دانش ڪرون', narrow: 'kr', plurals: ['one' => 'ڊينش ڪرون', 'other' => 'دانش ڪرون']),
    'DOP' => new C('DOP', 'ڊومينيڪن پيسو', narrow: '$', plurals: ['other' => 'ڊومينيڪن پيسو']),
    'DZD' => new C('DZD', 'الجيريائي دينار', plurals: ['other' => 'الجيريائي دينار']),
    'EGP' => new C('EGP', 'مصري پائونڊ', narrow: 'E£', plurals: ['other' => 'مصري پائونڊ']),
    'ERN' => new C('ERN', 'ايريٽيريائي ناڪفا', plurals: ['other' => 'ايريٽيريائي ناڪفا']),
    'ETB' => new C('ETB', 'ايٿوپيائي بر', plurals: ['other' => 'ايٿوپيائي بر']),
    'EUR' => new C('EUR', 'يورو', '€', narrow: '€', plurals: ['other' => 'يورو']),
    'FJD' => new C('FJD', 'فجي ڊالر', narrow: '$', plurals: ['other' => 'فجي ڊالر']),
    'FKP' => new C('FKP', 'فاڪلينڊ ٻيٽ پائونڊ', narrow: '£', plurals: ['other' => 'فاڪلينڊ ٻيٽ پائونڊ']),
    'GBP' => new C('GBP', 'برطانوي پائونڊ', '£', narrow: '£', plurals: ['other' => 'برطانوي پائونڊ']),
    'GEL' => new C('GEL', 'جارجيائي لاري', narrow: '₾', plurals: ['other' => 'جارجيائي لاري']),
    'GHS' => new C('GHS', 'گهانين سيدي', narrow: 'GH₵', plurals: ['other' => 'گهانين سيدي']),
    'GIP' => new C('GIP', 'جبرالٽر پائونڊ', narrow: '£', plurals: ['other' => 'جبرالٽر پائونڊ']),
    'GMD' => new C('GMD', 'گيمبيا دلاسائي', plurals: ['other' => 'گيمبيا دلاسائي']),
    'GNF' => new C('GNF', 'گني فرينڪ', narrow: 'FG', plurals: ['other' => 'گني فرينڪ'], minorUnits: 0),
    'GTQ' => new C('GTQ', 'گوئٽي مالا ڪٽزل', narrow: 'Q', plurals: ['other' => 'گوئٽي مالا ڪٽزل']),
    'GYD' => new C('GYD', 'گيانا ڊالر', narrow: '$', plurals: ['other' => 'گيانا ڊالر']),
    'HKD' => new C('HKD', 'هانگ ڪانگ ڊالر', 'HK$', narrow: '$', plurals: ['other' => 'هانگ ڪانگ ڊالر']),
    'HNL' => new C('HNL', 'هونڊوراس ليمپرا', narrow: 'L', plurals: ['other' => 'هونڊوراس ليمپرا']),
    'HRK' => new C('HRK', 'ڪروشيائي ڪونا', narrow: 'kn', plurals: ['other' => 'ڪروشيائي ڪونا']),
    'HTG' => new C('HTG', 'هيٽي گورڊي', plurals: ['other' => 'هيٽي گورڊي']),
    'HUF' => new C('HUF', 'هنگيرين فورنٽ', narrow: 'Ft', plurals: ['other' => 'هنگيرين فورنٽ']),
    'IDR' => new C('IDR', 'انڊونيشيائي رپيه', narrow: 'Rp', plurals: ['one' => 'انڊونيشيائي رپيه', 'other' => 'انڊونيشيائي رپيو']),
    'ILS' => new C('ILS', 'اسرائيلي نيو شيڪل', '₪', narrow: '₪', plurals: ['other' => 'اسرائيلي نيو شيڪل']),
    'INR' => new C('INR', 'انڊين رپي', '₹', narrow: '₹', plurals: ['other' => 'انڊين رپي']),
    'IQD' => new C('IQD', 'عراقي دينار', plurals: ['other' => 'عراقي دينار'], minorUnits: 3),
    'IRR' => new C('IRR', 'ايراني ريال', plurals: ['other' => 'ايراني ريال']),
    'ISK' => new C('ISK', 'آئيس لينڊي ڪرونا', narrow: 'kr', plurals: ['other' => 'آئيس لينڊي ڪرونا'], minorUnits: 0),
    'JMD' => new C('JMD', 'جميڪائي ڊالر', narrow: '$', plurals: ['other' => 'جميڪائي ڊالر']),
    'JOD' => new C('JOD', 'اردني دينار', plurals: ['other' => 'اردني دينار'], minorUnits: 3),
    'JPY' => new C('JPY', 'جاپاني يين', 'JP¥', narrow: '¥', plurals: ['other' => 'جاپاني يين'], minorUnits: 0),
    'KES' => new C('KES', 'ڪينيائي سلنگ', plurals: ['one' => 'ڪينيائي شلنگ', 'other' => 'ڪينيائي سلنگ']),
    'KGS' => new C('KGS', 'ڪرغزستاني سوم', plurals: ['other' => 'ڪرغزستاني سوم']),
    'KHR' => new C('KHR', 'ڪمبوڊيائي ريال', narrow: '៛', plurals: ['other' => 'ڪمبوڊيائي ريال']),
    'KMF' => new C('KMF', 'ڪوموريائي فرينڪ', narrow: 'CF', plurals: ['other' => 'ڪوموريائي فرينڪ'], minorUnits: 0),
    'KPW' => new C('KPW', 'اتر ڪوريائي ون', narrow: '₩', plurals: ['other' => 'اتر ڪوريائي ون']),
    'KRW' => new C('KRW', 'ڏکڻ ڪوريائي ون', '₩', narrow: '₩', plurals: ['other' => 'ڏکڻ ڪوريائي ون'], minorUnits: 0),
    'KWD' => new C('KWD', 'ڪويتي دينار', plurals: ['other' => 'ڪويتي دينار'], minorUnits: 3),
    'KYD' => new C('KYD', 'ڪيمين ٻيٽ ڊالر', narrow: '$', plurals: ['other' => 'ڪيمين ٻيٽ ڊالر']),
    'KZT' => new C('KZT', 'قازقستان ٽينگا', narrow: '₸', plurals: ['other' => 'قازقستان ٽينگا']),
    'LAK' => new C('LAK', 'لائوشيائي ڪپ', narrow: '₭', plurals: ['other' => 'لائوشيائي ڪپ']),
    'LBP' => new C('LBP', 'لبناني پائونڊ', narrow: 'L£', plurals: ['other' => 'لبناني پائونڊ']),
    'LKR' => new C('LKR', 'سري لنڪن رپي', narrow: 'Rs', plurals: ['other' => 'سري لنڪن رپي']),
    'LRD' => new C('LRD', 'لائبیریائی ڊالر', narrow: '$', plurals: ['other' => 'لائبیریائی ڊالر']),
    'LSL' => new C('LSL', 'ليسوٿو لوٽي', plurals: ['other' => 'ليسوٿو لوٽي']),
    'LYD' => new C('LYD', 'لبيائي دينار', plurals: ['other' => 'لبيائي دينار'], minorUnits: 3),
    'MAD' => new C('MAD', 'موروڪيائي درهم', plurals: ['other' => 'موروڪيائي درهم']),
    'MDL' => new C('MDL', 'مالديپ ليو', plurals: ['other' => 'مالديپ ليو']),
    'MGA' => new C('MGA', 'ملاگاسي اریاری', narrow: 'Ar', plurals: ['other' => 'ملاگاسي اریاری']),
    'MKD' => new C('MKD', 'ميسي ڊوني دينار', plurals: ['other' => 'ميسي ڊوني دينار']),
    'MMK' => new C('MMK', 'ميانمار ڪياٽ', narrow: 'K', plurals: ['other' => 'ميانمار ڪياٽ']),
    'MNT' => new C('MNT', 'منگولي تجرڪ', narrow: '₮', plurals: ['other' => 'منگولي تجرڪ']),
    'MOP' => new C('MOP', 'ميڪانيز پٽاڪا', plurals: ['other' => 'ميڪانيز پٽاڪا']),
    'MRO' => new C('MRO', 'موريشيائي اوگوئیا (1973–2017)', plurals: ['other' => 'موريشيائي اوگوئیا (1973–2017)']),
    'MRU' => new C('MRU', 'موريشيائي اوگوئیا', plurals: ['other' => 'موريشيائي اوگوئیا']),
    'MUR' => new C('MUR', 'ماريشيائي رپي', narrow: 'Rs', plurals: ['one' => 'ماريشين روپي', 'other' => 'ماريشيائي رپي']),
    'MVR' => new C('MVR', 'مالديپ روفيا', plurals: ['other' => 'مالديپ روفيا']),
    'MWK' => new C('MWK', 'ملاوي ڪواچا', plurals: ['other' => 'ملاوي ڪواچا']),
    'MXN' => new C('MXN', 'ميڪسيڪو پيسو', 'MX$', narrow: '$', plurals: ['other' => 'ميڪسيڪو پيسو']),
    'MYR' => new C('MYR', 'ملائيشيائي رنگٽ', narrow: 'RM', plurals: ['other' => 'ملائيشيائي رنگٽ']),
    'MZN' => new C('MZN', 'موزمبيق ميٽيڪل', plurals: ['other' => 'موزمبيق ميٽيڪل']),
    'NAD' => new C('NAD', 'نميبائي ڊالر', narrow: '$', plurals: ['one' => 'نميبيائي ڊالر', 'other' => 'نميبائي ڊالر']),
    'NGN' => new C('NGN', 'نائجريائي نائرا', narrow: '₦', plurals: ['one' => 'نائجيريائي نائرا', 'other' => 'نائجريائي نائرا']),
    'NIO' => new C('NIO', 'نڪارا گوا ڪارڊوبا', narrow: 'C$', plurals: ['other' => 'نڪارا گوا ڪارڊوبا']),
    'NOK' => new C('NOK', 'نارويائي ڪرون', narrow: 'kr', plurals: ['other' => 'نارويائي ڪرون']),
    'NPR' => new C('NPR', 'نيپالي رپي', narrow: 'Rs', plurals: ['other' => 'نيپالي رپي']),
    'NZD' => new C('NZD', 'نيوزي لينڊي ڊالر', 'NZ$', narrow: '$', plurals: ['other' => 'نيوزي لينڊي ڊالر']),
    'OMR' => new C('OMR', 'عماني ريال', plurals: ['other' => 'عماني ريال'], minorUnits: 3),
    'PAB' => new C('PAB', 'پاناما پالبوا', plurals: ['other' => 'پاناما پالبوا']),
    'PEN' => new C('PEN', 'پيرو سول', plurals: ['other' => 'پيرو سول']),
    'PGK' => new C('PGK', 'پاپوا نيو گني ڪنا', plurals: ['other' => 'پاپوا نيو گني ڪنا']),
    'PHP' => new C('PHP', 'فلپائني پيسو', narrow: '₱', plurals: ['other' => 'فلپائني پيسو']),
    'PKR' => new C('PKR', 'پاڪستاني رپي', 'Rs', narrow: 'Rs', plurals: ['other' => 'پاڪستاني رپي']),
    'PLN' => new C('PLN', 'پولش زلاٽي', narrow: 'zł', plurals: ['other' => 'پولش زلاٽي']),
    'PYG' => new C('PYG', 'پيراگوئي گاراني', narrow: '₲', plurals: ['other' => 'پيراگوئي گاراني'], minorUnits: 0),
    'QAR' => new C('QAR', 'قطري ريال', plurals: ['other' => 'قطري ريال']),
    'RON' => new C('RON', 'رومانیائي لیو', narrow: 'lei', plurals: ['other' => 'رومانیائي لیو']),
    'RSD' => new C('RSD', 'سربيا دينار', plurals: ['other' => 'سربيا دينار']),
    'RUB' => new C('RUB', 'روسي ربل', narrow: '₽', plurals: ['other' => 'روسي ربل']),
    'RWF' => new C('RWF', 'روانڊا فرينڪ', narrow: 'RF', plurals: ['other' => 'روانڊا فرينڪ'], minorUnits: 0),
    'SAR' => new C('SAR', 'سعودي ريال', plurals: ['other' => 'سعودي ريال']),
    'SBD' => new C('SBD', 'سولومان ٻيٽ ڊالر', narrow: '$', plurals: ['other' => 'سولومان ٻيٽ ڊالر']),
    'SCR' => new C('SCR', 'سشلي رپي', plurals: ['other' => 'سشلي رپي']),
    'SDG' => new C('SDG', 'سوڊاني پائونڊ', plurals: ['other' => 'سوڊاني پائونڊ']),
    'SEK' => new C('SEK', 'سويڊني ڪرونا', narrow: 'kr', plurals: ['other' => 'سويڊني ڪرونا']),
    'SGD' => new C('SGD', 'سنگاپوري ڊالر', narrow: '$', plurals: ['other' => 'سنگاپوري ڊالر']),
    'SHP' => new C('SHP', 'سينٽ هيلنا پائونڊ', narrow: '£', plurals: ['other' => 'سينٽ هيلنا پائونڊ']),
    'SLL' => new C('SLL', 'سیرا لیونيائي لیون', plurals: ['other' => 'سیرا لیونيائي لیون']),
    'SOS' => new C('SOS', 'سومالي شلنگ', plurals: ['other' => 'سومالي شلنگ']),
    'SRD' => new C('SRD', 'سرينامي ڊالر', narrow: '$', plurals: ['other' => 'سرينامي ڊالر']),
    'SSP' => new C('SSP', 'ڏکڻ سوڊاني پائونڊ', narrow: '£', plurals: ['other' => 'ڏکڻ سوڊاني پائونڊ']),
    'STD' => new C('STD', 'سائو ٽوم ۽ پرنسپي دوبرا (1977–2017)', plurals: ['other' => 'سائو ٽوم ۽ پرنسپي دوبرا (1977–2017)']),
    'STN' => new C('STN', 'سائو ٽوم ۽ پرنسپي دوبرا', narrow: 'Db', plurals: ['other' => 'سائو ٽوم ۽ پرنسپي دوبرا']),
    'SYP' => new C('SYP', 'سيريائي پائونڊ', narrow: '£', plurals: ['one' => 'شامي پائونڊ', 'other' => 'سيريائي پائونڊ']),
    'SZL' => new C('SZL', 'سوازي للانگيني', plurals: ['other' => 'سوازي للانگيني']),
    'THB' => new C('THB', 'ٿائي باهت', narrow: '฿', plurals: ['other' => 'ٿائي باهت']),
    'TJS' => new C('TJS', 'تاجڪستاني سوموني', plurals: ['other' => 'تاجڪستاني سوموني']),
    'TMT' => new C('TMT', 'ترڪمانستان منت', plurals: ['one' => 'ترڪمانستاني منت', 'other' => 'ترڪمانستان منت']),
    'TND' => new C('TND', 'تیونس دینار', plurals: ['other' => 'تیونس دینار'], minorUnits: 3),
    'TOP' => new C('TOP', 'تونگن پانگا', narrow: 'T$', plurals: ['other' => 'تونگن پانگا']),
    'TRY' => new C('TRY', 'ترڪي لرا', narrow: '₺', plurals: ['other' => 'ترڪي لرا']),
    'TTD' => new C('TTD', 'ٽرينڊيڊ ۽ ٽوباگو ڊالر', narrow: '$', plurals: ['other' => 'ٽرينڊيڊ ۽ ٽوباگو ڊالر']),
    'TWD' => new C('TWD', 'نيو تائيوان ڊالر', 'NT$', narrow: '$', plurals: ['other' => 'نيو تائيوان ڊالر']),
    'TZS' => new C('TZS', 'تنزانيائي شلنگ', plurals: ['other' => 'تنزانيائي شلنگ']),
    'UAH' => new C('UAH', 'یوڪرائن هریونیا', narrow: '₴', plurals: ['other' => 'یوڪرائن هریونیا']),
    'UGX' => new C('UGX', 'يگانڊا شلنگ', plurals: ['other' => 'يگانڊا شلنگ'], minorUnits: 0),
    'USD' => new C('USD', 'آمريڪي ڊالر', 'US$', narrow: '$', plurals: ['other' => 'آمريڪي ڊالر']),
    'UYU' => new C('UYU', 'يوروگوئي پيسو', narrow: '$', plurals: ['other' => 'يوروگوئي پيسو']),
    'UZS' => new C('UZS', 'ازبڪستاني سوم', plurals: ['other' => 'ازبڪستاني سوم']),
    'VEF' => new C('VEF', 'Venezuelan Bolívar (2008–2018)', narrow: 'Bs', plurals: ['other' => 'وینزویلا بولیور (2008–2018)']),
    'VES' => new C('VES', 'وینزویلا بولیور', plurals: ['other' => 'وینزویلا بولیور']),
    'VND' => new C('VND', 'ويٽنامي ڊونگ', '₫', narrow: '₫', plurals: ['other' => 'ويٽنامي ڊونگ'], minorUnits: 0),
    'VUV' => new C('VUV', 'وانواتو واتو', plurals: ['other' => 'وانواتو واتو'], minorUnits: 0),
    'WST' => new C('WST', 'ساموآن ٽالا', plurals: ['other' => 'ساموآن ٽالا']),
    'XAF' => new C('XAF', 'وچ آفريڪا فرينڪ', 'FCFA', plurals: ['other' => 'وچ آفريڪا فرينڪ'], minorUnits: 0),
    'XCD' => new C('XCD', 'اوڀر ڪيريبين ڊالر', 'EC$', narrow: '$', plurals: ['other' => 'اوڀر ڪيريبين ڊالر']),
    'XOF' => new C('XOF', 'اولهه آفريڪا فرينڪ', "F\u{202F}CFA", plurals: ['other' => 'اولهه آفريڪا فرينڪ'], minorUnits: 0),
    'XPF' => new C('XPF', 'CFP فرينڪ', 'CFPF', plurals: ['other' => 'CFP فرينڪ'], minorUnits: 0),
    'XXX' => new C('XXX', 'اڻڄاتل سڪو', '¤', plurals: ['other' => 'اڻڄاتل سڪو']),
    'YER' => new C('YER', 'يمني ريال', plurals: ['other' => 'يمني ريال']),
    'ZAR' => new C('ZAR', 'ڏکڻ آفريقي رانڊ', narrow: 'R', plurals: ['other' => 'ڏکڻ آفريقي رانڊ']),
    'ZMW' => new C('ZMW', 'زمبائي ڪواچا', narrow: 'ZK', plurals: ['other' => 'زمبائي ڪواچا']),
];
