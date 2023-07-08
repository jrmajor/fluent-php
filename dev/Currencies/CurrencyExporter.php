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
        $skippedArgument = false;

        if ($c->name !== $c->code) {
            $args[] = E\string($c->name)->export();
        } else {
            $skippedArgument = true;
        }

        if ($c->symbol !== $c->code) {
            $args[] = $skippedArgument
                ? E\join(['symbol: ', E\string($c->symbol)->export()])
                : E\string($c->symbol)->export();
        } else {
            $skippedArgument = true;
        }

        if ($c->narrow !== $c->code) {
            $args[] = $skippedArgument
                ? E\join(['narrow: ', E\string($c->narrow)->export()])
                : E\string($c->narrow)->export();
        } else {
            $skippedArgument = true;
        }

        if ($c->plurals) {
            $plurals = count($c->plurals) === 1 ? $c->plurals['other'] : $c->plurals;

            $args[] = $skippedArgument
                ? E\join(['plurals: ', E\guess($plurals)->export()])
                : E\guess($plurals)->export();
        } else {
            $skippedArgument = true;
        }

        if ($c->minorUnits !== 2) {
            $args[] = $skippedArgument
                ? E\join(['minorUnits: ', E\int($c->minorUnits)->export()])
                : E\int($c->minorUnits)->export();
        }

        $c = new Exported('C', new E\Imports([Currency::class . ' as C']));

        return E\join(['new ', $c, '(', E\join($args, ', '), ')']);
    }
}
