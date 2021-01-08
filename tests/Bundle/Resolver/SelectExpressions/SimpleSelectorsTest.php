<?php

use Major\Fluent\Bundle\FluentBundle;
use Major\Fluent\Exceptions\Resolver\ReferenceException;

$bundle = (new FluentBundle('en-US', useIsolating: false))
    ->addRaw(<<<'ftl'
    string-selector = { $selector ->
        [a] A
       *[b] B
    }
    number-selector = { $selector ->
        [0] A
       *[1] B
    }
    ftl);

it('falls back to default variant when selector is missing')
    ->expect($bundle->message('string-selector'))->toBe('B')
    ->and($bundle->popErrors())->toHaveError(
        ReferenceException::class, 'Unknown variable: $selector.',
    );

it('returns variant for matching string selector')
    ->expect($bundle->message('string-selector', selector: 'a'))->toBe('A')
    ->and($bundle->popErrors())->toBeEmpty();

it('falls back to default variant for non-matching string selector')
    ->expect($bundle->message('string-selector', selector: 'c'))->toBe('B')
    ->and($bundle->popErrors())->toBeEmpty();

it('returns variant for matching number selector')
    ->expect($bundle->message('number-selector', selector: 0))->toBe('A')
    ->and($bundle->popErrors())->toBeEmpty();

it('falls back to default variant for non-matching number selector')
    ->expect($bundle->message('number-selector', selector: 2))->toBe('B')
    ->and($bundle->popErrors())->toBeEmpty();
