<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Super Admin',
            'email' => 'superadmin@example.com',
            'role' => User::ROLE_SUPERADMIN,
        ]);

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'role' => User::ROLE_ADMIN,
        ]);

        User::factory()->create([
            'name' => 'Relecteur',
            'email' => 'relecteur@example.com',
            'role' => User::ROLE_REDACELEC,
        ]);

        User::factory()->create([
            'name' => 'Utilisateur',
            'email' => 'utilisateur@example.com',
            'role' => User::ROLE_STUDENT,
        ]);

        User::factory(10)->create(); // 10 utilisateurs aléatoires (étudiants)
    }
}
