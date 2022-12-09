<?php

namespace Major\Fluent\Tests\Formatters\Number;

use Major\Fluent\Formatters\Number\Locale\Locale;
use PHPUnit\Framework\Assert as PU;
use Psl\Filesystem;

final class LocaleData
{
    /** @var list<Locale> */
    private static array $locales = [];

    /**
     * @return list<Locale>
     */
    public static function all(): array
    {
        if (self::$locales !== []) {
            return self::$locales;
        }

        $localeFiles = Filesystem\read_directory(__DIR__ . '/../../../locales/numbers');

        foreach ($localeFiles as $localeFile) {
            /** @psalm-suppress UnresolvableInclude */
            self::$locales[] = require $localeFile;
        }

        PU::assertCount(394, self::$locales);

        return self::$locales;
    }
}
