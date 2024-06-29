<?php

namespace Database\Factories;

use App\Models\Organizacion;
use App\Models\Ubicacion;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->word(),
            'descripcion' => $this->faker->text(),
            'id_ubicacion_origen' => Ubicacion::all()->random()->id_ubicacion,
            'fecha_origen' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'id_organizacion' => Organizacion::all()->random()->id_organizacion
        ];
    }
}
