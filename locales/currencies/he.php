<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'ADP' => new C('ADP', 'פזטה אנדורית'),
    'AED' => new C('AED', 'דירהם של איחוד הנסיכויות הערביות', plurals: ['other' => 'דירהם של איחוד הנסיכויות הערביות']),
    'AFN' => new C('AFN', 'אפגני אפגני', narrow: '؋', plurals: ['other' => 'אפגני אפגני']),
    'ALL' => new C('ALL', 'לק אלבני', plurals: ['other' => 'לק אלבני']),
    'AMD' => new C('AMD', 'דראם ארמני', narrow: '֏', plurals: ['other' => 'דראם ארמני']),
    'ANG' => new C('ANG', 'גילדר של האנטילים ההולנדיים', plurals: ['other' => 'גילדר של האנטילים ההולנדיים']),
    'AOA' => new C('AOA', 'קואנזה אנגולי', narrow: 'Kz', plurals: ['other' => 'קואנזה אנגולי']),
    'AON' => new C('AON', 'קואנזה חדש אנגולי (1990–2000)'),
    'AOR' => new C('AOR', 'קואנזה רג׳וסטדו אנגולי (1995–1999)'),
    'ARP' => new C('ARP', 'פזו ארגנטינאי (1983–1985)'),
    'ARS' => new C('ARS', 'פסו ארגנטינאי', narrow: '$', plurals: ['other' => 'פסו ארגנטינאי']),
    'ATS' => new C('ATS', 'שילינג אוסטרי'),
    'AUD' => new C('AUD', 'דולר אוסטרלי', 'A$', narrow: '$', plurals: ['other' => 'דולר אוסטרלי']),
    'AWG' => new C('AWG', 'פלורין של ארובה', plurals: ['other' => 'פלורין של ארובה']),
    'AZM' => new C('AZM', 'מנאט אזרביג׳אני (1993–2006)'),
    'AZN' => new C('AZN', 'מאנאט אזרבייג׳ני', narrow: '₼', plurals: ['other' => 'מאנאט אזרבייג׳ני']),
    'BAD' => new C('BAD', 'דינר של בוסניה־הרצגובינה'),
    'BAM' => new C('BAM', 'מארק סחיר של בוסניה והרצגובינה', narrow: 'KM', plurals: ['other' => 'מארק סחיר של בוסניה והרצגובינה']),
    'BBD' => new C('BBD', 'דולר ברבדיאני', narrow: '$', plurals: ['other' => 'דולר ברבדיאני']),
    'BDT' => new C('BDT', 'טאקה בנגלדשי', narrow: '৳', plurals: ['other' => 'טאקה בנגלדשי']),
    'BEC' => new C('BEC', 'פרנק בלגי (בר המרה)'),
    'BEF' => new C('BEF', 'פרנק בלגי'),
    'BGL' => new C('BGL', 'לב בולגרי ישן'),
    'BGN' => new C('BGN', 'לב בולגרי', plurals: ['other' => 'לב בולגרי']),
    'BHD' => new C('BHD', 'דינר בחרייני', plurals: ['other' => 'דינר בחרייני'], minorUnits: 3),
    'BIF' => new C('BIF', 'פרנק בורונדי', plurals: ['other' => 'פרנק בורונדי'], minorUnits: 0),
    'BMD' => new C('BMD', 'דולר ברמודה', narrow: '$', plurals: ['other' => 'דולר ברמודה']),
    'BND' => new C('BND', 'דולר ברוניי', narrow: '$', plurals: ['other' => 'דולר ברוניי']),
    'BOB' => new C('BOB', 'בוליביאנו', narrow: 'Bs', plurals: ['other' => 'בוליביאנו']),
    'BOP' => new C('BOP', 'פזו בוליבי'),
    'BRB' => new C('BRB', 'קרוזיארו חדש ברזילאי (1967–1986)'),
    'BRC' => new C('BRC', 'קרוזדו ברזילאי'),
    'BRL' => new C('BRL', 'ריאל ברזילאי', 'R$', narrow: 'R$', plurals: ['other' => 'ריאל ברזילאי']),
    'BSD' => new C('BSD', 'דולר בהאמי', narrow: '$', plurals: ['other' => 'דולר בהאמי']),
    'BTN' => new C('BTN', 'נגולטרום בהוטני', plurals: ['other' => 'נגולטרום בהוטני']),
    'BWP' => new C('BWP', 'פולה בוטסואני', narrow: 'P', plurals: ['other' => 'פולה בוטסואני']),
    'BYN' => new C('BYN', 'רובל בלרוסי', narrow: 'р', plurals: ['other' => 'רובל בלרוסי']),
    'BYR' => new C('BYR', 'רובל בלרוסי (2000–2016)', plurals: ['other' => 'רובל בלרוסי (2000–2016)']),
    'BZD' => new C('BZD', 'דולר בליזי', narrow: '$', plurals: ['other' => 'דולר בליזי']),
    'CAD' => new C('CAD', 'דולר קנדי', 'CA$', narrow: '$', plurals: ['other' => 'דולר קנדי']),
    'CDF' => new C('CDF', 'פרנק קונגולזי', plurals: ['other' => 'פרנק קונגולזי']),
    'CHF' => new C('CHF', 'פרנק שוויצרי', plurals: ['other' => 'פרנק שוויצרי']),
    'CLP' => new C('CLP', 'פסו צ׳ילאני', narrow: '$', plurals: ['other' => 'פסו צ׳ילאני'], minorUnits: 0),
    'CNH' => new C('CNH', 'יואן סיני (CNH)', plurals: ['other' => 'יואן סיני (CNH)']),
    'CNY' => new C('CNY', 'יואן סיני', "\u{200E}CN¥\u{200E}", narrow: '¥', plurals: ['other' => 'יואן סיני']),
    'COP' => new C('COP', 'פסו קולומביאני', narrow: '$', plurals: ['other' => 'פסו קולומביאני']),
    'CRC' => new C('CRC', 'קולון קוסטה־ריקני', narrow: '₡', plurals: ['other' => 'קולון קוסטה־ריקני']),
    'CSD' => new C('CSD', 'דינר סרבי ישן'),
    'CUC' => new C('CUC', 'פסו קובני להמרה', narrow: '$', plurals: ['other' => 'פסו קובני להמרה']),
    'CUP' => new C('CUP', 'פסו קובני', narrow: '$', plurals: ['other' => 'פסו קובני']),
    'CVE' => new C('CVE', 'אסקודו כף ורדה', plurals: ['other' => 'אסקודו כף ורדה']),
    'CYP' => new C('CYP', 'לירה קפריסאית'),
    'CZK' => new C('CZK', 'קורונה צ׳כית', narrow: 'Kč', plurals: ['other' => 'קורונה צ׳כית']),
    'DDM' => new C('DDM', 'מרק מזרח גרמני'),
    'DEM' => new C('DEM', 'מרק גרמני'),
    'DJF' => new C('DJF', 'פרנק ג׳יבוטי', plurals: ['other' => 'פרנק ג׳יבוטי'], minorUnits: 0),
    'DKK' => new C('DKK', 'כתר דני', narrow: 'kr', plurals: ['other' => 'כתר דני']),
    'DOP' => new C('DOP', 'פסו דומיניקני', narrow: '$', plurals: ['other' => 'פסו דומיניקני']),
    'DZD' => new C('DZD', 'דינר אלג׳ירי', plurals: ['other' => 'דינר אלג׳ירי']),
    'ECS' => new C('ECS', 'סוקר אקואדורי'),
    'EEK' => new C('EEK', 'קרון אסטוני'),
    'EGP' => new C('EGP', 'לירה מצרית', narrow: 'E£', plurals: ['other' => 'לירה מצרית']),
    'ERN' => new C('ERN', 'נאקפה אריתראי', plurals: ['other' => 'נאקפה אריתראי']),
    'ESP' => new C('ESP', 'פסטה ספרדי', narrow: '₧'),
    'ETB' => new C('ETB', 'ביר אתיופי', plurals: ['other' => 'ביר אתיופי']),
    'EUR' => new C('EUR', 'אירו', '€', narrow: '€', plurals: ['other' => 'אירו']),
    'FIM' => new C('FIM', 'מרק פיני'),
    'FJD' => new C('FJD', 'דולר פיג׳י', narrow: '$', plurals: ['other' => 'דולר פיג׳י']),
    'FKP' => new C('FKP', 'לירה של איי פוקלנד', narrow: '£', plurals: ['other' => 'לירה של איי פוקלנד']),
    'FRF' => new C('FRF', 'פרנק צרפתי'),
    'GBP' => new C('GBP', 'לירה שטרלינג', '£', narrow: '£', plurals: ['other' => 'לירה שטרלינג']),
    'GEL' => new C('GEL', 'לארי גאורגי', narrow: '₾', plurals: ['other' => 'לארי גאורגי']),
    'GHS' => new C('GHS', 'סדי גאני', narrow: 'GH₵', plurals: ['other' => 'סדי גאני']),
    'GIP' => new C('GIP', 'פאונד גיברלטר', narrow: '£', plurals: ['other' => 'פאונד גיברלטר']),
    'GMD' => new C('GMD', 'דלסי גמבי', plurals: ['other' => 'דלסי גמבי']),
    'GNF' => new C('GNF', 'פרנק גינאי', narrow: 'FG', plurals: ['other' => 'פרנק גינאי'], minorUnits: 0),
    'GRD' => new C('GRD', 'דרכמה'),
    'GTQ' => new C('GTQ', 'קצאל גואטמלי', narrow: 'Q', plurals: ['other' => 'קצאל גואטמלי']),
    'GWP' => new C('GWP', 'פזו גינאי'),
    'GYD' => new C('GYD', 'דולר גיאני', narrow: '$', plurals: ['other' => 'דולר גיאני']),
    'HKD' => new C('HKD', 'דולר הונג קונגי', 'HK$', narrow: '$', plurals: ['other' => 'דולר הונג קונגי']),
    'HNL' => new C('HNL', 'למפירה הונדורי', narrow: 'L', plurals: ['other' => 'למפירה הונדורי']),
    'HRK' => new C('HRK', 'קונה קרואטי', narrow: 'kn', plurals: ['other' => 'קונה קרואטי']),
    'HTG' => new C('HTG', 'גורד האיטי', plurals: ['other' => 'גורד האיטי']),
    'HUF' => new C('HUF', 'פורינט הונגרי', narrow: 'Ft', plurals: ['other' => 'פורינט הונגרי']),
    'IDR' => new C('IDR', 'רופיה אינדונזית', narrow: 'Rp', plurals: ['one' => 'רופיה אינדונזית', 'other' => 'רופיות אינדונזיות']),
    'IEP' => new C('IEP', 'לירה אירית'),
    'ILP' => new C('ILP', 'לירה ישראלית', 'ל״י'),
    'ILS' => new C('ILS', 'שקל חדש', '₪', narrow: '₪', plurals: ['one' => 'שקל חדש', 'other' => 'שקלים חדשים']),
    'INR' => new C('INR', 'רופי הודי', '₹', narrow: '₹', plurals: ['other' => 'רופי הודי']),
    'IQD' => new C('IQD', 'דינר עיראקי', plurals: ['other' => 'דינר עיראקי'], minorUnits: 3),
    'IRR' => new C('IRR', 'ריאל איראני', plurals: ['other' => 'ריאל איראני']),
    'ISK' => new C('ISK', 'כתר איסלנדי', narrow: 'kr', plurals: ['other' => 'כתר איסלנדי'], minorUnits: 0),
    'ITL' => new C('ITL', 'לירה איטלקית'),
    'JMD' => new C('JMD', 'דולר ג׳מייקני', narrow: '$', plurals: ['other' => 'דולר ג׳מייקני']),
    'JOD' => new C('JOD', 'דינר ירדני', plurals: ['other' => 'דינר ירדני'], minorUnits: 3),
    'JPY' => new C('JPY', 'ין יפני', '¥', narrow: '¥', plurals: ['other' => 'ין יפני'], minorUnits: 0),
    'KES' => new C('KES', 'שילינג קנייתי', plurals: ['other' => 'שילינג קנייתי']),
    'KGS' => new C('KGS', 'סום קירגיזי', plurals: ['other' => 'סום קירגיזי']),
    'KHR' => new C('KHR', 'ריל קמבודי', narrow: '៛', plurals: ['other' => 'ריל קמבודי']),
    'KMF' => new C('KMF', 'פרנק קומורואי', narrow: 'CF', plurals: ['other' => 'פרנק קומורואי'], minorUnits: 0),
    'KPW' => new C('KPW', 'וון צפון קוריאני', narrow: '₩', plurals: ['other' => 'וון צפון קוריאני']),
    'KRW' => new C('KRW', 'וון דרום קוריאני', '₩', narrow: '₩', plurals: ['other' => 'וון דרום קוריאני'], minorUnits: 0),
    'KWD' => new C('KWD', 'דינר כוויתי', plurals: ['other' => 'דינר כוויתי'], minorUnits: 3),
    'KYD' => new C('KYD', 'דולר קיימני', narrow: '$', plurals: ['other' => 'דולר קיימני']),
    'KZT' => new C('KZT', 'טנגה קזחסטני', narrow: '₸', plurals: ['other' => 'טנגה קזחסטני']),
    'LAK' => new C('LAK', 'קיפ לאי', narrow: '₭', plurals: ['other' => 'קיפ לאי']),
    'LBP' => new C('LBP', 'לירה לבנונית', narrow: 'L£', plurals: ['one' => 'לירה לבנונית', 'other' => 'לירות לבנוניות']),
    'LKR' => new C('LKR', 'רופי סרי לנקי', narrow: 'Rs', plurals: ['other' => 'רופי סרי לנקי']),
    'LRD' => new C('LRD', 'דולר ליברי', narrow: '$', plurals: ['other' => 'דולר ליברי']),
    'LSL' => new C('LSL', 'לוטי לסותי', plurals: ['other' => 'לוטי לסותי']),
    'LTL' => new C('LTL', 'ליטא ליטאי', narrow: 'Lt', plurals: ['other' => 'ליטא ליטאי']),
    'LUF' => new C('LUF', 'פרנק לוקסמבורגי'),
    'LVL' => new C('LVL', 'לט לטבי', narrow: 'Ls'),
    'LYD' => new C('LYD', 'דינר לובי', plurals: ['other' => 'דינר לובי'], minorUnits: 3),
    'MAD' => new C('MAD', 'דירהם מרוקאי', plurals: ['other' => 'דירהם מרוקאי']),
    'MAF' => new C('MAF', 'פרנק מרוקאי'),
    'MDL' => new C('MDL', 'לאו מולדובני', plurals: ['other' => 'לאו מולדובני']),
    'MGA' => new C('MGA', 'אריארי מלגשי', narrow: 'Ar', plurals: ['other' => 'אריארי מלגשי']),
    'MGF' => new C('MGF', 'פרנק מדגסקארי'),
    'MKD' => new C('MKD', 'דינר מקדוני', plurals: ['other' => 'דינר מקדוני']),
    'MMK' => new C('MMK', 'קיאט מיאנמרי', narrow: 'K', plurals: ['other' => 'קיאט מיאנמרי']),
    'MNT' => new C('MNT', 'טוגרוג מונגולי', narrow: '₮', plurals: ['other' => 'טוגרוג מונגולי']),
    'MOP' => new C('MOP', 'פטקה של מקאו', plurals: ['other' => 'פטקה של מקאו']),
    'MRO' => new C('MRO', 'אואוגויה מאוריטני (1973–2017)', plurals: ['other' => 'אואוגויה מאוריטני (1973–2017)']),
    'MRU' => new C('MRU', 'אואוגויה מאוריטני', plurals: ['other' => 'אואוגויה מאוריטני']),
    'MTL' => new C('MTL', 'לירה מלטית'),
    'MUR' => new C('MUR', 'רופי מאוריציני', narrow: 'Rs', plurals: ['other' => 'רופי מאוריציני']),
    'MVR' => new C('MVR', 'רופיה מלדיבית', plurals: ['one' => 'רופיה מלדיבית', 'other' => 'רופיות מלדיביות']),
    'MWK' => new C('MWK', 'קואצ׳ה מלאווי', plurals: ['other' => 'קואצ׳ה מלאווי']),
    'MXN' => new C('MXN', 'פסו מקסיקני', 'MX$', narrow: '$', plurals: ['other' => 'פסו מקסיקני']),
    'MXP' => new C('MXP', 'פזו מקסיקני (1861 – 1992)', plurals: ['other' => 'פסו מקסיקני (1861 – 1992)']),
    'MXV' => new C('MXV', 'יחידת השקעות מקסיקנית', plurals: ['one' => 'יחידת השקעות מקסיקנית', 'other' => 'יחידות השקעות מקסיקניות']),
    'MYR' => new C('MYR', 'רינגיט מלזי', narrow: 'RM', plurals: ['other' => 'רינגיט מלזי']),
    'MZE' => new C('MZE', 'אסקודו מוזמביקי', plurals: ['one' => 'אסקודו מוזמביקי', 'many' => 'אסקודו מוזמביקי', 'other' => 'אסקודואים מוזמביקיים']),
    'MZM' => new C('MZM', 'מטיקל'),
    'MZN' => new C('MZN', 'מטיקל מוזמביני', plurals: ['other' => 'מטיקל מוזמביני']),
    'NAD' => new C('NAD', 'דולר נמיבי', narrow: '$', plurals: ['other' => 'דולר נמיבי']),
    'NGN' => new C('NGN', 'נאירה ניגרי', narrow: '₦', plurals: ['other' => 'נאירה ניגרי']),
    'NIC' => new C('NIC', 'קורדובה (1988–1991)', plurals: ['one' => 'קורדובה (1988–1991)', 'other' => 'קורדובות (1988–1991)']),
    'NIO' => new C('NIO', 'קורדובה ניקרגואה', narrow: 'C$', plurals: ['other' => 'קורדובה ניקרגואה']),
    'NLG' => new C('NLG', 'גילדן הולנדי'),
    'NOK' => new C('NOK', 'כתר נורווגי', narrow: 'kr', plurals: ['other' => 'כתר נורווגי']),
    'NPR' => new C('NPR', 'רופי נפאלי', narrow: 'Rs', plurals: ['other' => 'רופי נפאלי']),
    'NZD' => new C('NZD', 'דולר ניו זילנדי', 'NZ$', narrow: '$', plurals: ['other' => 'דולר ניו זילנדי']),
    'OMR' => new C('OMR', 'ריאל עומאני', plurals: ['other' => 'ריאל עומאני'], minorUnits: 3),
    'PAB' => new C('PAB', 'בלבואה פנמי', plurals: ['other' => 'בלבואה פנמי']),
    'PEN' => new C('PEN', 'סול פרואני', plurals: ['other' => 'סול פרואני']),
    'PGK' => new C('PGK', 'קינה של פפואה גינאה החדשה', plurals: ['other' => 'קינה של פפואה גינאה החדשה']),
    'PHP' => new C('PHP', 'פסו פיליפיני', narrow: '₱', plurals: ['other' => 'פסו פיליפיני']),
    'PKR' => new C('PKR', 'רופי פקיסטני', narrow: 'Rs', plurals: ['other' => 'רופי פקיסטני']),
    'PLN' => new C('PLN', 'זלוטי פולני', narrow: 'zł', plurals: ['other' => 'זלוטי פולני']),
    'PTE' => new C('PTE', 'אסקודו פורטוגלי'),
    'PYG' => new C('PYG', 'גוארני פרגוואי', narrow: '₲', plurals: ['other' => 'גוארני פרגוואי'], minorUnits: 0),
    'QAR' => new C('QAR', 'ריאל קטארי', plurals: ['other' => 'ריאל קטארי']),
    'ROL' => new C('ROL', 'לאו רומני ישן'),
    'RON' => new C('RON', 'לאו רומני', narrow: 'lei', plurals: ['other' => 'לאו רומני']),
    'RSD' => new C('RSD', 'דינר סרבי', plurals: ['other' => 'דינר סרבי']),
    'RUB' => new C('RUB', 'רובל רוסי', narrow: '₽', plurals: ['other' => 'רובל רוסי']),
    'RUR' => new C('RUR', 'רובל רוסי (1991 – 1998)'),
    'RWF' => new C('RWF', 'פרנק רואנדי', narrow: 'RF', plurals: ['other' => 'פרנק רואנדי'], minorUnits: 0),
    'SAR' => new C('SAR', 'ריאל סעודי', plurals: ['other' => 'ריאל סעודי']),
    'SBD' => new C('SBD', 'דולר איי שלמה', narrow: '$', plurals: ['other' => 'דולר איי שלמה']),
    'SCR' => new C('SCR', 'רופי סיישלי', plurals: ['other' => 'רופי סיישלי']),
    'SDD' => new C('SDD', 'דינר סודני'),
    'SDG' => new C('SDG', 'לירה סודנית', plurals: ['other' => 'לירה סודנית']),
    'SDP' => new C('SDP', 'לירה סודנית (1957–1998)'),
    'SEK' => new C('SEK', 'כתר שוודי', narrow: 'kr', plurals: ['other' => 'כתר שוודי']),
    'SGD' => new C('SGD', 'דולר סינגפורי', narrow: '$', plurals: ['other' => 'דולר סינגפורי']),
    'SHP' => new C('SHP', 'פאונד סנט הלני', narrow: '£', plurals: ['other' => 'פאונד סנט הלני']),
    'SIT' => new C('SIT', 'טולאר סלובני'),
    'SKK' => new C('SKK', 'קורונה סלובקי'),
    'SLL' => new C('SLL', 'ליאון סיירה לאוני', plurals: ['other' => 'ליאון סיירה לאוני']),
    'SOS' => new C('SOS', 'שילינג סומלי', plurals: ['other' => 'שילינג סומלי']),
    'SRD' => new C('SRD', 'דולר סורינאמי', narrow: '$', plurals: ['other' => 'דולר סורינאמי']),
    'SRG' => new C('SRG', 'גילדר סורינאמי'),
    'SSP' => new C('SSP', 'לירה דרום-סודנית', narrow: '£', plurals: ['other' => 'לירה דרום-סודנית']),
    'STD' => new C('STD', 'דוברה של סן טומה ופרינסיפה (1977–2017)', plurals: ['other' => 'דוברה של סן טומה ופרינסיפה (1977–2017)']),
    'STN' => new C('STN', 'דוברה של סאו טומה ופרינסיפה', narrow: 'Db', plurals: ['other' => 'דוברה של סאו טומה ופרינסיפה']),
    'SUR' => new C('SUR', 'רובל סובייטי'),
    'SVC' => new C('SVC', 'קולון סלבדורי', plurals: ['one' => 'קולון סלבדורי', 'many' => 'קולון סלבדורי', 'other' => 'קולונים סלבדוריים']),
    'SYP' => new C('SYP', 'לירה סורית', narrow: '£', plurals: ['one' => 'לירה סורית', 'other' => 'לירות סוריות']),
    'SZL' => new C('SZL', 'לילנגני סווזילנדי', plurals: ['other' => 'לילנגני סווזילנדי']),
    'THB' => new C('THB', 'בהט תאילנדי', '฿', narrow: '฿', plurals: ['other' => 'בהט תאילנדי']),
    'TJS' => new C('TJS', 'סומוני טג׳קיסטני', plurals: ['other' => 'סומוני טג׳קיסטני']),
    'TMM' => new C('TMM', 'מנאט טורקמאני'),
    'TMT' => new C('TMT', 'מאנאט טורקמני', plurals: ['other' => 'מאנאט טורקמני']),
    'TND' => new C('TND', 'דינר טוניסאי', plurals: ['other' => 'דינר טוניסאי'], minorUnits: 3),
    'TOP' => new C('TOP', 'פאנגה טונגי', narrow: 'T$', plurals: ['other' => 'פאנגה טונגי']),
    'TPE' => new C('TPE', 'אסקודו טימוראי'),
    'TRL' => new C('TRL', 'לירה טורקית'),
    'TRY' => new C('TRY', 'לירה טורקית חדשה', narrow: '₺', plurals: ['one' => 'לירה טורקית חדשה', 'other' => 'לירות טורקיות חדשות']),
    'TTD' => new C('TTD', 'דולר טרינידדי', narrow: '$', plurals: ['other' => 'דולר טרינידדי']),
    'TWD' => new C('TWD', 'דולר טייוואני חדש', 'NT$', narrow: 'NT$', plurals: ['other' => 'דולר טייוואני חדש']),
    'TZS' => new C('TZS', 'שילינג טנזני', plurals: ['other' => 'שילינג טנזני']),
    'UAH' => new C('UAH', 'הריבנה אוקראיני', narrow: '₴', plurals: ['other' => 'הריבנה אוקראיני']),
    'UGS' => new C('UGS', 'שילינג אוגנדי (1966 – 1987)'),
    'UGX' => new C('UGX', 'שילינג אוגנדי', plurals: ['other' => 'שילינג אוגנדי'], minorUnits: 0),
    'USD' => new C('USD', 'דולר אמריקאי', '$', narrow: '$', plurals: ['other' => 'דולר אמריקאי']),
    'USN' => new C('USN', 'דולר אמריקאי (היום הבא)', plurals: ['other' => 'דולר אמריקאי (היום הבא)']),
    'USS' => new C('USS', 'דולר אמריקאי (היום הזה)', plurals: ['other' => 'דולר אמריקאי (היום הזה)']),
    'UYU' => new C('UYU', 'פסו אורוגוואי', narrow: '$', plurals: ['other' => 'פסו אורוגוואי']),
    'UZS' => new C('UZS', 'סום אוזבקי', plurals: ['other' => 'סום אוזבקי']),
    'VEB' => new C('VEB', 'בוליבר ונצואלי (1871–2008)'),
    'VEF' => new C('VEF', 'בוליבר ונצואלי (2008–2018)', narrow: 'Bs', plurals: ['other' => 'בוליבר ונצואלי (2008–2018)']),
    'VES' => new C('VES', 'בוליבר ונצואלי', plurals: ['other' => 'בוליבר ונצואלי']),
    'VND' => new C('VND', 'דונג וייטנאמי', '₫', narrow: '₫', plurals: ['other' => 'דונג וייטנאמי'], minorUnits: 0),
    'VUV' => new C('VUV', 'ואטו של ונואטו', plurals: ['other' => 'ואטו של ונואטו'], minorUnits: 0),
    'WST' => new C('WST', 'טאלה סמואי', plurals: ['other' => 'טאלה סמואי']),
    'XAF' => new C('XAF', 'פרנק CFA מרכז אפריקני', 'FCFA', plurals: ['other' => 'פרנק CFA מרכז אפריקני'], minorUnits: 0),
    'XAG' => new C('XAG', 'כסף'),
    'XAU' => new C('XAU', 'זהב'),
    'XCD' => new C('XCD', 'דולר מזרח קריבי', 'EC$', narrow: '$', plurals: ['other' => 'דולר מזרח קריבי']),
    'XDR' => new C('XDR', 'זכויות משיכה מיוחדות'),
    'XFO' => new C('XFO', 'פרנק זהב'),
    'XOF' => new C('XOF', 'פרנק CFA מערב אפריקני', "F\u{202F}CFA", plurals: ['other' => 'פרנק CFA מערב אפריקני'], minorUnits: 0),
    'XPD' => new C('XPD', 'פלדיום'),
    'XPF' => new C('XPF', 'פרנק פולינזיה הצרפתית', 'CFPF', plurals: ['other' => 'פרנק פולינזיה הצרפתית'], minorUnits: 0),
    'XPT' => new C('XPT', 'פלטינה'),
    'XTS' => new C('XTS', 'סימון למטרות בדיקה'),
    'XXX' => new C('XXX', 'מטבע שאינו ידוע', '¤', plurals: ['other' => '(מטבע שאינו ידוע)']),
    'YDD' => new C('YDD', 'דינר תימני'),
    'YER' => new C('YER', 'ריאל תימני', plurals: ['other' => 'ריאל תימני']),
    'ZAL' => new C('ZAL', 'ראנד דרום אפריקאי (כספי)'),
    'ZAR' => new C('ZAR', 'ראנד דרום אפריקאי', narrow: 'R', plurals: ['other' => 'ראנד דרום אפריקאי']),
    'ZMK' => new C('ZMK', 'קוואצ׳ה זמבית (1968–2012)'),
    'ZMW' => new C('ZMW', 'קוואצ׳ה זמבי', narrow: 'ZK', plurals: ['other' => 'קוואצ׳ה זמבי']),
    'ZRN' => new C('ZRN', 'זאיר חדש'),
    'ZWD' => new C('ZWD', 'דולר זימבבואי'),
];
