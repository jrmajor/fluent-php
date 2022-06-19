<?php

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__)
    ->append(['gen'])
    ->ignoreVCSIgnored(true);

return Major\CS\config($finder, [
    // Remove constructor, wanted to have it after public methods when it's private.
    'ordered_class_elements' => [
        'order' => ['use_trait', 'constant', 'property', 'method', 'magic'],
    ],
    'phpdoc_summary' => false,
])->setCacheFile('.cache/.php-cs-fixer.cache');
