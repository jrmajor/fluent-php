<?php

namespace Major\Fluent\Tests;

use PHPUnit\Framework\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use AstAssertions;
    use NodeAssertions;
}
