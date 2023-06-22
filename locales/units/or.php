<?php

use Major\Fluent\Formatters\Number\Locale\Unit as U;

return [
    'acre' => new U(long: ['name' => 'ଏକର', 'plurals' => ['one' => '{0} ଏକର', 'other' => '{0} ଏକର'], 'perUnit' => ''], short: ['name' => 'ଏକର', 'plurals' => ['one' => '{0} ଏକର', 'other' => '{0} ଏକର'], 'perUnit' => ''], narrow: ['name' => 'ଏକର', 'plurals' => ['one' => '{0} ଏକର', 'other' => '{0} ଏକର'], 'perUnit' => '']),
    'bit' => new U(long: ['name' => 'ବିଟ୍', 'plurals' => ['one' => '{0} ବିଟ୍', 'other' => '{0} ବିଟ୍'], 'perUnit' => ''], short: ['name' => 'ବିଟ୍', 'plurals' => ['one' => '{0} ବିଟ୍', 'other' => '{0} ବିଟ୍'], 'perUnit' => ''], narrow: ['name' => 'ବିଟ୍', 'plurals' => ['one' => '{0} ବିଟ୍', 'other' => '{0} ବିଟ୍'], 'perUnit' => '']),
    'byte' => new U(long: ['name' => 'ବାଇଟ୍', 'plurals' => ['one' => '{0} ବାଇଟ୍', 'other' => '{0} ବାଇଟ୍'], 'perUnit' => ''], short: ['name' => 'ବାଇଟ୍', 'plurals' => ['one' => '{0} ବାଇଟ୍', 'other' => '{0} ବାଇଟ୍'], 'perUnit' => ''], narrow: ['name' => 'ବାଇଟ୍', 'plurals' => ['one' => '{0} ବାଇଟ୍', 'other' => '{0} ବାଇଟ୍'], 'perUnit' => '']),
    'celsius' => new U(long: ['name' => 'ଡିଗ୍ରୀ ସେଲସିୟସ୍', 'plurals' => ['one' => '{0} ଡିଗ୍ରୀ ସେଲସିୟସ୍', 'other' => '{0} ଡିଗ୍ରୀ ସେଲସିୟସ୍'], 'perUnit' => ''], short: ['name' => 'ଡି. ସେ', 'plurals' => ['one' => '{0}°ସେ', 'other' => '{0}°ସେ'], 'perUnit' => ''], narrow: ['name' => '°ସେ', 'plurals' => ['one' => '{0}°ସେ', 'other' => '{0}°ସେ'], 'perUnit' => '']),
    'centimeter' => new U(long: ['name' => 'ସେଣ୍ଟିମିଟର୍', 'plurals' => ['one' => '{0} ସେଣ୍ଟିମିଟର୍', 'other' => '{0} ସେଣ୍ଟିମିଟର୍'], 'perUnit' => '{0} ପ୍ରତି ସେଣ୍ଟିମିଟର୍'], short: ['name' => 'ସେମି', 'plurals' => ['one' => '{0} ସେମି', 'other' => '{0} ସେମି'], 'perUnit' => '{0}/ସେମି'], narrow: ['name' => 'ସେମି', 'plurals' => ['one' => '{0} ସେମି', 'other' => '{0}ସେମି'], 'perUnit' => '{0}/ସେ.ମି.']),
    'day' => new U(long: ['name' => 'ଦିନ', 'plurals' => ['one' => '{0} ଦିନ', 'other' => '{0} ଦିନ'], 'perUnit' => 'ଦିନକୁ {0}'], short: ['name' => 'ଦିନ', 'plurals' => ['one' => '{0} ଦିନ', 'other' => '{0} ଦିନ'], 'perUnit' => '{0}/ଦିନ'], narrow: ['name' => 'ଦିନ', 'plurals' => ['one' => '{0}ଦିନ', 'other' => '{0}ଦିନ'], 'perUnit' => '{0}/ଦିନ']),
    'degree' => new U(long: ['name' => 'ଡିଗ୍ରୀ', 'plurals' => ['one' => '{0} ଡିଗ୍ରୀ', 'other' => '{0} ଡିଗ୍ରୀ'], 'perUnit' => ''], short: ['name' => 'ଡିଗ୍ରୀ', 'plurals' => ['one' => '{0} ଡି', 'other' => '{0} ଡି'], 'perUnit' => ''], narrow: ['name' => 'ଡିଗ୍ରୀ', 'plurals' => ['one' => '{0} ଡି', 'other' => '{0} ଡି'], 'perUnit' => '']),
    'fahrenheit' => new U(long: ['name' => 'ଡିଗ୍ରୀ ଫାରେନହାଇଟ୍', 'plurals' => ['one' => '{0} ଡିଗ୍ରୀ ଫାରେନହାଇଟ୍', 'other' => '{0} ଡିଗ୍ରୀ ଫାରେନହାଇଟ୍'], 'perUnit' => ''], short: ['name' => 'ଡି. ଫା', 'plurals' => ['one' => '{0}°ଫା', 'other' => '{0}°ଫା'], 'perUnit' => ''], narrow: ['name' => 'ଡିଗ୍ରୀଫାରେନ୍ହାଇଟ୍', 'plurals' => ['one' => '{0}°ଫା', 'other' => '{0}°ଫା'], 'perUnit' => '']),
    'fluid-ounce' => new U(long: ['name' => 'ଫ୍ଲୁଇଡ୍ ଆଉନ୍ସ', 'plurals' => ['one' => '{0} ଫ୍ଲୁଇଡ୍ ଆଉନ୍ସ', 'other' => '{0} ଫ୍ଲୁଇଡ୍ ଆଉନ୍ସ'], 'perUnit' => ''], short: ['name' => 'ଫ୍ଲୁ ଓଜ୍', 'plurals' => ['one' => '{0} ଫ୍ଲୁ ଓଜ୍', 'other' => '{0} ଫ୍ଲୁ ଓଜ୍'], 'perUnit' => ''], narrow: ['name' => 'ଫ୍ଲୁ ଓଜ୍', 'plurals' => ['one' => '{0} ଫ୍ଲୁ ଓଜ୍', 'other' => '{0} ଫ୍ଲୁ ଓଜ୍'], 'perUnit' => '']),
    'foot' => new U(long: ['name' => 'ଫିଟ୍', 'plurals' => ['one' => '{0} ଫୁଟ୍', 'other' => '{0} ଫିଟ୍'], 'perUnit' => '{0} ପ୍ରତି ଫୁଟ୍'], short: ['name' => 'ଫିଟ୍', 'plurals' => ['one' => '{0} ଫିଟ୍', 'other' => '{0} ଫିଟ୍'], 'perUnit' => '{0}/ଫିଟ୍'], narrow: ['name' => 'ଫିଟ୍', 'plurals' => ['one' => '{0} ଫିଟ୍', 'other' => '{0} ଫିଟ୍'], 'perUnit' => '{0}/ଫିଟ୍']),
    'gallon' => new U(long: ['name' => 'ଗ୍ୟାଲନ୍', 'plurals' => ['one' => '{0} ଗ୍ୟାଲନ୍', 'other' => '{0} ଗ୍ୟାଲନ୍'], 'perUnit' => '{0} ପ୍ରତି ଗ୍ୟାଲନ୍'], short: ['name' => 'ଗ୍ୟାଲ୍', 'plurals' => ['one' => '{0} ଗ୍ୟାଲ୍', 'other' => '{0} ଗ୍ୟାଲ୍'], 'perUnit' => '{0}/ଗ୍ୟାଲ୍ ଯୁକ୍ତରାଷ୍ଟ୍ର'], narrow: ['name' => 'ଗେଲନ୍', 'plurals' => ['one' => '{0} ଗେ', 'other' => '{0} ଗେ'], 'perUnit' => '{0}/ ଗେ']),
    'gigabit' => new U(long: ['name' => 'ଗିଗାବିଟ୍', 'plurals' => ['one' => '{0} ଗିଗାବିଟ୍', 'other' => '{0} ଗିଗାବିଟ୍'], 'perUnit' => ''], short: ['name' => 'ଜିବିଟ୍', 'plurals' => ['one' => '{0} Gb', 'other' => '{0} Gb'], 'perUnit' => ''], narrow: ['name' => 'ଜିବିଟ୍', 'plurals' => ['one' => '{0} Gb', 'other' => '{0} Gb'], 'perUnit' => '']),
    'gigabyte' => new U(long: ['name' => 'ଗିଗାବାଇଟ୍', 'plurals' => ['one' => '{0} ଗିଗାବାଇଟ୍', 'other' => '{0} ଗିଗାବାଇଟ୍'], 'perUnit' => ''], short: ['name' => 'ଜିବାଇଟ୍', 'plurals' => ['one' => '{0} GB', 'other' => '{0} GB'], 'perUnit' => ''], narrow: ['name' => 'ଜିବାଇଟ୍', 'plurals' => ['one' => '{0} GB', 'other' => '{0} GB'], 'perUnit' => '']),
    'gram' => new U(long: ['name' => 'ଗ୍ରାମ୍', 'plurals' => ['one' => '{0} ଗ୍ରାମ୍', 'other' => '{0} ଗ୍ରାମ୍'], 'perUnit' => '{0} ପ୍ରତି ଗ୍ରାମ୍'], short: ['name' => 'ଗ୍ରାମ୍', 'plurals' => ['one' => '{0} ଗ୍ରା', 'other' => '{0} ଗ୍ରା'], 'perUnit' => '{0}/ଗ୍ରା'], narrow: ['name' => 'ଗ୍ରାମ୍', 'plurals' => ['one' => '{0}ଗ୍ରା', 'other' => '{0}ଗ୍ରା'], 'perUnit' => '{0}/ଗ୍ରା.']),
    'hectare' => new U(long: ['name' => 'ହେକ୍ଟର୍', 'plurals' => ['one' => '{0} ହେକ୍ଟର୍', 'other' => '{0} ହେକ୍ଟର୍'], 'perUnit' => ''], short: ['name' => 'ହେକ୍ଟର୍', 'plurals' => ['one' => '{0} ହେ', 'other' => '{0} ହେ'], 'perUnit' => ''], narrow: ['name' => 'ହେକ୍ଟର୍', 'plurals' => ['one' => '{0} ହେ', 'other' => '{0} ହେ'], 'perUnit' => '']),
    'hour' => new U(long: ['name' => 'ଘଣ୍ଟା', 'plurals' => ['one' => '{0} ଘଣ୍ଟା', 'other' => '{0} ଘଣ୍ଟା'], 'perUnit' => 'ଘଣ୍ଟା ପ୍ରତି {0}'], short: ['name' => 'ଘଣ୍ଟା', 'plurals' => ['one' => '{0} ଘଣ୍ଟା', 'other' => '{0} ଘଣ୍ଟା'], 'perUnit' => '{0}/ଘଣ୍ଟା'], narrow: ['name' => 'ଘଣ୍ଟା', 'plurals' => ['one' => '{0}ଘଣ୍ଟା', 'other' => '{0}ଘଣ୍ଟା'], 'perUnit' => '{0}/ଘ.']),
    'inch' => new U(long: ['name' => 'ଇଞ୍ଚ୍', 'plurals' => ['one' => '{0} ଇଞ୍ଚ୍', 'other' => '{0} ଇଞ୍ଚ୍'], 'perUnit' => '{0} ପ୍ରତି ଇଞ୍ଚ୍'], short: ['name' => 'ଇଞ୍ଚ୍', 'plurals' => ['one' => '{0} ଇଞ୍ଚ୍', 'other' => '{0} ଇଞ୍ଚ୍'], 'perUnit' => '{0}/ଇଞ୍ଚ୍'], narrow: ['name' => 'ଇଞ୍ଚ୍', 'plurals' => ['one' => '{0} ଇଞ୍ଚ୍', 'other' => '{0} ଇଞ୍ଚ୍'], 'perUnit' => '{0}/ଇଞ୍ଚ୍']),
    'kilobit' => new U(long: ['name' => 'କିଲୋବିଟ୍', 'plurals' => ['one' => '{0} କିଲୋବିଟ୍', 'other' => '{0} କିଲୋବିଟ୍'], 'perUnit' => ''], short: ['name' => 'କେବିଟ୍', 'plurals' => ['one' => '{0} kb', 'other' => '{0} kb'], 'perUnit' => ''], narrow: ['name' => 'କେବିଟ୍', 'plurals' => ['one' => '{0} kb', 'other' => '{0} kb'], 'perUnit' => '']),
    'kilobyte' => new U(long: ['name' => 'କିଲୋବାଇଟ୍', 'plurals' => ['one' => '{0} କିଲୋବାଇଟ୍', 'other' => '{0} କିଲୋବାଇଟ୍'], 'perUnit' => ''], short: ['name' => 'କେବାଇଟ୍', 'plurals' => ['one' => '{0} kB', 'other' => '{0} kB'], 'perUnit' => ''], narrow: ['name' => 'କେବାଇଟ୍', 'plurals' => ['one' => '{0} kB', 'other' => '{0} kB'], 'perUnit' => '']),
    'kilogram' => new U(long: ['name' => 'କିଲୋଗ୍ରାମ୍', 'plurals' => ['one' => '{0} କିଲୋଗ୍ରାମ୍', 'other' => '{0} କିଲୋଗ୍ରାମ୍'], 'perUnit' => '{0} ପ୍ରତି କିଲୋଗ୍ରାମ୍'], short: ['name' => 'କିଗ୍ରା', 'plurals' => ['one' => '{0} କିଗ୍ରା', 'other' => '{0} କିଗ୍ରା'], 'perUnit' => '{0}/କିଗ୍ରା'], narrow: ['name' => 'କିଗ୍ରା', 'plurals' => ['one' => '{0}କିଗ୍ରା', 'other' => '{0}କିଗ୍ରା'], 'perUnit' => '{0}/କି. ଗ୍ରା.']),
    'kilometer' => new U(long: ['name' => 'କିଲୋମିଟର୍', 'plurals' => ['one' => '{0} କିଲୋମିଟର୍', 'other' => '{0} କିଲୋମିଟର୍'], 'perUnit' => '{0} ପ୍ରତି କିଲୋମିଟର୍'], short: ['name' => 'କିମି', 'plurals' => ['one' => '{0} କିମି', 'other' => '{0} କିମି'], 'perUnit' => '{0}/କିମି'], narrow: ['name' => 'କିମି', 'plurals' => ['one' => '{0} କିମି', 'other' => '{0} କିମି'], 'perUnit' => '{0}/କିମି']),
    'liter' => new U(long: ['name' => 'ଲିଟର୍', 'plurals' => ['one' => '{0} ଲିଟର୍', 'other' => '{0} ଲିଟର୍'], 'perUnit' => '{0} ପ୍ରତି ଲିଟର୍'], short: ['name' => 'ଲିଟର୍', 'plurals' => ['one' => '{0} ଲି', 'other' => '{0} ଲି'], 'perUnit' => '{0}/ଲି'], narrow: ['name' => 'ଲିଟର୍', 'plurals' => ['one' => '{0}ଲି', 'other' => '{0}ଲି'], 'perUnit' => '{0}/ଲି']),
    'megabit' => new U(long: ['name' => 'ମେଗାବିଟ୍', 'plurals' => ['one' => '{0} ମେଗାବିଟ୍', 'other' => '{0} ମେଗାବିଟ୍'], 'perUnit' => ''], short: ['name' => 'ମେବିଟ୍', 'plurals' => ['one' => '{0} Mb', 'other' => '{0} Mb'], 'perUnit' => ''], narrow: ['name' => 'ମେବିଟ୍', 'plurals' => ['one' => '{0} Mb', 'other' => '{0} Mb'], 'perUnit' => '']),
    'megabyte' => new U(long: ['name' => 'ମେଗାବାଇଟ୍', 'plurals' => ['one' => '{0} ମେଗାବାଇଟ୍', 'other' => '{0} ମେଗାବାଇଟ୍'], 'perUnit' => ''], short: ['name' => 'ମେବାଇଟ୍', 'plurals' => ['one' => '{0} MB', 'other' => '{0} MB'], 'perUnit' => ''], narrow: ['name' => 'ମେବାଇଟ୍', 'plurals' => ['one' => '{0} MB', 'other' => '{0} MB'], 'perUnit' => '']),
    'meter' => new U(long: ['name' => 'ମିଟର୍', 'plurals' => ['one' => '{0} ମିଟର୍', 'other' => '{0} ମିଟର୍'], 'perUnit' => '{0} ପ୍ରତି ମିଟର୍'], short: ['name' => 'ମି', 'plurals' => ['one' => '{0} ମି', 'other' => '{0} ମି'], 'perUnit' => '{0}/ମି'], narrow: ['name' => 'ମି', 'plurals' => ['one' => '{0} ମି', 'other' => '{0} ମି'], 'perUnit' => '{0}/ମି']),
    'mile' => new U(long: ['name' => 'ମାଇଲ୍', 'plurals' => ['one' => '{0} ମାଇଲ୍', 'other' => '{0} ମାଇଲ୍'], 'perUnit' => ''], short: ['name' => 'ମାଇଲ୍', 'plurals' => ['one' => '{0} ମା', 'other' => '{0} ମା'], 'perUnit' => ''], narrow: ['name' => 'ମାଇଲ୍', 'plurals' => ['one' => '{0}ମାଇଲ', 'other' => '{0}ମାଇଲ'], 'perUnit' => '']),
    'mile-scandinavian' => new U(long: ['name' => 'ମାଇଲ୍-ସ୍କାନଡିନାଭିୟ', 'plurals' => ['one' => '{0} ମାଇଲ୍-ସ୍କାନଡିନାଭିୟ', 'other' => '{0} ମାଇଲ୍-ସ୍କାନଡିନାଭିୟ'], 'perUnit' => ''], short: ['name' => 'ସମି', 'plurals' => ['one' => '{0} ସମି', 'other' => '{0} ସମି'], 'perUnit' => ''], narrow: ['name' => 'ସମି', 'plurals' => ['one' => '{0} ସମି', 'other' => '{0} ସମି'], 'perUnit' => '']),
    'milliliter' => new U(long: ['name' => 'ମିଲିଲିଟର୍', 'plurals' => ['one' => '{0} ମିଲିଲିଟର୍', 'other' => '{0} ମିଲିଲିଟର୍'], 'perUnit' => ''], short: ['name' => 'ମିଲି', 'plurals' => ['one' => '{0} ମିଲି', 'other' => '{0} ମିଲି'], 'perUnit' => ''], narrow: ['name' => 'ମି. ଲି.', 'plurals' => ['one' => '{0} ମି. ଲି.', 'other' => '{0} ମି. ଲି.'], 'perUnit' => '']),
    'millimeter' => new U(long: ['name' => 'ମିଲିମିଟର୍', 'plurals' => ['one' => '{0} ମିଲିମିଟର୍', 'other' => '{0} ମିଲିମିଟର୍'], 'perUnit' => ''], short: ['name' => 'ମିମି', 'plurals' => ['one' => '{0} ମିମି', 'other' => '{0} ମିମି'], 'perUnit' => ''], narrow: ['name' => 'ମିମି', 'plurals' => ['one' => '{0}ମିମି', 'other' => '{0}ମିମି'], 'perUnit' => '']),
    'millisecond' => new U(long: ['name' => 'ମିଲିସେକେଣ୍ଡ', 'plurals' => ['one' => '{0} ମିଲିସେକେଣ୍ଡ', 'other' => '{0} ମିଲିସେକେଣ୍ଡ'], 'perUnit' => ''], short: ['name' => 'ମିଲିସେକେଣ୍ଡ', 'plurals' => ['one' => '{0} ms', 'other' => '{0} ms'], 'perUnit' => ''], narrow: ['name' => 'ମିଲିସେକେଣ୍ଡ', 'plurals' => ['one' => '{0}ms', 'other' => '{0} ms'], 'perUnit' => '']),
    'minute' => new U(long: ['name' => 'ମିନିଟ୍‌', 'plurals' => ['one' => '{0} ମିନିଟ୍‌', 'other' => '{0} ମିନିଟ୍'], 'perUnit' => 'ମିନିଟ୍‌ ପ୍ରତି {0}'], short: ['name' => 'ମିନିଟ୍‌', 'plurals' => ['one' => '{0} ମିନିଟ୍‌', 'other' => '{0} ମିନିଟ୍‌'], 'perUnit' => '{0}/ମିନିଟ୍‌'], narrow: ['name' => 'ମିନିଟ୍‌', 'plurals' => ['one' => '{0}ମିନିଟ୍‌', 'other' => '{0}ମିନିଟ୍‌'], 'perUnit' => '{0}/ମି']),
    'month' => new U(long: ['name' => 'ମାସ', 'plurals' => ['one' => '{0} ମାସ', 'other' => '{0} ମାସ'], 'perUnit' => 'ମାସକୁ {0}'], short: ['name' => 'ମାସ', 'plurals' => ['one' => '{0} ମାସ', 'other' => '{0} ମାସ'], 'perUnit' => '{0}/ମାସ'], narrow: ['name' => 'ମାସ', 'plurals' => ['one' => '{0}ମାସ', 'other' => '{0}ମାସ'], 'perUnit' => '{0}/ମାସ']),
    'ounce' => new U(long: ['name' => 'ଆଉନ୍ସ', 'plurals' => ['one' => '{0} ଆଉନ୍ସ', 'other' => '{0} ଆଉନ୍ସ'], 'perUnit' => '{0} ପ୍ରତି ଆଉନ୍ସ'], short: ['name' => 'ଓଜ୍', 'plurals' => ['one' => '{0} ଓଜ୍', 'other' => '{0} ଓଜ୍'], 'perUnit' => '{0}/ଓଜ୍'], narrow: ['name' => 'ଅନ୍ସ', 'plurals' => ['one' => '{0}ଅ.', 'other' => '{0}ଅ.'], 'perUnit' => '{0}/ଅନ୍ସ']),
    'percent' => new U(long: ['name' => 'ଶତକଡ଼ା', 'plurals' => ['one' => '{0} ଶତକଡ଼ା', 'other' => '{0} ଶତକଡ଼ା'], 'perUnit' => ''], short: ['name' => 'ଶତକଡ଼ା', 'plurals' => ['one' => '{0}%', 'other' => '{0}%'], 'perUnit' => ''], narrow: ['name' => '%', 'plurals' => ['one' => '{0}%', 'other' => '{0}%'], 'perUnit' => '']),
    'petabyte' => new U(long: ['name' => 'PB', 'plurals' => ['one' => '{0} PB', 'other' => '{0} PB'], 'perUnit' => ''], short: ['name' => 'PByte', 'plurals' => ['one' => '{0} PB', 'other' => '{0} PB'], 'perUnit' => ''], narrow: ['name' => 'PByte', 'plurals' => ['one' => '{0} PB', 'other' => '{0} PB'], 'perUnit' => '']),
    'pound' => new U(long: ['name' => 'ପାଉଣ୍ଡ୍', 'plurals' => ['one' => '{0} ପାଉଣ୍ଡ୍', 'other' => '{0} ପାଉଣ୍ଡ୍'], 'perUnit' => '{0} ପ୍ରତି ପାଉଣ୍ଡ୍'], short: ['name' => 'ପାଉଣ୍ଡ୍', 'plurals' => ['one' => '{0} ପାଉଣ୍ଡ୍', 'other' => '{0} ପାଉଣ୍ଡ୍'], 'perUnit' => '{0}/ପାଉଣ୍ଡ୍'], narrow: ['name' => 'ପାଉଣ୍ଡ୍', 'plurals' => ['one' => '{0} ପାଉଣ୍ଡ୍', 'other' => '{0} ପାଉଣ୍ଡ୍'], 'perUnit' => '{0}/ପାଉଣ୍ଡ୍']),
    'second' => new U(long: ['name' => 'ସେକେଣ୍ଡ', 'plurals' => ['one' => '{0} ସେକେଣ୍ଡ', 'other' => '{0} ସେକେଣ୍ଡ'], 'perUnit' => '{0} ପ୍ରତି ସେକେଣ୍ଡ'], short: ['name' => 'ସେକେଣ୍ଡ', 'plurals' => ['one' => '{0} ସେକେଣ୍ଡ', 'other' => '{0} ସେକେଣ୍ଡ'], 'perUnit' => '{0}/ସେକେଣ୍ଡ'], narrow: ['name' => 'ସେକେଣ୍ଡ', 'plurals' => ['one' => '{0}ସେକ୍', 'other' => '{0}ସେକ୍'], 'perUnit' => '{0}/ସେ']),
    'stone' => new U(long: ['name' => 'ଷ୍ଟୋନସ୍', 'plurals' => ['one' => '{0} ଷ୍ଟୋନ୍', 'other' => '{0} ଷ୍ଟୋନସ୍'], 'perUnit' => ''], short: ['name' => 'ଷ୍ଟୋନସ୍', 'plurals' => ['one' => '{0} ଷ୍ଟ.', 'other' => '{0} ଷ୍ଟ.'], 'perUnit' => ''], narrow: ['name' => 'ଷ୍ଟୋନସ୍', 'plurals' => ['one' => '{0} ଷ୍ଟ.', 'other' => '{0} ଷ୍ଟ.'], 'perUnit' => '']),
    'terabit' => new U(long: ['name' => 'ଟେରାବିଟ୍', 'plurals' => ['one' => '{0} ଟେରାବିଟ୍', 'other' => '{0} ଟେରାବିଟ୍'], 'perUnit' => ''], short: ['name' => 'ଟିବିଟ୍', 'plurals' => ['one' => '{0} Tb', 'other' => '{0} Tb'], 'perUnit' => ''], narrow: ['name' => 'ଟିବିଟ୍', 'plurals' => ['one' => '{0} Tb', 'other' => '{0} Tb'], 'perUnit' => '']),
    'terabyte' => new U(long: ['name' => 'ଟେରାବାଇଟ୍', 'plurals' => ['one' => '{0} ଟେରାବାଇଟ୍', 'other' => '{0} ଟେରାବାଇଟ୍'], 'perUnit' => ''], short: ['name' => 'ଟିବାଇଟ୍', 'plurals' => ['one' => '{0} TB', 'other' => '{0} TB'], 'perUnit' => ''], narrow: ['name' => 'ଟିବାଇଟ୍', 'plurals' => ['one' => '{0} TB', 'other' => '{0} TB'], 'perUnit' => '']),
    'week' => new U(long: ['name' => 'ସପ୍ତାହ', 'plurals' => ['one' => '{0} ସପ୍ତାହ', 'other' => '{0} ସପ୍ତାହ'], 'perUnit' => 'ସପ୍ତାହକୁ {0}'], short: ['name' => 'ସପ୍ତାହ', 'plurals' => ['one' => '{0} ସପ୍ତାହ', 'other' => '{0} ସପ୍ତାହ'], 'perUnit' => '{0}/ସପ୍ତାହ'], narrow: ['name' => 'ସପ୍ତାହ', 'plurals' => ['one' => '{0}ସପ୍', 'other' => '{0} ସପ୍'], 'perUnit' => '{0}/ସପ୍ତାହ']),
    'yard' => new U(long: ['name' => 'ୟାର୍ଡ୍', 'plurals' => ['one' => '{0} ୟାର୍ଡ୍', 'other' => '{0} ୟାର୍ଡ୍'], 'perUnit' => ''], short: ['name' => 'ୟାର୍ଡ୍', 'plurals' => ['one' => '{0} ୟାର୍ଡ୍', 'other' => '{0} ୟାର୍ଡ୍'], 'perUnit' => ''], narrow: ['name' => 'ଗଜ', 'plurals' => ['one' => '{0}ଗଜ', 'other' => '{0}ଗଜ'], 'perUnit' => '']),
    'year' => new U(long: ['name' => 'ବର୍ଷ', 'plurals' => ['one' => '{0} ବର୍ଷ', 'other' => '{0} ବର୍ଷ'], 'perUnit' => 'ବର୍ଷକୁ {0}'], short: ['name' => 'ବର୍ଷ', 'plurals' => ['one' => '{0} ବର୍ଷ', 'other' => '{0} ବର୍ଷ'], 'perUnit' => '{0}/ବର୍ଷ'], narrow: ['name' => 'yr', 'plurals' => ['one' => '{0}ବର୍ଷ', 'other' => '{0}ବର୍ଷ'], 'perUnit' => '{0}/ବର୍ଷ']),
];
