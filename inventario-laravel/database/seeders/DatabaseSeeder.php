<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

/**
 * Seeder principal de la aplicación.
 * Define los datos base que se cargan al inicializar la base de datos.
 */
class DatabaseSeeder extends Seeder
{
    /**
     * Ejecuta la siembra principal de datos de prueba y base del sistema.
     */
    public function run(): void
    {
        User::firstOrCreate(
            ['email' => 'test@example.com'],
            [
                'name' => 'Test User',
                'password' => bcrypt('password'),
            ]
        );

        $this->call(AdminUserSeeder::class);
    }
}
