<?php

namespace Major\Fluent\Tests;

uses(TestCase::class)->in(__DIR__);

expect()->extend('toBeException', function (string $class, string $message) {
    $this->toBeInstanceOf($class);

    expect($this->value->getMessage())->toBe($message);

    return $this;
});

expect()->extend('toHaveError', function (string $class, string $message) {
    $this->toHaveCount(1);

    expect($this->value[0])->toBeException($class, $message);

    return $this;
});
