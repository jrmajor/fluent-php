<?php

namespace Major\Fluent\Tests\Bundle\Bundle;

use Major\Fluent\Bundle\FluentBundle;
use Major\Fluent\Exceptions\Bundle\MessageExistsException;
use Major\Fluent\Exceptions\Bundle\TermExistsException;
use Major\Fluent\Tests\TestCase;

final class AllowOverridesTest extends TestCase
{
    /**
     * @testdox it throws an error when allowOverrides is false for bundle (message)
     */
    public function testMessageThrows(): void
    {
        $this->expectException(MessageExistsException::class);
        $this->expectExceptionMessage('Attempt to override an existing message: key.');

        (new FluentBundle('en-US', allowOverrides: false))
            ->addFtl('key = Foo')
            ->addFtl('key = Bar');
    }

    /**
     * @testdox it throws an error when allowOverrides arg is false (message)
     */
    public function testMessageThrowsArg(): void
    {
        $this->expectException(MessageExistsException::class);
        $this->expectExceptionMessage('Attempt to override an existing message: key.');

        (new FluentBundle('en-US', allowOverrides: true))
            ->addFtl('key = Foo')
            ->addFtl('key = Bar', allowOverrides: false);
    }

    /**
     * @testdox it adds message when allowOverrides is true for bundle
     */
    public function testMessageOk(): void
        {
        $bundle = (new FluentBundle('en-US', allowOverrides: true))
            ->addFtl('key = Foo')
            ->addFtl('key = Bar');

        $this->assertTranslation('Bar', 'key', [], $bundle);
    }

    /**
     * @testdox it adds message when allowOverrides arg is true
     */
    public function testMessageOkArg(): void
    {
        $bundle = (new FluentBundle('en-US', allowOverrides: false))
            ->addFtl('key = Foo')
            ->addFtl('key = Bar', allowOverrides: true);

        $this->assertTranslation('Bar', 'key', [], $bundle);
    }

    /**
     * @testdox it throws an error when allowOverrides is false for bundle (term)
     */
    public function testTermThrows(): void
    {
        $this->expectException(TermExistsException::class);
        $this->expectExceptionMessage('Attempt to override an existing term: key.');

        (new FluentBundle('en-US', allowOverrides: false))
            ->addFtl('-key = Foo')
            ->addFtl('-key = Bar');
    }

    /**
     * @testdox it throws an error when allowOverrides arg is false (term)
     */
    public function testTermThrowsArg(): void
    {
        $this->expectException(TermExistsException::class);
        $this->expectExceptionMessage('Attempt to override an existing term: key.');

        (new FluentBundle('en-US', allowOverrides: true))
            ->addFtl('-key = Foo')
            ->addFtl('-key = Bar', allowOverrides: false);
    }

    /**
     * @testdox it adds term when allowOverrides is true for bundle
     */
    public function testTermOk(): void
    {
        $bundle = (new FluentBundle('en-US', allowOverrides: true))
            ->addFtl('foo = { -key }')
            ->addFtl('-key = Foo')
            ->addFtl('-key = Bar');

        $this->assertTranslation('Bar', 'foo', [], $bundle);
    }

    /**
     * @testdox it adds term when allowOverrides arg is true
     */
    public function testTermOkArg(): void
    {
        $bundle = (new FluentBundle('en-US', allowOverrides: false))
            ->addFtl('foo = { -key }')
            ->addFtl('-key = Foo')
            ->addFtl('-key = Bar', allowOverrides: true);

        $this->assertTranslation('Bar', 'foo', [], $bundle);
    }
}
