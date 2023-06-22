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

        $args = [];

        foreach (['long', 'short', 'narrow'] as $name) {
            $args[] = E\join([$name . ': ', E\guess($u->{$name})->export()]);
        }

        $u = new Exported('U', new E\Imports([Unit::class . ' as U']));

        return E\join(['new ', $u, '(', E\join($args, ', '), ')']);
    }
}
