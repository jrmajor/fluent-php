<?php

namespace Major\Fluent\Tests\Formatters\Number;

use Major\Fluent\Tests\Helpers\Node;
use PHPUnit\Framework\Attributes\TestDox;
use PHPUnit\Framework\TestCase;

final class NodeVersionTest extends TestCase
{
    #[TestDox('local node uses correct icu version')]
    public function testIcu(): void
    {
        $node = Node::instance();

        $this->assertSame('71.1', $node->freshOutput('process.versions.icu'));
    }

    #[TestDox('local node uses correct cldr version')]
    public function testCldr(): void
    {
        $node = Node::instance();

        $this->assertSame('41.0', $node->freshOutput('process.versions.cldr'));
    }
}
