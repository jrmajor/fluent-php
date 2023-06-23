<?php

use Major\Fluent\Formatters\Number\Locale\Unit as U;

return [
    'acre' => new U(['one' => 'eka {0}', 'other' => 'ekoki {0}'], 'ek {0}', 'ek{0}'),
    'bit' => new U(['one' => 'bit {0}', 'other' => 'bits {0}'], 'bit {0}', 'bit{0}'),
    'byte' => new U(['one' => 'byte {0}', 'other' => 'bytes {0}'], 'byte {0}', 'B{0}'),
    'celsius' => new U(['one' => 'Digiri Selsiyas {0}', 'other' => 'digiri-digiri Selsiyas {0}'], '°S{0}', 'S°{0}'),
    'centimeter' => new U(['one' => 'sentimita {0}', 'other' => 'sentimitoci {0}'], 'cm {0}', 'cm{0}'),
    'day' => new U(['one' => 'rana {0}', 'other' => 'ranaku {0}'], ['one' => 'rana {0}', 'other' => 'Rnk. {0}'], 'r{0}'),
    'degree' => new U(['one' => 'degree {0}', 'other' => 'degrees {0}'], 'deg {0}', 'deg{0}'),
    'fahrenheit' => new U(['one' => 'Digiri Faranhit {0}', 'other' => 'digiri-digiri faranhit {0}'], 'F°{0}', '°{0}'),
    'fluid-ounce' => new U(['one' => 'fluid ounce {0}', 'other' => 'fluid ounces {0}'], 'fl oz {0}', 'fl oz{0}'),
    'foot' => new U(['one' => 'ƙafa {0}', 'other' => 'ƙafafu {0}'], ['one' => 'ƙf {0}', 'other' => 'ƙff {0}'], ['one' => 'ƙf{0}', 'other' => 'ƙff{0}']),
    'gallon' => new U(['one' => 'galan {0}', 'other' => 'galan-galan {0}'], 'gal {0}', 'gal{0}'),
    'gigabit' => new U(['one' => 'gigabit {0}', 'other' => 'gigabits {0}'], 'Gb {0}', 'Gb{0}'),
    'gigabyte' => new U(['one' => 'gigabyte {0}', 'other' => 'gigabytes {0}'], 'GB {0}', ['one' => 'GB{0}', 'other' => 'GB {0}']),
    'gram' => new U(['one' => 'giram {0}', 'other' => 'giram-giram {0}'], 'g {0}', 'g{0}'),
    'hectare' => new U(['one' => 'hekta {0}', 'other' => 'hektoci {0}'], 'ha {0}', ['one' => 'ha{0}', 'other' => 'hk{0}']),
    'hour' => new U(['one' => 'sa′a {0}', 'other' => 'sa′o′i {0}'], 's {0}', 's{0}'),
    'inch' => new U(['one' => 'inci {0}', 'other' => 'incina {0}'], 'in {0}', '{0}″'),
    'kilobit' => new U(['one' => 'kilobit {0}', 'other' => 'kilobits {0}'], 'kb {0}', 'kb{0}'),
    'kilobyte' => new U(['one' => 'kilobyte {0}', 'other' => 'kilobytes {0}'], 'kB {0}', 'kB{0}'),
    'kilogram' => new U(['one' => 'kilogiram {0}', 'other' => 'kilogiramgiram {0}'], 'kg {0}', 'kg{0}'),
    'kilometer' => new U(['one' => 'kilomita {0}', 'other' => 'kilomitoci {0}'], ['one' => 'km {0}', 'other' => '{0} km'], 'km{0}'),
    'liter' => new U(['one' => 'lita {0}', 'other' => 'litoci {0}'], 'L {0}', 'L{0}'),
    'megabit' => new U(['one' => 'megabit {0}', 'other' => 'megabits {0}'], 'Mb {0}', 'Mb{0}'),
    'megabyte' => new U(['one' => 'megabyte {0}', 'other' => 'megabytes {0}'], 'MB {0}', 'MB{0}'),
    'meter' => new U(['one' => 'mita {0}', 'other' => 'mitoci {0}'], 'm {0}', 'm{0}'),
    'microsecond' => new U(['one' => 'makirosekan {0}', 'other' => 'makirosekans {0}'], 'μs {0}', 'μs{0}'),
    'mile' => new U(['one' => 'mil {0}', 'other' => 'mil-mil {0}'], 'mi {0}', ['one' => 'mi{0}', 'other' => 'mil-mil{0}']),
    'mile-scandinavian' => new U(['one' => 'mile-scandinavian {0}', 'other' => 'miles-scandinavian {0}'], 'smi {0}', 'smi{0}'),
    'milliliter' => new U(['one' => 'millimita {0}', 'other' => 'millimitoci {0}'], 'mL {0}', 'mL{0}'),
    'millimeter' => new U(['one' => 'milimita {0}', 'other' => 'milimitoci {0}'], 'mm {0}', 'mm{0}'),
    'millisecond' => new U(['one' => 'millisakan {0}', 'other' => 'millisakans {0}'], 'ms {0}', 'ms {0}'),
    'minute' => new U(['one' => 'minti {0}', 'other' => 'mintoci {0}'], 'mnt {0}', ['one' => 'minti{0}', 'other' => 'minti {0}']),
    'month' => new U(['one' => 'wata {0}', 'other' => 'watanni {0}'], ['one' => 'wat {0}', 'other' => 'wtnn {0}'], 'w{0}'),
    'nanosecond' => new U(['one' => 'nanosekan {0}', 'other' => 'nanosekans {0}'], 'ns {0}', 'ns{0}'),
    'ounce' => new U(['one' => 'oza {0}', 'other' => 'oza-oza {0}'], 'oz {0}', 'oz{0}'),
    'percent' => new U(['one' => 'kaso {0}', 'other' => 'Kaso {0}'], '{0}%', '%{0}'),
    'petabyte' => new U(['one' => 'petabyte {0}', 'other' => 'petabytes {0}'], 'PB {0}', 'PB{0}'),
    'pound' => new U(['one' => 'Laba {0}', 'other' => 'laba-laba {0}'], 'lb {0}', '{0}#'),
    'second' => new U(['one' => 'daƙiƙa {0}', 'other' => 'daƙiƙoƙi {0}'], 'd {0}', 'd {0}'),
    'stone' => new U(['one' => 'stone {0}', 'other' => 'stones {0}'], 'st {0}', 'st{0}'),
    'terabit' => new U(['one' => 'terabit {0}', 'other' => 'terabits {0}'], 'Tb {0}', 'Tb{0}'),
    'terabyte' => new U(['one' => 'terabyte {0}', 'other' => 'terabytes {0}'], 'TB {0}', 'TB{0}'),
    'week' => new U(['one' => 'mako {0}', 'other' => 'makonni {0}'], ['one' => 'mk {0}', 'other' => 'mkn {0}'], 'm{0}'),
    'yard' => new U(['one' => 'yadi {0}', 'other' => 'yaduka {0}'], 'yd {0}', ['one' => 'yd{0}', 'other' => 'ydk{0}']),
    'year' => new U(['one' => 'shekara {0}', 'other' => 'shekaru {0}'], ['one' => 'shkr {0}', 'other' => 'shkru {0}'], ['one' => 'shkr {0}', 'other' => 's{0}']),
];
