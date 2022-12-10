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
        $this->assertSame('72.1', $this->versionOf('icu'));
    }

    #[TestDox('local node uses correct cldr version')]
    public function testCldr(): void
    {
        $this->assertSame('42.0', $this->versionOf('cldr'));
    }

    private function versionOf(string $library): string
    {
        return Node::instance()->freshOutput("process.versions.{$library}");
    }
}
