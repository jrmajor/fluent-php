<?php

namespace Major\Fluent\Formatters;

use InvalidArgumentException;
use Major\Fluent\Exceptions\ShouldNotHappen;
use Major\Fluent\Formatters\Number\Locale\Currency;
use Major\Fluent\Formatters\Number\Locale\Locale;

/**
 * @internal
 */
final class LocaleData
{
    private const PATH = __DIR__ . '/../../locales/';

    public static function loadNumbers(string $locale): Locale
    {
        [$language, $region] = self::getLangAndRegionPaths('numbers', $locale);

        if ($region !== null) {
            return require $region;
        }

        return require $language;
    }

    /**
     * @return array<string, Currency>
     */
    public static function loadCurrencies(string $locale): array
    {
        [$language, $region] = self::getLangAndRegionPaths('currencies', $locale);

        if ($region !== null) {
            return require $region;
        }

        return require $language;
    }

    /**
     * @return array{string, ?string}
     */
    public static function getLangAndRegionPaths(string $type, string $locale): array
    {
        [$language, $region] = self::splitLocale($locale);

        $files = self::getFiles($type, $language);

        $paths = [null, null];

        foreach ($files as $path) {
            $fileLocale = strtolower(substr($path, strrpos($path, '/') + 1, -4));

            if ($region !== null && $fileLocale === "{$language}-{$region}") {
                $paths[1] = $path;
            } elseif ($fileLocale === $language) {
                $paths[0] = $path;
            }

            if ($paths[0] !== null && ($region === null && $paths[1] !== null)) {
                return $paths;
            }
        }

        if ($paths[0] !== null) {
            return $paths;
        }

        throw new InvalidArgumentException("Unsupported locale: {$locale}.");
    }

    /**
     * @return array{string, ?string}
     */
    private static function splitLocale(string $locale): array
    {
        $parts = explode('-', strtolower($locale), 2);

        return [$parts[0], $parts[1] ?? null];
    }

    /**
     * @return string[]
     */
    protected static function getFiles(string $type, string $language): array
    {
        $files = glob(self::PATH . "{$type}/{$language}*.php");

        if ($files === false) {
            throw new ShouldNotHappen();
        }

        return $files;
    }
}
