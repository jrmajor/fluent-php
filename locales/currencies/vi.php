<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'ADP' => new C('ADP', 'Đồng Peseta của Andora'),
    'AED' => new C('AED', 'Dirham UAE', plurals: ['other' => 'Dirham UAE']),
    'AFA' => new C('AFA', 'Đồng Afghani của Afghanistan (1927–2002)'),
    'AFN' => new C('AFN', 'Afghani Afghanistan', narrow: '؋', plurals: ['other' => 'Afghani Afghanistan']),
    'ALL' => new C('ALL', 'Lek Albania', plurals: ['other' => 'Lek Albania']),
    'AMD' => new C('AMD', 'Dram Armenia', narrow: '֏', plurals: ['other' => 'Dram Armenia']),
    'ANG' => new C('ANG', 'Guilder Antille Hà Lan', plurals: ['other' => 'Guilder Antille Hà Lan']),
    'AOA' => new C('AOA', 'Kwanza Angola', narrow: 'Kz', plurals: ['other' => 'Kwanza Angola']),
    'AOK' => new C('AOK', 'Đồng Kwanza của Angola (1977–1991)'),
    'AON' => new C('AON', 'Đồng Kwanza Mới của Angola (1990–2000)'),
    'AOR' => new C('AOR', 'Đồng Kwanza Điều chỉnh lại của Angola (1995–1999)'),
    'ARA' => new C('ARA', 'Đồng Austral của Argentina'),
    'ARL' => new C('ARL', 'Đồng Peso Ley của Argentina (1970–1983)'),
    'ARM' => new C('ARM', 'Đồng Peso Argentina (1881–1970)'),
    'ARP' => new C('ARP', 'Đồng Peso Argentina (1983–1985)'),
    'ARS' => new C('ARS', 'Peso Argentina', narrow: '$', plurals: ['other' => 'Peso Argentina']),
    'ATS' => new C('ATS', 'Đồng Schiling Áo'),
    'AUD' => new C('AUD', 'Đô la Australia', 'AU$', narrow: '$', plurals: ['other' => 'Đô la Australia']),
    'AWG' => new C('AWG', 'Florin Aruba', plurals: ['other' => 'Florin Aruba']),
    'AZM' => new C('AZM', 'Đồng Manat của Azerbaijan (1993–2006)'),
    'AZN' => new C('AZN', 'Manat Azerbaijan', narrow: '₼', plurals: ['other' => 'Manat Azerbaijan']),
    'BAD' => new C('BAD', 'Đồng Dinar của Bosnia-Herzegovina (1992–1994)'),
    'BAM' => new C('BAM', 'Mark Bosnia-Herzegovina có thể chuyển đổi', narrow: 'KM', plurals: ['other' => 'Mark Bosnia-Herzegovina có thể chuyển đổi']),
    'BAN' => new C('BAN', 'Đồng Dinar Mới của Bosnia-Herzegovina (1994–1997)'),
    'BBD' => new C('BBD', 'Đô la Barbados', narrow: '$', plurals: ['other' => 'Đô la Barbados']),
    'BDT' => new C('BDT', 'Taka Bangladesh', narrow: '৳', plurals: ['other' => 'Taka Bangladesh']),
    'BEC' => new C('BEC', 'Đồng Franc Bỉ (có thể chuyển đổi)'),
    'BEF' => new C('BEF', 'Đồng Franc Bỉ'),
    'BEL' => new C('BEL', 'Đồng Franc Bỉ (tài chính)'),
    'BGL' => new C('BGL', 'Đồng Lev Xu của Bun-ga-ri'),
    'BGM' => new C('BGM', 'Đồng Lev Xã hội chủ nghĩa của Bun-ga-ri'),
    'BGN' => new C('BGN', 'Lev Bulgaria', plurals: ['other' => 'Lev Bulgaria']),
    'BGO' => new C('BGO', 'Đồng Lev của Bun-ga-ri (1879–1952)'),
    'BHD' => new C('BHD', 'Dinar Bahrain', plurals: ['other' => 'Dinar Bahrain'], minorUnits: 3),
    'BIF' => new C('BIF', 'Franc Burundi', plurals: ['other' => 'Franc Burundi'], minorUnits: 0),
    'BMD' => new C('BMD', 'Đô la Bermuda', narrow: '$', plurals: ['other' => 'Đô la Bermuda']),
    'BND' => new C('BND', 'Đô la Brunei', narrow: '$', plurals: ['other' => 'Đô la Brunei']),
    'BOB' => new C('BOB', 'Boliviano Bolivia', narrow: 'Bs', plurals: ['other' => 'Boliviano Bolivia']),
    'BOL' => new C('BOL', 'Đồng Boliviano của Bolivia (1863–1963)'),
    'BOP' => new C('BOP', 'Đồng Peso Bolivia'),
    'BOV' => new C('BOV', 'Đồng Mvdol Bolivia'),
    'BRB' => new C('BRB', 'Đồng Cruzerio Mới của Braxin (1967–1986)'),
    'BRC' => new C('BRC', 'Đồng Cruzado của Braxin (1986–1989)'),
    'BRE' => new C('BRE', 'Đồng Cruzerio của Braxin (1990–1993)'),
    'BRL' => new C('BRL', 'Real Braxin', 'R$', narrow: 'R$', plurals: ['other' => 'Real Braxin']),
    'BRN' => new C('BRN', 'Đồng Cruzado Mới của Braxin (1989–1990)'),
    'BRR' => new C('BRR', 'Đồng Cruzeiro của Braxin (1993–1994)'),
    'BRZ' => new C('BRZ', 'Đồng Cruzeiro của Braxin (1942–1967)'),
    'BSD' => new C('BSD', 'Đô la Bahamas', narrow: '$', plurals: ['other' => 'Đô la Bahamas']),
    'BTN' => new C('BTN', 'Ngultrum Bhutan', plurals: ['other' => 'Ngultrum Bhutan']),
    'BUK' => new C('BUK', 'Đồng Kyat Miến Điện'),
    'BWP' => new C('BWP', 'Pula Botswana', narrow: 'P', plurals: ['other' => 'Pula Botswana']),
    'BYB' => new C('BYB', 'Đồng Rúp Mới của Belarus (1994–1999)'),
    'BYN' => new C('BYN', 'Rúp Belarus', narrow: 'р.', plurals: ['other' => 'Rúp Belarus']),
    'BYR' => new C('BYR', 'Rúp Belarus (2000–2016)', plurals: ['other' => 'Rúp Belarus (2000–2016)']),
    'BZD' => new C('BZD', 'Đô la Belize', narrow: '$', plurals: ['other' => 'Đô la Belize']),
    'CAD' => new C('CAD', 'Đô la Canada', 'CA$', narrow: '$', plurals: ['other' => 'Đô la Canada']),
    'CDF' => new C('CDF', 'Franc Congo', plurals: ['other' => 'Franc Congo']),
    'CHE' => new C('CHE', 'Đồng Euro WIR'),
    'CHF' => new C('CHF', 'Franc Thụy sĩ', plurals: ['other' => 'Franc Thụy sĩ']),
    'CHW' => new C('CHW', 'Đồng France WIR'),
    'CLE' => new C('CLE', 'Đồng Escudo của Chile'),
    'CLF' => new C('CLF', 'Đơn vị Kế toán của Chile (UF)', minorUnits: 4),
    'CLP' => new C('CLP', 'Peso Chile', narrow: '$', plurals: ['other' => 'Peso Chile'], minorUnits: 0),
    'CNH' => new C('CNH', 'Nhân dân tệ (hải ngoại)', plurals: ['other' => 'Nhân dân tệ (hải ngoại)']),
    'CNY' => new C('CNY', 'Nhân dân tệ', 'CN¥', narrow: '¥', plurals: ['other' => 'Nhân dân tệ']),
    'COP' => new C('COP', 'Peso Colombia', narrow: '$', plurals: ['other' => 'Peso Colombia']),
    'COU' => new C('COU', 'Đơn vị Giá trị Thực của Colombia'),
    'CRC' => new C('CRC', 'Colón Costa Rica', narrow: '₡', plurals: ['other' => 'Colón Costa Rica']),
    'CSD' => new C('CSD', 'Đồng Dinar của Serbia (2002–2006)'),
    'CSK' => new C('CSK', 'Đồng Koruna Xu của Czechoslovakia'),
    'CUC' => new C('CUC', 'Peso Cuba có thể chuyển đổi', narrow: '$', plurals: ['other' => 'Peso Cuba có thể chuyển đổi']),
    'CUP' => new C('CUP', 'Peso Cuba', narrow: '$', plurals: ['other' => 'Peso Cuba']),
    'CVE' => new C('CVE', 'Escudo Cape Verde', plurals: ['other' => 'Escudo Cape Verde']),
    'CYP' => new C('CYP', 'Đồng Bảng Síp'),
    'CZK' => new C('CZK', 'Koruna Cộng hòa Séc', narrow: 'Kč', plurals: ['other' => 'Koruna Cộng hòa Séc']),
    'DDM' => new C('DDM', 'Đồng Mark Đông Đức'),
    'DEM' => new C('DEM', 'Đồng Mark Đức'),
    'DJF' => new C('DJF', 'Franc Djibouti', plurals: ['other' => 'Franc Djibouti'], minorUnits: 0),
    'DKK' => new C('DKK', 'Krone Đan Mạch', narrow: 'kr', plurals: ['other' => 'Krone Đan Mạch']),
    'DOP' => new C('DOP', 'Peso Dominica', narrow: '$', plurals: ['other' => 'Peso Dominica']),
    'DZD' => new C('DZD', 'Dinar Algeria', plurals: ['other' => 'Dinar Algeria']),
    'ECS' => new C('ECS', 'Đồng Scure Ecuador'),
    'ECV' => new C('ECV', 'Đơn vị Giá trị Không đổi của Ecuador'),
    'EEK' => new C('EEK', 'Crun Extônia'),
    'EGP' => new C('EGP', 'Bảng Ai Cập', narrow: 'E£', plurals: ['other' => 'Bảng Ai Cập']),
    'ERN' => new C('ERN', 'Nakfa Eritrea', plurals: ['other' => 'Nakfa Eritrea']),
    'ESA' => new C('ESA', 'Đồng Peseta Tây Ban Nha (Tài khoản)'),
    'ESB' => new C('ESB', 'Đồng Peseta Tây Ban Nha (tài khoản có thể chuyển đổi)'),
    'ESP' => new C('ESP', 'Đồng Peseta Tây Ban Nha', narrow: '₧'),
    'ETB' => new C('ETB', 'Birr Ethiopia', plurals: ['other' => 'Birr Ethiopia']),
    'EUR' => new C('EUR', 'Euro', '€', narrow: '€', plurals: ['other' => 'euro']),
    'FIM' => new C('FIM', 'Đồng Markka Phần Lan'),
    'FJD' => new C('FJD', 'Đô la Fiji', narrow: '$', plurals: ['other' => 'Đô la Fiji']),
    'FKP' => new C('FKP', 'Bảng Quần đảo Falkland', narrow: '£', plurals: ['other' => 'Bảng Quần đảo Falkland']),
    'FRF' => new C('FRF', 'Franc Pháp'),
    'GBP' => new C('GBP', 'Bảng Anh', '£', narrow: '£', plurals: ['other' => 'Bảng Anh']),
    'GEK' => new C('GEK', 'Đồng Kupon Larit của Georgia'),
    'GEL' => new C('GEL', 'Lari Georgia', narrow: '₾', plurals: ['other' => 'Lari Georgia']),
    'GHC' => new C('GHC', 'Cedi Ghana (1979–2007)'),
    'GHS' => new C('GHS', 'Cedi Ghana', narrow: 'GH₵', plurals: ['other' => 'Cedi Ghana']),
    'GIP' => new C('GIP', 'Bảng Gibraltar', narrow: '£', plurals: ['other' => 'Bảng Gibraltar']),
    'GMD' => new C('GMD', 'Dalasi Gambia', plurals: ['other' => 'Dalasi Gambia']),
    'GNF' => new C('GNF', 'Franc Guinea', narrow: 'FG', plurals: ['other' => 'Franc Guinea'], minorUnits: 0),
    'GNS' => new C('GNS', 'Syli Guinea'),
    'GQE' => new C('GQE', 'Đồng Ekwele của Guinea Xích Đạo'),
    'GRD' => new C('GRD', 'Drachma Hy Lạp'),
    'GTQ' => new C('GTQ', 'Quetzal Guatemala', narrow: 'Q', plurals: ['other' => 'Quetzal Guatemala']),
    'GWE' => new C('GWE', 'Đồng Guinea Escudo Bồ Đào Nha'),
    'GWP' => new C('GWP', 'Peso Guinea-Bissau'),
    'GYD' => new C('GYD', 'Đô la Guyana', narrow: '$', plurals: ['other' => 'Đô la Guyana']),
    'HKD' => new C('HKD', 'Đô la Hồng Kông', 'HK$', narrow: '$', plurals: ['other' => 'Đô la Hồng Kông']),
    'HNL' => new C('HNL', 'Lempira Honduras', narrow: 'L', plurals: ['other' => 'Lempira Honduras']),
    'HRD' => new C('HRD', 'Đồng Dinar Croatia'),
    'HRK' => new C('HRK', 'Kuna Croatia', narrow: 'kn', plurals: ['other' => 'Kuna Croatia']),
    'HTG' => new C('HTG', 'Gourde Haiti', plurals: ['other' => 'Gourde Haiti']),
    'HUF' => new C('HUF', 'Forint Hungary', narrow: 'Ft', plurals: ['other' => 'forint Hungary']),
    'IDR' => new C('IDR', 'Rupiah Indonesia', narrow: 'Rp', plurals: ['other' => 'Rupiah Indonesia']),
    'IEP' => new C('IEP', 'Pao Ai-len'),
    'ILP' => new C('ILP', 'Pao Ixraen'),
    'ILS' => new C('ILS', 'Sheqel Israel mới', '₪', narrow: '₪', plurals: ['other' => 'Sheqel Israel mới']),
    'INR' => new C('INR', 'Rupee Ấn Độ', '₹', narrow: '₹', plurals: ['other' => 'Rupee Ấn Độ']),
    'IQD' => new C('IQD', 'Dinar Iraq', plurals: ['other' => 'Dinar Iraq'], minorUnits: 3),
    'IRR' => new C('IRR', 'Rial Iran', plurals: ['other' => 'Rial Iran']),
    'ISK' => new C('ISK', 'Króna Iceland', narrow: 'kr', plurals: ['other' => 'króna Iceland'], minorUnits: 0),
    'ITL' => new C('ITL', 'Lia Ý'),
    'JMD' => new C('JMD', 'Đô la Jamaica', narrow: '$', plurals: ['other' => 'Đô la Jamaica']),
    'JOD' => new C('JOD', 'Dinar Jordan', plurals: ['other' => 'Dinar Jordan'], minorUnits: 3),
    'JPY' => new C('JPY', 'Yên Nhật', '¥', narrow: '¥', plurals: ['other' => 'Yên Nhật'], minorUnits: 0),
    'KES' => new C('KES', 'Shilling Kenya', plurals: ['other' => 'Shilling Kenya']),
    'KGS' => new C('KGS', 'Som Kyrgyzstan', plurals: ['other' => 'Som Kyrgyzstan']),
    'KHR' => new C('KHR', 'Riel Campuchia', narrow: '៛', plurals: ['other' => 'Riel Campuchia']),
    'KMF' => new C('KMF', 'Franc Comoros', narrow: 'CF', plurals: ['other' => 'Franc Comoros'], minorUnits: 0),
    'KPW' => new C('KPW', 'Won Triều Tiên', narrow: '₩', plurals: ['other' => 'Won Triều Tiên']),
    'KRH' => new C('KRH', 'Đồng Hwan Hàn Quốc (1953–1962)'),
    'KRO' => new C('KRO', 'Đồng Won Hàn Quốc (1945–1953)'),
    'KRW' => new C('KRW', 'Won Hàn Quốc', '₩', narrow: '₩', plurals: ['other' => 'Won Hàn Quốc'], minorUnits: 0),
    'KWD' => new C('KWD', 'Dinar Kuwait', plurals: ['other' => 'Dinar Kuwait'], minorUnits: 3),
    'KYD' => new C('KYD', 'Đô la Quần đảo Cayman', narrow: '$', plurals: ['other' => 'Đô la Quần đảo Cayman']),
    'KZT' => new C('KZT', 'Tenge Kazakhstan', narrow: '₸', plurals: ['other' => 'Tenge Kazakhstan']),
    'LAK' => new C('LAK', 'Kip Lào', narrow: '₭', plurals: ['other' => 'Kip Lào']),
    'LBP' => new C('LBP', 'Bảng Li-băng', narrow: 'L£', plurals: ['other' => 'Bảng Li-băng']),
    'LKR' => new C('LKR', 'Rupee Sri Lanka', narrow: 'Rs', plurals: ['other' => 'Rupee Sri Lanka']),
    'LRD' => new C('LRD', 'Đô la Liberia', narrow: '$', plurals: ['other' => 'Đô la Liberia']),
    'LSL' => new C('LSL', 'Ioti Lesotho', plurals: ['other' => 'Loti Lesotho']),
    'LTL' => new C('LTL', 'Litas Lít-va', narrow: 'Lt', plurals: ['other' => 'litas Lít-va']),
    'LTT' => new C('LTT', 'Đồng Talonas Litva'),
    'LUC' => new C('LUC', 'Đồng Franc Luxembourg có thể chuyển đổi'),
    'LUF' => new C('LUF', 'Đồng Franc Luxembourg'),
    'LUL' => new C('LUL', 'Đồng Franc Luxembourg tài chính'),
    'LVL' => new C('LVL', 'Lats Latvia', narrow: 'Ls', plurals: ['other' => 'lats Lativia']),
    'LVR' => new C('LVR', 'Đồng Rúp Latvia'),
    'LYD' => new C('LYD', 'Dinar Libi', plurals: ['other' => 'Dinar Libi'], minorUnits: 3),
    'MAD' => new C('MAD', 'Dirham Ma-rốc', plurals: ['other' => 'Dirham Ma-rốc']),
    'MAF' => new C('MAF', 'Đồng Franc Ma-rốc'),
    'MCF' => new C('MCF', 'Đồng Franc Monegasque'),
    'MDC' => new C('MDC', 'Đồng Cupon Moldova'),
    'MDL' => new C('MDL', 'Leu Moldova', plurals: ['other' => 'Leu Moldova']),
    'MGA' => new C('MGA', 'Ariary Malagasy', narrow: 'Ar', plurals: ['other' => 'Ariary Malagasy']),
    'MGF' => new C('MGF', 'Đồng Franc Magalasy'),
    'MKD' => new C('MKD', 'Denar Macedonia', plurals: ['other' => 'Denar Macedonia']),
    'MKN' => new C('MKN', 'Đồng Denar Macedonia (1992–1993)'),
    'MLF' => new C('MLF', 'Đồng Franc Mali'),
    'MMK' => new C('MMK', 'Kyat Myanma', narrow: 'K', plurals: ['other' => 'Kyat Myanma']),
    'MNT' => new C('MNT', 'Tugrik Mông Cổ', narrow: '₮', plurals: ['other' => 'Tugrik Mông Cổ']),
    'MOP' => new C('MOP', 'Pataca Ma Cao', plurals: ['other' => 'Pataca Ma Cao']),
    'MRO' => new C('MRO', 'Ouguiya Mauritania (1973–2017)', plurals: ['other' => 'Ouguiya Mauritania (1973–2017)']),
    'MRU' => new C('MRU', 'Ouguiya Mauritania', plurals: ['other' => 'Ouguiya Mauritania']),
    'MTL' => new C('MTL', 'Lia xứ Man-tơ'),
    'MTP' => new C('MTP', 'Đồng Bảng Malta'),
    'MUR' => new C('MUR', 'Rupee Mauritius', narrow: 'Rs', plurals: ['other' => 'Rupee Mauritius']),
    'MVR' => new C('MVR', 'Rufiyaa Maldives', plurals: ['other' => 'Rufiyaa Maldives']),
    'MWK' => new C('MWK', 'Kwacha Malawi', plurals: ['other' => 'Kwacha Malawi']),
    'MXN' => new C('MXN', 'Peso Mexico', 'MX$', narrow: '$', plurals: ['other' => 'Peso Mexico']),
    'MXP' => new C('MXP', 'Đồng Peso Bạc Mê-hi-cô (1861–1992)'),
    'MXV' => new C('MXV', 'Đơn vị Đầu tư Mê-hi-cô'),
    'MYR' => new C('MYR', 'Ringgit Malaysia', narrow: 'RM', plurals: ['other' => 'Ringgit Malaysia']),
    'MZE' => new C('MZE', 'Escudo Mozambique'),
    'MZM' => new C('MZM', 'Đồng Metical Mozambique (1980–2006)'),
    'MZN' => new C('MZN', 'Metical Mozambique', plurals: ['other' => 'Metical Mozambique']),
    'NAD' => new C('NAD', 'Đô la Namibia', narrow: '$', plurals: ['other' => 'Đô la Namibia']),
    'NGN' => new C('NGN', 'Naira Nigeria', narrow: '₦', plurals: ['other' => 'Naira Nigeria']),
    'NIC' => new C('NIC', 'Đồng Córdoba Nicaragua (1988–1991)'),
    'NIO' => new C('NIO', 'Córdoba Nicaragua', narrow: 'C$', plurals: ['other' => 'Córdoba Nicaragua']),
    'NLG' => new C('NLG', 'Đồng Guilder Hà Lan'),
    'NOK' => new C('NOK', 'Krone Na Uy', narrow: 'kr', plurals: ['other' => 'Krone Na Uy']),
    'NPR' => new C('NPR', 'Rupee Nepal', narrow: 'Rs', plurals: ['other' => 'Rupee Nepal']),
    'NZD' => new C('NZD', 'Đô la New Zealand', 'NZ$', narrow: '$', plurals: ['other' => 'Đô la New Zealand']),
    'OMR' => new C('OMR', 'Rial Oman', plurals: ['other' => 'Rial Oman'], minorUnits: 3),
    'PAB' => new C('PAB', 'Balboa Panama', plurals: ['other' => 'Balboa Panama']),
    'PEI' => new C('PEI', 'Đồng Inti Peru'),
    'PEN' => new C('PEN', 'Sol Peru', plurals: ['other' => 'Sol Peru']),
    'PES' => new C('PES', 'Đồng Sol Peru (1863–1965)'),
    'PGK' => new C('PGK', 'Kina Papua New Guinea', plurals: ['other' => 'Kina Papua New Guinea']),
    'PHP' => new C('PHP', 'Peso Philipin', narrow: '₱', plurals: ['other' => 'Peso Philipin']),
    'PKR' => new C('PKR', 'Rupee Pakistan', narrow: 'Rs', plurals: ['other' => 'Rupee Pakistan']),
    'PLN' => new C('PLN', 'Zloty Ba Lan', narrow: 'zł', plurals: ['other' => 'Zloty Ba Lan']),
    'PLZ' => new C('PLZ', 'Đồng Zloty Ba Lan (1950–1995)'),
    'PTE' => new C('PTE', 'Đồng Escudo Bồ Đào Nha'),
    'PYG' => new C('PYG', 'Guarani Paraguay', narrow: '₲', plurals: ['other' => 'Guarani Paraguay'], minorUnits: 0),
    'QAR' => new C('QAR', 'Rial Qatar', plurals: ['other' => 'Rial Qatar']),
    'RHD' => new C('RHD', 'Đồng Đô la Rhode'),
    'ROL' => new C('ROL', 'Đồng Leu Rumani (1952–2006)'),
    'RON' => new C('RON', 'Leu Romania', narrow: 'lei', plurals: ['other' => 'Leu Romania']),
    'RSD' => new C('RSD', 'Dinar Serbia', plurals: ['other' => 'Dinar Serbia']),
    'RUB' => new C('RUB', 'Rúp Nga', narrow: '₽', plurals: ['other' => 'Rúp Nga']),
    'RUR' => new C('RUR', 'Đồng Rúp Nga (1991–1998)'),
    'RWF' => new C('RWF', 'Franc Rwanda', narrow: 'RF', plurals: ['other' => 'Franc Rwanda'], minorUnits: 0),
    'SAR' => new C('SAR', 'Riyal Ả Rập Xê-út', plurals: ['other' => 'Riyal Ả Rập Xê-út']),
    'SBD' => new C('SBD', 'Đô la quần đảo Solomon', narrow: '$', plurals: ['other' => 'Đô la quần đảo Solomon']),
    'SCR' => new C('SCR', 'Rupee Seychelles', plurals: ['other' => 'Rupee Seychelles']),
    'SDD' => new C('SDD', 'Đồng Dinar Sudan (1992–2007)'),
    'SDG' => new C('SDG', 'Bảng Sudan', plurals: ['other' => 'Bảng Sudan']),
    'SDP' => new C('SDP', 'Đồng Bảng Sudan (1957–1998)'),
    'SEK' => new C('SEK', 'Krona Thụy Điển', narrow: 'kr', plurals: ['other' => 'Krona Thụy Điển']),
    'SGD' => new C('SGD', 'Đô la Singapore', narrow: '$', plurals: ['other' => 'Đô la Singapore']),
    'SHP' => new C('SHP', 'Bảng St. Helena', narrow: '£', plurals: ['other' => 'bảng St. Helena']),
    'SIT' => new C('SIT', 'Tôla Xlôvênia'),
    'SKK' => new C('SKK', 'Cuaron Xlôvác'),
    'SLL' => new C('SLL', 'Leone Sierra Leone', plurals: ['other' => 'Leone Sierra Leone']),
    'SOS' => new C('SOS', 'Schilling Somali', plurals: ['other' => 'Schilling Somali']),
    'SRD' => new C('SRD', 'Đô la Suriname', narrow: '$', plurals: ['other' => 'Đô la Suriname']),
    'SRG' => new C('SRG', 'Đồng Guilder Surinam'),
    'SSP' => new C('SSP', 'Bảng Nam Sudan', narrow: '£', plurals: ['other' => 'Bảng Nam Sudan']),
    'STD' => new C('STD', 'Dobra São Tomé và Príncipe (1977–2017)', plurals: ['other' => 'Dobra São Tomé và Príncipe (1977–2017)']),
    'STN' => new C('STN', 'Dobra São Tomé và Príncipe', narrow: 'Db', plurals: ['other' => 'Dobra São Tomé và Príncipe']),
    'SUR' => new C('SUR', 'Đồng Rúp Sô viết'),
    'SVC' => new C('SVC', 'Colón El Salvador'),
    'SYP' => new C('SYP', 'Bảng Syria', narrow: '£', plurals: ['other' => 'Bảng Syria']),
    'SZL' => new C('SZL', 'Lilangeni Swaziland', plurals: ['other' => 'Lilangeni Swaziland']),
    'THB' => new C('THB', 'Bạt Thái Lan', '฿', narrow: '฿', plurals: ['other' => 'Bạt Thái Lan']),
    'TJR' => new C('TJR', 'Đồng Rúp Tajikistan'),
    'TJS' => new C('TJS', 'Somoni Tajikistan', plurals: ['other' => 'Somoni Tajikistan']),
    'TMM' => new C('TMM', 'Đồng Manat Turkmenistan (1993–2009)'),
    'TMT' => new C('TMT', 'Manat Turkmenistan', plurals: ['other' => 'Manat Turkmenistan']),
    'TND' => new C('TND', 'Dinar Tunisia', plurals: ['other' => 'Dinar Tunisia'], minorUnits: 3),
    'TOP' => new C('TOP', 'Paʻanga Tonga', narrow: 'T$', plurals: ['other' => 'Paʻanga Tonga']),
    'TPE' => new C('TPE', 'Đồng Escudo Timor'),
    'TRL' => new C('TRL', 'Lia Thổ Nhĩ Kỳ (1922–2005)', plurals: ['other' => 'lia Thổ Nhĩ Kỳ (1922–2005)']),
    'TRY' => new C('TRY', 'Lia Thổ Nhĩ Kỳ', narrow: '₺', plurals: ['other' => 'Lia Thổ Nhĩ Kỳ']),
    'TTD' => new C('TTD', 'Đô la Trinidad và Tobago', narrow: '$', plurals: ['other' => 'Đô la Trinidad và Tobago']),
    'TWD' => new C('TWD', 'Đô la Đài Loan mới', 'NT$', narrow: 'NT$', plurals: ['other' => 'Đô la Đài Loan mới']),
    'TZS' => new C('TZS', 'Shilling Tanzania', plurals: ['other' => 'Shilling Tanzania']),
    'UAH' => new C('UAH', 'Hryvnia Ukraina', narrow: '₴', plurals: ['other' => 'Hryvnia Ucraina']),
    'UAK' => new C('UAK', 'Đồng Karbovanets Ucraina'),
    'UGS' => new C('UGS', 'Đồng Shilling Uganda (1966–1987)'),
    'UGX' => new C('UGX', 'Shilling Uganda', plurals: ['other' => 'Shilling Uganda'], minorUnits: 0),
    'USD' => new C('USD', 'Đô la Mỹ', 'US$', narrow: '$', plurals: ['other' => 'Đô la Mỹ']),
    'USN' => new C('USN', 'Đô la Mỹ (Ngày tiếp theo)'),
    'USS' => new C('USS', 'Đô la Mỹ (Cùng ngày)'),
    'UYI' => new C('UYI', 'Đồng Peso Uruguay (Đơn vị Theo chỉ số)', minorUnits: 0),
    'UYP' => new C('UYP', 'Đồng Peso Uruguay (1975–1993)'),
    'UYU' => new C('UYU', 'Peso Uruguay', narrow: '$', plurals: ['other' => 'Peso Uruguay']),
    'UZS' => new C('UZS', 'Som Uzbekistan', plurals: ['other' => 'Som Uzbekistan']),
    'VEB' => new C('VEB', 'Đồng bolívar của Venezuela (1871–2008)'),
    'VEF' => new C('VEF', 'Bolívar Venezuela (2008–2018)', narrow: 'Bs', plurals: ['other' => 'Bolívar Venezuela (2008–2018)']),
    'VES' => new C('VES', 'Bolívar Venezuela', plurals: ['other' => 'Bolívar Venezuela']),
    'VND' => new C('VND', 'Đồng Việt Nam', '₫', narrow: '₫', plurals: ['other' => 'Đồng Việt Nam'], minorUnits: 0),
    'VNN' => new C('VNN', 'Đồng Việt Nam (1978–1985)'),
    'VUV' => new C('VUV', 'Vatu Vanuatu', plurals: ['other' => 'Vatu Vanuatu'], minorUnits: 0),
    'WST' => new C('WST', 'Tala Samoa', plurals: ['other' => 'Tala Samoa']),
    'XAF' => new C('XAF', 'Franc CFA Trung Phi', 'FCFA', plurals: ['other' => 'franc CFA Trung Phi'], minorUnits: 0),
    'XAG' => new C('XAG', 'Bạc'),
    'XAU' => new C('XAU', 'Vàng'),
    'XBA' => new C('XBA', 'Đơn vị Tổng hợp Châu Âu'),
    'XBB' => new C('XBB', 'Đơn vị Tiền tệ Châu Âu'),
    'XBC' => new C('XBC', 'Đơn vị Kế toán Châu Âu (XBC)'),
    'XBD' => new C('XBD', 'Đơn vị Kế toán Châu Âu (XBD)'),
    'XCD' => new C('XCD', 'Đô la Đông Caribê', 'EC$', narrow: '$', plurals: ['other' => 'Đô la Đông Caribê']),
    'XDR' => new C('XDR', 'Quyền Rút vốn Đặc biệt'),
    'XEU' => new C('XEU', 'Đơn vị Tiền Châu Âu'),
    'XFO' => new C('XFO', 'Đồng France Pháp Vàng'),
    'XFU' => new C('XFU', 'Đồng UIC-Franc Pháp'),
    'XOF' => new C('XOF', 'Franc CFA Tây Phi', "F\u{202F}CFA", plurals: ['other' => 'franc CFA Tây Phi'], minorUnits: 0),
    'XPD' => new C('XPD', 'Paladi'),
    'XPF' => new C('XPF', 'Franc CFP', 'CFPF', plurals: ['other' => 'Franc CFP'], minorUnits: 0),
    'XPT' => new C('XPT', 'Bạch kim'),
    'XRE' => new C('XRE', 'Quỹ RINET'),
    'XTS' => new C('XTS', 'Mã Tiền tệ Kiểm tra'),
    'XXX' => new C('XXX', 'Tiền tệ chưa biết', plurals: ['other' => '(tiền tệ chưa biết)']),
    'YDD' => new C('YDD', 'Đồng Dinar Yemen'),
    'YER' => new C('YER', 'Rial Yemen', plurals: ['other' => 'Rial Yemen']),
    'YUD' => new C('YUD', 'Đồng Dinar Nam Tư Xu (1966–1990)'),
    'YUM' => new C('YUM', 'Đồng Dinar Nam Tư Mới (1994–2002)'),
    'YUN' => new C('YUN', 'Đồng Dinar Nam Tư Có thể chuyển đổi (1990–1992)'),
    'YUR' => new C('YUR', 'Đồng Dinar Nam Tư Tái cơ cấu (1992–1993)'),
    'ZAL' => new C('ZAL', 'Đồng Rand Nam Phi (tài chính)'),
    'ZAR' => new C('ZAR', 'Rand Nam Phi', narrow: 'R', plurals: ['other' => 'Rand Nam Phi']),
    'ZMK' => new C('ZMK', 'Đồng kwacha của Zambia (1968–2012)'),
    'ZMW' => new C('ZMW', 'Kwacha Zambia', narrow: 'ZK', plurals: ['other' => 'Kwacha Zambia']),
    'ZRN' => new C('ZRN', 'Đồng Zaire Mới (1993–1998)'),
    'ZRZ' => new C('ZRZ', 'Đồng Zaire (1971–1993)'),
    'ZWD' => new C('ZWD', 'Đồng Đô la Zimbabwe (1980–2008)'),
    'ZWL' => new C('ZWL', 'Đồng Đô la Zimbabwe (2009)'),
    'ZWR' => new C('ZWR', 'Đồng Đô la Zimbabwe (2008)'),
];