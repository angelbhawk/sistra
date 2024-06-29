<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class UbicacionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre_ubicacion' => $this->faker->streetName(),
            'direccion' => $this->faker->streetAddress(),
            'ciudad' => $this->faker->city(),
            'pais' => $this->faker->country(),
            'latitud' => $this->faker->latitude(),
            'longitud' => $this->faker->longitude()
        ];
    }
}
