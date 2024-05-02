<?php

namespace Major\Fluent\Tests\Formatters\Number;

use Major\Fluent\Tests\Helpers\Node;
use PHPUnit\Framework\Attributes\TestDox;
use PHPUnit\Framework\TestCase;
use Psl\Type;

final class NodeVersionTest extends TestCase
{
    #[TestDox('local node uses correct icu version')]
    public function testIcu(): void
    {
        $this->assertSame('74.2', $this->versionOf('icu'));
    }

    #[TestDox('local node uses correct cldr version')]
    public function testCldr(): void
    {
        $this->assertSame('44.1', $this->versionOf('cldr'));
    }

    private function versionOf(string $library): string
    {
        $v = Node::instance()->freshOutput("process.versions.{$library}");

        return Type\string()->coerce($v);
    }
}
