<?php

use Filament\Facades\Filament;
use Filament\Support\Facades\FilamentView;
use Filament\View\PanelsRenderHook;
use Illuminate\Foundation\Auth\User;
use JeffersonGoncalves\Umami\Settings\UmamiSettings;
use JeffersonGoncalves\Filament\Umami\UmamiPlugin;
use JeffersonGoncalves\Filament\Umami\Pages\ManageUmamiSettings;
use Livewire\Livewire;

beforeEach(function () {
    Filament::setCurrentPanel(Filament::getPanel('test'));
    $this->actingAs((new User)->forceFill(['id' => 1, 'name' => 'Admin', 'email' => 'admin@example.com']));
});

it('registers the settings page on the panel', function () {
    expect(Filament::getPanel('test')->getPages())->toContain(ManageUmamiSettings::class)
        ->and(UmamiPlugin::make()->getId())->toBe('filament-umami');
});

it('ships translated labels', function () {
    expect(ManageUmamiSettings::getNavigationLabel())->not->toContain('::')
        ->and((new ManageUmamiSettings)->getTitle())->not->toContain('::');
});

it('saves the settings from the page', function () {
    Livewire::test(ManageUmamiSettings::class)
        ->fillForm(['website_id' => 'test-website-id'])
        ->call('save')
        ->assertHasNoFormErrors();

    $settings = app(UmamiSettings::class)->refresh();
    expect($settings->website_id)->toBe('test-website-id');
});

it('injects the script into the panel once configured', function () {
    $settings = app(UmamiSettings::class);
    $settings->website_id = 'test-website-id';
    $settings->save();

    $html = (string) FilamentView::renderHook(PanelsRenderHook::HEAD_START)
        .(string) FilamentView::renderHook(PanelsRenderHook::HEAD_END)
        .(string) FilamentView::renderHook(PanelsRenderHook::BODY_START)
        .(string) FilamentView::renderHook(PanelsRenderHook::BODY_END);

    expect($html)->toContain('data-website-id="test-website-id"');
});
