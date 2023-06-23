<?php

namespace Major\Fluent\Dev\Currencies;

use Major\Exporter as E;
use Major\Exporter\Exported;
use Major\Exporter\Exporters\Exporter;
use Major\Exporter\Exporters\Traits\IgnoresIndentation;
use Major\Exporter\Exporters\Traits\IsStringable;
use Major\Fluent\Formatters\Number\Locale\Currency;

final class CurrencyExporter implements Exporter
{
    use IgnoresIndentation;
    use IsStringable;

    public function __construct(
        private readonly Currency $currency,
    ) { }

    public function export(): Exported
    {
        $c = $this->currency;

        $args = [E\string($c->code)->export()];

        if ($c->name !== $c->code && $c->symbol !== $c->code) {
            $args[] = E\string($c->name)->export();
            $args[] = E\string($c->symbol)->export();
        } elseif ($c->name !== $c->code) {
            $args[] = E\string($c->name)->export();
        } elseif ($c->symbol !== $c->code) {
            $args[] = E\join(['symbol: ', E\string($c->symbol)->export()]);
        }

        if ($c->narrow !== $c->code) {
            $args[] = E\join(['narrow: ', E\string($c->narrow)->export()]);
        }

        if ($c->plurals) {
            $plurals = count($c->plurals) === 1 ? $c->plurals['other'] : $c->plurals;
            $args[] = E\join(['plurals: ', E\guess($plurals)->export()]);
        }

        if ($c->minorUnits !== 2) {
            $args[] = E\join(['minorUnits: ', E\int($c->minorUnits)->export()]);
        }

        $c = new Exported('C', new E\Imports([Currency::class . ' as C']));

        return E\join(['new ', $c, '(', E\join($args, ', '), ')']);
    }
}
