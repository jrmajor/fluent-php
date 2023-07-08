<?php

namespace Major\Fluent\Dev\Units;

use Major\Exporter as E;
use Major\Exporter\Exported;
use Major\Exporter\Exporters\Exporter;
use Major\Exporter\Exporters\Traits\IgnoresIndentation;
use Major\Exporter\Exporters\Traits\IsStringable;
use Major\Fluent\Formatters\Number\Locale\Unit;
use Psl\Vec;

final class UnitExporter implements Exporter
{
    use IgnoresIndentation;
    use IsStringable;

    public function __construct(
        private readonly Unit $unit,
    ) { }

    public function export(): Exported
    {
        $u = $this->unit;

        $args = Vec\map([
            count($u->longPlurals) === 1 ? $u->longPlurals['other'] : $u->longPlurals,
            count($u->shortPlurals) === 1 ? $u->shortPlurals['other'] : $u->shortPlurals,
            count($u->narrowPlurals) === 1 ? $u->narrowPlurals['other'] : $u->narrowPlurals,
        ], fn ($v) => E\guess($v)->export());

        $u = new Exported('U', new E\Imports([Unit::class . ' as U']));

        return E\join(['new ', $u, '(', E\join($args, ', '), ')']);
    }
}
