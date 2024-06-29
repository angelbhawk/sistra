<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(5)->create();
        \App\Models\Ubicacion::factory(10)->create();
        \App\Models\Organizacion::factory(10)->create();
        \App\Models\Producto::factory(100)->create();
        \App\Models\Movimiento::factory(200)->create();

        \App\Models\User::factory()->create([
            'nombre' => 'Miguel Angel',
            'email' => 'contacto@angelbhawk.dev',
        ]);
    }
}
