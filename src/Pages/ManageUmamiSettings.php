<?php

namespace JeffersonGoncalves\Filament\Umami\Pages;

use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Pages\SettingsPage;
use JeffersonGoncalves\Umami\Settings\UmamiSettings;

class ManageUmamiSettings extends SettingsPage
{
    protected static string $settings = UmamiSettings::class;

    protected static ?string $navigationIcon = 'heroicon-o-chart-bar-square';

    protected static ?string $navigationGroup = 'Settings';

    public static function getNavigationLabel(): string
    {
        return __('filament-umami::pages.navigation_label');
    }

    public function getTitle(): string
    {
        return __('filament-umami::pages.title');
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make(__('filament-umami::pages.sections.tracking_configuration.heading'))
                    ->description(__('filament-umami::pages.sections.tracking_configuration.description'))
                    ->schema([
                        TextInput::make('website_id')
                            ->label(__('filament-umami::pages.fields.website_id.label'))
                            ->helperText(__('filament-umami::pages.fields.website_id.helper'))
                            ->nullable(),

                        TextInput::make('host_analytics')
                            ->label(__('filament-umami::pages.fields.host_analytics.label'))
                            ->helperText(__('filament-umami::pages.fields.host_analytics.helper'))
                            ->url()
                            ->required(),

                        TextInput::make('host_url')
                            ->label(__('filament-umami::pages.fields.host_url.label'))
                            ->helperText(__('filament-umami::pages.fields.host_url.helper'))
                            ->url()
                            ->nullable(),
                    ])->columns(2),

                Section::make(__('filament-umami::pages.sections.tracking_behavior.heading'))
                    ->description(__('filament-umami::pages.sections.tracking_behavior.description'))
                    ->schema([
                        Toggle::make('auto_track')
                            ->label(__('filament-umami::pages.fields.auto_track.label'))
                            ->helperText(__('filament-umami::pages.fields.auto_track.helper')),

                        Toggle::make('exclude_search')
                            ->label(__('filament-umami::pages.fields.exclude_search.label'))
                            ->helperText(__('filament-umami::pages.fields.exclude_search.helper')),

                        Toggle::make('exclude_hash')
                            ->label(__('filament-umami::pages.fields.exclude_hash.label'))
                            ->helperText(__('filament-umami::pages.fields.exclude_hash.helper')),
                    ])->columns(2),

                Section::make(__('filament-umami::pages.sections.advanced_options.heading'))
                    ->description(__('filament-umami::pages.sections.advanced_options.description'))
                    ->schema([
                        TextInput::make('domains')
                            ->label(__('filament-umami::pages.fields.domains.label'))
                            ->helperText(__('filament-umami::pages.fields.domains.helper'))
                            ->nullable(),

                        TextInput::make('tag')
                            ->label(__('filament-umami::pages.fields.tag.label'))
                            ->helperText(__('filament-umami::pages.fields.tag.helper'))
                            ->nullable(),
                    ])->columns(2),
            ]);
    }
}
