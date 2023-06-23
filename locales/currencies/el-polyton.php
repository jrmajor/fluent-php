<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'ADP' => new C('ADP', 'Πεσέτα Ἀνδόρας', plurals: ['one' => 'πεσέτα Ανδόρας', 'other' => 'πεσέτες Ανδόρας']),
    'AED' => new C('AED', 'Ντιρὰμ Ἡνωμένων Ἀραβικῶν Ἐμιράτων', plurals: ['other' => 'ντιράμ Ηνωμένων Αραβικών Εμιράτων']),
    'ALL' => new C('ALL', 'Λὲκ Ἀλβανίας', plurals: ['other' => 'λεκ Αλβανίας']),
    'AMD' => new C('AMD', 'Dram Ἀρμενίας', narrow: '֏', plurals: ['other' => 'ντραμ Αρμενίας']),
    'ANG' => new C('ANG', 'Γκίλντα Ὁλλανδικῶν Ἀντιλλῶν', plurals: ['one' => 'γκίλντα Ολλανδικών Αντιλλών', 'other' => 'γκίλντες Ολλανδικών Αντιλλών']),
    'AOA' => new C('AOA', 'Kwanza Ἀνγκόλας', narrow: 'Kz', plurals: ['other' => 'κουάνζα Ανγκόλας']),
    'AOK' => new C('AOK', 'Kwanza Ἀνγκόλας (1977–1990)', plurals: ['other' => 'κουάνζα Ανγκόλας (AOK)']),
    'AON' => new C('AON', 'Νέα Kwanza Ἀνγκόλας (1990–2000)', plurals: ['one' => 'νέο κουάνζα Ανγκόλας (1990–2000)', 'other' => 'νέα κουάνζα Ανγκόλας (1990–2000)']),
    'AOR' => new C('AOR', 'Kwanza Reajustado Ἀνγκόλας (1995–1999)'),
    'ARA' => new C('ARA', 'Austral Ἀργεντινῆς', plurals: ['other' => 'αουστράλ Αργεντινής']),
    'ARP' => new C('ARP', 'Πέσο Ἀργεντινῆς (1983–1985)', plurals: ['other' => 'πέσο Αργεντινής (ARP)']),
    'ARS' => new C('ARS', 'Πέσο Ἀργεντινῆς', narrow: '$', plurals: ['other' => 'πέσο Αργεντινής']),
    'ATS' => new C('ATS', 'Σελίνι Αὐστρίας', plurals: ['one' => 'σελίνι Αυστρίας', 'other' => 'σελίνια Αυστρίας']),
    'AUD' => new C('AUD', 'Δολάριο Αὐστραλίας', 'A$', narrow: '$', plurals: ['one' => 'δολάριο Αυστραλίας', 'other' => 'δολάρια Αυστραλίας']),
    'AWG' => new C('AWG', 'Γκίλντα Ἀρούμπα', plurals: ['one' => 'φλορίνι Αρούμπας', 'other' => 'φλορίνια Αρούμπας']),
    'AZM' => new C('AZM', 'Μανὰτ Ἀζερμπαϊτζάν', plurals: ['other' => 'μανάτ Αζερμπαϊτζάν (1993–2006)']),
    'BAD' => new C('BAD', 'Δηνάριο Βοσνίας-Ἑρζεγοβίνης', plurals: ['one' => 'δηνάριο Βοσνίας-Ερζεγοβίνης', 'other' => 'δηνάρια Βοσνίας-Ερζεγοβίνης']),
    'BAM' => new C('BAM', 'Μάρκο Βοσνίας-Ἑρζεγοβίνης', narrow: 'KM', plurals: ['one' => 'μετατρέψιμο μάρκο Βοσνίας-Ερζεγοβίνης', 'other' => 'μετατρέψιμα μάρκα Βοσνίας-Ερζεγοβίνης']),
    'BEL' => new C('BEL', 'Φράγκο Βελγίου (οἰκονομικό)', plurals: ['one' => 'φράγκο Βελγίου (οικονομικό)', 'other' => 'φράγκα Βελγίου (οικονομικό)']),
    'BGL' => new C('BGL', 'Μεταλλικὸ Λὲβ Βουλγαρίας', plurals: ['one' => 'μεταλλικό λεβ Βουλγαρίας', 'other' => 'μεταλλικά λεβ Βουλγαρίας']),
    'BGN' => new C('BGN', 'Νέο Λὲβ Βουλγαρίας', plurals: ['other' => 'λεβ Βουλγαρίας']),
    'CAD' => new C('CAD', 'Δολάριο Καναδᾶ', 'CA$', narrow: '$', plurals: ['one' => 'δολάριο Καναδά', 'other' => 'δολάρια Καναδά']),
    'CHF' => new C('CHF', 'Φράγκο Ἑλβετίας', plurals: ['one' => 'φράγκο Ελβετίας', 'other' => 'φράγκα Ελβετίας']),
    'CLF' => new C('CLF', 'Unidades de Fomento Χιλῆς', plurals: ['other' => 'ουνιδάδες ντε φομέντο Χιλής'], minorUnits: 4),
    'CLP' => new C('CLP', 'Πέσο Χιλῆς', narrow: '$', plurals: ['other' => 'πέσο Χιλής'], minorUnits: 0),
    'CSK' => new C('CSK', 'Σκληρὴ Κορόνα Τσεχοσλοβακίας', plurals: ['one' => 'σκληρή κορόνα Τσεχοσλοβακίας', 'other' => 'σκληρές κορόνες Τσεχοσλοβακίας']),
    'CVE' => new C('CVE', 'Ἐσκούδο Πράσινου Ἀκρωτηρίου', plurals: ['other' => 'εσκούδο Πράσινου Ακρωτηρίου']),
    'DDM' => new C('DDM', 'Ostmark Ἀνατολικῆς Γερμανίας', plurals: ['other' => 'όστμαρκ Ανατολικής Γερμανίας']),
    'DZD' => new C('DZD', 'Δηνάριο Ἀλγερίας', plurals: ['one' => 'δηνάριο Αλγερίας', 'other' => 'δηνάρια Αλγερίας']),
    'ECS' => new C('ECS', 'Sucre Ἰσημερινοῦ', plurals: ['other' => 'σούκρε Εκουαδόρ']),
    'ECV' => new C('ECV', 'Unidad de Valor Constante (UVC) Ἰσημερινοῦ'),
    'EEK' => new C('EEK', 'Κορόνα Ἐστονίας', plurals: ['one' => 'κορόνα Εσθονίας', 'other' => 'κορόνες Εσθονίας']),
    'EGP' => new C('EGP', 'Λίρα Αἰγύπτου', narrow: 'E£', plurals: ['one' => 'λίρα Αιγύπτου', 'other' => 'λίρες Αιγύπτου']),
    'ERN' => new C('ERN', 'Nakfa Ἐρυθραίας', plurals: ['other' => 'νάκφα Ερυθραίας']),
    'ESP' => new C('ESP', 'Πεσέτα Ἱσπανίας', narrow: '₧', plurals: ['one' => 'πεσέτα Ισπανίας', 'other' => 'πεσέτες Ισπανίας']),
    'ETB' => new C('ETB', 'Birr Αἰθιοπίας', plurals: ['other' => 'μπιρ Αιθιοπίας']),
    'EUR' => new C('EUR', 'Εὐρώ', '€', narrow: '€', plurals: ['other' => 'ευρώ']),
    'FKP' => new C('FKP', 'Λίρα Νήσων Φώλκλαντ', narrow: '£', plurals: ['one' => 'λίρα Νήσων Φόκλαντ', 'other' => 'λίρες Νήσων Φόκλαντ']),
    'GMD' => new C('GMD', 'Dalasi Γκάμπιας', plurals: ['other' => 'νταλάσι Γκάμπιας']),
    'GQE' => new C('GQE', 'Ekwele Guineana Ἰσημερινῆς Γουινέας', plurals: ['other' => 'εκουέλε Ισημερινής Γουινέας']),
    'GTQ' => new C('GTQ', 'Quetzal Γουατεμάλας', narrow: 'Q', plurals: ['other' => 'κουετσάλ Γουατεμάλας']),
    'GWE' => new C('GWE', 'Γκινέα Ἐσκούδο Πορτογαλίας', plurals: ['other' => 'γκινέα εσκούδο Πορτογαλίας']),
    'HKD' => new C('HKD', 'Δολάριο Χὸνγκ Κόνγκ', 'HK$', narrow: '$', plurals: ['one' => 'δολάριο Χονγκ Κονγκ', 'other' => 'δολάρια Χονγκ Κονγκ']),
    'HTG' => new C('HTG', 'Gourde Ἁϊτῆς', plurals: ['other' => 'γκουρντ Αϊτής']),
    'HUF' => new C('HUF', 'Φιορίνι Οὑγγαρίας', narrow: 'Ft', plurals: ['one' => 'φιορίνι Ουγγαρίας', 'other' => 'φιορίνια Ουγγαρίας']),
    'IDR' => new C('IDR', 'Ρούπια Ἰνδονησίας', narrow: 'Rp', plurals: ['other' => 'ρουπία Ινδονησίας']),
    'IEP' => new C('IEP', 'Λίρα Ἰρλανδίας', plurals: ['one' => 'λίρα Ιρλανδίας', 'other' => 'λίρες Ιρλανδίας']),
    'ILP' => new C('ILP', 'Λίρα Ἰσραήλ', plurals: ['one' => 'λίρα Ισραήλ', 'other' => 'λίρες Ισραήλ']),
    'ILS' => new C('ILS', 'Νέο Sheqel Ἰσραήλ', '₪', narrow: '₪', plurals: ['one' => 'νέο σέκελ Ισραήλ', 'other' => 'νέα σέκελ Ισραήλ']),
    'INR' => new C('INR', 'Ρούπια Ἰνδίας', '₹', narrow: '₹', plurals: ['one' => 'ρουπία Ινδίας', 'other' => 'ρουπίες Ινδίας']),
    'IQD' => new C('IQD', 'Δηνάριο Ἰράκ', plurals: ['one' => 'δηνάριο Ιράκ', 'other' => 'δηνάρια Ιράκ'], minorUnits: 3),
    'IRR' => new C('IRR', 'Rial Ἰράκ', plurals: ['other' => 'ριάλ Ιράν']),
    'ISK' => new C('ISK', 'Κορόνα Ἰσλανδίας', narrow: 'kr', plurals: ['one' => 'κορόνα Ισλανδίας', 'other' => 'κορόνες Ισλανδίας'], minorUnits: 0),
    'ITL' => new C('ITL', 'Λιρέτα Ἰταλίας', plurals: ['one' => 'λιρέτα Ιταλίας', 'other' => 'λιρέτες Ιταλίας']),
    'JOD' => new C('JOD', 'Δηνάριο Ἰορδανίας', plurals: ['one' => 'δηνάριο Ιορδανίας', 'other' => 'δηνάρια Ιορδανίας'], minorUnits: 3),
    'JPY' => new C('JPY', 'Γιὲν Ἰαπωνίας', 'JP¥', narrow: '¥', plurals: ['other' => 'γιεν Ιαπωνίας'], minorUnits: 0),
    'LKR' => new C('LKR', 'Ρούπια Σρὶ Λάνκας', narrow: 'Rs', plurals: ['one' => 'ρουπία Σρι Λάνκα', 'other' => 'ρουπίες Σρι Λάνκα']),
    'MOP' => new C('MOP', 'Pataca Μακάου', plurals: ['other' => 'πατάκα Μακάο']),
    'MXN' => new C('MXN', 'Πέσο Μεξικοῦ', 'MX$', narrow: '$', plurals: ['other' => 'πέσο Μεξικού']),
    'MXP' => new C('MXP', 'Ἀσημένιο Πέσο Μεξικοῦ (1861–1992)', plurals: ['one' => 'ασημένιο πέσο Μεξικού (MXP)', 'other' => 'ασημένια πέσο Μεξικού (MXP)']),
    'MXV' => new C('MXV', 'Unidad de Inversion (UDI) Μεξικοῦ'),
    'MZE' => new C('MZE', 'Ἐσκούδο Μοζαμβίκης', plurals: ['other' => 'εσκούδο Μοζαμβίκης']),
    'NIO' => new C('NIO', 'Χρυσὴ Κόρδοβα Νικαράγουας', narrow: 'C$', plurals: ['one' => 'χρυσή κόρδοβα Νικαράγουας', 'other' => 'χρυσές κόρδοβα Νικαράγουας']),
    'NLG' => new C('NLG', 'Γκίλντα Ὁλλανδίας', plurals: ['other' => 'γκίλντα Ολλανδίας']),
    'PAB' => new C('PAB', 'Μπαλμπόα Παναμᾶ', plurals: ['other' => 'μπαλμπόα Παναμά']),
    'PGK' => new C('PGK', 'Kina Παπούα Νέα Γουινέας', plurals: ['other' => 'κίνα Παπούας Νέας Γουινέας']),
    'PTE' => new C('PTE', 'Ἐσκούδο Πορτογαλίας', plurals: ['other' => 'εσκούδο Πορτογαλίας']),
    'PYG' => new C('PYG', 'Γκουαρανὶ Παραγουάης', narrow: '₲', plurals: ['other' => 'γκουαρανί Παραγουάης'], minorUnits: 0),
    'SBD' => new C('SBD', 'Δολάριο Νήσων Σολομῶντος', narrow: '$', plurals: ['one' => 'δολάριο Νήσων Σολομώντος', 'other' => 'δολάρια Νήσων Σολομώντος']),
    'SCR' => new C('SCR', 'Ρούπια Σεϋχελῶν', plurals: ['one' => 'ρουπία Σεϋχελλών', 'other' => 'ρουπίες Σεϋχελλών']),
    'SHP' => new C('SHP', 'Λίρα Ἀγίας Ἑλένης', narrow: '£', plurals: ['one' => 'λίρα Αγίας Ελένης', 'other' => 'λίρες Αγίας Ελένης']),
    'SUR' => new C('SUR', 'Σοβιετικὸ Ρούβλι', plurals: ['one' => 'σοβιετικό ρούβλι', 'other' => 'σοβιετικά ρούβλια']),
    'SVC' => new C('SVC', 'Colon Ἒλ Σαλβαδόρ', plurals: ['other' => 'κολόν Ελ Σαλβαδόρ']),
    'SZL' => new C('SZL', 'Lilangeni Ζουαζιλάνδης', plurals: ['other' => 'λιλανγκένι Σουαζιλάνδης']),
    'THB' => new C('THB', 'Μπὰτ Ταϊλάνδης', '฿', narrow: '฿', plurals: ['other' => 'μπατ Ταϊλάνδης']),
    'TMM' => new C('TMM', 'Μανὰτ Τουρκμενιστάν', plurals: ['other' => 'μανάτ Τουρκμενιστάν']),
    'TPE' => new C('TPE', 'Ἐσκούδο Τιμόρ', plurals: ['other' => 'εσκούδο Τιμόρ']),
    'TTD' => new C('TTD', 'Δολάριο Τρινιδὰδ καὶ Τομπάγκο', narrow: '$', plurals: ['one' => 'δολάριο Τρινιντάντ και Τομπάγκο', 'other' => 'δολάρια Τρινιντάντ και Τομπάγκο']),
    'UAH' => new C('UAH', 'Hryvnia Οὐκρανίας', narrow: '₴', plurals: ['other' => 'γρίβνα Ουκρανίας']),
    'UAK' => new C('UAK', 'Karbovanetz Οὐκρανίας', plurals: ['other' => 'καρμποβανέτς Ουκρανίας']),
    'UGS' => new C('UGS', 'Σελίνι Οὐγκάντας (1966–1987)', plurals: ['one' => 'σελίνι Ουγκάντας (UGS)', 'other' => 'σελίνια Ουγκάντας (UGS)']),
    'UGX' => new C('UGX', 'Σελίνι Οὐγκάντας', plurals: ['one' => 'σελίνι Ουγκάντας', 'other' => 'σελίνια Ουγκάντας'], minorUnits: 0),
    'USN' => new C('USN', 'Δολάριο ΗΠΑ (Ἑπόμενη ἡμέρα)', plurals: ['one' => 'δολάριο Η.Π.Α. (επόμενη ημέρα)', 'other' => 'δολάρια Η.Π.Α. (επόμενη ημέρα)']),
    'USS' => new C('USS', 'Δολάριο ΗΠΑ (Ἴδια ἡμέρα)', plurals: ['one' => 'δολάριο Η.Π.Α. (ίδια ημέρα)', 'other' => 'δολάρια Η.Π.Α. (ίδια ημέρα)']),
    'UYP' => new C('UYP', 'Πέσο Οὐρουγουάης (1975–1993)', plurals: ['other' => 'πέσο Ουρουγουάης (UYP)']),
    'UYU' => new C('UYU', 'Πέσο Uruguayo Οὐρουγουάης', narrow: '$', plurals: ['other' => 'πέσο Ουρουγουάης']),
    'UZS' => new C('UZS', 'Sum Οὐζμπεκιστάν', plurals: ['other' => 'σομ Ουζμπεκιστάν']),
    'VEB' => new C('VEB', 'Μπολιβὰλ Βενεζουέλας', plurals: ['other' => 'μπολιβάρ Βενεζουέλας (1871–2008)']),
    'WST' => new C('WST', 'Tala Δυτικῆς Σαμόας', plurals: ['other' => 'τάλα Σαμόα']),
    'XBA' => new C('XBA', 'Εὐρωπαϊκὴ Σύνθετη Μονάδα', plurals: ['one' => 'ευρωπαϊκή σύνθετη μονάδα', 'other' => 'ευρωπαϊκές σύνθετες μονάδες']),
    'XBB' => new C('XBB', 'Εὐρωπαϊκὴ Νομισματικὴ Μονάδα', plurals: ['one' => 'ευρωπαϊκή νομισματική μονάδα', 'other' => 'ευρωπαϊκές νομισματικές μονάδες']),
    'XBC' => new C('XBC', 'Εὐρωπαϊκὴ Μονάδα Λογαριασμοῦ (XBC)', plurals: ['one' => 'ευρωπαϊκή μονάδα λογαριασμού (XBC)', 'other' => 'ευρωπαϊκές μονάδες λογαριασμού (XBC)']),
    'XBD' => new C('XBD', 'Εὐρωπαϊκὴ Μονάδα Λογαριασμοῦ (XBD)', plurals: ['one' => 'ευρωπαϊκή μονάδα λογαριασμού (XBD)', 'other' => 'ευρωπαϊκές μονάδες λογαριασμού (XBD)']),
    'XCD' => new C('XCD', 'Δολάριο Ἀνατολικῆς Καραϊβικῆς', 'EC$', narrow: '$', plurals: ['one' => 'δολάριο Ανατολικής Καραϊβικής', 'other' => 'δολάρια Ανατολικής Καραϊβικής']),
    'XDR' => new C('XDR', 'Εἰδικὰ Δικαιώματα Ἀνάληψης', plurals: ['one' => 'ειδικό δικαίωμα ανάληψης', 'other' => 'ειδικά δικαιώματα ανάληψης']),
    'XEU' => new C('XEU', 'Εὐρωπαϊκὴ Συναλλαγματικὴ Μονάδα', plurals: ['one' => 'ευρωπαϊκή συναλλαγματική μονάδα', 'other' => 'ευρωπαϊκές συναλλαγματικές μονάδες']),
    'XFO' => new C('XFO', 'Χρυσὸ Φράγκο Γαλλίας', plurals: ['one' => 'χρυσό φράγκο Γαλλίας', 'other' => 'χρυσά φράγκα Γαλλίας']),
    'YDD' => new C('YDD', 'Δηνάριο Ὑεμένης', plurals: ['one' => 'δηνάριο Υεμένης', 'other' => 'δηνάρια Υεμένης']),
    'YER' => new C('YER', 'Rial Ὑεμένης', plurals: ['other' => 'ριάλ Υεμένης']),
    'YUD' => new C('YUD', 'Μεταλλικὸ Δηνάριο Γιουγκοσλαβίας', plurals: ['one' => 'μεταλλικό δηνάριο Γιουγκοσλαβίας', 'other' => 'μεταλλικά δηνάρια Γιουγκοσλαβίας']),
    'ZAL' => new C('ZAL', 'Ραντ Νότιας Ἀφρικῆς (οἰκονομικό)', plurals: ['other' => 'ραντ Νότιας Αφρικής (οικονομικό)']),
    'ZAR' => new C('ZAR', 'Ρὰντ Νότιας Ἀφρικῆς', narrow: 'R', plurals: ['other' => 'ραντ Νότιας Αφρικής']),
];
