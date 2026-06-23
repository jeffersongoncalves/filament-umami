<?php

namespace JeffersonGoncalves\Filament\Umami;

use Filament\View\PanelsRenderHook;
use JeffersonGoncalves\FilamentAnalyticsCore\AbstractAnalyticsServiceProvider;

class UmamiServiceProvider extends AbstractAnalyticsServiceProvider
{
    protected function packageName(): string
    {
        return 'filament-umami';
    }

    protected function renderHooks(): array
    {
        return [
            PanelsRenderHook::HEAD_START => 'umami::script',
        ];
    }
}
