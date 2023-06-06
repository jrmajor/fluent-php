<?php

use Major\Fluent\Formatters\Number\Locale\Unit as U;

return [
    'kilometer' => new U(name: 'length-kilometer', long: ['name' => 'ಕಿಲೋಮೀಟರ್‌ಗಳು', 'plurals' => ['one' => '{0} ಕಿಲೋಮೀಟರ್', 'other' => '{0} ಕಿಲೋಮೀಟರ್‌ಗಳು'], 'perUnit' => 'ಪ್ರತಿ ಕಿಲೋಮೀಟ‍ರ್‌ಗೆ {0}'], short: ['name' => 'ಕಿಲೋಮೀಟರ್‌ಗಳು', 'plurals' => ['one' => '{0} ಕಿಮೀ', 'other' => '{0} ಕಿಮೀ'], 'perUnit' => '{0}/ಕಿ.ಮೀ'], narrow: ['name' => 'ಕಿಮೀ', 'plurals' => ['one' => '{0}ಕಿಮೀ', 'other' => '{0}ಕಿಮೀ'], 'perUnit' => '{0}/ಕಿ.ಮೀ']),
    'degree' => new U(name: 'angle-degree', long: ['name' => 'ಡಿಗ್ರಿಗಳು', 'plurals' => ['one' => '{0} ಡಿಗ್ರಿಯು', 'other' => '{0}ಡಿಗ್ರಿಗಳು'], 'perUnit' => ''], short: ['name' => 'ಡಿಗ್ರಿಗಳು', 'plurals' => ['one' => '{0} ಡಿ.', 'other' => '{0} ಡಿ.'], 'perUnit' => ''], narrow: ['name' => 'ಡಿಗ್ರಿಗಳು', 'plurals' => ['one' => '{0}°', 'other' => '{0}°'], 'perUnit' => '']),
    'acre' => new U(name: 'area-acre', long: ['name' => 'ಎಕರೆಗಳು', 'plurals' => ['one' => '{0} ಎಕರೆ', 'other' => '{0} ಎಕರೆಗಳು'], 'perUnit' => ''], short: ['name' => 'ಎಕರೆಗಳು', 'plurals' => ['one' => '{0} ಎಕ.', 'other' => '{0} ಎಕ.'], 'perUnit' => ''], narrow: ['name' => 'ಎಕರೆ', 'plurals' => ['one' => '{0} ಎಕ.', 'other' => '{0} ಎಕ.'], 'perUnit' => '']),
    'hectare' => new U(name: 'area-hectare', long: ['name' => 'ಹೆಕ್ಟೇರುಗಳು', 'plurals' => ['one' => '{0} ಹೆಕ್ಟೇರ್', 'other' => '{0} ಹೆಕ್ಟೇರುಗಳು'], 'perUnit' => ''], short: ['name' => 'ಹೆಕ್ಟೇರುಗಳು', 'plurals' => ['one' => '{0} ಹೆ.', 'other' => '{0} ಹೆ.'], 'perUnit' => ''], narrow: ['name' => 'ಹೆಕ್ಟೇರ್', 'plurals' => ['one' => '{0} ಹೆ.', 'other' => '{0} ಹೆ.'], 'perUnit' => '']),
    'percent' => new U(name: 'concentr-percent', long: ['name' => 'ಶೇಕಡಾ', 'plurals' => ['one' => '{0} ಶೇಕಡಾವು', 'other' => '{0} ಶೇಕಡಾ'], 'perUnit' => ''], short: ['name' => 'ಶೇಕಡಾ', 'plurals' => ['one' => '{0}%', 'other' => '{0}%'], 'perUnit' => ''], narrow: ['name' => '%', 'plurals' => ['one' => '{0}%', 'other' => '{0}%'], 'perUnit' => '']),
    'bit' => new U(name: 'digital-bit', long: ['name' => 'ಬಿಟ್‌ಗಳು', 'plurals' => ['one' => '{0} ಬಿಟ್‌', 'other' => '{0} ಬಿಟ್‍ಗಳು'], 'perUnit' => ''], short: ['name' => 'ಬಿಟ್‌', 'plurals' => ['one' => '{0} ಬಿಟ್', 'other' => '{0} ಬಿ.'], 'perUnit' => ''], narrow: ['name' => 'ಬಿಟ್‌', 'plurals' => ['one' => '{0}ಬಿಟ್', 'other' => '{0}ಬಿಟ್'], 'perUnit' => '']),
    'byte' => new U(name: 'digital-byte', long: ['name' => 'ಬೈಟ್‌ಗಳು', 'plurals' => ['one' => '{0} ಬೈಟ್‌', 'other' => '{0} ಬೈಟ್‌ಗಳು'], 'perUnit' => ''], short: ['name' => 'ಬೈಟ್', 'plurals' => ['one' => '{0} ಬೈಟ್', 'other' => '{0} ಬೈ.'], 'perUnit' => ''], narrow: ['name' => 'ಬೈಟ್', 'plurals' => ['one' => '{0}ಬೈ', 'other' => '{0} ಬೈ.'], 'perUnit' => '']),
    'gigabit' => new U(name: 'digital-gigabit', long: ['name' => 'ಗಿಗಾಬಿಟ್‌ಗಳು', 'plurals' => ['one' => '{0} ಗಿಗಾಬಿಟ್‌', 'other' => '{0} ಗಿಗಾಬಿಟ್‌ಗಳು'], 'perUnit' => ''], short: ['name' => 'ಗಿ.ಬಿ.', 'plurals' => ['one' => '{0} ಗಿ.ಬಿ.', 'other' => '{0} ಗಿ.ಬಿ.'], 'perUnit' => ''], narrow: ['name' => 'Gb', 'plurals' => ['one' => '{0}ಗಿ.ಬಿ.', 'other' => '{0}ಗಿ.ಬಿ.'], 'perUnit' => '']),
    'gigabyte' => new U(name: 'digital-gigabyte', long: ['name' => 'ಗಿಗಾಬೈಟ್‌ಗಳು', 'plurals' => ['one' => '{0} ಗಿಗಾಬೈಟ್‌', 'other' => '{0} ಗಿಗಾಬೈಟ್‌ಗಳು'], 'perUnit' => ''], short: ['name' => 'ಗಿ.ಬೈ.', 'plurals' => ['one' => '{0} ಗಿ.ಬೈ.', 'other' => '{0} ಗಿ.ಬೈ.'], 'perUnit' => ''], narrow: ['name' => 'GB', 'plurals' => ['one' => '{0}ಗಿ.ಬೈ.', 'other' => '{0}ಗಿ.ಬೈ.'], 'perUnit' => '']),
    'kilobit' => new U(name: 'digital-kilobit', long: ['name' => 'ಕಿಲೋಬಿಟ್‌ಗಳು', 'plurals' => ['one' => '{0} ಕಿಲೋಬಿಟ್‌', 'other' => '{0} ಕಿಲೋಬಿಟ್‌ಗಳು'], 'perUnit' => ''], short: ['name' => 'ಕಿ.ಬಿ.', 'plurals' => ['one' => '{0} ಕಿ.ಬಿ.', 'other' => '{0} ಕಿ.ಬಿ.'], 'perUnit' => ''], narrow: ['name' => 'ಕಿ.ಬಿ.', 'plurals' => ['one' => '{0}ಕಿ.ಬಿ.', 'other' => '{0}ಕಿ.ಬಿ.'], 'perUnit' => '']),
    'kilobyte' => new U(name: 'digital-kilobyte', long: ['name' => 'ಕಿಲೋಬೈಟ್‌ಗಳು', 'plurals' => ['one' => '{0} ಕಿಲೋಬೈಟ್‌', 'other' => '{0} ಕಿಲೋಬೈಟ್‌ಗಳು'], 'perUnit' => ''], short: ['name' => 'ಕಿ.ಬೈ.', 'plurals' => ['one' => '{0} ಕಿ.ಬೈ.', 'other' => '{0} ಕಿ.ಬೈ.'], 'perUnit' => ''], narrow: ['name' => 'ಕಿ.ಬೈ.', 'plurals' => ['one' => '{0}ಕಿ.ಬೈ.', 'other' => '{0}ಕಿ.ಬೈ.'], 'perUnit' => '']),
    'megabit' => new U(name: 'digital-megabit', long: ['name' => 'ಮೆಗಾಬಿಟ್‌ಗಳು', 'plurals' => ['one' => '{0} ಮೆಗಾಬಿಟ್‌', 'other' => '{0} ಮೆಗಾಬಿಟ್‌ಗಳು'], 'perUnit' => ''], short: ['name' => 'ಮೆ.ಬಿ.', 'plurals' => ['one' => '{0} ಮೆ.ಬಿ.', 'other' => '{0} ಮೆ.ಬಿ.'], 'perUnit' => ''], narrow: ['name' => 'ಮೆ.ಬಿ.', 'plurals' => ['one' => '{0}ಮೆ.ಬಿ.', 'other' => '{0}ಮೆ.ಬಿ.'], 'perUnit' => '']),
    'megabyte' => new U(name: 'digital-megabyte', long: ['name' => 'ಮೆಗಾಬೈಟ್‌ಗಳು', 'plurals' => ['one' => '{0} ಮೆಗಾಬೈಟ್‌', 'other' => '{0} ಮೆಗಾಬೈಟ್‌ಗಳು'], 'perUnit' => ''], short: ['name' => 'ಮೆ.ಬೈ.', 'plurals' => ['one' => '{0} ಮೆ.ಬೈ.', 'other' => '{0} ಮೆ.ಬೈ.'], 'perUnit' => ''], narrow: ['name' => 'MB', 'plurals' => ['one' => '{0}ಮೆ.ಬೈ.', 'other' => '{0}ಮೆ.ಬೈ.'], 'perUnit' => '']),
    'petabyte' => new U(name: 'digital-petabyte', long: ['name' => 'ಪೆಟಾಬೈಟ್‌ಗಳು', 'plurals' => ['one' => '{0} ಪೆಟಾಬೈಟ್‌', 'other' => '{0} ಪೆಟಾಬೈಟ್‌ಗಳು'], 'perUnit' => ''], short: ['name' => 'ಪೆಬೈ', 'plurals' => ['one' => '{0} ಪೆಬೈ', 'other' => '{0} ಪೆಬೈ'], 'perUnit' => ''], narrow: ['name' => 'PB', 'plurals' => ['one' => '{0}ಪೆಬೈ', 'other' => '{0}ಪೆಬೈ'], 'perUnit' => '']),
    'terabit' => new U(name: 'digital-terabit', long: ['name' => 'ಟೆರಾಬಿಟ್‌ಗಳು', 'plurals' => ['one' => '{0} ಟೆರಾಬಿಟ್‌', 'other' => '{0} ಟೆರಾಬಿಟ್‌ಗಳು'], 'perUnit' => ''], short: ['name' => 'ಟೆ.ಬಿ.', 'plurals' => ['one' => '{0} ಟೆ.ಬಿ.', 'other' => '{0} ಟೆ.ಬಿ.'], 'perUnit' => ''], narrow: ['name' => 'ಟೆ.ಬಿ.', 'plurals' => ['one' => '{0}ಟೆ.ಬಿ.', 'other' => '{0}ಟೆ.ಬಿ.'], 'perUnit' => '']),
    'terabyte' => new U(name: 'digital-terabyte', long: ['name' => 'ಟೆರಾಬೈಟ್‌ಗಳು', 'plurals' => ['one' => '{0} ಟೆರಾಬೈಟ್‌', 'other' => '{0} ಟೆರಾಬೈಟ್‌ಗಳು'], 'perUnit' => ''], short: ['name' => 'ಟೆ.ಬೈ.', 'plurals' => ['one' => '{0} ಟೆ.ಬೈ.', 'other' => '{0} ಟೆ.ಬೈ.'], 'perUnit' => ''], narrow: ['name' => 'TB', 'plurals' => ['one' => '{0}ಟೆ.ಬೈ.', 'other' => '{0}ಟೆ.ಬೈ.'], 'perUnit' => '']),
    'day' => new U(name: 'duration-day', long: ['name' => 'ದಿನಗಳು', 'plurals' => ['one' => '{0} ದಿನವು', 'other' => '{0} ದಿನಗಳು'], 'perUnit' => '{0} ಪ್ರತಿ ದಿನಕ್ಕೆ'], short: ['name' => 'ದಿನಗಳು', 'plurals' => ['one' => '{0} ದಿನ', 'other' => '{0} ದಿನಗಳು'], 'perUnit' => '{0}/ದಿ'], narrow: ['name' => 'ದಿನ', 'plurals' => ['one' => '{0}ದಿ', 'other' => '{0}ದಿ'], 'perUnit' => '{0}/ದಿ']),
    'hour' => new U(name: 'duration-hour', long: ['name' => 'ಗಂಟೆಗಳು', 'plurals' => ['one' => '{0} ಗಂಟೆಯು', 'other' => '{0} ಗಂಟೆಗಳು'], 'perUnit' => 'ಪ್ರತಿ ಗಂಟೆಗೆ {0}'], short: ['name' => 'ಗಂಟೆಗಳು', 'plurals' => ['one' => '{0} ಗಂ.', 'other' => '{0} ಗಂ.'], 'perUnit' => '{0}/ಗಂ'], narrow: ['name' => 'ಗಂಟೆ', 'plurals' => ['one' => '{0}ಗಂ.', 'other' => '{0}ಗಂ.'], 'perUnit' => '{0}/ಗಂ']),
    'millisecond' => new U(name: 'duration-millisecond', long: ['name' => 'ಮಿಲಿಸೆಕೆಂಡುಗಳು', 'plurals' => ['one' => '{0} ಮಿಲಿಸೆಕೆಂಡ್', 'other' => '{0} ಮಿಲಿಸೆಕೆಂಡುಗಳು'], 'perUnit' => ''], short: ['name' => 'ಮಿಲಿಸೆಕೆಂಡುಗಳು', 'plurals' => ['one' => '{0} ಮಿ.ಸೆ.', 'other' => '{0} ಮಿ.ಸೆ.'], 'perUnit' => ''], narrow: ['name' => 'ಮಿ.ಸೆ.', 'plurals' => ['one' => '{0}ಮಿ.ಸೆ.', 'other' => '{0}ಮಿ.ಸೆ.'], 'perUnit' => '']),
    'minute' => new U(name: 'duration-minute', long: ['name' => 'ನಿಮಿಷಗಳು', 'plurals' => ['one' => '{0} ನಿಮಿಷವು', 'other' => '{0} ನಿಮಿಷಗಳು'], 'perUnit' => 'ಪ್ರತಿ ನಿಮಿಷಕ್ಕೆ {0}'], short: ['name' => 'ನಿಮಿಷಗಳು', 'plurals' => ['one' => '{0} ನಿಮಿ', 'other' => '{0} ನಿಮಿ'], 'perUnit' => '{0}/ನಿಮಿ'], narrow: ['name' => 'ನಿಮಿಷ', 'plurals' => ['one' => '{0}ನಿಮಿ', 'other' => '{0}ನಿಮಿ'], 'perUnit' => '{0}/ನಿಮಿ']),
    'month' => new U(name: 'duration-month', long: ['name' => 'ತಿಂಗಳು', 'plurals' => ['one' => '{0} ತಿಂಗಳು', 'other' => '{0} ತಿಂಗಳು'], 'perUnit' => 'ಪ್ರತಿ ತಿಂಗಳಿಗೆ {0}'], short: ['name' => 'ತಿಂಗಳು', 'plurals' => ['one' => '{0} ತಿಂ.', 'other' => '{0} ತಿಂ.ಗಳು'], 'perUnit' => '{0}/ತಿ'], narrow: ['name' => 'ತಿಂಗಳು', 'plurals' => ['one' => '{0}ತಿಂ.', 'other' => '{0}ತಿಂ.'], 'perUnit' => '{0}/ತಿ']),
    'second' => new U(name: 'duration-second', long: ['name' => 'ಸೆಕೆಂಡುಗಳು', 'plurals' => ['one' => '{0} ಸೆಕೆಂಡ್', 'other' => '{0} ಸೆಕೆಂಡುಗಳು'], 'perUnit' => 'ಪ್ರತಿ ಸೆಕೆಂಡ್‌ಗೆ {0}'], short: ['name' => 'ಸೆಕೆಂಡುಗಳು', 'plurals' => ['one' => '{0} ಸೆಕೆಂ', 'other' => '{0} ಸೆಕೆಂ'], 'perUnit' => '{0}/ಸೆ'], narrow: ['name' => 'ಸೆಕೆಂ', 'plurals' => ['one' => '{0}ಸೆಕೆಂ', 'other' => '{0} ಸೆಕೆಂ'], 'perUnit' => '{0}/ಸೆ']),
    'week' => new U(name: 'duration-week', long: ['name' => 'ವಾರಗಳು', 'plurals' => ['one' => '{0} ವಾರವು', 'other' => '{0} ವಾರಗಳು'], 'perUnit' => '{0} ಪ್ರತಿ ವಾರಕ್ಕೆ'], short: ['name' => 'ವಾರಗಳು', 'plurals' => ['one' => '{0} ವಾರ', 'other' => '{0} ವಾರಗಳು'], 'perUnit' => '{0}/ವಾ'], narrow: ['name' => 'ವಾರ', 'plurals' => ['one' => '{0}ವಾ', 'other' => '{0}ವಾ'], 'perUnit' => '{0}/ವಾ']),
    'year' => new U(name: 'duration-year', long: ['name' => 'ವರ್ಷಗಳು', 'plurals' => ['one' => '{0} ವರ್ಷವು', 'other' => '{0} ವರ್ಷಗಳು'], 'perUnit' => 'ಪ್ರತಿ ವರ್ಷಕ್ಕೆ {0}'], short: ['name' => 'ವರ್ಷಗಳು', 'plurals' => ['one' => '{0} ವರ್ಷ', 'other' => '{0} ವರ್ಷಗಳು'], 'perUnit' => '{0}/ವ'], narrow: ['name' => 'ವ', 'plurals' => ['one' => '{0}ವ', 'other' => '{0}ವ'], 'perUnit' => '{0}/ವ']),
    'centimeter' => new U(name: 'length-centimeter', long: ['name' => 'ಸೆಂಟಿಮೀಟರ್‌ಗಳು', 'plurals' => ['one' => '{0} ಸೆಂಟಿಮೀಟರ್', 'other' => '{0} ಸೆಂಟಿಮೀಟರ್‌ಗಳು'], 'perUnit' => 'ಪ್ರತಿ ಸೆಂಟಿಮೀಟರ್‌ಗೆ {0}'], short: ['name' => 'ಸೆಮೀ', 'plurals' => ['one' => '{0} ಸೆಮೀ', 'other' => '{0} ಸೆಮೀ'], 'perUnit' => '{0}/ಸೆಂಮೀ'], narrow: ['name' => 'ಸೆಮೀ', 'plurals' => ['one' => '{0} ಸೆಮೀ', 'other' => '{0} ಸೆಮೀ'], 'perUnit' => '{0}/ಸೆಂಮೀ']),
    'foot' => new U(name: 'length-foot', long: ['name' => 'ಅಡಿ', 'plurals' => ['one' => '{0} ಅಡಿ', 'other' => '{0} ಅಡಿ'], 'perUnit' => 'ಪ್ರತಿ ಅಡಿಗೆ {0}'], short: ['name' => 'ಅಡಿ', 'plurals' => ['one' => '{0} ಅ', 'other' => '{0} ಅ'], 'perUnit' => '{0}/ಅ'], narrow: ['name' => 'ಅಡಿ', 'plurals' => ['one' => '{0} ′', 'other' => '{0} ′'], 'perUnit' => '{0}/ಅ']),
    'inch' => new U(name: 'length-inch', long: ['name' => 'ಅಂಗುಲಗಳು', 'plurals' => ['one' => '{0} ಅಂಗುಲ', 'other' => '{0} ಅಂಗುಲಗಳು'], 'perUnit' => 'ಪ್ರತಿ ಅಂಗುಲಕ್ಕೆ {0}'], short: ['name' => 'ಅಂಗುಲಗಳು', 'plurals' => ['one' => '{0} ಅಂ', 'other' => '{0} ಅಂ'], 'perUnit' => '{0}/ಅಂ'], narrow: ['name' => 'ಅಂಗುಲಗಳು', 'plurals' => ['one' => '{0} ″', 'other' => '{0} ″'], 'perUnit' => '{0}/ಅಂ']),
    'meter' => new U(name: 'length-meter', long: ['name' => 'ಮೀಟರ್‌ಗಳು', 'plurals' => ['one' => '{0} ಮೀಟರ್', 'other' => '{0} ಮೀಟರ್‌ಗಳು'], 'perUnit' => 'ಪ್ರತಿ ಮೀಟರ್‌ಗೆ {0}'], short: ['name' => 'ಮೀ', 'plurals' => ['one' => '{0} ಮೀ', 'other' => '{0} ಮೀ'], 'perUnit' => '{0}/ಮೀ'], narrow: ['name' => 'ಮೀ', 'plurals' => ['one' => '{0}ಮೀ', 'other' => '{0}ಮೀ'], 'perUnit' => '{0}/ಮೀ']),
    'mile-scandinavian' => new U(name: 'length-mile-scandinavian', long: ['name' => 'ಸ್ಕ್ಯಾಂಡಿನೇವಿಯನ್-ಮೈಲುಗಳು', 'plurals' => ['one' => '{0} ಸ್ಕ್ಯಾಂಡಿನೇವಿಯನ್-ಮೈಲು', 'other' => '{0} ಸ್ಕ್ಯಾಂಡಿನೇವಿಯನ್-ಮೈಲುಗಳು'], 'perUnit' => ''], short: ['name' => 'ಸ್ಕ್ಯಾಂ.ಮೈ', 'plurals' => ['one' => '{0} ಸ್ಕ್ಯಾಂ.ಮೈ', 'other' => '{0} ಸ್ಕ್ಯಾಂ.ಮೈ'], 'perUnit' => ''], narrow: ['name' => 'ಸ್ಕ್ಯಾಂ.ಮೈ', 'plurals' => ['one' => '{0}smi', 'other' => '{0}smi'], 'perUnit' => '']),
    'mile' => new U(name: 'length-mile', long: ['name' => 'ಮೈಲುಗಳು', 'plurals' => ['one' => '{0} ಮೈಲು', 'other' => '{0} ಮೈಲುಗಳು'], 'perUnit' => ''], short: ['name' => 'ಮೈಲುಗಳು', 'plurals' => ['one' => '{0} ಮೈ.', 'other' => '{0} ಮೈ.'], 'perUnit' => ''], narrow: ['name' => 'ಮೈಲುಗಳು', 'plurals' => ['one' => '{0}ಮೈ.', 'other' => '{0}ಮೈ.'], 'perUnit' => '']),
    'millimeter' => new U(name: 'length-millimeter', long: ['name' => 'ಮಿಲಿಮೀಟರ್‌ಗಳು', 'plurals' => ['one' => '{0} ಮಿಲಿಮೀಟರ್', 'other' => '{0} ಮಿಲಿಮೀಟರ್‌ಗಳು'], 'perUnit' => ''], short: ['name' => 'ಮಿಮೀ', 'plurals' => ['one' => '{0} ಮಿಮೀ', 'other' => '{0} ಮಿಮೀ'], 'perUnit' => ''], narrow: ['name' => 'ಮಿಮೀ', 'plurals' => ['one' => '{0}ಮಿಮೀ', 'other' => '{0}ಮಿಮೀ'], 'perUnit' => '']),
    'yard' => new U(name: 'length-yard', long: ['name' => 'ಗಜಗಳು', 'plurals' => ['one' => '{0} ಗಜ', 'other' => '{0} ಗಜಗಳು'], 'perUnit' => ''], short: ['name' => 'ಗಜಗಳು', 'plurals' => ['one' => '{0} ಗ', 'other' => '{0} ಗ'], 'perUnit' => ''], narrow: ['name' => 'ಗಜಗಳು', 'plurals' => ['one' => '{0}ಗ', 'other' => '{0} ಗ'], 'perUnit' => '']),
    'gram' => new U(name: 'mass-gram', long: ['name' => 'ಗ್ರಾಂಗಳು', 'plurals' => ['one' => '{0} ಗ್ರಾಂ', 'other' => '{0} ಗ್ರಾಂಗಳು'], 'perUnit' => '{0} ಪ್ರತಿ ಗ್ರಾಂಗೆ'], short: ['name' => 'ಗ್ರಾಂಗಳು', 'plurals' => ['one' => '{0} ಗ್ರಾ', 'other' => '{0} ಗ್ರಾ'], 'perUnit' => '{0}/ಗ್ರಾ'], narrow: ['name' => 'ಗ್ರಾಂ', 'plurals' => ['one' => '{0}ಗ್ರಾ', 'other' => '{0}ಗ್ರಾ'], 'perUnit' => '{0}/ಗ್ರಾ']),
    'kilogram' => new U(name: 'mass-kilogram', long: ['name' => 'ಕಿಲೋಗ್ರಾಂಗಳು', 'plurals' => ['one' => '{0} ಕಿಲೋಗ್ರಾಂ', 'other' => '{0} ಕಿಲೋಗ್ರಾಂಗಳು'], 'perUnit' => '{0} ಪ್ರತಿ ಕಿಲೋಗ್ರಾಂಗೆ'], short: ['name' => 'ಕೆಜಿ', 'plurals' => ['one' => '{0} ಕೆಜಿ', 'other' => '{0} ಕೆಜಿ'], 'perUnit' => '{0}/ಕೆಜಿ'], narrow: ['name' => 'ಕೆಜಿ', 'plurals' => ['one' => '{0}ಕೆಜಿ', 'other' => '{0}ಕೆಜಿ'], 'perUnit' => '{0}/ಕೆಜಿ']),
    'ounce' => new U(name: 'mass-ounce', long: ['name' => 'ಔನ್ಸ್‌ಗಳು', 'plurals' => ['one' => '{0} ಔನ್ಸ್', 'other' => '{0} ಔನ್ಸ್‌ಗಳು'], 'perUnit' => '{0} ಪ್ರತಿ ಔನ್ಸ್‌ಗೆ'], short: ['name' => 'ಔ', 'plurals' => ['one' => '{0} ಔ', 'other' => '{0} ಔ'], 'perUnit' => '{0}/ ಔ'], narrow: ['name' => 'ಔ', 'plurals' => ['one' => '{0}ಔ', 'other' => '{0}ಔ'], 'perUnit' => '{0}/ ಔ']),
    'pound' => new U(name: 'mass-pound', long: ['name' => 'ಪೌಂಡ್‌ಗಳು', 'plurals' => ['one' => '{0} ಪೌಂಡ್', 'other' => '{0} ಪೌಂಡ್‌ಗಳು'], 'perUnit' => '{0} ಪ್ರತಿ ಪೌಂಡ್‌ಗೆ'], short: ['name' => 'ಪೌಂ', 'plurals' => ['one' => '{0} ಪೌಂ', 'other' => '{0} ಪೌಂ'], 'perUnit' => '{0}/ಪೌಂ'], narrow: ['name' => 'ಪೌಂ', 'plurals' => ['one' => '{0}#', 'other' => '{0}#'], 'perUnit' => '{0}/ಪೌಂ']),
    'stone' => new U(name: 'mass-stone', long: ['name' => 'ಕಲ್ಲುಗಳು', 'plurals' => ['one' => '{0} ಕಲ್ಲು', 'other' => '{0} ಕಲ್ಲುಗಳು'], 'perUnit' => ''], short: ['name' => 'ಕಲ್ಲುಗಳು', 'plurals' => ['one' => '{0} ಕಲ್ಲು', 'other' => '{0} ಕಲ್ಲು'], 'perUnit' => ''], narrow: ['name' => 'ಕಲ್ಲು', 'plurals' => ['one' => '{0}ಕಲ್ಲು', 'other' => '{0}ಕಲ್ಲು'], 'perUnit' => '']),
    'celsius' => new U(name: 'temperature-celsius', long: ['name' => 'ಡಿಗ್ರಿ ಸೆಲ್ಶಿಯಸ್', 'plurals' => ['one' => '{0} ಡಿಗ್ರಿ ಸೆಲ್ಶಿಯಸ್', 'other' => '{0} ಡಿಗ್ರಿ ಸೆಲ್ಶಿಯಸ್'], 'perUnit' => ''], short: ['name' => 'ಡಿ.ಸೆ.', 'plurals' => ['one' => '{0}°ಸೆ', 'other' => '{0}°ಸೆ'], 'perUnit' => ''], narrow: ['name' => '°ಸೆ', 'plurals' => ['one' => '{0}°ಸೆ', 'other' => '{0}°ಸೆ'], 'perUnit' => '']),
    'fahrenheit' => new U(name: 'temperature-fahrenheit', long: ['name' => 'ಡಿಗ್ರಿ ಫ್ಯಾರೆನ್‌ಹಿಟ್', 'plurals' => ['one' => '{0}ಡಿಗ್ರಿ ಫ್ಯಾರೆನ್‌ಹಿಟ್', 'other' => '{0}ಡಿಗ್ರಿ ಫ್ಯಾರೆನ್‌ಹಿಟ್'], 'perUnit' => ''], short: ['name' => 'ಡಿ.ಫ್ಯಾ.', 'plurals' => ['one' => '{0}°ಫ್ಯಾ', 'other' => '{0}°ಫ್ಯಾ'], 'perUnit' => ''], narrow: ['name' => 'ಡಿ.ಫ್ಯಾ.', 'plurals' => ['one' => '{0}°ಫ್ಯಾ', 'other' => '{0}°ಫ್ಯಾ'], 'perUnit' => '']),
    'fluid-ounce' => new U(name: 'volume-fluid-ounce', long: ['name' => 'ಫ್ಲೂಡ್ ಔನ್ಸ್‌ಗಳು', 'plurals' => ['one' => '{0} ಫ್ಲೂಯ್ಡ್ ಔನ್ಸ್', 'other' => '{0} ಫ್ಲೂಯ್ಡ್ ಔನ್ಸ್‌ಗಳು'], 'perUnit' => ''], short: ['name' => 'ಫ್ಲೂ.ಔ', 'plurals' => ['one' => '{0} ಫ್ಲೂ.ಔ', 'other' => '{0} ಫ್ಲೂ.ಔ'], 'perUnit' => ''], narrow: ['name' => 'ಫ್ಲೂ.ಔ', 'plurals' => ['one' => '{0}ಫ್ಲೂ.ಔ', 'other' => '{0}ಫ್ಲೂ.ಔ'], 'perUnit' => '']),
    'gallon' => new U(name: 'volume-gallon', long: ['name' => 'ಗ್ಯಾಲನ್‌‌ಗಳು', 'plurals' => ['one' => '{0} ಗ್ಯಾಲನ್‌', 'other' => '{0} ಗ್ಯಾಲನ್‌ಗಳು'], 'perUnit' => '{0} ಪ್ರತಿ ಗ್ಯಾಲನ್‍ಗೆ'], short: ['name' => 'ಗ್ಯಾ', 'plurals' => ['one' => '{0} ಗ್ಯಾ', 'other' => '{0} ಗ್ಯಾ'], 'perUnit' => '{0}/ಗ್ಯಾ'], narrow: ['name' => 'ಗ್ಯಾ', 'plurals' => ['one' => '{0} ಗ್ಯಾ', 'other' => '{0} ಗ್ಯಾ'], 'perUnit' => '{0}/ಗ್ಯಾ']),
    'liter' => new U(name: 'volume-liter', long: ['name' => 'ಲೀಟರ್‌‌ಗಳು', 'plurals' => ['one' => '{0} ಲೀಟರ್', 'other' => '{0} ಲೀಟರ್‌ಗಳು'], 'perUnit' => 'ಪ್ರತಿ ಲೀಟರ್‌ಗೆ {0}'], short: ['name' => 'ಲೀಟರ್‌ಗಳು', 'plurals' => ['one' => '{0} ಲೀ', 'other' => '{0} ಲೀ'], 'perUnit' => '{0}/ಲೀ'], narrow: ['name' => 'ಲೀಟರ್', 'plurals' => ['one' => '{0}ಲೀ', 'other' => '{0}ಲೀ'], 'perUnit' => '{0}/ಲೀ']),
    'milliliter' => new U(name: 'volume-milliliter', long: ['name' => 'ಮಿಲಿಲೀಟರ್‌ಗಳು', 'plurals' => ['one' => '{0} ಮಿಲಿಲೀಟರ್', 'other' => '{0} ಮಿಲಿಲೀಟರ್‌ಗಳು'], 'perUnit' => ''], short: ['name' => 'ಮಿ.ಲೀ', 'plurals' => ['one' => '{0} ಮಿ.ಲೀ', 'other' => '{0} ಮಿ.ಲೀ'], 'perUnit' => ''], narrow: ['name' => 'ಮಿ.ಲೀ', 'plurals' => ['one' => '{0}ಮಿ.ಲೀ', 'other' => '{0}ಮಿ.ಲೀ'], 'perUnit' => '']),
];
