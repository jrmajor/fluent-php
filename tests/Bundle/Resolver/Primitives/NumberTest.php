<?php

namespace Major\Fluent\Tests\Bundle\Resolver\Primitives;

use Major\Fluent\Tests\TestCase;
use PHPUnit\Framework\Attributes\TestDox;

final class NumberTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->bundle->addFtl(<<<'ftl'
            one = { 1 }

            select = { 1 ->
               *[0] Zero
                [1] One
            }
            ftl);
    }

    #[TestDox('it can be used in a placeable')]
    public function testPlaceable(): void
    {
        $this->assertTranslation('1', 'one');
    }

    #[TestDox('it can be used as a selector')]
    public function testSelector(): void
    {
        $this->assertTranslation('One', 'select');
    }
}
