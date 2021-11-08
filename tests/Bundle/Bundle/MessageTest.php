<?php

namespace Major\Fluent\Tests\Bundle\Bundle;

use Major\Fluent\Tests\TestCase;

final class MessageTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->bundle->addFtl(<<<'ftl'
            foo = Foo
            -bar = Bar

            welcome = Welcome
                .guest = Welcome, Guest
                .user = Welcome, { $userName }
            ftl);
    }

    /**
     * @testdox it returns messages
     */
    public function testMessage(): void
    {
        $this->assertTranslation('Foo', 'foo');
    }

    /**
     * @testdox it returns null for missing messages
     */
    public function testMissingMessage(): void
    {
        $this->assertNull($this->bundle->message('baz'));
    }

    /**
     * @testdox it returns null for terms
     */
    public function testTerm(): void
    {
        $this->assertNull($this->bundle->message('bar'));
    }

    /**
     * @testdox message attributes can be accessed using "dot" notation
     */
    public function testAttribute(): void
    {
        $this->assertTranslation('Welcome, Guest', 'welcome.guest');
    }

    /**
     * @testdox it returns null for missing attributes
     */
    public function testMissingAttribute(): void
    {
        $this->assertTranslation('Welcome, Guest', 'welcome.guest');
    }

    /**
     * @testdox it accepts message arguments as named arguments
     */
    public function testNamedArguments(): void
    {
        $this->assertTranslation('Welcome, John', 'welcome.user', ['userName' => 'John']);
    }

    /**
     * @testdox it accepts message arguments as an associative array
     */
    public function testArrayArguments(): void
    {
        $this->assertTranslation('Welcome, John', 'welcome.user', ['userName' => 'John']);
    }
}
