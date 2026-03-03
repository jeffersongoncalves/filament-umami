## Filament Umami

A Filament plugin that integrates Umami analytics into your panel. Injects the Umami tracking script and provides a Settings Page to manage tracking configuration directly from the admin panel.

### Installation

@verbatim
<code-snippet name="Install the plugin" lang="bash">
composer require jeffersongoncalves/filament-umami
</code-snippet>
@endverbatim

### Register Plugin

@verbatim
<code-snippet name="Register in PanelProvider" lang="php">
use JeffersonGoncalves\Filament\Umami\UmamiPlugin;

public function panel(Panel $panel): Panel
{
    return $panel
        ->plugins([
            UmamiPlugin::make(),
        ]);
}
</code-snippet>
@endverbatim

### Run Migrations

@verbatim
<code-snippet name="Publish and run settings migrations" lang="bash">
php artisan vendor:publish --provider="Spatie\LaravelSettings\LaravelSettingsServiceProvider" --tag="migrations"
php artisan vendor:publish --tag=umami-settings-migrations
php artisan migrate
</code-snippet>
@endverbatim

### Disable Settings Page

@verbatim
<code-snippet name="Use tracking script only without settings page" lang="php">
UmamiPlugin::make()
    ->settingsPage(false),
</code-snippet>
@endverbatim

### Features
- Automatic Umami tracking script injection via `PanelsRenderHook::HEAD_START`
- Built-in Settings Page (Settings > Umami Analytics) using spatie/laravel-settings
- Configurable: Website ID, Analytics Host, Host URL
- Tracking behavior toggles: Auto Track, Exclude Search Parameters, Exclude Hash
- Advanced options: Domains filter, Custom Tag
- Multi-language translations support
- Optional settings page (can be disabled)

### Dependencies
- `jeffersongoncalves/laravel-umami` - Core Umami integration for Laravel
- `filament/spatie-laravel-settings-plugin` - Settings page support

### Best Practices
- Always run the settings migrations before using the settings page
- Use `->settingsPage(false)` if you only need tracking without the admin UI
- Configure Website ID and Analytics Host in the settings page after installation
