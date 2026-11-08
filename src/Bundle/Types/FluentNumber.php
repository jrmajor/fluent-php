<?php

namespace Major\Fluent\Bundle\Types;

use Major\Fluent\Formatters\Number\NumberFormatter;
use Major\Fluent\Formatters\Number\Options;
use Stringable;

final class FluentNumber implements Stringable
{
    private string $locale = 'en';

    /** @var array<string, mixed> */
    private array $options = [];

    /** @internal */
    public private(set) string $original {
        set(?string $original) {
            $this->original = $original ?? (
                is_float($this->value) && $this->value - round($this->value) === 0.0
                    ? $this->value . '.0'
                    : (string) $this->value
            );
        }
    }

    public function __construct(
        /** @internal */
        public private(set) int|float $value,
        ?string $original = null,
    ) {
        $this->original = $original;
    }

    /**
     * @internal
     *
     * @return $this
     */
    public function setLocale(string $locale): self
    {
        $this->locale = $locale;

        return $this;
    }

    /**
     * @param array<string, mixed> $options
     *
     * @return $this
     */
    public function setOptions(array $options): self
    {
        $this->options = array_merge($this->options, $options);

        return $this;
    }

    /**
     * @internal
     */
    public function __toString(): string
    {
        return new NumberFormatter($this->locale)->format(
            /** @phpstan-ignore argument.type */
            $this->value, new Options(...$this->options),
        );
    }
}
