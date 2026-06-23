<?php

namespace JeffersonGoncalves\Filament\Umami;

use JeffersonGoncalves\Filament\Umami\Pages\ManageUmamiSettings;
use JeffersonGoncalves\FilamentAnalyticsCore\AbstractAnalyticsPlugin;

class UmamiPlugin extends AbstractAnalyticsPlugin
{
    public function getId(): string
    {
        return 'filament-umami';
    }

    protected function getSettingsPageClass(): ?string
    {
        return ManageUmamiSettings::class;
    }
}
