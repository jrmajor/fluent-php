<?php

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__)
    ->ignoreVCS(true);

return Major\CS\config($finder, [
    // Remove constructor, wanted to have it after public methods when it's private.
    'ordered_class_elements' => [
        'order' => ['use_trait', 'constant', 'property', 'method', 'magic'],
    ],
    'phpdoc_summary' => false,
    'no_unused_imports' => false,
    PhpCsFixerCustomFixers\Fixer\StringableInterfaceFixer::name() => false,
    // Remove throw from tokens, removes blank line when throw is used as an expression.
    'no_extra_blank_lines' => [
        'tokens' => ['case', 'continue', 'curly_brace_block', 'default', 'extra', 'parenthesis_brace_block', 'switch'],
    ],
]);
