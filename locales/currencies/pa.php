<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'AED' => new C('AED', 'ਸੰਯੁਕਤ ਅਰਬ ਅਮੀਰਾਤ ਦਿਰਹਾਮ'),
    'AFN' => new C('AFN', 'ਅਫ਼ਗਾਨ ਅਫ਼ਗਾਨੀ', narrow: '؋'),
    'ALL' => new C('ALL', 'ਅਲਬਾਨੀਆਈ ਲੇਕ'),
    'AMD' => new C('AMD', 'ਅਰਮੀਨੀਆਈ ਦਰਾਮ', narrow: '֏'),
    'ANG' => new C('ANG', 'ਨੀਦਰਲੈਂਡਸ ਐਂਟੀਲੀਅਨ ਗਿਲਡਰ'),
    'AOA' => new C('AOA', 'ਅੰਗੋਲਾ ਕਵਾਂਜਾ', narrow: 'Kz'),
    'ARA' => new C('ARA', 'ਅਰਜਨਟੀਨੀ ਅਸਟਰਾਲ'),
    'ARL' => new C('ARL', 'ਅਰਜਨਟੀਨੀ ਪੇਸੋ ਲੇ (1970–1983)'),
    'ARM' => new C('ARM', 'ਅਰਜਨਟੀਨੀ ਪੇਸੋ (1881–1970)'),
    'ARP' => new C('ARP', 'ਅਰਜਨਟੀਨੀ ਪੇਸੋ (1983–1985)'),
    'ARS' => new C('ARS', 'ਅਰਜਨਟੀਨੀ ਪੇਸੋ', narrow: '$'),
    'AUD' => new C('AUD', 'ਆਸਟ੍ਰੇਲੀਆਈ ਡਾਲਰ', 'A$', '$'),
    'AWG' => new C('AWG', 'ਅਰੂਬਨ ਫਲੋਰਿਨ'),
    'AZN' => new C('AZN', 'ਅਜ਼ਰਬਾਈਜਾਨ ਮਾਨਤ', narrow: '₼'),
    'BAM' => new C('BAM', 'ਬੋਸਨੀਆ-ਹਰਜ਼ੇਗੋਵੀਨਾ ਬਦਲਣਯੋਗ ਮਾਰਕ', narrow: 'KM'),
    'BBD' => new C('BBD', 'ਬਾਰਬਾਡੀਅਨ ਡਾਲਰ', narrow: '$'),
    'BDT' => new C('BDT', 'ਬੰਗਲਾਦੇਸ਼ੀ ਟਕਾ', narrow: '৳'),
    'BGN' => new C('BGN', 'ਬੁਲਗਾਰੀਆਈ ਲੇਵ'),
    'BHD' => new C('BHD', 'ਬਹਿਰੀਨੀ ਦਿਨਾਰ', minorUnits: 3),
    'BIF' => new C('BIF', 'ਬੁਰੁੰਡੀਆਈ ਫ੍ਰੈਂਕ', minorUnits: 0),
    'BMD' => new C('BMD', 'ਬਰਮੂਡਾ ਡਾਲਰ', narrow: '$'),
    'BND' => new C('BND', 'ਬਰੂਨੇਈ ਡਾਲਰ', narrow: '$'),
    'BOB' => new C('BOB', 'ਬੋਲੀਵੀਅਨ ਬੋਲੀਵੀਅਨੋ', narrow: 'Bs'),
    'BOL' => new C('BOL', 'ਬੋਲੀਵੀਆਈ ਬੋਲੀਵੀਅਨੋ (1863–1963)'),
    'BOP' => new C('BOP', 'ਬੋਲੀਵੀਆਈ ਪੇਸੋ'),
    'BOV' => new C('BOV', 'ਬੋਲੀਵੀਆਈ ਮਵਡੋਲ'),
    'BRB' => new C('BRB', 'ਬ੍ਰਾਜ਼ੀਲੀਆਈ ਨਿਊ ਕਰੁਜ਼ਿਰੋਸ (1967–1986)'),
    'BRC' => new C('BRC', 'ਬ੍ਰਾਜ਼ੀਲੀਆਈ ਕਰੁਜ਼ਾਡੂ (1986–1989)'),
    'BRE' => new C('BRE', 'ਬ੍ਰਾਜ਼ੀਲੀਆਈ ਕਰੁਜ਼ਿਰੋਸ (1990–1993)'),
    'BRL' => new C('BRL', 'ਬ੍ਰਾਜ਼ੀਲੀਆਈ ਰੀਅਲ', 'R$', 'R$'),
    'BRN' => new C('BRN', 'ਬ੍ਰਾਜ਼ੀਲੀਆਈ ਨਿਊ ਕਰੁਜ਼ਾਡੂ (1989–1990)'),
    'BRR' => new C('BRR', 'ਬ੍ਰਾਜ਼ੀਲੀਆਈ ਕਰੁਜ਼ਿਰੋਸ (1993–1994)'),
    'BRZ' => new C('BRZ', 'ਬ੍ਰਾਜ਼ੀਲੀਆਈ ਕਰੁਜ਼ਿਰੋਸ (1942–1967)'),
    'BSD' => new C('BSD', 'ਬਾਹਾਮੀਅਨ ਡਾਲਰ', narrow: '$'),
    'BTN' => new C('BTN', 'ਭੂਟਾਨੀ ਐਂਗਲਟ੍ਰਮ'),
    'BWP' => new C('BWP', 'ਬੋਟਸਵਾਨਾ ਪੁਲਾ', narrow: 'P'),
    'BYN' => new C('BYN', 'ਬੇਲਾਰੂਸੀ ਰੂਬਲ', narrow: 'р.'),
    'BYR' => new C('BYR', 'ਬੇਲਾਰੂਸੀ ਰੂਬਲ (2000–2016)'),
    'BZD' => new C('BZD', 'ਬੇਲੀਜ਼ ਡਾਲਰ', narrow: '$'),
    'CAD' => new C('CAD', 'ਕੇਨੇਡਿਆਈ ਡਾਲਰ', 'CA$', '$'),
    'CDF' => new C('CDF', 'ਕਾਂਗੋਲੀਜ਼ ਫ੍ਰੈਂਕ'),
    'CHF' => new C('CHF', 'ਸਵਿਸ ਫ੍ਰੈਂਕ'),
    'CLP' => new C('CLP', 'ਚਿਲੀ ਪੇਸੋ', narrow: '$', minorUnits: 0),
    'CNH' => new C('CNH', 'ਚੀਨੀ ਯੁਆਨ (ਔਫ਼ਸ਼ੋਰ)'),
    'CNY' => new C('CNY', 'ਚੀਨੀ ਯੁਆਨ', 'CN¥', '¥'),
    'COP' => new C('COP', 'ਕੋਲੰਬਿਆਈ ਪੇਸੋ', narrow: '$'),
    'CRC' => new C('CRC', 'ਕੋਸਟਾ ਰੀਕਨ ਕੋਲਨ', narrow: '₡'),
    'CUC' => new C('CUC', 'ਕਿਊਬਨ ਬਦਲਣਯੋਗ ਪੇਸੋ', narrow: '$'),
    'CUP' => new C('CUP', 'ਕਿਊਬਨ ਪੇਸੋ', narrow: '$'),
    'CVE' => new C('CVE', 'ਕੇਪ ਵਰਡੀਅਨ ਸਕੂਡੋ'),
    'CZK' => new C('CZK', 'ਚੈਕ ਗਣਰਾਜ ਕੋਰੁਨਾ', narrow: 'Kč'),
    'DEM' => new C('DEM', 'ਜਰਮਨ ਮਾਰਕ'),
    'DJF' => new C('DJF', 'ਜ਼ੀਬੂਤੀਅਨ ਫ੍ਰੈਂਕ', minorUnits: 0),
    'DKK' => new C('DKK', 'ਡੈਨਿਸ਼ ਕਰੌਨ', narrow: 'kr'),
    'DOP' => new C('DOP', 'ਡੌਮਿਨਿਕਨ ਪੇਸੋ', narrow: '$'),
    'DZD' => new C('DZD', 'ਅਲਜੀਰਿਆਈ ਦਿਨਾਰ'),
    'EGP' => new C('EGP', 'ਮਿਸਰੀ ਪੌਂਡ', narrow: 'E£'),
    'ERN' => new C('ERN', 'ਇਰੀਟ੍ਰਿਆਈ ਨਾਫ਼ਾ'),
    'ETB' => new C('ETB', 'ਇਥੋਪੀਆਈ ਬਿਰ'),
    'EUR' => new C('EUR', 'ਯੂਰੋ', '€', '€'),
    'FJD' => new C('FJD', 'ਫ਼ਿਜ਼ੀ ਡਾਲਰ', narrow: '$'),
    'FKP' => new C('FKP', 'ਫ਼ਾਕਲੈਂਡ ਆਈਲੈਂਡਸ ਪੌਂਡ', narrow: '£'),
    'GBP' => new C('GBP', 'ਬ੍ਰਿਟਿਸ਼ ਪੌਂਡ', '£', '£'),
    'GEL' => new C('GEL', 'ਜਾਰਜੀਆਈ ਲਾਰੀ', narrow: '₾'),
    'GHS' => new C('GHS', 'ਘਾਨਾਈ ਸੇਡੀ', narrow: 'GH₵'),
    'GIP' => new C('GIP', 'ਜਿਬਰਾਲਟਰ ਪੌਂਡ', narrow: '£'),
    'GMD' => new C('GMD', 'ਗੈਂਬੀਆਈ ਦਲਾਸੀ'),
    'GNF' => new C('GNF', 'ਗਿਨੀ ਫ੍ਰੈਂਕ', narrow: 'FG', minorUnits: 0),
    'GTQ' => new C('GTQ', 'ਗੁਆਟੇਮਾਲਾ ਕੁਏਟਜ਼ਲ', narrow: 'Q'),
    'GYD' => new C('GYD', 'ਗੁਆਨਾਆਈ ਡਾਲਰ', narrow: '$'),
    'HKD' => new C('HKD', 'ਹਾਂਗ ਕਾਂਗ ਡਾਲਰ', 'HK$', '$'),
    'HNL' => new C('HNL', 'ਹਾਨਡੂਰਨ ਲੇਮਪਿਰਾ', narrow: 'L'),
    'HRK' => new C('HRK', 'ਕਰੋਏਸ਼ੀਆਈ ਕੁਨਾ', narrow: 'kn'),
    'HTG' => new C('HTG', 'ਹੈਤੀ ਗੌਰਡੇ'),
    'HUF' => new C('HUF', 'ਹੰਗਰੀ ਫੋਰਿੰਟ', narrow: 'Ft'),
    'IDR' => new C('IDR', 'ਇੰਡੋਨੇਸ਼ੀਆਈ ਰੁਪਿਆਹ', narrow: 'Rp'),
    'IEP' => new C('IEP', 'ਆਇਰਿਸ਼ ਪੌਂਡ'),
    'ILP' => new C('ILP', 'ਇਜ਼ਰਾਈਲੀ ਪੌਂਡ'),
    'ILS' => new C('ILS', 'ਇਜ਼ਰਾਈਲੀ ਨਵੀਂ ਸ਼ੇਕੇਲ', '₪', '₪'),
    'INR' => new C('INR', 'ਭਾਰਤੀ ਰੁਪਇਆ', '₹', '₹', ['one' => 'ਭਾਰਤੀ ਰੁਪਇਆ', 'other' => 'ਭਾਰਤੀ ਰੁਪਏ']),
    'IQD' => new C('IQD', 'ਇਰਾਕੀ ਦਿਨਾਰ', minorUnits: 3),
    'IRR' => new C('IRR', 'ਈਰਾਨੀ ਰਿਆਲ'),
    'ISK' => new C('ISK', 'ਆਈਸਲੈਂਡੀ ਕਰੋਨਾ', narrow: 'kr', minorUnits: 0),
    'JMD' => new C('JMD', 'ਜਮਾਇਕਨ ਡਾਲਰ', narrow: '$'),
    'JOD' => new C('JOD', 'ਜਾਰਡਨ ਦਿਨਾਰ', minorUnits: 3),
    'JPY' => new C('JPY', 'ਜਪਾਨੀ ਯੇਨ', 'JP¥', '¥', minorUnits: 0),
    'KES' => new C('KES', 'ਕੀਨੀਆਈ ਸ਼ਿਲਿੰਗ'),
    'KGS' => new C('KGS', 'ਕਿਰਗਿਸਤਾਨੀ ਸੋਮ', narrow: '⃀'),
    'KHR' => new C('KHR', 'ਕੰਬੋਡੀਆਈ ਰੀਅਲ', narrow: '៛'),
    'KMF' => new C('KMF', 'ਕੋਮੋਰੀਅਨ ਫ੍ਰੈਂਕ', narrow: 'CF', minorUnits: 0),
    'KPW' => new C('KPW', 'ਉੱਤਰੀ ਕੋਰੀਆਈ ਵੋਨ', narrow: '₩'),
    'KRW' => new C('KRW', 'ਦੱਖਣੀ ਕੋਰੀਆਈ ਵੋਨ', '₩', '₩', minorUnits: 0),
    'KWD' => new C('KWD', 'ਕੁਵੈਤੀ ਦਿਨਾਰ', minorUnits: 3),
    'KYD' => new C('KYD', 'ਕੇਮੈਨ ਆਈਲੈਂਡਸ ਡਾਲਰ', narrow: '$'),
    'KZT' => new C('KZT', 'ਕਜ਼ਾਖਸਤਾਨੀ ਤੇਂਗੇ', narrow: '₸'),
    'LAK' => new C('LAK', 'ਲਾਓਟਿਆਈ ਕਿਪ', narrow: '₭'),
    'LBP' => new C('LBP', 'ਲੈਬਨਾਨੀ ਪੌਂਡ', narrow: 'L£'),
    'LKR' => new C('LKR', 'ਸ੍ਰੀਲੰਕਾਈ ਰੁਪਇਆ', narrow: 'Rs', plurals: ['one' => 'ਸ੍ਰੀਲੰਕਾਈ ਰੁਪਇਆ', 'other' => 'ਸ੍ਰੀਲੰਕਾਈ ਰੁਪਏ']),
    'LRD' => new C('LRD', 'ਲਾਈਬੀਰੀਆਈ ਡਾਲਰ', narrow: '$'),
    'LSL' => new C('LSL', 'ਲੇਸੋਥੋ ਲੋਟੀ'),
    'LTL' => new C('LTL', 'ਲਿਥੁਆਨੀਆਈ ਲਿਤਾਸ', narrow: 'Lt'),
    'LVL' => new C('LVL', 'ਲਾਟਵਿਆਈ ਲਾਟਸ', narrow: 'Ls'),
    'LYD' => new C('LYD', 'ਲੀਬੀਆਈ ਦਿਨਾਰ', minorUnits: 3),
    'MAD' => new C('MAD', 'ਮੋਰੱਕਨ ਦਿਰਹਾਮ'),
    'MDL' => new C('MDL', 'ਮੋਲਡੋਵਨ ਲੇਉ'),
    'MGA' => new C('MGA', 'ਮਾਲਾਗਾਸੀ ਅਰਾਇਰੀ', narrow: 'Ar'),
    'MKD' => new C('MKD', 'ਮੈਕਡੋਨੀਆਈ ਡੇਨਾਰ'),
    'MMK' => new C('MMK', 'ਮਿਆਂਮਾਰ ਕਿਆਤ', narrow: 'K'),
    'MNT' => new C('MNT', 'ਮੰਗੋਲੀਆਈ ਤੁਗਰਿਕ', narrow: '₮'),
    'MOP' => new C('MOP', 'ਮੇਕਾਨੀ ਪਟਾਕਾ'),
    'MRO' => new C('MRO', 'ਮੋਰਿਟਾਨੀਆਈ ਊਗੀਆ (1973–2017)'),
    'MRU' => new C('MRU', 'ਮੋਰਿਟਾਨੀਆਈ ਊਗੀਆ'),
    'MUR' => new C('MUR', 'ਮੌਰਿਸ਼ੀਆਈ ਰੁਪਇਆ', narrow: 'Rs', plurals: ['one' => 'ਮੌਰਿਸ਼ੀਆਈ ਰੁਪਇਆ', 'other' => 'ਮੌਰਿਸ਼ੀਆਈ ਰੁਪਏ']),
    'MVR' => new C('MVR', 'ਮਾਲਦੀਵੀ ਰੁਫੀਆ'),
    'MWK' => new C('MWK', 'ਮਾਲਾਵੀਆਈ ਕਵਾਚਾ'),
    'MXN' => new C('MXN', 'ਮੈਕਸੀਕਨ ਪੇਸੋ', 'MX$', '$'),
    'MYR' => new C('MYR', 'ਮਲੇਸ਼ੀਆਈ ਰਿੰਗਿਟ', narrow: 'RM'),
    'MZN' => new C('MZN', 'ਮੋਜ਼ਾਮਬੀਕਨ ਮੈਟੀਕਲ'),
    'NAD' => new C('NAD', 'ਨਾਮੀਬੀਆਈ ਡਾਲਰ', narrow: '$'),
    'NGN' => new C('NGN', 'ਨਾਇਜੀਰੀਆਈ ਨਾਇਰਾ', narrow: '₦'),
    'NIO' => new C('NIO', 'ਨਿਕਾਰਾਗੁਆਈ ਕੋਰਡੋਬਾ', narrow: 'C$'),
    'NOK' => new C('NOK', 'ਨਾਰਵੇਜੀਆਈ ਕਰੌਨ', narrow: 'kr'),
    'NPR' => new C('NPR', 'ਨੇਪਾਲੀ ਰੁਪਇਆ', narrow: 'Rs', plurals: ['one' => 'ਨੇਪਾਲੀ ਰੁਪਇਆ', 'other' => 'ਨੇਪਾਲੀ ਰੁਪਏ']),
    'NZD' => new C('NZD', 'ਨਿਊਜ਼ੀਲੈਂਡ ਡਾਲਰ', 'NZ$', '$'),
    'OMR' => new C('OMR', 'ਓਮਾਨੀ ਰਿਆਲ', minorUnits: 3),
    'PAB' => new C('PAB', 'ਪਨਾਮੇਨੀਅਨ ਬਾਲਬੋਆ'),
    'PEN' => new C('PEN', 'ਪੇਰੂਵੀਅਨ ਸੋਲ'),
    'PGK' => new C('PGK', 'ਪਾਪੂਆ ਨਿਊ ਗਿਨੀਆਈ ਕੀਨਾ'),
    'PHP' => new C('PHP', 'ਫਿਲਿਪੀਨੀ ਪੇਸੋ', narrow: '₱'),
    'PKR' => new C('PKR', 'ਪਾਕਿਸਤਾਨੀ ਰੁਪਇਆ', narrow: 'Rs', plurals: ['one' => 'ਪਾਕਿਸਤਾਨੀ ਰੁਪਇਆ', 'other' => 'ਪਾਕਿਸਤਾਨੀ ਰੁਪਏ']),
    'PLN' => new C('PLN', 'ਪੋਲੈਂਡੀ ਜ਼ਲੌਟੀ', narrow: 'zł'),
    'PYG' => new C('PYG', 'ਪੈਰਾਗੁਵਾਇਨ ਗੁਆਰਾਨੀ', narrow: '₲', minorUnits: 0),
    'QAR' => new C('QAR', 'ਕਤਰੀ ਰਿਆਲ'),
    'RON' => new C('RON', 'ਰੋਮਾਨੀਆਈ ਲੇਉ', narrow: 'lei'),
    'RSD' => new C('RSD', 'ਸਰਬੀਆਈ ਦਿਨਾਰ'),
    'RUB' => new C('RUB', 'ਰੂਸੀ ਰੂਬਲ', narrow: '₽'),
    'RWF' => new C('RWF', 'ਰਵਾਂਡਨ ਫ੍ਰੈਂਕ', narrow: 'RF', minorUnits: 0),
    'SAR' => new C('SAR', 'ਸਾਊਦੀ ਰਿਆਲ'),
    'SBD' => new C('SBD', 'ਸੋਲੋਮਨ ਆਈਲੈਂਡਸ ਡਾਲਰ', narrow: '$'),
    'SCR' => new C('SCR', 'ਸੇਸ਼ਲਸ ਰੁਪਇਆ', plurals: ['one' => 'ਸੇਸ਼ਲਸ ਰੁਪਇਆ', 'other' => 'ਸੇਸ਼ਲਸ ਰੁਪਏ']),
    'SDG' => new C('SDG', 'ਸੂਡਾਨੀ ਪੌਂਡ'),
    'SEK' => new C('SEK', 'ਸਵੀਡਿਸ਼ ਕਰੋਨਾ', narrow: 'kr'),
    'SGD' => new C('SGD', 'ਸਿੰਗਾਪੁਰ ਡਾਲਰ', narrow: '$'),
    'SHP' => new C('SHP', 'ਸੇਂਟ ਹੇਲੇਨਾ ਪੌਂਡ', narrow: '£'),
    'SLE' => new C('SLE', 'ਸਿਏਰਾ ਲਿਓਨੀਅਨ ਲਿਓਨ'),
    'SLL' => new C('SLL', 'ਸਿਏਰਾ ਲਿਓਨੀਅਨ ਲਿਓਨ (1964—2022)'),
    'SOS' => new C('SOS', 'ਸੋਮਾਲੀ ਸ਼ਿਲਿੰਗ'),
    'SRD' => new C('SRD', 'ਸੂਰੀਨਾਮੀ ਡਾਲਰ', narrow: '$'),
    'SSP' => new C('SSP', 'ਦੱਖਣੀ ਸੂਡਾਨੀ ਪੌਂਡ', narrow: '£'),
    'STD' => new C('STD', 'ਸਾਉ ਟੋਮੀ ਐਂਡ ਪ੍ਰਿੰਸਪੀ ਡੋਬਰਾ (1977–2017)'),
    'STN' => new C('STN', 'ਸਾਉ ਟੋਮੀ ਐਂਡ ਪ੍ਰਿੰਸਪੀ ਡੋਬਰਾ', narrow: 'Db'),
    'SUR' => new C('SUR', 'ਸੋਵੀਅਤ ਰੂਬਲ'),
    'SYP' => new C('SYP', 'ਸੀਰੀਆਈ ਪੌਂਡ', narrow: '£'),
    'SZL' => new C('SZL', 'ਸਵਾਜ਼ੀ ਲਾਇਲੈਂਗਨੀ'),
    'THB' => new C('THB', 'ਥਾਈ ਬਾਹਤ', '฿', '฿'),
    'TJS' => new C('TJS', 'ਤਾਜਿਕਿਸਤਾਨੀ ਸੋਮੋਨੀ'),
    'TMT' => new C('TMT', 'ਤੁਰਕਮੇਨਿਸਤਾਨੀ ਮਾਨਤ'),
    'TND' => new C('TND', 'ਟਿਉਨੀਸ਼ੀਆਈ ਦਿਨਾਰ', minorUnits: 3),
    'TOP' => new C('TOP', 'ਟੌਂਗਨ ਪੈਂਗਾ', narrow: 'T$'),
    'TRY' => new C('TRY', 'ਤੁਰਕੀ ਲੀਰਾ', narrow: '₺'),
    'TTD' => new C('TTD', 'ਟ੍ਰਿਨੀਡਾਡ ਅਤੇ ਟੋਬਾਗੋ ਡਾਲਰ', narrow: '$'),
    'TWD' => new C('TWD', 'ਨਵਾਂ ਤਾਇਵਾਨ ਡਾਲਰ', 'NT$', 'NT$'),
    'TZS' => new C('TZS', 'ਤਨਜ਼ਾਨੀਆਈ ਸ਼ਿਲਿੰਗ'),
    'UAH' => new C('UAH', 'ਯੂਕਰੇਨੀਆਈ ਰਿਵਨਿਆ', narrow: '₴'),
    'UGX' => new C('UGX', 'ਯੂਗਾਂਡੀਆਈ ਸ਼ਿਲਿੰਗ', minorUnits: 0),
    'USD' => new C('USD', 'ਯੂ.ਐਸ. ਡਾਲਰ', 'US$', '$'),
    'UYP' => new C('UYP', 'ਉਰੂਗੁਵਾਇਨ ਪੇਸੋ (1975–1993)'),
    'UYU' => new C('UYU', 'ਉਰੂਗੁਵਾਇਨ ਪੇਸੋ', narrow: '$'),
    'UZS' => new C('UZS', 'ਉਜ਼ਬੇਕਿਸਤਾਨ ਸੋਮ'),
    'VEB' => new C('VEB', 'ਵੇਨੇਜ਼ੂਏਲਨ ਬੋਲੀਵਰ (1871–2008)'),
    'VEF' => new C('VEF', 'ਵੇਨੇਜ਼ੂਏਲਨ ਬੋਲੀਵਰ (2008–2018)', narrow: 'Bs'),
    'VES' => new C('VES', 'ਵੇਨੇਜ਼ੂਏਲਨ ਬੋਲੀਵਰ'),
    'VND' => new C('VND', 'ਵੀਅਤਨਾਮੀ ਡੋਂਗ', '₫', '₫', minorUnits: 0),
    'VNN' => new C('VNN', 'ਵੀਅਤਨਾਮੀ ਡੋਂਗ (1978–1985)'),
    'VUV' => new C('VUV', 'ਵਾਨੂਆਟੂ ਵਾਟੂ', minorUnits: 0),
    'WST' => new C('WST', 'ਸਾਮੋਆਈ ਤਾਲਾ'),
    'XAF' => new C('XAF', 'ਕੇਂਦਰੀ ਅਫ਼ਰੀਕੀ [CFA] ਫ੍ਰੈਂਕ', 'FCFA', minorUnits: 0),
    'XAG' => new C('XAG', 'ਚਾਂਦੀ', plurals: 'ਚਾਂਦੀ ਦਾ ਟਰੌਏ ਔਂਸ'),
    'XAU' => new C('XAU', 'ਸੋਨਾ', plurals: 'ਸੋਨੇ ਦਾ ਟਰੌਏ ਔਂਸ'),
    'XBB' => new C('XBB', 'ਯੂਰਪੀ ਵਿੱਤੀ ਇਕਾਈ'),
    'XCD' => new C('XCD', 'ਪੂਰਬੀ ਕੈਰੇਬੀਅਨ ਡਾਲਰ', 'EC$', '$'),
    'XEU' => new C('XEU', 'ਯੂਰਪੀ ਮੁਦਰਾ ਇਕਾਈ', plurals: ['one' => 'ਯੂਰਪੀਅਨ ਮੁਦਰਾ ਇਕਾਈ', 'other' => 'ਯੂਰਪੀ ਮੁਦਰਾ ਇਕਾਈ']),
    'XOF' => new C('XOF', 'ਪੱਛਮੀ ਅਫ਼ਰੀਕੀ (CFA) ਫ੍ਰੈਂਕ', "F\u{202F}CFA", minorUnits: 0),
    'XPF' => new C('XPF', 'ਫ੍ਰੈਂਕ (CFP)', 'CFPF', minorUnits: 0),
    'XXX' => new C('XXX', 'ਅਗਿਆਤ ਮੁਦਰਾ', plurals: ['one' => '(ਮੁਦਰਾ ਦੀ ਅਗਿਆਤ ਇਕਾਈ)', 'other' => '(ਅਗਿਆਤ ਮੁਦਰਾ)']),
    'YER' => new C('YER', 'ਯਮਨੀ ਰਿਆਲ'),
    'ZAR' => new C('ZAR', 'ਦੱਖਣੀ ਅਫਰੀਕੀ ਰੈਂਡ', narrow: 'R'),
    'ZMW' => new C('ZMW', 'ਜ਼ਾਮਬੀਆਈ ਕਵਾਚਾ', narrow: 'ZK'),
];
