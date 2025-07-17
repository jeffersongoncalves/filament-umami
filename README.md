<div class="filament-hidden">

![Filament Umami](https://raw.githubusercontent.com/jeffersongoncalves/filament-umami/master/art/jeffersongoncalves-filament-umami.png)

</div>

# Filament Umami

[![Latest Version on Packagist](https://img.shields.io/packagist/v/jeffersongoncalves/filament-umami.svg?style=flat-square)](https://packagist.org/packages/jeffersongoncalves/filament-umami)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/jeffersongoncalves/filament-umami/fix-php-code-style-issues.yml?branch=master&label=code%20style&style=flat-square)](https://github.com/jeffersongoncalves/filament-umami/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/jeffersongoncalves/filament-umami.svg?style=flat-square)](https://packagist.org/packages/jeffersongoncalves/filament-umami)

This Filament package seamlessly integrates Umami analytics into your Blade templates. Easily track website visits and user engagement directly within your Laravel application, providing valuable insights into your website's performance. This package simplifies the integration process, saving you time and effort. With minimal configuration, you can leverage Umami's powerful analytics features to gain a clearer understanding of your audience and website usage.

## Installation

You can install the package via composer:

```bash
composer require jeffersongoncalves/filament-umami
```

This package depends on [jeffersongoncalves/laravel-umami](https://github.com/jeffersongoncalves/laravel-umami) which provides the core Umami analytics integration for Laravel applications.

## Requirements

- PHP 8.2 or higher
- Laravel 11.0 or 12.0
- Filament 4.0 or higher

## Usage

Publish config file.

```bash
php artisan vendor:publish --tag=umami-config
```

Add head template.

```php
@include('umami::script')
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Jèfferson Gonçalves](https://github.com/jeffersongoncalves)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
