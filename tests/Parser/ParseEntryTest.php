<?php

namespace Major\Fluent\Tests\Parser;

use Major\Fluent\Parser\FluentParser;
use Major\Fluent\Tests\TestCase;
use PHPUnit\Framework\Attributes\TestDox;

final class ParseEntryTest extends TestCase
{
    private FluentParser $parser;

    protected function setUp(): void
    {
        parent::setUp();

        $this->parser = new FluentParser(true);
    }

    #[TestDox('it can parse simple message')]
    public function testMessage(): void
    {
        $expected = [
            'type' => 'Message',
            'id' => [
                'type' => 'Identifier',
                'name' => 'foo',
            ],
            'value' => [
                'type' => 'Pattern',
                'elements' => [
                    [
                        'type' => 'TextElement',
                        'value' => 'Foo',
                    ],
                ],
            ],
            'attributes' => [],
            'comment' => null,
        ];

        $message = $this->parser->parseEntry('foo = Foo');

        $this->assertNodeEquals($expected, $message);
    }

    #[TestDox('it ignores attached comment')]
    public function testAttachedComment(): void
    {
        $expected = [
            'type' => 'Message',
            'id' => [
                'type' => 'Identifier',
                'name' => 'foo',
            ],
            'value' => [
                'type' => 'Pattern',
                'elements' => [
                    [
                        'type' => 'TextElement',
                        'value' => 'Foo',
                    ],
                ],
            ],
            'attributes' => [],
            'comment' => null,
        ];

        $message = $this->parser->parseEntry("# Attached Comment\nfoo = Foo");

        $this->assertNodeEquals($expected, $message);
    }

    #[TestDox('it returns junk')]
    public function testJunk(): void
    {
        $expected = [
            'type' => 'Junk',
            'content' => 'junk',
            'annotations' => [
                [
                    'type' => 'Annotation',
                    'code' => 'E0003',
                    'message' => 'Expected token: "="',
                    'arguments' => ['='],
                ],
            ],
        ];

        $junk = $this->parser->parseEntry("# Attached Comment\njunk");

        $this->assertNodeEquals($expected, $junk);
    }

    #[TestDox('it ignores all valid comments')]
    public function testValidComments(): void
    {
        $input = <<<'ftl'
            # Attached Comment
            ## Group Comment
            ### Resource Comment
            foo = Foo
            ftl;

        $expected = [
            'type' => 'Message',
            'id' => [
                'type' => 'Identifier',
                'name' => 'foo',
            ],
            'value' => [
                'type' => 'Pattern',
                'elements' => [
                    [
                        'type' => 'TextElement',
                        'value' => 'Foo',
                    ],
                ],
            ],
            'attributes' => [],
            'comment' => null,
        ];

        $message = $this->parser->parseEntry($input);

        $this->assertNodeEquals($expected, $message);
    }

    #[TestDox('it does not ignore invalid comments')]
    public function testInvalidComments(): void
    {
        $expected = [
            'type' => 'Junk',
            'content' => '##Invalid Comment',
            'annotations' => [
                [
                    'type' => 'Annotation',
                    'code' => 'E0003',
                    'message' => 'Expected token: " "',
                    'arguments' => [' '],
                ],
            ],
        ];

        $message = $this->parser
            ->parseEntry("# Attached Comment\n##Invalid Comment");

        $this->assertNodeEquals($expected, $message);
    }
}
