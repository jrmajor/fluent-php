<?php

$skips = [
    // Broken Attributes break the entire Entry right now.
    // https://github.com/projectfluent/fluent.js/issues/237
    'leading_dots',
];

beforeEach(function () use ($skips) {
    $test = $this->getProvidedData()[0];

    if(in_array($test, $skips, strict: true)) {
        $this->markTestSkipped();
    }

    $this->parser = new Major\Fluent\Parser\FluentParser();
});

test('reference test', function (string $test) {
    $source = file_get_contents(__DIR__."/../fixtures/reference/{$test}.ftl");

    $expectedAst = json_decode(
        file_get_contents(__DIR__."/../fixtures/reference/{$test}.json"),
        associative: true,
        flags: JSON_THROW_ON_ERROR,
    );

    $resource = $this->parser->parse($source);

    $this->assertNodeEquals(
        $expectedAst, $resource,
        spans: false,
        annotations: false,
    );
})->with([
    'any_char',
    'astral',
    'call_expressions',
    'callee_expressions',
    'comments',
    'cr',
    'crlf',
    'eof_comment',
    'eof_empty',
    'eof_id',
    'eof_id_equals',
    'eof_junk',
    'eof_value',
    'escaped_characters',
    'junk',
    'leading_dots',
    'literal_expressions',
    'member_expressions',
    'messages',
    'mixed_entries',
    'multiline_values',
    'numbers',
    'obsolete',
    'placeables',
    'reference_expressions',
    'select_expressions',
    'select_indent',
    'sparse_entries',
    'special_chars',
    'tab',
    'term_parameters',
    'terms',
    'variables',
    'variant_keys',
    'whitespace_in_value',
    'zero_length',
]);
