<?php

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

    public function boot(Panel $panel): void
    {
        //
    }

    public static function make(): static
    {
        return app(static::class);
    }

    public static function get(): static
    {
        /** @var static $plugin */
        $plugin = filament(app(static::class)->getId());

        return $plugin;
    }

    public function settingsPage(bool $condition = true): static
    {
        $this->hasSettingsPage = $condition;

        return $this;
    }
}
