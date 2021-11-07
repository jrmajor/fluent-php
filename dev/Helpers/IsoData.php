<?php

namespace Major\Fluent\Dev\Helpers;

use Safe as s;
use SimpleXMLElement;

final class IsoData
{
    /** @var array<string, int> */
    private static array $minorUnits;

    public static function minorUnits(string $currency): int
    {
        if (! isset(self::$minorUnits)) {
            self::loadMinorUnits();
        }

        return self::$minorUnits[$currency] ?? 2;
    }

    private static function loadMinorUnits(): void
    {
        $xml = s\file_get_contents(__DIR__ . '/../ISO4217.xml');

        $xml = new SimpleXMLElement($xml);

        self::$minorUnits = [];

        foreach ($xml->CcyTbl->children() as $data) {
            $currency = (string) $data->Ccy;
            $minorUnits = (string) $data->CcyMnrUnts;

            if (! is_numeric($minorUnits)) {
                continue;
            }

            self::$minorUnits[$currency] = (int) $minorUnits;
        }
    }
}
