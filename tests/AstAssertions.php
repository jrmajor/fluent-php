<?php

namespace Major\Fluent\Tests;

use InvalidArgumentException;
use Major\Fluent\Node\BaseNode;
use Major\Fluent\Node\Syntax\Annotation;

/**
 * @mixin TestCase
 */
trait AstAssertions
{
    private static bool $spans;

    private static bool $annotations;

    /**
     * @param array<mixed, mixed> $expected
     */
    public static function assertNodeEquals(
        array $expected,
        BaseNode $node,
        bool $spans = false,
        bool $annotations = false,
    ): void {
        self::$spans = $spans;

        self::$annotations = $annotations;

        if (! array_key_exists('type', $expected)) {
            throw new InvalidArgumentException('Expected root node should have specified type.');
        }

        if ($expected['type'] === 'Resource') {
            $expected['type'] = 'FluentResource';
        }

        self::assertSame($expected['type'], $node->getType(), 'Root node type does not match.');

        self::compareNodeData($expected, $node, $node->getType());
    }

    /**
     * @param array<mixed, mixed> $expected
     */
    private static function compareNodeData(array $expected, BaseNode $node, string $trace): void
    {
        foreach (self::scalarsToCompare($node) as $scalar) {
            if (! array_key_exists($scalar, $expected)) {
                throw new InvalidArgumentException("Expected node {$trace} should contain scalar \${$scalar}.");
            }

            self::assertSame($expected[$scalar], $node->{$scalar}, "Scalar {$trace}::\${$scalar} does not match.");
        }

        foreach (self::subnodesToCompare($node) as $subnode) {
            if (! array_key_exists($subnode, $expected)) {
                throw new InvalidArgumentException("Expected node {$trace} should contain subnode \${$subnode}.");
            }

            if (! is_array($expected[$subnode]) && ! is_null($expected[$subnode])) {
                throw new InvalidArgumentException("Expected property {$trace}::\${$subnode} should be node, but it is scalar.");
            }

            self::compareSubnode($expected[$subnode], $node->{$subnode}, "{$trace}::\${$subnode}");
        }

        foreach (self::arraysOfNodesToCompare($node) as $array) {
            if (! array_key_exists($array, $expected)) {
                throw new InvalidArgumentException("Expected node {$trace} should contain array \${$array}.");
            }

            if (! is_array($expected[$array])) {
                throw new InvalidArgumentException("Expected property {$trace}::\${$array} should be array.");
            }

            self::compareArrayOfNodes($expected[$array], $node->{$array}, "{$trace}::\${$array}");
        }

        if ($node instanceof Annotation) {
            if (! array_key_exists('arguments', $expected)) {
                throw new InvalidArgumentException("Expected node {$trace} should contain array \$arguments.");
            }

            if (! is_array($expected['arguments'])) {
                throw new InvalidArgumentException("Expected property {$trace}::\$arguments should be array.");
            }

            self::assertSame($expected['arguments'], $node->getArguments());
        }
    }

    /**
     * @param ?array<mixed, mixed> $expected
     */
    private static function compareSubnode(?array $expected, ?BaseNode $node, string $trace): void
    {
        if ($expected === null) {
            self::assertNull($node, "Expected optional subnode {$trace} to be null.");

            return;
        }

        if (! array_key_exists('type', $expected)) {
            throw new InvalidArgumentException("Expected node {$trace} should have specified type.");
        }

        self::assertNotNull($node, "Expected node {$trace} to be {$expected['type']}, but it is null.");

        self::assertSame(
            $expected['type'], $node->getType(),
            "Expected node {$trace} to be {$expected['type']}, but it is {$node->getType()}",
        );

        self::compareNodeData($expected, $node, "{$trace}<{$node->getType()}>");
    }

    /**
     * @param list<mixed> $expected
     * @param list<BaseNode> $actual
     */
    private static function compareArrayOfNodes(array $expected, array $actual, string $trace): void
    {
        self::assertSame(
            $expectedCount = count($expected),
            $actualCount = count($actual),
            "Expected array {$trace} to have {$expectedCount} elements, but it has {$actualCount}.",
        );

        foreach ($expected as $key => $expectedNode) {
            if (! is_array($expectedNode)) {
                throw new InvalidArgumentException("Expected subnode {$trace}[{$key}] should be node, but it is scalar.");
            }

            self::compareSubnode($expectedNode, $actual[$key], "{$trace}[{$key}]");
        }
    }

    /**
     * @return list<string>
     */
    private static function scalarsToCompare(BaseNode $node): array
    {
        return match ($node->getType()) {
            'Span' => ['start', 'end'],
            'Annotation' => ['code', 'message'],
            'Identifier' => ['name'],
            'Junk', 'Comment', 'GroupComment', 'ResourceComment' => ['content'],
            'Variant' => ['default'],
            'NumberLiteral', 'StringLiteral', 'TextElement' => ['value'],
            default => [],
        };
    }

    /**
     * @return list<string>
     */
    private static function subnodesToCompare(BaseNode $node): array
    {
        $subnodes = match ($node->getType()) {
            'Attribute' => ['id', 'value'],
            'NamedArgument' => ['name', 'value'],
            'Variant' => ['key', 'value'],
            'Message', 'Term' => ['id', 'value', 'comment'],
            'FunctionReference' => ['id', 'arguments'],
            'MessageReference' => ['id', 'attribute'],
            'SelectExpression' => ['selector'],
            'TermReference' => ['id', 'attribute', 'arguments'],
            'VariableReference' => ['id'],
            'Placeable' => ['expression'],
            default => [],
        };

        if (self::$spans && $node->getType() !== 'Span') {
            $subnodes[] = 'span';
        }

        return $subnodes;
    }

    /**
     * @return list<string>
     */
    private static function arraysOfNodesToCompare(BaseNode $node): array
    {
        return match ($node->getType()) {
            'CallArguments' => ['positional', 'named'],
            'Junk' => self::$annotations ? ['annotations'] : [],
            'FluentResource' => ['body'],
            'Message', 'Term' => ['attributes'],
            'SelectExpression' => ['variants'],
            'Pattern' => ['elements'],
            default => [],
        };
    }
}
