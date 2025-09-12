<?php

namespace App\Filament\Resources\Users\Pages;

use Filament\Actions\DeleteAction;
use App\Filament\Resources\Users\UserResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUser extends EditRecord
{
    protected static string $resource = UserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        if (! $data['password']) {
            unset($data['password']);
        }

        return $data;
    }
}
