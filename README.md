# Tailwind Trumpet

[![Latest Version on Packagist](https://img.shields.io/packagist/v/tobya/tailwind-trumpet.svg?style=flat-square)](https://packagist.org/packages/tobya/tailwind-trumpet)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/tobya/tailwind-trumpet/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/tobya/tailwind-trumpet/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/tobya/tailwind-trumpet/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/tobya/tailwind-trumpet/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/tobya/tailwind-trumpet.svg?style=flat-square)](https://packagist.org/packages/tobya/tailwind-trumpet)

Tailwind Trumpet, Trumpets(!) your hidden tailwind classes.  Expose those hidden css classes used in your php objects so they will always be available in your blades


## Installation

You can install the package via composer:

```bash
composer require tobya/tailwind-trumpet
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="tailwind-trumpet-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="tailwind-trumpet-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="tailwind-trumpet-views"
```

## Usage

```php
$tailwindTrumpet = new Tobya\TailwindTrumpet();
echo $tailwindTrumpet->echoPhrase('Hello, Tobya!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Toby Allen](https://github.com/tobya)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
