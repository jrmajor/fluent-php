<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'AED' => new C('AED', 'дырхам ААЭ', plurals: ['one' => 'дырхам ААЭ', 'few' => 'дырхамы ААЭ', 'many' => 'дырхамаў ААЭ', 'other' => 'дырхама ААЭ']),
    'AFN' => new C('AFN', 'афганскі афгані', narrow: '؋', plurals: ['one' => 'афганскі афгані', 'few' => 'афганскія афгані', 'many' => 'афганскіх афгані', 'other' => 'афганскага афгані']),
    'ALL' => new C('ALL', 'албанскі лек', plurals: ['one' => 'албанскі лек', 'few' => 'албанскія лекі', 'many' => 'албанскіх лекаў', 'other' => 'албанскага лека']),
    'AMD' => new C('AMD', 'армянскі драм', narrow: '֏', plurals: ['one' => 'армянскі драм', 'few' => 'армянскія драмы', 'many' => 'армянскіх драмаў', 'other' => 'армянскага драма']),
    'ANG' => new C('ANG', 'нідэрландскі антыльскі гульдэн', plurals: ['one' => 'нідэрландскі антыльскі гульдэн', 'few' => 'нідэрландскія антыльскія гульдэны', 'many' => 'нідэрландскіх антыльскіх гульдэнаў', 'other' => 'нідэрландскага антыльскага гульдэна']),
    'AOA' => new C('AOA', 'ангольская кванза', narrow: 'Kz', plurals: ['one' => 'ангольская кванза', 'few' => 'ангольскія кванзы', 'many' => 'ангольскіх кванз', 'other' => 'ангольскай кванзы']),
    'ARS' => new C('ARS', 'аргенцінскае песа', narrow: '$', plurals: ['one' => 'аргенцінскае песа', 'few' => 'аргенцінскія песа', 'many' => 'аргенцінскіх песа', 'other' => 'аргенцінскага песа']),
    'AUD' => new C('AUD', 'аўстралійскі долар', 'A$', narrow: 'A$', plurals: ['one' => 'аўстралійскі долар', 'few' => 'аўстралійскія долары', 'many' => 'аўстралійскіх долараў', 'other' => 'аўстралійскага долара']),
    'AWG' => new C('AWG', 'арубанскі фларын', plurals: ['one' => 'арубанскі фларын', 'few' => 'арубанскія фларыны', 'many' => 'арубанскіх фларынаў', 'other' => 'арубанскага фларына']),
    'AZN' => new C('AZN', 'азербайджанскі манат', narrow: '₼', plurals: ['one' => 'азербайджанскі манат', 'few' => 'азербайджанскія манаты', 'many' => 'азербайджанскіх манатаў', 'other' => 'азербайджанскага маната']),
    'BAM' => new C('BAM', 'канверсоўная марка Босніі і Герцагавіны', narrow: 'KM', plurals: ['one' => 'канверсоўная марка Босніі і Герцагавіны', 'few' => 'канверсоўныя маркі Босніі і Герцагавіны', 'many' => 'канверсоўных марак Босніі і Герцагавіны', 'other' => 'канверсоўнай маркі Босніі і Герцагавіны']),
    'BBD' => new C('BBD', 'барбадаскі долар', narrow: 'Bds$', plurals: ['one' => 'барбадаскі долар', 'few' => 'барбадаскія долары', 'many' => 'барбадаскіх долараў', 'other' => 'барбадаскага долара']),
    'BDT' => new C('BDT', 'бангладэшская така', narrow: '৳', plurals: ['one' => 'бангладэшская така', 'few' => 'бангладэшскія такі', 'many' => 'бангладэшскіх так', 'other' => 'бангладэшскай такі']),
    'BGN' => new C('BGN', 'балгарскі леў', plurals: ['one' => 'балгарскі леў', 'few' => 'балгарскія левы', 'many' => 'балгарскіх леваў', 'other' => 'балгарскага лева']),
    'BHD' => new C('BHD', 'бахрэйнскі дынар', plurals: ['one' => 'бахрэйнскі дынар', 'few' => 'бахрэйнскія дынары', 'many' => 'бахрэйнскі дынараў', 'other' => 'бахрэйнскага дынара'], minorUnits: 3),
    'BIF' => new C('BIF', 'бурундзійскі франк', plurals: ['one' => 'бурундзійскі франк', 'few' => 'бурундзійскія франкі', 'many' => 'бурундзійскіх франкаў', 'other' => 'бурундзійскага франка'], minorUnits: 0),
    'BMD' => new C('BMD', 'бермудскі долар', narrow: 'BD$', plurals: ['one' => 'бермудскі долар', 'few' => 'бермудскія долары', 'many' => 'бермудскіх долараў', 'other' => 'бермудскага долара']),
    'BND' => new C('BND', 'брунейскі долар', narrow: '$', plurals: ['one' => 'брунейскі долар', 'few' => 'брунейскія долары', 'many' => 'брунейскіх долараў', 'other' => 'брунейскага долара']),
    'BOB' => new C('BOB', 'балівіяна', narrow: 'Bs', plurals: ['other' => 'балівіяна']),
    'BRL' => new C('BRL', 'бразільскі рэал', narrow: 'R$', plurals: ['one' => 'бразільскі рэал', 'few' => 'бразільскія рэалы', 'many' => 'бразільскіх рэалаў', 'other' => 'бразільскага рэала']),
    'BSD' => new C('BSD', 'багамскі долар', narrow: 'B$', plurals: ['one' => 'багамскі долар', 'few' => 'багамскія долары', 'many' => 'багамскіх долараў', 'other' => 'багамскага долара']),
    'BTN' => new C('BTN', 'бутанскі нгултрум', plurals: ['one' => 'бутанскі нгултрум', 'few' => 'бутанскія нгултрумы', 'many' => 'бутанскіх нгултрумаў', 'other' => 'бутанскага нгултрума']),
    'BWP' => new C('BWP', 'батсванская пула', narrow: 'P', plurals: ['one' => 'батсванская пула', 'few' => 'батсванскія пулы', 'many' => 'батсванскіх пул', 'other' => 'батсванскай пулы']),
    'BYN' => new C('BYN', 'беларускі рубель', 'Br', plurals: ['one' => 'беларускі рубель', 'few' => 'беларускія рублі', 'many' => 'беларускіх рублёў', 'other' => 'беларускага рубля']),
    'BYR' => new C('BYR', 'беларускі рубель (2000–2016)', plurals: ['one' => 'беларускі рубель (2000–2016)', 'few' => 'беларускія рублі (2000–2016)', 'many' => 'беларускіх рублёў (2000–2016)', 'other' => 'беларускага рубля (2000–2016)']),
    'BZD' => new C('BZD', 'белізскі долар', narrow: 'BZ$', plurals: ['one' => 'белізскі долар', 'few' => 'белізскія долары', 'many' => 'белізскіх долараў', 'other' => 'белізскага долара']),
    'CAD' => new C('CAD', 'канадскі долар', narrow: 'CA$', plurals: ['one' => 'канадскі долар', 'few' => 'канадскія долары', 'many' => 'канадскіх долараў', 'other' => 'канадскага долара']),
    'CDF' => new C('CDF', 'кангалезскі франк', plurals: ['one' => 'кангалезскі франк', 'few' => 'кангалезскія франкі', 'many' => 'кангалезскіх франкаў', 'other' => 'кангалезскага франка']),
    'CHF' => new C('CHF', 'швейцарскі франк', plurals: ['one' => 'швейцарскі франк', 'few' => 'швейцарскія франкі', 'many' => 'швейцарскіх франкаў', 'other' => 'швейцарскага франка']),
    'CLP' => new C('CLP', 'чылійскае песа', narrow: '$', plurals: ['one' => 'чылійскае песа', 'few' => 'чылійскія песа', 'many' => 'чылійскіх песа', 'other' => 'чылійскага песа'], minorUnits: 0),
    'CNH' => new C('CNH', 'афшорны кітайскі юань', plurals: ['one' => 'афшорны кітайскі юань', 'few' => 'афшорныя кітайскія юані', 'many' => 'афшорных кітайскіх юаняў', 'other' => 'афшорнага кітайскага юаня']),
    'CNY' => new C('CNY', 'кітайскі юань', 'CN¥', narrow: '¥', plurals: ['one' => 'кітайскі юань', 'few' => 'кітайскія юані', 'many' => 'кітайскіх юаняў', 'other' => 'кітайскага юаня']),
    'COP' => new C('COP', 'калумбійскае песа', narrow: '$', plurals: ['one' => 'калумбійскае песа', 'few' => 'калумбійскія песа', 'many' => 'калумбійскіх песа', 'other' => 'калумбійскага песа']),
    'CRC' => new C('CRC', 'коста-рыканскі калон', narrow: '₡', plurals: ['one' => 'коста-рыканскі калон', 'few' => 'коста-рыканскія калоны', 'many' => 'коста-рыканскіх калонаў', 'other' => 'коста-рыканскага калона']),
    'CUC' => new C('CUC', 'кубінскае канверсоўнае песа', narrow: 'CUC$', plurals: ['one' => 'кубінскае канверсоўнае песа', 'few' => 'кубінскія канверсоўныя песа', 'many' => 'кубінскіх канверсоўных песа', 'other' => 'кубінскага канверсоўнага песа']),
    'CUP' => new C('CUP', 'кубінскае песа', narrow: '$MN', plurals: ['one' => 'кубінскае песа', 'few' => 'кубінскія песа', 'many' => 'кубінскіх песа', 'other' => 'кубінскага песа']),
    'CVE' => new C('CVE', 'эскуда Каба-Вердэ', plurals: ['other' => 'эскуда Каба-Вердэ']),
    'CZK' => new C('CZK', 'чэшская крона', narrow: 'Kč', plurals: ['one' => 'чэшская крона', 'few' => 'чэшскія кроны', 'many' => 'чэшскіх крон', 'other' => 'чэшскай кроны']),
    'DJF' => new C('DJF', 'джыбуційскі франк', plurals: ['one' => 'джыбуційскі франк', 'few' => 'джыбуційскія франкі', 'many' => 'джыбуційскіх франкаў', 'other' => 'джыбуційскага франка'], minorUnits: 0),
    'DKK' => new C('DKK', 'дацкая крона', narrow: 'kr', plurals: ['one' => 'дацкая крона', 'few' => 'дацкія кроны', 'many' => 'дацкіх крон', 'other' => 'дацкай кроны']),
    'DOP' => new C('DOP', 'дамініканскае песа', narrow: 'RD$', plurals: ['one' => 'дамініканскае песа', 'few' => 'дамініканскія песа', 'many' => 'дамініканскіх песа', 'other' => 'дамініканскага песа']),
    'DZD' => new C('DZD', 'алжырскі дынар', plurals: ['one' => 'алжырскі дынар', 'few' => 'алжырскія дынары', 'many' => 'алжырскіх дынараў', 'other' => 'алжырскага дынара']),
    'EGP' => new C('EGP', 'егіпецкі фунт', narrow: 'E£', plurals: ['one' => 'егіпецкі фунт', 'few' => 'егіпецкія фунты', 'many' => 'егіпецкіх фунтаў', 'other' => 'егіпецкага фунта']),
    'ERN' => new C('ERN', 'эрытрэйская накфа', plurals: ['one' => 'эрытрэйская накфа', 'few' => 'эрытрэйскія накфы', 'many' => 'эрытрэйскіх накфаў', 'other' => 'эрытрэйскай накфы']),
    'ETB' => new C('ETB', 'эфіопскі быр', plurals: ['one' => 'эфіопскі быр', 'few' => 'эфіопскія быры', 'many' => 'эфіопскіх быраў', 'other' => 'эфіопскага быра']),
    'EUR' => new C('EUR', 'еўра', '€', narrow: '€', plurals: ['other' => 'еўра']),
    'FJD' => new C('FJD', 'фіджыйскі долар', narrow: 'FJ$', plurals: ['one' => 'фіджыйскі долар', 'few' => 'фіджыйскія долары', 'many' => 'фіджыйскіх долараў', 'other' => 'фіджыйскага долара']),
    'FKP' => new C('FKP', 'фунт Фалклендскіх астравоў', narrow: 'FK£', plurals: ['one' => 'фунт Фалклендскіх астравоў', 'few' => 'фунты Фалклендскіх астравоў', 'many' => 'фунтаў Фалклендскіх астравоў', 'other' => 'фунта Фалклендскіх астравоў']),
    'GBP' => new C('GBP', 'брытанскі фунт стэрлінгаў', '£', narrow: '£', plurals: ['one' => 'брытанскі фунт стэрлінгаў', 'few' => 'брытанскія фунты стэрлінгаў', 'many' => 'брытанскіх фунтаў стэрлінгаў', 'other' => 'брытанскага фунта стэрлінгаў']),
    'GEL' => new C('GEL', 'грузінскі лары', narrow: '₾', plurals: ['one' => 'грузінскі лары', 'few' => 'грузінскія лары', 'many' => 'грузінскіх лары', 'other' => 'грузінскага лары']),
    'GHS' => new C('GHS', 'ганскі седзі', narrow: 'GH₵', plurals: ['one' => 'ганскі седзі', 'few' => 'ганскія седзі', 'many' => 'ганскіх седзі', 'other' => 'ганскага седзі']),
    'GIP' => new C('GIP', 'гібралтарскі фунт', narrow: '£', plurals: ['one' => 'гібралтарскі фунт', 'few' => 'гібралтарскія фунты', 'many' => 'гібралтарскіх фунтаў', 'other' => 'гібралтарскага фунта']),
    'GMD' => new C('GMD', 'гамбійскі даласі', plurals: ['one' => 'гамбійскі даласі', 'few' => 'гамбійскія даласі', 'many' => 'гамбійскіх даласі', 'other' => 'гамбійскага даласі']),
    'GNF' => new C('GNF', 'гвінейскі франк', narrow: 'FG', plurals: ['one' => 'гвінейскі франк', 'few' => 'гвінейскія франкі', 'many' => 'гвінейскіх франкаў', 'other' => 'гвінейскага франка'], minorUnits: 0),
    'GTQ' => new C('GTQ', 'гватэмальскі кетсаль', narrow: 'Q', plurals: ['one' => 'гватэмальскі кетсаль', 'few' => 'гватэмальскія кетсалі', 'many' => 'гватэмальскіх кетсаляў', 'other' => 'гватэмальскага кетсаля']),
    'GYD' => new C('GYD', 'гаянскі долар', narrow: 'G$', plurals: ['one' => 'гаянскі долар', 'few' => 'гаянскія долары', 'many' => 'гаянскіх долараў', 'other' => 'гаянскага долара']),
    'HKD' => new C('HKD', 'ганконгскі долар', 'HK$', narrow: '$', plurals: ['one' => 'ганконгскі долар', 'few' => 'ганконгскія долары', 'many' => 'ганконгскіх долараў', 'other' => 'ганконгскага долара']),
    'HNL' => new C('HNL', 'гандураская лемпіра', narrow: 'L', plurals: ['one' => 'гандураская лемпіра', 'few' => 'гандураскія лемпіры', 'many' => 'гандураскіх лемпір', 'other' => 'гандураскай лемпіры']),
    'HRK' => new C('HRK', 'харвацкая куна', narrow: 'kn', plurals: ['one' => 'харвацкая куна', 'few' => 'харвацкія куны', 'many' => 'харвацкіх кун', 'other' => 'харвацкай куны']),
    'HTG' => new C('HTG', 'гаіцянскі гурд', plurals: ['one' => 'гаіцянскі гурд', 'few' => 'гаіцянскія гурды', 'many' => 'гаіцянскіх гурдаў', 'other' => 'гаіцянскага гурда']),
    'HUF' => new C('HUF', 'венгерскі форынт', narrow: 'Ft', plurals: ['one' => 'венгерскі форынт', 'few' => 'венгерскія форынты', 'many' => 'венгерскіх форынтаў', 'other' => 'венгерскага форынта']),
    'IDR' => new C('IDR', 'інданезійская рупія', narrow: 'Rp', plurals: ['one' => 'інданезійская рупія', 'few' => 'інданезійскія рупіі', 'many' => 'інданезійскіх рупій', 'other' => 'інданезійскай рупіі']),
    'ILS' => new C('ILS', 'новы ізраільскі шэкель', '₪', narrow: '₪', plurals: ['one' => 'новы ізраільскі шэкель', 'few' => 'новыя ізраільскія шэкелі', 'many' => 'новых ізраільскіх шэкеляў', 'other' => 'новага ізраільскага шэкеля']),
    'INR' => new C('INR', 'індыйская рупія', '₹', narrow: '₹', plurals: ['one' => 'індыйская рупія', 'few' => 'індыйскія рупіі', 'many' => 'індыйскіх рупій', 'other' => 'індыйскай рупіі']),
    'IQD' => new C('IQD', 'іракскі дынар', plurals: ['one' => 'іракскі дынар', 'few' => 'іракскія дынары', 'many' => 'іракскіх дынараў', 'other' => 'іракскага дынара'], minorUnits: 3),
    'IRR' => new C('IRR', 'іранскі рыял', plurals: ['one' => 'іранскі рыял', 'few' => 'іранскія рыялы', 'many' => 'іранскіх рыялаў', 'other' => 'іранскага рыяла']),
    'ISK' => new C('ISK', 'ісландская крона', narrow: 'Íkr', plurals: ['one' => 'ісландская крона', 'few' => 'ісландскія кроны', 'many' => 'ісландскіх крон', 'other' => 'ісландскай кроны'], minorUnits: 0),
    'JMD' => new C('JMD', 'ямайскі долар', narrow: 'J$', plurals: ['one' => 'ямайскі долар', 'few' => 'ямайскія долары', 'many' => 'ямайскіх долараў', 'other' => 'ямайскага долара']),
    'JOD' => new C('JOD', 'іарданскі дынар', plurals: ['one' => 'іарданскі дынар', 'few' => 'іарданскія дынары', 'many' => 'іарданскіх дынараў', 'other' => 'іарданскага дынара'], minorUnits: 3),
    'JPY' => new C('JPY', 'японская іена', '¥', narrow: '¥', plurals: ['one' => 'японская іена', 'few' => 'японскія іены', 'many' => 'японскіх іен', 'other' => 'японскай іены'], minorUnits: 0),
    'KES' => new C('KES', 'кенійскі шылінг', plurals: ['one' => 'кенійскі шылінг', 'few' => 'кенійскія шылінгі', 'many' => 'кенійскіх шылінгаў', 'other' => 'кенійскага шылінга']),
    'KGS' => new C('KGS', 'кіргізскі сом', plurals: ['one' => 'кіргізскі сом', 'few' => 'кіргізскія сомы', 'many' => 'кіргізскіх сомаў', 'other' => 'кіргізскага сома']),
    'KHR' => new C('KHR', 'камбаджыйскі рыель', narrow: '៛', plurals: ['one' => 'камбаджыйскі рыель', 'few' => 'камбаджыйскія рыелі', 'many' => 'камбаджыйскіх рыеляў', 'other' => 'камбаджыйскага рыеля']),
    'KMF' => new C('KMF', 'каморскі франк', narrow: 'CF', plurals: ['one' => 'каморскі франк', 'few' => 'каморскія франкі', 'many' => 'каморскіх франкаў', 'other' => 'каморскага франка'], minorUnits: 0),
    'KPW' => new C('KPW', 'паўночнакарэйская вона', narrow: '₩', plurals: ['one' => 'паўночнакарэйская вона', 'few' => 'паўночнакарэйскія воны', 'many' => 'паўночнакарэйскіх вон', 'other' => 'паўночнакарэйскай воны']),
    'KRW' => new C('KRW', 'паўднёвакарэйская вона', '₩', narrow: '₩', plurals: ['one' => 'паўднёвакарэйская вона', 'few' => 'паўднёвакарэйскія воны', 'many' => 'паўднёвакарэйскіх вон', 'other' => 'паўднёвакарэйскай воны'], minorUnits: 0),
    'KWD' => new C('KWD', 'кувейцкі дынар', plurals: ['one' => 'кувейцкі дынар', 'few' => 'кувейцкія дынары', 'many' => 'кувейцкіх дынараў', 'other' => 'кувейцкага дынара'], minorUnits: 3),
    'KYD' => new C('KYD', 'долар Кайманавых астравоў', narrow: 'CI$', plurals: ['one' => 'долар Кайманавых астравоў', 'few' => 'долары Кайманавых астравоў', 'many' => 'долараў Кайманавых астравоў', 'other' => 'долара Кайманавых астравоў']),
    'KZT' => new C('KZT', 'казахстанскі тэнге', narrow: '₸', plurals: ['one' => 'казахстанскі тэнге', 'few' => 'казахстанскія тэнге', 'many' => 'казахстанскіх тэнге', 'other' => 'казахстанскага тэнге']),
    'LAK' => new C('LAK', 'лаоскі кіп', narrow: '₭', plurals: ['one' => 'лаоскі кіп', 'few' => 'лаоскія кіпы', 'many' => 'лаоскіх кіпаў', 'other' => 'лаоскага кіпа']),
    'LBP' => new C('LBP', 'ліванскі фунт', narrow: 'L£', plurals: ['one' => 'ліванскі фунт', 'few' => 'ліванскія фунты', 'many' => 'ліванскіх фунтаў', 'other' => 'ліванскага фунта']),
    'LKR' => new C('LKR', 'шры-ланкійская рупія', narrow: 'Rs', plurals: ['one' => 'шры-ланкійская рупія', 'few' => 'шры-ланкійскія рупіі', 'many' => 'шры-ланкійскіх рупій', 'other' => 'шры-ланкійскай рупіі']),
    'LRD' => new C('LRD', 'ліберыйскі долар', narrow: 'L$', plurals: ['one' => 'ліберыйскі долар', 'few' => 'ліберыйскія долары', 'many' => 'ліберыйскіх долараў', 'other' => 'ліберыйскага долара']),
    'LSL' => new C('LSL', 'лесоцкі лоці', plurals: ['one' => 'лесоцкі лоці', 'few' => 'лесоцкія лоці', 'many' => 'лесоцкіх лоці', 'other' => 'лесоцкага лоці']),
    'LYD' => new C('LYD', 'лівійскі дынар', plurals: ['one' => 'лівійскі дынар', 'few' => 'лівійскія дынары', 'many' => 'лівійскіх дынараў', 'other' => 'лівійскага дынара'], minorUnits: 3),
    'MAD' => new C('MAD', 'мараканскі дырхам', plurals: ['one' => 'мараканскі дырхам', 'few' => 'мараканскія дырхамы', 'many' => 'мараканскіх дырхамаў', 'other' => 'мараканскага дырхама']),
    'MDL' => new C('MDL', 'малдаўскі лей', plurals: ['one' => 'малдаўскі лей', 'few' => 'малдаўскія леі', 'many' => 'малдаўскіх леяў', 'other' => 'малдаўскага лея']),
    'MGA' => new C('MGA', 'малагасійскі арыяры', narrow: 'Ar', plurals: ['one' => 'малагасійскі арыяры', 'few' => 'малагасійскія арыяры', 'many' => 'малагасійскіх арыяры', 'other' => 'малагасійскага арыяры']),
    'MKD' => new C('MKD', 'македонскі дэнар', plurals: ['one' => 'македонскі дэнар', 'few' => 'македонскія дэнары', 'many' => 'македонскіх дэнараў', 'other' => 'македонскага дэнара']),
    'MMK' => new C('MMK', 'м’янманскі к’ят', narrow: 'K', plurals: ['one' => 'м’янманскі к’ят', 'few' => 'м’янманскія к’яты', 'many' => 'м’янманскіх к’ятаў', 'other' => 'м’янманскага к’ята']),
    'MNT' => new C('MNT', 'мангольскі тугрык', narrow: '₮', plurals: ['one' => 'мангольскі тугрык', 'few' => 'мангольскія тугрыкі', 'many' => 'мангольскіх тугрыкаў', 'other' => 'мангольскага тугрыка']),
    'MOP' => new C('MOP', 'патака Макаа', plurals: ['one' => 'патака Макаа', 'many' => 'патак Макаа', 'other' => 'патакі Макаа']),
    'MRO' => new C('MRO', 'маўрытанская ўгія (1973–2017)', plurals: ['one' => 'маўрытанская ўгія (1973–2017)', 'few' => 'маўрытанскія ўгіі (1973–2017)', 'many' => 'маўрытанскіх угій (1973–2017)', 'other' => 'маўрытанскай ўгіі (1973–2017)']),
    'MRU' => new C('MRU', 'маўрытанская угія', plurals: ['one' => 'маўрытанская угія', 'few' => 'маўрытанскія угіі', 'many' => 'маўрытанскіх угій', 'other' => 'маўрытанскай угіі']),
    'MUR' => new C('MUR', 'маўрыкійская рупія', narrow: 'Rs', plurals: ['one' => 'маўрыкійская рупія', 'few' => 'маўрыкійскія рупіі', 'many' => 'маўрыкійскіх рупій', 'other' => 'маўрыкійскай рупіі']),
    'MVR' => new C('MVR', 'мальдыўская руфія', plurals: ['one' => 'мальдыўская руфія', 'few' => 'мальдыўскія руфіі', 'many' => 'мальдыўскіх руфій', 'other' => 'мальдыўскай руфіі']),
    'MWK' => new C('MWK', 'малавійская квача', plurals: ['one' => 'малавійская квача', 'few' => 'малавійскія квачы', 'many' => 'малавійскіх квач', 'other' => 'малавійскай квачы']),
    'MXN' => new C('MXN', 'мексіканскае песа', 'MX$', narrow: 'MX$', plurals: ['one' => 'мексіканскае песа', 'few' => 'мексіканскія песа', 'many' => 'мексіканскіх песа', 'other' => 'мексіканскага песа']),
    'MYR' => new C('MYR', 'малайзійскі рынгіт', narrow: 'RM', plurals: ['one' => 'малайзійскі рынгіт', 'few' => 'малайзійскія рынгіты', 'many' => 'малайзійскіх рынгітаў', 'other' => 'малайзійскага рынгіта']),
    'MZN' => new C('MZN', 'мазамбікскі метыкал', plurals: ['one' => 'мазамбікскі метыкал', 'few' => 'мазамбікскія метыкалы', 'many' => 'мазамбікскіх метыкалаў', 'other' => 'мазамбікскага метыкала']),
    'NAD' => new C('NAD', 'намібійскі долар', narrow: 'N$', plurals: ['one' => 'намібійскі долар', 'few' => 'намібійскія долары', 'many' => 'намібійскіх долараў', 'other' => 'намібійскага долара']),
    'NGN' => new C('NGN', 'нігерыйская наіра', narrow: '₦', plurals: ['one' => 'нігерыйская наіра', 'few' => 'нігерыйскія наіры', 'many' => 'нігерыйскіх наір', 'other' => 'нігерыйскай наіры']),
    'NIO' => new C('NIO', 'нікарагуанская кордаба', narrow: 'C$', plurals: ['one' => 'нікарагуанская кордаба', 'few' => 'нікарагуанскія кордабы', 'many' => 'нікарагуанскіх кордаб', 'other' => 'нікарагуанскай кордабы']),
    'NOK' => new C('NOK', 'нарвежская крона', narrow: 'kr', plurals: ['one' => 'нарвежская крона', 'few' => 'нарвежскія кроны', 'many' => 'нарвежскіх крон', 'other' => 'нарвежскай кроны']),
    'NPR' => new C('NPR', 'непальская рупія', narrow: 'Rs', plurals: ['one' => 'непальская рупія', 'few' => 'непальскія рупіі', 'many' => 'непальскіх рупій', 'other' => 'непальскай рупіі']),
    'NZD' => new C('NZD', 'новазеландскі долар', narrow: 'NZ$', plurals: ['one' => 'новазеландскі долар', 'few' => 'новазеландскія долары', 'many' => 'новазеландскіх долараў', 'other' => 'новазеландскага долара']),
    'OMR' => new C('OMR', 'аманскі рыял', plurals: ['one' => 'аманскі рыял', 'few' => 'аманскія рыялы', 'many' => 'аманскіх рыялаў', 'other' => 'аманскага рыяла'], minorUnits: 3),
    'PAB' => new C('PAB', 'панамскае бальбоа', plurals: ['one' => 'панамскае бальбоа', 'few' => 'панамскія бальбоа', 'many' => 'панамскіх бальбоа', 'other' => 'панамскага бальбоа']),
    'PEN' => new C('PEN', 'перуанскі соль', plurals: ['one' => 'перуанскі соль', 'few' => 'перуанскія солі', 'many' => 'перуанскіх соляў', 'other' => 'перуанскага соля']),
    'PGK' => new C('PGK', 'кіна Папуа-Новай Гвінеі', plurals: ['one' => 'кіна Папуа-Новай Гвінеі', 'many' => 'кін Папуа-Новай Гвінеі', 'other' => 'кіны Папуа-Новай Гвінеі']),
    'PHP' => new C('PHP', 'філіпінскае песа', narrow: '₱', plurals: ['one' => 'філіпінскае песа', 'few' => 'філіпінскія песа', 'many' => 'філіпінскіх песа', 'other' => 'філіпінскага песа']),
    'PKR' => new C('PKR', 'пакістанская рупія', narrow: 'Rs', plurals: ['one' => 'пакістанская рупія', 'few' => 'пакістанскія рупіі', 'many' => 'пакістанскіх рупій', 'other' => 'пакістанскай рупіі']),
    'PLN' => new C('PLN', 'польскі злоты', narrow: 'zł', plurals: ['one' => 'польскі злоты', 'few' => 'польскія злотыя', 'many' => 'польскіх злотых', 'other' => 'польскага злотага']),
    'PYG' => new C('PYG', 'парагвайскі гуарані', narrow: '₲', plurals: ['one' => 'парагвайскі гуарані', 'few' => 'парагвайскія гуарані', 'many' => 'парагвайскіх гуарані', 'other' => 'парагвайскага гуарані'], minorUnits: 0),
    'QAR' => new C('QAR', 'катарскі рыял', plurals: ['one' => 'катарскі рыял', 'few' => 'катарскія рыялы', 'many' => 'катарскіх рыялаў', 'other' => 'катарскага рыяла']),
    'RON' => new C('RON', 'румынскі лей', narrow: 'lei', plurals: ['one' => 'румынскі лей', 'few' => 'румынскія леі', 'many' => 'румынскіх леяў', 'other' => 'румынскага лея']),
    'RSD' => new C('RSD', 'сербскі дынар', plurals: ['one' => 'сербскі дынар', 'few' => 'сербскія дынары', 'many' => 'сербскіх дынараў', 'other' => 'сербскага дынара']),
    'RUB' => new C('RUB', 'расійскі рубель', '₽', narrow: 'руб.', plurals: ['one' => 'расійскі рубель', 'few' => 'расійскія рублі', 'many' => 'расійскіх рублёў', 'other' => 'расійскага рубля']),
    'RWF' => new C('RWF', 'руандыйскі франк', narrow: 'RF', plurals: ['one' => 'руандыйскі франк', 'few' => 'руандыйскія франкі', 'many' => 'руандыйскіх франкаў', 'other' => 'руандыйскага франка'], minorUnits: 0),
    'SAR' => new C('SAR', 'саудаўскі рыял', plurals: ['one' => 'саудаўскі рыял', 'few' => 'саудаўскія рыялы', 'many' => 'саудаўскіх рыялаў', 'other' => 'саудаўскага рыяла']),
    'SBD' => new C('SBD', 'долар Саламонавых астравоў', narrow: 'SI$', plurals: ['one' => 'долар Саламонавых астравоў', 'few' => 'долар Саламонавых астравоў', 'many' => 'долараў Саламонавых астравоў', 'other' => 'долара Саламонавых астравоў']),
    'SCR' => new C('SCR', 'сейшэльская рупія', plurals: ['one' => 'сейшэльская рупія', 'few' => 'сейшэльскія рупіі', 'many' => 'сейшэльскіх рупій', 'other' => 'сейшэльскай рупіі']),
    'SDG' => new C('SDG', 'суданскі фунт', plurals: ['one' => 'суданскі фунт', 'few' => 'суданскія фунты', 'many' => 'суданскіх фунтаў', 'other' => 'суданскага фунта']),
    'SEK' => new C('SEK', 'шведская крона', narrow: 'kr', plurals: ['one' => 'шведская крона', 'few' => 'шведскія кроны', 'many' => 'шведскіх крон', 'other' => 'шведскай кроны']),
    'SGD' => new C('SGD', 'сінгапурскі долар', narrow: 'S$', plurals: ['one' => 'сінгапурскі долар', 'few' => 'сінгапурскія долары', 'many' => 'сінгапурскіх долараў', 'other' => 'сінгапурскага долара']),
    'SHP' => new C('SHP', 'фунт в-ва Святой Алены', narrow: '£', plurals: ['one' => 'фунт в-ва Святой Алены', 'few' => 'фунты в-ва Святой Алены', 'many' => 'фунтаў в-ва Святой Алены', 'other' => 'фунта в-ва Святой Алены']),
    'SLL' => new C('SLL', 'сьера-леонскі леонэ', plurals: ['one' => 'сьера-леонскі леонэ', 'few' => 'сьера-леонскія леонэ', 'many' => 'сьера-леонскіх леонэ', 'other' => 'сьера-леонскага леонэ']),
    'SOS' => new C('SOS', 'самалійскі шылінг', plurals: ['one' => 'самалійскі шылінг', 'few' => 'самалійскія шылінгі', 'many' => 'самалійскіх шылінгаў', 'other' => 'самалійскага шылінга']),
    'SRD' => new C('SRD', 'сурынамскі долар', narrow: '$', plurals: ['one' => 'сурынамскі долар', 'few' => 'сурынамскія долары', 'many' => 'сурынамскіх долараў', 'other' => 'сурынамскага долара']),
    'SSP' => new C('SSP', 'паўднёвасуданскі фунт', narrow: '£', plurals: ['one' => 'паўднёвасуданскі фунт', 'few' => 'паўднёвасуданскія фунты', 'many' => 'паўднёвасуданскіх фунтаў', 'other' => 'паўднёвасуданскага фунта']),
    'STD' => new C('STD', 'добра Сан-Тамэ і Прынсіпі (1977–2017)', plurals: ['one' => 'добра Сан-Тамэ і Прынсіпі (1977–2017)', 'many' => 'добраў Сан-Тамэ і Прынсіпі (1977–2017)', 'other' => 'добры Сан-Тамэ і Прынсіпі (1977–2017)']),
    'STN' => new C('STN', 'добра Сан-Тамэ і Прынсіпі', narrow: 'Db', plurals: ['one' => 'добра Сан-Тамэ і Прынсіпі', 'many' => 'добраў Сан-Тамэ і Прынсіпі', 'other' => 'добры Сан-Тамэ і Прынсіпі']),
    'SYP' => new C('SYP', 'сірыйскі фунт', narrow: '£', plurals: ['one' => 'сірыйскі фунт', 'few' => 'сірыйскія фунты', 'many' => 'сірыйскіх фунтаў', 'other' => 'сірыйскага фунта']),
    'SZL' => new C('SZL', 'свазілендскі лілангені', plurals: ['one' => 'свазілендскі лілангені', 'few' => 'свазілендскія лілангені', 'many' => 'свазілендскіх лілангені', 'other' => 'свазілендскага лілангені']),
    'THB' => new C('THB', 'тайскі бат', narrow: '฿', plurals: ['one' => 'тайскі бат', 'few' => 'тайскія баты', 'many' => 'тайскіх батаў', 'other' => 'тайскага бата']),
    'TJS' => new C('TJS', 'таджыкскі самані', plurals: ['one' => 'таджыкскі самані', 'few' => 'таджыкскія самані', 'many' => 'таджыкскіх самані', 'other' => 'таджыкскага самані']),
    'TMT' => new C('TMT', 'туркменскі манат', plurals: ['one' => 'туркменскі манат', 'few' => 'туркменскія манаты', 'many' => 'туркменскіх манатаў', 'other' => 'туркменскага маната']),
    'TND' => new C('TND', 'туніскі дынар', plurals: ['one' => 'туніскі дынар', 'few' => 'туніскія дынары', 'many' => 'туніскіх дынараў', 'other' => 'туніскага дынара'], minorUnits: 3),
    'TOP' => new C('TOP', 'танганская паанга', narrow: 'T$', plurals: ['one' => 'танганская паанга', 'few' => 'танганскія паангі', 'many' => 'танганскіх паанг', 'other' => 'танганскай паангі']),
    'TRY' => new C('TRY', 'турэцкая ліра', narrow: '₺', plurals: ['one' => 'турэцкая ліра', 'few' => 'турэцкія ліры', 'many' => 'турэцкіх лір', 'other' => 'турэцкай ліры']),
    'TTD' => new C('TTD', 'долар Трынідада і Табага', narrow: 'TT$', plurals: ['one' => 'долар Трынідада і Табага', 'few' => 'долары Трынідада і Табага', 'many' => 'долараў Трынідада і Табага', 'other' => 'долара Трынідада і Табага']),
    'TWD' => new C('TWD', 'новы тайваньскі долар', 'NT$', narrow: '$', plurals: ['one' => 'новы тайваньскі долар', 'few' => 'новыя тайваньскія долары', 'many' => 'новых тайваньскіх долараў', 'other' => 'новага тайваньскага долара']),
    'TZS' => new C('TZS', 'танзанійскі шылінг', plurals: ['one' => 'танзанійскі шылінг', 'few' => 'танзанійскія шылінгі', 'many' => 'танзанійскіх шылінгаў', 'other' => 'танзанійскага шылінга']),
    'UAH' => new C('UAH', 'украінская грыўня', narrow: '₴', plurals: ['one' => 'украінская грыўня', 'few' => 'украінскія грыўні', 'many' => 'украінскіх грыўняў', 'other' => 'украінскай грыўні']),
    'UGX' => new C('UGX', 'угандыйскі шылінг', plurals: ['one' => 'угандыйскі шылінг', 'few' => 'угандыйскія шылінгі', 'many' => 'угандыйскіх шылінгаў', 'other' => 'угандыйскага шылінга'], minorUnits: 0),
    'USD' => new C('USD', 'долар ЗША', '$', narrow: '$', plurals: ['one' => 'долар ЗША', 'few' => 'долары ЗША', 'many' => 'долараў ЗША', 'other' => 'долара ЗША']),
    'UYU' => new C('UYU', 'уругвайскае песа', narrow: '$U', plurals: ['one' => 'уругвайскае песа', 'few' => 'уругвайскія песа', 'many' => 'уругвайскіх песа', 'other' => 'уругвайскага песа']),
    'UZS' => new C('UZS', 'узбекскі сум', plurals: ['one' => 'узбекскі сум', 'few' => 'узбекскія сумы', 'many' => 'узбекскіх сумаў', 'other' => 'узбекскага сума']),
    'VEF' => new C('VEF', 'венесуальскі балівар (2008–2018)', narrow: 'Bs', plurals: ['one' => 'венесуальскі балівар (2008–2018)', 'few' => 'венесуальскія балівары (2008–2018)', 'many' => 'венесуальскіх балівараў (2008–2018)', 'other' => 'венесуальскага балівара (2008–2018)']),
    'VES' => new C('VES', 'венесуэльскі балівар', plurals: ['one' => 'венесуэльскі балівар', 'few' => 'венесуэльскія балівары', 'many' => 'венесуэльскіх балівараў', 'other' => 'венесуэльскага балівара']),
    'VND' => new C('VND', 'в’етнамскі донг', '₫', narrow: '₫', plurals: ['one' => 'в’етнамскі донг', 'few' => 'в’етнамскія донгі', 'many' => 'в’етнамскіх донгаў', 'other' => 'в’етнамскага донга'], minorUnits: 0),
    'VUV' => new C('VUV', 'вануацкі вату', plurals: ['one' => 'вануацкі вату', 'few' => 'вануацкія вату', 'many' => 'вануацкіх вату', 'other' => 'вануацкага вату'], minorUnits: 0),
    'WST' => new C('WST', 'самаанская тала', plurals: ['one' => 'самаанская тала', 'few' => 'самаанскія талы', 'many' => 'самаанскіх тал', 'other' => 'самаанскай талы']),
    'XAF' => new C('XAF', 'цэнтральнаафрыканскі франк КФА', 'FCFA', plurals: ['one' => 'цэнтральнаафрыканскі франк КФА', 'few' => 'цэнтральнаафрыканскія франкі КФА', 'many' => 'цэнтральнаафрыканскіх франкаў КФА', 'other' => 'цэнтральнаафрыканскага франка КФА'], minorUnits: 0),
    'XCD' => new C('XCD', 'усходнекарыбскі долар', 'EC$', narrow: 'EC$', plurals: ['one' => 'усходнекарыбскі долар', 'few' => 'усходнекарыбскія долары', 'many' => 'усходнекарыбскіх долараў', 'other' => 'усходнекарыбскага долара']),
    'XOF' => new C('XOF', 'заходнеафрыканскі франк КФА', "F\u{202F}CFA", plurals: ['one' => 'заходнеафрыканскі франк КФА', 'few' => 'заходнеафрыканскія франкі КФА', 'many' => 'заходнеафрыканскіх франкаў КФА', 'other' => 'заходнеафрыканскага франка КФА'], minorUnits: 0),
    'XPF' => new C('XPF', 'французскі ціхаакіянскі франк', 'CFPF', plurals: ['one' => 'французскі ціхаакіянскі франк', 'few' => 'французскія ціхаакіянскія франкі', 'many' => 'французскіх ціхаакіянскіх франкаў', 'other' => 'французскага ціхаакіянскага франка'], minorUnits: 0),
    'XXX' => new C('XXX', 'невядомая валюта', '¤', plurals: ['other' => 'невядомай валюты']),
    'YER' => new C('YER', 'еменскі рыал', plurals: ['one' => 'еменскі рыял', 'few' => 'еменскія рыялы', 'many' => 'еменскіх рыялаў', 'other' => 'еменскага рыяла']),
    'ZAR' => new C('ZAR', 'паўднёваафрыканскі рэнд', narrow: 'R', plurals: ['one' => 'паўднёваафрыканскі рэнд', 'few' => 'паўднёваафрыканскія рэнды', 'many' => 'паўднёваафрыканскіх рэндаў', 'other' => 'паўднёваафрыканскага рэнда']),
    'ZMW' => new C('ZMW', 'замбійская квача', narrow: 'ZK', plurals: ['one' => 'замбійская квача', 'few' => 'замбійскія квачы', 'many' => 'замбійскіх квач', 'other' => 'замбійскай квачы']),
];
