<?php

namespace Major\Fluent\Tests\Bundle\Resolver;

use Major\Fluent\Bundle\FluentBundle;

$bundle = (new FluentBundle('ru', strict: true))
    ->addFtl(<<<'ftl'
        simple-string = { "Кто сказал: «Всё сгорело дотла, больше в землю не бросите семя»?" }

        double-backslash = { "abc\\def" }
        double-quote = { "ab \"cd\" ef" }

        simple-unicode = { "ab \u2042 ef" }
        combining-unicode = { "Варша\u0301ва" }
        unicode = { "ab \U01F984 ef" }
        surrogates = { "\uD803\uDC83 is \U010C83" }

        complex-escape = { "\\\u2137\\\"\\u3\"\\" }
        ftl);

it('can parse simple string')
    ->expect($bundle->message('simple-string'))
    ->toBe('Кто сказал: «Всё сгорело дотла, больше в землю не бросите семя»?');

it('can escape backslash')
    ->expect($bundle->message('double-backslash'))->toBe('abc\\def');

it('can escape double quote')
    ->expect($bundle->message('double-quote'))->toBe('ab "cd" ef');

it('can escape simple unicode characters')
    ->expect($bundle->message('simple-unicode'))->toBe('ab ⁂ ef');

it('can escape combining unicode characters')
    ->expect($bundle->message('combining-unicode'))->toBe('Варша́ва');

it('can escape unicode characters above U+FFFF')
    ->expect($bundle->message('unicode'))->toBe('ab 🦄 ef');

it('does not allow escape sequences representing surrogate code points')
    ->expect($bundle->message('surrogates'))->toBe('�� is 𐲃');

it('can parse complex escape sequences')
    ->expect($bundle->message('complex-escape'))->toBe('\\ℷ\\"\\u3"\\');
