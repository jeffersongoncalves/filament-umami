---
name: filament-umami-development
description: Build and work with the Filament Umami plugin, including analytics tracking script injection, settings page management, and Umami configuration.
---

# Filament Umami Development

## When to use this skill

Use this skill when:
- Integrating Umami analytics tracking into a Filament panel
- Configuring the Umami settings page (Website ID, host, tracking behavior)
- Disabling the settings page for script-only tracking
- Understanding how the Umami tracking script is injected
- Troubleshooting analytics tracking or settings migration issues

## Architecture

This plugin provides two main features:
1. Automatic Umami tracking script injection into the panel head
2. A Filament Settings Page for managing Umami configuration via the admin UI

### Namespace

```
JeffersonGoncalves\Filament\Umami
```

### Key Classes

| Class | Path | Purpose |
|-------|------|---------|
| `UmamiPlugin` | `src/UmamiPlugin.php` | Plugin class, registers settings page |
| `UmamiServiceProvider` | `src/UmamiServiceProvider.php` | Service provider, injects tracking script |
| `ManageUmamiSettings` | `src/Pages/ManageUmamiSettings.php` | Filament SettingsPage for Umami config |

### Dependencies

| Package | Purpose |
|---------|---------|
| `jeffersongoncalves/laravel-umami` | Core Laravel Umami integration, provides `UmamiSettings` class |
| `filament/spatie-laravel-settings-plugin` | Filament settings page infrastructure |
| `spatie/laravel-settings` | Database-backed settings with type-safe classes |

## Installation

```bash
composer require jeffersongoncalves/filament-umami
```

### Migrations

```bash
# Publish spatie/laravel-settings migration (if not already done)
php artisan vendor:publish --provider="Spatie\LaravelSettings\LaravelSettingsServiceProvider" --tag="migrations"

# Publish Umami settings migration
php artisan vendor:publish --tag=umami-settings-migrations

# Run migrations
php artisan migrate
```

## Configuration

### Register the Plugin

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

### Disable Settings Page

If you only want the tracking script without the admin settings UI:

```php
UmamiPlugin::make()
    ->settingsPage(false),
```

## How It Works

### Plugin Class

```php
namespace JeffersonGoncalves\Filament\Umami;

use Filament\Contracts\Plugin;
use Filament\Panel;
use JeffersonGoncalves\Filament\Umami\Pages\ManageUmamiSettings;

class UmamiPlugin implements Plugin
{
    protected bool $hasSettingsPage = true;

    public function getId(): string
    {
        return 'filament-umami';
    }

    public function register(Panel $panel): void
    {
        if ($this->hasSettingsPage) {
            $panel->pages([
                ManageUmamiSettings::class,
            ]);
        }
    }

    public function boot(Panel $panel): void {}

    public static function make(): static
    {
        return app(static::class);
    }

    public static function get(): static
    {
        $plugin = filament(app(static::class)->getId());
        return $plugin;
    }

    public function settingsPage(bool $condition = true): static
    {
        $this->hasSettingsPage = $condition;
        return $this;
    }
}
```

### Service Provider (Script Injection)

The service provider injects the Umami tracking script into the panel head:

```php
namespace JeffersonGoncalves\Filament\Umami;

use Filament\Support\Facades\FilamentView;
use Filament\View\PanelsRenderHook;
use Illuminate\Contracts\View\View;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class UmamiServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package->name('filament-umami')
            ->hasTranslations();
    }

    public function packageRegistered(): void
    {
        FilamentView::registerRenderHook(
            PanelsRenderHook::HEAD_START,
            fn (): View => view('umami::script')
        );
    }
}
```

Key: The script view comes from the `jeffersongoncalves/laravel-umami` package (`umami::script`), not from this Filament package.

### Settings Page

The `ManageUmamiSettings` page extends Filament's `SettingsPage` and uses `UmamiSettings` from `jeffersongoncalves/laravel-umami`:

```php
namespace JeffersonGoncalves\Filament\Umami\Pages;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Pages\SettingsPage;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use JeffersonGoncalves\Umami\Settings\UmamiSettings;

class ManageUmamiSettings extends SettingsPage
{
    protected static string $settings = UmamiSettings::class;
    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-chart-bar-square';

    public function form(Schema $schema): Schema
    {
        return $schema
            ->columns(null)
            ->schema([
                // Tracking Configuration
                Section::make(/* ... */)
                    ->schema([
                        TextInput::make('website_id')->nullable(),
                        TextInput::make('host_analytics')->url()->required(),
                        TextInput::make('host_url')->url()->nullable(),
                    ])->columns(2),

                // Tracking Behavior
                Section::make(/* ... */)
                    ->schema([
                        Toggle::make('auto_track'),
                        Toggle::make('exclude_search'),
                        Toggle::make('exclude_hash'),
                    ])->columns(2),

                // Advanced Options
                Section::make(/* ... */)
                    ->schema([
                        TextInput::make('domains')->nullable(),
                        TextInput::make('tag')->nullable(),
                    ])->columns(2),
            ]);
    }
}
```

### Settings Fields

| Field | Type | Description |
|-------|------|-------------|
| `website_id` | TextInput | Umami Website ID |
| `host_analytics` | TextInput (URL) | Umami analytics script host URL (required) |
| `host_url` | TextInput (URL) | Umami host URL |
| `auto_track` | Toggle | Enable automatic page view tracking |
| `exclude_search` | Toggle | Exclude search parameters from tracking |
| `exclude_hash` | Toggle | Exclude URL hash from tracking |
| `domains` | TextInput | Comma-separated list of domains to track |
| `tag` | TextInput | Custom tag for the tracking script |

## Retrieving the Plugin Instance

```php
// Get the plugin instance from the current panel
$plugin = UmamiPlugin::get();
```

## Troubleshooting

### Settings Page Not Appearing
**Cause**: Migrations not run or settings page disabled.
**Solution**: Ensure you published and ran both the `spatie/laravel-settings` migration and the `umami-settings-migrations`. Check that `->settingsPage(false)` is not set.

### Tracking Script Not Injected
**Cause**: The `umami::script` view from `laravel-umami` is not available.
**Solution**: Ensure `jeffersongoncalves/laravel-umami` is properly installed. Run `composer dump-autoload` and clear caches.

### Settings Not Saving
**Cause**: The `settings` database table does not exist or the Umami settings migration was not run.
**Solution**: Run `php artisan vendor:publish --tag=umami-settings-migrations` then `php artisan migrate`.

### Analytics Not Tracking
**Cause**: Website ID or Analytics Host not configured.
**Solution**: Navigate to Settings > Umami Analytics in the admin panel and fill in the Website ID and Analytics Host URL from your Umami dashboard.
