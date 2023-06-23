<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'ADP' => new C('ADP', 'Andorrskur peseti'),
    'AED' => new C('AED', 'arabískt dírham', plurals: ['one' => 'arabískt dírham', 'other' => 'arabísk dírhöm']),
    'AFN' => new C('AFN', 'afgani', narrow: '؋', plurals: ['one' => 'afgani', 'other' => 'afganar']),
    'ALL' => new C('ALL', 'albanskt lek', plurals: ['one' => 'albanskt lek', 'other' => 'albönsk lek']),
    'AMD' => new C('AMD', 'armenskt dramm', narrow: '֏', plurals: ['one' => 'armenskt dramm', 'other' => 'armensk drömm']),
    'ANG' => new C('ANG', 'hollenskt Antillugyllini', plurals: ['one' => 'hollenskt Antillugyllini', 'other' => 'hollensk Antillugyllini']),
    'AOA' => new C('AOA', 'angólsk kvansa', narrow: 'Kz', plurals: ['one' => 'angólsk kvansa', 'other' => 'angólskar kvönsur']),
    'ARA' => new C('ARA', 'Argentine Austral'),
    'ARP' => new C('ARP', 'Argentískur pesi (1983–1985)', plurals: 'Argentískur pesi (1983–1985)'),
    'ARS' => new C('ARS', 'argentínskur pesi', narrow: '$', plurals: ['one' => 'argentínskur pesi', 'other' => 'argentínskir pesar']),
    'ATS' => new C('ATS', 'Austurrískur skildingur'),
    'AUD' => new C('AUD', 'ástralskur dalur', narrow: '$', plurals: ['one' => 'ástralskur dalur', 'other' => 'ástralskir dalir']),
    'AWG' => new C('AWG', 'arúbönsk flórína', plurals: ['one' => 'arúbönsk flórína', 'other' => 'arúbanskar flórínur']),
    'AZN' => new C('AZN', 'aserskt manat', narrow: '₼', plurals: ['one' => 'aserskt manat', 'other' => 'asersk manöt']),
    'BAM' => new C('BAM', 'skiptanlegt Bosníu og Hersegóvínu-mark', narrow: 'KM', plurals: ['one' => 'skiptanlegt Bosníu og Hersegóvínu-mark', 'other' => 'skiptanleg Bosníu og Hersegóvínu-mörk']),
    'BBD' => new C('BBD', 'barbadoskur dalur', narrow: '$', plurals: ['one' => 'barbadoskur dalur', 'other' => 'barbadoskir dalir']),
    'BDT' => new C('BDT', 'bangladessk taka', narrow: '৳', plurals: ['one' => 'bangladessk taka', 'other' => 'bangladesskar tökur']),
    'BEF' => new C('BEF', 'Belgískur franki'),
    'BGL' => new C('BGL', 'Lef'),
    'BGN' => new C('BGN', 'búlgarskt lef', plurals: ['one' => 'búlgarskt lef', 'other' => 'búlgörsk lef']),
    'BHD' => new C('BHD', 'bareinskur denari', plurals: ['one' => 'bareinskur denari', 'other' => 'bareinskir denarar'], minorUnits: 3),
    'BIF' => new C('BIF', 'búrúndískur franki', plurals: ['one' => 'búrúndískur franki', 'other' => 'búrúndískir frankar'], minorUnits: 0),
    'BMD' => new C('BMD', 'Bermúdadalur', narrow: '$', plurals: ['one' => 'Bermúdadalur', 'other' => 'Bermúdadalir']),
    'BND' => new C('BND', 'brúneiskur dalur', narrow: '$', plurals: ['one' => 'brúneiskur dalur', 'other' => 'brúneiskir dalir']),
    'BOB' => new C('BOB', 'bólivíani', narrow: 'Bs', plurals: ['one' => 'bólivíani', 'other' => 'bólivíanar']),
    'BOP' => new C('BOP', 'Bólivískur pesi', plurals: 'Bólivískur pesi'),
    'BOV' => new C('BOV', 'Bolivian Mvdol'),
    'BRL' => new C('BRL', 'brasilískt ríal', narrow: 'R$', plurals: ['one' => 'brasilískt ríal', 'other' => 'brasilísk ríöl']),
    'BSD' => new C('BSD', 'Bahamadalur', narrow: '$', plurals: ['one' => 'Bahamadalur', 'other' => 'Bahamadalir']),
    'BTN' => new C('BTN', 'bútanskt núltrum', plurals: ['one' => 'bútanskt núltrum', 'other' => 'bútönsk núltrum']),
    'BUK' => new C('BUK', 'Búrmverskt kjat'),
    'BWP' => new C('BWP', 'botsvönsk púla', narrow: 'P', plurals: ['one' => 'botsvönsk púla', 'other' => 'botsvanskar púlur']),
    'BYN' => new C('BYN', 'hvítrússnesk rúbla', plurals: ['one' => 'hvítrússnesk rúbla', 'other' => 'hvítrússneskar rúblur']),
    'BYR' => new C('BYR', 'hvítrússnesk rúbla (2000–2016)', plurals: ['one' => 'hvítrússnesk rúbla (2000–2016)', 'other' => 'hvítrússneskar rúblur (2000–2016)']),
    'BZD' => new C('BZD', 'belískur dalur', narrow: '$', plurals: ['one' => 'belískur dalur', 'other' => 'belískir dalir']),
    'CAD' => new C('CAD', 'Kanadadalur', narrow: '$', plurals: ['one' => 'Kanadadalur', 'other' => 'Kanadadalir']),
    'CDF' => new C('CDF', 'kongóskur franki', plurals: ['one' => 'kongóskur franki', 'other' => 'kongóskir frankar']),
    'CHF' => new C('CHF', 'svissneskur franki', plurals: ['one' => 'svissneskur franki', 'other' => 'svissneskir frankar']),
    'CLF' => new C('CLF', 'Chilean Unidades de Fomento', minorUnits: 4),
    'CLP' => new C('CLP', 'síleskur pesi', narrow: '$', plurals: ['one' => 'síleskur pesi', 'other' => 'síleskir pesar'], minorUnits: 0),
    'CNH' => new C('CNH', 'kínverskt júan (utan heimalands)', plurals: ['one' => 'kínverskt júan (utan heimalands)', 'other' => 'kínversk júön (utan heimalands)']),
    'CNY' => new C('CNY', 'kínverskt júan', 'CN¥', '¥', ['one' => 'kínverskt júan', 'other' => 'kínversk júön']),
    'COP' => new C('COP', 'kólumbískur pesi', narrow: '$', plurals: ['one' => 'kólumbískur pesi', 'other' => 'kólumbískir pesar']),
    'CRC' => new C('CRC', 'kostarískt kólon', narrow: '₡', plurals: ['one' => 'kostarískt kólon', 'other' => 'kostarísk kólon']),
    'CSK' => new C('CSK', 'Tékknesk króna, eldri'),
    'CUC' => new C('CUC', 'kúbverskur skiptanlegur pesi', narrow: '$', plurals: ['one' => 'kúbverskur skiptanlegur pesi', 'other' => 'kúbverskir skiptanlegir pesar']),
    'CUP' => new C('CUP', 'kúbverskur pesi', narrow: '$', plurals: ['one' => 'kúbverskur pesi', 'other' => 'kúbverskir pesar']),
    'CVE' => new C('CVE', 'grænhöfðeyskur skúti', plurals: ['one' => 'grænhöfðeyskur skúti', 'other' => 'grænhöfðeyskir skútar']),
    'CYP' => new C('CYP', 'Kýpverskt pund'),
    'CZK' => new C('CZK', 'tékknesk króna', narrow: 'Kč', plurals: ['one' => 'tékknesk króna', 'other' => 'tékkneskar krónur']),
    'DDM' => new C('DDM', 'Austurþýskt mark'),
    'DEM' => new C('DEM', 'Þýskt mark'),
    'DJF' => new C('DJF', 'djíbútískur franki', plurals: ['one' => 'djíbútískur franki', 'other' => 'djíbútískir frankar'], minorUnits: 0),
    'DKK' => new C('DKK', 'dönsk króna', narrow: 'kr.', plurals: ['one' => 'dönsk króna', 'other' => 'danskar krónur']),
    'DOP' => new C('DOP', 'dóminískur pesi', narrow: '$', plurals: ['one' => 'dóminískur pesi', 'other' => 'dóminískir pesar']),
    'DZD' => new C('DZD', 'alsírskur denari', plurals: ['one' => 'alsírskur denari', 'other' => 'alsírskir denarar']),
    'ECS' => new C('ECS', 'Ecuador Sucre'),
    'EEK' => new C('EEK', 'Eistnesk króna', plurals: ['one' => 'eistnesk króna', 'other' => 'eistneskar krónur']),
    'EGP' => new C('EGP', 'egypskt pund', narrow: 'E£', plurals: ['one' => 'egypskt pund', 'other' => 'egypsk pund']),
    'ERN' => new C('ERN', 'erítresk nakfa', plurals: ['one' => 'erítresk nakfa', 'other' => 'erítreskar nökfur']),
    'ESP' => new C('ESP', 'Spænskur peseti', narrow: '₧'),
    'ETB' => new C('ETB', 'eþíópískt birr', plurals: ['one' => 'eþíópískt birr', 'other' => 'eþíópísk birr']),
    'EUR' => new C('EUR', 'evra', narrow: '€', plurals: ['one' => 'evra', 'other' => 'evrur']),
    'FIM' => new C('FIM', 'Finnskt mark'),
    'FJD' => new C('FJD', 'fídjískur dalur', narrow: '$', plurals: ['one' => 'fídjískur dalur', 'other' => 'fídjískir dalir']),
    'FKP' => new C('FKP', 'falklenskt pund', narrow: '£', plurals: ['one' => 'falklenskt pund', 'other' => 'falklensk pund']),
    'FRF' => new C('FRF', 'Franskur franki'),
    'GBP' => new C('GBP', 'sterlingspund', narrow: '£', plurals: 'sterlingspund'),
    'GEL' => new C('GEL', 'georgískur lari', narrow: '₾', plurals: ['one' => 'georgískur lari', 'other' => 'georgískir larar']),
    'GHS' => new C('GHS', 'ganverskur sedi', narrow: 'GH₵', plurals: ['one' => 'ganverskur sedi', 'other' => 'ganverskir sedar']),
    'GIP' => new C('GIP', 'Gíbraltarspund', narrow: '£', plurals: 'Gíbraltarspund'),
    'GMD' => new C('GMD', 'gambískur dalasi', plurals: ['one' => 'gambískur dalasi', 'other' => 'gambískir dalasar']),
    'GNF' => new C('GNF', 'Gíneufranki', narrow: 'FG', plurals: ['one' => 'Gíneufranki', 'other' => 'Gíneufrankar'], minorUnits: 0),
    'GRD' => new C('GRD', 'Drakma'),
    'GTQ' => new C('GTQ', 'gvatemalskt kvesal', narrow: 'Q', plurals: ['one' => 'gvatemalskt kvesal', 'other' => 'gvatemölsk kvesöl']),
    'GWE' => new C('GWE', 'Portúgalskur, gíneskur skúti'),
    'GYD' => new C('GYD', 'gvæjanskur dalur', narrow: '$', plurals: ['one' => 'gvæjanskur dalur', 'other' => 'gvæjanskir dalir']),
    'HKD' => new C('HKD', 'Hong Kong-dalur', 'HK$', '$', ['one' => 'Hong Kong-dalur', 'other' => 'Hong Kong-dalir']),
    'HNL' => new C('HNL', 'hondúrsk lempíra', narrow: 'L', plurals: ['one' => 'hondúrsk lempíra', 'other' => 'hondúrskar lempírur']),
    'HRK' => new C('HRK', 'króatísk kúna', narrow: 'kn', plurals: ['one' => 'króatísk kúna', 'other' => 'króatískar kúnur']),
    'HTG' => new C('HTG', 'haítískur gúrdi', plurals: ['one' => 'haítískur gúrdi', 'other' => 'haítískir gúrdar']),
    'HUF' => new C('HUF', 'ungversk fórinta', narrow: 'Ft', plurals: ['one' => 'ungversk fórinta', 'other' => 'ungverskar fórintur']),
    'IDR' => new C('IDR', 'indónesísk rúpía', narrow: 'Rp', plurals: ['one' => 'indónesísk rúpía', 'other' => 'indónesískar rúpíur']),
    'IEP' => new C('IEP', 'Írskt pund'),
    'ILP' => new C('ILP', 'Ísraelskt pund'),
    'ILS' => new C('ILS', 'nýr ísraelskur sikill', '₪', '₪', ['one' => 'nýr ísraelskur sikill', 'other' => 'nýir ísraelskir siklar']),
    'INR' => new C('INR', 'indversk rúpía', narrow: '₹', plurals: ['one' => 'indversk rúpía', 'other' => 'indverskar rúpíur']),
    'IQD' => new C('IQD', 'írakskur denari', plurals: ['one' => 'írakskur denari', 'other' => 'írakskir denarar'], minorUnits: 3),
    'IRR' => new C('IRR', 'íranskt ríal', plurals: ['one' => 'íranskt ríal', 'other' => 'írönsk ríöl']),
    'ISK' => new C('ISK', 'íslensk króna', 'kr.', 'kr.', ['one' => 'íslensk króna', 'other' => 'íslenskar krónur'], 0),
    'ITL' => new C('ITL', 'Ítölsk líra'),
    'JMD' => new C('JMD', 'jamaískur dalur', narrow: '$', plurals: ['one' => 'jamaískur dalur', 'other' => 'jamaískir dalir']),
    'JOD' => new C('JOD', 'jórdanskur denari', plurals: ['one' => 'jórdanskur denari', 'other' => 'jórdanskir denarar'], minorUnits: 3),
    'JPY' => new C('JPY', 'japanskt jen', 'JP¥', '¥', ['one' => 'japanskt jen', 'other' => 'japönsk jen'], 0),
    'KES' => new C('KES', 'kenískur skildingur', plurals: ['one' => 'kenískur skildingur', 'other' => 'kenískir skildingar']),
    'KGS' => new C('KGS', 'kirgiskt som', plurals: ['one' => 'kirgiskt som', 'other' => 'kirgisk som']),
    'KHR' => new C('KHR', 'kambódískt ríal', narrow: '៛', plurals: ['one' => 'kambódískt ríal', 'other' => 'kambódísk ríöl']),
    'KMF' => new C('KMF', 'kómoreyskur franki', narrow: 'CF', plurals: ['one' => 'kómoreyskur franki', 'other' => 'kómoreyskir frankar'], minorUnits: 0),
    'KPW' => new C('KPW', 'norðurkóreskt vonn', narrow: '₩', plurals: ['one' => 'norðurkóreskt vonn', 'other' => 'norðurkóresk vonn']),
    'KRW' => new C('KRW', 'suðurkóreskt vonn', narrow: '₩', plurals: ['one' => 'suðurkóreskt vonn', 'other' => 'suðurkóresk vonn'], minorUnits: 0),
    'KWD' => new C('KWD', 'kúveiskur denari', plurals: ['one' => 'kúveiskur denari', 'other' => 'kúveiskir denarar'], minorUnits: 3),
    'KYD' => new C('KYD', 'caymaneyskur dalur', narrow: '$', plurals: ['one' => 'caymaneyskur dalur', 'other' => 'caymaneyskir dalir']),
    'KZT' => new C('KZT', 'kasakst tengi', narrow: '₸', plurals: ['one' => 'kasakst tengi', 'other' => 'kasöksk tengi']),
    'LAK' => new C('LAK', 'laoskt kip', narrow: '₭', plurals: ['one' => 'laoskt kip', 'other' => 'laosk kip']),
    'LBP' => new C('LBP', 'líbanskt pund', narrow: 'L£', plurals: ['one' => 'líbanskt pund', 'other' => 'líbönsk pund']),
    'LKR' => new C('LKR', 'srílönsk rúpía', narrow: 'Rs', plurals: ['one' => 'srílönsk rúpía', 'other' => 'srílanskar rúpíur']),
    'LRD' => new C('LRD', 'líberískur dalur', narrow: '$', plurals: ['one' => 'líberískur dalur', 'other' => 'líberískir dalir']),
    'LSL' => new C('LSL', 'lesótóskur lóti', plurals: ['one' => 'lesótóskur lóti', 'other' => 'lesótóskir lótar']),
    'LTL' => new C('LTL', 'Litháískt lít', narrow: 'Lt', plurals: ['one' => 'litháískt lít', 'other' => 'litháísk lít']),
    'LTT' => new C('LTT', 'Lithuanian Talonas'),
    'LUF' => new C('LUF', 'Lúxemborgarfranki'),
    'LVL' => new C('LVL', 'Lettneskt lat', narrow: 'Ls', plurals: ['one' => 'lettneskt lat', 'other' => 'lettnesk löt']),
    'LVR' => new C('LVR', 'Lettnesk rúbla'),
    'LYD' => new C('LYD', 'líbískur denari', plurals: ['one' => 'líbískur denari', 'other' => 'líbískir denarar'], minorUnits: 3),
    'MAD' => new C('MAD', 'marokkóskt dírham', plurals: ['one' => 'marokkóskt dírham', 'other' => 'marokkósk dírhöm']),
    'MAF' => new C('MAF', 'Marokkóskur franki'),
    'MDL' => new C('MDL', 'moldavískt lei', plurals: ['one' => 'moldavískt lei', 'other' => 'moldavísk lei']),
    'MGA' => new C('MGA', 'Madagaskararjari', narrow: 'Ar', plurals: ['one' => 'Madagaskararjari', 'other' => 'Madagaskararjarar']),
    'MGF' => new C('MGF', 'Madagaskur franki'),
    'MKD' => new C('MKD', 'makedónskur denari', plurals: ['one' => 'makedónskur denari', 'other' => 'makedónskir denarar']),
    'MLF' => new C('MLF', 'Malískur franki'),
    'MMK' => new C('MMK', 'mjanmarskt kjat', narrow: 'K', plurals: ['one' => 'mjanmarskt kjat', 'other' => 'mjanmörsk kjöt']),
    'MNT' => new C('MNT', 'mongólskur túríkur', narrow: '₮', plurals: ['one' => 'mongólskur túríkur', 'other' => 'mongólskir túríkar']),
    'MOP' => new C('MOP', 'makaósk pataka', plurals: ['one' => 'makaósk pataka', 'other' => 'makaóskar patökur']),
    'MRO' => new C('MRO', 'márítönsk úgía (1973–2017)', plurals: ['one' => 'máritönsk úgía (1973–2017)', 'other' => 'máritanskar úgíur (1973–2017)']),
    'MRU' => new C('MRU', 'márítönsk úgía', plurals: ['one' => 'máritönsk úgía', 'other' => 'máritanskar úgíur']),
    'MTL' => new C('MTL', 'Meltnesk líra'),
    'MTP' => new C('MTP', 'Maltneskt pund'),
    'MUR' => new C('MUR', 'máritísk rúpía', narrow: 'Rs', plurals: ['one' => 'máritísk rúpía', 'other' => 'máritískar rúpíur']),
    'MVR' => new C('MVR', 'maldíveysk rúpía', plurals: ['one' => 'maldíveysk rúpía', 'other' => 'maldíveyskar rúpíur']),
    'MWK' => new C('MWK', 'malavísk kvaka', plurals: ['one' => 'malavísk kvaka', 'other' => 'malavískar kvökur']),
    'MXN' => new C('MXN', 'mexíkóskur pesi', narrow: '$', plurals: ['one' => 'mexíkóskur pesi', 'other' => 'mexíkóskir pesar']),
    'MXP' => new C('MXP', 'Mexíkóskur silfurpesi (1861–1992)', plurals: 'Mexíkóskur silfurpesi (1861–1992)'),
    'MXV' => new C('MXV', 'Mexíkóskur pesi, UDI'),
    'MYR' => new C('MYR', 'malasískt ringit', narrow: 'RM', plurals: ['one' => 'malasískt ringit', 'other' => 'malasísk ringit']),
    'MZE' => new C('MZE', 'Mósambískur skúti'),
    'MZN' => new C('MZN', 'mósambískt metikal', plurals: ['one' => 'mósambískt metikal', 'other' => 'mósambísk metiköl']),
    'NAD' => new C('NAD', 'namibískur dalur', narrow: '$', plurals: ['one' => 'namibískur dalur', 'other' => 'namibískir dalir']),
    'NGN' => new C('NGN', 'nígerísk næra', narrow: '₦', plurals: ['one' => 'nígerísk næra', 'other' => 'nígerískar nærur']),
    'NIC' => new C('NIC', 'Níkarögsk kordóva (1988–1991)', plurals: ['one' => 'Níkarögsk kordóva (1988–1991)', 'other' => 'Níkaragskar kordóvur (1988–1991)']),
    'NIO' => new C('NIO', 'níkarögsk kordóva', narrow: 'C$', plurals: ['one' => 'níkarögsk kordóva', 'other' => 'níkaragskar kordóvur']),
    'NLG' => new C('NLG', 'Hollenskt gyllini'),
    'NOK' => new C('NOK', 'norsk króna', narrow: 'kr.', plurals: ['one' => 'norsk króna', 'other' => 'norskar krónur']),
    'NPR' => new C('NPR', 'nepölsk rúpía', narrow: 'Rs', plurals: ['one' => 'nepölsk rúpía', 'other' => 'nepalskar rúpíur']),
    'NZD' => new C('NZD', 'nýsjálenskur dalur', narrow: '$', plurals: ['one' => 'nýsjálenskur dalur', 'other' => 'nýsjálenskir dalir']),
    'OMR' => new C('OMR', 'ómanskt ríal', plurals: ['one' => 'ómanskt ríal', 'other' => 'ómönsk ríöl'], minorUnits: 3),
    'PAB' => new C('PAB', 'balbói', plurals: ['one' => 'balbói', 'other' => 'balbóar']),
    'PEN' => new C('PEN', 'perúskt sól', plurals: ['one' => 'perúskt sól', 'other' => 'perúsk sól']),
    'PGK' => new C('PGK', 'papúsk kína', plurals: ['one' => 'papúsk kína', 'other' => 'papúskar kínur']),
    'PHP' => new C('PHP', 'filippseyskur pesi', narrow: '₱', plurals: ['one' => 'filippseyskur pesi', 'other' => 'filippseyskir pesar']),
    'PKR' => new C('PKR', 'pakistönsk rúpía', narrow: 'Rs', plurals: ['one' => 'pakistönsk rúpía', 'other' => 'pakistanskar rúpíur']),
    'PLN' => new C('PLN', 'pólskt slot', narrow: 'zł', plurals: ['one' => 'pólskt slot', 'other' => 'pólsk slot']),
    'PLZ' => new C('PLZ', 'Slot'),
    'PTE' => new C('PTE', 'Portúgalskur skúti'),
    'PYG' => new C('PYG', 'paragvæskt gvaraní', narrow: '₲', plurals: ['one' => 'paragvæskt gvaraní', 'other' => 'paragvæsk gvaraní'], minorUnits: 0),
    'QAR' => new C('QAR', 'katarskt ríal', plurals: ['one' => 'katarskt ríal', 'other' => 'katörsk ríöl']),
    'ROL' => new C('ROL', 'Rúmenskt lei (1952–2006)', plurals: 'Rúmenskt lei (1952–2006)'),
    'RON' => new C('RON', 'rúmenskt lei', narrow: 'lei', plurals: ['one' => 'rúmenskt lei', 'other' => 'rúmensk lei']),
    'RSD' => new C('RSD', 'serbneskur denari', plurals: ['one' => 'serbneskur denari', 'other' => 'serbneskir denarar']),
    'RUB' => new C('RUB', 'rússnesk rúbla', narrow: '₽', plurals: ['one' => 'rússnesk rúbla', 'other' => 'rússneskar rúblur']),
    'RUR' => new C('RUR', 'Rússnesk rúbla (1991–1998)'),
    'RWF' => new C('RWF', 'rúandskur franki', narrow: 'RF', plurals: ['one' => 'rúandskur franki', 'other' => 'rúandskir frankar'], minorUnits: 0),
    'SAR' => new C('SAR', 'sádíarabískt ríal', plurals: ['one' => 'sádiarabískt ríal', 'other' => 'sádiarabísk ríöl']),
    'SBD' => new C('SBD', 'salómonseyskur dalur', narrow: '$', plurals: ['one' => 'salómonseyskur dalur', 'other' => 'salómonseyskir dalir']),
    'SCR' => new C('SCR', 'Seychellesrúpía', plurals: ['one' => 'Seychellesrúpía', 'other' => 'Seychellesrúpíur']),
    'SDD' => new C('SDD', 'Súdanskur denari'),
    'SDG' => new C('SDG', 'súdanskt pund', plurals: ['one' => 'súdanskt pund', 'other' => 'súdönsk pund']),
    'SDP' => new C('SDP', 'Súdanskt pund (1957–1998)'),
    'SEK' => new C('SEK', 'sænsk króna', narrow: 'kr.', plurals: ['one' => 'sænsk króna', 'other' => 'sænskar krónur']),
    'SGD' => new C('SGD', 'singapúrskur dalur', narrow: '$', plurals: ['one' => 'singapúrskur dalur', 'other' => 'singapúrskir dalir']),
    'SHP' => new C('SHP', 'helenskt pund', narrow: '£', plurals: ['one' => 'helenskt pund', 'other' => 'helensk pund']),
    'SIT' => new C('SIT', 'Slóvenskur dalur'),
    'SKK' => new C('SKK', 'Slóvakísk króna'),
    'SLL' => new C('SLL', 'síerraleónsk ljóna', plurals: ['one' => 'síerraleónsk ljóna', 'other' => 'síerraleónskar ljónur']),
    'SOS' => new C('SOS', 'sómalískur skildingur', plurals: ['one' => 'sómalískur skildingur', 'other' => 'sómalískir skildingar']),
    'SRD' => new C('SRD', 'Súrínamdalur', narrow: '$', plurals: ['one' => 'Súrínamdalur', 'other' => 'Súrínamdalir']),
    'SRG' => new C('SRG', 'Suriname Guilder'),
    'SSP' => new C('SSP', 'suðursúdanskt pund', narrow: '£', plurals: ['one' => 'suðursúdanskt pund', 'other' => 'suðursúdönsk pund']),
    'STD' => new C('STD', 'Saó Tóme og Prinsípe-dóbra (1977–2017)', plurals: ['one' => 'Saó Tóme og Prinsípe-dóbra (1977–2017)', 'other' => 'Saó Tóme og Prinsípe-dóbrur (1977–2017)']),
    'STN' => new C('STN', 'Saó Tóme og Prinsípe-dóbra', narrow: 'Db', plurals: ['one' => 'Saó Tóme og Prinsípe-dóbra', 'other' => 'Saó Tóme og Prinsípe-dóbrur']),
    'SUR' => new C('SUR', 'Soviet Rouble'),
    'SVC' => new C('SVC', 'El Salvador Colon', plurals: 'El Salvador Colon'),
    'SYP' => new C('SYP', 'sýrlenskt pund', narrow: '£', plurals: ['one' => 'sýrlenskt pund', 'other' => 'sýrlensk pund']),
    'SZL' => new C('SZL', 'svasílenskur lílangeni', plurals: ['one' => 'svasílenskur lílangeni', 'other' => 'svasílenskir lílangenar']),
    'THB' => new C('THB', 'taílenskt bat', narrow: '฿', plurals: ['one' => 'taílenskt bat', 'other' => 'taílensk böt']),
    'TJR' => new C('TJR', 'Tadsjiksk rúbla'),
    'TJS' => new C('TJS', 'tadsjikskur sómóni', plurals: ['one' => 'tadsjikskur sómóni', 'other' => 'tadsjikskir sómónar']),
    'TMM' => new C('TMM', 'Túrkmenskt manat (1993–2009)', plurals: 'Túrkmenskt manat (1993–2009)'),
    'TMT' => new C('TMT', 'túrkmenskt manat', plurals: ['one' => 'túrkmenskt manat', 'other' => 'túrkmensk manöt']),
    'TND' => new C('TND', 'túniskur denari', plurals: ['one' => 'túniskur denari', 'other' => 'túniskir denarar'], minorUnits: 3),
    'TOP' => new C('TOP', 'Tongapanga', narrow: 'T$', plurals: ['one' => 'Tongapanga', 'other' => 'Tongapöngur']),
    'TPE' => new C('TPE', 'Tímorskur skúti'),
    'TRL' => new C('TRL', 'Tyrknesk líra (1922–2005)'),
    'TRY' => new C('TRY', 'tyrknesk líra', narrow: '₺', plurals: ['one' => 'tyrknesk líra', 'other' => 'tyrkneskar lírur']),
    'TTD' => new C('TTD', 'Trínidad og Tóbagó-dalur', narrow: '$', plurals: ['one' => 'Trínidad og Tóbagó-dalur', 'other' => 'Trínidad og Tóbagó-dalir']),
    'TWD' => new C('TWD', 'taívanskur dalur', narrow: 'NT$', plurals: ['one' => 'taívanskur dalur', 'other' => 'taívanskir dalir']),
    'TZS' => new C('TZS', 'tansanískur skildingur', plurals: ['one' => 'tansanískur skildingur', 'other' => 'tansanískir skildingar']),
    'UAH' => new C('UAH', 'úkraínsk hrinja', narrow: '₴', plurals: ['one' => 'úkraínsk hrinja', 'other' => 'úkraínskar hrinjur']),
    'UAK' => new C('UAK', 'Ukrainian Karbovanetz'),
    'UGX' => new C('UGX', 'úgandskur skildingur', plurals: ['one' => 'úgandskur skildingur', 'other' => 'úgandskir skildingar'], minorUnits: 0),
    'USD' => new C('USD', 'Bandaríkjadalur', narrow: '$', plurals: ['one' => 'Bandaríkjadalur', 'other' => 'Bandaríkjadalir']),
    'USN' => new C('USN', 'Bandaríkjadalur (næsta dag)', plurals: 'Bandaríkjadalur (næsta dag)'),
    'USS' => new C('USS', 'Bandaríkjadalur (sama dag)', plurals: 'Bandaríkjadalur (sama dag)'),
    'UYU' => new C('UYU', 'úrúgvæskur pesi', narrow: '$', plurals: ['one' => 'úrúgvæskur pesi', 'other' => 'úrúgvæskir pesar']),
    'UZS' => new C('UZS', 'úsbekskt súm', plurals: ['one' => 'úsbekskt súm', 'other' => 'úsbeksk súm']),
    'VEB' => new C('VEB', 'Bolívar í Venesúela (1871–2008)'),
    'VEF' => new C('VEF', 'venesúelskur bólívari (2008–2018)', narrow: 'Bs', plurals: ['one' => 'venesúelskur bólívari (2008–2018)', 'other' => 'venesúelskir bólívarar (2008–2018)']),
    'VES' => new C('VES', 'venesúelskur bólívari', plurals: ['one' => 'venesúelskur bólívari', 'other' => 'venesúelskir bólívarar']),
    'VND' => new C('VND', 'víetnamskt dong', narrow: '₫', plurals: ['one' => 'víetnamskt dong', 'other' => 'víetnömsk dong'], minorUnits: 0),
    'VUV' => new C('VUV', 'vanúatúskt vatú', plurals: ['one' => 'vanúatúskt vatú', 'other' => 'vanúatúsk vatú'], minorUnits: 0),
    'WST' => new C('WST', 'Samóatala', plurals: ['one' => 'Samóatala', 'other' => 'Samóatölur']),
    'XAF' => new C('XAF', 'miðafrískur franki', 'FCFA', plurals: ['one' => 'miðafrískur franki', 'other' => 'miðafrískir frankar'], minorUnits: 0),
    'XCD' => new C('XCD', 'austurkarabískur dalur', 'EC$', '$', ['one' => 'austurkarabískur dalur', 'other' => 'austurkarabískir dalir']),
    'XDR' => new C('XDR', 'Sérstök dráttarréttindi'),
    'XFO' => new C('XFO', 'Franskur gullfranki'),
    'XFU' => new C('XFU', 'Franskur franki, UIC'),
    'XOF' => new C('XOF', 'vesturafrískur franki', "F\u{202F}CFA", plurals: ['one' => 'vesturafrískur franki', 'other' => 'vesturafrískir frankar'], minorUnits: 0),
    'XPF' => new C('XPF', 'pólinesískur franki', 'CFPF', plurals: ['one' => 'pólinesískur franki', 'other' => 'pólinesískir frankar'], minorUnits: 0),
    'XXX' => new C('XXX', 'óþekktur gjaldmiðill', '¤', plurals: ['one' => '(óþekkt mynteining gjaldmiðils)', 'other' => '(óþekktur gjaldmiðill)']),
    'YDD' => new C('YDD', 'Jemenskur denari'),
    'YER' => new C('YER', 'jemenskt ríal', plurals: ['one' => 'jemenskt ríal', 'other' => 'jemensk ríöl']),
    'YUM' => new C('YUM', 'Júgóslavneskur denari'),
    'ZAL' => new C('ZAL', 'Rand (viðskipta)'),
    'ZAR' => new C('ZAR', 'suðurafrískt rand', narrow: 'R', plurals: ['one' => 'suðurafrískt rand', 'other' => 'suðurafrísk rönd']),
    'ZMK' => new C('ZMK', 'Zambian Kwacha (1968–2012)'),
    'ZMW' => new C('ZMW', 'sambísk kvaka', narrow: 'ZK', plurals: ['one' => 'sambísk kvaka', 'other' => 'sambískar kvökur']),
    'ZWD' => new C('ZWD', 'Simbabveskur dalur'),
];