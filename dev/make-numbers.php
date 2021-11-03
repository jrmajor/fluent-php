<?php

declare(strict_types=1);

namespace Major\Fluent\Dev;

use Exception;
use Symfony\Component\Finder\Finder;
use Symfony\Component\Finder\SplFileInfo;

require __DIR__ . '/../vendor/autoload.php';

// Register error handler
(new \NunoMaduro\Collision\Provider())->register();

$start = microtime(true);

foreach (glob(__DIR__ . '/../locales/numbers/*.php') ?: throw new Exception() as $file) {
    unlink($file);
}

$locales = (new Finder())
    ->in([__DIR__ . '/../node_modules/cldr-numbers-modern/main'])
    ->directories();

$locales = array_map(
    fn (SplFileInfo $f) => $f->getFilename(),
    iterator_to_array($locales),
);

foreach ($locales as $locale) {
    (new NumbersLocaleCompiler($locale))->make();
    (new CurrenciesLocaleCompiler($locale))->make();
}

echo 'Generated in ' . round(microtime(true) - $start, 2) . "s\n";
