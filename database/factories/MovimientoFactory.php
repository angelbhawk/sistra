<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Producto;
use App\Models\Ubicacion;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class MovimientoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_producto' => Producto::all()->random()->id_producto,
            'id_ubicacion_actual' => Ubicacion::all()->random()->id_ubicacion,
            'fecha_actual' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'id_operador' => User::all()->random()->id_operador
        ];
    }
}
