# jrmajor/fluent

<a href="https://github.com/jrmajor/fluent-php/actions?query=workflow%3ATests"><img src="https://img.shields.io/github/workflow/status/jrmajor/fluent-php/Tests?label=tests" alt="Build Status"></a>
<a href="https://codecov.io/gh/jrmajor/arbor"><img src="https://img.shields.io/codecov/c/gh/jrmajor/fluent-php" alt="Code Coverage Report"></a>
<a href="https://github.com/jrmajor/fluent-php/actions?query=workflow%3APHPStan"><img src="https://img.shields.io/github/workflow/status/jrmajor/fluent-php/PHPStan?label=phpstan" alt="Static Analysis Status"></a>
<a href="https://packagist.org/packages/jrmajor/fluent"><img src="https://img.shields.io/packagist/v/jrmajor/fluent.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/jrmajor/fluent"><img src="https://img.shields.io/packagist/php-v/jrmajor/fluent.svg" alt="Required PHP Version"></a>

A PHP implementation of [Project Fluent](https://projectfluent.org), a localization system by Mozilla.

You can install it via composer: `composer require jrmajor/fluent`. It requires PHP 8.0 or higher.

## Usage

### Parsing

```php
use Major\Fluent\Parser\FluentParser;

$parser = new FluentParser(strict: true);

$resource = $parser->parse('hello-user = Hello, { $userName }!');
```

`$strict` constructor argument defaults to `false`. In strict mode syntax errors result in a `ParserException`. Otherwise they are ignored and represented in AST by `Junk`.

### Message formatting

```php
use Major\Fluent\Bundle\FluentBundle;

$bundle = new FluentBundle('en', strict: true);

$bundle->addResource($resource);
// or
$bundle->addFtl('hello-user = Hello, { $userName }!');

$bundle->message('hello-user', userName: 'World'); // Hello, World!
```

`FluentBundle` is single-language store of translation resources. It's constructor accepts following arguments:

- `string $locale`: Locale to instantiate locale-specific formatters (eg. en-US, pl, zh-Hant-TW, fr-CA).
- `bool $strict = false`: See [handling errors](#handling-errors).
- `bool $allowOverrides = false`: Allow overriding existing messages and terms.
- `bool $useIsolating = true`:  Specifying whether to use Unicode isolation marks (FSI, PDI) for BiDi interpolations.

#### Adding resources

Translations can be added to bundle using `addResource()` or `addFtl()` methods. The first one accepts `FluentResource` object returned by parser, while the second one accepts a raw FTL string.

```php
addResource(FluentResource $resource, bool $allowOverrides = null): static

addFtl(string $ftl, bool $allowOverrides = null): static
````

If `$allowOverrides` is left null, bundle default will be used.

If bundle is in strict mode, `$ftl` parsing will be also done in strict mode.

#### Formatting messages

```php
message(string $_message, mixed ...$arguments): ?string
```

`message()` method accepts id of a message as a first parameter and message arguments as named parameters. It returns null for missing messages.

```ftl
welcome = Welcome
    .guest = Welcome, Guest
    .user = Welcome, { $userName }
```
```php
$bundle->message('welcome'); // Welcome

$bundle->message('goodbye'); // null
```

For attributes, you may use "dot" notation:

```php
$bundle->message('welcome.guest'); // Welcome, Guest
```

Message arguments may be passed as named arguments or as an associative array:

```php
$bundle->message('welcome.user', userName: 'John'); // Welcome, John
// or
$bundle->message('welcome.user', ['userName' => 'John']); // Welcome, John
```

#### Handling errors

By default, all resolver exceptions are ignored and can be obtained using `popErrors()` method. It returns an array of exceptions and clears exception cache, which means the next time you call it, it will return only new errors.

```php
$bundle->message('welcome.user'); // Welcome, {$userName}

$errors = $bundle->popErrors();

count($errors);           // 1
$errors[0]->getMessage(); // Unknown variable: $userName.
```

All resolver exceptions extend `ResolverException`. In strict mode they would be thrown right away in `message()` call.

## Testing

```shell
# Tests
vendor/bin/pest

# Static analysis
vendor/bin/phpstan analyse
```
