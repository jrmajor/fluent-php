<?php

namespace Major\Fluent\Tests\Resolver\Terms;

use Major\Fluent\Tests\TestCase;
use PHPUnit\Framework\Attributes\TestDox;

final class ParametrizingTermAttributesTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->bundle->addFtl(<<<'FTL'
            -ship = Ship
                .gender = { $style ->
                   *[traditional] neuter
                    [chicago] feminine
                }

            ref-attr = { -ship.gender ->
               *[masculine] He
                [feminine] She
                [neuter] It
            }
            call-attr-no-args = { -ship.gender() ->
               *[masculine] He
                [feminine] She
                [neuter] It
            }
            call-attr-with-expected-arg = { -ship.gender(style: "chicago") ->
               *[masculine] He
                [feminine] She
                [neuter] It
            }
            call-attr-with-other-arg = { -ship.gender(other: 3) ->
               *[masculine] He
                [feminine] She
                [neuter] It
            }
            FTL);
    }

    #[TestDox('not parameterized, no externals')]
    public function testNoParamNoExt(): void
    {
        $this->assertTranslation('It', 'ref-attr');
    }

    #[TestDox('not parameterized but with externals')]
    public function testNoParamExt(): void
    {
        $this->assertTranslation('It', 'ref-attr', ['style' => 'chicago']);
    }

    #[TestDox('no arguments, no externals')]
    public function testNoArgNoExt(): void
    {
        $this->assertTranslation('It', 'call-attr-no-args');
    }

    #[TestDox('no arguments, but with externals')]
    public function testNoArgExt(): void
    {
        $this->assertTranslation('It', 'call-attr-no-args', ['style' => 'chicago']);
    }

    #[TestDox('with expected arguments, no externals')]
    public function testExpectedArgNoExt(): void
    {
        $this->assertTranslation('She', 'call-attr-with-expected-arg');
    }

    #[TestDox('with expected arguments, and with externals')]
    public function testExpectedArgExt(): void
    {
        $this->assertTranslation('She', 'call-attr-with-expected-arg', ['style' => 'chicago']);
    }

    #[TestDox('with other arguments, no externals')]
    public function testOtherArgNoExt(): void
    {
        $this->assertTranslation('It', 'call-attr-with-other-arg');
    }

    #[TestDox('with other arguments, and with externals')]
    public function testOtherArgExt(): void
    {
        $this->assertTranslation('It', 'call-attr-with-other-arg', ['style' => 'chicago']);
    }
}
