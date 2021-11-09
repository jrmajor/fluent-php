<?php

namespace Major\Fluent\Tests\Bundle\Resolver\Arguments;

use Major\Fluent\Bundle\FluentBundle;
use Major\Fluent\Bundle\Types\FluentNumber;
use Major\Fluent\Exceptions\Resolver\TypeException;
use Major\Fluent\Tests\TestCase;
use stdClass;

final class ArgumentTypesTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->bundle->addFtl('foo = { $arg }');
    }

    /**
     * @testdox it can not be an array
     */
    public function testArray(): void
    {
        $this->assertTranslationErrors('{$arg}', [
            [TypeException::class, 'Variable $arg is of unsupported type array.'],
        ], 'foo', ['arg' => [1, 2, 'key' => 3]]);
    }

    /**
     * @testdox it can not be a boolean
     */
    public function testBoolean(): void
    {
        $this->assertTranslationErrors('{$arg}', [
            [TypeException::class, 'Variable $arg is of unsupported type bool.'],
        ], 'foo', ['arg' => true]);
    }

    /**
     * @testdox it can not be null
     */
    public function testNull(): void
    {
        $this->assertTranslationErrors('{$arg}', [
            [TypeException::class, 'Variable $arg is of unsupported type null.'],
        ], 'foo', ['arg' => null]);
    }

    /**
     * @testdox it can not be an object
     */
    public function testObject(): void
    {
        $this->assertTranslationErrors('{$arg}', [
            [TypeException::class, 'Variable $arg is of unsupported type stdClass.'],
        ], 'foo', ['arg' => new stdClass()]);
    }

    /**
     * @testdox it can not be a closure
     */
    public function testClosure(): void
    {
        $this->assertTranslationErrors('{$arg}', [
            [TypeException::class, 'Variable $arg is of unsupported type Closure.'],
        ], 'foo', ['arg' => fn () => null]);
    }

    /**
     * @testdox it can be a string
     */
    public function testString(): void
    {
        $this->assertTranslation('Argument', 'foo', ['arg' => 'Argument']);
    }

    /**
     * @testdox it can be an integer
     */
    public function testInteger(): void
    {
        $this->assertTranslation('1', 'foo', ['arg' => 1]);
    }

    /**
     * @testdox it can be a float
     */
    public function testFloat(): void
    {
        $this->assertTranslation('1.5', 'foo', ['arg' => 1.5]);
    }

    /**
     * @testdox it can be a FluentNumber
     */
    public function testFluentNumber(): void
    {
        $pl = (new FluentBundle('pl'))->addFtl('foo = { $arg }');

        $this->assertTranslation('0.42', 'foo', ['arg' => new FluentNumber(0.42)]);
        $this->assertTranslation('0,42', 'foo', ['arg' => new FluentNumber(0.42)], $pl);
    }
}
