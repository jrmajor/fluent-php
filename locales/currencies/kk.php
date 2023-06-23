<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'AED' => new C('AED', 'Біріккен Араб Әмірліктерінің дирхамы', plurals: ['other' => 'БАӘ дирхамы']),
    'AFN' => new C('AFN', 'Ауғанстан афганиі', narrow: '؋', plurals: ['other' => 'Ауғанстан афганиі']),
    'ALL' => new C('ALL', 'Албания легі', plurals: ['other' => 'Албания легі']),
    'AMD' => new C('AMD', 'Армения драмы', narrow: '֏', plurals: ['other' => 'Армения драмы']),
    'ANG' => new C('ANG', 'Нидерланд антиль гульдені', plurals: ['other' => 'Нидерланд антиль гульдені']),
    'AOA' => new C('AOA', 'Ангола кванзасы', narrow: 'Kz', plurals: ['other' => 'Ангола кванзасы']),
    'ARS' => new C('ARS', 'Аргентина песосы', narrow: '$', plurals: ['other' => 'Аргентина песосы']),
    'AUD' => new C('AUD', 'Аустралия доллары', 'A$', narrow: '$', plurals: ['other' => 'Аустралия доллары']),
    'AWG' => new C('AWG', 'Аруба флорині', plurals: ['other' => 'Аруба флорині']),
    'AZN' => new C('AZN', 'Әзірбайжан манаты', narrow: '₼', plurals: ['other' => 'Әзірбайжан манаты']),
    'BAM' => new C('BAM', 'Босния және Герцеговина айырбасталмалы маркасы', narrow: 'KM', plurals: ['other' => 'Босния және Герцеговина айырбасталмалы маркасы']),
    'BBD' => new C('BBD', 'Барбадос доллары', narrow: '$', plurals: ['other' => 'Барбадос доллары']),
    'BDT' => new C('BDT', 'Бангладеш такасы', narrow: '৳', plurals: ['other' => 'Бангладеш такасы']),
    'BGN' => new C('BGN', 'Болгария леві', plurals: ['other' => 'Болгария леві']),
    'BHD' => new C('BHD', 'Бахрейн динары', plurals: ['other' => 'Бахрейн динары'], minorUnits: 3),
    'BIF' => new C('BIF', 'Бурунди франкі', plurals: ['other' => 'Бурунди франкі'], minorUnits: 0),
    'BMD' => new C('BMD', 'Бермуд доллары', narrow: '$', plurals: ['other' => 'Бермуд доллары']),
    'BND' => new C('BND', 'Бруней доллары', narrow: '$', plurals: ['other' => 'Бруней доллары']),
    'BOB' => new C('BOB', 'Боливия боливианосы', narrow: 'Bs', plurals: ['other' => 'Боливия боливианосы']),
    'BRL' => new C('BRL', 'Бразилия реалы', 'R$', narrow: 'R$', plurals: ['other' => 'Бразилия реалы']),
    'BSD' => new C('BSD', 'Багам доллары', narrow: '$', plurals: ['other' => 'Багам доллары']),
    'BTN' => new C('BTN', 'Бутан нгултрумы', plurals: ['other' => 'Бутан нгултрумы']),
    'BWP' => new C('BWP', 'Ботсвана пуласы', narrow: 'P', plurals: ['other' => 'Ботсвана пуласы']),
    'BYN' => new C('BYN', 'Беларусь рублі', narrow: 'р.', plurals: ['other' => 'Беларусь рублі']),
    'BYR' => new C('BYR', 'Беларусь рублі (2000–2016)', plurals: ['other' => 'Беларусь рублі (2000–2016)']),
    'BZD' => new C('BZD', 'Белиз доллары', narrow: '$', plurals: ['other' => 'Белиз доллары']),
    'CAD' => new C('CAD', 'Канада доллары', 'CA$', narrow: '$', plurals: ['other' => 'Канада доллары']),
    'CDF' => new C('CDF', 'Конго франкі', plurals: ['other' => 'Конго франкі']),
    'CHF' => new C('CHF', 'Швейцария франкі', plurals: ['other' => 'Швейцария франкі']),
    'CLP' => new C('CLP', 'Чили песосы', narrow: '$', plurals: ['other' => 'Чили песосы'], minorUnits: 0),
    'CNH' => new C('CNH', 'Қытай юані (офшор)', plurals: ['other' => 'Қытай юані (офшор)']),
    'CNY' => new C('CNY', 'Қытай юані', 'CN¥', narrow: '¥', plurals: ['other' => 'Қытай юані']),
    'COP' => new C('COP', 'Колумбия песосы', narrow: '$', plurals: ['other' => 'Колумбия песосы']),
    'CRC' => new C('CRC', 'Коста-Рика колоны', narrow: '₡', plurals: ['other' => 'Коста-Рика колоны']),
    'CUC' => new C('CUC', 'Куба айырбасталмалы песосы', narrow: '$', plurals: ['other' => 'Куба айырбасталмалы песосы']),
    'CUP' => new C('CUP', 'Куба песосы', narrow: '$', plurals: ['other' => 'Куба песосы']),
    'CVE' => new C('CVE', 'Кабо-Верде эскудосы', plurals: ['other' => 'Кабо-Верде эскудосы']),
    'CZK' => new C('CZK', 'Чехия кронасы', narrow: 'Kč', plurals: ['other' => 'Чехия кронасы']),
    'DJF' => new C('DJF', 'Джибути франкі', plurals: ['other' => 'Джибути франкі'], minorUnits: 0),
    'DKK' => new C('DKK', 'Дат кроны', narrow: 'kr', plurals: ['other' => 'Дат кроны']),
    'DOP' => new C('DOP', 'Доминикан песосы', narrow: '$', plurals: ['other' => 'Доминикан песосы']),
    'DZD' => new C('DZD', 'Алжир динары', plurals: ['other' => 'Алжир динары']),
    'EGP' => new C('EGP', 'Мысыр фунты', narrow: 'E£', plurals: ['other' => 'Мысыр фунты']),
    'ERN' => new C('ERN', 'Эритрея накфасы', plurals: ['other' => 'Эритрея накфасы']),
    'ETB' => new C('ETB', 'Эфиопия быры', plurals: ['other' => 'Эфиопия быры']),
    'EUR' => new C('EUR', 'Еуро', '€', narrow: '€', plurals: ['other' => 'еуро']),
    'FJD' => new C('FJD', 'Фиджи доллары', narrow: '$', plurals: ['other' => 'Фиджи доллары']),
    'FKP' => new C('FKP', 'Фолкленд аралдарының фунты', narrow: '£', plurals: ['other' => 'Фолкленд аралдарының фунты']),
    'GBP' => new C('GBP', 'Британдық фунт', '£', narrow: '£', plurals: ['other' => 'Британдық фунт']),
    'GEL' => new C('GEL', 'Грузия лариі', narrow: '₾', plurals: ['other' => 'Грузия лариі']),
    'GHS' => new C('GHS', 'Гана седиі', narrow: 'GH₵', plurals: ['other' => 'Гана седиі']),
    'GIP' => new C('GIP', 'Гибралтар фунты', narrow: '£', plurals: ['other' => 'Гибралтар фунты']),
    'GMD' => new C('GMD', 'Гамбия даласиі', plurals: ['other' => 'Гамбия даласиі']),
    'GNF' => new C('GNF', 'Гвинея франкі', narrow: 'FG', plurals: ['other' => 'Гвинея франкі'], minorUnits: 0),
    'GTQ' => new C('GTQ', 'Гватемала кетсалі', narrow: 'Q', plurals: ['other' => 'Гватемала кетсалі']),
    'GYD' => new C('GYD', 'Гайана доллары', narrow: '$', plurals: ['other' => 'Гайана доллары']),
    'HKD' => new C('HKD', 'Гонконг доллары', 'HK$', narrow: '$', plurals: ['other' => 'Гонконг доллары']),
    'HNL' => new C('HNL', 'Гондурас лемпирасы', narrow: 'L', plurals: ['other' => 'Гондурас лемпирасы']),
    'HRK' => new C('HRK', 'Хорватия кунасы', narrow: 'kn', plurals: ['other' => 'Хорватия кунасы']),
    'HTG' => new C('HTG', 'Гаити гурды', plurals: ['other' => 'Гаити гурды']),
    'HUF' => new C('HUF', 'Венгрия форинті', narrow: 'Ft', plurals: ['other' => 'Венгрия форинті']),
    'IDR' => new C('IDR', 'Индонезия рупиясы', narrow: 'Rp', plurals: ['other' => 'Индонезия рупиясы']),
    'ILS' => new C('ILS', 'Израиль жаңа шекелі', '₪', narrow: '₪', plurals: ['other' => 'Израиль жаңа шекелі']),
    'INR' => new C('INR', 'Үндістан рупиясы', '₹', narrow: '₹', plurals: ['other' => 'Үндістан рупиясы']),
    'IQD' => new C('IQD', 'Ирак динары', plurals: ['other' => 'Ирак динары'], minorUnits: 3),
    'IRR' => new C('IRR', 'Иран риалы', plurals: ['other' => 'Иран риалы']),
    'ISK' => new C('ISK', 'Исландия кронасы', narrow: 'kr', plurals: ['other' => 'Исландия кронасы'], minorUnits: 0),
    'JMD' => new C('JMD', 'Ямайка доллары', narrow: '$', plurals: ['other' => 'Ямайка доллары']),
    'JOD' => new C('JOD', 'Иордания динары', plurals: ['other' => 'Иордания динары'], minorUnits: 3),
    'JPY' => new C('JPY', 'Жапония иенасы', 'JP¥', narrow: '¥', plurals: ['other' => 'Жапония иенасы'], minorUnits: 0),
    'KES' => new C('KES', 'Кения шиллингі', plurals: ['other' => 'Кения шиллингі']),
    'KGS' => new C('KGS', 'Қырғызстан сомы', plurals: ['other' => 'Қырғызстан сомы']),
    'KHR' => new C('KHR', 'Камбоджа риелі', narrow: '៛', plurals: ['other' => 'Камбоджа риелі']),
    'KMF' => new C('KMF', 'Комор аралдары франкі', narrow: 'CF', plurals: ['other' => 'Комор аралдары франкы'], minorUnits: 0),
    'KPW' => new C('KPW', 'Солтүстік Корея воны', narrow: '₩', plurals: ['other' => 'Солтүстік Корея воны']),
    'KRW' => new C('KRW', 'Оңтүстік Корея воны', '₩', narrow: '₩', plurals: ['other' => 'Оңтүстік Корея воны'], minorUnits: 0),
    'KWD' => new C('KWD', 'Кувейт динары', plurals: ['other' => 'Кувейт динары'], minorUnits: 3),
    'KYD' => new C('KYD', 'Кайман аралдары доллары', narrow: '$', plurals: ['other' => 'Кайман аралдары доллары']),
    'KZT' => new C('KZT', 'Қазақстан теңгесі', '₸', narrow: '₸', plurals: ['other' => 'Қазақстан теңгесі']),
    'LAK' => new C('LAK', 'Лаос кипі', narrow: '₭', plurals: ['other' => 'Лаос кипі']),
    'LBP' => new C('LBP', 'Ливан фунты', narrow: 'L£', plurals: ['other' => 'Ливан фунты']),
    'LKR' => new C('LKR', 'Шри-Ланка рупиясы', narrow: 'Rs', plurals: ['other' => 'Шри-Ланка рупиясы']),
    'LRD' => new C('LRD', 'Либерия доллары', narrow: '$', plurals: ['other' => 'Либерия доллары']),
    'LSL' => new C('LSL', 'Лесото лотиі', 'ЛСЛ', plurals: ['other' => 'Лесото лотиі']),
    'LTL' => new C('LTL', 'Литва литы', narrow: 'Lt', plurals: ['other' => 'Литва литы']),
    'LVL' => new C('LVL', 'Латвия латы', narrow: 'Ls', plurals: ['other' => 'Латвия латы']),
    'LYD' => new C('LYD', 'Ливия динары', plurals: ['other' => 'Ливия динары'], minorUnits: 3),
    'MAD' => new C('MAD', 'Марокко дирхамы', plurals: ['other' => 'Марокко дирхамы']),
    'MDL' => new C('MDL', 'Молдова лейі', plurals: ['other' => 'Молдова лейі']),
    'MGA' => new C('MGA', 'Малагаси ариариі', narrow: 'Ar', plurals: ['other' => 'Малагаси ариариі']),
    'MKD' => new C('MKD', 'Македония динары', plurals: ['other' => 'Македония динары']),
    'MMK' => new C('MMK', 'Мьянма кьяты', narrow: 'K', plurals: ['other' => 'Мьянма кьяты']),
    'MNT' => new C('MNT', 'Моңғолия тугригі', narrow: '₮', plurals: ['other' => 'Моңғолия тугригі']),
    'MOP' => new C('MOP', 'Макао патакасы', plurals: ['other' => 'Макао патакасы']),
    'MRO' => new C('MRO', 'Мавритания угиясы (1973–2017)', plurals: ['other' => 'Мавритания угиясы (1973–2017)']),
    'MRU' => new C('MRU', 'Мавритания угиясы', plurals: ['other' => 'Мавритания угиясы']),
    'MUR' => new C('MUR', 'Маврикий рупиясы', narrow: 'Rs', plurals: ['other' => 'Маврикий рупиясы']),
    'MVR' => new C('MVR', 'Мальдив руфиясы', plurals: ['other' => 'Мальдив руфиясы']),
    'MWK' => new C('MWK', 'Малави квачасы', plurals: ['other' => 'Малави квачасы']),
    'MXN' => new C('MXN', 'Мексика песосы', 'MX$', narrow: '$', plurals: ['other' => 'Мексика песосы']),
    'MYR' => new C('MYR', 'Малайзия ринггиті', narrow: 'RM', plurals: ['other' => 'Малайзия ринггиті']),
    'MZN' => new C('MZN', 'Мозамбик метикалы', plurals: ['other' => 'Мозамбик метикалы']),
    'NAD' => new C('NAD', 'Намибия доллары', narrow: '$', plurals: ['other' => 'Намибия доллары']),
    'NGN' => new C('NGN', 'Нигерия найрасы', narrow: '₦', plurals: ['other' => 'Нигерия найрасы']),
    'NIO' => new C('NIO', 'Никарагуа кордобасы', narrow: 'C$', plurals: ['other' => 'Никарагуа кордобасы']),
    'NOK' => new C('NOK', 'Норвегия кроны', narrow: 'kr', plurals: ['other' => 'Норвегия кроны']),
    'NPR' => new C('NPR', 'Непал рупиясы', narrow: 'Rs', plurals: ['other' => 'Непал рупиясы']),
    'NZD' => new C('NZD', 'Жаңа Зеландия доллары', 'NZ$', narrow: '$', plurals: ['other' => 'Жаңа Зеландия доллары']),
    'OMR' => new C('OMR', 'Оман риалы', plurals: ['other' => 'Оман риалы'], minorUnits: 3),
    'PAB' => new C('PAB', 'Панама бальбоасы', plurals: ['other' => 'Панама бальбоасы']),
    'PEN' => new C('PEN', 'Перу солі', plurals: ['other' => 'Перу солі']),
    'PGK' => new C('PGK', 'Папуа - Жаңа Гвинея кинасы', plurals: ['other' => 'Папуа - Жаңа Гвинея кинасы']),
    'PHP' => new C('PHP', 'Филиппин песосы', narrow: '₱', plurals: ['other' => 'Филиппин песосы']),
    'PKR' => new C('PKR', 'Пәкістан рупиясы', narrow: 'Rs', plurals: ['other' => 'Пәкістан рупиясы']),
    'PLN' => new C('PLN', 'Польша злотасы', narrow: 'zł', plurals: ['other' => 'Польша злотасы']),
    'PYG' => new C('PYG', 'Парагвай гуараниі', narrow: '₲', plurals: ['other' => 'Парагвай гуараниі'], minorUnits: 0),
    'QAR' => new C('QAR', 'Катар риалы', plurals: ['other' => 'Катар риалы']),
    'RON' => new C('RON', 'Румыния лейі', narrow: 'lei', plurals: ['other' => 'Румыния лейі']),
    'RSD' => new C('RSD', 'Сербия динары', plurals: ['other' => 'Сербия динары']),
    'RUB' => new C('RUB', 'Ресей рублі', '₽', narrow: '₽', plurals: ['other' => 'Ресей рублі']),
    'RWF' => new C('RWF', 'Руанда франкі', narrow: 'RF', plurals: ['other' => 'Руанда франкі'], minorUnits: 0),
    'SAR' => new C('SAR', 'Сауд Арабиясының риалы', plurals: ['other' => 'Сауд Арабиясының риалы']),
    'SBD' => new C('SBD', 'Соломон аралдары доллары', narrow: '$', plurals: ['other' => 'Соломон аралдары доллары']),
    'SCR' => new C('SCR', 'Сейшель рупиясы', plurals: ['other' => 'Сейшель рупиясы']),
    'SDG' => new C('SDG', 'Судан фунты', plurals: ['other' => 'Судан фунты']),
    'SEK' => new C('SEK', 'Швеция кроны', narrow: 'kr', plurals: ['other' => 'Швеция кроны']),
    'SGD' => new C('SGD', 'Сингапур доллары', narrow: '$', plurals: ['other' => 'Сингапур доллары']),
    'SHP' => new C('SHP', 'Әулие Елена аралы фунты', narrow: '£', plurals: ['other' => 'Әулие Елена аралы фунты']),
    'SLL' => new C('SLL', 'Сьерра-Леоне леонесі', plurals: ['other' => 'Сьерра-Леоне леонесі']),
    'SOS' => new C('SOS', 'Сомали шиллингі', plurals: ['other' => 'Сомали шиллингі']),
    'SRD' => new C('SRD', 'Суринам доллары', narrow: '$', plurals: ['other' => 'Суринам доллары']),
    'SSP' => new C('SSP', 'Оңтүстік Судан фунты', narrow: '£', plurals: ['other' => 'Оңтүстік Судан фунты']),
    'STD' => new C('STD', 'Сант-Томе мен Принсипи добрасы (1977–2017)', plurals: ['other' => 'Сант-Томе мен Принсипи добрасы (1977–2017)']),
    'STN' => new C('STN', 'Сант-Томе мен Принсипи добрасы', narrow: 'Db', plurals: ['other' => 'Сант-Томе мен Принсипи добрасы']),
    'SYP' => new C('SYP', 'Сирия фунты', narrow: '£', plurals: ['other' => 'Сирия фунты']),
    'SZL' => new C('SZL', 'Свазиленд лилангениі', plurals: ['other' => 'Свазиленд лилангениі']),
    'THB' => new C('THB', 'Тай баты', '฿', narrow: '฿', plurals: ['other' => 'Тай баты']),
    'TJS' => new C('TJS', 'Тәжікстан сомониі', plurals: ['other' => 'Тәжікстан сомониі']),
    'TMT' => new C('TMT', 'Түрікменстан манаты', plurals: ['other' => 'Түрікменстан манаты']),
    'TND' => new C('TND', 'Тунис динары', plurals: ['other' => 'Тунис динары'], minorUnits: 3),
    'TOP' => new C('TOP', 'Тонга паангасы', narrow: 'T$', plurals: ['other' => 'Тонга паангасы']),
    'TRY' => new C('TRY', 'Түрік лирасы', narrow: '₺', plurals: ['other' => 'Түрік лирасы']),
    'TTD' => new C('TTD', 'Тринидад және Тобаго доллары', narrow: '$', plurals: ['other' => 'Тринидад және Тобаго доллары']),
    'TWD' => new C('TWD', 'Жаңа Тайвань доллары', 'NT$', narrow: 'NT$', plurals: ['other' => 'Жаңа Тайвань доллары']),
    'TZS' => new C('TZS', 'Танзания шиллингі', plurals: ['other' => 'Танзания шиллингі']),
    'UAH' => new C('UAH', 'Украина гривнасы', narrow: '₴', plurals: ['other' => 'Украина гривнасы']),
    'UGX' => new C('UGX', 'Уганда шиллингі', plurals: ['other' => 'Уганда шиллингі'], minorUnits: 0),
    'USD' => new C('USD', 'АҚШ доллары', '$', narrow: '$', plurals: ['other' => 'АҚШ доллары']),
    'UYU' => new C('UYU', 'Уругвай песосы', narrow: '$', plurals: ['other' => 'Уругвай песосы']),
    'UZS' => new C('UZS', 'Өзбекстан сомы', plurals: ['other' => 'Өзбекстан сомы']),
    'VEF' => new C('VEF', 'Венесуэла боливары (2008–2018)', narrow: 'Bs', plurals: ['other' => 'Венесуэла боливары (2008–2018)']),
    'VES' => new C('VES', 'Венесуэла боливары', plurals: ['other' => 'Венесуэла боливары']),
    'VND' => new C('VND', 'Вьетнам донгі', '₫', narrow: '₫', plurals: ['other' => 'Вьетнам донгі'], minorUnits: 0),
    'VUV' => new C('VUV', 'Вануату ватуы', plurals: ['other' => 'Вануату ватуы'], minorUnits: 0),
    'WST' => new C('WST', 'Самоа таласы', plurals: ['other' => 'Самоа таласы']),
    'XAF' => new C('XAF', 'Орталық Африканың КФА франкі', 'FCFA', plurals: ['other' => 'Орталық Африканың КФА франкі'], minorUnits: 0),
    'XCD' => new C('XCD', 'Шығыс Кариб доллары', 'EC$', narrow: '$', plurals: ['other' => 'Шығыс Кариб доллары']),
    'XOF' => new C('XOF', 'Батыс Африканың КФА франкі', "F\u{202F}CFA", plurals: ['other' => 'Батыс Африканың КФА франкі'], minorUnits: 0),
    'XPF' => new C('XPF', 'КФП франкі', 'CFPF', plurals: ['other' => 'КФП франкі'], minorUnits: 0),
    'XXX' => new C('XXX', 'Белгісіз валюта', '¤', plurals: ['one' => '(белгісіз валюта бірлігі)', 'other' => '(белгісіз валюта)']),
    'YER' => new C('YER', 'Йемен риалы', plurals: ['other' => 'Йемен риалы']),
    'ZAR' => new C('ZAR', 'Оңтүстік Африка рэнді', narrow: 'R', plurals: ['other' => 'Оңтүстік Африка рэнді']),
    'ZMW' => new C('ZMW', 'Замбия квачасы', narrow: 'ZK', plurals: ['other' => 'Замбия квачасы']),
];
