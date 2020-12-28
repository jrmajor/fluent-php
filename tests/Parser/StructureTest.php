<?php

$skips = [];

beforeEach(function () use ($skips) {
    $test = $this->getProvidedData()[0];

    if(in_array($test, $skips, strict: true)) {
        $this->markTestSkipped();
    }

    $this->parser = new Major\Fluent\Parser\FluentParser();
});

test('structure test', function (string $test) {
    $source = file_get_contents(__DIR__."/../fixtures/structure/{$test}.ftl");

    $expectedAst = json_decode(
        file_get_contents(__DIR__."/../fixtures/structure/{$test}.json"),
        associative: true,
        flags: JSON_THROW_ON_ERROR,
    );

    $resource = $this->parser->parse($source);

    $this->assertNodeEquals(
        $expectedAst, $resource,
        spans: true,
        annotations: true,
    );
})->with([
    'attribute_expression_with_wrong_attr',
    'attribute_of_private_as_placeable',
    'attribute_of_public_as_selector',
    'attribute_starts_from_nl',
    'attribute_with_empty_pattern',
    'attribute_without_equal_sign',
    'blank_lines',
    'broken_number',
    'call_expression_errors',
    'comment_with_eof',
    'crlf',
    'dash_at_eof',
    'elements_indent',
    'empty_resource',
    'empty_resource_with_ws',
    'escape_sequences',
    'expressions_call_args',
    'indent',
    'junk',
    'leading_dots',
    'leading_empty_lines',
    'leading_empty_lines_with_ws',
    'message_reference_as_selector',
    'message_with_empty_multiline_pattern',
    'message_with_empty_pattern',
    'multiline-comment',
    'multiline_pattern',
    'multiline_string',
    'multiline_with_non_empty_first_line',
    'multiline_with_placeables',
    'non_id_attribute_name',
    'placeable_at_eol',
    'placeable_at_line_extremes',
    'placeable_in_placeable',
    'placeable_without_close_bracket',
    'resource_comment',
    'resource_comment_trailing_line',
    'second_attribute_starts_from_nl',
    'select_expression_with_two_selectors',
    'select_expression_without_arrow',
    'select_expression_without_variants',
    'select_expressions',
    'simple_message',
    'single_char_id',
    'sparse-messages',
    'standalone_comment',
    'standalone_identifier',
    'term',
    'term_with_empty_pattern',
    'unclosed',
    'unclosed_empty_placeable_error',
    'unknown_entry_start',
    'variant_ends_abruptly',
    'variant_keys',
    'variant_starts_from_nl',
    'variant_with_digit_key',
    'variant_with_empty_pattern',
    'variant_with_leading_space_in_name',
    'variant_with_symbol_with_space',
    'variants_with_two_defaults',
    'whitespace_leading',
    'whitespace_trailing',
]);
