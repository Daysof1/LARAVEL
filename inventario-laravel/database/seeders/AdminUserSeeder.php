<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

/**
 * Seeder para crear los usuarios administrativos iniciales del sistema.
 */
class AdminUserSeeder extends Seeder
{
    /**
     * Ejecuta la siembra de usuarios admin y coordinador con credenciales base.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Admin',
                'email' => 'admin@example.com',
                'password' => Hash::make('admin123'),
                'role' => 'admin',
            ],
            [
                'name' => 'Coordinador',
                'email' => 'coordinador@example.com',
                'password' => Hash::make('coordinador123'),
                'role' => 'coordinador',
            ],
        ];

        foreach ($users as $userData) {
            User::firstOrCreate(
                ['email' => $userData['email']],
                [
                    'name' => $userData['name'],
                    'password' => $userData['password'],
                    'role' => $userData['role'],
                ]
            );
        }
    }
}
