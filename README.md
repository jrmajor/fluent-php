# jrmajor/fluent

<a href="https://github.com/jrmajor/fluent-php/actions?query=workflow%3ATests"><img src="https://img.shields.io/github/workflow/status/jrmajor/fluent-php/Tests?label=tests" alt="Build Status"></a>
<a href="https://codecov.io/gh/jrmajor/arbor"><img src="https://img.shields.io/codecov/c/gh/jrmajor/fluent-php" alt="Code Coverage Report"></a>
<a href="https://github.com/jrmajor/fluent-php/actions?query=workflow%3APHPStan"><img src="https://img.shields.io/github/workflow/status/jrmajor/fluent-php/PHPStan?label=phpstan" alt="Static Analysis Status"></a>
<a href="https://packagist.org/packages/jrmajor/fluent"><img src="https://img.shields.io/packagist/v/jrmajor/fluent.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/jrmajor/fluent"><img src="https://img.shields.io/packagist/php-v/jrmajor/fluent.svg" alt="Required PHP Version"></a>

A PHP implementation of [Project Fluent](https:/projectfluent.org), a localization system by Mozilla.

You can install it via composer: `composer require jrmajor/fluent`. It requires PHP 8.0 or higher.

## Testing

```shell
# Tests
vendor/bin/pest

# Static analysis
vendor/bin/phpstan analyse
```