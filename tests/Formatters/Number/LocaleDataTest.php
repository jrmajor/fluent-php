<?php

namespace Major\Fluent\Tests\Formatters\Number;

use Major\Fluent\Formatters\LocaleData;
use PHPUnit\Framework\Assert as PU;
use PHPUnit\Framework\Attributes\TestDox;
use PHPUnit\Framework\TestCase;

final class LocaleDataTest extends TestCase
{
    #[TestDox('it can get all locales')]
    public static function testAll(): void
    {
        PU::assertCount(394, LocaleData::all());
    }
}
