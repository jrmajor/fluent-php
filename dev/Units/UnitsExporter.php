<?php

namespace Major\Fluent\Dev\Units;

use Major\Exporter as E;
use Major\Exporter\Exported;
use Major\Exporter\Exporters\Exporter;
use Major\Exporter\Exporters\Traits\IgnoresIndentation;
use Major\Exporter\Exporters\Traits\IsStringable;
use Major\Fluent\Formatters\Number\Locale\Unit;

final class UnitsExporter implements Exporter
{
    use IgnoresIndentation;
    use IsStringable;

    public function __construct(
        private readonly Unit $unit,
    ) { }

    public function export(): Exported
    {
        $c = $this->unit;

        $args = [];

        foreach ([
            'name',
            'long',
            'short',
            'narrow',
        ] as $name) {
            $args[] = E\join([$name . ': ', E\guess($c->{$name})->export()]);
        }

        $c = new Exported('U', new E\Imports([Unit::class . ' as U']));

        return E\join(['new ', $c, '(', E\join($args, ', '), ')']);
    }
}
