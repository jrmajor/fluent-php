<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'ADP' => new C('ADP', 'andorransk peseta', plurals: ['one' => 'andorransk peseta', 'other' => 'andorranska pesetas']),
    'AED' => new C('AED', 'emiratisk dirham'),
    'AFA' => new C('AFA', 'afghani (1927–2002)'),
    'AFN' => new C('AFN', 'afghansk afghani', narrow: '؋', plurals: ['one' => 'afghansk afghani', 'other' => 'afghanska afghani']),
    'ALK' => new C('ALK', 'albansk lek (1946–1965)', plurals: ['one' => 'albansk lek (1946–1965)', 'other' => 'albanska lek (1946–1965)']),
    'ALL' => new C('ALL', 'albansk lek', plurals: ['one' => 'albansk lek', 'other' => 'albanska leke']),
    'AMD' => new C('AMD', 'armenisk dram', narrow: '֏', plurals: ['one' => 'armenisk dram', 'other' => 'armeniska dram']),
    'ANG' => new C('ANG', 'antillergulden'),
    'AOA' => new C('AOA', 'angolansk kwanza', narrow: 'Kz', plurals: ['one' => 'angolansk kwanza', 'other' => 'angolanska kwanza']),
    'AOK' => new C('AOK', 'angolansk kwanza (1977–1990)', plurals: ['one' => 'angolansk kwanza (1977–1990)', 'other' => 'angolanska kwanza (1977–1990)']),
    'AON' => new C('AON', 'angolansk ny kwanza (1990–2000)', plurals: ['one' => 'angolansk kwanza (1990–2000)', 'other' => 'angolanska nya kwanza (1990–2000)']),
    'AOR' => new C('AOR', 'angolansk kwanza reajustado (1995–1999)', plurals: ['one' => 'angolansk kwanza reajustado (1995–1999)', 'other' => 'angolanska kwanza reajustado (1995–1999)']),
    'ARA' => new C('ARA', 'argentinsk austral', plurals: ['one' => 'argentinsk austral', 'other' => 'argentinska australer']),
    'ARL' => new C('ARL', 'argentisk peso (1970–1983)', plurals: ['one' => 'argentisk peso (1970–1983)', 'other' => 'argentiska pesos (1970–1983)']),
    'ARM' => new C('ARM', 'argentisk peso (1881–1969)', plurals: ['one' => 'argentisk peso (1881–1969)', 'other' => 'argentiska pesos (1881–1969)']),
    'ARP' => new C('ARP', 'argentinsk peso (1983–1985)', plurals: ['one' => 'argentinsk peso (1983–1985)', 'other' => 'argentinska pesos (1983–1985)']),
    'ARS' => new C('ARS', 'argentinsk peso', narrow: '$', plurals: ['one' => 'argentinsk peso', 'other' => 'argentinska pesos']),
    'ATS' => new C('ATS', 'österrikisk schilling', plurals: ['one' => 'österrikisk schilling', 'other' => 'österrikiska schilling']),
    'AUD' => new C('AUD', 'australisk dollar', narrow: '$', plurals: ['one' => 'australisk dollar', 'other' => 'australiska dollar']),
    'AWG' => new C('AWG', 'arubansk florin', plurals: ['one' => 'arubansk florin', 'other' => 'arubanska floriner']),
    'AZM' => new C('AZM', 'azerbajdzjansk manat (1993–2006)', plurals: ['one' => 'azerbajdzjansk manat (1993–2006)', 'other' => 'azerbajdzjanska manat (1993–2006)']),
    'AZN' => new C('AZN', 'azerbajdzjansk manat', narrow: '₼', plurals: ['one' => 'azerbajdzjansk manat', 'other' => 'azerbajdzjanska manat']),
    'BAD' => new C('BAD', 'bosnisk-hercegovinsk dinar (1992–1994)', plurals: ['one' => 'bosnisk-hercegovinsk dinar (1992–1994)', 'other' => 'bosnisk-hercegovinska dinarer (1992–1994)']),
    'BAM' => new C('BAM', 'bosnisk-hercegovinsk mark (konvertibel)', narrow: 'KM', plurals: ['one' => 'bosnisk-hercegovinsk mark (konvertibel)', 'other' => 'bosnisk-hercegovinska mark (konvertibla)']),
    'BAN' => new C('BAN', 'bosnisk-hercegovinsk dinar (1994–1998)', plurals: ['one' => 'bosnisk-hercegovinsk dinar (1994–1998)', 'other' => 'bosnisk-hercegovinska dinarer (1994–1998)']),
    'BBD' => new C('BBD', 'barbadisk dollar', 'Bds$', '$', ['one' => 'barbadisk dollar', 'other' => 'barbadiska dollar']),
    'BDT' => new C('BDT', 'bangladeshisk taka', narrow: '৳', plurals: ['one' => 'bangladeshisk taka', 'other' => 'bangladeshiska taka']),
    'BEC' => new C('BEC', 'belgisk franc (konvertibel)', plurals: ['one' => 'belgisk franc (konvertibel)', 'other' => 'belgiska franc (konvertibla)']),
    'BEF' => new C('BEF', 'belgisk franc', plurals: ['one' => 'belgisk franc', 'other' => 'belgiska franc']),
    'BEL' => new C('BEL', 'belgisk franc (finansiell)', plurals: ['one' => 'belgisk franc (finansiell)', 'other' => 'belgiska franc (finansiella)']),
    'BGL' => new C('BGL', 'bulgarisk hård lev (1962–1999)', plurals: ['one' => 'bulgarisk hård lev (1962–1999)', 'other' => 'bulgariska hårda lev (1962–1999)']),
    'BGM' => new C('BGM', 'bulgarisk lev (1952–1962)', plurals: ['one' => 'bulgarisk lev (1952–1962)', 'other' => 'bulgariska lev (1952–1962)']),
    'BGN' => new C('BGN', 'bulgarisk lev', plurals: ['one' => 'bulgarisk lev', 'other' => 'bulgariska leva']),
    'BGO' => new C('BGO', 'bulgarisk lev (1881–1952)'),
    'BHD' => new C('BHD', 'bahrainsk dinar', plurals: ['one' => 'bahrainsk dinar', 'other' => 'bahrainska dinarer'], minorUnits: 3),
    'BIF' => new C('BIF', 'burundisk franc', plurals: ['one' => 'burundisk franc', 'other' => 'burundiska franc'], minorUnits: 0),
    'BMD' => new C('BMD', 'bermudisk dollar', 'BM$', '$', ['one' => 'bermudisk dollar', 'other' => 'bermudiska dollar']),
    'BND' => new C('BND', 'bruneisk dollar', narrow: '$', plurals: ['one' => 'bruneisk dollar', 'other' => 'bruneiska dollar']),
    'BOB' => new C('BOB', 'boliviansk boliviano', narrow: 'Bs', plurals: ['one' => 'boliviansk boliviano', 'other' => 'bolivianska bolivianos']),
    'BOL' => new C('BOL', 'boliviansk boliviano (1864–1963)', plurals: ['one' => 'boliviansk boliviano (1864–1963)', 'other' => 'bolivianska bolivianos (1864–1963)']),
    'BOP' => new C('BOP', 'boliviansk peso', plurals: ['one' => 'boliviansk peso', 'other' => 'bolivianska pesos']),
    'BOV' => new C('BOV', 'boliviansk mvdol', plurals: ['one' => 'boliviansk mvdol', 'other' => 'bolivianska mvdol']),
    'BRB' => new C('BRB', 'brasiliansk cruzeiro novo (1967–1986)', plurals: ['one' => 'brasiliansk cruzeiro (1967–1986)', 'other' => 'brasilianska cruzeiro novo (1967–1986)']),
    'BRC' => new C('BRC', 'brasiliansk cruzado', plurals: ['one' => 'brasiliansk cruzado', 'other' => 'brasilianska cruzado']),
    'BRE' => new C('BRE', 'brasiliansk cruzeiro (1990–1993)', plurals: ['one' => 'brasiliansk cruzeiro (1990–1993)', 'other' => 'brasilianska cruzeiro (1990–1993)']),
    'BRL' => new C('BRL', 'brasiliansk real', 'BR$', 'R$', ['one' => 'brasiliansk real', 'other' => 'brasilianska real']),
    'BRN' => new C('BRN', 'brasiliansk cruzado novo', plurals: ['one' => 'brasiliansk cruzado novo', 'other' => 'brasilianska cruzado novo']),
    'BRR' => new C('BRR', 'brasiliansk cruzeiro', plurals: ['one' => 'brasiliansk cruzeiro', 'other' => 'brasilianska cruzeiros']),
    'BRZ' => new C('BRZ', 'brasiliansk cruzeiro (1942–1967)', plurals: ['one' => 'brasiliansk cruzeiro (1942–1967)', 'other' => 'brasilianska cruzeiros (1942–1967)']),
    'BSD' => new C('BSD', 'bahamansk dollar', 'BS$', '$', ['one' => 'bahamansk dollar', 'other' => 'bahamanska dollar']),
    'BTN' => new C('BTN', 'bhutanesisk ngultrum', plurals: ['one' => 'bhutanesisk ngultrum', 'other' => 'bhutanesiska ngultrum']),
    'BUK' => new C('BUK', 'burmesisk kyat', plurals: ['one' => 'burmesisk kyat', 'other' => 'burmesiska kyat']),
    'BWP' => new C('BWP', 'botswansk pula', narrow: 'P', plurals: ['one' => 'botswansk pula', 'other' => 'botswanska pula']),
    'BYB' => new C('BYB', 'belarusisk ny rubel (1994–1999)', plurals: ['one' => 'belarusisk ny rubel (1994–1999)', 'other' => 'belarusiska nya rubel (1994–1999)']),
    'BYN' => new C('BYN', 'belarusisk rubel', narrow: 'р.', plurals: ['one' => 'belarusisk rubel', 'other' => 'belarusiska rubel']),
    'BYR' => new C('BYR', 'belarusisk rubel (2000–2016)', plurals: ['one' => 'belarusisk rubel (2000–2016)', 'other' => 'belarusiska rubel (2000–2016)']),
    'BZD' => new C('BZD', 'belizisk dollar', 'BZ$', '$', ['one' => 'belizisk dollar', 'other' => 'beliziska dollar']),
    'CAD' => new C('CAD', 'kanadensisk dollar', 'CA$', '$', ['one' => 'kanadensisk dollar', 'other' => 'kanadensiska dollar']),
    'CDF' => new C('CDF', 'kongolesisk franc', plurals: ['one' => 'kongolesisk franc', 'other' => 'kongolesiska franc']),
    'CHE' => new C('CHE', 'euro (konvertibelt konto, WIR Bank, Schweiz)', plurals: ['one' => 'euro (WIR Bank)', 'other' => 'euro (konvertibelt konto, WIR Bank, Schweiz)']),
    'CHF' => new C('CHF', 'schweizisk franc', plurals: ['one' => 'schweizisk franc', 'other' => 'schweiziska franc']),
    'CHW' => new C('CHW', 'franc (konvertibelt konto, WIR Bank, Schweiz)', plurals: ['one' => 'franc (WIR Bank)', 'other' => 'franc (konvertibelt konto, WIR Bank, Schweiz)']),
    'CLE' => new C('CLE', 'chilensk escudo (1960–1975)', plurals: ['one' => 'chilensk escudo (1960–1975)', 'other' => 'chilenska escudos (1960–1975)']),
    'CLF' => new C('CLF', 'chilensk unidad de fomento', plurals: ['one' => 'chilensk unidad de fomento', 'other' => 'chilenska unidad de fomento'], minorUnits: 4),
    'CLP' => new C('CLP', 'chilensk peso', narrow: '$', plurals: ['one' => 'chilensk peso', 'other' => 'chilenska pesos'], minorUnits: 0),
    'CNH' => new C('CNH', 'kinesisk yuan (offshore)'),
    'CNX' => new C('CNX', 'kinesisk dollar', plurals: ['one' => 'kinesisk dollar', 'other' => 'kinesiska dollar']),
    'CNY' => new C('CNY', 'kinesisk yuan', narrow: '¥', plurals: ['one' => 'kinesisk yuan', 'other' => 'kinesiska yuan']),
    'COP' => new C('COP', 'colombiansk peso', narrow: '$', plurals: ['one' => 'colombiansk peso', 'other' => 'colombianska pesos']),
    'COU' => new C('COU', 'colombiansk unidad de valor real', plurals: ['one' => 'colombiansk unidad de valor real', 'other' => 'colombianska unidad de valor real']),
    'CRC' => new C('CRC', 'costarikansk colón', narrow: '₡', plurals: ['one' => 'costarikansk colón', 'other' => 'costarikanska colón']),
    'CSD' => new C('CSD', 'serbisk dinar (2002–2006)', plurals: ['one' => 'serbisk dinar (2002–2006)', 'other' => 'serbiska dinarer (2002–2006)']),
    'CSK' => new C('CSK', 'tjeckoslovakisk krona (–1993)', plurals: ['one' => 'tjeckoslovakisk hård koruna', 'other' => 'tjeckiska hårda koruna']),
    'CUC' => new C('CUC', 'kubansk peso (konvertibel)', narrow: '$', plurals: ['one' => 'kubansk peso (konvertibel)', 'other' => 'kubanska pesos (konvertibla)']),
    'CUP' => new C('CUP', 'kubansk peso', narrow: '$', plurals: ['one' => 'kubansk peso', 'other' => 'kubanska pesos']),
    'CVE' => new C('CVE', 'kapverdisk escudo', plurals: ['one' => 'kapverdisk escudo', 'other' => 'kapverdiska escudos']),
    'CYP' => new C('CYP', 'cypriotiskt pund', plurals: ['one' => 'cypriotiskt pund', 'other' => 'cypriotiska pund']),
    'CZK' => new C('CZK', 'tjeckisk koruna', narrow: 'Kč', plurals: ['one' => 'tjeckisk koruna', 'other' => 'tjeckiska koruna']),
    'DDM' => new C('DDM', 'östtysk mark', plurals: ['one' => 'östtysk mark', 'other' => 'östtyska mark']),
    'DEM' => new C('DEM', 'tysk mark', plurals: ['one' => 'tysk mark', 'other' => 'tyska mark']),
    'DJF' => new C('DJF', 'djiboutisk franc', plurals: ['one' => 'djiboutisk franc', 'other' => 'djiboutiska franc'], minorUnits: 0),
    'DKK' => new C('DKK', 'dansk krona', 'Dkr', 'kr', ['one' => 'dansk krona', 'other' => 'danska kronor']),
    'DOP' => new C('DOP', 'dominikansk peso', 'RD$', '$', ['one' => 'dominikansk peso', 'other' => 'dominikanska pesos']),
    'DZD' => new C('DZD', 'algerisk dinar', plurals: ['one' => 'algerisk dinar', 'other' => 'algeriska dinarer']),
    'ECS' => new C('ECS', 'ecuadoriansk sucre', plurals: ['one' => 'ecuadoriansk sucre', 'other' => 'ecuadorianska sucre']),
    'ECV' => new C('ECV', 'ecuadoriansk unidad de valor constante', plurals: ['one' => 'ecuadoriansk unidad de valor constante', 'other' => 'ecuadorianska unidad de valor constante']),
    'EEK' => new C('EEK', 'estnisk krona', 'Ekr', plurals: ['one' => 'estnisk krona', 'other' => 'estniska kronor']),
    'EGP' => new C('EGP', 'egyptiskt pund', 'EG£', 'E£', ['one' => 'egyptiskt pund', 'other' => 'egyptiska pund']),
    'ERN' => new C('ERN', 'eritreansk nakfa', plurals: ['one' => 'eritreansk nakfa', 'other' => 'eritreanska nakfa']),
    'ESA' => new C('ESA', 'spansk peseta (konto)', plurals: ['one' => 'spansk peseta (konto)', 'other' => 'spanska pesetas (konto)']),
    'ESB' => new C('ESB', 'spansk peseta (konvertibelt konto)', plurals: ['one' => 'spansk peseta (konvertibelt konto)', 'other' => 'spanska pesetas (konvertibelt konto)']),
    'ESP' => new C('ESP', 'spansk peseta', plurals: ['one' => 'spansk peseta', 'other' => 'spanska pesetas']),
    'ETB' => new C('ETB', 'etiopisk birr', plurals: ['one' => 'etiopisk birr', 'other' => 'etiopiska birr']),
    'EUR' => new C('EUR', 'euro', '€', '€'),
    'FIM' => new C('FIM', 'finsk mark', plurals: ['one' => 'finsk mark', 'other' => 'finska mark']),
    'FJD' => new C('FJD', 'Fijidollar', narrow: '$'),
    'FKP' => new C('FKP', 'Falklandspund', narrow: '£'),
    'FRF' => new C('FRF', 'fransk franc', plurals: ['one' => 'fransk franc', 'other' => 'franska franc']),
    'GBP' => new C('GBP', 'brittiskt pund', narrow: '£', plurals: ['one' => 'brittiskt pund', 'other' => 'brittiska pund']),
    'GEK' => new C('GEK', 'georgisk kupon larit', plurals: ['one' => 'georgisk kupon larit', 'other' => 'georgiska kupon larit']),
    'GEL' => new C('GEL', 'georgisk lari', narrow: '₾', plurals: ['one' => 'georgisk lari', 'other' => 'georgiska lari']),
    'GHC' => new C('GHC', 'ghanansk cedi (1979–2007)', plurals: ['one' => 'ghanansk cedi (1979–2007)', 'other' => 'ghananska cedi (1979–2007)']),
    'GHS' => new C('GHS', 'ghanansk cedi', narrow: 'GH₵', plurals: ['one' => 'ghanansk cedi', 'other' => 'ghananska cedi']),
    'GIP' => new C('GIP', 'gibraltiskt pund', narrow: '£', plurals: ['one' => 'gibraltiskt pund', 'other' => 'gibraltiska pund']),
    'GMD' => new C('GMD', 'gambisk dalasi', plurals: ['one' => 'gambisk dalasi', 'other' => 'gambiska dalasi']),
    'GNF' => new C('GNF', 'guineansk franc', narrow: 'FG', plurals: ['one' => 'guineansk franc', 'other' => 'guineanska franc'], minorUnits: 0),
    'GNS' => new C('GNS', 'guineansk syli', plurals: ['one' => 'guineansk syli', 'other' => 'guineanska syli']),
    'GQE' => new C('GQE', 'ekvatorialguineansk ekwele', plurals: ['one' => 'ekvatorialguineansk ekwele', 'other' => 'ekvatorialguineanska ekweler']),
    'GRD' => new C('GRD', 'grekisk drachma', plurals: ['one' => 'grekisk drachma', 'other' => 'grekiska drachmer']),
    'GTQ' => new C('GTQ', 'guatemalansk quetzal', narrow: 'Q', plurals: ['one' => 'guatemalansk quetzal', 'other' => 'guatemalanska quetzal']),
    'GWE' => new C('GWE', 'Portugisiska Guinea-escudo', plurals: ['one' => 'Portugisiska Guinea-escudo', 'other' => 'Portugisiska Guinea-escudos']),
    'GWP' => new C('GWP', 'Guinea-Bissau-peso', plurals: ['one' => 'Guinea-Bissau-peso', 'other' => 'Guinea-Bissau-pesos']),
    'GYD' => new C('GYD', 'Guyanadollar', narrow: '$'),
    'HKD' => new C('HKD', 'Hongkongdollar', narrow: '$'),
    'HNL' => new C('HNL', 'honduransk lempira', narrow: 'L', plurals: ['one' => 'honduransk lempira', 'other' => 'honduranska lempira']),
    'HRD' => new C('HRD', 'kroatisk dinar', plurals: ['one' => 'kroatisk dinar', 'other' => 'kroatiska dinarer']),
    'HRK' => new C('HRK', 'kroatisk kuna', narrow: 'kn', plurals: ['one' => 'kroatisk kuna', 'other' => 'kroatiska kunor']),
    'HTG' => new C('HTG', 'haitisk gourde', plurals: ['one' => 'haitisk gourde', 'other' => 'haitiska gourder']),
    'HUF' => new C('HUF', 'ungersk forint', narrow: 'Ft', plurals: ['one' => 'ungersk forint', 'other' => 'ungerska forinter']),
    'IDR' => new C('IDR', 'indonesisk rupie', narrow: 'Rp', plurals: ['one' => 'indonesisk rupie', 'other' => 'indonesiska rupier']),
    'IEP' => new C('IEP', 'irländskt pund', 'IE£', plurals: ['one' => 'irländskt pund', 'other' => 'irländska pund']),
    'ILP' => new C('ILP', 'israeliskt pund', plurals: ['one' => 'israeliskt pund', 'other' => 'israeliska pund']),
    'ILR' => new C('ILR', 'israelisk shekel (1980–1985)', plurals: ['one' => 'israelisk shekel (1980–1985)', 'other' => 'israeliska shekel (1980–1985)']),
    'ILS' => new C('ILS', 'israelisk ny shekel', '₪', '₪', ['one' => 'israelisk ny shekel', 'other' => 'israeliska nya shekel']),
    'INR' => new C('INR', 'indisk rupie', narrow: '₹', plurals: ['one' => 'indisk rupie', 'other' => 'indiska rupier']),
    'IQD' => new C('IQD', 'irakisk dinar', plurals: ['one' => 'irakisk dinar', 'other' => 'irakiska dinarer'], minorUnits: 3),
    'IRR' => new C('IRR', 'iransk rial', plurals: ['one' => 'iransk rial', 'other' => 'iranska rial']),
    'ISJ' => new C('ISJ', 'isländsk gammal krona', plurals: ['one' => 'isländsk gammal krona', 'other' => 'isländska kronor (1874–1981)']),
    'ISK' => new C('ISK', 'isländsk krona', 'Ikr', 'kr', ['one' => 'isländsk krona', 'other' => 'isländska kronor'], 0),
    'ITL' => new C('ITL', 'italiensk lire', plurals: ['one' => 'italiensk lire', 'other' => 'italienska lire']),
    'JMD' => new C('JMD', 'jamaicansk dollar', 'JM$', '$', ['one' => 'Jamaica-dollar', 'other' => 'jamaicanska dollar']),
    'JOD' => new C('JOD', 'jordansk dinar', plurals: ['one' => 'jordansk dinar', 'other' => 'jordanska dinarer'], minorUnits: 3),
    'JPY' => new C('JPY', 'japansk yen', narrow: '¥', plurals: ['one' => 'japansk yen', 'other' => 'japanska yen'], minorUnits: 0),
    'KES' => new C('KES', 'kenyansk shilling', plurals: ['one' => 'kenyansk shilling', 'other' => 'kenyanska shilling']),
    'KGS' => new C('KGS', 'kirgizisk som', narrow: '⃀', plurals: ['one' => 'kirgizisk som', 'other' => 'kirgiziska somer']),
    'KHR' => new C('KHR', 'kambodjansk riel', narrow: '៛', plurals: ['one' => 'kambodjansk riel', 'other' => 'kambodjanska riel']),
    'KMF' => new C('KMF', 'komorisk franc', narrow: 'CF', plurals: ['one' => 'komorisk franc', 'other' => 'komoriska franc'], minorUnits: 0),
    'KPW' => new C('KPW', 'nordkoreansk won', narrow: '₩', plurals: ['one' => 'nordkoreansk won', 'other' => 'nordkoreanska won']),
    'KRH' => new C('KRH', 'sydkoreansk hwan (1953–1962)', plurals: ['one' => 'sydkoreansk hwan (1953–1962)', 'other' => 'sydkoreanska hwan (1953–1962)']),
    'KRO' => new C('KRO', 'sydkoreansk won (1945–1953)', plurals: ['one' => 'sydkoreansk won (1945–1953)', 'other' => 'sydkoreanska won (1945–1953)']),
    'KRW' => new C('KRW', 'sydkoreansk won', narrow: '₩', plurals: ['one' => 'sydkoreansk won', 'other' => 'sydkoreanska won'], minorUnits: 0),
    'KWD' => new C('KWD', 'kuwaitisk dinar', plurals: ['one' => 'kuwaitisk dinar', 'other' => 'kuwaitiska dinarer'], minorUnits: 3),
    'KYD' => new C('KYD', 'caymansk dollar', narrow: '$', plurals: ['one' => 'caymansk dollar', 'other' => 'caymanska dollar']),
    'KZT' => new C('KZT', 'kazakisk tenge', narrow: '₸', plurals: ['one' => 'kazakisk tenge', 'other' => 'kazakiska tenge']),
    'LAK' => new C('LAK', 'laotisk kip', narrow: '₭', plurals: ['one' => 'laotisk kip', 'other' => 'laotiska kip']),
    'LBP' => new C('LBP', 'libanesiskt pund', narrow: 'L£', plurals: ['one' => 'libanesiskt pund', 'other' => 'libanesiska pund']),
    'LKR' => new C('LKR', 'srilankesisk rupie', narrow: 'Rs', plurals: ['one' => 'srilankesisk rupie', 'other' => 'srilankesiska rupier']),
    'LRD' => new C('LRD', 'liberiansk dollar', narrow: '$', plurals: ['one' => 'liberiansk dollar', 'other' => 'liberianska dollar']),
    'LSL' => new C('LSL', 'lesothisk loti', plurals: ['one' => 'lesothisk loti', 'other' => 'lesothiska lotier']),
    'LTL' => new C('LTL', 'litauisk litas', narrow: 'Lt', plurals: ['one' => 'litauisk litas', 'other' => 'litauiska litai']),
    'LTT' => new C('LTT', 'litauisk talonas', plurals: ['one' => 'litauisk talonas', 'other' => 'litauiska talonas']),
    'LUC' => new C('LUC', 'luxemburgsk franc (konvertibel)', plurals: ['one' => 'luxemburgsk franc (konvertibel)', 'other' => 'luxemburgska franc (konvertibla)']),
    'LUF' => new C('LUF', 'luxemburgsk franc', plurals: ['one' => 'luxemburgsk franc', 'other' => 'luxemburgska franc']),
    'LUL' => new C('LUL', 'luxemburgsk franc (finansiell)', plurals: ['one' => 'luxemburgsk franc (finansiell)', 'other' => 'luxemburgska franc (finansiella)']),
    'LVL' => new C('LVL', 'lettisk lats', narrow: 'Ls', plurals: ['one' => 'lettisk lats', 'other' => 'lettiska lati']),
    'LVR' => new C('LVR', 'lettisk rubel', plurals: ['one' => 'lettisk rubel', 'other' => 'lettiska rubel']),
    'LYD' => new C('LYD', 'libysk dinar', plurals: ['one' => 'libysk dinar', 'other' => 'libyska dinarer'], minorUnits: 3),
    'MAD' => new C('MAD', 'marockansk dirham', plurals: ['one' => 'marockansk dirham', 'other' => 'marockanska dirhamer']),
    'MAF' => new C('MAF', 'marockansk franc', plurals: ['one' => 'marockansk franc', 'other' => 'marockanska franc']),
    'MCF' => new C('MCF', 'monegaskisk franc (–2001)', plurals: ['one' => 'monegaskisk franc (–2001)', 'other' => 'monegaskiska franc (–2001)']),
    'MDC' => new C('MDC', 'moldavisk cupon (1992–1993)', plurals: ['one' => 'moldavisk cupon (1992–1993)', 'other' => 'moldaviska cupon (1992–1993)']),
    'MDL' => new C('MDL', 'moldavisk leu', plurals: ['one' => 'moldavisk leu', 'other' => 'moldaviska lei']),
    'MGA' => new C('MGA', 'madagaskisk ariary', narrow: 'Ar', plurals: ['one' => 'madagaskisk ariary', 'other' => 'madagaskiska ariary']),
    'MGF' => new C('MGF', 'madagaskisk franc', plurals: ['one' => 'madagaskisk franc', 'other' => 'madagaskiska franc']),
    'MKD' => new C('MKD', 'makedonisk denar', plurals: ['one' => 'makedonisk denar', 'other' => 'makedoniska denarer']),
    'MKN' => new C('MKN', 'makedonisk denar (1992–1993)', plurals: ['one' => 'makedonisk denar (1992–1993)', 'other' => 'makedoniska denarer (1992–1993)']),
    'MLF' => new C('MLF', 'malisk franc', plurals: ['one' => 'malisk franc', 'other' => 'maliska franc']),
    'MMK' => new C('MMK', 'myanmarisk kyat', narrow: 'K', plurals: ['one' => 'myanmarisk kyat', 'other' => 'myanmariska kyat']),
    'MNT' => new C('MNT', 'mongolisk tögrög', narrow: '₮', plurals: ['one' => 'mongolisk tögrög', 'other' => 'mongoliska tögrög']),
    'MOP' => new C('MOP', 'makanesisk pataca', plurals: ['one' => 'makanesisk pataca', 'other' => 'makanesiska pataca']),
    'MRO' => new C('MRO', 'mauretansk ouguiya (1973–2017)', plurals: ['one' => 'mauretansk ouguiya (1973–2017)', 'other' => 'mauretanska ouguiya (1973–2017)']),
    'MRU' => new C('MRU', 'mauretansk ouguiya', plurals: ['one' => 'mauretansk ouguiya', 'other' => 'mauretanska ouguiya']),
    'MTL' => new C('MTL', 'maltesisk lire', plurals: ['one' => 'maltesisk lire', 'other' => 'maltesiska lire']),
    'MTP' => new C('MTP', 'maltesiskt pund', plurals: ['one' => 'maltesiskt pund', 'other' => 'maltesiska pund']),
    'MUR' => new C('MUR', 'mauritisk rupie', narrow: 'Rs', plurals: ['one' => 'mauritisk rupie', 'other' => 'mauritiska rupier']),
    'MVP' => new C('MVP', 'maldivisk rupie', plurals: ['one' => 'maldivisk rupie', 'other' => 'maldiviska rupier']),
    'MVR' => new C('MVR', 'maldivisk rufiyaa', plurals: ['one' => 'maldivisk rufiyaa', 'other' => 'maldiviska rufiyer']),
    'MWK' => new C('MWK', 'malawisk kwacha', plurals: ['one' => 'malawisk kwacha', 'other' => 'malawiska kwacha']),
    'MXN' => new C('MXN', 'mexikansk peso', 'MX$', '$', ['one' => 'mexikansk peso', 'other' => 'mexikanska pesos']),
    'MXP' => new C('MXP', 'mexikansk silverpeso (1861–1992)', plurals: ['one' => 'mexikansk silverpeso (1861–1992)', 'other' => 'mexikanska silverpesos (1861–1992)']),
    'MXV' => new C('MXV', 'mexikansk unidad de inversion', plurals: ['one' => 'mexikansk unidad de inversion', 'other' => 'mexikanska unidad de inversion']),
    'MYR' => new C('MYR', 'malaysisk ringgit', narrow: 'RM', plurals: ['one' => 'malaysisk ringgit', 'other' => 'malaysiska ringgiter']),
    'MZE' => new C('MZE', 'moçambikisk escudo', plurals: ['one' => 'moçambikisk escudo (1914–1980)', 'other' => 'moçambikiska escudos']),
    'MZM' => new C('MZM', 'gammal moçambikisk metical', plurals: ['one' => 'moçambikisk metical (1980–2006)', 'other' => 'gammla moçambikiska metical']),
    'MZN' => new C('MZN', 'moçambikisk metical', plurals: ['one' => 'moçambikisk metical', 'other' => 'moçambikiska metical']),
    'NAD' => new C('NAD', 'namibisk dollar', narrow: '$', plurals: ['one' => 'namibisk dollar', 'other' => 'namibiska dollar']),
    'NGN' => new C('NGN', 'nigeriansk naira', narrow: '₦', plurals: ['one' => 'nigeriansk naira', 'other' => 'nigerianska naira']),
    'NIC' => new C('NIC', 'nicaraguansk córdoba (1998–1991)', plurals: ['one' => 'nicaraguansk córdoba (1998–1991)', 'other' => 'nicaraguanska córdobas (1988–1991)']),
    'NIO' => new C('NIO', 'nicaraguansk córdoba', narrow: 'C$', plurals: ['one' => 'nicaraguansk córdoba', 'other' => 'nicaraguanska córdobas']),
    'NLG' => new C('NLG', 'nederländsk gulden', plurals: ['one' => 'nederländsk gulden', 'other' => 'nederländska gulden']),
    'NOK' => new C('NOK', 'norsk krona', 'Nkr', 'kr', ['one' => 'norsk krona', 'other' => 'norska kronor']),
    'NPR' => new C('NPR', 'nepalesisk rupie', narrow: 'Rs', plurals: ['one' => 'nepalesisk rupie', 'other' => 'nepalesiska rupier']),
    'NZD' => new C('NZD', 'nyzeeländsk dollar', narrow: '$', plurals: ['one' => 'nyzeeländsk dollar', 'other' => 'nyzeeländska dollar']),
    'OMR' => new C('OMR', 'omansk rial', plurals: ['one' => 'omansk rial', 'other' => 'omanska rial'], minorUnits: 3),
    'PAB' => new C('PAB', 'panamansk balboa', plurals: ['one' => 'panamansk balboa', 'other' => 'panamanska balboa']),
    'PEI' => new C('PEI', 'peruansk inti', plurals: ['one' => 'peruansk inti', 'other' => 'peruanska intier']),
    'PEN' => new C('PEN', 'peruansk sol', plurals: ['one' => 'peruansk sol', 'other' => 'peruanska sol']),
    'PES' => new C('PES', 'peruansk sol (1863–1965)', plurals: ['one' => 'peruansk sol (1863–1965)', 'other' => 'peruanska sol (1863–1965)']),
    'PGK' => new C('PGK', 'papuansk kina', plurals: ['one' => 'papuansk kina', 'other' => 'papuanska kinor']),
    'PHP' => new C('PHP', 'filippinsk peso', narrow: '₱', plurals: ['one' => 'filippinsk peso', 'other' => 'filippinska pesos']),
    'PKR' => new C('PKR', 'pakistansk rupie', narrow: 'Rs', plurals: ['one' => 'pakistansk rupie', 'other' => 'pakistanska rupier']),
    'PLN' => new C('PLN', 'polsk zloty', narrow: 'zł', plurals: ['one' => 'polsk zloty', 'other' => 'polska zloty']),
    'PLZ' => new C('PLZ', 'polsk zloty (1950–1995)', plurals: ['one' => 'polsk zloty (1950–1995)', 'other' => 'polska zloty (1950–1995)']),
    'PTE' => new C('PTE', 'portugisisk escudo', plurals: ['one' => 'portugisisk escudo', 'other' => 'portugisiska escudos']),
    'PYG' => new C('PYG', 'paraguayansk guarani', narrow: '₲', plurals: ['one' => 'paraguayansk guarani', 'other' => 'paraguayska guarani'], minorUnits: 0),
    'QAR' => new C('QAR', 'qatarisk rial', plurals: ['one' => 'qatarisk rial', 'other' => 'qatariska rial']),
    'RHD' => new C('RHD', 'rhodesisk dollar', plurals: ['one' => 'rhodesisk dollar', 'other' => 'rhodesiska dollar']),
    'ROL' => new C('ROL', 'rumänsk leu (1952–2005)', plurals: ['one' => 'rumänsk leu (1952–2005)', 'other' => 'rumänska leu (1952–2005)']),
    'RON' => new C('RON', 'rumänsk leu', narrow: 'L', plurals: ['one' => 'rumänsk leu', 'other' => 'rumänska lei']),
    'RSD' => new C('RSD', 'serbisk dinar', plurals: ['one' => 'serbisk dinar', 'other' => 'serbiska dinarer']),
    'RUB' => new C('RUB', 'rysk rubel', narrow: '₽', plurals: ['one' => 'rysk rubel', 'other' => 'ryska rubel']),
    'RUR' => new C('RUR', 'rysk rubel (1991–1998)', plurals: ['one' => 'rysk rubel (1991–1998)', 'other' => 'ryska rubel (1991–1998)']),
    'RWF' => new C('RWF', 'rwandisk franc', narrow: 'RF', plurals: ['one' => 'rwandisk franc', 'other' => 'rwandiska franc'], minorUnits: 0),
    'SAR' => new C('SAR', 'saudisk riyal', plurals: ['one' => 'saudisk riyal', 'other' => 'saudiska riyal']),
    'SBD' => new C('SBD', 'Salomondollar', narrow: '$'),
    'SCR' => new C('SCR', 'seychellisk rupie', plurals: ['one' => 'seychellisk rupie', 'other' => 'seychelliska rupier']),
    'SDD' => new C('SDD', 'sudansk dinar (1992–2007)', plurals: ['one' => 'sudansk dinar (1992–2007)', 'other' => 'sudanska dinarer (1992–2007)']),
    'SDG' => new C('SDG', 'sudanesiskt pund', plurals: ['one' => 'sudanesiskt pund', 'other' => 'sudanesiska pund']),
    'SDP' => new C('SDP', 'sudanskt pund (1916–1992)', plurals: ['one' => 'sudanskt pund (1916–1992)', 'other' => 'sudanska pund (1916–1992)']),
    'SEK' => new C('SEK', 'svensk krona', 'kr', 'kr', ['one' => 'svensk krona', 'other' => 'svenska kronor']),
    'SGD' => new C('SGD', 'singaporiansk dollar', narrow: '$', plurals: ['one' => 'singaporiansk dollar', 'other' => 'singaporianska dollar']),
    'SHP' => new C('SHP', 'sankthelenskt pund', narrow: '£', plurals: ['one' => 'sankthelenskt pund', 'other' => 'sankthelenska pund']),
    'SIT' => new C('SIT', 'slovensk tolar', plurals: ['one' => 'slovensk tolar', 'other' => 'slovenska tolar']),
    'SKK' => new C('SKK', 'slovakisk koruna', plurals: ['one' => 'slovakisk krona', 'other' => 'slovakiska korunor']),
    'SLE' => new C('SLE', 'sierraleonsk leone', plurals: ['one' => 'sierraleonsk leone', 'other' => 'sierraleonska leoner']),
    'SLL' => new C('SLL', 'sierraleonsk leone (1964—2022)', plurals: ['one' => 'sierraleonsk leone (1964—2022)', 'other' => 'sierraleonska leoner (1964—2022)']),
    'SOS' => new C('SOS', 'somalisk shilling', plurals: ['one' => 'somalisk shilling', 'other' => 'somaliska shilling']),
    'SRD' => new C('SRD', 'surinamesisk dollar', narrow: '$', plurals: ['one' => 'surinamesisk dollar', 'other' => 'surinamesiska dollar']),
    'SRG' => new C('SRG', 'surinamesisk gulden', plurals: ['one' => 'surinamesisk gulden', 'other' => 'surinamesiska gulden']),
    'SSP' => new C('SSP', 'sydsudanesiskt pund', narrow: '£', plurals: ['one' => 'sydsudanesiskt pund', 'other' => 'sydsudanesiska pund']),
    'STD' => new C('STD', 'saotomeansk dobra (1977–2017)', plurals: ['one' => 'saotomeansk dobra (1977–2017)', 'other' => 'saotomeanska dobra (1977–2017)']),
    'STN' => new C('STN', 'saotomeansk dobra', narrow: 'Db', plurals: ['one' => 'saotomeansk dobra', 'other' => 'saotomeanska dobra']),
    'SUR' => new C('SUR', 'sovjetisk rubel', plurals: ['one' => 'sovjetisk rubel', 'other' => 'sovjetiska rubler']),
    'SVC' => new C('SVC', 'salvadoransk colón', plurals: ['one' => 'salvadoransk colón', 'other' => 'salvadoranska colón']),
    'SYP' => new C('SYP', 'syriskt pund', narrow: '£', plurals: ['one' => 'syriskt pund', 'other' => 'syriska pund']),
    'SZL' => new C('SZL', 'swaziländsk lilangeni', plurals: ['one' => 'swaziländsk lilangeni', 'other' => 'swaziländska lilangeni']),
    'THB' => new C('THB', 'thailändsk baht', narrow: '฿', plurals: ['one' => 'thailändsk baht', 'other' => 'thailändska baht']),
    'TJR' => new C('TJR', 'tadzjikisk rubel', plurals: ['one' => 'tadzjikisk rubel', 'other' => 'tadzjikiska rubler']),
    'TJS' => new C('TJS', 'tadzjikisk somoni', plurals: ['one' => 'tadzjikisk somoni', 'other' => 'tadzjikiska somoni']),
    'TMM' => new C('TMM', 'turkmenistansk manat (1993–2009)', plurals: ['one' => 'turkmenistansk manat (1993–2009)', 'other' => 'turkmenistanska manat (1993–2009)']),
    'TMT' => new C('TMT', 'turkmenistansk manat', plurals: ['one' => 'turkmenistansk manat', 'other' => 'turkmenistanska manat']),
    'TND' => new C('TND', 'tunisisk dinar', plurals: ['one' => 'tunisisk dinar', 'other' => 'tunisiska dinarer'], minorUnits: 3),
    'TOP' => new C('TOP', 'tongansk paʻanga', narrow: 'T$', plurals: ['one' => 'tongansk paʻanga', 'other' => 'tonganska paʻanga']),
    'TPE' => new C('TPE', 'östtimoresisk escudo', plurals: ['one' => 'östtimoresisk escudo', 'other' => 'östtimoresiska escudos']),
    'TRL' => new C('TRL', 'turkisk lire (1922–2005)', plurals: ['one' => 'turkisk lire (1922–2005)', 'other' => 'turkiska lire (1922–2005)']),
    'TRY' => new C('TRY', 'turkisk lira', narrow: '₺', plurals: ['one' => 'turkisk lira', 'other' => 'turkiska lira']),
    'TTD' => new C('TTD', 'Trinidaddollar', narrow: '$'),
    'TWD' => new C('TWD', 'taiwanesisk dollar', narrow: 'NT$', plurals: ['one' => 'taiwanesisk dollar', 'other' => 'taiwanesiska dollar']),
    'TZS' => new C('TZS', 'tanzanisk shilling', plurals: ['one' => 'tanzanisk shilling', 'other' => 'tanzaniska shilling']),
    'UAH' => new C('UAH', 'ukrainsk hryvnia', narrow: '₴', plurals: ['one' => 'ukrainsk hryvnia', 'other' => 'ukrainska hryvnia']),
    'UAK' => new C('UAK', 'ukrainsk karbovanetz', plurals: ['one' => 'ukrainsk karbovanetz (1992–1996)', 'other' => 'ukrainska karbovanetz (1992–1996)']),
    'UGS' => new C('UGS', 'ugandisk shilling (1966–1987)', plurals: ['one' => 'ugandisk shilling (1966–1987)', 'other' => 'ugandiska shilling (1966–1987)']),
    'UGX' => new C('UGX', 'ugandisk shilling', plurals: ['one' => 'ugandisk shilling', 'other' => 'ugandiska shilling'], minorUnits: 0),
    'USD' => new C('USD', 'amerikansk dollar', 'US$', '$', ['one' => 'amerikansk dollar', 'other' => 'amerikanska dollar']),
    'USN' => new C('USN', 'US-dollar (nästa dag)'),
    'USS' => new C('USS', 'US-dollar (samma dag)'),
    'UYI' => new C('UYI', 'uruguayansk peso en unidades indexadas', plurals: ['one' => 'uruguayansk peso en unidades indexadas', 'other' => 'uruguayanska pesos en unidades indexadas'], minorUnits: 0),
    'UYP' => new C('UYP', 'uruguayansk peso (1975–1993)', plurals: ['one' => 'uruguayansk peso (1975–1993)', 'other' => 'uruguayanska pesos (1975–1993)']),
    'UYU' => new C('UYU', 'uruguayansk peso', narrow: '$', plurals: ['one' => 'uruguayansk peso', 'other' => 'uruguayanska pesos']),
    'UYW' => new C('UYW', 'uruguayansk indexenhet för nominell lön', minorUnits: 4),
    'UZS' => new C('UZS', 'uzbekisk sum', plurals: ['one' => 'uzbekisk sum', 'other' => 'uzbekiska sum']),
    'VEB' => new C('VEB', 'venezuelansk bolivar (1871–2008)', plurals: ['one' => 'venezuelansk bolivar (1871–2008)', 'other' => 'venezuelanska bolivar (1871–2008)']),
    'VEF' => new C('VEF', 'venezuelansk bolívar (2008–2018)', narrow: 'Bs', plurals: ['one' => 'venezuelansk bolívar (2008–2018)', 'other' => 'venezuelanska bolívar (2008–2018)']),
    'VES' => new C('VES', 'venezuelansk bolívar', plurals: ['one' => 'venezuelansk bolívar', 'other' => 'venezuelanska bolívar']),
    'VND' => new C('VND', 'vietnamesisk dong', narrow: '₫', plurals: ['one' => 'vietnamesisk dong', 'other' => 'vietnamesiska dong'], minorUnits: 0),
    'VNN' => new C('VNN', 'vietnamesisk dong (1978–1985)', plurals: ['one' => 'vietnamesisk dong (1978–1985)', 'other' => 'vietnamesiska dong (1978–1985)']),
    'VUV' => new C('VUV', 'vanuatisk vatu', plurals: ['one' => 'vanuatisk vatu', 'other' => 'vanuatiska vatu'], minorUnits: 0),
    'WST' => new C('WST', 'västsamoansk tala', plurals: ['one' => 'västsamoansk tala', 'other' => 'västsamoanska tala']),
    'XAF' => new C('XAF', 'centralafrikansk franc', 'FCFA', plurals: ['one' => 'centralafrikansk franc', 'other' => 'centralafrikanska franc'], minorUnits: 0),
    'XAG' => new C('XAG', 'silver', plurals: ['one' => 'uns silver', 'other' => 'silveruns']),
    'XAU' => new C('XAU', 'guld', plurals: ['one' => 'uns guld', 'other' => 'gulduns']),
    'XBA' => new C('XBA', 'europeisk kompositenhet', plurals: ['one' => 'europeisk kompositenhet', 'other' => 'europeiska kompositenheter']),
    'XBB' => new C('XBB', 'europeisk monetär enhet', plurals: ['one' => 'europeisk monetär enhet', 'other' => 'europeiska monetära enheter']),
    'XBC' => new C('XBC', 'europeisk kontoenhet (XBC)', plurals: ['one' => 'europeisk kontoenhet (XBC)', 'other' => 'europeiska kontoenheter (XBC)']),
    'XBD' => new C('XBD', 'europeisk kontoenhet (XBD)', plurals: ['one' => 'europeisk kontoenhet (XBD)', 'other' => 'europeiska kontoenheter (XBD)']),
    'XCD' => new C('XCD', 'östkaribisk dollar', 'EC$', '$', ['one' => 'östkaribisk dollar', 'other' => 'östkaribiska dollar']),
    'XDR' => new C('XDR', 'IMF särskild dragningsrätt', plurals: ['one' => 'IMF särskild dragningsrätt', 'other' => 'IMF särskilda dragningsrätter']),
    'XEU' => new C('XEU', 'europeisk valutaenhet', plurals: ['one' => 'europeisk valutaenhet', 'other' => 'europeiska valutaenheter']),
    'XFO' => new C('XFO', 'fransk guldfranc', plurals: ['one' => 'fransk guldfranc', 'other' => 'franska guldfranc']),
    'XFU' => new C('XFU', 'internationella järnvägsunionens franc'),
    'XOF' => new C('XOF', 'västafrikansk franc', "F\u{202F}CFA", plurals: ['one' => 'västafrikansk franc', 'other' => 'västafrikanska franc'], minorUnits: 0),
    'XPD' => new C('XPD', 'palladium', plurals: ['one' => 'uns palladium', 'other' => 'palladium']),
    'XPF' => new C('XPF', 'CFP-franc', 'CFPF', minorUnits: 0),
    'XPT' => new C('XPT', 'platina', plurals: ['one' => 'uns platina', 'other' => 'platina']),
    'XRE' => new C('XRE', 'RINET-fond'),
    'XSU' => new C('XSU', 'latinamerikansk sucre', plurals: ['one' => 'latinamerikansk sucre', 'other' => 'latinamerikanska sucre']),
    'XTS' => new C('XTS', 'testvalutaenhet', plurals: ['one' => 'testvalutaenhet', 'other' => 'testvalutaenheter']),
    'XUA' => new C('XUA', 'afrikansk kontoenhet', plurals: ['one' => 'afrikansk kontoenhet', 'other' => 'afrikanska kontoenheter']),
    'XXX' => new C('XXX', 'okänd valuta', '¤', plurals: ['one' => '(okänd valutaenhet)', 'other' => '(okända valutaenheter)']),
    'YDD' => new C('YDD', 'jemenitisk dinar', plurals: ['one' => 'jemenitisk dinar', 'other' => 'jemenitiska dinarer']),
    'YER' => new C('YER', 'jemenitisk rial', plurals: ['one' => 'jemenitisk rial', 'other' => 'jemenitiska rial']),
    'YUD' => new C('YUD', 'jugoslavisk dinar (1966–1990)', plurals: ['one' => 'jugoslavisk dinar (1966–1990)', 'other' => 'jugoslaviska dinarer (1966–1990)']),
    'YUM' => new C('YUM', 'jugoslavisk dinar (1994–2002)', plurals: ['one' => 'jugoslavisk dinar (1994–2002)', 'other' => 'jugoslaviska dinarer (1994–2002)']),
    'YUN' => new C('YUN', 'jugoslavisk dinar (1990–1992)', plurals: ['one' => 'jugoslavisk dinar (1990–1992)', 'other' => 'jugoslaviska dinarer (1990–1992)']),
    'YUR' => new C('YUR', 'jugoslavisk dinar (1992–1993)', plurals: ['one' => 'jugoslavisk dinar (1992–1993)', 'other' => 'jugoslaviska dinarer (1992–1993)']),
    'ZAL' => new C('ZAL', 'sydafrikansk rand (finansiell)', plurals: ['one' => 'sydafrikansk rand (finansiell)', 'other' => 'sydafrikanska rand (finansiella)']),
    'ZAR' => new C('ZAR', 'sydafrikansk rand', narrow: 'R', plurals: ['one' => 'sydafrikansk rand', 'other' => 'sydafrikanska rand']),
    'ZMK' => new C('ZMK', 'zambisk kwacha (1968–2012)', plurals: ['one' => 'zambisk kwacha (1968–2012)', 'other' => 'zambiska kwacha (1968–2012)']),
    'ZMW' => new C('ZMW', 'zambisk kwacha', narrow: 'ZK', plurals: ['one' => 'zambisk kwacha', 'other' => 'zambiska kwacha']),
    'ZRN' => new C('ZRN', 'zairisk ny zaire', plurals: ['one' => 'zaïrisk ny zaïre', 'other' => 'zaïriska nya zaïre']),
    'ZRZ' => new C('ZRZ', 'zairisk zaire', plurals: ['one' => 'zaïrisk zaïre', 'other' => 'zaïriska zaïre']),
    'ZWD' => new C('ZWD', 'Zimbabwe-dollar'),
    'ZWL' => new C('ZWL', 'Zimbabwe-dollar (2009)'),
    'ZWR' => new C('ZWR', 'Zimbabwe-dollar (2008)'),
];
