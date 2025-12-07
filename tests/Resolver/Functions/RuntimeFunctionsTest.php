<?php

namespace Major\Fluent\Tests\Resolver\Functions;

use Exception;
use Major\Fluent\Bundle\Types\FluentNumber;
use Major\Fluent\Exceptions\Resolver\FunctionException;
use Major\Fluent\Exceptions\Resolver\ReferenceException;
use Major\Fluent\Exceptions\Resolver\TypeException;
use Major\Fluent\Tests\TestCase;
use PHPUnit\Framework\Attributes\TestDox;
use stdClass;

final class RuntimeFunctionsTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->bundle->addFunctions([
            /** @phpstan-ignore argument.type */
            'CONCAT' => fn (...$args) => implode('', $args),
            /** @phpstan-ignore argument.type */
            'SUM' => fn (...$args) => new FluentNumber(array_sum($args)),
            'PLATFORM' => fn () => 'windows',
            'JSON' => fn ($arg, $key, $another) => json_encode(func_get_args()),
            'TYPE' => fn ($arg) => get_debug_type($arg),
            'PROPS' => fn (object $object) => json_encode(get_object_vars($object)),
            'WRONG_RETURN' => fn () => new stdClass(),
            'THROWS' => fn () => throw new Exception('Something went wrong!'),
        ])->addFtl(<<<'FTL'
            strings = { CONCAT("Foo", "Bar") }
            numbers = { SUM(1, 2.5) }
            selector =
              { PLATFORM() ->
                [windows] Options
                *[other] Preferences
              }
            named-args = { JSON("test", another: 123, key: "value") }
            int = { TYPE(12) }
            float = { TYPE(4.5) }
            float-trailing-zeroes = { TYPE(8.0) }
            objects = { PROPS($object) }
            unknown = { TYPE($arg) }
            wrong-return = { WRONG_RETURN() }
            throws = { THROWS() }
            FTL);
    }

    #[TestDox('it works for strings')]
    public function testStrings(): void
    {
        $this->assertTranslation('FooBar', 'strings');
    }

    #[TestDox('it works for numbers')]
    public function testNumbers(): void
    {
        $this->assertTranslation('3.5', 'numbers');
    }

    #[TestDox('it works for selectors')]
    public function testSelectors(): void
    {
        $this->assertTranslation('Options', 'selector');
    }

    #[TestDox('it works with named arguments')]
    public function testNamedArguments(): void
    {
        $this->assertTranslation('["test","value",123]', 'named-args');
    }

    #[TestDox('it preserves int and float types')]
    public function testPreserveNumeric(): void
    {
        $this->assertTranslation('int', 'int');
        $this->assertTranslation('float', 'float');
        $this->assertTranslation('float', 'float-trailing-zeroes');
    }

    #[TestDox("it preserves variable type when it's passed to function")]
    public function testPreserveAny(): void
    {
        $object = new class {
            public string $prop = 'Object property';
        };

        $this->assertTranslation('{"prop":"Object property"}', 'objects', ['object' => $object]);
    }

    #[TestDox('it converts unknown variables to null')]
    public function testUnknownToNull(): void
    {
        $this->assertTranslationErrors('null', [
            [ReferenceException::class, 'Unknown variable: $arg.'],
        ], 'unknown');
    }

    #[TestDox('it throws a type error when function returns wrong type')]
    public function testReturnType(): void
    {
        $this->assertTranslationErrors('{WRONG_RETURN()}', [
            [TypeException::class, 'Return value of WRONG_RETURN() must be of type string|Stringable, stdClass returned.'],
        ], 'wrong-return');
    }

    #[TestDox('it throws a function error when function throws')]
    public function testFunctionError(): void
    {
        $this->assertTranslationErrors('{THROWS()}', [
            [FunctionException::class, 'THROWS() function error: Something went wrong!'],
        ], 'throws');
    }
}
