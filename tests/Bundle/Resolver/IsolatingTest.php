<?php

/**
 * Unicode BiDi isolation characters:
 * FSI U+2068
 * PDI U+2069
 */

use Major\Fluent\Bundle\FluentBundle;

$bundle = (new FluentBundle('en-US', strict: true))
    ->addRaw(<<<'ftl'
    foo = Foo
    bar = { foo } Bar
    baz = { $arg } Baz
    qux = { bar } { baz }

    -brand-short-name = Amaya
    skip-isolation = { -brand-short-name }
    ftl);

it('isolates interpolated message references')
    ->expect($bundle->message('bar'))->toBe("\u{2068}Foo\u{2069} Bar");

it('isolates interpolated string-typed variables')
    ->expect($bundle->message('baz', arg: 'Arg'))->toBe("\u{2068}Arg\u{2069} Baz");

it('isolates interpolated number-typed variables')
    ->expect($bundle->message('baz', arg: 1))->toBe("\u{2068}1\u{2069} Baz");

$expected = "\u{2068}\u{2068}Foo\u{2069} Bar\u{2069} \u{2068}\u{2068}Arg\u{2069} Baz\u{2069}";

it('isolates complex interpolations')
    ->expect($bundle->message('qux', arg: 'Arg'))->toBe($expected);

it('skips isolation if the only element is a placeable')
    ->expect($bundle->message('skip-isolation'))->toBe('Amaya');
