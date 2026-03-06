<div class="filament-hidden">

![Filament Umami](https://raw.githubusercontent.com/jeffersongoncalves/filament-umami/3.x/art/jeffersongoncalves-filament-umami.png)

</div>

# Filament Umami

[![Latest Version on Packagist](https://img.shields.io/packagist/v/jeffersongoncalves/filament-umami.svg?style=flat-square)](https://packagist.org/packages/jeffersongoncalves/filament-umami)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/jeffersongoncalves/filament-umami/fix-php-code-style-issues.yml?branch=3.x&label=code%20style&style=flat-square)](https://github.com/jeffersongoncalves/filament-umami/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3A3.x)
[![Total Downloads](https://img.shields.io/packagist/dt/jeffersongoncalves/filament-umami.svg?style=flat-square)](https://packagist.org/packages/jeffersongoncalves/filament-umami)
[![License](https://img.shields.io/packagist/l/jeffersongoncalves/filament-umami.svg?style=flat-square)](LICENSE.md)

This Filament package seamlessly integrates Umami analytics into your Blade templates. Easily track website visits and user engagement directly within your Laravel application, providing valuable insights into your website's performance. This package simplifies the integration process, saving you time and effort. With minimal configuration, you can leverage Umami's powerful analytics features to gain a clearer understanding of your audience and website usage.

## Installation

You can install the package via composer:

```bash
composer require jeffersongoncalves/filament-umami
```

This package depends on [jeffersongoncalves/laravel-umami](https://github.com/jeffersongoncalves/laravel-umami) which provides the core Umami analytics integration for Laravel applications.

## Requirements

- PHP 8.2 or higher
- Laravel 11.0 or higher
- Filament 5.0

## Usage

### 1. Register the Plugin

Add the plugin to your `PanelProvider`:

```php
use JeffersonGoncalves\Filament\Umami\UmamiPlugin;

public function panel(Panel $panel): Panel
{
    return $panel
        ->plugins([
            UmamiPlugin::make(),
        ]);
}
```

This will automatically:
- Inject the Umami tracking script into your panel
- Add a **Settings Page** to manage your Umami configuration

### 2. Run Settings Migration

If you haven't already, publish the `spatie/laravel-settings` migration to create the `settings` table:

```bash
php artisan vendor:publish --provider="Spatie\LaravelSettings\LaravelSettingsServiceProvider" --tag="migrations"
```

Then publish and run the Umami settings migration:

```bash
php artisan vendor:publish --tag=umami-settings-migrations
php artisan migrate
```

### 3. Manage Settings

Navigate to **Settings > Umami Analytics** in your Filament panel to configure:

- **Tracking Configuration** - Website ID, Analytics Host, Host URL
- **Tracking Behavior** - Auto Track, Exclude Search Parameters, Exclude Hash
- **Advanced Options** - Domains filter, Custom Tag

### Disabling the Settings Page

If you only want the tracking script injection without the settings page:

```php
UmamiPlugin::make()
    ->settingsPage(false),
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
