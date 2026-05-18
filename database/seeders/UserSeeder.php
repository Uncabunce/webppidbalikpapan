<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name'     => 'wowok',
            'email'    => 'soloseed67@gmail.com',
            'password' => bcrypt('lopesawit'),
        ]);
    }
}