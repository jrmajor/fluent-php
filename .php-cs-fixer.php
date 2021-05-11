<?php

$finder = Symfony\Component\Finder\Finder::create()
    ->notPath('src/PluralRules/rules.php')
    ->notPath('vendor')
    ->in(__DIR__)
    ->name('*.php')
    ->ignoreDotFiles(true)
    ->ignoreVCS(true);

return (new PhpCsFixer\Config())
    ->setRules([
        '@PSR12' => true,

        // Alias
        'backtick_to_shell_exec' => true,
        'no_alias_language_construct_call' => true,
        'no_mixed_echo_print' => true,

        // Array Notation
        'array_syntax' => true,
        'no_multiline_whitespace_around_double_arrow' => true,
        'no_trailing_comma_in_singleline_array' => true,
        'no_whitespace_before_comma_in_array' => true,
        'normalize_index_brace' => true,
        'trim_array_spaces' => true,
        'whitespace_after_comma_in_array' => true,

        // Basic
        'braces' => false,

        // Casing
        'magic_constant_casing' => true,
        'magic_method_casing' => true,
        'native_function_casing' => true,
        'native_function_type_declaration_casing' => true,

        // Cast Notation
        'cast_spaces' => true,
        'no_short_bool_cast' => true,
        'no_unset_cast' => true,

        // Class Notation
        'class_attributes_separation' => true,
        'class_definition' => false,
        'ordered_class_elements' => [
            'order' => ['use_trait', 'constant', 'property', 'method', 'magic'],
        ],
        'self_static_accessor' => true,

        // Comment
        'multiline_comment_opening_closing' => true,
        'single_line_comment_style' => true,

        // Control Structure
        'include' => true,
        'no_alternative_syntax' => true,
        'no_superfluous_elseif' => true,
        'no_trailing_comma_in_list_call' => true,
        'no_unneeded_control_parentheses' => [
            'statements' => ['break', 'clone', 'continue', 'echo_print', 'return', 'switch_case', 'yield', 'yield_from'],
        ],
        'no_unneeded_curly_braces' => true,
        'switch_continue_to_break' => true,
        'trailing_comma_in_multiline' => [
            'after_heredoc' => true,
            'elements' => ['arrays', 'arguments', 'parameters'],
        ],

        // Function Notation
        'function_typehint_space' => true,
        'lambda_not_used_import' => true,
        'method_argument_space' => ['on_multiline' => 'ignore'],
        'nullable_type_declaration_for_default_null_value' => [
            'use_nullable_type_declaration' => false,
        ],

        // Import
        'fully_qualified_strict_types' => true,
        'global_namespace_import' => true,
        'no_unused_imports' => true,
        'ordered_imports' => [
            'imports_order' => ['class', 'function', 'const'],
            'sort_algorithm' => 'alpha',
        ],

        // Language Construct
        'combine_consecutive_issets' => true,
        'combine_consecutive_unsets' => true,
        'explicit_indirect_variable' => true,
        'single_space_after_construct' => true,

        // List Notation
        'list_syntax' => true,

        // Namespace Notation
        'clean_namespace' => true,
        'no_leading_namespace_whitespace' => true,

        // Operator
        'binary_operator_spaces' => [
            'operators' => ['|' => null],
        ],
        'concat_space' => true,
        'increment_style' => ['style' => 'post'],
        'not_operator_with_successor_space' => true,
        'object_operator_without_whitespace' => true,
        'operator_linebreak' => true,
        'standardize_increment' => true,
        'standardize_not_equals' => true,
        'ternary_to_null_coalescing' => true,
        'unary_operator_spaces' => true,

        // PHP Tag
        'echo_tag_syntax' => true,
        'linebreak_after_opening_tag' => true,

        // PHPDoc
        'align_multiline_comment' => true,
        'general_phpdoc_tag_rename' => [
            'replacements' => ['inheritDocs' => 'inheritDoc'],
        ],
        'no_empty_phpdoc' => true,
        'no_superfluous_phpdoc_tags' => [
            'allow_mixed' => true,
            'allow_unused_params' => true,
        ],
        'phpdoc_align' => [
            'tags' => ['param', 'property', 'property-read', 'property-write', 'return', 'throws', 'type', 'var', 'method'],
            'align' => 'left',
        ],
        'phpdoc_annotation_without_dot' => true,
        'phpdoc_indent' => true,
        'phpdoc_inline_tag_normalizer' => true,
        'phpdoc_line_span' => ['const' => 'single', 'property' => 'single'],
        'phpdoc_no_access' => true,
        'phpdoc_no_alias_tag' => [
            'replacements' => ['type' => 'var', 'link' => 'see'],
        ],
        'phpdoc_no_empty_return' => true,
        'phpdoc_no_package' => true,
        'phpdoc_no_useless_inheritdoc' => true,
        'phpdoc_return_self_reference' => true,
        'phpdoc_scalar' => true,
        'phpdoc_single_line_var_spacing' => true,
        'phpdoc_tag_casing' => true,
        'phpdoc_trim_consecutive_blank_line_separation' => true,
        'phpdoc_trim' => true,
        'phpdoc_types' => true,
        'phpdoc_types_order' => [
            'sort_algorithm' => 'none',
            'null_adjustment' => 'always_last',
        ],
        'phpdoc_var_annotation_correct_order' => true,
        'phpdoc_var_without_name' => true,

        // Return Notation
        // 'no_useless_return' => true,
        'simplified_null_return' => true,

        // Semicolon
        'multiline_whitespace_before_semicolons' => true,
        'no_empty_statement' => true,
        'no_singleline_whitespace_before_semicolons' => true,
        'semicolon_after_instruction' => true,
        'space_after_semicolon' => ['remove_in_empty_for_expressions' => true],

        // String Notation
        'escape_implicit_backslashes' => ['single_quoted' => true],
        'explicit_string_variable' => true,
        'heredoc_to_nowdoc' => true,
        'no_binary_string' => true,
        'simple_to_complex_string_variable' => true,
        'single_quote' => true,

        // Whitespace
        'array_indentation' => true,
        'blank_line_before_statement' => ['statements' => [
            'continue', 'declare', 'do', 'exit', 'for', 'foreach', 'if', 'include', 'include_once', 'require', 'require_once', 'return', 'switch', 'throw', 'try', 'while', 'yield', 'yield_from',
        ]],
        'heredoc_indentation' => true,
        'no_extra_blank_lines' => [
            'tokens' => ['break', 'case', 'continue', 'curly_brace_block', 'default', 'extra', 'parenthesis_brace_block', 'switch', 'use'],
        ],
        'no_spaces_around_offset' => true,
    ])
    ->setFinder($finder);
