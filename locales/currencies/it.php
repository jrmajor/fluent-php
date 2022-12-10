<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'ADP' => new C('ADP', 'peseta andorrana'),
    'AED' => new C('AED', 'dirham degli Emirati Arabi Uniti', plurals: ['one' => 'dirham degli EAU', 'other' => 'dirham degli EAU']),
    'AFA' => new C('AFA', 'afgani (1927–2002)'),
    'AFN' => new C('AFN', 'afghani', narrow: '؋', plurals: ['one' => 'afghani', 'other' => 'afghani']),
    'ALL' => new C('ALL', 'lek albanese', plurals: ['one' => 'lek albanese', 'other' => 'lekë albanesi']),
    'AMD' => new C('AMD', 'dram armeno', narrow: '֏', plurals: ['one' => 'dram armeno', 'other' => 'dram armeni']),
    'ANG' => new C('ANG', 'fiorino delle Antille olandesi', plurals: ['one' => 'fiorino delle Antille olandesi', 'other' => 'fiorini delle Antille olandesi']),
    'AOA' => new C('AOA', 'kwanza angolano', narrow: 'Kz', plurals: ['one' => 'kwanza angolano', 'other' => 'kwanzas angolani']),
    'AOK' => new C('AOK', 'kwanza angolano (1977–1990)'),
    'AON' => new C('AON', 'nuovo kwanza angolano (1990–2000)'),
    'AOR' => new C('AOR', 'kwanza reajustado angolano (1995–1999)'),
    'ARA' => new C('ARA', 'austral argentino'),
    'ARP' => new C('ARP', 'peso argentino (vecchio Cod.)'),
    'ARS' => new C('ARS', 'peso argentino', narrow: '$', plurals: ['one' => 'peso argentino', 'other' => 'pesos argentini']),
    'ATS' => new C('ATS', 'scellino austriaco'),
    'AUD' => new C('AUD', 'dollaro australiano', 'A$', narrow: '$', plurals: ['one' => 'dollaro australiano', 'other' => 'dollari australiani']),
    'AWG' => new C('AWG', 'fiorino di Aruba', plurals: ['one' => 'fiorino di Aruba', 'other' => 'fiorini di Aruba']),
    'AZM' => new C('AZM', 'manat azero (1993–2006)'),
    'AZN' => new C('AZN', 'manat azero', narrow: '₼', plurals: ['one' => 'manat azero', 'other' => 'manat azeri']),
    'BAD' => new C('BAD', 'dinar Bosnia-Herzegovina'),
    'BAM' => new C('BAM', 'marco convertibile della Bosnia-Herzegovina', narrow: 'KM', plurals: ['one' => 'marco convertibile della Bosnia-Herzegovina', 'other' => 'marchi convertibili della Bosnia-Herzegovina']),
    'BBD' => new C('BBD', 'dollaro di Barbados', narrow: '$', plurals: ['one' => 'dollaro di Barbados', 'other' => 'dollari di Barbados']),
    'BDT' => new C('BDT', 'taka bangladese', narrow: '৳', plurals: ['one' => 'taka bengalese', 'other' => 'taka bengalesi']),
    'BEC' => new C('BEC', 'franco belga (convertibile)'),
    'BEF' => new C('BEF', 'franco belga'),
    'BEL' => new C('BEL', 'franco belga (finanziario)'),
    'BGL' => new C('BGL', 'lev bulgaro (1962–1999)', plurals: ['one' => 'lev bulgaro (1962–1999)', 'other' => 'leva bulgari (1962–1999)']),
    'BGN' => new C('BGN', 'lev bulgaro', plurals: ['one' => 'lev bulgaro', 'other' => 'leva bulgari']),
    'BHD' => new C('BHD', 'dinaro del Bahrein', plurals: ['one' => 'dinaro del Bahrein', 'other' => 'dinari del Bahrein'], minorUnits: 3),
    'BIF' => new C('BIF', 'franco del Burundi', plurals: ['one' => 'franco del Burundi', 'other' => 'franchi del Burundi'], minorUnits: 0),
    'BMD' => new C('BMD', 'dollaro delle Bermuda', narrow: '$', plurals: ['one' => 'dollaro delle Bermuda', 'other' => 'dollari delle Bermuda']),
    'BND' => new C('BND', 'dollaro del Brunei', narrow: '$', plurals: ['one' => 'dollaro del Brunei', 'other' => 'dollari del Brunei']),
    'BOB' => new C('BOB', 'boliviano', narrow: 'Bs', plurals: ['one' => 'boliviano', 'other' => 'boliviani']),
    'BOP' => new C('BOP', 'peso boliviano'),
    'BOV' => new C('BOV', 'mvdol boliviano'),
    'BRB' => new C('BRB', 'cruzeiro novo brasiliano (1967–1986)'),
    'BRC' => new C('BRC', 'cruzado brasiliano'),
    'BRE' => new C('BRE', 'cruzeiro brasiliano (1990–1993)'),
    'BRL' => new C('BRL', 'real brasiliano', narrow: 'R$', plurals: ['one' => 'real brasiliano', 'other' => 'real brasiliani']),
    'BRN' => new C('BRN', 'cruzado novo brasiliano'),
    'BRR' => new C('BRR', 'cruzeiro brasiliano'),
    'BSD' => new C('BSD', 'dollaro delle Bahamas', narrow: '$', plurals: ['one' => 'dollaro delle Bahamas', 'other' => 'dollari delle Bahamas']),
    'BTN' => new C('BTN', 'ngultrum bhutanese', plurals: ['one' => 'ngultrum bhutanese', 'other' => 'ngultrum bhutanesi']),
    'BUK' => new C('BUK', 'kyat birmano'),
    'BWP' => new C('BWP', 'pula del Botswana', narrow: 'P', plurals: ['one' => 'pula del Botswana', 'other' => 'pula del Botswana']),
    'BYB' => new C('BYB', 'nuovo rublo bielorusso (1994–1999)'),
    'BYN' => new C('BYN', 'rublo bielorusso', narrow: 'Br', plurals: ['one' => 'rublo bielorusso', 'other' => 'rubli bielorussi']),
    'BYR' => new C('BYR', 'rublo bielorusso (2000–2016)', plurals: ['one' => 'rublo bielorusso (2000–2016)', 'other' => 'rubli bielorussi (2000–2016)']),
    'BZD' => new C('BZD', 'dollaro del Belize', narrow: '$', plurals: ['one' => 'dollaro del Belize', 'other' => 'dollari del Belize']),
    'CAD' => new C('CAD', 'dollaro canadese', 'CA$', narrow: '$', plurals: ['one' => 'dollaro canadese', 'other' => 'dollari canadesi']),
    'CDF' => new C('CDF', 'franco congolese', plurals: ['one' => 'franco congolese', 'other' => 'franchi congolesi']),
    'CHF' => new C('CHF', 'franco svizzero', plurals: ['one' => 'franco svizzero', 'other' => 'franchi svizzeri']),
    'CLF' => new C('CLF', 'unidades de fomento chilene', minorUnits: 4),
    'CLP' => new C('CLP', 'peso cileno', narrow: '$', plurals: ['one' => 'peso cileno', 'other' => 'pesos cileni'], minorUnits: 0),
    'CNH' => new C('CNH', 'renmimbi cinese offshore', plurals: ['one' => 'renmimbi cinese offshore', 'other' => 'renmimbi cinesi offshore']),
    'CNY' => new C('CNY', 'renminbi cinese', 'CN¥', narrow: '¥', plurals: ['one' => 'renmimbi cinese', 'other' => 'renmimbi cinesi']),
    'COP' => new C('COP', 'peso colombiano', narrow: '$', plurals: ['one' => 'peso colombiano', 'other' => 'pesos colombiani']),
    'CRC' => new C('CRC', 'colón costaricano', narrow: '₡', plurals: ['one' => 'colón costaricano', 'other' => 'colón costaricani']),
    'CSD' => new C('CSD', 'antico dinaro serbo'),
    'CSK' => new C('CSK', 'corona forte cecoslovacca'),
    'CUC' => new C('CUC', 'peso cubano convertibile', narrow: '$', plurals: ['one' => 'peso cubano convertibile', 'other' => 'pesos cubani convertibili']),
    'CUP' => new C('CUP', 'peso cubano', narrow: '$', plurals: ['one' => 'peso cubano', 'other' => 'pesos cubani']),
    'CVE' => new C('CVE', 'escudo capoverdiano', plurals: ['one' => 'escudo capoverdiano', 'other' => 'escudos capoverdiani']),
    'CYP' => new C('CYP', 'sterlina cipriota'),
    'CZK' => new C('CZK', 'corona ceca', narrow: 'Kč', plurals: ['one' => 'corona ceca', 'other' => 'corone ceche']),
    'DDM' => new C('DDM', 'ostmark della Germania Orientale'),
    'DEM' => new C('DEM', 'marco tedesco'),
    'DJF' => new C('DJF', 'franco di Gibuti', plurals: ['one' => 'franco di Gibuti', 'other' => 'franchi di Gibuti'], minorUnits: 0),
    'DKK' => new C('DKK', 'corona danese', narrow: 'kr', plurals: ['one' => 'corona danese', 'other' => 'corone danesi']),
    'DOP' => new C('DOP', 'peso dominicano', narrow: '$', plurals: ['one' => 'peso dominicano', 'other' => 'pesos dominicani']),
    'DZD' => new C('DZD', 'dinaro algerino', plurals: ['one' => 'dinaro algerino', 'other' => 'dinari algerini']),
    'ECS' => new C('ECS', 'sucre dell’Ecuador'),
    'ECV' => new C('ECV', 'unidad de valor constante (UVC) dell’Ecuador'),
    'EEK' => new C('EEK', 'corona dell’Estonia'),
    'EGP' => new C('EGP', 'sterlina egiziana', narrow: '£E', plurals: ['one' => 'sterlina egiziana', 'other' => 'sterline egiziane']),
    'ERN' => new C('ERN', 'nakfa eritreo', plurals: ['one' => 'nakfa eritreo', 'other' => 'nakfa eritrei']),
    'ESA' => new C('ESA', 'peseta spagnola account'),
    'ESB' => new C('ESB', 'peseta spagnola account convertibile'),
    'ESP' => new C('ESP', 'peseta spagnola', narrow: '₧'),
    'ETB' => new C('ETB', 'birr etiope', plurals: ['one' => 'birr etiope', 'other' => 'birr etiopi']),
    'EUR' => new C('EUR', 'euro', '€', narrow: '€', plurals: ['one' => 'euro', 'other' => 'euro']),
    'FIM' => new C('FIM', 'markka finlandese'),
    'FJD' => new C('FJD', 'dollaro delle Figi', narrow: '$', plurals: ['one' => 'dollaro delle Figi', 'other' => 'dollari delle Figi']),
    'FKP' => new C('FKP', 'sterlina delle Falkland', narrow: '£', plurals: ['one' => 'sterlina delle Falkland', 'other' => 'sterline delle Falkland']),
    'FRF' => new C('FRF', 'franco francese'),
    'GBP' => new C('GBP', 'sterlina britannica', '£', narrow: '£', plurals: ['one' => 'sterlina britannica', 'other' => 'sterline britanniche']),
    'GEK' => new C('GEK', 'kupon larit georgiano'),
    'GEL' => new C('GEL', 'lari georgiano', narrow: '₾', plurals: ['one' => 'lari georgiano', 'other' => 'lari georgiani']),
    'GHC' => new C('GHC', 'cedi del Ghana'),
    'GHS' => new C('GHS', 'cedi ghanese', narrow: 'GH₵', plurals: ['one' => 'cedi ghanese', 'other' => 'cedi ghanesi']),
    'GIP' => new C('GIP', 'sterlina di Gibilterra', narrow: '£', plurals: ['one' => 'sterlina di Gibilterra', 'other' => 'sterline di Gibilterra']),
    'GMD' => new C('GMD', 'dalasi gambiano', plurals: ['one' => 'dalasi gambiano', 'other' => 'dalasi gambiani']),
    'GNF' => new C('GNF', 'franco della Guinea', narrow: 'FG', plurals: ['one' => 'franco della Guinea', 'other' => 'franchi della Guinea'], minorUnits: 0),
    'GNS' => new C('GNS', 'syli della Guinea'),
    'GQE' => new C('GQE', 'ekwele della Guinea Equatoriale'),
    'GRD' => new C('GRD', 'dracma greca'),
    'GTQ' => new C('GTQ', 'quetzal guatemalteco', narrow: 'Q', plurals: ['one' => 'quetzal guatemalteco', 'other' => 'quetzal guatemaltechi']),
    'GWE' => new C('GWE', 'escudo della Guinea portoghese'),
    'GWP' => new C('GWP', 'peso della Guinea-Bissau'),
    'GYD' => new C('GYD', 'dollaro della Guyana', narrow: '$', plurals: ['one' => 'dollaro della Guyana', 'other' => 'dollari della Guyana']),
    'HKD' => new C('HKD', 'dollaro di Hong Kong', narrow: '$', plurals: ['one' => 'dollaro di Hong Kong', 'other' => 'dollari di Hong Kong']),
    'HNL' => new C('HNL', 'lempira honduregna', narrow: 'L', plurals: ['one' => 'lempira honduregna', 'other' => 'lempire honduregne']),
    'HRD' => new C('HRD', 'dinaro croato'),
    'HRK' => new C('HRK', 'kuna croata', narrow: 'kn', plurals: ['one' => 'kuna croata', 'other' => 'kune croate']),
    'HTG' => new C('HTG', 'gourde haitiano', plurals: ['one' => 'gourde haitiano', 'other' => 'gourde haitiani']),
    'HUF' => new C('HUF', 'fiorino ungherese', narrow: 'Ft', plurals: ['one' => 'fiorino ungherese', 'other' => 'fiorini ungheresi']),
    'IDR' => new C('IDR', 'rupia indonesiana', narrow: 'Rp', plurals: ['one' => 'rupia indonesiana', 'other' => 'rupie indonesiane']),
    'IEP' => new C('IEP', 'sterlina irlandese'),
    'ILP' => new C('ILP', 'sterlina israeliana'),
    'ILS' => new C('ILS', 'nuovo siclo israeliano', '₪', narrow: '₪', plurals: ['one' => 'nuovo siclo israeliano', 'other' => 'nuovi sicli israeliani']),
    'INR' => new C('INR', 'rupia indiana', narrow: '₹', plurals: ['one' => 'rupia indiana', 'other' => 'rupie indiane']),
    'IQD' => new C('IQD', 'dinaro iracheno', plurals: ['one' => 'dinaro iracheno', 'other' => 'dinari iracheni'], minorUnits: 3),
    'IRR' => new C('IRR', 'rial iraniano', plurals: ['one' => 'rial iraniano', 'other' => 'rial iraniani']),
    'ISK' => new C('ISK', 'corona islandese', narrow: 'kr', plurals: ['one' => 'corona islandese', 'other' => 'corone islandesi'], minorUnits: 0),
    'ITL' => new C('ITL', 'lira italiana', plurals: ['one' => 'lire italiane', 'other' => 'lire italiane']),
    'JMD' => new C('JMD', 'dollaro giamaicano', narrow: '$', plurals: ['one' => 'dollaro giamaicano', 'other' => 'dollari giamaicani']),
    'JOD' => new C('JOD', 'dinaro giordano', plurals: ['one' => 'dinaro giordano', 'other' => 'dinari giordani'], minorUnits: 3),
    'JPY' => new C('JPY', 'yen giapponese', narrow: '¥', plurals: ['one' => 'yen giapponese', 'other' => 'yen giapponesi'], minorUnits: 0),
    'KES' => new C('KES', 'scellino keniota', plurals: ['one' => 'scellino keniota', 'other' => 'scellini kenioti']),
    'KGS' => new C('KGS', 'som kirghiso', plurals: ['one' => 'som kirghiso', 'other' => 'som kirghisi']),
    'KHR' => new C('KHR', 'riel cambogiano', narrow: '៛', plurals: ['one' => 'riel cambogiano', 'other' => 'riel cambogiani']),
    'KMF' => new C('KMF', 'franco comoriano', narrow: 'CF', plurals: ['one' => 'franco comoriano', 'other' => 'franchi comoriani'], minorUnits: 0),
    'KPW' => new C('KPW', 'won nordcoreano', narrow: '₩', plurals: ['one' => 'won nordcoreano', 'other' => 'won nordcoreani']),
    'KRW' => new C('KRW', 'won sudcoreano', narrow: '₩', plurals: ['one' => 'won sudcoreano', 'other' => 'won sudcoreani'], minorUnits: 0),
    'KWD' => new C('KWD', 'dinaro kuwaitiano', plurals: ['one' => 'dinaro kuwaitiano', 'other' => 'dinari kuwaitiani'], minorUnits: 3),
    'KYD' => new C('KYD', 'dollaro delle Isole Cayman', narrow: '$', plurals: ['one' => 'dollaro delle Isole Cayman', 'other' => 'dollari delle Isole Cayman']),
    'KZT' => new C('KZT', 'tenge kazako', narrow: '₸', plurals: ['one' => 'tenge kazako', 'other' => 'tenge kazaki']),
    'LAK' => new C('LAK', 'kip laotiano', narrow: '₭', plurals: ['one' => 'kip laotiano', 'other' => 'kip laotiani']),
    'LBP' => new C('LBP', 'lira libanese', narrow: 'L£', plurals: ['one' => 'lira libanese', 'other' => 'lire libanesi']),
    'LKR' => new C('LKR', 'rupia di Sri Lanka', narrow: 'Rs', plurals: ['one' => 'rupia di Sri Lanka', 'other' => 'rupie di Sri Lanka']),
    'LRD' => new C('LRD', 'dollaro liberiano', narrow: '$', plurals: ['one' => 'dollaro liberiano', 'other' => 'dollari liberiani']),
    'LSL' => new C('LSL', 'loti del Lesotho', plurals: ['one' => 'loti del Lesotho', 'other' => 'maloti del Lesotho']),
    'LTL' => new C('LTL', 'litas lituano', narrow: 'Lt', plurals: ['one' => 'litas lituano', 'other' => 'litas lituani']),
    'LTT' => new C('LTT', 'talonas lituani'),
    'LUC' => new C('LUC', 'franco convertibile del Lussemburgo'),
    'LUF' => new C('LUF', 'franco del Lussemburgo'),
    'LUL' => new C('LUL', 'franco finanziario del Lussemburgo'),
    'LVL' => new C('LVL', 'lats lettone', narrow: 'Ls', plurals: ['one' => 'lats lettone', 'other' => 'lati lettoni']),
    'LVR' => new C('LVR', 'rublo lettone'),
    'LYD' => new C('LYD', 'dinaro libico', plurals: ['one' => 'dinaro libico', 'other' => 'dinari libici'], minorUnits: 3),
    'MAD' => new C('MAD', 'dirham marocchino', plurals: ['one' => 'dirham marocchino', 'other' => 'dirham marocchini']),
    'MAF' => new C('MAF', 'franco marocchino'),
    'MDL' => new C('MDL', 'leu moldavo', plurals: ['one' => 'leu moldavo', 'other' => 'lei moldavi']),
    'MGA' => new C('MGA', 'ariary malgascio', narrow: 'Ar', plurals: ['one' => 'ariary malgascio', 'other' => 'ariary malgasci']),
    'MGF' => new C('MGF', 'franco malgascio'),
    'MKD' => new C('MKD', 'dinaro macedone', plurals: ['one' => 'dinaro macedone', 'other' => 'dinari macedoni']),
    'MKN' => new C('MKN', 'dinaro macedone (1992–1993)', plurals: ['one' => 'dinaro macedone (1992–1993)', 'other' => 'dinari macedoni (1992–1993)']),
    'MLF' => new C('MLF', 'franco di Mali'),
    'MMK' => new C('MMK', 'kyat di Myanmar', narrow: 'K', plurals: ['one' => 'kyat di Myanmar', 'other' => 'kyat di Myanmar']),
    'MNT' => new C('MNT', 'tugrik mongolo', narrow: '₮', plurals: ['one' => 'tugrik mongolo', 'other' => 'tugrik mongoli']),
    'MOP' => new C('MOP', 'pataca di Macao', plurals: ['one' => 'pataca di Macao', 'other' => 'patacas di Macao']),
    'MRO' => new C('MRO', 'ouguiya della Mauritania (1973–2017)', plurals: ['one' => 'ouguiya della Mauritania (1973–2017)', 'other' => 'ouguiya della Mauritania (1973–2017)']),
    'MRU' => new C('MRU', 'ouguiya della Mauritania', plurals: ['one' => 'ouguiya della Mauritania', 'other' => 'ouguiya della Mauritania']),
    'MTL' => new C('MTL', 'lira maltese'),
    'MTP' => new C('MTP', 'sterlina maltese'),
    'MUR' => new C('MUR', 'rupia mauriziana', narrow: 'Rs', plurals: ['one' => 'rupia mauriziana', 'other' => 'rupie mauriziane']),
    'MVR' => new C('MVR', 'rufiyaa delle Maldive', plurals: ['one' => 'rufiyaa delle Maldive', 'other' => 'rufiyaa delle Maldive']),
    'MWK' => new C('MWK', 'kwacha malawiano', plurals: ['one' => 'kwacha malawiano', 'other' => 'kwacha malawiani']),
    'MXN' => new C('MXN', 'peso messicano', narrow: '$', plurals: ['one' => 'peso messicano', 'other' => 'pesos messicani']),
    'MXP' => new C('MXP', 'peso messicano d’argento (1861–1992)'),
    'MXV' => new C('MXV', 'unidad de inversion (UDI) messicana'),
    'MYR' => new C('MYR', 'ringgit malese', narrow: 'RM', plurals: ['one' => 'ringgit malese', 'other' => 'ringgit malesi']),
    'MZE' => new C('MZE', 'escudo del Mozambico'),
    'MZN' => new C('MZN', 'metical mozambicano', plurals: ['one' => 'metical mozambicano', 'other' => 'metical mozambicani']),
    'NAD' => new C('NAD', 'dollaro namibiano', narrow: '$', plurals: ['one' => 'dollaro namibiano', 'other' => 'dollari namibiani']),
    'NGN' => new C('NGN', 'naira nigeriana', narrow: '₦', plurals: ['one' => 'naira nigeriana', 'other' => 'naire nigeriane']),
    'NIC' => new C('NIC', 'cordoba nicaraguense', plurals: ['one' => 'cordoba nicaraguense', 'other' => 'cordoba nicaraguense']),
    'NIO' => new C('NIO', 'córdoba nicaraguense', narrow: 'C$', plurals: ['one' => 'córdoba nicaraguense', 'other' => 'córdoba nicaraguensi']),
    'NLG' => new C('NLG', 'fiorino olandese'),
    'NOK' => new C('NOK', 'corona norvegese', narrow: 'NKr', plurals: ['one' => 'corona norvegese', 'other' => 'corone norvegesi']),
    'NPR' => new C('NPR', 'rupia nepalese', narrow: 'Rs', plurals: ['one' => 'rupia nepalese', 'other' => 'rupie nepalesi']),
    'NZD' => new C('NZD', 'dollaro neozelandese', 'NZ$', narrow: '$', plurals: ['one' => 'dollaro neozelandese', 'other' => 'dollari neozelandesi']),
    'OMR' => new C('OMR', 'rial omanita', plurals: ['one' => 'rial omanita', 'other' => 'rial omaniti'], minorUnits: 3),
    'PAB' => new C('PAB', 'balboa panamense', plurals: ['one' => 'balboa panamense', 'other' => 'balboa panamensi']),
    'PEI' => new C('PEI', 'inti peruviano'),
    'PEN' => new C('PEN', 'sol peruviano', plurals: ['one' => 'sol peruviano', 'other' => 'sol peruviani']),
    'PES' => new C('PES', 'sol peruviano (1863–1965)'),
    'PGK' => new C('PGK', 'kina papuana', plurals: ['one' => 'kina papuana', 'other' => 'kina papuane']),
    'PHP' => new C('PHP', 'peso filippino', '₱', narrow: '₱', plurals: ['one' => 'peso filippino', 'other' => 'pesos filippini']),
    'PKR' => new C('PKR', 'rupia pakistana', narrow: 'Rs', plurals: ['one' => 'rupia pakistana', 'other' => 'rupie pakistane']),
    'PLN' => new C('PLN', 'zloty polacco', narrow: 'zł', plurals: ['one' => 'zloty polacco', 'other' => 'zloty polacchi']),
    'PLZ' => new C('PLZ', 'złoty Polacco (1950–1995)', plurals: ['one' => 'złoty polacco (1950–1995)', 'other' => 'złoty polacchi (1950–1995)']),
    'PTE' => new C('PTE', 'escudo portoghese'),
    'PYG' => new C('PYG', 'guaraní paraguayano', narrow: '₲', plurals: ['one' => 'guaraní paraguayano', 'other' => 'guaraní paraguayani'], minorUnits: 0),
    'QAR' => new C('QAR', 'rial qatariano', plurals: ['one' => 'rial qatariano', 'other' => 'rial qatariani']),
    'RHD' => new C('RHD', 'dollaro della Rhodesia'),
    'ROL' => new C('ROL', 'leu della Romania'),
    'RON' => new C('RON', 'leu rumeno', narrow: 'lei', plurals: ['one' => 'leu rumeno', 'other' => 'lei rumeni']),
    'RSD' => new C('RSD', 'dinaro serbo', plurals: ['one' => 'dinaro serbo', 'other' => 'dinara serbi']),
    'RUB' => new C('RUB', 'rublo russo', narrow: '₽', plurals: ['one' => 'rublo russo', 'other' => 'rubli russi']),
    'RUR' => new C('RUR', 'rublo della CSI'),
    'RWF' => new C('RWF', 'franco ruandese', narrow: 'RF', plurals: ['one' => 'franco ruandese', 'other' => 'franchi ruandesi'], minorUnits: 0),
    'SAR' => new C('SAR', 'riyal saudita', plurals: ['one' => 'riyal saudita', 'other' => 'riyal sauditi']),
    'SBD' => new C('SBD', 'dollaro delle Isole Salomone', narrow: '$', plurals: ['one' => 'dollaro delle Isole Salomone', 'other' => 'dollari delle Isole Salomone']),
    'SCR' => new C('SCR', 'rupia delle Seychelles', plurals: ['one' => 'rupia delle Seychelles', 'other' => 'rupie delle Seychelles']),
    'SDD' => new C('SDD', 'dinaro sudanese'),
    'SDG' => new C('SDG', 'sterlina sudanese', plurals: ['one' => 'sterlina sudanese', 'other' => 'sterline sudanesi']),
    'SEK' => new C('SEK', 'corona svedese', narrow: 'kr', plurals: ['one' => 'corona svedese', 'other' => 'corone svedesi']),
    'SGD' => new C('SGD', 'dollaro di Singapore', narrow: '$', plurals: ['one' => 'dollaro di Singapore', 'other' => 'dollari di Singapore']),
    'SHP' => new C('SHP', 'sterlina di Sant’Elena', narrow: '£', plurals: ['one' => 'sterlina di Sant’Elena', 'other' => 'sterline di Sant’Elena']),
    'SIT' => new C('SIT', 'tallero sloveno'),
    'SKK' => new C('SKK', 'corona slovacca'),
    'SLL' => new C('SLL', 'leone della Sierra Leone', plurals: ['one' => 'leone della Sierra Leone', 'other' => 'leoni della Sierra Leone']),
    'SOS' => new C('SOS', 'scellino somalo', plurals: ['one' => 'scellino somalo', 'other' => 'scellini somali']),
    'SRD' => new C('SRD', 'dollaro del Suriname', narrow: '$', plurals: ['one' => 'dollaro del Suriname', 'other' => 'dollari del Suriname']),
    'SRG' => new C('SRG', 'fiorino del Suriname'),
    'SSP' => new C('SSP', 'sterlina sud-sudanese', narrow: '£', plurals: ['one' => 'sterlina sud-sudanese', 'other' => 'sterline sud-sudanesi']),
    'STD' => new C('STD', 'dobra di Sao Tomé e Principe (1977–2017)', plurals: ['one' => 'dobra di Sao Tomé e Principe (1977–2017)', 'other' => 'dobra di Sao Tomé e Principe (1977–2017)']),
    'STN' => new C('STN', 'dobra di Sao Tomé e Príncipe', narrow: 'Db', plurals: ['one' => 'dobra di Sao Tomé e Príncipe', 'other' => 'dobra di Sao Tomé e Príncipe']),
    'SUR' => new C('SUR', 'rublo sovietico'),
    'SVC' => new C('SVC', 'colón salvadoregno'),
    'SYP' => new C('SYP', 'lira siriana', narrow: '£', plurals: ['one' => 'lira siriana', 'other' => 'lire siriane']),
    'SZL' => new C('SZL', 'lilangeni dello Swaziland', plurals: ['one' => 'lilangeni dello Swaziland', 'other' => 'lilangeni dello Swaziland']),
    'THB' => new C('THB', 'baht thailandese', '฿', narrow: '฿', plurals: ['one' => 'baht thailandese', 'other' => 'baht thailandesi']),
    'TJR' => new C('TJR', 'rublo del Tajikistan'),
    'TJS' => new C('TJS', 'somoni tagiko', plurals: ['one' => 'somoni tagiko', 'other' => 'somoni tagiki']),
    'TMM' => new C('TMM', 'manat turkmeno (1993–2009)'),
    'TMT' => new C('TMT', 'manat turkmeno', plurals: ['one' => 'manat turkmeno', 'other' => 'manat turkmeni']),
    'TND' => new C('TND', 'dinaro tunisino', plurals: ['one' => 'dinaro tunisino', 'other' => 'dinari tunisini'], minorUnits: 3),
    'TOP' => new C('TOP', 'paʻanga tongano', narrow: 'T$', plurals: ['one' => 'paʻanga tongano', 'other' => 'paʻanga tongani']),
    'TPE' => new C('TPE', 'escudo di Timor'),
    'TRL' => new C('TRL', 'lira turca (1922–2005)', plurals: ['one' => 'lira turca (1922–2005)', 'other' => 'lire turche (1922–2005)']),
    'TRY' => new C('TRY', 'lira turca', narrow: '₺', plurals: ['one' => 'lira turca', 'other' => 'lire turche']),
    'TTD' => new C('TTD', 'dollaro di Trinidad e Tobago', narrow: '$', plurals: ['one' => 'dollaro di Trinidad e Tobago', 'other' => 'dollari di Trinidad e Tobago']),
    'TWD' => new C('TWD', 'nuovo dollaro taiwanese', narrow: 'NT$', plurals: ['one' => 'nuovo dollaro taiwanese', 'other' => 'nuovi dollari taiwanesi']),
    'TZS' => new C('TZS', 'scellino della Tanzania', plurals: ['one' => 'scellino della Tanzania', 'other' => 'scellini della Tanzania']),
    'UAH' => new C('UAH', 'grivnia ucraina', narrow: '₴', plurals: ['one' => 'grivnia ucraina', 'other' => 'grivnie ucraine']),
    'UAK' => new C('UAK', 'karbovanetz ucraino'),
    'UGS' => new C('UGS', 'scellino ugandese (1966–1987)'),
    'UGX' => new C('UGX', 'scellino ugandese', plurals: ['one' => 'scellino ugandese', 'other' => 'scellini ugandesi'], minorUnits: 0),
    'USD' => new C('USD', 'dollaro statunitense', narrow: '$', plurals: ['one' => 'dollaro statunitense', 'other' => 'dollari statunitensi']),
    'USN' => new C('USN', 'dollaro statunitense (next day)'),
    'USS' => new C('USS', 'dollaro statunitense (same day)'),
    'UYI' => new C('UYI', 'peso uruguaiano in unità indicizzate', minorUnits: 0),
    'UYP' => new C('UYP', 'peso uruguaiano (1975–1993)'),
    'UYU' => new C('UYU', 'peso uruguayano', narrow: '$', plurals: ['one' => 'peso uruguayano', 'other' => 'pesos uruguayani']),
    'UZS' => new C('UZS', 'sum uzbeco', plurals: ['one' => 'sum uzbeco', 'other' => 'sum uzbechi']),
    'VEB' => new C('VEB', 'bolivar venezuelano (1871–2008)', plurals: ['one' => 'bolivar venezuelano (1871–2008)', 'other' => 'bolivares venezuelani (1871–2008)']),
    'VEF' => new C('VEF', 'bolívar venezuelano (2008–2018)', narrow: 'Bs', plurals: ['one' => 'bolívar venezuelano (2008–2018)', 'other' => 'bolívares venezuelani (2008–2018)']),
    'VES' => new C('VES', 'bolívar venezuelano', plurals: ['one' => 'bolívar venezuelano', 'other' => 'bolívares venezuelani']),
    'VND' => new C('VND', 'dong vietnamita', narrow: '₫', plurals: ['one' => 'dong vietnamita', 'other' => 'dong vietnamiti'], minorUnits: 0),
    'VUV' => new C('VUV', 'vatu di Vanuatu', plurals: ['one' => 'vatu di Vanuatu', 'other' => 'vatu di Vanuatu'], minorUnits: 0),
    'WST' => new C('WST', 'tala samoano', plurals: ['one' => 'tala samoano', 'other' => 'tala samoani']),
    'XAF' => new C('XAF', 'franco CFA BEAC', 'FCFA', plurals: ['one' => 'franco CFA BEAC', 'other' => 'franchi CFA BEAC'], minorUnits: 0),
    'XAG' => new C('XAG', 'argento'),
    'XAU' => new C('XAU', 'oro'),
    'XBA' => new C('XBA', 'unità composita europea'),
    'XBB' => new C('XBB', 'unità monetaria europea'),
    'XBC' => new C('XBC', 'unità di acconto europea (XBC)'),
    'XBD' => new C('XBD', 'unità di acconto europea (XBD)'),
    'XCD' => new C('XCD', 'dollaro dei Caraibi orientali', 'EC$', narrow: '$', plurals: ['one' => 'dollaro dei Caraibi orientali', 'other' => 'dollari dei Caraibi orientali']),
    'XDR' => new C('XDR', 'diritti speciali di incasso'),
    'XFO' => new C('XFO', 'franco oro francese'),
    'XFU' => new C('XFU', 'franco UIC francese'),
    'XOF' => new C('XOF', 'franco CFA BCEAO', "F\u{202F}CFA", plurals: ['one' => 'franco CFA BCEAO', 'other' => 'franchi CFA BCEAO'], minorUnits: 0),
    'XPD' => new C('XPD', 'palladio'),
    'XPF' => new C('XPF', 'franco CFP', 'CFPF', plurals: ['one' => 'franco CFP', 'other' => 'franchi CFP'], minorUnits: 0),
    'XPT' => new C('XPT', 'platino'),
    'XRE' => new C('XRE', 'fondi RINET'),
    'XTS' => new C('XTS', 'codice di verifica della valuta'),
    'XXX' => new C('XXX', 'valuta sconosciuta', '¤', plurals: ['one' => '(valuta sconosciuta)', 'other' => '(valute sconosciute)']),
    'YDD' => new C('YDD', 'dinaro dello Yemen'),
    'YER' => new C('YER', 'riyal yemenita', plurals: ['one' => 'rial yemenita', 'other' => 'rial yemeniti']),
    'YUD' => new C('YUD', 'dinaro forte yugoslavo'),
    'YUM' => new C('YUM', 'dinaro noviy yugoslavo'),
    'YUN' => new C('YUN', 'dinaro convertibile yugoslavo'),
    'ZAL' => new C('ZAL', 'rand sudafricano (finanziario)'),
    'ZAR' => new C('ZAR', 'rand sudafricano', narrow: 'R', plurals: ['one' => 'rand sudafricano', 'other' => 'rand sudafricani']),
    'ZMK' => new C('ZMK', 'kwacha dello Zambia (1968–2012)', plurals: ['one' => 'kwacha zambiano (1968–2012)', 'other' => 'kwacha zambiani (1968–2012)']),
    'ZMW' => new C('ZMW', 'kwacha zambiano', narrow: 'ZK', plurals: ['one' => 'kwacha zambiano', 'other' => 'kwacha zambiani']),
    'ZRN' => new C('ZRN', 'nuovo zaire dello Zaire'),
    'ZRZ' => new C('ZRZ', 'zaire dello Zaire'),
    'ZWD' => new C('ZWD', 'dollaro dello Zimbabwe'),
    'ZWL' => new C('ZWL', 'dollaro zimbabwiano (2009)'),
];
