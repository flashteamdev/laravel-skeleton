<?php

namespace App\Filament\Resources\Blog\Categories\Pages;

use Filament\Actions\ImportAction;
use Filament\Actions\CreateAction;
use App\Filament\Imports\Blog\CategoryImporter;
use App\Filament\Resources\Blog\Categories\CategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageCategories extends ManageRecords
{
    protected static string $resource = CategoryResource::class;

    protected function getActions(): array
    {
        return [
            ImportAction::make()
                ->importer(CategoryImporter::class),
            CreateAction::make(),
        ];
    }
}
