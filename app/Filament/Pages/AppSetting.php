<?php

namespace App\Filament\Pages;

use Filament\Pages\SettingsPage;
use Filament\Schemas\Schema;

class AppSetting extends SettingsPage
{
    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-cog-6-tooth';

    protected static string|\UnitEnum|null $navigationGroup = 'Settings';

    protected static string $settings = \App\Settings\AppSetting::class;

    public function form(Schema $schema): Schema
    {
        return $schema->components([
            // ...
        ]);
    }
}
