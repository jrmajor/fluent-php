<?php

namespace Major\Fluent\Dev\Helpers;

use Psl\File;
use Psl\Str;
use SimpleXMLElement;

final class IsoData
{
    /** @var ?array<string, int> */
    private static ?array $minorUnits = null;

    public static function minorUnits(string $currency): int
    {
        if (self::$minorUnits === null) {
            self::loadMinorUnits();
        }

        return self::$minorUnits[$currency] ?? 2;
    }

    private static function loadMinorUnits(): void
    {
        $xml = File\read(__DIR__ . '/../ISO4217.xml');

        $xml = new SimpleXMLElement($xml);

        self::$minorUnits = [];

        foreach ($xml->CcyTbl->children() as $data) {
            $currency = (string) $data->Ccy;
            $minorUnits = Str\to_int((string) $data->CcyMnrUnts);

            if ($minorUnits === null) {
                continue;
            }

            self::$minorUnits[$currency] = $minorUnits;
        }
    }
}
