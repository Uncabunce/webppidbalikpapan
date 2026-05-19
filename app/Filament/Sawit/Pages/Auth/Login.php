<?php

namespace App\Filament\Admin\Pages\Auth;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Filament\Auth\Pages\Login as BaseLogin;

class Login extends BaseLogin
{
    public function form(Schema $form): Schema
    {
        return $form->schema([
            TextInput::make('name')
                ->label('Username')
                ->required(),
            $this->getPasswordFormComponent(),
            $this->getRememberFormComponent(),
        ]);
    }

    protected function getCredentialsFromFormData(array $data): array
    {
        return [
            'name'     => $data['name'],
            'password' => $data['password'],
        ];
    }
}