<?php

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__)
    ->ignoreVCS(true);

return Major\CS\config($finder, [
    // Remove constructor, wanted to have it after public methods when it's private.
    'ordered_class_elements' => [
        'order' => ['use_trait', 'constant', 'property', 'method', 'magic'],
    ],
    // Broken for @var PHPDocs.
    'phpdoc_summary' => false,
    // Remove throw, broken when using throw expressions inline after ?: or ??.
    'no_extra_blank_lines' => [
        'tokens' => ['break', 'case', 'continue', 'curly_brace_block', 'default', 'extra', 'parenthesis_brace_block', 'switch', 'use'],
    ],
]);
