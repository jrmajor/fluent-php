<?php

namespace Major\Fluent\Tests\Node;

use Major\Fluent\Node\Syntax\Expressions\Literals\StringLiteral;
use Major\Fluent\Node\Syntax\Identifier;
use Major\Fluent\Tests\TestCase;
use PHPUnit\Framework\Attributes\TestDox;

final class BaseNodeTest extends TestCase
{
    #[TestDox('getType() method works')]
    public function testGetType(): void
    {
        $identifier = new Identifier('name');
        $stringLiteral = new StringLiteral('name');

        $this->assertSame('Identifier', $identifier->getType());
        $this->assertSame('StringLiteral', $stringLiteral->getType());
    }
}
