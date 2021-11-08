<?php

namespace Major\Fluent\Tests\Node;

use Major\Fluent\Node\Syntax\Attribute;
use Major\Fluent\Node\Syntax\Entries\Message;
use Major\Fluent\Node\Syntax\Identifier;
use Major\Fluent\Node\Syntax\Patterns\Pattern;
use Major\Fluent\Tests\TestCase;

final class NodeEqualsAssertionTest extends TestCase
{
    /**
     * @testdox assertNodeEquals assertion works
     */
    public function testAssertion(): void
    {
        $identifier = new Message(
            id: new Identifier('tst'),
            value: null,
            attributes: [
                new Attribute(
                    id: new Identifier('asef'),
                    value: new Pattern([]),
                ),
            ],
            comment: null,
        );

        $expected = [
            'type' => 'Message',
            'id' => [
                'type' => 'Identifier',
                'name' => 'tst',
                'span' => null,
            ],
            'span' => null,
            'value' => null,
            'comment' => null,
            'attributes' => [
                [
                    'type' => 'Attribute',
                    'id' => [
                        'type' => 'Identifier',
                        'name' => 'asef',
                        'span' => null,
                    ],
                    'value' => [
                        'type' => 'Pattern',
                        'elements' => [],
                        'span' => null,
                    ],
                    'span' => null,
                ],
            ],
        ];

        $this->assertNodeEquals(
            $expected, $identifier,
            spans: true,
            annotations: true,
        );
    }
}
