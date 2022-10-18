<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'AED' => new C('AED', 'арабын нэгдсэн эмиратын дирхам', plurals: ['one' => 'арабын нэгдсэн эмиратын дирхам', 'other' => 'арабын нэгдсэн эмиратын дирхам']),
    'AFN' => new C('AFN', 'Афганистаны афгани', narrow: '؋', plurals: ['one' => 'Афганистаны афгани', 'other' => 'Афганистаны афгани']),
    'ALL' => new C('ALL', 'Албанийн лек', plurals: ['one' => 'Албанийн лек', 'other' => 'Албанийн лек']),
    'AMD' => new C('AMD', 'Арменийн драм', narrow: '֏', plurals: ['one' => 'Арменийн драм', 'other' => 'Арменийн драм']),
    'ANG' => new C('ANG', 'Нидерландын Антиллийн гулдер', plurals: ['one' => 'Нидерландын Антиллийн гулдер', 'other' => 'Нидерландын Антиллийн гулдер']),
    'AOA' => new C('AOA', 'Анголын кванза', narrow: 'Kz', plurals: ['one' => 'Анголын кванза', 'other' => 'Анголын кванза']),
    'ARS' => new C('ARS', 'Аргентины песо', narrow: '$', plurals: ['one' => 'Аргентины песо', 'other' => 'Аргентины песо']),
    'AUD' => new C('AUD', 'Австралийн доллар', 'A$', narrow: '$', plurals: ['one' => 'Австралийн доллар', 'other' => 'Австралийн доллар']),
    'AWG' => new C('AWG', 'Арубын флорин', plurals: ['one' => 'Арубын флорин', 'other' => 'Арубын флорин']),
    'AZN' => new C('AZN', 'Азербайжаны манат', narrow: '₼', plurals: ['one' => 'Азербайжаны манат', 'other' => 'Азербайжаны манат']),
    'BAM' => new C('BAM', 'Босни-Герцеговины хөрвөгч марк', narrow: 'KM', plurals: ['one' => 'Босни-Герцеговины хөрвөгч марк', 'other' => 'Босни-Герцеговины хөрвөгч марк']),
    'BBD' => new C('BBD', 'барбадос доллар', narrow: '$', plurals: ['one' => 'барбадос доллар', 'other' => 'барбадос доллар']),
    'BDT' => new C('BDT', 'Бангладешийн така', narrow: '৳', plurals: ['one' => 'Бангладешийн така', 'other' => 'Бангладешийн така']),
    'BGN' => new C('BGN', 'Болгарын лев', plurals: ['one' => 'Болгарын лев', 'other' => 'Болгарын лев']),
    'BHD' => new C('BHD', 'Бахрейн динар', plurals: ['one' => 'Бахрейн динар', 'other' => 'Бахрейн динар'], minorUnits: 3),
    'BIF' => new C('BIF', 'Бурундийн франк', plurals: ['one' => 'Бурундийн франк', 'other' => 'Бурундийн франк'], minorUnits: 0),
    'BMD' => new C('BMD', 'Бермудын доллар', narrow: '$', plurals: ['one' => 'Бермудын доллар', 'other' => 'Бермудын доллар']),
    'BND' => new C('BND', 'Брунейн доллар', narrow: '$', plurals: ['one' => 'Брунейн доллар', 'other' => 'Брунейн доллар']),
    'BOB' => new C('BOB', 'Боливийн боливиано', narrow: 'Bs', plurals: ['one' => 'Боливийн боливиано', 'other' => 'Боливийн боливиано']),
    'BRL' => new C('BRL', 'Бразилийн реал', 'R$', narrow: 'R$', plurals: ['one' => 'Бразилийн реал', 'other' => 'Бразилийн реал']),
    'BSD' => new C('BSD', 'Багамын доллар', narrow: '$', plurals: ['one' => 'Багамын доллар', 'other' => 'Багамын доллар']),
    'BTN' => new C('BTN', 'Бутаны нгултрум', plurals: ['one' => 'Бутаны нгултрум', 'other' => 'Бутаны нгултрум']),
    'BWP' => new C('BWP', 'Ботсванийн пула', narrow: 'P', plurals: ['one' => 'Ботсванийн пула', 'other' => 'Ботсванийн пула']),
    'BYN' => new C('BYN', 'Беларусийн рубль', narrow: 'р.', plurals: ['one' => 'Беларусийн рубль', 'other' => 'Беларусийн рубль']),
    'BYR' => new C('BYR', 'беларусь рубль (2000–2016)', plurals: ['one' => 'беларусь рубль (2000–2016)', 'other' => 'беларусь рубль (2000–2016)']),
    'BZD' => new C('BZD', 'Белизийн доллар', narrow: '$', plurals: ['one' => 'Белизийн доллар', 'other' => 'Белизийн доллар']),
    'CAD' => new C('CAD', 'канад доллар', 'CA$', narrow: '$', plurals: ['one' => 'канад доллар', 'other' => 'канад доллар']),
    'CDF' => new C('CDF', 'Конгогийн франк', plurals: ['one' => 'Конгогийн франк', 'other' => 'Конгогийн франк']),
    'CHF' => new C('CHF', 'Швейцарийн франк', plurals: ['one' => 'Швейцарийн франк', 'other' => 'Швейцарийн франк']),
    'CLP' => new C('CLP', 'Чилийн песо', narrow: '$', plurals: ['one' => 'Чилийн песо', 'other' => 'Чилийн песо'], minorUnits: 0),
    'CNH' => new C('CNH', 'Хятадын юань (офшор)', plurals: ['one' => 'Хятадын юань (офшор)', 'other' => 'Хятадын юань (офшор)']),
    'CNY' => new C('CNY', 'Хятадын юань', 'CN¥', narrow: '¥', plurals: ['one' => 'Хятадын юань', 'other' => 'Хятадын юань']),
    'COP' => new C('COP', 'Колумбын песо', narrow: '$', plurals: ['one' => 'Колумбын песо', 'other' => 'Колумбын песо']),
    'CRC' => new C('CRC', 'Коста-Рикагийн колон', narrow: '₡', plurals: ['one' => 'Коста-Рикагийн колон', 'other' => 'Коста-Рикагийн колон']),
    'CUC' => new C('CUC', 'Кубын хөрвөгч песо', narrow: '$', plurals: ['one' => 'Кубын хөрвөгч песо', 'other' => 'Кубын хөрвөгч песо']),
    'CUP' => new C('CUP', 'Кубын песо', narrow: '$', plurals: ['one' => 'Кубын песо', 'other' => 'Кубын песо']),
    'CVE' => new C('CVE', 'Кабо-Вердийн эскудо', plurals: ['one' => 'Кабо-Вердийн эскудо', 'other' => 'Кабо-Вердийн эскудо']),
    'CZK' => new C('CZK', 'Чехийн крон', narrow: 'Kč', plurals: ['one' => 'Чехийн крон', 'other' => 'Чехийн крон']),
    'DJF' => new C('DJF', 'Жибутийн франк', plurals: ['one' => 'Жибутийн франк', 'other' => 'Жибутийн франк'], minorUnits: 0),
    'DKK' => new C('DKK', 'Данийн крон', narrow: 'kr', plurals: ['one' => 'Данийн крон', 'other' => 'Данийн крон']),
    'DOP' => new C('DOP', 'Доминиканы песо', narrow: '$', plurals: ['one' => 'Доминиканы песо', 'other' => 'Доминиканы песо']),
    'DZD' => new C('DZD', 'Алжирийн доллар', plurals: ['one' => 'Алжирийн доллар', 'other' => 'Алжирийн доллар']),
    'EGP' => new C('EGP', 'Египетийн фунт', narrow: 'E£', plurals: ['one' => 'Египетийн фунт', 'other' => 'Египетийн фунт']),
    'ERN' => new C('ERN', 'Эритрейн накфа', plurals: ['one' => 'Эритрейн накфа', 'other' => 'Эритрейн накфа']),
    'ETB' => new C('ETB', 'Этиопын бирр', plurals: ['one' => 'Этиопын бирр', 'other' => 'Этиопын бирр']),
    'EUR' => new C('EUR', 'евро', '€', narrow: '€', plurals: ['one' => 'евро', 'other' => 'евро']),
    'FJD' => new C('FJD', 'Фижигийн доллар', narrow: '$', plurals: ['one' => 'Фижигийн доллар', 'other' => 'Фижигийн доллар']),
    'FKP' => new C('FKP', 'Фолклендийн арлуудын паунд', narrow: '£', plurals: ['one' => 'Фолклендийн арлуудын паунд', 'other' => 'Фолклендийн арлуудын паунд']),
    'GBP' => new C('GBP', 'Британийн фунт', '£', narrow: '£', plurals: ['one' => 'Британийн фунт', 'other' => 'Британийн фунт']),
    'GEL' => new C('GEL', 'Гүржийн лари', narrow: '₾', plurals: ['one' => 'Гүржийн лари', 'other' => 'Гүржийн лари']),
    'GHS' => new C('GHS', 'Ганагийн седи', narrow: 'GH₵', plurals: ['one' => 'Ганагийн седи', 'other' => 'Ганагийн седи']),
    'GIP' => new C('GIP', 'Гибралтарын фунт', narrow: '£', plurals: ['one' => 'Гибралтарын фунт', 'other' => 'Гибралтарын фунт']),
    'GMD' => new C('GMD', 'Гамбийн даласи', plurals: ['one' => 'Гамбийн даласи', 'other' => 'Гамбийн даласи']),
    'GNF' => new C('GNF', 'Гвинейн франк', narrow: 'FG', plurals: ['one' => 'Гвинейн франк', 'other' => 'Гвинейн франк'], minorUnits: 0),
    'GTQ' => new C('GTQ', 'Гватемалын кецал', narrow: 'Q', plurals: ['one' => 'Гватемалын кецал', 'other' => 'Гватемалын кецал']),
    'GYD' => new C('GYD', 'Гайанын доллар', narrow: '$', plurals: ['one' => 'Гайанын доллар', 'other' => 'Гайанын доллар']),
    'HKD' => new C('HKD', 'Хонг Конгийн доллар', 'HK$', narrow: '$', plurals: ['one' => 'Хонг Конгийн доллар', 'other' => 'Хонг Конгийн доллар']),
    'HNL' => new C('HNL', 'Гондурасын лемпира', narrow: 'L', plurals: ['one' => 'Гондурасын лемпира', 'other' => 'Гондурасын лемпира']),
    'HRK' => new C('HRK', 'Хорватын куна', narrow: 'kn', plurals: ['one' => 'Хорватын куна', 'other' => 'Хорватын куна']),
    'HTG' => new C('HTG', 'Гаитийн гурд', plurals: ['one' => 'Гаитийн гурд', 'other' => 'Гаитийн гурд']),
    'HUF' => new C('HUF', 'Унгарын форинт', narrow: 'Ft', plurals: ['one' => 'Унгарын форинт', 'other' => 'Унгарын форинт']),
    'IDR' => new C('IDR', 'Индонезийн рупи', narrow: 'Rp', plurals: ['one' => 'Индонезийн рупи', 'other' => 'Индонезийн рупи']),
    'ILS' => new C('ILS', 'Израилийн шинэ шекел', '₪', narrow: '₪', plurals: ['one' => 'Израилийн шинэ шекел', 'other' => 'Израилийн шинэ шекел']),
    'INR' => new C('INR', 'Энэтхэгийн рупи', '₹', narrow: '₹', plurals: ['one' => 'Энэтхэгийн рупи', 'other' => 'Энэтхэгийн рупи']),
    'IQD' => new C('IQD', 'Иракийн динар', plurals: ['one' => 'Иракийн динар', 'other' => 'Иракийн динар'], minorUnits: 3),
    'IRR' => new C('IRR', 'Ираны риял', plurals: ['one' => 'Ираны риял', 'other' => 'Ираны риял']),
    'ISK' => new C('ISK', 'Исландын крон', narrow: 'kr', plurals: ['one' => 'Исландын крон', 'other' => 'Исландын крон'], minorUnits: 0),
    'JMD' => new C('JMD', 'Ямайкийн доллар', narrow: '$', plurals: ['one' => 'Ямайкийн доллар', 'other' => 'Ямайкийн доллар']),
    'JOD' => new C('JOD', 'Йорданы динар', plurals: ['one' => 'Йорданы динар', 'other' => 'Йорданы динар'], minorUnits: 3),
    'JPY' => new C('JPY', 'Японы иен', 'JP¥', narrow: '¥', plurals: ['one' => 'Японы иен', 'other' => 'Японы иен'], minorUnits: 0),
    'KES' => new C('KES', 'Кенийн шиллинг', plurals: ['one' => 'Кенийн шиллинг', 'other' => 'Кенийн шиллинг']),
    'KGS' => new C('KGS', 'Кыргызын сом', plurals: ['one' => 'Кыргызын сом', 'other' => 'Кыргызын сом']),
    'KHR' => new C('KHR', 'Камбожийн риел', narrow: '៛', plurals: ['one' => 'Камбожийн риел', 'other' => 'Камбожийн риел']),
    'KMF' => new C('KMF', 'Коморын франк', narrow: 'CF', plurals: ['one' => 'Коморын франк', 'other' => 'Коморын франк'], minorUnits: 0),
    'KPW' => new C('KPW', 'Хойд Солонгосын вон', narrow: '₩', plurals: ['one' => 'Хойд Солонгосын вон', 'other' => 'Хойд Солонгосын вон']),
    'KRW' => new C('KRW', 'Өмнөд Солонгосын вон', '₩', narrow: '₩', plurals: ['one' => 'Өмнөд Солонгосын вон', 'other' => 'Өмнөд Солонгосын вон'], minorUnits: 0),
    'KWD' => new C('KWD', 'Кувейтийн динар', plurals: ['one' => 'Кувейтийн динар', 'other' => 'Кувейтийн динар'], minorUnits: 3),
    'KYD' => new C('KYD', 'Кайманы арлуудын доллар', narrow: '$', plurals: ['one' => 'Кайманы арлуудын доллар', 'other' => 'Кайманы арлуудын доллар']),
    'KZT' => new C('KZT', 'Казахстаны тэнгэ', narrow: '₸', plurals: ['one' => 'Казахстаны тэнгэ', 'other' => 'Казахстаны тэнгэ']),
    'LAK' => new C('LAK', 'Лаосын кип', narrow: '₭', plurals: ['one' => 'Лаосын кип', 'other' => 'Лаосын кип']),
    'LBP' => new C('LBP', 'Ливаны фунт', narrow: 'L£', plurals: ['one' => 'Ливаны фунт', 'other' => 'Ливаны фунт']),
    'LKR' => new C('LKR', 'Шри-Ланкийн рупи', narrow: 'Rs', plurals: ['one' => 'Шри-Ланкийн рупи', 'other' => 'Шри-Ланкийн рупи']),
    'LRD' => new C('LRD', 'Либерийн доллар', narrow: '$', plurals: ['one' => 'Либерийн доллар', 'other' => 'Либерийн доллар']),
    'LSL' => new C('LSL', 'Лесото лоти', plurals: ['one' => 'Лесото лоти', 'other' => 'Лесото лоти']),
    'LTL' => new C('LTL', 'литвийн литас', narrow: 'Lt', plurals: ['one' => 'литвийн литас', 'other' => 'литвийн литас']),
    'LVL' => new C('LVL', 'латвийн лац', narrow: 'Ls', plurals: ['one' => 'латвийн лац', 'other' => 'латвийн лац']),
    'LYD' => new C('LYD', 'Ливийн доллар', plurals: ['one' => 'Ливийн доллар', 'other' => 'Ливийн доллар'], minorUnits: 3),
    'MAD' => new C('MAD', 'Мороккогийн дирхэм', plurals: ['one' => 'Мороккогийн дирхэм', 'other' => 'Мороккогийн дирхэм']),
    'MDL' => new C('MDL', 'Молдовын лей', plurals: ['one' => 'Молдовын лей', 'other' => 'Молдовын лей']),
    'MGA' => new C('MGA', 'Малагасийн ариари', narrow: 'Ar', plurals: ['one' => 'Малагасийн ариари', 'other' => 'Малагасийн ариари']),
    'MKD' => new C('MKD', 'Македонийн динар', plurals: ['one' => 'Македонийн динар', 'other' => 'Македонийн динар']),
    'MMK' => new C('MMK', 'Мьянмарын киат', narrow: 'K', plurals: ['one' => 'Мьянмарын киат', 'other' => 'Мьянмарын киат']),
    'MNT' => new C('MNT', 'Монгол төгрөг', '₮', narrow: '₮', plurals: ['one' => 'Монгол төгрөг', 'other' => 'Монгол төгрөг']),
    'MOP' => new C('MOP', 'Макаогийн патака', plurals: ['one' => 'Макаогийн патака', 'other' => 'Макаогийн патака']),
    'MRO' => new C('MRO', 'мавритан угия (1973–2017)', plurals: ['one' => 'мавритан угия (1973–2017)', 'other' => 'мавритан угия (1973–2017)']),
    'MRU' => new C('MRU', 'Мавританийн угия', plurals: ['one' => 'Мавританийн угия', 'other' => 'Мавританийн угия']),
    'MUR' => new C('MUR', 'Маврикийн рупи', narrow: 'Rs', plurals: ['one' => 'Маврикийн рупи', 'other' => 'Маврикийн рупи']),
    'MVR' => new C('MVR', 'Мальдивийн руфия', plurals: ['one' => 'Мальдивийн руфия', 'other' => 'Мальдивийн руфия']),
    'MWK' => new C('MWK', 'Малавийн квача', plurals: ['one' => 'Малавийн квача', 'other' => 'Малавийн квача']),
    'MXN' => new C('MXN', 'Мексикийн песо', 'MX$', narrow: '$', plurals: ['one' => 'Мексикийн песо', 'other' => 'Мексикийн песо']),
    'MYR' => new C('MYR', 'Малайзын рингит', narrow: 'RM', plurals: ['one' => 'Малайзын рингит', 'other' => 'Малайзын рингит']),
    'MZN' => new C('MZN', 'Мозамбикийн метикал', plurals: ['one' => 'Мозамбикийн метикал', 'other' => 'Мозамбикийн метикал']),
    'NAD' => new C('NAD', 'Намибийн доллар', narrow: '$', plurals: ['one' => 'Намибийн доллар', 'other' => 'Намибийн доллар']),
    'NGN' => new C('NGN', 'Нигерийн найра', narrow: '₦', plurals: ['one' => 'Нигерийн найра', 'other' => 'Нигерийн найра']),
    'NIO' => new C('NIO', 'Никарагуагийн кордоба', narrow: 'C$', plurals: ['one' => 'Никарагуагийн кордоба', 'other' => 'Никарагуагийн кордоба']),
    'NOK' => new C('NOK', 'Норвегийн крон', narrow: 'kr', plurals: ['one' => 'Норвегийн крон', 'other' => 'Норвегийн крон']),
    'NPR' => new C('NPR', 'Балбын рупи', narrow: 'Rs', plurals: ['one' => 'Балбын рупи', 'other' => 'Балбын рупи']),
    'NZD' => new C('NZD', 'Шинэ Зеландын доллар', 'NZ$', narrow: '$', plurals: ['one' => 'Шинэ Зеландын доллар', 'other' => 'Шинэ Зеландын доллар']),
    'OMR' => new C('OMR', 'Оманийн риал', plurals: ['one' => 'Оманийн риал', 'other' => 'Оманийн риал'], minorUnits: 3),
    'PAB' => new C('PAB', 'Панамын бальбоа', plurals: ['one' => 'Панамын бальбоа', 'other' => 'Панамын бальбоа']),
    'PEN' => new C('PEN', 'Перугийн соль', plurals: ['one' => 'Перугийн соль', 'other' => 'Перугийн соль']),
    'PGK' => new C('PGK', 'Папуа-Шинэ Гвинейн кина', plurals: ['one' => 'Папуа-Шинэ Гвинейн кина', 'other' => 'Папуа-Шинэ Гвинейн кина']),
    'PHP' => new C('PHP', 'Филиппиний песо', narrow: '₱', plurals: ['one' => 'Филиппиний песо', 'other' => 'Филиппиний песо']),
    'PKR' => new C('PKR', 'Пакистаны рупи', narrow: 'Rs', plurals: ['one' => 'Пакистаны рупи', 'other' => 'Пакистаны рупи']),
    'PLN' => new C('PLN', 'Польшийн злот', narrow: 'zł', plurals: ['one' => 'Польшийн злот', 'other' => 'Польшийн злот']),
    'PYG' => new C('PYG', 'Парагвайн гуарани', narrow: '₲', plurals: ['one' => 'Парагвайн гуарани', 'other' => 'Парагвайн гуарани'], minorUnits: 0),
    'QAR' => new C('QAR', 'Катарын риал', plurals: ['one' => 'Катарын риал', 'other' => 'Катарын риал']),
    'RON' => new C('RON', 'Румыны лей', narrow: 'lei', plurals: ['one' => 'Румыны лей', 'other' => 'Румыны лей']),
    'RSD' => new C('RSD', 'Сербийн динар', plurals: ['one' => 'Сербийн динар', 'other' => 'Сербийн динар']),
    'RUB' => new C('RUB', 'Оросын рубль', narrow: '₽', plurals: ['one' => 'Оросын рубль', 'other' => 'Оросын рубль']),
    'RWF' => new C('RWF', 'Руандагийн франк', narrow: 'RF', plurals: ['one' => 'Руандагийн франк', 'other' => 'Руандагийн франк'], minorUnits: 0),
    'SAR' => new C('SAR', 'Саудын риял', plurals: ['one' => 'Саудын риял', 'other' => 'Саудын риял']),
    'SBD' => new C('SBD', 'Соломоны арлуудын доллар', narrow: '$', plurals: ['one' => 'Соломоны арлуудын доллар', 'other' => 'Соломоны арлуудын доллар']),
    'SCR' => new C('SCR', 'Сейшелийн рупи', plurals: ['one' => 'Сейшелийн рупи', 'other' => 'Сейшелийн рупи']),
    'SDG' => new C('SDG', 'Суданы фунт', plurals: ['one' => 'Суданы фунт', 'other' => 'Суданы фунт']),
    'SEK' => new C('SEK', 'Шведийн крон', narrow: 'кр', plurals: ['one' => 'Шведийн крон', 'other' => 'Шведийн крон']),
    'SGD' => new C('SGD', 'Сингапурын доллар', narrow: '$', plurals: ['one' => 'Сингапурын доллар', 'other' => 'Сингапурын доллар']),
    'SHP' => new C('SHP', 'Сент Хеленагийн фунт', narrow: '£', plurals: ['one' => 'Сент Хеленагийн фунт', 'other' => 'Сент Хеленагийн фунт']),
    'SLL' => new C('SLL', 'Сьерра-Леоны леон', plurals: ['one' => 'Сьерра-Леоны леон', 'other' => 'Сьерра-Леоны леон']),
    'SOS' => new C('SOS', 'Сомалийн шиллинг', plurals: ['one' => 'Сомалийн шиллинг', 'other' => 'Сомалийн шиллинг']),
    'SRD' => new C('SRD', 'Суринамын доллар', narrow: '$', plurals: ['one' => 'Суринамын доллар', 'other' => 'Суринамын доллар']),
    'SSP' => new C('SSP', 'Өмнөд Суданы фунт', narrow: '£', plurals: ['one' => 'Өмнөд Суданы фунт', 'other' => 'Өмнөд Суданы фунт']),
    'STD' => new C('STD', 'сан-томе ба принсипи добра (1977–2017)', plurals: ['one' => 'Сан-Томе Принсипигийн мөнгөн тэмдэгт добра (1977–2017)', 'other' => 'Сан-Томе Принсипигийн мөнгөн тэмдэгт добра (1977–2017)']),
    'STN' => new C('STN', 'Сан-Томе ба Принсипигийн добра', narrow: 'Db', plurals: ['one' => 'Сан-Томе ба Принсипигийн добра', 'other' => 'Сан-Томе ба Принсипигийн добра']),
    'SYP' => new C('SYP', 'Сирийн фунт', narrow: '£', plurals: ['one' => 'Сирийн фунт', 'other' => 'Сирийн фунт']),
    'SZL' => new C('SZL', 'Свазиландын лилангени', plurals: ['one' => 'Свазиландын лилангени', 'other' => 'Свазиландын лилангени']),
    'THB' => new C('THB', 'Тайландын бат', '฿', narrow: '฿', plurals: ['one' => 'Тайландын бат', 'other' => 'Тайландын бат']),
    'TJS' => new C('TJS', 'Тажикийн сомон', plurals: ['one' => 'Тажикийн сомон', 'other' => 'Тажикийн сомон']),
    'TMT' => new C('TMT', 'Туркмены манат', plurals: ['one' => 'Туркмены манат', 'other' => 'Туркмены манат']),
    'TND' => new C('TND', 'Тунисын доллар', plurals: ['one' => 'Тунисын доллар', 'other' => 'Тунисын доллар'], minorUnits: 3),
    'TOP' => new C('TOP', 'Тонгагийн панга', narrow: 'T$', plurals: ['one' => 'Тонгагийн панга', 'other' => 'Тонгагийн панга']),
    'TRY' => new C('TRY', 'Туркийн лира', narrow: '₺', plurals: ['one' => 'Туркийн лира', 'other' => 'Туркийн лира']),
    'TTD' => new C('TTD', 'Тринидад ба Тобагогийн доллар', narrow: '$', plurals: ['one' => 'Тринидад ба Тобагогийн доллар', 'other' => 'Тринидад ба Тобагогийн доллар']),
    'TWD' => new C('TWD', 'Шинэ Тайванийн доллар', 'NT$', narrow: 'NT$', plurals: ['one' => 'Шинэ Тайванийн доллар', 'other' => 'Шинэ Тайванийн доллар']),
    'TZS' => new C('TZS', 'Танзанийн шиллинг', plurals: ['one' => 'Танзанийн шиллинг', 'other' => 'Танзанийн шиллинг']),
    'UAH' => new C('UAH', 'Украины гривна', narrow: '₴', plurals: ['one' => 'Украины гривна', 'other' => 'Украины гривна']),
    'UGX' => new C('UGX', 'Угандагийн шиллинг', plurals: ['one' => 'Угандагийн шиллинг', 'other' => 'Угандагийн шиллинг'], minorUnits: 0),
    'USD' => new C('USD', 'америк доллар', '$', narrow: '$', plurals: ['one' => 'америк доллар', 'other' => 'америк доллар']),
    'UYU' => new C('UYU', 'Уругвайн песо', narrow: '$', plurals: ['one' => 'Уругвайн песо', 'other' => 'Уругвайн песо']),
    'UZS' => new C('UZS', 'Узбекийн сом', plurals: ['one' => 'Узбекийн сом', 'other' => 'Узбекийн сом']),
    'VEF' => new C('VEF', 'венесуэлийн боливар (2008–2018)', narrow: 'Bs', plurals: ['one' => 'венесуэлийн боливар (2008–2018)', 'other' => 'венесуэлийн боливар (2008–2018)']),
    'VES' => new C('VES', 'Венесуэлийн боливар', plurals: ['one' => 'Венесуэлийн боливар', 'other' => 'Венесуэлийн боливар']),
    'VND' => new C('VND', 'Вьетнамын донг', '₫', narrow: '₫', plurals: ['one' => 'Вьетнамын донг', 'other' => 'Вьетнамын донг'], minorUnits: 0),
    'VUV' => new C('VUV', 'Вануатугийн вату', plurals: ['one' => 'Вануатугийн вату', 'other' => 'Вануатугийн вату'], minorUnits: 0),
    'WST' => new C('WST', 'Самоагийн тала', plurals: ['one' => 'Самоагийн тала', 'other' => 'Самоагийн тала']),
    'XAF' => new C('XAF', 'Төв Африкийн франк', 'FCFA', plurals: ['one' => 'Төв Африкийн франк', 'other' => 'Төв Африкийн франк'], minorUnits: 0),
    'XCD' => new C('XCD', 'Зүүн Карибийн доллар', 'EC$', narrow: '$', plurals: ['one' => 'Зүүн Карибийн доллар', 'other' => 'Зүүн Карибийн доллар']),
    'XOF' => new C('XOF', 'Баруун Африкийн франк', "F\u{202F}CFA", plurals: ['one' => 'Баруун Африкийн франк', 'other' => 'Баруун Африкийн франк'], minorUnits: 0),
    'XPF' => new C('XPF', 'Францын колонийн франк', 'CFPF', plurals: ['one' => 'Францын колонийн франк', 'other' => 'Францын колонийн франк'], minorUnits: 0),
    'XXX' => new C('XXX', 'тодорхойгүй мөнгөн тэмдэгт', '¤', plurals: ['one' => '(тодорхойгүй мөнгөн тэмдэгтийн нэгж)', 'other' => '(тодорхойгүй мөнгөн тэмдэгт)']),
    'YER' => new C('YER', 'Йемений риял', plurals: ['one' => 'Йемений риял', 'other' => 'Йемений риял']),
    'ZAR' => new C('ZAR', 'Өмнөд Африкийн ранд', narrow: 'R', plurals: ['one' => 'Өмнөд Африкийн ранд', 'other' => 'Өмнөд Африкийн ранд']),
    'ZMK' => new C('ZMK', 'Замби квача (1968–2012)', plurals: ['one' => 'Замби квача (1968–2012)', 'other' => 'Замби квача (1968–2012)']),
    'ZMW' => new C('ZMW', 'Замбийн квача', narrow: 'ZK', plurals: ['one' => 'Замбийн квача', 'other' => 'Замбийн квача']),
];