<?php

namespace Major\Fluent\Dev\Locales;

use Major\Exporter as E;
use Major\Exporter\Exported;
use Major\Exporter\Exporters\Exporter;
use Major\Exporter\Exporters\Traits\IgnoresIndentation;
use Major\Exporter\Exporters\Traits\IsStringable;
use Major\Fluent\Formatters\Number\Locale\Locale;

final class LocaleExporter implements Exporter
{
    use IgnoresIndentation;
    use IsStringable;

    public function __construct(
        private readonly Locale $locale,
    ) { }

    public function export(): Exported
    {
        $defaults = new Locale();
        $l = $this->locale;

        $args = [];

        if ($l->system !== $defaults->system) {
            $args[] = E\join(['system: ', E\guess($l->system)->export()]);
        }

        if ($l->decimal !== $defaults->decimal) {
            $args[] = E\join(['decimal: ', E\guess($l->decimal)->export()]);
        }

        if ($l->percent !== $defaults->percent) {
            $args[] = E\join(['percent: ', E\guess($l->percent)->export()]);
        }

        if ($l->currency !== $defaults->currency) {
            $args[] = E\join(['currency: ', E\guess($l->currency)->export()]);
        }

        if ($l->grouping !== $defaults->grouping) {
            $args[] = E\join(['grouping: ', E\guess($l->grouping)->export()]);
        }

        if ($l->symbols !== $defaults->symbols) {
            $args[] = E\join(['symbols: ', E\guess($l->symbols)->export()]);
        }

        if ($l->unitPatterns !== []) {
            $args[] = E\join(['unitPatterns: ', E\guess($l->unitPatterns)->export()]);
        }

        return E\join(['new ', Locale::class, '(', E\join($args, ', '), ')']);
    }
}
