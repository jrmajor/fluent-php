<?php

namespace Major\Fluent\Dev\Units;

use Major\Exporter as E;
use Major\Exporter\Exported;
use Major\Exporter\Exporters\Exporter;
use Major\Exporter\Exporters\Traits\IgnoresIndentation;
use Major\Exporter\Exporters\Traits\IsStringable;
use Major\Fluent\Formatters\Number\Locale\Unit;

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

        $args = [
            E\guess($u->longPlurals)->export(),
            E\guess($u->shortPlurals)->export(),
            E\guess($u->narrowPlurals)->export(),
        ];

        $u = new Exported('U', new E\Imports([Unit::class . ' as U']));

        return E\join(['new ', $u, '(', E\join($args, ', '), ')']);
    }
}
