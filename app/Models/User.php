<?php

namespace App\Models;

use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Filament\Models\Contracts\FilamentUser;  // tambah ini
use Filament\Panel;                           // tambah ini

#[Fillable(['name', 'email', 'password'])]
#[Hidden(['password', 'remember_token'])]
class User extends Authenticatable implements FilamentUser  // tambah implements
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable;

    // Tambah method ini
    public function canAccessPanel(Panel $panel): bool
    {
        return true;
    }
}