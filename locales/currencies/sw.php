<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'AED' => new C('AED', 'Dirham ya Falme za Kiarabu', plurals: ['one' => 'dirham ya Falme za Kiarabu', 'other' => 'dirham za Falme za Kiarabu']),
    'AFN' => new C('AFN', 'Afghani ya Afghanistan', narrow: '؋', plurals: ['one' => 'afghani ya Afghanistan', 'other' => 'afghani za Afghanistan']),
    'ALL' => new C('ALL', 'Lek ya Albania', plurals: ['one' => 'lek ya Albania', 'other' => 'lek za Albania']),
    'AMD' => new C('AMD', 'Dram ya Armenia', narrow: '֏', plurals: ['one' => 'dram ya Armenia', 'other' => 'dram za Armenia']),
    'ANG' => new C('ANG', 'Guilder ya Antili za Kiholanzi', plurals: ['one' => 'guilder ya Antili za Kiholanzi', 'other' => 'guilder za Antili za Kiholanzi']),
    'AOA' => new C('AOA', 'Kwanza ya Angola', narrow: 'Kz', plurals: ['one' => 'kwanza ya Angola', 'other' => 'kwanza za Angola']),
    'ARS' => new C('ARS', 'Peso ya Ajentina', narrow: '$', plurals: ['one' => 'peso ya Ajentina', 'other' => 'peso za Ajentina']),
    'AUD' => new C('AUD', 'Dola ya Australia', 'A$', narrow: '$', plurals: ['one' => 'dola ya Australia', 'other' => 'dola za Australia']),
    'AWG' => new C('AWG', 'Florin ya Aruba', plurals: ['one' => 'florin ya Aruba', 'other' => 'florin za Aruba']),
    'AZN' => new C('AZN', 'Manat ya Azerbaijan', narrow: '₼', plurals: ['one' => 'manat ya Azerbaijan', 'other' => 'manat za Azerbaijan']),
    'BAM' => new C('BAM', 'Convertible Mark ya Bosnia na Hezegovina', narrow: 'KM', plurals: ['one' => 'convertible mark ya Bosnia na Hezegovina', 'other' => 'convertible mark za Bosnia na Hezegovina']),
    'BBD' => new C('BBD', 'Dola ya Barbados', narrow: '$', plurals: ['one' => 'dola ya Barbados', 'other' => 'dola za Barbados']),
    'BDT' => new C('BDT', 'Taka ya Bangladesh', narrow: '৳', plurals: ['one' => 'taka ya Bangladesh', 'other' => 'taka za Bangladesh']),
    'BGN' => new C('BGN', 'Lev ya Bulgaria', plurals: ['one' => 'lev ya Bulgaria', 'other' => 'lev za Bulgaria']),
    'BHD' => new C('BHD', 'Dinari ya Bahareni', plurals: ['one' => 'dinari ya Bahareni', 'other' => 'dinari za Bahareni'], minorUnits: 3),
    'BIF' => new C('BIF', 'Faranga ya Burundi', plurals: ['one' => 'faranga ya Burundi', 'other' => 'faranga za Burundi'], minorUnits: 0),
    'BMD' => new C('BMD', 'Dola ya Bermuda', narrow: '$', plurals: ['one' => 'dola ya Bermuda', 'other' => 'dola za Bermuda']),
    'BND' => new C('BND', 'Dola ya Brunei', narrow: '$', plurals: ['one' => 'dola ya Brunei', 'other' => 'dola za Brunei']),
    'BOB' => new C('BOB', 'Boliviano ya Bolivia', narrow: 'Bs', plurals: ['one' => 'Boliviano ya Bolivia', 'other' => 'Boliviano za Bolivia']),
    'BRL' => new C('BRL', 'Real ya Brazil', 'R$', narrow: 'R$', plurals: ['one' => 'Real ya Brazil', 'other' => 'Real za Brazil']),
    'BSD' => new C('BSD', 'Dola ya Bahamas', narrow: '$', plurals: ['one' => 'dola ya Bahamas', 'other' => 'dola za Bahamas']),
    'BTN' => new C('BTN', 'Ngultrum ya Bhutan', plurals: ['one' => 'ngultrum ya Bhutan', 'other' => 'ngultrum za Bhutan']),
    'BWP' => new C('BWP', 'Pula ya Botswana', narrow: 'P', plurals: ['one' => 'pula ya Botswana', 'other' => 'pula za Botswana']),
    'BYN' => new C('BYN', 'Ruble ya Belarus', narrow: 'р.', plurals: ['one' => 'ruble ya Belarus', 'other' => 'ruble za Belarus']),
    'BYR' => new C('BYR', 'Ruble ya Belarusi (2000–2016)', plurals: ['one' => 'Ruble ya Belarusi (2000–2016)', 'other' => 'Ruble za Belarusi (2000–2016)']),
    'BZD' => new C('BZD', 'Dola ya Belize', narrow: '$', plurals: ['one' => 'dola ya Belize', 'other' => 'dola za Belize']),
    'CAD' => new C('CAD', 'Dola ya Canada', 'CA$', narrow: '$', plurals: ['one' => 'dola ya Canada', 'other' => 'dola za Canada']),
    'CDF' => new C('CDF', 'Faranga ya Kongo', plurals: ['one' => 'faranga ya Kongo', 'other' => 'faranga za Kongo']),
    'CHF' => new C('CHF', 'Faranga ya Uswisi', plurals: ['one' => 'faranga ya Uswisi', 'other' => 'faranga za Uswisi']),
    'CLP' => new C('CLP', 'Peso ya Chile', narrow: '$', plurals: ['one' => 'Peso ya Chile', 'other' => 'Peso za Chile'], minorUnits: 0),
    'CNH' => new C('CNH', 'Yuan ya Uchina (huru)', plurals: ['one' => 'yuan ya Uchina (huru)', 'other' => 'yuan za Uchina (huru)']),
    'CNY' => new C('CNY', 'Yuan ya Uchina', 'CN¥', narrow: '¥', plurals: ['one' => 'yuan ya Uchina', 'other' => 'yuan za Uchina']),
    'COP' => new C('COP', 'Peso ya Kolombia', narrow: '$', plurals: ['one' => 'peso ya Kolombia', 'other' => 'peso za Kolombia']),
    'CRC' => new C('CRC', 'Colon ya Kostarika', narrow: '₡', plurals: ['one' => 'colon ya Kostarika', 'other' => 'colon za Kostarika']),
    'CUC' => new C('CUC', 'Peso ya Kuba Inayoweza Kubadilishwa', narrow: '$', plurals: ['one' => 'peso ya Kuba inayoweza kubadilishwa', 'other' => 'peso za Kuba zinazoweza kubadilishwa']),
    'CUP' => new C('CUP', 'Peso ya Kuba', narrow: '$', plurals: ['one' => 'peso ya Kuba', 'other' => 'peso za Kuba']),
    'CVE' => new C('CVE', 'Eskudo ya Cape Verde', plurals: ['one' => 'eskudo ya Cape Verde', 'other' => 'eskudo za Cape Verde']),
    'CZK' => new C('CZK', 'Koruna ya Jamhuri ya Czech', narrow: 'Kč', plurals: ['one' => 'koruna ya Jamhuri ya Czech', 'other' => 'koruna za Jamhuri ya Czech']),
    'DJF' => new C('DJF', 'Faranga ya Jibuti', plurals: ['one' => 'faranga ya Jibuti', 'other' => 'faranga za Jibuti'], minorUnits: 0),
    'DKK' => new C('DKK', 'Krone ya Denmark', narrow: 'kr', plurals: ['one' => 'krone ya Denmark', 'other' => 'krone za Denmark']),
    'DOP' => new C('DOP', 'Peso ya Dominika', narrow: '$', plurals: ['one' => 'peso ya Dominika', 'other' => 'peso za Dominika']),
    'DZD' => new C('DZD', 'Dinar ya Aljeria', plurals: ['one' => 'dinar ya Aljeria', 'other' => 'dinar za Aljeria']),
    'EGP' => new C('EGP', 'Pauni ya Misri', narrow: 'E£', plurals: ['one' => 'pauni ya Misri', 'other' => 'pauni za Misri']),
    'ERN' => new C('ERN', 'Nakfa ya Eritrea', plurals: ['one' => 'nakfa ya Eritrea', 'other' => 'nakfa za Eritrea']),
    'ETB' => new C('ETB', 'Birr ya Uhabeshi', plurals: ['one' => 'birr ya Uhabeshi', 'other' => 'birr za Uhabeshi']),
    'EUR' => new C('EUR', 'Yuro', '€', narrow: '€', plurals: ['one' => 'yuro', 'other' => 'yuro']),
    'FJD' => new C('FJD', 'Dola ya Fiji', narrow: '$', plurals: ['one' => 'dola ya Fiji', 'other' => 'dola za Fiji']),
    'FKP' => new C('FKP', 'Pauni ya Visiwa vya Falkland', narrow: '£', plurals: ['one' => 'Pauni ya Visiwa vya Falkland', 'other' => 'Pauni za Visiwa vya Falkland']),
    'GBP' => new C('GBP', 'Pauni ya Uingereza', '£', narrow: '£', plurals: ['one' => 'pauni ya Uingereza', 'other' => 'pauni za Uingereza']),
    'GEL' => new C('GEL', 'Lari ya Jojia', narrow: '₾', plurals: ['one' => 'lari ya Jojia', 'other' => 'lari za Jojia']),
    'GHC' => new C('GHC', 'Sedi ya Ghana'),
    'GHS' => new C('GHS', 'Cedi ya Ghana', narrow: 'GH₵', plurals: ['one' => 'cedi ya Ghana', 'other' => 'cedi za Ghana']),
    'GIP' => new C('GIP', 'Pauni ya Gibraltar', narrow: '£', plurals: ['one' => 'pauni ya Gibraltar', 'other' => 'pauni za Gibraltar']),
    'GMD' => new C('GMD', 'Dalasi ya Gambia', plurals: ['one' => 'dalasi ya Gambia', 'other' => 'dalasi za Gambia']),
    'GNF' => new C('GNF', 'Faranga ya Guinea', narrow: 'FG', plurals: ['one' => 'faranga ya Guinea', 'other' => 'faranga za Guinea'], minorUnits: 0),
    'GNS' => new C('GNS', 'Faranga ya Gine'),
    'GTQ' => new C('GTQ', 'Quetzal ya Guatemala', narrow: 'Q', plurals: ['one' => 'quetzal ya Guatemala', 'other' => 'quetzal za Guatemala']),
    'GYD' => new C('GYD', 'Dola ya Guyana', narrow: '$', plurals: ['one' => 'dola ya Guyana', 'other' => 'dola za Guyana']),
    'HKD' => new C('HKD', 'Dola ya Hong Kong', 'HK$', narrow: '$', plurals: ['one' => 'dola ya Hong Kong', 'other' => 'dola za Hong Kong']),
    'HNL' => new C('HNL', 'Lempira ya Hondurasi', narrow: 'L', plurals: ['one' => 'lempira ya Hondurasi', 'other' => 'lempira za Hondurasi']),
    'HRK' => new C('HRK', 'Kuna ya Korasia', narrow: 'kn', plurals: ['one' => 'kuna ya Korasia', 'other' => 'kuna za Korasia']),
    'HTG' => new C('HTG', 'Gourde ya Haiti', plurals: ['one' => 'gourde ya Haiti', 'other' => 'gourde za Haiti']),
    'HUF' => new C('HUF', 'Forint ya Hungaria', narrow: 'Ft', plurals: ['one' => 'forint ya Hungaria', 'other' => 'forint za Hungaria']),
    'IDR' => new C('IDR', 'Rupiah ya Indonesia', narrow: 'Rp', plurals: ['one' => 'rupiah ya Indonesia', 'other' => 'rupiah za Indonesia']),
    'ILS' => new C('ILS', 'Shekeli Mpya ya Israel', '₪', narrow: '₪', plurals: ['one' => 'shekeli mpya ya Israel', 'other' => 'shekeli mpya za Israel']),
    'INR' => new C('INR', 'Rupia ya India', '₹', narrow: '₹', plurals: ['one' => 'rupia ya India', 'other' => 'rupia za India']),
    'IQD' => new C('IQD', 'Dinari ya Iraki', plurals: ['one' => 'dinari ya Iraki', 'other' => 'dinari za Iraki'], minorUnits: 3),
    'IRR' => new C('IRR', 'Rial ya Iran', plurals: ['one' => 'rial ya Iran', 'other' => 'rial za Iran']),
    'ISK' => new C('ISK', 'Krona ya Aisilandi', narrow: 'kr', plurals: ['one' => 'krona ya Aisilandi', 'other' => 'krona za Aisilandi'], minorUnits: 0),
    'JMD' => new C('JMD', 'Dola ya Jamaika', narrow: '$', plurals: ['one' => 'dola ya Jamaika', 'other' => 'dola za Jamaika']),
    'JOD' => new C('JOD', 'Dinari ya Jordan', plurals: ['one' => 'dinari ya Jordan', 'other' => 'dinari za Jordan'], minorUnits: 3),
    'JPY' => new C('JPY', 'Yen ya Japani', 'JP¥', narrow: '¥', plurals: ['one' => 'yen ya Japani', 'other' => 'yen za Japani'], minorUnits: 0),
    'KES' => new C('KES', 'Shilingi ya Kenya', 'Ksh', plurals: ['one' => 'shilingi ya Kenya', 'other' => 'shilingi za Kenya']),
    'KGS' => new C('KGS', 'Som ya Kyrgystan', plurals: ['one' => 'som ya Kyrgystan', 'other' => 'som za Kyrgystan']),
    'KHR' => new C('KHR', 'Riel ya Kambodia', narrow: '៛', plurals: ['one' => 'riel ya Kambodia', 'other' => 'riel za Kambodia']),
    'KMF' => new C('KMF', 'Faranga ya Komoro', narrow: 'CF', plurals: ['one' => 'faranga ya Komoro', 'other' => 'faranga za Komoro'], minorUnits: 0),
    'KPW' => new C('KPW', 'Won ya Korea Kaskazini', narrow: '₩', plurals: ['one' => 'won ya Korea Kaskazini', 'other' => 'won za Korea Kaskazini']),
    'KRW' => new C('KRW', 'Won ya Korea Kusini', '₩', narrow: '₩', plurals: ['one' => 'won ya Korea Kusini', 'other' => 'won za Korea Kusini'], minorUnits: 0),
    'KWD' => new C('KWD', 'Dinari ya Kuwait', plurals: ['one' => 'dinari ya Kuwait', 'other' => 'dinari za Kuwait'], minorUnits: 3),
    'KYD' => new C('KYD', 'Dola ya Visiwa vya Cayman', narrow: '$', plurals: ['one' => 'dola ya Visiwa vya Cayman', 'other' => 'dola za Visiwa vya Cayman']),
    'KZT' => new C('KZT', 'Tenge ya Kazakhstan', narrow: '₸', plurals: ['one' => 'tenge ya Kazakhstan', 'other' => 'tenge za Kazakhstan']),
    'LAK' => new C('LAK', 'Kip ya Laosi', narrow: '₭', plurals: ['one' => 'kip ya Laosi', 'other' => 'kip za Laosi']),
    'LBP' => new C('LBP', 'Pauni ya Lebanon', narrow: 'L£', plurals: ['one' => 'pauni ya Lebanon', 'other' => 'pauni za Lebanon']),
    'LKR' => new C('LKR', 'Rupia ya Sri Lanka', narrow: 'Rs', plurals: ['one' => 'rupia ya Sri Lanka', 'other' => 'rupia za Sri Lanka']),
    'LRD' => new C('LRD', 'Dola ya Liberia', narrow: '$', plurals: ['one' => 'dola ya Liberia', 'other' => 'dola za Liberia']),
    'LSL' => new C('LSL', 'Loti ya Lesoto', plurals: ['one' => 'Loti za Lesoto', 'other' => 'Loti za Lesoto']),
    'LTL' => new C('LTL', 'Litas ya Lithuania', narrow: 'Lt', plurals: ['one' => 'Litas ya Lithuania', 'other' => 'Litas za Lithuania']),
    'LVL' => new C('LVL', 'Lats ya Lativia', narrow: 'Ls', plurals: ['one' => 'Lats ya Lativia', 'other' => 'Lats za Lativia']),
    'LYD' => new C('LYD', 'Dinari ya Libya', plurals: ['one' => 'dinari ya Libya', 'other' => 'dinari za Libya'], minorUnits: 3),
    'MAD' => new C('MAD', 'Dirham ya Moroko', plurals: ['one' => 'dirham ya Moroko', 'other' => 'dirham za Moroko']),
    'MDL' => new C('MDL', 'Leu ya Moldova', plurals: ['one' => 'leu ya Moldova', 'other' => 'leu za Moldova']),
    'MGA' => new C('MGA', 'Ariari ya Madagaska', narrow: 'Ar', plurals: ['one' => 'ariari ya Madagaska', 'other' => 'ariari za Madagaska']),
    'MKD' => new C('MKD', 'Denar ya Masedonia', plurals: ['one' => 'denar ya Masedonia', 'other' => 'denar za Masedonia']),
    'MMK' => new C('MMK', 'Kyat ya Myanmar', narrow: 'K', plurals: ['one' => 'kyat ya Myanmar', 'other' => 'kyat za Myanmar']),
    'MNT' => new C('MNT', 'Tugrik ya Mongolia', narrow: '₮', plurals: ['one' => 'tugrik ya Mongolia', 'other' => 'tugrik za Mongolia']),
    'MOP' => new C('MOP', 'Pataca ya Macau', plurals: ['one' => 'pataca ya Macau', 'other' => 'pataca za Macau']),
    'MRO' => new C('MRO', 'Ouguiya ya Mauritania (1973–2017)', plurals: ['one' => 'ouguiya ya Mauritania (1973–2017)', 'other' => 'ouguiya za Mauritania (1973–2017)']),
    'MRU' => new C('MRU', 'Ouguiya ya Moritania', plurals: ['one' => 'ouguiya ya Moritania', 'other' => 'ouguiya za Moritania']),
    'MUR' => new C('MUR', 'Rupia ya Morisi', narrow: 'Rs', plurals: ['one' => 'rupia ya Morisi', 'other' => 'rupia za Morisi']),
    'MVR' => new C('MVR', 'Rufiyaa ya Maldives', plurals: ['one' => 'rufiyaa ya Maldives', 'other' => 'rufiyaa za Maldives']),
    'MWK' => new C('MWK', 'Kwacha ya Malawi', plurals: ['one' => 'kwacha ya Malawi', 'other' => 'kwacha za Malawi']),
    'MXN' => new C('MXN', 'Peso ya Meksiko', 'MX$', narrow: '$', plurals: ['one' => 'peso ya Meksiko', 'other' => 'peso za Meksiko']),
    'MYR' => new C('MYR', 'Ringgit ya Malaysia', narrow: 'RM', plurals: ['one' => 'ringgit ya Malaysia', 'other' => 'ringgit za Malaysia']),
    'MZM' => new C('MZM', 'Metikali ya Msumbiji (1980–2006)', plurals: ['one' => 'metikali ya Msumbiji (1980–2006)', 'other' => 'metikali ya Msumbiji (1980–2006)']),
    'MZN' => new C('MZN', 'Metikali ya Msumbiji', plurals: ['one' => 'metikali ya Msumbiji', 'other' => 'metikali za Msumbiji']),
    'NAD' => new C('NAD', 'Dola ya Namibia', narrow: '$', plurals: ['one' => 'dola ya Namibia', 'other' => 'dola za Namibia']),
    'NGN' => new C('NGN', 'Naira ya Nigeria', narrow: '₦', plurals: ['one' => 'naira ya Nigeria', 'other' => 'naira za Nigeria']),
    'NIO' => new C('NIO', 'Cordoba ya Nikaragwa', narrow: 'C$', plurals: ['one' => 'cordoba ya Nikaragwa', 'other' => 'cordoba za Nikaragwa']),
    'NOK' => new C('NOK', 'Krone ya Norwe', narrow: 'kr', plurals: ['one' => 'krone ya Norwe', 'other' => 'krone za Norwe']),
    'NPR' => new C('NPR', 'Rupia ya Nepal', narrow: 'Rs', plurals: ['one' => 'rupia ya Nepal', 'other' => 'rupia za Nepal']),
    'NZD' => new C('NZD', 'Dola ya Nyuzilandi', 'NZ$', narrow: '$', plurals: ['one' => 'dola ya Nyuzilandi', 'other' => 'dola za Nyuzilandi']),
    'OMR' => new C('OMR', 'Rial ya Omani', plurals: ['one' => 'rial ya Omani', 'other' => 'rial za Omani'], minorUnits: 3),
    'PAB' => new C('PAB', 'Balboa ya Panama', plurals: ['one' => 'balboa ya Panama', 'other' => 'balboa ya Panama']),
    'PEN' => new C('PEN', 'Sol ya Peru', plurals: ['one' => 'sol ya Peru', 'other' => 'sol za Peru']),
    'PGK' => new C('PGK', 'Kina ya Papua New Guinea', plurals: ['one' => 'kina ya Papua New Guinea', 'other' => 'kina za Papua New Guinea']),
    'PHP' => new C('PHP', 'Peso ya Ufilipino', narrow: '₱', plurals: ['one' => 'peso ya Ufilipino', 'other' => 'peso za Ufilipino']),
    'PKR' => new C('PKR', 'Rupia ya Pakistan', narrow: 'Rs', plurals: ['one' => 'rupia ya Pakistan', 'other' => 'rupia za Pakistan']),
    'PLN' => new C('PLN', 'Zloty ya Poland', narrow: 'zł', plurals: ['one' => 'zloty ya Poland', 'other' => 'zloty za Poland']),
    'PYG' => new C('PYG', 'Guarani ya Paragwai', narrow: '₲', plurals: ['one' => 'guarani ya Paragwai', 'other' => 'guarani za Paragwai'], minorUnits: 0),
    'QAR' => new C('QAR', 'Rial ya Qatar', plurals: ['one' => 'rial ya Qatar', 'other' => 'rial ya Qatar']),
    'RON' => new C('RON', 'Leu ya Romania', narrow: 'lei', plurals: ['one' => 'leu ya Romania', 'other' => 'leu za Romania']),
    'RSD' => new C('RSD', 'Dinar ya Serbia', plurals: ['one' => 'dinar ya Serbia', 'other' => 'dinar za Serbia']),
    'RUB' => new C('RUB', 'Ruble ya Urusi', narrow: '₽', plurals: ['one' => 'ruble ya Urusi', 'other' => 'ruble za Urusi']),
    'RWF' => new C('RWF', 'Faranga ya Rwanda', narrow: 'RF', plurals: ['one' => 'faranga ya Rwanda', 'other' => 'faranga za Rwanda'], minorUnits: 0),
    'SAR' => new C('SAR', 'Riyal ya Saudia', plurals: ['one' => 'riyal ya Saudia', 'other' => 'riyal za Saudia']),
    'SBD' => new C('SBD', 'Dola ya Visiwa vya Solomon', narrow: '$', plurals: ['one' => 'dola ya Visiwa vya Solomon', 'other' => 'dola za Visiwa vya Solomon']),
    'SCR' => new C('SCR', 'Rupia ya Ushelisheli', plurals: ['one' => 'rupia ya Ushelisheli', 'other' => 'rupia za Ushelisheli']),
    'SDG' => new C('SDG', 'Pauni ya Sudan', plurals: ['one' => 'pauni ya Sudan', 'other' => 'pauni za Sudan']),
    'SDP' => new C('SDP', 'Pauni ya Sudani (1957–1998)', plurals: ['one' => 'pauni ya Sudani (1957–1998)', 'other' => 'pauni za Sudani (1957–1998)']),
    'SEK' => new C('SEK', 'Krona ya Uswidi', narrow: 'kr', plurals: ['one' => 'krona ya Uswidi', 'other' => 'krona za Uswidi']),
    'SGD' => new C('SGD', 'Dola ya Singapore', narrow: '$', plurals: ['one' => 'dola ya Singapore', 'other' => 'dola za Singapore']),
    'SHP' => new C('SHP', 'Pauni ya St. Helena', narrow: '£', plurals: ['one' => 'pauni ya St. Helena', 'other' => 'pauni za St. Helena']),
    'SLL' => new C('SLL', 'Leone ya Siera Leoni', plurals: ['one' => 'leone ya Siera Leoni', 'other' => 'leone za Siera Leoni']),
    'SOS' => new C('SOS', 'Shilingi ya Somalia', plurals: ['one' => 'shilingi ya Somalia', 'other' => 'shilingi za Somalia']),
    'SRD' => new C('SRD', 'Dola ya Suriname', narrow: '$', plurals: ['one' => 'dola ya Suriname', 'other' => 'dola za Suriname']),
    'SSP' => new C('SSP', 'Pauni ya Sudan Kusini', narrow: '£', plurals: ['one' => 'pauni ya Sudan Kusini', 'other' => 'pauni za Sudan Kusini']),
    'STD' => new C('STD', 'Dobra ya Sao Tome na Principe (1977–2017)', plurals: ['one' => 'dobra ya Sao Tome na Principe (1977–2017)', 'other' => 'dobra za Sao Tome na Principe (1977–2017)']),
    'STN' => new C('STN', 'Dobra ya Sao Tome na Principe', narrow: 'Db', plurals: ['one' => 'dobra ya Sao Tome na Principe', 'other' => 'dobra za Sao Tome na Principe']),
    'SYP' => new C('SYP', 'Pauni ya Syria', narrow: '£', plurals: ['one' => 'pauni ya Syria', 'other' => 'pauni za Syria']),
    'SZL' => new C('SZL', 'Lilangeni ya Uswazi', plurals: ['one' => 'lilangeni ya Uswazi', 'other' => 'emalangeni za Uswazi']),
    'THB' => new C('THB', 'Baht ya Tailandi', '฿', narrow: '฿', plurals: ['one' => 'baht ya Tailandi', 'other' => 'baht za Tailandi']),
    'TJS' => new C('TJS', 'Somoni ya Tajikistan', plurals: ['one' => 'somoni ya Tajikistan', 'other' => 'somoni za Tajikistan']),
    'TMT' => new C('TMT', 'Manat ya Turkmenistan', plurals: ['one' => 'manat ya Turkmenistan', 'other' => 'manat za Turkmenistan']),
    'TND' => new C('TND', 'Dinari ya Tunisia', plurals: ['one' => 'dinari ya Tunisia', 'other' => 'dinari za Tunisia'], minorUnits: 3),
    'TOP' => new C('TOP', 'Paʻanga ya Tonga', narrow: 'T$', plurals: ['one' => 'paʻanga ya Tonga', 'other' => 'paʻanga za Tonga']),
    'TRY' => new C('TRY', 'Lira ya Uturuki', narrow: '₺', plurals: ['one' => 'lira ya Uturuki', 'other' => 'lira za Uturuki']),
    'TTD' => new C('TTD', 'Dola ya Trinidad na Tobago', narrow: '$', plurals: ['one' => 'Dola ya Trinidad na Tobago', 'other' => 'Dola za Trinidad na Tobago']),
    'TWD' => new C('TWD', 'Dola ya Taiwan', 'NT$', narrow: 'NT$', plurals: ['one' => 'dola ya Taiwan', 'other' => 'dola za Taiwan']),
    'TZS' => new C('TZS', 'Shilingi ya Tanzania', 'TSh', plurals: ['one' => 'shilingi ya Tanzania', 'other' => 'shilingi za Tanzania']),
    'UAH' => new C('UAH', 'Hryvnia ya Ukraine', narrow: '₴', plurals: ['one' => 'hryvnia ya Ukraine', 'other' => 'hryvnia za Ukraine']),
    'UGX' => new C('UGX', 'Shilingi ya Uganda', plurals: ['one' => 'shilingi ya Uganda', 'other' => 'shilingi za Uganda'], minorUnits: 0),
    'USD' => new C('USD', 'Dola ya Marekani', 'US$', narrow: '$', plurals: ['one' => 'dola ya Marekani', 'other' => 'dola za Marekani']),
    'UYU' => new C('UYU', 'Peso ya Urugwai', narrow: '$', plurals: ['one' => 'peso ya Urugwai', 'other' => 'peso za Urugwai']),
    'UZS' => new C('UZS', 'Som ya Uzbekistan', plurals: ['one' => 'som ya Uzbekistan', 'other' => 'som za Uzbekistan']),
    'VEF' => new C('VEF', 'Bolivar ya Venezuela (2008–2018)', narrow: 'Bs', plurals: ['one' => 'Bolivar ya Venezuela (2008–2018)', 'other' => 'Bolivar za Venezuela (2008–2018)']),
    'VES' => new C('VES', 'Bolivar ya Venezuela', plurals: ['one' => 'bolivar ya Venezuela', 'other' => 'bolivar za Venezuela']),
    'VND' => new C('VND', 'Dong ya Vietnam', '₫', narrow: '₫', plurals: ['one' => 'dong ya Vietnam', 'other' => 'dong za Vietnam'], minorUnits: 0),
    'VUV' => new C('VUV', 'Vatu ya Vanuatu', plurals: ['one' => 'vatu ya Vanuatu', 'other' => 'vatu za Vanuatu'], minorUnits: 0),
    'WST' => new C('WST', 'Tala ya Samoa', plurals: ['one' => 'tala ya Samoa', 'other' => 'tala za Samoa']),
    'XAF' => new C('XAF', 'Faranga ya Afrika ya Kati CFA', 'FCFA', plurals: ['one' => 'faranga ya Afrika ya Kati CFA', 'other' => 'faranga za Afrika ya Kati CFA'], minorUnits: 0),
    'XCD' => new C('XCD', 'Dola ya Karibi Mashariki', 'EC$', narrow: '$', plurals: ['one' => 'dola ya Karibi Mashariki', 'other' => 'dola za Karibi Mashariki']),
    'XOF' => new C('XOF', 'Faranga ya Afrika Magharibi CFA', 'F CFA', plurals: ['one' => 'faranga ya Afrika Magharibi CFA', 'other' => 'faranga za Afrika Magharibi CFA'], minorUnits: 0),
    'XPF' => new C('XPF', 'Faranga ya CFP', 'CFPF', plurals: ['one' => 'faranga ya CFP', 'other' => 'faranga za CFP'], minorUnits: 0),
    'XXX' => new C('XXX', 'Sarafu isiyojulikana', '¤', plurals: ['one' => '(sarafu isiyojulikana)', 'other' => '(sarafu isiyojulikana)']),
    'YER' => new C('YER', 'Rial ya Yemen', plurals: ['one' => 'rial ya Yemen', 'other' => 'rial za Yemen']),
    'ZAR' => new C('ZAR', 'Randi ya Afrika Kusini', narrow: 'R', plurals: ['one' => 'randi ya Afrika Kusini', 'other' => 'randi za Afrika Kusini']),
    'ZMK' => new C('ZMK', 'Kwacha ya Zambia (1968–2012)'),
    'ZMW' => new C('ZMW', 'Kwacha ya Zambia', narrow: 'ZK', plurals: ['one' => 'kwacha ya Zambia', 'other' => 'kwacha za Zambia']),
    'ZWD' => new C('ZWD', 'Dola ya Zimbabwe'),
];
