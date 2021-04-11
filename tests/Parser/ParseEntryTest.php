<?php

use Major\Fluent\Parser\FluentParser;

beforeEach(fn () => $this->parser = new FluentParser());

it('can parse simple message', function () {
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

    $message = $this->parser
        ->parseEntry('foo = Foo');

    $this->assertNodeEquals($expected, $message);
});

it('ignores attached comment', function () {
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

    $message = $this->parser
        ->parseEntry("# Attached Comment\nfoo = Foo");

    $this->assertNodeEquals($expected, $message);
});

it('returns junk', function () {
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

    $junk = $this->parser
        ->parseEntry("# Attached Comment\njunk");

    $this->assertNodeEquals($expected, $junk);
});

it('ignores all valid comments', function () {
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
  });

it('does not ignore invalid comments', function () {
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
});
