<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Administrador',
            'email' => 'admin@test.com',
            'password' => \Illuminate\Support\Facades\Hash::make('password'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'Guardia de Seguridad',
            'email' => 'seguridad@test.com',
            'password' => \Illuminate\Support\Facades\Hash::make('password'),
            'role' => 'seguridad',
        ]);
    }
}
