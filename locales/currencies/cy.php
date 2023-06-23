<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'AED' => new C('AED', 'Dirham Yr Emiradau Arabaidd Unedig', plurals: ['other' => 'dirham yr Emiradau Arabaidd Unedig']),
    'AFA' => new C('AFA', 'Afghani Afghanistan (1927–2002)', plurals: ['other' => 'afghani Afghanistan (1927–2002)']),
    'AFN' => new C('AFN', 'Afghani Afghanistan', narrow: '؋', plurals: ['other' => 'afghani Afghanistan']),
    'ALL' => new C('ALL', 'Lek Albania', plurals: ['other' => 'lek Albania']),
    'AMD' => new C('AMD', 'Dram Armenia', narrow: '֏', plurals: ['other' => 'dram Armenia']),
    'ANG' => new C('ANG', 'Guilder Antilles yr Iseldiroedd', plurals: ['other' => 'guilder Antilles yr Iseldiroedd']),
    'AOA' => new C('AOA', 'Kwanza Angola', narrow: 'Kz', plurals: ['other' => 'kwanza Angola']),
    'AOK' => new C('AOK', 'Kwanza Angola (1977–1991)', plurals: ['other' => 'kwanza Angola (1977 – 1991)']),
    'AON' => new C('AON', 'Kwanza Newydd Angola (1990–2000)', plurals: ['other' => 'kwanza newydd Angola (1999 – 2000)']),
    'AOR' => new C('AOR', 'Kwanza Ailgymhwysedig Angola (1995–1999)', plurals: ['other' => 'kwanza ailgymhwysedig Angola (1995 – 1999)']),
    'ARA' => new C('ARA', 'Austral yr Ariannin', plurals: ['other' => 'austral yr Ariannin']),
    'ARL' => new C('ARL', 'Peso Ley yr Ariannin (1970–1983)', plurals: ['other' => 'peso ley yr Ariannin (1970–1983)']),
    'ARM' => new C('ARM', 'Peso yr Ariannin (1881–1970)', plurals: ['other' => 'peso yr Ariannin (1881–1970)']),
    'ARP' => new C('ARP', 'Peso yr Ariannin (1983–1985)', plurals: ['other' => 'peso yr Ariannin (1983–1985)']),
    'ARS' => new C('ARS', 'Peso yr Ariannin', narrow: '$', plurals: ['other' => 'peso yr Ariannin']),
    'ATS' => new C('ATS', 'Swllt Awstria', plurals: ['other' => 'swllt Awstria']),
    'AUD' => new C('AUD', 'Doler Awstralia', 'A$', narrow: '$', plurals: ['two' => 'ddoler Awstralia', 'other' => 'doler Awstralia']),
    'AWG' => new C('AWG', 'Fflorin Aruba', plurals: ['other' => 'fflorin Aruba']),
    'AZM' => new C('AZM', 'Manat Azerbaijan (1993–2006)', plurals: ['other' => 'manat Azerbaijan (1993–2006)']),
    'AZN' => new C('AZN', 'Manat Azerbaijan', narrow: '₼', plurals: ['other' => 'manat Azerbaijan']),
    'BAM' => new C('BAM', 'Marc Trosadwy Bosnia a Hercegovina', narrow: 'KM', plurals: ['two' => 'farc trosiadwy Bosnia a Hercegovina', 'other' => 'marc trosadwy Bosnia a Hercegovina']),
    'BBD' => new C('BBD', 'Doler Barbados', narrow: '$', plurals: ['one' => 'ddoler Barbados', 'two' => 'ddoler Barbados', 'other' => 'doler Barbados']),
    'BDT' => new C('BDT', 'Taka Bangladesh', narrow: 'TK', plurals: ['other' => 'taka Bangladesh']),
    'BEC' => new C('BEC', 'Ffranc Gwlad Belg (arnewidiol)', plurals: ['other' => 'ffranc Gwlad Belg (arnewidiol)']),
    'BEF' => new C('BEF', 'Ffranc Gwlad Belg', plurals: ['other' => 'ffranc Gwlad Belg']),
    'BEL' => new C('BEL', 'Ffranc Gwlad Belg (ariannol)', plurals: ['other' => 'ffranc Gwlad Belg (ariannol)']),
    'BGM' => new C('BGM', 'Lev Sosialaidd Bwlgaria', plurals: ['other' => 'lev sosialaidd Bwlgaria']),
    'BGN' => new C('BGN', 'Lev Bwlgaria', plurals: ['other' => 'lev Bwlgaria']),
    'BGO' => new C('BGO', 'Lev Bwlgaria (1879–1952)', plurals: ['other' => 'lev Bwlgaria (1879 – 1952)']),
    'BHD' => new C('BHD', 'Dinar Bahrain', plurals: ['other' => 'dinar Bahrain'], minorUnits: 3),
    'BIF' => new C('BIF', 'Ffranc Burundi', plurals: ['other' => 'ffranc Burundi'], minorUnits: 0),
    'BMD' => new C('BMD', 'Doler Bermuda', narrow: '$', plurals: ['two' => 'ddoler Bermuda', 'other' => 'doler Bermuda']),
    'BND' => new C('BND', 'Doler Brunei', narrow: '$', plurals: ['two' => 'ddoler Brunei', 'other' => 'doler Brunei']),
    'BOB' => new C('BOB', 'Boliviano Bolifia', narrow: 'Bs', plurals: ['other' => 'boliviano Bolifia']),
    'BOL' => new C('BOL', 'Boliviano Bolifia (1863–1963)', plurals: ['other' => 'boliviano Bolifia (1863–1963)']),
    'BOP' => new C('BOP', 'Peso Bolifia', plurals: ['other' => 'peso Bolifia']),
    'BOV' => new C('BOV', 'Mvdol Bolifia', plurals: ['other' => 'mvdol Bolifia']),
    'BRB' => new C('BRB', 'Cruzeiro Newydd Brasil (1967–1986)', plurals: ['other' => 'cruzeiro newydd Brasil (1967–1986)']),
    'BRC' => new C('BRC', 'Cruzado Brasil (1986–1989)', plurals: ['other' => 'cruzado Brasil (1986–1989)']),
    'BRE' => new C('BRE', 'Cruzeiro Brasil (1990–1993)', plurals: ['other' => 'cruzeiro Brasil (1990–1993)']),
    'BRL' => new C('BRL', 'Real Brasil', 'R$', narrow: 'R$', plurals: ['other' => 'real Brasil']),
    'BRN' => new C('BRN', 'Cruzado Newydd Brasil (1989–1990)', plurals: ['other' => 'cruzado newydd Brasil (1989–1990)']),
    'BRR' => new C('BRR', 'Cruzeiro Brasil (1993–1994)', plurals: ['other' => 'cruzeiro Brasil (1993–1994)']),
    'BRZ' => new C('BRZ', 'Cruzeiro Brasil (1942–1967)', plurals: ['other' => 'cruzeiro Brasil (1942–1967)']),
    'BSD' => new C('BSD', 'Doler y Bahamas', narrow: '$', plurals: ['two' => 'ddoler y Bahamas', 'other' => 'doler y Bahamas']),
    'BTN' => new C('BTN', 'Ngultrum Bhutan', plurals: ['other' => 'ngultrum Bhutan']),
    'BUK' => new C('BUK', 'Kyat Byrma', plurals: ['other' => 'kyat Byrma']),
    'BWP' => new C('BWP', 'Pula Botswana', plurals: ['other' => 'pula Botswana']),
    'BYN' => new C('BYN', 'Rwbl Belarws', narrow: 'р.', plurals: ['other' => 'rwbl Belarws']),
    'BYR' => new C('BYR', 'Rwbl Belarws (2000–2016)', plurals: ['other' => 'rwbl Belarws (2000–2016)']),
    'BZD' => new C('BZD', 'Doler Belize', narrow: '$', plurals: ['two' => 'ddoler Belize', 'other' => 'doler Belize']),
    'CAD' => new C('CAD', 'Doler Canada', 'CA$', narrow: '$', plurals: ['other' => 'doler Canada']),
    'CDF' => new C('CDF', 'Ffranc Congo', plurals: ['other' => 'ffranc Congo']),
    'CHE' => new C('CHE', 'Ewro WIR', plurals: ['other' => 'ewro WIR']),
    'CHF' => new C('CHF', 'Ffranc y Swistir', plurals: ['other' => 'ffranc y Swistir']),
    'CHW' => new C('CHW', 'Ffranc WIR', plurals: ['other' => 'ffranc WIR']),
    'CLE' => new C('CLE', 'Escudo Chile', plurals: ['other' => 'escudo Chile']),
    'CLF' => new C('CLF', 'Uned Cyfrifo Chile (UF)', plurals: ['other' => 'uned cyfrifo Chile (UF)'], minorUnits: 4),
    'CLP' => new C('CLP', 'Peso Chile', narrow: '$', plurals: ['other' => 'peso Chile'], minorUnits: 0),
    'CNH' => new C('CNH', 'Yuan Tsieina (ar y môr)', plurals: ['other' => 'yuan Tsieina (ar y môr)']),
    'CNX' => new C('CNX', 'Doler Banc Pobl Tsieina', plurals: ['one' => 'ddoler Banc Pobl Tsieina', 'two' => 'ddoler Banc Pobl Tsieina', 'other' => 'doler Banc Pobl Tsieina']),
    'CNY' => new C('CNY', 'Yuan Tsieina', 'CN¥', narrow: '¥', plurals: ['other' => 'yuan Tsieina']),
    'COP' => new C('COP', 'Peso Colombia', narrow: '$', plurals: ['other' => 'peso Colombia']),
    'COU' => new C('COU', 'Uned Gwir Werth Colombia', plurals: ['other' => 'uned gwir werth Colombia']),
    'CRC' => new C('CRC', 'Colón Costa Rica', narrow: '₡', plurals: ['other' => 'colón Costa Rica']),
    'CUC' => new C('CUC', 'Peso Trosadwy Ciwba', narrow: '$', plurals: ['other' => 'peso trosadwy Ciwba']),
    'CUP' => new C('CUP', 'Peso Ciwba', narrow: '$', plurals: ['other' => 'peso Ciwba']),
    'CVE' => new C('CVE', 'Esgwdo Cabo Verde', plurals: ['other' => 'esgwdo Cabo Verde']),
    'CYP' => new C('CYP', 'Punt Cyprus', plurals: ['one' => 'bunt Cyprus', 'two' => 'bunt Cyprus', 'other' => 'punt Cyprus']),
    'CZK' => new C('CZK', 'Koruna’r Weriniaeth Tsiec', narrow: 'Kč', plurals: ['other' => 'koruna’r Weriniaeth Tsiec']),
    'DDM' => new C('DDM', 'Marc Dwyrain yr Almaen', plurals: ['other' => 'marc Dwyrain yr Almaen']),
    'DEM' => new C('DEM', 'Marc yr Almaen', plurals: ['other' => 'marc yr Almaen']),
    'DJF' => new C('DJF', 'Ffranc Djibouti', plurals: ['other' => 'ffranc Djibouti'], minorUnits: 0),
    'DKK' => new C('DKK', 'Krone Denmarc', narrow: 'kr', plurals: ['other' => 'krone Denmarc']),
    'DOP' => new C('DOP', 'Peso Gweriniaeth Dominica', narrow: '$', plurals: ['other' => 'peso Gweriniaeth Dominica']),
    'DZD' => new C('DZD', 'Dinar Algeria', plurals: ['other' => 'dinar Algeria']),
    'ECS' => new C('ECS', 'Sucre Ecuador', plurals: ['other' => 'sucre Ecuador']),
    'ECV' => new C('ECV', 'Uned Gwerth Gyson Ecuador', plurals: ['other' => 'uned gwerth gyson Ecuador']),
    'EEK' => new C('EEK', 'Kroon Estonia', plurals: ['other' => 'kroon Estonia']),
    'EGP' => new C('EGP', 'Punt Yr Aifft', narrow: 'E£', plurals: ['two' => 'bunt yr Aifft', 'other' => 'punt yr Aifft']),
    'ERN' => new C('ERN', 'Nakfa Eritrea', plurals: ['other' => 'nakfa Eritrea']),
    'ETB' => new C('ETB', 'Birr Ethiopia', plurals: ['other' => 'birr Ethiopia']),
    'EUR' => new C('EUR', 'Ewro', '€', narrow: '€', plurals: ['other' => 'ewro']),
    'FIM' => new C('FIM', 'Markka’r Ffindir', plurals: ['other' => 'markka’r Ffindir']),
    'FJD' => new C('FJD', 'Doler Ffiji', narrow: '$', plurals: ['two' => 'ddoler Ffiji', 'other' => 'doler Ffiji']),
    'FKP' => new C('FKP', 'Punt Ynysoedd Falkland/Malvinas', narrow: '£', plurals: ['two' => 'bunt Ynysoedd Falkland/Malvinas', 'other' => 'punt Ynysoedd Falkland/Malvinas']),
    'FRF' => new C('FRF', 'Ffranc Ffrainc', plurals: ['other' => 'ffranc Ffrainc']),
    'GBP' => new C('GBP', 'Punt Prydain', '£', narrow: '£', plurals: ['one' => 'bunt Prydain', 'two' => 'bunt Prydain', 'other' => 'punt Prydain']),
    'GEK' => new C('GEK', 'Kupon Larit Georgia', plurals: ['other' => 'kupon larit Georgia']),
    'GEL' => new C('GEL', 'Lari Georgia', narrow: '₾', plurals: ['other' => 'lari Georgia']),
    'GHC' => new C('GHC', 'Cedi Ghana (1979–2007)', plurals: ['other' => 'cedi Ghana (1979–2007)']),
    'GHS' => new C('GHS', 'Cedi Ghana', narrow: 'GH₵', plurals: ['other' => 'cedi Ghana']),
    'GIP' => new C('GIP', 'Punt Gibraltar', narrow: '£', plurals: ['two' => 'bunt Gibraltar', 'other' => 'punt Gibraltar']),
    'GMD' => new C('GMD', 'Dalasi Gambia', plurals: ['other' => 'dalasi Gambia']),
    'GNF' => new C('GNF', 'Ffranc Guinée', narrow: 'FG', plurals: ['other' => 'ffranc Guinée'], minorUnits: 0),
    'GNS' => new C('GNS', 'Syli Guinée', plurals: ['other' => 'syli Guinée']),
    'GQE' => new C('GQE', 'Ekwele Guinea Gyhydeddol', plurals: ['other' => 'ekwele Guinea Gyhydeddol']),
    'GTQ' => new C('GTQ', 'Quetzal Guatemala', narrow: 'Q', plurals: ['other' => 'quetzal Guatemala']),
    'GWP' => new C('GWP', 'Peso Guiné-Bissau', plurals: ['other' => 'peso Guiné-Bissau']),
    'GYD' => new C('GYD', 'Doler Guyana', narrow: '$', plurals: ['two' => 'ddoler Guyana', 'other' => 'doler Guyana']),
    'HKD' => new C('HKD', 'Doler Hong Kong', 'HK$', narrow: 'HK$', plurals: ['two' => 'ddoler Hong Kong', 'other' => 'doler Hong Kong']),
    'HNL' => new C('HNL', 'Lempira Honduras', narrow: 'L', plurals: ['other' => 'lempira Honduras']),
    'HRK' => new C('HRK', 'Kuna Croatia', narrow: 'kn', plurals: ['other' => 'kuna Croatia']),
    'HTG' => new C('HTG', 'Gourde Haiti', plurals: ['other' => 'gourde Haiti']),
    'HUF' => new C('HUF', 'Fforint Hwngari', narrow: 'Ft', plurals: ['other' => 'fforint Hwngari']),
    'IDR' => new C('IDR', 'Rupiah Indonesia', narrow: 'Rp', plurals: ['other' => 'rupiah Indonesia']),
    'IEP' => new C('IEP', 'Punt Iwerddon', plurals: ['one' => 'bunt Iwerddon', 'two' => 'bunt Iwerddon', 'many' => 'phunt Iwerddon', 'other' => 'punt Iwerddon']),
    'ILP' => new C('ILP', 'Punt Israel', plurals: ['one' => 'bunt Israel', 'two' => 'bunt Israel', 'many' => 'phunt Israel', 'other' => 'punt Israel']),
    'ILR' => new C('ILR', 'Shegel Israel (1980–1985)', plurals: ['other' => 'shegel Israel (1980–1985)']),
    'ILS' => new C('ILS', 'Shegel Newydd Israel', '₪', narrow: '₪', plurals: ['other' => 'shegel newydd Israel']),
    'INR' => new C('INR', 'Rwpî India', '₹', narrow: '₹', plurals: ['other' => 'rwpî India']),
    'IQD' => new C('IQD', 'Dinar Irac', plurals: ['other' => 'dinar Irac'], minorUnits: 3),
    'IRR' => new C('IRR', 'Rial Iran', plurals: ['other' => 'rial Iran']),
    'ISJ' => new C('ISJ', 'Króna Gwlad yr Iâ (1918 – 1981)', plurals: ['other' => 'króna Gwlad yr Iâ (1918 – 1981)']),
    'ISK' => new C('ISK', 'Króna Gwlad yr Iâ', narrow: 'kr', plurals: ['other' => 'króna Gwlad yr Iâ'], minorUnits: 0),
    'JMD' => new C('JMD', 'Doler Jamaica', narrow: '$', plurals: ['two' => 'ddoler Jamaica', 'other' => 'doler Jamaica']),
    'JOD' => new C('JOD', 'Dinar Gwlad yr Iorddonen', plurals: ['other' => 'dinar Gwlad yr Iorddonen'], minorUnits: 3),
    'JPY' => new C('JPY', 'Yen Japan', 'JP¥', narrow: '¥', plurals: ['other' => 'yen Japan'], minorUnits: 0),
    'KES' => new C('KES', 'Swllt Kenya', plurals: ['other' => 'swllt Kenya']),
    'KGS' => new C('KGS', 'Som Kyrgyzstan', plurals: ['other' => 'som Kyrgyzstan']),
    'KHR' => new C('KHR', 'Riel Cambodia', narrow: '៛', plurals: ['other' => 'riel Cambodia']),
    'KMF' => new C('KMF', 'Ffranc Comoros', narrow: 'CF', plurals: ['other' => 'ffranc Comoros'], minorUnits: 0),
    'KPW' => new C('KPW', 'Won Gogledd Corea', narrow: '₩', plurals: ['other' => 'won Gogledd Corea']),
    'KRH' => new C('KRH', 'Hwan De Corea (1953–1962)', plurals: ['other' => 'hwan De Corea (1953–1962)']),
    'KRO' => new C('KRO', 'Won De Corea (1945–1953)', plurals: ['other' => 'won De Corea (1945–1953)']),
    'KRW' => new C('KRW', 'Won De Corea', narrow: '₩', plurals: ['other' => 'won De Corea'], minorUnits: 0),
    'KWD' => new C('KWD', 'Dinar Kuwait', plurals: ['other' => 'dinar Kuwait'], minorUnits: 3),
    'KYD' => new C('KYD', 'Doler Ynysoedd Cayman', narrow: '$', plurals: ['two' => 'ddoler Ynysoedd Cayman', 'other' => 'doler Ynysoedd Cayman']),
    'KZT' => new C('KZT', 'Tenge Kazakstan', narrow: '₸', plurals: ['other' => 'tenge Kazakstan']),
    'LAK' => new C('LAK', 'Kip Laos', narrow: '₭', plurals: ['other' => 'kip Laos']),
    'LBP' => new C('LBP', 'Punt Libanus', narrow: 'L£', plurals: ['two' => 'bunt Libanus', 'other' => 'punt Libanus']),
    'LKR' => new C('LKR', 'Rwpî Sri Lanka', narrow: 'Rs', plurals: ['other' => 'rwpî Sri Lanka']),
    'LRD' => new C('LRD', 'Doler Liberia', narrow: '$', plurals: ['one' => 'ddoler Liberia', 'two' => 'ddoler Liberia', 'other' => 'doler Liberia']),
    'LSL' => new C('LSL', 'Loti Lesotho', plurals: ['other' => 'loti Lesotho']),
    'LTL' => new C('LTL', 'Litas Lithwania', narrow: 'Lt', plurals: ['other' => 'litas Lithwania']),
    'LTT' => new C('LTT', 'Talonas Lithwania', plurals: ['other' => 'talonas Lithwania']),
    'LUF' => new C('LUF', 'Ffranc Lwcsembwrg', plurals: ['other' => 'ffranc Lwcsembwrg']),
    'LVL' => new C('LVL', 'Lats Latfia', narrow: 'Ls', plurals: ['other' => 'lats Latfia']),
    'LVR' => new C('LVR', 'Rwbl Latfia', plurals: ['other' => 'rwbl Latfia']),
    'LYD' => new C('LYD', 'Dinar Libya', plurals: ['other' => 'dinar Libya'], minorUnits: 3),
    'MAD' => new C('MAD', 'Dirham Moroco', plurals: ['other' => 'dirham Moroco']),
    'MAF' => new C('MAF', 'Ffranc Moroco', plurals: ['other' => 'ffranc Moroco']),
    'MCF' => new C('MCF', 'Ffranc Monaco', plurals: ['other' => 'ffranc Monaco']),
    'MDL' => new C('MDL', 'Leu Moldofa', plurals: ['other' => 'leu Moldofa']),
    'MGA' => new C('MGA', 'Ariary Madagascar', narrow: 'Ar', plurals: ['other' => 'ariary Madagascar']),
    'MGF' => new C('MGF', 'Ffranc Madagascar', plurals: ['other' => 'ffranc Madagascar']),
    'MKD' => new C('MKD', 'Denar Macedonia', plurals: ['other' => 'denar Macedonia']),
    'MLF' => new C('MLF', 'Ffranc Mali', plurals: ['other' => 'ffranc Mali']),
    'MMK' => new C('MMK', 'Kyat Myanmar', narrow: 'K', plurals: ['other' => 'kyat Myanmar']),
    'MNT' => new C('MNT', 'Tugrik Mongolia', narrow: '₮', plurals: ['other' => 'tugrik Mongolia']),
    'MOP' => new C('MOP', 'pataca Macau', plurals: ['other' => 'pataca Macau']),
    'MRO' => new C('MRO', 'Ouguiya Mauritania (1973–2017)', plurals: ['other' => 'ouguiya Mauritania (1973–2017)']),
    'MRU' => new C('MRU', 'Ouguiya Mauritania', plurals: ['other' => 'ouguiya Mauritania']),
    'MUR' => new C('MUR', 'Rwpî Mauritius', narrow: 'Rs', plurals: ['other' => 'rwpî Mauritius']),
    'MVP' => new C('MVP', 'Rwpî’r Maldives (1947–1981)', plurals: ['other' => 'rwpî’r Maldives (1947–1981)']),
    'MVR' => new C('MVR', 'Rufiyaa’r Maldives', plurals: ['other' => 'rufiyaa’r Maldives']),
    'MWK' => new C('MWK', 'Kwacha Malawi', plurals: ['other' => 'kwacha Malawi']),
    'MXN' => new C('MXN', 'Peso Mecsico', 'MX$', narrow: '$', plurals: ['other' => 'peso Mecsico']),
    'MXP' => new C('MXP', 'Peso Arian México (1861–1992)', plurals: ['other' => 'peso arian México (1861–1992)']),
    'MXV' => new C('MXV', 'Uned Fuddsoddi México', plurals: ['other' => 'uned fuddsoddi México']),
    'MYR' => new C('MYR', 'Ringgit Malaysia', narrow: 'RM', plurals: ['other' => 'ringgit Malaysia']),
    'MZE' => new C('MZE', 'Escudo Mozambique', plurals: ['other' => 'escudo Mozambique']),
    'MZM' => new C('MZM', 'Metical Mozambique (1980–2006)', plurals: ['other' => 'metical Mozambique (1980–2006)']),
    'MZN' => new C('MZN', 'Metical Mozambique', plurals: ['other' => 'metical Mozambique']),
    'NAD' => new C('NAD', 'Doler Namibia', narrow: '$', plurals: ['two' => 'ddoler Namibia', 'other' => 'doler Namibia']),
    'NGN' => new C('NGN', 'Naira Nigeria', narrow: '₦', plurals: ['other' => 'naira Nigeria']),
    'NIC' => new C('NIC', 'Córdoba Nicaragua (1988–1991)', plurals: ['other' => 'córdoba Nicaragua (1988–1991)']),
    'NIO' => new C('NIO', 'Cordoba Nicaragwa', narrow: 'C$', plurals: ['other' => 'cordoba Nicaragwa']),
    'NLG' => new C('NLG', 'Guilder yr Iseldiroedd', plurals: ['other' => 'guilder yr Iseldiroedd']),
    'NOK' => new C('NOK', 'Krone Norwy', narrow: 'kr', plurals: ['other' => 'krone Norwy']),
    'NPR' => new C('NPR', 'Rwpî Nepal', narrow: 'Rs', plurals: ['other' => 'rwpî Nepal']),
    'NZD' => new C('NZD', 'Doler Seland Newydd', 'NZ$', narrow: '$', plurals: ['two' => 'ddoler Seland Newydd', 'other' => 'doler Seland Newydd']),
    'OMR' => new C('OMR', 'Rial Oman', plurals: ['other' => 'rial Oman'], minorUnits: 3),
    'PAB' => new C('PAB', 'Balboa Panama', plurals: ['other' => 'balboa Panama']),
    'PEI' => new C('PEI', 'Inti Periw', plurals: ['other' => 'inti Periw']),
    'PEN' => new C('PEN', 'Sol Periw', plurals: ['other' => 'sol Periw']),
    'PES' => new C('PES', 'Sol Periw (1863–1965)', plurals: ['other' => 'sol Periw (1863–1965)']),
    'PGK' => new C('PGK', 'Kina Papua Guinea Newydd', plurals: ['other' => 'kina Papua Guinea Newydd']),
    'PHP' => new C('PHP', 'Peso Philipinas', narrow: '₱', plurals: ['other' => 'peso Philipinas']),
    'PKR' => new C('PKR', 'Rwpî Pacistan', narrow: 'Rs', plurals: ['other' => 'rwpî Pacistan']),
    'PLN' => new C('PLN', 'Zloty Gwlad Pwyl', narrow: 'zł', plurals: ['other' => 'zloty Gwlad Pwyl']),
    'PYG' => new C('PYG', 'Guarani Paraguay', narrow: '₲', plurals: ['other' => 'guarani Paraguay'], minorUnits: 0),
    'QAR' => new C('QAR', 'Rial Qatar', plurals: ['other' => 'rial Qatar']),
    'RHD' => new C('RHD', 'Doler Rhodesia', plurals: ['one' => 'ddoler Rhodesia', 'two' => 'ddoler Rhodesia', 'other' => 'doler Rhodesia']),
    'RON' => new C('RON', 'Leu Rwmania', narrow: 'lei', plurals: ['other' => 'leu Rwmania']),
    'RSD' => new C('RSD', 'Dinar Serbia', plurals: ['other' => 'dinar Serbia']),
    'RUB' => new C('RUB', 'Rwbl Rwsia', narrow: '₽', plurals: ['other' => 'rwbl Rwsia']),
    'RWF' => new C('RWF', 'Ffranc Rwanda', narrow: 'RF', plurals: ['other' => 'ffranc Rwanda'], minorUnits: 0),
    'SAR' => new C('SAR', 'Riyal Saudi Arabia', plurals: ['other' => 'riyal Saudi Arabia']),
    'SBD' => new C('SBD', 'Doler Ynysoedd Solomon', narrow: '$', plurals: ['two' => 'ddoler Ynysoedd Solomon', 'other' => 'doler Ynysoedd Solomon']),
    'SCR' => new C('SCR', 'Rwpî Seychelles', plurals: ['other' => 'rwpî Seychelles']),
    'SDD' => new C('SDD', 'Dinar Sudan (1992–2007)', plurals: ['other' => 'dinar Sudan (1992–2007)']),
    'SDG' => new C('SDG', 'Punt Sudan', plurals: ['two' => 'bunt Sudan', 'other' => 'punt Sudan']),
    'SDP' => new C('SDP', 'Punt Sudan (1957–1998)', plurals: ['one' => 'bunt Sudan (1957–1998)', 'two' => 'bunt Sudan (1957–1998)', 'many' => 'phunt Sudan (1957–1998)', 'other' => 'punt Sudan (1957–1998)']),
    'SEK' => new C('SEK', 'Krona Sweden', narrow: 'kr', plurals: ['other' => 'krona Sweden']),
    'SGD' => new C('SGD', 'Doler Singapore', narrow: '$', plurals: ['two' => 'ddoler Singapore', 'other' => 'doler Singapore']),
    'SHP' => new C('SHP', 'Punt St Helena', narrow: '£', plurals: ['two' => 'bunt St. Helena', 'other' => 'punt St. Helena']),
    'SLL' => new C('SLL', 'Leone Sierra Leone', plurals: ['other' => 'leone Sierra Leone']),
    'SOS' => new C('SOS', 'Swllt Somalia', plurals: ['other' => 'swllt Somalia']),
    'SRD' => new C('SRD', 'Doler Surinam', narrow: '$', plurals: ['two' => 'ddoler Surinam', 'other' => 'doler Surinam']),
    'SRG' => new C('SRG', 'Guilder Surinam', plurals: ['other' => 'guilder Surinam']),
    'SSP' => new C('SSP', 'Punt De Sudan', narrow: '£', plurals: ['two' => 'bunt De Sudan', 'other' => 'punt De Sudan']),
    'STD' => new C('STD', 'Dobra São Tomé a Príncipe (1977–2017)', plurals: ['other' => 'dobra São Tomé a Príncipe (1977–2017)']),
    'STN' => new C('STN', 'Dobra São Tomé a Príncipe', narrow: 'Db', plurals: ['other' => 'dobra São Tomé a Príncipe']),
    'SVC' => new C('SVC', 'Colón El Salvador', plurals: ['other' => 'colón El Salvador']),
    'SYP' => new C('SYP', 'Punt Syria', narrow: '£', plurals: ['two' => 'bunt Syria', 'other' => 'punt Syria']),
    'SZL' => new C('SZL', 'Lilangeni Gwlad Swazi', plurals: ['other' => 'lilangeni Gwlad Swazi']),
    'THB' => new C('THB', 'Baht Gwlad Thai', '฿', narrow: '฿', plurals: ['other' => 'baht Gwlad Thai']),
    'TJR' => new C('TJR', 'Rwbl Tajikistan', plurals: ['other' => 'rwbl Tajikistan']),
    'TJS' => new C('TJS', 'Somoni Tajikistan', plurals: ['other' => 'somoni Tajikstan']),
    'TMM' => new C('TMM', 'Manat Turkmenistan (1993–2009)', plurals: ['other' => 'manat Turkmenistan (1993–2009)']),
    'TMT' => new C('TMT', 'Manat Turkmenistan', plurals: ['other' => 'manat Turkmenistan']),
    'TND' => new C('TND', 'Dinar Tunisia', plurals: ['other' => 'dinar Tunisia'], minorUnits: 3),
    'TOP' => new C('TOP', 'Paʻanga Tonga', narrow: 'T$', plurals: ['other' => 'paʻanga Tonga']),
    'TPE' => new C('TPE', 'Escudo Timor', plurals: ['other' => 'escudo Timor']),
    'TRL' => new C('TRL', 'Lira Twrci (1922–2005)', plurals: ['other' => 'lira Twrci (1922–2005)']),
    'TRY' => new C('TRY', 'Lira Twrci', narrow: '₺', plurals: ['other' => 'lira Twrci']),
    'TTD' => new C('TTD', 'Doler Trinidad a Tobago', narrow: '$', plurals: ['two' => 'ddoler Trinidad a Tobago', 'other' => 'doler Trinidad a Tobago']),
    'TWD' => new C('TWD', 'Doler Newydd Taiwan', 'NT$', narrow: 'NT$', plurals: ['two' => 'ddoler newydd Taiwan', 'other' => 'doler newydd Taiwan']),
    'TZS' => new C('TZS', 'Swllt Tanzania', plurals: ['other' => 'swllt Tanzania']),
    'UAH' => new C('UAH', 'Hryvnia Wcráin', narrow: '₴', plurals: ['other' => 'hryvnia Wcráin']),
    'UGS' => new C('UGS', 'Swllt Uganda (1966–1987)', plurals: ['other' => 'swllt Uganda (1966–1987)']),
    'UGX' => new C('UGX', 'Swllt Uganda', plurals: ['other' => 'swllt Uganda'], minorUnits: 0),
    'USD' => new C('USD', 'Doler UDA', 'US$', narrow: '$', plurals: ['two' => 'ddoler UDA', 'other' => 'doler UDA']),
    'USN' => new C('USN', 'Doler UDA (y diwrnod nesaf)', plurals: ['one' => 'ddoler UDA (y diwrnod nesaf)', 'two' => 'ddoler UDA (y diwrnod nesaf)', 'other' => 'doler UDA (y diwrnod nesaf)']),
    'USS' => new C('USS', 'Doler UDA (yr un diwrnod)', plurals: ['one' => 'ddoler UDA (yr un diwrnod)', 'two' => 'ddoler UDA (yr un diwrnod)', 'other' => 'doler UDA (yr un diwrnod)']),
    'UYI' => new C('UYI', minorUnits: 0),
    'UYP' => new C('UYP', 'Peso Uruguay (1975–1993)', plurals: ['other' => 'peso Uruguay (1975–1993)']),
    'UYU' => new C('UYU', 'Peso Uruguay', narrow: '$', plurals: ['other' => 'peso Uruguay']),
    'UZS' => new C('UZS', 'Som Uzbekistan', plurals: ['other' => 'som Uzbekistan']),
    'VEB' => new C('VEB', 'Bolívar Venezuela (1871–2008)', plurals: ['other' => 'bolívar Venezuela (1871–2008)']),
    'VEF' => new C('VEF', 'Bolívar Venezuela (2008–2018)', narrow: 'Bs', plurals: ['other' => 'bolívar Venezuela (2008–2018)']),
    'VES' => new C('VES', 'Bolívar Venezuela', plurals: ['other' => 'bolívar Venezuela']),
    'VND' => new C('VND', 'Dong Fietnam', '₫', narrow: '₫', plurals: ['other' => 'dong Fietnam'], minorUnits: 0),
    'VNN' => new C('VNN', 'Dong Fietnam (1978–1985)', plurals: ['other' => 'dong Fietnam (1978–1985)']),
    'VUV' => new C('VUV', 'Vatu Vanuatu', plurals: ['other' => 'vatu Vanuatu'], minorUnits: 0),
    'WST' => new C('WST', 'Tala Samoa', plurals: ['other' => 'tala Samoa']),
    'XAF' => new C('XAF', 'Ffranc CFA Canol Affrica', 'FCFA', plurals: ['other' => 'ffranc CFA Canol Affrica'], minorUnits: 0),
    'XAG' => new C('XAG', 'Arian'),
    'XAU' => new C('XAU', 'Aur'),
    'XBA' => new C('XBA', 'Uned Cyfansawdd Ewropeaidd', plurals: ['other' => 'uned cyfansawdd Ewropeaidd']),
    'XBB' => new C('XBB', 'Uned Ariannol Ewropeaidd', plurals: ['other' => 'uned ariannol Ewropeaidd']),
    'XCD' => new C('XCD', 'Doler Dwyrain y Caribî', 'EC$', narrow: '$', plurals: ['two' => 'ddoler Dwyrain y Caribî', 'other' => 'doler Dwyrain y Caribî']),
    'XEU' => new C('XEU', 'Uned Arian Cyfred Ewropeaidd', plurals: ['other' => 'uned arian cyfred Ewropeaidd']),
    'XOF' => new C('XOF', 'Ffranc CFA Gorllewin Affrica', "F\u{202F}CFA", plurals: ['other' => 'ffranc CFA Gorllewin Affrica'], minorUnits: 0),
    'XPD' => new C('XPD', 'Paladiwm'),
    'XPF' => new C('XPF', 'Ffranc CFP', 'CFPF', plurals: ['other' => 'ffranc CPF'], minorUnits: 0),
    'XPT' => new C('XPT', 'Platinwm'),
    'XSU' => new C('XSU', 'Sucre', plurals: ['other' => 'sucre']),
    'XXX' => new C('XXX', 'Arian Cyfred Anhysbys', plurals: ['other' => '(arian cyfred anhysbys)']),
    'YDD' => new C('YDD', 'Dinar Yemen', plurals: ['other' => 'dinar Yemen']),
    'YER' => new C('YER', 'Rial Yemen', plurals: ['other' => 'rial Yemen']),
    'ZAL' => new C('ZAL', 'Rand (ariannol) De Affrica', plurals: ['other' => 'rand (ariannol) De Affrica']),
    'ZAR' => new C('ZAR', 'Rand De Affrica', plurals: ['other' => 'rand De Affrica']),
    'ZMK' => new C('ZMK', 'Kwacha Zambia (1968–2012)', plurals: ['other' => 'kwacha Zambia (1968–2012)']),
    'ZMW' => new C('ZMW', 'Kwacha Zambia', plurals: ['other' => 'kwacha Zambia']),
    'ZRN' => new C('ZRN', 'Zaire Newydd Zaire (1993–1998)', plurals: ['other' => 'zaire newydd Zaire (1993 – 1998)']),
    'ZRZ' => new C('ZRZ', 'Zaire Zaire (1971–1993)', plurals: ['other' => 'zaire Zaire (1971 – 1993)']),
    'ZWD' => new C('ZWD', 'Doler Zimbabwe (1980–2008)', plurals: ['one' => 'ddoler Zimbabwe (1980–2008)', 'two' => 'ddoler Zimbabwe (1980–2008)', 'other' => 'doler Zimbabwe (1980–2008)']),
    'ZWL' => new C('ZWL', 'Doler Zimbabwe (2009)', plurals: ['one' => 'ddoler Zimbabwe (2009)', 'two' => 'ddoler Zimbabwe (2009)', 'other' => 'doler Zimbabwe (2009)']),
    'ZWR' => new C('ZWR', 'Doler Zimbabwe (2008)', plurals: ['one' => 'ddoler Zimbabwe (2008)', 'two' => 'ddoler Zimbabwe (2008)', 'other' => 'doler Zimbabwe (2008)']),
];
