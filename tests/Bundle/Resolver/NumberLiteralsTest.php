<?php

namespace Major\Fluent\Tests\Bundle\Resolver;

use Major\Fluent\Bundle\FluentBundle;
use Major\Fluent\Tests\TestCase;

final class NumberLiteralsTest extends TestCase
{
    private FluentBundle $en;

    private FluentBundle $pl;

    private FluentBundle $zh;

    private FluentBundle $fr;

    protected function setUp(): void
    {
        parent::setUp();

        $ftl = <<<'ftl'
            num-in-placeable = { 332035625.33203 }
            num-in-var = { $number }
            ftl;

        $this->en = (new FluentBundle('en-US'))->addFtl($ftl);
        $this->pl = (new FluentBundle('pl'))->addFtl($ftl);
        $this->zh = (new FluentBundle('zh-Hant-TW'))->addFtl($ftl);
        $this->fr = (new FluentBundle('fr-CA'))->addFtl($ftl);
    }

    /**
     * @testdox it formats numbers in placeables according to current locale
     */
    public function testPlaceables(): void
    {
        $this->assertTranslation('332,035,625.33203', 'num-in-placeable', [], $this->en);
        $this->assertTranslation("332\u{00A0}035\u{00A0}625,33203", 'num-in-placeable', [], $this->pl);
        $this->assertTranslation('332,035,625.33203', 'num-in-placeable', [], $this->zh);
        $this->assertTranslation("332\u{00A0}035\u{00A0}625,33203", 'num-in-placeable', [], $this->fr);
    }

    /**
     * @testdox it formats numbers in variables according to current locale
     */
    public function testVariables(): void
    {
        $this->assertTranslation('332,035,625.332', 'num-in-var', ['number' => 332_035_625.332_03], $this->en);
        $this->assertTranslation("37\u{00A0}824\u{00A0}787,378", 'num-in-var', ['number' => 37_824_787.378_24], $this->pl);
        $this->assertTranslation('37,824,787.378', 'num-in-var', ['number' => 37_824_787.378_24], $this->zh);
        $this->assertTranslation("37\u{00A0}824\u{00A0}787,378", 'num-in-var', ['number' => 37_824_787.378_24], $this->fr);
    }
}
