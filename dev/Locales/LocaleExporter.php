<?php

namespace Major\Fluent\Dev\Locales;

use Major\Exporter as E;
use Major\Exporter\Exported;
use Major\Exporter\Exporters\Exporter;
use Major\Exporter\Exporters\Traits\IgnoresIndentation;
use Major\Exporter\Exporters\Traits\IsStringable;
use Major\Fluent\Dev\Helpers as H;
use Major\Fluent\Formatters\Number\Locale\Locale;

final class LocaleExporter implements Exporter
{
    use IgnoresIndentation;
    use IsStringable;

    public function __construct(
        private Locale $locale,
    ) { }

    public function export(): Exported
    {
        $l = $this->locale;

        $args = [E\string($l->name)->export()];

        if ($l->system !== H\LocaleDefaults::for('system')) {
            $args[] = E\join(['system: ', E\guess($l->system)->export()]);
        }

        if ($l->decimal !== H\LocaleDefaults::for('decimal')) {
            $args[] = E\join(['decimal: ', E\guess($l->decimal)->export()]);
        }

        if ($l->percent !== H\LocaleDefaults::for('percent')) {
            $args[] = E\join(['percent: ', E\guess($l->percent)->export()]);
        }

        if ($l->currency !== H\LocaleDefaults::for('currency')) {
            $args[] = E\join(['currency: ', E\guess($l->currency)->export()]);
        }

        if ($l->grouping !== H\LocaleDefaults::for('grouping')) {
            $args[] = E\join(['grouping: ', E\guess($l->grouping)->export()]);
        }

        if ($l->symbols !== H\LocaleDefaults::for('symbols')) {
            $args[] = E\join(['symbols: ', E\guess($l->symbols)->export()]);
        }

        if ($l->unitPatterns !== []) {
            $args[] = E\join(['unitPatterns: ', E\guess($l->unitPatterns)->export()]);
        }

        return E\join(['new ', Locale::class, '(', E\join($args, ', '), ')']);
    }
}
