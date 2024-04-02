<?php

namespace Major\Fluent\Formatters;

use Major\Fluent\Formatters\Number\Locale\Currency;
use Major\Fluent\Formatters\Number\Locale\Locale;
use Major\Fluent\Formatters\Number\Locale\Unit;

/**
 * @internal
 *
 * @psalm-suppress UnresolvableInclude
 */
final class LocaleData
{
    private const Path = __DIR__ . '/../../locales/';

    public static function loadNumbers(string $locale): Locale
    {
        [$language, $region] = self::getLangAndRegionPaths('numbers', $locale);

        return require $region ?? $language;
    }

    /**
     * @return array<string, Currency>
     */
    public static function loadCurrencies(string $locale): array
    {
        [$language, $region] = self::getLangAndRegionPaths('currencies', $locale);

        return array_merge(
            require self::Path . 'currencies/und.php',
            require $language,
            $region !== null ? require $region : [],
        );
    }

    /**
     * @return array<string, Unit>
     */
    public static function loadUnits(string $locale): array
    {
        [$language, $region] = self::getLangAndRegionPaths('units', $locale);

        return array_merge(
            require $language,
            $region !== null ? require $region : [],
        );
    }

    /**
     * @return array{string, ?string}
     */
    private static function getLangAndRegionPaths(string $type, string $locale): array
    {
        [$language, $region] = self::splitLocale($locale);

        $files = self::getFiles($type, $language);

        $paths = [null, null];

        foreach ($files as $path) {
            $fileLocale = self::fileLocale($path);

            if ($region !== null && ($fileLocale === "{$language}-{$region}")) {
                $paths[1] = $path;
            } elseif ($fileLocale === $language) {
                $paths[0] = $path;
            }
        }

        if ($paths[0] === null) {
            throw new InvalidArgumentException("Unsupported locale: {$locale}.");
        }

        return $paths;
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
     * @return list<non-empty-string>
     *
     * @psalm-suppress LessSpecificReturnStatement, MoreSpecificReturnType
     */
    private static function getFiles(string $type, string $language): array
    {
        /** @phpstan-ignore-next-line */
        return glob(self::Path . "{$type}/{$language}*.php");
    }

    /**
     * @param non-empty-string $path
     *
     * @return non-empty-string
     */
    private static function fileLocale(string $path): string
    {
        /** @var positive-int $slashPosition */
        $slashPosition = strrpos($path, '/');

        /** @var non-empty-string */
        return strtolower(substr($path, $slashPosition + 1, -4));
    }

    /**
     * @return list<Locale>
     */
    public static function all(): array
    {
        $files = glob(self::Path . 'numbers/*.php');
        assert($files !== false);

        return array_map(fn (string $f): Locale => require $f, $files);
    }
}
