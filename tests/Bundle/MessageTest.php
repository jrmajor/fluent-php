<?php

namespace Major\Fluent\Tests\Bundle;

use Major\Fluent\Tests\TestCase;
use PHPUnit\Framework\Attributes\TestDox;

final class MessageTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->bundle->addFtl(<<<'FTL'
            foo = Foo
            -bar = Bar

            welcome = Welcome
                .guest = Welcome, Guest
                .user = Welcome, { $userName }
            FTL);
    }

    #[TestDox('it returns messages')]
    public function testMessage(): void
    {
        $this->assertTranslation('Foo', 'foo');
    }

    #[TestDox('it returns null for missing messages')]
    public function testMissingMessage(): void
    {
        $this->assertNull($this->bundle->message('baz'));
    }

    #[TestDox('it returns null for terms')]
    public function testTerm(): void
    {
        $this->assertNull($this->bundle->message('bar'));
    }

    #[TestDox('message attributes can be accessed using "dot" notation')]
    public function testAttribute(): void
    {
        $this->assertTranslation('Welcome, Guest', 'welcome.guest');
    }

    #[TestDox('it returns null for missing attributes')]
    public function testMissingAttribute(): void
    {
        $this->assertTranslation('Welcome, Guest', 'welcome.guest');
    }

    #[TestDox('it accepts message arguments as named arguments')]
    public function testNamedArguments(): void
    {
        $this->assertTranslation('Welcome, John', 'welcome.user', ['userName' => 'John']);
    }

    #[TestDox('it accepts message arguments as an associative array')]
    public function testArrayArguments(): void
    {
        $this->assertTranslation('Welcome, John', 'welcome.user', ['userName' => 'John']);
    }
}
