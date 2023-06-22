<?php

use Major\Fluent\Formatters\Number\Locale\Unit as U;

return [
    'acre' => new U(long: ['name' => 'একৰ', 'plurals' => ['one' => '{0} একৰ', 'other' => '{0} একৰ'], 'perUnit' => ''], short: ['name' => 'একৰ', 'plurals' => ['one' => '{0} একৰ', 'other' => '{0} একৰ'], 'perUnit' => ''], narrow: ['name' => 'একৰ', 'plurals' => ['one' => '{0} একৰ', 'other' => '{0} একৰ'], 'perUnit' => '']),
    'bit' => new U(long: ['name' => 'বিট', 'plurals' => ['one' => '{0} বিট', 'other' => '{0} বিট'], 'perUnit' => ''], short: ['name' => 'বিট', 'plurals' => ['one' => '{0} বিট', 'other' => '{0} বিট'], 'perUnit' => ''], narrow: ['name' => 'বিট', 'plurals' => ['one' => '{0} বিট', 'other' => '{0} বিট'], 'perUnit' => '']),
    'byte' => new U(long: ['name' => 'বাইট', 'plurals' => ['one' => '{0} বাইট', 'other' => '{0} বাইট'], 'perUnit' => ''], short: ['name' => 'বাইট', 'plurals' => ['one' => '{0} বাইট', 'other' => '{0} বাইট'], 'perUnit' => ''], narrow: ['name' => 'বাইট', 'plurals' => ['one' => '{0} বাইট', 'other' => '{0} বাইট'], 'perUnit' => '']),
    'celsius' => new U(long: ['name' => 'ডিগ্ৰী চেলচিয়াছ', 'plurals' => ['one' => '{0} ডিগ্ৰী চেলচিয়াছ', 'other' => '{0} ডিগ্ৰী চেলচিয়াছ'], 'perUnit' => ''], short: ['name' => 'ডিগ্ৰীঃ চেঃ', 'plurals' => ['one' => '{0}°চেঃ', 'other' => '{0}°চেঃ'], 'perUnit' => ''], narrow: ['name' => '°চেঃ', 'plurals' => ['one' => '{0}°চেঃ', 'other' => '{0}°চেঃ'], 'perUnit' => '']),
    'centimeter' => new U(long: ['name' => 'ছেণ্টিমিটাৰ', 'plurals' => ['one' => '{0} ছেণ্টিমিটাৰ', 'other' => '{0} ছেণ্টিমিটাৰ'], 'perUnit' => '{0} প্ৰতি ছেণ্টিমিটাৰ'], short: ['name' => 'ছেঃ মিঃ', 'plurals' => ['one' => '{0} ছেঃ মিঃ', 'other' => '{0} ছেঃ মিঃ'], 'perUnit' => '{0}/ছেঃ মিঃ'], narrow: ['name' => 'ছেঃ মিঃ', 'plurals' => ['one' => '{0} ছেঃ মিঃ', 'other' => '{0} ছেঃ মিঃ'], 'perUnit' => '{0}/ছেঃ মিঃ']),
    'day' => new U(long: ['name' => 'দিন', 'plurals' => ['one' => '{0} দিন', 'other' => '{0} দিন'], 'perUnit' => '{0} প্ৰতি দিন'], short: ['name' => 'দিন', 'plurals' => ['one' => '{0} দিন', 'other' => '{0} দিন'], 'perUnit' => '{0}/দিন'], narrow: ['name' => 'দিন', 'plurals' => ['one' => '{0} দিন', 'other' => '{0} দিন'], 'perUnit' => '{0}/দিন']),
    'degree' => new U(long: ['name' => 'ডিগ্ৰী', 'plurals' => ['one' => '{0} ডিগ্ৰী', 'other' => '{0} ডিগ্ৰী'], 'perUnit' => ''], short: ['name' => 'ডিগ্ৰী', 'plurals' => ['one' => '{0} ডিগ্ৰী', 'other' => '{0} ডিগ্ৰী'], 'perUnit' => ''], narrow: ['name' => 'ডিগ্ৰী', 'plurals' => ['one' => '{0} ডিগ্ৰী', 'other' => '{0} ডিগ্ৰী'], 'perUnit' => '']),
    'fahrenheit' => new U(long: ['name' => 'ডিগ্ৰী ফাৰেনহাইট', 'plurals' => ['one' => '{0} ডিগ্ৰী ফাৰেনহাইট', 'other' => '{0} ডিগ্ৰী ফাৰেনহাইট'], 'perUnit' => ''], short: ['name' => 'ডিঃ ফাঃ', 'plurals' => ['one' => '{0}°ফাঃ', 'other' => '{0}°ফাঃ'], 'perUnit' => ''], narrow: ['name' => 'ডিঃ ফাঃ', 'plurals' => ['one' => '{0}°ফাঃ', 'other' => '{0}°ফাঃ'], 'perUnit' => '']),
    'fluid-ounce' => new U(long: ['name' => 'ফ্লুইড আউন্স', 'plurals' => ['one' => '{0} ফ্লুইড আউন্স', 'other' => '{0} ফ্লুইড আউন্স'], 'perUnit' => ''], short: ['name' => 'ফ্লুঃ আঃ', 'plurals' => ['one' => '{0} ফ্লুঃ আঃ', 'other' => '{0} ফ্লুঃ আঃ'], 'perUnit' => ''], narrow: ['name' => 'ফ্লুঃ আঃ', 'plurals' => ['one' => '{0} ফ্লুঃ আঃ', 'other' => '{0} ফ্লুঃ আঃ'], 'perUnit' => '']),
    'foot' => new U(long: ['name' => 'ফুট', 'plurals' => ['one' => '{0} ফুট', 'other' => '{0} ফুট'], 'perUnit' => '{0} প্ৰতি ফুট'], short: ['name' => 'ফুট', 'plurals' => ['one' => '{0} ফুঃ', 'other' => '{0} ফুঃ'], 'perUnit' => '{0}/ফুঃ'], narrow: ['name' => 'ফুট', 'plurals' => ['one' => '{0} ফুঃ', 'other' => '{0} ফুঃ'], 'perUnit' => '{0}/ফুঃ']),
    'gallon' => new U(long: ['name' => 'গেলন', 'plurals' => ['one' => '{0} গেলন', 'other' => '{0} গেলন'], 'perUnit' => '{0} প্ৰতি গেলন'], short: ['name' => 'গেলন', 'plurals' => ['one' => '{0} গেলন', 'other' => '{0} গেলন'], 'perUnit' => '{0}/গেলন'], narrow: ['name' => 'গেলন', 'plurals' => ['one' => '{0} গেলন', 'other' => '{0} গেলন'], 'perUnit' => '{0}/গেলন']),
    'gigabit' => new U(long: ['name' => 'গিগাবিট', 'plurals' => ['one' => '{0} গিগাবিট', 'other' => '{0} গিগাবিট'], 'perUnit' => ''], short: ['name' => 'গিগাবিট', 'plurals' => ['one' => '{0} গিঃ বিঃ', 'other' => '{0} গিঃ বিঃ'], 'perUnit' => ''], narrow: ['name' => 'গিগাবিট', 'plurals' => ['one' => '{0} গিঃ বিঃ', 'other' => '{0} গিঃ বিঃ'], 'perUnit' => '']),
    'gigabyte' => new U(long: ['name' => 'গিগাবাইট', 'plurals' => ['one' => '{0} গিগাবাইট', 'other' => '{0} গিগাবাইট'], 'perUnit' => ''], short: ['name' => 'গিগাবাইট', 'plurals' => ['one' => '{0} গিঃ বাঃ', 'other' => '{0} গিঃ বাঃ'], 'perUnit' => ''], narrow: ['name' => 'গিগাবাইট', 'plurals' => ['one' => '{0} গিঃ বাঃ', 'other' => '{0} গিঃ বাঃ'], 'perUnit' => '']),
    'gram' => new U(long: ['name' => 'গ্ৰাম', 'plurals' => ['one' => '{0} গ্ৰাম', 'other' => '{0} গ্ৰাম'], 'perUnit' => '{0} প্ৰতি গ্ৰাম'], short: ['name' => 'গ্ৰাম', 'plurals' => ['one' => '{0} গ্ৰাঃ', 'other' => '{0} গ্ৰাঃ'], 'perUnit' => '{0}/গ্ৰাঃ'], narrow: ['name' => 'গ্ৰাম', 'plurals' => ['one' => '{0} গ্ৰাঃ', 'other' => '{0} গ্ৰাঃ'], 'perUnit' => '{0}/গ্ৰাঃ']),
    'hectare' => new U(long: ['name' => 'হেক্টৰ', 'plurals' => ['one' => '{0} হেক্টৰ', 'other' => '{0} হেক্টৰ'], 'perUnit' => ''], short: ['name' => 'হেক্টৰ', 'plurals' => ['one' => '{0} হেক্টৰ', 'other' => '{0} হেক্টৰ'], 'perUnit' => ''], narrow: ['name' => 'হেক্টৰ', 'plurals' => ['one' => '{0} হেক্টৰ', 'other' => '{0} হেক্টৰ'], 'perUnit' => '']),
    'hour' => new U(long: ['name' => 'ঘণ্টা', 'plurals' => ['one' => '{0} ঘণ্টা', 'other' => '{0} ঘণ্টা'], 'perUnit' => '{0} প্ৰতি ঘণ্টা'], short: ['name' => 'ঘণ্টা', 'plurals' => ['one' => '{0} ঘণ্টা', 'other' => '{0} ঘণ্টা'], 'perUnit' => '{0}/ঘণ্টা'], narrow: ['name' => 'ঘণ্টা', 'plurals' => ['one' => '{0} ঘণ্টা', 'other' => '{0} ঘণ্টা'], 'perUnit' => '{0}/ঘণ্টা']),
    'inch' => new U(long: ['name' => 'ইঞ্চি', 'plurals' => ['one' => '{0} ইঞ্চি', 'other' => '{0} ইঞ্চি'], 'perUnit' => '{0} প্ৰতি ইঞ্চি'], short: ['name' => 'ইঞ্চি', 'plurals' => ['one' => '{0} ইঃ', 'other' => '{0} ইঃ'], 'perUnit' => '{0}/ইঃ'], narrow: ['name' => 'ইঞ্চি', 'plurals' => ['one' => '{0} ইঃ', 'other' => '{0} ইঃ'], 'perUnit' => '{0}/ইঃ']),
    'kilobit' => new U(long: ['name' => 'কিলোবিট', 'plurals' => ['one' => '{0} কিলোবিট', 'other' => '{0} কিলোবিট'], 'perUnit' => ''], short: ['name' => 'কিলোবিট', 'plurals' => ['one' => '{0} কিঃ বিঃ', 'other' => '{0} কিঃ বিঃ'], 'perUnit' => ''], narrow: ['name' => 'কিলোবিট', 'plurals' => ['one' => '{0} কিঃ বিঃ', 'other' => '{0} কিঃ বিঃ'], 'perUnit' => '']),
    'kilobyte' => new U(long: ['name' => 'কিলোবাইট', 'plurals' => ['one' => '{0} কিলোবাইট', 'other' => '{0} কিলোবাইট'], 'perUnit' => ''], short: ['name' => 'কিলোবাইট', 'plurals' => ['one' => '{0} কিঃ বাঃ', 'other' => '{0} কিঃ বাঃ'], 'perUnit' => ''], narrow: ['name' => 'কিলোবাইট', 'plurals' => ['one' => '{0} কিঃ বাঃ', 'other' => '{0} কিঃ বাঃ'], 'perUnit' => '']),
    'kilogram' => new U(long: ['name' => 'কিলোগ্রাম', 'plurals' => ['one' => '{0} কিলোগ্ৰাম', 'other' => '{0} কিলোগ্ৰাম'], 'perUnit' => '{0} প্ৰতি কিলোগ্ৰাম'], short: ['name' => 'কিঃ গ্ৰাঃ', 'plurals' => ['one' => '{0} কিঃ গ্ৰাঃ', 'other' => '{0} কিঃ গ্ৰাঃ'], 'perUnit' => '{0}/কিঃ গ্ৰাঃ'], narrow: ['name' => 'কিঃ গ্ৰাঃ', 'plurals' => ['one' => '{0} কিঃ গ্ৰাঃ', 'other' => '{0} কিঃ গ্ৰাঃ'], 'perUnit' => '{0}/কিঃ গ্ৰাঃ']),
    'kilometer' => new U(long: ['name' => 'কিলোমিটাৰ', 'plurals' => ['one' => '{0} কিলোমিটাৰ', 'other' => '{0} কিলোমিটাৰ'], 'perUnit' => '{0} প্ৰতি কিলোমিটাৰ'], short: ['name' => 'কিঃ মিঃ', 'plurals' => ['one' => '{0} কিঃ মিঃ', 'other' => '{0} কিঃ মিঃ'], 'perUnit' => '{0}/কিঃ মিঃ'], narrow: ['name' => 'কিঃ মিঃ', 'plurals' => ['one' => '{0} কিঃ মিঃ', 'other' => '{0} কিঃ মিঃ'], 'perUnit' => '{0}/কিঃ মিঃ']),
    'liter' => new U(long: ['name' => 'লিটাৰ', 'plurals' => ['one' => '{0} লিটাৰ', 'other' => '{0} লিটাৰ'], 'perUnit' => '{0} প্ৰতি লিটাৰ'], short: ['name' => 'লিটাৰ', 'plurals' => ['one' => '{0} লিঃ', 'other' => '{0} লিঃ'], 'perUnit' => '{0}/লিঃ'], narrow: ['name' => 'লিটাৰ', 'plurals' => ['one' => '{0} লিঃ', 'other' => '{0} লিঃ'], 'perUnit' => '{0}/লিঃ']),
    'megabit' => new U(long: ['name' => 'মেগাবিট', 'plurals' => ['one' => '{0} মেগাবিট', 'other' => '{0} মেগাবিট'], 'perUnit' => ''], short: ['name' => 'মেগাবিট', 'plurals' => ['one' => '{0} মেঃ বিঃ', 'other' => '{0} মেঃ বিঃ'], 'perUnit' => ''], narrow: ['name' => 'মেঃ বাঃ', 'plurals' => ['one' => '{0} মেঃ বিঃ', 'other' => '{0} মেঃ বিঃ'], 'perUnit' => '']),
    'megabyte' => new U(long: ['name' => 'মেগাবাইট', 'plurals' => ['one' => '{0} মেগাবাইট', 'other' => '{0} মেগাবাইট'], 'perUnit' => ''], short: ['name' => 'মেগাবাইট', 'plurals' => ['one' => '{0} মেঃ বাঃ', 'other' => '{0} মেঃ বাঃ'], 'perUnit' => ''], narrow: ['name' => 'মেগাবাইট', 'plurals' => ['one' => '{0} মেঃ বাঃ', 'other' => '{0} মেঃ বাঃ'], 'perUnit' => '']),
    'meter' => new U(long: ['name' => 'মিটাৰ', 'plurals' => ['one' => '{0} মিটাৰ', 'other' => '{0} মিটাৰ'], 'perUnit' => '{0} প্ৰতি মিটাৰ'], short: ['name' => 'মিটাৰ', 'plurals' => ['one' => '{0} মিঃ', 'other' => '{0} মিঃ'], 'perUnit' => '{0}/মিঃ'], narrow: ['name' => 'মিঃ', 'plurals' => ['one' => '{0} মিঃ', 'other' => '{0} মিঃ'], 'perUnit' => '{0}/মিঃ']),
    'mile' => new U(long: ['name' => 'মাইল', 'plurals' => ['one' => '{0} মাইল', 'other' => '{0} মাইল'], 'perUnit' => ''], short: ['name' => 'মাইল', 'plurals' => ['one' => '{0} মাঃ', 'other' => '{0} মাঃ'], 'perUnit' => ''], narrow: ['name' => 'মাইল', 'plurals' => ['one' => '{0} মাঃ', 'other' => '{0} মাঃ'], 'perUnit' => '']),
    'mile-scandinavian' => new U(long: ['name' => 'মাইল-স্কেণ্ডিনেভিয়ান', 'plurals' => ['one' => '{0} মাইল-স্কেণ্ডিনেভিয়ান', 'other' => '{0} মাইল-স্কেণ্ডিনেভিয়ান'], 'perUnit' => ''], short: ['name' => 'মাঃ-স্কেঃ', 'plurals' => ['one' => '{0} মাঃ-স্কেঃ', 'other' => '{0} মাঃ-স্কেঃ'], 'perUnit' => ''], narrow: ['name' => 'মাঃ-স্কেঃ', 'plurals' => ['one' => '{0} মাঃ-স্কেঃ', 'other' => '{0} মাঃ-স্কেঃ'], 'perUnit' => '']),
    'milliliter' => new U(long: ['name' => 'মিলিলিটাৰ', 'plurals' => ['one' => '{0} মিলিলিটাৰ', 'other' => '{0} মিলিলিটাৰ'], 'perUnit' => ''], short: ['name' => 'মিঃ লিঃ', 'plurals' => ['one' => '{0} মিঃ লিঃ', 'other' => '{0} মিঃ লিঃ'], 'perUnit' => ''], narrow: ['name' => 'মিঃ লিঃ', 'plurals' => ['one' => '{0} মিঃ লিঃ', 'other' => '{0} মিঃ লিঃ'], 'perUnit' => '']),
    'millimeter' => new U(long: ['name' => 'মিলিমিটাৰ', 'plurals' => ['one' => '{0} মিলিমিটাৰ', 'other' => '{0} মিলিমিটাৰ'], 'perUnit' => ''], short: ['name' => 'মিঃ মিঃ', 'plurals' => ['one' => '{0} মিঃ মিঃ', 'other' => '{0} মিঃ মিঃ'], 'perUnit' => ''], narrow: ['name' => 'মিঃ মিঃ', 'plurals' => ['one' => '{0} মিঃ মিঃ', 'other' => '{0} মিঃ মিঃ'], 'perUnit' => '']),
    'millisecond' => new U(long: ['name' => 'মিলিছেকেণ্ড', 'plurals' => ['one' => '{0} মিলিছেকেণ্ড', 'other' => '{0} মিলিছেকেণ্ড'], 'perUnit' => ''], short: ['name' => 'মিলিছেকেণ্ড', 'plurals' => ['one' => '{0} মিঃ ছেঃ', 'other' => '{0} মিঃ ছেঃ'], 'perUnit' => ''], narrow: ['name' => 'মিলিছেকেণ্ড', 'plurals' => ['one' => '{0} মিঃ ছেঃ', 'other' => '{0} মিঃ ছেঃ'], 'perUnit' => '']),
    'minute' => new U(long: ['name' => 'মিনিট', 'plurals' => ['one' => '{0} মিনিট', 'other' => '{0} মিনিট'], 'perUnit' => '{0} প্ৰতি মিনিট'], short: ['name' => 'মিনিট', 'plurals' => ['one' => '{0} মিনিট', 'other' => '{0} মিনিট'], 'perUnit' => '{0}/মিনিট'], narrow: ['name' => 'মিনিট', 'plurals' => ['one' => '{0} মিনিট', 'other' => '{0} মিনিট'], 'perUnit' => '{0}/মিনিট']),
    'month' => new U(long: ['name' => 'মাহ', 'plurals' => ['one' => '{0} মাহ', 'other' => '{0} মাহ'], 'perUnit' => '{0} প্ৰতি মাহ'], short: ['name' => 'মাহ', 'plurals' => ['one' => '{0} মাহ', 'other' => '{0} মাহ'], 'perUnit' => '{0}/মাহ'], narrow: ['name' => 'মাহ', 'plurals' => ['one' => '{0} মাহ', 'other' => '{0} মাহ'], 'perUnit' => '{0}/মাহ']),
    'ounce' => new U(long: ['name' => 'আউন্স', 'plurals' => ['one' => '{0} আউন্স', 'other' => '{0} আউন্স'], 'perUnit' => '{0} প্ৰতি আউন্স'], short: ['name' => 'আউন্স', 'plurals' => ['one' => '{0} আউন্স', 'other' => '{0} আউন্স'], 'perUnit' => '{0}/আউন্স'], narrow: ['name' => 'আউন্স', 'plurals' => ['one' => '{0} আউন্স', 'other' => '{0} আউন্স'], 'perUnit' => '{0}/আউন্স']),
    'percent' => new U(long: ['name' => '%', 'plurals' => ['one' => '{0} শতাংশ', 'other' => '{0} শতাংশ'], 'perUnit' => ''], short: ['name' => 'শতাংশ', 'plurals' => ['one' => '{0}%', 'other' => '{0}%'], 'perUnit' => ''], narrow: ['name' => '%', 'plurals' => ['one' => '{0}%', 'other' => '{0}%'], 'perUnit' => '']),
    'petabyte' => new U(long: ['name' => 'পেটাবাইট', 'plurals' => ['one' => '{0} পেটাবাইট', 'other' => '{0} পেটাবাইট'], 'perUnit' => ''], short: ['name' => 'PByte', 'plurals' => ['one' => '{0} PB', 'other' => '{0} PB'], 'perUnit' => ''], narrow: ['name' => 'PByte', 'plurals' => ['one' => '{0} PB', 'other' => '{0} PB'], 'perUnit' => '']),
    'pound' => new U(long: ['name' => 'পাউণ্ড', 'plurals' => ['one' => '{0} পাউণ্ড', 'other' => '{0} পাউণ্ড'], 'perUnit' => '{0} প্ৰতি পাউণ্ড'], short: ['name' => 'পাউণ্ড', 'plurals' => ['one' => '{0} পাউণ্ড', 'other' => '{0} পাউণ্ড'], 'perUnit' => '{0}/পাউণ্ড'], narrow: ['name' => 'পাউণ্ড', 'plurals' => ['one' => '{0} পাউণ্ড', 'other' => '{0} পাউণ্ড'], 'perUnit' => '{0}/পাউণ্ড']),
    'second' => new U(long: ['name' => 'ছেকেণ্ড', 'plurals' => ['one' => '{0} ছেকেণ্ড', 'other' => '{0} ছেকেণ্ড'], 'perUnit' => '{0} প্ৰতি ছেকেণ্ড'], short: ['name' => 'ছেকেণ্ড', 'plurals' => ['one' => '{0} ছেকেণ্ড', 'other' => '{0} ছেকেণ্ড'], 'perUnit' => '{0}/ছেকেণ্ড'], narrow: ['name' => 'ছেকেণ্ড', 'plurals' => ['one' => '{0} ছেকেণ্ড', 'other' => '{0} ছেকেণ্ড'], 'perUnit' => '{0}/ছেকেণ্ড']),
    'stone' => new U(long: ['name' => 'ষ্ট’ন', 'plurals' => ['one' => "{0} ষ্ট'ন", 'other' => "{0} ষ্ট'ন"], 'perUnit' => ''], short: ['name' => 'ষ্ট’ন', 'plurals' => ['one' => "{0} ষ্ট'ন", 'other' => "{0} ষ্ট'ন"], 'perUnit' => ''], narrow: ['name' => 'ষ্ট’ন', 'plurals' => ['one' => "{0} ষ্ট'ন", 'other' => "{0} ষ্ট'ন"], 'perUnit' => '']),
    'terabit' => new U(long: ['name' => 'টেৰাবিট', 'plurals' => ['one' => '{0} টেৰাবিট', 'other' => '{0} টেৰাবিট'], 'perUnit' => ''], short: ['name' => 'টেৰাবিট', 'plurals' => ['one' => '{0} টেঃ বিঃ', 'other' => '{0} টেঃ বিঃ'], 'perUnit' => ''], narrow: ['name' => 'টেৰাবিট', 'plurals' => ['one' => '{0} টেঃ বিঃ', 'other' => '{0} টেঃ বিঃ'], 'perUnit' => '']),
    'terabyte' => new U(long: ['name' => 'টেৰাবাইট', 'plurals' => ['one' => '{0} টেৰাবাইট', 'other' => '{0} টেৰাবাইট'], 'perUnit' => ''], short: ['name' => 'টেৰাবাইট', 'plurals' => ['one' => '{0} টেঃ বাঃ', 'other' => '{0} টেঃ বাঃ'], 'perUnit' => ''], narrow: ['name' => 'টেৰাবাইট', 'plurals' => ['one' => '{0} টেঃ বাঃ', 'other' => '{0} টেঃ বাঃ'], 'perUnit' => '']),
    'week' => new U(long: ['name' => 'সপ্তাহ', 'plurals' => ['one' => '{0} সপ্তাহ', 'other' => '{0} সপ্তাহ'], 'perUnit' => '{0} প্ৰতি সপ্তাহ'], short: ['name' => 'সপ্তাহ', 'plurals' => ['one' => '{0} সপ্তাহ', 'other' => '{0} সপ্তাহ'], 'perUnit' => '{0}/সপ্তাহ'], narrow: ['name' => 'সপ্তাহ', 'plurals' => ['one' => '{0} সপ্তাহ', 'other' => '{0} সপ্তাহ'], 'perUnit' => '{0}/সপ্তাহ']),
    'yard' => new U(long: ['name' => 'গজ', 'plurals' => ['one' => '{0} গজ', 'other' => '{0} গজ'], 'perUnit' => ''], short: ['name' => 'গজ', 'plurals' => ['one' => '{0} গজ', 'other' => '{0} গজ'], 'perUnit' => ''], narrow: ['name' => 'গজ', 'plurals' => ['one' => '{0} গজ', 'other' => '{0} গজ'], 'perUnit' => '']),
    'year' => new U(long: ['name' => 'বছৰ', 'plurals' => ['one' => '{0} বছৰ', 'other' => '{0} বছৰ'], 'perUnit' => '{0} প্ৰতি বছৰ'], short: ['name' => 'বছৰ', 'plurals' => ['one' => '{0} বছৰ', 'other' => '{0} বছৰ'], 'perUnit' => '{0}/বছৰ'], narrow: ['name' => 'বছৰ', 'plurals' => ['one' => '{0} বছৰ', 'other' => '{0} বছৰ'], 'perUnit' => '{0}/বছৰ']),
];
