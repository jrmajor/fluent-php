<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'AED' => new C('AED', 'Apvienoto Arābu Emirātu dirhēms', plurals: ['zero' => 'AAE dirhēmi', 'one' => 'AAE dirhēms', 'other' => 'AAE dirhēmi']),
    'AFN' => new C('AFN', 'Afganistānas afgāns', narrow: '؋', plurals: ['zero' => 'Afganistānas afgāni', 'one' => 'Afganistānas afgāns', 'other' => 'Afganistānas afgāni']),
    'ALL' => new C('ALL', 'Albānijas leks', plurals: ['zero' => 'Albānijas leki', 'one' => 'Albānijas leks', 'other' => 'Albānijas leki']),
    'AMD' => new C('AMD', 'Armēnijas drams', narrow: '֏', plurals: ['zero' => 'Armēnijas drami', 'one' => 'Armēnijas drams', 'other' => 'Armēnijas drami']),
    'ANG' => new C('ANG', 'Nīderlandes Antiļu guldenis', plurals: ['zero' => 'Nīderlandes Antiļu guldeņi', 'one' => 'Nīderlandes Antiļu guldenis', 'other' => 'Nīderlandes Antiļu guldeņi']),
    'AOA' => new C('AOA', 'Angolas kvanza', narrow: 'Kz', plurals: ['zero' => 'Angolas kvanzas', 'one' => 'Angolas kvanza', 'other' => 'Angolas kvanzas']),
    'ARS' => new C('ARS', 'Argentīnas peso', narrow: '$', plurals: ['zero' => 'Argentīnas peso', 'one' => 'Argentīnas peso', 'other' => 'Argentīnas peso']),
    'ATS' => new C('ATS', 'Austrijas šiliņš'),
    'AUD' => new C('AUD', 'Austrālijas dolārs', 'AU$', narrow: '$', plurals: ['zero' => 'Austrālijas dolāri', 'one' => 'Austrālijas dolārs', 'other' => 'Austrālijas dolāri']),
    'AWG' => new C('AWG', 'Arubas guldenis', plurals: ['zero' => 'Arubas guldeņi', 'one' => 'Arubas guldenis', 'other' => 'Arubas guldeņi']),
    'AZM' => new C('AZM', 'Azerbaidžānas manats (1993–2006)', plurals: ['zero' => 'Azerbaidžānas manati (1993–2006)', 'one' => 'Azerbaidžānas manats (1993–2006)', 'other' => 'Azerbaidžānas manati (1993–2006)']),
    'AZN' => new C('AZN', 'Azerbaidžānas manats', narrow: '₼', plurals: ['zero' => 'Azerbaidžānas manati', 'one' => 'Azerbaidžānas manats', 'other' => 'Azerbaidžānas manati']),
    'BAM' => new C('BAM', 'Bosnijas un Hercogovinas konvertējamā marka', narrow: 'KM', plurals: ['zero' => 'Bosnijas un Hercogovinas konvertējamās markas', 'one' => 'Bosnijas un Hercogovinas konvertējamā marka', 'other' => 'Bosnijas un Hercogovinas konvertējamās markas']),
    'BBD' => new C('BBD', 'Barbadosas dolārs', narrow: '$', plurals: ['zero' => 'Barbadosas dolāri', 'one' => 'Barbadosas dolārs', 'other' => 'Barbadosas dolāri']),
    'BDT' => new C('BDT', 'Bangladešas taka', narrow: '৳', plurals: ['zero' => 'Bangladešas takas', 'one' => 'Bangladešas taka', 'other' => 'Bangladešas takas']),
    'BEF' => new C('BEF', 'Beļģijas franks', plurals: ['zero' => 'Beļģijas franki', 'one' => 'Beļģijas franks', 'other' => 'Beļģijas franki']),
    'BGN' => new C('BGN', 'Bulgārijas leva', plurals: ['zero' => 'Bulgārijas levas', 'one' => 'Bulgārijas leva', 'other' => 'Bulgārijas levas']),
    'BHD' => new C('BHD', 'Bahreinas dinārs', plurals: ['zero' => 'Bahreinas dināri', 'one' => 'Bahreinas dinārs', 'other' => 'Bahreinas dināri'], minorUnits: 3),
    'BIF' => new C('BIF', 'Burundi franks', plurals: ['zero' => 'Burundi franki', 'one' => 'Burundi franks', 'other' => 'Burundi franki'], minorUnits: 0),
    'BMD' => new C('BMD', 'Bermudu dolārs', narrow: '$', plurals: ['zero' => 'Bermudu dolāri', 'one' => 'Bermudu dolārs', 'other' => 'Bermudu dolāri']),
    'BND' => new C('BND', 'Brunejas dolārs', narrow: '$', plurals: ['zero' => 'Brunejas dolāri', 'one' => 'Brunejas dolārs', 'other' => 'Brunejas dolāri']),
    'BOB' => new C('BOB', 'Bolīvijas boliviano', narrow: 'Bs', plurals: ['zero' => 'Bolīvijas boliviano', 'one' => 'Bolīvijas boliviano', 'other' => 'Bolīvijas boliviano']),
    'BRL' => new C('BRL', 'Brazīlijas reāls', 'R$', narrow: 'R$', plurals: ['zero' => 'Brazīlijas reāli', 'one' => 'Brazīlijas reāls', 'other' => 'Brazīlijas reāli']),
    'BSD' => new C('BSD', 'Bahamu dolārs', narrow: '$', plurals: ['zero' => 'Bahamu dolāri', 'one' => 'Bahamu dolārs', 'other' => 'Bahamu dolāri']),
    'BTN' => new C('BTN', 'Butānas ngultrums', plurals: ['zero' => 'Butānas ngultrumi', 'one' => 'Butānas ngultrums', 'other' => 'Butānas ngultrumi']),
    'BWP' => new C('BWP', 'Botsvanas pula', narrow: 'P', plurals: ['zero' => 'Botsvanas pulas', 'one' => 'Botsvanas pula', 'other' => 'Botsvanas pulas']),
    'BYN' => new C('BYN', 'Baltkrievijas rubelis', narrow: 'р.', plurals: ['zero' => 'Baltkrievijas rubeļi', 'one' => 'Baltkrievijas rubelis', 'other' => 'Baltkrievijas rubeļi']),
    'BYR' => new C('BYR', 'Baltkrievijas rubelis (2000–2016)', plurals: ['zero' => 'Baltkrievijas rubeļi (2000–2016)', 'one' => 'Baltkrievijas rubelis (2000–2016)', 'other' => 'Baltkrievijas rubeļi (2000–2016)']),
    'BZD' => new C('BZD', 'Belizas dolārs', narrow: '$', plurals: ['zero' => 'Belizas dolāri', 'one' => 'Belizas dolārs', 'other' => 'Belizas dolāri']),
    'CAD' => new C('CAD', 'Kanādas dolārs', 'CA$', narrow: '$', plurals: ['zero' => 'Kanādas dolāri', 'one' => 'Kanādas dolārs', 'other' => 'Kanādas dolāri']),
    'CDF' => new C('CDF', 'KDR franks', plurals: ['zero' => 'KDR franki', 'one' => 'KDR franks', 'other' => 'KDR franki']),
    'CHF' => new C('CHF', 'Šveices franks', plurals: ['zero' => 'Šveices franki', 'one' => 'Šveices franks', 'other' => 'Šveices franki']),
    'CLP' => new C('CLP', 'Čīles peso', narrow: '$', plurals: ['zero' => 'Čīles peso', 'one' => 'Čīles peso', 'other' => 'Čīles peso'], minorUnits: 0),
    'CNH' => new C('CNH', 'Ķīnas juaņa (ofšors)', plurals: ['zero' => 'Ķīnas juaņa (ofšors)', 'one' => 'Ķīnas juaņa (ofšors)', 'other' => 'Ķīnas juaņas (ofšors)']),
    'CNY' => new C('CNY', 'Ķīnas juaņs', 'CN¥', narrow: '¥', plurals: ['zero' => 'Ķīnas juaņi', 'one' => 'Ķīnas juaņs', 'other' => 'Ķīnas juaņi']),
    'COP' => new C('COP', 'Kolumbijas peso', narrow: '$', plurals: ['zero' => 'Kolumbijas peso', 'one' => 'Kolumbijas peso', 'other' => 'Kolumbijas peso']),
    'COU' => new C('COU', 'Kolumbijas reāls'),
    'CRC' => new C('CRC', 'Kostarikas kolons', narrow: '₡', plurals: ['zero' => 'Kostarikas koloni', 'one' => 'Kostarikas kolons', 'other' => 'Kostarikas koloni']),
    'CUC' => new C('CUC', 'Kubas konvertējamais peso', narrow: '$', plurals: ['zero' => 'Kubas konvertējamie peso', 'one' => 'Kubas konvertējamais peso', 'other' => 'Kubas konvertējamie peso']),
    'CUP' => new C('CUP', 'Kubas peso', narrow: '$', plurals: ['zero' => 'Kubas peso', 'one' => 'Kubas peso', 'other' => 'Kubas peso']),
    'CVE' => new C('CVE', 'Kaboverdes eskudo', plurals: ['zero' => 'Kaboverdes eskudo', 'one' => 'Kaboverdes eskudo', 'other' => 'Kaboverdes eskudo']),
    'CYP' => new C('CYP', 'Kipras mārciņa'),
    'CZK' => new C('CZK', 'Čehijas krona', narrow: 'Kč', plurals: ['zero' => 'Čehijas kronas', 'one' => 'Čehijas krona', 'other' => 'Čehijas kronas']),
    'DEM' => new C('DEM', 'Vācijas marka'),
    'DJF' => new C('DJF', 'Džibutijas franks', plurals: ['zero' => 'Džibutijas franki', 'one' => 'Džibutijas franks', 'other' => 'Džibutijas franki'], minorUnits: 0),
    'DKK' => new C('DKK', 'Dānijas krona', narrow: 'kr', plurals: ['zero' => 'Dānijas kronas', 'one' => 'Dānijas krona', 'other' => 'Dānijas kronas']),
    'DOP' => new C('DOP', 'Dominikānas peso', narrow: '$', plurals: ['zero' => 'Dominikānas peso', 'one' => 'Dominikānas peso', 'other' => 'Dominikānas peso']),
    'DZD' => new C('DZD', 'Alžīrijas dinārs', plurals: ['zero' => 'Alžīrijas dināri', 'one' => 'Alžīrijas dinārs', 'other' => 'Alžīrijas dināri']),
    'EEK' => new C('EEK', 'Igaunijas krona'),
    'EGP' => new C('EGP', 'Ēģiptes mārciņa', narrow: 'E£', plurals: ['zero' => 'Ēģiptes mārciņas', 'one' => 'Ēģiptes mārciņa', 'other' => 'Ēģiptes mārciņas']),
    'ERN' => new C('ERN', 'Eritrejas nakfa', plurals: ['zero' => 'Eritrejas nakfas', 'one' => 'Eritrejas nakfa', 'other' => 'Eritrejas nakfas']),
    'ESP' => new C('ESP', 'Spānijas peseta', narrow: '₧'),
    'ETB' => new C('ETB', 'Etiopijas birs', plurals: ['zero' => 'Etiopijas biri', 'one' => 'Etiopijas birs', 'other' => 'Etiopijas biri']),
    'EUR' => new C('EUR', 'eiro', '€', narrow: '€', plurals: ['zero' => 'eiro', 'one' => 'eiro', 'other' => 'eiro']),
    'FIM' => new C('FIM', 'Somijas marka'),
    'FJD' => new C('FJD', 'Fidži dolārs', narrow: '$', plurals: ['zero' => 'Fidži dolāri', 'one' => 'Fidži dolārs', 'other' => 'Fidži dolāri']),
    'FKP' => new C('FKP', 'Folklenda Salu mārciņa', narrow: '£', plurals: ['zero' => 'Folklenda Salu mārciņas', 'one' => 'Folklenda Salu mārciņa', 'other' => 'Folklenda Salu mārciņas']),
    'FRF' => new C('FRF', 'Francijas franks'),
    'GBP' => new C('GBP', 'Lielbritānijas mārciņa', '£', narrow: '£', plurals: ['zero' => 'Lielbritānijas mārciņas', 'one' => 'Lielbritānijas mārciņa', 'other' => 'Lielbritānijas mārciņas']),
    'GEL' => new C('GEL', 'Gruzijas lari', narrow: '₾', plurals: ['zero' => 'Gruzijas lari', 'one' => 'Gruzijas lari', 'other' => 'Gruzijas lari']),
    'GHS' => new C('GHS', 'Ganas sedi', plurals: ['zero' => 'Ganas sedi', 'one' => 'Ganas sedi', 'other' => 'Ganas sedi']),
    'GIP' => new C('GIP', 'Gibraltāra mārciņa', narrow: '£', plurals: ['zero' => 'Gibraltāra mārciņas', 'one' => 'Gibraltāra mārciņa', 'other' => 'Gibraltāra mārciņas']),
    'GMD' => new C('GMD', 'Gambijas dalasi', plurals: ['zero' => 'Gambijas dalasi', 'one' => 'Gambijas dalasi', 'other' => 'Gambijas dalasi']),
    'GNF' => new C('GNF', 'Gvinejas franks', narrow: 'FG', plurals: ['zero' => 'Gvinejas franki', 'one' => 'Gvinejas franks', 'other' => 'Gvinejas franki'], minorUnits: 0),
    'GRD' => new C('GRD', 'Grieķijas drahma'),
    'GTQ' => new C('GTQ', 'Gvatemalas ketsals', narrow: 'Q', plurals: ['zero' => 'Gvatemalas ketsali', 'one' => 'Gvatemalas ketsals', 'other' => 'Gvatemalas ketsali']),
    'GYD' => new C('GYD', 'Gajānas dolārs', narrow: '$', plurals: ['zero' => 'Gajānas dolāri', 'one' => 'Gajānas dolārs', 'other' => 'Gajānas dolāri']),
    'HKD' => new C('HKD', 'Honkongas dolārs', 'HK$', narrow: '$', plurals: ['zero' => 'Honkongas dolāri', 'one' => 'Honkongas dolārs', 'other' => 'Honkongas dolāri']),
    'HNL' => new C('HNL', 'Hondurasas lempīra', narrow: 'L', plurals: ['zero' => 'Hondurasas lempīras', 'one' => 'Hondurasas lempīra', 'other' => 'Hondurasas lempīras']),
    'HRK' => new C('HRK', 'Horvātijas kuna', narrow: 'kn', plurals: ['zero' => 'Horvātijas kunas', 'one' => 'Horvātijas kuna', 'other' => 'Horvātijas kunas']),
    'HTG' => new C('HTG', 'Haiti gurds', plurals: ['zero' => 'Haiti gurdi', 'one' => 'Haiti gurds', 'other' => 'Haiti gurdi']),
    'HUF' => new C('HUF', 'Ungārijas forints', narrow: 'Ft', plurals: ['zero' => 'Ungārijas forinti', 'one' => 'Ungārijas forints', 'other' => 'Ungārijas forinti']),
    'IDR' => new C('IDR', 'Indonēzijas rūpija', narrow: 'Rp', plurals: ['zero' => 'Indonēzijas rūpijas', 'one' => 'Indonēzijas rūpija', 'other' => 'Indonēzijas rūpijas']),
    'IEP' => new C('IEP', 'Īrijas mārciņa'),
    'ILS' => new C('ILS', 'Izraēlas šekelis', '₪', narrow: '₪', plurals: ['zero' => 'Izraēlas šekeļi', 'one' => 'Izraēlas šekelis', 'other' => 'Izraēlas šekeļi']),
    'INR' => new C('INR', 'Indijas rūpija', '₹', narrow: '₹', plurals: ['zero' => 'Indijas rūpijas', 'one' => 'Indijas rūpija', 'other' => 'Indijas rūpijas']),
    'IQD' => new C('IQD', 'Irākas dinārs', plurals: ['zero' => 'Irākas dināri', 'one' => 'Irākas dinārs', 'other' => 'Irākas dināri'], minorUnits: 3),
    'IRR' => new C('IRR', 'Irānas riāls', plurals: ['zero' => 'Irānas riāli', 'one' => 'Irānas riāls', 'other' => 'Irānas riāli']),
    'ISK' => new C('ISK', 'Islandes krona', narrow: 'kr', plurals: ['zero' => 'Islandes kronas', 'one' => 'Islandes krona', 'other' => 'Islandes kronas'], minorUnits: 0),
    'ITL' => new C('ITL', 'Itālijas lira'),
    'JMD' => new C('JMD', 'Jamaikas dolārs', narrow: '$', plurals: ['zero' => 'Jamaikas dolāri', 'one' => 'Jamaikas dolārs', 'other' => 'Jamaikas dolāri']),
    'JOD' => new C('JOD', 'Jordānas dinārs', plurals: ['zero' => 'Jordānas dināri', 'one' => 'Jordānas dinārs', 'other' => 'Jordānas dināri'], minorUnits: 3),
    'JPY' => new C('JPY', 'Japānas jena', '¥', narrow: '¥', plurals: ['zero' => 'Japānas jenas', 'one' => 'Japānas jena', 'other' => 'Japānas jenas'], minorUnits: 0),
    'KES' => new C('KES', 'Kenijas šiliņš', plurals: ['zero' => 'Kenijas šiliņi', 'one' => 'Kenijas šiliņš', 'other' => 'Kenijas šiliņi']),
    'KGS' => new C('KGS', 'Kirgizstānas soms', plurals: ['zero' => 'Kirgizstānas somi', 'one' => 'Kirgizstānas soms', 'other' => 'Kirgizstānas somi']),
    'KHR' => new C('KHR', 'Kambodžas riels', narrow: '៛', plurals: ['zero' => 'Kambodžas rieli', 'one' => 'Kambodžas riels', 'other' => 'Kambodžas rieli']),
    'KMF' => new C('KMF', 'Komoru franks', narrow: 'CF', plurals: ['zero' => 'Komoru franki', 'one' => 'Komoru franks', 'other' => 'Komoru franki'], minorUnits: 0),
    'KPW' => new C('KPW', 'Ziemeļkorejas vona', narrow: '₩', plurals: ['zero' => 'Ziemeļkorejas vonas', 'one' => 'Ziemeļkorejas vona', 'other' => 'Ziemeļkorejas vonas']),
    'KRW' => new C('KRW', 'Dienvidkorejas vona', '₩', narrow: '₩', plurals: ['zero' => 'Dienvidkorejas vonas', 'one' => 'Dienvidkorejas vona', 'other' => 'Dienvidkorejas vonas'], minorUnits: 0),
    'KWD' => new C('KWD', 'Kuveitas dinārs', plurals: ['zero' => 'Kuveitas dināri', 'one' => 'Kuveitas dinārs', 'other' => 'Kuveitas dināri'], minorUnits: 3),
    'KYD' => new C('KYD', 'Kaimanu salu dolārs', narrow: '$', plurals: ['zero' => 'Kaimanu salu dolāri', 'one' => 'Kaimanu salu dolārs', 'other' => 'Kaimanu salu dolāri']),
    'KZT' => new C('KZT', 'Kazahstānas tenge', narrow: '₸', plurals: ['zero' => 'Kazahstānas tenges', 'one' => 'Kazahstānas tenge', 'other' => 'Kazahstānas tenges']),
    'LAK' => new C('LAK', 'Laosas kips', narrow: '₭', plurals: ['zero' => 'Laosas kipi', 'one' => 'Laosas kips', 'other' => 'Laosas kipi']),
    'LBP' => new C('LBP', 'Libānas mārciņa', narrow: 'L£', plurals: ['zero' => 'Libānas mārciņas', 'one' => 'Libānas mārciņa', 'other' => 'Libānas mārciņas']),
    'LKR' => new C('LKR', 'Šrilankas rūpija', narrow: 'Rs', plurals: ['zero' => 'Šrilankas rūpijas', 'one' => 'Šrilankas rūpija', 'other' => 'Šrilankas rūpijas']),
    'LRD' => new C('LRD', 'Libērijas dolārs', narrow: '$', plurals: ['zero' => 'Libērijas dolāri', 'one' => 'Libērijas dolārs', 'other' => 'Libērijas dolāri']),
    'LSL' => new C('LSL', 'Lesoto loti'),
    'LTL' => new C('LTL', 'Lietuvas lits', narrow: 'Lt', plurals: ['zero' => 'Lietuvas liti', 'one' => 'Lietuvas lits', 'other' => 'Lietuvas liti']),
    'LUF' => new C('LUF', 'Luksemburgas franks'),
    'LVL' => new C('LVL', 'Latvijas lats', 'Ls', narrow: 'Ls', plurals: ['zero' => 'Latvijas lati', 'one' => 'Latvijas lats', 'other' => 'Latvijas lati']),
    'LVR' => new C('LVR', 'Latvijas rublis'),
    'LYD' => new C('LYD', 'Lībijas dinārs', plurals: ['zero' => 'Lībijas dināri', 'one' => 'Lībijas dinārs', 'other' => 'Lībijas dināri'], minorUnits: 3),
    'MAD' => new C('MAD', 'Marokas dirhēms', plurals: ['zero' => 'Marokas dirhēmi', 'one' => 'Marokas dirhēms', 'other' => 'Marokas dirhēmi']),
    'MDL' => new C('MDL', 'Moldovas leja', plurals: ['zero' => 'Moldovas lejas', 'one' => 'Moldovas leja', 'other' => 'Moldovas lejas']),
    'MGA' => new C('MGA', 'Madagaskaras ariari', narrow: 'Ar', plurals: ['zero' => 'Madagaskaras ariari', 'one' => 'Madagaskaras ariari', 'other' => 'Madagaskaras ariari']),
    'MKD' => new C('MKD', 'Maķedonijas denārs', plurals: ['zero' => 'Maķedonijas denāri', 'one' => 'Maķedonijas denārs', 'other' => 'Maķedonijas denāri']),
    'MLF' => new C('MLF', 'CFA (Āfrikas) franks'),
    'MMK' => new C('MMK', 'Mjanmas kjats', narrow: 'K', plurals: ['zero' => 'Mjanmas kjati', 'one' => 'Mjanmas kjats', 'other' => 'Mjanmas kjati']),
    'MNT' => new C('MNT', 'Mongolijas tugriks', narrow: '₮', plurals: ['zero' => 'Mongolijas tugriki', 'one' => 'Mongolijas tugriks', 'other' => 'Mongolijas tugriki']),
    'MOP' => new C('MOP', 'Makao pataka', plurals: ['zero' => 'Makao patakas', 'one' => 'Makao pataka', 'other' => 'Makao patakas']),
    'MRO' => new C('MRO', 'Mauritānijas ugija (1973–2017)', plurals: ['zero' => 'Mauritānijas ugijas (1973–2017)', 'one' => 'Mauritānijas ugija (1973–2017)', 'other' => 'Mauritānijas ugijas (1973–2017)']),
    'MRU' => new C('MRU', 'Mauritānijas ugija', plurals: ['zero' => 'Mauritānijas ugijas', 'one' => 'Mauritānijas ugija', 'other' => 'Mauritānijas ugijas']),
    'MTL' => new C('MTL', 'Maltas lira'),
    'MTP' => new C('MTP', 'Maltas mārciņa'),
    'MUR' => new C('MUR', 'Maurīcijas rūpija', narrow: 'Rs', plurals: ['zero' => 'Maurīcijas rūpijas', 'one' => 'Maurīcijas rūpija', 'other' => 'Maurīcijas rūpijas']),
    'MVR' => new C('MVR', 'Maldīvijas rūfija', plurals: ['zero' => 'Maldīvijas rūfijas', 'one' => 'Maldīvijas rūfija', 'other' => 'Maldīvijas rūfijas']),
    'MWK' => new C('MWK', 'Malāvijas kvača', plurals: ['zero' => 'Malāvijas kvačas', 'one' => 'Malāvijas kvača', 'other' => 'Malāvijas kvačas']),
    'MXN' => new C('MXN', 'Meksikas peso', 'MX$', narrow: '$', plurals: ['zero' => 'Meksikas peso', 'one' => 'Meksikas peso', 'other' => 'Meksikas peso']),
    'MYR' => new C('MYR', 'Malaizijas ringits', narrow: 'RM', plurals: ['zero' => 'Malaizijas ringiti', 'one' => 'Malaizijas ringits', 'other' => 'Malaizijas ringiti']),
    'MZE' => new C('MZE', 'Mozambikas eskudo'),
    'MZM' => new C('MZM', 'Mozambikas vecais metikals', plurals: ['zero' => 'Mozambikas vecie metikali', 'one' => 'Mozambikas vecais metikals', 'other' => 'Mozambikas vecie metikali']),
    'MZN' => new C('MZN', 'Mozambikas metikals', plurals: ['zero' => 'Mozambikas metikali', 'one' => 'Mozambikas metikals', 'other' => 'Mozambikas metikali']),
    'NAD' => new C('NAD', 'Namībijas dolārs', narrow: '$', plurals: ['zero' => 'Namībijas dolāri', 'one' => 'Namībijas dolārs', 'other' => 'Namībijas dolāri']),
    'NGN' => new C('NGN', 'Nigērijas naira', narrow: '₦', plurals: ['zero' => 'Nigērijas nairas', 'one' => 'Nigērijas naira', 'other' => 'Nigērijas nairas']),
    'NIO' => new C('NIO', 'Nikaragvas kordoba', narrow: 'C$', plurals: ['zero' => 'Nikaragvas kordobas', 'one' => 'Nikaragvas kordoba', 'other' => 'Nikaragvas kordobas']),
    'NLG' => new C('NLG', 'Nīderlandes guldenis'),
    'NOK' => new C('NOK', 'Norvēģijas krona', narrow: 'kr', plurals: ['zero' => 'Norvēģijas kronas', 'one' => 'Norvēģijas krona', 'other' => 'Norvēģijas kronas']),
    'NPR' => new C('NPR', 'Nepālas rūpija', narrow: 'Rs', plurals: ['zero' => 'Nepālas rūpijas', 'one' => 'Nepālas rūpija', 'other' => 'Nepālas rūpijas']),
    'NZD' => new C('NZD', 'Jaunzēlandes dolārs', 'NZ$', narrow: '$', plurals: ['zero' => 'Jaunzēlandes dolāri', 'one' => 'Jaunzēlandes dolārs', 'other' => 'Jaunzēlandes dolāri']),
    'OMR' => new C('OMR', 'Omānas riāls', plurals: ['zero' => 'Omānas riāli', 'one' => 'Omānas riāls', 'other' => 'Omānas riāli'], minorUnits: 3),
    'PAB' => new C('PAB', 'Panamas balboa', plurals: ['zero' => 'Panamas balboa', 'one' => 'Panamas balboa', 'other' => 'Panamas balboa']),
    'PEN' => new C('PEN', 'Peru sols', plurals: ['zero' => 'Peru soli', 'one' => 'Peru sols', 'other' => 'Peru soli']),
    'PGK' => new C('PGK', 'Papua-Jaungvinejas kina', plurals: ['zero' => 'Papua-Jaungvinejas kinas', 'one' => 'Papua-Jaungvinejas kina', 'other' => 'Papua-Jaungvinejas kinas']),
    'PHP' => new C('PHP', 'Filipīnu peso', narrow: '₱', plurals: ['zero' => 'Filipīnu peso', 'one' => 'Filipīnu peso', 'other' => 'Filipīnu peso']),
    'PKR' => new C('PKR', 'Pakistānas rūpija', narrow: 'Rs', plurals: ['zero' => 'Pakistānas rūpijas', 'one' => 'Pakistānas rūpija', 'other' => 'Pakistānas rūpijas']),
    'PLN' => new C('PLN', 'Polijas zlots', narrow: 'zł', plurals: ['zero' => 'Polijas zloti', 'one' => 'Polijas zlots', 'other' => 'Polijas zloti']),
    'PTE' => new C('PTE', 'Portugāles eskudo'),
    'PYG' => new C('PYG', 'Paragvajas guarani', narrow: '₲', plurals: ['zero' => 'Paragvajas guarani', 'one' => 'Paragvajas guarani', 'other' => 'Paragvajas guarani'], minorUnits: 0),
    'QAR' => new C('QAR', 'Kataras riāls', plurals: ['zero' => 'Kataras riāli', 'one' => 'Kataras riāls', 'other' => 'Kataras riāli']),
    'ROL' => new C('ROL', 'Rumānijas vecā leja', plurals: ['zero' => 'Rumānijas vecās levas', 'one' => 'Rumānijas vecā leva', 'other' => 'Rumānijas vecās levas']),
    'RON' => new C('RON', 'Rumānijas leja', narrow: 'lei', plurals: ['zero' => 'Rumānijas lejas', 'one' => 'Rumānijas leja', 'other' => 'Rumānijas lejas']),
    'RSD' => new C('RSD', 'Serbijas dinārs', plurals: ['zero' => 'Serbijas dināri', 'one' => 'Serbijas dinārs', 'other' => 'Serbijas dināri']),
    'RUB' => new C('RUB', 'Krievijas rublis', narrow: '₽', plurals: ['zero' => 'Krievijas rubļi', 'one' => 'Krievijas rublis', 'other' => 'Krievijas rubļi']),
    'RWF' => new C('RWF', 'Ruandas franks', narrow: 'RF', plurals: ['zero' => 'Ruandas franki', 'one' => 'Ruandas franks', 'other' => 'Ruandas franki'], minorUnits: 0),
    'SAR' => new C('SAR', 'Saūda Arābijas riāls', plurals: ['zero' => 'Saūda riāli', 'one' => 'Saūda riāls', 'other' => 'Saūda riāli']),
    'SBD' => new C('SBD', 'Zālamana Salu dolārs', narrow: '$', plurals: ['zero' => 'Zālamana Salu dolāri', 'one' => 'Zālamana Salu dolārs', 'other' => 'Zālamana Salu dolāri']),
    'SCR' => new C('SCR', 'Seišelu salu rūpija', plurals: ['zero' => 'Seišelu salu rūpijas', 'one' => 'Seišelu salu rūpija', 'other' => 'Seišelu salu rūpijas']),
    'SDG' => new C('SDG', 'Sudānas mārciņa', plurals: ['zero' => 'Sudānas mārciņas', 'one' => 'Sudānas mārciņa', 'other' => 'Sudānas mārciņas']),
    'SEK' => new C('SEK', 'Zviedrijas krona', narrow: 'kr', plurals: ['zero' => 'Zviedrijas kronas', 'one' => 'Zviedrijas krona', 'other' => 'Zviedrijas kronas']),
    'SGD' => new C('SGD', 'Singapūras dolārs', narrow: '$', plurals: ['zero' => 'Singapūras dolāri', 'one' => 'Singapūras dolārs', 'other' => 'Singapūras dolāri']),
    'SHP' => new C('SHP', 'Sv.Helēnas salas mārciņa', narrow: '£', plurals: ['zero' => 'Sv.Helēnas salas mārciņas', 'one' => 'Sv.Helēnas salas mārciņa', 'other' => 'Sv.Helēnas salas mārciņas']),
    'SIT' => new C('SIT', 'Slovēnijas tolars'),
    'SKK' => new C('SKK', 'Slovakijas krona'),
    'SLL' => new C('SLL', 'Sjerraleones leone', plurals: ['zero' => 'Sjerraleones leones', 'one' => 'Sjerraleones leone', 'other' => 'Sjerraleones leones']),
    'SOS' => new C('SOS', 'Somālijas šiliņš', plurals: ['zero' => 'Somālijas šiliņi', 'one' => 'Somālijas šiliņš', 'other' => 'Somālijas šiliņi']),
    'SRD' => new C('SRD', 'Surinamas dolārs', narrow: '$', plurals: ['zero' => 'Surinamas dolāri', 'one' => 'Surinamas dolārs', 'other' => 'Surinamas dolāri']),
    'SRG' => new C('SRG', 'Surinamas guldenis'),
    'SSP' => new C('SSP', 'Dienvidsudānas mārciņa', narrow: '£', plurals: ['zero' => 'Dienvidsudānas mārciņas', 'one' => 'Dienvidsudānas mārciņa', 'other' => 'Dienvidsudānas mārciņas']),
    'STD' => new C('STD', 'Santome un Prinsipi dobra (1977–2017)', plurals: ['zero' => 'Santome un Prinsipi dobras (1977–2017)', 'one' => 'Santome un Prinsipi dobra (1977–2017)', 'other' => 'Santome un Prinsipi dobras (1977–2017)']),
    'STN' => new C('STN', 'Santome un Prinsipi dobra', narrow: 'Db', plurals: ['zero' => 'Santome un Prinsipi dobras', 'one' => 'Santome un Prinsipi dobra', 'other' => 'Santome un Prinsipi dobras']),
    'SVC' => new C('SVC', 'Salvadoras kolons'),
    'SYP' => new C('SYP', 'Sīrijas mārciņa', narrow: '£', plurals: ['zero' => 'Sīrijas mārciņas', 'one' => 'Sīrijas mārciņa', 'other' => 'Sīrijas mārciņas']),
    'SZL' => new C('SZL', 'Svazilendas lilangeni', plurals: ['zero' => 'Svazilendas lilangeni', 'one' => 'Svazilendas lilangeni', 'other' => 'Svazilendas lilangeni']),
    'THB' => new C('THB', 'Taizemes bāts', '฿', narrow: '฿', plurals: ['zero' => 'Taizemes bāti', 'one' => 'Taizemes bāts', 'other' => 'Taizemes bāti']),
    'TJS' => new C('TJS', 'Tadžikistānas somons', plurals: ['zero' => 'Tadžikistānas somoni', 'one' => 'Tadžikistānas somons', 'other' => 'Tadžikistānas somoni']),
    'TMM' => new C('TMM', 'Turkmenistānas manats (1993–2009)', plurals: ['zero' => 'Turkmenistānas manati (1993–2009)', 'one' => 'Turkmenistānas manats (1993–2009)', 'other' => 'Turkmenistānas manati (1993–2009)']),
    'TMT' => new C('TMT', 'Turkmenistānas manats', plurals: ['zero' => 'Turkmenistānas manati', 'one' => 'Turkmenistānas manats', 'other' => 'Turkmenistānas manati']),
    'TND' => new C('TND', 'Tunisijas dinārs', plurals: ['zero' => 'Tunisijas dināri', 'one' => 'Tunisijas dinārs', 'other' => 'Tunisijas dināri'], minorUnits: 3),
    'TOP' => new C('TOP', 'Tongas paanga', narrow: 'T$', plurals: ['zero' => 'Tongas paangas', 'one' => 'Tongas paanga', 'other' => 'Tongas paangas']),
    'TRL' => new C('TRL', 'Turcijas lira (1922–2005)', plurals: ['zero' => 'Turcijas liras (1922–2005)', 'one' => 'Turcijas lira (1922–2005)', 'other' => 'Turcijas liras (1922–2005)']),
    'TRY' => new C('TRY', 'Turcijas lira', narrow: '₺', plurals: ['zero' => 'Turcijas liras', 'one' => 'Turcijas lira', 'other' => 'Turcijas liras']),
    'TTD' => new C('TTD', 'Trinidādas un Tobāgo dolārs', narrow: '$', plurals: ['zero' => 'Trinidādas un Tobāgo dolāri', 'one' => 'Trinidādas un Tobāgo dolārs', 'other' => 'Trinidādas un Tobāgo dolāri']),
    'TWD' => new C('TWD', 'Taivānas jaunais dolārs', 'NT$', narrow: 'NT$', plurals: ['zero' => 'Taivānas jaunie dolāri', 'one' => 'Taivānas jaunais dolārs', 'other' => 'Taivānas jaunie dolāri']),
    'TZS' => new C('TZS', 'Tanzānijas šiliņš', plurals: ['zero' => 'Tanzānijas šiliņi', 'one' => 'Tanzānijas šiliņš', 'other' => 'Tanzānijas šiliņi']),
    'UAH' => new C('UAH', 'Ukrainas grivna', narrow: '₴', plurals: ['zero' => 'Ukrainas grivnas', 'one' => 'Ukrainas grivna', 'other' => 'Ukrainas grivnas']),
    'UGX' => new C('UGX', 'Ugandas šiliņš', plurals: ['zero' => 'Ugandas šiliņi', 'one' => 'Ugandas šiliņš', 'other' => 'Ugandas šiliņi'], minorUnits: 0),
    'USD' => new C('USD', 'ASV dolārs', '$', narrow: '$', plurals: ['zero' => 'ASV dolāri', 'one' => 'ASV dolārs', 'other' => 'ASV dolāri']),
    'UYU' => new C('UYU', 'Urugvajas peso', narrow: '$', plurals: ['zero' => 'Urugvajas peso', 'one' => 'Urugvajas peso', 'other' => 'Urugvajas peso']),
    'UZS' => new C('UZS', 'Uzbekistānas sums', plurals: ['zero' => 'Uzbekistānas sumi', 'one' => 'Uzbekistānas sums', 'other' => 'Uzbekistānas sumi']),
    'VEB' => new C('VEB', 'Venecuēlas bolivārs (1871–2008)', plurals: ['zero' => 'Venecuēlas bolivāri (1871–2008)', 'one' => 'Venecuēlas bolivārs (1871–2008)', 'other' => 'Venecuēlas bolivāri (1871–2008)']),
    'VEF' => new C('VEF', 'Venecuēlas bolivārs (2008–2018)', narrow: 'Bs', plurals: ['zero' => 'Venecuēlas bolivāri (2008–2018)', 'one' => 'Venecuēlas bolivārs (2008–2018)', 'other' => 'Venecuēlas bolivāri (2008–2018)']),
    'VES' => new C('VES', 'Venecuēlas bolivārs', plurals: ['zero' => 'Venecuēlas bolivāri', 'one' => 'Venecuēlas bolivārs', 'other' => 'Venecuēlas bolivāri']),
    'VND' => new C('VND', 'Vjetnamas dongi', '₫', narrow: '₫', plurals: ['zero' => 'Vjetnamas dongi', 'one' => 'Vjetnamas dongi', 'other' => 'Vjetnamas dongi'], minorUnits: 0),
    'VUV' => new C('VUV', 'Vanuatu vatu', plurals: ['zero' => 'Vanuatu vatu', 'one' => 'Vanuatu vatu', 'other' => 'Vanuatu vatu'], minorUnits: 0),
    'WST' => new C('WST', 'Samoa tala', plurals: ['zero' => 'Samoa talas', 'one' => 'Samoa tala', 'other' => 'Samoa talas']),
    'XAF' => new C('XAF', 'Centrālāfrikas CFA franks', 'FCFA', plurals: ['zero' => 'Centrālāfrikas CFA franki', 'one' => 'Centrālāfrikas CFA franks', 'other' => 'Centrālāfrikas CFA franki'], minorUnits: 0),
    'XAG' => new C('XAG', 'sudrabs'),
    'XAU' => new C('XAU', 'zelts'),
    'XBA' => new C('XBA', 'Eiropas norēķinu vienība EURCO', plurals: ['zero' => 'Eiropas norēķinu vienības EURCO', 'one' => 'Eiropas norēķinu vienība EURCO', 'other' => 'Eiropas norēķinu vienības EURCO']),
    'XBB' => new C('XBB', 'Eiropas naudas vienība'),
    'XBC' => new C('XBC', 'Eiropas norēķinu vienība (XBC)', plurals: ['zero' => 'Eiropas norēķinu vienības (XBC)', 'one' => 'Eiropas norēķinu vienība (XBC)', 'other' => 'Eiropas norēķinu vienības (XBC)']),
    'XBD' => new C('XBD', 'Eiropas norēķinu vienība (XBD)', plurals: ['zero' => 'Eiropas norēķinu vienības (XBD)', 'one' => 'Eiropas norēķinu vienība (XBD)', 'other' => 'Eiropas norēķinu vienības (XBD)']),
    'XCD' => new C('XCD', 'Austrumkarību dolārs', 'EC$', narrow: '$', plurals: ['zero' => 'Austrumkarību dolāri', 'one' => 'Austrumkarību dolārs', 'other' => 'Austrumkarību dolāri']),
    'XDR' => new C('XDR', 'Speciālās aizņēmuma tiesības'),
    'XEU' => new C('XEU', 'Eiropas norēķinu vienība'),
    'XFO' => new C('XFO', 'Francijas zelta franks'),
    'XFU' => new C('XFU', 'Francijas UIC franks'),
    'XOF' => new C('XOF', 'Rietumāfrikas CFA franks', "F\u{202F}CFA", plurals: ['zero' => 'Rietumāfrikas CFA franki', 'one' => 'Rietumāfrikas CFA franks', 'other' => 'Rietumāfrikas CFA franki'], minorUnits: 0),
    'XPD' => new C('XPD', 'pallādijs'),
    'XPF' => new C('XPF', 'CFP franks', 'CFPF', plurals: ['zero' => 'CFP franki', 'one' => 'CFP franks', 'other' => 'CFP franki'], minorUnits: 0),
    'XPT' => new C('XPT', 'platīns'),
    'XTS' => new C('XTS', 'Testa valūtas kods', plurals: ['zero' => 'testa valūtas kods', 'one' => 'testa valūtas kods', 'other' => 'testa valūtas kods']),
    'XXX' => new C('XXX', 'Nezināma valūta', '¤', plurals: ['zero' => '(nezināma valūta)', 'one' => '(nezināma valūta)', 'other' => '(nezināma valūta)']),
    'YER' => new C('YER', 'Jemenas riāls', plurals: ['zero' => 'Jemenas riāli', 'one' => 'Jemenas riāls', 'other' => 'Jemenas riāli']),
    'ZAR' => new C('ZAR', 'Dienvidāfrikas rends', narrow: 'R', plurals: ['zero' => 'Dienvidāfrikas rendi', 'one' => 'Dienvidāfrikas rends', 'other' => 'Dienvidāfrikas rendi']),
    'ZMK' => new C('ZMK', 'Zambijas kvača (1968–2012)', plurals: ['zero' => 'Zambijas kvačas (1968–2012)', 'one' => 'Zambijas kvača (1968–2012)', 'other' => 'Zambijas kvačas (1968–2012)']),
    'ZMW' => new C('ZMW', 'Zambijas kvača', narrow: 'ZK', plurals: ['zero' => 'Zambijas kvačas', 'one' => 'Zambijas kvača', 'other' => 'Zambijas kvačas']),
    'ZWD' => new C('ZWD', 'Zimbabves dolārs'),
    'ZWL' => new C('ZWL', 'Zimbabves dolārs (2009)', plurals: ['zero' => 'Zimbabves dollāri (2009)', 'one' => 'Zimbabves dollārs (2009)', 'other' => 'Zimbabves dollāri (2009)']),
];