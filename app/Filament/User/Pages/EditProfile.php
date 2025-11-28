<?php

declare(strict_types=1);

namespace App\Filament\User\Pages;

use Exception;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Schema;

final class EditProfile extends \Filament\Auth\Pages\EditProfile
{
    /**
     * @throws Exception
     */
    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                FileUpload::make('avatar')
                    ->hiddenLabel()
                    ->disk('public')
                    ->directory('profile-photos')
                    ->avatar()
                    ->alignCenter(),
                $this->getNameFormComponent(),
                $this->getEmailFormComponent(),
                $this->getPasswordFormComponent(),
                $this->getPasswordConfirmationFormComponent(),
                $this->getCurrentPasswordFormComponent(),
            ]);
    }
}
