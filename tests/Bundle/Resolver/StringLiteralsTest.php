<?php

namespace Major\Fluent\Tests\Bundle\Resolver;

use Major\Fluent\Tests\TestCase;

final class StringLiteralsTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->bundle->addFtl(<<<'ftl'
            simple-string = { "Кто сказал: «Всё сгорело дотла, больше в землю не бросите семя»?" }

            double-backslash = { "abc\\def" }
            double-quote = { "ab \"cd\" ef" }

            simple-unicode = { "ab \u2042 ef" }
            combining-unicode = { "Варша\u0301ва" }
            unicode = { "ab \U01F984 ef" }
            surrogates = { "\uD803\uDC83 is \U010C83" }

            complex-escape = { "\\\u2137\\\"\\u3\"\\" }
            ftl);
    }

    /**
     * @testdox it can parse simple string
     */
    public function testSimple(): void
    {
        $this->assertTranslation('Кто сказал: «Всё сгорело дотла, больше в землю не бросите семя»?', 'simple-string');
    }

    /**
     * @testdox it can escape backslash
     */
    public function testBackslash(): void
    {
        $this->assertTranslation('abc\\def', 'double-backslash');
    }

    /**
     * @testdox it can escape double quote
     */
    public function testQuote(): void
    {
        $this->assertTranslation('ab "cd" ef', 'double-quote');
    }

    /**
     * @testdox it can escape simple unicode characters
     */
    public function testUnicode(): void
    {
        $this->assertTranslation('ab ⁂ ef', 'simple-unicode');
    }

    /**
     * @testdox it can escape combining unicode characters
     */
    public function testCombiningUnicode(): void
    {
        $this->assertTranslation('Варша́ва', 'combining-unicode');
    }

    /**
     * @testdox it can escape unicode characters above U+FFFF
     */
    public function testUnicodeAboveFFFF(): void
    {
        $this->assertTranslation('ab 🦄 ef', 'unicode');
    }

    /**
     * @testdox it does not allow escape sequences representing surrogate code points
     */
    public function testSurrogates(): void
    {
        $this->assertTranslation('�� is 𐲃', 'surrogates');
    }

    /**
     * @testdox it can parse complex escape sequences
     */
    public function testComplexEscape(): void
    {
        $this->assertTranslation('\\ℷ\\"\\u3"\\', 'complex-escape');
    }
}
